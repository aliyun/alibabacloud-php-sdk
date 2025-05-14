<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\ListAddonsResponseBody;

use AlibabaCloud\Dara\Model;

class addons extends Model
{
    /**
     * @var string[]
     */
    public $architecture;

    /**
     * @var string
     */
    public $category;

    /**
     * @var string
     */
    public $configSchema;

    /**
     * @var bool
     */
    public $installByDefault;

    /**
     * @var bool
     */
    public $managed;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string[]
     */
    public $supportedActions;

    /**
     * @var string
     */
    public $version;
    protected $_name = [
        'architecture' => 'architecture',
        'category' => 'category',
        'configSchema' => 'config_schema',
        'installByDefault' => 'install_by_default',
        'managed' => 'managed',
        'name' => 'name',
        'supportedActions' => 'supported_actions',
        'version' => 'version',
    ];

    public function validate()
    {
        if (\is_array($this->architecture)) {
            Model::validateArray($this->architecture);
        }
        if (\is_array($this->supportedActions)) {
            Model::validateArray($this->supportedActions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->architecture) {
            if (\is_array($this->architecture)) {
                $res['architecture'] = [];
                $n1 = 0;
                foreach ($this->architecture as $item1) {
                    $res['architecture'][$n1++] = $item1;
                }
            }
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
            if (\is_array($this->supportedActions)) {
                $res['supported_actions'] = [];
                $n1 = 0;
                foreach ($this->supportedActions as $item1) {
                    $res['supported_actions'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->version) {
            $res['version'] = $this->version;
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
        if (isset($map['architecture'])) {
            if (!empty($map['architecture'])) {
                $model->architecture = [];
                $n1 = 0;
                foreach ($map['architecture'] as $item1) {
                    $model->architecture[$n1++] = $item1;
                }
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
                $model->supportedActions = [];
                $n1 = 0;
                foreach ($map['supported_actions'] as $item1) {
                    $model->supportedActions[$n1++] = $item1;
                }
            }
        }

        if (isset($map['version'])) {
            $model->version = $map['version'];
        }

        return $model;
    }
}
