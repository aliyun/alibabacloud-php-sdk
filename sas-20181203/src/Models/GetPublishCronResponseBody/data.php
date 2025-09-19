<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetPublishCronResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $cron;

    /**
     * @var string
     */
    public $cronDay;

    /**
     * @var int
     */
    public $cronTime;

    /**
     * @var string
     */
    public $cronType;

    /**
     * @var int
     */
    public $duration;
    protected $_name = [
        'cron' => 'Cron',
        'cronDay' => 'CronDay',
        'cronTime' => 'CronTime',
        'cronType' => 'CronType',
        'duration' => 'Duration',
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

        if (null !== $this->cronDay) {
            $res['CronDay'] = $this->cronDay;
        }

        if (null !== $this->cronTime) {
            $res['CronTime'] = $this->cronTime;
        }

        if (null !== $this->cronType) {
            $res['CronType'] = $this->cronType;
        }

        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
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

        if (isset($map['CronDay'])) {
            $model->cronDay = $map['CronDay'];
        }

        if (isset($map['CronTime'])) {
            $model->cronTime = $map['CronTime'];
        }

        if (isset($map['CronType'])) {
            $model->cronType = $map['CronType'];
        }

        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }

        return $model;
    }
}
