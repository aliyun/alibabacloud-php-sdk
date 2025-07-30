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
     * @description The Sentinel-compatible mode, which is applicable to non-cluster instances. For more information about the parameter, see the relevant documentation.
     *
     * @example ****
     *
     * @var string
     */
    public $paramNoLooseSentinelEnabled;

    /**
     * @description Indicates whether Sentinel commands can be run without requiring a password when the Sentinel mode is enabled. Valid values: Valid values: yes and no. Default value: no. After you set this parameter to yes, you can run Sentinel commands in a virtual private cloud (VPC) without the need to enable the password-free access feature.
     *
     * @example no
     *
     * @var string
     */
    public $paramNoLooseSentinelPasswordFreeAccess;

    /**
     * @description After you enable the Sentinel mode and set the ParamNoLooseSentinelPasswordFreeAccess parameter to yes, you can use this parameter to specify an additional list of commands that can be run without requiring a password. By default, this parameter is empty. After you configure this parameter, you can run the specified commands without a password on any connection. Proceed with caution. The commands must be written in lowercase letters. Multiple commands are separated by commas (,).
     *
     * @example ****
     *
     * @var string
     */
    public $paramNoLooseSentinelPasswordFreeCommands;

    /**
     * @description The synchronization mode.
     *
     *   **semisync**
     *   **async**
     *
     * @example async
     *
     * @var string
     */
    public $paramReplMode;

    /**
     * @description The degradation threshold time of the semi-synchronous replication mode. This parameter is required only when semi-synchronous replication is enabled. Unit: milliseconds. Valid values: 10 to 60000.
     *
     * @example ****
     *
     * @var string
     */
    public $paramReplTimeout;

    /**
     * @description The Sentinel-compatible mode, which is applicable to cluster instances in proxy mode or read/write splitting instances. For more information about the parameter, see the relevant documentation.
     *
     * @example 1
     *
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
        'config' => 'Config',
        'paramNoLooseSentinelEnabled' => 'ParamNoLooseSentinelEnabled',
        'paramNoLooseSentinelPasswordFreeAccess' => 'ParamNoLooseSentinelPasswordFreeAccess',
        'paramNoLooseSentinelPasswordFreeCommands' => 'ParamNoLooseSentinelPasswordFreeCommands',
        'paramReplMode' => 'ParamReplMode',
        'paramReplTimeout' => 'ParamReplTimeout',
        'paramSentinelCompatEnable' => 'ParamSentinelCompatEnable',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

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
