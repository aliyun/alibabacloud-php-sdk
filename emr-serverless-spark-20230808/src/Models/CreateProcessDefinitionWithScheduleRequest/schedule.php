<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\CreateProcessDefinitionWithScheduleRequest;

use AlibabaCloud\Dara\Model;

class schedule extends Model
{
    /**
     * @var string
     */
    public $crontab;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $timezoneId;
    protected $_name = [
        'crontab' => 'crontab',
        'endTime' => 'endTime',
        'startTime' => 'startTime',
        'timezoneId' => 'timezoneId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->crontab) {
            $res['crontab'] = $this->crontab;
        }

        if (null !== $this->endTime) {
            $res['endTime'] = $this->endTime;
        }

        if (null !== $this->startTime) {
            $res['startTime'] = $this->startTime;
        }

        if (null !== $this->timezoneId) {
            $res['timezoneId'] = $this->timezoneId;
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
        if (isset($map['crontab'])) {
            $model->crontab = $map['crontab'];
        }

        if (isset($map['endTime'])) {
            $model->endTime = $map['endTime'];
        }

        if (isset($map['startTime'])) {
            $model->startTime = $map['startTime'];
        }

        if (isset($map['timezoneId'])) {
            $model->timezoneId = $map['timezoneId'];
        }

        return $model;
    }
}
