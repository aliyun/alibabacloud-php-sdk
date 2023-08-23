<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models;

use AlibabaCloud\Tea\Model;

class DeleteCartoonRequest extends Model
{
    /**
     * @example a7***83
     *
     * @var string
     */
    public $hotelId;
    protected $_name = [
        'hotelId' => 'HotelId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->hotelId) {
            $res['HotelId'] = $this->hotelId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteCartoonRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HotelId'])) {
            $model->hotelId = $map['HotelId'];
        }

        return $model;
    }
}
