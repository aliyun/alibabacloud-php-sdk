<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20180308\Models;

use AlibabaCloud\Dara\Model;

class ModifyTaskRequest extends Model
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
    public $alertRule;

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
    public $ispCity;

    /**
     * @var string
     */
    public $options;

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

    /**
     * @var string
     */
    public $caller;
    protected $_name = [
        'address' => 'Address',
        'alertIds' => 'AlertIds',
        'alertRule' => 'AlertRule',
        'interval' => 'Interval',
        'intervalUnit' => 'IntervalUnit',
        'ispCity' => 'IspCity',
        'options' => 'Options',
        'regionId' => 'RegionId',
        'taskId' => 'TaskId',
        'taskName' => 'TaskName',
        'caller' => 'caller',
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

        if (null !== $this->alertRule) {
            $res['AlertRule'] = $this->alertRule;
        }

        if (null !== $this->interval) {
            $res['Interval'] = $this->interval;
        }

        if (null !== $this->intervalUnit) {
            $res['IntervalUnit'] = $this->intervalUnit;
        }

        if (null !== $this->ispCity) {
            $res['IspCity'] = $this->ispCity;
        }

        if (null !== $this->options) {
            $res['Options'] = $this->options;
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

        if (null !== $this->caller) {
            $res['caller'] = $this->caller;
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

        if (isset($map['AlertRule'])) {
            $model->alertRule = $map['AlertRule'];
        }

        if (isset($map['Interval'])) {
            $model->interval = $map['Interval'];
        }

        if (isset($map['IntervalUnit'])) {
            $model->intervalUnit = $map['IntervalUnit'];
        }

        if (isset($map['IspCity'])) {
            $model->ispCity = $map['IspCity'];
        }

        if (isset($map['Options'])) {
            $model->options = $map['Options'];
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

        if (isset($map['caller'])) {
            $model->caller = $map['caller'];
        }

        return $model;
    }
}
