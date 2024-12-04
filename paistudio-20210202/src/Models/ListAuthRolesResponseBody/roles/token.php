<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20210202\Models\ListAuthRolesResponseBody\roles;

use AlibabaCloud\Tea\Model;

class token extends Model
{
    /**
     * @example STS.NU************TT5LoC
     *
     * @var string
     */
    public $accessKeyId;

    /**
     * @example E1h2n66Duo1D**********c79JVk59R6i
     *
     * @var string
     */
    public $accessKeySecret;

    /**
     * @example 2021-03-19T19:14:42Z
     *
     * @var string
     */
    public $expiration;

    /**
     * @example CAISggJ1q6Ft5B2yf***************aAaDf+bmceH2MNtNe9XtmTXJytadQ2T0RT8uOA+4kSypOPxSHjdjmnQjbdA/Q9MyNtTErQ/m45RNsg==
     *
     * @var string
     */
    public $securityToken;
    protected $_name = [
        'accessKeyId'     => 'AccessKeyId',
        'accessKeySecret' => 'AccessKeySecret',
        'expiration'      => 'Expiration',
        'securityToken'   => 'SecurityToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessKeyId) {
            $res['AccessKeyId'] = $this->accessKeyId;
        }
        if (null !== $this->accessKeySecret) {
            $res['AccessKeySecret'] = $this->accessKeySecret;
        }
        if (null !== $this->expiration) {
            $res['Expiration'] = $this->expiration;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return token
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessKeyId'])) {
            $model->accessKeyId = $map['AccessKeyId'];
        }
        if (isset($map['AccessKeySecret'])) {
            $model->accessKeySecret = $map['AccessKeySecret'];
        }
        if (isset($map['Expiration'])) {
            $model->expiration = $map['Expiration'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }

        return $model;
    }
}
