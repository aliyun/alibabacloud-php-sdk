<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class CloseOrderRequest extends Model
{
    /**
     * @var string
     */
    public $closeReason;

    /**
     * @var int
     */
    public $orderId;

    /**
     * @var int
     */
    public $tid;
    protected $_name = [
        'closeReason' => 'CloseReason',
        'orderId'     => 'OrderId',
        'tid'         => 'Tid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->closeReason) {
            $res['CloseReason'] = $this->closeReason;
        }
        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }
        if (null !== $this->tid) {
            $res['Tid'] = $this->tid;
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
        if (isset($map['CloseReason'])) {
            $model->closeReason = $map['CloseReason'];
        }
        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }
        if (isset($map['Tid'])) {
            $model->tid = $map['Tid'];
        }

        return $model;
    }
}
