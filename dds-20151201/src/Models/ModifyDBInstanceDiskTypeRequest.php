<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models;

use AlibabaCloud\Tea\Model;

class ModifyDBInstanceDiskTypeRequest extends Model
{
    /**
     * @description Specifies whether to enable automatic payment. Valid values:
     *
     *   **true**: enables automatic payment. Make sure that you have sufficient balance within your account.
     *   **false**: disables automatic payment. You must perform the following operations to pay for the instance: Log on to the ApsaraDB for MongoDB console. In the upper-right corner, click **Expenses** and select **User Center** from the drop-down list. The User Center page appears. In the left-side navigation pane, choose **Order Management** > Renew. On the Renewal tab, find the bill that you want to pay and then click Renew in the Actions column.
     *
     * Default value: **true**.
     *
     * @example true
     *
     * @var bool
     */
    public $autoPay;

    /**
     * @description Specifies whether to enable auto-renewal. Valid values:
     *
     *   **true**
     *   **false**
     *
     * Default value: **false**.
     *
     * @example false
     *
     * @var string
     */
    public $autoRenew;

    /**
     * @description The business information. This is an additional parameter.
     *
     * @example {“ActivityId":"000000000"}
     *
     * @var string
     */
    public $businessInfo;

    /**
     * @description The coupon code. Default value: `youhuiquan_promotion_option_id_for_blank`.
     *
     * @example youhuiquan_promotion_option_id_for_blank
     *
     * @var string
     */
    public $couponNo;

    /**
     * @description The instance ID.
     *
     * This parameter is required.
     *
     * @example dds-bp1fa5efaa93****
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description The new disk type. Valid values:
     *
     *   **cloud_auto**: ESSD AutoPL disk
     *   **cloud_essd1**: PL1 ESSD
     *   **cloud_essd2**: PL2 ESSD
     *   **cloud_essd3**: PL3 ESSD
     *
     * @example cloud_auto
     *
     * @var string
     */
    public $dbInstanceStorageType;

    /**
     * @description An additional parameter.
     *
     * @example async
     *
     * @var string
     */
    public $extraParam;

    /**
     * @description The type of configuration changes. Valid values:
     *
     *   **UPGRADE**
     *   **DOWNGRADE**
     *
     * >  This parameter is valid only when the billing method of the instance is subscription.
     *
     * @example UPGRADE
     *
     * @var string
     */
    public $orderType;

    /**
     * @description The provisioned IOPS. Valid values: 0 to 50000.
     *
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

    public function validate() {}

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
