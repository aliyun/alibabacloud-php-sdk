<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class CloseOrderRequest extends Model
{
    /**
     * @var int
     */
    public $tid;

    /**
     * @var int
     */
    public $orderId;

    /**
     * @var string
     */
    public $closeReason;
    protected $_name = [
        'tid'         => 'Tid',
        'orderId'     => 'OrderId',
        'closeReason' => 'CloseReason',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->tid) {
            $res['Tid'] = $this->tid;
        }
        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }
        if (null !== $this->closeReason) {
            $res['CloseReason'] = $this->closeReason;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CloseOrderRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Tid'])) {
            $model->tid = $map['Tid'];
        }
        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }
        if (isset($map['CloseReason'])) {
            $model->closeReason = $map['CloseReason'];
        }

        return $model;
    }
}
