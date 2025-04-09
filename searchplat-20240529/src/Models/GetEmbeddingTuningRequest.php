<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchplat\V20240529\Models;

use AlibabaCloud\Dara\Model;

class GetEmbeddingTuningRequest extends Model
{
    /**
     * @var float[][]
     */
    public $input;

    /**
     * @var mixed[]
     */
    public $parameters;
    protected $_name = [
        'input' => 'input',
        'parameters' => 'parameters',
    ];

    public function validate()
    {
        if (\is_array($this->input)) {
            Model::validateArray($this->input);
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
                $n1 = 0;
                foreach ($this->input as $item1) {
                    if (\is_array($item1)) {
                        $res['input'][$n1++] = [];
                        $n2 = 0;
                        foreach ($item1 as $item2) {
                            $res['input'][$n1++][$n2++] = $item2;
                        }
                    }
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
                $n1 = 0;
                foreach ($map['input'] as $item1) {
                    if (!empty($item1)) {
                        $model->input[$n1++] = [];
                        $n2 = 0;
                        foreach ($item1 as $item2) {
                            $model->input[$n1++][$n2++] = $item2;
                        }
                    }
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

        return $model;
    }
}
