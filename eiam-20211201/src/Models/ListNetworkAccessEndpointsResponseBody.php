<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models;

use AlibabaCloud\SDK\Eiam\V20211201\Models\ListNetworkAccessEndpointsResponseBody\networkAccessEndpoints;
use AlibabaCloud\Tea\Model;

class ListNetworkAccessEndpointsResponseBody extends Model
{
    /**
     * @var networkAccessEndpoints[]
     */
    public $networkAccessEndpoints;

    /**
     * @description 本次调用返回的查询凭证（Token）值，用于下一次翻页查询。
     *
     * @example NTxxxexample
     *
     * @var string
     */
    public $nextToken;

    /**
     * @example 0441BD79-92F3-53AA-8657-F8CE4A2B912A
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 100
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'networkAccessEndpoints' => 'NetworkAccessEndpoints',
        'nextToken'              => 'NextToken',
        'requestId'              => 'RequestId',
        'totalCount'             => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->networkAccessEndpoints) {
            $res['NetworkAccessEndpoints'] = [];
            if (null !== $this->networkAccessEndpoints && \is_array($this->networkAccessEndpoints)) {
                $n = 0;
                foreach ($this->networkAccessEndpoints as $item) {
                    $res['NetworkAccessEndpoints'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
     * @return ListNetworkAccessEndpointsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NetworkAccessEndpoints'])) {
            if (!empty($map['NetworkAccessEndpoints'])) {
                $model->networkAccessEndpoints = [];
                $n                             = 0;
                foreach ($map['NetworkAccessEndpoints'] as $item) {
                    $model->networkAccessEndpoints[$n++] = null !== $item ? networkAccessEndpoints::fromMap($item) : $item;
                }
            }
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
