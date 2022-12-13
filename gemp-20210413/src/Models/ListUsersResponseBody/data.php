<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models\ListUsersResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example SUB
     *
     * @var int
     */
    public $accountType;

    /**
     * @example 23456tre
     *
     * @var string
     */
    public $appAccount;

    /**
     * @example 2345****@qq.com
     *
     * @var string
     */
    public $email;

    /**
     * @example true
     *
     * @var int
     */
    public $isEditableUser;

    /**
     * @var int
     */
    public $isOperation;

    /**
     * @var int
     */
    public $isRam;

    /**
     * @example RELATED关联  NOT_RELATED 未关联
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
     * @example 53624523
     *
     * @var int
     */
    public $ramId;

    /**
     * @example DINGDING
     *
     * @var string
     */
    public $synergyChannel;

    /**
     * @example 1234
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
        'appAccount'     => 'appAccount',
        'email'          => 'email',
        'isEditableUser' => 'isEditableUser',
        'isOperation'    => 'isOperation',
        'isRam'          => 'isRam',
        'isRelated'      => 'isRelated',
        'phone'          => 'phone',
        'ramId'          => 'ramId',
        'synergyChannel' => 'synergyChannel',
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
        if (null !== $this->appAccount) {
            $res['appAccount'] = $this->appAccount;
        }
        if (null !== $this->email) {
            $res['email'] = $this->email;
        }
        if (null !== $this->isEditableUser) {
            $res['isEditableUser'] = $this->isEditableUser;
        }
        if (null !== $this->isOperation) {
            $res['isOperation'] = $this->isOperation;
        }
        if (null !== $this->isRam) {
            $res['isRam'] = $this->isRam;
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
        if (null !== $this->synergyChannel) {
            $res['synergyChannel'] = $this->synergyChannel;
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
        if (isset($map['appAccount'])) {
            $model->appAccount = $map['appAccount'];
        }
        if (isset($map['email'])) {
            $model->email = $map['email'];
        }
        if (isset($map['isEditableUser'])) {
            $model->isEditableUser = $map['isEditableUser'];
        }
        if (isset($map['isOperation'])) {
            $model->isOperation = $map['isOperation'];
        }
        if (isset($map['isRam'])) {
            $model->isRam = $map['isRam'];
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
        if (isset($map['synergyChannel'])) {
            $model->synergyChannel = $map['synergyChannel'];
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
