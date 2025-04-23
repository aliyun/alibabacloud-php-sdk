<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\SubmitServerlessJobRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\EHPC\V20180412\Models\SubmitServerlessJobRequest\retryStrategy\evaluateOnExit;

class retryStrategy extends Model
{
    /**
     * @var int
     */
    public $attempts;

    /**
     * @var evaluateOnExit[]
     */
    public $evaluateOnExit;
    protected $_name = [
        'attempts' => 'Attempts',
        'evaluateOnExit' => 'EvaluateOnExit',
    ];

    public function validate()
    {
        if (\is_array($this->evaluateOnExit)) {
            Model::validateArray($this->evaluateOnExit);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->attempts) {
            $res['Attempts'] = $this->attempts;
        }

        if (null !== $this->evaluateOnExit) {
            if (\is_array($this->evaluateOnExit)) {
                $res['EvaluateOnExit'] = [];
                $n1 = 0;
                foreach ($this->evaluateOnExit as $item1) {
                    $res['EvaluateOnExit'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Attempts'])) {
            $model->attempts = $map['Attempts'];
        }

        if (isset($map['EvaluateOnExit'])) {
            if (!empty($map['EvaluateOnExit'])) {
                $model->evaluateOnExit = [];
                $n1 = 0;
                foreach ($map['EvaluateOnExit'] as $item1) {
                    $model->evaluateOnExit[$n1++] = evaluateOnExit::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
