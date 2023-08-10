<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\SetApplicationSsoConfigRequest;

use AlibabaCloud\SDK\Eiam\V20211201\Models\SetApplicationSsoConfigRequest\oidcSsoConfig\customClaims;
use AlibabaCloud\Tea\Model;

class oidcSsoConfig extends Model
{
    /**
     * @description The validity period of the issued access token. Unit: seconds. Default value: 1200.
     *
     * @example 1200
     *
     * @var int
     */
    public $accessTokenEffectiveTime;

    /**
     * @description The validity period of the issued code. Unit: seconds. Default value: 60.
     *
     * @example 60
     *
     * @var int
     */
    public $codeEffectiveTime;

    /**
     * @description The custom claims that are returned for the ID token.
     *
     * @var customClaims[]
     */
    public $customClaims;

    /**
     * @description The scopes of user attributes that can be returned for the UserInfo endpoint or ID token.
     *
     * @example profile，email
     *
     * @var string[]
     */
    public $grantScopes;

    /**
     * @description The list of grant types that are supported for OIDC protocols.
     *
     * @example authorization_code
     *
     * @var string[]
     */
    public $grantTypes;

    /**
     * @description The validity period of the issued ID token. Unit: seconds. Default value: 300.
     *
     * @example 300
     *
     * @var int
     */
    public $idTokenEffectiveTime;

    /**
     * @description The ID of the identity authentication source in password mode. Specify this parameter only when the value of the GrantTypes parameter includes the password mode.
     *
     * @example ia_password
     *
     * @var string
     */
    public $passwordAuthenticationSourceId;

    /**
     * @description Specifies whether time-based one-time password (TOTP) authentication is required in password mode. Specify this parameter only when the value of the GrantTypes parameter includes the password mode.
     *
     * @example true
     *
     * @var bool
     */
    public $passwordTotpMfaRequired;

    /**
     * @description The algorithms that are used to calculate the code challenge for PKCE.
     *
     * @example S256
     *
     * @var string[]
     */
    public $pkceChallengeMethods;

    /**
     * @description Specifies whether the SSO of the application requires Proof Key for Code Exchange (PKCE) (RFC 7636).
     *
     * @example true
     *
     * @var bool
     */
    public $pkceRequired;

    /**
     * @description The list of logout redirect URIs that are supported by the application.
     *
     * @var string[]
     */
    public $postLogoutRedirectUris;

    /**
     * @description The list of redirect URIs that are supported by the application.
     *
     * @var string[]
     */
    public $redirectUris;

    /**
     * @description The validity period of the issued refresh token. Unit: seconds. Default value: 86400.
     *
     * @example 86400
     *
     * @var int
     */
    public $refreshTokenEffective;

    /**
     * @description The response types that are supported by the application. Specify this parameter when the value of the GrantTypes parameter includes the implicit mode.
     *
     * @example token id_token
     *
     * @var string[]
     */
    public $responseTypes;

    /**
     * @description The custom expression that is used to generate the subject ID returned for the ID token.
     *
     * @example user.userid
     *
     * @var string
     */
    public $subjectIdExpression;
    protected $_name = [
        'accessTokenEffectiveTime'       => 'AccessTokenEffectiveTime',
        'codeEffectiveTime'              => 'CodeEffectiveTime',
        'customClaims'                   => 'CustomClaims',
        'grantScopes'                    => 'GrantScopes',
        'grantTypes'                     => 'GrantTypes',
        'idTokenEffectiveTime'           => 'IdTokenEffectiveTime',
        'passwordAuthenticationSourceId' => 'PasswordAuthenticationSourceId',
        'passwordTotpMfaRequired'        => 'PasswordTotpMfaRequired',
        'pkceChallengeMethods'           => 'PkceChallengeMethods',
        'pkceRequired'                   => 'PkceRequired',
        'postLogoutRedirectUris'         => 'PostLogoutRedirectUris',
        'redirectUris'                   => 'RedirectUris',
        'refreshTokenEffective'          => 'RefreshTokenEffective',
        'responseTypes'                  => 'ResponseTypes',
        'subjectIdExpression'            => 'SubjectIdExpression',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessTokenEffectiveTime) {
            $res['AccessTokenEffectiveTime'] = $this->accessTokenEffectiveTime;
        }
        if (null !== $this->codeEffectiveTime) {
            $res['CodeEffectiveTime'] = $this->codeEffectiveTime;
        }
        if (null !== $this->customClaims) {
            $res['CustomClaims'] = [];
            if (null !== $this->customClaims && \is_array($this->customClaims)) {
                $n = 0;
                foreach ($this->customClaims as $item) {
                    $res['CustomClaims'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->grantScopes) {
            $res['GrantScopes'] = $this->grantScopes;
        }
        if (null !== $this->grantTypes) {
            $res['GrantTypes'] = $this->grantTypes;
        }
        if (null !== $this->idTokenEffectiveTime) {
            $res['IdTokenEffectiveTime'] = $this->idTokenEffectiveTime;
        }
        if (null !== $this->passwordAuthenticationSourceId) {
            $res['PasswordAuthenticationSourceId'] = $this->passwordAuthenticationSourceId;
        }
        if (null !== $this->passwordTotpMfaRequired) {
            $res['PasswordTotpMfaRequired'] = $this->passwordTotpMfaRequired;
        }
        if (null !== $this->pkceChallengeMethods) {
            $res['PkceChallengeMethods'] = $this->pkceChallengeMethods;
        }
        if (null !== $this->pkceRequired) {
            $res['PkceRequired'] = $this->pkceRequired;
        }
        if (null !== $this->postLogoutRedirectUris) {
            $res['PostLogoutRedirectUris'] = $this->postLogoutRedirectUris;
        }
        if (null !== $this->redirectUris) {
            $res['RedirectUris'] = $this->redirectUris;
        }
        if (null !== $this->refreshTokenEffective) {
            $res['RefreshTokenEffective'] = $this->refreshTokenEffective;
        }
        if (null !== $this->responseTypes) {
            $res['ResponseTypes'] = $this->responseTypes;
        }
        if (null !== $this->subjectIdExpression) {
            $res['SubjectIdExpression'] = $this->subjectIdExpression;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return oidcSsoConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessTokenEffectiveTime'])) {
            $model->accessTokenEffectiveTime = $map['AccessTokenEffectiveTime'];
        }
        if (isset($map['CodeEffectiveTime'])) {
            $model->codeEffectiveTime = $map['CodeEffectiveTime'];
        }
        if (isset($map['CustomClaims'])) {
            if (!empty($map['CustomClaims'])) {
                $model->customClaims = [];
                $n                   = 0;
                foreach ($map['CustomClaims'] as $item) {
                    $model->customClaims[$n++] = null !== $item ? customClaims::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['GrantScopes'])) {
            if (!empty($map['GrantScopes'])) {
                $model->grantScopes = $map['GrantScopes'];
            }
        }
        if (isset($map['GrantTypes'])) {
            if (!empty($map['GrantTypes'])) {
                $model->grantTypes = $map['GrantTypes'];
            }
        }
        if (isset($map['IdTokenEffectiveTime'])) {
            $model->idTokenEffectiveTime = $map['IdTokenEffectiveTime'];
        }
        if (isset($map['PasswordAuthenticationSourceId'])) {
            $model->passwordAuthenticationSourceId = $map['PasswordAuthenticationSourceId'];
        }
        if (isset($map['PasswordTotpMfaRequired'])) {
            $model->passwordTotpMfaRequired = $map['PasswordTotpMfaRequired'];
        }
        if (isset($map['PkceChallengeMethods'])) {
            if (!empty($map['PkceChallengeMethods'])) {
                $model->pkceChallengeMethods = $map['PkceChallengeMethods'];
            }
        }
        if (isset($map['PkceRequired'])) {
            $model->pkceRequired = $map['PkceRequired'];
        }
        if (isset($map['PostLogoutRedirectUris'])) {
            if (!empty($map['PostLogoutRedirectUris'])) {
                $model->postLogoutRedirectUris = $map['PostLogoutRedirectUris'];
            }
        }
        if (isset($map['RedirectUris'])) {
            if (!empty($map['RedirectUris'])) {
                $model->redirectUris = $map['RedirectUris'];
            }
        }
        if (isset($map['RefreshTokenEffective'])) {
            $model->refreshTokenEffective = $map['RefreshTokenEffective'];
        }
        if (isset($map['ResponseTypes'])) {
            if (!empty($map['ResponseTypes'])) {
                $model->responseTypes = $map['ResponseTypes'];
            }
        }
        if (isset($map['SubjectIdExpression'])) {
            $model->subjectIdExpression = $map['SubjectIdExpression'];
        }

        return $model;
    }
}
