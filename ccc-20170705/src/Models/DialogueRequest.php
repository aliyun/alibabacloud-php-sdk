<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models;

use AlibabaCloud\Tea\Model;

class DialogueRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $callId;

    /**
     * @var string
     */
    public $callType;

    /**
     * @var string
     */
    public $scenarioId;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var string
     */
    public $utterance;

    /**
     * @var string
     */
    public $actionKey;

    /**
     * @var string
     */
    public $actionParams;

    /**
     * @var string
     */
    public $callingNumber;

    /**
     * @var string
     */
    public $calledNumber;

    /**
     * @var int
     */
    public $instanceOwnerId;
    protected $_name = [
        'instanceId'      => 'InstanceId',
        'callId'          => 'CallId',
        'callType'        => 'CallType',
        'scenarioId'      => 'ScenarioId',
        'taskId'          => 'TaskId',
        'utterance'       => 'Utterance',
        'actionKey'       => 'ActionKey',
        'actionParams'    => 'ActionParams',
        'callingNumber'   => 'CallingNumber',
        'calledNumber'    => 'CalledNumber',
        'instanceOwnerId' => 'InstanceOwnerId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->callId) {
            $res['CallId'] = $this->callId;
        }
        if (null !== $this->callType) {
            $res['CallType'] = $this->callType;
        }
        if (null !== $this->scenarioId) {
            $res['ScenarioId'] = $this->scenarioId;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->utterance) {
            $res['Utterance'] = $this->utterance;
        }
        if (null !== $this->actionKey) {
            $res['ActionKey'] = $this->actionKey;
        }
        if (null !== $this->actionParams) {
            $res['ActionParams'] = $this->actionParams;
        }
        if (null !== $this->callingNumber) {
            $res['CallingNumber'] = $this->callingNumber;
        }
        if (null !== $this->calledNumber) {
            $res['CalledNumber'] = $this->calledNumber;
        }
        if (null !== $this->instanceOwnerId) {
            $res['InstanceOwnerId'] = $this->instanceOwnerId;
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
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['CallId'])) {
            $model->callId = $map['CallId'];
        }
        if (isset($map['CallType'])) {
            $model->callType = $map['CallType'];
        }
        if (isset($map['ScenarioId'])) {
            $model->scenarioId = $map['ScenarioId'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['Utterance'])) {
            $model->utterance = $map['Utterance'];
        }
        if (isset($map['ActionKey'])) {
            $model->actionKey = $map['ActionKey'];
        }
        if (isset($map['ActionParams'])) {
            $model->actionParams = $map['ActionParams'];
        }
        if (isset($map['CallingNumber'])) {
            $model->callingNumber = $map['CallingNumber'];
        }
        if (isset($map['CalledNumber'])) {
            $model->calledNumber = $map['CalledNumber'];
        }
        if (isset($map['InstanceOwnerId'])) {
            $model->instanceOwnerId = $map['InstanceOwnerId'];
        }

        return $model;
    }
}
