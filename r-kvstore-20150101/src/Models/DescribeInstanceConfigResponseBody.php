<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models;

use AlibabaCloud\Dara\Model;

class DescribeInstanceConfigResponseBody extends Model
{
    /**
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

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
