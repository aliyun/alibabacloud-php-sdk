<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\CreateInstanceRequest\tag;
use AlibabaCloud\Tea\Model;

class CreateInstanceRequest extends Model
{
    /**
     * @description Specifies whether payment is automatically made during renewal. Valid values:
     *
     *   **True**: Automatic payment is enabled. Make sure that your Alibaba Cloud account has adequate balance.
     *   **False**: Automatic payment is disabled. You have to manually pay in the console. Log on to the console. In the upper-right corner, choose **Expenses > User Center**. In the left-side navigation pane, click **Orders**. On the page that appears, find your order and complete the payment.
     *
     * Default value: **False**.
     * @example false
     *
     * @var bool
     */
    public $autoPay;

    /**
     * @description The billing method of the instance.
     *
     * @example PostPaid
     *
     * @var string
     */
    public $chargeType;

    /**
     * @example 1
     *
     * @var int
     */
    public $duration;

    /**
     * @description The HTTPS policy.
     *
     * @example HTTPS2_TLS1_2
     *
     * @var string
     */
    public $httpsPolicy;

    /**
     * @description The name of the instance.
     *
     * @example ApigatewayInstance
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description The specifications of the instance.
     *
     * @example api.s1.small
     *
     * @var string
     */
    public $instanceSpec;

    /**
     * @example Month
     *
     * @var string
     */
    public $pricingCycle;

    /**
     * @var tag[]
     */
    public $tag;

    /**
     * @description The password.
     *
     * @example c20d86c4-1eb3-4d0b-afe9-c586df1e2136
     *
     * @var string
     */
    public $token;

    /**
     * @description The zone.
     *
     * @example cn-beijing-MAZ3(c,e)
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'autoPay'      => 'AutoPay',
        'chargeType'   => 'ChargeType',
        'duration'     => 'Duration',
        'httpsPolicy'  => 'HttpsPolicy',
        'instanceName' => 'InstanceName',
        'instanceSpec' => 'InstanceSpec',
        'pricingCycle' => 'PricingCycle',
        'tag'          => 'Tag',
        'token'        => 'Token',
        'zoneId'       => 'ZoneId',
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
        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->httpsPolicy) {
            $res['HttpsPolicy'] = $this->httpsPolicy;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->instanceSpec) {
            $res['InstanceSpec'] = $this->instanceSpec;
        }
        if (null !== $this->pricingCycle) {
            $res['PricingCycle'] = $this->pricingCycle;
        }
        if (null !== $this->tag) {
            $res['Tag'] = [];
            if (null !== $this->tag && \is_array($this->tag)) {
                $n = 0;
                foreach ($this->tag as $item) {
                    $res['Tag'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->token) {
            $res['Token'] = $this->token;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoPay'])) {
            $model->autoPay = $map['AutoPay'];
        }
        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['HttpsPolicy'])) {
            $model->httpsPolicy = $map['HttpsPolicy'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['InstanceSpec'])) {
            $model->instanceSpec = $map['InstanceSpec'];
        }
        if (isset($map['PricingCycle'])) {
            $model->pricingCycle = $map['PricingCycle'];
        }
        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n          = 0;
                foreach ($map['Tag'] as $item) {
                    $model->tag[$n++] = null !== $item ? tag::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Token'])) {
            $model->token = $map['Token'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
