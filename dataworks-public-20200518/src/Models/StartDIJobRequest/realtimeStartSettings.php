<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\StartDIJobRequest;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\StartDIJobRequest\realtimeStartSettings\failoverSettings;
use AlibabaCloud\Tea\Model;

class realtimeStartSettings extends Model
{
    /**
     * @var failoverSettings
     */
    public $failoverSettings;

    /**
     * @example 1671516776
     *
     * @var int
     */
    public $startTime;
    protected $_name = [
        'failoverSettings' => 'FailoverSettings',
        'startTime'        => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->failoverSettings) {
            $res['FailoverSettings'] = null !== $this->failoverSettings ? $this->failoverSettings->toMap() : null;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return realtimeStartSettings
     */
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
