<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelOrderDetailInfoResponseBody\module\btripHotelCancelPolicyDTO;

use AlibabaCloud\Dara\Model;

class btripHotelCancelPolicyInfoDTOList extends Model
{
    /**
     * @var int
     */
    public $hour;

    /**
     * @var int
     */
    public $value;
    protected $_name = [
        'hour' => 'hour',
        'value' => 'value',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->hour) {
            $res['hour'] = $this->hour;
        }

        if (null !== $this->value) {
            $res['value'] = $this->value;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['hour'])) {
            $model->hour = $map['hour'];
        }

        if (isset($map['value'])) {
            $model->value = $map['value'];
        }

        return $model;
    }
}
