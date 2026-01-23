<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListQualityRulesResponseBody\pageResult\qualityRuleList;

use AlibabaCloud\Dara\Model;

class scheduleBindList extends Model
{
    /**
     * @var int
     */
    public $scheduleId;

    /**
     * @var string
     */
    public $scheduleName;
    protected $_name = [
        'scheduleId' => 'ScheduleId',
        'scheduleName' => 'ScheduleName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->scheduleId) {
            $res['ScheduleId'] = $this->scheduleId;
        }

        if (null !== $this->scheduleName) {
            $res['ScheduleName'] = $this->scheduleName;
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
        if (isset($map['ScheduleId'])) {
            $model->scheduleId = $map['ScheduleId'];
        }

        if (isset($map['ScheduleName'])) {
            $model->scheduleName = $map['ScheduleName'];
        }

        return $model;
    }
}
