<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models;

use AlibabaCloud\SDK\Cbn\V20170912\Models\ListCenInterRegionTrafficQosQueuesResponseBody\trafficQosQueues;
use AlibabaCloud\Tea\Model;

class ListCenInterRegionTrafficQosQueuesResponseBody extends Model
{
    /**
     * @description The token that determines the start point of the query. Valid values:
     *
     * - If NextToken was returned in the previous query, specify the value to obtain the next set of results.
     * @example 0151fa6aa1ed****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The ID of the request.
     *
     * @example 1D1E15D2-416D-54F3-BDD9-BC27DE4C6352
     *
     * @var string
     */
    public $requestId;

    /**
     * @description A list of queues.
     *
     * @var trafficQosQueues[]
     */
    public $trafficQosQueues;
    protected $_name = [
        'nextToken'        => 'NextToken',
        'requestId'        => 'RequestId',
        'trafficQosQueues' => 'TrafficQosQueues',
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
        if (null !== $this->trafficQosQueues) {
            $res['TrafficQosQueues'] = [];
            if (null !== $this->trafficQosQueues && \is_array($this->trafficQosQueues)) {
                $n = 0;
                foreach ($this->trafficQosQueues as $item) {
                    $res['TrafficQosQueues'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListCenInterRegionTrafficQosQueuesResponseBody
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
        if (isset($map['TrafficQosQueues'])) {
            if (!empty($map['TrafficQosQueues'])) {
                $model->trafficQosQueues = [];
                $n                       = 0;
                foreach ($map['TrafficQosQueues'] as $item) {
                    $model->trafficQosQueues[$n++] = null !== $item ? trafficQosQueues::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
