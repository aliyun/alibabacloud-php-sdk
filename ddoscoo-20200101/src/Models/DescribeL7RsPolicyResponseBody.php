<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeL7RsPolicyResponseBody\attributes;
use AlibabaCloud\Tea\Model;

class DescribeL7RsPolicyResponseBody extends Model
{
    /**
     * @description The details of the parameters for back-to-origin.
     *
     * @var attributes[]
     */
    public $attributes;

    /**
     * @description The scheduling algorithm for back-to-origin traffic. Valid values:
     *
     *   **ip_hash**: the IP hash algorithm. This algorithm is used to redirect the requests from the same IP address to the same origin server.
     *   **rr**: the round-robin algorithm. This algorithm is used to redirect requests to origin servers in turn.
     *   **least_time**: the least response time algorithm. This algorithm is used to minimize the latency when requests are forwarded from Anti-DDoS Pro or Anti-DDoS Premium instances to origin servers based on the intelligent DNS resolution feature.
     *
     * @example rr
     *
     * @var string
     */
    public $proxyMode;

    /**
     * @description The ID of the request, which is used to locate and troubleshoot issues.
     *
     * @example 9E7F6B2C-03F2-462F-9076-B782CF0DD502
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'attributes' => 'Attributes',
        'proxyMode'  => 'ProxyMode',
        'requestId'  => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->attributes) {
            $res['Attributes'] = [];
            if (null !== $this->attributes && \is_array($this->attributes)) {
                $n = 0;
                foreach ($this->attributes as $item) {
                    $res['Attributes'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->proxyMode) {
            $res['ProxyMode'] = $this->proxyMode;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeL7RsPolicyResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Attributes'])) {
            if (!empty($map['Attributes'])) {
                $model->attributes = [];
                $n                 = 0;
                foreach ($map['Attributes'] as $item) {
                    $model->attributes[$n++] = null !== $item ? attributes::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ProxyMode'])) {
            $model->proxyMode = $map['ProxyMode'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
