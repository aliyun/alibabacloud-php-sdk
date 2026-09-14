<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentLoop\V20260520\Models;

use AlibabaCloud\Dara\Model;

class ListPipelinesRequest extends Model
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
    public $pipelineName;

    /**
     * @var string
     */
    public $scheduleStatus;

    /**
     * @var string
     */
    public $scheduleType;

    /**
     * @var string
     */
    public $sinkName;
    protected $_name = [
        'maxResults' => 'maxResults',
        'nextToken' => 'nextToken',
        'pipelineName' => 'pipelineName',
        'scheduleStatus' => 'scheduleStatus',
        'scheduleType' => 'scheduleType',
        'sinkName' => 'sinkName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->maxResults) {
            $res['maxResults'] = $this->maxResults;
        }

        if (null !== $this->nextToken) {
            $res['nextToken'] = $this->nextToken;
        }

        if (null !== $this->pipelineName) {
            $res['pipelineName'] = $this->pipelineName;
        }

        if (null !== $this->scheduleStatus) {
            $res['scheduleStatus'] = $this->scheduleStatus;
        }

        if (null !== $this->scheduleType) {
            $res['scheduleType'] = $this->scheduleType;
        }

        if (null !== $this->sinkName) {
            $res['sinkName'] = $this->sinkName;
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
        if (isset($map['maxResults'])) {
            $model->maxResults = $map['maxResults'];
        }

        if (isset($map['nextToken'])) {
            $model->nextToken = $map['nextToken'];
        }

        if (isset($map['pipelineName'])) {
            $model->pipelineName = $map['pipelineName'];
        }

        if (isset($map['scheduleStatus'])) {
            $model->scheduleStatus = $map['scheduleStatus'];
        }

        if (isset($map['scheduleType'])) {
            $model->scheduleType = $map['scheduleType'];
        }

        if (isset($map['sinkName'])) {
            $model->sinkName = $map['sinkName'];
        }

        return $model;
    }
}
