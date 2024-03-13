<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models;

use AlibabaCloud\Tea\Model;

class ReleaseInstanceRequest extends Model
{
    /**
     * @description The ID of the instance. Separate multiple IDs with commas (,). A maximum of 100 IDs can be specified.
     *
     * @example rm-xxxxxxxxxxxx
     *
     * @var string
     */
    public $instanceIds;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The code of the service.
     *
     * @example ecs
     *
     * @var string
     */
    public $productCode;

    /**
     * @description The type of the service.
     *
     * @example ecs
     *
     * @var string
     */
    public $productType;

    /**
     * @description The region in which the instance resides.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $region;

    /**
     * @description The method that is used to renew the instance. Valid values:
     *
     * NotRenewal: does not renew the instance.
     * @example AutoRenewal
     *
     * @var string
     */
    public $renewStatus;

    /**
     * @description The billing method. Valid values:
     *
     * PayAsYouGo: the pay-as-you-go billing method.
     * @example PayAsYouGo
     *
     * @var string
     */
    public $subscriptionType;
    protected $_name = [
        'instanceIds'      => 'InstanceIds',
        'ownerId'          => 'OwnerId',
        'productCode'      => 'ProductCode',
        'productType'      => 'ProductType',
        'region'           => 'Region',
        'renewStatus'      => 'RenewStatus',
        'subscriptionType' => 'SubscriptionType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceIds) {
            $res['InstanceIds'] = $this->instanceIds;
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
        if (null !== $this->renewStatus) {
            $res['RenewStatus'] = $this->renewStatus;
        }
        if (null !== $this->subscriptionType) {
            $res['SubscriptionType'] = $this->subscriptionType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ReleaseInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceIds'])) {
            $model->instanceIds = $map['InstanceIds'];
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
        if (isset($map['RenewStatus'])) {
            $model->renewStatus = $map['RenewStatus'];
        }
        if (isset($map['SubscriptionType'])) {
            $model->subscriptionType = $map['SubscriptionType'];
        }

        return $model;
    }
}
