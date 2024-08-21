<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200407\Models;

use AlibabaCloud\Tea\Model;

class GetCsrDetailResponseBody extends Model
{
    /**
     * @description The content of the CSR.
     *
     * @example -----BEGIN CERTIFICATE REQUEST-----   ...... -----END CERTIFICATE REQUEST-----
     *
     * @var string
     */
    public $csr;

    /**
     * @description The private key. Specify a Base64-encoded string.
     *
     * @example -----BEGIN RSA PRIVATE KEY-----…… -----END RSA PRIVATE KEY-----
     *
     * @var string
     */
    public $privateKey;

    /**
     * @description The request ID.
     *
     * @example 08F45EA0-66A7-4504-9B31-3589F5CE308D
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'csr'        => 'Csr',
        'privateKey' => 'PrivateKey',
        'requestId'  => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->csr) {
            $res['Csr'] = $this->csr;
        }
        if (null !== $this->privateKey) {
            $res['PrivateKey'] = $this->privateKey;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetCsrDetailResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Csr'])) {
            $model->csr = $map['Csr'];
        }
        if (isset($map['PrivateKey'])) {
            $model->privateKey = $map['PrivateKey'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
