<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ess\V20220222\Models\DescribeEciScalingConfigurationsResponseBody\scalingConfigurations;

class DescribeEciScalingConfigurationsResponseBody extends Model
{
    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var scalingConfigurations[]
     */
    public $scalingConfigurations;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'requestId' => 'RequestId',
        'scalingConfigurations' => 'ScalingConfigurations',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->scalingConfigurations)) {
            Model::validateArray($this->scalingConfigurations);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->scalingConfigurations) {
            if (\is_array($this->scalingConfigurations)) {
                $res['ScalingConfigurations'] = [];
                $n1 = 0;
                foreach ($this->scalingConfigurations as $item1) {
                    $res['ScalingConfigurations'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['ScalingConfigurations'])) {
            if (!empty($map['ScalingConfigurations'])) {
                $model->scalingConfigurations = [];
                $n1 = 0;
                foreach ($map['ScalingConfigurations'] as $item1) {
                    $model->scalingConfigurations[$n1++] = scalingConfigurations::fromMap($item1);
                }
            }
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
