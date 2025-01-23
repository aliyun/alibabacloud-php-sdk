<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CreateDIJobRequest\jobSettings;

use AlibabaCloud\Dara\Model;

class cycleScheduleSettings extends Model
{
    /**
     * @var string
     */
    public $cycleMigrationType;
    /**
     * @var string
     */
    public $scheduleParameters;
    protected $_name = [
        'cycleMigrationType' => 'CycleMigrationType',
        'scheduleParameters' => 'ScheduleParameters',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cycleMigrationType) {
            $res['CycleMigrationType'] = $this->cycleMigrationType;
        }

        if (null !== $this->scheduleParameters) {
            $res['ScheduleParameters'] = $this->scheduleParameters;
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
        if (isset($map['CycleMigrationType'])) {
            $model->cycleMigrationType = $map['CycleMigrationType'];
        }

        if (isset($map['ScheduleParameters'])) {
            $model->scheduleParameters = $map['ScheduleParameters'];
        }

        return $model;
    }
}
