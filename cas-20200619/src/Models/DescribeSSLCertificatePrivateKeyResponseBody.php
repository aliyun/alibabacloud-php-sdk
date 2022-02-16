<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200619\Models;

use AlibabaCloud\Tea\Model;

class DescribeSSLCertificatePrivateKeyResponseBody extends Model
{
    /**
     * @var string
     */
    public $encryptPrivateKey;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $signPrivateKey;

    /**
     * @var string
     */
    public $x509PrivateKey;
    protected $_name = [
        'encryptPrivateKey' => 'EncryptPrivateKey',
        'requestId'         => 'RequestId',
        'signPrivateKey'    => 'SignPrivateKey',
        'x509PrivateKey'    => 'X509PrivateKey',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->encryptPrivateKey) {
            $res['EncryptPrivateKey'] = $this->encryptPrivateKey;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->signPrivateKey) {
            $res['SignPrivateKey'] = $this->signPrivateKey;
        }
        if (null !== $this->x509PrivateKey) {
            $res['X509PrivateKey'] = $this->x509PrivateKey;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSSLCertificatePrivateKeyResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EncryptPrivateKey'])) {
            $model->encryptPrivateKey = $map['EncryptPrivateKey'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SignPrivateKey'])) {
            $model->signPrivateKey = $map['SignPrivateKey'];
        }
        if (isset($map['X509PrivateKey'])) {
            $model->x509PrivateKey = $map['X509PrivateKey'];
        }

        return $model;
    }
}
