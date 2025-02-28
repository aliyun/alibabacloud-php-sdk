<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models;

use AlibabaCloud\Dara\Model;

class Property extends Model
{
    /**
     * @var string
     */
    public $defaultValue;
    /**
     * @var bool
     */
    public $definesFormat;
    /**
     * @var string
     */
    public $description;
    /**
     * @var string
     */
    public $key;
    /**
     * @var bool
     */
    public $required;
    /**
     * @var bool
     */
    public $sensitive;
    protected $_name = [
        'defaultValue'  => 'defaultValue',
        'definesFormat' => 'definesFormat',
        'description'   => 'description',
        'key'           => 'key',
        'required'      => 'required',
        'sensitive'     => 'sensitive',
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

        if (null !== $this->definesFormat) {
            $res['definesFormat'] = $this->definesFormat;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->key) {
            $res['key'] = $this->key;
        }

        if (null !== $this->required) {
            $res['required'] = $this->required;
        }

        if (null !== $this->sensitive) {
            $res['sensitive'] = $this->sensitive;
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

        if (isset($map['definesFormat'])) {
            $model->definesFormat = $map['definesFormat'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['key'])) {
            $model->key = $map['key'];
        }

        if (isset($map['required'])) {
            $model->required = $map['required'];
        }

        if (isset($map['sensitive'])) {
            $model->sensitive = $map['sensitive'];
        }

        return $model;
    }
}
