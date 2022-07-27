<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models;

use AlibabaCloud\Tea\Model;

class ListExecutionLogsRequest extends Model
{
    /**
     * @var string
     */
    public $executionId;

    /**
     * @var string
     */
    public $logType;

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
    public $regionId;

    /**
     * @var string
     */
    public $taskExecutionId;
    protected $_name = [
        'executionId'     => 'ExecutionId',
        'logType'         => 'LogType',
        'maxResults'      => 'MaxResults',
        'nextToken'       => 'NextToken',
        'regionId'        => 'RegionId',
        'taskExecutionId' => 'TaskExecutionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->executionId) {
            $res['ExecutionId'] = $this->executionId;
        }
        if (null !== $this->logType) {
            $res['LogType'] = $this->logType;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->taskExecutionId) {
            $res['TaskExecutionId'] = $this->taskExecutionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListExecutionLogsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExecutionId'])) {
            $model->executionId = $map['ExecutionId'];
        }
        if (isset($map['LogType'])) {
            $model->logType = $map['LogType'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['TaskExecutionId'])) {
            $model->taskExecutionId = $map['TaskExecutionId'];
        }

        return $model;
    }
}
