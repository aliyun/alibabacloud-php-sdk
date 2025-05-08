<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Oos\V20190601\Models\ListResourceExecutionStatusResponseBody\resourceExecutionStatus;

class ListResourceExecutionStatusResponseBody extends Model
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
     * @var resourceExecutionStatus[]
     */
    public $resourceExecutionStatus;
    protected $_name = [
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'requestId' => 'RequestId',
        'resourceExecutionStatus' => 'ResourceExecutionStatus',
    ];

    public function validate()
    {
        if (\is_array($this->resourceExecutionStatus)) {
            Model::validateArray($this->resourceExecutionStatus);
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

        if (null !== $this->resourceExecutionStatus) {
            if (\is_array($this->resourceExecutionStatus)) {
                $res['ResourceExecutionStatus'] = [];
                $n1 = 0;
                foreach ($this->resourceExecutionStatus as $item1) {
                    $res['ResourceExecutionStatus'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        if (isset($map['ResourceExecutionStatus'])) {
            if (!empty($map['ResourceExecutionStatus'])) {
                $model->resourceExecutionStatus = [];
                $n1 = 0;
                foreach ($map['ResourceExecutionStatus'] as $item1) {
                    $model->resourceExecutionStatus[$n1++] = resourceExecutionStatus::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
