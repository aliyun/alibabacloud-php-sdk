<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListQuotasResponseBody\quotaInfoList\subQuotaInfoList;

use AlibabaCloud\Tea\Model;

class billingPolicy extends Model
{
    /**
     * @example subscription
     *
     * @var string
     */
    public $billingMethod;

    /**
     * @example OdpsStandard
     *
     * @var string
     */
    public $odpsSpecCode;

    /**
     * @example 45245678
     *
     * @var string
     */
    public $orderId;
    protected $_name = [
        'billingMethod' => 'billingMethod',
        'odpsSpecCode'  => 'odpsSpecCode',
        'orderId'       => 'orderId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->billingMethod) {
            $res['billingMethod'] = $this->billingMethod;
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
        if (isset($map['odpsSpecCode'])) {
            $model->odpsSpecCode = $map['odpsSpecCode'];
        }
        if (isset($map['orderId'])) {
            $model->orderId = $map['orderId'];
        }

        return $model;
    }
}
