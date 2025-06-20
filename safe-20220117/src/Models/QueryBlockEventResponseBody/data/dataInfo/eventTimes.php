<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Safe\V20220117\Models\QueryBlockEventResponseBody\data\dataInfo;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Safe\V20220117\Models\QueryBlockEventResponseBody\data\dataInfo\eventTimes\rule;

class eventTimes extends Model
{
    /**
     * @var int
     */
    public $endTime;

    /**
     * @var string
     */
    public $express;

    /**
     * @var rule[]
     */
    public $rule;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var int
     */
    public $ruleId;
    protected $_name = [
        'endTime' => 'EndTime',
        'express' => 'Express',
        'rule' => 'Rule',
        'startTime' => 'StartTime',
        'ruleId' => 'ruleId',
    ];

    public function validate()
    {
        if (\is_array($this->rule)) {
            Model::validateArray($this->rule);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->express) {
            $res['Express'] = $this->express;
        }

        if (null !== $this->rule) {
            if (\is_array($this->rule)) {
                $res['Rule'] = [];
                $n1 = 0;
                foreach ($this->rule as $item1) {
                    $res['Rule'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->ruleId) {
            $res['ruleId'] = $this->ruleId;
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
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['Express'])) {
            $model->express = $map['Express'];
        }

        if (isset($map['Rule'])) {
            if (!empty($map['Rule'])) {
                $model->rule = [];
                $n1 = 0;
                foreach ($map['Rule'] as $item1) {
                    $model->rule[$n1] = rule::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['ruleId'])) {
            $model->ruleId = $map['ruleId'];
        }

        return $model;
    }
}
