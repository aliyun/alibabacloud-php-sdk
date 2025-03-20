<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\SDK\ESA\V20240910\Models\ListLoadBalancerOriginStatusResponseBody\originStatus;
use AlibabaCloud\Tea\Model;

class ListLoadBalancerOriginStatusResponseBody extends Model
{
    /**
     * @description List of origin statuses under the load balancer.
     *
     * @var originStatus[]
     */
    public $originStatus;

    /**
     * @description Request ID, used for tracking the request.
     *
     * @example 0AEDAF20-4DDF-4165-8750-47FF9C1929C9
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'originStatus' => 'OriginStatus',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->originStatus) {
            $res['OriginStatus'] = [];
            if (null !== $this->originStatus && \is_array($this->originStatus)) {
                $n = 0;
                foreach ($this->originStatus as $item) {
                    $res['OriginStatus'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListLoadBalancerOriginStatusResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OriginStatus'])) {
            if (!empty($map['OriginStatus'])) {
                $model->originStatus = [];
                $n = 0;
                foreach ($map['OriginStatus'] as $item) {
                    $model->originStatus[$n++] = null !== $item ? originStatus::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
