<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models\GetTodoDetailResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\GetTodoDetailResponseBody\questions\options;

class questions extends Model
{
    /**
     * @var bool
     */
    public $allowCustom;

    /**
     * @var string
     */
    public $customLabel;

    /**
     * @var int
     */
    public $customMaxLength;

    /**
     * @var string
     */
    public $customPlaceholder;

    /**
     * @var int
     */
    public $maxLength;

    /**
     * @var string
     */
    public $mode;

    /**
     * @var options[]
     */
    public $options;

    /**
     * @var string
     */
    public $placeholder;

    /**
     * @var string
     */
    public $question;

    /**
     * @var bool
     */
    public $required;
    protected $_name = [
        'allowCustom' => 'allowCustom',
        'customLabel' => 'customLabel',
        'customMaxLength' => 'customMaxLength',
        'customPlaceholder' => 'customPlaceholder',
        'maxLength' => 'maxLength',
        'mode' => 'mode',
        'options' => 'options',
        'placeholder' => 'placeholder',
        'question' => 'question',
        'required' => 'required',
    ];

    public function validate()
    {
        if (\is_array($this->options)) {
            Model::validateArray($this->options);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->allowCustom) {
            $res['allowCustom'] = $this->allowCustom;
        }

        if (null !== $this->customLabel) {
            $res['customLabel'] = $this->customLabel;
        }

        if (null !== $this->customMaxLength) {
            $res['customMaxLength'] = $this->customMaxLength;
        }

        if (null !== $this->customPlaceholder) {
            $res['customPlaceholder'] = $this->customPlaceholder;
        }

        if (null !== $this->maxLength) {
            $res['maxLength'] = $this->maxLength;
        }

        if (null !== $this->mode) {
            $res['mode'] = $this->mode;
        }

        if (null !== $this->options) {
            if (\is_array($this->options)) {
                $res['options'] = [];
                $n1 = 0;
                foreach ($this->options as $item1) {
                    $res['options'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->placeholder) {
            $res['placeholder'] = $this->placeholder;
        }

        if (null !== $this->question) {
            $res['question'] = $this->question;
        }

        if (null !== $this->required) {
            $res['required'] = $this->required;
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
        if (isset($map['allowCustom'])) {
            $model->allowCustom = $map['allowCustom'];
        }

        if (isset($map['customLabel'])) {
            $model->customLabel = $map['customLabel'];
        }

        if (isset($map['customMaxLength'])) {
            $model->customMaxLength = $map['customMaxLength'];
        }

        if (isset($map['customPlaceholder'])) {
            $model->customPlaceholder = $map['customPlaceholder'];
        }

        if (isset($map['maxLength'])) {
            $model->maxLength = $map['maxLength'];
        }

        if (isset($map['mode'])) {
            $model->mode = $map['mode'];
        }

        if (isset($map['options'])) {
            if (!empty($map['options'])) {
                $model->options = [];
                $n1 = 0;
                foreach ($map['options'] as $item1) {
                    $model->options[$n1] = options::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['placeholder'])) {
            $model->placeholder = $map['placeholder'];
        }

        if (isset($map['question'])) {
            $model->question = $map['question'];
        }

        if (isset($map['required'])) {
            $model->required = $map['required'];
        }

        return $model;
    }
}
