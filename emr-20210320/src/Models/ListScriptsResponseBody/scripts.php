<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models\ListScriptsResponseBody;

use AlibabaCloud\SDK\Emr\V20210320\Models\NodeSelector;
use AlibabaCloud\Tea\Model;

class scripts extends Model
{
    /**
     * @description The name of the API operation.
     *
     * @example ListScripts
     *
     * @var string
     */
    public $action;

    /**
     * @description The time when the system finishes the running of the script. This parameter is returned only if the ScriptType parameter is set to NORMAL.
     *
     * @example 1639715635819
     *
     * @var int
     */
    public $endTime;

    /**
     * @description The policy that is used to handle execution failures of the script. Valid values:
     *
     *   FAILED_CONTINUE
     *   FAILED_BLOCK
     *
     * @example FAILED_CONTINUE
     *
     * @var string
     */
    public $executionFailStrategy;

    /**
     * @description The time based on which the system runs the script. Valid values:
     *
     *   BEFORE_INSTALL
     *   AFTER_STARTED
     *
     * @example BEFORE_INSTALL
     *
     * @var string
     */
    public $executionMoment;

    /**
     * @description The status of the script. This parameter is returned only if the `ScriptType` parameter is set to `NORMAL`. Valid values:
     *
     *   SCRIPT_COMPLETED
     *   SCRIPT_SUBMISSION_FAILED
     *   SCRIPT_RUNNING
     *
     * @example SCRIPT_COMPLETED
     *
     * @var string
     */
    public $executionState;

    /**
     * @description The time when the script was last modified.
     *
     * @example 1639714634819
     *
     * @var int
     */
    public $lastUpdateTime;

    /**
     * @description The node selector.
     *
     * @var NodeSelector
     */
    public $nodeSelector;

    /**
     * @description The region ID.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The runtime parameters of the script.
     *
     * @example --mode=client -h -p
     *
     * @var string
     */
    public $scriptArgs;

    /**
     * @description The script ID.
     *
     * @example cs-bf25219d103043a0820613e32781****
     *
     * @var string
     */
    public $scriptId;

    /**
     * @description The name of the script.
     *
     * @example check_env
     *
     * @var string
     */
    public $scriptName;

    /**
     * @description The path in which the script is stored.
     *
     * @example oss://bucket1/check_evn.sh
     *
     * @var string
     */
    public $scriptPath;

    /**
     * @description The time when the system starts to run the script. This parameter is returned only if the ScriptType parameter is set to NORMAL.
     *
     * @example 1639714634000
     *
     * @var int
     */
    public $startTime;
    protected $_name = [
        'action'                => 'Action',
        'endTime'               => 'EndTime',
        'executionFailStrategy' => 'ExecutionFailStrategy',
        'executionMoment'       => 'ExecutionMoment',
        'executionState'        => 'ExecutionState',
        'lastUpdateTime'        => 'LastUpdateTime',
        'nodeSelector'          => 'NodeSelector',
        'regionId'              => 'RegionId',
        'scriptArgs'            => 'ScriptArgs',
        'scriptId'              => 'ScriptId',
        'scriptName'            => 'ScriptName',
        'scriptPath'            => 'ScriptPath',
        'startTime'             => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
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
            $res['NodeSelector'] = null !== $this->nodeSelector ? $this->nodeSelector->toMap() : null;
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

    /**
     * @param array $map
     *
     * @return scripts
     */
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
