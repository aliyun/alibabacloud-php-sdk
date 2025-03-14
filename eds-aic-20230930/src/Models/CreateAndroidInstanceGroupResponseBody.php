<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models;

use AlibabaCloud\SDK\Edsaic\V20230930\Models\CreateAndroidInstanceGroupResponseBody\instanceGroupInfos;
use AlibabaCloud\Tea\Model;

class CreateAndroidInstanceGroupResponseBody extends Model
{
    /**
     * @description The IDs of the instance groups.
     *
     * @var string[]
     */
    public $instanceGroupIds;

    /**
     * @description The instance groups.
     *
     * @var instanceGroupInfos[]
     */
    public $instanceGroupInfos;

    /**
     * @description The ID of the order.
     *
     * @example 22365781890****
     *
     * @var string
     */
    public $orderId;

    /**
     * @description The ID of the request.
     *
     * @example 1A923337-44D9-5CAD-9A53-95084BD4****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'instanceGroupIds' => 'InstanceGroupIds',
        'instanceGroupInfos' => 'InstanceGroupInfos',
        'orderId' => 'OrderId',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceGroupIds) {
            $res['InstanceGroupIds'] = $this->instanceGroupIds;
        }
        if (null !== $this->instanceGroupInfos) {
            $res['InstanceGroupInfos'] = [];
            if (null !== $this->instanceGroupInfos && \is_array($this->instanceGroupInfos)) {
                $n = 0;
                foreach ($this->instanceGroupInfos as $item) {
                    $res['InstanceGroupInfos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateAndroidInstanceGroupResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceGroupIds'])) {
            if (!empty($map['InstanceGroupIds'])) {
                $model->instanceGroupIds = $map['InstanceGroupIds'];
            }
        }
        if (isset($map['InstanceGroupInfos'])) {
            if (!empty($map['InstanceGroupInfos'])) {
                $model->instanceGroupInfos = [];
                $n = 0;
                foreach ($map['InstanceGroupInfos'] as $item) {
                    $model->instanceGroupInfos[$n++] = null !== $item ? instanceGroupInfos::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
