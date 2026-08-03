<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\GetAICoachDebugResultResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\GetAICoachDebugResultResponseBody\taskReport\deductionRule;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\GetAICoachDebugResultResponseBody\taskReport\expressiveness;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\GetAICoachDebugResultResponseBody\taskReport\point;

class taskReport extends Model
{
    /**
     * @var deductionRule
     */
    public $deductionRule;

    /**
     * @var expressiveness
     */
    public $expressiveness;

    /**
     * @var point
     */
    public $point;
    protected $_name = [
        'deductionRule' => 'deductionRule',
        'expressiveness' => 'expressiveness',
        'point' => 'point',
    ];

    public function validate()
    {
        if (null !== $this->deductionRule) {
            $this->deductionRule->validate();
        }
        if (null !== $this->expressiveness) {
            $this->expressiveness->validate();
        }
        if (null !== $this->point) {
            $this->point->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deductionRule) {
            $res['deductionRule'] = null !== $this->deductionRule ? $this->deductionRule->toArray($noStream) : $this->deductionRule;
        }

        if (null !== $this->expressiveness) {
            $res['expressiveness'] = null !== $this->expressiveness ? $this->expressiveness->toArray($noStream) : $this->expressiveness;
        }

        if (null !== $this->point) {
            $res['point'] = null !== $this->point ? $this->point->toArray($noStream) : $this->point;
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
        if (isset($map['deductionRule'])) {
            $model->deductionRule = deductionRule::fromMap($map['deductionRule']);
        }

        if (isset($map['expressiveness'])) {
            $model->expressiveness = expressiveness::fromMap($map['expressiveness']);
        }

        if (isset($map['point'])) {
            $model->point = point::fromMap($map['point']);
        }

        return $model;
    }
}
