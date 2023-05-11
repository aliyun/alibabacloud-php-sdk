<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryWorksByOrganizationResponseBody\result;

use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryWorksByOrganizationResponseBody\result\data\directory;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The name of the workspace to which the work belongs.
     *
     * @example 1
     *
     * @var int
     */
    public $auth3rdFlag;

    /**
     * @description The hierarchical structure of the directory ID to which the directory belongs. Separate the hierarchical structure with a /.
     *
     * @example The hierarchical structure of the directory to which the directory belongs. Separate the hierarchical structure with a (/).
     *
     * @var string
     */
    public $description;

    /**
     * @description The ID of the directory.
     *
     * @var directory
     */
    public $directory;

    /**
     * @description Test directory
     *
     * @example 1496651577000
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @description Test Workspace
     *
     * @example 1572334870000
     *
     * @var string
     */
    public $gmtModify;

    /**
     * @description Description
     *
     * @example The name of the work.
     *
     * @var string
     */
    public $modifyName;

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
     * @example Remarks on the work.
     *
     * @var string
     */
    public $ownerId;

    /**
     * @description The Alibaba Cloud account name of the person who modified the work.
     *
     * @example Tom
     *
     * @var string
     */
    public $ownerName;

    /**
     * @description The directory to which the work belongs.
     *
     * @example 1
     *
     * @var string
     */
    public $securityLevel;

    /**
     * @description Li Si
     *
     * @example 1
     *
     * @var int
     */
    public $status;

    /**
     * @description Test directory
     *
     * @example The name of the directory.
     *
     * @var string
     */
    public $workName;

    /**
     * @description The name of the workspace to which the work belongs.
     *
     * @example PAGE
     *
     * @var string
     */
    public $workType;

    /**
     * @description The user ID of the work owner in the Quick BI.
     *
     * @example 897ce25e-****-****-af84-d13c5610****
     *
     * @var string
     */
    public $worksId;

    /**
     * @description Test report
     *
     * @example The timestamp of the creation of the work in milliseconds.
     *
     * @var string
     */
    public $workspaceId;

    /**
     * @description The ID of the workspace to which the work belongs.
     *
     * @example The name of the Alibaba Cloud account that modified the work.
     *
     * @var string
     */
    public $workspaceName;
    protected $_name = [
        'auth3rdFlag'   => 'Auth3rdFlag',
        'description'   => 'Description',
        'directory'     => 'Directory',
        'gmtCreate'     => 'GmtCreate',
        'gmtModify'     => 'GmtModify',
        'modifyName'    => 'ModifyName',
        'ownerId'       => 'OwnerId',
        'ownerName'     => 'OwnerName',
        'securityLevel' => 'SecurityLevel',
        'status'        => 'Status',
        'workName'      => 'WorkName',
        'workType'      => 'WorkType',
        'worksId'       => 'WorksId',
        'workspaceId'   => 'WorkspaceId',
        'workspaceName' => 'WorkspaceName',
    ];

    public function validate()
    {
    }

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
