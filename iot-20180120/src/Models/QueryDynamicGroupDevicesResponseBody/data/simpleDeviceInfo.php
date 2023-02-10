<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QueryDynamicGroupDevicesResponseBody\data;

use AlibabaCloud\Tea\Model;

class simpleDeviceInfo extends Model
{
    /**
     * @example 2018-08-06 10:48:41
     *
     * @var string
     */
    public $activeTime;

    /**
     * @example Lighting
     *
     * @var string
     */
    public $categoryKey;

    /**
     * @example light
     *
     * @var string
     */
    public $deviceName;

    /**
     * @example Q7uOhVRdZRRlDnTLv****00100
     *
     * @var string
     */
    public $iotId;

    /**
     * @example 2018-08-06 13:43:12
     *
     * @var string
     */
    public $lastOnlineTime;

    /**
     * @example detectors_in_beijing
     *
     * @var string
     */
    public $nickname;

    /**
     * @example 0
     *
     * @var int
     */
    public $nodeType;

    /**
     * @example a1rYuVF***
     *
     * @var string
     */
    public $productKey;

    /**
     * @example test
     *
     * @var string
     */
    public $productName;

    /**
     * @example ONLINE
     *
     * @var string
     */
    public $status;

    /**
     * @example 2018-08-06T02:48:41.000Z
     *
     * @var string
     */
    public $utcActiveTime;

    /**
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
