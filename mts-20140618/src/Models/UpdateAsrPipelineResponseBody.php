<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models;

use AlibabaCloud\SDK\Mts\V20140618\Models\UpdateAsrPipelineResponseBody\pipeline;
use AlibabaCloud\Tea\Model;

class UpdateAsrPipelineResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var pipeline
     */
    public $pipeline;
    protected $_name = [
        'requestId' => 'RequestId',
        'pipeline'  => 'Pipeline',
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
        if (null !== $this->pipeline) {
            $res['Pipeline'] = null !== $this->pipeline ? $this->pipeline->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateAsrPipelineResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Pipeline'])) {
            $model->pipeline = pipeline::fromMap($map['Pipeline']);
        }

        return $model;
    }
}
