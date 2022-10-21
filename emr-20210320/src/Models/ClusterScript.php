<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models;

use AlibabaCloud\Tea\Model;

class ClusterScript extends Model
{
    /**
     * @var string
     */
    public $executionFailStrategy;

    /**
     * @var string
     */
    public $executionMoment;

    /**
     * @var NodeSelector
     */
    public $nodeSelect;

    /**
     * @var int
     */
    public $priority;

    /**
     * @var string
     */
    public $scriptArgs;

    /**
     * @var string
     */
    public $scriptName;

    /**
     * @var string
     */
    public $scriptPath;
    protected $_name = [
        'executionFailStrategy' => 'ExecutionFailStrategy',
        'executionMoment'       => 'ExecutionMoment',
        'nodeSelect'            => 'NodeSelect',
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
        if (null !== $this->nodeSelect) {
            $res['NodeSelect'] = null !== $this->nodeSelect ? $this->nodeSelect->toMap() : null;
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
     * @return ClusterScript
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
        if (isset($map['NodeSelect'])) {
            $model->nodeSelect = NodeSelector::fromMap($map['NodeSelect']);
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
