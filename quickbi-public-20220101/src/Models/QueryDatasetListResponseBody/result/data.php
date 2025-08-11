<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryDatasetListResponseBody\result;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryDatasetListResponseBody\result\data\dataSource;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryDatasetListResponseBody\result\data\directory;

class data extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @var dataSource
     */
    public $dataSource;

    /**
     * @var string
     */
    public $datasetId;

    /**
     * @var string
     */
    public $datasetName;

    /**
     * @var string
     */
    public $description;

    /**
     * @var directory
     */
    public $directory;

    /**
     * @var string
     */
    public $modifyTime;

    /**
     * @var bool
     */
    public $openOfflineAcceleration;

    /**
     * @var string
     */
    public $ownerId;

    /**
     * @var string
     */
    public $ownerName;

    /**
     * @var bool
     */
    public $rowLevel;

    /**
     * @var string
     */
    public $workspaceId;

    /**
     * @var string
     */
    public $workspaceName;
    protected $_name = [
        'createTime' => 'CreateTime',
        'dataSource' => 'DataSource',
        'datasetId' => 'DatasetId',
        'datasetName' => 'DatasetName',
        'description' => 'Description',
        'directory' => 'Directory',
        'modifyTime' => 'ModifyTime',
        'openOfflineAcceleration' => 'OpenOfflineAcceleration',
        'ownerId' => 'OwnerId',
        'ownerName' => 'OwnerName',
        'rowLevel' => 'RowLevel',
        'workspaceId' => 'WorkspaceId',
        'workspaceName' => 'WorkspaceName',
    ];

    public function validate()
    {
        if (null !== $this->dataSource) {
            $this->dataSource->validate();
        }
        if (null !== $this->directory) {
            $this->directory->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->dataSource) {
            $res['DataSource'] = null !== $this->dataSource ? $this->dataSource->toArray($noStream) : $this->dataSource;
        }

        if (null !== $this->datasetId) {
            $res['DatasetId'] = $this->datasetId;
        }

        if (null !== $this->datasetName) {
            $res['DatasetName'] = $this->datasetName;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->directory) {
            $res['Directory'] = null !== $this->directory ? $this->directory->toArray($noStream) : $this->directory;
        }

        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
        }

        if (null !== $this->openOfflineAcceleration) {
            $res['OpenOfflineAcceleration'] = $this->openOfflineAcceleration;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->ownerName) {
            $res['OwnerName'] = $this->ownerName;
        }

        if (null !== $this->rowLevel) {
            $res['RowLevel'] = $this->rowLevel;
        }

        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
        }

        if (null !== $this->workspaceName) {
            $res['WorkspaceName'] = $this->workspaceName;
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
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['DataSource'])) {
            $model->dataSource = dataSource::fromMap($map['DataSource']);
        }

        if (isset($map['DatasetId'])) {
            $model->datasetId = $map['DatasetId'];
        }

        if (isset($map['DatasetName'])) {
            $model->datasetName = $map['DatasetName'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['Directory'])) {
            $model->directory = directory::fromMap($map['Directory']);
        }

        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }

        if (isset($map['OpenOfflineAcceleration'])) {
            $model->openOfflineAcceleration = $map['OpenOfflineAcceleration'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['OwnerName'])) {
            $model->ownerName = $map['OwnerName'];
        }

        if (isset($map['RowLevel'])) {
            $model->rowLevel = $map['RowLevel'];
        }

        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        if (isset($map['WorkspaceName'])) {
            $model->workspaceName = $map['WorkspaceName'];
        }

        return $model;
    }
}
