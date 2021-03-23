<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryAvailableInstancesResponseBody\data;

use AlibabaCloud\Tea\Model;

class instanceList extends Model
{
    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var int
     */
    public $sellerId;

    /**
     * @var string
     */
    public $productCode;

    /**
     * @var string
     */
    public $productType;

    /**
     * @var string
     */
    public $subscriptionType;

    /**
     * @var string
     */
    public $instanceID;

    /**
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $stopTime;

    /**
     * @var string
     */
    public $releaseTime;

    /**
     * @var string
     */
    public $expectedReleaseTime;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $subStatus;

    /**
     * @var string
     */
    public $renewStatus;

    /**
     * @var int
     */
    public $renewalDuration;

    /**
     * @var string
     */
    public $renewalDurationUnit;

    /**
     * @var string
     */
    public $seller;
    protected $_name = [
        'ownerId'             => 'OwnerId',
        'sellerId'            => 'SellerId',
        'productCode'         => 'ProductCode',
        'productType'         => 'ProductType',
        'subscriptionType'    => 'SubscriptionType',
        'instanceID'          => 'InstanceID',
        'region'              => 'Region',
        'createTime'          => 'CreateTime',
        'endTime'             => 'EndTime',
        'stopTime'            => 'StopTime',
        'releaseTime'         => 'ReleaseTime',
        'expectedReleaseTime' => 'ExpectedReleaseTime',
        'status'              => 'Status',
        'subStatus'           => 'SubStatus',
        'renewStatus'         => 'RenewStatus',
        'renewalDuration'     => 'RenewalDuration',
        'renewalDurationUnit' => 'RenewalDurationUnit',
        'seller'              => 'Seller',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->sellerId) {
            $res['SellerId'] = $this->sellerId;
        }
        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }
        if (null !== $this->productType) {
            $res['ProductType'] = $this->productType;
        }
        if (null !== $this->subscriptionType) {
            $res['SubscriptionType'] = $this->subscriptionType;
        }
        if (null !== $this->instanceID) {
            $res['InstanceID'] = $this->instanceID;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->stopTime) {
            $res['StopTime'] = $this->stopTime;
        }
        if (null !== $this->releaseTime) {
            $res['ReleaseTime'] = $this->releaseTime;
        }
        if (null !== $this->expectedReleaseTime) {
            $res['ExpectedReleaseTime'] = $this->expectedReleaseTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->subStatus) {
            $res['SubStatus'] = $this->subStatus;
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
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['SellerId'])) {
            $model->sellerId = $map['SellerId'];
        }
        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }
        if (isset($map['ProductType'])) {
            $model->productType = $map['ProductType'];
        }
        if (isset($map['SubscriptionType'])) {
            $model->subscriptionType = $map['SubscriptionType'];
        }
        if (isset($map['InstanceID'])) {
            $model->instanceID = $map['InstanceID'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['StopTime'])) {
            $model->stopTime = $map['StopTime'];
        }
        if (isset($map['ReleaseTime'])) {
            $model->releaseTime = $map['ReleaseTime'];
        }
        if (isset($map['ExpectedReleaseTime'])) {
            $model->expectedReleaseTime = $map['ExpectedReleaseTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['SubStatus'])) {
            $model->subStatus = $map['SubStatus'];
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

        return $model;
    }
}
