<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\Tea\Model;

class CreateOAuthTokenRequest extends Model
{
    /**
     * @var string
     */
    public $clientId;

    /**
     * @var string
     */
    public $clientSecret;

    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $grantType;

    /**
     * @var string
     */
    public $login;

    /**
     * @var string
     */
    public $scope;
    protected $_name = [
        'clientId'     => 'clientId',
        'clientSecret' => 'clientSecret',
        'code'         => 'code',
        'grantType'    => 'grantType',
        'login'        => 'login',
        'scope'        => 'scope',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientId) {
            $res['clientId'] = $this->clientId;
        }
        if (null !== $this->clientSecret) {
            $res['clientSecret'] = $this->clientSecret;
        }
        if (null !== $this->code) {
            $res['code'] = $this->code;
        }
        if (null !== $this->grantType) {
            $res['grantType'] = $this->grantType;
        }
        if (null !== $this->login) {
            $res['login'] = $this->login;
        }
        if (null !== $this->scope) {
            $res['scope'] = $this->scope;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateOAuthTokenRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['clientId'])) {
            $model->clientId = $map['clientId'];
        }
        if (isset($map['clientSecret'])) {
            $model->clientSecret = $map['clientSecret'];
        }
        if (isset($map['code'])) {
            $model->code = $map['code'];
        }
        if (isset($map['grantType'])) {
            $model->grantType = $map['grantType'];
        }
        if (isset($map['login'])) {
            $model->login = $map['login'];
        }
        if (isset($map['scope'])) {
            $model->scope = $map['scope'];
        }

        return $model;
    }
}
