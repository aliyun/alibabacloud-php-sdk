<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models;

use AlibabaCloud\Tea\Model;

class QueryOrderItemInfoByPaymentIdForAiZhanYouRequest extends Model
{
    /**
     * @var string
     */
    public $bizId;

    /**
     * @var string
     */
    public $bizUid;

    /**
     * @var string
     */
    public $paymentId;
    protected $_name = [
        'bizId'     => 'BizId',
        'bizUid'    => 'BizUid',
        'paymentId' => 'PaymentId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }
        if (null !== $this->bizUid) {
            $res['BizUid'] = $this->bizUid;
        }
        if (null !== $this->paymentId) {
            $res['PaymentId'] = $this->paymentId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryOrderItemInfoByPaymentIdForAiZhanYouRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }
        if (isset($map['BizUid'])) {
            $model->bizUid = $map['BizUid'];
        }
        if (isset($map['PaymentId'])) {
            $model->paymentId = $map['PaymentId'];
        }

        return $model;
    }
}
