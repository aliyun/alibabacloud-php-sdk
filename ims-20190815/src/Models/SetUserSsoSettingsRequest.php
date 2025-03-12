<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models;

use AlibabaCloud\Tea\Model;

class SetUserSsoSettingsRequest extends Model
{
    /**
     * @description The auxiliary domain name.
     *
     * @example example.com
     *
     * @var string
     */
    public $auxiliaryDomain;

    /**
     * @description The metadata file, which is Base64-encoded.
     *
     * The file is provided by an identity provider (IdP) that supports Security Assertion Markup Language (SAML) 2.0.
     * @example PD94bWwgdmVy****
     *
     * @var string
     */
    public $metadataDocument;

    /**
     * @description Specifies whether to enable SSO for the RAM user. Valid values:
     *
     *   true
     *   false (default)
     *
     * @example true
     *
     * @var bool
     */
    public $ssoEnabled;

    /**
     * @description Specifies whether the SAML SSO requires a domain name in the `<saml:NameID>` element of the SAML response. If yes, the username specified by the IdP for SSO must have a domain name as the suffix.
     *
     *   If the value of the parameter is `true`, the `<saml:NameID>` element **must** be in the `username@domain` format. You can set `domain` to the default domain name or the configured domain alias.
     *   If the value of the parameter is `false`, the `<saml:NameID>` element **must** be in the `username` format and **cannot** contain the `domain` suffix.
     *
     * Set the value to the default `true`.
     * @example true
     *
     * @var bool
     */
    public $ssoLoginWithDomain;
    protected $_name = [
        'auxiliaryDomain'    => 'AuxiliaryDomain',
        'metadataDocument'   => 'MetadataDocument',
        'ssoEnabled'         => 'SsoEnabled',
        'ssoLoginWithDomain' => 'SsoLoginWithDomain',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->auxiliaryDomain) {
            $res['AuxiliaryDomain'] = $this->auxiliaryDomain;
        }
        if (null !== $this->metadataDocument) {
            $res['MetadataDocument'] = $this->metadataDocument;
        }
        if (null !== $this->ssoEnabled) {
            $res['SsoEnabled'] = $this->ssoEnabled;
        }
        if (null !== $this->ssoLoginWithDomain) {
            $res['SsoLoginWithDomain'] = $this->ssoLoginWithDomain;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetUserSsoSettingsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuxiliaryDomain'])) {
            $model->auxiliaryDomain = $map['AuxiliaryDomain'];
        }
        if (isset($map['MetadataDocument'])) {
            $model->metadataDocument = $map['MetadataDocument'];
        }
        if (isset($map['SsoEnabled'])) {
            $model->ssoEnabled = $map['SsoEnabled'];
        }
        if (isset($map['SsoLoginWithDomain'])) {
            $model->ssoLoginWithDomain = $map['SsoLoginWithDomain'];
        }

        return $model;
    }
}
