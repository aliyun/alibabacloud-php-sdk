<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebsiteBuild\V20250429\Models;

use AlibabaCloud\Dara\Model;

class GetUserTmpIdentityForPartnerRequest extends Model
{
    /**
     * @var string
     */
    public $authPurpose;

    /**
     * @var string
     */
    public $bizId;

    /**
     * @var string
     */
    public $extend;

    /**
     * @var string
     */
    public $serviceLinkedRole;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'authPurpose' => 'AuthPurpose',
        'bizId' => 'BizId',
        'extend' => 'Extend',
        'serviceLinkedRole' => 'ServiceLinkedRole',
        'userId' => 'UserId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authPurpose) {
            $res['AuthPurpose'] = $this->authPurpose;
        }

        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }

        if (null !== $this->extend) {
            $res['Extend'] = $this->extend;
        }

        if (null !== $this->serviceLinkedRole) {
            $res['ServiceLinkedRole'] = $this->serviceLinkedRole;
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
        if (isset($map['AuthPurpose'])) {
            $model->authPurpose = $map['AuthPurpose'];
        }

        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }

        if (isset($map['Extend'])) {
            $model->extend = $map['Extend'];
        }

        if (isset($map['ServiceLinkedRole'])) {
            $model->serviceLinkedRole = $map['ServiceLinkedRole'];
        }

        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
