<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\StartDIJobRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\StartDIJobRequest\realtimeStartSettings\failoverSettings;

class realtimeStartSettings extends Model
{
    /**
     * @var failoverSettings
     */
    public $failoverSettings;

    /**
     * @var int
     */
    public $startTime;
    protected $_name = [
        'failoverSettings' => 'FailoverSettings',
        'startTime' => 'StartTime',
    ];

    public function validate()
    {
        if (null !== $this->failoverSettings) {
            $this->failoverSettings->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->failoverSettings) {
            $res['FailoverSettings'] = null !== $this->failoverSettings ? $this->failoverSettings->toArray($noStream) : $this->failoverSettings;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
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
        if (isset($map['FailoverSettings'])) {
            $model->failoverSettings = failoverSettings::fromMap($map['FailoverSettings']);
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
