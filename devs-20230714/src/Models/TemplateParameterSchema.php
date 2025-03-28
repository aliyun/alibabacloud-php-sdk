<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devs\V20230714\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Devs\V20230714\Models\TemplateParameterSchema\roleExtension;

class TemplateParameterSchema extends Model
{
    /**
     * @var mixed
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
    public $pattern;

    /**
     * @var bool
     */
    public $required;

    /**
     * @var roleExtension
     */
    public $roleExtension;

    /**
     * @var bool
     */
    public $sensitive;

    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'default' => 'default',
        'description' => 'description',
        'enum' => 'enum',
        'pattern' => 'pattern',
        'required' => 'required',
        'roleExtension' => 'roleExtension',
        'sensitive' => 'sensitive',
        'title' => 'title',
        'type' => 'type',
    ];

    public function validate()
    {
        if (\is_array($this->enum)) {
            Model::validateArray($this->enum);
        }
        if (null !== $this->roleExtension) {
            $this->roleExtension->validate();
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
                    $res['enum'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->pattern) {
            $res['pattern'] = $this->pattern;
        }

        if (null !== $this->required) {
            $res['required'] = $this->required;
        }

        if (null !== $this->roleExtension) {
            $res['roleExtension'] = null !== $this->roleExtension ? $this->roleExtension->toArray($noStream) : $this->roleExtension;
        }

        if (null !== $this->sensitive) {
            $res['sensitive'] = $this->sensitive;
        }

        if (null !== $this->title) {
            $res['title'] = $this->title;
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
                    $model->enum[$n1++] = $item1;
                }
            }
        }

        if (isset($map['pattern'])) {
            $model->pattern = $map['pattern'];
        }

        if (isset($map['required'])) {
            $model->required = $map['required'];
        }

        if (isset($map['roleExtension'])) {
            $model->roleExtension = roleExtension::fromMap($map['roleExtension']);
        }

        if (isset($map['sensitive'])) {
            $model->sensitive = $map['sensitive'];
        }

        if (isset($map['title'])) {
            $model->title = $map['title'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
