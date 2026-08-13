<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models\GetSkillResponseBody;

use AlibabaCloud\Dara\Model;

class arguments extends Model
{
    /**
     * @var string
     */
    public $default;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string[]
     */
    public $enum;

    /**
     * @var string
     */
    public $name;

    /**
     * @var bool
     */
    public $required;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'default' => 'default',
        'description' => 'description',
        'enum' => 'enum',
        'name' => 'name',
        'required' => 'required',
        'type' => 'type',
    ];

    public function validate()
    {
        if (\is_array($this->enum)) {
            Model::validateArray($this->enum);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->default) {
            $res['default'] = $this->default;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->enum) {
            if (\is_array($this->enum)) {
                $res['enum'] = [];
                $n1 = 0;
                foreach ($this->enum as $item1) {
                    $res['enum'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
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
        if (isset($map['default'])) {
            $model->default = $map['default'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['enum'])) {
            if (!empty($map['enum'])) {
                $model->enum = [];
                $n1 = 0;
                foreach ($map['enum'] as $item1) {
                    $model->enum[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
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
