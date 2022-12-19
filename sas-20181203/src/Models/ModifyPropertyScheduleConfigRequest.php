<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class ModifyPropertyScheduleConfigRequest extends Model
{
    /**
     * @description The new collection frequency of asset fingerprints. Valid values:
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
     * @description The type of the asset fingerprints for which you want to modify the collection frequency. Valid values:
     *
     *   **scheduler\_port_period**: listening port
     *   **scheduler\_process_period**: running process
     *   **scheduler\_account_period**: account
     *   **scheduler\_software_period**: software
     *   **scheduler\_cron_period**: scheduled task
     *   **scheduler\_sca_period**: middleware, database, or web service
     *   **scheduler\_autorun_period**: startup item
     *   **scheduler\_lkm_period**: kernel module
     *   **scheduler\_sca\_proxy_period**: website
     *
     * @example scheduler_port_period
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'scheduleTime' => 'ScheduleTime',
        'type'         => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
     * @return ModifyPropertyScheduleConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ScheduleTime'])) {
            $model->scheduleTime = $map['ScheduleTime'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
