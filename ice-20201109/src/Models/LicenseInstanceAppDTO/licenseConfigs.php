<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\LicenseInstanceAppDTO;

use AlibabaCloud\Dara\Model;

class licenseConfigs extends Model
{
    /**
     * @var string
     */
    public $businessType;
    /**
     * @var string
     */
    public $featureIds;
    /**
     * @var int
     */
    public $sdkId;
    /**
     * @var string
     */
    public $sdkName;
    /**
     * @var string
     */
    public $subscription;
    /**
     * @var string
     */
    public $subscriptionImp;
    /**
     * @var string
     */
    public $subscriptionPkg;
    protected $_name = [
        'businessType'    => 'BusinessType',
        'featureIds'      => 'FeatureIds',
        'sdkId'           => 'SdkId',
        'sdkName'         => 'SdkName',
        'subscription'    => 'Subscription',
        'subscriptionImp' => 'SubscriptionImp',
        'subscriptionPkg' => 'SubscriptionPkg',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->businessType) {
            $res['BusinessType'] = $this->businessType;
        }

        if (null !== $this->featureIds) {
            $res['FeatureIds'] = $this->featureIds;
        }

        if (null !== $this->sdkId) {
            $res['SdkId'] = $this->sdkId;
        }

        if (null !== $this->sdkName) {
            $res['SdkName'] = $this->sdkName;
        }

        if (null !== $this->subscription) {
            $res['Subscription'] = $this->subscription;
        }

        if (null !== $this->subscriptionImp) {
            $res['SubscriptionImp'] = $this->subscriptionImp;
        }

        if (null !== $this->subscriptionPkg) {
            $res['SubscriptionPkg'] = $this->subscriptionPkg;
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
        if (isset($map['BusinessType'])) {
            $model->businessType = $map['BusinessType'];
        }

        if (isset($map['FeatureIds'])) {
            $model->featureIds = $map['FeatureIds'];
        }

        if (isset($map['SdkId'])) {
            $model->sdkId = $map['SdkId'];
        }

        if (isset($map['SdkName'])) {
            $model->sdkName = $map['SdkName'];
        }

        if (isset($map['Subscription'])) {
            $model->subscription = $map['Subscription'];
        }

        if (isset($map['SubscriptionImp'])) {
            $model->subscriptionImp = $map['SubscriptionImp'];
        }

        if (isset($map['SubscriptionPkg'])) {
            $model->subscriptionPkg = $map['SubscriptionPkg'];
        }

        return $model;
    }
}
