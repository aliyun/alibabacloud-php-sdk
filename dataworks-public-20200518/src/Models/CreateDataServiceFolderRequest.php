<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class CreateDataServiceFolderRequest extends Model
{
    /**
     * @description The name of the folder.
     *
     * This parameter is required.
     * @example Test folder
     *
     * @var string
     */
    public $folderName;

    /**
     * @description The ID of the desired workflow to which the folder belongs.
     *
     * This parameter is required.
     * @example 1000abcd
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The ID of the desired parent folder of the folder. The ID of the root folder in a workflow is 0. The ID of the folder created by users in a workflow is greater than 0.
     *
     * This parameter is required.
     * @example 0
     *
     * @var int
     */
    public $parentId;

    /**
     * @description The ID of the workspace.
     *
     * This parameter is required.
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
        'folderName' => 'FolderName',
        'groupId'    => 'GroupId',
        'parentId'   => 'ParentId',
        'projectId'  => 'ProjectId',
        'tenantId'   => 'TenantId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->folderName) {
            $res['FolderName'] = $this->folderName;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
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
     * @return CreateDataServiceFolderRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FolderName'])) {
            $model->folderName = $map['FolderName'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
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
