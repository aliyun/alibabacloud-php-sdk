<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\ChatWithKnowledgeBaseStreamResponseBody\chatCompletion\choices\message;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ChatWithKnowledgeBaseStreamResponseBody\chatCompletion\choices\message\toolCalls\function_;

class toolCalls extends Model
{
    /**
     * @var function_
     */
    public $function;

    /**
     * @var string
     */
    public $id;

    /**
     * @var int
     */
    public $index;
    protected $_name = [
        'function' => 'Function',
        'id' => 'Id',
        'index' => 'Index',
    ];

    public function validate()
    {
        if (null !== $this->function) {
            $this->function->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->function) {
            $res['Function'] = null !== $this->function ? $this->function->toArray($noStream) : $this->function;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->index) {
            $res['Index'] = $this->index;
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
        if (isset($map['Function'])) {
            $model->function = function_::fromMap($map['Function']);
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['Index'])) {
            $model->index = $map['Index'];
        }

        return $model;
    }
}
