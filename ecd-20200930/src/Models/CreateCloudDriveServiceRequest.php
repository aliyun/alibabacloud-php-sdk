<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class CreateCloudDriveServiceRequest extends Model
{
    /**
     * @description Specifies whether to enable the auto-payment feature.
     *
     * Valid values:
     *
     *   true: enables the auto-payment feature. Ensure your Alibaba Cloud account has sufficient balance. Insufficient balance may result in abnormal orders.
     *   false (default): disables the auto-payment feature. The order is generated, but payment must be made manually. You can log on to the Alibaba Cloud Management Console and complete the payment based on the order ID on the Orders page.
     *
     * @example false
     *
     * @var bool
     */
    public $autoPay;

    /**
     * @description Optional. Specifies whether to enable the auto-renewal feature. This parameter takes effect only if you set CdsChargeType to `Prepaid`.
     *
     * Valid values:
     *
     *   true
     *   false
     *
     * @example false
     *
     * @var bool
     */
    public $autoRenew;

    /**
     * @description >  This parameter is not publicly available.
     *
     * @example 3
     *
     * @var int
     */
    public $bizType;

    /**
     * @description The billing method of the enterprise drive.
     *
     * Valid values:
     *
     *   PostPaid: pay-as-you-go.
     *   PrePaid: subscription.
     *
     * @example PostPaid
     *
     * @var string
     */
    public $cdsChargeType;

    /**
     * @description The ID of the Cloud Enterprise Network (CEN) instance. This parameter takes effect only if you set `OfficeSiteType` to `AD_CONNECTOR`. If you have configured `OfficeSiteId`, you can leave this parameter empty.
     *
     * @example cen-g4ba1mkji8nj6****
     *
     * @var string
     */
    public $cenId;

    /**
     * @description The domain name of the enterprise AD office network. This parameter takes effect only if you set `OfficeSiteType` to `AD_CONNECTOR`. If you have configured `OfficeSiteId`, you can leave this parameter empty.
     *
     * @example test.local
     *
     * @var string
     */
    public $domainName;

    /**
     * @description The user IDs.
     *
     * @var string[]
     */
    public $endUserId;

    /**
     * @description The maximum storage capacity of the enterprise drive.
     *
     *   For a pay-as-you-go enterprise drive, the unit is bytes.
     *   For a subscription enterprise drive, the unit is GiB. For example, to create a 500 GiB subscription drive, set the value to 500 GiB. To create a 2 TiB subscription drive, set the value to 2048 GiB.
     *
     * This parameter is required.
     *
     * @example 536870912000
     *
     * @var int
     */
    public $maxSize;

    /**
     * @description The name of the enterprise drive
     *
     * @example wuying-pds
     *
     * @var string
     */
    public $name;

    /**
     * @description The ID of the office network. This parameter takes effect only if you set OfficeSiteType to `AD_CONNECTOR`.
     *
     * @example cn-hangzhou+dir-400695****
     *
     * @var string
     */
    public $officeSiteId;

    /**
     * @description The type of the office network.
     *
     * Valid values:
     *
     *   SIMPLE: convenience office network.
     *   AD_CONNECTOR: enterprise Active Directory (AD) office network.
     *
     * @example SIMPLE
     *
     * @var string
     */
    public $officeSiteType;

    /**
     * @description The subscription duration. The unit is specified by `PeriodUnit`. This parameter takes effect only if you set `CdsChargeType` to `PrePaid`.
     *
     * Valid values:
     *
     *   1
     *   2
     *   3
     *
     * @example 1
     *
     * @var int
     */
    public $period;

    /**
     * @description Required. The unit of the subscription duration. This parameter takes effect only if you set `CdsChargeType` to `PrePaid`.
     *
     * Valid value:
     *
     *   Year
     *
     * @example Year
     *
     * @var string
     */
    public $periodUnit;

    /**
     * @description The ID of the region. You can call the [DescribeRegions](https://help.aliyun.com/document_detail/196646.html) operation to query the list of regions where Enterprise Drive Service is available.
     *
     * This parameter is required.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $resellerOwnerUid;

    /**
     * @description >  This parameter is not publicly available.
     *
     * @example co-0esnf8kb8zpfbqmvt
     *
     * @var string
     */
    public $solutionId;

    /**
     * @description Required. The maximum number of users allowed on the enterprise drive. This parameter takes effect only if you set `CdsChargeType` to `PrePaid`.
     *
     * Valid values:
     *
     *   5 when the value of MaxSize is 500 GiB.
     *   20 when the value of MaxSize is 2048 GiB.
     *   50 when the value of MaxSize is 5120 GiB.
     *
     * @example 5
     *
     * @var int
     */
    public $userCount;

    /**
     * @description The maximum storage capacity of the user\\"s personal disk when allocated. Unit: bytes.
     *
     * @example 1024000
     *
     * @var int
     */
    public $userMaxSize;
    protected $_name = [
        'autoPay' => 'AutoPay',
        'autoRenew' => 'AutoRenew',
        'bizType' => 'BizType',
        'cdsChargeType' => 'CdsChargeType',
        'cenId' => 'CenId',
        'domainName' => 'DomainName',
        'endUserId' => 'EndUserId',
        'maxSize' => 'MaxSize',
        'name' => 'Name',
        'officeSiteId' => 'OfficeSiteId',
        'officeSiteType' => 'OfficeSiteType',
        'period' => 'Period',
        'periodUnit' => 'PeriodUnit',
        'regionId' => 'RegionId',
        'resellerOwnerUid' => 'ResellerOwnerUid',
        'solutionId' => 'SolutionId',
        'userCount' => 'UserCount',
        'userMaxSize' => 'UserMaxSize',
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
        if (null !== $this->bizType) {
            $res['BizType'] = $this->bizType;
        }
        if (null !== $this->cdsChargeType) {
            $res['CdsChargeType'] = $this->cdsChargeType;
        }
        if (null !== $this->cenId) {
            $res['CenId'] = $this->cenId;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->endUserId) {
            $res['EndUserId'] = $this->endUserId;
        }
        if (null !== $this->maxSize) {
            $res['MaxSize'] = $this->maxSize;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->officeSiteId) {
            $res['OfficeSiteId'] = $this->officeSiteId;
        }
        if (null !== $this->officeSiteType) {
            $res['OfficeSiteType'] = $this->officeSiteType;
        }
        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }
        if (null !== $this->periodUnit) {
            $res['PeriodUnit'] = $this->periodUnit;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resellerOwnerUid) {
            $res['ResellerOwnerUid'] = $this->resellerOwnerUid;
        }
        if (null !== $this->solutionId) {
            $res['SolutionId'] = $this->solutionId;
        }
        if (null !== $this->userCount) {
            $res['UserCount'] = $this->userCount;
        }
        if (null !== $this->userMaxSize) {
            $res['UserMaxSize'] = $this->userMaxSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateCloudDriveServiceRequest
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
        if (isset($map['BizType'])) {
            $model->bizType = $map['BizType'];
        }
        if (isset($map['CdsChargeType'])) {
            $model->cdsChargeType = $map['CdsChargeType'];
        }
        if (isset($map['CenId'])) {
            $model->cenId = $map['CenId'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['EndUserId'])) {
            if (!empty($map['EndUserId'])) {
                $model->endUserId = $map['EndUserId'];
            }
        }
        if (isset($map['MaxSize'])) {
            $model->maxSize = $map['MaxSize'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['OfficeSiteId'])) {
            $model->officeSiteId = $map['OfficeSiteId'];
        }
        if (isset($map['OfficeSiteType'])) {
            $model->officeSiteType = $map['OfficeSiteType'];
        }
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }
        if (isset($map['PeriodUnit'])) {
            $model->periodUnit = $map['PeriodUnit'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResellerOwnerUid'])) {
            $model->resellerOwnerUid = $map['ResellerOwnerUid'];
        }
        if (isset($map['SolutionId'])) {
            $model->solutionId = $map['SolutionId'];
        }
        if (isset($map['UserCount'])) {
            $model->userCount = $map['UserCount'];
        }
        if (isset($map['UserMaxSize'])) {
            $model->userMaxSize = $map['UserMaxSize'];
        }

        return $model;
    }
}
