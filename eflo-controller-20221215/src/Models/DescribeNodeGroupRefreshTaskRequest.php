<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models;

use AlibabaCloud\Dara\Model;

class DescribeNodeGroupRefreshTaskRequest extends Model
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
    public $nodeGroupRefreshTaskId;

    /**
     * @var string[]
     */
    public $nodeStatuses;
    protected $_name = [
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'nodeGroupRefreshTaskId' => 'NodeGroupRefreshTaskId',
        'nodeStatuses' => 'NodeStatuses',
    ];

    public function validate()
    {
        if (\is_array($this->nodeStatuses)) {
            Model::validateArray($this->nodeStatuses);
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

        if (null !== $this->nodeGroupRefreshTaskId) {
            $res['NodeGroupRefreshTaskId'] = $this->nodeGroupRefreshTaskId;
        }

        if (null !== $this->nodeStatuses) {
            if (\is_array($this->nodeStatuses)) {
                $res['NodeStatuses'] = [];
                $n1 = 0;
                foreach ($this->nodeStatuses as $item1) {
                    $res['NodeStatuses'][$n1] = $item1;
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
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['NodeGroupRefreshTaskId'])) {
            $model->nodeGroupRefreshTaskId = $map['NodeGroupRefreshTaskId'];
        }

        if (isset($map['NodeStatuses'])) {
            if (!empty($map['NodeStatuses'])) {
                $model->nodeStatuses = [];
                $n1 = 0;
                foreach ($map['NodeStatuses'] as $item1) {
                    $model->nodeStatuses[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
