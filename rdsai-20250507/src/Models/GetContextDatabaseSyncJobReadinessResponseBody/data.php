<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RdsAi\V20250507\Models\GetContextDatabaseSyncJobReadinessResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\GetContextDatabaseSyncJobReadinessResponseBody\data\checks;

class data extends Model
{
    /**
     * @var string
     */
    public $autoPauseReason;

    /**
     * @var checks
     */
    public $checks;

    /**
     * @var bool
     */
    public $ready;

    /**
     * @var bool
     */
    public $readyForManualRun;

    /**
     * @var bool
     */
    public $readyForScheduledRun;
    protected $_name = [
        'autoPauseReason' => 'AutoPauseReason',
        'checks' => 'Checks',
        'ready' => 'Ready',
        'readyForManualRun' => 'ReadyForManualRun',
        'readyForScheduledRun' => 'ReadyForScheduledRun',
    ];

    public function validate()
    {
        if (null !== $this->checks) {
            $this->checks->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoPauseReason) {
            $res['AutoPauseReason'] = $this->autoPauseReason;
        }

        if (null !== $this->checks) {
            $res['Checks'] = null !== $this->checks ? $this->checks->toArray($noStream) : $this->checks;
        }

        if (null !== $this->ready) {
            $res['Ready'] = $this->ready;
        }

        if (null !== $this->readyForManualRun) {
            $res['ReadyForManualRun'] = $this->readyForManualRun;
        }

        if (null !== $this->readyForScheduledRun) {
            $res['ReadyForScheduledRun'] = $this->readyForScheduledRun;
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
        if (isset($map['AutoPauseReason'])) {
            $model->autoPauseReason = $map['AutoPauseReason'];
        }

        if (isset($map['Checks'])) {
            $model->checks = checks::fromMap($map['Checks']);
        }

        if (isset($map['Ready'])) {
            $model->ready = $map['Ready'];
        }

        if (isset($map['ReadyForManualRun'])) {
            $model->readyForManualRun = $map['ReadyForManualRun'];
        }

        if (isset($map['ReadyForScheduledRun'])) {
            $model->readyForScheduledRun = $map['ReadyForScheduledRun'];
        }

        return $model;
    }
}
