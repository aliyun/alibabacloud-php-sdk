<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchplat\V20240401\Models\ModifyOfflineTaskRequest;

use AlibabaCloud\Dara\Model;

class processors extends Model
{
    /**
     * @var mixed[]
     */
    public $input;

    /**
     * @var string
     */
    public $name;

    /**
     * @var mixed[]
     */
    public $output;

    /**
     * @var mixed[]
     */
    public $parameters;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'input' => 'input',
        'name' => 'name',
        'output' => 'output',
        'parameters' => 'parameters',
        'type' => 'type',
    ];

    public function validate()
    {
        if (\is_array($this->input)) {
            Model::validateArray($this->input);
        }
        if (\is_array($this->output)) {
            Model::validateArray($this->output);
        }
        if (\is_array($this->parameters)) {
            Model::validateArray($this->parameters);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->input) {
            if (\is_array($this->input)) {
                $res['input'] = [];
                foreach ($this->input as $key1 => $value1) {
                    $res['input'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->output) {
            if (\is_array($this->output)) {
                $res['output'] = [];
                foreach ($this->output as $key1 => $value1) {
                    $res['output'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->parameters) {
            if (\is_array($this->parameters)) {
                $res['parameters'] = [];
                foreach ($this->parameters as $key1 => $value1) {
                    $res['parameters'][$key1] = $value1;
                }
            }
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
        if (isset($map['input'])) {
            if (!empty($map['input'])) {
                $model->input = [];
                foreach ($map['input'] as $key1 => $value1) {
                    $model->input[$key1] = $value1;
                }
            }
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['output'])) {
            if (!empty($map['output'])) {
                $model->output = [];
                foreach ($map['output'] as $key1 => $value1) {
                    $model->output[$key1] = $value1;
                }
            }
        }

        if (isset($map['parameters'])) {
            if (!empty($map['parameters'])) {
                $model->parameters = [];
                foreach ($map['parameters'] as $key1 => $value1) {
                    $model->parameters[$key1] = $value1;
                }
            }
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
