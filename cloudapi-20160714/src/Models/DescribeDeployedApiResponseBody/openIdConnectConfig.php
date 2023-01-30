<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeDeployedApiResponseBody;

use AlibabaCloud\Tea\Model;

class openIdConnectConfig extends Model
{
    /**
     * @description The name of the parameter that corresponds to the token.
     *
     * @example xxx
     *
     * @var string
     */
    public $idTokenParamName;

    /**
     * @description The OpenID Connect mode. Valid values:
     *
     *   **IDTOKEN: OpenID Connect calls the authentication API to issue tokens. If this value is specified, the PublicKeyId parameter and the PublicKey parameter are required.**
     *   **BUSINESS: OpenID Connect calls the business API to verify identities by using existing tokens. If this value is specified, the IdTokenParamName parameter is required.
     *
     * @example IDTOKEN
     *
     * @var string
     */
    public $openIdApiType;

    /**
     * @description The public key of the API.
     *
     * @example EB1837F8693CCED0BF750B3AD48467BEB569E780A14591CF92
     *
     * @var string
     */
    public $publicKey;

    /**
     * @description The ID of the public key.
     *
     * @example 88483727556929326703309904351185815489
     *
     * @var string
     */
    public $publicKeyId;
    protected $_name = [
        'idTokenParamName' => 'IdTokenParamName',
        'openIdApiType'    => 'OpenIdApiType',
        'publicKey'        => 'PublicKey',
        'publicKeyId'      => 'PublicKeyId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->idTokenParamName) {
            $res['IdTokenParamName'] = $this->idTokenParamName;
        }
        if (null !== $this->openIdApiType) {
            $res['OpenIdApiType'] = $this->openIdApiType;
        }
        if (null !== $this->publicKey) {
            $res['PublicKey'] = $this->publicKey;
        }
        if (null !== $this->publicKeyId) {
            $res['PublicKeyId'] = $this->publicKeyId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return openIdConnectConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IdTokenParamName'])) {
            $model->idTokenParamName = $map['IdTokenParamName'];
        }
        if (isset($map['OpenIdApiType'])) {
            $model->openIdApiType = $map['OpenIdApiType'];
        }
        if (isset($map['PublicKey'])) {
            $model->publicKey = $map['PublicKey'];
        }
        if (isset($map['PublicKeyId'])) {
            $model->publicKeyId = $map['PublicKeyId'];
        }

        return $model;
    }
}
