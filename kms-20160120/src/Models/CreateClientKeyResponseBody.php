<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models;

use AlibabaCloud\Tea\Model;

class CreateClientKeyResponseBody extends Model
{
    /**
     * @example KAAP.66abf237-63f6-4625-b8cf-47e1086e****
     *
     * @var string
     */
    public $clientKeyId;

    /**
     * @example RSA_2048
     *
     * @var string
     */
    public $keyAlgorithm;

    /**
     * @example 2028-08-31T17:14:33Z
     *
     * @var string
     */
    public $notAfter;

    /**
     * @example 2023-08-31T17:14:33Z
     *
     * @var string
     */
    public $notBefore;

    /**
     * @example MIIJqwIBAzCCCXcGCSqGSIb3DQEHAaCCCWgEgglkMIIJYDCCBBcGCSqGSIb3DQEHBqCCBAgwgg******
     *
     * @var string
     */
    public $privateKeyData;

    /**
     * @example 2312e45f-b2fa-4c34-ad94-3eca50932916
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'clientKeyId'    => 'ClientKeyId',
        'keyAlgorithm'   => 'KeyAlgorithm',
        'notAfter'       => 'NotAfter',
        'notBefore'      => 'NotBefore',
        'privateKeyData' => 'PrivateKeyData',
        'requestId'      => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientKeyId) {
            $res['ClientKeyId'] = $this->clientKeyId;
        }
        if (null !== $this->keyAlgorithm) {
            $res['KeyAlgorithm'] = $this->keyAlgorithm;
        }
        if (null !== $this->notAfter) {
            $res['NotAfter'] = $this->notAfter;
        }
        if (null !== $this->notBefore) {
            $res['NotBefore'] = $this->notBefore;
        }
        if (null !== $this->privateKeyData) {
            $res['PrivateKeyData'] = $this->privateKeyData;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateClientKeyResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientKeyId'])) {
            $model->clientKeyId = $map['ClientKeyId'];
        }
        if (isset($map['KeyAlgorithm'])) {
            $model->keyAlgorithm = $map['KeyAlgorithm'];
        }
        if (isset($map['NotAfter'])) {
            $model->notAfter = $map['NotAfter'];
        }
        if (isset($map['NotBefore'])) {
            $model->notBefore = $map['NotBefore'];
        }
        if (isset($map['PrivateKeyData'])) {
            $model->privateKeyData = $map['PrivateKeyData'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
