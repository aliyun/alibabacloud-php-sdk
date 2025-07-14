<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryWorksResponseBody;

use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryWorksResponseBody\result\directory;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description Third-party embedding status. Valid values:
     *
     *   0: The embed service is not enabled.
     *   1: Embed is enabled.
     *
     * @example 0
     *
     * @var int
     */
    public $auth3rdFlag;

    /**
     * @description Remarks on the work.
     *
     * @example Description
     *
     * @var string
     */
    public $description;

    /**
     * @description The directory to which the work belongs.
     *
     * @var directory
     */
    public $directory;

    /**
     * @description The timestamp of the creation of the work in milliseconds.
     *
     * @example 1496651577000
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @description The timestamp of the modification of the work in milliseconds.
     *
     * @example 1496651577000
     *
     * @var string
     */
    public $gmtModify;

    /**
     * @description The Alibaba Cloud account name of the person who modified the work.
     *
     * @example Tom
     *
     * @var string
     */
    public $modifyName;

    /**
     * @description The user ID of the work owner in the Quick BI.
     *
     * @example 9187a612aa474e2a8ac1414d5529****
     *
     * @var string
     */
    public $ownerId;

    /**
     * @description The Alibaba Cloud account name of the work owner.
     *
     * @example Tom
     *
     * @var string
     */
    public $ownerName;

    /**
     * @description Is it public
     *
     * @example true
     *
     * @var bool
     */
    public $publicFlag;

    /**
     * @description Deadline for the public release of the report
     *
     * @example 1721366354000
     *
     * @var int
     */
    public $publicInvalidTime;

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
     * @example 0
     *
     * @var int
     */
    public $status;

    /**
     * @description The name of the work.
     *
     * @example Test report
     *
     * @var string
     */
    public $workName;

    /**
     * @description Queries the types of works. Fill in the blanks to query all types. Valid values:
     *
     *   DATAPRODUCT: BI portal
     *   PAGE: Dashboard
     *   FULLPAGE: full-screen dashboards
     *   REPORT: workbook
     *   dashboardOfflineQuery: self-service data retrieval
     *
     * @example PAGE
     *
     * @var string
     */
    public $workType;

    /**
     * @description The ID of the work.
     *
     * @example 95296e95-ca89-4c7d-8af9-dedf0ad0****
     *
     * @var string
     */
    public $worksId;

    /**
     * @description The ID of the workspace to which the work belongs.
     *
     * @example 87c6b145-090c-43e1-9426-8f93be23****
     *
     * @var string
     */
    public $workspaceId;

    /**
     * @description The name of the workspace to which the work belongs.
     *
     * @example Test Space
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
     * @return result
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
