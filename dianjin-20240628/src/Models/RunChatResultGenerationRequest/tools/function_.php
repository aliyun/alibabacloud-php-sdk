<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DianJin\V20240628\Models\RunChatResultGenerationRequest\tools;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\DianJin\V20240628\Models\RunChatResultGenerationRequest\tools\function_\parameters;

class function_ extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $name;

    /**
     * @var parameters
     */
    public $parameters;

    /**
     * @var string[]
     */
    public $required;
    protected $_name = [
        'description' => 'description',
        'name' => 'name',
        'parameters' => 'parameters',
        'required' => 'required',
    ];

    public function validate()
    {
        if (null !== $this->parameters) {
            $this->parameters->validate();
        }
        if (\is_array($this->required)) {
            Model::validateArray($this->required);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->parameters) {
            $res['parameters'] = null !== $this->parameters ? $this->parameters->toArray($noStream) : $this->parameters;
        }

        if (null !== $this->required) {
            if (\is_array($this->required)) {
                $res['required'] = [];
                $n1 = 0;
                foreach ($this->required as $item1) {
                    $res['required'][$n1++] = $item1;
                }
            }
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
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['parameters'])) {
            $model->parameters = parameters::fromMap($map['parameters']);
        }

        if (isset($map['required'])) {
            if (!empty($map['required'])) {
                $model->required = [];
                $n1 = 0;
                foreach ($map['required'] as $item1) {
                    $model->required[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
