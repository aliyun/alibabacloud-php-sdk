<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\GetDeviceStatusDetailResponseBody\result;

use AlibabaCloud\Tea\Model;

class power extends Model
{
    /**
     * @example 30
     *
     * @var int
     */
    public $quantity;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'quantity' => 'Quantity',
        'status'   => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->quantity) {
            $res['Quantity'] = $this->quantity;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return power
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Quantity'])) {
            $model->quantity = $map['Quantity'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
