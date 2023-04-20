<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPServerless\V20190615\Models;

use AlibabaCloud\Tea\Model;

class CreateSpaceWithOrderRequest extends Model
{
    /**
     * @var string
     */
    public $desc;

    /**
     * @example test
     *
     * @var string
     */
    public $name;

    /**
     * @example professional
     *
     * @var string
     */
    public $packageVersion;

    /**
     * @example 1
     *
     * @var int
     */
    public $period;

    /**
     * @example Subscription
     *
     * @var string
     */
    public $subscriptionType;

    /**
     * @example true
     *
     * @var bool
     */
    public $useCoupon;
    protected $_name = [
        'desc'             => 'Desc',
        'name'             => 'Name',
        'packageVersion'   => 'PackageVersion',
        'period'           => 'Period',
        'subscriptionType' => 'SubscriptionType',
        'useCoupon'        => 'UseCoupon',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->desc) {
            $res['Desc'] = $this->desc;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->packageVersion) {
            $res['PackageVersion'] = $this->packageVersion;
        }
        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }
        if (null !== $this->subscriptionType) {
            $res['SubscriptionType'] = $this->subscriptionType;
        }
        if (null !== $this->useCoupon) {
            $res['UseCoupon'] = $this->useCoupon;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateSpaceWithOrderRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Desc'])) {
            $model->desc = $map['Desc'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['PackageVersion'])) {
            $model->packageVersion = $map['PackageVersion'];
        }
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }
        if (isset($map['SubscriptionType'])) {
            $model->subscriptionType = $map['SubscriptionType'];
        }
        if (isset($map['UseCoupon'])) {
            $model->useCoupon = $map['UseCoupon'];
        }

        return $model;
    }
}
