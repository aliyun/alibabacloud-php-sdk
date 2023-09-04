<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models\GetUserResponseBody;

use AlibabaCloud\SDK\GEMP\V20210413\Models\GetUserResponseBody\data\serviceGroups;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example SUB
     *
     * @var string
     */
    public $accountType;

    /**
     * @example 2021-09-09 09:09:09
     *
     * @var string
     */
    public $createTime;

    /**
     * @description email
     *
     * @example 5678***@qq.com
     *
     * @var string
     */
    public $email;

    /**
     * @example true
     *
     * @var bool
     */
    public $isEditableUser;

    /**
     * @example RELATE
     *
     * @var string
     */
    public $isRelated;

    /**
     * @example 1390000****
     *
     * @var string
     */
    public $phone;

    /**
     * @description ramId
     *
     * @example 1344383
     *
     * @var string
     */
    public $ramId;

    /**
     * @var int[]
     */
    public $roleIdList;

    /**
     * @var string[]
     */
    public $roleNameList;

    /**
     * @var serviceGroups[]
     */
    public $serviceGroups;

    /**
     * @example 63
     *
     * @var int
     */
    public $userId;

    /**
     * @var string
     */
    public $username;
    protected $_name = [
        'accountType'    => 'accountType',
        'createTime'     => 'createTime',
        'email'          => 'email',
        'isEditableUser' => 'isEditableUser',
        'isRelated'      => 'isRelated',
        'phone'          => 'phone',
        'ramId'          => 'ramId',
        'roleIdList'     => 'roleIdList',
        'roleNameList'   => 'roleNameList',
        'serviceGroups'  => 'serviceGroups',
        'userId'         => 'userId',
        'username'       => 'username',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountType) {
            $res['accountType'] = $this->accountType;
        }
        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }
        if (null !== $this->email) {
            $res['email'] = $this->email;
        }
        if (null !== $this->isEditableUser) {
            $res['isEditableUser'] = $this->isEditableUser;
        }
        if (null !== $this->isRelated) {
            $res['isRelated'] = $this->isRelated;
        }
        if (null !== $this->phone) {
            $res['phone'] = $this->phone;
        }
        if (null !== $this->ramId) {
            $res['ramId'] = $this->ramId;
        }
        if (null !== $this->roleIdList) {
            $res['roleIdList'] = $this->roleIdList;
        }
        if (null !== $this->roleNameList) {
            $res['roleNameList'] = $this->roleNameList;
        }
        if (null !== $this->serviceGroups) {
            $res['serviceGroups'] = [];
            if (null !== $this->serviceGroups && \is_array($this->serviceGroups)) {
                $n = 0;
                foreach ($this->serviceGroups as $item) {
                    $res['serviceGroups'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->userId) {
            $res['userId'] = $this->userId;
        }
        if (null !== $this->username) {
            $res['username'] = $this->username;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['accountType'])) {
            $model->accountType = $map['accountType'];
        }
        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }
        if (isset($map['email'])) {
            $model->email = $map['email'];
        }
        if (isset($map['isEditableUser'])) {
            $model->isEditableUser = $map['isEditableUser'];
        }
        if (isset($map['isRelated'])) {
            $model->isRelated = $map['isRelated'];
        }
        if (isset($map['phone'])) {
            $model->phone = $map['phone'];
        }
        if (isset($map['ramId'])) {
            $model->ramId = $map['ramId'];
        }
        if (isset($map['roleIdList'])) {
            if (!empty($map['roleIdList'])) {
                $model->roleIdList = $map['roleIdList'];
            }
        }
        if (isset($map['roleNameList'])) {
            if (!empty($map['roleNameList'])) {
                $model->roleNameList = $map['roleNameList'];
            }
        }
        if (isset($map['serviceGroups'])) {
            if (!empty($map['serviceGroups'])) {
                $model->serviceGroups = [];
                $n                    = 0;
                foreach ($map['serviceGroups'] as $item) {
                    $model->serviceGroups[$n++] = null !== $item ? serviceGroups::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['userId'])) {
            $model->userId = $map['userId'];
        }
        if (isset($map['username'])) {
            $model->username = $map['username'];
        }

        return $model;
    }
}
