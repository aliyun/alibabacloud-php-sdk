<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models;

use AlibabaCloud\Tea\Model;

class CreateHotelRequest extends Model
{
    /**
     * @example 333566791
     *
     * @var string
     */
    public $appKey;

    /**
     * @example 2022-10-1 00:00:00
     *
     * @var string
     */
    public $estOpenTime;

    /**
     * @var string
     */
    public $hotelAddress;

    /**
     * @example test@hotel.com
     *
     * @var string
     */
    public $hotelEmail;

    /**
     * @var string
     */
    public $hotelName;

    /**
     * @example 13xxxxxxxx
     *
     * @var string
     */
    public $phoneNumber;

    /**
     * @example jTO****Rw
     *
     * @var string
     */
    public $relatedPk;

    /**
     * @description 酒店关联产品列表
     *
     * @var string[]
     */
    public $relatedPks;

    /**
     * @example test
     *
     * @var string
     */
    public $remark;

    /**
     * @example 100
     *
     * @var int
     */
    public $roomNum;

    /**
     * @example AAEV***E3d3Z2ETwh
     *
     * @var string
     */
    public $tbOpenId;
    protected $_name = [
        'appKey'       => 'AppKey',
        'estOpenTime'  => 'EstOpenTime',
        'hotelAddress' => 'HotelAddress',
        'hotelEmail'   => 'HotelEmail',
        'hotelName'    => 'HotelName',
        'phoneNumber'  => 'PhoneNumber',
        'relatedPk'    => 'RelatedPk',
        'relatedPks'   => 'RelatedPks',
        'remark'       => 'Remark',
        'roomNum'      => 'RoomNum',
        'tbOpenId'     => 'TbOpenId',
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
        if (null !== $this->hotelName) {
            $res['HotelName'] = $this->hotelName;
        }
        if (null !== $this->phoneNumber) {
            $res['PhoneNumber'] = $this->phoneNumber;
        }
        if (null !== $this->relatedPk) {
            $res['RelatedPk'] = $this->relatedPk;
        }
        if (null !== $this->relatedPks) {
            $res['RelatedPks'] = $this->relatedPks;
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
     * @return CreateHotelRequest
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
        if (isset($map['HotelName'])) {
            $model->hotelName = $map['HotelName'];
        }
        if (isset($map['PhoneNumber'])) {
            $model->phoneNumber = $map['PhoneNumber'];
        }
        if (isset($map['RelatedPk'])) {
            $model->relatedPk = $map['RelatedPk'];
        }
        if (isset($map['RelatedPks'])) {
            if (!empty($map['RelatedPks'])) {
                $model->relatedPks = $map['RelatedPks'];
            }
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
