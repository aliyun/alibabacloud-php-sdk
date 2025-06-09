<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models\CopilotAction;

use AlibabaCloud\Dara\Model;

class parameters extends Model
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $prompt;

    /**
     * @var string
     */
    public $required;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'name' => 'name',
        'prompt' => 'prompt',
        'required' => 'required',
        'type' => 'type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->prompt) {
            $res['prompt'] = $this->prompt;
        }

        if (null !== $this->required) {
            $res['required'] = $this->required;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
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
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['prompt'])) {
            $model->prompt = $map['prompt'];
        }

        if (isset($map['required'])) {
            $model->required = $map['required'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
