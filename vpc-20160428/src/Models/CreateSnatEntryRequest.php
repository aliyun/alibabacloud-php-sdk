<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Tea\Model;

class CreateSnatEntryRequest extends Model
{
    /**
     * @description The client token that is used to ensure the idempotence of the request.
     *
     * You can use the client to generate the value, but you must make sure that it is unique among different requests. `The token can contain only ASCII characters.`
     *
     * >  If you do not set this parameter, **ClientToken** is set to the value of **RequestId**. The value of **RequestId** for each API request may be different.
     * @example 02fb3da4-130e-11e9-8e44****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description Specifies whether to enable EIP affinity. Valid values:
     *
     *   **0**: no
     *   **1**: yes
     *
     * >  If EIP affinity is enabled and the SNAT entry is associated with multiple EIPs, a client uses the same EIP to access the Internet. Otherwise, the client uses an EIP selected from the associated EIPs to access the Internet.
     * @example 1
     *
     * @var int
     */
    public $eipAffinity;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The ID of the region where the NAT gateway is deployed.
     *
     * You can call the [DescribeRegions](~~36063~~) operation to query the most recent region list.
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

    /**
     * @description Enter a name for the SNAT entry.
     *
     * The name must be 2 to 128 characters in length. It must start with a letter but cannot start with `http://` or `https://`.
     * @example SnatEntry-1
     *
     * @var string
     */
    public $snatEntryName;

    /**
     * @description *   The EIPs in the SNAT entry when you add an SNAT entry to an Internet NAT gateway. Separate EIPs with commas (,).
     *
     * >  If you select multiple EIPs to create an SNAT address pool, connections are hashed to these EIPs. Network traffic may not be evenly distributed to the EIPs because the amount of traffic that passes through each connection varies. We recommend that you associate these EIPs with the same EIP bandwidth plan to prevent service interruptions due to the bandwidth limit of an individual EIP.
     *
     *   When you add an SNAT entry to a VPC NAT gateway, this parameter specifies the NAT IP address in the SNAT entry.
     *
     * @example 47.98.XX.XX
     *
     * @var string
     */
    public $snatIp;

    /**
     * @description The ID of the SNAT table.
     *
     * @example stb-bp190wu8io1vgev****
     *
     * @var string
     */
    public $snatTableId;

    /**
     * @description You can specify the CIDR block of a VPC, a vSwitch, or an ECS instance or enter a custom CIDR block.
     *
     * You can specify an SNAT entry in the following ways:
     *
     *   You can specify the CIDR block of the VPC where the NAT gateway is deployed. Then, all ECS instances in the VPC can access the Internet or external networks by using SNAT.
     *   You can specify the CIDR block of a vSwitch, for example, 192.168.1.0/24. Then, the ECS instances in the vSwitch can access the Internet or external networks by using SNAT.
     *   You can specify the IP address of an ECS instance, for example, 192.168.1.1/32. Then, the ECS instance can access the Internet or external networks by using SNAT.
     *   You can specify a custom CIDR block. Then, all ECS instances within the specified CIDR block can access the Internet or external networks by using SNAT.
     *
     * When you add an SNAT entry to an Internet NAT gateway, if **SnatIp** is set to an EIP, the ECS instance uses the specified EIP to access the Internet.
     *
     * If **SnatIp** is set to multiple EIPs, the ECS instance randomly selects an EIP specified in the **SnatIp** parameter to access the Internet.
     *
     * You cannot set this parameter and **SourceVSwtichId** at the same time. If the **SourceVSwitchId** parameter is set, you cannot set the **SourceCIDR** parameter. If the **SourceCIDR** parameter is set, you cannot set the **SourceVSwitchId** parameter.
     * @example 10.1.1.0/24
     *
     * @var string
     */
    public $sourceCIDR;

    /**
     * @description The ID of the vSwitch.
     *
     *   When you add an SNAT entry to an Internet NAT gateway, this parameter specifies that ECS instances in the vSwitch can use the SNAT entry to access the Internet. If you select multiple elastic IP addresses (EIPs) to create an SNAT address pool, connections are hashed to these EIPs. Network traffic may not be evenly distributed to the EIPs because the amount of traffic that passes through each connection varies. We recommend that you associate these EIPs with the same EIP bandwidth plan to prevent service interruptions due to the bandwidth limits on individual EIPs.
     *   When you add an SNAT entry to a VPC NAT gateway, this parameter specifies that ECS instances in the vSwitch can use the SNAT entry to access external networks.
     *
     * @example vsw-bp1nhx2s9ui5o****
     *
     * @var string
     */
    public $sourceVSwitchId;
    protected $_name = [
        'clientToken'          => 'ClientToken',
        'eipAffinity'          => 'EipAffinity',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'regionId'             => 'RegionId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'snatEntryName'        => 'SnatEntryName',
        'snatIp'               => 'SnatIp',
        'snatTableId'          => 'SnatTableId',
        'sourceCIDR'           => 'SourceCIDR',
        'sourceVSwitchId'      => 'SourceVSwitchId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->eipAffinity) {
            $res['EipAffinity'] = $this->eipAffinity;
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
        if (null !== $this->snatEntryName) {
            $res['SnatEntryName'] = $this->snatEntryName;
        }
        if (null !== $this->snatIp) {
            $res['SnatIp'] = $this->snatIp;
        }
        if (null !== $this->snatTableId) {
            $res['SnatTableId'] = $this->snatTableId;
        }
        if (null !== $this->sourceCIDR) {
            $res['SourceCIDR'] = $this->sourceCIDR;
        }
        if (null !== $this->sourceVSwitchId) {
            $res['SourceVSwitchId'] = $this->sourceVSwitchId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateSnatEntryRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['EipAffinity'])) {
            $model->eipAffinity = $map['EipAffinity'];
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
        if (isset($map['SnatEntryName'])) {
            $model->snatEntryName = $map['SnatEntryName'];
        }
        if (isset($map['SnatIp'])) {
            $model->snatIp = $map['SnatIp'];
        }
        if (isset($map['SnatTableId'])) {
            $model->snatTableId = $map['SnatTableId'];
        }
        if (isset($map['SourceCIDR'])) {
            $model->sourceCIDR = $map['SourceCIDR'];
        }
        if (isset($map['SourceVSwitchId'])) {
            $model->sourceVSwitchId = $map['SourceVSwitchId'];
        }

        return $model;
    }
}
