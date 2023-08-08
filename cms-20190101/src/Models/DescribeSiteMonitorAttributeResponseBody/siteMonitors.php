<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSiteMonitorAttributeResponseBody;

use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSiteMonitorAttributeResponseBody\siteMonitors\customSchedule;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSiteMonitorAttributeResponseBody\siteMonitors\ispCities;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSiteMonitorAttributeResponseBody\siteMonitors\optionJson;
use AlibabaCloud\Tea\Model;

class siteMonitors extends Model
{
    /**
     * @description The information of detection points. The information includes the carriers that provide the detection points and the cities where the detection points reside.
     *
     * @example https://aliyun.com
     *
     * @var string
     */
    public $address;

    /**
     * @var string
     */
    public $agentGroup;

    /**
     * @var customSchedule
     */
    public $customSchedule;

    /**
     * @description The name of the site monitoring task.
     *
     * @example 1
     *
     * @var string
     */
    public $interval;

    /**
     * @description The name of the carrier.
     *
     * @var ispCities
     */
    public $ispCities;

    /**
     * @var optionJson
     */
    public $optionJson;

    /**
     * @description The ID of the city.
     *
     * @example cc641dff-c19d-45f3-ad0a-818a0c4f****
     *
     * @var string
     */
    public $taskId;

    /**
     * @description The ID of the site monitoring task.
     *
     * @example test123
     *
     * @var string
     */
    public $taskName;

    /**
     * @description The address that is monitored by the site monitoring task.
     *
     * @example 1
     *
     * @var string
     */
    public $taskState;

    /**
     * @description The status of the site monitoring task. Valid values:
     *
     *   1: The task is enabled.
     *   2: The task is disabled.
     *
     * @example HTTP
     *
     * @var string
     */
    public $taskType;
    protected $_name = [
        'address'        => 'Address',
        'agentGroup'     => 'AgentGroup',
        'customSchedule' => 'CustomSchedule',
        'interval'       => 'Interval',
        'ispCities'      => 'IspCities',
        'optionJson'     => 'OptionJson',
        'taskId'         => 'TaskId',
        'taskName'       => 'TaskName',
        'taskState'      => 'TaskState',
        'taskType'       => 'TaskType',
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
        if (null !== $this->customSchedule) {
            $res['CustomSchedule'] = null !== $this->customSchedule ? $this->customSchedule->toMap() : null;
        }
        if (null !== $this->interval) {
            $res['Interval'] = $this->interval;
        }
        if (null !== $this->ispCities) {
            $res['IspCities'] = null !== $this->ispCities ? $this->ispCities->toMap() : null;
        }
        if (null !== $this->optionJson) {
            $res['OptionJson'] = null !== $this->optionJson ? $this->optionJson->toMap() : null;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return siteMonitors
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
        if (isset($map['CustomSchedule'])) {
            $model->customSchedule = customSchedule::fromMap($map['CustomSchedule']);
        }
        if (isset($map['Interval'])) {
            $model->interval = $map['Interval'];
        }
        if (isset($map['IspCities'])) {
            $model->ispCities = ispCities::fromMap($map['IspCities']);
        }
        if (isset($map['OptionJson'])) {
            $model->optionJson = optionJson::fromMap($map['OptionJson']);
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

        return $model;
    }
}
