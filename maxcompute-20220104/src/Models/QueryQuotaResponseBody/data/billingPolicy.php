<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\QueryQuotaResponseBody\data;

use AlibabaCloud\Tea\Model;

class billingPolicy extends Model
{
    /**
     * @description The billing method. Valid values:
     *
     *   subscription: the subscription quota.
     *   payasyougo: the pay-as-you-go quota.
     *
     * @example subscription
     *
     * @var string
     */
    public $billingMethod;

    /**
     * @description In MaxCompute, instanceId and orderId are considered the same.
     *
     * @example 880c0d0d-5d79-4217-b683-8e8bdd2a2523
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The order specifications.
     *
     * @example OdpsStandard
     *
     * @var string
     */
    public $odpsSpecCode;

    /**
     * @description The order ID.
     *
     * @example 880c0d0d-5d79-4217-b683-8e8bdd2a2523
     *
     * @var string
     */
    public $orderId;
    protected $_name = [
        'billingMethod' => 'billingMethod',
        'instanceId' => 'instanceId',
        'odpsSpecCode' => 'odpsSpecCode',
        'orderId' => 'orderId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->billingMethod) {
            $res['billingMethod'] = $this->billingMethod;
        }
        if (null !== $this->instanceId) {
            $res['instanceId'] = $this->instanceId;
        }
        if (null !== $this->odpsSpecCode) {
            $res['odpsSpecCode'] = $this->odpsSpecCode;
        }
        if (null !== $this->orderId) {
            $res['orderId'] = $this->orderId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return billingPolicy
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['billingMethod'])) {
            $model->billingMethod = $map['billingMethod'];
        }
        if (isset($map['instanceId'])) {
            $model->instanceId = $map['instanceId'];
        }
        if (isset($map['odpsSpecCode'])) {
            $model->odpsSpecCode = $map['odpsSpecCode'];
        }
        if (isset($map['orderId'])) {
            $model->orderId = $map['orderId'];
        }

        return $model;
    }
}
