<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryWorksResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryWorksResponseBody\result\directory;

class result extends Model
{
    /**
     * @var int
     */
    public $auth3rdFlag;

    /**
     * @var string
     */
    public $description;

    /**
     * @var directory
     */
    public $directory;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModify;

    /**
     * @var string
     */
    public $modifyName;

    /**
     * @var string
     */
    public $ownerId;

    /**
     * @var string
     */
    public $ownerName;

    /**
     * @var bool
     */
    public $publicFlag;

    /**
     * @var int
     */
    public $publicInvalidTime;

    /**
     * @var string
     */
    public $securityLevel;

    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $workName;

    /**
     * @var string
     */
    public $workType;

    /**
     * @var string
     */
    public $worksId;

    /**
     * @var string
     */
    public $workspaceId;

    /**
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

    public function validate()
    {
        if (null !== $this->directory) {
            $this->directory->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->auth3rdFlag) {
            $res['Auth3rdFlag'] = $this->auth3rdFlag;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->directory) {
            $res['Directory'] = null !== $this->directory ? $this->directory->toArray($noStream) : $this->directory;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
