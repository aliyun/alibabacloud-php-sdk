<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Oos\V20190601\Models\ListExecutionLogsResponseBody\executionLogs;

class ListExecutionLogsResponseBody extends Model
{
    /**
     * @var executionLogs[]
     */
    public $executionLogs;

    /**
     * @var bool
     */
    public $isTruncated;

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
    protected $_name = [
        'executionLogs' => 'ExecutionLogs',
        'isTruncated' => 'IsTruncated',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->executionLogs)) {
            Model::validateArray($this->executionLogs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->executionLogs) {
            if (\is_array($this->executionLogs)) {
                $res['ExecutionLogs'] = [];
                $n1 = 0;
                foreach ($this->executionLogs as $item1) {
                    $res['ExecutionLogs'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExecutionLogs'])) {
            if (!empty($map['ExecutionLogs'])) {
                $model->executionLogs = [];
                $n1 = 0;
                foreach ($map['ExecutionLogs'] as $item1) {
                    $model->executionLogs[$n1] = executionLogs::fromMap($item1);
                    ++$n1;
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
