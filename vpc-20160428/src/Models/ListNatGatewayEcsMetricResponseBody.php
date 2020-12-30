<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\SDK\Vpc\V20160428\Models\ListNatGatewayEcsMetricResponseBody\metricDataList;
use AlibabaCloud\Tea\Model;

class ListNatGatewayEcsMetricResponseBody extends Model
{
    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var metricDataList[]
     */
    public $metricDataList;

    /**
     * @var int
     */
    public $maxResults;
    protected $_name = [
        'nextToken'      => 'NextToken',
        'requestId'      => 'RequestId',
        'metricDataList' => 'MetricDataList',
        'maxResults'     => 'MaxResults',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->metricDataList) {
            $res['MetricDataList'] = [];
            if (null !== $this->metricDataList && \is_array($this->metricDataList)) {
                $n = 0;
                foreach ($this->metricDataList as $item) {
                    $res['MetricDataList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListNatGatewayEcsMetricResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['MetricDataList'])) {
            if (!empty($map['MetricDataList'])) {
                $model->metricDataList = [];
                $n                     = 0;
                foreach ($map['MetricDataList'] as $item) {
                    $model->metricDataList[$n++] = null !== $item ? metricDataList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }

        return $model;
    }
}
