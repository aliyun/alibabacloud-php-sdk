<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryOrganizationWorkspaceListResponseBody\result;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description Whether the work can be made public. Value range:
     *
     * - true: Public
     * - false: Not public
     *
     * @example true
     *
     * @var bool
     */
    public $allowPublishOperation;

    /**
     * @description Indicates whether the work can be authorized for sharing. Possible values:
     *
     * - true: Authorized
     * - false: Not authorized
     *
     * @example true
     *
     * @var bool
     */
    public $allowShareOperation;

    /**
     * @description Creation time of the workspace.
     *
     * @example 2020-11-10 17:51:07
     *
     * @var string
     */
    public $createTime;

    /**
     * @description Quick BI user ID of the creator.
     *
     * @example de4bc5f9429141cc8091cdd1c15b****
     *
     * @var string
     */
    public $createUser;

    /**
     * @description Aliyun account name of the creator.
     *
     * @example pop****@aliyun.com
     *
     * @var string
     */
    public $createUserAccountName;

    /**
     * @description Last modified time of the workspace.
     *
     * @example 2020-11-10 17:51:07
     *
     * @var string
     */
    public $modifiedTime;

    /**
     * @description ID of the Quick BI user who modified the workspace.
     *
     * @example de4bc5f9429141cc8091cdd1c15b****
     *
     * @var string
     */
    public $modifyUser;

    /**
     * @description Aliyun account name of the modifier.
     *
     * @example pop****@aliyun.com
     *
     * @var string
     */
    public $modifyUserAccountName;

    /**
     * @description ID of the organization to which the workspace belongs.
     *
     * @example 2fe4fbd8-588f-489a-b3e1-e92c7af0****
     *
     * @var string
     */
    public $organizationId;

    /**
     * @description Quick BI user ID of the workspace owner.
     *
     * @example de4bc5f9429141cc8091cdd1c15b****
     *
     * @var string
     */
    public $owner;

    /**
     * @description Aliyun account name of the workspace owner.
     *
     * @example pop****@aliyun.com
     *
     * @var string
     */
    public $ownerAccountName;

    /**
     * @description Workspace description.
     *
     * @example test
     *
     * @var string
     */
    public $workspaceDescription;

    /**
     * @description Workspace ID.
     *
     * @example 7350a155-0e94-4c6c-8620-57bbec38****
     *
     * @var string
     */
    public $workspaceId;

    /**
     * @description Name of the workspace.
     *
     * @example test
     *
     * @var string
     */
    public $workspaceName;
    protected $_name = [
        'allowPublishOperation' => 'AllowPublishOperation',
        'allowShareOperation' => 'AllowShareOperation',
        'createTime' => 'CreateTime',
        'createUser' => 'CreateUser',
        'createUserAccountName' => 'CreateUserAccountName',
        'modifiedTime' => 'ModifiedTime',
        'modifyUser' => 'ModifyUser',
        'modifyUserAccountName' => 'ModifyUserAccountName',
        'organizationId' => 'OrganizationId',
        'owner' => 'Owner',
        'ownerAccountName' => 'OwnerAccountName',
        'workspaceDescription' => 'WorkspaceDescription',
        'workspaceId' => 'WorkspaceId',
        'workspaceName' => 'WorkspaceName',
    ];

    public function validate() {}

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
