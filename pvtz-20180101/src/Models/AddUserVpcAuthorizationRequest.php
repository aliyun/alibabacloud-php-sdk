<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pvtz\V20180101\Models;

use AlibabaCloud\Tea\Model;

class AddUserVpcAuthorizationRequest extends Model
{
    /**
     * @description The authorization method. Valid values:
     *
     *   AUTH_CODE: An authorization code is used to associate VPCs across accounts. The system checks whether the value of AuthCode is valid.
     *   RESOURCE_DIRECTORY: A resource directory is used to associate VPCs across accounts. The system checks whether the value of AuthorizedUserId and the current account are in the same resource directory.
     *   If this parameter is empty, an authorization code is used to associate VPCs across accounts.
     *
     * @example AUTH_CODE
     *
     * @var string
     */
    public $authChannel;

    /**
     * @description The verification code.
     *
     * This parameter is required when AuthType is set to NORMAL or is left empty and AuthChannel is set to AUTH_CODE or is left empty.
     * @example 123456
     *
     * @var string
     */
    public $authCode;

    /**
     * @description The authorization scope. Valid values:
     *
     *   NORMAL: general authorization.
     *   CLOUD_PRODUCT: cloud service-related authorization
     *
     * @example NORMAL
     *
     * @var string
     */
    public $authType;

    /**
     * @description The ID of the Alibaba Cloud account.
     *
     * This parameter is required.
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
