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
     * @example hbaseue
     *
     * @var string
     */
    public $dbType;

    /**
     * @example true
     *
     * @var string
     */
    public $isMultimod;

    /**
     * @example VPC
     *
     * @var string
     */
    public $netType;

    /**
     * @example 70220050-A465-5DCC-8C0C-C38C6E3DB24D
     *
     * @var string
     */
    public $requestId;

    /**
     * @var serviceConnAddrs
     */
    public $serviceConnAddrs;

    /**
     * @var slbConnAddrs
     */
    public $slbConnAddrs;

    /**
     * @var thriftConn
     */
    public $thriftConn;

    /**
     * @var uiProxyConnAddrInfo
     */
    public $uiProxyConnAddrInfo;

    /**
     * @example vsw-bp1foll427ze3d4ps****
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @example vpc-bp15s22y1a7sff5gj****
     *
     * @var string
     */
    public $vpcId;

    /**
     * @var zkConnAddrs
     */
    public $zkConnAddrs;
    protected $_name = [
        'dbType'              => 'DbType',
        'isMultimod'          => 'IsMultimod',
        'netType'             => 'NetType',
        'requestId'           => 'RequestId',
        'serviceConnAddrs'    => 'ServiceConnAddrs',
        'slbConnAddrs'        => 'SlbConnAddrs',
        'thriftConn'          => 'ThriftConn',
        'uiProxyConnAddrInfo' => 'UiProxyConnAddrInfo',
        'vSwitchId'           => 'VSwitchId',
        'vpcId'               => 'VpcId',
        'zkConnAddrs'         => 'ZkConnAddrs',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dbType) {
            $res['DbType'] = $this->dbType;
        }
        if (null !== $this->isMultimod) {
            $res['IsMultimod'] = $this->isMultimod;
        }
        if (null !== $this->netType) {
            $res['NetType'] = $this->netType;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->serviceConnAddrs) {
            $res['ServiceConnAddrs'] = null !== $this->serviceConnAddrs ? $this->serviceConnAddrs->toMap() : null;
        }
        if (null !== $this->slbConnAddrs) {
            $res['SlbConnAddrs'] = null !== $this->slbConnAddrs ? $this->slbConnAddrs->toMap() : null;
        }
        if (null !== $this->thriftConn) {
            $res['ThriftConn'] = null !== $this->thriftConn ? $this->thriftConn->toMap() : null;
        }
        if (null !== $this->uiProxyConnAddrInfo) {
            $res['UiProxyConnAddrInfo'] = null !== $this->uiProxyConnAddrInfo ? $this->uiProxyConnAddrInfo->toMap() : null;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->zkConnAddrs) {
            $res['ZkConnAddrs'] = null !== $this->zkConnAddrs ? $this->zkConnAddrs->toMap() : null;
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
        if (isset($map['DbType'])) {
            $model->dbType = $map['DbType'];
        }
        if (isset($map['IsMultimod'])) {
            $model->isMultimod = $map['IsMultimod'];
        }
        if (isset($map['NetType'])) {
            $model->netType = $map['NetType'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ServiceConnAddrs'])) {
            $model->serviceConnAddrs = serviceConnAddrs::fromMap($map['ServiceConnAddrs']);
        }
        if (isset($map['SlbConnAddrs'])) {
            $model->slbConnAddrs = slbConnAddrs::fromMap($map['SlbConnAddrs']);
        }
        if (isset($map['ThriftConn'])) {
            $model->thriftConn = thriftConn::fromMap($map['ThriftConn']);
        }
        if (isset($map['UiProxyConnAddrInfo'])) {
            $model->uiProxyConnAddrInfo = uiProxyConnAddrInfo::fromMap($map['UiProxyConnAddrInfo']);
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['ZkConnAddrs'])) {
            $model->zkConnAddrs = zkConnAddrs::fromMap($map['ZkConnAddrs']);
        }

        return $model;
    }
}
