<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryAvailableInstancesResponseBody\data;

use AlibabaCloud\Tea\Model;

class instanceList extends Model
{
    /**
     * @description The time when the specified instance was created.
     *
     * @example 2019-09-08T16:00:00Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The time when the instance was expired.
     *
     * @example 2019-09-08T16:00:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The time when the specified instance was expected to be released.
     *
     * @example 2019-09-08T16:00:00Z
     *
     * @var string
     */
    public $expectedReleaseTime;

    /**
     * @description The ID of the instance.
     *
     * @example 1049056
     *
     * @var string
     */
    public $instanceID;

    /**
     * @description The ID of the instance owner.
     *
     * @example 325352345
     *
     * @var int
     */
    public $ownerId;

    /**
     * @description The code of the service.
     *
     * @example rds
     *
     * @var string
     */
    public $productCode;

    /**
     * @description The type of the service.
     *
     * @example rds
     *
     * @var string
     */
    public $productType;

    /**
     * @description The ID of the region in which the instance resides.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $region;

    /**
     * @description The time when the instance was released.
     *
     * @example 2019-09-08T16:00:00Z
     *
     * @var string
     */
    public $releaseTime;

    /**
     * @description The renewal status of the specified instance. Valid values:
     *
     *   AutoRenewal: The instance is automatically renewed.
     *   ManualRenewal: The instance is manually renewed.
     *   NotRenewal: The instance is not renewed.
     *
     * @example ManualRenewal
     *
     * @var string
     */
    public $renewStatus;

    /**
     * @description The number of auto-renewal cycles.
     *
     * @example 1
     *
     * @var int
     */
    public $renewalDuration;

    /**
     * @description The unit of the auto-renewal cycle. Valid values:
     *
     *   M: month
     *   Y: year
     *
     * @example M
     *
     * @var string
     */
    public $renewalDurationUnit;

    /**
     * @description The seller.
     *
     * @example 123123123
     *
     * @var string
     */
    public $seller;

    /**
     * @description The ID of the seller.
     *
     * @example 123123123
     *
     * @var int
     */
    public $sellerId;

    /**
     * @description The status of the instance.
     *
     * @example Creating: The instance is being created. WaitForExpire: The instance is about to expire. Normal: The instance can properly run. Expired: The instance is expired.
     *
     * @var string
     */
    public $status;

    /**
     * @description The time when the specified instance was suspended.
     *
     * @example 2019-09-08T16:00:00Z
     *
     * @var string
     */
    public $stopTime;

    /**
     * @description The sub-status of the specified instance.
     *
     * @example Normal: The pay-as-you-go module can properly run. WaitForLimit: The pay-as-you-go module is about to be limited due to overdue payments. BandwidthLimited: The pay-as-you-go module is limited due to overdue payments.
     *
     * @var string
     */
    public $subStatus;

    /**
     * @description The billing method. Valid values:
     *
     *   Subscription: subscription
     *   PayAsYouGo: pay-as-you-go
     *
     * @example Subscription
     *
     * @var string
     */
    public $subscriptionType;
    protected $_name = [
        'createTime'          => 'CreateTime',
        'endTime'             => 'EndTime',
        'expectedReleaseTime' => 'ExpectedReleaseTime',
        'instanceID'          => 'InstanceID',
        'ownerId'             => 'OwnerId',
        'productCode'         => 'ProductCode',
        'productType'         => 'ProductType',
        'region'              => 'Region',
        'releaseTime'         => 'ReleaseTime',
        'renewStatus'         => 'RenewStatus',
        'renewalDuration'     => 'RenewalDuration',
        'renewalDurationUnit' => 'RenewalDurationUnit',
        'seller'              => 'Seller',
        'sellerId'            => 'SellerId',
        'status'              => 'Status',
        'stopTime'            => 'StopTime',
        'subStatus'           => 'SubStatus',
        'subscriptionType'    => 'SubscriptionType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->expectedReleaseTime) {
            $res['ExpectedReleaseTime'] = $this->expectedReleaseTime;
        }
        if (null !== $this->instanceID) {
            $res['InstanceID'] = $this->instanceID;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }
        if (null !== $this->productType) {
            $res['ProductType'] = $this->productType;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->releaseTime) {
            $res['ReleaseTime'] = $this->releaseTime;
        }
        if (null !== $this->renewStatus) {
            $res['RenewStatus'] = $this->renewStatus;
        }
        if (null !== $this->renewalDuration) {
            $res['RenewalDuration'] = $this->renewalDuration;
        }
        if (null !== $this->renewalDurationUnit) {
            $res['RenewalDurationUnit'] = $this->renewalDurationUnit;
        }
        if (null !== $this->seller) {
            $res['Seller'] = $this->seller;
        }
        if (null !== $this->sellerId) {
            $res['SellerId'] = $this->sellerId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->stopTime) {
            $res['StopTime'] = $this->stopTime;
        }
        if (null !== $this->subStatus) {
            $res['SubStatus'] = $this->subStatus;
        }
        if (null !== $this->subscriptionType) {
            $res['SubscriptionType'] = $this->subscriptionType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instanceList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['ExpectedReleaseTime'])) {
            $model->expectedReleaseTime = $map['ExpectedReleaseTime'];
        }
        if (isset($map['InstanceID'])) {
            $model->instanceID = $map['InstanceID'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }
        if (isset($map['ProductType'])) {
            $model->productType = $map['ProductType'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['ReleaseTime'])) {
            $model->releaseTime = $map['ReleaseTime'];
        }
        if (isset($map['RenewStatus'])) {
            $model->renewStatus = $map['RenewStatus'];
        }
        if (isset($map['RenewalDuration'])) {
            $model->renewalDuration = $map['RenewalDuration'];
        }
        if (isset($map['RenewalDurationUnit'])) {
            $model->renewalDurationUnit = $map['RenewalDurationUnit'];
        }
        if (isset($map['Seller'])) {
            $model->seller = $map['Seller'];
        }
        if (isset($map['SellerId'])) {
            $model->sellerId = $map['SellerId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['StopTime'])) {
            $model->stopTime = $map['StopTime'];
        }
        if (isset($map['SubStatus'])) {
            $model->subStatus = $map['SubStatus'];
        }
        if (isset($map['SubscriptionType'])) {
            $model->subscriptionType = $map['SubscriptionType'];
        }

        return $model;
    }
}
