<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\ChatWithKnowledgeBaseStreamRequest\modelParams;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ChatWithKnowledgeBaseStreamRequest\modelParams\tools\function_;

class tools extends Model
{
    /**
     * @var function_
     */
    public $function;
    protected $_name = [
        'function' => 'Function',
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

        return $model;
    }
}
