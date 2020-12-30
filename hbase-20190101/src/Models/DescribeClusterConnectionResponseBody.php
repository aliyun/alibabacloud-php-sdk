<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models;

use AlibabaCloud\SDK\HBase\V20190101\Models\DescribeClusterConnectionResponseBody\serviceConnAddrs;
use AlibabaCloud\SDK\HBase\V20190101\Models\DescribeClusterConnectionResponseBody\slbConnAddrs;
use AlibabaCloud\SDK\HBase\V20190101\Models\DescribeClusterConnectionResponseBody\thriftConn;
use AlibabaCloud\SDK\HBase\V20190101\Models\DescribeClusterConnectionResponseBody\uiProxyConnAddrInfo;
use AlibabaCloud\SDK\HBase\V20190101\Models\DescribeClusterConnectionResponseBody\zkConnAddrs;
use AlibabaCloud\Tea\Model;

class DescribeClusterConnectionResponseBody extends Model
{
    /**
     * @var string
     */
    public $isMultimod;

    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var uiProxyConnAddrInfo
     */
    public $uiProxyConnAddrInfo;

    /**
     * @var string
     */
    public $vSwitchId;

    /**
     * @var serviceConnAddrs
     */
    public $serviceConnAddrs;

    /**
     * @var string
     */
    public $netType;

    /**
     * @var string
     */
    public $dbType;

    /**
     * @var thriftConn
     */
    public $thriftConn;

    /**
     * @var zkConnAddrs
     */
    public $zkConnAddrs;

    /**
     * @var slbConnAddrs
     */
    public $slbConnAddrs;
    protected $_name = [
        'isMultimod'          => 'IsMultimod',
        'vpcId'               => 'VpcId',
        'requestId'           => 'RequestId',
        'uiProxyConnAddrInfo' => 'UiProxyConnAddrInfo',
        'vSwitchId'           => 'VSwitchId',
        'serviceConnAddrs'    => 'ServiceConnAddrs',
        'netType'             => 'NetType',
        'dbType'              => 'DbType',
        'thriftConn'          => 'ThriftConn',
        'zkConnAddrs'         => 'ZkConnAddrs',
        'slbConnAddrs'        => 'SlbConnAddrs',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->isMultimod) {
            $res['IsMultimod'] = $this->isMultimod;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->uiProxyConnAddrInfo) {
            $res['UiProxyConnAddrInfo'] = null !== $this->uiProxyConnAddrInfo ? $this->uiProxyConnAddrInfo->toMap() : null;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->serviceConnAddrs) {
            $res['ServiceConnAddrs'] = null !== $this->serviceConnAddrs ? $this->serviceConnAddrs->toMap() : null;
        }
        if (null !== $this->netType) {
            $res['NetType'] = $this->netType;
        }
        if (null !== $this->dbType) {
            $res['DbType'] = $this->dbType;
        }
        if (null !== $this->thriftConn) {
            $res['ThriftConn'] = null !== $this->thriftConn ? $this->thriftConn->toMap() : null;
        }
        if (null !== $this->zkConnAddrs) {
            $res['ZkConnAddrs'] = null !== $this->zkConnAddrs ? $this->zkConnAddrs->toMap() : null;
        }
        if (null !== $this->slbConnAddrs) {
            $res['SlbConnAddrs'] = null !== $this->slbConnAddrs ? $this->slbConnAddrs->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeClusterConnectionResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IsMultimod'])) {
            $model->isMultimod = $map['IsMultimod'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['UiProxyConnAddrInfo'])) {
            $model->uiProxyConnAddrInfo = uiProxyConnAddrInfo::fromMap($map['UiProxyConnAddrInfo']);
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['ServiceConnAddrs'])) {
            $model->serviceConnAddrs = serviceConnAddrs::fromMap($map['ServiceConnAddrs']);
        }
        if (isset($map['NetType'])) {
            $model->netType = $map['NetType'];
        }
        if (isset($map['DbType'])) {
            $model->dbType = $map['DbType'];
        }
        if (isset($map['ThriftConn'])) {
            $model->thriftConn = thriftConn::fromMap($map['ThriftConn']);
        }
        if (isset($map['ZkConnAddrs'])) {
            $model->zkConnAddrs = zkConnAddrs::fromMap($map['ZkConnAddrs']);
        }
        if (isset($map['SlbConnAddrs'])) {
            $model->slbConnAddrs = slbConnAddrs::fromMap($map['SlbConnAddrs']);
        }

        return $model;
    }
}
