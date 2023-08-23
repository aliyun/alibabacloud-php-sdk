<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\QueryHotelRoomDetailResponseBody\result\roomControlInfo;

use AlibabaCloud\Tea\Model;

class deviceInfos extends Model
{
    /**
     * @example light
     *
     * @var string
     */
    public $categoryEnName;

    /**
     * @example 3
     *
     * @var int
     */
    public $categoryId;

    /**
     * @var string
     */
    public $categoryName;

    /**
     * @example rcu
     *
     * @var string
     */
    public $deviceConnectType;

    /**
     * @example 4
     *
     * @var int
     */
    public $deviceCount;

    /**
     * @example readLight
     *
     * @var string
     */
    public $deviceId;

    /**
     * @var string
     */
    public $deviceName;

    /**
     * @example room
     *
     * @var string
     */
    public $locationEnName;

    /**
     * @example 1
     *
     * @var int
     */
    public $locationId;

    /**
     * @var string
     */
    public $locationName;

    /**
     * @example a1ueWGP6W2L
     *
     * @var string
     */
    public $productKey;
    protected $_name = [
        'categoryEnName'    => 'CategoryEnName',
        'categoryId'        => 'CategoryId',
        'categoryName'      => 'CategoryName',
        'deviceConnectType' => 'DeviceConnectType',
        'deviceCount'       => 'DeviceCount',
        'deviceId'          => 'DeviceId',
        'deviceName'        => 'DeviceName',
        'locationEnName'    => 'LocationEnName',
        'locationId'        => 'LocationId',
        'locationName'      => 'LocationName',
        'productKey'        => 'ProductKey',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->categoryEnName) {
            $res['CategoryEnName'] = $this->categoryEnName;
        }
        if (null !== $this->categoryId) {
            $res['CategoryId'] = $this->categoryId;
        }
        if (null !== $this->categoryName) {
            $res['CategoryName'] = $this->categoryName;
        }
        if (null !== $this->deviceConnectType) {
            $res['DeviceConnectType'] = $this->deviceConnectType;
        }
        if (null !== $this->deviceCount) {
            $res['DeviceCount'] = $this->deviceCount;
        }
        if (null !== $this->deviceId) {
            $res['DeviceId'] = $this->deviceId;
        }
        if (null !== $this->deviceName) {
            $res['DeviceName'] = $this->deviceName;
        }
        if (null !== $this->locationEnName) {
            $res['LocationEnName'] = $this->locationEnName;
        }
        if (null !== $this->locationId) {
            $res['LocationId'] = $this->locationId;
        }
        if (null !== $this->locationName) {
            $res['LocationName'] = $this->locationName;
        }
        if (null !== $this->productKey) {
            $res['ProductKey'] = $this->productKey;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return deviceInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CategoryEnName'])) {
            $model->categoryEnName = $map['CategoryEnName'];
        }
        if (isset($map['CategoryId'])) {
            $model->categoryId = $map['CategoryId'];
        }
        if (isset($map['CategoryName'])) {
            $model->categoryName = $map['CategoryName'];
        }
        if (isset($map['DeviceConnectType'])) {
            $model->deviceConnectType = $map['DeviceConnectType'];
        }
        if (isset($map['DeviceCount'])) {
            $model->deviceCount = $map['DeviceCount'];
        }
        if (isset($map['DeviceId'])) {
            $model->deviceId = $map['DeviceId'];
        }
        if (isset($map['DeviceName'])) {
            $model->deviceName = $map['DeviceName'];
        }
        if (isset($map['LocationEnName'])) {
            $model->locationEnName = $map['LocationEnName'];
        }
        if (isset($map['LocationId'])) {
            $model->locationId = $map['LocationId'];
        }
        if (isset($map['LocationName'])) {
            $model->locationName = $map['LocationName'];
        }
        if (isset($map['ProductKey'])) {
            $model->productKey = $map['ProductKey'];
        }

        return $model;
    }
}
