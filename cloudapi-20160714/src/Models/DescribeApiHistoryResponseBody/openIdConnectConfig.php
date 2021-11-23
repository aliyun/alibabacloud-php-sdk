<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiHistoryResponseBody;

use AlibabaCloud\Tea\Model;

class openIdConnectConfig extends Model
{
    /**
     * @var string
     */
    public $idTokenParamName;

    /**
     * @var string
     */
    public $openIdApiType;

    /**
     * @var string
     */
    public $publicKey;

    /**
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
