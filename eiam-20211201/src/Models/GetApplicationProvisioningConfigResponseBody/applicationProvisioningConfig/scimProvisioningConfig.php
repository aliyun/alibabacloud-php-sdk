<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\GetApplicationProvisioningConfigResponseBody\applicationProvisioningConfig;

use AlibabaCloud\SDK\Eiam\V20211201\Models\GetApplicationProvisioningConfigResponseBody\applicationProvisioningConfig\scimProvisioningConfig\authnConfiguration;
use AlibabaCloud\Tea\Model;

class scimProvisioningConfig extends Model
{
    /**
     * @description The configuration parameters related to SCIM-based synchronization.
     *
     * @var authnConfiguration
     */
    public $authnConfiguration;

    /**
     * @description The full synchronization scope of the SCIM protocol. Valid value:
     *
     *   urn:alibaba:idaas:app:scim:User:PUSH: full account data synchronization.
     *
     * @var string[]
     */
    public $fullPushScopes;

    /**
     * @description The resource operations of the SCIM protocol. Valid values:
     *
     *   urn:alibaba:idaas:app:scim:User:CREATE: account creation.
     *   urn:alibaba:idaas:app:scim:User:UPDATE: account update.
     *   urn:alibaba:idaas:app:scim:User:DELETE: account deletion.
     *
     * @var string[]
     */
    public $provisioningActions;

    /**
     * @description The base URL that the application uses to receive the SCIM protocol for IDaaS synchronization.
     *
     * @example https://example.com/scim
     *
     * @var string
     */
    public $scimBaseUrl;
    protected $_name = [
        'authnConfiguration'  => 'AuthnConfiguration',
        'fullPushScopes'      => 'FullPushScopes',
        'provisioningActions' => 'ProvisioningActions',
        'scimBaseUrl'         => 'ScimBaseUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->authnConfiguration) {
            $res['AuthnConfiguration'] = null !== $this->authnConfiguration ? $this->authnConfiguration->toMap() : null;
        }
        if (null !== $this->fullPushScopes) {
            $res['FullPushScopes'] = $this->fullPushScopes;
        }
        if (null !== $this->provisioningActions) {
            $res['ProvisioningActions'] = $this->provisioningActions;
        }
        if (null !== $this->scimBaseUrl) {
            $res['ScimBaseUrl'] = $this->scimBaseUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return scimProvisioningConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuthnConfiguration'])) {
            $model->authnConfiguration = authnConfiguration::fromMap($map['AuthnConfiguration']);
        }
        if (isset($map['FullPushScopes'])) {
            if (!empty($map['FullPushScopes'])) {
                $model->fullPushScopes = $map['FullPushScopes'];
            }
        }
        if (isset($map['ProvisioningActions'])) {
            if (!empty($map['ProvisioningActions'])) {
                $model->provisioningActions = $map['ProvisioningActions'];
            }
        }
        if (isset($map['ScimBaseUrl'])) {
            $model->scimBaseUrl = $map['ScimBaseUrl'];
        }

        return $model;
    }
}
