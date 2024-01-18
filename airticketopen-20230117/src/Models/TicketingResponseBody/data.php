<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models\TicketingResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 496***2617111
     *
     * @var int
     */
    public $orderNum;

    /**
     * @example hkduendkd-2023-dj0
     *
     * @var string
     */
    public $transactionNo;
    protected $_name = [
        'orderNum'      => 'order_num',
        'transactionNo' => 'transaction_no',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->orderNum) {
            $res['order_num'] = $this->orderNum;
        }
        if (null !== $this->transactionNo) {
            $res['transaction_no'] = $this->transactionNo;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['order_num'])) {
            $model->orderNum = $map['order_num'];
        }
        if (isset($map['transaction_no'])) {
            $model->transactionNo = $map['transaction_no'];
        }

        return $model;
    }
}
