<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models;

use AlibabaCloud\Tea\Model;

class UpdateApplicationRequest extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $newDisplayName;

    /**
     * @var string
     */
    public $newRedirectUris;

    /**
     * @var string
     */
    public $newPredefinedScopes;

    /**
     * @var bool
     */
    public $newSecretRequired;

    /**
     * @var int
     */
    public $newAccessTokenValidity;

    /**
     * @var int
     */
    public $newRefreshTokenValidity;

    /**
     * @var bool
     */
    public $newIsMultiTenant;
    protected $_name = [
        'appId'                   => 'AppId',
        'newDisplayName'          => 'NewDisplayName',
        'newRedirectUris'         => 'NewRedirectUris',
        'newPredefinedScopes'     => 'NewPredefinedScopes',
        'newSecretRequired'       => 'NewSecretRequired',
        'newAccessTokenValidity'  => 'NewAccessTokenValidity',
        'newRefreshTokenValidity' => 'NewRefreshTokenValidity',
        'newIsMultiTenant'        => 'NewIsMultiTenant',
    ];

    public function validate()
    {
        Model::validateRequired('appId', $this->appId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->newDisplayName) {
            $res['NewDisplayName'] = $this->newDisplayName;
        }
        if (null !== $this->newRedirectUris) {
            $res['NewRedirectUris'] = $this->newRedirectUris;
        }
        if (null !== $this->newPredefinedScopes) {
            $res['NewPredefinedScopes'] = $this->newPredefinedScopes;
        }
        if (null !== $this->newSecretRequired) {
            $res['NewSecretRequired'] = $this->newSecretRequired;
        }
        if (null !== $this->newAccessTokenValidity) {
            $res['NewAccessTokenValidity'] = $this->newAccessTokenValidity;
        }
        if (null !== $this->newRefreshTokenValidity) {
            $res['NewRefreshTokenValidity'] = $this->newRefreshTokenValidity;
        }
        if (null !== $this->newIsMultiTenant) {
            $res['NewIsMultiTenant'] = $this->newIsMultiTenant;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateApplicationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['NewDisplayName'])) {
            $model->newDisplayName = $map['NewDisplayName'];
        }
        if (isset($map['NewRedirectUris'])) {
            $model->newRedirectUris = $map['NewRedirectUris'];
        }
        if (isset($map['NewPredefinedScopes'])) {
            $model->newPredefinedScopes = $map['NewPredefinedScopes'];
        }
        if (isset($map['NewSecretRequired'])) {
            $model->newSecretRequired = $map['NewSecretRequired'];
        }
        if (isset($map['NewAccessTokenValidity'])) {
            $model->newAccessTokenValidity = $map['NewAccessTokenValidity'];
        }
        if (isset($map['NewRefreshTokenValidity'])) {
            $model->newRefreshTokenValidity = $map['NewRefreshTokenValidity'];
        }
        if (isset($map['NewIsMultiTenant'])) {
            $model->newIsMultiTenant = $map['NewIsMultiTenant'];
        }

        return $model;
    }
}
