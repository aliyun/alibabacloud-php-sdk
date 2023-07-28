<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models;

use AlibabaCloud\SDK\Oos\V20190601\Models\ListResourceExecutionStatusResponseBody\resourceExecutionStatus;
use AlibabaCloud\Tea\Model;

class ListResourceExecutionStatusResponseBody extends Model
{
    /**
     * @description The number of entries returned on each page.
     *
     * @example 50
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The pagination token that is used in the next request to retrieve a new page of results.
     *
     * @example MTRBMDc0NjAtRUJFNy00N0NBLTk3NTctMTJDQzQ
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The ID of the request.
     *
     * @example ED571CBD-9F96-419D-B919-CF340BBCA157
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The execution information of the resource.
     *
     * @var resourceExecutionStatus[]
     */
    public $resourceExecutionStatus;
    protected $_name = [
        'maxResults'              => 'MaxResults',
        'nextToken'               => 'NextToken',
        'requestId'               => 'RequestId',
        'resourceExecutionStatus' => 'ResourceExecutionStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
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
            $res['ResourceExecutionStatus'] = [];
            if (null !== $this->resourceExecutionStatus && \is_array($this->resourceExecutionStatus)) {
                $n = 0;
                foreach ($this->resourceExecutionStatus as $item) {
                    $res['ResourceExecutionStatus'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListResourceExecutionStatusResponseBody
     */
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
                $n                              = 0;
                foreach ($map['ResourceExecutionStatus'] as $item) {
                    $model->resourceExecutionStatus[$n++] = null !== $item ? resourceExecutionStatus::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
