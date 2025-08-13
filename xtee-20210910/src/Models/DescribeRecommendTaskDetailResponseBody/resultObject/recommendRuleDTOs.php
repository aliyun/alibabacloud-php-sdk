<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeRecommendTaskDetailResponseBody\resultObject;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeRecommendTaskDetailResponseBody\resultObject\recommendRuleDTOs\recommendRules;

class recommendRuleDTOs extends Model
{
    /**
     * @var string
     */
    public $computeExpression;

    /**
     * @var int
     */
    public $hitSample;

    /**
     * @var int
     */
    public $id;

    /**
     * @var int
     */
    public $notHitSample;

    /**
     * @var recommendRules[]
     */
    public $recommendRules;

    /**
     * @var string
     */
    public $ruleId;

    /**
     * @var string
     */
    public $ruleName;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $velocities;
    protected $_name = [
        'computeExpression' => 'computeExpression',
        'hitSample' => 'hitSample',
        'id' => 'id',
        'notHitSample' => 'notHitSample',
        'recommendRules' => 'recommendRules',
        'ruleId' => 'ruleId',
        'ruleName' => 'ruleName',
        'status' => 'status',
        'velocities' => 'velocities',
    ];

    public function validate()
    {
        if (\is_array($this->recommendRules)) {
            Model::validateArray($this->recommendRules);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->computeExpression) {
            $res['computeExpression'] = $this->computeExpression;
        }

        if (null !== $this->hitSample) {
            $res['hitSample'] = $this->hitSample;
        }

        if (null !== $this->id) {
            $res['id'] = $this->id;
        }

        if (null !== $this->notHitSample) {
            $res['notHitSample'] = $this->notHitSample;
        }

        if (null !== $this->recommendRules) {
            if (\is_array($this->recommendRules)) {
                $res['recommendRules'] = [];
                $n1 = 0;
                foreach ($this->recommendRules as $item1) {
                    $res['recommendRules'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->ruleId) {
            $res['ruleId'] = $this->ruleId;
        }

        if (null !== $this->ruleName) {
            $res['ruleName'] = $this->ruleName;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->velocities) {
            $res['velocities'] = $this->velocities;
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
        if (isset($map['computeExpression'])) {
            $model->computeExpression = $map['computeExpression'];
        }

        if (isset($map['hitSample'])) {
            $model->hitSample = $map['hitSample'];
        }

        if (isset($map['id'])) {
            $model->id = $map['id'];
        }

        if (isset($map['notHitSample'])) {
            $model->notHitSample = $map['notHitSample'];
        }

        if (isset($map['recommendRules'])) {
            if (!empty($map['recommendRules'])) {
                $model->recommendRules = [];
                $n1 = 0;
                foreach ($map['recommendRules'] as $item1) {
                    $model->recommendRules[$n1] = recommendRules::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ruleId'])) {
            $model->ruleId = $map['ruleId'];
        }

        if (isset($map['ruleName'])) {
            $model->ruleName = $map['ruleName'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['velocities'])) {
            $model->velocities = $map['velocities'];
        }

        return $model;
    }
}
