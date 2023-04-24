<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreateDataExportOrderRequest\pluginParam;

use AlibabaCloud\Tea\Model;

class watermark extends Model
{
    /**
     * @example user_number
     *
     * @var string
     */
    public $columnName;

    /**
     * @var string
     */
    public $dataWatermark;

    /**
     * @var string
     */
    public $fileWatermark;

    /**
     * @var string[]
     */
    public $keys;

    /**
     * @var string[]
     */
    public $watermarkTypes;
    protected $_name = [
        'columnName'     => 'ColumnName',
        'dataWatermark'  => 'DataWatermark',
        'fileWatermark'  => 'FileWatermark',
        'keys'           => 'Keys',
        'watermarkTypes' => 'WatermarkTypes',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->columnName) {
            $res['ColumnName'] = $this->columnName;
        }
        if (null !== $this->dataWatermark) {
            $res['DataWatermark'] = $this->dataWatermark;
        }
        if (null !== $this->fileWatermark) {
            $res['FileWatermark'] = $this->fileWatermark;
        }
        if (null !== $this->keys) {
            $res['Keys'] = $this->keys;
        }
        if (null !== $this->watermarkTypes) {
            $res['WatermarkTypes'] = $this->watermarkTypes;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return watermark
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ColumnName'])) {
            $model->columnName = $map['ColumnName'];
        }
        if (isset($map['DataWatermark'])) {
            $model->dataWatermark = $map['DataWatermark'];
        }
        if (isset($map['FileWatermark'])) {
            $model->fileWatermark = $map['FileWatermark'];
        }
        if (isset($map['Keys'])) {
            if (!empty($map['Keys'])) {
                $model->keys = $map['Keys'];
            }
        }
        if (isset($map['WatermarkTypes'])) {
            if (!empty($map['WatermarkTypes'])) {
                $model->watermarkTypes = $map['WatermarkTypes'];
            }
        }

        return $model;
    }
}
