<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\UpdateDIJobRequest\jobSettings;

use AlibabaCloud\Tea\Model;

class cycleScheduleSettings extends Model
{
    /**
     * @description The scheduling parameters.
     *
     * @example bizdate=$bizdate
     *
     * @var string
     */
    public $scheduleParameters;
    protected $_name = [
        'scheduleParameters' => 'ScheduleParameters',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->scheduleParameters) {
            $res['ScheduleParameters'] = $this->scheduleParameters;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return cycleScheduleSettings
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ScheduleParameters'])) {
            $model->scheduleParameters = $map['ScheduleParameters'];
        }

        return $model;
    }
}
