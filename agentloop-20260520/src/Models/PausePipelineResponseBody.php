<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentLoop\V20260520\Models;

use AlibabaCloud\Dara\Model;

class PausePipelineResponseBody extends Model
{
    /**
     * @var string
     */
    public $agentSpaceName;

    /**
     * @var string
     */
    public $pauseTime;

    /**
     * @var string
     */
    public $pausedReason;

    /**
     * @var string
     */
    public $pipelineName;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $scheduleStatus;
    protected $_name = [
        'agentSpaceName' => 'agentSpaceName',
        'pauseTime' => 'pauseTime',
        'pausedReason' => 'pausedReason',
        'pipelineName' => 'pipelineName',
        'requestId' => 'requestId',
        'scheduleStatus' => 'scheduleStatus',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentSpaceName) {
            $res['agentSpaceName'] = $this->agentSpaceName;
        }

        if (null !== $this->pauseTime) {
            $res['pauseTime'] = $this->pauseTime;
        }

        if (null !== $this->pausedReason) {
            $res['pausedReason'] = $this->pausedReason;
        }

        if (null !== $this->pipelineName) {
            $res['pipelineName'] = $this->pipelineName;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->scheduleStatus) {
            $res['scheduleStatus'] = $this->scheduleStatus;
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
        if (isset($map['agentSpaceName'])) {
            $model->agentSpaceName = $map['agentSpaceName'];
        }

        if (isset($map['pauseTime'])) {
            $model->pauseTime = $map['pauseTime'];
        }

        if (isset($map['pausedReason'])) {
            $model->pausedReason = $map['pausedReason'];
        }

        if (isset($map['pipelineName'])) {
            $model->pipelineName = $map['pipelineName'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['scheduleStatus'])) {
            $model->scheduleStatus = $map['scheduleStatus'];
        }

        return $model;
    }
}
