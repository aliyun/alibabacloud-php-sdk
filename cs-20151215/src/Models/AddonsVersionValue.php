<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Tea\Model;

class AddonsVersionValue extends Model
{
    /**
     * @description 组件是否可升级
     *
     * @var bool
     */
    public $canUpgrade;

    /**
     * @description 组件是否升级过。
     *
     * @var string
     */
    public $changed;

    /**
     * @description 组件名称。
     *
     * @var string
     */
    public $componentName;

    /**
     * @description 组件说明信息。
     *
     * @var string
     */
    public $description;

    /**
     * @description 是否可升级的额外说明信息。
     *
     * @var string
     */
    public $message;

    /**
     * @description 组件下一个可升级版本。
     *
     * @var string
     */
    public $nextVersion;

    /**
     * @description 组件是否为必需组件
     *
     * @var bool
     */
    public $required;

    /**
     * @description 组件最新模板内容。
     *
     * @var string
     */
    public $template;

    /**
     * @description 组件当前版本。
     *
     * @var string
     */
    public $version;
    protected $_name = [
        'canUpgrade'    => 'can_upgrade',
        'changed'       => 'changed',
        'componentName' => 'component_name',
        'description'   => 'description',
        'message'       => 'message',
        'nextVersion'   => 'next_version',
        'required'      => 'required',
        'template'      => 'template',
        'version'       => 'version',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->canUpgrade) {
            $res['can_upgrade'] = $this->canUpgrade;
        }
        if (null !== $this->changed) {
            $res['changed'] = $this->changed;
        }
        if (null !== $this->componentName) {
            $res['component_name'] = $this->componentName;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->message) {
            $res['message'] = $this->message;
        }
        if (null !== $this->nextVersion) {
            $res['next_version'] = $this->nextVersion;
        }
        if (null !== $this->required) {
            $res['required'] = $this->required;
        }
        if (null !== $this->template) {
            $res['template'] = $this->template;
        }
        if (null !== $this->version) {
            $res['version'] = $this->version;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddonsVersionValue
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['can_upgrade'])) {
            $model->canUpgrade = $map['can_upgrade'];
        }
        if (isset($map['changed'])) {
            $model->changed = $map['changed'];
        }
        if (isset($map['component_name'])) {
            $model->componentName = $map['component_name'];
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['message'])) {
            $model->message = $map['message'];
        }
        if (isset($map['next_version'])) {
            $model->nextVersion = $map['next_version'];
        }
        if (isset($map['required'])) {
            $model->required = $map['required'];
        }
        if (isset($map['template'])) {
            $model->template = $map['template'];
        }
        if (isset($map['version'])) {
            $model->version = $map['version'];
        }

        return $model;
    }
}
