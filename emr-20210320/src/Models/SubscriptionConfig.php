<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models;

use AlibabaCloud\Tea\Model;

class SubscriptionConfig extends Model
{
    /**
     * @description 自动续费。取值范围：
     * 默认值：false。
     * @example true
     *
     * @var bool
     */
    public $autoRenew;

    /**
     * @description 自动续费时长。当AutoRenew取值为true时生效。当AutoRenewDurationUnit取值为Month时，取值：1、2、3、4、5、6、7、8、9、12、24、36、48、60。
     *
     * @example 12
     *
     * @var int
     */
    public $autoRenewDuration;

    /**
     * @description - Month：月。
     *
     * @example Month
     *
     * @var string
     */
    public $autoRenewDurationUnit;

    /**
     * @description 付费时长。PaymentDurationUnit取值为Month时，取值：1、2、3、4、5、6、7、8、9、12、24、36、48、60。
     *
     * This parameter is required.
     * @example 12
     *
     * @var int
     */
    public $paymentDuration;

    /**
     * @description 付费时长单位。取值范围：
     * This parameter is required.
     * @example Month
     *
     * @var string
     */
    public $paymentDurationUnit;
    protected $_name = [
        'autoRenew'             => 'AutoRenew',
        'autoRenewDuration'     => 'AutoRenewDuration',
        'autoRenewDurationUnit' => 'AutoRenewDurationUnit',
        'paymentDuration'       => 'PaymentDuration',
        'paymentDurationUnit'   => 'PaymentDurationUnit',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoRenew) {
            $res['AutoRenew'] = $this->autoRenew;
        }
        if (null !== $this->autoRenewDuration) {
            $res['AutoRenewDuration'] = $this->autoRenewDuration;
        }
        if (null !== $this->autoRenewDurationUnit) {
            $res['AutoRenewDurationUnit'] = $this->autoRenewDurationUnit;
        }
        if (null !== $this->paymentDuration) {
            $res['PaymentDuration'] = $this->paymentDuration;
        }
        if (null !== $this->paymentDurationUnit) {
            $res['PaymentDurationUnit'] = $this->paymentDurationUnit;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SubscriptionConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoRenew'])) {
            $model->autoRenew = $map['AutoRenew'];
        }
        if (isset($map['AutoRenewDuration'])) {
            $model->autoRenewDuration = $map['AutoRenewDuration'];
        }
        if (isset($map['AutoRenewDurationUnit'])) {
            $model->autoRenewDurationUnit = $map['AutoRenewDurationUnit'];
        }
        if (isset($map['PaymentDuration'])) {
            $model->paymentDuration = $map['PaymentDuration'];
        }
        if (isset($map['PaymentDurationUnit'])) {
            $model->paymentDurationUnit = $map['PaymentDurationUnit'];
        }

        return $model;
    }
}
