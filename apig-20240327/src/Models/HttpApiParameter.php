<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Dara\Model;

class HttpApiParameter extends Model
{
    /**
     * @var string
     */
    public $defaultValue;
    /**
     * @var string
     */
    public $description;
    /**
     * @var string
     */
    public $exampleValue;
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
        'defaultValue' => 'defaultValue',
        'description'  => 'description',
        'exampleValue' => 'exampleValue',
        'name'         => 'name',
        'required'     => 'required',
        'type'         => 'type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->defaultValue) {
            $res['defaultValue'] = $this->defaultValue;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->exampleValue) {
            $res['exampleValue'] = $this->exampleValue;
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
        if (isset($map['defaultValue'])) {
            $model->defaultValue = $map['defaultValue'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['exampleValue'])) {
            $model->exampleValue = $map['exampleValue'];
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
