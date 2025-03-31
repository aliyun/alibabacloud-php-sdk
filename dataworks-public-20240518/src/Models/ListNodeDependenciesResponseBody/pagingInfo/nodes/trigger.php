<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListNodeDependenciesResponseBody\pagingInfo\nodes;

use AlibabaCloud\Dara\Model;

class trigger extends Model
{
    /**
     * @var string
     */
    public $cron;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $timezone;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'cron' => 'Cron',
        'endTime' => 'EndTime',
        'id' => 'Id',
        'startTime' => 'StartTime',
        'timezone' => 'Timezone',
        'type' => 'Type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cron) {
            $res['Cron'] = $this->cron;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->timezone) {
            $res['Timezone'] = $this->timezone;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['Cron'])) {
            $model->cron = $map['Cron'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['Timezone'])) {
            $model->timezone = $map['Timezone'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
