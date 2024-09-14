<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models;

use AlibabaCloud\Tea\Model;

class PeriodicSchedulingPolicy extends Model
{
    /**
     * @var bool
     */
    public $isFinished;

    /**
     * @example 1723195800000
     *
     * @var int
     */
    public $onlyOnceTriggerTime;

    /**
     * @example true
     *
     * @var bool
     */
    public $onlyOnceTriggerTimeIsExpired;

    /**
     * @example DAY
     *
     * @var string
     */
    public $periodicSchedulingLevel;

    /**
     * @var int[]
     */
    public $periodicSchedulingValues;

    /**
     * @example 1723199340000
     *
     * @var int
     */
    public $periodicTriggerTime;

    /**
     * @var BriefResourceSetting
     */
    public $resourceSetting;
    protected $_name = [
        'isFinished'                   => 'isFinished',
        'onlyOnceTriggerTime'          => 'onlyOnceTriggerTime',
        'onlyOnceTriggerTimeIsExpired' => 'onlyOnceTriggerTimeIsExpired',
        'periodicSchedulingLevel'      => 'periodicSchedulingLevel',
        'periodicSchedulingValues'     => 'periodicSchedulingValues',
        'periodicTriggerTime'          => 'periodicTriggerTime',
        'resourceSetting'              => 'resourceSetting',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->isFinished) {
            $res['isFinished'] = $this->isFinished;
        }
        if (null !== $this->onlyOnceTriggerTime) {
            $res['onlyOnceTriggerTime'] = $this->onlyOnceTriggerTime;
        }
        if (null !== $this->onlyOnceTriggerTimeIsExpired) {
            $res['onlyOnceTriggerTimeIsExpired'] = $this->onlyOnceTriggerTimeIsExpired;
        }
        if (null !== $this->periodicSchedulingLevel) {
            $res['periodicSchedulingLevel'] = $this->periodicSchedulingLevel;
        }
        if (null !== $this->periodicSchedulingValues) {
            $res['periodicSchedulingValues'] = $this->periodicSchedulingValues;
        }
        if (null !== $this->periodicTriggerTime) {
            $res['periodicTriggerTime'] = $this->periodicTriggerTime;
        }
        if (null !== $this->resourceSetting) {
            $res['resourceSetting'] = null !== $this->resourceSetting ? $this->resourceSetting->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PeriodicSchedulingPolicy
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['isFinished'])) {
            $model->isFinished = $map['isFinished'];
        }
        if (isset($map['onlyOnceTriggerTime'])) {
            $model->onlyOnceTriggerTime = $map['onlyOnceTriggerTime'];
        }
        if (isset($map['onlyOnceTriggerTimeIsExpired'])) {
            $model->onlyOnceTriggerTimeIsExpired = $map['onlyOnceTriggerTimeIsExpired'];
        }
        if (isset($map['periodicSchedulingLevel'])) {
            $model->periodicSchedulingLevel = $map['periodicSchedulingLevel'];
        }
        if (isset($map['periodicSchedulingValues'])) {
            if (!empty($map['periodicSchedulingValues'])) {
                $model->periodicSchedulingValues = $map['periodicSchedulingValues'];
            }
        }
        if (isset($map['periodicTriggerTime'])) {
            $model->periodicTriggerTime = $map['periodicTriggerTime'];
        }
        if (isset($map['resourceSetting'])) {
            $model->resourceSetting = BriefResourceSetting::fromMap($map['resourceSetting']);
        }

        return $model;
    }
}
