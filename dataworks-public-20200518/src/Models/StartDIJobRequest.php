<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\StartDIJobRequest\realtimeStartSettings;
use AlibabaCloud\Tea\Model;

class StartDIJobRequest extends Model
{
    /**
     * @description The task ID.
     *
     * This parameter is required.
     * @example 11743
     *
     * @var int
     */
    public $DIJobId;

    /**
     * @description Specifies whether to forcefully rerun all synchronization steps. If you do not configure this parameter, the system does not forcefully rerun the task.
     *
     * @example true
     *
     * @var bool
     */
    public $forceToRerun;

    /**
     * @description The settings for the start.
     *
     * @var realtimeStartSettings
     */
    public $realtimeStartSettings;
    protected $_name = [
        'DIJobId'               => 'DIJobId',
        'forceToRerun'          => 'ForceToRerun',
        'realtimeStartSettings' => 'RealtimeStartSettings',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DIJobId) {
            $res['DIJobId'] = $this->DIJobId;
        }
        if (null !== $this->forceToRerun) {
            $res['ForceToRerun'] = $this->forceToRerun;
        }
        if (null !== $this->realtimeStartSettings) {
            $res['RealtimeStartSettings'] = null !== $this->realtimeStartSettings ? $this->realtimeStartSettings->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return StartDIJobRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DIJobId'])) {
            $model->DIJobId = $map['DIJobId'];
        }
        if (isset($map['ForceToRerun'])) {
            $model->forceToRerun = $map['ForceToRerun'];
        }
        if (isset($map['RealtimeStartSettings'])) {
            $model->realtimeStartSettings = realtimeStartSettings::fromMap($map['RealtimeStartSettings']);
        }

        return $model;
    }
}
