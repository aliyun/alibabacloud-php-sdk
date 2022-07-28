<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20220531\Models\QueryRefundApplicationDetail4DistributionResponseBody\model;

use AlibabaCloud\Tea\Model;

class applyReason extends Model
{
    /**
     * @var int
     */
    public $reasonTextId;

    /**
     * @var string
     */
    public $reasonTips;
    protected $_name = [
        'reasonTextId' => 'ReasonTextId',
        'reasonTips'   => 'ReasonTips',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->reasonTextId) {
            $res['ReasonTextId'] = $this->reasonTextId;
        }
        if (null !== $this->reasonTips) {
            $res['ReasonTips'] = $this->reasonTips;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return applyReason
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ReasonTextId'])) {
            $model->reasonTextId = $map['ReasonTextId'];
        }
        if (isset($map['ReasonTips'])) {
            $model->reasonTips = $map['ReasonTips'];
        }

        return $model;
    }
}
