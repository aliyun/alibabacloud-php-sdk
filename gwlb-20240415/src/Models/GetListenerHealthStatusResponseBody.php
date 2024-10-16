<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gwlb\V20240415\Models;

use AlibabaCloud\SDK\Gwlb\V20240415\Models\GetListenerHealthStatusResponseBody\listenerHealthStatus;
use AlibabaCloud\Tea\Model;

class GetListenerHealthStatusResponseBody extends Model
{
    /**
     * @var listenerHealthStatus[]
     */
    public $listenerHealthStatus;

    /**
     * @example 20
     *
     * @var int
     */
    public $maxResults;

    /**
     * @example U12WEI6Ro2ol3wA54rBNSwdC5+lYy6q5SjIQEvc1wz5mjZxV+YjsHRdXV8XauY1BpOQIvwX63E0en54H3D****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @example 0ED4F222-36A0-5470-8A9A-AAB4E96BAC1A
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 31
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'listenerHealthStatus' => 'ListenerHealthStatus',
        'maxResults'           => 'MaxResults',
        'nextToken'            => 'NextToken',
        'requestId'            => 'RequestId',
        'totalCount'           => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->listenerHealthStatus) {
            $res['ListenerHealthStatus'] = [];
            if (null !== $this->listenerHealthStatus && \is_array($this->listenerHealthStatus)) {
                $n = 0;
                foreach ($this->listenerHealthStatus as $item) {
                    $res['ListenerHealthStatus'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetListenerHealthStatusResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ListenerHealthStatus'])) {
            if (!empty($map['ListenerHealthStatus'])) {
                $model->listenerHealthStatus = [];
                $n                           = 0;
                foreach ($map['ListenerHealthStatus'] as $item) {
                    $model->listenerHealthStatus[$n++] = null !== $item ? listenerHealthStatus::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
