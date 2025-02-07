<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models;

use AlibabaCloud\Dara\Model;

class UpdateApplicationRequest extends Model
{
    /**
     * @var string
     */
    public $appId;
    /**
     * @var int
     */
    public $newAccessTokenValidity;
    /**
     * @var string
     */
    public $newDisplayName;
    /**
     * @var bool
     */
    public $newIsMultiTenant;
    /**
     * @var string
     */
    public $newPredefinedScopes;
    /**
     * @var string
     */
    public $newRedirectUris;
    /**
     * @var int
     */
    public $newRefreshTokenValidity;
    /**
     * @var string
     */
    public $newRequiredScopes;
    /**
     * @var bool
     */
    public $newSecretRequired;
    protected $_name = [
        'appId'                   => 'AppId',
        'newAccessTokenValidity'  => 'NewAccessTokenValidity',
        'newDisplayName'          => 'NewDisplayName',
        'newIsMultiTenant'        => 'NewIsMultiTenant',
        'newPredefinedScopes'     => 'NewPredefinedScopes',
        'newRedirectUris'         => 'NewRedirectUris',
        'newRefreshTokenValidity' => 'NewRefreshTokenValidity',
        'newRequiredScopes'       => 'NewRequiredScopes',
        'newSecretRequired'       => 'NewSecretRequired',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        if (null !== $this->newAccessTokenValidity) {
            $res['NewAccessTokenValidity'] = $this->newAccessTokenValidity;
        }

        if (null !== $this->newDisplayName) {
            $res['NewDisplayName'] = $this->newDisplayName;
        }

        if (null !== $this->newIsMultiTenant) {
            $res['NewIsMultiTenant'] = $this->newIsMultiTenant;
        }

        if (null !== $this->newPredefinedScopes) {
            $res['NewPredefinedScopes'] = $this->newPredefinedScopes;
        }

        if (null !== $this->newRedirectUris) {
            $res['NewRedirectUris'] = $this->newRedirectUris;
        }

        if (null !== $this->newRefreshTokenValidity) {
            $res['NewRefreshTokenValidity'] = $this->newRefreshTokenValidity;
        }

        if (null !== $this->newRequiredScopes) {
            $res['NewRequiredScopes'] = $this->newRequiredScopes;
        }

        if (null !== $this->newSecretRequired) {
            $res['NewSecretRequired'] = $this->newSecretRequired;
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
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }

        if (isset($map['NewAccessTokenValidity'])) {
            $model->newAccessTokenValidity = $map['NewAccessTokenValidity'];
        }

        if (isset($map['NewDisplayName'])) {
            $model->newDisplayName = $map['NewDisplayName'];
        }

        if (isset($map['NewIsMultiTenant'])) {
            $model->newIsMultiTenant = $map['NewIsMultiTenant'];
        }

        if (isset($map['NewPredefinedScopes'])) {
            $model->newPredefinedScopes = $map['NewPredefinedScopes'];
        }

        if (isset($map['NewRedirectUris'])) {
            $model->newRedirectUris = $map['NewRedirectUris'];
        }

        if (isset($map['NewRefreshTokenValidity'])) {
            $model->newRefreshTokenValidity = $map['NewRefreshTokenValidity'];
        }

        if (isset($map['NewRequiredScopes'])) {
            $model->newRequiredScopes = $map['NewRequiredScopes'];
        }

        if (isset($map['NewSecretRequired'])) {
            $model->newSecretRequired = $map['NewSecretRequired'];
        }

        return $model;
    }
}
