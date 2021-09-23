<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models\ListLifecycleRetrieveJobsResponseBody;

use AlibabaCloud\Tea\Model;

class lifecycleRetrieveJobs extends Model
{
    /**
     * @var string
     */
    public $fileSystemId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $discoveredFileCount;

    /**
     * @var string
     */
    public $updateTime;

    /**
     * @var string[]
     */
    public $paths;

    /**
     * @var int
     */
    public $retrievedFileCount;

    /**
     * @var string
     */
    public $jobId;

    /**
     * @var string
     */
    public $createTime;
    protected $_name = [
        'fileSystemId'        => 'FileSystemId',
        'status'              => 'Status',
        'discoveredFileCount' => 'DiscoveredFileCount',
        'updateTime'          => 'UpdateTime',
        'paths'               => 'Paths',
        'retrievedFileCount'  => 'RetrievedFileCount',
        'jobId'               => 'JobId',
        'createTime'          => 'CreateTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fileSystemId) {
            $res['FileSystemId'] = $this->fileSystemId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->discoveredFileCount) {
            $res['DiscoveredFileCount'] = $this->discoveredFileCount;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->paths) {
            $res['Paths'] = $this->paths;
        }
        if (null !== $this->retrievedFileCount) {
            $res['RetrievedFileCount'] = $this->retrievedFileCount;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
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
        if (isset($map['FileSystemId'])) {
            $model->fileSystemId = $map['FileSystemId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['DiscoveredFileCount'])) {
            $model->discoveredFileCount = $map['DiscoveredFileCount'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['Paths'])) {
            if (!empty($map['Paths'])) {
                $model->paths = $map['Paths'];
            }
        }
        if (isset($map['RetrievedFileCount'])) {
            $model->retrievedFileCount = $map['RetrievedFileCount'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        return $model;
    }
}
