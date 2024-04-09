<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SysOM\V20231230\Models;

use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->llmParamString) {
            $res['llmParamString'] = $this->llmParamString;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GenerateCopilotResponseRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['llmParamString'])) {
            $model->llmParamString = $map['llmParamString'];
        }

        return $model;
    }
}
