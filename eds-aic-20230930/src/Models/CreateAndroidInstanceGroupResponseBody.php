<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\CreateAndroidInstanceGroupResponseBody\instanceGroupInfos;

class CreateAndroidInstanceGroupResponseBody extends Model
{
    /**
     * @var string[]
     */
    public $instanceGroupIds;

    /**
     * @var instanceGroupInfos[]
     */
    public $instanceGroupInfos;

    /**
     * @var string
     */
    public $orderId;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'instanceGroupIds' => 'InstanceGroupIds',
        'instanceGroupInfos' => 'InstanceGroupInfos',
        'orderId' => 'OrderId',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->instanceGroupIds)) {
            Model::validateArray($this->instanceGroupIds);
        }
        if (\is_array($this->instanceGroupInfos)) {
            Model::validateArray($this->instanceGroupInfos);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceGroupIds) {
            if (\is_array($this->instanceGroupIds)) {
                $res['InstanceGroupIds'] = [];
                $n1 = 0;
                foreach ($this->instanceGroupIds as $item1) {
                    $res['InstanceGroupIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->instanceGroupInfos) {
            if (\is_array($this->instanceGroupInfos)) {
                $res['InstanceGroupInfos'] = [];
                $n1 = 0;
                foreach ($this->instanceGroupInfos as $item1) {
                    $res['InstanceGroupInfos'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceGroupIds'])) {
            if (!empty($map['InstanceGroupIds'])) {
                $model->instanceGroupIds = [];
                $n1 = 0;
                foreach ($map['InstanceGroupIds'] as $item1) {
                    $model->instanceGroupIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['InstanceGroupInfos'])) {
            if (!empty($map['InstanceGroupInfos'])) {
                $model->instanceGroupInfos = [];
                $n1 = 0;
                foreach ($map['InstanceGroupInfos'] as $item1) {
                    $model->instanceGroupInfos[$n1++] = instanceGroupInfos::fromMap($item1);
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
