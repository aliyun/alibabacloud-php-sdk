<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models;

use AlibabaCloud\Tea\Model;

class ModifyDBInstanceDiskTypeRequest extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $autoPay;

    /**
     * @example false
     *
     * @var string
     */
    public $autoRenew;

    /**
     * @example {“ActivityId":"000000000"}
     *
     * @var string
     */
    public $businessInfo;

    /**
     * @example youhuiquan_promotion_option_id_for_blank
     *
     * @var string
     */
    public $couponNo;

    /**
     * @example dds-bp1fa5efaa93****
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @example cloud_auto
     *
     * @var string
     */
    public $dbInstanceStorageType;

    /**
     * @example async
     *
     * @var string
     */
    public $extraParam;

    /**
     * @example UPGRADE
     *
     * @var string
     */
    public $orderType;

    /**
     * @example 1960
     *
     * @var int
     */
    public $provisionedIops;

    /**
     * @var int
     */
    public $resourceOwnerId;
    protected $_name = [
        'autoPay'               => 'AutoPay',
        'autoRenew'             => 'AutoRenew',
        'businessInfo'          => 'BusinessInfo',
        'couponNo'              => 'CouponNo',
        'DBInstanceId'          => 'DBInstanceId',
        'dbInstanceStorageType' => 'DbInstanceStorageType',
        'extraParam'            => 'ExtraParam',
        'orderType'             => 'OrderType',
        'provisionedIops'       => 'ProvisionedIops',
        'resourceOwnerId'       => 'ResourceOwnerId',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return ModifyDBInstanceDiskTypeRequest
     */
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
