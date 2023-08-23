<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\ListHotelSceneItemsResponseBody\result;

use AlibabaCloud\Tea\Model;

class sceneItemList extends Model
{
    /**
     * @var string
     */
    public $beyondLimitReply;

    /**
     * @example 客用品类
     *
     * @var string
     */
    public $category;

    /**
     * @var string
     */
    public $deliveryMethod;

    /**
     * @example https://ailabsaicloudservice.alicdn.com/hotel/icon/jiudianmianban_fuwushangpintu/wupin/keyongpinlei/mianqian.png
     *
     * @var string
     */
    public $icon;

    /**
     * @description id
     *
     * @example 10336
     *
     * @var int
     */
    public $id;

    /**
     * @var int
     */
    public $limitNumber;

    /**
     * @var int
     */
    public $limitSwitch;

    /**
     * @example 棉签
     *
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $paymentMethod;

    /**
     * @example 160
     *
     * @var int
     */
    public $price;

    /**
     * @var string
     */
    public $robotName;

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
     * @example 1666163226
     *
     * @var int
     */
    public $updateTime;
    protected $_name = [
        'beyondLimitReply' => 'BeyondLimitReply',
        'category'         => 'Category',
        'deliveryMethod'   => 'DeliveryMethod',
        'icon'             => 'Icon',
        'id'               => 'Id',
        'limitNumber'      => 'LimitNumber',
        'limitSwitch'      => 'LimitSwitch',
        'name'             => 'Name',
        'paymentMethod'    => 'PaymentMethod',
        'price'            => 'Price',
        'robotName'        => 'RobotName',
        'status'           => 'Status',
        'type'             => 'Type',
        'updateTime'       => 'UpdateTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->beyondLimitReply) {
            $res['BeyondLimitReply'] = $this->beyondLimitReply;
        }
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
        if (null !== $this->deliveryMethod) {
            $res['DeliveryMethod'] = $this->deliveryMethod;
        }
        if (null !== $this->icon) {
            $res['Icon'] = $this->icon;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->limitNumber) {
            $res['LimitNumber'] = $this->limitNumber;
        }
        if (null !== $this->limitSwitch) {
            $res['LimitSwitch'] = $this->limitSwitch;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->paymentMethod) {
            $res['PaymentMethod'] = $this->paymentMethod;
        }
        if (null !== $this->price) {
            $res['Price'] = $this->price;
        }
        if (null !== $this->robotName) {
            $res['RobotName'] = $this->robotName;
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
        if (isset($map['BeyondLimitReply'])) {
            $model->beyondLimitReply = $map['BeyondLimitReply'];
        }
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['DeliveryMethod'])) {
            $model->deliveryMethod = $map['DeliveryMethod'];
        }
        if (isset($map['Icon'])) {
            $model->icon = $map['Icon'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['LimitNumber'])) {
            $model->limitNumber = $map['LimitNumber'];
        }
        if (isset($map['LimitSwitch'])) {
            $model->limitSwitch = $map['LimitSwitch'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['PaymentMethod'])) {
            $model->paymentMethod = $map['PaymentMethod'];
        }
        if (isset($map['Price'])) {
            $model->price = $map['Price'];
        }
        if (isset($map['RobotName'])) {
            $model->robotName = $map['RobotName'];
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
