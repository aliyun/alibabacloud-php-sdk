<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\UpdateDIJobRequest;

use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\UpdateDIJobRequest\resourceSettings\offlineResourceSettings;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\UpdateDIJobRequest\resourceSettings\realtimeResourceSettings;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\UpdateDIJobRequest\resourceSettings\scheduleResourceSettings;
use AlibabaCloud\Tea\Model;

class resourceSettings extends Model
{
    /**
     * @var offlineResourceSettings
     */
    public $offlineResourceSettings;

    /**
     * @var realtimeResourceSettings
     */
    public $realtimeResourceSettings;

    /**
     * @var scheduleResourceSettings
     */
    public $scheduleResourceSettings;
    protected $_name = [
        'offlineResourceSettings'  => 'OfflineResourceSettings',
        'realtimeResourceSettings' => 'RealtimeResourceSettings',
        'scheduleResourceSettings' => 'ScheduleResourceSettings',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->offlineResourceSettings) {
            $res['OfflineResourceSettings'] = null !== $this->offlineResourceSettings ? $this->offlineResourceSettings->toMap() : null;
        }
        if (null !== $this->realtimeResourceSettings) {
            $res['RealtimeResourceSettings'] = null !== $this->realtimeResourceSettings ? $this->realtimeResourceSettings->toMap() : null;
        }
        if (null !== $this->scheduleResourceSettings) {
            $res['ScheduleResourceSettings'] = null !== $this->scheduleResourceSettings ? $this->scheduleResourceSettings->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resourceSettings
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OfflineResourceSettings'])) {
            $model->offlineResourceSettings = offlineResourceSettings::fromMap($map['OfflineResourceSettings']);
        }
        if (isset($map['RealtimeResourceSettings'])) {
            $model->realtimeResourceSettings = realtimeResourceSettings::fromMap($map['RealtimeResourceSettings']);
        }
        if (isset($map['ScheduleResourceSettings'])) {
            $model->scheduleResourceSettings = scheduleResourceSettings::fromMap($map['ScheduleResourceSettings']);
        }

        return $model;
    }
}
