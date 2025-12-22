<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models\GetFunctionInstanceResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\GetFunctionInstanceResponseBody\result\belongs;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\GetFunctionInstanceResponseBody\result\createParameters;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\GetFunctionInstanceResponseBody\result\task;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\GetFunctionInstanceResponseBody\result\usageParameters;

class result extends Model
{
    /**
     * @var belongs
     */
    public $belongs;

    /**
     * @var createParameters[]
     */
    public $createParameters;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $cron;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $extendInfo;

    /**
     * @var string
     */
    public $functionName;

    /**
     * @var string
     */
    public $functionType;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var string
     */
    public $modelType;

    /**
     * @var string
     */
    public $source;

    /**
     * @var string
     */
    public $status;

    /**
     * @var task
     */
    public $task;

    /**
     * @var usageParameters[]
     */
    public $usageParameters;

    /**
     * @var int
     */
    public $versionId;
    protected $_name = [
        'belongs' => 'Belongs',
        'createParameters' => 'CreateParameters',
        'createTime' => 'CreateTime',
        'cron' => 'Cron',
        'description' => 'Description',
        'extendInfo' => 'ExtendInfo',
        'functionName' => 'FunctionName',
        'functionType' => 'FunctionType',
        'instanceName' => 'InstanceName',
        'modelType' => 'ModelType',
        'source' => 'Source',
        'status' => 'Status',
        'task' => 'Task',
        'usageParameters' => 'UsageParameters',
        'versionId' => 'VersionId',
    ];

    public function validate()
    {
        if (null !== $this->belongs) {
            $this->belongs->validate();
        }
        if (\is_array($this->createParameters)) {
            Model::validateArray($this->createParameters);
        }
        if (null !== $this->task) {
            $this->task->validate();
        }
        if (\is_array($this->usageParameters)) {
            Model::validateArray($this->usageParameters);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->belongs) {
            $res['Belongs'] = null !== $this->belongs ? $this->belongs->toArray($noStream) : $this->belongs;
        }

        if (null !== $this->createParameters) {
            if (\is_array($this->createParameters)) {
                $res['CreateParameters'] = [];
                $n1 = 0;
                foreach ($this->createParameters as $item1) {
                    $res['CreateParameters'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
            $res['Task'] = null !== $this->task ? $this->task->toArray($noStream) : $this->task;
        }

        if (null !== $this->usageParameters) {
            if (\is_array($this->usageParameters)) {
                $res['UsageParameters'] = [];
                $n1 = 0;
                foreach ($this->usageParameters as $item1) {
                    $res['UsageParameters'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->versionId) {
            $res['VersionId'] = $this->versionId;
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
        if (isset($map['Belongs'])) {
            $model->belongs = belongs::fromMap($map['Belongs']);
        }

        if (isset($map['CreateParameters'])) {
            if (!empty($map['CreateParameters'])) {
                $model->createParameters = [];
                $n1 = 0;
                foreach ($map['CreateParameters'] as $item1) {
                    $model->createParameters[$n1] = createParameters::fromMap($item1);
                    ++$n1;
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
                $n1 = 0;
                foreach ($map['UsageParameters'] as $item1) {
                    $model->usageParameters[$n1] = usageParameters::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['VersionId'])) {
            $model->versionId = $map['VersionId'];
        }

        return $model;
    }
}
