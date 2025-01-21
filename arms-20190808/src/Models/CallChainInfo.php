<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Dara\Model;

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
     * @var CallChainInfo[]
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
        if (\is_array($this->children)) {
            Model::validateArray($this->children);
        }
        if (\is_array($this->logMap)) {
            Model::validateArray($this->logMap);
        }
        if (\is_array($this->tagMap)) {
            Model::validateArray($this->tagMap);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->children)) {
                $res['Children'] = [];
                $n1              = 0;
                foreach ($this->children as $item1) {
                    $res['Children'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->haveSpan) {
            $res['HaveSpan'] = $this->haveSpan;
        }

        if (null !== $this->logMap) {
            if (\is_array($this->logMap)) {
                $res['LogMap'] = [];
                foreach ($this->logMap as $key1 => $value1) {
                    $res['LogMap'][$key1] = $value1;
                }
            }
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
            if (\is_array($this->tagMap)) {
                $res['TagMap'] = [];
                foreach ($this->tagMap as $key1 => $value1) {
                    $res['TagMap'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->traceId) {
            $res['TraceId'] = $this->traceId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $n1              = 0;
                foreach ($map['Children'] as $item1) {
                    $model->children[$n1++] = self::fromMap($item1);
                }
            }
        }

        if (isset($map['HaveSpan'])) {
            $model->haveSpan = $map['HaveSpan'];
        }

        if (isset($map['LogMap'])) {
            if (!empty($map['LogMap'])) {
                $model->logMap = [];
                foreach ($map['LogMap'] as $key1 => $value1) {
                    $model->logMap[$key1] = $value1;
                }
            }
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
            if (!empty($map['TagMap'])) {
                $model->tagMap = [];
                foreach ($map['TagMap'] as $key1 => $value1) {
                    $model->tagMap[$key1] = $value1;
                }
            }
        }

        if (isset($map['TraceId'])) {
            $model->traceId = $map['TraceId'];
        }

        return $model;
    }
}
