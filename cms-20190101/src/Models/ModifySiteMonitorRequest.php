<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\Tea\Model;

class ModifySiteMonitorRequest extends Model
{
    /**
     * @description The URL or IP address that is monitored by the task.
     *
     * @example http://www.aliyun.com
     *
     * @var string
     */
    public $address;

    /**
     * @description The ID of the alert rule. You can call the DescribeMetricRuleList operation to query the IDs of existing alert rules in CloudMonitor. For more information, see [DescribeMetricRuleList](~~114941~~).
     *
     * @example 49f7c317-7645-4cc9-94fd-ea42e122****
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
     * @description The interval at which detection requests are sent. Valid values: 1, 5, and 15. Unit: minutes. Default value: 1.
     *
     * @example 1
     *
     * @var string
     */
    public $interval;

    /**
     * @description The unit of the metric.
     *
     * Unit: milliseconds.
     * @example ms
     *
     * @var string
     */
    public $intervalUnit;

    /**
     * @description The information of the detection points. The value is a JSON array. Example: `[{"city":"546","isp":"465"},{"city":"572","isp":"465"},{"city":"738","isp":"465"}]`. The values of the `city` field indicate Beijing, Hangzhou, and Qingdao.
     *
     * > You can call the DescribeSiteMonitorISPCityList operation to query the detection points. For more information, see [DescribeSiteMonitorISPCityList](~~115045~~). If you leave this parameter empty, the system randomly selects three detection points.
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
     * @description The ID of the site monitoring task.
     *
     * @example 2c8dbdf9-a3ab-46a1-85a4-f094965e****
     *
     * @var string
     */
    public $taskId;

    /**
     * @description The name of the site monitoring task. The name must be 4 to 100 characters in length, and can contain letters, digits, and underscores (\_).
     *
     * @example HanZhou_ECS2
     *
     * @var string
     */
    public $taskName;
    protected $_name = [
        'address'        => 'Address',
        'alertIds'       => 'AlertIds',
        'customSchedule' => 'CustomSchedule',
        'interval'       => 'Interval',
        'intervalUnit'   => 'IntervalUnit',
        'ispCities'      => 'IspCities',
        'optionsJson'    => 'OptionsJson',
        'regionId'       => 'RegionId',
        'taskId'         => 'TaskId',
        'taskName'       => 'TaskName',
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
        if (null !== $this->intervalUnit) {
            $res['IntervalUnit'] = $this->intervalUnit;
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
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifySiteMonitorRequest
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
        if (isset($map['IntervalUnit'])) {
            $model->intervalUnit = $map['IntervalUnit'];
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
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
        }

        return $model;
    }
}
