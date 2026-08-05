<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchplat\V20240401\Models\ListOfflineTaskResponseBody\result;

use AlibabaCloud\Dara\Model;

class processors extends Model
{
    /**
     * @var string[]
     */
    public $input;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string[]
     */
    public $output;

    /**
     * @var string[]
     */
    public $parameters;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'input' => 'Input',
        'name' => 'Name',
        'output' => 'Output',
        'parameters' => 'Parameters',
        'type' => 'Type',
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
                $res['Input'] = [];
                foreach ($this->input as $key1 => $value1) {
                    $res['Input'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->output) {
            if (\is_array($this->output)) {
                $res['Output'] = [];
                foreach ($this->output as $key1 => $value1) {
                    $res['Output'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->parameters) {
            if (\is_array($this->parameters)) {
                $res['Parameters'] = [];
                foreach ($this->parameters as $key1 => $value1) {
                    $res['Parameters'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['Input'])) {
            if (!empty($map['Input'])) {
                $model->input = [];
                foreach ($map['Input'] as $key1 => $value1) {
                    $model->input[$key1] = $value1;
                }
            }
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Output'])) {
            if (!empty($map['Output'])) {
                $model->output = [];
                foreach ($map['Output'] as $key1 => $value1) {
                    $model->output[$key1] = $value1;
                }
            }
        }

        if (isset($map['Parameters'])) {
            if (!empty($map['Parameters'])) {
                $model->parameters = [];
                foreach ($map['Parameters'] as $key1 => $value1) {
                    $model->parameters[$key1] = $value1;
                }
            }
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
