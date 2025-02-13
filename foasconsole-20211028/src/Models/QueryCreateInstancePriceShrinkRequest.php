<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Foasconsole\V20211028\Models;

use AlibabaCloud\Dara\Model;

class QueryCreateInstancePriceShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $architectureType;
    /**
     * @var bool
     */
    public $autoRenew;
    /**
     * @var string
     */
    public $chargeType;
    /**
     * @var int
     */
    public $duration;
    /**
     * @var string
     */
    public $extra;
    /**
     * @var bool
     */
    public $ha;
    /**
     * @var string
     */
    public $haResourceSpecShrink;
    /**
     * @var string
     */
    public $instanceName;
    /**
     * @var string
     */
    public $pricingCycle;
    /**
     * @var string
     */
    public $promotionCode;
    /**
     * @var string
     */
    public $region;
    /**
     * @var string
     */
    public $resourceSpecShrink;
    /**
     * @var string
     */
    public $storageShrink;
    /**
     * @var bool
     */
    public $usePromotionCode;
    /**
     * @var string
     */
    public $vSwitchIdsShrink;
    /**
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'architectureType'     => 'ArchitectureType',
        'autoRenew'            => 'AutoRenew',
        'chargeType'           => 'ChargeType',
        'duration'             => 'Duration',
        'extra'                => 'Extra',
        'ha'                   => 'Ha',
        'haResourceSpecShrink' => 'HaResourceSpec',
        'instanceName'         => 'InstanceName',
        'pricingCycle'         => 'PricingCycle',
        'promotionCode'        => 'PromotionCode',
        'region'               => 'Region',
        'resourceSpecShrink'   => 'ResourceSpec',
        'storageShrink'        => 'Storage',
        'usePromotionCode'     => 'UsePromotionCode',
        'vSwitchIdsShrink'     => 'VSwitchIds',
        'vpcId'                => 'VpcId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->architectureType) {
            $res['ArchitectureType'] = $this->architectureType;
        }

        if (null !== $this->autoRenew) {
            $res['AutoRenew'] = $this->autoRenew;
        }

        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }

        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }

        if (null !== $this->extra) {
            $res['Extra'] = $this->extra;
        }

        if (null !== $this->ha) {
            $res['Ha'] = $this->ha;
        }

        if (null !== $this->haResourceSpecShrink) {
            $res['HaResourceSpec'] = $this->haResourceSpecShrink;
        }

        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }

        if (null !== $this->pricingCycle) {
            $res['PricingCycle'] = $this->pricingCycle;
        }

        if (null !== $this->promotionCode) {
            $res['PromotionCode'] = $this->promotionCode;
        }

        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }

        if (null !== $this->resourceSpecShrink) {
            $res['ResourceSpec'] = $this->resourceSpecShrink;
        }

        if (null !== $this->storageShrink) {
            $res['Storage'] = $this->storageShrink;
        }

        if (null !== $this->usePromotionCode) {
            $res['UsePromotionCode'] = $this->usePromotionCode;
        }

        if (null !== $this->vSwitchIdsShrink) {
            $res['VSwitchIds'] = $this->vSwitchIdsShrink;
        }

        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ArchitectureType'])) {
            $model->architectureType = $map['ArchitectureType'];
        }

        if (isset($map['AutoRenew'])) {
            $model->autoRenew = $map['AutoRenew'];
        }

        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }

        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }

        if (isset($map['Extra'])) {
            $model->extra = $map['Extra'];
        }

        if (isset($map['Ha'])) {
            $model->ha = $map['Ha'];
        }

        if (isset($map['HaResourceSpec'])) {
            $model->haResourceSpecShrink = $map['HaResourceSpec'];
        }

        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }

        if (isset($map['PricingCycle'])) {
            $model->pricingCycle = $map['PricingCycle'];
        }

        if (isset($map['PromotionCode'])) {
            $model->promotionCode = $map['PromotionCode'];
        }

        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }

        if (isset($map['ResourceSpec'])) {
            $model->resourceSpecShrink = $map['ResourceSpec'];
        }

        if (isset($map['Storage'])) {
            $model->storageShrink = $map['Storage'];
        }

        if (isset($map['UsePromotionCode'])) {
            $model->usePromotionCode = $map['UsePromotionCode'];
        }

        if (isset($map['VSwitchIds'])) {
            $model->vSwitchIdsShrink = $map['VSwitchIds'];
        }

        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
