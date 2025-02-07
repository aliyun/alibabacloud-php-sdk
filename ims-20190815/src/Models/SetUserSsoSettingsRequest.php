<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models;

use AlibabaCloud\Dara\Model;

class SetUserSsoSettingsRequest extends Model
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
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
