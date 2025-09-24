<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\InquiryPriceRefundInstanceResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $currency;

    /**
     * @var string
     */
    public $hostId;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var float
     */
    public $refundAmount;
    protected $_name = [
        'currency' => 'Currency',
        'hostId' => 'HostId',
        'instanceId' => 'InstanceId',
        'refundAmount' => 'RefundAmount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
