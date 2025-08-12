<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\Dara\Model;

class ModifySiteMonitorRequest extends Model
{
    /**
     * @var string
     */
    public $address;

    /**
     * @var string
     */
    public $alertIds;

    /**
     * @var string
     */
    public $customSchedule;

    /**
     * @var string
     */
    public $interval;

    /**
     * @var string
     */
    public $intervalUnit;

    /**
     * @var string
     */
    public $ispCities;

    /**
     * @var string
     */
    public $optionsJson;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var string
     */
    public $taskName;
    protected $_name = [
        'address' => 'Address',
        'alertIds' => 'AlertIds',
        'customSchedule' => 'CustomSchedule',
        'interval' => 'Interval',
        'intervalUnit' => 'IntervalUnit',
        'ispCities' => 'IspCities',
        'optionsJson' => 'OptionsJson',
        'regionId' => 'RegionId',
        'taskId' => 'TaskId',
        'taskName' => 'TaskName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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
