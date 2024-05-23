<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20171016\Models;

use AlibabaCloud\Tea\Model;

class CreateDrdsInstanceRequest extends Model
{
    /**
     * @example DEWCEWQA
     *
     * @var string
     */
    public $clientToken;

    /**
     * @example This is a test instance
     *
     * @var string
     */
    public $description;

    /**
     * @example 5
     *
     * @var int
     */
    public $duration;

    /**
     * @example drds.sn2.4c16g
     *
     * @var string
     */
    public $instanceSeries;

    /**
     * @example true
     *
     * @var bool
     */
    public $isAutoRenew;

    /**
     * @example false
     *
     * @var bool
     */
    public $isHa;

    /**
     * @description This parameter is required.
     *
     * @example drdsPre
     *
     * @var string
     */
    public $payType;

    /**
     * @example month
     *
     * @var string
     */
    public $pricingCycle;

    /**
     * @description This parameter is required.
     *
     * @example 1
     *
     * @var int
     */
    public $quantity;

    /**
     * @description This parameter is required.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description This parameter is required.
     *
     * @example drds.sn2.4c8g.8C16G
     *
     * @var string
     */
    public $specification;

    /**
     * @description This parameter is required.
     *
     * @example PRIVATE
     *
     * @var string
     */
    public $type;

    /**
     * @example vpc-en23cxsel1
     *
     * @var string
     */
    public $vpcId;

    /**
     * @example vsw-ewk32dsk
     *
     * @var string
     */
    public $vswitchId;

    /**
     * @description This parameter is required.
     *
     * @example cn-hangzhou-e
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'clientToken'    => 'ClientToken',
        'description'    => 'Description',
        'duration'       => 'Duration',
        'instanceSeries' => 'InstanceSeries',
        'isAutoRenew'    => 'IsAutoRenew',
        'isHa'           => 'IsHa',
        'payType'        => 'PayType',
        'pricingCycle'   => 'PricingCycle',
        'quantity'       => 'Quantity',
        'regionId'       => 'RegionId',
        'specification'  => 'Specification',
        'type'           => 'Type',
        'vpcId'          => 'VpcId',
        'vswitchId'      => 'VswitchId',
        'zoneId'         => 'ZoneId',
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
        if (null !== $this->isHa) {
            $res['IsHa'] = $this->isHa;
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
        if (isset($map['IsHa'])) {
            $model->isHa = $map['IsHa'];
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

        return $model;
    }
}
