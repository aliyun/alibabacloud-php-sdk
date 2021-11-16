<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models;

use AlibabaCloud\Tea\Model;

class DeleteServiceGroupUserRequest extends Model
{
    /**
     * @description 幂等号
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description 新的用户
     *
     * @var int
     */
    public $newUserId;

    /**
     * @description 老的用户ID
     *
     * @var int
     */
    public $oldUserId;

    /**
     * @description 删除服务组成员
     *
     * @var bool
     */
    public $removeUser;

    /**
     * @description 服务组ID
     *
     * @var int
     */
    public $serviceGroupId;
    protected $_name = [
        'clientToken'    => 'clientToken',
        'newUserId'      => 'newUserId',
        'oldUserId'      => 'oldUserId',
        'removeUser'     => 'removeUser',
        'serviceGroupId' => 'serviceGroupId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['clientToken'] = $this->clientToken;
        }
        if (null !== $this->newUserId) {
            $res['newUserId'] = $this->newUserId;
        }
        if (null !== $this->oldUserId) {
            $res['oldUserId'] = $this->oldUserId;
        }
        if (null !== $this->removeUser) {
            $res['removeUser'] = $this->removeUser;
        }
        if (null !== $this->serviceGroupId) {
            $res['serviceGroupId'] = $this->serviceGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteServiceGroupUserRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['clientToken'])) {
            $model->clientToken = $map['clientToken'];
        }
        if (isset($map['newUserId'])) {
            $model->newUserId = $map['newUserId'];
        }
        if (isset($map['oldUserId'])) {
            $model->oldUserId = $map['oldUserId'];
        }
        if (isset($map['removeUser'])) {
            $model->removeUser = $map['removeUser'];
        }
        if (isset($map['serviceGroupId'])) {
            $model->serviceGroupId = $map['serviceGroupId'];
        }

        return $model;
    }
}
