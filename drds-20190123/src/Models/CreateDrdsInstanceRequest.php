<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models;

use AlibabaCloud\Tea\Model;

class CreateDrdsInstanceRequest extends Model
{
    /**
     * @description Specifies the client token that is used to ensure the idempotence of the request. You can use the client to generate the value, but you must ensure that it is unique among different requests. The token can only contain ASCII characters and cannot exceed 64 characters in length.
     *
     * @example c1dd299c-10c6-11ea-bbbb-************
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description Specifies the description of the instance. The description must meet the following requirements:
     *
     *   The description cannot contain the prefix http:// or https://.
     *   The description must start with a letter or a Chinese character, and can contain uppercase and lowercase letters, Chinese characters, digits, underscores (\_), and hyphens (-).
     *   The description must be 2 to 256 characters in length.
     *
     * @example test
     *
     * @var string
     */
    public $description;

    /**
     * @description Specifies the purchase duration of the subscription instance.
     *
     *   If the PricingCycle parameter is set to year, the value range of the Duration parameter is 1 to 3.
     *   If the PricingCycle parameter is set to month, the value range of the Duration parameter is 1 to 9.
     *
     * >  This parameter only takes effect when the PayType parameter is set to drdsPre.
     * @example 1
     *
     * @var int
     */
    public $duration;

    /**
     * @description Specifies the instance type of the instance. Valid values:
     *
     *   **drds.sn2.4c16g**: The instance is of the Starter Edition.
     *   **drds.sn2.8c32g**: The instance is of the Standard Edition
     *   **drds.sn2.16c64g**: The instance is of the Enterprise Edition.
     *
     * @example drds.sn2.4c16g
     *
     * @var string
     */
    public $instanceSeries;

    /**
     * @description Specifies whether to enable automatic renewal. Valid values:
     *
     *   **true**: If the PricingCycle parameter is set to month, the subscription is automatically renewed for one month. If the PricingCycle parameter is set to year, the subscription is automatically renewed for one year.
     *   **false**: The auto-renewal feature is disabled for the instance.
     *
     * >  This parameter only takes effect when the PayType parameter is set to drdsPre.
     * @example true
     *
     * @var bool
     */
    public $isAutoRenew;

    /**
     * @description Specifies the ID of the primary instance. This parameter is only required when you create a read-only instance.
     *
     * @example drds***********
     *
     * @var string
     */
    public $masterInstId;

    /**
     * @description Specifies the MySQL version that is supported by the instance. Valid values:
     *
     *   **5**: The instance is fully compatible with MySQL 5.x. This value is the default value.
     *   **8**: The instance is fully compatible with MySQL 8.0.
     *
     * >  This parameter only takes effect when you create a primary instance. By default, the MySQL version of the read-only instance is the same as that of the primary instance.
     * @example 5
     *
     * @var int
     */
    public $mySQLVersion;

    /**
     * @description Specifies the billing method of the instance. Valid values:
     *
     *   **drdsPre**: The instance uses the subscription billing method.
     *   **drdsPost**: The instance uses the pay-as-you-go billing method.
     *   **drdsRo**: By default, the pay-as-you-go billing method is used when you create read-only instances.
     *
     * @example drdsPost
     *
     * @var string
     */
    public $payType;

    /**
     * @description Specifies the unit of the subscription duration of the subscription instance. Valid values:
     *
     *   **year**: The unit of the subscription duration is year.
     *   **month**: The unit of the subscription duration is month.
     *
     * >  This parameter is required if you set the PayType parameter to drdsPre.
     * @example month
     *
     * @var string
     */
    public $pricingCycle;

    /**
     * @description Specifies the number of instances to be created. You can set the value only to 1. The value specifies that you can create one instance each time.
     *
     * @example 1
     *
     * @var int
     */
    public $quantity;

    /**
     * @description Specifies the region ID of the instance.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description Specifies the ID of the resource group.
     *
     * @example rg-************
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description Specifies the specification code of the instance. The value consists of the instance type and the specified instance specification. For example, you can set the value to drds.sn2.4c16g.8c32g.
     *
     * @example drds.sn2.4c16g.8C32g
     *
     * @var string
     */
    public $specification;

    /**
     * @description Specifies the type of the instance. Set the value to PRIVATE. The value PRIVATE specifies that the instance is a dedicated instance.
     *
     * >  You can also set the value to 1 to specify that the instance is a dedicated instance.
     * @example PRIVATE
     *
     * @var string
     */
    public $type;

    /**
     * @description Specifies the ID of the VPC.
     *
     * @example vpc-**********
     *
     * @var string
     */
    public $vpcId;

    /**
     * @description Specifies the ID of the vSwitch.
     *
     * @example vsw-**********
     *
     * @var string
     */
    public $vswitchId;

    /**
     * @description Specifies the zone ID of the instance.
     *
     * @example cn-hangzhou-e
     *
     * @var string
     */
    public $zoneId;

    /**
     * @description Specifies whether the instance is a high-availability instance.
     *
     * @example true
     *
     * @var bool
     */
    public $isHa;
    protected $_name = [
        'clientToken'     => 'ClientToken',
        'description'     => 'Description',
        'duration'        => 'Duration',
        'instanceSeries'  => 'InstanceSeries',
        'isAutoRenew'     => 'IsAutoRenew',
        'masterInstId'    => 'MasterInstId',
        'mySQLVersion'    => 'MySQLVersion',
        'payType'         => 'PayType',
        'pricingCycle'    => 'PricingCycle',
        'quantity'        => 'Quantity',
        'regionId'        => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
        'specification'   => 'Specification',
        'type'            => 'Type',
        'vpcId'           => 'VpcId',
        'vswitchId'       => 'VswitchId',
        'zoneId'          => 'ZoneId',
        'isHa'            => 'isHa',
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
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->instanceSeries) {
            $res['InstanceSeries'] = $this->instanceSeries;
        }
        if (null !== $this->isAutoRenew) {
            $res['IsAutoRenew'] = $this->isAutoRenew;
        }
        if (null !== $this->masterInstId) {
            $res['MasterInstId'] = $this->masterInstId;
        }
        if (null !== $this->mySQLVersion) {
            $res['MySQLVersion'] = $this->mySQLVersion;
        }
        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
        }
        if (null !== $this->pricingCycle) {
            $res['PricingCycle'] = $this->pricingCycle;
        }
        if (null !== $this->quantity) {
            $res['Quantity'] = $this->quantity;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->specification) {
            $res['Specification'] = $this->specification;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->vswitchId) {
            $res['VswitchId'] = $this->vswitchId;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }
        if (null !== $this->isHa) {
            $res['isHa'] = $this->isHa;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDrdsInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['InstanceSeries'])) {
            $model->instanceSeries = $map['InstanceSeries'];
        }
        if (isset($map['IsAutoRenew'])) {
            $model->isAutoRenew = $map['IsAutoRenew'];
        }
        if (isset($map['MasterInstId'])) {
            $model->masterInstId = $map['MasterInstId'];
        }
        if (isset($map['MySQLVersion'])) {
            $model->mySQLVersion = $map['MySQLVersion'];
        }
        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
        }
        if (isset($map['PricingCycle'])) {
            $model->pricingCycle = $map['PricingCycle'];
        }
        if (isset($map['Quantity'])) {
            $model->quantity = $map['Quantity'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['Specification'])) {
            $model->specification = $map['Specification'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['VswitchId'])) {
            $model->vswitchId = $map['VswitchId'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }
        if (isset($map['isHa'])) {
            $model->isHa = $map['isHa'];
        }

        return $model;
    }
}
