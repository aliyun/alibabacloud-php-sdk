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
    public $uuid;

    /**
     * @var string
     */
    public $clientIp;

    /**
     * @var string
     */
    public $serviceAction;

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
    public $directorys;

    /**
     * @var string
     */
    public $serviceCommands;

    /**
     * @var string
     */
    public $scheduleStrategy;
    protected $_name = [
        'appId'            => 'AppId',
        'uuid'             => 'Uuid',
        'clientIp'         => 'ClientIp',
        'serviceAction'    => 'ServiceAction',
        'podConfigName'    => 'PodConfigName',
        'preLockedTimeout' => 'PreLockedTimeout',
        'directorys'       => 'Directorys',
        'serviceCommands'  => 'ServiceCommands',
        'scheduleStrategy' => 'ScheduleStrategy',
    ];

    public function validate()
    {
        Model::validateRequired('appId', $this->appId, true);
        Model::validateRequired('uuid', $this->uuid, true);
        Model::validateRequired('clientIp', $this->clientIp, true);
        Model::validateRequired('serviceAction', $this->serviceAction, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }
        if (null !== $this->clientIp) {
            $res['ClientIp'] = $this->clientIp;
        }
        if (null !== $this->serviceAction) {
            $res['ServiceAction'] = $this->serviceAction;
        }
        if (null !== $this->podConfigName) {
            $res['PodConfigName'] = $this->podConfigName;
        }
        if (null !== $this->preLockedTimeout) {
            $res['PreLockedTimeout'] = $this->preLockedTimeout;
        }
        if (null !== $this->directorys) {
            $res['Directorys'] = $this->directorys;
        }
        if (null !== $this->serviceCommands) {
            $res['ServiceCommands'] = $this->serviceCommands;
        }
        if (null !== $this->scheduleStrategy) {
            $res['ScheduleStrategy'] = $this->scheduleStrategy;
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
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }
        if (isset($map['ClientIp'])) {
            $model->clientIp = $map['ClientIp'];
        }
        if (isset($map['ServiceAction'])) {
            $model->serviceAction = $map['ServiceAction'];
        }
        if (isset($map['PodConfigName'])) {
            $model->podConfigName = $map['PodConfigName'];
        }
        if (isset($map['PreLockedTimeout'])) {
            $model->preLockedTimeout = $map['PreLockedTimeout'];
        }
        if (isset($map['Directorys'])) {
            $model->directorys = $map['Directorys'];
        }
        if (isset($map['ServiceCommands'])) {
            $model->serviceCommands = $map['ServiceCommands'];
        }
        if (isset($map['ScheduleStrategy'])) {
            $model->scheduleStrategy = $map['ScheduleStrategy'];
        }

        return $model;
    }
}
