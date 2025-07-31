<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\CreateResourceRequest;

use AlibabaCloud\Tea\Model;

class createCommand extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example xx 测试
     *
     * @var string
     */
    public $comment;

    /**
     * @description This parameter is required.
     *
     * @example MAX_COMPUTE
     *
     * @var string
     */
    public $computeEngineType;

    /**
     * @description This parameter is required.
     *
     * @example xx 测试
     *
     * @var string
     */
    public $description;

    /**
     * @description This parameter is required.
     *
     * @example /
     *
     * @var string
     */
    public $directory;

    /**
     * @description This parameter is required.
     *
     * @example udf_sleep.jar
     *
     * @var string
     */
    public $name;

    /**
     * @description This parameter is required.
     *
     * @example 711833
     *
     * @var int
     */
    public $projectId;

    /**
     * @description This parameter is required.
     *
     * @example JAR
     *
     * @var string
     */
    public $resourceType;

    /**
     * @description This parameter is required.
     *
     * @example 300011448/711833/cdcd1c44-f1ee-46bb-b318-1d123dbabf6c
     *
     * @var string
     */
    public $storageAddress;
    protected $_name = [
        'comment' => 'Comment',
        'computeEngineType' => 'ComputeEngineType',
        'description' => 'Description',
        'directory' => 'Directory',
        'name' => 'Name',
        'projectId' => 'ProjectId',
        'resourceType' => 'ResourceType',
        'storageAddress' => 'StorageAddress',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }
        if (null !== $this->computeEngineType) {
            $res['ComputeEngineType'] = $this->computeEngineType;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->directory) {
            $res['Directory'] = $this->directory;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->storageAddress) {
            $res['StorageAddress'] = $this->storageAddress;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return createCommand
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }
        if (isset($map['ComputeEngineType'])) {
            $model->computeEngineType = $map['ComputeEngineType'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Directory'])) {
            $model->directory = $map['Directory'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['StorageAddress'])) {
            $model->storageAddress = $map['StorageAddress'];
        }

        return $model;
    }
}
