<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models;

use AlibabaCloud\Dara\Model;

class GlobalHotelValidatePriceShrinkRequest extends Model
{
    /**
     * @var int
     */
    public $accountNo;

    /**
     * @var int
     */
    public $adults;

    /**
     * @var int
     */
    public $children;

    /**
     * @var string
     */
    public $childrenAgesShrink;

    /**
     * @var string
     */
    public $itemOfferKey;

    /**
     * @var int
     */
    public $roomCount;

    /**
     * @var string
     */
    public $tracerId;
    protected $_name = [
        'accountNo' => 'AccountNo',
        'adults' => 'Adults',
        'children' => 'Children',
        'childrenAgesShrink' => 'ChildrenAges',
        'itemOfferKey' => 'ItemOfferKey',
        'roomCount' => 'RoomCount',
        'tracerId' => 'TracerId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accountNo) {
            $res['AccountNo'] = $this->accountNo;
        }

        if (null !== $this->adults) {
            $res['Adults'] = $this->adults;
        }

        if (null !== $this->children) {
            $res['Children'] = $this->children;
        }

        if (null !== $this->childrenAgesShrink) {
            $res['ChildrenAges'] = $this->childrenAgesShrink;
        }

        if (null !== $this->itemOfferKey) {
            $res['ItemOfferKey'] = $this->itemOfferKey;
        }

        if (null !== $this->roomCount) {
            $res['RoomCount'] = $this->roomCount;
        }

        if (null !== $this->tracerId) {
            $res['TracerId'] = $this->tracerId;
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
        if (isset($map['AccountNo'])) {
            $model->accountNo = $map['AccountNo'];
        }

        if (isset($map['Adults'])) {
            $model->adults = $map['Adults'];
        }

        if (isset($map['Children'])) {
            $model->children = $map['Children'];
        }

        if (isset($map['ChildrenAges'])) {
            $model->childrenAgesShrink = $map['ChildrenAges'];
        }

        if (isset($map['ItemOfferKey'])) {
            $model->itemOfferKey = $map['ItemOfferKey'];
        }

        if (isset($map['RoomCount'])) {
            $model->roomCount = $map['RoomCount'];
        }

        if (isset($map['TracerId'])) {
            $model->tracerId = $map['TracerId'];
        }

        return $model;
    }
}
