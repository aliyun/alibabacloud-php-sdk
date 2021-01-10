<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryRefundApplicationDetailResponseBody\refundApplicationDetail;

use AlibabaCloud\Tea\Model;

class maxRefundFeeData extends Model
{
    /**
     * @var int
     */
    public $maxRefundFee;

    /**
     * @var int
     */
    public $minRefundFee;
    protected $_name = [
        'maxRefundFee' => 'MaxRefundFee',
        'minRefundFee' => 'MinRefundFee',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->maxRefundFee) {
            $res['MaxRefundFee'] = $this->maxRefundFee;
        }
        if (null !== $this->minRefundFee) {
            $res['MinRefundFee'] = $this->minRefundFee;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return maxRefundFeeData
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MaxRefundFee'])) {
            $model->maxRefundFee = $map['MaxRefundFee'];
        }
        if (isset($map['MinRefundFee'])) {
            $model->minRefundFee = $map['MinRefundFee'];
        }

        return $model;
    }
}
