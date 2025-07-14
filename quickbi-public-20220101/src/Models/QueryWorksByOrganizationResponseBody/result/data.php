<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryWorksByOrganizationResponseBody\result;

use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryWorksByOrganizationResponseBody\result\data\directory;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description Third-party embedding status. Possible values:
     *
     * - 0: Embedding not enabled
     * - 1: Embedding enabled
     *
     * @example 1
     *
     * @var int
     */
    public $auth3rdFlag;

    /**
     * @description Notes for the work.
     *
     * @example Attention
     *
     * @var string
     */
    public $description;

    /**
     * @description Directory to which the work belongs.
     *
     * @var directory
     */
    public $directory;

    /**
     * @description Timestamp (in milliseconds) when the work was created.
     *
     * @example 1496651577000
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @description 作品修改的毫秒级时间戳。
     *
     * @example 1572334870000
     *
     * @var string
     */
    public $gmtModify;

    /**
     * @description 作品修改者的阿里云账户名。
     *
     * @example test
     *
     * @var string
     */
    public $modifyName;

    /**
     * @description The UserID of the work\\"s owner in Quick BI.
     *
     * @example test
     *
     * @var string
     */
    public $ownerId;

    /**
     * @description The Alibaba Cloud account name of the work\\"s owner.
     *
     * @example test
     *
     * @var string
     */
    public $ownerName;

    /**
     * @description Whether it is public
     *
     * @example true
     *
     * @var bool
     */
    public $publicFlag;

    /**
     * @description The expiration date for the report to be made public
     *
     * @example 1721366354000
     *
     * @var int
     */
    public $publicInvalidTime;

    /**
     * @description The security policy for collaborative authorization of the work. Values:
     * - 0: Private
     * - 12: Authorize specific members
     * - 1 or 11: Authorize all space members
     *
     * >- If you are using the old version of permissions, the returned value is 1.
     * >- If you are using the new version of permissions, the returned value is 11.
     *
     * @example 1
     *
     * @var string
     */
    public $securityLevel;

    /**
     * @description The status of the report. Value range:
     *
     * - 0: Unpublished
     * - 1: Published
     * - 2: Modified but not published
     * - 3: Offline
     *
     * @example 1
     *
     * @var int
     */
    public $status;

    /**
     * @description The name of the work.
     *
     * @example test
     *
     * @var string
     */
    public $workName;

    /**
     * @description The type of the work. Value range:
     *
     * - DATAPRODUCT: Data portal
     * - PAGE: Dashboard
     * - REPORT: Spreadsheet
     * - dashboardOfflineQuery: Self-service data retrieval
     *
     * @example PAGE
     *
     * @var string
     */
    public $workType;

    /**
     * @description The ID of the work.
     *
     * @example 897ce25e-****-****-af84-d13c5610****
     *
     * @var string
     */
    public $worksId;

    /**
     * @description The ID of the workspace to which the work belongs.
     *
     * @example test
     *
     * @var string
     */
    public $workspaceId;

    /**
     * @description The name of the workspace to which the work belongs.
     *
     * @example test
     *
     * @var string
     */
    public $workspaceName;
    protected $_name = [
        'auth3rdFlag' => 'Auth3rdFlag',
        'description' => 'Description',
        'directory' => 'Directory',
        'gmtCreate' => 'GmtCreate',
        'gmtModify' => 'GmtModify',
        'modifyName' => 'ModifyName',
        'ownerId' => 'OwnerId',
        'ownerName' => 'OwnerName',
        'publicFlag' => 'PublicFlag',
        'publicInvalidTime' => 'PublicInvalidTime',
        'securityLevel' => 'SecurityLevel',
        'status' => 'Status',
        'workName' => 'WorkName',
        'workType' => 'WorkType',
        'worksId' => 'WorksId',
        'workspaceId' => 'WorkspaceId',
        'workspaceName' => 'WorkspaceName',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->auth3rdFlag) {
            $res['Auth3rdFlag'] = $this->auth3rdFlag;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->directory) {
            $res['Directory'] = null !== $this->directory ? $this->directory->toMap() : null;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModify) {
            $res['GmtModify'] = $this->gmtModify;
        }
        if (null !== $this->modifyName) {
            $res['ModifyName'] = $this->modifyName;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->ownerName) {
            $res['OwnerName'] = $this->ownerName;
        }
        if (null !== $this->publicFlag) {
            $res['PublicFlag'] = $this->publicFlag;
        }
        if (null !== $this->publicInvalidTime) {
            $res['PublicInvalidTime'] = $this->publicInvalidTime;
        }
        if (null !== $this->securityLevel) {
            $res['SecurityLevel'] = $this->securityLevel;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Auth3rdFlag'])) {
            $model->auth3rdFlag = $map['Auth3rdFlag'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Directory'])) {
            $model->directory = directory::fromMap($map['Directory']);
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModify'])) {
            $model->gmtModify = $map['GmtModify'];
        }
        if (isset($map['ModifyName'])) {
            $model->modifyName = $map['ModifyName'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['OwnerName'])) {
            $model->ownerName = $map['OwnerName'];
        }
        if (isset($map['PublicFlag'])) {
            $model->publicFlag = $map['PublicFlag'];
        }
        if (isset($map['PublicInvalidTime'])) {
            $model->publicInvalidTime = $map['PublicInvalidTime'];
        }
        if (isset($map['SecurityLevel'])) {
            $model->securityLevel = $map['SecurityLevel'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
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
