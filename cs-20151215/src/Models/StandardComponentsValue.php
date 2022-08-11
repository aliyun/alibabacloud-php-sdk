<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Tea\Model;

class StandardComponentsValue extends Model
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $version;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $required;

    /**
     * @var bool
     */
    public $disabled;
    protected $_name = [
        'name'        => 'name',
        'version'     => 'version',
        'description' => 'description',
        'required'    => 'required',
        'disabled'    => 'disabled',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->version) {
            $res['version'] = $this->version;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->required) {
            $res['required'] = $this->required;
        }
        if (null !== $this->disabled) {
            $res['disabled'] = $this->disabled;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return StandardComponentsValue
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['version'])) {
            $model->version = $map['version'];
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['required'])) {
            $model->required = $map['required'];
        }
        if (isset($map['disabled'])) {
            $model->disabled = $map['disabled'];
        }

        return $model;
    }
}
