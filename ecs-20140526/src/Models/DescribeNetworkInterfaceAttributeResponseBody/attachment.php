<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeNetworkInterfaceAttributeResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeNetworkInterfaceAttributeResponseBody\attachment\memberNetworkInterfaceIds;

class attachment extends Model
{
    /**
     * @var int
     */
    public $deviceIndex;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var memberNetworkInterfaceIds
     */
    public $memberNetworkInterfaceIds;

    /**
     * @var int
     */
    public $networkCardIndex;

    /**
     * @var string
     */
    public $trunkNetworkInterfaceId;
    protected $_name = [
        'deviceIndex' => 'DeviceIndex',
        'instanceId' => 'InstanceId',
        'memberNetworkInterfaceIds' => 'MemberNetworkInterfaceIds',
        'networkCardIndex' => 'NetworkCardIndex',
        'trunkNetworkInterfaceId' => 'TrunkNetworkInterfaceId',
    ];

    public function validate()
    {
        if (null !== $this->memberNetworkInterfaceIds) {
            $this->memberNetworkInterfaceIds->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deviceIndex) {
            $res['DeviceIndex'] = $this->deviceIndex;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->memberNetworkInterfaceIds) {
            $res['MemberNetworkInterfaceIds'] = null !== $this->memberNetworkInterfaceIds ? $this->memberNetworkInterfaceIds->toArray($noStream) : $this->memberNetworkInterfaceIds;
        }

        if (null !== $this->networkCardIndex) {
            $res['NetworkCardIndex'] = $this->networkCardIndex;
        }

        if (null !== $this->trunkNetworkInterfaceId) {
            $res['TrunkNetworkInterfaceId'] = $this->trunkNetworkInterfaceId;
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
        if (isset($map['DeviceIndex'])) {
            $model->deviceIndex = $map['DeviceIndex'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['MemberNetworkInterfaceIds'])) {
            $model->memberNetworkInterfaceIds = memberNetworkInterfaceIds::fromMap($map['MemberNetworkInterfaceIds']);
        }

        if (isset($map['NetworkCardIndex'])) {
            $model->networkCardIndex = $map['NetworkCardIndex'];
        }

        if (isset($map['TrunkNetworkInterfaceId'])) {
            $model->trunkNetworkInterfaceId = $map['TrunkNetworkInterfaceId'];
        }

        return $model;
    }
}
