<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models\ListAuthorizedUsersResponseBody;

use AlibabaCloud\Dara\Model;

class items extends Model
{
    /**
     * @var int
     */
    public $expireDate;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var int
     */
    public $grantedBy;

    /**
     * @var string
     */
    public $granteeId;

    /**
     * @var string
     */
    public $granteeType;

    /**
     * @var int
     */
    public $id;

    /**
     * @var int
     */
    public $memberCount;

    /**
     * @var string[]
     */
    public $permissions;

    /**
     * @var string
     */
    public $userGroupId;

    /**
     * @var string
     */
    public $userGroupName;

    /**
     * @var int
     */
    public $userId;

    /**
     * @var string
     */
    public $userName;
    protected $_name = [
        'expireDate' => 'expireDate',
        'gmtCreate' => 'gmtCreate',
        'gmtModified' => 'gmtModified',
        'grantedBy' => 'grantedBy',
        'granteeId' => 'granteeId',
        'granteeType' => 'granteeType',
        'id' => 'id',
        'memberCount' => 'memberCount',
        'permissions' => 'permissions',
        'userGroupId' => 'userGroupId',
        'userGroupName' => 'userGroupName',
        'userId' => 'userId',
        'userName' => 'userName',
    ];

    public function validate()
    {
        if (\is_array($this->permissions)) {
            Model::validateArray($this->permissions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->expireDate) {
            $res['expireDate'] = $this->expireDate;
        }

        if (null !== $this->gmtCreate) {
            $res['gmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->gmtModified) {
            $res['gmtModified'] = $this->gmtModified;
        }

        if (null !== $this->grantedBy) {
            $res['grantedBy'] = $this->grantedBy;
        }

        if (null !== $this->granteeId) {
            $res['granteeId'] = $this->granteeId;
        }

        if (null !== $this->granteeType) {
            $res['granteeType'] = $this->granteeType;
        }

        if (null !== $this->id) {
            $res['id'] = $this->id;
        }

        if (null !== $this->memberCount) {
            $res['memberCount'] = $this->memberCount;
        }

        if (null !== $this->permissions) {
            if (\is_array($this->permissions)) {
                $res['permissions'] = [];
                $n1 = 0;
                foreach ($this->permissions as $item1) {
                    $res['permissions'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->userGroupId) {
            $res['userGroupId'] = $this->userGroupId;
        }

        if (null !== $this->userGroupName) {
            $res['userGroupName'] = $this->userGroupName;
        }

        if (null !== $this->userId) {
            $res['userId'] = $this->userId;
        }

        if (null !== $this->userName) {
            $res['userName'] = $this->userName;
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
        if (isset($map['expireDate'])) {
            $model->expireDate = $map['expireDate'];
        }

        if (isset($map['gmtCreate'])) {
            $model->gmtCreate = $map['gmtCreate'];
        }

        if (isset($map['gmtModified'])) {
            $model->gmtModified = $map['gmtModified'];
        }

        if (isset($map['grantedBy'])) {
            $model->grantedBy = $map['grantedBy'];
        }

        if (isset($map['granteeId'])) {
            $model->granteeId = $map['granteeId'];
        }

        if (isset($map['granteeType'])) {
            $model->granteeType = $map['granteeType'];
        }

        if (isset($map['id'])) {
            $model->id = $map['id'];
        }

        if (isset($map['memberCount'])) {
            $model->memberCount = $map['memberCount'];
        }

        if (isset($map['permissions'])) {
            if (!empty($map['permissions'])) {
                $model->permissions = [];
                $n1 = 0;
                foreach ($map['permissions'] as $item1) {
                    $model->permissions[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['userGroupId'])) {
            $model->userGroupId = $map['userGroupId'];
        }

        if (isset($map['userGroupName'])) {
            $model->userGroupName = $map['userGroupName'];
        }

        if (isset($map['userId'])) {
            $model->userId = $map['userId'];
        }

        if (isset($map['userName'])) {
            $model->userName = $map['userName'];
        }

        return $model;
    }
}
