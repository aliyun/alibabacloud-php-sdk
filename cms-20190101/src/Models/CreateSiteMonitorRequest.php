<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\Tea\Model;

class CreateSiteMonitorRequest extends Model
{
    /**
     * @description The URL or IP address that is monitored by the task.
     *
     * This parameter is required.
     * @example https://www.aliyun.com
     *
     * @var string
     */
    public $address;

    /**
     * @description The ID of the alert rule.
     *
     * For more information about how to obtain the ID of an alert rule, see [DescribeMetricRuleList](https://help.aliyun.com/document_detail/114941.html).
     * @example SystemDefault_acs_ecs_dashboard_InternetOutRate_Percent
     *
     * @var string
     */
    public $alertIds;

    /**
     * @description The custom detection period. You can only select a time period from Monday to Sunday for detection.
     *
     * @example {"start_hour":0,"end_hour":24, "days":[0], "time_zone":"Local"}
     *
     * @var string
     */
    public $customSchedule;

    /**
     * @description The interval at which detection requests are sent.
     *
     * Default value: 1.
     * @example 1
     *
     * @var string
     */
    public $interval;

    /**
     * @description The information of the detection points. If you leave this parameter empty, the system randomly selects three detection points.
     *
     * For information about how to obtain detection points, see [DescribeSiteMonitorISPCityList](https://help.aliyun.com/document_detail/115045.html).
     * @example [{"city":"546","isp":"465"},{"city":"572","isp":"465"},{"city":"738","isp":"465"}]
     *
     * @var string
     */
    public $ispCities;

    /**
     * @description The extended options of the protocol that is used by the site monitoring task. The options vary based on the protocol.
     *
     * @example {"time_out":5000}
     *
     * @var string
     */
    public $optionsJson;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @description The name of the site monitoring task.
     *
     * This parameter is required.
     * @example HanZhou_ECS1
     *
     * @var string
     */
    public $taskName;

    /**
     * @description The type of the site monitoring task.
     *
     * This parameter is required.
     * @example HTTPS
     *
     * @var string
     */
    public $taskType;

    /**
     * @var string
     */
    public $vpcConfig;
    protected $_name = [
        'address'        => 'Address',
        'alertIds'       => 'AlertIds',
        'customSchedule' => 'CustomSchedule',
        'interval'       => 'Interval',
        'ispCities'      => 'IspCities',
        'optionsJson'    => 'OptionsJson',
        'regionId'       => 'RegionId',
        'taskName'       => 'TaskName',
        'taskType'       => 'TaskType',
        'vpcConfig'      => 'VpcConfig',
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
        if (null !== $this->alertIds) {
            $res['AlertIds'] = $this->alertIds;
        }
        if (null !== $this->customSchedule) {
            $res['CustomSchedule'] = $this->customSchedule;
        }
        if (null !== $this->interval) {
            $res['Interval'] = $this->interval;
        }
        if (null !== $this->ispCities) {
            $res['IspCities'] = $this->ispCities;
        }
        if (null !== $this->optionsJson) {
            $res['OptionsJson'] = $this->optionsJson;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
        }
        if (null !== $this->taskType) {
            $res['TaskType'] = $this->taskType;
        }
        if (null !== $this->vpcConfig) {
            $res['VpcConfig'] = $this->vpcConfig;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateSiteMonitorRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Address'])) {
            $model->address = $map['Address'];
        }
        if (isset($map['AlertIds'])) {
            $model->alertIds = $map['AlertIds'];
        }
        if (isset($map['CustomSchedule'])) {
            $model->customSchedule = $map['CustomSchedule'];
        }
        if (isset($map['Interval'])) {
            $model->interval = $map['Interval'];
        }
        if (isset($map['IspCities'])) {
            $model->ispCities = $map['IspCities'];
        }
        if (isset($map['OptionsJson'])) {
            $model->optionsJson = $map['OptionsJson'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
        }
        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
        }
        if (isset($map['VpcConfig'])) {
            $model->vpcConfig = $map['VpcConfig'];
        }

        return $model;
    }
}
