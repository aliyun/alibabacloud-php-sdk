<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryOrganizationWorkspaceListResponseBody\result;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var bool
     */
    public $allowPublishOperation;

    /**
     * @var bool
     */
    public $allowShareOperation;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $createUser;

    /**
     * @var string
     */
    public $createUserAccountName;

    /**
     * @var string
     */
    public $modifiedTime;

    /**
     * @var string
     */
    public $modifyUser;

    /**
     * @var string
     */
    public $modifyUserAccountName;

    /**
     * @var string
     */
    public $organizationId;

    /**
     * @var string
     */
    public $owner;

    /**
     * @var string
     */
    public $ownerAccountName;

    /**
     * @var string
     */
    public $workspaceDescription;

    /**
     * @var string
     */
    public $workspaceId;

    /**
     * @var string
     */
    public $workspaceName;
    protected $_name = [
        'allowPublishOperation' => 'AllowPublishOperation',
        'allowShareOperation'   => 'AllowShareOperation',
        'createTime'            => 'CreateTime',
        'createUser'            => 'CreateUser',
        'createUserAccountName' => 'CreateUserAccountName',
        'modifiedTime'          => 'ModifiedTime',
        'modifyUser'            => 'ModifyUser',
        'modifyUserAccountName' => 'ModifyUserAccountName',
        'organizationId'        => 'OrganizationId',
        'owner'                 => 'Owner',
        'ownerAccountName'      => 'OwnerAccountName',
        'workspaceDescription'  => 'WorkspaceDescription',
        'workspaceId'           => 'WorkspaceId',
        'workspaceName'         => 'WorkspaceName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->allowPublishOperation) {
            $res['AllowPublishOperation'] = $this->allowPublishOperation;
        }
        if (null !== $this->allowShareOperation) {
            $res['AllowShareOperation'] = $this->allowShareOperation;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->createUser) {
            $res['CreateUser'] = $this->createUser;
        }
        if (null !== $this->createUserAccountName) {
            $res['CreateUserAccountName'] = $this->createUserAccountName;
        }
        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
        }
        if (null !== $this->modifyUser) {
            $res['ModifyUser'] = $this->modifyUser;
        }
        if (null !== $this->modifyUserAccountName) {
            $res['ModifyUserAccountName'] = $this->modifyUserAccountName;
        }
        if (null !== $this->organizationId) {
            $res['OrganizationId'] = $this->organizationId;
        }
        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
        }
        if (null !== $this->ownerAccountName) {
            $res['OwnerAccountName'] = $this->ownerAccountName;
        }
        if (null !== $this->workspaceDescription) {
            $res['WorkspaceDescription'] = $this->workspaceDescription;
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
        if (isset($map['AllowPublishOperation'])) {
            $model->allowPublishOperation = $map['AllowPublishOperation'];
        }
        if (isset($map['AllowShareOperation'])) {
            $model->allowShareOperation = $map['AllowShareOperation'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['CreateUser'])) {
            $model->createUser = $map['CreateUser'];
        }
        if (isset($map['CreateUserAccountName'])) {
            $model->createUserAccountName = $map['CreateUserAccountName'];
        }
        if (isset($map['ModifiedTime'])) {
            $model->modifiedTime = $map['ModifiedTime'];
        }
        if (isset($map['ModifyUser'])) {
            $model->modifyUser = $map['ModifyUser'];
        }
        if (isset($map['ModifyUserAccountName'])) {
            $model->modifyUserAccountName = $map['ModifyUserAccountName'];
        }
        if (isset($map['OrganizationId'])) {
            $model->organizationId = $map['OrganizationId'];
        }
        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
        }
        if (isset($map['OwnerAccountName'])) {
            $model->ownerAccountName = $map['OwnerAccountName'];
        }
        if (isset($map['WorkspaceDescription'])) {
            $model->workspaceDescription = $map['WorkspaceDescription'];
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
