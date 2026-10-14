<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SysOM\V20231230\Models;

use AlibabaCloud\Dara\Model;

class GenerateCopilotResponseRequest extends Model
{
    /**
     * @var string
     */
    public $llmParamString;
    protected $_name = [
        'llmParamString' => 'llmParamString',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->llmParamString) {
            $res['llmParamString'] = $this->llmParamString;
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
        if (isset($map['llmParamString'])) {
            $model->llmParamString = $map['llmParamString'];
        }

        return $model;
    }
}
