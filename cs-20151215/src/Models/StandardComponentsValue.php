<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Tea\Model;

class StandardComponentsValue extends Model
{
    /**
     * @example ack-arena
     *
     * @var string
     */
    public $name;

    /**
     * @example 0.5.0
     *
     * @var string
     */
    public $version;

    /**
     * @example ***
     *
     * @var string
     */
    public $description;

    /**
     * @example false
     *
     * @var string
     */
    public $required;

    /**
     * @example false
     *
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
