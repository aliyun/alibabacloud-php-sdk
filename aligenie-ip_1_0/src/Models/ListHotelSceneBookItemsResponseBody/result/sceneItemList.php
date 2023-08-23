<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\ListHotelSceneBookItemsResponseBody\result;

use AlibabaCloud\Tea\Model;

class sceneItemList extends Model
{
    /**
     * @example https://ailabs.alibabausercontent.com/platform/28d7a91e3c05db3855725fc39e0387e7/welcome_audios/aa918294b6ca3aa115c51135bf9b80cb/l9f996sq.png
     *
     * @var string
     */
    public $icon;

    /**
     * @example 11824
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
     * @example 1850
     *
     * @var int
     */
    public $price;

    /**
     * @example 已添加
     *
     * @var string
     */
    public $status;

    /**
     * @example FOOD
     *
     * @var string
     */
    public $type;

    /**
     * @example 1666161803
     *
     * @var int
     */
    public $updateTime;
    protected $_name = [
        'icon'       => 'Icon',
        'id'         => 'Id',
        'name'       => 'Name',
        'price'      => 'Price',
        'status'     => 'Status',
        'type'       => 'Type',
        'updateTime' => 'UpdateTime',
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
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return sceneItemList
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
