<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\InsureOrderCreateRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\InsureOrderCreateRequest\insPersonAndSegmentList\insured;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\InsureOrderCreateRequest\insPersonAndSegmentList\insureSegment;

class insPersonAndSegmentList extends Model
{
    /**
     * @var insureSegment
     */
    public $insureSegment;

    /**
     * @var insured
     */
    public $insured;

    /**
     * @var string
     */
    public $outSubInsOrderId;
    protected $_name = [
        'insureSegment' => 'insure_segment',
        'insured' => 'insured',
        'outSubInsOrderId' => 'out_sub_ins_order_id',
    ];

    public function validate()
    {
        if (null !== $this->insureSegment) {
            $this->insureSegment->validate();
        }
        if (null !== $this->insured) {
            $this->insured->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->insureSegment) {
            $res['insure_segment'] = null !== $this->insureSegment ? $this->insureSegment->toArray($noStream) : $this->insureSegment;
        }

        if (null !== $this->insured) {
            $res['insured'] = null !== $this->insured ? $this->insured->toArray($noStream) : $this->insured;
        }

        if (null !== $this->outSubInsOrderId) {
            $res['out_sub_ins_order_id'] = $this->outSubInsOrderId;
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
        if (isset($map['insure_segment'])) {
            $model->insureSegment = insureSegment::fromMap($map['insure_segment']);
        }

        if (isset($map['insured'])) {
            $model->insured = insured::fromMap($map['insured']);
        }

        if (isset($map['out_sub_ins_order_id'])) {
            $model->outSubInsOrderId = $map['out_sub_ins_order_id'];
        }

        return $model;
    }
}
