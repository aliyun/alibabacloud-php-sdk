<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeDiagnoseResponseBody\diagnoseInstances;

use AlibabaCloud\Tea\Model;

class diagnoseInstance extends Model
{
    /**
     * @var int
     */
    public $amount;

    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $diagnoseAction;

    /**
     * @var string
     */
    public $diagnoseId;

    /**
     * @var string
     */
    public $diagnoseRequestId;

    /**
     * @var string
     */
    public $diskCategory;

    /**
     * @var string
     */
    public $errorCode;

    /**
     * @var string
     */
    public $expireTime;

    /**
     * @var string
     */
    public $instanceChargeType;

    /**
     * @var string
     */
    public $instanceTypeName;

    /**
     * @var string
     */
    public $izNo;

    /**
     * @var string
     */
    public $mark;

    /**
     * @var string
     */
    public $modificationTime;

    /**
     * @var string
     */
    public $networkType;

    /**
     * @var int
     */
    public $period;

    /**
     * @var string
     */
    public $periodUnit;

    /**
     * @var string
     */
    public $product;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $solutions;

    /**
     * @var int
     */
    public $star;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'amount'             => 'Amount',
        'creationTime'       => 'CreationTime',
        'diagnoseAction'     => 'DiagnoseAction',
        'diagnoseId'         => 'DiagnoseId',
        'diagnoseRequestId'  => 'DiagnoseRequestId',
        'diskCategory'       => 'DiskCategory',
        'errorCode'          => 'ErrorCode',
        'expireTime'         => 'ExpireTime',
        'instanceChargeType' => 'InstanceChargeType',
        'instanceTypeName'   => 'InstanceTypeName',
        'izNo'               => 'IzNo',
        'mark'               => 'Mark',
        'modificationTime'   => 'ModificationTime',
        'networkType'        => 'NetworkType',
        'period'             => 'Period',
        'periodUnit'         => 'PeriodUnit',
        'product'            => 'Product',
        'regionId'           => 'RegionId',
        'solutions'          => 'Solutions',
        'star'               => 'Star',
        'status'             => 'Status',
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
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->diagnoseAction) {
            $res['DiagnoseAction'] = $this->diagnoseAction;
        }
        if (null !== $this->diagnoseId) {
            $res['DiagnoseId'] = $this->diagnoseId;
        }
        if (null !== $this->diagnoseRequestId) {
            $res['DiagnoseRequestId'] = $this->diagnoseRequestId;
        }
        if (null !== $this->diskCategory) {
            $res['DiskCategory'] = $this->diskCategory;
        }
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }
        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }
        if (null !== $this->instanceChargeType) {
            $res['InstanceChargeType'] = $this->instanceChargeType;
        }
        if (null !== $this->instanceTypeName) {
            $res['InstanceTypeName'] = $this->instanceTypeName;
        }
        if (null !== $this->izNo) {
            $res['IzNo'] = $this->izNo;
        }
        if (null !== $this->mark) {
            $res['Mark'] = $this->mark;
        }
        if (null !== $this->modificationTime) {
            $res['ModificationTime'] = $this->modificationTime;
        }
        if (null !== $this->networkType) {
            $res['NetworkType'] = $this->networkType;
        }
        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }
        if (null !== $this->periodUnit) {
            $res['PeriodUnit'] = $this->periodUnit;
        }
        if (null !== $this->product) {
            $res['Product'] = $this->product;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->solutions) {
            $res['Solutions'] = $this->solutions;
        }
        if (null !== $this->star) {
            $res['Star'] = $this->star;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return diagnoseInstance
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Amount'])) {
            $model->amount = $map['Amount'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['DiagnoseAction'])) {
            $model->diagnoseAction = $map['DiagnoseAction'];
        }
        if (isset($map['DiagnoseId'])) {
            $model->diagnoseId = $map['DiagnoseId'];
        }
        if (isset($map['DiagnoseRequestId'])) {
            $model->diagnoseRequestId = $map['DiagnoseRequestId'];
        }
        if (isset($map['DiskCategory'])) {
            $model->diskCategory = $map['DiskCategory'];
        }
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }
        if (isset($map['InstanceChargeType'])) {
            $model->instanceChargeType = $map['InstanceChargeType'];
        }
        if (isset($map['InstanceTypeName'])) {
            $model->instanceTypeName = $map['InstanceTypeName'];
        }
        if (isset($map['IzNo'])) {
            $model->izNo = $map['IzNo'];
        }
        if (isset($map['Mark'])) {
            $model->mark = $map['Mark'];
        }
        if (isset($map['ModificationTime'])) {
            $model->modificationTime = $map['ModificationTime'];
        }
        if (isset($map['NetworkType'])) {
            $model->networkType = $map['NetworkType'];
        }
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }
        if (isset($map['PeriodUnit'])) {
            $model->periodUnit = $map['PeriodUnit'];
        }
        if (isset($map['Product'])) {
            $model->product = $map['Product'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Solutions'])) {
            $model->solutions = $map['Solutions'];
        }
        if (isset($map['Star'])) {
            $model->star = $map['Star'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
