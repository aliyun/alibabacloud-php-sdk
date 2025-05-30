<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IaCService\V20210806\Models\ListResourceExportTasksResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ListResourceExportTasksResponseBody\exportTasks\excludeRules;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ListResourceExportTasksResponseBody\exportTasks\exportToModule;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ListResourceExportTasksResponseBody\exportTasks\includeRules;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ListResourceExportTasksResponseBody\exportTasks\modules;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ListResourceExportTasksResponseBody\exportTasks\variables;

class exportTasks extends Model
{
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
    public $exportStatus;

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
     * @var bool
     */
    public $hasDestroy;

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
    public $status;

    /**
     * @var variables[]
     */
    public $variables;
    protected $_name = [
        'createTime' => 'createTime',
        'description' => 'description',
        'elapsedTime' => 'elapsedTime',
        'excludeRules' => 'excludeRules',
        'exportStatus' => 'exportStatus',
        'exportTaskId' => 'exportTaskId',
        'exportToModule' => 'exportToModule',
        'exportVersion' => 'exportVersion',
        'hasDestroy' => 'hasDestroy',
        'includeRules' => 'includeRules',
        'modules' => 'modules',
        'name' => 'name',
        'status' => 'status',
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
        if (\is_array($this->variables)) {
            Model::validateArray($this->variables);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
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

        if (null !== $this->exportStatus) {
            $res['exportStatus'] = $this->exportStatus;
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

        if (null !== $this->hasDestroy) {
            $res['hasDestroy'] = $this->hasDestroy;
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

        if (null !== $this->status) {
            $res['status'] = $this->status;
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

        if (isset($map['exportStatus'])) {
            $model->exportStatus = $map['exportStatus'];
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

        if (isset($map['hasDestroy'])) {
            $model->hasDestroy = $map['hasDestroy'];
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

        if (isset($map['status'])) {
            $model->status = $map['status'];
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
