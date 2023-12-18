<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateNatGatewayRequest\tag;
use AlibabaCloud\Tea\Model;

class CreateNatGatewayRequest extends Model
{
    /**
     * @description Subscription Internet NAT gateways are no longer available for purchase. Ignore this parameter.
     *
     * @example Invalid parameter.
     *
     * @var bool
     */
    public $autoPay;

    /**
     * @description The client token that is used to ensure the idempotence of the request.
     *
     * You can use the client to generate the token, but you must make sure that the token is unique among different requests.
     *
     * >  If you do not specify this parameter, the system automatically uses the **request ID** as the **client token**. The **request ID** may be different for each request.
     * @example 5A2CFF0E-5718-45B5-9D4D-70B3FF3898
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The description of the NAT gateway.
     *
     * You can leave this parameter empty or enter a description. If you enter a description, the description must be 2 to 256 characters in length and cannot start with `http://` or `https://`.
     * @example testnat
     *
     * @var string
     */
    public $description;

    /**
     * @description Subscription Internet NAT gateways are no longer available for purchase. Ignore this parameter.
     *
     * @example Invalid parameter.
     *
     * @var string
     */
    public $duration;

    /**
     * @description The mode in which the EIP is associated with the NAT gateway. Valid values:
     *
     *   **MULTI_BINDED** (default): Multi-EIP-to-ENI mode.
     *
     *   **NAT**: NAT mode. IPv4 gateways are supported in this mode.
     *
     **
     *
     **Note** If a NAT gateway is associated with an EIP in NAT mode, the EIP occupies one private IP address in the vSwitch. Make sure that the vSwitch has sufficient private IP addresses. Otherwise, the NAT gateway fails to be associated with the EIP. In NAT mode, a maximum number of 50 EIPs can be associated with each NAT gateway.
     *
     * @example MULTI_BINDED
     *
     * @var string
     */
    public $eipBindMode;

    /**
     * @description Specifies whether to enable ICMP retrieval. Valid values:
     *
     *   **true** (default)
     *   **false**
     *
     * @example false
     *
     * @var bool
     */
    public $icmpReplyEnabled;

    /**
     * @description The billing method of the NAT gateway.
     *
     * Set the value to **PostPaid** (pay-as-you-go), which is the default value.
     *
     * For more information, see [Internet NAT gateway billing](~~48126~~) and [VPC NAT gateway billing](~~270913~~).
     * @example PostPaid
     *
     * @var string
     */
    public $instanceChargeType;

    /**
     * @description The metering method of the NAT gateway. Set the value to **PayByLcu**, which specifies the pay-by-CU metering method.
     *
     * @example PayByLcu
     *
     * @var string
     */
    public $internetChargeType;

    /**
     * @description The name of the NAT gateway.
     *
     * If this parameter is not set, the system assigns a default name to the NAT gateway.
     * @example fortest
     *
     * @var string
     */
    public $name;

    /**
     * @description The type of NAT gateway. Set the value to **Enhanced**, which specifies enhanced NAT gateway.
     *
     * @example Enhanced
     *
     * @var string
     */
    public $natType;

    /**
     * @description The network type of the NAT gateway. Valid values:
     *
     *   **internet**: Internet
     *   **intranet**: VPC
     *
     * @example internet
     *
     * @var string
     */
    public $networkType;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description Subscription Internet NAT gateways are no longer available for purchase. Ignore this parameter.
     *
     * @example Invalid parameter.
     *
     * @var string
     */
    public $pricingCycle;

    /**
     * @description The region ID of the NAT gateway.
     *
     * You can call the [DescribeRegions](~~36063~~) operation to obtain the region ID.
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
     * @description Specifies whether to enable the firewall feature. Valid values:
     *
     *   **false** (default)
     *   **true**
     *
     * @example false
     *
     * @deprecated
     *
     * @var bool
     */
    public $securityProtectionEnabled;

    /**
     * @description Subscription Internet NAT gateways are no longer available for purchase. Ignore this parameter.
     *
     * @example Invalid parameter.
     *
     * @var string
     */
    public $spec;

    /**
     * @description The tags.
     *
     * @var tag[]
     */
    public $tag;

    /**
     * @description The ID of the vSwitch to which the NAT gateway is attached.
     *
     * When you create a NAT gateway, you must specify a vSwitch for the NAT gateway. Then, the system assigns an idle private IP address from the vSwitch to the NAT gateway.
     *
     *   To attach the NAT gateway to an existing vSwitch, make sure that the zone to which the vSwitch belongs supports NAT gateways. In addition, the vSwitch must have idle IP addresses.
     *   If no vSwitch exists in the VPC, create a vSwitch in a zone that supports NAT gateways. Then, specify the vSwitch for the NAT gateway.
     *
     * >  You can call the [ListEnhanhcedNatGatewayAvailableZones](~~182292~~) operation to query zones that support NAT gateways. You can call the [DescribeVSwitches](~~35748~~) operation to query idle IP addresses in a vSwitch.
     * @example vsw-bp1e3se98n9fq8hle****
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @description The ID of the VPC where you want to create the NAT gateway.
     *
     * @example vpc-bp1di7uewzmtvfuq8****
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'autoPay'                   => 'AutoPay',
        'clientToken'               => 'ClientToken',
        'description'               => 'Description',
        'duration'                  => 'Duration',
        'eipBindMode'               => 'EipBindMode',
        'icmpReplyEnabled'          => 'IcmpReplyEnabled',
        'instanceChargeType'        => 'InstanceChargeType',
        'internetChargeType'        => 'InternetChargeType',
        'name'                      => 'Name',
        'natType'                   => 'NatType',
        'networkType'               => 'NetworkType',
        'ownerAccount'              => 'OwnerAccount',
        'ownerId'                   => 'OwnerId',
        'pricingCycle'              => 'PricingCycle',
        'regionId'                  => 'RegionId',
        'resourceOwnerAccount'      => 'ResourceOwnerAccount',
        'resourceOwnerId'           => 'ResourceOwnerId',
        'securityProtectionEnabled' => 'SecurityProtectionEnabled',
        'spec'                      => 'Spec',
        'tag'                       => 'Tag',
        'vSwitchId'                 => 'VSwitchId',
        'vpcId'                     => 'VpcId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoPay) {
            $res['AutoPay'] = $this->autoPay;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->eipBindMode) {
            $res['EipBindMode'] = $this->eipBindMode;
        }
        if (null !== $this->icmpReplyEnabled) {
            $res['IcmpReplyEnabled'] = $this->icmpReplyEnabled;
        }
        if (null !== $this->instanceChargeType) {
            $res['InstanceChargeType'] = $this->instanceChargeType;
        }
        if (null !== $this->internetChargeType) {
            $res['InternetChargeType'] = $this->internetChargeType;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->natType) {
            $res['NatType'] = $this->natType;
        }
        if (null !== $this->networkType) {
            $res['NetworkType'] = $this->networkType;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->pricingCycle) {
            $res['PricingCycle'] = $this->pricingCycle;
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
        if (null !== $this->securityProtectionEnabled) {
            $res['SecurityProtectionEnabled'] = $this->securityProtectionEnabled;
        }
        if (null !== $this->spec) {
            $res['Spec'] = $this->spec;
        }
        if (null !== $this->tag) {
            $res['Tag'] = [];
            if (null !== $this->tag && \is_array($this->tag)) {
                $n = 0;
                foreach ($this->tag as $item) {
                    $res['Tag'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateNatGatewayRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoPay'])) {
            $model->autoPay = $map['AutoPay'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['EipBindMode'])) {
            $model->eipBindMode = $map['EipBindMode'];
        }
        if (isset($map['IcmpReplyEnabled'])) {
            $model->icmpReplyEnabled = $map['IcmpReplyEnabled'];
        }
        if (isset($map['InstanceChargeType'])) {
            $model->instanceChargeType = $map['InstanceChargeType'];
        }
        if (isset($map['InternetChargeType'])) {
            $model->internetChargeType = $map['InternetChargeType'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['NatType'])) {
            $model->natType = $map['NatType'];
        }
        if (isset($map['NetworkType'])) {
            $model->networkType = $map['NetworkType'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['PricingCycle'])) {
            $model->pricingCycle = $map['PricingCycle'];
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
        if (isset($map['SecurityProtectionEnabled'])) {
            $model->securityProtectionEnabled = $map['SecurityProtectionEnabled'];
        }
        if (isset($map['Spec'])) {
            $model->spec = $map['Spec'];
        }
        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n          = 0;
                foreach ($map['Tag'] as $item) {
                    $model->tag[$n++] = null !== $item ? tag::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
