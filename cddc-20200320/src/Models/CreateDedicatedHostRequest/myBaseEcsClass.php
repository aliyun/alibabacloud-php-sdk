<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cddc\V20200320\Models\CreateDedicatedHostRequest;

use AlibabaCloud\Tea\Model;

class myBaseEcsClass extends Model
{
    /**
     * @var int
     */
    public $amount;

    /**
     * @var bool
     */
    public $autoRenew;

    /**
     * @var string
     */
    public $chargeType;

    /**
     * @var string
     */
    public $dataDiskCategory;

    /**
     * @var int
     */
    public $dataDiskCount;

    /**
     * @var int
     */
    public $dataDiskSize;

    /**
     * @var string
     */
    public $depolymentSetId;

    /**
     * @var string
     */
    public $ecsClassCode;

    /**
     * @var string
     */
    public $internetChargeType;

    /**
     * @var int
     */
    public $internetMaxBandwidthOut;

    /**
     * @var string
     */
    public $keyPairName;

    /**
     * @var string
     */
    public $password;

    /**
     * @var int
     */
    public $period;

    /**
     * @var string
     */
    public $periodType;

    /**
     * @var string[]
     */
    public $securityGroupIds;

    /**
     * @var string
     */
    public $systemDiskCategory;

    /**
     * @var int
     */
    public $systemDiskSize;

    /**
     * @var string[]
     */
    public $tags;
    protected $_name = [
        'amount'                  => 'Amount',
        'autoRenew'               => 'AutoRenew',
        'chargeType'              => 'ChargeType',
        'dataDiskCategory'        => 'DataDiskCategory',
        'dataDiskCount'           => 'DataDiskCount',
        'dataDiskSize'            => 'DataDiskSize',
        'depolymentSetId'         => 'DepolymentSetId',
        'ecsClassCode'            => 'EcsClassCode',
        'internetChargeType'      => 'InternetChargeType',
        'internetMaxBandwidthOut' => 'InternetMaxBandwidthOut',
        'keyPairName'             => 'KeyPairName',
        'password'                => 'Password',
        'period'                  => 'Period',
        'periodType'              => 'PeriodType',
        'securityGroupIds'        => 'SecurityGroupIds',
        'systemDiskCategory'      => 'SystemDiskCategory',
        'systemDiskSize'          => 'SystemDiskSize',
        'tags'                    => 'Tags',
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
        if (null !== $this->autoRenew) {
            $res['AutoRenew'] = $this->autoRenew;
        }
        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }
        if (null !== $this->dataDiskCategory) {
            $res['DataDiskCategory'] = $this->dataDiskCategory;
        }
        if (null !== $this->dataDiskCount) {
            $res['DataDiskCount'] = $this->dataDiskCount;
        }
        if (null !== $this->dataDiskSize) {
            $res['DataDiskSize'] = $this->dataDiskSize;
        }
        if (null !== $this->depolymentSetId) {
            $res['DepolymentSetId'] = $this->depolymentSetId;
        }
        if (null !== $this->ecsClassCode) {
            $res['EcsClassCode'] = $this->ecsClassCode;
        }
        if (null !== $this->internetChargeType) {
            $res['InternetChargeType'] = $this->internetChargeType;
        }
        if (null !== $this->internetMaxBandwidthOut) {
            $res['InternetMaxBandwidthOut'] = $this->internetMaxBandwidthOut;
        }
        if (null !== $this->keyPairName) {
            $res['KeyPairName'] = $this->keyPairName;
        }
        if (null !== $this->password) {
            $res['Password'] = $this->password;
        }
        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }
        if (null !== $this->periodType) {
            $res['PeriodType'] = $this->periodType;
        }
        if (null !== $this->securityGroupIds) {
            $res['SecurityGroupIds'] = $this->securityGroupIds;
        }
        if (null !== $this->systemDiskCategory) {
            $res['SystemDiskCategory'] = $this->systemDiskCategory;
        }
        if (null !== $this->systemDiskSize) {
            $res['SystemDiskSize'] = $this->systemDiskSize;
        }
        if (null !== $this->tags) {
            $res['Tags'] = $this->tags;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return myBaseEcsClass
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Amount'])) {
            $model->amount = $map['Amount'];
        }
        if (isset($map['AutoRenew'])) {
            $model->autoRenew = $map['AutoRenew'];
        }
        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }
        if (isset($map['DataDiskCategory'])) {
            $model->dataDiskCategory = $map['DataDiskCategory'];
        }
        if (isset($map['DataDiskCount'])) {
            $model->dataDiskCount = $map['DataDiskCount'];
        }
        if (isset($map['DataDiskSize'])) {
            $model->dataDiskSize = $map['DataDiskSize'];
        }
        if (isset($map['DepolymentSetId'])) {
            $model->depolymentSetId = $map['DepolymentSetId'];
        }
        if (isset($map['EcsClassCode'])) {
            $model->ecsClassCode = $map['EcsClassCode'];
        }
        if (isset($map['InternetChargeType'])) {
            $model->internetChargeType = $map['InternetChargeType'];
        }
        if (isset($map['InternetMaxBandwidthOut'])) {
            $model->internetMaxBandwidthOut = $map['InternetMaxBandwidthOut'];
        }
        if (isset($map['KeyPairName'])) {
            $model->keyPairName = $map['KeyPairName'];
        }
        if (isset($map['Password'])) {
            $model->password = $map['Password'];
        }
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }
        if (isset($map['PeriodType'])) {
            $model->periodType = $map['PeriodType'];
        }
        if (isset($map['SecurityGroupIds'])) {
            if (!empty($map['SecurityGroupIds'])) {
                $model->securityGroupIds = $map['SecurityGroupIds'];
            }
        }
        if (isset($map['SystemDiskCategory'])) {
            $model->systemDiskCategory = $map['SystemDiskCategory'];
        }
        if (isset($map['SystemDiskSize'])) {
            $model->systemDiskSize = $map['SystemDiskSize'];
        }
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = $map['Tags'];
            }
        }

        return $model;
    }
}
