<?php

use AbdullahHafizh\FastExcel\SheetCollection;

if (!function_exists('fastexcel')) {
    /**
     * Return app instance of FastExcel.
     *
     * @return AbdullahHafizh\FastExcel\FastExcel
     */
    function fastexcel($data = null)
    {
        if ($data instanceof SheetCollection) {
            return app()->make('fastexcel')->data($data);
        }

        if (is_object($data) && method_exists($data, 'toArray')) {
            $data = $data->toArray();
        }

        return $data === null ? app()->make('fastexcel') : app()->makeWith('fastexcel', $data);
    }
}
