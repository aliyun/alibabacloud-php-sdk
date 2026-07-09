<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentLoop\V20260520\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\ListEvaluationTasksResponseBody\evaluationTasks;

class ListEvaluationTasksResponseBody extends Model
{
    /**
     * @var evaluationTasks[]
     */
    public $evaluationTasks;

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
    public $totalCount;
    protected $_name = [
        'evaluationTasks' => 'evaluationTasks',
        'maxResults' => 'maxResults',
        'nextToken' => 'nextToken',
        'requestId' => 'requestId',
        'totalCount' => 'totalCount',
    ];

    public function validate()
    {
        if (\is_array($this->evaluationTasks)) {
            Model::validateArray($this->evaluationTasks);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->evaluationTasks) {
            if (\is_array($this->evaluationTasks)) {
                $res['evaluationTasks'] = [];
                $n1 = 0;
                foreach ($this->evaluationTasks as $item1) {
                    $res['evaluationTasks'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        if (null !== $this->totalCount) {
            $res['totalCount'] = $this->totalCount;
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
        if (isset($map['evaluationTasks'])) {
            if (!empty($map['evaluationTasks'])) {
                $model->evaluationTasks = [];
                $n1 = 0;
                foreach ($map['evaluationTasks'] as $item1) {
                    $model->evaluationTasks[$n1] = evaluationTasks::fromMap($item1);
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

        if (isset($map['totalCount'])) {
            $model->totalCount = $map['totalCount'];
        }

        return $model;
    }
}
