<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\DescribeAddonsResponseBody\componentGroups;

use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @description 组件描述信息。
     *
     * @var string
     */
    public $description;

    /**
     * @description 是否禁止默认安装。
     *
     * @var bool
     */
    public $disabled;

    /**
     * @description 组件名称。
     *
     * @var string
     */
    public $name;

    /**
     * @description 是否为必需组件。
     *
     * @var string
     */
    public $required;

    /**
     * @description 组件版本。
     *
     * @var string
     */
    public $version;
    protected $_name = [
        'description' => 'description',
        'disabled'    => 'disabled',
        'name'        => 'name',
        'required'    => 'required',
        'version'     => 'version',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->disabled) {
            $res['disabled'] = $this->disabled;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->required) {
            $res['required'] = $this->required;
        }
        if (null !== $this->version) {
            $res['version'] = $this->version;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return items
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['disabled'])) {
            $model->disabled = $map['disabled'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['required'])) {
            $model->required = $map['required'];
        }
        if (isset($map['version'])) {
            $model->version = $map['version'];
        }

        return $model;
    }
}
