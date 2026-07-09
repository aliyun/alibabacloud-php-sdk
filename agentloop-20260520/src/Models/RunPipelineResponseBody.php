<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentLoop\V20260520\Models;

use AlibabaCloud\Dara\Model;

class RunPipelineResponseBody extends Model
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
    public $runId;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'agentSpaceName' => 'agentSpaceName',
        'pipelineName' => 'pipelineName',
        'requestId' => 'requestId',
        'runId' => 'runId',
        'status' => 'status',
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

        if (null !== $this->runId) {
            $res['runId'] = $this->runId;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
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

        if (isset($map['runId'])) {
            $model->runId = $map['runId'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        return $model;
    }
}
