<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Tea\Model;

class AuthorizeRequest extends Model
{
    /**
     * @var string
     */
    public $clientId;

    /**
     * @var bool
     */
    public $hideConsent;

    /**
     * @var string
     */
    public $loginType;

    /**
     * @var string
     */
    public $redirectUri;

    /**
     * @var string
     */
    public $responseType;

    /**
     * @var string[]
     */
    public $scope;

    /**
     * @var string
     */
    public $state;
    protected $_name = [
        'clientId'     => 'client_id',
        'hideConsent'  => 'hide_consent',
        'loginType'    => 'login_type',
        'redirectUri'  => 'redirect_uri',
        'responseType' => 'response_type',
        'scope'        => 'scope',
        'state'        => 'state',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientId) {
            $res['client_id'] = $this->clientId;
        }
        if (null !== $this->hideConsent) {
            $res['hide_consent'] = $this->hideConsent;
        }
        if (null !== $this->loginType) {
            $res['login_type'] = $this->loginType;
        }
        if (null !== $this->redirectUri) {
            $res['redirect_uri'] = $this->redirectUri;
        }
        if (null !== $this->responseType) {
            $res['response_type'] = $this->responseType;
        }
        if (null !== $this->scope) {
            $res['scope'] = $this->scope;
        }
        if (null !== $this->state) {
            $res['state'] = $this->state;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AuthorizeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['client_id'])) {
            $model->clientId = $map['client_id'];
        }
        if (isset($map['hide_consent'])) {
            $model->hideConsent = $map['hide_consent'];
        }
        if (isset($map['login_type'])) {
            $model->loginType = $map['login_type'];
        }
        if (isset($map['redirect_uri'])) {
            $model->redirectUri = $map['redirect_uri'];
        }
        if (isset($map['response_type'])) {
            $model->responseType = $map['response_type'];
        }
        if (isset($map['scope'])) {
            if (!empty($map['scope'])) {
                $model->scope = $map['scope'];
            }
        }
        if (isset($map['state'])) {
            $model->state = $map['state'];
        }

        return $model;
    }
}
