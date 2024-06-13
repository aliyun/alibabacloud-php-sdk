<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\CreateInstanceRequest\tag;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\CreateInstanceRequest\zoneVSwitchSecurityGroup;
use AlibabaCloud\Tea\Model;

class CreateInstanceRequest extends Model
{
    /**
     * @description Whether to automatically pay when renewing. Value:
     *
     * Default value: False.
     * @example false
     *
     * @var bool
     */
    public $autoPay;

    /**
     * @description The billing method of the instance. Valid values: PostPaid (pay-as-you-go) and PrePaid (subscription).
     *
     * This parameter is required.
     * @example PostPaid
     * PrePaid
     * @var string
     */
    public $chargeType;

    /**
     * @description The subscription duration of the instance.
     *
     *   Valid values if PricingCycle is set to **Month**: **1** to **9**
     *   Valid values if PricingCycle is set to **Year**: **1** to **3**
     *
     * >  This parameter is available and required only if the ChargeType parameter is set to **PrePaid**.
     * @example 1
     *
     * @var int
     */
    public $duration;

    /**
     * @description The HTTPS policy.
     *
     * @example HTTPS2_TLS1_2
     *
     * @var string
     */
    public $httpsPolicy;

    /**
     * @description The CIDR block of the VPC integration instance.
     *
     *   192.168.0.0/16
     *   172.16.0.0/12
     *
     **
     *
     **Warning** The VPC integration instance is connected to the specified CIDR block. Plan your CIDR block carefully to prevent overlaps with the private IP addresses of cloud services.
     *
     * >  This parameter is in invitational preview and not available for public use.
     * @example 172.16.0.0/12
     *
     * @var string
     */
    public $instanceCidr;

    /**
     * @description Instance Name
     *
     * This parameter is required.
     * @example ApigatewayInstance
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description Instance specifications
     *
     * This parameter is required.
     * @example api.s1.small
     *
     * @var string
     */
    public $instanceSpec;

    /**
     * @description The type of the dedicated instance. Valid values:
     *
     *   vpc_connect: a VPC integration instance
     *   normal: a conventional dedicated instance
     *
     * >  This parameter is in invitational preview and not available for public use.
     * @example vpc_connect
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description The unit of the subscription duration of the subscription instance. Valid values:
     *
     *   **year**
     *   **month**
     *
     * >  This parameter is available and required only if the ChargeType parameter is set to PrePaid.
     * @example Month
     *
     * @var string
     */
    public $pricingCycle;

    /**
     * @description The tags that you want to add to the instance.
     *
     * @var tag[]
     */
    public $tag;

    /**
     * @description Passwords are used to prevent duplicate requests from being submitted, please do not reuse them.
     *
     * This parameter is required.
     * @example c20d86c4-1eb3-4d0b-afe9-c586df1e2136
     *
     * @var string
     */
    public $token;

    /**
     * @description The ID of the user\\"s VPC to be connected by the VPC integration instance.
     *
     * >  This parameter is in invitational preview and not available for public use.
     * @example vpc-m5eo7khlb4h4f8y9egsdg
     *
     * @var string
     */
    public $userVpcId;

    /**
     * @description The zone in which you want to create the instance. This parameter is required for a conventional dedicated instance and optional for a virtual private cloud (VPC) integration instance.
     *
     * @example cn-beijing-MAZ3(c,e)
     *
     * @var string
     */
    public $zoneId;

    /**
     * @description The network information when the instance is a VPC integration instance, such as the zone, vSwitch, and security group.
     *
     * >  This parameter is in invitational preview and not available for public use.
     * @var zoneVSwitchSecurityGroup[]
     */
    public $zoneVSwitchSecurityGroup;
    protected $_name = [
        'autoPay'                  => 'AutoPay',
        'chargeType'               => 'ChargeType',
        'duration'                 => 'Duration',
        'httpsPolicy'              => 'HttpsPolicy',
        'instanceCidr'             => 'InstanceCidr',
        'instanceName'             => 'InstanceName',
        'instanceSpec'             => 'InstanceSpec',
        'instanceType'             => 'InstanceType',
        'pricingCycle'             => 'PricingCycle',
        'tag'                      => 'Tag',
        'token'                    => 'Token',
        'userVpcId'                => 'UserVpcId',
        'zoneId'                   => 'ZoneId',
        'zoneVSwitchSecurityGroup' => 'ZoneVSwitchSecurityGroup',
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
        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->httpsPolicy) {
            $res['HttpsPolicy'] = $this->httpsPolicy;
        }
        if (null !== $this->instanceCidr) {
            $res['InstanceCidr'] = $this->instanceCidr;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->instanceSpec) {
            $res['InstanceSpec'] = $this->instanceSpec;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->pricingCycle) {
            $res['PricingCycle'] = $this->pricingCycle;
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
        if (null !== $this->token) {
            $res['Token'] = $this->token;
        }
        if (null !== $this->userVpcId) {
            $res['UserVpcId'] = $this->userVpcId;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }
        if (null !== $this->zoneVSwitchSecurityGroup) {
            $res['ZoneVSwitchSecurityGroup'] = [];
            if (null !== $this->zoneVSwitchSecurityGroup && \is_array($this->zoneVSwitchSecurityGroup)) {
                $n = 0;
                foreach ($this->zoneVSwitchSecurityGroup as $item) {
                    $res['ZoneVSwitchSecurityGroup'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoPay'])) {
            $model->autoPay = $map['AutoPay'];
        }
        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['HttpsPolicy'])) {
            $model->httpsPolicy = $map['HttpsPolicy'];
        }
        if (isset($map['InstanceCidr'])) {
            $model->instanceCidr = $map['InstanceCidr'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['InstanceSpec'])) {
            $model->instanceSpec = $map['InstanceSpec'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['PricingCycle'])) {
            $model->pricingCycle = $map['PricingCycle'];
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
        if (isset($map['Token'])) {
            $model->token = $map['Token'];
        }
        if (isset($map['UserVpcId'])) {
            $model->userVpcId = $map['UserVpcId'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }
        if (isset($map['ZoneVSwitchSecurityGroup'])) {
            if (!empty($map['ZoneVSwitchSecurityGroup'])) {
                $model->zoneVSwitchSecurityGroup = [];
                $n                               = 0;
                foreach ($map['ZoneVSwitchSecurityGroup'] as $item) {
                    $model->zoneVSwitchSecurityGroup[$n++] = null !== $item ? zoneVSwitchSecurityGroup::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
