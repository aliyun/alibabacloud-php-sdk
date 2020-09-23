<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class UpdateMetaTableRequest extends Model
{
    /**
     * @var int
     */
    public $projectId;

    /**
     * @var string
     */
    public $tableName;

    /**
     * @var int
     */
    public $envType;

    /**
     * @var string
     */
    public $tableGuid;

    /**
     * @var string
     */
    public $newOwnerId;

    /**
     * @var string
     */
    public $addedLabels;

    /**
     * @var string
     */
    public $removedLabels;

    /**
     * @var int
     */
    public $categoryId;

    /**
     * @var int
     */
    public $visibility;

    /**
     * @var string
     */
    public $caption;
    protected $_name = [
        'projectId'     => 'ProjectId',
        'tableName'     => 'TableName',
        'envType'       => 'EnvType',
        'tableGuid'     => 'TableGuid',
        'newOwnerId'    => 'NewOwnerId',
        'addedLabels'   => 'AddedLabels',
        'removedLabels' => 'RemovedLabels',
        'categoryId'    => 'CategoryId',
        'visibility'    => 'Visibility',
        'caption'       => 'Caption',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
        }
        if (null !== $this->envType) {
            $res['EnvType'] = $this->envType;
        }
        if (null !== $this->tableGuid) {
            $res['TableGuid'] = $this->tableGuid;
        }
        if (null !== $this->newOwnerId) {
            $res['NewOwnerId'] = $this->newOwnerId;
        }
        if (null !== $this->addedLabels) {
            $res['AddedLabels'] = $this->addedLabels;
        }
        if (null !== $this->removedLabels) {
            $res['RemovedLabels'] = $this->removedLabels;
        }
        if (null !== $this->categoryId) {
            $res['CategoryId'] = $this->categoryId;
        }
        if (null !== $this->visibility) {
            $res['Visibility'] = $this->visibility;
        }
        if (null !== $this->caption) {
            $res['Caption'] = $this->caption;
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
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }
        if (isset($map['EnvType'])) {
            $model->envType = $map['EnvType'];
        }
        if (isset($map['TableGuid'])) {
            $model->tableGuid = $map['TableGuid'];
        }
        if (isset($map['NewOwnerId'])) {
            $model->newOwnerId = $map['NewOwnerId'];
        }
        if (isset($map['AddedLabels'])) {
            $model->addedLabels = $map['AddedLabels'];
        }
        if (isset($map['RemovedLabels'])) {
            $model->removedLabels = $map['RemovedLabels'];
        }
        if (isset($map['CategoryId'])) {
            $model->categoryId = $map['CategoryId'];
        }
        if (isset($map['Visibility'])) {
            $model->visibility = $map['Visibility'];
        }
        if (isset($map['Caption'])) {
            $model->caption = $map['Caption'];
        }

        return $model;
    }
}
