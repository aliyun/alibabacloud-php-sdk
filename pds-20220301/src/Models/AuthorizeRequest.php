<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Tea\Model;

class AuthorizeRequest extends Model
{
    /**
     * @description The application ID returned when the application was created.
     *
     * @example 47eUHhrzgWBvlLWj
     *
     * @var string
     */
    public $clientId;

    /**
     * @description Specifies whether to hide the consent page.
     *
     * @example true
     *
     * @var bool
     */
    public $hideConsent;

    /**
     * @description The authentication method. Valid values:
     *
     *   default: all logon methods that are integrated on the default logon page provided by Drive and Photo Service.
     *   ding: logs on by scanning a DingTalk QR code.
     *   ding_sns: logs on by entering a DingTalk account and its password.
     *   ram: logs on as an Alibaba Cloud Resource Access Management (RAM) user.
     *   wechat: logs on by scanning a WeCom QR code.
     *   wechat_app: logs on without authentication in WeCom.
     *
     * @example default
     *
     * @var string
     */
    public $loginType;

    /**
     * @description The callback URL specified when the application was created.
     *
     * @example https://www.aliyunpds.com/sign/callback
     *
     * @var string
     */
    public $redirectUri;

    /**
     * @description The format in which to return the response. Set the value to code.
     *
     * @example code
     *
     * @var string
     */
    public $responseType;

    /**
     * @description The requested permissions. By default, all permissions are requested.
     *
     * @var string[]
     */
    public $scope;

    /**
     * @description The user-defined parameter to return in the callback URL after the requested permissions are granted.
     *
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
