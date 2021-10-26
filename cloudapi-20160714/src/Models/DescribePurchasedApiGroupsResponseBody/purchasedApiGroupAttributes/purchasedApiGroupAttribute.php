<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribePurchasedApiGroupsResponseBody\purchasedApiGroupAttributes;

use AlibabaCloud\Tea\Model;

class purchasedApiGroupAttribute extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $purchasedTime;

    /**
     * @var string
     */
    public $expireTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $groupName;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var int
     */
    public $invokeTimesMax;

    /**
     * @var int
     */
    public $invokeTimesNow;

    /**
     * @var string
     */
    public $billingType;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'status'         => 'Status',
        'purchasedTime'  => 'PurchasedTime',
        'expireTime'     => 'ExpireTime',
        'description'    => 'Description',
        'groupName'      => 'GroupName',
        'groupId'        => 'GroupId',
        'invokeTimesMax' => 'InvokeTimesMax',
        'invokeTimesNow' => 'InvokeTimesNow',
        'billingType'    => 'BillingType',
        'regionId'       => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->purchasedTime) {
            $res['PurchasedTime'] = $this->purchasedTime;
        }
        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->invokeTimesMax) {
            $res['InvokeTimesMax'] = $this->invokeTimesMax;
        }
        if (null !== $this->invokeTimesNow) {
            $res['InvokeTimesNow'] = $this->invokeTimesNow;
        }
        if (null !== $this->billingType) {
            $res['BillingType'] = $this->billingType;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return purchasedApiGroupAttribute
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['PurchasedTime'])) {
            $model->purchasedTime = $map['PurchasedTime'];
        }
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['InvokeTimesMax'])) {
            $model->invokeTimesMax = $map['InvokeTimesMax'];
        }
        if (isset($map['InvokeTimesNow'])) {
            $model->invokeTimesNow = $map['InvokeTimesNow'];
        }
        if (isset($map['BillingType'])) {
            $model->billingType = $map['BillingType'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
