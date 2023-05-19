<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\InquiryPriceRefundInstanceResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The currency.
     *
     * @example CNY
     *
     * @var string
     */
    public $currency;

    /**
     * @description The site of the execution host.
     *
     * @example cn
     *
     * @var string
     */
    public $hostId;

    /**
     * @description The ID of the instance.
     *
     * @example i-bp1etb69sqxgl4*******
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The refundable amount.
     *
     * @example 12.34
     *
     * @var float
     */
    public $refundAmount;
    protected $_name = [
        'currency'     => 'Currency',
        'hostId'       => 'HostId',
        'instanceId'   => 'InstanceId',
        'refundAmount' => 'RefundAmount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->currency) {
            $res['Currency'] = $this->currency;
        }
        if (null !== $this->hostId) {
            $res['HostId'] = $this->hostId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->refundAmount) {
            $res['RefundAmount'] = $this->refundAmount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Currency'])) {
            $model->currency = $map['Currency'];
        }
        if (isset($map['HostId'])) {
            $model->hostId = $map['HostId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['RefundAmount'])) {
            $model->refundAmount = $map['RefundAmount'];
        }

        return $model;
    }
}
