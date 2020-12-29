<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeGtmInstanceAddressPoolsResponseBody;

use AlibabaCloud\Tea\Model;

class addrPools extends Model
{
    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $updateTime;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $monitorConfigId;

    /**
     * @var int
     */
    public $minAvailableAddrNum;

    /**
     * @var int
     */
    public $updateTimestamp;

    /**
     * @var string
     */
    public $monitorStatus;

    /**
     * @var string
     */
    public $addrPoolId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $addrCount;

    /**
     * @var int
     */
    public $createTimestamp;
    protected $_name = [
        'type'                => 'Type',
        'status'              => 'Status',
        'updateTime'          => 'UpdateTime',
        'createTime'          => 'CreateTime',
        'monitorConfigId'     => 'MonitorConfigId',
        'minAvailableAddrNum' => 'MinAvailableAddrNum',
        'updateTimestamp'     => 'UpdateTimestamp',
        'monitorStatus'       => 'MonitorStatus',
        'addrPoolId'          => 'AddrPoolId',
        'name'                => 'Name',
        'addrCount'           => 'AddrCount',
        'createTimestamp'     => 'CreateTimestamp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->monitorConfigId) {
            $res['MonitorConfigId'] = $this->monitorConfigId;
        }
        if (null !== $this->minAvailableAddrNum) {
            $res['MinAvailableAddrNum'] = $this->minAvailableAddrNum;
        }
        if (null !== $this->updateTimestamp) {
            $res['UpdateTimestamp'] = $this->updateTimestamp;
        }
        if (null !== $this->monitorStatus) {
            $res['MonitorStatus'] = $this->monitorStatus;
        }
        if (null !== $this->addrPoolId) {
            $res['AddrPoolId'] = $this->addrPoolId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->addrCount) {
            $res['AddrCount'] = $this->addrCount;
        }
        if (null !== $this->createTimestamp) {
            $res['CreateTimestamp'] = $this->createTimestamp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return addrPools
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['MonitorConfigId'])) {
            $model->monitorConfigId = $map['MonitorConfigId'];
        }
        if (isset($map['MinAvailableAddrNum'])) {
            $model->minAvailableAddrNum = $map['MinAvailableAddrNum'];
        }
        if (isset($map['UpdateTimestamp'])) {
            $model->updateTimestamp = $map['UpdateTimestamp'];
        }
        if (isset($map['MonitorStatus'])) {
            $model->monitorStatus = $map['MonitorStatus'];
        }
        if (isset($map['AddrPoolId'])) {
            $model->addrPoolId = $map['AddrPoolId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['AddrCount'])) {
            $model->addrCount = $map['AddrCount'];
        }
        if (isset($map['CreateTimestamp'])) {
            $model->createTimestamp = $map['CreateTimestamp'];
        }

        return $model;
    }
}
