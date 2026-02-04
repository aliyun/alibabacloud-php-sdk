<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\ExecIdentityProviderMetadataUrlResolutionResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ExecIdentityProviderMetadataUrlResolutionResponseBody\identityProviderMetadata\oidcOpenIdConfiguration;

class identityProviderMetadata extends Model
{
    /**
     * @var oidcOpenIdConfiguration
     */
    public $oidcOpenIdConfiguration;
    protected $_name = [
        'oidcOpenIdConfiguration' => 'OidcOpenIdConfiguration',
    ];

    public function validate()
    {
        if (null !== $this->oidcOpenIdConfiguration) {
            $this->oidcOpenIdConfiguration->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->oidcOpenIdConfiguration) {
            $res['OidcOpenIdConfiguration'] = null !== $this->oidcOpenIdConfiguration ? $this->oidcOpenIdConfiguration->toArray($noStream) : $this->oidcOpenIdConfiguration;
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

        return $model;
    }
}
