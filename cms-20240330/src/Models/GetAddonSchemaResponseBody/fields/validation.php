<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models\GetAddonSchemaResponseBody\fields;

use AlibabaCloud\Dara\Model;

class validation extends Model
{
    /**
     * @var int
     */
    public $max;

    /**
     * @var int
     */
    public $maxLength;

    /**
     * @var string
     */
    public $message;

    /**
     * @var int
     */
    public $min;

    /**
     * @var int
     */
    public $minLength;

    /**
     * @var string
     */
    public $regular;

    /**
     * @var bool
     */
    public $required;
    protected $_name = [
        'max' => 'max',
        'maxLength' => 'maxLength',
        'message' => 'message',
        'min' => 'min',
        'minLength' => 'minLength',
        'regular' => 'regular',
        'required' => 'required',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->max) {
            $res['max'] = $this->max;
        }

        if (null !== $this->maxLength) {
            $res['maxLength'] = $this->maxLength;
        }

        if (null !== $this->message) {
            $res['message'] = $this->message;
        }

        if (null !== $this->min) {
            $res['min'] = $this->min;
        }

        if (null !== $this->minLength) {
            $res['minLength'] = $this->minLength;
        }

        if (null !== $this->regular) {
            $res['regular'] = $this->regular;
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
        if (isset($map['max'])) {
            $model->max = $map['max'];
        }

        if (isset($map['maxLength'])) {
            $model->maxLength = $map['maxLength'];
        }

        if (isset($map['message'])) {
            $model->message = $map['message'];
        }

        if (isset($map['min'])) {
            $model->min = $map['min'];
        }

        if (isset($map['minLength'])) {
            $model->minLength = $map['minLength'];
        }

        if (isset($map['regular'])) {
            $model->regular = $map['regular'];
        }

        if (isset($map['required'])) {
            $model->required = $map['required'];
        }

        return $model;
    }
}
