<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSiteMonitorListResponseBody\siteMonitors;

use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSiteMonitorListResponseBody\siteMonitors\siteMonitor\optionsJson;
use AlibabaCloud\Tea\Model;

class siteMonitor extends Model
{
    /**
     * @var string
     */
    public $taskType;

    /**
     * @var string
     */
    public $updateTime;

    /**
     * @var string
     */
    public $interval;

    /**
     * @var string
     */
    public $taskState;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $taskName;

    /**
     * @var string
     */
    public $address;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var optionsJson
     */
    public $optionsJson;
    protected $_name = [
        'taskType'    => 'TaskType',
        'updateTime'  => 'UpdateTime',
        'interval'    => 'Interval',
        'taskState'   => 'TaskState',
        'createTime'  => 'CreateTime',
        'taskName'    => 'TaskName',
        'address'     => 'Address',
        'taskId'      => 'TaskId',
        'optionsJson' => 'OptionsJson',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->taskType) {
            $res['TaskType'] = $this->taskType;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->interval) {
            $res['Interval'] = $this->interval;
        }
        if (null !== $this->taskState) {
            $res['TaskState'] = $this->taskState;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
        }
        if (null !== $this->address) {
            $res['Address'] = $this->address;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->optionsJson) {
            $res['OptionsJson'] = null !== $this->optionsJson ? $this->optionsJson->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return siteMonitor
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['Interval'])) {
            $model->interval = $map['Interval'];
        }
        if (isset($map['TaskState'])) {
            $model->taskState = $map['TaskState'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
        }
        if (isset($map['Address'])) {
            $model->address = $map['Address'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['OptionsJson'])) {
            $model->optionsJson = optionsJson::fromMap($map['OptionsJson']);
        }

        return $model;
    }
}
