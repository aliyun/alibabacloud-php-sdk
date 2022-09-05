<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class CallChainInfo extends Model
{
    /**
     * @var string
     */
    public $additionalInfo;

    /**
     * @var string
     */
    public $appName;

    /**
     * @var string
     */
    public $appType;

    /**
     * @var \AlibabaCloud\SDK\ARMS\V20190808\Models\CallChainInfo[]
     */
    public $children;

    /**
     * @var bool
     */
    public $haveSpan;

    /**
     * @var mixed[][]
     */
    public $logMap;

    /**
     * @var int
     */
    public $logTime;

    /**
     * @var string
     */
    public $parentSpanId;

    /**
     * @var string
     */
    public $pid;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resultCode;

    /**
     * @var string
     */
    public $rpc;

    /**
     * @var string
     */
    public $rpcId;

    /**
     * @var int
     */
    public $rpcType;

    /**
     * @var string
     */
    public $serverIp;

    /**
     * @var int
     */
    public $span;

    /**
     * @var string
     */
    public $spanId;

    /**
     * @var string[]
     */
    public $tagMap;

    /**
     * @var string
     */
    public $traceId;
    protected $_name = [
        'additionalInfo' => 'AdditionalInfo',
        'appName'        => 'AppName',
        'appType'        => 'AppType',
        'children'       => 'Children',
        'haveSpan'       => 'HaveSpan',
        'logMap'         => 'LogMap',
        'logTime'        => 'LogTime',
        'parentSpanId'   => 'ParentSpanId',
        'pid'            => 'Pid',
        'regionId'       => 'RegionId',
        'resultCode'     => 'ResultCode',
        'rpc'            => 'Rpc',
        'rpcId'          => 'RpcId',
        'rpcType'        => 'RpcType',
        'serverIp'       => 'ServerIp',
        'span'           => 'Span',
        'spanId'         => 'SpanId',
        'tagMap'         => 'TagMap',
        'traceId'        => 'TraceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->additionalInfo) {
            $res['AdditionalInfo'] = $this->additionalInfo;
        }
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->appType) {
            $res['AppType'] = $this->appType;
        }
        if (null !== $this->children) {
            $res['Children'] = [];
            if (null !== $this->children && \is_array($this->children)) {
                $n = 0;
                foreach ($this->children as $item) {
                    $res['Children'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->haveSpan) {
            $res['HaveSpan'] = $this->haveSpan;
        }
        if (null !== $this->logMap) {
            $res['LogMap'] = $this->logMap;
        }
        if (null !== $this->logTime) {
            $res['LogTime'] = $this->logTime;
        }
        if (null !== $this->parentSpanId) {
            $res['ParentSpanId'] = $this->parentSpanId;
        }
        if (null !== $this->pid) {
            $res['Pid'] = $this->pid;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resultCode) {
            $res['ResultCode'] = $this->resultCode;
        }
        if (null !== $this->rpc) {
            $res['Rpc'] = $this->rpc;
        }
        if (null !== $this->rpcId) {
            $res['RpcId'] = $this->rpcId;
        }
        if (null !== $this->rpcType) {
            $res['RpcType'] = $this->rpcType;
        }
        if (null !== $this->serverIp) {
            $res['ServerIp'] = $this->serverIp;
        }
        if (null !== $this->span) {
            $res['Span'] = $this->span;
        }
        if (null !== $this->spanId) {
            $res['SpanId'] = $this->spanId;
        }
        if (null !== $this->tagMap) {
            $res['TagMap'] = $this->tagMap;
        }
        if (null !== $this->traceId) {
            $res['TraceId'] = $this->traceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CallChainInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AdditionalInfo'])) {
            $model->additionalInfo = $map['AdditionalInfo'];
        }
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['AppType'])) {
            $model->appType = $map['AppType'];
        }
        if (isset($map['Children'])) {
            if (!empty($map['Children'])) {
                $model->children = [];
                $n               = 0;
                foreach ($map['Children'] as $item) {
                    $model->children[$n++] = null !== $item ? self::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['HaveSpan'])) {
            $model->haveSpan = $map['HaveSpan'];
        }
        if (isset($map['LogMap'])) {
            $model->logMap = $map['LogMap'];
        }
        if (isset($map['LogTime'])) {
            $model->logTime = $map['LogTime'];
        }
        if (isset($map['ParentSpanId'])) {
            $model->parentSpanId = $map['ParentSpanId'];
        }
        if (isset($map['Pid'])) {
            $model->pid = $map['Pid'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResultCode'])) {
            $model->resultCode = $map['ResultCode'];
        }
        if (isset($map['Rpc'])) {
            $model->rpc = $map['Rpc'];
        }
        if (isset($map['RpcId'])) {
            $model->rpcId = $map['RpcId'];
        }
        if (isset($map['RpcType'])) {
            $model->rpcType = $map['RpcType'];
        }
        if (isset($map['ServerIp'])) {
            $model->serverIp = $map['ServerIp'];
        }
        if (isset($map['Span'])) {
            $model->span = $map['Span'];
        }
        if (isset($map['SpanId'])) {
            $model->spanId = $map['SpanId'];
        }
        if (isset($map['TagMap'])) {
            $model->tagMap = $map['TagMap'];
        }
        if (isset($map['TraceId'])) {
            $model->traceId = $map['TraceId'];
        }

        return $model;
    }
}
