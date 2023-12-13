<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models;

use AlibabaCloud\Tea\Model;

class CreateInstanceOpsTaskRequest extends Model
{
    /**
     * @description The ID of the container group.
     *
     * @example eci-bp1dvysdafbh00t7****
     *
     * @var string
     */
    public $containerGroupId;

    /**
     * @description The type of the O&M task. Valid values:
     *
     *   coredump
     *   tcpdump
     *
     * @example coredump
     *
     * @var string
     */
    public $opsType;

    /**
     * @description The value of the O\&M task. You can set this parameter based on the value of OpsType.
     *
     *   If OpsType is set to coredump, the valid values of OpsValue are:
     *
     *   enable: enables coredump.
     *   disable: disables coredump.
     *
     *   If OpsType is set to tcpdump, the value of OpsValue is a JSON-formatted parameter string. Example: `{"Enable":true, "IfDeviceName":"eth0"}`. The value may contain the following parameters:
     *
     *   Enable: specifies whether to enable tcpdump. You must specify this parameter. Valid values: true and false.
     *   Protocol: the network protocol. Valid values: tcp, udp, and icmpv4.
     *   SourceIp: the source IP address.
     *   SourceCidr: the source CIDR block. If you specify both an IP address and a CIDR block, the IP address is ignored if the CIDR block is valid.
     *   SourcePort: the source port. Valid values: 1 to 65535.
     *   DestIp: the destination IP address.
     *   DestCidr: the destination CIDR block. If you specify both an IP address and a CIDR block, the IP address is ignored if the CIDR block is valid.
     *   DestPort: the destination port. Valid values: 1 to 65535.
     *   IfDeviceName: the destination network interface controller. Default value: eth0.
     *   Snaplen: the length to be captured. Default value: 65535. Unit: bytes.
     *   Duration: the captured period. Unit: seconds.
     *   PacketNum: the number of packets to be captured.
     *   FileSize: the size of the destination files on packets. Unit: bytes. Maximum value: 1073741824. 1073741824 bytes is equal to 1 GB.
     *
     * @example enable
     *
     * @var string
     */
    public $opsValue;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The region ID of the O&M task.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;
    protected $_name = [
        'containerGroupId'     => 'ContainerGroupId',
        'opsType'              => 'OpsType',
        'opsValue'             => 'OpsValue',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'regionId'             => 'RegionId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->containerGroupId) {
            $res['ContainerGroupId'] = $this->containerGroupId;
        }
        if (null !== $this->opsType) {
            $res['OpsType'] = $this->opsType;
        }
        if (null !== $this->opsValue) {
            $res['OpsValue'] = $this->opsValue;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateInstanceOpsTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ContainerGroupId'])) {
            $model->containerGroupId = $map['ContainerGroupId'];
        }
        if (isset($map['OpsType'])) {
            $model->opsType = $map['OpsType'];
        }
        if (isset($map['OpsValue'])) {
            $model->opsValue = $map['OpsValue'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }

        return $model;
    }
}
