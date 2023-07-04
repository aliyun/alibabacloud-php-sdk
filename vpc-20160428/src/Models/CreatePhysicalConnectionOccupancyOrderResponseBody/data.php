<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\CreatePhysicalConnectionOccupancyOrderResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The ID of the order that is placed.
     *
     * @example 50187055895****
     *
     * @var string
     */
    public $orderId;
    protected $_name = [
        'orderId' => 'OrderId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
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
        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }

        return $model;
    }
}
