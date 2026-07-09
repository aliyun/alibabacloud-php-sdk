<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentLoop\V20260520\Models;

use AlibabaCloud\Dara\Model;

class ResumePipelineResponseBody extends Model
{
    /**
     * @var string
     */
    public $agentSpaceName;

    /**
     * @var int
     */
    public $committedWatermark;

    /**
     * @var int
     */
    public $nextTriggerTime;

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
        'committedWatermark' => 'committedWatermark',
        'nextTriggerTime' => 'nextTriggerTime',
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

        if (null !== $this->committedWatermark) {
            $res['committedWatermark'] = $this->committedWatermark;
        }

        if (null !== $this->nextTriggerTime) {
            $res['nextTriggerTime'] = $this->nextTriggerTime;
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

        if (isset($map['committedWatermark'])) {
            $model->committedWatermark = $map['committedWatermark'];
        }

        if (isset($map['nextTriggerTime'])) {
            $model->nextTriggerTime = $map['nextTriggerTime'];
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
