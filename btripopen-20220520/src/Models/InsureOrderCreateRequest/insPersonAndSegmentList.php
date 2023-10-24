<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\InsureOrderCreateRequest;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\InsureOrderCreateRequest\insPersonAndSegmentList\insured;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\InsureOrderCreateRequest\insPersonAndSegmentList\insureSegment;
use AlibabaCloud\Tea\Model;

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
     * @example 12399992002002010
     *
     * @var string
     */
    public $outSubInsOrderId;
    protected $_name = [
        'insureSegment'    => 'insure_segment',
        'insured'          => 'insured',
        'outSubInsOrderId' => 'out_sub_ins_order_id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->insureSegment) {
            $res['insure_segment'] = null !== $this->insureSegment ? $this->insureSegment->toMap() : null;
        }
        if (null !== $this->insured) {
            $res['insured'] = null !== $this->insured ? $this->insured->toMap() : null;
        }
        if (null !== $this->outSubInsOrderId) {
            $res['out_sub_ins_order_id'] = $this->outSubInsOrderId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return insPersonAndSegmentList
     */
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
