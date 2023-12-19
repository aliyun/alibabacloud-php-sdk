<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models\DescribeCrossAccountsResponseBody\crossAccounts;

use AlibabaCloud\Tea\Model;

class crossAccount extends Model
{
    /**
     * @example content
     *
     * @var string
     */
    public $alias;

    /**
     * @example 1654570439
     *
     * @var int
     */
    public $createdTime;

    /**
     * @example BackupRole
     *
     * @var string
     */
    public $crossAccountRoleName;

    /**
     * @example 15897534xxxxx625
     *
     * @var int
     */
    public $crossAccountUserId;

    /**
     * @example 1
     *
     * @var int
     */
    public $id;

    /**
     * @example 184164xxxxx49795
     *
     * @var int
     */
    public $ownerId;

    /**
     * @example 1640157098
     *
     * @var int
     */
    public $updatedTime;
    protected $_name = [
        'alias'                => 'Alias',
        'createdTime'          => 'CreatedTime',
        'crossAccountRoleName' => 'CrossAccountRoleName',
        'crossAccountUserId'   => 'CrossAccountUserId',
        'id'                   => 'Id',
        'ownerId'              => 'OwnerId',
        'updatedTime'          => 'UpdatedTime',
    ];

    public function validate()
    {
    }

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
