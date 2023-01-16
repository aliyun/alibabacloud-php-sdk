<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\TicketChangingCancelResponseBody;

use AlibabaCloud\Tea\Model;

class module extends Model
{
    /**
     * @example 0000-00-00 00:00:00
     *
     * @var string
     */
    public $cancelTime;

    /**
     * @example mid1243
     *
     * @var string
     */
    public $disSubOrderId;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'cancelTime'    => 'cancel_time',
        'disSubOrderId' => 'dis_sub_order_id',
        'status'        => 'status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cancelTime) {
            $res['cancel_time'] = $this->cancelTime;
        }
        if (null !== $this->disSubOrderId) {
            $res['dis_sub_order_id'] = $this->disSubOrderId;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return module
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['cancel_time'])) {
            $model->cancelTime = $map['cancel_time'];
        }
        if (isset($map['dis_sub_order_id'])) {
            $model->disSubOrderId = $map['dis_sub_order_id'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        return $model;
    }
}
