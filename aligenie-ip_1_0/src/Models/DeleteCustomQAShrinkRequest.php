<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models;

use AlibabaCloud\Tea\Model;

class DeleteCustomQAShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $customQAIdsShrink;

    /**
     * @example a7a3***013
     *
     * @var string
     */
    public $hotelId;
    protected $_name = [
        'customQAIdsShrink' => 'CustomQAIds',
        'hotelId'           => 'HotelId',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return DeleteCustomQAShrinkRequest
     */
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
