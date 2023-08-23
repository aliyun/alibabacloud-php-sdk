<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\ListHotelsResponseBody\result;

use AlibabaCloud\Tea\Model;

class hotelInfoList extends Model
{
    /**
     * @var string[]
     */
    public $accountNames;

    /**
     * @example 1654568802000
     *
     * @var int
     */
    public $createTime;

    /**
     * @example 酒店地址
     *
     * @var string
     */
    public $hotelAddress;

    /**
     * @example 73ab1b03018d4da69b5bef17095f569b
     *
     * @var string
     */
    public $hotelId;

    /**
     * @example 酒店名称
     *
     * @var string
     */
    public $hotelName;

    /**
     * @example 酒店
     *
     * @var string
     */
    public $industryType;

    /**
     * @example 13312340987
     *
     * @var string
     */
    public $phoneNumber;

    /**
     * @example 测试产品
     *
     * @var string
     */
    public $relatedProductName;

    /**
     * @example 12
     *
     * @var int
     */
    public $roomNum;

    /**
     * @example 1
     *
     * @var int
     */
    public $status;
    protected $_name = [
        'accountNames'       => 'AccountNames',
        'createTime'         => 'CreateTime',
        'hotelAddress'       => 'HotelAddress',
        'hotelId'            => 'HotelId',
        'hotelName'          => 'HotelName',
        'industryType'       => 'IndustryType',
        'phoneNumber'        => 'PhoneNumber',
        'relatedProductName' => 'RelatedProductName',
        'roomNum'            => 'RoomNum',
        'status'             => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountNames) {
            $res['AccountNames'] = $this->accountNames;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->hotelAddress) {
            $res['HotelAddress'] = $this->hotelAddress;
        }
        if (null !== $this->hotelId) {
            $res['HotelId'] = $this->hotelId;
        }
        if (null !== $this->hotelName) {
            $res['HotelName'] = $this->hotelName;
        }
        if (null !== $this->industryType) {
            $res['IndustryType'] = $this->industryType;
        }
        if (null !== $this->phoneNumber) {
            $res['PhoneNumber'] = $this->phoneNumber;
        }
        if (null !== $this->relatedProductName) {
            $res['RelatedProductName'] = $this->relatedProductName;
        }
        if (null !== $this->roomNum) {
            $res['RoomNum'] = $this->roomNum;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return hotelInfoList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountNames'])) {
            if (!empty($map['AccountNames'])) {
                $model->accountNames = $map['AccountNames'];
            }
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['HotelAddress'])) {
            $model->hotelAddress = $map['HotelAddress'];
        }
        if (isset($map['HotelId'])) {
            $model->hotelId = $map['HotelId'];
        }
        if (isset($map['HotelName'])) {
            $model->hotelName = $map['HotelName'];
        }
        if (isset($map['IndustryType'])) {
            $model->industryType = $map['IndustryType'];
        }
        if (isset($map['PhoneNumber'])) {
            $model->phoneNumber = $map['PhoneNumber'];
        }
        if (isset($map['RelatedProductName'])) {
            $model->relatedProductName = $map['RelatedProductName'];
        }
        if (isset($map['RoomNum'])) {
            $model->roomNum = $map['RoomNum'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
