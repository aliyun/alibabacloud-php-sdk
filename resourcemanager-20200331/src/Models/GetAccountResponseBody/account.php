<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models\GetAccountResponseBody;

use AlibabaCloud\SDK\ResourceManager\V20200331\Models\GetAccountResponseBody\account\tags;
use AlibabaCloud\Tea\Model;

class account extends Model
{
    /**
     * @description The Alibaba Cloud account ID of the member.
     *
     * @example 181761095690****
     *
     * @var string
     */
    public $accountId;

    /**
     * @description The Alibaba Cloud account name of the member.
     *
     * @example someone@example.com
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
     * @description The status of the modification for the email address bound to the member. Valid values:
     *
     *   WAIT_MODIFY: in progress
     *   CANCELLED: canceled
     *   EXPIRED: expired
     *
     * If the value of this parameter is empty, no modification is performed for the email address.
     * @example WAIT_MODIFY
     *
     * @var string
     */
    public $emailStatus;

    /**
     * @description The ID of the folder.
     *
     * @example fd-bVaRIG****
     *
     * @var string
     */
    public $folderId;

    /**
     * @description The real-name verification information.
     *
     * @example aliyun-admin
     *
     * @var string
     */
    public $identityInformation;

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
     * @description The time when the member joined the resource directory.
     *
     * @example 2015-01-23T12:33:18Z
     *
     * @var string
     */
    public $joinTime;

    /**
     * @description The location of the member in the resource directory.
     *
     * @example root/AlRd****\/Z5Aa****
     *
     * @var string
     */
    public $location;

    /**
     * @description The time when the member was modified.
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
     * @description The path of the member in the resource directory.
     *
     * @example rd-k3****\/r-Wm****\/fd-bVaRIG****\/181761095690****
     *
     * @var string
     */
    public $resourceDirectoryPath;

    /**
     * @description The status of the member. Valid values:
     *
     *   CreateSuccess: The member is created.
     *   PromoteVerifying: The upgrade of the member is being confirmed.
     *   PromoteFailed: The upgrade of the member fails.
     *   PromoteExpired: The upgrade of the member expires.
     *   PromoteCancelled: The upgrade of the member is canceled.
     *   PromoteSuccess: The member is upgraded.
     *   InviteSuccess: The member accepts the invitation.
     *
     * @example CreateSuccess
     *
     * @var string
     */
    public $status;

    /**
     * @description The tags that are added to the member.
     *
     * @var tags[]
     */
    public $tags;

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
        'accountId'             => 'AccountId',
        'accountName'           => 'AccountName',
        'displayName'           => 'DisplayName',
        'emailStatus'           => 'EmailStatus',
        'folderId'              => 'FolderId',
        'identityInformation'   => 'IdentityInformation',
        'joinMethod'            => 'JoinMethod',
        'joinTime'              => 'JoinTime',
        'location'              => 'Location',
        'modifyTime'            => 'ModifyTime',
        'resourceDirectoryId'   => 'ResourceDirectoryId',
        'resourceDirectoryPath' => 'ResourceDirectoryPath',
        'status'                => 'Status',
        'tags'                  => 'Tags',
        'type'                  => 'Type',
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
        if (null !== $this->emailStatus) {
            $res['EmailStatus'] = $this->emailStatus;
        }
        if (null !== $this->folderId) {
            $res['FolderId'] = $this->folderId;
        }
        if (null !== $this->identityInformation) {
            $res['IdentityInformation'] = $this->identityInformation;
        }
        if (null !== $this->joinMethod) {
            $res['JoinMethod'] = $this->joinMethod;
        }
        if (null !== $this->joinTime) {
            $res['JoinTime'] = $this->joinTime;
        }
        if (null !== $this->location) {
            $res['Location'] = $this->location;
        }
        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
        }
        if (null !== $this->resourceDirectoryId) {
            $res['ResourceDirectoryId'] = $this->resourceDirectoryId;
        }
        if (null !== $this->resourceDirectoryPath) {
            $res['ResourceDirectoryPath'] = $this->resourceDirectoryPath;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->tags) {
            $res['Tags'] = [];
            if (null !== $this->tags && \is_array($this->tags)) {
                $n = 0;
                foreach ($this->tags as $item) {
                    $res['Tags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['EmailStatus'])) {
            $model->emailStatus = $map['EmailStatus'];
        }
        if (isset($map['FolderId'])) {
            $model->folderId = $map['FolderId'];
        }
        if (isset($map['IdentityInformation'])) {
            $model->identityInformation = $map['IdentityInformation'];
        }
        if (isset($map['JoinMethod'])) {
            $model->joinMethod = $map['JoinMethod'];
        }
        if (isset($map['JoinTime'])) {
            $model->joinTime = $map['JoinTime'];
        }
        if (isset($map['Location'])) {
            $model->location = $map['Location'];
        }
        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }
        if (isset($map['ResourceDirectoryId'])) {
            $model->resourceDirectoryId = $map['ResourceDirectoryId'];
        }
        if (isset($map['ResourceDirectoryPath'])) {
            $model->resourceDirectoryPath = $map['ResourceDirectoryPath'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n           = 0;
                foreach ($map['Tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
