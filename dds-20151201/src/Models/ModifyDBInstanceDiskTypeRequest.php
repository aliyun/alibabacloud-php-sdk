<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models;

use AlibabaCloud\Dara\Model;

class ModifyDBInstanceDiskTypeRequest extends Model
{
    /**
     * @var bool
     */
    public $autoPay;

    /**
     * @var string
     */
    public $autoRenew;

    /**
     * @var string
     */
    public $businessInfo;

    /**
     * @var string
     */
    public $couponNo;

    /**
     * @var string
     */
    public $DBInstanceId;

    /**
     * @var string
     */
    public $dbInstanceStorageType;

    /**
     * @var string
     */
    public $extraParam;

    /**
     * @var string
     */
    public $orderType;

    /**
     * @var int
     */
    public $provisionedIops;

    /**
     * @var int
     */
    public $resourceOwnerId;
    protected $_name = [
        'autoPay' => 'AutoPay',
        'autoRenew' => 'AutoRenew',
        'businessInfo' => 'BusinessInfo',
        'couponNo' => 'CouponNo',
        'DBInstanceId' => 'DBInstanceId',
        'dbInstanceStorageType' => 'DbInstanceStorageType',
        'extraParam' => 'ExtraParam',
        'orderType' => 'OrderType',
        'provisionedIops' => 'ProvisionedIops',
        'resourceOwnerId' => 'ResourceOwnerId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoPay) {
            $res['AutoPay'] = $this->autoPay;
        }

        if (null !== $this->autoRenew) {
            $res['AutoRenew'] = $this->autoRenew;
        }

        if (null !== $this->businessInfo) {
            $res['BusinessInfo'] = $this->businessInfo;
        }

        if (null !== $this->couponNo) {
            $res['CouponNo'] = $this->couponNo;
        }

        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }

        if (null !== $this->dbInstanceStorageType) {
            $res['DbInstanceStorageType'] = $this->dbInstanceStorageType;
        }

        if (null !== $this->extraParam) {
            $res['ExtraParam'] = $this->extraParam;
        }

        if (null !== $this->orderType) {
            $res['OrderType'] = $this->orderType;
        }

        if (null !== $this->provisionedIops) {
            $res['ProvisionedIops'] = $this->provisionedIops;
        }

        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
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
        if (isset($map['AutoPay'])) {
            $model->autoPay = $map['AutoPay'];
        }

        if (isset($map['AutoRenew'])) {
            $model->autoRenew = $map['AutoRenew'];
        }

        if (isset($map['BusinessInfo'])) {
            $model->businessInfo = $map['BusinessInfo'];
        }

        if (isset($map['CouponNo'])) {
            $model->couponNo = $map['CouponNo'];
        }

        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }

        if (isset($map['DbInstanceStorageType'])) {
            $model->dbInstanceStorageType = $map['DbInstanceStorageType'];
        }

        if (isset($map['ExtraParam'])) {
            $model->extraParam = $map['ExtraParam'];
        }

        if (isset($map['OrderType'])) {
            $model->orderType = $map['OrderType'];
        }

        if (isset($map['ProvisionedIops'])) {
            $model->provisionedIops = $map['ProvisionedIops'];
        }

        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }

        return $model;
    }
}
