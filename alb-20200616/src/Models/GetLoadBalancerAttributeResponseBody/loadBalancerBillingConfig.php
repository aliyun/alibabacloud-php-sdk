<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models\GetLoadBalancerAttributeResponseBody;

use AlibabaCloud\Tea\Model;

class loadBalancerBillingConfig extends Model
{
    /**
     * @description The billing method.
     *
     * Set the value to **PostPay**, which indicates the pay-as-you-go billing method.
     * @example PostPay
     *
     * @var string
     */
    public $payType;
    protected $_name = [
        'payType' => 'PayType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return loadBalancerBillingConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
        }

        return $model;
    }
}
