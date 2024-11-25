<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pvtz\V20180101\Models;

use AlibabaCloud\Tea\Model;

class AddUserVpcAuthorizationRequest extends Model
{
    /**
     * @description The authorization channel. Valid values:
     *
     *   AUTH_CODE: A verification code is used for authorization.
     *   RESOURCE_DIRECTORY: A resource directory is used for authorization.
     *
     * Default value: AUTH_CODE.
     * @example AUTH_CODE
     *
     * @var string
     */
    public $authChannel;

    /**
     * @description The verification code.
     *
     * >
     *
     *   The specified authentication code is used if the value of AuthChannel is left empty or is set to AUTH_CODE.
     *
     *   In other cases, a random 6-digit number is used. Example: 123456.
     *
     * @example 123456
     *
     * @var string
     */
    public $authCode;

    /**
     * @description The authorization scope. Valid values:
     *
     *   NORMAL: general authorization
     *   CLOUD_PRODUCT: cloud service-related authorization
     *
     * @example NORMAL
     *
     * @var string
     */
    public $authType;

    /**
     * @description The ID of the Alibaba Cloud account to which the permissions on the resources are granted.
     *
     * This parameter is required.
     * @example 141339776561****
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
