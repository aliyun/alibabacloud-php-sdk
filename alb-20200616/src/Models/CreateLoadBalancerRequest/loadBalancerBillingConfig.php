<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models\CreateLoadBalancerRequest;

use AlibabaCloud\Tea\Model;

class loadBalancerBillingConfig extends Model
{
    /**
     * @description The ID of the Elastic IP Address (EIP) bandwidth plan that is associated with the ALB instance if the ALB instance uses a public IP address.
     *
     * @example cbwp-bp1vevu8h3ieh****
     *
     * @var string
     */
    public $bandwidthPackageId;

    /**
     * @description The billing method of the ALB instance.
     *
     * Set the value to **PostPay**, which specifies the pay-as-you-go billing method.
     * @example PostPay
     *
     * @var string
     */
    public $payType;
    protected $_name = [
        'bandwidthPackageId' => 'BandwidthPackageId',
        'payType'            => 'PayType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bandwidthPackageId) {
            $res['BandwidthPackageId'] = $this->bandwidthPackageId;
        }
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
        if (isset($map['BandwidthPackageId'])) {
            $model->bandwidthPackageId = $map['BandwidthPackageId'];
        }
        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
        }

        return $model;
    }
}
