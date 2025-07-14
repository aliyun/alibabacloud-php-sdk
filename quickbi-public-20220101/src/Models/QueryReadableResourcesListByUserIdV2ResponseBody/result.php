<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryReadableResourcesListByUserIdV2ResponseBody;

use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryReadableResourcesListByUserIdV2ResponseBody\result\directory;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example 1611023338000
     *
     * @var string
     */
    public $createTime;

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
    public $modifyName;

    /**
     * @example 1530078690000
     *
     * @var string
     */
    public $modifyTime;

    /**
     * @example fe67f61a35a94b7da1a34ba174a7****
     *
     * @var string
     */
    public $ownerId;

    /**
     * @var string
     */
    public $ownerName;

    /**
     * @example 0
     *
     * @var string
     */
    public $securityLevel;

    /**
     * @example 1
     *
     * @var int
     */
    public $status;

    /**
     * @example 1
     *
     * @var int
     */
    public $thirdPartAuthFlag;

    /**
     * @var string
     */
    public $workName;

    /**
     * @example PAGE
     *
     * @var string
     */
    public $workType;

    /**
     * @example ccd3428c-****-****-a608-26bae29dffee
     *
     * @var string
     */
    public $worksId;

    /**
     * @example c5f86ad2-ef53-4c51-8720-162ecfdb****
     *
     * @var string
     */
    public $workspaceId;

    /**
     * @var string
     */
    public $workspaceName;
    protected $_name = [
        'createTime' => 'CreateTime',
        'description' => 'Description',
        'directory' => 'Directory',
        'modifyName' => 'ModifyName',
        'modifyTime' => 'ModifyTime',
        'ownerId' => 'OwnerId',
        'ownerName' => 'OwnerName',
        'securityLevel' => 'SecurityLevel',
        'status' => 'Status',
        'thirdPartAuthFlag' => 'ThirdPartAuthFlag',
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
