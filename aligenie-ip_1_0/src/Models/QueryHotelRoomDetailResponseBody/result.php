<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\QueryHotelRoomDetailResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\QueryHotelRoomDetailResponseBody\result\authAccounts;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\QueryHotelRoomDetailResponseBody\result\deviceInfos;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\QueryHotelRoomDetailResponseBody\result\otherService;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\QueryHotelRoomDetailResponseBody\result\roomControlInfo;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\QueryHotelRoomDetailResponseBody\result\roomServiceInfo;

class result extends Model
{
    /**
     * @var authAccounts[]
     */
    public $authAccounts;

    /**
     * @var string
     */
    public $connectType;

    /**
     * @var string
     */
    public $creatorAccountName;

    /**
     * @var deviceInfos[]
     */
    public $deviceInfos;

    /**
     * @var string
     */
    public $hotelId;

    /**
     * @var string
     */
    public $hotelName;

    /**
     * @var otherService
     */
    public $otherService;

    /**
     * @var roomControlInfo
     */
    public $roomControlInfo;

    /**
     * @var string
     */
    public $roomNo;

    /**
     * @var roomServiceInfo
     */
    public $roomServiceInfo;
    protected $_name = [
        'authAccounts' => 'AuthAccounts',
        'connectType' => 'ConnectType',
        'creatorAccountName' => 'CreatorAccountName',
        'deviceInfos' => 'DeviceInfos',
        'hotelId' => 'HotelId',
        'hotelName' => 'HotelName',
        'otherService' => 'OtherService',
        'roomControlInfo' => 'RoomControlInfo',
        'roomNo' => 'RoomNo',
        'roomServiceInfo' => 'RoomServiceInfo',
    ];

    public function validate()
    {
        if (\is_array($this->authAccounts)) {
            Model::validateArray($this->authAccounts);
        }
        if (\is_array($this->deviceInfos)) {
            Model::validateArray($this->deviceInfos);
        }
        if (null !== $this->otherService) {
            $this->otherService->validate();
        }
        if (null !== $this->roomControlInfo) {
            $this->roomControlInfo->validate();
        }
        if (null !== $this->roomServiceInfo) {
            $this->roomServiceInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authAccounts) {
            if (\is_array($this->authAccounts)) {
                $res['AuthAccounts'] = [];
                $n1 = 0;
                foreach ($this->authAccounts as $item1) {
                    $res['AuthAccounts'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->connectType) {
            $res['ConnectType'] = $this->connectType;
        }

        if (null !== $this->creatorAccountName) {
            $res['CreatorAccountName'] = $this->creatorAccountName;
        }

        if (null !== $this->deviceInfos) {
            if (\is_array($this->deviceInfos)) {
                $res['DeviceInfos'] = [];
                $n1 = 0;
                foreach ($this->deviceInfos as $item1) {
                    $res['DeviceInfos'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->hotelId) {
            $res['HotelId'] = $this->hotelId;
        }

        if (null !== $this->hotelName) {
            $res['HotelName'] = $this->hotelName;
        }

        if (null !== $this->otherService) {
            $res['OtherService'] = null !== $this->otherService ? $this->otherService->toArray($noStream) : $this->otherService;
        }

        if (null !== $this->roomControlInfo) {
            $res['RoomControlInfo'] = null !== $this->roomControlInfo ? $this->roomControlInfo->toArray($noStream) : $this->roomControlInfo;
        }

        if (null !== $this->roomNo) {
            $res['RoomNo'] = $this->roomNo;
        }

        if (null !== $this->roomServiceInfo) {
            $res['RoomServiceInfo'] = null !== $this->roomServiceInfo ? $this->roomServiceInfo->toArray($noStream) : $this->roomServiceInfo;
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
        if (isset($map['AuthAccounts'])) {
            if (!empty($map['AuthAccounts'])) {
                $model->authAccounts = [];
                $n1 = 0;
                foreach ($map['AuthAccounts'] as $item1) {
                    $model->authAccounts[$n1] = authAccounts::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ConnectType'])) {
            $model->connectType = $map['ConnectType'];
        }

        if (isset($map['CreatorAccountName'])) {
            $model->creatorAccountName = $map['CreatorAccountName'];
        }

        if (isset($map['DeviceInfos'])) {
            if (!empty($map['DeviceInfos'])) {
                $model->deviceInfos = [];
                $n1 = 0;
                foreach ($map['DeviceInfos'] as $item1) {
                    $model->deviceInfos[$n1] = deviceInfos::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['HotelId'])) {
            $model->hotelId = $map['HotelId'];
        }

        if (isset($map['HotelName'])) {
            $model->hotelName = $map['HotelName'];
        }

        if (isset($map['OtherService'])) {
            $model->otherService = otherService::fromMap($map['OtherService']);
        }

        if (isset($map['RoomControlInfo'])) {
            $model->roomControlInfo = roomControlInfo::fromMap($map['RoomControlInfo']);
        }

        if (isset($map['RoomNo'])) {
            $model->roomNo = $map['RoomNo'];
        }

        if (isset($map['RoomServiceInfo'])) {
            $model->roomServiceInfo = roomServiceInfo::fromMap($map['RoomServiceInfo']);
        }

        return $model;
    }
}
