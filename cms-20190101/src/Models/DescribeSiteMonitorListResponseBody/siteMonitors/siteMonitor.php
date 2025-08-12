<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSiteMonitorListResponseBody\siteMonitors;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSiteMonitorListResponseBody\siteMonitors\siteMonitor\optionsJson;

class siteMonitor extends Model
{
    /**
     * @var string
     */
    public $address;

    /**
     * @var string
     */
    public $agentGroup;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $interval;

    /**
     * @var optionsJson
     */
    public $optionsJson;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var string
     */
    public $taskName;

    /**
     * @var string
     */
    public $taskState;

    /**
     * @var string
     */
    public $taskType;

    /**
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'address' => 'Address',
        'agentGroup' => 'AgentGroup',
        'createTime' => 'CreateTime',
        'interval' => 'Interval',
        'optionsJson' => 'OptionsJson',
        'taskId' => 'TaskId',
        'taskName' => 'TaskName',
        'taskState' => 'TaskState',
        'taskType' => 'TaskType',
        'updateTime' => 'UpdateTime',
    ];

    public function validate()
    {
        if (null !== $this->optionsJson) {
            $this->optionsJson->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->address) {
            $res['Address'] = $this->address;
        }

        if (null !== $this->agentGroup) {
            $res['AgentGroup'] = $this->agentGroup;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->interval) {
            $res['Interval'] = $this->interval;
        }

        if (null !== $this->optionsJson) {
            $res['OptionsJson'] = null !== $this->optionsJson ? $this->optionsJson->toArray($noStream) : $this->optionsJson;
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
        }

        if (null !== $this->taskState) {
            $res['TaskState'] = $this->taskState;
        }

        if (null !== $this->taskType) {
            $res['TaskType'] = $this->taskType;
        }

        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
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
        if (isset($map['Address'])) {
            $model->address = $map['Address'];
        }

        if (isset($map['AgentGroup'])) {
            $model->agentGroup = $map['AgentGroup'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['Interval'])) {
            $model->interval = $map['Interval'];
        }

        if (isset($map['OptionsJson'])) {
            $model->optionsJson = optionsJson::fromMap($map['OptionsJson']);
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
        }

        if (isset($map['TaskState'])) {
            $model->taskState = $map['TaskState'];
        }

        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
        }

        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
