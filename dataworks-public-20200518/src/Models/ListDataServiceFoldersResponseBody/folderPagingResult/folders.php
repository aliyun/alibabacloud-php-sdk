<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListDataServiceFoldersResponseBody\folderPagingResult;

use AlibabaCloud\Tea\Model;

class folders extends Model
{
    /**
     * @description The time when the folder was created.
     *
     * @example 2020-09-24T18:37:51+0800
     *
     * @var string
     */
    public $createdTime;

    /**
     * @description The ID of the folder.
     *
     * @example 11
     *
     * @var int
     */
    public $folderId;

    /**
     * @description The name of the folder.
     *
     * @example test1
     *
     * @var string
     */
    public $folderName;

    /**
     * @description The ID of the business process to which the folder belongs.
     *
     * @example ds_1234
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The time when the folder was last modified.
     *
     * @example 2020-09-24T18:37:51+0800
     *
     * @var string
     */
    public $modifiedTime;

    /**
     * @description The ID of the parent folder. The ID of the root folder in a business process is 0, and the ID of a folder created by a user in a business process is greater than 0.
     *
     * @example 0
     *
     * @var int
     */
    public $parentId;

    /**
     * @description The ID of the workspace.
     *
     * @example 10001
     *
     * @var int
     */
    public $projectId;

    /**
     * @description The ID of the tenant.
     *
     * @example 10002
     *
     * @var int
     */
    public $tenantId;
    protected $_name = [
        'createdTime'  => 'CreatedTime',
        'folderId'     => 'FolderId',
        'folderName'   => 'FolderName',
        'groupId'      => 'GroupId',
        'modifiedTime' => 'ModifiedTime',
        'parentId'     => 'ParentId',
        'projectId'    => 'ProjectId',
        'tenantId'     => 'TenantId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
        }
        if (null !== $this->folderId) {
            $res['FolderId'] = $this->folderId;
        }
        if (null !== $this->folderName) {
            $res['FolderName'] = $this->folderName;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
        }
        if (null !== $this->parentId) {
            $res['ParentId'] = $this->parentId;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return folders
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
        }
        if (isset($map['FolderId'])) {
            $model->folderId = $map['FolderId'];
        }
        if (isset($map['FolderName'])) {
            $model->folderName = $map['FolderName'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['ModifiedTime'])) {
            $model->modifiedTime = $map['ModifiedTime'];
        }
        if (isset($map['ParentId'])) {
            $model->parentId = $map['ParentId'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }

        return $model;
    }
}
