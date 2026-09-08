<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20260120\Models;

use AlibabaCloud\Dara\Model;

class UpdateDataMaskingUsersShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $authRole;

    /**
     * @var int
     */
    public $expireTime;

    /**
     * @var string
     */
    public $expireTimeOperation;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $productCode;

    /**
     * @var int
     */
    public $productId;

    /**
     * @var string
     */
    public $userListShrink;
    protected $_name = [
        'authRole' => 'AuthRole',
        'expireTime' => 'ExpireTime',
        'expireTimeOperation' => 'ExpireTimeOperation',
        'lang' => 'Lang',
        'productCode' => 'ProductCode',
        'productId' => 'ProductId',
        'userListShrink' => 'UserList',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authRole) {
            $res['AuthRole'] = $this->authRole;
        }

        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }

        if (null !== $this->expireTimeOperation) {
            $res['ExpireTimeOperation'] = $this->expireTimeOperation;
        }

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }

        if (null !== $this->productId) {
            $res['ProductId'] = $this->productId;
        }

        if (null !== $this->userListShrink) {
            $res['UserList'] = $this->userListShrink;
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
        if (isset($map['AuthRole'])) {
            $model->authRole = $map['AuthRole'];
        }

        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }

        if (isset($map['ExpireTimeOperation'])) {
            $model->expireTimeOperation = $map['ExpireTimeOperation'];
        }

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }

        if (isset($map['ProductId'])) {
            $model->productId = $map['ProductId'];
        }

        if (isset($map['UserList'])) {
            $model->userListShrink = $map['UserList'];
        }

        return $model;
    }
}
