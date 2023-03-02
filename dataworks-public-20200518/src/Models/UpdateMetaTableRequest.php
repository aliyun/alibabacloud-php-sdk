<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class UpdateMetaTableRequest extends Model
{
    /**
     * @description The names of the labels that you want to add. Separate the labels with commas (,).
     *
     * @example a,b,c
     *
     * @var string
     */
    public $addedLabels;

    /**
     * @description The display name of the table.
     *
     * @var string
     */
    public $caption;

    /**
     * @description The ID of the category that you want to associate.
     *
     * @example 101
     *
     * @var int
     */
    public $categoryId;

    /**
     * @description The environment of the DataWorks workspace. Valid values: 0 and 1. The value 0 indicates the development environment. The value 1 indicates the production environment.
     *
     * @example 1
     *
     * @var int
     */
    public $envType;

    /**
     * @description The ID of the new owner. If this parameter is not specified, the owner ID is not updated.
     *
     * @example 12345
     *
     * @var string
     */
    public $newOwnerId;

    /**
     * @description The ID of the DataWorks workspace.
     *
     * @example 101
     *
     * @var int
     */
    public $projectId;

    /**
     * @description The names of labels that you want to delete. Separate the labels with commas (,).
     *
     * @example a,b,c
     *
     * @var string
     */
    public $removedLabels;

    /**
     * @description The schema information of the table. You need to configure this parameter if you enable the table schema in MaxCompute.
     *
     * @example default
     *
     * @var string
     */
    public $schema;

    /**
     * @description The globally unique identifier (GUID) of the table. Specify the GUID in the format of odps.{projectName}.{tableName}.
     *
     * @example odps.test.table1
     *
     * @var string
     */
    public $tableGuid;

    /**
     * @description The name of the table.
     *
     * @example table1
     *
     * @var string
     */
    public $tableName;

    /**
     * @description The scope in which the table is visible. Valid values: 0, 1, and 2. The value 0 indicates that the table is invisible to all workspace members. The value 1 indicates that the table is visible to all workspace members. The value 2 indicates that the table is visible to workspace members.
     *
     * @example 1
     *
     * @var int
     */
    public $visibility;
    protected $_name = [
        'addedLabels'   => 'AddedLabels',
        'caption'       => 'Caption',
        'categoryId'    => 'CategoryId',
        'envType'       => 'EnvType',
        'newOwnerId'    => 'NewOwnerId',
        'projectId'     => 'ProjectId',
        'removedLabels' => 'RemovedLabels',
        'schema'        => 'Schema',
        'tableGuid'     => 'TableGuid',
        'tableName'     => 'TableName',
        'visibility'    => 'Visibility',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->addedLabels) {
            $res['AddedLabels'] = $this->addedLabels;
        }
        if (null !== $this->caption) {
            $res['Caption'] = $this->caption;
        }
        if (null !== $this->categoryId) {
            $res['CategoryId'] = $this->categoryId;
        }
        if (null !== $this->envType) {
            $res['EnvType'] = $this->envType;
        }
        if (null !== $this->newOwnerId) {
            $res['NewOwnerId'] = $this->newOwnerId;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->removedLabels) {
            $res['RemovedLabels'] = $this->removedLabels;
        }
        if (null !== $this->schema) {
            $res['Schema'] = $this->schema;
        }
        if (null !== $this->tableGuid) {
            $res['TableGuid'] = $this->tableGuid;
        }
        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
        }
        if (null !== $this->visibility) {
            $res['Visibility'] = $this->visibility;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateMetaTableRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AddedLabels'])) {
            $model->addedLabels = $map['AddedLabels'];
        }
        if (isset($map['Caption'])) {
            $model->caption = $map['Caption'];
        }
        if (isset($map['CategoryId'])) {
            $model->categoryId = $map['CategoryId'];
        }
        if (isset($map['EnvType'])) {
            $model->envType = $map['EnvType'];
        }
        if (isset($map['NewOwnerId'])) {
            $model->newOwnerId = $map['NewOwnerId'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['RemovedLabels'])) {
            $model->removedLabels = $map['RemovedLabels'];
        }
        if (isset($map['Schema'])) {
            $model->schema = $map['Schema'];
        }
        if (isset($map['TableGuid'])) {
            $model->tableGuid = $map['TableGuid'];
        }
        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }
        if (isset($map['Visibility'])) {
            $model->visibility = $map['Visibility'];
        }

        return $model;
    }
}
