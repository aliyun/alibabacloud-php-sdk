<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Dara\Model;

class CreateOrUpdateSilencePolicyRequest extends Model
{
    /**
     * @var string
     */
    public $effectiveTimeType;
    /**
     * @var int
     */
    public $id;
    /**
     * @var string
     */
    public $matchingRules;
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $regionId;
    /**
     * @var string
     */
    public $state;
    /**
     * @var string
     */
    public $timePeriod;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
