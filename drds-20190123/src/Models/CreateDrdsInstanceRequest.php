<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models;

use AlibabaCloud\Tea\Model;

class CreateDrdsInstanceRequest extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $zoneId;

    /**
     * @var string
     */
    public $type;

    /**
     * @var int
     */
    public $quantity;

    /**
     * @var string
     */
    public $instanceSeries;

    /**
     * @var string
     */
    public $specification;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $payType;

    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var string
     */
    public $vswitchId;

    /**
     * @var bool
     */
    public $isHa;

    /**
     * @var string
     */
    public $pricingCycle;

    /**
     * @var int
     */
    public $duration;

    /**
     * @var bool
     */
    public $isAutoRenew;

    /**
     * @var string
     */
    public $masterInstId;

    /**
     * @var int
     */
    public $mySQLVersion;

    /**
     * @var string
     */
    public $resourceGroupId;
    protected $_name = [
        'description'     => 'Description',
        'regionId'        => 'RegionId',
        'zoneId'          => 'ZoneId',
        'type'            => 'Type',
        'quantity'        => 'Quantity',
        'instanceSeries'  => 'InstanceSeries',
        'specification'   => 'Specification',
        'clientToken'     => 'ClientToken',
        'payType'         => 'PayType',
        'vpcId'           => 'VpcId',
        'vswitchId'       => 'VswitchId',
        'isHa'            => 'isHa',
        'pricingCycle'    => 'PricingCycle',
        'duration'        => 'Duration',
        'isAutoRenew'     => 'IsAutoRenew',
        'masterInstId'    => 'MasterInstId',
        'mySQLVersion'    => 'MySQLVersion',
        'resourceGroupId' => 'ResourceGroupId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->quantity) {
            $res['Quantity'] = $this->quantity;
        }
        if (null !== $this->instanceSeries) {
            $res['InstanceSeries'] = $this->instanceSeries;
        }
        if (null !== $this->specification) {
            $res['Specification'] = $this->specification;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->vswitchId) {
            $res['VswitchId'] = $this->vswitchId;
        }
        if (null !== $this->isHa) {
            $res['isHa'] = $this->isHa;
        }
        if (null !== $this->pricingCycle) {
            $res['PricingCycle'] = $this->pricingCycle;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
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
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
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
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Quantity'])) {
            $model->quantity = $map['Quantity'];
        }
        if (isset($map['InstanceSeries'])) {
            $model->instanceSeries = $map['InstanceSeries'];
        }
        if (isset($map['Specification'])) {
            $model->specification = $map['Specification'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['VswitchId'])) {
            $model->vswitchId = $map['VswitchId'];
        }
        if (isset($map['isHa'])) {
            $model->isHa = $map['isHa'];
        }
        if (isset($map['PricingCycle'])) {
            $model->pricingCycle = $map['PricingCycle'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
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
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        return $model;
    }
}
