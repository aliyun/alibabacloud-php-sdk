<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\Dara\Model;

class CreateSiteMonitorRequest extends Model
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
    public $taskName;

    /**
     * @var string
     */
    public $taskType;

    /**
     * @var string
     */
    public $vpcConfig;
    protected $_name = [
        'address' => 'Address',
        'alertIds' => 'AlertIds',
        'customSchedule' => 'CustomSchedule',
        'interval' => 'Interval',
        'ispCities' => 'IspCities',
        'optionsJson' => 'OptionsJson',
        'regionId' => 'RegionId',
        'taskName' => 'TaskName',
        'taskType' => 'TaskType',
        'vpcConfig' => 'VpcConfig',
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
