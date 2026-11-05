<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SysOM\V20231230\Models;

use AlibabaCloud\Dara\Model;

class ListCopilotSessionsRequest extends Model
{
    /**
     * @var string
     */
    public $agentId;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var int
     */
    public $scheduledTaskId;

    /**
     * @var string
     */
    public $sessionType;
    protected $_name = [
        'agentId' => 'agentId',
        'maxResults' => 'maxResults',
        'nextToken' => 'nextToken',
        'scheduledTaskId' => 'scheduledTaskId',
        'sessionType' => 'sessionType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentId) {
            $res['agentId'] = $this->agentId;
        }

        if (null !== $this->maxResults) {
            $res['maxResults'] = $this->maxResults;
        }

        if (null !== $this->nextToken) {
            $res['nextToken'] = $this->nextToken;
        }

        if (null !== $this->scheduledTaskId) {
            $res['scheduledTaskId'] = $this->scheduledTaskId;
        }

        if (null !== $this->sessionType) {
            $res['sessionType'] = $this->sessionType;
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
        if (isset($map['agentId'])) {
            $model->agentId = $map['agentId'];
        }

        if (isset($map['maxResults'])) {
            $model->maxResults = $map['maxResults'];
        }

        if (isset($map['nextToken'])) {
            $model->nextToken = $map['nextToken'];
        }

        if (isset($map['scheduledTaskId'])) {
            $model->scheduledTaskId = $map['scheduledTaskId'];
        }

        if (isset($map['sessionType'])) {
            $model->sessionType = $map['sessionType'];
        }

        return $model;
    }
}
