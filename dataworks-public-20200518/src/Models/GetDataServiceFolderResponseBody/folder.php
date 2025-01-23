<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetDataServiceFolderResponseBody;

use AlibabaCloud\Dara\Model;

class folder extends Model
{
    /**
     * @var string
     */
    public $createdTime;
    /**
     * @var int
     */
    public $folderId;
    /**
     * @var string
     */
    public $folderName;
    /**
     * @var string
     */
    public $groupId;
    /**
     * @var string
     */
    public $modifiedTime;
    /**
     * @var int
     */
    public $parentId;
    /**
     * @var int
     */
    public $projectId;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
