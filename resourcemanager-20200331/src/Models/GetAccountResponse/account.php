<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models\GetAccountResponse;

use AlibabaCloud\Tea\Model;

class account extends Model
{
    /**
     * @var string
     */
    public $resourceDirectoryId;

    /**
     * @var string
     */
    public $accountId;

    /**
     * @var string
     */
    public $displayName;

    /**
     * @var string
     */
    public $accountName;

    /**
     * @var string
     */
    public $folderId;

    /**
     * @var string
     */
    public $joinMethod;

    /**
     * @var string
     */
    public $joinTime;

    /**
     * @var string
     */
    public $modifyTime;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $identityInformation;
    protected $_name = [
        'resourceDirectoryId' => 'ResourceDirectoryId',
        'accountId'           => 'AccountId',
        'displayName'         => 'DisplayName',
        'accountName'         => 'AccountName',
        'folderId'            => 'FolderId',
        'joinMethod'          => 'JoinMethod',
        'joinTime'            => 'JoinTime',
        'modifyTime'          => 'ModifyTime',
        'type'                => 'Type',
        'status'              => 'Status',
        'identityInformation' => 'IdentityInformation',
    ];

    public function validate()
    {
        Model::validateRequired('resourceDirectoryId', $this->resourceDirectoryId, true);
        Model::validateRequired('accountId', $this->accountId, true);
        Model::validateRequired('displayName', $this->displayName, true);
        Model::validateRequired('accountName', $this->accountName, true);
        Model::validateRequired('folderId', $this->folderId, true);
        Model::validateRequired('joinMethod', $this->joinMethod, true);
        Model::validateRequired('joinTime', $this->joinTime, true);
        Model::validateRequired('modifyTime', $this->modifyTime, true);
        Model::validateRequired('type', $this->type, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('identityInformation', $this->identityInformation, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->resourceDirectoryId) {
            $res['ResourceDirectoryId'] = $this->resourceDirectoryId;
        }
        if (null !== $this->accountId) {
            $res['AccountId'] = $this->accountId;
        }
        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }
        if (null !== $this->accountName) {
            $res['AccountName'] = $this->accountName;
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
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->identityInformation) {
            $res['IdentityInformation'] = $this->identityInformation;
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
        if (isset($map['ResourceDirectoryId'])) {
            $model->resourceDirectoryId = $map['ResourceDirectoryId'];
        }
        if (isset($map['AccountId'])) {
            $model->accountId = $map['AccountId'];
        }
        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }
        if (isset($map['AccountName'])) {
            $model->accountName = $map['AccountName'];
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
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['IdentityInformation'])) {
            $model->identityInformation = $map['IdentityInformation'];
        }

        return $model;
    }
}
