<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\QueryHotelRoomDetailResponseBody;

use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\QueryHotelRoomDetailResponseBody\result\authAccounts;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\QueryHotelRoomDetailResponseBody\result\deviceInfos;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\QueryHotelRoomDetailResponseBody\result\otherService;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\QueryHotelRoomDetailResponseBody\result\roomControlInfo;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\QueryHotelRoomDetailResponseBody\result\roomServiceInfo;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var authAccounts[]
     */
    public $authAccounts;

    /**
     * @example rcu
     *
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
     * @example a7***83
     *
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
     * @example 2001
     *
     * @var string
     */
    public $roomNo;

    /**
     * @var roomServiceInfo
     */
    public $roomServiceInfo;
    protected $_name = [
        'authAccounts'       => 'AuthAccounts',
        'connectType'        => 'ConnectType',
        'creatorAccountName' => 'CreatorAccountName',
        'deviceInfos'        => 'DeviceInfos',
        'hotelId'            => 'HotelId',
        'hotelName'          => 'HotelName',
        'otherService'       => 'OtherService',
        'roomControlInfo'    => 'RoomControlInfo',
        'roomNo'             => 'RoomNo',
        'roomServiceInfo'    => 'RoomServiceInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->authAccounts) {
            $res['AuthAccounts'] = [];
            if (null !== $this->authAccounts && \is_array($this->authAccounts)) {
                $n = 0;
                foreach ($this->authAccounts as $item) {
                    $res['AuthAccounts'][$n++] = null !== $item ? $item->toMap() : $item;
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
            $res['DeviceInfos'] = [];
            if (null !== $this->deviceInfos && \is_array($this->deviceInfos)) {
                $n = 0;
                foreach ($this->deviceInfos as $item) {
                    $res['DeviceInfos'][$n++] = null !== $item ? $item->toMap() : $item;
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
            $res['OtherService'] = null !== $this->otherService ? $this->otherService->toMap() : null;
        }
        if (null !== $this->roomControlInfo) {
            $res['RoomControlInfo'] = null !== $this->roomControlInfo ? $this->roomControlInfo->toMap() : null;
        }
        if (null !== $this->roomNo) {
            $res['RoomNo'] = $this->roomNo;
        }
        if (null !== $this->roomServiceInfo) {
            $res['RoomServiceInfo'] = null !== $this->roomServiceInfo ? $this->roomServiceInfo->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuthAccounts'])) {
            if (!empty($map['AuthAccounts'])) {
                $model->authAccounts = [];
                $n                   = 0;
                foreach ($map['AuthAccounts'] as $item) {
                    $model->authAccounts[$n++] = null !== $item ? authAccounts::fromMap($item) : $item;
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
                $n                  = 0;
                foreach ($map['DeviceInfos'] as $item) {
                    $model->deviceInfos[$n++] = null !== $item ? deviceInfos::fromMap($item) : $item;
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
