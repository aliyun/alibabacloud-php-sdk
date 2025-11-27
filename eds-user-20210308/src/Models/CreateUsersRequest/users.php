<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsuser\V20210308\Models\CreateUsersRequest;

use AlibabaCloud\Dara\Model;

class users extends Model
{
    /**
     * @var string
     */
    public $email;

    /**
     * @var string
     */
    public $endUserId;

    /**
     * @var string[]
     */
    public $groupIdList;

    /**
     * @var string
     */
    public $orgId;

    /**
     * @var string
     */
    public $ownerType;

    /**
     * @var string
     */
    public $password;

    /**
     * @var string
     */
    public $phone;

    /**
     * @var string
     */
    public $realNickName;

    /**
     * @var string
     */
    public $remark;
    protected $_name = [
        'email' => 'Email',
        'endUserId' => 'EndUserId',
        'groupIdList' => 'GroupIdList',
        'orgId' => 'OrgId',
        'ownerType' => 'OwnerType',
        'password' => 'Password',
        'phone' => 'Phone',
        'realNickName' => 'RealNickName',
        'remark' => 'Remark',
    ];

    public function validate()
    {
        if (\is_array($this->groupIdList)) {
            Model::validateArray($this->groupIdList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->email) {
            $res['Email'] = $this->email;
        }

        if (null !== $this->endUserId) {
            $res['EndUserId'] = $this->endUserId;
        }

        if (null !== $this->groupIdList) {
            if (\is_array($this->groupIdList)) {
                $res['GroupIdList'] = [];
                $n1 = 0;
                foreach ($this->groupIdList as $item1) {
                    $res['GroupIdList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->orgId) {
            $res['OrgId'] = $this->orgId;
        }

        if (null !== $this->ownerType) {
            $res['OwnerType'] = $this->ownerType;
        }

        if (null !== $this->password) {
            $res['Password'] = $this->password;
        }

        if (null !== $this->phone) {
            $res['Phone'] = $this->phone;
        }

        if (null !== $this->realNickName) {
            $res['RealNickName'] = $this->realNickName;
        }

        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
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
        if (isset($map['Email'])) {
            $model->email = $map['Email'];
        }

        if (isset($map['EndUserId'])) {
            $model->endUserId = $map['EndUserId'];
        }

        if (isset($map['GroupIdList'])) {
            if (!empty($map['GroupIdList'])) {
                $model->groupIdList = [];
                $n1 = 0;
                foreach ($map['GroupIdList'] as $item1) {
                    $model->groupIdList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['OrgId'])) {
            $model->orgId = $map['OrgId'];
        }

        if (isset($map['OwnerType'])) {
            $model->ownerType = $map['OwnerType'];
        }

        if (isset($map['Password'])) {
            $model->password = $map['Password'];
        }

        if (isset($map['Phone'])) {
            $model->phone = $map['Phone'];
        }

        if (isset($map['RealNickName'])) {
            $model->realNickName = $map['RealNickName'];
        }

        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }

        return $model;
    }
}
