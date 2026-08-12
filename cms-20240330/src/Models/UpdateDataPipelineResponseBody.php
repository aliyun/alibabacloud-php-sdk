<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20240330\Models\UpdateDataPipelineResponseBody\pipeline;

class UpdateDataPipelineResponseBody extends Model
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
        'pipeline' => 'pipeline',
        'requestId' => 'requestId',
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
            $res['pipeline'] = null !== $this->pipeline ? $this->pipeline->toArray($noStream) : $this->pipeline;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
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
        if (isset($map['pipeline'])) {
            $model->pipeline = pipeline::fromMap($map['pipeline']);
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}
