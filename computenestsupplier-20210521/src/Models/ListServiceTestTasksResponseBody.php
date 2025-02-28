<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\ListServiceTestTasksResponseBody\serviceTestTasks;

class ListServiceTestTasksResponseBody extends Model
{
    /**
     * @var int
     */
    public $count;
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
     * @var serviceTestTasks[]
     */
    public $serviceTestTasks;
    protected $_name = [
        'count'            => 'Count',
        'maxResults'       => 'MaxResults',
        'nextToken'        => 'NextToken',
        'requestId'        => 'RequestId',
        'serviceTestTasks' => 'ServiceTestTasks',
    ];

    public function validate()
    {
        if (\is_array($this->serviceTestTasks)) {
            Model::validateArray($this->serviceTestTasks);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->count) {
            $res['Count'] = $this->count;
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

        if (null !== $this->serviceTestTasks) {
            if (\is_array($this->serviceTestTasks)) {
                $res['ServiceTestTasks'] = [];
                $n1                      = 0;
                foreach ($this->serviceTestTasks as $item1) {
                    $res['ServiceTestTasks'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
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

        if (isset($map['ServiceTestTasks'])) {
            if (!empty($map['ServiceTestTasks'])) {
                $model->serviceTestTasks = [];
                $n1                      = 0;
                foreach ($map['ServiceTestTasks'] as $item1) {
                    $model->serviceTestTasks[$n1++] = serviceTestTasks::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
