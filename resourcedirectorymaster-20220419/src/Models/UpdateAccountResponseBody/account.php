<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\UpdateAccountResponseBody;

use AlibabaCloud\Tea\Model;

class account extends Model
{
    /**
     * @description The Alibaba Cloud account ID of the member.
     *
     * @example 12323344****
     *
     * @var string
     */
    public $accountId;

    /**
     * @description The Alibaba Cloud account name of the member.
     *
     * @example ecs-manager@aliyun.com
     *
     * @var string
     */
    public $accountName;

    /**
     * @description The display name of the member.
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
     * @description The way in which the member joins the resource directory. Valid values:
     *
     *   invited: The member is invited to join the resource directory.
     *   created: The member is directly created in the resource directory.
     *
     * @example created
     *
     * @var string
     */
    public $joinMethod;

    /**
     * @description The time when the member joined the resource directory. The time is displayed in UTC.
     *
     * @example 2015-01-23T12:33:18Z
     *
     * @var string
     */
    public $joinTime;

    /**
     * @description The time when the member was modified. The time is displayed in UTC.
     *
     * @example 2015-01-23T12:33:18Z
     *
     * @var string
     */
    public $modifyTime;

    /**
     * @description The ID of the resource directory.
     *
     * @example rd-k3****
     *
     * @var string
     */
    public $resourceDirectoryId;

    /**
     * @description The status of the member. Valid values:
     *
     *   CreateSuccess: The member is created.
     *   InviteSuccess: The member accepts the invitation.
     *   Removed: The member is removed.
     *   SwitchSuccess: The type of the member is switched.
     *
     * @example CreateSuccess
     *
     * @var string
     */
    public $status;

    /**
     * @description The type of the member. Valid values:
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
        'accountId' => 'AccountId',
        'accountName' => 'AccountName',
        'displayName' => 'DisplayName',
        'folderId' => 'FolderId',
        'joinMethod' => 'JoinMethod',
        'joinTime' => 'JoinTime',
        'modifyTime' => 'ModifyTime',
        'resourceDirectoryId' => 'ResourceDirectoryId',
        'status' => 'Status',
        'type' => 'Type',
    ];

    public function validate() {}

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
