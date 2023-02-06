<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeNetworkInterfaceAttributeResponseBody;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeNetworkInterfaceAttributeResponseBody\attachment\memberNetworkInterfaceIds;
use AlibabaCloud\Tea\Model;

class attachment extends Model
{
    /**
     * @description > This parameter is in invitational preview and unavailable to general users.
     *
     * @example hide
     *
     * @var int
     */
    public $deviceIndex;

    /**
     * @description > This parameter is in invitational preview and unavailable to general users.
     *
     * @example hide
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description > This parameter is in invitational preview and unavailable to general users.
     *
     * @var memberNetworkInterfaceIds
     */
    public $memberNetworkInterfaceIds;

    /**
     * @description The index of the network interface controller (NIC).
     *
     *   If the ENI is in the Available state or if no NIC index was specified when the ENI was attached, this parameter has no value.
     *   If the ENI is in the InUse state and an NIC index was specified when the ENI was attached, the specified NIC index is returned as the value of this parameter.
     *
     * @example 0
     *
     * @var int
     */
    public $networkCardIndex;

    /**
     * @description > This parameter is in invitational preview and unavailable to general users.
     *
     * @example hide
     *
     * @var string
     */
    public $trunkNetworkInterfaceId;
    protected $_name = [
        'deviceIndex'               => 'DeviceIndex',
        'instanceId'                => 'InstanceId',
        'memberNetworkInterfaceIds' => 'MemberNetworkInterfaceIds',
        'networkCardIndex'          => 'NetworkCardIndex',
        'trunkNetworkInterfaceId'   => 'TrunkNetworkInterfaceId',
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
        if (null !== $this->memberNetworkInterfaceIds) {
            $res['MemberNetworkInterfaceIds'] = null !== $this->memberNetworkInterfaceIds ? $this->memberNetworkInterfaceIds->toMap() : null;
        }
        if (null !== $this->networkCardIndex) {
            $res['NetworkCardIndex'] = $this->networkCardIndex;
        }
        if (null !== $this->trunkNetworkInterfaceId) {
            $res['TrunkNetworkInterfaceId'] = $this->trunkNetworkInterfaceId;
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
