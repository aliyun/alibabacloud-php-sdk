<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20161031\Models;

use AlibabaCloud\SDK\ARMS\V20161031\Models\ARMSQueryDataSetRequest\dimensions;
use AlibabaCloud\Tea\Model;

class ARMSQueryDataSetRequest extends Model
{
    /**
     * @var int
     */
    public $datasetId;

    /**
     * @var int
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
    public $isDetail;

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
    protected $_name = [
        'datasetId'     => 'DatasetId',
        'dateStr'       => 'DateStr',
        'dimensions'    => 'Dimensions',
        'intervalInSec' => 'IntervalInSec',
        'isDetail'      => 'IsDetail',
        'maxTime'       => 'MaxTime',
        'measures'      => 'Measures',
        'minTime'       => 'MinTime',
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
        if (null !== $this->isDetail) {
            $res['IsDetail'] = $this->isDetail;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ARMSQueryDataSetRequest
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
        if (isset($map['IsDetail'])) {
            $model->isDetail = $map['IsDetail'];
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

        return $model;
    }
}
