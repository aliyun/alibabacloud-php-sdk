<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models;

use AlibabaCloud\Tea\Model;

class QueryHotelRoomDetailRequest extends Model
{
    /**
     * @example 520a0c0***5eb
     *
     * @var string
     */
    public $hotelId;

    /**
     * @example 38:c8:**:**:f5:22
     *
     * @var string
     */
    public $mac;

    /**
     * @example 1211
     *
     * @var string
     */
    public $roomNo;

    /**
     * @description 设备sn信息
     * 传入mac uuid sn其中一个 则酒店id和房间号可不传
     * @example 280**28
     *
     * @var string
     */
    public $sn;

    /**
     * @example 588***96j5WU
     *
     * @var string
     */
    public $uuid;
    protected $_name = [
        'hotelId' => 'HotelId',
        'mac'     => 'Mac',
        'roomNo'  => 'RoomNo',
        'sn'      => 'Sn',
        'uuid'    => 'Uuid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->hotelId) {
            $res['HotelId'] = $this->hotelId;
        }
        if (null !== $this->mac) {
            $res['Mac'] = $this->mac;
        }
        if (null !== $this->roomNo) {
            $res['RoomNo'] = $this->roomNo;
        }
        if (null !== $this->sn) {
            $res['Sn'] = $this->sn;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryHotelRoomDetailRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HotelId'])) {
            $model->hotelId = $map['HotelId'];
        }
        if (isset($map['Mac'])) {
            $model->mac = $map['Mac'];
        }
        if (isset($map['RoomNo'])) {
            $model->roomNo = $map['RoomNo'];
        }
        if (isset($map['Sn'])) {
            $model->sn = $map['Sn'];
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}
