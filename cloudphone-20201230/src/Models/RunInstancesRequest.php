<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudphone\V20201230\Models;

use AlibabaCloud\SDK\Cloudphone\V20201230\Models\RunInstancesRequest\tag;
use AlibabaCloud\Tea\Model;

class RunInstancesRequest extends Model
{
    /**
     * @description The number of ECS instances that you want to create. Valid values: 1 to 100.
     *
     * Default value: 1.
     * @example 10
     *
     * @var int
     */
    public $amount;

    /**
     * @description Specifies whether to enable the auto-payment feature. Default value: true.
     *
     * @example true
     *
     * @var bool
     */
    public $autoPay;

    /**
     * @description Specifies whether to enable the auto-renewal feature. This parameter takes effect only if you set InstanceChargeType to PrePaid. Valid values:
     *
     *   true
     *   false (default)
     *
     * @example true
     *
     * @var bool
     */
    public $autoRenew;

    /**
     * @description The billing method of the ECP instance. Valid values:
     *
     *   PrePaid: subscription
     *   PostPaid (default): pay-as-you-go
     *
     * @example PostPaid
     *
     * @var string
     */
    public $chargeType;

    /**
     * @description The client token that is used to ensure the idempotence of the request. You can use the client to generate the token, but you must make sure that the token is unique among different requests. The token can contain only ASCII characters and cannot exceed 64 characters in length. For more information, see How to ensure idempotence.
     *
     * @example 473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The description of the ECP instance. The description must be 2 to 256 characters in length and cannot start with `http://` or `https://`.
     *
     * @example cloudphone instance
     *
     * @var string
     */
    public $description;

    /**
     * @description The bandwidth of the elastic IP address (EIP). Valid values: 1 to 200. If you specify this parameter, an ECP instance that uses an EIP with specified bandwidth is automatically created and associated with the ECP instance. If the ECP instance is released, the EIP is also released.
     *
     * @example 2
     *
     * @var int
     */
    public $eipBandwidth;

    /**
     * @description The ID of the image.
     *
     * @example cpm-xxxx
     *
     * @var string
     */
    public $imageId;

    /**
     * @description The name of the ECP instance. The name must be 2 to 128 characters in length. It must start with a letter but cannot start with `http://` or `https://`. It can contain letters, digits, colons (:), underscores (\_), periods (.), and hyphens (-). The default value of this parameter is the value of the InstanceId parameter.
     *
     * @example instance
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description The specifications of the ECP instance.
     *
     * @example ecp.ce.large
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description The name of the key pair that you want to use to connect to the instance. You can call the ImportKeyPair operation to import a key pair for cloud phones.
     *
     * @example keypair
     *
     * @var string
     */
    public $keyPairName;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The subscription duration. Default value: 1.
     *
     *   Valid values if you set PeriodUnit to Month: 1, 2, 3, and 6.
     *   Valid values if you set PeriodUnit to Year: 1, 2, 3, 4, and 5.
     *
     * @example 1
     *
     * @var int
     */
    public $period;

    /**
     * @description The unit of the subscription duration. Valid values:
     *
     *   Year
     *   Month (default)
     *
     * @example Month
     *
     * @var string
     */
    public $periodUnit;

    /**
     * @description The private IP address of the cloud phone. When you configure a private IP address for an ECP instance, you must select an idle CIDR block from the CIDR blocks of the vSwitch (VSwitchId). When you specify this parameter, take note of the following items: After you specify the PrivateIpAddress parameter, you must set Amount to 1, which indicates that a cloud phone with a specific private IP address is created.
     *
     * @example 192.168.157.224
     *
     * @var string
     */
    public $privateIpAddress;

    /**
     * @description The ID of the region.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The resolution that you want to select for the ECP instance. You can query the resolutions that are supported by the current instance by calling the DescribeInstanceTypes operation and select an appropriate resolution.
     *
     * @example 1920*1080
     *
     * @var string
     */
    public $resolution;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @description The ID of the security group that the ECP instance uses. The security group is the same as that of the Elastic Compute Service (ECS) instance that you use.
     *
     * @example sg-xxxxx
     *
     * @var string
     */
    public $securityGroupId;

    /**
     * @description The tags of the ECP instance.
     *
     * @var tag[]
     */
    public $tag;

    /**
     * @description The ID of the vSwitch.
     *
     * @example vsw-xxxx
     *
     * @var string
     */
    public $vSwitchId;
    protected $_name = [
        'amount'               => 'Amount',
        'autoPay'              => 'AutoPay',
        'autoRenew'            => 'AutoRenew',
        'chargeType'           => 'ChargeType',
        'clientToken'          => 'ClientToken',
        'description'          => 'Description',
        'eipBandwidth'         => 'EipBandwidth',
        'imageId'              => 'ImageId',
        'instanceName'         => 'InstanceName',
        'instanceType'         => 'InstanceType',
        'keyPairName'          => 'KeyPairName',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'period'               => 'Period',
        'periodUnit'           => 'PeriodUnit',
        'privateIpAddress'     => 'PrivateIpAddress',
        'regionId'             => 'RegionId',
        'resolution'           => 'Resolution',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'securityGroupId'      => 'SecurityGroupId',
        'tag'                  => 'Tag',
        'vSwitchId'            => 'VSwitchId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->amount) {
            $res['Amount'] = $this->amount;
        }
        if (null !== $this->autoPay) {
            $res['AutoPay'] = $this->autoPay;
        }
        if (null !== $this->autoRenew) {
            $res['AutoRenew'] = $this->autoRenew;
        }
        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->eipBandwidth) {
            $res['EipBandwidth'] = $this->eipBandwidth;
        }
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->keyPairName) {
            $res['KeyPairName'] = $this->keyPairName;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }
        if (null !== $this->periodUnit) {
            $res['PeriodUnit'] = $this->periodUnit;
        }
        if (null !== $this->privateIpAddress) {
            $res['PrivateIpAddress'] = $this->privateIpAddress;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resolution) {
            $res['Resolution'] = $this->resolution;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->securityGroupId) {
            $res['SecurityGroupId'] = $this->securityGroupId;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RunInstancesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Amount'])) {
            $model->amount = $map['Amount'];
        }
        if (isset($map['AutoPay'])) {
            $model->autoPay = $map['AutoPay'];
        }
        if (isset($map['AutoRenew'])) {
            $model->autoRenew = $map['AutoRenew'];
        }
        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['EipBandwidth'])) {
            $model->eipBandwidth = $map['EipBandwidth'];
        }
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['KeyPairName'])) {
            $model->keyPairName = $map['KeyPairName'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }
        if (isset($map['PeriodUnit'])) {
            $model->periodUnit = $map['PeriodUnit'];
        }
        if (isset($map['PrivateIpAddress'])) {
            $model->privateIpAddress = $map['PrivateIpAddress'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Resolution'])) {
            $model->resolution = $map['Resolution'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['SecurityGroupId'])) {
            $model->securityGroupId = $map['SecurityGroupId'];
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

        return $model;
    }
}
