<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IaCService\V20210806\Models\GetResourceExportTaskResponseBody;

use AlibabaCloud\SDK\IaCService\V20210806\Models\GetResourceExportTaskResponseBody\task\excludeRules;
use AlibabaCloud\SDK\IaCService\V20210806\Models\GetResourceExportTaskResponseBody\task\exportToModule;
use AlibabaCloud\SDK\IaCService\V20210806\Models\GetResourceExportTaskResponseBody\task\includeRules;
use AlibabaCloud\SDK\IaCService\V20210806\Models\GetResourceExportTaskResponseBody\task\modules;
use AlibabaCloud\SDK\IaCService\V20210806\Models\GetResourceExportTaskResponseBody\task\variables;
use AlibabaCloud\Tea\Model;

class task extends Model
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
        'createTime'       => 'createTime',
        'description'      => 'description',
        'excludeRules'     => 'excludeRules',
        'exportTaskId'     => 'exportTaskId',
        'exportToModule'   => 'exportToModule',
        'exportVersion'    => 'exportVersion',
        'failedReason'     => 'failedReason',
        'includeRules'     => 'includeRules',
        'modules'          => 'modules',
        'name'             => 'name',
        'ramRole'          => 'ramRole',
        'status'           => 'status',
        'taskOutputPath'   => 'taskOutputPath',
        'terraformVersion' => 'terraformVersion',
        'triggerStrategy'  => 'triggerStrategy',
        'variables'        => 'variables',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->excludeRules) {
            $res['excludeRules'] = [];
            if (null !== $this->excludeRules && \is_array($this->excludeRules)) {
                $n = 0;
                foreach ($this->excludeRules as $item) {
                    $res['excludeRules'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->exportTaskId) {
            $res['exportTaskId'] = $this->exportTaskId;
        }
        if (null !== $this->exportToModule) {
            $res['exportToModule'] = null !== $this->exportToModule ? $this->exportToModule->toMap() : null;
        }
        if (null !== $this->exportVersion) {
            $res['exportVersion'] = $this->exportVersion;
        }
        if (null !== $this->failedReason) {
            $res['failedReason'] = $this->failedReason;
        }
        if (null !== $this->includeRules) {
            $res['includeRules'] = [];
            if (null !== $this->includeRules && \is_array($this->includeRules)) {
                $n = 0;
                foreach ($this->includeRules as $item) {
                    $res['includeRules'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->modules) {
            $res['modules'] = [];
            if (null !== $this->modules && \is_array($this->modules)) {
                $n = 0;
                foreach ($this->modules as $item) {
                    $res['modules'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (null !== $this->terraformVersion) {
            $res['terraformVersion'] = $this->terraformVersion;
        }
        if (null !== $this->triggerStrategy) {
            $res['triggerStrategy'] = $this->triggerStrategy;
        }
        if (null !== $this->variables) {
            $res['variables'] = [];
            if (null !== $this->variables && \is_array($this->variables)) {
                $n = 0;
                foreach ($this->variables as $item) {
                    $res['variables'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return task
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['excludeRules'])) {
            if (!empty($map['excludeRules'])) {
                $model->excludeRules = [];
                $n                   = 0;
                foreach ($map['excludeRules'] as $item) {
                    $model->excludeRules[$n++] = null !== $item ? excludeRules::fromMap($item) : $item;
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
                $n                   = 0;
                foreach ($map['includeRules'] as $item) {
                    $model->includeRules[$n++] = null !== $item ? includeRules::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['modules'])) {
            if (!empty($map['modules'])) {
                $model->modules = [];
                $n              = 0;
                foreach ($map['modules'] as $item) {
                    $model->modules[$n++] = null !== $item ? modules::fromMap($item) : $item;
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
        if (isset($map['terraformVersion'])) {
            $model->terraformVersion = $map['terraformVersion'];
        }
        if (isset($map['triggerStrategy'])) {
            $model->triggerStrategy = $map['triggerStrategy'];
        }
        if (isset($map['variables'])) {
            if (!empty($map['variables'])) {
                $model->variables = [];
                $n                = 0;
                foreach ($map['variables'] as $item) {
                    $model->variables[$n++] = null !== $item ? variables::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
