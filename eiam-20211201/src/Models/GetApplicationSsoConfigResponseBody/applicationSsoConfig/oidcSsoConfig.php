<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\GetApplicationSsoConfigResponseBody\applicationSsoConfig;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetApplicationSsoConfigResponseBody\applicationSsoConfig\oidcSsoConfig\customClaims;

class oidcSsoConfig extends Model
{
    /**
     * @var int
     */
    public $accessTokenEffectiveTime;

    /**
     * @var string
     */
    public $allowedPublicClient;

    /**
     * @var int
     */
    public $codeEffectiveTime;

    /**
     * @var customClaims[]
     */
    public $customClaims;

    /**
     * @var string[]
     */
    public $grantScopes;

    /**
     * @var string[]
     */
    public $grantTypes;

    /**
     * @var int
     */
    public $idTokenEffectiveTime;

    /**
     * @var string
     */
    public $passwordAuthenticationSourceId;

    /**
     * @var bool
     */
    public $passwordTotpMfaRequired;

    /**
     * @var string[]
     */
    public $pkceChallengeMethods;

    /**
     * @var bool
     */
    public $pkceRequired;

    /**
     * @var string[]
     */
    public $postLogoutRedirectUris;

    /**
     * @var string[]
     */
    public $redirectUris;

    /**
     * @var int
     */
    public $refreshTokenEffective;

    /**
     * @var string[]
     */
    public $responseTypes;

    /**
     * @var string
     */
    public $subjectIdExpression;
    protected $_name = [
        'accessTokenEffectiveTime' => 'AccessTokenEffectiveTime',
        'allowedPublicClient' => 'AllowedPublicClient',
        'codeEffectiveTime' => 'CodeEffectiveTime',
        'customClaims' => 'CustomClaims',
        'grantScopes' => 'GrantScopes',
        'grantTypes' => 'GrantTypes',
        'idTokenEffectiveTime' => 'IdTokenEffectiveTime',
        'passwordAuthenticationSourceId' => 'PasswordAuthenticationSourceId',
        'passwordTotpMfaRequired' => 'PasswordTotpMfaRequired',
        'pkceChallengeMethods' => 'PkceChallengeMethods',
        'pkceRequired' => 'PkceRequired',
        'postLogoutRedirectUris' => 'PostLogoutRedirectUris',
        'redirectUris' => 'RedirectUris',
        'refreshTokenEffective' => 'RefreshTokenEffective',
        'responseTypes' => 'ResponseTypes',
        'subjectIdExpression' => 'SubjectIdExpression',
    ];

    public function validate()
    {
        if (\is_array($this->customClaims)) {
            Model::validateArray($this->customClaims);
        }
        if (\is_array($this->grantScopes)) {
            Model::validateArray($this->grantScopes);
        }
        if (\is_array($this->grantTypes)) {
            Model::validateArray($this->grantTypes);
        }
        if (\is_array($this->pkceChallengeMethods)) {
            Model::validateArray($this->pkceChallengeMethods);
        }
        if (\is_array($this->postLogoutRedirectUris)) {
            Model::validateArray($this->postLogoutRedirectUris);
        }
        if (\is_array($this->redirectUris)) {
            Model::validateArray($this->redirectUris);
        }
        if (\is_array($this->responseTypes)) {
            Model::validateArray($this->responseTypes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessTokenEffectiveTime) {
            $res['AccessTokenEffectiveTime'] = $this->accessTokenEffectiveTime;
        }

        if (null !== $this->allowedPublicClient) {
            $res['AllowedPublicClient'] = $this->allowedPublicClient;
        }

        if (null !== $this->codeEffectiveTime) {
            $res['CodeEffectiveTime'] = $this->codeEffectiveTime;
        }

        if (null !== $this->customClaims) {
            if (\is_array($this->customClaims)) {
                $res['CustomClaims'] = [];
                $n1 = 0;
                foreach ($this->customClaims as $item1) {
                    $res['CustomClaims'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->grantScopes) {
            if (\is_array($this->grantScopes)) {
                $res['GrantScopes'] = [];
                $n1 = 0;
                foreach ($this->grantScopes as $item1) {
                    $res['GrantScopes'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->grantTypes) {
            if (\is_array($this->grantTypes)) {
                $res['GrantTypes'] = [];
                $n1 = 0;
                foreach ($this->grantTypes as $item1) {
                    $res['GrantTypes'][$n1] = $item1;
                    ++$n1;
                }
            }
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
            if (\is_array($this->pkceChallengeMethods)) {
                $res['PkceChallengeMethods'] = [];
                $n1 = 0;
                foreach ($this->pkceChallengeMethods as $item1) {
                    $res['PkceChallengeMethods'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->pkceRequired) {
            $res['PkceRequired'] = $this->pkceRequired;
        }

        if (null !== $this->postLogoutRedirectUris) {
            if (\is_array($this->postLogoutRedirectUris)) {
                $res['PostLogoutRedirectUris'] = [];
                $n1 = 0;
                foreach ($this->postLogoutRedirectUris as $item1) {
                    $res['PostLogoutRedirectUris'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->redirectUris) {
            if (\is_array($this->redirectUris)) {
                $res['RedirectUris'] = [];
                $n1 = 0;
                foreach ($this->redirectUris as $item1) {
                    $res['RedirectUris'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->refreshTokenEffective) {
            $res['RefreshTokenEffective'] = $this->refreshTokenEffective;
        }

        if (null !== $this->responseTypes) {
            if (\is_array($this->responseTypes)) {
                $res['ResponseTypes'] = [];
                $n1 = 0;
                foreach ($this->responseTypes as $item1) {
                    $res['ResponseTypes'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->subjectIdExpression) {
            $res['SubjectIdExpression'] = $this->subjectIdExpression;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessTokenEffectiveTime'])) {
            $model->accessTokenEffectiveTime = $map['AccessTokenEffectiveTime'];
        }

        if (isset($map['AllowedPublicClient'])) {
            $model->allowedPublicClient = $map['AllowedPublicClient'];
        }

        if (isset($map['CodeEffectiveTime'])) {
            $model->codeEffectiveTime = $map['CodeEffectiveTime'];
        }

        if (isset($map['CustomClaims'])) {
            if (!empty($map['CustomClaims'])) {
                $model->customClaims = [];
                $n1 = 0;
                foreach ($map['CustomClaims'] as $item1) {
                    $model->customClaims[$n1] = customClaims::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['GrantScopes'])) {
            if (!empty($map['GrantScopes'])) {
                $model->grantScopes = [];
                $n1 = 0;
                foreach ($map['GrantScopes'] as $item1) {
                    $model->grantScopes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['GrantTypes'])) {
            if (!empty($map['GrantTypes'])) {
                $model->grantTypes = [];
                $n1 = 0;
                foreach ($map['GrantTypes'] as $item1) {
                    $model->grantTypes[$n1] = $item1;
                    ++$n1;
                }
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
                $model->pkceChallengeMethods = [];
                $n1 = 0;
                foreach ($map['PkceChallengeMethods'] as $item1) {
                    $model->pkceChallengeMethods[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['PkceRequired'])) {
            $model->pkceRequired = $map['PkceRequired'];
        }

        if (isset($map['PostLogoutRedirectUris'])) {
            if (!empty($map['PostLogoutRedirectUris'])) {
                $model->postLogoutRedirectUris = [];
                $n1 = 0;
                foreach ($map['PostLogoutRedirectUris'] as $item1) {
                    $model->postLogoutRedirectUris[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['RedirectUris'])) {
            if (!empty($map['RedirectUris'])) {
                $model->redirectUris = [];
                $n1 = 0;
                foreach ($map['RedirectUris'] as $item1) {
                    $model->redirectUris[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['RefreshTokenEffective'])) {
            $model->refreshTokenEffective = $map['RefreshTokenEffective'];
        }

        if (isset($map['ResponseTypes'])) {
            if (!empty($map['ResponseTypes'])) {
                $model->responseTypes = [];
                $n1 = 0;
                foreach ($map['ResponseTypes'] as $item1) {
                    $model->responseTypes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['SubjectIdExpression'])) {
            $model->subjectIdExpression = $map['SubjectIdExpression'];
        }

        return $model;
    }
}
