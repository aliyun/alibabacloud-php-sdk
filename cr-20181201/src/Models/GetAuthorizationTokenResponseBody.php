<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models;

use AlibabaCloud\Tea\Model;

class GetAuthorizationTokenResponseBody extends Model
{
    /**
     * @description The temporary password returned after you call this API operation is a Security Token Service (STS) token whose validity period is 1 hour. Take note of the following items when you log on to Container Registry instances by using an STS token:
     *
     *   If the STS token belongs to an Alibaba Cloud account, you can use the STS token to log on to all Container Registry instances that belong to the Alibaba Cloud account.
     *   If the STS token belongs to a Resource Access Management (RAM) user, you can use the STS token to log on to all Container Registry instances that belong to the RAM user.
     *   You can use an STS token to access only Container Registry instances to which the STS token is scoped.
     *
     * @example shaunadadakks:uuczxnjcyeyhdjadkkajsjdjadhyucb
     *
     * @var string
     */
    public $authorizationToken;

    /**
     * @description Indicates whether the API call is successful.
     *
     *   `true`: successful
     *   `false`: failed
     *
     * @example success
     *
     * @var string
     */
    public $code;

    /**
     * @description The return value.
     *
     * @example 1571242083000
     *
     * @var int
     */
    public $expireTime;

    /**
     * @description The username that is used to log on to the Container Registry instance.
     *
     * @example true
     *
     * @var bool
     */
    public $isSuccess;

    /**
     * @description The timestamp when the temporary password expires. Unit: milliseconds.
     *
     * @example E069EB86-E6AD-4A98-ADDE-0E993390239A
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The password that is used to log on to the Container Registry instance.
     *
     * @example temp_user_cr
     *
     * @var string
     */
    public $tempUsername;
    protected $_name = [
        'authorizationToken' => 'AuthorizationToken',
        'code'               => 'Code',
        'expireTime'         => 'ExpireTime',
        'isSuccess'          => 'IsSuccess',
        'requestId'          => 'RequestId',
        'tempUsername'       => 'TempUsername',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->authorizationToken) {
            $res['AuthorizationToken'] = $this->authorizationToken;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }
        if (null !== $this->isSuccess) {
            $res['IsSuccess'] = $this->isSuccess;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->tempUsername) {
            $res['TempUsername'] = $this->tempUsername;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetAuthorizationTokenResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuthorizationToken'])) {
            $model->authorizationToken = $map['AuthorizationToken'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }
        if (isset($map['IsSuccess'])) {
            $model->isSuccess = $map['IsSuccess'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TempUsername'])) {
            $model->tempUsername = $map['TempUsername'];
        }

        return $model;
    }
}
