<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\SDK\ARMS\V20190808\Models\QueryDatasetRequest\dimensions;
use AlibabaCloud\SDK\ARMS\V20190808\Models\QueryDatasetRequest\optionalDims;
use AlibabaCloud\SDK\ARMS\V20190808\Models\QueryDatasetRequest\requiredDims;
use AlibabaCloud\Tea\Model;

class QueryDatasetRequest extends Model
{
    /**
     * @var int
     */
    public $datasetId;

    /**
     * @var int
     */
    public $intervalInSec;

    /**
     * @var string
     */
    public $dateStr;

    /**
     * @var int
     */
    public $minTime;

    /**
     * @var int
     */
    public $maxTime;

    /**
     * @var bool
     */
    public $isDrillDown;

    /**
     * @var string
     */
    public $orderByKey;

    /**
     * @var int
     */
    public $limit;

    /**
     * @var bool
     */
    public $reduceTail;

    /**
     * @var bool
     */
    public $hungryMode;

    /**
     * @var string
     */
    public $proxyUserId;

    /**
     * @var string[]
     */
    public $measures;

    /**
     * @var dimensions[]
     */
    public $dimensions;

    /**
     * @var requiredDims[]
     */
    public $requiredDims;

    /**
     * @var optionalDims[]
     */
    public $optionalDims;
    protected $_name = [
        'datasetId'     => 'DatasetId',
        'intervalInSec' => 'IntervalInSec',
        'dateStr'       => 'DateStr',
        'minTime'       => 'MinTime',
        'maxTime'       => 'MaxTime',
        'isDrillDown'   => 'IsDrillDown',
        'orderByKey'    => 'OrderByKey',
        'limit'         => 'Limit',
        'reduceTail'    => 'ReduceTail',
        'hungryMode'    => 'HungryMode',
        'proxyUserId'   => 'ProxyUserId',
        'measures'      => 'Measures',
        'dimensions'    => 'Dimensions',
        'requiredDims'  => 'RequiredDims',
        'optionalDims'  => 'OptionalDims',
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
        if (null !== $this->intervalInSec) {
            $res['IntervalInSec'] = $this->intervalInSec;
        }
        if (null !== $this->dateStr) {
            $res['DateStr'] = $this->dateStr;
        }
        if (null !== $this->minTime) {
            $res['MinTime'] = $this->minTime;
        }
        if (null !== $this->maxTime) {
            $res['MaxTime'] = $this->maxTime;
        }
        if (null !== $this->isDrillDown) {
            $res['IsDrillDown'] = $this->isDrillDown;
        }
        if (null !== $this->orderByKey) {
            $res['OrderByKey'] = $this->orderByKey;
        }
        if (null !== $this->limit) {
            $res['Limit'] = $this->limit;
        }
        if (null !== $this->reduceTail) {
            $res['ReduceTail'] = $this->reduceTail;
        }
        if (null !== $this->hungryMode) {
            $res['HungryMode'] = $this->hungryMode;
        }
        if (null !== $this->proxyUserId) {
            $res['ProxyUserId'] = $this->proxyUserId;
        }
        if (null !== $this->measures) {
            $res['Measures'] = $this->measures;
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
        if (null !== $this->requiredDims) {
            $res['RequiredDims'] = [];
            if (null !== $this->requiredDims && \is_array($this->requiredDims)) {
                $n = 0;
                foreach ($this->requiredDims as $item) {
                    $res['RequiredDims'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->optionalDims) {
            $res['OptionalDims'] = [];
            if (null !== $this->optionalDims && \is_array($this->optionalDims)) {
                $n = 0;
                foreach ($this->optionalDims as $item) {
                    $res['OptionalDims'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryDatasetRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DatasetId'])) {
            $model->datasetId = $map['DatasetId'];
        }
        if (isset($map['IntervalInSec'])) {
            $model->intervalInSec = $map['IntervalInSec'];
        }
        if (isset($map['DateStr'])) {
            $model->dateStr = $map['DateStr'];
        }
        if (isset($map['MinTime'])) {
            $model->minTime = $map['MinTime'];
        }
        if (isset($map['MaxTime'])) {
            $model->maxTime = $map['MaxTime'];
        }
        if (isset($map['IsDrillDown'])) {
            $model->isDrillDown = $map['IsDrillDown'];
        }
        if (isset($map['OrderByKey'])) {
            $model->orderByKey = $map['OrderByKey'];
        }
        if (isset($map['Limit'])) {
            $model->limit = $map['Limit'];
        }
        if (isset($map['ReduceTail'])) {
            $model->reduceTail = $map['ReduceTail'];
        }
        if (isset($map['HungryMode'])) {
            $model->hungryMode = $map['HungryMode'];
        }
        if (isset($map['ProxyUserId'])) {
            $model->proxyUserId = $map['ProxyUserId'];
        }
        if (isset($map['Measures'])) {
            if (!empty($map['Measures'])) {
                $model->measures = $map['Measures'];
            }
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
        if (isset($map['RequiredDims'])) {
            if (!empty($map['RequiredDims'])) {
                $model->requiredDims = [];
                $n                   = 0;
                foreach ($map['RequiredDims'] as $item) {
                    $model->requiredDims[$n++] = null !== $item ? requiredDims::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['OptionalDims'])) {
            if (!empty($map['OptionalDims'])) {
                $model->optionalDims = [];
                $n                   = 0;
                foreach ($map['OptionalDims'] as $item) {
                    $model->optionalDims[$n++] = null !== $item ? optionalDims::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
