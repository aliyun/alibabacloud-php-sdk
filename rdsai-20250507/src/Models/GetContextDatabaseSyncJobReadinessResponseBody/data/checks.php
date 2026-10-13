<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RdsAi\V20250507\Models\GetContextDatabaseSyncJobReadinessResponseBody\data;

use AlibabaCloud\Dara\Model;

class checks extends Model
{
    /**
     * @var bool
     */
    public $connectionReady;

    /**
     * @var bool
     */
    public $jobEnabled;

    /**
     * @var bool
     */
    public $scheduleConfigured;

    /**
     * @var bool
     */
    public $scheduleNotAutoPaused;

    /**
     * @var bool
     */
    public $selectionConfirmed;

    /**
     * @var bool
     */
    public $targetReady;
    protected $_name = [
        'connectionReady' => 'ConnectionReady',
        'jobEnabled' => 'JobEnabled',
        'scheduleConfigured' => 'ScheduleConfigured',
        'scheduleNotAutoPaused' => 'ScheduleNotAutoPaused',
        'selectionConfirmed' => 'SelectionConfirmed',
        'targetReady' => 'TargetReady',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->connectionReady) {
            $res['ConnectionReady'] = $this->connectionReady;
        }

        if (null !== $this->jobEnabled) {
            $res['JobEnabled'] = $this->jobEnabled;
        }

        if (null !== $this->scheduleConfigured) {
            $res['ScheduleConfigured'] = $this->scheduleConfigured;
        }

        if (null !== $this->scheduleNotAutoPaused) {
            $res['ScheduleNotAutoPaused'] = $this->scheduleNotAutoPaused;
        }

        if (null !== $this->selectionConfirmed) {
            $res['SelectionConfirmed'] = $this->selectionConfirmed;
        }

        if (null !== $this->targetReady) {
            $res['TargetReady'] = $this->targetReady;
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
        if (isset($map['ConnectionReady'])) {
            $model->connectionReady = $map['ConnectionReady'];
        }

        if (isset($map['JobEnabled'])) {
            $model->jobEnabled = $map['JobEnabled'];
        }

        if (isset($map['ScheduleConfigured'])) {
            $model->scheduleConfigured = $map['ScheduleConfigured'];
        }

        if (isset($map['ScheduleNotAutoPaused'])) {
            $model->scheduleNotAutoPaused = $map['ScheduleNotAutoPaused'];
        }

        if (isset($map['SelectionConfirmed'])) {
            $model->selectionConfirmed = $map['SelectionConfirmed'];
        }

        if (isset($map['TargetReady'])) {
            $model->targetReady = $map['TargetReady'];
        }

        return $model;
    }
}
