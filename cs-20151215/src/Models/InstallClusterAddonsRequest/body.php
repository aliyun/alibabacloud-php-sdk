<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\InstallClusterAddonsRequest;

use AlibabaCloud\Tea\Model;

class body extends Model
{
    /**
     * @description Addon配置信息。
     *
     * @var string
     */
    public $config;

    /**
     * @description 是否禁止默认安装。
     *
     * @var bool
     */
    public $disabled;

    /**
     * @description Addon名称。
     *
     * @var string
     */
    public $name;

    /**
     * @description 是否默认安装。
     *
     * @var string
     */
    public $required;

    /**
     * @description Addon版本号。
     *
     * @var string
     */
    public $version;
    protected $_name = [
        'config'   => 'config',
        'disabled' => 'disabled',
        'name'     => 'name',
        'required' => 'required',
        'version'  => 'version',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->config) {
            $res['config'] = $this->config;
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
     * @return body
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['config'])) {
            $model->config = $map['config'];
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
