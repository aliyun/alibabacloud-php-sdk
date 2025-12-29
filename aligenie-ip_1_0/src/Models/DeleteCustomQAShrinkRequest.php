<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models;

use AlibabaCloud\Dara\Model;

class DeleteCustomQAShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $customQAIdsShrink;

    /**
     * @var string
     */
    public $hotelId;
    protected $_name = [
        'customQAIdsShrink' => 'CustomQAIds',
        'hotelId' => 'HotelId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->customQAIdsShrink) {
            $res['CustomQAIds'] = $this->customQAIdsShrink;
        }

        if (null !== $this->hotelId) {
            $res['HotelId'] = $this->hotelId;
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
        if (isset($map['CustomQAIds'])) {
            $model->customQAIdsShrink = $map['CustomQAIds'];
        }

        if (isset($map['HotelId'])) {
            $model->hotelId = $map['HotelId'];
        }

        return $model;
    }
}
