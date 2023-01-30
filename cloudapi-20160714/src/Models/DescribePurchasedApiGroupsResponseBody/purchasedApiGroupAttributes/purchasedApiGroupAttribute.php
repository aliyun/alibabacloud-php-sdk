<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribePurchasedApiGroupsResponseBody\purchasedApiGroupAttributes;

use AlibabaCloud\Tea\Model;

class purchasedApiGroupAttribute extends Model
{
    /**
     * @description The ID of the region where the API group is located.
     *
     * @example POSTPAID
     *
     * @var string
     */
    public $billingType;

    /**
     * @description The name of the API group.
     *
     * @example 1
     *
     * @var string
     */
    public $description;

    /**
     * @description The description of the API group.
     *
     * @example 2021-12-19T00:00:00
     *
     * @var string
     */
    public $expireTime;

    /**
     * @description The maximum number of calls.
     *
     * @example 8e91f23f88f94348855b82c9a73209f3
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The ID of the API group.
     *
     * @example group1
     *
     * @var string
     */
    public $groupName;

    /**
     * @description The current number of calls.
     *
     * @example 10
     *
     * @var int
     */
    public $invokeTimesMax;

    /**
     * @description The billing method.
     *
     * @example 10
     *
     * @var int
     */
    public $invokeTimesNow;

    /**
     * @description The time when the API group expires.
     *
     * @example 2021-12-19T00:00:00
     *
     * @var string
     */
    public $purchasedTime;

    /**
     * @description auditing
     *
     * @example cn-shanghai
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The time when the API group was purchased.
     *
     * @example NORMAL
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'billingType'    => 'BillingType',
        'description'    => 'Description',
        'expireTime'     => 'ExpireTime',
        'groupId'        => 'GroupId',
        'groupName'      => 'GroupName',
        'invokeTimesMax' => 'InvokeTimesMax',
        'invokeTimesNow' => 'InvokeTimesNow',
        'purchasedTime'  => 'PurchasedTime',
        'regionId'       => 'RegionId',
        'status'         => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->billingType) {
            $res['BillingType'] = $this->billingType;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->invokeTimesMax) {
            $res['InvokeTimesMax'] = $this->invokeTimesMax;
        }
        if (null !== $this->invokeTimesNow) {
            $res['InvokeTimesNow'] = $this->invokeTimesNow;
        }
        if (null !== $this->purchasedTime) {
            $res['PurchasedTime'] = $this->purchasedTime;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['BillingType'])) {
            $model->billingType = $map['BillingType'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['InvokeTimesMax'])) {
            $model->invokeTimesMax = $map['InvokeTimesMax'];
        }
        if (isset($map['InvokeTimesNow'])) {
            $model->invokeTimesNow = $map['InvokeTimesNow'];
        }
        if (isset($map['PurchasedTime'])) {
            $model->purchasedTime = $map['PurchasedTime'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
