<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QwenEduAiSuite\V20261102\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\QwenEduAiSuite\V20261102\Models\CreateEduProblemSolveResponseBody\data;

class CreateEduProblemSolveResponseBody extends Model
{
    /**
     * @var data
     */
    public $data;

    /**
     * @var string
     */
    public $event;
    protected $_name = [
        'data' => 'data',
        'event' => 'event',
    ];

    public function validate()
    {
        if (null !== $this->data) {
            $this->data->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->data) {
            $res['data'] = null !== $this->data ? $this->data->toArray($noStream) : $this->data;
        }

        if (null !== $this->event) {
            $res['event'] = $this->event;
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
        if (isset($map['data'])) {
            $model->data = data::fromMap($map['data']);
        }

        if (isset($map['event'])) {
            $model->event = $map['event'];
        }

        return $model;
    }
}
