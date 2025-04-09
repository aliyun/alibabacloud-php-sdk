<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchplat\V20240529\Models;

use AlibabaCloud\Dara\Model;

class GetTextEmbeddingRequest extends Model
{
    /**
     * @var string[]
     */
    public $input;

    /**
     * @var string
     */
    public $inputType;
    protected $_name = [
        'input' => 'input',
        'inputType' => 'input_type',
    ];

    public function validate()
    {
        if (\is_array($this->input)) {
            Model::validateArray($this->input);
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
                    $res['input'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->inputType) {
            $res['input_type'] = $this->inputType;
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
                    $model->input[$n1++] = $item1;
                }
            }
        }

        if (isset($map['input_type'])) {
            $model->inputType = $map['input_type'];
        }

        return $model;
    }
}
