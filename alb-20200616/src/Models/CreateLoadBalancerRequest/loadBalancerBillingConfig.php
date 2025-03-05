<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models\CreateLoadBalancerRequest;

use AlibabaCloud\Tea\Model;

class loadBalancerBillingConfig extends Model
{
    /**
     * @description The ID of the Internet Shared Bandwidth instance that is associated with the Internet-facing ALB instance.
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
     *
     * This parameter is required.
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
