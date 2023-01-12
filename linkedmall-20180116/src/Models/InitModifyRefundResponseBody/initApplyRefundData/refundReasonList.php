<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\InitModifyRefundResponseBody\initApplyRefundData;

use AlibabaCloud\Tea\Model;

class refundReasonList extends Model
{
    /**
     * @var \AlibabaCloud\SDK\Linkedmall\V20180116\Models\InitModifyRefundResponseBody\initApplyRefundData\refundReasonList\refundReasonList[]
     */
    public $refundReasonList;
    protected $_name = [
        'refundReasonList' => 'RefundReasonList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->refundReasonList) {
            $res['RefundReasonList'] = [];
            if (null !== $this->refundReasonList && \is_array($this->refundReasonList)) {
                $n = 0;
                foreach ($this->refundReasonList as $item) {
                    $res['RefundReasonList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return refundReasonList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RefundReasonList'])) {
            if (!empty($map['RefundReasonList'])) {
                $model->refundReasonList = [];
                $n                       = 0;
                foreach ($map['RefundReasonList'] as $item) {
                    $model->refundReasonList[$n++] = null !== $item ? \AlibabaCloud\SDK\Linkedmall\V20180116\Models\InitModifyRefundResponseBody\initApplyRefundData\refundReasonList\refundReasonList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
