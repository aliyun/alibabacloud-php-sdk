<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\InsertHotelSceneBookItemRequest;

use AlibabaCloud\Tea\Model;

class addHotelSceneItemReq extends Model
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

    /**
     * @example FOOD
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'icon'  => 'Icon',
        'name'  => 'Name',
        'price' => 'Price',
        'type'  => 'Type',
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
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->price) {
            $res['Price'] = $this->price;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return addHotelSceneItemReq
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Icon'])) {
            $model->icon = $map['Icon'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Price'])) {
            $model->price = $map['Price'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
