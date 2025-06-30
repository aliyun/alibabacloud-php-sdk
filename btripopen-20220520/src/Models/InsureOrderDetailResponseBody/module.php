<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\InsureOrderDetailResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\InsureOrderDetailResponseBody\module\applicant;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\InsureOrderDetailResponseBody\module\insureOrderDetailList;

class module extends Model
{
    /**
     * @var applicant
     */
    public $applicant;

    /**
     * @var string
     */
    public $insOrderId;

    /**
     * @var insureOrderDetailList[]
     */
    public $insureOrderDetailList;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'applicant' => 'applicant',
        'insOrderId' => 'ins_order_id',
        'insureOrderDetailList' => 'insure_order_detail_list',
        'status' => 'status',
    ];

    public function validate()
    {
        if (null !== $this->applicant) {
            $this->applicant->validate();
        }
        if (\is_array($this->insureOrderDetailList)) {
            Model::validateArray($this->insureOrderDetailList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applicant) {
            $res['applicant'] = null !== $this->applicant ? $this->applicant->toArray($noStream) : $this->applicant;
        }

        if (null !== $this->insOrderId) {
            $res['ins_order_id'] = $this->insOrderId;
        }

        if (null !== $this->insureOrderDetailList) {
            if (\is_array($this->insureOrderDetailList)) {
                $res['insure_order_detail_list'] = [];
                $n1 = 0;
                foreach ($this->insureOrderDetailList as $item1) {
                    $res['insure_order_detail_list'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
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
        if (isset($map['applicant'])) {
            $model->applicant = applicant::fromMap($map['applicant']);
        }

        if (isset($map['ins_order_id'])) {
            $model->insOrderId = $map['ins_order_id'];
        }

        if (isset($map['insure_order_detail_list'])) {
            if (!empty($map['insure_order_detail_list'])) {
                $model->insureOrderDetailList = [];
                $n1 = 0;
                foreach ($map['insure_order_detail_list'] as $item1) {
                    $model->insureOrderDetailList[$n1] = insureOrderDetailList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        return $model;
    }
}
