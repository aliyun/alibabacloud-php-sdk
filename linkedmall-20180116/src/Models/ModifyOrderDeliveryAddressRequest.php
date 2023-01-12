<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models;

use AlibabaCloud\Tea\Model;

class ModifyOrderDeliveryAddressRequest extends Model
{
    /**
     * @example LMALL20190325****
     *
     * @var string
     */
    public $bizId;

    /**
     * @var string
     */
    public $deliveryAddress;

    /**
     * @example {\"mobileNo\":\"123****8965\"}
     *
     * @var string
     */
    public $extJson;

    /**
     * @example 53396****
     *
     * @var int
     */
    public $lmOrderId;
    protected $_name = [
        'bizId'           => 'BizId',
        'deliveryAddress' => 'DeliveryAddress',
        'extJson'         => 'ExtJson',
        'lmOrderId'       => 'LmOrderId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }
        if (null !== $this->deliveryAddress) {
            $res['DeliveryAddress'] = $this->deliveryAddress;
        }
        if (null !== $this->extJson) {
            $res['ExtJson'] = $this->extJson;
        }
        if (null !== $this->lmOrderId) {
            $res['LmOrderId'] = $this->lmOrderId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyOrderDeliveryAddressRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }
        if (isset($map['DeliveryAddress'])) {
            $model->deliveryAddress = $map['DeliveryAddress'];
        }
        if (isset($map['ExtJson'])) {
            $model->extJson = $map['ExtJson'];
        }
        if (isset($map['LmOrderId'])) {
            $model->lmOrderId = $map['LmOrderId'];
        }

        return $model;
    }
}
