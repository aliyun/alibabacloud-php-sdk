<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\UpdateTenantMemberRequest\updateCommand;

use AlibabaCloud\Tea\Model;

class memberList extends Model
{
    /**
     * @example 123@dingding
     *
     * @var string
     */
    public $dingNumber;

    /**
     * @example 123@xx.com
     *
     * @var string
     */
    public $mail;

    /**
     * @example 13888888888
     *
     * @var string
     */
    public $mobilePhone;

    /**
     * @var string[]
     */
    public $roleList;

    /**
     * @example 2331
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'dingNumber'  => 'DingNumber',
        'mail'        => 'Mail',
        'mobilePhone' => 'MobilePhone',
        'roleList'    => 'RoleList',
        'userId'      => 'UserId',
    ];

    public function validate()
    {
    }

    public function toMap()
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
            $res['RoleList'] = $this->roleList;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return memberList
     */
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
                $model->roleList = $map['RoleList'];
            }
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
