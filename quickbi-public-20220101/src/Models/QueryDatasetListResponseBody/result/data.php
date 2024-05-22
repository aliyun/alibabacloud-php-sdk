<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryDatasetListResponseBody\result;

use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryDatasetListResponseBody\result\data\dataSource;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryDatasetListResponseBody\result\data\directory;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The details of the dataset list.
     *
     * @example 2020-11-02 10:36:05
     *
     * @var string
     */
    public $createTime;

    /**
     * @description Test Space
     *
     * @var dataSource
     */
    public $dataSource;

    /**
     * @description The name of the workspace.
     *
     * @example 5820f58c-c734-4d8a-baf1-7979af4f****
     *
     * @var string
     */
    public $datasetId;

    /**
     * @description Tom
     *
     * @example company_sales_record_copy12
     *
     * @var string
     */
    public $datasetName;

    /**
     * @description The number of rows per page set when the interface is requested.
     *
     * @example The total number of rows in the table.
     *
     * @var string
     */
    public $description;

    /**
     * @description The information about the data source to which the dataset belongs.
     *
     * @var directory
     */
    public $directory;

    /**
     * @description The nickname of the dataset owner.
     *
     * @example 2020-11-02 10:36:05
     *
     * @var string
     */
    public $modifyTime;

    /**
     * @var bool
     */
    public $openOfflineAcceleration;

    /**
     * @description The creation time.
     *
     * @example 136516262323****
     *
     * @var string
     */
    public $ownerId;

    /**
     * @description Whether to enable row-level permissions. Valid values:
     *
     *   true: The VIP Netty channel is enabled.
     *   false: The incremental log backup feature is disabled.
     *
     * @example The ID of the workspace.
     *
     * @var string
     */
    public $ownerName;

    /**
     * @description The total number of pages returned.
     *
     * @example true
     *
     * @var bool
     */
    public $rowLevel;

    /**
     * @description The page number of the returned page.
     *
     * @example 95296e95-ca89-4c7d-8af9-dedf0ad06adf
     *
     * @var string
     */
    public $workspaceId;

    /**
     * @description The description of the dataset.
     *
     * @example Test dataset
     *
     * @var string
     */
    public $workspaceName;
    protected $_name = [
        'createTime'              => 'CreateTime',
        'dataSource'              => 'DataSource',
        'datasetId'               => 'DatasetId',
        'datasetName'             => 'DatasetName',
        'description'             => 'Description',
        'directory'               => 'Directory',
        'modifyTime'              => 'ModifyTime',
        'openOfflineAcceleration' => 'OpenOfflineAcceleration',
        'ownerId'                 => 'OwnerId',
        'ownerName'               => 'OwnerName',
        'rowLevel'                => 'RowLevel',
        'workspaceId'             => 'WorkspaceId',
        'workspaceName'           => 'WorkspaceName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->dataSource) {
            $res['DataSource'] = null !== $this->dataSource ? $this->dataSource->toMap() : null;
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
            $res['Directory'] = null !== $this->directory ? $this->directory->toMap() : null;
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

    /**
     * @param array $map
     *
     * @return data
     */
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
