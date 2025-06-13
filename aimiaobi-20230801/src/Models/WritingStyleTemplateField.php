<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\WritingStyleTemplateField\enums;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\WritingStyleTemplateField\style;

class WritingStyleTemplateField extends Model
{
    /**
     * @var bool
     */
    public $buildIn;

    /**
     * @var WritingStyleTemplateField[]
     */
    public $cascadingFields;

    /**
     * @var enums[]
     */
    public $enums;

    /**
     * @var string
     */
    public $initialValue;

    /**
     * @var string
     */
    public $key;

    /**
     * @var float
     */
    public $max;

    /**
     * @var int
     */
    public $maxItem;

    /**
     * @var int
     */
    public $maxItemLength;

    /**
     * @var int
     */
    public $maxLength;

    /**
     * @var float
     */
    public $min;

    /**
     * @var int
     */
    public $minItemLength;

    /**
     * @var int
     */
    public $minLength;

    /**
     * @var string
     */
    public $name;

    /**
     * @var bool
     */
    public $required;

    /**
     * @var style
     */
    public $style;
    protected $_name = [
        'buildIn' => 'BuildIn',
        'cascadingFields' => 'CascadingFields',
        'enums' => 'Enums',
        'initialValue' => 'InitialValue',
        'key' => 'Key',
        'max' => 'Max',
        'maxItem' => 'MaxItem',
        'maxItemLength' => 'MaxItemLength',
        'maxLength' => 'MaxLength',
        'min' => 'Min',
        'minItemLength' => 'MinItemLength',
        'minLength' => 'MinLength',
        'name' => 'Name',
        'required' => 'Required',
        'style' => 'Style',
    ];

    public function validate()
    {
        if (\is_array($this->cascadingFields)) {
            Model::validateArray($this->cascadingFields);
        }
        if (\is_array($this->enums)) {
            Model::validateArray($this->enums);
        }
        if (null !== $this->style) {
            $this->style->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->buildIn) {
            $res['BuildIn'] = $this->buildIn;
        }

        if (null !== $this->cascadingFields) {
            if (\is_array($this->cascadingFields)) {
                $res['CascadingFields'] = [];
                $n1 = 0;
                foreach ($this->cascadingFields as $item1) {
                    $res['CascadingFields'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->enums) {
            if (\is_array($this->enums)) {
                $res['Enums'] = [];
                $n1 = 0;
                foreach ($this->enums as $item1) {
                    $res['Enums'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->initialValue) {
            $res['InitialValue'] = $this->initialValue;
        }

        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }

        if (null !== $this->max) {
            $res['Max'] = $this->max;
        }

        if (null !== $this->maxItem) {
            $res['MaxItem'] = $this->maxItem;
        }

        if (null !== $this->maxItemLength) {
            $res['MaxItemLength'] = $this->maxItemLength;
        }

        if (null !== $this->maxLength) {
            $res['MaxLength'] = $this->maxLength;
        }

        if (null !== $this->min) {
            $res['Min'] = $this->min;
        }

        if (null !== $this->minItemLength) {
            $res['MinItemLength'] = $this->minItemLength;
        }

        if (null !== $this->minLength) {
            $res['MinLength'] = $this->minLength;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->required) {
            $res['Required'] = $this->required;
        }

        if (null !== $this->style) {
            $res['Style'] = null !== $this->style ? $this->style->toArray($noStream) : $this->style;
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
        if (isset($map['BuildIn'])) {
            $model->buildIn = $map['BuildIn'];
        }

        if (isset($map['CascadingFields'])) {
            if (!empty($map['CascadingFields'])) {
                $model->cascadingFields = [];
                $n1 = 0;
                foreach ($map['CascadingFields'] as $item1) {
                    $model->cascadingFields[$n1] = self::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Enums'])) {
            if (!empty($map['Enums'])) {
                $model->enums = [];
                $n1 = 0;
                foreach ($map['Enums'] as $item1) {
                    $model->enums[$n1] = enums::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['InitialValue'])) {
            $model->initialValue = $map['InitialValue'];
        }

        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }

        if (isset($map['Max'])) {
            $model->max = $map['Max'];
        }

        if (isset($map['MaxItem'])) {
            $model->maxItem = $map['MaxItem'];
        }

        if (isset($map['MaxItemLength'])) {
            $model->maxItemLength = $map['MaxItemLength'];
        }

        if (isset($map['MaxLength'])) {
            $model->maxLength = $map['MaxLength'];
        }

        if (isset($map['Min'])) {
            $model->min = $map['Min'];
        }

        if (isset($map['MinItemLength'])) {
            $model->minItemLength = $map['MinItemLength'];
        }

        if (isset($map['MinLength'])) {
            $model->minLength = $map['MinLength'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Required'])) {
            $model->required = $map['Required'];
        }

        if (isset($map['Style'])) {
            $model->style = style::fromMap($map['Style']);
        }

        return $model;
    }
}
