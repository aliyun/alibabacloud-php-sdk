<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSiteMonitorListResponseBody\siteMonitors;

use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSiteMonitorListResponseBody\siteMonitors\siteMonitor\optionsJson;
use AlibabaCloud\Tea\Model;

class siteMonitor extends Model
{
    /**
     * @description The URL or IP address that is monitored by the site monitoring task.
     *
     * @example https://aliyun.com
     *
     * @var string
     */
    public $address;

    /**
     * @example PC
     *
     * @var string
     */
    public $agentGroup;

    /**
     * @description The time when the site monitoring task was created.
     *
     * @example 2021-11-01 11:05:18
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The interval at which detection requests are sent. Unit: minutes.
     *
     * @example 1
     *
     * @var string
     */
    public $interval;

    /**
     * @description The extended options of the site monitoring task. The options vary based on the specified protocol. For more information, see [CreateSiteMonitor](~~115048~~).
     *
     * @var optionsJson
     */
    public $optionsJson;

    /**
     * @description The ID of the site monitoring task.
     *
     * @example f5783760-1b39-4b6b-80e8-453d962a****
     *
     * @var string
     */
    public $taskId;

    /**
     * @description The name of the site monitoring task.
     *
     * @var string
     */
    public $taskName;

    /**
     * @description The status of the task. Valid values:
     *
     *   1: The task is enabled.
     *   2: The task is disabled.
     *
     * @example 1
     *
     * @var string
     */
    public $taskState;

    /**
     * @description The protocol that is used by the site monitoring task. Valid values: HTTP, PING, TCP, UDP, DNS, SMTP, POP3, and FTP.
     *
     * @example TCP
     *
     * @var string
     */
    public $taskType;

    /**
     * @description The time when the site monitoring task was updated.
     *
     * @example 2022-03-08 17:14:31
     *
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'address'     => 'Address',
        'agentGroup'  => 'AgentGroup',
        'createTime'  => 'CreateTime',
        'interval'    => 'Interval',
        'optionsJson' => 'OptionsJson',
        'taskId'      => 'TaskId',
        'taskName'    => 'TaskName',
        'taskState'   => 'TaskState',
        'taskType'    => 'TaskType',
        'updateTime'  => 'UpdateTime',
    ];

    public function validate()
    {
    }

    public function toMap()
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
            $res['OptionsJson'] = null !== $this->optionsJson ? $this->optionsJson->toMap() : null;
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

    /**
     * @param array $map
     *
     * @return siteMonitor
     */
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
