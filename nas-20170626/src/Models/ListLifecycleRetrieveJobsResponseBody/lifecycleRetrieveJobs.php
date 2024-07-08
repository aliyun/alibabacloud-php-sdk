<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models\ListLifecycleRetrieveJobsResponseBody;

use AlibabaCloud\Tea\Model;

class lifecycleRetrieveJobs extends Model
{
    /**
     * @description The time when the task was created.
     *
     * The time follows the ISO 8601 standard in the `yyyy-MM-ddTHH:mm:ssZ` format.
     * @example 2021-02-30T10:08:08Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The total number of files that are read in the data retrieval task.
     *
     * @example 100
     *
     * @var int
     */
    public $discoveredFileCount;

    /**
     * @description The ID of the file system.
     *
     * @example 31a8e4****
     *
     * @var string
     */
    public $fileSystemId;

    /**
     * @description The ID of the data retrieval task.
     *
     * @example lrj-nfstest-ia-160****853-hshvw
     *
     * @var string
     */
    public $jobId;

    /**
     * @description The execution path of the data retrieval task.
     *
     * @var string[]
     */
    public $paths;

    /**
     * @description The total number of files that are retrieved.
     *
     * @example 80
     *
     * @var int
     */
    public $retrievedFileCount;

    /**
     * @description The status of the data retrieval task. Valid values:
     *
     *   active: The task is running.
     *   canceled: The task is canceled.
     *   completed: The task is completed.
     *   failed: The task has failed.
     *
     * @example completed
     *
     * @var string
     */
    public $status;

    /**
     * @description The storage class.
     *
     *   InfrequentAccess: the IA storage class.
     *   Archive: the Archive storage class.
     *
     * @example InfrequentAccess
     *
     * @var string
     */
    public $storageType;

    /**
     * @description The time when the task was updated.
     *
     * The time follows the ISO 8601 standard in the `yyyy-MM-ddTHH:mm:ssZ` format.
     * @example 2021-02-30T11:08:08Z
     *
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'createTime'          => 'CreateTime',
        'discoveredFileCount' => 'DiscoveredFileCount',
        'fileSystemId'        => 'FileSystemId',
        'jobId'               => 'JobId',
        'paths'               => 'Paths',
        'retrievedFileCount'  => 'RetrievedFileCount',
        'status'              => 'Status',
        'storageType'         => 'StorageType',
        'updateTime'          => 'UpdateTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->discoveredFileCount) {
            $res['DiscoveredFileCount'] = $this->discoveredFileCount;
        }
        if (null !== $this->fileSystemId) {
            $res['FileSystemId'] = $this->fileSystemId;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->paths) {
            $res['Paths'] = $this->paths;
        }
        if (null !== $this->retrievedFileCount) {
            $res['RetrievedFileCount'] = $this->retrievedFileCount;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->storageType) {
            $res['StorageType'] = $this->storageType;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return lifecycleRetrieveJobs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['DiscoveredFileCount'])) {
            $model->discoveredFileCount = $map['DiscoveredFileCount'];
        }
        if (isset($map['FileSystemId'])) {
            $model->fileSystemId = $map['FileSystemId'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['Paths'])) {
            if (!empty($map['Paths'])) {
                $model->paths = $map['Paths'];
            }
        }
        if (isset($map['RetrievedFileCount'])) {
            $model->retrievedFileCount = $map['RetrievedFileCount'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['StorageType'])) {
            $model->storageType = $map['StorageType'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
