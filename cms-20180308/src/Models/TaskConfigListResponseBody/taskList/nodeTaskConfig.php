<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20180308\Models\TaskConfigListResponseBody\taskList;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20180308\Models\TaskConfigListResponseBody\taskList\nodeTaskConfig\instanceList;

class nodeTaskConfig extends Model
{
    /**
     * @var string
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
     * @var instanceList
     */
    public $instanceList;

    /**
     * @var string
     */
    public $jsonData;

    /**
     * @var string
     */
    public $taskName;

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
        'instanceList' => 'InstanceList',
        'jsonData' => 'JsonData',
        'taskName' => 'TaskName',
        'taskScope' => 'TaskScope',
        'taskType' => 'TaskType',
    ];

    public function validate()
    {
        if (null !== $this->instanceList) {
            $this->instanceList->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alertConfig) {
            $res['AlertConfig'] = $this->alertConfig;
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

        if (null !== $this->instanceList) {
            $res['InstanceList'] = null !== $this->instanceList ? $this->instanceList->toArray($noStream) : $this->instanceList;
        }

        if (null !== $this->jsonData) {
            $res['JsonData'] = $this->jsonData;
        }

        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
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
            $model->alertConfig = $map['AlertConfig'];
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

        if (isset($map['InstanceList'])) {
            $model->instanceList = instanceList::fromMap($map['InstanceList']);
        }

        if (isset($map['JsonData'])) {
            $model->jsonData = $map['JsonData'];
        }

        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
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
