<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20180528\Models;

use AlibabaCloud\SDK\Mts\V20180528\Models\AddPipelineResponseBody\pipeline;
use AlibabaCloud\Tea\Model;

class AddPipelineResponseBody extends Model
{
    /**
     * @var pipeline
     */
    public $pipeline;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'pipeline'  => 'Pipeline',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pipeline) {
            $res['Pipeline'] = null !== $this->pipeline ? $this->pipeline->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddPipelineResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Pipeline'])) {
            $model->pipeline = pipeline::fromMap($map['Pipeline']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
