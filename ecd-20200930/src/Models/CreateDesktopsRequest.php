<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class CreateDesktopsRequest extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var string
     */
    public $bundleId;

    /**
     * @var int
     */
    public $systemDiskSize;

    /**
     * @var int
     */
    public $dataDiskSize;

    /**
     * @var string
     */
    public $desktopName;

    /**
     * @var string
     */
    public $userName;

    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var int
     */
    public $amount;

    /**
     * @var string
     */
    public $directoryId;

    /**
     * @var string[]
     */
    public $endUserId;

    /**
     * @var string
     */
    public $policyGroupId;

    /**
     * @var string
     */
    public $chargeType;

    /**
     * @var int
     */
    public $period;

    /**
     * @var string
     */
    public $periodUnit;

    /**
     * @var bool
     */
    public $autoPay;
    protected $_name = [
        'regionId'       => 'RegionId',
        'groupId'        => 'GroupId',
        'bundleId'       => 'BundleId',
        'systemDiskSize' => 'SystemDiskSize',
        'dataDiskSize'   => 'DataDiskSize',
        'desktopName'    => 'DesktopName',
        'userName'       => 'UserName',
        'vpcId'          => 'VpcId',
        'amount'         => 'Amount',
        'directoryId'    => 'DirectoryId',
        'endUserId'      => 'EndUserId',
        'policyGroupId'  => 'PolicyGroupId',
        'chargeType'     => 'ChargeType',
        'period'         => 'Period',
        'periodUnit'     => 'PeriodUnit',
        'autoPay'        => 'AutoPay',
    ];

    public function validate()
    {
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('bundleId', $this->bundleId, true);
        Model::validateRequired('endUserId', $this->endUserId, true);
        Model::validateRequired('policyGroupId', $this->policyGroupId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->bundleId) {
            $res['BundleId'] = $this->bundleId;
        }
        if (null !== $this->systemDiskSize) {
            $res['SystemDiskSize'] = $this->systemDiskSize;
        }
        if (null !== $this->dataDiskSize) {
            $res['DataDiskSize'] = $this->dataDiskSize;
        }
        if (null !== $this->desktopName) {
            $res['DesktopName'] = $this->desktopName;
        }
        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->amount) {
            $res['Amount'] = $this->amount;
        }
        if (null !== $this->directoryId) {
            $res['DirectoryId'] = $this->directoryId;
        }
        if (null !== $this->endUserId) {
            $res['EndUserId'] = $this->endUserId;
        }
        if (null !== $this->policyGroupId) {
            $res['PolicyGroupId'] = $this->policyGroupId;
        }
        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }
        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }
        if (null !== $this->periodUnit) {
            $res['PeriodUnit'] = $this->periodUnit;
        }
        if (null !== $this->autoPay) {
            $res['AutoPay'] = $this->autoPay;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDesktopsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['BundleId'])) {
            $model->bundleId = $map['BundleId'];
        }
        if (isset($map['SystemDiskSize'])) {
            $model->systemDiskSize = $map['SystemDiskSize'];
        }
        if (isset($map['DataDiskSize'])) {
            $model->dataDiskSize = $map['DataDiskSize'];
        }
        if (isset($map['DesktopName'])) {
            $model->desktopName = $map['DesktopName'];
        }
        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['Amount'])) {
            $model->amount = $map['Amount'];
        }
        if (isset($map['DirectoryId'])) {
            $model->directoryId = $map['DirectoryId'];
        }
        if (isset($map['EndUserId'])) {
            if (!empty($map['EndUserId'])) {
                $model->endUserId = $map['EndUserId'];
            }
        }
        if (isset($map['PolicyGroupId'])) {
            $model->policyGroupId = $map['PolicyGroupId'];
        }
        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }
        if (isset($map['PeriodUnit'])) {
            $model->periodUnit = $map['PeriodUnit'];
        }
        if (isset($map['AutoPay'])) {
            $model->autoPay = $map['AutoPay'];
        }

        return $model;
    }
}
