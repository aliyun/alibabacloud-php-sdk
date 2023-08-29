<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DataLake\V20200710\Models;

use AlibabaCloud\Tea\Model;

class ColumnStatistics extends Model
{
    /**
     * @var ColumnStatisticsDesc
     */
    public $columnStatisticsDesc;

    /**
     * @var ColumnStatisticsObj[]
     */
    public $columnStatisticsObjList;

    /**
     * @var string
     */
    public $engine;

    /**
     * @var bool
     */
    public $isStatsCompliant;
    protected $_name = [
        'columnStatisticsDesc'    => 'ColumnStatisticsDesc',
        'columnStatisticsObjList' => 'ColumnStatisticsObjList',
        'engine'                  => 'Engine',
        'isStatsCompliant'        => 'IsStatsCompliant',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->columnStatisticsDesc) {
            $res['ColumnStatisticsDesc'] = null !== $this->columnStatisticsDesc ? $this->columnStatisticsDesc->toMap() : null;
        }
        if (null !== $this->columnStatisticsObjList) {
            $res['ColumnStatisticsObjList'] = [];
            if (null !== $this->columnStatisticsObjList && \is_array($this->columnStatisticsObjList)) {
                $n = 0;
                foreach ($this->columnStatisticsObjList as $item) {
                    $res['ColumnStatisticsObjList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }
        if (null !== $this->isStatsCompliant) {
            $res['IsStatsCompliant'] = $this->isStatsCompliant;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ColumnStatistics
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ColumnStatisticsDesc'])) {
            $model->columnStatisticsDesc = ColumnStatisticsDesc::fromMap($map['ColumnStatisticsDesc']);
        }
        if (isset($map['ColumnStatisticsObjList'])) {
            if (!empty($map['ColumnStatisticsObjList'])) {
                $model->columnStatisticsObjList = [];
                $n                              = 0;
                foreach ($map['ColumnStatisticsObjList'] as $item) {
                    $model->columnStatisticsObjList[$n++] = null !== $item ? ColumnStatisticsObj::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }
        if (isset($map['IsStatsCompliant'])) {
            $model->isStatsCompliant = $map['IsStatsCompliant'];
        }

        return $model;
    }
}
