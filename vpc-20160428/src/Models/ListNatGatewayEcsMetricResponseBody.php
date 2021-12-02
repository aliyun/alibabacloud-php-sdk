<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\SDK\Vpc\V20160428\Models\ListNatGatewayEcsMetricResponseBody\metricDataList;
use AlibabaCloud\Tea\Model;

class ListNatGatewayEcsMetricResponseBody extends Model
{
    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var metricDataList[]
     */
    public $metricDataList;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'maxResults'     => 'MaxResults',
        'metricDataList' => 'MetricDataList',
        'nextToken'      => 'NextToken',
        'requestId'      => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
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
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
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
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
