<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreateDataExportOrderRequest\pluginParam;

use AlibabaCloud\Dara\Model;

class watermark extends Model
{
    /**
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
        'columnName' => 'ColumnName',
        'dataWatermark' => 'DataWatermark',
        'fileWatermark' => 'FileWatermark',
        'keys' => 'Keys',
        'watermarkTypes' => 'WatermarkTypes',
    ];

    public function validate()
    {
        if (\is_array($this->keys)) {
            Model::validateArray($this->keys);
        }
        if (\is_array($this->watermarkTypes)) {
            Model::validateArray($this->watermarkTypes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->keys)) {
                $res['Keys'] = [];
                $n1 = 0;
                foreach ($this->keys as $item1) {
                    $res['Keys'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->watermarkTypes) {
            if (\is_array($this->watermarkTypes)) {
                $res['WatermarkTypes'] = [];
                $n1 = 0;
                foreach ($this->watermarkTypes as $item1) {
                    $res['WatermarkTypes'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $model->keys = [];
                $n1 = 0;
                foreach ($map['Keys'] as $item1) {
                    $model->keys[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['WatermarkTypes'])) {
            if (!empty($map['WatermarkTypes'])) {
                $model->watermarkTypes = [];
                $n1 = 0;
                foreach ($map['WatermarkTypes'] as $item1) {
                    $model->watermarkTypes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
