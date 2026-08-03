<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\GetAICoachDebugResultResponseBody\taskReport;

use AlibabaCloud\Dara\Model;

class expressiveness extends Model
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var string[]
     */
    public $reason;

    /**
     * @var int
     */
    public $scoreRounds;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $totalRounds;
    protected $_name = [
        'name' => 'name',
        'reason' => 'reason',
        'scoreRounds' => 'scoreRounds',
        'status' => 'status',
        'totalRounds' => 'totalRounds',
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

        if (null !== $this->scoreRounds) {
            $res['scoreRounds'] = $this->scoreRounds;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->totalRounds) {
            $res['totalRounds'] = $this->totalRounds;
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

        if (isset($map['scoreRounds'])) {
            $model->scoreRounds = $map['scoreRounds'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['totalRounds'])) {
            $model->totalRounds = $map['totalRounds'];
        }

        return $model;
    }
}
