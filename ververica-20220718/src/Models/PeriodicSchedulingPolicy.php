<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models;

use AlibabaCloud\Dara\Model;

class PeriodicSchedulingPolicy extends Model
{
    /**
     * @var bool
     */
    public $isFinished;
    /**
     * @var int
     */
    public $onlyOnceTriggerTime;
    /**
     * @var bool
     */
    public $onlyOnceTriggerTimeIsExpired;
    /**
     * @var string
     */
    public $periodicSchedulingLevel;
    /**
     * @var int[]
     */
    public $periodicSchedulingValues;
    /**
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
        if (\is_array($this->periodicSchedulingValues)) {
            Model::validateArray($this->periodicSchedulingValues);
        }
        if (null !== $this->resourceSetting) {
            $this->resourceSetting->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->periodicSchedulingValues)) {
                $res['periodicSchedulingValues'] = [];
                $n1                              = 0;
                foreach ($this->periodicSchedulingValues as $item1) {
                    $res['periodicSchedulingValues'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->periodicTriggerTime) {
            $res['periodicTriggerTime'] = $this->periodicTriggerTime;
        }

        if (null !== $this->resourceSetting) {
            $res['resourceSetting'] = null !== $this->resourceSetting ? $this->resourceSetting->toArray($noStream) : $this->resourceSetting;
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
                $model->periodicSchedulingValues = [];
                $n1                              = 0;
                foreach ($map['periodicSchedulingValues'] as $item1) {
                    $model->periodicSchedulingValues[$n1++] = $item1;
                }
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
