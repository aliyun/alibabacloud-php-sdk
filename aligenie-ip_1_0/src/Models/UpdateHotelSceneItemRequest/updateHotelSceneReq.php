<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\UpdateHotelSceneItemRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\UpdateHotelSceneItemRequest\updateHotelSceneReq\dialogueList;

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
     * @var string
     */
    public $icon;

    /**
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
     * @var int
     */
    public $price;

    /**
     * @var string
     */
    public $robotName;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'beyondLimitReply' => 'BeyondLimitReply',
        'deliveryMethod' => 'DeliveryMethod',
        'dialogueList' => 'DialogueList',
        'icon' => 'Icon',
        'id' => 'Id',
        'limitNumber' => 'LimitNumber',
        'limitSwitch' => 'LimitSwitch',
        'name' => 'Name',
        'paymentMethod' => 'PaymentMethod',
        'price' => 'Price',
        'robotName' => 'RobotName',
        'status' => 'Status',
    ];

    public function validate()
    {
        if (\is_array($this->dialogueList)) {
            Model::validateArray($this->dialogueList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->beyondLimitReply) {
            $res['BeyondLimitReply'] = $this->beyondLimitReply;
        }

        if (null !== $this->deliveryMethod) {
            $res['DeliveryMethod'] = $this->deliveryMethod;
        }

        if (null !== $this->dialogueList) {
            if (\is_array($this->dialogueList)) {
                $res['DialogueList'] = [];
                $n1 = 0;
                foreach ($this->dialogueList as $item1) {
                    $res['DialogueList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $n1 = 0;
                foreach ($map['DialogueList'] as $item1) {
                    $model->dialogueList[$n1] = dialogueList::fromMap($item1);
                    ++$n1;
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
