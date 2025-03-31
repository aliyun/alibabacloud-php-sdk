<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateDIJobRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateDIJobRequest\resourceSettings\offlineResourceSettings;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateDIJobRequest\resourceSettings\realtimeResourceSettings;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateDIJobRequest\resourceSettings\scheduleResourceSettings;

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
        'offlineResourceSettings' => 'OfflineResourceSettings',
        'realtimeResourceSettings' => 'RealtimeResourceSettings',
        'scheduleResourceSettings' => 'ScheduleResourceSettings',
    ];

    public function validate()
    {
        if (null !== $this->offlineResourceSettings) {
            $this->offlineResourceSettings->validate();
        }
        if (null !== $this->realtimeResourceSettings) {
            $this->realtimeResourceSettings->validate();
        }
        if (null !== $this->scheduleResourceSettings) {
            $this->scheduleResourceSettings->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->offlineResourceSettings) {
            $res['OfflineResourceSettings'] = null !== $this->offlineResourceSettings ? $this->offlineResourceSettings->toArray($noStream) : $this->offlineResourceSettings;
        }

        if (null !== $this->realtimeResourceSettings) {
            $res['RealtimeResourceSettings'] = null !== $this->realtimeResourceSettings ? $this->realtimeResourceSettings->toArray($noStream) : $this->realtimeResourceSettings;
        }

        if (null !== $this->scheduleResourceSettings) {
            $res['ScheduleResourceSettings'] = null !== $this->scheduleResourceSettings ? $this->scheduleResourceSettings->toArray($noStream) : $this->scheduleResourceSettings;
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
