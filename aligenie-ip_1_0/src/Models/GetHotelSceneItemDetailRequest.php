<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models;

use AlibabaCloud\Tea\Model;

class GetHotelSceneItemDetailRequest extends Model
{
    /**
     * @description hotelID
     *
     * @example 80d84ea8ed9e422fbad52715c8fc56f1
     *
     * @var string
     */
    public $hotelId;

    /**
     * @example 10336
     *
     * @var int
     */
    public $itemId;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'hotelId' => 'HotelId',
        'itemId'  => 'ItemId',
        'name'    => 'Name',
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
        if (null !== $this->itemId) {
            $res['ItemId'] = $this->itemId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetHotelSceneItemDetailRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HotelId'])) {
            $model->hotelId = $map['HotelId'];
        }
        if (isset($map['ItemId'])) {
            $model->itemId = $map['ItemId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
