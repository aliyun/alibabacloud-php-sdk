<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PAIFlow\V20210202\Models;

use AlibabaCloud\Tea\Model;

class CreatePipelineRunResponseBody extends Model
{
    /**
     * @example flow-rbvg***
     *
     * @var string
     */
    public $pipelineRunId;

    /**
     * @example DA869D1B-035A-43B2-ACC1-C56681BD9FAA
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'pipelineRunId' => 'PipelineRunId',
        'requestId'     => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pipelineRunId) {
            $res['PipelineRunId'] = $this->pipelineRunId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreatePipelineRunResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PipelineRunId'])) {
            $model->pipelineRunId = $map['PipelineRunId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
