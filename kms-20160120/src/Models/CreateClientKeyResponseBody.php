<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models;

use AlibabaCloud\Dara\Model;

class CreateClientKeyResponseBody extends Model
{
    /**
     * @var string
     */
    public $clientKeyId;

    /**
     * @var string
     */
    public $keyAlgorithm;

    /**
     * @var string
     */
    public $notAfter;

    /**
     * @var string
     */
    public $notBefore;

    /**
     * @var string
     */
    public $privateKeyData;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'clientKeyId' => 'ClientKeyId',
        'keyAlgorithm' => 'KeyAlgorithm',
        'notAfter' => 'NotAfter',
        'notBefore' => 'NotBefore',
        'privateKeyData' => 'PrivateKeyData',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
