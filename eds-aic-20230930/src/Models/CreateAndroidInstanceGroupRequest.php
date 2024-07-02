<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models;

use AlibabaCloud\Tea\Model;

class CreateAndroidInstanceGroupRequest extends Model
{
    /**
     * @var int
     */
    public $amount;

    /**
     * @example false
     *
     * @var bool
     */
    public $autoPay;

    /**
     * @example false
     *
     * @var bool
     */
    public $autoRenew;

    /**
     * @description This parameter is required.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $bizRegionId;

    /**
     * @example PostPaid
     *
     * @var string
     */
    public $chargeType;

    /**
     * @description This parameter is required.
     *
     * @example imgc-06zyt9m93zwax****
     *
     * @var string
     */
    public $imageId;

    /**
     * @var string
     */
    public $instanceGroupName;

    /**
     * @description This parameter is required.
     *
     * @example acp.basic.small
     *
     * @var string
     */
    public $instanceGroupSpec;

    /**
     * @example 1
     *
     * @var int
     */
    public $numberOfInstances;

    /**
     * @example cn-hangzhou+dir-745976****
     *
     * @var string
     */
    public $officeSiteId;

    /**
     * @example 1
     *
     * @var int
     */
    public $period;

    /**
     * @example Month
     *
     * @var string
     */
    public $periodUnit;

    /**
     * @description This parameter is required.
     *
     * @example pg-b7bxrrwxkijjh****
     *
     * @var string
     */
    public $policyGroupId;

    /**
     * @example vsw-uf61uvzhz8ejaw776****
     *
     * @var string
     */
    public $vSwitchId;
    protected $_name = [
        'amount'            => 'Amount',
        'autoPay'           => 'AutoPay',
        'autoRenew'         => 'AutoRenew',
        'bizRegionId'       => 'BizRegionId',
        'chargeType'        => 'ChargeType',
        'imageId'           => 'ImageId',
        'instanceGroupName' => 'InstanceGroupName',
        'instanceGroupSpec' => 'InstanceGroupSpec',
        'numberOfInstances' => 'NumberOfInstances',
        'officeSiteId'      => 'OfficeSiteId',
        'period'            => 'Period',
        'periodUnit'        => 'PeriodUnit',
        'policyGroupId'     => 'PolicyGroupId',
        'vSwitchId'         => 'VSwitchId',
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
        if (null !== $this->bizRegionId) {
            $res['BizRegionId'] = $this->bizRegionId;
        }
        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }
        if (null !== $this->instanceGroupName) {
            $res['InstanceGroupName'] = $this->instanceGroupName;
        }
        if (null !== $this->instanceGroupSpec) {
            $res['InstanceGroupSpec'] = $this->instanceGroupSpec;
        }
        if (null !== $this->numberOfInstances) {
            $res['NumberOfInstances'] = $this->numberOfInstances;
        }
        if (null !== $this->officeSiteId) {
            $res['OfficeSiteId'] = $this->officeSiteId;
        }
        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }
        if (null !== $this->periodUnit) {
            $res['PeriodUnit'] = $this->periodUnit;
        }
        if (null !== $this->policyGroupId) {
            $res['PolicyGroupId'] = $this->policyGroupId;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateAndroidInstanceGroupRequest
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
        if (isset($map['BizRegionId'])) {
            $model->bizRegionId = $map['BizRegionId'];
        }
        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }
        if (isset($map['InstanceGroupName'])) {
            $model->instanceGroupName = $map['InstanceGroupName'];
        }
        if (isset($map['InstanceGroupSpec'])) {
            $model->instanceGroupSpec = $map['InstanceGroupSpec'];
        }
        if (isset($map['NumberOfInstances'])) {
            $model->numberOfInstances = $map['NumberOfInstances'];
        }
        if (isset($map['OfficeSiteId'])) {
            $model->officeSiteId = $map['OfficeSiteId'];
        }
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }
        if (isset($map['PeriodUnit'])) {
            $model->periodUnit = $map['PeriodUnit'];
        }
        if (isset($map['PolicyGroupId'])) {
            $model->policyGroupId = $map['PolicyGroupId'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }

        return $model;
    }
}
