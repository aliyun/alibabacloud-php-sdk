<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeDeployedApiResponseBody;

use AlibabaCloud\Tea\Model;

class openIdConnectConfig extends Model
{
    /**
     * @var string
     */
    public $openIdApiType;

    /**
     * @var string
     */
    public $idTokenParamName;

    /**
     * @var string
     */
    public $publicKeyId;

    /**
     * @var string
     */
    public $publicKey;
    protected $_name = [
        'openIdApiType'    => 'OpenIdApiType',
        'idTokenParamName' => 'IdTokenParamName',
        'publicKeyId'      => 'PublicKeyId',
        'publicKey'        => 'PublicKey',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->openIdApiType) {
            $res['OpenIdApiType'] = $this->openIdApiType;
        }
        if (null !== $this->idTokenParamName) {
            $res['IdTokenParamName'] = $this->idTokenParamName;
        }
        if (null !== $this->publicKeyId) {
            $res['PublicKeyId'] = $this->publicKeyId;
        }
        if (null !== $this->publicKey) {
            $res['PublicKey'] = $this->publicKey;
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
        if (isset($map['OpenIdApiType'])) {
            $model->openIdApiType = $map['OpenIdApiType'];
        }
        if (isset($map['IdTokenParamName'])) {
            $model->idTokenParamName = $map['IdTokenParamName'];
        }
        if (isset($map['PublicKeyId'])) {
            $model->publicKeyId = $map['PublicKeyId'];
        }
        if (isset($map['PublicKey'])) {
            $model->publicKey = $map['PublicKey'];
        }

        return $model;
    }
}
