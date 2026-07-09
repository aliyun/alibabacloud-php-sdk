<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentLoop\V20260520\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\GetEvaluatorResponseBody\evaluator;

class GetEvaluatorResponseBody extends Model
{
    /**
     * @var evaluator
     */
    public $evaluator;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'evaluator' => 'evaluator',
        'requestId' => 'requestId',
    ];

    public function validate()
    {
        if (null !== $this->evaluator) {
            $this->evaluator->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->evaluator) {
            $res['evaluator'] = null !== $this->evaluator ? $this->evaluator->toArray($noStream) : $this->evaluator;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
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
        if (isset($map['evaluator'])) {
            $model->evaluator = evaluator::fromMap($map['evaluator']);
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}
