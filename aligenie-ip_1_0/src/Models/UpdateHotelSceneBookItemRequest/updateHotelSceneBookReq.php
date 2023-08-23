<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\UpdateHotelSceneBookItemRequest;

use AlibabaCloud\Tea\Model;

class updateHotelSceneBookReq extends Model
{
    /**
     * @description icon
     *
     * @example https://ailabs.alibabausercontent.com/platform/28d7a91e3c05db3855725fc39e0387e7/welcome_audios/aa918294b6ca3aa115c51135bf9b80cb/l9f996sq.png
     *
     * @var string
     */
    public $icon;

    /**
     * @example 1
     *
     * @var int
     */
    public $id;

    /**
     * @example 青椒肉丝
     *
     * @var string
     */
    public $name;

    /**
     * @example 1250
     *
     * @var int
     */
    public $price;
    protected $_name = [
        'icon'  => 'Icon',
        'id'    => 'Id',
        'name'  => 'Name',
        'price' => 'Price',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->icon) {
            $res['Icon'] = $this->icon;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->price) {
            $res['Price'] = $this->price;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return updateHotelSceneBookReq
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Icon'])) {
            $model->icon = $map['Icon'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Price'])) {
            $model->price = $map['Price'];
        }

        return $model;
    }
}
