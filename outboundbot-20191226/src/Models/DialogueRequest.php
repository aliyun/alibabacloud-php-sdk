<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models;

use AlibabaCloud\Tea\Model;

class DialogueRequest extends Model
{
    /**
     * @example broadcast
     *
     * @var string
     */
    public $actionKey;

    /**
     * @var string
     */
    public $actionParams;

    /**
     * @description This parameter is required.
     *
     * @example 1528189846043
     *
     * @var string
     */
    public $callId;

    /**
     * @description This parameter is required.
     *
     * @example Outbound
     *
     * @var string
     */
    public $callType;

    /**
     * @description This parameter is required.
     *
     * @example 135****4353
     *
     * @var string
     */
    public $calledNumber;

    /**
     * @description This parameter is required.
     *
     * @example 1***6
     *
     * @var string
     */
    public $callingNumber;

    /**
     * @description This parameter is required.
     *
     * @example af81a389-91f0-4157-8d82-720edd02b66a
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example 6cea9bed-63e6-439e-ae4c-b3333efff53d
     *
     * @var string
     */
    public $scenarioId;

    /**
     * @description 场景id
     *
     * @example c5c5d8c0-c0f1-48a7-be2b-dc46006d888a
     *
     * @var string
     */
    public $scriptId;

    /**
     * @example ff44709e-39a6-43ba-959b-20fcabe3e496
     *
     * @var string
     */
    public $taskId;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $utterance;
    protected $_name = [
        'actionKey' => 'ActionKey',
        'actionParams' => 'ActionParams',
        'callId' => 'CallId',
        'callType' => 'CallType',
        'calledNumber' => 'CalledNumber',
        'callingNumber' => 'CallingNumber',
        'instanceId' => 'InstanceId',
        'scenarioId' => 'ScenarioId',
        'scriptId' => 'ScriptId',
        'taskId' => 'TaskId',
        'utterance' => 'Utterance',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->actionKey) {
            $res['ActionKey'] = $this->actionKey;
        }
        if (null !== $this->actionParams) {
            $res['ActionParams'] = $this->actionParams;
        }
        if (null !== $this->callId) {
            $res['CallId'] = $this->callId;
        }
        if (null !== $this->callType) {
            $res['CallType'] = $this->callType;
        }
        if (null !== $this->calledNumber) {
            $res['CalledNumber'] = $this->calledNumber;
        }
        if (null !== $this->callingNumber) {
            $res['CallingNumber'] = $this->callingNumber;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->scenarioId) {
            $res['ScenarioId'] = $this->scenarioId;
        }
        if (null !== $this->scriptId) {
            $res['ScriptId'] = $this->scriptId;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->utterance) {
            $res['Utterance'] = $this->utterance;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DialogueRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActionKey'])) {
            $model->actionKey = $map['ActionKey'];
        }
        if (isset($map['ActionParams'])) {
            $model->actionParams = $map['ActionParams'];
        }
        if (isset($map['CallId'])) {
            $model->callId = $map['CallId'];
        }
        if (isset($map['CallType'])) {
            $model->callType = $map['CallType'];
        }
        if (isset($map['CalledNumber'])) {
            $model->calledNumber = $map['CalledNumber'];
        }
        if (isset($map['CallingNumber'])) {
            $model->callingNumber = $map['CallingNumber'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['ScenarioId'])) {
            $model->scenarioId = $map['ScenarioId'];
        }
        if (isset($map['ScriptId'])) {
            $model->scriptId = $map['ScriptId'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['Utterance'])) {
            $model->utterance = $map['Utterance'];
        }

        return $model;
    }
}
