<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentIdentity\V20250901\Models;

use AlibabaCloud\Dara\Model;

class UpdateUserPoolClientShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $accessTokenValidity;

    /**
     * @var string
     */
    public $clientName;

    /**
     * @var bool
     */
    public $enforcePKCE;

    /**
     * @var string
     */
    public $redirectURIsShrink;

    /**
     * @var string
     */
    public $refreshTokenValidity;

    /**
     * @var bool
     */
    public $secretRequired;

    /**
     * @var string
     */
    public $userPoolName;
    protected $_name = [
        'accessTokenValidity' => 'AccessTokenValidity',
        'clientName' => 'ClientName',
        'enforcePKCE' => 'EnforcePKCE',
        'redirectURIsShrink' => 'RedirectURIs',
        'refreshTokenValidity' => 'RefreshTokenValidity',
        'secretRequired' => 'SecretRequired',
        'userPoolName' => 'UserPoolName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessTokenValidity) {
            $res['AccessTokenValidity'] = $this->accessTokenValidity;
        }

        if (null !== $this->clientName) {
            $res['ClientName'] = $this->clientName;
        }

        if (null !== $this->enforcePKCE) {
            $res['EnforcePKCE'] = $this->enforcePKCE;
        }

        if (null !== $this->redirectURIsShrink) {
            $res['RedirectURIs'] = $this->redirectURIsShrink;
        }

        if (null !== $this->refreshTokenValidity) {
            $res['RefreshTokenValidity'] = $this->refreshTokenValidity;
        }

        if (null !== $this->secretRequired) {
            $res['SecretRequired'] = $this->secretRequired;
        }

        if (null !== $this->userPoolName) {
            $res['UserPoolName'] = $this->userPoolName;
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
        if (isset($map['AccessTokenValidity'])) {
            $model->accessTokenValidity = $map['AccessTokenValidity'];
        }

        if (isset($map['ClientName'])) {
            $model->clientName = $map['ClientName'];
        }

        if (isset($map['EnforcePKCE'])) {
            $model->enforcePKCE = $map['EnforcePKCE'];
        }

        if (isset($map['RedirectURIs'])) {
            $model->redirectURIsShrink = $map['RedirectURIs'];
        }

        if (isset($map['RefreshTokenValidity'])) {
            $model->refreshTokenValidity = $map['RefreshTokenValidity'];
        }

        if (isset($map['SecretRequired'])) {
            $model->secretRequired = $map['SecretRequired'];
        }

        if (isset($map['UserPoolName'])) {
            $model->userPoolName = $map['UserPoolName'];
        }

        return $model;
    }
}
