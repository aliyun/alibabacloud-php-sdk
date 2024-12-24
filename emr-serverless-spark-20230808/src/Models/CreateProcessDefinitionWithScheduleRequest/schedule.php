<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\CreateProcessDefinitionWithScheduleRequest;

use AlibabaCloud\Tea\Model;

class schedule extends Model
{
    /**
     * @example 0 0 0 * * ?
     *
     * @var string
     */
    public $crontab;

    /**
     * @example 2025-12-23 16:13:27
     *
     * @var string
     */
    public $endTime;

    /**
     * @example 2024-12-23 16:13:27
     *
     * @var string
     */
    public $startTime;

    /**
     * @example Asia/Shanghai
     *
     * @var string
     */
    public $timezoneId;
    protected $_name = [
        'crontab'    => 'crontab',
        'endTime'    => 'endTime',
        'startTime'  => 'startTime',
        'timezoneId' => 'timezoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return schedule
     */
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
