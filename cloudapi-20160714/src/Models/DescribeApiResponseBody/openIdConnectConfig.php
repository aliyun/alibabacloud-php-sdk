<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiResponseBody;

use AlibabaCloud\Tea\Model;

class openIdConnectConfig extends Model
{
    /**
     * @description The type of the two-way communication API. Valid values:
     *
     *   **COMMON**: general APIs
     *   **REGISTER**: registered APIs
     *   **UNREGISTER**: unregistered APIs
     *   **NOTIFY**: downstream notification
     *
     * For more information, see [Two-way communication](~~66031~~).
     * @example xxx
     *
     * @var string
     */
    public $idTokenParamName;

    /**
     * @description Backend configurations
     *
     * @example IDTOKEN
     *
     * @var string
     */
    public $openIdApiType;

    /**
     * @description The HTTP method used to call a backend service. Valid values: GET, POST, DELETE, PUT, HEADER, TRACE, PATCH, CONNECT, and OPTIONS.
     *
     * @example EB1837F8693CCED0BF750B3AD48467BEB569E780A14591CF92
     *
     * @var string
     */
    public $publicKey;

    /**
     * @description The port number that corresponds to the instance.
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
