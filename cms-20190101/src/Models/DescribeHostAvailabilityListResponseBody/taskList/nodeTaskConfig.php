<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeHostAvailabilityListResponseBody\taskList;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeHostAvailabilityListResponseBody\taskList\nodeTaskConfig\alertConfig;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeHostAvailabilityListResponseBody\taskList\nodeTaskConfig\instances;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeHostAvailabilityListResponseBody\taskList\nodeTaskConfig\taskOption;

class nodeTaskConfig extends Model
{
    /**
     * @var alertConfig
     */
    public $alertConfig;

    /**
     * @var bool
     */
    public $disabled;

    /**
     * @var int
     */
    public $groupId;

    /**
     * @var string
     */
    public $groupName;

    /**
     * @var int
     */
    public $id;

    /**
     * @var instances
     */
    public $instances;

    /**
     * @var string
     */
    public $taskName;

    /**
     * @var taskOption
     */
    public $taskOption;

    /**
     * @var string
     */
    public $taskScope;

    /**
     * @var string
     */
    public $taskType;
    protected $_name = [
        'alertConfig' => 'AlertConfig',
        'disabled' => 'Disabled',
        'groupId' => 'GroupId',
        'groupName' => 'GroupName',
        'id' => 'Id',
        'instances' => 'Instances',
        'taskName' => 'TaskName',
        'taskOption' => 'TaskOption',
        'taskScope' => 'TaskScope',
        'taskType' => 'TaskType',
    ];

    public function validate()
    {
        if (null !== $this->alertConfig) {
            $this->alertConfig->validate();
        }
        if (null !== $this->instances) {
            $this->instances->validate();
        }
        if (null !== $this->taskOption) {
            $this->taskOption->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alertConfig) {
            $res['AlertConfig'] = null !== $this->alertConfig ? $this->alertConfig->toArray($noStream) : $this->alertConfig;
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
            $res['Instances'] = null !== $this->instances ? $this->instances->toArray($noStream) : $this->instances;
        }

        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
        }

        if (null !== $this->taskOption) {
            $res['TaskOption'] = null !== $this->taskOption ? $this->taskOption->toArray($noStream) : $this->taskOption;
        }

        if (null !== $this->taskScope) {
            $res['TaskScope'] = $this->taskScope;
        }

        if (null !== $this->taskType) {
            $res['TaskType'] = $this->taskType;
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
