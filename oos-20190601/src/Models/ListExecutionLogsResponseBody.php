<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models;

use AlibabaCloud\SDK\Oos\V20190601\Models\ListExecutionLogsResponseBody\executionLogs;
use AlibabaCloud\Tea\Model;

class ListExecutionLogsResponseBody extends Model
{
    /**
     * @description The logs of the execution.
     *
     * @var executionLogs[]
     */
    public $executionLogs;

    /**
     * @description Indicates whether the log is truncated.
     *
     * @example true
     *
     * @var bool
     */
    public $isTruncated;

    /**
     * @description The number of entries per page.
     *
     * @example 50
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description A pagination token. It can be used in the next request to retrieve a new page of results.
     *
     * @example gAAAAABdpsGWjX8dJ-a6dl_pvoS7AFxNHSNJKHLCAJJ0ylgA53nWW5V4HTEZKCYTaEPNOrxFir4z43UTOjE150cFr8AGTifA==
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The request ID.
     *
     * @example 14A07460-EBE7-47CA-9757-12CC4761D47A
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'executionLogs' => 'ExecutionLogs',
        'isTruncated'   => 'IsTruncated',
        'maxResults'    => 'MaxResults',
        'nextToken'     => 'NextToken',
        'requestId'     => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->executionLogs) {
            $res['ExecutionLogs'] = [];
            if (null !== $this->executionLogs && \is_array($this->executionLogs)) {
                $n = 0;
                foreach ($this->executionLogs as $item) {
                    $res['ExecutionLogs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->isTruncated) {
            $res['IsTruncated'] = $this->isTruncated;
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
        if (isset($map['ExecutionLogs'])) {
            if (!empty($map['ExecutionLogs'])) {
                $model->executionLogs = [];
                $n                    = 0;
                foreach ($map['ExecutionLogs'] as $item) {
                    $model->executionLogs[$n++] = null !== $item ? executionLogs::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['IsTruncated'])) {
            $model->isTruncated = $map['IsTruncated'];
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

        return $model;
    }
}
