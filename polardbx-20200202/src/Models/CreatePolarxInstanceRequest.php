<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models;

use AlibabaCloud\Tea\Model;

class CreatePolarxInstanceRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $duration;

    /**
     * @var string
     */
    public $instanceSeries;

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
    public $payType;

    /**
     * @var string
     */
    public $pricingCycle;

    /**
     * @var int
     */
    public $quantity;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $specification;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var string
     */
    public $vswitchId;

    /**
     * @var string
     */
    public $zoneId;

    /**
     * @var bool
     */
    public $isHa;
    protected $_name = [
        'clientToken'    => 'ClientToken',
        'description'    => 'Description',
        'duration'       => 'Duration',
        'instanceSeries' => 'InstanceSeries',
        'isAutoRenew'    => 'IsAutoRenew',
        'masterInstId'   => 'MasterInstId',
        'mySQLVersion'   => 'MySQLVersion',
        'payType'        => 'PayType',
        'pricingCycle'   => 'PricingCycle',
        'quantity'       => 'Quantity',
        'regionId'       => 'RegionId',
        'specification'  => 'Specification',
        'type'           => 'Type',
        'vpcId'          => 'VpcId',
        'vswitchId'      => 'VswitchId',
        'zoneId'         => 'ZoneId',
        'isHa'           => 'isHa',
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
     * @return CreatePolarxInstanceRequest
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
