<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models\GetFunctionInstanceResponseBody;

use AlibabaCloud\SDK\OpenSearch\V20171225\Models\GetFunctionInstanceResponseBody\result\belongs;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\GetFunctionInstanceResponseBody\result\createParameters;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\GetFunctionInstanceResponseBody\result\task;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\GetFunctionInstanceResponseBody\result\usageParameters;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description The information about the instance.
     *
     * @var belongs
     */
    public $belongs;

    /**
     * @description The parameters that are used to create the instance.
     *
     * @var createParameters[]
     */
    public $createParameters;

    /**
     * @description The time when the task was created. Unit: milliseconds.
     *
     * @example 1234
     *
     * @var int
     */
    public $createTime;

    /**
     * @description The cron expression used to schedule training, in the format of (Minutes Hours DayofMonth Month DayofWeek). If the value is empty, it indicates that no periodic training is performed.
     *
     * @example 0 3 ? \* 0,1,3,5 (at 3 a.m. on Sunday, Monday, Wednesday, and Friday)
     *
     * @var string
     */
    public $cron;

    /**
     * @description The description of the instance.
     *
     * @example instance descriptions
     *
     * @var string
     */
    public $description;

    /**
     * @description The extended information, which is a JSON string.
     *
     * @example {\"dataReport\":{},\"errors\":{}}
     *
     * @var string
     */
    public $extendInfo;

    /**
     * @description The name of the feature.
     *
     * @example ctr
     *
     * @var string
     */
    public $functionName;

    /**
     * @description The type of the feature.
     *
     * @example PAAS
     *
     * @var string
     */
    public $functionType;

    /**
     * @description The name of the instance.
     *
     * @example ctr_test
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description The type of the model.
     *
     * @example tf_checkpoint
     *
     * @var string
     */
    public $modelType;

    /**
     * @description How the instance is created. Valid values:
     *
     *   user: The instance is created by user.
     *   builtin: The instance is created by the system.
     *
     * @example user
     *
     * @var string
     */
    public $source;

    /**
     * @description The status of the instance. Valid values:
     *
     * 2.  available: Models can be used.
     * @example available
     *
     * @var string
     */
    public $status;

    /**
     * @description The information about the training task. This parameter is not displayed if no task is available.
     *
     * @var task
     */
    public $task;

    /**
     * @description The parameters that are used.
     *
     * @var usageParameters[]
     */
    public $usageParameters;

    /**
     * @description The ID of the version.
     *
     * @example 101
     *
     * @var int
     */
    public $versionId;
    protected $_name = [
        'belongs'          => 'Belongs',
        'createParameters' => 'CreateParameters',
        'createTime'       => 'CreateTime',
        'cron'             => 'Cron',
        'description'      => 'Description',
        'extendInfo'       => 'ExtendInfo',
        'functionName'     => 'FunctionName',
        'functionType'     => 'FunctionType',
        'instanceName'     => 'InstanceName',
        'modelType'        => 'ModelType',
        'source'           => 'Source',
        'status'           => 'Status',
        'task'             => 'Task',
        'usageParameters'  => 'UsageParameters',
        'versionId'        => 'VersionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->belongs) {
            $res['Belongs'] = null !== $this->belongs ? $this->belongs->toMap() : null;
        }
        if (null !== $this->createParameters) {
            $res['CreateParameters'] = [];
            if (null !== $this->createParameters && \is_array($this->createParameters)) {
                $n = 0;
                foreach ($this->createParameters as $item) {
                    $res['CreateParameters'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->cron) {
            $res['Cron'] = $this->cron;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->extendInfo) {
            $res['ExtendInfo'] = $this->extendInfo;
        }
        if (null !== $this->functionName) {
            $res['FunctionName'] = $this->functionName;
        }
        if (null !== $this->functionType) {
            $res['FunctionType'] = $this->functionType;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->modelType) {
            $res['ModelType'] = $this->modelType;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->task) {
            $res['Task'] = null !== $this->task ? $this->task->toMap() : null;
        }
        if (null !== $this->usageParameters) {
            $res['UsageParameters'] = [];
            if (null !== $this->usageParameters && \is_array($this->usageParameters)) {
                $n = 0;
                foreach ($this->usageParameters as $item) {
                    $res['UsageParameters'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->versionId) {
            $res['VersionId'] = $this->versionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Belongs'])) {
            $model->belongs = belongs::fromMap($map['Belongs']);
        }
        if (isset($map['CreateParameters'])) {
            if (!empty($map['CreateParameters'])) {
                $model->createParameters = [];
                $n                       = 0;
                foreach ($map['CreateParameters'] as $item) {
                    $model->createParameters[$n++] = null !== $item ? createParameters::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Cron'])) {
            $model->cron = $map['Cron'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ExtendInfo'])) {
            $model->extendInfo = $map['ExtendInfo'];
        }
        if (isset($map['FunctionName'])) {
            $model->functionName = $map['FunctionName'];
        }
        if (isset($map['FunctionType'])) {
            $model->functionType = $map['FunctionType'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['ModelType'])) {
            $model->modelType = $map['ModelType'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Task'])) {
            $model->task = task::fromMap($map['Task']);
        }
        if (isset($map['UsageParameters'])) {
            if (!empty($map['UsageParameters'])) {
                $model->usageParameters = [];
                $n                      = 0;
                foreach ($map['UsageParameters'] as $item) {
                    $model->usageParameters[$n++] = null !== $item ? usageParameters::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['VersionId'])) {
            $model->versionId = $map['VersionId'];
        }

        return $model;
    }
}
