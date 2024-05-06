<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20170115\Models;

use AlibabaCloud\SDK\HBase\V20170115\Models\DescribeClusterConnectAddrsResponseBody\serviceConnAddrs;
use AlibabaCloud\SDK\HBase\V20170115\Models\DescribeClusterConnectAddrsResponseBody\slbConnAddrs;
use AlibabaCloud\SDK\HBase\V20170115\Models\DescribeClusterConnectAddrsResponseBody\thriftConn;
use AlibabaCloud\SDK\HBase\V20170115\Models\DescribeClusterConnectAddrsResponseBody\uiProxyConnAddrInfo;
use AlibabaCloud\SDK\HBase\V20170115\Models\DescribeClusterConnectAddrsResponseBody\zkConnAddrs;
use AlibabaCloud\Tea\Model;

class DescribeClusterConnectAddrsResponseBody extends Model
{
    /**
     * @var string
     */
    public $dbType;

    /**
     * @var string
     */
    public $isMultimod;

    /**
     * @var string
     */
    public $netType;

    /**
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
     * @var string
     */
    public $vSwitchId;

    /**
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
     * @return DescribeClusterConnectAddrsResponseBody
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
