<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\InsureRefundDetailResponseBody;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\InsureRefundDetailResponseBody\module\insureOrder;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\InsureRefundDetailResponseBody\module\subOrderRefundList;
use AlibabaCloud\Tea\Model;

class module extends Model
{
    /**
     * @example 1423050918202760437
     *
     * @var string
     */
    public $applyId;

    /**
     * @example 2022-07-20T10:40Z
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @example 2022-07-04T16:13Z
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @example 100000000001
     *
     * @var string
     */
    public $insOrderId;

    /**
     * @var insureOrder
     */
    public $insureOrder;

    /**
     * @example 23102301010
     *
     * @var string
     */
    public $outApplyId;

    /**
     * @var subOrderRefundList[]
     */
    public $subOrderRefundList;
    protected $_name = [
        'applyId'            => 'apply_id',
        'gmtCreate'          => 'gmt_create',
        'gmtModified'        => 'gmt_modified',
        'insOrderId'         => 'ins_order_id',
        'insureOrder'        => 'insure_order',
        'outApplyId'         => 'out_apply_id',
        'subOrderRefundList' => 'sub_order_refund_list',
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
            $res['insure_order'] = null !== $this->insureOrder ? $this->insureOrder->toMap() : null;
        }
        if (null !== $this->outApplyId) {
            $res['out_apply_id'] = $this->outApplyId;
        }
        if (null !== $this->subOrderRefundList) {
            $res['sub_order_refund_list'] = [];
            if (null !== $this->subOrderRefundList && \is_array($this->subOrderRefundList)) {
                $n = 0;
                foreach ($this->subOrderRefundList as $item) {
                    $res['sub_order_refund_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
                $n                         = 0;
                foreach ($map['sub_order_refund_list'] as $item) {
                    $model->subOrderRefundList[$n++] = null !== $item ? subOrderRefundList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
