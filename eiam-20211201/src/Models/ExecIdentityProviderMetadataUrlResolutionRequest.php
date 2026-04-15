<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models;

use AlibabaCloud\Dara\Model;

class ExecIdentityProviderMetadataUrlResolutionRequest extends Model
{
    /**
     * @var string
     */
    public $identityProviderId;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $networkAccessEndpointId;

    /**
     * @var string
     */
    public $oidcIssuer;

    /**
     * @var string
     */
    public $samlMetadataUrl;
    protected $_name = [
        'identityProviderId' => 'IdentityProviderId',
        'instanceId' => 'InstanceId',
        'networkAccessEndpointId' => 'NetworkAccessEndpointId',
        'oidcIssuer' => 'OidcIssuer',
        'samlMetadataUrl' => 'SamlMetadataUrl',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->identityProviderId) {
            $res['IdentityProviderId'] = $this->identityProviderId;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->networkAccessEndpointId) {
            $res['NetworkAccessEndpointId'] = $this->networkAccessEndpointId;
        }

        if (null !== $this->oidcIssuer) {
            $res['OidcIssuer'] = $this->oidcIssuer;
        }

        if (null !== $this->samlMetadataUrl) {
            $res['SamlMetadataUrl'] = $this->samlMetadataUrl;
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
        if (isset($map['IdentityProviderId'])) {
            $model->identityProviderId = $map['IdentityProviderId'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['NetworkAccessEndpointId'])) {
            $model->networkAccessEndpointId = $map['NetworkAccessEndpointId'];
        }

        if (isset($map['OidcIssuer'])) {
            $model->oidcIssuer = $map['OidcIssuer'];
        }

        if (isset($map['SamlMetadataUrl'])) {
            $model->samlMetadataUrl = $map['SamlMetadataUrl'];
        }

        return $model;
    }
}
