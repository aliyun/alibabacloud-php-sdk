<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Polardb\V20170801\Models\CreatePolarClawCronJobRequest\delivery;
use AlibabaCloud\SDK\Polardb\V20170801\Models\CreatePolarClawCronJobRequest\failureAlert;
use AlibabaCloud\SDK\Polardb\V20170801\Models\CreatePolarClawCronJobRequest\payload;
use AlibabaCloud\SDK\Polardb\V20170801\Models\CreatePolarClawCronJobRequest\schedule;

class CreatePolarClawCronJobRequest extends Model
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
     * @var delivery
     */
    public $delivery;

    /**
     * @var string
     */
    public $description;

    /**
     * @var bool
     */
    public $enabled;

    /**
     * @var failureAlert
     */
    public $failureAlert;

    /**
     * @var string
     */
    public $name;

    /**
     * @var payload
     */
    public $payload;

    /**
     * @var bool
     */
    public $restart;

    /**
     * @var bool
     */
    public $runImmediately;

    /**
     * @var schedule
     */
    public $schedule;

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
        'delivery' => 'Delivery',
        'description' => 'Description',
        'enabled' => 'Enabled',
        'failureAlert' => 'FailureAlert',
        'name' => 'Name',
        'payload' => 'Payload',
        'restart' => 'Restart',
        'runImmediately' => 'RunImmediately',
        'schedule' => 'Schedule',
        'sessionKey' => 'SessionKey',
        'sessionTarget' => 'SessionTarget',
        'wakeMode' => 'WakeMode',
    ];

    public function validate()
    {
        if (null !== $this->delivery) {
            $this->delivery->validate();
        }
        if (null !== $this->failureAlert) {
            $this->failureAlert->validate();
        }
        if (null !== $this->payload) {
            $this->payload->validate();
        }
        if (null !== $this->schedule) {
            $this->schedule->validate();
        }
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

        if (null !== $this->delivery) {
            $res['Delivery'] = null !== $this->delivery ? $this->delivery->toArray($noStream) : $this->delivery;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->enabled) {
            $res['Enabled'] = $this->enabled;
        }

        if (null !== $this->failureAlert) {
            $res['FailureAlert'] = null !== $this->failureAlert ? $this->failureAlert->toArray($noStream) : $this->failureAlert;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->payload) {
            $res['Payload'] = null !== $this->payload ? $this->payload->toArray($noStream) : $this->payload;
        }

        if (null !== $this->restart) {
            $res['Restart'] = $this->restart;
        }

        if (null !== $this->runImmediately) {
            $res['RunImmediately'] = $this->runImmediately;
        }

        if (null !== $this->schedule) {
            $res['Schedule'] = null !== $this->schedule ? $this->schedule->toArray($noStream) : $this->schedule;
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
            $model->delivery = delivery::fromMap($map['Delivery']);
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['Enabled'])) {
            $model->enabled = $map['Enabled'];
        }

        if (isset($map['FailureAlert'])) {
            $model->failureAlert = failureAlert::fromMap($map['FailureAlert']);
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Payload'])) {
            $model->payload = payload::fromMap($map['Payload']);
        }

        if (isset($map['Restart'])) {
            $model->restart = $map['Restart'];
        }

        if (isset($map['RunImmediately'])) {
            $model->runImmediately = $map['RunImmediately'];
        }

        if (isset($map['Schedule'])) {
            $model->schedule = schedule::fromMap($map['Schedule']);
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
