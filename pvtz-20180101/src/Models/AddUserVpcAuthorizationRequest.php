<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pvtz\V20180101\Models;

use AlibabaCloud\Dara\Model;

class AddUserVpcAuthorizationRequest extends Model
{
    /**
     * @var string
     */
    public $authChannel;

    /**
     * @var string
     */
    public $authCode;

    /**
     * @var string
     */
    public $authType;

    /**
     * @var int
     */
    public $authorizedUserId;
    protected $_name = [
        'authChannel' => 'AuthChannel',
        'authCode' => 'AuthCode',
        'authType' => 'AuthType',
        'authorizedUserId' => 'AuthorizedUserId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authChannel) {
            $res['AuthChannel'] = $this->authChannel;
        }

        if (null !== $this->authCode) {
            $res['AuthCode'] = $this->authCode;
        }

        if (null !== $this->authType) {
            $res['AuthType'] = $this->authType;
        }

        if (null !== $this->authorizedUserId) {
            $res['AuthorizedUserId'] = $this->authorizedUserId;
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
        if (isset($map['AuthChannel'])) {
            $model->authChannel = $map['AuthChannel'];
        }

        if (isset($map['AuthCode'])) {
            $model->authCode = $map['AuthCode'];
        }

        if (isset($map['AuthType'])) {
            $model->authType = $map['AuthType'];
        }

        if (isset($map['AuthorizedUserId'])) {
            $model->authorizedUserId = $map['AuthorizedUserId'];
        }

        return $model;
    }
}
