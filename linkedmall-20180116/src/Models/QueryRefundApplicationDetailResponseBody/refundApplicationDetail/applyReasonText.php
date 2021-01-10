<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryRefundApplicationDetailResponseBody\refundApplicationDetail;

use AlibabaCloud\Tea\Model;

class applyReasonText extends Model
{
    /**
     * @var string
     */
    public $reasonTips;

    /**
     * @var int
     */
    public $reasonTextId;
    protected $_name = [
        'reasonTips'   => 'ReasonTips',
        'reasonTextId' => 'ReasonTextId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->reasonTips) {
            $res['ReasonTips'] = $this->reasonTips;
        }
        if (null !== $this->reasonTextId) {
            $res['ReasonTextId'] = $this->reasonTextId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return applyReasonText
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ReasonTips'])) {
            $model->reasonTips = $map['ReasonTips'];
        }
        if (isset($map['ReasonTextId'])) {
            $model->reasonTextId = $map['ReasonTextId'];
        }

        return $model;
    }
}
