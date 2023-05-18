<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models\ResendPromoteResourceAccountEmailResponseBody;

use AlibabaCloud\Tea\Model;

class account extends Model
{
    /**
     * @description The ID of the account.
     *
     * @example 12323344****
     *
     * @var string
     */
    public $accountId;

    /**
     * @description The name of the account.
     *
     * @example someone@example.com
     *
     * @var string
     */
    public $accountName;

    /**
     * @description The display name of the member account.
     *
     * @example admin
     *
     * @var string
     */
    public $displayName;

    /**
     * @description The ID of the folder.
     *
     * @example fd-bVaRIG****
     *
     * @var string
     */
    public $folderId;

    /**
     * @description The way in which the member account joined the resource directory. Valid values:
     *
     *   invited: The member account is invited to join the resource directory.
     *   created: The member account is directly created in the resource directory.
     *
     * @example created
     *
     * @var string
     */
    public $joinMethod;

    /**
     * @description The time when the member account joined the resource directory.
     *
     * @example 2015-01-23T12:33:18Z
     *
     * @var string
     */
    public $joinTime;

    /**
     * @description The time when the member account was modified.
     *
     * @example 2015-01-23T12:33:18Z
     *
     * @var string
     */
    public $modifyTime;

    /**
     * @description The account record ID.
     *
     * @example 16950264-3f0d-4ca9-82dd-6ee7a3d33d6b
     *
     * @var string
     */
    public $recordId;

    /**
     * @description The ID of the resource directory.
     *
     * @example rd-k3****
     *
     * @var string
     */
    public $resourceDirectoryId;

    /**
     * @description The status of the member account. Valid values:
     *
     *   CreateSuccess: The member account is created.
     *   CreateVerifying: The creation of the member account is under confirmation.
     *   CreateFailed: The member account failed to be created.
     *   CreateExpired: The creation of the member account expired.
     *   CreateCancelled: The creation of the member account is canceled.
     *   PromoteVerifying: The upgrade of the member account is under confirmation.
     *   PromoteFailed: The member account failed to be upgraded.
     *   PromoteExpired: The upgrade of the member account expired.
     *   PromoteCancelled: The upgrade of the member account is canceled.
     *   PromoteSuccess: The member account is upgraded.
     *   InviteSuccess: The owner of the member account accepted the invitation.
     *   Removed: The member account is removed from the resource directory.
     *
     * @example PromoteVerifying
     *
     * @var string
     */
    public $status;

    /**
     * @description The type of the member account. Valid values:
     *
     *   CloudAccount: cloud account
     *   ResourceAccount: resource account
     *
     * @example ResourceAccount
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'accountId'           => 'AccountId',
        'accountName'         => 'AccountName',
        'displayName'         => 'DisplayName',
        'folderId'            => 'FolderId',
        'joinMethod'          => 'JoinMethod',
        'joinTime'            => 'JoinTime',
        'modifyTime'          => 'ModifyTime',
        'recordId'            => 'RecordId',
        'resourceDirectoryId' => 'ResourceDirectoryId',
        'status'              => 'Status',
        'type'                => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountId) {
            $res['AccountId'] = $this->accountId;
        }
        if (null !== $this->accountName) {
            $res['AccountName'] = $this->accountName;
        }
        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }
        if (null !== $this->folderId) {
            $res['FolderId'] = $this->folderId;
        }
        if (null !== $this->joinMethod) {
            $res['JoinMethod'] = $this->joinMethod;
        }
        if (null !== $this->joinTime) {
            $res['JoinTime'] = $this->joinTime;
        }
        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
        }
        if (null !== $this->recordId) {
            $res['RecordId'] = $this->recordId;
        }
        if (null !== $this->resourceDirectoryId) {
            $res['ResourceDirectoryId'] = $this->resourceDirectoryId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return account
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountId'])) {
            $model->accountId = $map['AccountId'];
        }
        if (isset($map['AccountName'])) {
            $model->accountName = $map['AccountName'];
        }
        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }
        if (isset($map['FolderId'])) {
            $model->folderId = $map['FolderId'];
        }
        if (isset($map['JoinMethod'])) {
            $model->joinMethod = $map['JoinMethod'];
        }
        if (isset($map['JoinTime'])) {
            $model->joinTime = $map['JoinTime'];
        }
        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }
        if (isset($map['RecordId'])) {
            $model->recordId = $map['RecordId'];
        }
        if (isset($map['ResourceDirectoryId'])) {
            $model->resourceDirectoryId = $map['ResourceDirectoryId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
