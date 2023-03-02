<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\ExportZookeeperDataResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The content of the task.
     *
     * @var mixed[]
     */
    public $contentMap;

    /**
     * @description The time when the task was created.
     *
     * @example 1631001140913
     *
     * @var int
     */
    public $createTime;

    /**
     * @description The type of the object that is exported. Valid values:
     *
     *   transactionLog: transaction logs
     *   snapshot: snapshots
     *
     * @example snapshot
     *
     * @var string
     */
    public $exportType;

    /**
     * @description The extended information.
     *
     * @example {}
     *
     * @var string
     */
    public $extend;

    /**
     * @description The ID of the task.
     *
     * @example 1
     *
     * @var int
     */
    public $id;

    /**
     * @description The ID of the instance.
     *
     * @example mse-cn-st21ri2****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The ID of the associated task at the underlying layer. This parameter is used only to troubleshoot failures.
     *
     * @example 10
     *
     * @var string
     */
    public $kubeoneTaskIds;

    /**
     * @description The task status. Valid values:
     *
     *   CREATE: The task is being created.
     *   RUNNING: The task is being executed.
     *   FINISH: The task is completed.
     *   FAILED: The task failed.
     *   EXPIRE: The task has expired.
     *
     * @example FINISH
     *
     * @var string
     */
    public $status;

    /**
     * @description The last modification time.
     *
     * @example 1632979237663
     *
     * @var int
     */
    public $updateTime;
    protected $_name = [
        'contentMap'     => 'ContentMap',
        'createTime'     => 'CreateTime',
        'exportType'     => 'ExportType',
        'extend'         => 'Extend',
        'id'             => 'Id',
        'instanceId'     => 'InstanceId',
        'kubeoneTaskIds' => 'KubeoneTaskIds',
        'status'         => 'Status',
        'updateTime'     => 'UpdateTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->contentMap) {
            $res['ContentMap'] = $this->contentMap;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->exportType) {
            $res['ExportType'] = $this->exportType;
        }
        if (null !== $this->extend) {
            $res['Extend'] = $this->extend;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->kubeoneTaskIds) {
            $res['KubeoneTaskIds'] = $this->kubeoneTaskIds;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ContentMap'])) {
            $model->contentMap = $map['ContentMap'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['ExportType'])) {
            $model->exportType = $map['ExportType'];
        }
        if (isset($map['Extend'])) {
            $model->extend = $map['Extend'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['KubeoneTaskIds'])) {
            $model->kubeoneTaskIds = $map['KubeoneTaskIds'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
