<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\ListHotelsResponseBody\result;

use AlibabaCloud\Dara\Model;

class hotelInfoList extends Model
{
    /**
     * @var string[]
     */
    public $accountNames;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $hotelAddress;

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
    public $industryType;

    /**
     * @var string
     */
    public $phoneNumber;

    /**
     * @var string
     */
    public $relatedProductName;

    /**
     * @var int
     */
    public $roomNum;

    /**
     * @var int
     */
    public $status;
    protected $_name = [
        'accountNames' => 'AccountNames',
        'createTime' => 'CreateTime',
        'hotelAddress' => 'HotelAddress',
        'hotelId' => 'HotelId',
        'hotelName' => 'HotelName',
        'industryType' => 'IndustryType',
        'phoneNumber' => 'PhoneNumber',
        'relatedProductName' => 'RelatedProductName',
        'roomNum' => 'RoomNum',
        'status' => 'Status',
    ];

    public function validate()
    {
        if (\is_array($this->accountNames)) {
            Model::validateArray($this->accountNames);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accountNames) {
            if (\is_array($this->accountNames)) {
                $res['AccountNames'] = [];
                $n1 = 0;
                foreach ($this->accountNames as $item1) {
                    $res['AccountNames'][$n1] = $item1;
                    ++$n1;
                }
            }
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountNames'])) {
            if (!empty($map['AccountNames'])) {
                $model->accountNames = [];
                $n1 = 0;
                foreach ($map['AccountNames'] as $item1) {
                    $model->accountNames[$n1] = $item1;
                    ++$n1;
                }
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
