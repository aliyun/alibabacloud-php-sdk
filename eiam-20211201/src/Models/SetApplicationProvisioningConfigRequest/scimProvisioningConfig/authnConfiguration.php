<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\SetApplicationProvisioningConfigRequest\scimProvisioningConfig;

use AlibabaCloud\SDK\Eiam\V20211201\Models\SetApplicationProvisioningConfigRequest\scimProvisioningConfig\authnConfiguration\authnParam;
use AlibabaCloud\Tea\Model;

class authnConfiguration extends Model
{
    /**
     * @description The authentication mode of the SCIM protocol. Valid value:
     *
     *   oauth2: OAuth2.0 mode.
     *
     * @example oauth2
     *
     * @var string
     */
    public $authnMode;

    /**
     * @description The configuration parameters related to authorization.
     *
     *   If the GrantType parameter is set to client_credentials, you can set the configuration parameters ClientId, ClientSecret, and AuthnMethod.
     *   If the GrantType parameter is set to bearer_token, you can set the configuration parameter AccessToken.
     *
     * @var authnParam
     */
    public $authnParam;

    /**
     * @description The grant type of the SCIM protocol. Valid values:
     *
     *   client_credentials: client mode.
     *   bearer_token: key mode.
     *
     * @example bearer_token
     *
     * @var string
     */
    public $grantType;
    protected $_name = [
        'authnMode'  => 'AuthnMode',
        'authnParam' => 'AuthnParam',
        'grantType'  => 'GrantType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->authnMode) {
            $res['AuthnMode'] = $this->authnMode;
        }
        if (null !== $this->authnParam) {
            $res['AuthnParam'] = null !== $this->authnParam ? $this->authnParam->toMap() : null;
        }
        if (null !== $this->grantType) {
            $res['GrantType'] = $this->grantType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return authnConfiguration
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuthnMode'])) {
            $model->authnMode = $map['AuthnMode'];
        }
        if (isset($map['AuthnParam'])) {
            $model->authnParam = authnParam::fromMap($map['AuthnParam']);
        }
        if (isset($map['GrantType'])) {
            $model->grantType = $map['GrantType'];
        }

        return $model;
    }
}
