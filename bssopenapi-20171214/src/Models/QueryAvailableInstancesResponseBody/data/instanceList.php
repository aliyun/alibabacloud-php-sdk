<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryAvailableInstancesResponseBody\data;

use AlibabaCloud\Tea\Model;

class instanceList extends Model
{
    /**
     * @var string
     */
    public $subStatus;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $expectedReleaseTime;

    /**
     * @var string
     */
    public $renewStatus;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var int
     */
    public $sellerId;

    /**
     * @var string
     */
    public $instanceID;

    /**
     * @var string
     */
    public $seller;

    /**
     * @var string
     */
    public $stopTime;

    /**
     * @var string
     */
    public $renewalDurationUnit;

    /**
     * @var string
     */
    public $subscriptionType;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $productType;

    /**
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $releaseTime;

    /**
     * @var int
     */
    public $renewalDuration;

    /**
     * @var string
     */
    public $productCode;
    protected $_name = [
        'subStatus'           => 'SubStatus',
        'status'              => 'Status',
        'expectedReleaseTime' => 'ExpectedReleaseTime',
        'renewStatus'         => 'RenewStatus',
        'createTime'          => 'CreateTime',
        'sellerId'            => 'SellerId',
        'instanceID'          => 'InstanceID',
        'seller'              => 'Seller',
        'stopTime'            => 'StopTime',
        'renewalDurationUnit' => 'RenewalDurationUnit',
        'subscriptionType'    => 'SubscriptionType',
        'ownerId'             => 'OwnerId',
        'endTime'             => 'EndTime',
        'productType'         => 'ProductType',
        'region'              => 'Region',
        'releaseTime'         => 'ReleaseTime',
        'renewalDuration'     => 'RenewalDuration',
        'productCode'         => 'ProductCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->subStatus) {
            $res['SubStatus'] = $this->subStatus;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->expectedReleaseTime) {
            $res['ExpectedReleaseTime'] = $this->expectedReleaseTime;
        }
        if (null !== $this->renewStatus) {
            $res['RenewStatus'] = $this->renewStatus;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->sellerId) {
            $res['SellerId'] = $this->sellerId;
        }
        if (null !== $this->instanceID) {
            $res['InstanceID'] = $this->instanceID;
        }
        if (null !== $this->seller) {
            $res['Seller'] = $this->seller;
        }
        if (null !== $this->stopTime) {
            $res['StopTime'] = $this->stopTime;
        }
        if (null !== $this->renewalDurationUnit) {
            $res['RenewalDurationUnit'] = $this->renewalDurationUnit;
        }
        if (null !== $this->subscriptionType) {
            $res['SubscriptionType'] = $this->subscriptionType;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
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
        if (null !== $this->renewalDuration) {
            $res['RenewalDuration'] = $this->renewalDuration;
        }
        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
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
        if (isset($map['SubStatus'])) {
            $model->subStatus = $map['SubStatus'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['ExpectedReleaseTime'])) {
            $model->expectedReleaseTime = $map['ExpectedReleaseTime'];
        }
        if (isset($map['RenewStatus'])) {
            $model->renewStatus = $map['RenewStatus'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['SellerId'])) {
            $model->sellerId = $map['SellerId'];
        }
        if (isset($map['InstanceID'])) {
            $model->instanceID = $map['InstanceID'];
        }
        if (isset($map['Seller'])) {
            $model->seller = $map['Seller'];
        }
        if (isset($map['StopTime'])) {
            $model->stopTime = $map['StopTime'];
        }
        if (isset($map['RenewalDurationUnit'])) {
            $model->renewalDurationUnit = $map['RenewalDurationUnit'];
        }
        if (isset($map['SubscriptionType'])) {
            $model->subscriptionType = $map['SubscriptionType'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
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
        if (isset($map['RenewalDuration'])) {
            $model->renewalDuration = $map['RenewalDuration'];
        }
        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }

        return $model;
    }
}
