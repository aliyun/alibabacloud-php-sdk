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
     * The file is provided by an IdP that supports SAML 2.0.
     * @example PD94bWwgdmVy****
     *
     * @var string
     */
    public $metadataDocument;

    /**
     * @description Specifies whether to enable SSO for the RAM user. Default value: false. Valid values:
     *
     *   true
     *   false
     *
     * @example true
     *
     * @var bool
     */
    public $ssoEnabled;
    protected $_name = [
        'auxiliaryDomain'  => 'AuxiliaryDomain',
        'metadataDocument' => 'MetadataDocument',
        'ssoEnabled'       => 'SsoEnabled',
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

        return $model;
    }
}
