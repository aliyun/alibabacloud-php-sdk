<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentLoop\V20260520\Models;

use AlibabaCloud\Dara\Model;

class CancelPipelineRunResponseBody extends Model
{
    /**
     * @var string
     */
    public $finishTime;

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
        'finishTime' => 'finishTime',
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
        if (null !== $this->finishTime) {
            $res['finishTime'] = $this->finishTime;
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
        if (isset($map['finishTime'])) {
            $model->finishTime = $map['finishTime'];
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
