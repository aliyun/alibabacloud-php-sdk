<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Dara\Model;

class ReDoRoutineBuildResponseBody extends Model
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
    protected $_name = [
        'pipeLineRunId' => 'PipeLineRunId',
        'requestId' => 'RequestId',
        'routineBuildId' => 'RoutineBuildId',
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

        return $model;
    }
}
