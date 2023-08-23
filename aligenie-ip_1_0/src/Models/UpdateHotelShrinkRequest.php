<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models;

use AlibabaCloud\Tea\Model;

class UpdateHotelShrinkRequest extends Model
{
    /**
     * @example 31342884
     *
     * @var string
     */
    public $appKey;

    /**
     * @example 2022-02-22 00:00:00
     *
     * @var string
     */
    public $estOpenTime;

    /**
     * @var string
     */
    public $hotelAddress;

    /**
     * @example a*****@hotel.com
     *
     * @var string
     */
    public $hotelEmail;

    /**
     * @example e6dd44fd16084db8a60d69fd625d9f0f
     *
     * @var string
     */
    public $hotelId;

    /**
     * @var string
     */
    public $hotelName;

    /**
     * @example 130***
     *
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
     * @example 4
     *
     * @var int
     */
    public $roomNum;

    /**
     * @example AAEVK***UE3d3Z2ETwh
     *
     * @var string
     */
    public $tbOpenId;
    protected $_name = [
        'appKey'           => 'AppKey',
        'estOpenTime'      => 'EstOpenTime',
        'hotelAddress'     => 'HotelAddress',
        'hotelEmail'       => 'HotelEmail',
        'hotelId'          => 'HotelId',
        'hotelName'        => 'HotelName',
        'phoneNumber'      => 'PhoneNumber',
        'relatedPksShrink' => 'RelatedPks',
        'remark'           => 'Remark',
        'roomNum'          => 'RoomNum',
        'tbOpenId'         => 'TbOpenId',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return UpdateHotelShrinkRequest
     */
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
