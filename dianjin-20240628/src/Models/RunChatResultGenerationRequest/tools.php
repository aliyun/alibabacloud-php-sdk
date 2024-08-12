<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DianJin\V20240628\Models\RunChatResultGenerationRequest;

use AlibabaCloud\SDK\DianJin\V20240628\Models\RunChatResultGenerationRequest\tools\function_;
use AlibabaCloud\Tea\Model;

class tools extends Model
{
    /**
     * @var function_
     */
    public $function;

    /**
     * @example function
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'function' => 'function',
        'type'     => 'type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->function) {
            $res['function'] = null !== $this->function ? $this->function->toMap() : null;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tools
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['function'])) {
            $model->function = function_::fromMap($map['function']);
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
