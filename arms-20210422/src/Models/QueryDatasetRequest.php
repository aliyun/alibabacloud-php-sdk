<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20210422\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ARMS\V20210422\Models\QueryDatasetRequest\dimensions;
use AlibabaCloud\SDK\ARMS\V20210422\Models\QueryDatasetRequest\optionalDims;
use AlibabaCloud\SDK\ARMS\V20210422\Models\QueryDatasetRequest\requiredDims;

class QueryDatasetRequest extends Model
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
     * @var bool
     */
    public $hungryMode;

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
     * @var optionalDims[]
     */
    public $optionalDims;

    /**
     * @var string
     */
    public $orderByKey;

    /**
     * @var string
     */
    public $proxyUserId;

    /**
     * @var bool
     */
    public $reduceTail;

    /**
     * @var requiredDims[]
     */
    public $requiredDims;
    protected $_name = [
        'datasetId' => 'DatasetId',
        'dateStr' => 'DateStr',
        'dimensions' => 'Dimensions',
        'hungryMode' => 'HungryMode',
        'intervalInSec' => 'IntervalInSec',
        'isDrillDown' => 'IsDrillDown',
        'limit' => 'Limit',
        'maxTime' => 'MaxTime',
        'measures' => 'Measures',
        'minTime' => 'MinTime',
        'optionalDims' => 'OptionalDims',
        'orderByKey' => 'OrderByKey',
        'proxyUserId' => 'ProxyUserId',
        'reduceTail' => 'ReduceTail',
        'requiredDims' => 'RequiredDims',
    ];

    public function validate()
    {
        if (\is_array($this->dimensions)) {
            Model::validateArray($this->dimensions);
        }
        if (\is_array($this->measures)) {
            Model::validateArray($this->measures);
        }
        if (\is_array($this->optionalDims)) {
            Model::validateArray($this->optionalDims);
        }
        if (\is_array($this->requiredDims)) {
            Model::validateArray($this->requiredDims);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->datasetId) {
            $res['DatasetId'] = $this->datasetId;
        }

        if (null !== $this->dateStr) {
            $res['DateStr'] = $this->dateStr;
        }

        if (null !== $this->dimensions) {
            if (\is_array($this->dimensions)) {
                $res['Dimensions'] = [];
                $n1 = 0;
                foreach ($this->dimensions as $item1) {
                    $res['Dimensions'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->hungryMode) {
            $res['HungryMode'] = $this->hungryMode;
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
            if (\is_array($this->measures)) {
                $res['Measures'] = [];
                $n1 = 0;
                foreach ($this->measures as $item1) {
                    $res['Measures'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->minTime) {
            $res['MinTime'] = $this->minTime;
        }

        if (null !== $this->optionalDims) {
            if (\is_array($this->optionalDims)) {
                $res['OptionalDims'] = [];
                $n1 = 0;
                foreach ($this->optionalDims as $item1) {
                    $res['OptionalDims'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->orderByKey) {
            $res['OrderByKey'] = $this->orderByKey;
        }

        if (null !== $this->proxyUserId) {
            $res['ProxyUserId'] = $this->proxyUserId;
        }

        if (null !== $this->reduceTail) {
            $res['ReduceTail'] = $this->reduceTail;
        }

        if (null !== $this->requiredDims) {
            if (\is_array($this->requiredDims)) {
                $res['RequiredDims'] = [];
                $n1 = 0;
                foreach ($this->requiredDims as $item1) {
                    $res['RequiredDims'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['DatasetId'])) {
            $model->datasetId = $map['DatasetId'];
        }

        if (isset($map['DateStr'])) {
            $model->dateStr = $map['DateStr'];
        }

        if (isset($map['Dimensions'])) {
            if (!empty($map['Dimensions'])) {
                $model->dimensions = [];
                $n1 = 0;
                foreach ($map['Dimensions'] as $item1) {
                    $model->dimensions[$n1] = dimensions::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['HungryMode'])) {
            $model->hungryMode = $map['HungryMode'];
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
                $model->measures = [];
                $n1 = 0;
                foreach ($map['Measures'] as $item1) {
                    $model->measures[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['MinTime'])) {
            $model->minTime = $map['MinTime'];
        }

        if (isset($map['OptionalDims'])) {
            if (!empty($map['OptionalDims'])) {
                $model->optionalDims = [];
                $n1 = 0;
                foreach ($map['OptionalDims'] as $item1) {
                    $model->optionalDims[$n1] = optionalDims::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['OrderByKey'])) {
            $model->orderByKey = $map['OrderByKey'];
        }

        if (isset($map['ProxyUserId'])) {
            $model->proxyUserId = $map['ProxyUserId'];
        }

        if (isset($map['ReduceTail'])) {
            $model->reduceTail = $map['ReduceTail'];
        }

        if (isset($map['RequiredDims'])) {
            if (!empty($map['RequiredDims'])) {
                $model->requiredDims = [];
                $n1 = 0;
                foreach ($map['RequiredDims'] as $item1) {
                    $model->requiredDims[$n1] = requiredDims::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
