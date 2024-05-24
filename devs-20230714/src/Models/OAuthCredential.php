<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devs\V20230714\Models;

use AlibabaCloud\Tea\Model;

class OAuthCredential extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 1716176924603
     *
     * @var int
     */
    public $createdTime;

    /**
     * @description This parameter is required.
     *
     * @example 1716263324603
     *
     * @var int
     */
    public $expiration;

    /**
     * @example 4d77bfae284770d94ebeed6b0199ebfd65e3943ba4f1e44dc36d792a93ba0d13
     *
     * @var string
     */
    public $refreshToken;

    /**
     * @example user_info projects pull_requests hook gists emails
     *
     * @var string
     */
    public $scope;

    /**
     * @description This parameter is required.
     *
     * @example 4e84246b6b3962cd3d207aad1ea2f911
     *
     * @var string
     */
    public $token;

    /**
     * @example bearer
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'createdTime'  => 'createdTime',
        'expiration'   => 'expiration',
        'refreshToken' => 'refreshToken',
        'scope'        => 'scope',
        'token'        => 'token',
        'type'         => 'type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createdTime) {
            $res['createdTime'] = $this->createdTime;
        }
        if (null !== $this->expiration) {
            $res['expiration'] = $this->expiration;
        }
        if (null !== $this->refreshToken) {
            $res['refreshToken'] = $this->refreshToken;
        }
        if (null !== $this->scope) {
            $res['scope'] = $this->scope;
        }
        if (null !== $this->token) {
            $res['token'] = $this->token;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return OAuthCredential
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['createdTime'])) {
            $model->createdTime = $map['createdTime'];
        }
        if (isset($map['expiration'])) {
            $model->expiration = $map['expiration'];
        }
        if (isset($map['refreshToken'])) {
            $model->refreshToken = $map['refreshToken'];
        }
        if (isset($map['scope'])) {
            $model->scope = $map['scope'];
        }
        if (isset($map['token'])) {
            $model->token = $map['token'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
