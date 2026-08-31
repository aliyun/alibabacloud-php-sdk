<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentLoop\V20260520\Models\GetPipelineResponseBody\sink\condition;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\GetPipelineResponseBody\sink\condition\routes\sink;

class routes extends Model
{
    /**
     * @var string
     */
    public $expression;

    /**
     * @var string
     */
    public $id;

    /**
     * @var sink
     */
    public $sink;
    protected $_name = [
        'expression' => 'expression',
        'id' => 'id',
        'sink' => 'sink',
    ];

    public function validate()
    {
        if (null !== $this->sink) {
            $this->sink->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->expression) {
            $res['expression'] = $this->expression;
        }

        if (null !== $this->id) {
            $res['id'] = $this->id;
        }

        if (null !== $this->sink) {
            $res['sink'] = null !== $this->sink ? $this->sink->toArray($noStream) : $this->sink;
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
        if (isset($map['expression'])) {
            $model->expression = $map['expression'];
        }

        if (isset($map['id'])) {
            $model->id = $map['id'];
        }

        if (isset($map['sink'])) {
            $model->sink = sink::fromMap($map['sink']);
        }

        return $model;
    }
}
