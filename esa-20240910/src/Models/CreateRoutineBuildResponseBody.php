<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Dara\Model;

class CreateRoutineBuildResponseBody extends Model
{
    /**
     * @var int
     */
    public $pipeLineRunId;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $routineBuildId;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'pipeLineRunId' => 'PipeLineRunId',
        'requestId' => 'RequestId',
        'routineBuildId' => 'RoutineBuildId',
        'status' => 'Status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->pipeLineRunId) {
            $res['PipeLineRunId'] = $this->pipeLineRunId;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->routineBuildId) {
            $res['RoutineBuildId'] = $this->routineBuildId;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['PipeLineRunId'])) {
            $model->pipeLineRunId = $map['PipeLineRunId'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['RoutineBuildId'])) {
            $model->routineBuildId = $map['RoutineBuildId'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
