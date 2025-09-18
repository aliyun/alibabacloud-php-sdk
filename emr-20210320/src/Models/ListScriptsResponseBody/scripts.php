<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models\ListScriptsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Emr\V20210320\Models\NodeSelector;

class scripts extends Model
{
    /**
     * @var string
     */
    public $action;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var string
     */
    public $executionFailStrategy;

    /**
     * @var string
     */
    public $executionMoment;

    /**
     * @var string
     */
    public $executionState;

    /**
     * @var int
     */
    public $lastUpdateTime;

    /**
     * @var NodeSelector
     */
    public $nodeSelector;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $scriptArgs;

    /**
     * @var string
     */
    public $scriptId;

    /**
     * @var string
     */
    public $scriptName;

    /**
     * @var string
     */
    public $scriptPath;

    /**
     * @var int
     */
    public $startTime;
    protected $_name = [
        'action' => 'Action',
        'endTime' => 'EndTime',
        'executionFailStrategy' => 'ExecutionFailStrategy',
        'executionMoment' => 'ExecutionMoment',
        'executionState' => 'ExecutionState',
        'lastUpdateTime' => 'LastUpdateTime',
        'nodeSelector' => 'NodeSelector',
        'regionId' => 'RegionId',
        'scriptArgs' => 'ScriptArgs',
        'scriptId' => 'ScriptId',
        'scriptName' => 'ScriptName',
        'scriptPath' => 'ScriptPath',
        'startTime' => 'StartTime',
    ];

    public function validate()
    {
        if (null !== $this->nodeSelector) {
            $this->nodeSelector->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->action) {
            $res['Action'] = $this->action;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->executionFailStrategy) {
            $res['ExecutionFailStrategy'] = $this->executionFailStrategy;
        }

        if (null !== $this->executionMoment) {
            $res['ExecutionMoment'] = $this->executionMoment;
        }

        if (null !== $this->executionState) {
            $res['ExecutionState'] = $this->executionState;
        }

        if (null !== $this->lastUpdateTime) {
            $res['LastUpdateTime'] = $this->lastUpdateTime;
        }

        if (null !== $this->nodeSelector) {
            $res['NodeSelector'] = null !== $this->nodeSelector ? $this->nodeSelector->toArray($noStream) : $this->nodeSelector;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->scriptArgs) {
            $res['ScriptArgs'] = $this->scriptArgs;
        }

        if (null !== $this->scriptId) {
            $res['ScriptId'] = $this->scriptId;
        }

        if (null !== $this->scriptName) {
            $res['ScriptName'] = $this->scriptName;
        }

        if (null !== $this->scriptPath) {
            $res['ScriptPath'] = $this->scriptPath;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
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
        if (isset($map['Action'])) {
            $model->action = $map['Action'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['ExecutionFailStrategy'])) {
            $model->executionFailStrategy = $map['ExecutionFailStrategy'];
        }

        if (isset($map['ExecutionMoment'])) {
            $model->executionMoment = $map['ExecutionMoment'];
        }

        if (isset($map['ExecutionState'])) {
            $model->executionState = $map['ExecutionState'];
        }

        if (isset($map['LastUpdateTime'])) {
            $model->lastUpdateTime = $map['LastUpdateTime'];
        }

        if (isset($map['NodeSelector'])) {
            $model->nodeSelector = NodeSelector::fromMap($map['NodeSelector']);
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ScriptArgs'])) {
            $model->scriptArgs = $map['ScriptArgs'];
        }

        if (isset($map['ScriptId'])) {
            $model->scriptId = $map['ScriptId'];
        }

        if (isset($map['ScriptName'])) {
            $model->scriptName = $map['ScriptName'];
        }

        if (isset($map['ScriptPath'])) {
            $model->scriptPath = $map['ScriptPath'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
