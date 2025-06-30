<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\InsureRefundDetailResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\InsureRefundDetailResponseBody\module\insureOrder;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\InsureRefundDetailResponseBody\module\subOrderRefundList;

class module extends Model
{
    /**
     * @var string
     */
    public $applyId;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $insOrderId;

    /**
     * @var insureOrder
     */
    public $insureOrder;

    /**
     * @var string
     */
    public $outApplyId;

    /**
     * @var subOrderRefundList[]
     */
    public $subOrderRefundList;
    protected $_name = [
        'applyId' => 'apply_id',
        'gmtCreate' => 'gmt_create',
        'gmtModified' => 'gmt_modified',
        'insOrderId' => 'ins_order_id',
        'insureOrder' => 'insure_order',
        'outApplyId' => 'out_apply_id',
        'subOrderRefundList' => 'sub_order_refund_list',
    ];

    public function validate()
    {
        if (null !== $this->insureOrder) {
            $this->insureOrder->validate();
        }
        if (\is_array($this->subOrderRefundList)) {
            Model::validateArray($this->subOrderRefundList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applyId) {
            $res['apply_id'] = $this->applyId;
        }

        if (null !== $this->gmtCreate) {
            $res['gmt_create'] = $this->gmtCreate;
        }

        if (null !== $this->gmtModified) {
            $res['gmt_modified'] = $this->gmtModified;
        }

        if (null !== $this->insOrderId) {
            $res['ins_order_id'] = $this->insOrderId;
        }

        if (null !== $this->insureOrder) {
            $res['insure_order'] = null !== $this->insureOrder ? $this->insureOrder->toArray($noStream) : $this->insureOrder;
        }

        if (null !== $this->outApplyId) {
            $res['out_apply_id'] = $this->outApplyId;
        }

        if (null !== $this->subOrderRefundList) {
            if (\is_array($this->subOrderRefundList)) {
                $res['sub_order_refund_list'] = [];
                $n1 = 0;
                foreach ($this->subOrderRefundList as $item1) {
                    $res['sub_order_refund_list'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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

        if (isset($map['gmt_create'])) {
            $model->gmtCreate = $map['gmt_create'];
        }

        if (isset($map['gmt_modified'])) {
            $model->gmtModified = $map['gmt_modified'];
        }

        if (isset($map['ins_order_id'])) {
            $model->insOrderId = $map['ins_order_id'];
        }

        if (isset($map['insure_order'])) {
            $model->insureOrder = insureOrder::fromMap($map['insure_order']);
        }

        if (isset($map['out_apply_id'])) {
            $model->outApplyId = $map['out_apply_id'];
        }

        if (isset($map['sub_order_refund_list'])) {
            if (!empty($map['sub_order_refund_list'])) {
                $model->subOrderRefundList = [];
                $n1 = 0;
                foreach ($map['sub_order_refund_list'] as $item1) {
                    $model->subOrderRefundList[$n1] = subOrderRefundList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
