<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Docmindapi\V20220711\Models\SubmitDocParserJobAdvanceRequest;

use AlibabaCloud\Dara\Model;

class LLMParam extends Model
{
    /**
     * @var string
     */
    public $model;

    /**
     * @var string
     */
    public $prompt;
    protected $_name = [
        'model' => 'Model',
        'prompt' => 'Prompt',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->model) {
            $res['Model'] = $this->model;
        }

        if (null !== $this->prompt) {
            $res['Prompt'] = $this->prompt;
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
        if (isset($map['Model'])) {
            $model->model = $map['Model'];
        }

        if (isset($map['Prompt'])) {
            $model->prompt = $map['Prompt'];
        }

        return $model;
    }
}
