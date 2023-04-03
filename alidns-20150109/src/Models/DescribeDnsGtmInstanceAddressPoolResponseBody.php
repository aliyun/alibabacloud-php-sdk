<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsGtmInstanceAddressPoolResponseBody\addrs;
use AlibabaCloud\Tea\Model;

class DescribeDnsGtmInstanceAddressPoolResponseBody extends Model
{
    /**
     * @description The number of addresses in the address pool.
     *
     * @example 1
     *
     * @var int
     */
    public $addrCount;

    /**
     * @description The ID of the address pool.
     *
     * @example testpool1
     *
     * @var string
     */
    public $addrPoolId;

    /**
     * @description The addresses in the address pool.
     *
     * @var addrs
     */
    public $addrs;

    /**
     * @description The time when the address pool was created.
     *
     * @example 2017-12-28T13:08Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The timestamp that indicates the time when the address pool was created.
     *
     * @example 1527690629357
     *
     * @var int
     */
    public $createTimestamp;

    /**
     * @description The load balancing policy for the address pool. Valid values:
     *
     *   ALL_RR: returns all addresses.
     *   RATIO: returns addresses by weight.
     *
     * @example all_rr
     *
     * @var string
     */
    public $lbaStrategy;

    /**
     * @description The ID of the health check configuration.
     *
     * @example test1
     *
     * @var string
     */
    public $monitorConfigId;

    /**
     * @description Indicates the status of the health check. Valid values:
     *
     *   OPEN: The health check is enabled.
     *   CLOSE: The health check is disabled.
     *   UNCONFIGURED: The health check is not configured.
     *
     * @example open
     *
     * @var string
     */
    public $monitorStatus;

    /**
     * @description The name of the address pool.
     *
     * @example test
     *
     * @var string
     */
    public $name;

    /**
     * @description The ID of the request.
     *
     * @example 6856BCF6-11D6-4D7E-AC53-FD579933522B
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The type of the address pool. Valid values:
     *
     *   IPV4: IPv4 address
     *   IPV6: IPv6 address
     *   DOMAIN: domain name
     *
     * @example ipv4
     *
     * @var string
     */
    public $type;

    /**
     * @description The time when the address pool was last updated.
     *
     * @example 2017-12-28T13:08Z
     *
     * @var string
     */
    public $updateTime;

    /**
     * @description The timestamp that indicates the time when the address pool was last updated.
     *
     * @example 1527690629357
     *
     * @var int
     */
    public $updateTimestamp;
    protected $_name = [
        'addrCount'       => 'AddrCount',
        'addrPoolId'      => 'AddrPoolId',
        'addrs'           => 'Addrs',
        'createTime'      => 'CreateTime',
        'createTimestamp' => 'CreateTimestamp',
        'lbaStrategy'     => 'LbaStrategy',
        'monitorConfigId' => 'MonitorConfigId',
        'monitorStatus'   => 'MonitorStatus',
        'name'            => 'Name',
        'requestId'       => 'RequestId',
        'type'            => 'Type',
        'updateTime'      => 'UpdateTime',
        'updateTimestamp' => 'UpdateTimestamp',
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
        if (null !== $this->addrs) {
            $res['Addrs'] = null !== $this->addrs ? $this->addrs->toMap() : null;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->createTimestamp) {
            $res['CreateTimestamp'] = $this->createTimestamp;
        }
        if (null !== $this->lbaStrategy) {
            $res['LbaStrategy'] = $this->lbaStrategy;
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
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
     * @return DescribeDnsGtmInstanceAddressPoolResponseBody
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
        if (isset($map['Addrs'])) {
            $model->addrs = addrs::fromMap($map['Addrs']);
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['CreateTimestamp'])) {
            $model->createTimestamp = $map['CreateTimestamp'];
        }
        if (isset($map['LbaStrategy'])) {
            $model->lbaStrategy = $map['LbaStrategy'];
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
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
