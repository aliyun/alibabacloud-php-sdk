<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pvtz\V20180101\Models;

use AlibabaCloud\Tea\Model;

class AddUserVpcAuthorizationRequest extends Model
{
    /**
     * @example AUTH_CODE
     *
     * @var string
     */
    public $authChannel;

    /**
     * @example 123456
     *
     * @var string
     */
    public $authCode;

    /**
     * @var string
     */
    public $authType;

    /**
     * @example 111222333
     *
     * @var int
     */
    public $authorizedUserId;
    protected $_name = [
        'authChannel'      => 'AuthChannel',
        'authCode'         => 'AuthCode',
        'authType'         => 'AuthType',
        'authorizedUserId' => 'AuthorizedUserId',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return AddUserVpcAuthorizationRequest
     */
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
