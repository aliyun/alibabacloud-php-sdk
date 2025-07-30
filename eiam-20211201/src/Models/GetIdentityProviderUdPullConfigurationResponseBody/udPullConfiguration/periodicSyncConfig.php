<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\GetIdentityProviderUdPullConfigurationResponseBody\udPullConfiguration;

use AlibabaCloud\Tea\Model;

class periodicSyncConfig extends Model
{
    /**
     * @description Cron expression
     *
     * @example 0 45 1 * * ?
     *
     * @var string
     */
    public $periodicSyncCron;

    /**
     * @description Execution time slots, for example 3,5, meaning the task runs once between 03:00–04:00 and once between 05:00–06:00.
     *
     * @example [3,5]
     *
     * @var int
     */
    public $periodicSyncTimes;

    /**
     * @description type
     *
     * @example cron
     *
     * @var string
     */
    public $periodicSyncType;
    protected $_name = [
        'periodicSyncCron' => 'PeriodicSyncCron',
        'periodicSyncTimes' => 'PeriodicSyncTimes',
        'periodicSyncType' => 'PeriodicSyncType',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->periodicSyncCron) {
            $res['PeriodicSyncCron'] = $this->periodicSyncCron;
        }
        if (null !== $this->periodicSyncTimes) {
            $res['PeriodicSyncTimes'] = $this->periodicSyncTimes;
        }
        if (null !== $this->periodicSyncType) {
            $res['PeriodicSyncType'] = $this->periodicSyncType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return periodicSyncConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PeriodicSyncCron'])) {
            $model->periodicSyncCron = $map['PeriodicSyncCron'];
        }
        if (isset($map['PeriodicSyncTimes'])) {
            $model->periodicSyncTimes = $map['PeriodicSyncTimes'];
        }
        if (isset($map['PeriodicSyncType'])) {
            $model->periodicSyncType = $map['PeriodicSyncType'];
        }

        return $model;
    }
}
