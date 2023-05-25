<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeNetworkInterfacesResponseBody\networkInterfaceSets\networkInterfaceSet;

use AlibabaCloud\Tea\Model;

class attachment extends Model
{
    /**
     * @description > This parameter is in invitational preview and is unavailable to the public.
     *
     * @example 0
     *
     * @var int
     */
    public $deviceIndex;

    /**
     * @description > This parameter is in invitational preview and is unavailable for general users.
     *
     * @example null
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The index of the network interface controller (NIC).
     *
     *   If the ENI is in the Available state or no NIC index is specified when the ENI is attached, this parameter has no value.
     *   If the ENI is in the InUse state and an NIC index is specified when the ENI is attached, the specified NIC index is returned as the value of this parameter.
     *
     * @example 0
     *
     * @var int
     */
    public $networkCardIndex;

    /**
     * @description > This parameter is in invitational preview and is unavailable for general users.
     *
     * @example null
     *
     * @var string
     */
    public $trunkNetworkInterfaceId;
    protected $_name = [
        'deviceIndex'             => 'DeviceIndex',
        'instanceId'              => 'InstanceId',
        'networkCardIndex'        => 'NetworkCardIndex',
        'trunkNetworkInterfaceId' => 'TrunkNetworkInterfaceId',
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
        if (isset($map['NetworkCardIndex'])) {
            $model->networkCardIndex = $map['NetworkCardIndex'];
        }
        if (isset($map['TrunkNetworkInterfaceId'])) {
            $model->trunkNetworkInterfaceId = $map['TrunkNetworkInterfaceId'];
        }

        return $model;
    }
}
