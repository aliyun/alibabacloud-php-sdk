<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models\DescribeCrossAccountsResponseBody\crossAccounts;

use AlibabaCloud\Tea\Model;

class crossAccount extends Model
{
    /**
     * @description The account alias. The value can be up to 32 bits in length.
     *
     * @example content
     *
     * @var string
     */
    public $alias;

    /**
     * @description The time when the account was created. This value is a UNIX timestamp. Unit: seconds.
     *
     * @example 1654570439
     *
     * @var int
     */
    public $createdTime;

    /**
     * @description The name of the RAM role that is created within the source Alibaba Cloud account and assigned to the current Alibaba Cloud account to authorize the current Alibaba Cloud account to back up data across Alibaba Cloud accounts.
     *
     * @example BackupRole
     *
     * @var string
     */
    public $crossAccountRoleName;

    /**
     * @description The ID of the source Alibaba Cloud account that authorizes the current Alibaba Cloud account to back up data across Alibaba Cloud accounts.
     *
     * @example 15897534xxxxx625
     *
     * @var int
     */
    public $crossAccountUserId;

    /**
     * @description The ID of the backup type.
     *
     * @example 1
     *
     * @var int
     */
    public $id;

    /**
     * @description The ID of the current account.
     *
     * @example 184164xxxxx49795
     *
     * @var int
     */
    public $ownerId;

    /**
     * @description The time when the account information was updated. The value is a UNIX timestamp. Unit: seconds.
     *
     * @example 1640157098
     *
     * @var int
     */
    public $updatedTime;
    protected $_name = [
        'alias' => 'Alias',
        'createdTime' => 'CreatedTime',
        'crossAccountRoleName' => 'CrossAccountRoleName',
        'crossAccountUserId' => 'CrossAccountUserId',
        'id' => 'Id',
        'ownerId' => 'OwnerId',
        'updatedTime' => 'UpdatedTime',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->alias) {
            $res['Alias'] = $this->alias;
        }
        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
        }
        if (null !== $this->crossAccountRoleName) {
            $res['CrossAccountRoleName'] = $this->crossAccountRoleName;
        }
        if (null !== $this->crossAccountUserId) {
            $res['CrossAccountUserId'] = $this->crossAccountUserId;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->updatedTime) {
            $res['UpdatedTime'] = $this->updatedTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return crossAccount
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Alias'])) {
            $model->alias = $map['Alias'];
        }
        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
        }
        if (isset($map['CrossAccountRoleName'])) {
            $model->crossAccountRoleName = $map['CrossAccountRoleName'];
        }
        if (isset($map['CrossAccountUserId'])) {
            $model->crossAccountUserId = $map['CrossAccountUserId'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['UpdatedTime'])) {
            $model->updatedTime = $map['UpdatedTime'];
        }

        return $model;
    }
}
