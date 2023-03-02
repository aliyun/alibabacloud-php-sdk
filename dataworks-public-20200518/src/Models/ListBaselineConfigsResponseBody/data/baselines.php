<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListBaselineConfigsResponseBody\data;

use AlibabaCloud\Tea\Model;

class baselines extends Model
{
    /**
     * @description The ID of the baseline.
     *
     * @example 1234
     *
     * @var int
     */
    public $baselineId;

    /**
     * @description The name of the baseline.
     *
     * @var string
     */
    public $baselineName;

    /**
     * @description The type of the baseline. Valid values: DAILY and HOURLY. A value of DAILY indicates that the baseline is a day-level baseline. A value of HOURLY indicates that the baseline is an hour-level baseline.
     *
     * @example DAILY
     *
     * @var string
     */
    public $baselineType;

    /**
     * @description The hour in the alert time of the day-level baseline. Valid values: 0 to 47.
     *
     * @example 7
     *
     * @var int
     */
    public $expHour;

    /**
     * @description The minute in the alert time of the day-level baseline. Valid values: 0 to 59.
     *
     * @example 30
     *
     * @var int
     */
    public $expMinu;

    /**
     * @description The alert time of the hour-level baseline. This parameter is presented as key-value pairs in the JSON format. The key indicates the ID of the cycle, and the value is presented in the hh:mm format. Valid values of hh: 0 to 47. Valid values of mm: 0 to 59.
     *
     * @example {"1":"03:28","2":"04:28","3":"05:28","4":"06:28","5":"07:28","6":"08:28","7":"09:28","8":"10:28","9":"11:28","10":"12:28","11":"13:28","12":"14:28","13":"15:28","14":"16:28","15":"17:28","16":"18:28","17":"19:28","18":"20:28","19":"21:28","20":"22:28","21":"23:28","22":"24:28","23":"25:28","24":"26:28"}
     *
     * @var string
     */
    public $hourExpDetail;

    /**
     * @description The committed time of the hour-level baseline. This parameter is presented as key-value pairs in the JSON format. The key indicates the ID of the cycle, and the value is presented in the hh:mm format. Valid values of hh: 0 to 47. Valid values of mm: 0 to 59.
     *
     * @example {"1":"03:58","2":"04:58","3":"05:58","4":"06:58","5":"07:58","6":"08:58","7":"09:58","8":"10:58","9":"11:58","10":"12:58","11":"13:58","12":"14:58","13":"15:58","14":"16:58","15":"17:58","16":"18:58","17":"19:58","18":"20:58","19":"21:58","20":"22:58","21":"23:58","22":"24:58","23":"25:58","24":"26:58"}
     *
     * @var string
     */
    public $hourSlaDetail;

    /**
     * @description Indicates whether the baseline is a default baseline of the workspace. Valid values: true and false.
     *
     * @example true
     *
     * @var bool
     */
    public $isDefault;

    /**
     * @description The ID of the Alibaba Cloud account used by the baseline owner. Multiple IDs are separated by commas (,).
     *
     * @example 952795****
     *
     * @var string
     */
    public $owner;

    /**
     * @description The priority of the baseline. Valid values: 1, 3, 5, 7, and 8.
     *
     * @example 1
     *
     * @var int
     */
    public $priority;

    /**
     * @description The ID of the workspace to which the baseline belongs.
     *
     * @example 9527
     *
     * @var int
     */
    public $projectId;

    /**
     * @description The hour in the committed time of the day-level baseline. Valid values: 0 to 47.
     *
     * @example 9
     *
     * @var int
     */
    public $slaHour;

    /**
     * @description The minute in the alert time of the day-level baseline. Valid values: 0 to 59.
     *
     * @example 30
     *
     * @var int
     */
    public $slaMinu;

    /**
     * @description Indicates whether the baseline is enabled. Valid values: true and false.
     *
     * @example true
     *
     * @var bool
     */
    public $useFlag;
    protected $_name = [
        'baselineId'    => 'BaselineId',
        'baselineName'  => 'BaselineName',
        'baselineType'  => 'BaselineType',
        'expHour'       => 'ExpHour',
        'expMinu'       => 'ExpMinu',
        'hourExpDetail' => 'HourExpDetail',
        'hourSlaDetail' => 'HourSlaDetail',
        'isDefault'     => 'IsDefault',
        'owner'         => 'Owner',
        'priority'      => 'Priority',
        'projectId'     => 'ProjectId',
        'slaHour'       => 'SlaHour',
        'slaMinu'       => 'SlaMinu',
        'useFlag'       => 'UseFlag',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->baselineId) {
            $res['BaselineId'] = $this->baselineId;
        }
        if (null !== $this->baselineName) {
            $res['BaselineName'] = $this->baselineName;
        }
        if (null !== $this->baselineType) {
            $res['BaselineType'] = $this->baselineType;
        }
        if (null !== $this->expHour) {
            $res['ExpHour'] = $this->expHour;
        }
        if (null !== $this->expMinu) {
            $res['ExpMinu'] = $this->expMinu;
        }
        if (null !== $this->hourExpDetail) {
            $res['HourExpDetail'] = $this->hourExpDetail;
        }
        if (null !== $this->hourSlaDetail) {
            $res['HourSlaDetail'] = $this->hourSlaDetail;
        }
        if (null !== $this->isDefault) {
            $res['IsDefault'] = $this->isDefault;
        }
        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
        }
        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->slaHour) {
            $res['SlaHour'] = $this->slaHour;
        }
        if (null !== $this->slaMinu) {
            $res['SlaMinu'] = $this->slaMinu;
        }
        if (null !== $this->useFlag) {
            $res['UseFlag'] = $this->useFlag;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return baselines
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BaselineId'])) {
            $model->baselineId = $map['BaselineId'];
        }
        if (isset($map['BaselineName'])) {
            $model->baselineName = $map['BaselineName'];
        }
        if (isset($map['BaselineType'])) {
            $model->baselineType = $map['BaselineType'];
        }
        if (isset($map['ExpHour'])) {
            $model->expHour = $map['ExpHour'];
        }
        if (isset($map['ExpMinu'])) {
            $model->expMinu = $map['ExpMinu'];
        }
        if (isset($map['HourExpDetail'])) {
            $model->hourExpDetail = $map['HourExpDetail'];
        }
        if (isset($map['HourSlaDetail'])) {
            $model->hourSlaDetail = $map['HourSlaDetail'];
        }
        if (isset($map['IsDefault'])) {
            $model->isDefault = $map['IsDefault'];
        }
        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
        }
        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['SlaHour'])) {
            $model->slaHour = $map['SlaHour'];
        }
        if (isset($map['SlaMinu'])) {
            $model->slaMinu = $map['SlaMinu'];
        }
        if (isset($map['UseFlag'])) {
            $model->useFlag = $map['UseFlag'];
        }

        return $model;
    }
}
