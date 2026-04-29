<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Dara\Model;

class CreatePolarClawCronJobShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $agentId;

    /**
     * @var string
     */
    public $applicationId;

    /**
     * @var bool
     */
    public $deleteAfterRun;

    /**
     * @var string
     */
    public $deliveryShrink;

    /**
     * @var string
     */
    public $description;

    /**
     * @var bool
     */
    public $enabled;

    /**
     * @var string
     */
    public $failureAlertShrink;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $payloadShrink;

    /**
     * @var bool
     */
    public $restart;

    /**
     * @var bool
     */
    public $runImmediately;

    /**
     * @var string
     */
    public $scheduleShrink;

    /**
     * @var string
     */
    public $sessionKey;

    /**
     * @var string
     */
    public $sessionTarget;

    /**
     * @var string
     */
    public $wakeMode;
    protected $_name = [
        'agentId' => 'AgentId',
        'applicationId' => 'ApplicationId',
        'deleteAfterRun' => 'DeleteAfterRun',
        'deliveryShrink' => 'Delivery',
        'description' => 'Description',
        'enabled' => 'Enabled',
        'failureAlertShrink' => 'FailureAlert',
        'name' => 'Name',
        'payloadShrink' => 'Payload',
        'restart' => 'Restart',
        'runImmediately' => 'RunImmediately',
        'scheduleShrink' => 'Schedule',
        'sessionKey' => 'SessionKey',
        'sessionTarget' => 'SessionTarget',
        'wakeMode' => 'WakeMode',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentId) {
            $res['AgentId'] = $this->agentId;
        }

        if (null !== $this->applicationId) {
            $res['ApplicationId'] = $this->applicationId;
        }

        if (null !== $this->deleteAfterRun) {
            $res['DeleteAfterRun'] = $this->deleteAfterRun;
        }

        if (null !== $this->deliveryShrink) {
            $res['Delivery'] = $this->deliveryShrink;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->enabled) {
            $res['Enabled'] = $this->enabled;
        }

        if (null !== $this->failureAlertShrink) {
            $res['FailureAlert'] = $this->failureAlertShrink;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->payloadShrink) {
            $res['Payload'] = $this->payloadShrink;
        }

        if (null !== $this->restart) {
            $res['Restart'] = $this->restart;
        }

        if (null !== $this->runImmediately) {
            $res['RunImmediately'] = $this->runImmediately;
        }

        if (null !== $this->scheduleShrink) {
            $res['Schedule'] = $this->scheduleShrink;
        }

        if (null !== $this->sessionKey) {
            $res['SessionKey'] = $this->sessionKey;
        }

        if (null !== $this->sessionTarget) {
            $res['SessionTarget'] = $this->sessionTarget;
        }

        if (null !== $this->wakeMode) {
            $res['WakeMode'] = $this->wakeMode;
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
        if (isset($map['AgentId'])) {
            $model->agentId = $map['AgentId'];
        }

        if (isset($map['ApplicationId'])) {
            $model->applicationId = $map['ApplicationId'];
        }

        if (isset($map['DeleteAfterRun'])) {
            $model->deleteAfterRun = $map['DeleteAfterRun'];
        }

        if (isset($map['Delivery'])) {
            $model->deliveryShrink = $map['Delivery'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['Enabled'])) {
            $model->enabled = $map['Enabled'];
        }

        if (isset($map['FailureAlert'])) {
            $model->failureAlertShrink = $map['FailureAlert'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Payload'])) {
            $model->payloadShrink = $map['Payload'];
        }

        if (isset($map['Restart'])) {
            $model->restart = $map['Restart'];
        }

        if (isset($map['RunImmediately'])) {
            $model->runImmediately = $map['RunImmediately'];
        }

        if (isset($map['Schedule'])) {
            $model->scheduleShrink = $map['Schedule'];
        }

        if (isset($map['SessionKey'])) {
            $model->sessionKey = $map['SessionKey'];
        }

        if (isset($map['SessionTarget'])) {
            $model->sessionTarget = $map['SessionTarget'];
        }

        if (isset($map['WakeMode'])) {
            $model->wakeMode = $map['WakeMode'];
        }

        return $model;
    }
}
