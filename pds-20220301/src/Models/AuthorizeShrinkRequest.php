<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Tea\Model;

class AuthorizeShrinkRequest extends Model
{
    /**
     * @example 47eUHhrzgWBvlLWj
     *
     * @var string
     */
    public $clientId;

    /**
     * @example true
     *
     * @var bool
     */
    public $hideConsent;

    /**
     * @example default
     *
     * @var string
     */
    public $loginType;

    /**
     * @example https://www.aliyunpds.com/sign/callback
     *
     * @var string
     */
    public $redirectUri;

    /**
     * @example code
     *
     * @var string
     */
    public $responseType;

    /**
     * @var string
     */
    public $scopeShrink;

    /**
     * @example customdata
     *
     * @var string
     */
    public $state;
    protected $_name = [
        'clientId'     => 'client_id',
        'hideConsent'  => 'hide_consent',
        'loginType'    => 'login_type',
        'redirectUri'  => 'redirect_uri',
        'responseType' => 'response_type',
        'scopeShrink'  => 'scope',
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
        if (null !== $this->scopeShrink) {
            $res['scope'] = $this->scopeShrink;
        }
        if (null !== $this->state) {
            $res['state'] = $this->state;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AuthorizeShrinkRequest
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
            $model->scopeShrink = $map['scope'];
        }
        if (isset($map['state'])) {
            $model->state = $map['state'];
        }

        return $model;
    }
}
