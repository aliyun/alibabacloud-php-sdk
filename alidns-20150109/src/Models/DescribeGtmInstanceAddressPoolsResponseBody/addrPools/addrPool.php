<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeGtmInstanceAddressPoolsResponseBody\addrPools;

use AlibabaCloud\Tea\Model;

class addrPool extends Model
{
    /**
     * @description The number of addresses in the address pool.
     *
     * @example 2
     *
     * @var int
     */
    public $addrCount;

    /**
     * @description The ID of the address pool.
     *
     * @example 1234abc
     *
     * @var string
     */
    public $addrPoolId;

    /**
     * @description The time when this address pool was created.
     *
     * @example 2017-12-28T13:08Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @example 1527690629357
     *
     * @var int
     */
    public $createTimestamp;

    /**
     * @description The minimum number of available addresses in the address pool.
     *
     * @example 2
     *
     * @var int
     */
    public $minAvailableAddrNum;

    /**
     * @description The health check ID of the address pool.
     *
     * @example 100abc
     *
     * @var string
     */
    public $monitorConfigId;

    /**
     * @description Indicates whether health check was enabled for the address pool. Valid values:
     *
     *   **OPEN**: Enabled
     *   **CLOSE**: Disabled
     *   **UNCONFIGURED**: Not configured
     *
     * @example OPEN
     *
     * @var string
     */
    public $monitorStatus;

    /**
     * @description The name of the address pool.
     *
     * @var string
     */
    public $name;

    /**
     * @description The availability status of the address pool. Valid values:
     *
     *   **AVAILABLE**: Available
     *   **NOT_AVAILABLE**: Unavailable
     *
     * @example AVAILABLE
     *
     * @var string
     */
    public $status;

    /**
     * @description The type of the address pool. Valid values:
     *
     *   **IP**: IP address
     *   **DOMAIN**: Domain name
     *
     * @example IP
     *
     * @var string
     */
    public $type;

    /**
     * @description The last time when the address pool was updated.
     *
     * @example 2017-12-28T13:08Z
     *
     * @var string
     */
    public $updateTime;

    /**
     * @description A timestamp that indicates the last time the address pool was updated.
     *
     * @example 1527690629357
     *
     * @var int
     */
    public $updateTimestamp;
    protected $_name = [
        'addrCount'           => 'AddrCount',
        'addrPoolId'          => 'AddrPoolId',
        'createTime'          => 'CreateTime',
        'createTimestamp'     => 'CreateTimestamp',
        'minAvailableAddrNum' => 'MinAvailableAddrNum',
        'monitorConfigId'     => 'MonitorConfigId',
        'monitorStatus'       => 'MonitorStatus',
        'name'                => 'Name',
        'status'              => 'Status',
        'type'                => 'Type',
        'updateTime'          => 'UpdateTime',
        'updateTimestamp'     => 'UpdateTimestamp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->addrCount) {
            $res['AddrCount'] = $this->addrCount;
        }
        if (null !== $this->addrPoolId) {
            $res['AddrPoolId'] = $this->addrPoolId;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->createTimestamp) {
            $res['CreateTimestamp'] = $this->createTimestamp;
        }
        if (null !== $this->minAvailableAddrNum) {
            $res['MinAvailableAddrNum'] = $this->minAvailableAddrNum;
        }
        if (null !== $this->monitorConfigId) {
            $res['MonitorConfigId'] = $this->monitorConfigId;
        }
        if (null !== $this->monitorStatus) {
            $res['MonitorStatus'] = $this->monitorStatus;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->updateTimestamp) {
            $res['UpdateTimestamp'] = $this->updateTimestamp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return addrPool
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AddrCount'])) {
            $model->addrCount = $map['AddrCount'];
        }
        if (isset($map['AddrPoolId'])) {
            $model->addrPoolId = $map['AddrPoolId'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['CreateTimestamp'])) {
            $model->createTimestamp = $map['CreateTimestamp'];
        }
        if (isset($map['MinAvailableAddrNum'])) {
            $model->minAvailableAddrNum = $map['MinAvailableAddrNum'];
        }
        if (isset($map['MonitorConfigId'])) {
            $model->monitorConfigId = $map['MonitorConfigId'];
        }
        if (isset($map['MonitorStatus'])) {
            $model->monitorStatus = $map['MonitorStatus'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['UpdateTimestamp'])) {
            $model->updateTimestamp = $map['UpdateTimestamp'];
        }

        return $model;
    }
}
