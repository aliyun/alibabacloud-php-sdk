<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models\GetAccountResponseBody;

use AlibabaCloud\SDK\ResourceManager\V20200331\Models\GetAccountResponseBody\account\tags;
use AlibabaCloud\Tea\Model;

class account extends Model
{
    /**
     * @example 181761095690****
     *
     * @var string
     */
    public $accountId;

    /**
     * @example someone@example.com
     *
     * @var string
     */
    public $accountName;

    /**
     * @example admin
     *
     * @var string
     */
    public $displayName;

    /**
     * @var string
     */
    public $emailStatus;

    /**
     * @example fd-bVaRIG****
     *
     * @var string
     */
    public $folderId;

    /**
     * @example aliyun-admin
     *
     * @var string
     */
    public $identityInformation;

    /**
     * @example created
     *
     * @var string
     */
    public $joinMethod;

    /**
     * @example 2015-01-23T12:33:18Z
     *
     * @var string
     */
    public $joinTime;

    /**
     * @example root/AlRd****\/Z5Aa****
     *
     * @var string
     */
    public $location;

    /**
     * @example 2015-01-23T12:33:18Z
     *
     * @var string
     */
    public $modifyTime;

    /**
     * @example rd-k3****
     *
     * @var string
     */
    public $resourceDirectoryId;

    /**
     * @example rd-k3****\/r-Wm****\/fd-bVaRIG****\/181761095690****
     *
     * @var string
     */
    public $resourceDirectoryPath;

    /**
     * @example CreateSuccess
     *
     * @var string
     */
    public $status;

    /**
     * @var tags[]
     */
    public $tags;

    /**
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
