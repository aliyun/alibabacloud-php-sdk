<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetPropertyScheduleConfigResponseBody;

use AlibabaCloud\Tea\Model;

class propertyScheduleConfig extends Model
{
    /**
     * @description The timestamp when the next collection of asset fingerprints starts. Unit: milliseconds.
     *
     * @example 1671630647018
     *
     * @var int
     */
    public $nextScheduleTime;

    /**
     * @description The collection frequency of asset fingerprints. Valid values:
     *
     *   **0**: disabled, which indicates that the asset fingerprints are not automatically or periodically collected.
     *   **1**: collects asset fingerprints once an hour.
     *   **3**: collects asset fingerprints once every 3 hours.
     *   **12**: collects asset fingerprints once every 12 hours.
     *   **24**: collects asset fingerprints once a day.
     *   **168**: collects asset fingerprints once every 7 days.
     *
     * @example 3
     *
     * @var string
     */
    public $scheduleTime;

    /**
     * @description The type of the asset fingerprints. Valid values:
     *
     *   **scheduler_port_period**: listening port
     *   **scheduler_process_period**: running process
     *   **scheduler_account_period**: account
     *   **scheduler_software_period**: software
     *   **scheduler_cron_period**: scheduled task
     *   **scheduler_sca_period**: middleware
     *   **scheduler_autorun_period**: startup item
     *   **scheduler_lkm_period**: kernel module
     *   **scheduler_sca_proxy_period**: website
     *
     * @example scheduler_account_period
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'nextScheduleTime' => 'NextScheduleTime',
        'scheduleTime'     => 'ScheduleTime',
        'type'             => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nextScheduleTime) {
            $res['NextScheduleTime'] = $this->nextScheduleTime;
        }
        if (null !== $this->scheduleTime) {
            $res['ScheduleTime'] = $this->scheduleTime;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return propertyScheduleConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NextScheduleTime'])) {
            $model->nextScheduleTime = $map['NextScheduleTime'];
        }
        if (isset($map['ScheduleTime'])) {
            $model->scheduleTime = $map['ScheduleTime'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
