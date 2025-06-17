<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeNetworkFlowTopNMetricResponseBody\networkFlowTopNValues;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeNetworkFlowTopNMetricResponseBody\topNMetaData;

class DescribeNetworkFlowTopNMetricResponseBody extends Model
{
    /**
     * @var networkFlowTopNValues[]
     */
    public $networkFlowTopNValues;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var topNMetaData
     */
    public $topNMetaData;
    protected $_name = [
        'networkFlowTopNValues' => 'NetworkFlowTopNValues',
        'requestId' => 'RequestId',
        'topNMetaData' => 'TopNMetaData',
    ];

    public function validate()
    {
        if (\is_array($this->networkFlowTopNValues)) {
            Model::validateArray($this->networkFlowTopNValues);
        }
        if (null !== $this->topNMetaData) {
            $this->topNMetaData->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->networkFlowTopNValues) {
            if (\is_array($this->networkFlowTopNValues)) {
                $res['NetworkFlowTopNValues'] = [];
                $n1 = 0;
                foreach ($this->networkFlowTopNValues as $item1) {
                    $res['NetworkFlowTopNValues'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->topNMetaData) {
            $res['TopNMetaData'] = null !== $this->topNMetaData ? $this->topNMetaData->toArray($noStream) : $this->topNMetaData;
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
        if (isset($map['NetworkFlowTopNValues'])) {
            if (!empty($map['NetworkFlowTopNValues'])) {
                $model->networkFlowTopNValues = [];
                $n1 = 0;
                foreach ($map['NetworkFlowTopNValues'] as $item1) {
                    $model->networkFlowTopNValues[$n1] = networkFlowTopNValues::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TopNMetaData'])) {
            $model->topNMetaData = topNMetaData::fromMap($map['TopNMetaData']);
        }

        return $model;
    }
}
