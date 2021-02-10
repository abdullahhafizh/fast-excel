<?php

namespace AbdullahHafizh\FastExcel\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Class FastExcel.
 *
 * @method static \AbdullahHafizh\FastExcel\FastExcel data($data)
 * @method static \Illuminate\Support\Collection import($path, callable $callback = null)
 * @method static string export($path, callable $callback = null)
 * @method static \Illuminate\Support\Collection importSheets($path, callable $callback = null)
 * @method static \AbdullahHafizh\FastExcel\FastExcel configureCsv($delimiter = ',', $enclosure = '"', $eol = "\n", $encoding = 'UTF-8', $bom = false)
 * @method static \AbdullahHafizh\FastExcel\FastExcel configureReaderUsing(?callable $callback = null)
 * @method static \AbdullahHafizh\FastExcel\FastExcel configureWriterUsing(?callable $callback = null)
 *
 * @see \AbdullahHafizh\FastExcel\FastExcel
 */
class FastExcel extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'fastexcel';
    }
}
