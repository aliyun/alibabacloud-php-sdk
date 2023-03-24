<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models;

use AlibabaCloud\Tea\Model;

class AddClientIdToOIDCProviderRequest extends Model
{
    /**
     * @description The client ID that you want to add.
     *
     * The client ID can be up to 64 characters in length.
     * @example 598469743454717****
     *
     * @var string
     */
    public $clientId;

    /**
     * @description The name of the OIDC IdP.
     *
     * @example TestOIDCProvider
     *
     * @var string
     */
    public $OIDCProviderName;
    protected $_name = [
        'clientId'         => 'ClientId',
        'OIDCProviderName' => 'OIDCProviderName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientId) {
            $res['ClientId'] = $this->clientId;
        }
        if (null !== $this->OIDCProviderName) {
            $res['OIDCProviderName'] = $this->OIDCProviderName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddClientIdToOIDCProviderRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientId'])) {
            $model->clientId = $map['ClientId'];
        }
        if (isset($map['OIDCProviderName'])) {
            $model->OIDCProviderName = $map['OIDCProviderName'];
        }

        return $model;
    }
}
