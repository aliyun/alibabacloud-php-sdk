<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class RunServiceScheduleRequest extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $clientIp;

    /**
     * @var string
     */
    public $directorys;

    /**
     * @var string
     */
    public $podConfigName;

    /**
     * @var int
     */
    public $preLockedTimeout;

    /**
     * @var string
     */
    public $scheduleStrategy;

    /**
     * @var string
     */
    public $serviceAction;

    /**
     * @var string
     */
    public $serviceCommands;

    /**
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
