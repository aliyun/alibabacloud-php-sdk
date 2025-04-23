<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IaCService\V20210806\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\IaCService\V20210806\Models\UpdateResourceExportTaskAttributeRequest\excludeRules;
use AlibabaCloud\SDK\IaCService\V20210806\Models\UpdateResourceExportTaskAttributeRequest\exportToModule;
use AlibabaCloud\SDK\IaCService\V20210806\Models\UpdateResourceExportTaskAttributeRequest\includeRules;
use AlibabaCloud\SDK\IaCService\V20210806\Models\UpdateResourceExportTaskAttributeRequest\variables;

class UpdateResourceExportTaskAttributeRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $configPath;

    /**
     * @var string
     */
    public $description;

    /**
     * @var excludeRules[]
     */
    public $excludeRules;

    /**
     * @var exportToModule
     */
    public $exportToModule;

    /**
     * @var includeRules[]
     */
    public $includeRules;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $ramRole;

    /**
     * @var string
     */
    public $terraformProviderVersion;

    /**
     * @var string
     */
    public $terraformVersion;

    /**
     * @var string
     */
    public $triggerStrategy;

    /**
     * @var variables[]
     */
    public $variables;
    protected $_name = [
        'clientToken' => 'clientToken',
        'configPath' => 'configPath',
        'description' => 'description',
        'excludeRules' => 'excludeRules',
        'exportToModule' => 'exportToModule',
        'includeRules' => 'includeRules',
        'name' => 'name',
        'ramRole' => 'ramRole',
        'terraformProviderVersion' => 'terraformProviderVersion',
        'terraformVersion' => 'terraformVersion',
        'triggerStrategy' => 'triggerStrategy',
        'variables' => 'variables',
    ];

    public function validate()
    {
        if (\is_array($this->excludeRules)) {
            Model::validateArray($this->excludeRules);
        }
        if (null !== $this->exportToModule) {
            $this->exportToModule->validate();
        }
        if (\is_array($this->includeRules)) {
            Model::validateArray($this->includeRules);
        }
        if (\is_array($this->variables)) {
            Model::validateArray($this->variables);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['clientToken'] = $this->clientToken;
        }

        if (null !== $this->configPath) {
            $res['configPath'] = $this->configPath;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->excludeRules) {
            if (\is_array($this->excludeRules)) {
                $res['excludeRules'] = [];
                $n1 = 0;
                foreach ($this->excludeRules as $item1) {
                    $res['excludeRules'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->exportToModule) {
            $res['exportToModule'] = null !== $this->exportToModule ? $this->exportToModule->toArray($noStream) : $this->exportToModule;
        }

        if (null !== $this->includeRules) {
            if (\is_array($this->includeRules)) {
                $res['includeRules'] = [];
                $n1 = 0;
                foreach ($this->includeRules as $item1) {
                    $res['includeRules'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->ramRole) {
            $res['ramRole'] = $this->ramRole;
        }

        if (null !== $this->terraformProviderVersion) {
            $res['terraformProviderVersion'] = $this->terraformProviderVersion;
        }

        if (null !== $this->terraformVersion) {
            $res['terraformVersion'] = $this->terraformVersion;
        }

        if (null !== $this->triggerStrategy) {
            $res['triggerStrategy'] = $this->triggerStrategy;
        }

        if (null !== $this->variables) {
            if (\is_array($this->variables)) {
                $res['variables'] = [];
                $n1 = 0;
                foreach ($this->variables as $item1) {
                    $res['variables'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['clientToken'])) {
            $model->clientToken = $map['clientToken'];
        }

        if (isset($map['configPath'])) {
            $model->configPath = $map['configPath'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['excludeRules'])) {
            if (!empty($map['excludeRules'])) {
                $model->excludeRules = [];
                $n1 = 0;
                foreach ($map['excludeRules'] as $item1) {
                    $model->excludeRules[$n1++] = excludeRules::fromMap($item1);
                }
            }
        }

        if (isset($map['exportToModule'])) {
            $model->exportToModule = exportToModule::fromMap($map['exportToModule']);
        }

        if (isset($map['includeRules'])) {
            if (!empty($map['includeRules'])) {
                $model->includeRules = [];
                $n1 = 0;
                foreach ($map['includeRules'] as $item1) {
                    $model->includeRules[$n1++] = includeRules::fromMap($item1);
                }
            }
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['ramRole'])) {
            $model->ramRole = $map['ramRole'];
        }

        if (isset($map['terraformProviderVersion'])) {
            $model->terraformProviderVersion = $map['terraformProviderVersion'];
        }

        if (isset($map['terraformVersion'])) {
            $model->terraformVersion = $map['terraformVersion'];
        }

        if (isset($map['triggerStrategy'])) {
            $model->triggerStrategy = $map['triggerStrategy'];
        }

        if (isset($map['variables'])) {
            if (!empty($map['variables'])) {
                $model->variables = [];
                $n1 = 0;
                foreach ($map['variables'] as $item1) {
                    $model->variables[$n1++] = variables::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
