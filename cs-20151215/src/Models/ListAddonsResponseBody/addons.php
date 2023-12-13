<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\ListAddonsResponseBody;

use AlibabaCloud\Tea\Model;

class addons extends Model
{
    /**
     * @var string[]
     */
    public $architecture;

    /**
     * @example monitor
     *
     * @var string
     */
    public $category;

    /**
     * @example {}
     *
     * @var string
     */
    public $configSchema;

    /**
     * @example false
     *
     * @var bool
     */
    public $installByDefault;

    /**
     * @example false
     *
     * @var bool
     */
    public $managed;

    /**
     * @example arms-prometheus
     *
     * @var string
     */
    public $name;

    /**
     * @var string[]
     */
    public $supportedActions;

    /**
     * @example 1.1.9
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
     * @return addons
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
