<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\UpdateTableRequest\columns;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\UpdateTableRequest\themes;
use AlibabaCloud\Tea\Model;

class UpdateTableRequest extends Model
{
    /**
     * @description Specifies whether the table exists. Valid values:
     *
     *   true: The table exists.
     *   false: The table does not exist.
     *
     * This parameter is deprecated. Do not use this parameter.
     * @example odps.test
     *
     * @var string
     */
    public $appGuid;

    /**
     * @description The ID of the logical level.
     *
     * @example 101
     *
     * @var int
     */
    public $categoryId;

    /**
     * @var columns[]
     */
    public $columns;

    /**
     * @description The schema information of the table. You need to enter the schema information of the table if you enable the table schema in MaxCompute.
     *
     * @var string
     */
    public $comment;

    /**
     * @description Specifies whether the table that you want to update is a partitioned table. Valid values: 0 and 1. The value 0 indicates that the table is not a partitioned table. The value 1 indicates that the table is a partitioned table. This parameter is deprecated. Do not use this parameter.
     *
     * The Column.N.isPartitionCol parameter is used instead of the HasPart parameter to specify whether the MaxCompute table is a partitioned table. If the Column.N.isPartitionCol parameter is set to 1, the MaxCompute table is a partitioned table.
     * @example true
     *
     * @var bool
     */
    public $createIfNotExists;

    /**
     * @description The environment of the DataWorks workspace. Valid values: 0 and 1. The value 0 indicates the development environment. The value 1 indicates the production environment.
     *
     * @example odps://
     *
     * @var string
     */
    public $endpoint;

    /**
     * @description The globally unique identifier (GUID) of the MaxCompute project. Specify the GUID in the odps.{projectName} format.
     *
     * @example 1
     *
     * @var int
     */
    public $envType;

    /**
     * @description The storage location of the external table. This parameter is deprecated. Do not use this parameter.
     *
     * @example 1
     *
     * @var string
     */
    public $externalTableType;

    /**
     * @description The comment.
     *
     * @example 0
     *
     * @var int
     */
    public $hasPart;

    /**
     * @description The scope in which the table is visible. Valid values: 0, 1, and 2. The value 0 indicates that the table is invisible to all workspace members. The value 1 indicates that the table is visible to all workspace members. The value 2 indicates that the table is visible to workspace members.
     *
     * @example 0
     *
     * @var int
     */
    public $isView;

    /**
     * @description The ID of the associated category.
     *
     * @example 10
     *
     * @var int
     */
    public $lifeCycle;

    /**
     * @description The ID of the DataWorks workspace. You can log on to the DataWorks console to obtain the ID of the DataWorks workspace.
     *
     * @example location
     *
     * @var string
     */
    public $location;

    /**
     * @description The ID of the physical level.
     *
     * @example 101
     *
     * @var int
     */
    public $logicalLevelId;

    /**
     * @var string
     */
    public $ownerId;

    /**
     * @description The type of the external table. Valid values: 0, 1, 2, and 3. The value 0 indicates that the external table is an OSS external table. The value 1 indicates that the external table is a Tablestore external table. The value 2 indicates that the external table is a volume external table. The value 3 indicates that the external table is a MySQL external table. This parameter is deprecated. Do not use this parameter.
     *
     * @example 101
     *
     * @var int
     */
    public $physicsLevelId;

    /**
     * @description The name of the MaxCompute table.
     *
     * @example 101
     *
     * @var int
     */
    public $projectId;

    /**
     * @description The display name of the field.
     *
     * @example default
     *
     * @var string
     */
    public $schema;

    /**
     * @description The endpoint of MaxCompute. If this parameter is left empty, the endpoint of the MaxCompute project is used.
     *
     * @example abc
     *
     * @var string
     */
    public $tableName;

    /**
     * @var themes[]
     */
    public $themes;

    /**
     * @description The lifecycle of the table. Unit: days. If this parameter is left empty, the table is permanently stored.
     *
     * @example 1
     *
     * @var int
     */
    public $visibility;
    protected $_name = [
        'appGuid'           => 'AppGuid',
        'categoryId'        => 'CategoryId',
        'columns'           => 'Columns',
        'comment'           => 'Comment',
        'createIfNotExists' => 'CreateIfNotExists',
        'endpoint'          => 'Endpoint',
        'envType'           => 'EnvType',
        'externalTableType' => 'ExternalTableType',
        'hasPart'           => 'HasPart',
        'isView'            => 'IsView',
        'lifeCycle'         => 'LifeCycle',
        'location'          => 'Location',
        'logicalLevelId'    => 'LogicalLevelId',
        'ownerId'           => 'OwnerId',
        'physicsLevelId'    => 'PhysicsLevelId',
        'projectId'         => 'ProjectId',
        'schema'            => 'Schema',
        'tableName'         => 'TableName',
        'themes'            => 'Themes',
        'visibility'        => 'Visibility',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appGuid) {
            $res['AppGuid'] = $this->appGuid;
        }
        if (null !== $this->categoryId) {
            $res['CategoryId'] = $this->categoryId;
        }
        if (null !== $this->columns) {
            $res['Columns'] = [];
            if (null !== $this->columns && \is_array($this->columns)) {
                $n = 0;
                foreach ($this->columns as $item) {
                    $res['Columns'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }
        if (null !== $this->createIfNotExists) {
            $res['CreateIfNotExists'] = $this->createIfNotExists;
        }
        if (null !== $this->endpoint) {
            $res['Endpoint'] = $this->endpoint;
        }
        if (null !== $this->envType) {
            $res['EnvType'] = $this->envType;
        }
        if (null !== $this->externalTableType) {
            $res['ExternalTableType'] = $this->externalTableType;
        }
        if (null !== $this->hasPart) {
            $res['HasPart'] = $this->hasPart;
        }
        if (null !== $this->isView) {
            $res['IsView'] = $this->isView;
        }
        if (null !== $this->lifeCycle) {
            $res['LifeCycle'] = $this->lifeCycle;
        }
        if (null !== $this->location) {
            $res['Location'] = $this->location;
        }
        if (null !== $this->logicalLevelId) {
            $res['LogicalLevelId'] = $this->logicalLevelId;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->physicsLevelId) {
            $res['PhysicsLevelId'] = $this->physicsLevelId;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->schema) {
            $res['Schema'] = $this->schema;
        }
        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
        }
        if (null !== $this->themes) {
            $res['Themes'] = [];
            if (null !== $this->themes && \is_array($this->themes)) {
                $n = 0;
                foreach ($this->themes as $item) {
                    $res['Themes'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->visibility) {
            $res['Visibility'] = $this->visibility;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateTableRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppGuid'])) {
            $model->appGuid = $map['AppGuid'];
        }
        if (isset($map['CategoryId'])) {
            $model->categoryId = $map['CategoryId'];
        }
        if (isset($map['Columns'])) {
            if (!empty($map['Columns'])) {
                $model->columns = [];
                $n              = 0;
                foreach ($map['Columns'] as $item) {
                    $model->columns[$n++] = null !== $item ? columns::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }
        if (isset($map['CreateIfNotExists'])) {
            $model->createIfNotExists = $map['CreateIfNotExists'];
        }
        if (isset($map['Endpoint'])) {
            $model->endpoint = $map['Endpoint'];
        }
        if (isset($map['EnvType'])) {
            $model->envType = $map['EnvType'];
        }
        if (isset($map['ExternalTableType'])) {
            $model->externalTableType = $map['ExternalTableType'];
        }
        if (isset($map['HasPart'])) {
            $model->hasPart = $map['HasPart'];
        }
        if (isset($map['IsView'])) {
            $model->isView = $map['IsView'];
        }
        if (isset($map['LifeCycle'])) {
            $model->lifeCycle = $map['LifeCycle'];
        }
        if (isset($map['Location'])) {
            $model->location = $map['Location'];
        }
        if (isset($map['LogicalLevelId'])) {
            $model->logicalLevelId = $map['LogicalLevelId'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['PhysicsLevelId'])) {
            $model->physicsLevelId = $map['PhysicsLevelId'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['Schema'])) {
            $model->schema = $map['Schema'];
        }
        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }
        if (isset($map['Themes'])) {
            if (!empty($map['Themes'])) {
                $model->themes = [];
                $n             = 0;
                foreach ($map['Themes'] as $item) {
                    $model->themes[$n++] = null !== $item ? themes::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Visibility'])) {
            $model->visibility = $map['Visibility'];
        }

        return $model;
    }
}
