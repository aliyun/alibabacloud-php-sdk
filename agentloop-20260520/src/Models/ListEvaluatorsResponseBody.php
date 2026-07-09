<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentLoop\V20260520\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\ListEvaluatorsResponseBody\evaluators;

class ListEvaluatorsResponseBody extends Model
{
    /**
     * @var evaluators[]
     */
    public $evaluators;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $total;
    protected $_name = [
        'evaluators' => 'evaluators',
        'maxResults' => 'maxResults',
        'nextToken' => 'nextToken',
        'requestId' => 'requestId',
        'total' => 'total',
    ];

    public function validate()
    {
        if (\is_array($this->evaluators)) {
            Model::validateArray($this->evaluators);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->evaluators) {
            if (\is_array($this->evaluators)) {
                $res['evaluators'] = [];
                $n1 = 0;
                foreach ($this->evaluators as $item1) {
                    $res['evaluators'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->maxResults) {
            $res['maxResults'] = $this->maxResults;
        }

        if (null !== $this->nextToken) {
            $res['nextToken'] = $this->nextToken;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->total) {
            $res['total'] = $this->total;
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
        if (isset($map['evaluators'])) {
            if (!empty($map['evaluators'])) {
                $model->evaluators = [];
                $n1 = 0;
                foreach ($map['evaluators'] as $item1) {
                    $model->evaluators[$n1] = evaluators::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['maxResults'])) {
            $model->maxResults = $map['maxResults'];
        }

        if (isset($map['nextToken'])) {
            $model->nextToken = $map['nextToken'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['total'])) {
            $model->total = $map['total'];
        }

        return $model;
    }
}
