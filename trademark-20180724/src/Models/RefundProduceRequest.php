<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20180724\Models;

use AlibabaCloud\Tea\Model;

class RefundProduceRequest extends Model
{
    /**
     * @example trademark_register-cn-o400xeo7n03
     *
     * @var string
     */
    public $bizId;

    /**
     * @var string
     */
    public $refundType;
    protected $_name = [
        'bizId'      => 'BizId',
        'refundType' => 'RefundType',
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
        if (null !== $this->refundType) {
            $res['RefundType'] = $this->refundType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RefundProduceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }
        if (isset($map['RefundType'])) {
            $model->refundType = $map['RefundType'];
        }

        return $model;
    }
}
