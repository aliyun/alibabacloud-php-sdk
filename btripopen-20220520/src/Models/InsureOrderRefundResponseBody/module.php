<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\InsureOrderRefundResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\InsureOrderRefundResponseBody\module\insRefundList;

class module extends Model
{
    /**
     * @var string
     */
    public $applyId;

    /**
     * @var string
     */
    public $insOrderId;

    /**
     * @var insRefundList[]
     */
    public $insRefundList;

    /**
     * @var string
     */
    public $outApplyId;
    protected $_name = [
        'applyId' => 'apply_id',
        'insOrderId' => 'ins_order_id',
        'insRefundList' => 'ins_refund_list',
        'outApplyId' => 'out_apply_id',
    ];

    public function validate()
    {
        if (\is_array($this->insRefundList)) {
            Model::validateArray($this->insRefundList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applyId) {
            $res['apply_id'] = $this->applyId;
        }

        if (null !== $this->insOrderId) {
            $res['ins_order_id'] = $this->insOrderId;
        }

        if (null !== $this->insRefundList) {
            if (\is_array($this->insRefundList)) {
                $res['ins_refund_list'] = [];
                $n1 = 0;
                foreach ($this->insRefundList as $item1) {
                    $res['ins_refund_list'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->outApplyId) {
            $res['out_apply_id'] = $this->outApplyId;
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
        if (isset($map['apply_id'])) {
            $model->applyId = $map['apply_id'];
        }

        if (isset($map['ins_order_id'])) {
            $model->insOrderId = $map['ins_order_id'];
        }

        if (isset($map['ins_refund_list'])) {
            if (!empty($map['ins_refund_list'])) {
                $model->insRefundList = [];
                $n1 = 0;
                foreach ($map['ins_refund_list'] as $item1) {
                    $model->insRefundList[$n1] = insRefundList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['out_apply_id'])) {
            $model->outApplyId = $map['out_apply_id'];
        }

        return $model;
    }
}
