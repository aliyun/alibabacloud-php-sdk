<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentLoop\V20260520\Models;

use AlibabaCloud\Dara\Model;

class ListEvaluationTasksRequest extends Model
{
    /**
     * @var string
     */
    public $agentSpace;

    /**
     * @var string
     */
    public $channel;

    /**
     * @var string
     */
    public $dataType;

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
    public $status;

    /**
     * @var string
     */
    public $taskMode;

    /**
     * @var string
     */
    public $taskName;
    protected $_name = [
        'agentSpace' => 'agentSpace',
        'channel' => 'channel',
        'dataType' => 'dataType',
        'maxResults' => 'maxResults',
        'nextToken' => 'nextToken',
        'status' => 'status',
        'taskMode' => 'taskMode',
        'taskName' => 'taskName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentSpace) {
            $res['agentSpace'] = $this->agentSpace;
        }

        if (null !== $this->channel) {
            $res['channel'] = $this->channel;
        }

        if (null !== $this->dataType) {
            $res['dataType'] = $this->dataType;
        }

        if (null !== $this->maxResults) {
            $res['maxResults'] = $this->maxResults;
        }

        if (null !== $this->nextToken) {
            $res['nextToken'] = $this->nextToken;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->taskMode) {
            $res['taskMode'] = $this->taskMode;
        }

        if (null !== $this->taskName) {
            $res['taskName'] = $this->taskName;
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
        if (isset($map['agentSpace'])) {
            $model->agentSpace = $map['agentSpace'];
        }

        if (isset($map['channel'])) {
            $model->channel = $map['channel'];
        }

        if (isset($map['dataType'])) {
            $model->dataType = $map['dataType'];
        }

        if (isset($map['maxResults'])) {
            $model->maxResults = $map['maxResults'];
        }

        if (isset($map['nextToken'])) {
            $model->nextToken = $map['nextToken'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['taskMode'])) {
            $model->taskMode = $map['taskMode'];
        }

        if (isset($map['taskName'])) {
            $model->taskName = $map['taskName'];
        }

        return $model;
    }
}
