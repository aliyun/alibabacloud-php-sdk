<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightRefundApplyResponseBody;

use AlibabaCloud\Dara\Model;

class module extends Model
{
    /**
     * @var string
     */
    public $outRefundApplyId;

    /**
     * @var string
     */
    public $refundApplyId;
    protected $_name = [
        'outRefundApplyId' => 'out_refund_apply_id',
        'refundApplyId' => 'refund_apply_id',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->outRefundApplyId) {
            $res['out_refund_apply_id'] = $this->outRefundApplyId;
        }

        if (null !== $this->refundApplyId) {
            $res['refund_apply_id'] = $this->refundApplyId;
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
        if (isset($map['out_refund_apply_id'])) {
            $model->outRefundApplyId = $map['out_refund_apply_id'];
        }

        if (isset($map['refund_apply_id'])) {
            $model->refundApplyId = $map['refund_apply_id'];
        }

        return $model;
    }
}
