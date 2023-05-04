<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\CreateResourceAccountResponseBody;

use AlibabaCloud\Tea\Model;

class account extends Model
{
    /**
     * @example 112730938585****
     *
     * @var string
     */
    public $accountId;

    /**
     * @example alice@rd-3g****.aliyunid.com
     *
     * @var string
     */
    public $accountName;

    /**
     * @example Dev
     *
     * @var string
     */
    public $displayName;

    /**
     * @example fd-r23M55****
     *
     * @var string
     */
    public $folderId;

    /**
     * @example created
     *
     * @var string
     */
    public $joinMethod;

    /**
     * @example 2020-12-31T03:37:39.456Z
     *
     * @var string
     */
    public $joinTime;

    /**
     * @example 2020-12-31T03:37:39.456Z
     *
     * @var string
     */
    public $modifyTime;

    /**
     * @example rd-3G****
     *
     * @var string
     */
    public $resourceDirectoryId;

    /**
     * @example CreateSuccess
     *
     * @var string
     */
    public $status;

    /**
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
