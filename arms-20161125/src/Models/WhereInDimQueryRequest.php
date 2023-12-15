<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20161125\Models;

use AlibabaCloud\SDK\ARMS\V20161125\Models\WhereInDimQueryRequest\dimensions;
use AlibabaCloud\Tea\Model;

class WhereInDimQueryRequest extends Model
{
    /**
     * @var int
     */
    public $datasetId;

    /**
     * @var string
     */
    public $dateStr;

    /**
     * @var dimensions[]
     */
    public $dimensions;

    /**
     * @var int
     */
    public $intervalInSec;

    /**
     * @var bool
     */
    public $isDrillDown;

    /**
     * @var int
     */
    public $limit;

    /**
     * @var int
     */
    public $maxTime;

    /**
     * @var string[]
     */
    public $measures;

    /**
     * @var int
     */
    public $minTime;

    /**
     * @var string
     */
    public $orderByKey;

    /**
     * @var bool
     */
    public $reduceTail;

    /**
     * @var string
     */
    public $whereInKey;

    /**
     * @var string[]
     */
    public $whereInValues;
    protected $_name = [
        'datasetId'     => 'DatasetId',
        'dateStr'       => 'DateStr',
        'dimensions'    => 'Dimensions',
        'intervalInSec' => 'IntervalInSec',
        'isDrillDown'   => 'IsDrillDown',
        'limit'         => 'Limit',
        'maxTime'       => 'MaxTime',
        'measures'      => 'Measures',
        'minTime'       => 'MinTime',
        'orderByKey'    => 'OrderByKey',
        'reduceTail'    => 'ReduceTail',
        'whereInKey'    => 'WhereInKey',
        'whereInValues' => 'WhereInValues',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->datasetId) {
            $res['DatasetId'] = $this->datasetId;
        }
        if (null !== $this->dateStr) {
            $res['DateStr'] = $this->dateStr;
        }
        if (null !== $this->dimensions) {
            $res['Dimensions'] = [];
            if (null !== $this->dimensions && \is_array($this->dimensions)) {
                $n = 0;
                foreach ($this->dimensions as $item) {
                    $res['Dimensions'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->intervalInSec) {
            $res['IntervalInSec'] = $this->intervalInSec;
        }
        if (null !== $this->isDrillDown) {
            $res['IsDrillDown'] = $this->isDrillDown;
        }
        if (null !== $this->limit) {
            $res['Limit'] = $this->limit;
        }
        if (null !== $this->maxTime) {
            $res['MaxTime'] = $this->maxTime;
        }
        if (null !== $this->measures) {
            $res['Measures'] = $this->measures;
        }
        if (null !== $this->minTime) {
            $res['MinTime'] = $this->minTime;
        }
        if (null !== $this->orderByKey) {
            $res['OrderByKey'] = $this->orderByKey;
        }
        if (null !== $this->reduceTail) {
            $res['ReduceTail'] = $this->reduceTail;
        }
        if (null !== $this->whereInKey) {
            $res['WhereInKey'] = $this->whereInKey;
        }
        if (null !== $this->whereInValues) {
            $res['WhereInValues'] = $this->whereInValues;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return WhereInDimQueryRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DatasetId'])) {
            $model->datasetId = $map['DatasetId'];
        }
        if (isset($map['DateStr'])) {
            $model->dateStr = $map['DateStr'];
        }
        if (isset($map['Dimensions'])) {
            if (!empty($map['Dimensions'])) {
                $model->dimensions = [];
                $n                 = 0;
                foreach ($map['Dimensions'] as $item) {
                    $model->dimensions[$n++] = null !== $item ? dimensions::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['IntervalInSec'])) {
            $model->intervalInSec = $map['IntervalInSec'];
        }
        if (isset($map['IsDrillDown'])) {
            $model->isDrillDown = $map['IsDrillDown'];
        }
        if (isset($map['Limit'])) {
            $model->limit = $map['Limit'];
        }
        if (isset($map['MaxTime'])) {
            $model->maxTime = $map['MaxTime'];
        }
        if (isset($map['Measures'])) {
            if (!empty($map['Measures'])) {
                $model->measures = $map['Measures'];
            }
        }
        if (isset($map['MinTime'])) {
            $model->minTime = $map['MinTime'];
        }
        if (isset($map['OrderByKey'])) {
            $model->orderByKey = $map['OrderByKey'];
        }
        if (isset($map['ReduceTail'])) {
            $model->reduceTail = $map['ReduceTail'];
        }
        if (isset($map['WhereInKey'])) {
            $model->whereInKey = $map['WhereInKey'];
        }
        if (isset($map['WhereInValues'])) {
            if (!empty($map['WhereInValues'])) {
                $model->whereInValues = $map['WhereInValues'];
            }
        }

        return $model;
    }
}
