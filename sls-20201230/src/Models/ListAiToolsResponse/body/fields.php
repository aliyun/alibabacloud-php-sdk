<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models\ListAiToolsResponse\body;

use AlibabaCloud\Dara\Model;

class fields extends Model
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var string[]
     */
    public $option;

    /**
     * @var bool
     */
    public $required;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $example;

    /**
     * @var string
     */
    public $description;
    protected $_name = [
        'name' => 'name',
        'option' => 'option',
        'required' => 'required',
        'type' => 'type',
        'example' => 'example',
        'description' => 'description',
    ];

    public function validate()
    {
        if (\is_array($this->option)) {
            Model::validateArray($this->option);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->option) {
            if (\is_array($this->option)) {
                $res['option'] = [];
                $n1 = 0;
                foreach ($this->option as $item1) {
                    $res['option'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->required) {
            $res['required'] = $this->required;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        if (null !== $this->example) {
            $res['example'] = $this->example;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
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

        if (isset($map['option'])) {
            if (!empty($map['option'])) {
                $model->option = [];
                $n1 = 0;
                foreach ($map['option'] as $item1) {
                    $model->option[$n1++] = $item1;
                }
            }
        }

        if (isset($map['required'])) {
            $model->required = $map['required'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        if (isset($map['example'])) {
            $model->example = $map['example'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        return $model;
    }
}
