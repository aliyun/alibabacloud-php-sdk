<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models;

use AlibabaCloud\Tea\Model;

class DescribeInstanceConfigResponseBody extends Model
{
    /**
     * @description The parameter settings of the instance. For more information, see [Parameter overview and configuration guide](https://help.aliyun.com/document_detail/43885.html).
     *
     * @example {\\"EvictionPolicy\\":\\"volatile-lru\\",\\"hash-max-ziplist-entries\\":512,\\"zset-max-ziplist-entries\\":128,\\"list-max-ziplist-entries\\":512,\\"list-max-ziplist-value\\":64,\\"zset-max-ziplist-value\\":64,\\"set-max-intset-entries\\":512,\\"hash-max-ziplist-value\\":64}
     *
     * @var string
     */
    public $config;

    /**
     * @var string
     */
    public $paramNoLooseSentinelEnabled;

    /**
     * @var string
     */
    public $paramNoLooseSentinelPasswordFreeAccess;

    /**
     * @var string
     */
    public $paramNoLooseSentinelPasswordFreeCommands;

    /**
     * @var string
     */
    public $paramReplMode;

    /**
     * @var string
     */
    public $paramReplTimeout;

    /**
     * @var string
     */
    public $paramSentinelCompatEnable;

    /**
     * @description The request ID.
     *
     * @example 4E2C08F6-2D11-4ECD-9A4C-27EF2D3D****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'config'                                   => 'Config',
        'paramNoLooseSentinelEnabled'              => 'ParamNoLooseSentinelEnabled',
        'paramNoLooseSentinelPasswordFreeAccess'   => 'ParamNoLooseSentinelPasswordFreeAccess',
        'paramNoLooseSentinelPasswordFreeCommands' => 'ParamNoLooseSentinelPasswordFreeCommands',
        'paramReplMode'                            => 'ParamReplMode',
        'paramReplTimeout'                         => 'ParamReplTimeout',
        'paramSentinelCompatEnable'                => 'ParamSentinelCompatEnable',
        'requestId'                                => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->config) {
            $res['Config'] = $this->config;
        }
        if (null !== $this->paramNoLooseSentinelEnabled) {
            $res['ParamNoLooseSentinelEnabled'] = $this->paramNoLooseSentinelEnabled;
        }
        if (null !== $this->paramNoLooseSentinelPasswordFreeAccess) {
            $res['ParamNoLooseSentinelPasswordFreeAccess'] = $this->paramNoLooseSentinelPasswordFreeAccess;
        }
        if (null !== $this->paramNoLooseSentinelPasswordFreeCommands) {
            $res['ParamNoLooseSentinelPasswordFreeCommands'] = $this->paramNoLooseSentinelPasswordFreeCommands;
        }
        if (null !== $this->paramReplMode) {
            $res['ParamReplMode'] = $this->paramReplMode;
        }
        if (null !== $this->paramReplTimeout) {
            $res['ParamReplTimeout'] = $this->paramReplTimeout;
        }
        if (null !== $this->paramSentinelCompatEnable) {
            $res['ParamSentinelCompatEnable'] = $this->paramSentinelCompatEnable;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeInstanceConfigResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Config'])) {
            $model->config = $map['Config'];
        }
        if (isset($map['ParamNoLooseSentinelEnabled'])) {
            $model->paramNoLooseSentinelEnabled = $map['ParamNoLooseSentinelEnabled'];
        }
        if (isset($map['ParamNoLooseSentinelPasswordFreeAccess'])) {
            $model->paramNoLooseSentinelPasswordFreeAccess = $map['ParamNoLooseSentinelPasswordFreeAccess'];
        }
        if (isset($map['ParamNoLooseSentinelPasswordFreeCommands'])) {
            $model->paramNoLooseSentinelPasswordFreeCommands = $map['ParamNoLooseSentinelPasswordFreeCommands'];
        }
        if (isset($map['ParamReplMode'])) {
            $model->paramReplMode = $map['ParamReplMode'];
        }
        if (isset($map['ParamReplTimeout'])) {
            $model->paramReplTimeout = $map['ParamReplTimeout'];
        }
        if (isset($map['ParamSentinelCompatEnable'])) {
            $model->paramSentinelCompatEnable = $map['ParamSentinelCompatEnable'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
