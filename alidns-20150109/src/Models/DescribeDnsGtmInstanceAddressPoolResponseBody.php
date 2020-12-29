<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsGtmInstanceAddressPoolResponseBody\addrs;
use AlibabaCloud\Tea\Model;

class DescribeDnsGtmInstanceAddressPoolResponseBody extends Model
{
    /**
     * @var addrs[]
     */
    public $addrs;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $lbaStrategy;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var int
     */
    public $addrCount;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $updateTime;

    /**
     * @var string
     */
    public $addrPoolId;

    /**
     * @var int
     */
    public $updateTimestamp;

    /**
     * @var string
     */
    public $monitorConfigId;

    /**
     * @var string
     */
    public $monitorStatus;

    /**
     * @var int
     */
    public $createTimestamp;
    protected $_name = [
        'addrs'           => 'Addrs',
        'requestId'       => 'RequestId',
        'lbaStrategy'     => 'LbaStrategy',
        'createTime'      => 'CreateTime',
        'addrCount'       => 'AddrCount',
        'name'            => 'Name',
        'type'            => 'Type',
        'updateTime'      => 'UpdateTime',
        'addrPoolId'      => 'AddrPoolId',
        'updateTimestamp' => 'UpdateTimestamp',
        'monitorConfigId' => 'MonitorConfigId',
        'monitorStatus'   => 'MonitorStatus',
        'createTimestamp' => 'CreateTimestamp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->addrs) {
            $res['Addrs'] = [];
            if (null !== $this->addrs && \is_array($this->addrs)) {
                $n = 0;
                foreach ($this->addrs as $item) {
                    $res['Addrs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->lbaStrategy) {
            $res['LbaStrategy'] = $this->lbaStrategy;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->addrCount) {
            $res['AddrCount'] = $this->addrCount;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->addrPoolId) {
            $res['AddrPoolId'] = $this->addrPoolId;
        }
        if (null !== $this->updateTimestamp) {
            $res['UpdateTimestamp'] = $this->updateTimestamp;
        }
        if (null !== $this->monitorConfigId) {
            $res['MonitorConfigId'] = $this->monitorConfigId;
        }
        if (null !== $this->monitorStatus) {
            $res['MonitorStatus'] = $this->monitorStatus;
        }
        if (null !== $this->createTimestamp) {
            $res['CreateTimestamp'] = $this->createTimestamp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDnsGtmInstanceAddressPoolResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Addrs'])) {
            if (!empty($map['Addrs'])) {
                $model->addrs = [];
                $n            = 0;
                foreach ($map['Addrs'] as $item) {
                    $model->addrs[$n++] = null !== $item ? addrs::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['LbaStrategy'])) {
            $model->lbaStrategy = $map['LbaStrategy'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['AddrCount'])) {
            $model->addrCount = $map['AddrCount'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['AddrPoolId'])) {
            $model->addrPoolId = $map['AddrPoolId'];
        }
        if (isset($map['UpdateTimestamp'])) {
            $model->updateTimestamp = $map['UpdateTimestamp'];
        }
        if (isset($map['MonitorConfigId'])) {
            $model->monitorConfigId = $map['MonitorConfigId'];
        }
        if (isset($map['MonitorStatus'])) {
            $model->monitorStatus = $map['MonitorStatus'];
        }
        if (isset($map['CreateTimestamp'])) {
            $model->createTimestamp = $map['CreateTimestamp'];
        }

        return $model;
    }
}
