<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListWorkspacesResponseBody\data;

use AlibabaCloud\Dara\Model;

class baseWorkspaces extends Model
{
    /**
     * @var bool
     */
    public $alreadyJoined;

    /**
     * @var int
     */
    public $creatorId;

    /**
     * @var string
     */
    public $creatorNickName;

    /**
     * @var string
     */
    public $creatorUid;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $ownerNickName;

    /**
     * @var string
     */
    public $ownerUid;

    /**
     * @var string
     */
    public $region;

    /**
     * @var int
     */
    public $serviceAccountId;

    /**
     * @var string
     */
    public $serviceAccountNickName;

    /**
     * @var string
     */
    public $serviceAccountUid;

    /**
     * @var int
     */
    public $tenantId;

    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var int
     */
    public $workspaceId;

    /**
     * @var string
     */
    public $workspaceName;
    protected $_name = [
        'alreadyJoined' => 'AlreadyJoined',
        'creatorId' => 'CreatorId',
        'creatorNickName' => 'CreatorNickName',
        'creatorUid' => 'CreatorUid',
        'description' => 'Description',
        'gmtCreate' => 'GmtCreate',
        'gmtModified' => 'GmtModified',
        'name' => 'Name',
        'ownerId' => 'OwnerId',
        'ownerNickName' => 'OwnerNickName',
        'ownerUid' => 'OwnerUid',
        'region' => 'Region',
        'serviceAccountId' => 'ServiceAccountId',
        'serviceAccountNickName' => 'ServiceAccountNickName',
        'serviceAccountUid' => 'ServiceAccountUid',
        'tenantId' => 'TenantId',
        'vpcId' => 'VpcId',
        'workspaceId' => 'WorkspaceId',
        'workspaceName' => 'WorkspaceName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alreadyJoined) {
            $res['AlreadyJoined'] = $this->alreadyJoined;
        }

        if (null !== $this->creatorId) {
            $res['CreatorId'] = $this->creatorId;
        }

        if (null !== $this->creatorNickName) {
            $res['CreatorNickName'] = $this->creatorNickName;
        }

        if (null !== $this->creatorUid) {
            $res['CreatorUid'] = $this->creatorUid;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->ownerNickName) {
            $res['OwnerNickName'] = $this->ownerNickName;
        }

        if (null !== $this->ownerUid) {
            $res['OwnerUid'] = $this->ownerUid;
        }

        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }

        if (null !== $this->serviceAccountId) {
            $res['ServiceAccountId'] = $this->serviceAccountId;
        }

        if (null !== $this->serviceAccountNickName) {
            $res['ServiceAccountNickName'] = $this->serviceAccountNickName;
        }

        if (null !== $this->serviceAccountUid) {
            $res['ServiceAccountUid'] = $this->serviceAccountUid;
        }

        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }

        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
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
        if (isset($map['AlreadyJoined'])) {
            $model->alreadyJoined = $map['AlreadyJoined'];
        }

        if (isset($map['CreatorId'])) {
            $model->creatorId = $map['CreatorId'];
        }

        if (isset($map['CreatorNickName'])) {
            $model->creatorNickName = $map['CreatorNickName'];
        }

        if (isset($map['CreatorUid'])) {
            $model->creatorUid = $map['CreatorUid'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }

        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['OwnerNickName'])) {
            $model->ownerNickName = $map['OwnerNickName'];
        }

        if (isset($map['OwnerUid'])) {
            $model->ownerUid = $map['OwnerUid'];
        }

        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }

        if (isset($map['ServiceAccountId'])) {
            $model->serviceAccountId = $map['ServiceAccountId'];
        }

        if (isset($map['ServiceAccountNickName'])) {
            $model->serviceAccountNickName = $map['ServiceAccountNickName'];
        }

        if (isset($map['ServiceAccountUid'])) {
            $model->serviceAccountUid = $map['ServiceAccountUid'];
        }

        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }

        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
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
