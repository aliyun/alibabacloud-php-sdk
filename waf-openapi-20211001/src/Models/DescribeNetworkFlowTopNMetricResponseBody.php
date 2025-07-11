<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeNetworkFlowTopNMetricResponseBody\networkFlowTopNValues;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeNetworkFlowTopNMetricResponseBody\topNMetaData;
use AlibabaCloud\Tea\Model;

class DescribeNetworkFlowTopNMetricResponseBody extends Model
{
    /**
     * @description The top statistical data array returned.
     *
     * @var networkFlowTopNValues[]
     */
    public $networkFlowTopNValues;

    /**
     * @description The ID of the request.
     *
     * @example D827FCFE-90A7-4330-9326-D33C8B4C7726
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The metadata of the returned data.
     *
     * @var topNMetaData
     */
    public $topNMetaData;
    protected $_name = [
        'networkFlowTopNValues' => 'NetworkFlowTopNValues',
        'requestId' => 'RequestId',
        'topNMetaData' => 'TopNMetaData',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->networkFlowTopNValues) {
            $res['NetworkFlowTopNValues'] = [];
            if (null !== $this->networkFlowTopNValues && \is_array($this->networkFlowTopNValues)) {
                $n = 0;
                foreach ($this->networkFlowTopNValues as $item) {
                    $res['NetworkFlowTopNValues'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->topNMetaData) {
            $res['TopNMetaData'] = null !== $this->topNMetaData ? $this->topNMetaData->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeNetworkFlowTopNMetricResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NetworkFlowTopNValues'])) {
            if (!empty($map['NetworkFlowTopNValues'])) {
                $model->networkFlowTopNValues = [];
                $n = 0;
                foreach ($map['NetworkFlowTopNValues'] as $item) {
                    $model->networkFlowTopNValues[$n++] = null !== $item ? networkFlowTopNValues::fromMap($item) : $item;
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
