<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\UpdateHotelSceneItemRequest;

use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\UpdateHotelSceneItemRequest\updateHotelSceneReq\dialogueList;
use AlibabaCloud\Tea\Model;

class updateHotelSceneReq extends Model
{
    /**
     * @var string
     */
    public $beyondLimitReply;

    /**
     * @var string
     */
    public $deliveryMethod;

    /**
     * @var dialogueList[]
     */
    public $dialogueList;

    /**
     * @description icon
     *
     * @example https://ailabsaicloudservice.alicdn.com/hotel/icon/jiudianmianban_fuwushangpintu/wupin/keyongpinlei/mianqian.png
     *
     * @var string
     */
    public $icon;

    /**
     * @description itemID
     *
     * @example 10337
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
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $paymentMethod;

    /**
     * @example 165
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
    protected $_name = [
        'beyondLimitReply' => 'BeyondLimitReply',
        'deliveryMethod'   => 'DeliveryMethod',
        'dialogueList'     => 'DialogueList',
        'icon'             => 'Icon',
        'id'               => 'Id',
        'limitNumber'      => 'LimitNumber',
        'limitSwitch'      => 'LimitSwitch',
        'name'             => 'Name',
        'paymentMethod'    => 'PaymentMethod',
        'price'            => 'Price',
        'robotName'        => 'RobotName',
        'status'           => 'Status',
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
        if (null !== $this->deliveryMethod) {
            $res['DeliveryMethod'] = $this->deliveryMethod;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return updateHotelSceneReq
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BeyondLimitReply'])) {
            $model->beyondLimitReply = $map['BeyondLimitReply'];
        }
        if (isset($map['DeliveryMethod'])) {
            $model->deliveryMethod = $map['DeliveryMethod'];
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

        return $model;
    }
}
