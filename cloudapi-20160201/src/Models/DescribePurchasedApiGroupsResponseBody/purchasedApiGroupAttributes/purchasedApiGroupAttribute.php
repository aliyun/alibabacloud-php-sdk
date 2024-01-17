<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160201\Models\DescribePurchasedApiGroupsResponseBody\purchasedApiGroupAttributes;

use AlibabaCloud\Tea\Model;

class purchasedApiGroupAttribute extends Model
{
    /**
     * @var string
     */
    public $billingType;

    /**
     * @var string
     */
    public $createdTime;

    /**
     * @var string
     */
    public $expireTime;

    /**
     * @var string
     */
    public $groupDescription;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var string
     */
    public $groupName;

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
    public $modifiedTime;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'billingType'      => 'BillingType',
        'createdTime'      => 'CreatedTime',
        'expireTime'       => 'ExpireTime',
        'groupDescription' => 'GroupDescription',
        'groupId'          => 'GroupId',
        'groupName'        => 'GroupName',
        'invokeTimesMax'   => 'InvokeTimesMax',
        'invokeTimesNow'   => 'InvokeTimesNow',
        'modifiedTime'     => 'ModifiedTime',
        'regionId'         => 'RegionId',
        'status'           => 'Status',
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
        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
        }
        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }
        if (null !== $this->groupDescription) {
            $res['GroupDescription'] = $this->groupDescription;
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
        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
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
        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
        }
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }
        if (isset($map['GroupDescription'])) {
            $model->groupDescription = $map['GroupDescription'];
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
        if (isset($map['ModifiedTime'])) {
            $model->modifiedTime = $map['ModifiedTime'];
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
