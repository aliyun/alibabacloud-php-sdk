<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelOrderChangeApplyResponseBody;

use AlibabaCloud\Tea\Model;

class module extends Model
{
    /**
     * @example 123445443444
     *
     * @var string
     */
    public $changeOrderId;
    protected $_name = [
        'changeOrderId' => 'change_order_id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->changeOrderId) {
            $res['change_order_id'] = $this->changeOrderId;
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
        if (isset($map['change_order_id'])) {
            $model->changeOrderId = $map['change_order_id'];
        }

        return $model;
    }
}
