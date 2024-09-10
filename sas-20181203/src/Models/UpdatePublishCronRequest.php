<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class UpdatePublishCronRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 0 5 10 * * ?
     *
     * @var string
     */
    public $cron;

    /**
     * @example SUN
     *
     * @var string
     */
    public $cronDay;

    /**
     * @example 1657407600000
     *
     * @var int
     */
    public $cronTime;

    /**
     * @example day
     *
     * @var string
     */
    public $cronType;

    /**
     * @description This parameter is required.
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
     * @return UpdatePublishCronRequest
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
