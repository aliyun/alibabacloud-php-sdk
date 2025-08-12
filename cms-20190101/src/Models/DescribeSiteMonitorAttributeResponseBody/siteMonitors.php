<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSiteMonitorAttributeResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSiteMonitorAttributeResponseBody\siteMonitors\customSchedule;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSiteMonitorAttributeResponseBody\siteMonitors\ispCities;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSiteMonitorAttributeResponseBody\siteMonitors\optionJson;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSiteMonitorAttributeResponseBody\siteMonitors\vpcConfig;

class siteMonitors extends Model
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
     * @var customSchedule
     */
    public $customSchedule;

    /**
     * @var string
     */
    public $interval;

    /**
     * @var ispCities
     */
    public $ispCities;

    /**
     * @var optionJson
     */
    public $optionJson;

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
     * @var vpcConfig
     */
    public $vpcConfig;
    protected $_name = [
        'address' => 'Address',
        'agentGroup' => 'AgentGroup',
        'customSchedule' => 'CustomSchedule',
        'interval' => 'Interval',
        'ispCities' => 'IspCities',
        'optionJson' => 'OptionJson',
        'taskId' => 'TaskId',
        'taskName' => 'TaskName',
        'taskState' => 'TaskState',
        'taskType' => 'TaskType',
        'vpcConfig' => 'VpcConfig',
    ];

    public function validate()
    {
        if (null !== $this->customSchedule) {
            $this->customSchedule->validate();
        }
        if (null !== $this->ispCities) {
            $this->ispCities->validate();
        }
        if (null !== $this->optionJson) {
            $this->optionJson->validate();
        }
        if (null !== $this->vpcConfig) {
            $this->vpcConfig->validate();
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

        if (null !== $this->customSchedule) {
            $res['CustomSchedule'] = null !== $this->customSchedule ? $this->customSchedule->toArray($noStream) : $this->customSchedule;
        }

        if (null !== $this->interval) {
            $res['Interval'] = $this->interval;
        }

        if (null !== $this->ispCities) {
            $res['IspCities'] = null !== $this->ispCities ? $this->ispCities->toArray($noStream) : $this->ispCities;
        }

        if (null !== $this->optionJson) {
            $res['OptionJson'] = null !== $this->optionJson ? $this->optionJson->toArray($noStream) : $this->optionJson;
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

        if (null !== $this->vpcConfig) {
            $res['VpcConfig'] = null !== $this->vpcConfig ? $this->vpcConfig->toArray($noStream) : $this->vpcConfig;
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

        if (isset($map['VpcConfig'])) {
            $model->vpcConfig = vpcConfig::fromMap($map['VpcConfig']);
        }

        return $model;
    }
}
