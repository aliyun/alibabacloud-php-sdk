<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models;

use AlibabaCloud\SDK\Oos\V20190601\Models\ListExecutionLogsResponseBody\executionLogs;
use AlibabaCloud\Tea\Model;

class ListExecutionLogsResponseBody extends Model
{
    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var executionLogs[]
     */
    public $executionLogs;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var bool
     */
    public $isTruncated;
    protected $_name = [
        'nextToken'     => 'NextToken',
        'requestId'     => 'RequestId',
        'executionLogs' => 'ExecutionLogs',
        'maxResults'    => 'MaxResults',
        'isTruncated'   => 'IsTruncated',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->executionLogs) {
            $res['ExecutionLogs'] = [];
            if (null !== $this->executionLogs && \is_array($this->executionLogs)) {
                $n = 0;
                foreach ($this->executionLogs as $item) {
                    $res['ExecutionLogs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->isTruncated) {
            $res['IsTruncated'] = $this->isTruncated;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListExecutionLogsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ExecutionLogs'])) {
            if (!empty($map['ExecutionLogs'])) {
                $model->executionLogs = [];
                $n                    = 0;
                foreach ($map['ExecutionLogs'] as $item) {
                    $model->executionLogs[$n++] = null !== $item ? executionLogs::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['IsTruncated'])) {
            $model->isTruncated = $map['IsTruncated'];
        }

        return $model;
    }
}
