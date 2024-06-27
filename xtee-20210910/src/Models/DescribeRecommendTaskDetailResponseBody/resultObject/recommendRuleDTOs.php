<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeRecommendTaskDetailResponseBody\resultObject;

use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeRecommendTaskDetailResponseBody\resultObject\recommendRuleDTOs\recommendRules;
use AlibabaCloud\Tea\Model;

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
        'hitSample'         => 'hitSample',
        'id'                => 'id',
        'notHitSample'      => 'notHitSample',
        'recommendRules'    => 'recommendRules',
        'ruleId'            => 'ruleId',
        'ruleName'          => 'ruleName',
        'status'            => 'status',
        'velocities'        => 'velocities',
    ];

    public function validate()
    {
    }

    public function toMap()
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
            $res['recommendRules'] = [];
            if (null !== $this->recommendRules && \is_array($this->recommendRules)) {
                $n = 0;
                foreach ($this->recommendRules as $item) {
                    $res['recommendRules'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return recommendRuleDTOs
     */
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
                $n                     = 0;
                foreach ($map['recommendRules'] as $item) {
                    $model->recommendRules[$n++] = null !== $item ? recommendRules::fromMap($item) : $item;
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
