<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeGroupMonitoringAgentProcessResponseBody\processes;

use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeGroupMonitoringAgentProcessResponseBody\processes\process\alertConfig;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeGroupMonitoringAgentProcessResponseBody\processes\process\matchExpress;
use AlibabaCloud\Tea\Model;

class process extends Model
{
    /**
     * @description The duration of the mute period during which new alerts are not sent even if the trigger conditions are met. Unit: seconds. Minimum value: 3600, which is equivalent to one hour. Default value: 86400, which is equivalent to one day.
     *
     * >  Only one alert notification is sent during each mute period even if the metric value consecutively exceeds the alert threshold several times.
     * @var alertConfig
     */
    public $alertConfig;

    /**
     * @example 12345
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The keyword used to match the instance name.
     *
     * @example 3F6150F9-45C7-43F9-9578-A58B2E72****
     *
     * @var string
     */
    public $id;

    /**
     * @description The criteria based on which the instances are matched.
     *
     * >  Set the value to `name`, indicating that the instances are matched based on instance name.
     * @var matchExpress
     */
    public $matchExpress;

    /**
     * @example and
     *
     * @var string
     */
    public $matchExpressFilterRelation;

    /**
     * @description The conditional expressions used to match the instances.
     *
     * >  Only the instances that meet the conditional expressions are monitored by the process monitoring task.
     * @example sshd
     *
     * @var string
     */
    public $processName;
    protected $_name = [
        'alertConfig'                => 'AlertConfig',
        'groupId'                    => 'GroupId',
        'id'                         => 'Id',
        'matchExpress'               => 'MatchExpress',
        'matchExpressFilterRelation' => 'MatchExpressFilterRelation',
        'processName'                => 'ProcessName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alertConfig) {
            $res['AlertConfig'] = null !== $this->alertConfig ? $this->alertConfig->toMap() : null;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->matchExpress) {
            $res['MatchExpress'] = null !== $this->matchExpress ? $this->matchExpress->toMap() : null;
        }
        if (null !== $this->matchExpressFilterRelation) {
            $res['MatchExpressFilterRelation'] = $this->matchExpressFilterRelation;
        }
        if (null !== $this->processName) {
            $res['ProcessName'] = $this->processName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return process
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlertConfig'])) {
            $model->alertConfig = alertConfig::fromMap($map['AlertConfig']);
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['MatchExpress'])) {
            $model->matchExpress = matchExpress::fromMap($map['MatchExpress']);
        }
        if (isset($map['MatchExpressFilterRelation'])) {
            $model->matchExpressFilterRelation = $map['MatchExpressFilterRelation'];
        }
        if (isset($map['ProcessName'])) {
            $model->processName = $map['ProcessName'];
        }

        return $model;
    }
}
