<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models\GetUserSsoSettingsResponseBody;

use AlibabaCloud\Tea\Model;

class userSsoSettings extends Model
{
    /**
     * @var string
     */
    public $auxiliaryDomain;

    /**
     * @var string
     */
    public $metadataDocument;

    /**
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
     * @return userSsoSettings
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
