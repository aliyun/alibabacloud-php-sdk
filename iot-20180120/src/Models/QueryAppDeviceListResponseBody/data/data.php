<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QueryAppDeviceListResponseBody\data;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $activeTime;

    /**
     * @var int
     */
    public $childDeviceCount;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $deviceName;

    /**
     * @var string
     */
    public $lastOnlineTime;

    /**
     * @var int
     */
    public $nodeType;

    /**
     * @var string
     */
    public $productKey;

    /**
     * @var string
     */
    public $productName;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $utcActiveTime;

    /**
     * @var string
     */
    public $utcCreateTime;

    /**
     * @var string
     */
    public $utcLastOnlineTime;
    protected $_name = [
        'activeTime'        => 'ActiveTime',
        'childDeviceCount'  => 'ChildDeviceCount',
        'createTime'        => 'CreateTime',
        'deviceName'        => 'DeviceName',
        'lastOnlineTime'    => 'LastOnlineTime',
        'nodeType'          => 'NodeType',
        'productKey'        => 'ProductKey',
        'productName'       => 'ProductName',
        'status'            => 'Status',
        'utcActiveTime'     => 'UtcActiveTime',
        'utcCreateTime'     => 'UtcCreateTime',
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
        if (null !== $this->childDeviceCount) {
            $res['ChildDeviceCount'] = $this->childDeviceCount;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->deviceName) {
            $res['DeviceName'] = $this->deviceName;
        }
        if (null !== $this->lastOnlineTime) {
            $res['LastOnlineTime'] = $this->lastOnlineTime;
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
        if (null !== $this->utcCreateTime) {
            $res['UtcCreateTime'] = $this->utcCreateTime;
        }
        if (null !== $this->utcLastOnlineTime) {
            $res['UtcLastOnlineTime'] = $this->utcLastOnlineTime;
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
        if (isset($map['ActiveTime'])) {
            $model->activeTime = $map['ActiveTime'];
        }
        if (isset($map['ChildDeviceCount'])) {
            $model->childDeviceCount = $map['ChildDeviceCount'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['DeviceName'])) {
            $model->deviceName = $map['DeviceName'];
        }
        if (isset($map['LastOnlineTime'])) {
            $model->lastOnlineTime = $map['LastOnlineTime'];
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
        if (isset($map['UtcCreateTime'])) {
            $model->utcCreateTime = $map['UtcCreateTime'];
        }
        if (isset($map['UtcLastOnlineTime'])) {
            $model->utcLastOnlineTime = $map['UtcLastOnlineTime'];
        }

        return $model;
    }
}
