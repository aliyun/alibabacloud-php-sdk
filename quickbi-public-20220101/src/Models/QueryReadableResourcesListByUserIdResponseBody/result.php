<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryReadableResourcesListByUserIdResponseBody;

use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryReadableResourcesListByUserIdResponseBody\result\directory;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description The timestamp of the creation time in milliseconds.
     *
     * @example 1611023338000
     *
     * @var string
     */
    public $createTime;

    /**
     * @description Remarks on the work.
     *
     * @example Description
     *
     * @var string
     */
    public $description;

    /**
     * @var directory
     */
    public $directory;

    /**
     * @description The name of the Alibaba Cloud account to which the modifier belongs.
     *
     * @example Li Si
     *
     * @var string
     */
    public $modifyName;

    /**
     * @example 1611023338000
     *
     * @var string
     */
    public $modifyTime;

    /**
     * @description The Quick BI UserID of the work owner.
     *
     * @example 46e5374665ba4b679ee22e2a2927****
     *
     * @var string
     */
    public $ownerId;

    /**
     * @description The Alibaba Cloud account name of the owner.
     *
     * @example Tom
     *
     * @var string
     */
    public $ownerName;

    /**
     * @description Security policies for collaborative authorization of works. Valid values:
     *
     *   0: private
     *   12: Authorize specified members
     *   1 or 11: Authorize all workspace members
     *
     * >
     *
     *   If you use legacy permissions, the return value is 1.
     *
     *   If you use the new permissions, the return value is 11.
     *
     * @example 0
     *
     * @var string
     */
    public $securityLevel;

    /**
     * @description The status of the report. Valid values:
     *
     *   0: unpublished
     *   1: published
     *   2: modified but not published
     *   3: unpublished
     *
     * @example 1
     *
     * @var int
     */
    public $status;

    /**
     * @description Third-party embedding status. Valid values:
     *
     *   0: The embed service is not enabled.
     *   1: Embed is enabled.
     *
     * @example 1
     *
     * @var int
     */
    public $thirdPartAuthFlag;

    /**
     * @description The name of the work.
     *
     * @var string
     */
    public $workName;

    /**
     * @description The type of the work. Valid values:
     *
     *   DATAPRODUCT: BI portal
     *   PAGE: Dashboard
     *   FULLPAGE: full-screen dashboards
     *   REPORT: workbook
     *
     * @example PAGE
     *
     * @var string
     */
    public $workType;

    /**
     * @description The ID of the work.
     *
     * @example 03366b16-69ce-43c8-b782-56c2f6ec****
     *
     * @var string
     */
    public $worksId;

    /**
     * @description The ID of the workspace to which the work belongs.
     *
     * @example 89713491-cb4f-4579-b889-e82c35f1****
     *
     * @var string
     */
    public $workspaceId;

    /**
     * @description The name of the workspace to which the work belongs.
     *
     * @example Test Workspace
     *
     * @var string
     */
    public $workspaceName;
    protected $_name = [
        'createTime'        => 'CreateTime',
        'description'       => 'Description',
        'directory'         => 'Directory',
        'modifyName'        => 'ModifyName',
        'modifyTime'        => 'ModifyTime',
        'ownerId'           => 'OwnerId',
        'ownerName'         => 'OwnerName',
        'securityLevel'     => 'SecurityLevel',
        'status'            => 'Status',
        'thirdPartAuthFlag' => 'ThirdPartAuthFlag',
        'workName'          => 'WorkName',
        'workType'          => 'WorkType',
        'worksId'           => 'WorksId',
        'workspaceId'       => 'WorkspaceId',
        'workspaceName'     => 'WorkspaceName',
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
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->directory) {
            $res['Directory'] = null !== $this->directory ? $this->directory->toMap() : null;
        }
        if (null !== $this->modifyName) {
            $res['ModifyName'] = $this->modifyName;
        }
        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->ownerName) {
            $res['OwnerName'] = $this->ownerName;
        }
        if (null !== $this->securityLevel) {
            $res['SecurityLevel'] = $this->securityLevel;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->thirdPartAuthFlag) {
            $res['ThirdPartAuthFlag'] = $this->thirdPartAuthFlag;
        }
        if (null !== $this->workName) {
            $res['WorkName'] = $this->workName;
        }
        if (null !== $this->workType) {
            $res['WorkType'] = $this->workType;
        }
        if (null !== $this->worksId) {
            $res['WorksId'] = $this->worksId;
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
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Directory'])) {
            $model->directory = directory::fromMap($map['Directory']);
        }
        if (isset($map['ModifyName'])) {
            $model->modifyName = $map['ModifyName'];
        }
        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['OwnerName'])) {
            $model->ownerName = $map['OwnerName'];
        }
        if (isset($map['SecurityLevel'])) {
            $model->securityLevel = $map['SecurityLevel'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['ThirdPartAuthFlag'])) {
            $model->thirdPartAuthFlag = $map['ThirdPartAuthFlag'];
        }
        if (isset($map['WorkName'])) {
            $model->workName = $map['WorkName'];
        }
        if (isset($map['WorkType'])) {
            $model->workType = $map['WorkType'];
        }
        if (isset($map['WorksId'])) {
            $model->worksId = $map['WorksId'];
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
