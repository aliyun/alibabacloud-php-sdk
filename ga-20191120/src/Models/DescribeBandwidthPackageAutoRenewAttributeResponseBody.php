<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models;

use AlibabaCloud\Tea\Model;

class DescribeBandwidthPackageAutoRenewAttributeResponseBody extends Model
{
    /**
     * @description Indicates whether auto-renewal is enabled. Valid values:
     *
     *   **true**: enabled
     *   **false** (default): disabled
     *
     * @example false
     *
     * @var bool
     */
    public $autoRenew;

    /**
     * @description The auto-renewal duration. Unit: months. Valid values: **1** to **12**.
     *
     * > : This parameter takes effect only if **AutoRenew** is set to **true**.
     * @example 1
     *
     * @var int
     */
    public $autoRenewDuration;

    /**
     * @description The ID of the bandwidth plan.
     *
     * @example gbwp-bp1iquvlp8khla5emb3ia
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The auto-renewal status of the bandwidth plan. Valid values:
     *
     *   **AutoRenewal**: The bandwidth plan is automatically renewed.
     *   **Normal**: You must manually renew the bandwidth plan.
     *   **NotRenewal**: Choose this option if you do not want to renew the bandwidth plan after it expires. The system sends only a non-renewal reminder three days before the expiration date. The system no longer sends notifications to remind you to renew the bandwidth plan. You can change the value of this parameter from NotRenewal to Normal for a bandwidth plan, and then manually renew the bandwidth plan. You can also set the RenewalStatus parameter to **AutoRenewal**.
     *
     * > The **RenewalStatus** parameter takes precedence over the **AutoRenew** parameter. If you do not set **RenewalStatus**, the **AutoRenew** parameter is used by default.
     * @example Normal
     *
     * @var string
     */
    public $renewalStatus;

    /**
     * @description The ID of the request.
     *
     * @example B820E9F9-D459-5AE7-8F08-A368B53C1AC3
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'autoRenew'         => 'AutoRenew',
        'autoRenewDuration' => 'AutoRenewDuration',
        'instanceId'        => 'InstanceId',
        'renewalStatus'     => 'RenewalStatus',
        'requestId'         => 'RequestId',
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
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->renewalStatus) {
            $res['RenewalStatus'] = $this->renewalStatus;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeBandwidthPackageAutoRenewAttributeResponseBody
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
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['RenewalStatus'])) {
            $model->renewalStatus = $map['RenewalStatus'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
