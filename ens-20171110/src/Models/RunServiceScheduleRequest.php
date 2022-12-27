<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class RunServiceScheduleRequest extends Model
{
    /**
     * @example 474bdef0-d149-4695-abfb-52912d9143f0
     *
     * @var string
     */
    public $appId;

    /**
     * @example 180.166.45.146
     *
     * @var string
     */
    public $clientIp;

    /**
     * @example [\"/data/app01\", \"/data/user\"]
     *
     * @var string
     */
    public $directorys;

    /**
     * @example android
     *
     * @var string
     */
    public $podConfigName;

    /**
     * @example 300
     *
     * @var int
     */
    public $preLockedTimeout;

    /**
     * @example {\"selectLevel\": \"RegionId\", \"values\": [\"cn-chengdu-telecom-2\"]  }
     *
     * @var string
     */
    public $scheduleStrategy;

    /**
     * @example Start
     *
     * @var string
     */
    public $serviceAction;

    /**
     * @example [{\"containerName\": \"android\",       \"commands\":[\"cat /tmp/token.json\"]    },    {      \"commands\":[\"ls -l /data/data\"]    }]
     *
     * @var string
     */
    public $serviceCommands;

    /**
     * @example hdm_d4f1059a8e1afc0956bd71b497faa433
     *
     * @var string
     */
    public $uuid;
    protected $_name = [
        'appId'            => 'AppId',
        'clientIp'         => 'ClientIp',
        'directorys'       => 'Directorys',
        'podConfigName'    => 'PodConfigName',
        'preLockedTimeout' => 'PreLockedTimeout',
        'scheduleStrategy' => 'ScheduleStrategy',
        'serviceAction'    => 'ServiceAction',
        'serviceCommands'  => 'ServiceCommands',
        'uuid'             => 'Uuid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->clientIp) {
            $res['ClientIp'] = $this->clientIp;
        }
        if (null !== $this->directorys) {
            $res['Directorys'] = $this->directorys;
        }
        if (null !== $this->podConfigName) {
            $res['PodConfigName'] = $this->podConfigName;
        }
        if (null !== $this->preLockedTimeout) {
            $res['PreLockedTimeout'] = $this->preLockedTimeout;
        }
        if (null !== $this->scheduleStrategy) {
            $res['ScheduleStrategy'] = $this->scheduleStrategy;
        }
        if (null !== $this->serviceAction) {
            $res['ServiceAction'] = $this->serviceAction;
        }
        if (null !== $this->serviceCommands) {
            $res['ServiceCommands'] = $this->serviceCommands;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RunServiceScheduleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['ClientIp'])) {
            $model->clientIp = $map['ClientIp'];
        }
        if (isset($map['Directorys'])) {
            $model->directorys = $map['Directorys'];
        }
        if (isset($map['PodConfigName'])) {
            $model->podConfigName = $map['PodConfigName'];
        }
        if (isset($map['PreLockedTimeout'])) {
            $model->preLockedTimeout = $map['PreLockedTimeout'];
        }
        if (isset($map['ScheduleStrategy'])) {
            $model->scheduleStrategy = $map['ScheduleStrategy'];
        }
        if (isset($map['ServiceAction'])) {
            $model->serviceAction = $map['ServiceAction'];
        }
        if (isset($map['ServiceCommands'])) {
            $model->serviceCommands = $map['ServiceCommands'];
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}
