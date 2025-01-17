<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetPipelineResponseBody\pipeline;

class GetPipelineResponseBody extends Model
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
        if (null !== $this->pipeline) {
            $this->pipeline->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->pipeline) {
            $res['Pipeline'] = null !== $this->pipeline ? $this->pipeline->toArray($noStream) : $this->pipeline;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['Pipeline'])) {
            $model->pipeline = pipeline::fromMap($map['Pipeline']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
