<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Tea\Model;

class TicketChangingDetailRequest extends Model
{
    /**
     * @example dis123
     *
     * @var string
     */
    public $disOrderId;

    /**
     * @example chang123
     *
     * @var string
     */
    public $disSubOrderId;
    protected $_name = [
        'disOrderId'    => 'dis_order_id',
        'disSubOrderId' => 'dis_sub_order_id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->disOrderId) {
            $res['dis_order_id'] = $this->disOrderId;
        }
        if (null !== $this->disSubOrderId) {
            $res['dis_sub_order_id'] = $this->disSubOrderId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return TicketChangingDetailRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['dis_order_id'])) {
            $model->disOrderId = $map['dis_order_id'];
        }
        if (isset($map['dis_sub_order_id'])) {
            $model->disSubOrderId = $map['dis_sub_order_id'];
        }

        return $model;
    }
}
