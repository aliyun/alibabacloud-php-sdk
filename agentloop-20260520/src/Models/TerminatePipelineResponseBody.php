<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentLoop\V20260520\Models;

use AlibabaCloud\Dara\Model;

class TerminatePipelineResponseBody extends Model
{
    /**
     * @var string
     */
    public $agentSpaceName;

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

    /**
     * @var string
     */
    public $terminateTime;

    /**
     * @var string
     */
    public $terminatedReason;
    protected $_name = [
        'agentSpaceName' => 'agentSpaceName',
        'pipelineName' => 'pipelineName',
        'requestId' => 'requestId',
        'scheduleStatus' => 'scheduleStatus',
        'terminateTime' => 'terminateTime',
        'terminatedReason' => 'terminatedReason',
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

        if (null !== $this->pipelineName) {
            $res['pipelineName'] = $this->pipelineName;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->scheduleStatus) {
            $res['scheduleStatus'] = $this->scheduleStatus;
        }

        if (null !== $this->terminateTime) {
            $res['terminateTime'] = $this->terminateTime;
        }

        if (null !== $this->terminatedReason) {
            $res['terminatedReason'] = $this->terminatedReason;
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

        if (isset($map['pipelineName'])) {
            $model->pipelineName = $map['pipelineName'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['scheduleStatus'])) {
            $model->scheduleStatus = $map['scheduleStatus'];
        }

        if (isset($map['terminateTime'])) {
            $model->terminateTime = $map['terminateTime'];
        }

        if (isset($map['terminatedReason'])) {
            $model->terminatedReason = $map['terminatedReason'];
        }

        return $model;
    }
}
