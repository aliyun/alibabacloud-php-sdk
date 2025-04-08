<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20230930\Models;

use AlibabaCloud\Dara\Model;

class RefundReason extends Model
{
    /**
     * @var bool
     */
    public $proofRequired;

    /**
     * @var string
     */
    public $reasonTextId;

    /**
     * @var string
     */
    public $reasonTips;

    /**
     * @var bool
     */
    public $refundDescRequired;
    protected $_name = [
        'proofRequired' => 'proofRequired',
        'reasonTextId' => 'reasonTextId',
        'reasonTips' => 'reasonTips',
        'refundDescRequired' => 'refundDescRequired',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
