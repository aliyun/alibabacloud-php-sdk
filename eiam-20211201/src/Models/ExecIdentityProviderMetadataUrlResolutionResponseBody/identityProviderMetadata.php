<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\ExecIdentityProviderMetadataUrlResolutionResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ExecIdentityProviderMetadataUrlResolutionResponseBody\identityProviderMetadata\oidcOpenIdConfiguration;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ExecIdentityProviderMetadataUrlResolutionResponseBody\identityProviderMetadata\samlMetadataConfiguration;

class identityProviderMetadata extends Model
{
    /**
     * @var oidcOpenIdConfiguration
     */
    public $oidcOpenIdConfiguration;

    /**
     * @var samlMetadataConfiguration
     */
    public $samlMetadataConfiguration;
    protected $_name = [
        'oidcOpenIdConfiguration' => 'OidcOpenIdConfiguration',
        'samlMetadataConfiguration' => 'SamlMetadataConfiguration',
    ];

    public function validate()
    {
        if (null !== $this->oidcOpenIdConfiguration) {
            $this->oidcOpenIdConfiguration->validate();
        }
        if (null !== $this->samlMetadataConfiguration) {
            $this->samlMetadataConfiguration->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->oidcOpenIdConfiguration) {
            $res['OidcOpenIdConfiguration'] = null !== $this->oidcOpenIdConfiguration ? $this->oidcOpenIdConfiguration->toArray($noStream) : $this->oidcOpenIdConfiguration;
        }

        if (null !== $this->samlMetadataConfiguration) {
            $res['SamlMetadataConfiguration'] = null !== $this->samlMetadataConfiguration ? $this->samlMetadataConfiguration->toArray($noStream) : $this->samlMetadataConfiguration;
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
        if (isset($map['OidcOpenIdConfiguration'])) {
            $model->oidcOpenIdConfiguration = oidcOpenIdConfiguration::fromMap($map['OidcOpenIdConfiguration']);
        }

        if (isset($map['SamlMetadataConfiguration'])) {
            $model->samlMetadataConfiguration = samlMetadataConfiguration::fromMap($map['SamlMetadataConfiguration']);
        }

        return $model;
    }
}
