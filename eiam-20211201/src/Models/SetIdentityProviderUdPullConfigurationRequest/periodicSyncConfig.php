<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\SetIdentityProviderUdPullConfigurationRequest;

use AlibabaCloud\Dara\Model;

class periodicSyncConfig extends Model
{
    /**
     * @var string
     */
    public $periodicSyncCron;

    /**
     * @var int[]
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
        if (\is_array($this->periodicSyncTimes)) {
            Model::validateArray($this->periodicSyncTimes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->periodicSyncCron) {
            $res['PeriodicSyncCron'] = $this->periodicSyncCron;
        }

        if (null !== $this->periodicSyncTimes) {
            if (\is_array($this->periodicSyncTimes)) {
                $res['PeriodicSyncTimes'] = [];
                $n1 = 0;
                foreach ($this->periodicSyncTimes as $item1) {
                    $res['PeriodicSyncTimes'][$n1] = $item1;
                    ++$n1;
                }
            }
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
            if (!empty($map['PeriodicSyncTimes'])) {
                $model->periodicSyncTimes = [];
                $n1 = 0;
                foreach ($map['PeriodicSyncTimes'] as $item1) {
                    $model->periodicSyncTimes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['PeriodicSyncType'])) {
            $model->periodicSyncType = $map['PeriodicSyncType'];
        }

        return $model;
    }
}
