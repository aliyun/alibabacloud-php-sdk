<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\ListNodeGroupRefreshTasksResponseBody\nodeGroupRefreshTasks;

class ListNodeGroupRefreshTasksResponseBody extends Model
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
     * @var nodeGroupRefreshTasks[]
     */
    public $nodeGroupRefreshTasks;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'nodeGroupRefreshTasks' => 'NodeGroupRefreshTasks',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->nodeGroupRefreshTasks)) {
            Model::validateArray($this->nodeGroupRefreshTasks);
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

        if (null !== $this->nodeGroupRefreshTasks) {
            if (\is_array($this->nodeGroupRefreshTasks)) {
                $res['NodeGroupRefreshTasks'] = [];
                $n1 = 0;
                foreach ($this->nodeGroupRefreshTasks as $item1) {
                    $res['NodeGroupRefreshTasks'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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

        if (isset($map['NodeGroupRefreshTasks'])) {
            if (!empty($map['NodeGroupRefreshTasks'])) {
                $model->nodeGroupRefreshTasks = [];
                $n1 = 0;
                foreach ($map['NodeGroupRefreshTasks'] as $item1) {
                    $model->nodeGroupRefreshTasks[$n1] = nodeGroupRefreshTasks::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
