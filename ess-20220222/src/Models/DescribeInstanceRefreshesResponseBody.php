<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ess\V20220222\Models\DescribeInstanceRefreshesResponseBody\instanceRefreshTasks;

class DescribeInstanceRefreshesResponseBody extends Model
{
    /**
     * @var instanceRefreshTasks[]
     */
    public $instanceRefreshTasks;

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
        'instanceRefreshTasks' => 'InstanceRefreshTasks',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->instanceRefreshTasks)) {
            Model::validateArray($this->instanceRefreshTasks);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceRefreshTasks) {
            if (\is_array($this->instanceRefreshTasks)) {
                $res['InstanceRefreshTasks'] = [];
                $n1 = 0;
                foreach ($this->instanceRefreshTasks as $item1) {
                    $res['InstanceRefreshTasks'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
        if (isset($map['InstanceRefreshTasks'])) {
            if (!empty($map['InstanceRefreshTasks'])) {
                $model->instanceRefreshTasks = [];
                $n1 = 0;
                foreach ($map['InstanceRefreshTasks'] as $item1) {
                    $model->instanceRefreshTasks[$n1++] = instanceRefreshTasks::fromMap($item1);
                }
            }
        }

        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
