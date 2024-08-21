<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class CreateOrUpdateSilencePolicyRequest extends Model
{
    /**
     * @description The effective duration of the silence policy. Valid values: PERMANENT, CUSTOM_TIME, and CYCLE_EFFECT.
     *
     * @example PERMANENT
     *
     * @var string
     */
    public $effectiveTimeType;

    /**
     * @description The ID of the silence policy.
     *
     *   If you do not configure this parameter, a new silence policy is created.
     *   If you configure this parameter, the specified silence policy is modified.
     *
     * @example 1234
     *
     * @var int
     */
    public $id;

    /**
     * @description The matching rules. The following code shows the format of matching rules:
     *
     * ]
     * @example [ 	 { 	 "matchingConditions": [ 	 { 	 "value": "test", 	 "key": "altertname", 	 "operator": "eq" 	 } 	 ]      } 	 ]
     *
     * @var string
     */
    public $matchingRules;

    /**
     * @description The name of the silence policy.
     *
     * This parameter is required.
     * @example silencepolicy_test
     *
     * @var string
     */
    public $name;

    /**
     * @description The ID of the region.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description Specifies whether to enable the silence policy. Valid values: enable and disable.
     *
     * @example enable
     *
     * @var string
     */
    public $state;

    /**
     * @description The recurring period. This parameter is required when EffectiveTimeType is set to CYCLE_EFFECT. DAY: The silence policy is effective by day. WEEK: The silence policy is effective by week.
     *
     * @example DAY
     *
     * @var string
     */
    public $timePeriod;

    /**
     * @description The time period during which the silence policy is effective. If you set EffectiveTimeType to CUSTOM_TIME, specify a custom time period in the following format: [{"startTime":"2024-08-04 22:13","endTime":"2024-08-04 22:21"}] If you set EffectiveTimeType to CYCLE_EFFECT and TimePeriod to DAY, specify a custom time period in the following format: [{"startTime":"22:13","endTime":"22:21"}]. The start time cannot be later than the end time. If you set EffectiveTimeType to CYCLE_EFFECT and TimePeriod to WEEK, specify a custom time period in the following format: [{"startWeek":"1", "endWeek":"2" "startTime":"22:13","endTime":"22:21"}]. Valid values of startWeek and endWeek: 1 to 7. The start time cannot be later than the end time.
     *
     * @example [{"startTime":"2024-08-04 22:13","endTime":"2024-08-04 22:21"}]
     *
     * @var string
     */
    public $timeSlots;
    protected $_name = [
        'effectiveTimeType' => 'EffectiveTimeType',
        'id'                => 'Id',
        'matchingRules'     => 'MatchingRules',
        'name'              => 'Name',
        'regionId'          => 'RegionId',
        'state'             => 'State',
        'timePeriod'        => 'TimePeriod',
        'timeSlots'         => 'TimeSlots',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->effectiveTimeType) {
            $res['EffectiveTimeType'] = $this->effectiveTimeType;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->matchingRules) {
            $res['MatchingRules'] = $this->matchingRules;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->timePeriod) {
            $res['TimePeriod'] = $this->timePeriod;
        }
        if (null !== $this->timeSlots) {
            $res['TimeSlots'] = $this->timeSlots;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateOrUpdateSilencePolicyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EffectiveTimeType'])) {
            $model->effectiveTimeType = $map['EffectiveTimeType'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['MatchingRules'])) {
            $model->matchingRules = $map['MatchingRules'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['TimePeriod'])) {
            $model->timePeriod = $map['TimePeriod'];
        }
        if (isset($map['TimeSlots'])) {
            $model->timeSlots = $map['TimeSlots'];
        }

        return $model;
    }
}
