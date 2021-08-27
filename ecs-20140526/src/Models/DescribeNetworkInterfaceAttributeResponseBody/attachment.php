<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeNetworkInterfaceAttributeResponseBody;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeNetworkInterfaceAttributeResponseBody\attachment\memberNetworkInterfaceIds;
use AlibabaCloud\Tea\Model;

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
     * @var string
     */
    public $trunkNetworkInterfaceId;

    /**
     * @var memberNetworkInterfaceIds
     */
    public $memberNetworkInterfaceIds;
    protected $_name = [
        'deviceIndex'               => 'DeviceIndex',
        'instanceId'                => 'InstanceId',
        'trunkNetworkInterfaceId'   => 'TrunkNetworkInterfaceId',
        'memberNetworkInterfaceIds' => 'MemberNetworkInterfaceIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deviceIndex) {
            $res['DeviceIndex'] = $this->deviceIndex;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->trunkNetworkInterfaceId) {
            $res['TrunkNetworkInterfaceId'] = $this->trunkNetworkInterfaceId;
        }
        if (null !== $this->memberNetworkInterfaceIds) {
            $res['MemberNetworkInterfaceIds'] = null !== $this->memberNetworkInterfaceIds ? $this->memberNetworkInterfaceIds->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return attachment
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeviceIndex'])) {
            $model->deviceIndex = $map['DeviceIndex'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['TrunkNetworkInterfaceId'])) {
            $model->trunkNetworkInterfaceId = $map['TrunkNetworkInterfaceId'];
        }
        if (isset($map['MemberNetworkInterfaceIds'])) {
            $model->memberNetworkInterfaceIds = memberNetworkInterfaceIds::fromMap($map['MemberNetworkInterfaceIds']);
        }

        return $model;
    }
}
