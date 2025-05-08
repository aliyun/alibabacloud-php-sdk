<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Oos\V20190601\Models\ListTaskExecutionsResponseBody\taskExecutions;

class ListTaskExecutionsResponseBody extends Model
{
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
     * @var taskExecutions[]
     */
    public $taskExecutions;
    protected $_name = [
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'requestId' => 'RequestId',
        'taskExecutions' => 'TaskExecutions',
    ];

    public function validate()
    {
        if (\is_array($this->taskExecutions)) {
            Model::validateArray($this->taskExecutions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->taskExecutions) {
            if (\is_array($this->taskExecutions)) {
                $res['TaskExecutions'] = [];
                $n1 = 0;
                foreach ($this->taskExecutions as $item1) {
                    $res['TaskExecutions'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TaskExecutions'])) {
            if (!empty($map['TaskExecutions'])) {
                $model->taskExecutions = [];
                $n1 = 0;
                foreach ($map['TaskExecutions'] as $item1) {
                    $model->taskExecutions[$n1++] = taskExecutions::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
