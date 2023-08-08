<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\Tea\Model;

class CreateSiteMonitorRequest extends Model
{
    /**
     * @description The name of the site monitoring task.
     *
     * The name must be 4 to 100 characters in length, and can contain letters, digits, and underscores (\_).
     * @example https://www.aliyun.com
     *
     * @var string
     */
    public $address;

    /**
     * @description Indicates whether the existing alert rule was associated with the site monitoring task. Valid values:
     *
     *   true
     *   false
     *
     * @example SystemDefault_acs_ecs_dashboard_InternetOutRate_Percent
     *
     * @var string
     */
    public $alertIds;

    /**
     * @example {"start_hour":0,"end_hour":24, "days":[0], "time_zone":"Local"}
     *
     * @var string
     */
    public $customSchedule;

    /**
     * @description The operation that you want to perform. Set the value to **CreateSiteMonitor**.
     *
     * @example 1
     *
     * @var string
     */
    public $interval;

    /**
     * @description The information of the detection points. If you leave this parameter empty, the system randomly selects three detection points.
     *
     * For information about how to obtain detection points, see [DescribeSiteMonitorISPCityList](~~115045~~).
     * @example [{"city":"546","isp":"465"},{"city":"572","isp":"465"},{"city":"738","isp":"465"}]
     *
     * @var string
     */
    public $ispCities;

    /**
     * @description The returned message.
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
     * @description The HTTP status code.
     *
     * >  The status code 200 indicates that the call was successful.
     * @example HanZhou_ECS1
     *
     * @var string
     */
    public $taskName;

    /**
     * @description The ID of the alert rule.
     *
     * For information about how to obtain the ID of an alert rule, see [DescribeMetricRuleList](~~114941~~).
     * @example HTTPS
     *
     * @var string
     */
    public $taskType;
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

        return $model;
    }
}
