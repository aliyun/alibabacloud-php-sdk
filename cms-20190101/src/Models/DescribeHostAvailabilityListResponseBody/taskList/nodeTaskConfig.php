<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeHostAvailabilityListResponseBody\taskList;

use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeHostAvailabilityListResponseBody\taskList\nodeTaskConfig\alertConfig;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeHostAvailabilityListResponseBody\taskList\nodeTaskConfig\instances;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeHostAvailabilityListResponseBody\taskList\nodeTaskConfig\taskOption;
use AlibabaCloud\Tea\Model;

class nodeTaskConfig extends Model
{
    /**
     * @description The configurations of the alert rule.
     *
     * @var alertConfig
     */
    public $alertConfig;

    /**
     * @description Indicates whether the availability monitoring task is disabled. Valid values:
     *
     *   true: The availability monitoring task is disabled.
     *   false: The availability monitoring task is enabled.
     *
     * @example false
     *
     * @var bool
     */
    public $disabled;

    /**
     * @description The ID of the application group.
     *
     * @example 12345
     *
     * @var int
     */
    public $groupId;

    /**
     * @description The name of the application group.
     *
     * @example Group_ECS
     *
     * @var string
     */
    public $groupName;

    /**
     * @description The ID of the availability monitoring task.
     *
     * @example 123456
     *
     * @var int
     */
    public $id;

    /**
     * @description The ECS instances that are monitored.
     *
     * @var instances
     */
    public $instances;

    /**
     * @description The name of the availability monitoring task.
     *
     * @example ecs_instance
     *
     * @var string
     */
    public $taskName;

    /**
     * @description The optional parameters of the availability monitoring task.
     *
     * @var taskOption
     */
    public $taskOption;

    /**
     * @description The range of instances that are monitored by the availability monitoring task. Valid values:
     *
     *   GROUP: All ECS instances in the application group are monitored.
     *   GROUP_SPEC_INSTANCE: Specified ECS instances in the application group are monitored.
     *
     * @example GROUP
     *
     * @var string
     */
    public $taskScope;

    /**
     * @description The type of the availability monitoring task. Valid values:
     *
     *   PING
     *   TELNET
     *   HTTP
     *
     * @example HTTP
     *
     * @var string
     */
    public $taskType;
    protected $_name = [
        'alertConfig' => 'AlertConfig',
        'disabled'    => 'Disabled',
        'groupId'     => 'GroupId',
        'groupName'   => 'GroupName',
        'id'          => 'Id',
        'instances'   => 'Instances',
        'taskName'    => 'TaskName',
        'taskOption'  => 'TaskOption',
        'taskScope'   => 'TaskScope',
        'taskType'    => 'TaskType',
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
        if (null !== $this->disabled) {
            $res['Disabled'] = $this->disabled;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->instances) {
            $res['Instances'] = null !== $this->instances ? $this->instances->toMap() : null;
        }
        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
        }
        if (null !== $this->taskOption) {
            $res['TaskOption'] = null !== $this->taskOption ? $this->taskOption->toMap() : null;
        }
        if (null !== $this->taskScope) {
            $res['TaskScope'] = $this->taskScope;
        }
        if (null !== $this->taskType) {
            $res['TaskType'] = $this->taskType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return nodeTaskConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlertConfig'])) {
            $model->alertConfig = alertConfig::fromMap($map['AlertConfig']);
        }
        if (isset($map['Disabled'])) {
            $model->disabled = $map['Disabled'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Instances'])) {
            $model->instances = instances::fromMap($map['Instances']);
        }
        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
        }
        if (isset($map['TaskOption'])) {
            $model->taskOption = taskOption::fromMap($map['TaskOption']);
        }
        if (isset($map['TaskScope'])) {
            $model->taskScope = $map['TaskScope'];
        }
        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
        }

        return $model;
    }
}
