<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\InsureOrderRefundResponseBody;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\InsureOrderRefundResponseBody\module\insRefundList;
use AlibabaCloud\Tea\Model;

class module extends Model
{
    /**
     * @example 118526587
     *
     * @var string
     */
    public $applyId;

    /**
     * @example 1423041410342678003
     *
     * @var string
     */
    public $insOrderId;

    /**
     * @var insRefundList[]
     */
    public $insRefundList;

    /**
     * @example 1423041410342678022
     *
     * @var string
     */
    public $outApplyId;
    protected $_name = [
        'applyId'       => 'apply_id',
        'insOrderId'    => 'ins_order_id',
        'insRefundList' => 'ins_refund_list',
        'outApplyId'    => 'out_apply_id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->applyId) {
            $res['apply_id'] = $this->applyId;
        }
        if (null !== $this->insOrderId) {
            $res['ins_order_id'] = $this->insOrderId;
        }
        if (null !== $this->insRefundList) {
            $res['ins_refund_list'] = [];
            if (null !== $this->insRefundList && \is_array($this->insRefundList)) {
                $n = 0;
                foreach ($this->insRefundList as $item) {
                    $res['ins_refund_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->outApplyId) {
            $res['out_apply_id'] = $this->outApplyId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return module
     */
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
                $n                    = 0;
                foreach ($map['ins_refund_list'] as $item) {
                    $model->insRefundList[$n++] = null !== $item ? insRefundList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['out_apply_id'])) {
            $model->outApplyId = $map['out_apply_id'];
        }

        return $model;
    }
}
