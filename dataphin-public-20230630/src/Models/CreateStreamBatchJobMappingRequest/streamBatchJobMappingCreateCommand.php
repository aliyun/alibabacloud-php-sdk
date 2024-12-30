<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\CreateStreamBatchJobMappingRequest;

use AlibabaCloud\Tea\Model;

class streamBatchJobMappingCreateCommand extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 61187014-a3ba-4cdd-8609-1f0aa3df4a3d
     *
     * @var string
     */
    public $clusterId;

    /**
     * @example 这是一段任务的描述信息
     *
     * @var string
     */
    public $description;

    /**
     * @description This parameter is required.
     *
     * @example /karel
     *
     * @var string
     */
    public $directory;

    /**
     * @description This parameter is required.
     *
     * @example vvr-8.0.9-flink-1.17
     *
     * @var string
     */
    public $engineVersion;

    /**
     * @description This parameter is required.
     *
     * @example DEV
     *
     * @var string
     */
    public $env;

    /**
     * @description This parameter is required.
     *
     * @example karel_hover_3
     *
     * @var string
     */
    public $fileName;

    /**
     * @description This parameter is required.
     *
     * @example FLINK_SQL
     *
     * @var string
     */
    public $fileType;

    /**
     * @description This parameter is required.
     *
     * @example 7081229106458752
     *
     * @var int
     */
    public $projectId;

    /**
     * @description This parameter is required.
     *
     * @example default-queue
     *
     * @var string
     */
    public $queueName;

    /**
     * @description This parameter is required.
     *
     * @example PREJOB
     *
     * @var string
     */
    public $vvpClusterType;
    protected $_name = [
        'clusterId'      => 'ClusterId',
        'description'    => 'Description',
        'directory'      => 'Directory',
        'engineVersion'  => 'EngineVersion',
        'env'            => 'Env',
        'fileName'       => 'FileName',
        'fileType'       => 'FileType',
        'projectId'      => 'ProjectId',
        'queueName'      => 'QueueName',
        'vvpClusterType' => 'VvpClusterType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->directory) {
            $res['Directory'] = $this->directory;
        }
        if (null !== $this->engineVersion) {
            $res['EngineVersion'] = $this->engineVersion;
        }
        if (null !== $this->env) {
            $res['Env'] = $this->env;
        }
        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }
        if (null !== $this->fileType) {
            $res['FileType'] = $this->fileType;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->queueName) {
            $res['QueueName'] = $this->queueName;
        }
        if (null !== $this->vvpClusterType) {
            $res['VvpClusterType'] = $this->vvpClusterType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return streamBatchJobMappingCreateCommand
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Directory'])) {
            $model->directory = $map['Directory'];
        }
        if (isset($map['EngineVersion'])) {
            $model->engineVersion = $map['EngineVersion'];
        }
        if (isset($map['Env'])) {
            $model->env = $map['Env'];
        }
        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }
        if (isset($map['FileType'])) {
            $model->fileType = $map['FileType'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['QueueName'])) {
            $model->queueName = $map['QueueName'];
        }
        if (isset($map['VvpClusterType'])) {
            $model->vvpClusterType = $map['VvpClusterType'];
        }

        return $model;
    }
}
