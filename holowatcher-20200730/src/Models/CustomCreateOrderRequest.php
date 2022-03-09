<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Holowatcher\V20200730\Models;

use AlibabaCloud\Tea\Model;

class CustomCreateOrderRequest extends Model
{
    /**
     * @var string
     */
    public $itemType;

    /**
     * @var string
     */
    public $orderName;

    /**
     * @var string
     */
    public $orderPhotoContact;

    /**
     * @var string
     */
    public $photoAddress;

    /**
     * @var string
     */
    public $photoEnvironment;

    /**
     * @var int
     */
    public $photoFloorNum;
    protected $_name = [
        'itemType'          => 'ItemType',
        'orderName'         => 'OrderName',
        'orderPhotoContact' => 'OrderPhotoContact',
        'photoAddress'      => 'PhotoAddress',
        'photoEnvironment'  => 'PhotoEnvironment',
        'photoFloorNum'     => 'PhotoFloorNum',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->itemType) {
            $res['ItemType'] = $this->itemType;
        }
        if (null !== $this->orderName) {
            $res['OrderName'] = $this->orderName;
        }
        if (null !== $this->orderPhotoContact) {
            $res['OrderPhotoContact'] = $this->orderPhotoContact;
        }
        if (null !== $this->photoAddress) {
            $res['PhotoAddress'] = $this->photoAddress;
        }
        if (null !== $this->photoEnvironment) {
            $res['PhotoEnvironment'] = $this->photoEnvironment;
        }
        if (null !== $this->photoFloorNum) {
            $res['PhotoFloorNum'] = $this->photoFloorNum;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CustomCreateOrderRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ItemType'])) {
            $model->itemType = $map['ItemType'];
        }
        if (isset($map['OrderName'])) {
            $model->orderName = $map['OrderName'];
        }
        if (isset($map['OrderPhotoContact'])) {
            $model->orderPhotoContact = $map['OrderPhotoContact'];
        }
        if (isset($map['PhotoAddress'])) {
            $model->photoAddress = $map['PhotoAddress'];
        }
        if (isset($map['PhotoEnvironment'])) {
            $model->photoEnvironment = $map['PhotoEnvironment'];
        }
        if (isset($map['PhotoFloorNum'])) {
            $model->photoFloorNum = $map['PhotoFloorNum'];
        }

        return $model;
    }
}
