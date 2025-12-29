<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models;

use AlibabaCloud\Dara\Model;

class UpdateHotelShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $appKey;

    /**
     * @var string
     */
    public $estOpenTime;

    /**
     * @var string
     */
    public $hotelAddress;

    /**
     * @var string
     */
    public $hotelEmail;

    /**
     * @var string
     */
    public $hotelId;

    /**
     * @var string
     */
    public $hotelName;

    /**
     * @var string
     */
    public $phoneNumber;

    /**
     * @var string
     */
    public $relatedPksShrink;

    /**
     * @var string
     */
    public $remark;

    /**
     * @var int
     */
    public $roomNum;

    /**
     * @var string
     */
    public $tbOpenId;
    protected $_name = [
        'appKey' => 'AppKey',
        'estOpenTime' => 'EstOpenTime',
        'hotelAddress' => 'HotelAddress',
        'hotelEmail' => 'HotelEmail',
        'hotelId' => 'HotelId',
        'hotelName' => 'HotelName',
        'phoneNumber' => 'PhoneNumber',
        'relatedPksShrink' => 'RelatedPks',
        'remark' => 'Remark',
        'roomNum' => 'RoomNum',
        'tbOpenId' => 'TbOpenId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appKey) {
            $res['AppKey'] = $this->appKey;
        }

        if (null !== $this->estOpenTime) {
            $res['EstOpenTime'] = $this->estOpenTime;
        }

        if (null !== $this->hotelAddress) {
            $res['HotelAddress'] = $this->hotelAddress;
        }

        if (null !== $this->hotelEmail) {
            $res['HotelEmail'] = $this->hotelEmail;
        }

        if (null !== $this->hotelId) {
            $res['HotelId'] = $this->hotelId;
        }

        if (null !== $this->hotelName) {
            $res['HotelName'] = $this->hotelName;
        }

        if (null !== $this->phoneNumber) {
            $res['PhoneNumber'] = $this->phoneNumber;
        }

        if (null !== $this->relatedPksShrink) {
            $res['RelatedPks'] = $this->relatedPksShrink;
        }

        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }

        if (null !== $this->roomNum) {
            $res['RoomNum'] = $this->roomNum;
        }

        if (null !== $this->tbOpenId) {
            $res['TbOpenId'] = $this->tbOpenId;
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
        if (isset($map['AppKey'])) {
            $model->appKey = $map['AppKey'];
        }

        if (isset($map['EstOpenTime'])) {
            $model->estOpenTime = $map['EstOpenTime'];
        }

        if (isset($map['HotelAddress'])) {
            $model->hotelAddress = $map['HotelAddress'];
        }

        if (isset($map['HotelEmail'])) {
            $model->hotelEmail = $map['HotelEmail'];
        }

        if (isset($map['HotelId'])) {
            $model->hotelId = $map['HotelId'];
        }

        if (isset($map['HotelName'])) {
            $model->hotelName = $map['HotelName'];
        }

        if (isset($map['PhoneNumber'])) {
            $model->phoneNumber = $map['PhoneNumber'];
        }

        if (isset($map['RelatedPks'])) {
            $model->relatedPksShrink = $map['RelatedPks'];
        }

        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }

        if (isset($map['RoomNum'])) {
            $model->roomNum = $map['RoomNum'];
        }

        if (isset($map['TbOpenId'])) {
            $model->tbOpenId = $map['TbOpenId'];
        }

        return $model;
    }
}
