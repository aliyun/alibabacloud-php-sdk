<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models\GetFunctionInstanceResponseBody;

use AlibabaCloud\SDK\OpenSearch\V20171225\Models\GetFunctionInstanceResponseBody\result\belongs;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\GetFunctionInstanceResponseBody\result\createParameters;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\GetFunctionInstanceResponseBody\result\task;
use AlibabaCloud\Tea\Model;

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
        if (isset($map['VersionId'])) {
            $model->versionId = $map['VersionId'];
        }

        return $model;
    }
}
