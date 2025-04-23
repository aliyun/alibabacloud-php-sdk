<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IaCService\V20210806\Models\GetResourceExportTaskResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\IaCService\V20210806\Models\GetResourceExportTaskResponseBody\task\excludeRules;
use AlibabaCloud\SDK\IaCService\V20210806\Models\GetResourceExportTaskResponseBody\task\exportToModule;
use AlibabaCloud\SDK\IaCService\V20210806\Models\GetResourceExportTaskResponseBody\task\includeRules;
use AlibabaCloud\SDK\IaCService\V20210806\Models\GetResourceExportTaskResponseBody\task\modules;
use AlibabaCloud\SDK\IaCService\V20210806\Models\GetResourceExportTaskResponseBody\task\variables;

class task extends Model
{
    /**
     * @var string
     */
    public $configPath;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $elapsedTime;

    /**
     * @var excludeRules[]
     */
    public $excludeRules;

    /**
     * @var string
     */
    public $exportTaskId;

    /**
     * @var exportToModule
     */
    public $exportToModule;

    /**
     * @var string
     */
    public $exportVersion;

    /**
     * @var string
     */
    public $failedReason;

    /**
     * @var includeRules[]
     */
    public $includeRules;

    /**
     * @var modules[]
     */
    public $modules;

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
    public $status;

    /**
     * @var string
     */
    public $taskOutputPath;

    /**
     * @var mixed[]
     */
    public $terraformContext;

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
        'configPath' => 'configPath',
        'createTime' => 'createTime',
        'description' => 'description',
        'elapsedTime' => 'elapsedTime',
        'excludeRules' => 'excludeRules',
        'exportTaskId' => 'exportTaskId',
        'exportToModule' => 'exportToModule',
        'exportVersion' => 'exportVersion',
        'failedReason' => 'failedReason',
        'includeRules' => 'includeRules',
        'modules' => 'modules',
        'name' => 'name',
        'ramRole' => 'ramRole',
        'status' => 'status',
        'taskOutputPath' => 'taskOutputPath',
        'terraformContext' => 'terraformContext',
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
        if (\is_array($this->modules)) {
            Model::validateArray($this->modules);
        }
        if (\is_array($this->terraformContext)) {
            Model::validateArray($this->terraformContext);
        }
        if (\is_array($this->variables)) {
            Model::validateArray($this->variables);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->configPath) {
            $res['configPath'] = $this->configPath;
        }

        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->elapsedTime) {
            $res['elapsedTime'] = $this->elapsedTime;
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

        if (null !== $this->exportTaskId) {
            $res['exportTaskId'] = $this->exportTaskId;
        }

        if (null !== $this->exportToModule) {
            $res['exportToModule'] = null !== $this->exportToModule ? $this->exportToModule->toArray($noStream) : $this->exportToModule;
        }

        if (null !== $this->exportVersion) {
            $res['exportVersion'] = $this->exportVersion;
        }

        if (null !== $this->failedReason) {
            $res['failedReason'] = $this->failedReason;
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

        if (null !== $this->modules) {
            if (\is_array($this->modules)) {
                $res['modules'] = [];
                $n1 = 0;
                foreach ($this->modules as $item1) {
                    $res['modules'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->ramRole) {
            $res['ramRole'] = $this->ramRole;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->taskOutputPath) {
            $res['taskOutputPath'] = $this->taskOutputPath;
        }

        if (null !== $this->terraformContext) {
            if (\is_array($this->terraformContext)) {
                $res['terraformContext'] = [];
                foreach ($this->terraformContext as $key1 => $value1) {
                    $res['terraformContext'][$key1] = $value1;
                }
            }
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
        if (isset($map['configPath'])) {
            $model->configPath = $map['configPath'];
        }

        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['elapsedTime'])) {
            $model->elapsedTime = $map['elapsedTime'];
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

        if (isset($map['exportTaskId'])) {
            $model->exportTaskId = $map['exportTaskId'];
        }

        if (isset($map['exportToModule'])) {
            $model->exportToModule = exportToModule::fromMap($map['exportToModule']);
        }

        if (isset($map['exportVersion'])) {
            $model->exportVersion = $map['exportVersion'];
        }

        if (isset($map['failedReason'])) {
            $model->failedReason = $map['failedReason'];
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

        if (isset($map['modules'])) {
            if (!empty($map['modules'])) {
                $model->modules = [];
                $n1 = 0;
                foreach ($map['modules'] as $item1) {
                    $model->modules[$n1++] = modules::fromMap($item1);
                }
            }
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['ramRole'])) {
            $model->ramRole = $map['ramRole'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['taskOutputPath'])) {
            $model->taskOutputPath = $map['taskOutputPath'];
        }

        if (isset($map['terraformContext'])) {
            if (!empty($map['terraformContext'])) {
                $model->terraformContext = [];
                foreach ($map['terraformContext'] as $key1 => $value1) {
                    $model->terraformContext[$key1] = $value1;
                }
            }
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
