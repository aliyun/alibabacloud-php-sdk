<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QueryDynamicGroupDevicesResponseBody\data;

use AlibabaCloud\Tea\Model;

class simpleDeviceInfo extends Model
{
    /**
     * @description The time when the device was activated.
     *
     * @example 2018-08-06 10:48:41
     *
     * @var string
     */
    public $activeTime;

    /**
     * @description The identifier of the category to which the product belongs.
     *
     * This parameter is returned if the product uses the Thing Specification Language (TSL) model of a standard category that is pre-defined by IoT Platform.
     * @example Lighting
     *
     * @var string
     */
    public $categoryKey;

    /**
     * @description The DeviceName of the device.
     *
     * @example light
     *
     * @var string
     */
    public $deviceName;

    /**
     * @description The ID of the device. The ID is a unique identifier that is issued by IoT Platform to the device.
     *
     * @example Q7uOhVRdZRRlDnTLv****00100
     *
     * @var string
     */
    public $iotId;

    /**
     * @description The last time when the device went online.
     *
     * @example 2018-08-06 13:43:12
     *
     * @var string
     */
    public $lastOnlineTime;

    /**
     * @description The alias of the device.
     *
     * @example detectors_in_beijing
     *
     * @var string
     */
    public $nickname;

    /**
     * @description The node type of the product. Valid values:
     *
     *   **0**: device. A device can connect to IoT Platform directly, or be attached to a gateway as a sub-device and then connect to IoT Platform. Sub-devices cannot be attached to a device.
     *   **1**: gateway. Sub-devices can be attached to a gateway. A gateway can manage sub-devices, maintain topological relationships with sub-devices, and synchronize topological relationships to IoT Platform.
     *
     * @example 0
     *
     * @var int
     */
    public $nodeType;

    /**
     * @description The **ProductKey** of the product to which the device belongs.
     *
     * @example a1rYuVF***
     *
     * @var string
     */
    public $productKey;

    /**
     * @description The ProductName of the product to which the device belongs.
     *
     * @example test
     *
     * @var string
     */
    public $productName;

    /**
     * @description The device status. Valid values:
     *
     *   **ONLINE**: The device is online.
     *   **OFFLINE**: The device is offline.
     *   **UNACTIVE**: The device is not activated.
     *   **DISABLE**: The device is deactivated.
     *
     * @example ONLINE
     *
     * @var string
     */
    public $status;

    /**
     * @description The time when the device was activated. The time is in the UTC format.
     *
     * @example 2018-08-06T02:48:41.000Z
     *
     * @var string
     */
    public $utcActiveTime;

    /**
     * @description The last time when the device went online. The time is in the UTC format.
     *
     * @example 2018-08-06T05:43:12.000Z
     *
     * @var string
     */
    public $utcLastOnlineTime;
    protected $_name = [
        'activeTime'        => 'ActiveTime',
        'categoryKey'       => 'CategoryKey',
        'deviceName'        => 'DeviceName',
        'iotId'             => 'IotId',
        'lastOnlineTime'    => 'LastOnlineTime',
        'nickname'          => 'Nickname',
        'nodeType'          => 'NodeType',
        'productKey'        => 'ProductKey',
        'productName'       => 'ProductName',
        'status'            => 'Status',
        'utcActiveTime'     => 'UtcActiveTime',
        'utcLastOnlineTime' => 'UtcLastOnlineTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->activeTime) {
            $res['ActiveTime'] = $this->activeTime;
        }
        if (null !== $this->categoryKey) {
            $res['CategoryKey'] = $this->categoryKey;
        }
        if (null !== $this->deviceName) {
            $res['DeviceName'] = $this->deviceName;
        }
        if (null !== $this->iotId) {
            $res['IotId'] = $this->iotId;
        }
        if (null !== $this->lastOnlineTime) {
            $res['LastOnlineTime'] = $this->lastOnlineTime;
        }
        if (null !== $this->nickname) {
            $res['Nickname'] = $this->nickname;
        }
        if (null !== $this->nodeType) {
            $res['NodeType'] = $this->nodeType;
        }
        if (null !== $this->productKey) {
            $res['ProductKey'] = $this->productKey;
        }
        if (null !== $this->productName) {
            $res['ProductName'] = $this->productName;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->utcActiveTime) {
            $res['UtcActiveTime'] = $this->utcActiveTime;
        }
        if (null !== $this->utcLastOnlineTime) {
            $res['UtcLastOnlineTime'] = $this->utcLastOnlineTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return simpleDeviceInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActiveTime'])) {
            $model->activeTime = $map['ActiveTime'];
        }
        if (isset($map['CategoryKey'])) {
            $model->categoryKey = $map['CategoryKey'];
        }
        if (isset($map['DeviceName'])) {
            $model->deviceName = $map['DeviceName'];
        }
        if (isset($map['IotId'])) {
            $model->iotId = $map['IotId'];
        }
        if (isset($map['LastOnlineTime'])) {
            $model->lastOnlineTime = $map['LastOnlineTime'];
        }
        if (isset($map['Nickname'])) {
            $model->nickname = $map['Nickname'];
        }
        if (isset($map['NodeType'])) {
            $model->nodeType = $map['NodeType'];
        }
        if (isset($map['ProductKey'])) {
            $model->productKey = $map['ProductKey'];
        }
        if (isset($map['ProductName'])) {
            $model->productName = $map['ProductName'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['UtcActiveTime'])) {
            $model->utcActiveTime = $map['UtcActiveTime'];
        }
        if (isset($map['UtcLastOnlineTime'])) {
            $model->utcLastOnlineTime = $map['UtcLastOnlineTime'];
        }

        return $model;
    }
}
