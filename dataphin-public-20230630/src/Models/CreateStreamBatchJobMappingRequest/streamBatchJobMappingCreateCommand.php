<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\CreateStreamBatchJobMappingRequest;

use AlibabaCloud\Dara\Model;

class streamBatchJobMappingCreateCommand extends Model
{
    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $directory;

    /**
     * @var string
     */
    public $engineVersion;

    /**
     * @var string
     */
    public $env;

    /**
     * @var string
     */
    public $fileName;

    /**
     * @var string
     */
    public $fileType;

    /**
     * @var int
     */
    public $projectId;

    /**
     * @var string
     */
    public $queueName;

    /**
     * @var string
     */
    public $vvpClusterType;
    protected $_name = [
        'clusterId' => 'ClusterId',
        'description' => 'Description',
        'directory' => 'Directory',
        'engineVersion' => 'EngineVersion',
        'env' => 'Env',
        'fileName' => 'FileName',
        'fileType' => 'FileType',
        'projectId' => 'ProjectId',
        'queueName' => 'QueueName',
        'vvpClusterType' => 'VvpClusterType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
