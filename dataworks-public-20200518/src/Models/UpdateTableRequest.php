<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\UpdateTableRequest\columns;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\UpdateTableRequest\themes;
use AlibabaCloud\Tea\Model;

class UpdateTableRequest extends Model
{
    /**
     * @var int
     */
    public $isView;

    /**
     * @var int
     */
    public $visibility;

    /**
     * @var int
     */
    public $lifeCycle;

    /**
     * @var int
     */
    public $categoryId;

    /**
     * @var int
     */
    public $logicalLevelId;

    /**
     * @var int
     */
    public $physicsLevelId;

    /**
     * @var string
     */
    public $externalTableType;

    /**
     * @var string
     */
    public $location;

    /**
     * @var int
     */
    public $projectId;

    /**
     * @var string
     */
    public $tableName;

    /**
     * @var string
     */
    public $endpoint;

    /**
     * @var int
     */
    public $envType;

    /**
     * @var string
     */
    public $appGuid;

    /**
     * @var bool
     */
    public $createIfNotExists;

    /**
     * @var string
     */
    public $ownerId;

    /**
     * @var int
     */
    public $hasPart;

    /**
     * @var string
     */
    public $comment;

    /**
     * @var columns[]
     */
    public $columns;

    /**
     * @var themes[]
     */
    public $themes;
    protected $_name = [
        'isView'            => 'IsView',
        'visibility'        => 'Visibility',
        'lifeCycle'         => 'LifeCycle',
        'categoryId'        => 'CategoryId',
        'logicalLevelId'    => 'LogicalLevelId',
        'physicsLevelId'    => 'PhysicsLevelId',
        'externalTableType' => 'ExternalTableType',
        'location'          => 'Location',
        'projectId'         => 'ProjectId',
        'tableName'         => 'TableName',
        'endpoint'          => 'Endpoint',
        'envType'           => 'EnvType',
        'appGuid'           => 'AppGuid',
        'createIfNotExists' => 'CreateIfNotExists',
        'ownerId'           => 'OwnerId',
        'hasPart'           => 'HasPart',
        'comment'           => 'Comment',
        'columns'           => 'Columns',
        'themes'            => 'Themes',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->isView) {
            $res['IsView'] = $this->isView;
        }
        if (null !== $this->visibility) {
            $res['Visibility'] = $this->visibility;
        }
        if (null !== $this->lifeCycle) {
            $res['LifeCycle'] = $this->lifeCycle;
        }
        if (null !== $this->categoryId) {
            $res['CategoryId'] = $this->categoryId;
        }
        if (null !== $this->logicalLevelId) {
            $res['LogicalLevelId'] = $this->logicalLevelId;
        }
        if (null !== $this->physicsLevelId) {
            $res['PhysicsLevelId'] = $this->physicsLevelId;
        }
        if (null !== $this->externalTableType) {
            $res['ExternalTableType'] = $this->externalTableType;
        }
        if (null !== $this->location) {
            $res['Location'] = $this->location;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
        }
        if (null !== $this->endpoint) {
            $res['Endpoint'] = $this->endpoint;
        }
        if (null !== $this->envType) {
            $res['EnvType'] = $this->envType;
        }
        if (null !== $this->appGuid) {
            $res['AppGuid'] = $this->appGuid;
        }
        if (null !== $this->createIfNotExists) {
            $res['CreateIfNotExists'] = $this->createIfNotExists;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->hasPart) {
            $res['HasPart'] = $this->hasPart;
        }
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
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
        if (null !== $this->themes) {
            $res['Themes'] = [];
            if (null !== $this->themes && \is_array($this->themes)) {
                $n = 0;
                foreach ($this->themes as $item) {
                    $res['Themes'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['IsView'])) {
            $model->isView = $map['IsView'];
        }
        if (isset($map['Visibility'])) {
            $model->visibility = $map['Visibility'];
        }
        if (isset($map['LifeCycle'])) {
            $model->lifeCycle = $map['LifeCycle'];
        }
        if (isset($map['CategoryId'])) {
            $model->categoryId = $map['CategoryId'];
        }
        if (isset($map['LogicalLevelId'])) {
            $model->logicalLevelId = $map['LogicalLevelId'];
        }
        if (isset($map['PhysicsLevelId'])) {
            $model->physicsLevelId = $map['PhysicsLevelId'];
        }
        if (isset($map['ExternalTableType'])) {
            $model->externalTableType = $map['ExternalTableType'];
        }
        if (isset($map['Location'])) {
            $model->location = $map['Location'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }
        if (isset($map['Endpoint'])) {
            $model->endpoint = $map['Endpoint'];
        }
        if (isset($map['EnvType'])) {
            $model->envType = $map['EnvType'];
        }
        if (isset($map['AppGuid'])) {
            $model->appGuid = $map['AppGuid'];
        }
        if (isset($map['CreateIfNotExists'])) {
            $model->createIfNotExists = $map['CreateIfNotExists'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['HasPart'])) {
            $model->hasPart = $map['HasPart'];
        }
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
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
        if (isset($map['Themes'])) {
            if (!empty($map['Themes'])) {
                $model->themes = [];
                $n             = 0;
                foreach ($map['Themes'] as $item) {
                    $model->themes[$n++] = null !== $item ? themes::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
