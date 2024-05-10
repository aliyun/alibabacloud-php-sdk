<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\InsureOrderCreateRequest\applicant;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\InsureOrderCreateRequest\insPersonAndSegmentList;
use AlibabaCloud\Tea\Model;

class InsureOrderCreateRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var applicant
     */
    public $applicant;

    /**
     * @example 20202109390122
     *
     * @var string
     */
    public $btripUserId;

    /**
     * @var string
     */
    public $buyerName;

    /**
     * @description This parameter is required.
     *
     * @var insPersonAndSegmentList[]
     */
    public $insPersonAndSegmentList;

    /**
     * @description This parameter is required.
     *
     * @example PostalSavingsBank
     *
     * @var string
     */
    public $isvName;

    /**
     * @example 100000320302020
     *
     * @var string
     */
    public $outInsOrderId;

    /**
     * @description This parameter is required.
     *
     * @example 202310101026030
     *
     * @var string
     */
    public $outOrderId;

    /**
     * @example 1020030003332000
     *
     * @var string
     */
    public $outSubOrderId;

    /**
     * @example fliggy
     *
     * @var string
     */
    public $supplierCode;
    protected $_name = [
        'applicant'               => 'applicant',
        'btripUserId'             => 'btrip_user_id',
        'buyerName'               => 'buyer_name',
        'insPersonAndSegmentList' => 'ins_person_and_segment_list',
        'isvName'                 => 'isv_name',
        'outInsOrderId'           => 'out_ins_order_id',
        'outOrderId'              => 'out_order_id',
        'outSubOrderId'           => 'out_sub_order_id',
        'supplierCode'            => 'supplier_code',
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
        if (null !== $this->btripUserId) {
            $res['btrip_user_id'] = $this->btripUserId;
        }
        if (null !== $this->buyerName) {
            $res['buyer_name'] = $this->buyerName;
        }
        if (null !== $this->insPersonAndSegmentList) {
            $res['ins_person_and_segment_list'] = [];
            if (null !== $this->insPersonAndSegmentList && \is_array($this->insPersonAndSegmentList)) {
                $n = 0;
                foreach ($this->insPersonAndSegmentList as $item) {
                    $res['ins_person_and_segment_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->isvName) {
            $res['isv_name'] = $this->isvName;
        }
        if (null !== $this->outInsOrderId) {
            $res['out_ins_order_id'] = $this->outInsOrderId;
        }
        if (null !== $this->outOrderId) {
            $res['out_order_id'] = $this->outOrderId;
        }
        if (null !== $this->outSubOrderId) {
            $res['out_sub_order_id'] = $this->outSubOrderId;
        }
        if (null !== $this->supplierCode) {
            $res['supplier_code'] = $this->supplierCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return InsureOrderCreateRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['applicant'])) {
            $model->applicant = applicant::fromMap($map['applicant']);
        }
        if (isset($map['btrip_user_id'])) {
            $model->btripUserId = $map['btrip_user_id'];
        }
        if (isset($map['buyer_name'])) {
            $model->buyerName = $map['buyer_name'];
        }
        if (isset($map['ins_person_and_segment_list'])) {
            if (!empty($map['ins_person_and_segment_list'])) {
                $model->insPersonAndSegmentList = [];
                $n                              = 0;
                foreach ($map['ins_person_and_segment_list'] as $item) {
                    $model->insPersonAndSegmentList[$n++] = null !== $item ? insPersonAndSegmentList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['isv_name'])) {
            $model->isvName = $map['isv_name'];
        }
        if (isset($map['out_ins_order_id'])) {
            $model->outInsOrderId = $map['out_ins_order_id'];
        }
        if (isset($map['out_order_id'])) {
            $model->outOrderId = $map['out_order_id'];
        }
        if (isset($map['out_sub_order_id'])) {
            $model->outSubOrderId = $map['out_sub_order_id'];
        }
        if (isset($map['supplier_code'])) {
            $model->supplierCode = $map['supplier_code'];
        }

        return $model;
    }
}
