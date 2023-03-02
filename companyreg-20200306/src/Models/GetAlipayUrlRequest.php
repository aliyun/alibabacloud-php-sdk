<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Companyreg\V20200306\Models;

use AlibabaCloud\Tea\Model;

class GetAlipayUrlRequest extends Model
{
    /**
     * @example esp.beian_assist
     *
     * @var string
     */
    public $bizType;

    /**
     * @example 206129201170307
     *
     * @var int
     */
    public $orderId;

    /**
     * @example https://nfyt.lzsgtghchy.com:502/sigin/
     *
     * @var string
     */
    public $returnUrl;

    /**
     * @example web
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'bizType'   => 'BizType',
        'orderId'   => 'OrderId',
        'returnUrl' => 'ReturnUrl',
        'type'      => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return GetAlipayUrlRequest
     */
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
