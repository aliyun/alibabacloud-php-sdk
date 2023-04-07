<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelOrderCancelResponseBody;

use AlibabaCloud\Tea\Model;

class module extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $cancelSuccess;

    /**
     * @example 100
     *
     * @var int
     */
    public $forfeitFee;
    protected $_name = [
        'cancelSuccess' => 'cancel_success',
        'forfeitFee'    => 'forfeit_fee',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cancelSuccess) {
            $res['cancel_success'] = $this->cancelSuccess;
        }
        if (null !== $this->forfeitFee) {
            $res['forfeit_fee'] = $this->forfeitFee;
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
        if (isset($map['cancel_success'])) {
            $model->cancelSuccess = $map['cancel_success'];
        }
        if (isset($map['forfeit_fee'])) {
            $model->forfeitFee = $map['forfeit_fee'];
        }

        return $model;
    }
}
