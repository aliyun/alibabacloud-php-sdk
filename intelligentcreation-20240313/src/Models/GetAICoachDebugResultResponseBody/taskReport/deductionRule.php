<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\GetAICoachDebugResultResponseBody\taskReport;

use AlibabaCloud\Dara\Model;

class deductionRule extends Model
{
    /**
     * @var bool
     */
    public $hit;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string[]
     */
    public $reason;
    protected $_name = [
        'hit' => 'hit',
        'name' => 'name',
        'reason' => 'reason',
    ];

    public function validate()
    {
        if (\is_array($this->reason)) {
            Model::validateArray($this->reason);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->hit) {
            $res['hit'] = $this->hit;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->reason) {
            if (\is_array($this->reason)) {
                $res['reason'] = [];
                $n1 = 0;
                foreach ($this->reason as $item1) {
                    $res['reason'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['hit'])) {
            $model->hit = $map['hit'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['reason'])) {
            if (!empty($map['reason'])) {
                $model->reason = [];
                $n1 = 0;
                foreach ($map['reason'] as $item1) {
                    $model->reason[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
