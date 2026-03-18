<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddosbgp\V20180720\Models\DescribeInstanceListResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\DescribeInstanceListResponseBody\instanceList\autoProtectCondition;

class instanceList extends Model
{
    /**
     * @var autoProtectCondition
     */
    public $autoProtectCondition;

    /**
     * @var bool
     */
    public $autoRenewal;

    /**
     * @var string
     */
    public $blackholdingCount;

    /**
     * @var string
     */
    public $commodityType;

    /**
     * @var int
     */
    public $coverageType;

    /**
     * @var int
     */
    public $debtStatus;

    /**
     * @var int
     */
    public $expireTime;

    /**
     * @var int
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $instanceType;

    /**
     * @var string
     */
    public $ipType;

    /**
     * @var string
     */
    public $product;

    /**
     * @var string
     */
    public $remark;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'autoProtectCondition' => 'AutoProtectCondition',
        'autoRenewal' => 'AutoRenewal',
        'blackholdingCount' => 'BlackholdingCount',
        'commodityType' => 'CommodityType',
        'coverageType' => 'CoverageType',
        'debtStatus' => 'DebtStatus',
        'expireTime' => 'ExpireTime',
        'gmtCreate' => 'GmtCreate',
        'instanceId' => 'InstanceId',
        'instanceType' => 'InstanceType',
        'ipType' => 'IpType',
        'product' => 'Product',
        'remark' => 'Remark',
        'resourceGroupId' => 'ResourceGroupId',
        'status' => 'Status',
    ];

    public function validate()
    {
        if (null !== $this->autoProtectCondition) {
            $this->autoProtectCondition->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoProtectCondition) {
            $res['AutoProtectCondition'] = null !== $this->autoProtectCondition ? $this->autoProtectCondition->toArray($noStream) : $this->autoProtectCondition;
        }

        if (null !== $this->autoRenewal) {
            $res['AutoRenewal'] = $this->autoRenewal;
        }

        if (null !== $this->blackholdingCount) {
            $res['BlackholdingCount'] = $this->blackholdingCount;
        }

        if (null !== $this->commodityType) {
            $res['CommodityType'] = $this->commodityType;
        }

        if (null !== $this->coverageType) {
            $res['CoverageType'] = $this->coverageType;
        }

        if (null !== $this->debtStatus) {
            $res['DebtStatus'] = $this->debtStatus;
        }

        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }

        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }

        if (null !== $this->ipType) {
            $res['IpType'] = $this->ipType;
        }

        if (null !== $this->product) {
            $res['Product'] = $this->product;
        }

        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['AutoProtectCondition'])) {
            $model->autoProtectCondition = autoProtectCondition::fromMap($map['AutoProtectCondition']);
        }

        if (isset($map['AutoRenewal'])) {
            $model->autoRenewal = $map['AutoRenewal'];
        }

        if (isset($map['BlackholdingCount'])) {
            $model->blackholdingCount = $map['BlackholdingCount'];
        }

        if (isset($map['CommodityType'])) {
            $model->commodityType = $map['CommodityType'];
        }

        if (isset($map['CoverageType'])) {
            $model->coverageType = $map['CoverageType'];
        }

        if (isset($map['DebtStatus'])) {
            $model->debtStatus = $map['DebtStatus'];
        }

        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }

        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }

        if (isset($map['IpType'])) {
            $model->ipType = $map['IpType'];
        }

        if (isset($map['Product'])) {
            $model->product = $map['Product'];
        }

        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
