<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QueryAppDeviceListResponseBody\data;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $productName;

    /**
     * @var string
     */
    public $productKey;

    /**
     * @var string
     */
    public $deviceName;

    /**
     * @var int
     */
    public $nodeType;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $activeTime;

    /**
     * @var string
     */
    public $lastOnlineTime;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var int
     */
    public $childDeviceCount;

    /**
     * @var string
     */
    public $utcActiveTime;

    /**
     * @var string
     */
    public $utcLastOnlineTime;

    /**
     * @var string
     */
    public $utcCreateTime;
    protected $_name = [
        'productName'       => 'ProductName',
        'productKey'        => 'ProductKey',
        'deviceName'        => 'DeviceName',
        'nodeType'          => 'NodeType',
        'status'            => 'Status',
        'activeTime'        => 'ActiveTime',
        'lastOnlineTime'    => 'LastOnlineTime',
        'createTime'        => 'CreateTime',
        'childDeviceCount'  => 'ChildDeviceCount',
        'utcActiveTime'     => 'UtcActiveTime',
        'utcLastOnlineTime' => 'UtcLastOnlineTime',
        'utcCreateTime'     => 'UtcCreateTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->productName) {
            $res['ProductName'] = $this->productName;
        }
        if (null !== $this->productKey) {
            $res['ProductKey'] = $this->productKey;
        }
        if (null !== $this->deviceName) {
            $res['DeviceName'] = $this->deviceName;
        }
        if (null !== $this->nodeType) {
            $res['NodeType'] = $this->nodeType;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->activeTime) {
            $res['ActiveTime'] = $this->activeTime;
        }
        if (null !== $this->lastOnlineTime) {
            $res['LastOnlineTime'] = $this->lastOnlineTime;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->childDeviceCount) {
            $res['ChildDeviceCount'] = $this->childDeviceCount;
        }
        if (null !== $this->utcActiveTime) {
            $res['UtcActiveTime'] = $this->utcActiveTime;
        }
        if (null !== $this->utcLastOnlineTime) {
            $res['UtcLastOnlineTime'] = $this->utcLastOnlineTime;
        }
        if (null !== $this->utcCreateTime) {
            $res['UtcCreateTime'] = $this->utcCreateTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProductName'])) {
            $model->productName = $map['ProductName'];
        }
        if (isset($map['ProductKey'])) {
            $model->productKey = $map['ProductKey'];
        }
        if (isset($map['DeviceName'])) {
            $model->deviceName = $map['DeviceName'];
        }
        if (isset($map['NodeType'])) {
            $model->nodeType = $map['NodeType'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['ActiveTime'])) {
            $model->activeTime = $map['ActiveTime'];
        }
        if (isset($map['LastOnlineTime'])) {
            $model->lastOnlineTime = $map['LastOnlineTime'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['ChildDeviceCount'])) {
            $model->childDeviceCount = $map['ChildDeviceCount'];
        }
        if (isset($map['UtcActiveTime'])) {
            $model->utcActiveTime = $map['UtcActiveTime'];
        }
        if (isset($map['UtcLastOnlineTime'])) {
            $model->utcLastOnlineTime = $map['UtcLastOnlineTime'];
        }
        if (isset($map['UtcCreateTime'])) {
            $model->utcCreateTime = $map['UtcCreateTime'];
        }

        return $model;
    }
}
