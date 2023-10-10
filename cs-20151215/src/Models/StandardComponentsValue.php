<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Tea\Model;

class StandardComponentsValue extends Model
{
    /**
     * @description The name of the component.
     *
     * @example ack-arena
     *
     * @var string
     */
    public $name;

    /**
     * @description The version of the component.
     *
     * @example 0.5.0
     *
     * @var string
     */
    public $version;

    /**
     * @description The description of the component.
     *
     * @example ***
     *
     * @var string
     */
    public $description;

    /**
     * @description Indicates whether the component is a required component. Valid values:
     *
     *   `true`: The component is required and must be installed when a cluster is created.
     *   `false`: The component is optional. After a cluster is created, you can go to the `Add-ons` page to install the component.
     *
     * @example false
     *
     * @var string
     */
    public $required;

    /**
     * @description Indicates whether the automatic installation of the component is disabled. By default, some optional components, such as components for logging and Ingresses, are installed when a cluster is created. You can set this parameter to disable automatic component installation. Valid values:
     *
     *   `true`: disables automatic component installation.
     *   `false`: enables automatic component installation.
     *
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
