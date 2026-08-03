<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\GetAICoachDebugResultResponseBody\taskReport\point;

use AlibabaCloud\Dara\Model;

class answerList extends Model
{
    /**
     * @var string[]
     */
    public $reason;

    /**
     * @var int
     */
    public $status;
    protected $_name = [
        'reason' => 'reason',
        'status' => 'status',
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

        if (null !== $this->status) {
            $res['status'] = $this->status;
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

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        return $model;
    }
}
