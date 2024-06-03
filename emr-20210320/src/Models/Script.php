<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models;

use AlibabaCloud\Tea\Model;

class Script extends Model
{
    /**
     * @description 执行失败策略。
     *
     * @example FAILED_CONTINUE
     *
     * @var string
     */
    public $executionFailStrategy;

    /**
     * @description 脚本的执行时机。
     *
     * @example BEFORE_INSTALL
     *
     * @var string
     */
    public $executionMoment;

    /**
     * @description 节点选择器。
     *
     * This parameter is required.
     * @var NodeSelector
     */
    public $nodeSelector;

    /**
     * @description 脚本执行优先级。取值范围：1~100。
     *
     * @example 1
     *
     * @deprecated
     *
     * @var int
     */
    public $priority;

    /**
     * @description 脚本执行参数。
     *
     * @example -host 10.0.10.5 -m 30
     *
     * @var string
     */
    public $scriptArgs;

    /**
     * @description 脚本名称。长度为1~64个字符，必须以大小字母或中文开头，不能以http://和https://开头。可以包含中文、英文、数字、下划线（_）、或者短划线（-）
     *
     * This parameter is required.
     * @example 脚本名-1
     *
     * @var string
     */
    public $scriptName;

    /**
     * @description 脚本所在OSS路径。
     *
     * This parameter is required.
     * @example oss://bucket1/update_hosts.sh
     *
     * @var string
     */
    public $scriptPath;
    protected $_name = [
        'executionFailStrategy' => 'ExecutionFailStrategy',
        'executionMoment'       => 'ExecutionMoment',
        'nodeSelector'          => 'NodeSelector',
        'priority'              => 'Priority',
        'scriptArgs'            => 'ScriptArgs',
        'scriptName'            => 'ScriptName',
        'scriptPath'            => 'ScriptPath',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->executionFailStrategy) {
            $res['ExecutionFailStrategy'] = $this->executionFailStrategy;
        }
        if (null !== $this->executionMoment) {
            $res['ExecutionMoment'] = $this->executionMoment;
        }
        if (null !== $this->nodeSelector) {
            $res['NodeSelector'] = null !== $this->nodeSelector ? $this->nodeSelector->toMap() : null;
        }
        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }
        if (null !== $this->scriptArgs) {
            $res['ScriptArgs'] = $this->scriptArgs;
        }
        if (null !== $this->scriptName) {
            $res['ScriptName'] = $this->scriptName;
        }
        if (null !== $this->scriptPath) {
            $res['ScriptPath'] = $this->scriptPath;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return Script
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExecutionFailStrategy'])) {
            $model->executionFailStrategy = $map['ExecutionFailStrategy'];
        }
        if (isset($map['ExecutionMoment'])) {
            $model->executionMoment = $map['ExecutionMoment'];
        }
        if (isset($map['NodeSelector'])) {
            $model->nodeSelector = NodeSelector::fromMap($map['NodeSelector']);
        }
        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }
        if (isset($map['ScriptArgs'])) {
            $model->scriptArgs = $map['ScriptArgs'];
        }
        if (isset($map['ScriptName'])) {
            $model->scriptName = $map['ScriptName'];
        }
        if (isset($map['ScriptPath'])) {
            $model->scriptPath = $map['ScriptPath'];
        }

        return $model;
    }
}
