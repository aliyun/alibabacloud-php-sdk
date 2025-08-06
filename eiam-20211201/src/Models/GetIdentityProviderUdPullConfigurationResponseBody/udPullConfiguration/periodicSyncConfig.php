<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\GetIdentityProviderUdPullConfigurationResponseBody\udPullConfiguration;

use AlibabaCloud\Dara\Model;

class periodicSyncConfig extends Model
{
    /**
     * @var string
     */
    public $periodicSyncCron;

    /**
     * @var int
     */
    public $periodicSyncTimes;

    /**
     * @var string
     */
    public $periodicSyncType;
    protected $_name = [
        'periodicSyncCron' => 'PeriodicSyncCron',
        'periodicSyncTimes' => 'PeriodicSyncTimes',
        'periodicSyncType' => 'PeriodicSyncType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
