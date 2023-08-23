<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\ListHotelSceneItemResponseBody\result\secondCategoryList;

use AlibabaCloud\Tea\Model;

class itemList extends Model
{
    /**
     * @example 客用品类
     *
     * @var string
     */
    public $category;

    /**
     * @example https://ailabsaicloudservice.alicdn.com/hotel/icon/jiudianmianban_fuwushangpintu/wupin/keyongpinlei/mianqian.png
     *
     * @var string
     */
    public $icon;

    /**
     * @example 152860
     *
     * @var string
     */
    public $id;

    /**
     * @example 棉签
     *
     * @var string
     */
    public $name;

    /**
     * @example 1
     *
     * @var int
     */
    public $price;

    /**
     * @var int
     */
    public $residueLimit;

    /**
     * @example 已添加
     *
     * @var string
     */
    public $status;

    /**
     * @example GOODS
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'category'     => 'Category',
        'icon'         => 'Icon',
        'id'           => 'Id',
        'name'         => 'Name',
        'price'        => 'Price',
        'residueLimit' => 'ResidueLimit',
        'status'       => 'Status',
        'type'         => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
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
        if (null !== $this->residueLimit) {
            $res['ResidueLimit'] = $this->residueLimit;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return itemList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
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
        if (isset($map['ResidueLimit'])) {
            $model->residueLimit = $map['ResidueLimit'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
