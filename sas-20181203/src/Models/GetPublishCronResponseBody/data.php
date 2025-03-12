<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetPublishCronResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description Cron expression for the start time of the upgrade.
     *
     * @example 0 0 7 * * ?
     *
     * @var string
     */
    public $cron;

    /**
     * @description The day of the week for the upgrade. The values are as follows:
     * - **MON**: Monday
     * - **TUE**: Tuesday
     * - **WED**: Wednesday
     * - **THU**: Thursday
     * - **FRI**: Friday
     * - **SAT**: Saturday
     * - **SUN**: Sunday
     * @example MON
     *
     * @var string
     */
    public $cronDay;

    /**
     * @description Timestamp for the start of the publish, in milliseconds.
     *
     * @example 1724522400000
     *
     * @var int
     */
    public $cronTime;

    /**
     * @description Upgrade start cycle type. The values are as follows:
     * - **day**: Daily
     * - **week**: Weekly
     * @example day
     *
     * @var string
     */
    public $cronType;

    /**
     * @description Duration of the upgrade in hours.
     *
     * @example 24
     *
     * @var int
     */
    public $duration;
    protected $_name = [
        'cron'     => 'Cron',
        'cronDay'  => 'CronDay',
        'cronTime' => 'CronTime',
        'cronType' => 'CronType',
        'duration' => 'Duration',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return data
     */
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
