<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class RunServiceScheduleRequest extends Model
{
    /**
     * @description The ID of the application.
     *
     * This parameter is required.
     * @example 474bdef0-d149-4695-abfb-52912d9143f0
     *
     * @var string
     */
    public $appId;

    /**
     * @description The IP address of the client.
     *
     * This parameter is required.
     * @example 180.166.45.146
     *
     * @var string
     */
    public $clientIp;

    /**
     * @description The directory to which the data file is mounted. The value must be a full path and cannot be \\"/../\\". Example: ["/data/app01", "/data/user"]. Specify the relative path of the virtual device for this parameter. For example, specify /data for this parameter when the actual path of the virtual device is /data/{input path}.
     *
     * @example [\\"/data/app01\\", \\"/data/user\\"]
     *
     * @var string
     */
    public $directorys;

    /**
     * @description The parameter does not take effect.
     *
     * @example android
     *
     * @var string
     */
    public $podConfigName;

    /**
     * @description The maximum duration for locking an idle device. Unit: seconds. This parameter takes effect only if you set ServiceAction to PreSchedule. Default value: 300.
     *
     * @example 300
     *
     * @var int
     */
    public $preLockedTimeout;

    /**
     * @description The scheduling policy of the device. The value must be a JSON string.
     *
     * @example {\\"selectLevel\\": \\"RegionId\\", \\"values\\": [\\"cn-chengdu-telecom-2\\"]  }
     *
     * @var string
     */
    public $scheduleStrategy;

    /**
     * @description The scheduling operation. The value must be of the enumeration type. Valid values:
     *
     * Container scenario:
     *
     *   Start: selects and activates an idle cloud device.
     *   Stop: stops and releases the cloud device.
     *   Console: performs the scheduling operation when the device is in the scheduling state.
     *
     * Bare metal instance or virtual machine scenario:
     *
     *   PreSchedule: locks a virtual machine instance for scheduling.
     *   Confirm: confirms the scheduling operation.
     *   Cancel: cancels the scheduling operation.
     *   Console: performs the scheduling operation when the device is in the scheduling state.
     *
     * This parameter is required.
     * @example Start
     *
     * @var string
     */
    public $serviceAction;

    /**
     * @description The service commands. The value must be a JSON string.
     *
     * @example [{\\"containerName\\": \\"android\\",       \\"commands\\":[\\"cat /tmp/token.json\\"]    },    {      \\"commands\\":[\\"ls -l /data/data\\"]    }]
     *
     * @var string
     */
    public $serviceCommands;

    /**
     * @description The UUID of the device.
     *
     * This parameter is required.
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
