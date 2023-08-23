<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\GetHotelSceneItemDetailResponseBody;

use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\GetHotelSceneItemDetailResponseBody\result\dialogueList;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example 客用品类
     *
     * @var string
     */
    public $category;

    /**
     * @var dialogueList[]
     */
    public $dialogueList;

    /**
     * @example https://ailabsaicloudservice.alicdn.com/hotel/icon/jiudianmianban_fuwushangpintu/wupin/keyongpinlei/zhijin.png
     *
     * @var string
     */
    public $icon;

    /**
     * @example 10336
     *
     * @var int
     */
    public $id;

    /**
     * @example 擦鞋布
     *
     * @var string
     */
    public $name;

    /**
     * @example 170
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
     * @example GOODS
     *
     * @var string
     */
    public $type;

    /**
     * @example 1666168828
     *
     * @var int
     */
    public $updateTime;
    protected $_name = [
        'category'     => 'Category',
        'dialogueList' => 'DialogueList',
        'icon'         => 'Icon',
        'id'           => 'Id',
        'name'         => 'Name',
        'price'        => 'Price',
        'status'       => 'Status',
        'type'         => 'Type',
        'updateTime'   => 'UpdateTime',
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
        if (null !== $this->dialogueList) {
            $res['DialogueList'] = [];
            if (null !== $this->dialogueList && \is_array($this->dialogueList)) {
                $n = 0;
                foreach ($this->dialogueList as $item) {
                    $res['DialogueList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['DialogueList'])) {
            if (!empty($map['DialogueList'])) {
                $model->dialogueList = [];
                $n                   = 0;
                foreach ($map['DialogueList'] as $item) {
                    $model->dialogueList[$n++] = null !== $item ? dialogueList::fromMap($item) : $item;
                }
            }
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
