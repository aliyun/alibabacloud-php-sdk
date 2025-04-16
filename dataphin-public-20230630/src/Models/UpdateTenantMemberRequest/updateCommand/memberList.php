<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\UpdateTenantMemberRequest\updateCommand;

use AlibabaCloud\Dara\Model;

class memberList extends Model
{
    /**
     * @var string
     */
    public $dingNumber;

    /**
     * @var string
     */
    public $mail;

    /**
     * @var string
     */
    public $mobilePhone;

    /**
     * @var string[]
     */
    public $roleList;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'dingNumber' => 'DingNumber',
        'mail' => 'Mail',
        'mobilePhone' => 'MobilePhone',
        'roleList' => 'RoleList',
        'userId' => 'UserId',
    ];

    public function validate()
    {
        if (\is_array($this->roleList)) {
            Model::validateArray($this->roleList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dingNumber) {
            $res['DingNumber'] = $this->dingNumber;
        }

        if (null !== $this->mail) {
            $res['Mail'] = $this->mail;
        }

        if (null !== $this->mobilePhone) {
            $res['MobilePhone'] = $this->mobilePhone;
        }

        if (null !== $this->roleList) {
            if (\is_array($this->roleList)) {
                $res['RoleList'] = [];
                $n1 = 0;
                foreach ($this->roleList as $item1) {
                    $res['RoleList'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
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
        if (isset($map['DingNumber'])) {
            $model->dingNumber = $map['DingNumber'];
        }

        if (isset($map['Mail'])) {
            $model->mail = $map['Mail'];
        }

        if (isset($map['MobilePhone'])) {
            $model->mobilePhone = $map['MobilePhone'];
        }

        if (isset($map['RoleList'])) {
            if (!empty($map['RoleList'])) {
                $model->roleList = [];
                $n1 = 0;
                foreach ($map['RoleList'] as $item1) {
                    $model->roleList[$n1++] = $item1;
                }
            }
        }

        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
