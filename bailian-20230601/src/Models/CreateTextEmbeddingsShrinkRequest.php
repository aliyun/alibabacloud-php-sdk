<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bailian\V20230601\Models;

use AlibabaCloud\Tea\Model;

class CreateTextEmbeddingsShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $agentKey;

    /**
     * @var string
     */
    public $inputShrink;

    /**
     * @var string
     */
    public $textType;
    protected $_name = [
        'agentKey'    => 'AgentKey',
        'inputShrink' => 'Input',
        'textType'    => 'TextType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->agentKey) {
            $res['AgentKey'] = $this->agentKey;
        }
        if (null !== $this->inputShrink) {
            $res['Input'] = $this->inputShrink;
        }
        if (null !== $this->textType) {
            $res['TextType'] = $this->textType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateTextEmbeddingsShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AgentKey'])) {
            $model->agentKey = $map['AgentKey'];
        }
        if (isset($map['Input'])) {
            $model->inputShrink = $map['Input'];
        }
        if (isset($map['TextType'])) {
            $model->textType = $map['TextType'];
        }

        return $model;
    }
}
