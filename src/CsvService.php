<?php

namespace Pymyoswe\Csv;

class CsvService
{
	public function csv_to_array($CSVFile)
	{
		if (! file_exists($CSVFile) || ! is_readable($CSVFile))
		    return false;

		$header = null;
		$data = [];

		if (($handle = fopen($CSVFile,'r')) !== false) {
		    while (($row = fgetcsv($handle, 1000, ',')) !== false) {
		        if (! $header)
		            $header = $row;
		        else
		            $data[] = array_combine($header, $row);
		        }
		    fclose($handle);
		}

		return $data;
	}

	public function array_to_csv($data)
	{
		$file_name = time().".csv";

		$file = fopen(public_path('files/'.$file_name),'w');

        foreach ($data as $line)
        {
            fputcsv($file,explode(',',$line));
        }

       	fclose($file);

       	return public_path('files/'.$file_name);
	}
}