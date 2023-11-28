<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models;

use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\DescribePipelineResponseBody\result;
use AlibabaCloud\Tea\Model;

class DescribePipelineResponseBody extends Model
{
    /**
     * @description The time when the pipeline was updated.
     *
     * @example 829F38F6-E2D6-4109-90A6-888160BD1***
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The type of the queue. Valid values:
     *
     *   MEMORY: a traditional memory-based queue.
     *   PERSISTED: disk-based ACKed queue (persistent queue).
     *
     * @var result
     */
    public $result;
    protected $_name = [
        'requestId' => 'RequestId',
        'result'    => 'Result',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->result) {
            $res['Result'] = null !== $this->result ? $this->result->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribePipelineResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Result'])) {
            $model->result = result::fromMap($map['Result']);
        }

        return $model;
    }
}
