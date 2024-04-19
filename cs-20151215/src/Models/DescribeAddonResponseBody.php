<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\SDK\CS\V20151215\Models\DescribeAddonResponseBody\newerVersions;
use AlibabaCloud\Tea\Model;

class DescribeAddonResponseBody extends Model
{
    /**
     * @description Architectures supported by the component. Valid values:
     *
     *   amd64
     *   arm64
     *
     * @var string[]
     */
    public $architecture;

    /**
     * @description The category of the component.
     *
     * @example network
     *
     * @var string
     */
    public $category;

    /**
     * @description The custom parameter schema of the component.
     *
     * @example {}
     *
     * @var string
     */
    public $configSchema;

    /**
     * @description Indicates whether the component is automatically installed by default.
     *
     * @example true
     *
     * @var bool
     */
    public $installByDefault;

    /**
     * @description Indicates whether the component is fully managed.
     *
     * @example false
     *
     * @var bool
     */
    public $managed;

    /**
     * @description The name of the component.
     *
     * @example coredns
     *
     * @var string
     */
    public $name;

    /**
     * @description The latest version of the component.
     *
     * @var newerVersions[]
     */
    public $newerVersions;

    /**
     * @description Operations supported by the component. Valid values:
     *
     *   Install
     *   Upgrade
     *   Modify
     *   Uninstall
     *
     * @var string[]
     */
    public $supportedActions;

    /**
     * @description The version of the component.
     *
     * @example v1.9.3.6-32932850-aliyun
     *
     * @var string
     */
    public $version;
    protected $_name = [
        'architecture'     => 'architecture',
        'category'         => 'category',
        'configSchema'     => 'config_schema',
        'installByDefault' => 'install_by_default',
        'managed'          => 'managed',
        'name'             => 'name',
        'newerVersions'    => 'newer_versions',
        'supportedActions' => 'supported_actions',
        'version'          => 'version',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->architecture) {
            $res['architecture'] = $this->architecture;
        }
        if (null !== $this->category) {
            $res['category'] = $this->category;
        }
        if (null !== $this->configSchema) {
            $res['config_schema'] = $this->configSchema;
        }
        if (null !== $this->installByDefault) {
            $res['install_by_default'] = $this->installByDefault;
        }
        if (null !== $this->managed) {
            $res['managed'] = $this->managed;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->newerVersions) {
            $res['newer_versions'] = [];
            if (null !== $this->newerVersions && \is_array($this->newerVersions)) {
                $n = 0;
                foreach ($this->newerVersions as $item) {
                    $res['newer_versions'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->supportedActions) {
            $res['supported_actions'] = $this->supportedActions;
        }
        if (null !== $this->version) {
            $res['version'] = $this->version;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAddonResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['architecture'])) {
            if (!empty($map['architecture'])) {
                $model->architecture = $map['architecture'];
            }
        }
        if (isset($map['category'])) {
            $model->category = $map['category'];
        }
        if (isset($map['config_schema'])) {
            $model->configSchema = $map['config_schema'];
        }
        if (isset($map['install_by_default'])) {
            $model->installByDefault = $map['install_by_default'];
        }
        if (isset($map['managed'])) {
            $model->managed = $map['managed'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['newer_versions'])) {
            if (!empty($map['newer_versions'])) {
                $model->newerVersions = [];
                $n                    = 0;
                foreach ($map['newer_versions'] as $item) {
                    $model->newerVersions[$n++] = null !== $item ? newerVersions::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['supported_actions'])) {
            if (!empty($map['supported_actions'])) {
                $model->supportedActions = $map['supported_actions'];
            }
        }
        if (isset($map['version'])) {
            $model->version = $map['version'];
        }

        return $model;
    }
}
