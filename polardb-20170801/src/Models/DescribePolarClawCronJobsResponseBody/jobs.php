<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribePolarClawCronJobsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribePolarClawCronJobsResponseBody\jobs\delivery;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribePolarClawCronJobsResponseBody\jobs\payload;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribePolarClawCronJobsResponseBody\jobs\runs;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribePolarClawCronJobsResponseBody\jobs\schedule;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribePolarClawCronJobsResponseBody\jobs\state;

class jobs extends Model
{
    /**
     * @var string
     */
    public $agentId;

    /**
     * @var int
     */
    public $createdAtMs;

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
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * @var payload
     */
    public $payload;

    /**
     * @var runs[]
     */
    public $runs;

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
     * @var state
     */
    public $state;

    /**
     * @var int
     */
    public $updatedAtMs;

    /**
     * @var string
     */
    public $wakeMode;
    protected $_name = [
        'agentId' => 'AgentId',
        'createdAtMs' => 'CreatedAtMs',
        'deleteAfterRun' => 'DeleteAfterRun',
        'delivery' => 'Delivery',
        'description' => 'Description',
        'enabled' => 'Enabled',
        'id' => 'Id',
        'name' => 'Name',
        'payload' => 'Payload',
        'runs' => 'Runs',
        'schedule' => 'Schedule',
        'sessionKey' => 'SessionKey',
        'sessionTarget' => 'SessionTarget',
        'state' => 'State',
        'updatedAtMs' => 'UpdatedAtMs',
        'wakeMode' => 'WakeMode',
    ];

    public function validate()
    {
        if (null !== $this->delivery) {
            $this->delivery->validate();
        }
        if (null !== $this->payload) {
            $this->payload->validate();
        }
        if (\is_array($this->runs)) {
            Model::validateArray($this->runs);
        }
        if (null !== $this->schedule) {
            $this->schedule->validate();
        }
        if (null !== $this->state) {
            $this->state->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentId) {
            $res['AgentId'] = $this->agentId;
        }

        if (null !== $this->createdAtMs) {
            $res['CreatedAtMs'] = $this->createdAtMs;
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

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->payload) {
            $res['Payload'] = null !== $this->payload ? $this->payload->toArray($noStream) : $this->payload;
        }

        if (null !== $this->runs) {
            if (\is_array($this->runs)) {
                $res['Runs'] = [];
                $n1 = 0;
                foreach ($this->runs as $item1) {
                    $res['Runs'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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

        if (null !== $this->state) {
            $res['State'] = null !== $this->state ? $this->state->toArray($noStream) : $this->state;
        }

        if (null !== $this->updatedAtMs) {
            $res['UpdatedAtMs'] = $this->updatedAtMs;
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

        if (isset($map['CreatedAtMs'])) {
            $model->createdAtMs = $map['CreatedAtMs'];
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

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Payload'])) {
            $model->payload = payload::fromMap($map['Payload']);
        }

        if (isset($map['Runs'])) {
            if (!empty($map['Runs'])) {
                $model->runs = [];
                $n1 = 0;
                foreach ($map['Runs'] as $item1) {
                    $model->runs[$n1] = runs::fromMap($item1);
                    ++$n1;
                }
            }
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

        if (isset($map['State'])) {
            $model->state = state::fromMap($map['State']);
        }

        if (isset($map['UpdatedAtMs'])) {
            $model->updatedAtMs = $map['UpdatedAtMs'];
        }

        if (isset($map['WakeMode'])) {
            $model->wakeMode = $map['WakeMode'];
        }

        return $model;
    }
}
