<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models;

use AlibabaCloud\SDK\Cmn\V20200825\Models\Ip\zoneLayer;
use AlibabaCloud\Tea\Model;

class Ip extends Model
{
    /**
     * @example 123
     *
     * @var string
     */
    public $businessTypeId;

    /**
     * @example 互联地址
     *
     * @var string
     */
    public $businessTypeName;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @example 10:11:10:10:10:10
     *
     * @var string
     */
    public $deviceMac;

    /**
     * @example ASW-1
     *
     * @var string
     */
    public $deviceName;

    /**
     * @example 10.0.0.1
     *
     * @var string
     */
    public $ipAddress;

    /**
     * @var string
     */
    public $ipId;

    /**
     * @var string
     */
    public $ipName;

    /**
     * @example 10.0.0.0/8
     *
     * @var string
     */
    public $parentIpBlock;

    /**
     * @example vlan100
     *
     * @var string
     */
    public $port;

    /**
     * @example using
     *
     * @var string
     */
    public $status;

    /**
     * @var zoneLayer[]
     */
    public $zoneLayer;
    protected $_name = [
        'businessTypeId'   => 'BusinessTypeId',
        'businessTypeName' => 'BusinessTypeName',
        'createTime'       => 'CreateTime',
        'deviceMac'        => 'DeviceMac',
        'deviceName'       => 'DeviceName',
        'ipAddress'        => 'IpAddress',
        'ipId'             => 'IpId',
        'ipName'           => 'IpName',
        'parentIpBlock'    => 'ParentIpBlock',
        'port'             => 'Port',
        'status'           => 'Status',
        'zoneLayer'        => 'ZoneLayer',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->businessTypeId) {
            $res['BusinessTypeId'] = $this->businessTypeId;
        }
        if (null !== $this->businessTypeName) {
            $res['BusinessTypeName'] = $this->businessTypeName;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->deviceMac) {
            $res['DeviceMac'] = $this->deviceMac;
        }
        if (null !== $this->deviceName) {
            $res['DeviceName'] = $this->deviceName;
        }
        if (null !== $this->ipAddress) {
            $res['IpAddress'] = $this->ipAddress;
        }
        if (null !== $this->ipId) {
            $res['IpId'] = $this->ipId;
        }
        if (null !== $this->ipName) {
            $res['IpName'] = $this->ipName;
        }
        if (null !== $this->parentIpBlock) {
            $res['ParentIpBlock'] = $this->parentIpBlock;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->zoneLayer) {
            $res['ZoneLayer'] = [];
            if (null !== $this->zoneLayer && \is_array($this->zoneLayer)) {
                $n = 0;
                foreach ($this->zoneLayer as $item) {
                    $res['ZoneLayer'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return Ip
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BusinessTypeId'])) {
            $model->businessTypeId = $map['BusinessTypeId'];
        }
        if (isset($map['BusinessTypeName'])) {
            $model->businessTypeName = $map['BusinessTypeName'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['DeviceMac'])) {
            $model->deviceMac = $map['DeviceMac'];
        }
        if (isset($map['DeviceName'])) {
            $model->deviceName = $map['DeviceName'];
        }
        if (isset($map['IpAddress'])) {
            $model->ipAddress = $map['IpAddress'];
        }
        if (isset($map['IpId'])) {
            $model->ipId = $map['IpId'];
        }
        if (isset($map['IpName'])) {
            $model->ipName = $map['IpName'];
        }
        if (isset($map['ParentIpBlock'])) {
            $model->parentIpBlock = $map['ParentIpBlock'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['ZoneLayer'])) {
            if (!empty($map['ZoneLayer'])) {
                $model->zoneLayer = [];
                $n                = 0;
                foreach ($map['ZoneLayer'] as $item) {
                    $model->zoneLayer[$n++] = null !== $item ? zoneLayer::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
