<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Milvus\V20231012\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Milvus\V20231012\Models\ScalingRule\adjustInfos;

class ScalingRule extends Model
{
    /**
     * @var adjustInfos[]
     */
    public $adjustInfos;

    /**
     * @var string
     */
    public $cronStr;

    /**
     * @var bool
     */
    public $disabled;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var string
     */
    public $ruleId;

    /**
     * @var string
     */
    public $scalingRuleName;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var string
     */
    public $timeZone;
    protected $_name = [
        'adjustInfos' => 'adjustInfos',
        'cronStr' => 'cronStr',
        'disabled' => 'disabled',
        'endTime' => 'endTime',
        'ruleId' => 'ruleId',
        'scalingRuleName' => 'scalingRuleName',
        'startTime' => 'startTime',
        'timeZone' => 'timeZone',
    ];

    public function validate()
    {
        if (\is_array($this->adjustInfos)) {
            Model::validateArray($this->adjustInfos);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->adjustInfos) {
            if (\is_array($this->adjustInfos)) {
                $res['adjustInfos'] = [];
                $n1 = 0;
                foreach ($this->adjustInfos as $item1) {
                    $res['adjustInfos'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->cronStr) {
            $res['cronStr'] = $this->cronStr;
        }

        if (null !== $this->disabled) {
            $res['disabled'] = $this->disabled;
        }

        if (null !== $this->endTime) {
            $res['endTime'] = $this->endTime;
        }

        if (null !== $this->ruleId) {
            $res['ruleId'] = $this->ruleId;
        }

        if (null !== $this->scalingRuleName) {
            $res['scalingRuleName'] = $this->scalingRuleName;
        }

        if (null !== $this->startTime) {
            $res['startTime'] = $this->startTime;
        }

        if (null !== $this->timeZone) {
            $res['timeZone'] = $this->timeZone;
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
        if (isset($map['adjustInfos'])) {
            if (!empty($map['adjustInfos'])) {
                $model->adjustInfos = [];
                $n1 = 0;
                foreach ($map['adjustInfos'] as $item1) {
                    $model->adjustInfos[$n1] = adjustInfos::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['cronStr'])) {
            $model->cronStr = $map['cronStr'];
        }

        if (isset($map['disabled'])) {
            $model->disabled = $map['disabled'];
        }

        if (isset($map['endTime'])) {
            $model->endTime = $map['endTime'];
        }

        if (isset($map['ruleId'])) {
            $model->ruleId = $map['ruleId'];
        }

        if (isset($map['scalingRuleName'])) {
            $model->scalingRuleName = $map['scalingRuleName'];
        }

        if (isset($map['startTime'])) {
            $model->startTime = $map['startTime'];
        }

        if (isset($map['timeZone'])) {
            $model->timeZone = $map['timeZone'];
        }

        return $model;
    }
}
