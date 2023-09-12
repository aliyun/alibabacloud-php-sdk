<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20230930\Models;

use AlibabaCloud\Tea\Model;

class RefundReason extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $proofRequired;

    /**
     * @example 47683
     *
     * @var string
     */
    public $reasonTextId;

    /**
     * @example 不想要了
     *
     * @var string
     */
    public $reasonTips;

    /**
     * @example true
     *
     * @var bool
     */
    public $refundDescRequired;
    protected $_name = [
        'proofRequired'      => 'proofRequired',
        'reasonTextId'       => 'reasonTextId',
        'reasonTips'         => 'reasonTips',
        'refundDescRequired' => 'refundDescRequired',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->proofRequired) {
            $res['proofRequired'] = $this->proofRequired;
        }
        if (null !== $this->reasonTextId) {
            $res['reasonTextId'] = $this->reasonTextId;
        }
        if (null !== $this->reasonTips) {
            $res['reasonTips'] = $this->reasonTips;
        }
        if (null !== $this->refundDescRequired) {
            $res['refundDescRequired'] = $this->refundDescRequired;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RefundReason
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['proofRequired'])) {
            $model->proofRequired = $map['proofRequired'];
        }
        if (isset($map['reasonTextId'])) {
            $model->reasonTextId = $map['reasonTextId'];
        }
        if (isset($map['reasonTips'])) {
            $model->reasonTips = $map['reasonTips'];
        }
        if (isset($map['refundDescRequired'])) {
            $model->refundDescRequired = $map['refundDescRequired'];
        }

        return $model;
    }
}
