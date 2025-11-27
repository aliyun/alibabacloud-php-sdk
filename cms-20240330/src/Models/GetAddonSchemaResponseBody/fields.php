<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models\GetAddonSchemaResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20240330\Models\GetAddonSchemaResponseBody\fields\conditions;
use AlibabaCloud\SDK\Cms\V20240330\Models\GetAddonSchemaResponseBody\fields\props;
use AlibabaCloud\SDK\Cms\V20240330\Models\GetAddonSchemaResponseBody\fields\validation;

class fields extends Model
{
    /**
     * @var conditions[]
     */
    public $conditions;

    /**
     * @var mixed
     */
    public $defaultValue;

    /**
     * @var string
     */
    public $description;

    /**
     * @var bool
     */
    public $disabled;

    /**
     * @var string
     */
    public $element;

    /**
     * @var string
     */
    public $fieldPath;

    /**
     * @var string
     */
    public $label;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $placeholder;

    /**
     * @var props
     */
    public $props;

    /**
     * @var string
     */
    public $type;

    /**
     * @var validation
     */
    public $validation;
    protected $_name = [
        'conditions' => 'conditions',
        'defaultValue' => 'defaultValue',
        'description' => 'description',
        'disabled' => 'disabled',
        'element' => 'element',
        'fieldPath' => 'fieldPath',
        'label' => 'label',
        'name' => 'name',
        'placeholder' => 'placeholder',
        'props' => 'props',
        'type' => 'type',
        'validation' => 'validation',
    ];

    public function validate()
    {
        if (\is_array($this->conditions)) {
            Model::validateArray($this->conditions);
        }
        if (null !== $this->props) {
            $this->props->validate();
        }
        if (null !== $this->validation) {
            $this->validation->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->conditions) {
            if (\is_array($this->conditions)) {
                $res['conditions'] = [];
                $n1 = 0;
                foreach ($this->conditions as $item1) {
                    $res['conditions'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->defaultValue) {
            $res['defaultValue'] = $this->defaultValue;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->disabled) {
            $res['disabled'] = $this->disabled;
        }

        if (null !== $this->element) {
            $res['element'] = $this->element;
        }

        if (null !== $this->fieldPath) {
            $res['fieldPath'] = $this->fieldPath;
        }

        if (null !== $this->label) {
            $res['label'] = $this->label;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->placeholder) {
            $res['placeholder'] = $this->placeholder;
        }

        if (null !== $this->props) {
            $res['props'] = null !== $this->props ? $this->props->toArray($noStream) : $this->props;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        if (null !== $this->validation) {
            $res['validation'] = null !== $this->validation ? $this->validation->toArray($noStream) : $this->validation;
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
        if (isset($map['conditions'])) {
            if (!empty($map['conditions'])) {
                $model->conditions = [];
                $n1 = 0;
                foreach ($map['conditions'] as $item1) {
                    $model->conditions[$n1] = conditions::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['defaultValue'])) {
            $model->defaultValue = $map['defaultValue'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['disabled'])) {
            $model->disabled = $map['disabled'];
        }

        if (isset($map['element'])) {
            $model->element = $map['element'];
        }

        if (isset($map['fieldPath'])) {
            $model->fieldPath = $map['fieldPath'];
        }

        if (isset($map['label'])) {
            $model->label = $map['label'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['placeholder'])) {
            $model->placeholder = $map['placeholder'];
        }

        if (isset($map['props'])) {
            $model->props = props::fromMap($map['props']);
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        if (isset($map['validation'])) {
            $model->validation = validation::fromMap($map['validation']);
        }

        return $model;
    }
}
