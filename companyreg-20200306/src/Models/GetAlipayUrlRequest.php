<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Companyreg\V20200306\Models;

use AlibabaCloud\Dara\Model;

class GetAlipayUrlRequest extends Model
{
    /**
     * @var string
     */
    public $bizType;

    /**
     * @var int
     */
    public $orderId;

    /**
     * @var string
     */
    public $returnUrl;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'bizType' => 'BizType',
        'orderId' => 'OrderId',
        'returnUrl' => 'ReturnUrl',
        'type' => 'Type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bizType) {
            $res['BizType'] = $this->bizType;
        }

        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }

        if (null !== $this->returnUrl) {
            $res['ReturnUrl'] = $this->returnUrl;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['BizType'])) {
            $model->bizType = $map['BizType'];
        }

        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }

        if (isset($map['ReturnUrl'])) {
            $model->returnUrl = $map['ReturnUrl'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
