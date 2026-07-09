<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20230930\Models;

use AlibabaCloud\Dara\Model;

class DescribeDeductLogsShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $billInstanceId;

    /**
     * @var string
     */
    public $billingCommodityCode;

    /**
     * @var int
     */
    public $billingEndTime;

    /**
     * @var int
     */
    public $billingStartTime;

    /**
     * @var string
     */
    public $commodityCode;

    /**
     * @var string
     */
    public $ecIdAccountIdsShrink;

    /**
     * @var string
     */
    public $group;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $nbid;

    /**
     * @var int
     */
    public $pageNum;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $relationAccountIdsShrink;
    protected $_name = [
        'billInstanceId' => 'BillInstanceId',
        'billingCommodityCode' => 'BillingCommodityCode',
        'billingEndTime' => 'BillingEndTime',
        'billingStartTime' => 'BillingStartTime',
        'commodityCode' => 'CommodityCode',
        'ecIdAccountIdsShrink' => 'EcIdAccountIds',
        'group' => 'Group',
        'instanceId' => 'InstanceId',
        'nbid' => 'Nbid',
        'pageNum' => 'PageNum',
        'pageSize' => 'PageSize',
        'relationAccountIdsShrink' => 'RelationAccountIds',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->billInstanceId) {
            $res['BillInstanceId'] = $this->billInstanceId;
        }

        if (null !== $this->billingCommodityCode) {
            $res['BillingCommodityCode'] = $this->billingCommodityCode;
        }

        if (null !== $this->billingEndTime) {
            $res['BillingEndTime'] = $this->billingEndTime;
        }

        if (null !== $this->billingStartTime) {
            $res['BillingStartTime'] = $this->billingStartTime;
        }

        if (null !== $this->commodityCode) {
            $res['CommodityCode'] = $this->commodityCode;
        }

        if (null !== $this->ecIdAccountIdsShrink) {
            $res['EcIdAccountIds'] = $this->ecIdAccountIdsShrink;
        }

        if (null !== $this->group) {
            $res['Group'] = $this->group;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->nbid) {
            $res['Nbid'] = $this->nbid;
        }

        if (null !== $this->pageNum) {
            $res['PageNum'] = $this->pageNum;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->relationAccountIdsShrink) {
            $res['RelationAccountIds'] = $this->relationAccountIdsShrink;
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
        if (isset($map['BillInstanceId'])) {
            $model->billInstanceId = $map['BillInstanceId'];
        }

        if (isset($map['BillingCommodityCode'])) {
            $model->billingCommodityCode = $map['BillingCommodityCode'];
        }

        if (isset($map['BillingEndTime'])) {
            $model->billingEndTime = $map['BillingEndTime'];
        }

        if (isset($map['BillingStartTime'])) {
            $model->billingStartTime = $map['BillingStartTime'];
        }

        if (isset($map['CommodityCode'])) {
            $model->commodityCode = $map['CommodityCode'];
        }

        if (isset($map['EcIdAccountIds'])) {
            $model->ecIdAccountIdsShrink = $map['EcIdAccountIds'];
        }

        if (isset($map['Group'])) {
            $model->group = $map['Group'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['Nbid'])) {
            $model->nbid = $map['Nbid'];
        }

        if (isset($map['PageNum'])) {
            $model->pageNum = $map['PageNum'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['RelationAccountIds'])) {
            $model->relationAccountIdsShrink = $map['RelationAccountIds'];
        }

        return $model;
    }
}
