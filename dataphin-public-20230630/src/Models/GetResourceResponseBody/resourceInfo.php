<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetResourceResponseBody;

use AlibabaCloud\Tea\Model;

class resourceInfo extends Model
{
    /**
     * @example MAX_COMPUTE
     *
     * @var string
     */
    public $computeEngineType;

    /**
     * @example 30011021
     *
     * @var string
     */
    public $creator;

    /**
     * @example 测试
     *
     * @var string
     */
    public $description;

    /**
     * @example /
     *
     * @var string
     */
    public $directory;

    /**
     * @example 2025-06-10 10:01:01
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @example 2025-06-10 10:01:01
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @example 10200121011
     *
     * @var int
     */
    public $id;

    /**
     * @example 30011021
     *
     * @var string
     */
    public $lastModifier;

    /**
     * @example udf_sleep.jar
     *
     * @var string
     */
    public $name;

    /**
     * @example 1030111021
     *
     * @var int
     */
    public $projectId;

    /**
     * @example JAR
     *
     * @var string
     */
    public $resourceType;

    /**
     * @example 102400
     *
     * @var int
     */
    public $size;

    /**
     * @example 300011448/711833/cdcd1c44-f1ee-46bb-b318-1d123dbabf6c
     *
     * @var string
     */
    public $storageAddress;
    protected $_name = [
        'computeEngineType' => 'ComputeEngineType',
        'creator' => 'Creator',
        'description' => 'Description',
        'directory' => 'Directory',
        'gmtCreate' => 'GmtCreate',
        'gmtModified' => 'GmtModified',
        'id' => 'Id',
        'lastModifier' => 'LastModifier',
        'name' => 'Name',
        'projectId' => 'ProjectId',
        'resourceType' => 'ResourceType',
        'size' => 'Size',
        'storageAddress' => 'StorageAddress',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->computeEngineType) {
            $res['ComputeEngineType'] = $this->computeEngineType;
        }
        if (null !== $this->creator) {
            $res['Creator'] = $this->creator;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->directory) {
            $res['Directory'] = $this->directory;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->lastModifier) {
            $res['LastModifier'] = $this->lastModifier;
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
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }
        if (null !== $this->storageAddress) {
            $res['StorageAddress'] = $this->storageAddress;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resourceInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ComputeEngineType'])) {
            $model->computeEngineType = $map['ComputeEngineType'];
        }
        if (isset($map['Creator'])) {
            $model->creator = $map['Creator'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Directory'])) {
            $model->directory = $map['Directory'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['LastModifier'])) {
            $model->lastModifier = $map['LastModifier'];
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
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }
        if (isset($map['StorageAddress'])) {
            $model->storageAddress = $map['StorageAddress'];
        }

        return $model;
    }
}
