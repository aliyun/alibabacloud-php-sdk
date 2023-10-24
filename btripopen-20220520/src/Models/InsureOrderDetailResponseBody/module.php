<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\InsureOrderDetailResponseBody;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\InsureOrderDetailResponseBody\module\applicant;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\InsureOrderDetailResponseBody\module\insureOrderDetailList;
use AlibabaCloud\Tea\Model;

class module extends Model
{
    /**
     * @var applicant
     */
    public $applicant;

    /**
     * @example 1021000196440356901
     *
     * @var string
     */
    public $insOrderId;

    /**
     * @var insureOrderDetailList[]
     */
    public $insureOrderDetailList;

    /**
     * @example CLOSED
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'applicant'             => 'applicant',
        'insOrderId'            => 'ins_order_id',
        'insureOrderDetailList' => 'insure_order_detail_list',
        'status'                => 'status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->applicant) {
            $res['applicant'] = null !== $this->applicant ? $this->applicant->toMap() : null;
        }
        if (null !== $this->insOrderId) {
            $res['ins_order_id'] = $this->insOrderId;
        }
        if (null !== $this->insureOrderDetailList) {
            $res['insure_order_detail_list'] = [];
            if (null !== $this->insureOrderDetailList && \is_array($this->insureOrderDetailList)) {
                $n = 0;
                foreach ($this->insureOrderDetailList as $item) {
                    $res['insure_order_detail_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
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
        if (isset($map['applicant'])) {
            $model->applicant = applicant::fromMap($map['applicant']);
        }
        if (isset($map['ins_order_id'])) {
            $model->insOrderId = $map['ins_order_id'];
        }
        if (isset($map['insure_order_detail_list'])) {
            if (!empty($map['insure_order_detail_list'])) {
                $model->insureOrderDetailList = [];
                $n                            = 0;
                foreach ($map['insure_order_detail_list'] as $item) {
                    $model->insureOrderDetailList[$n++] = null !== $item ? insureOrderDetailList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        return $model;
    }
}
