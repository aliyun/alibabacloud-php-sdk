<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class CreateKeyPairResponseBody extends Model
{
    /**
     * @description The fingerprint of the key pair. The message-digest algorithm 5 (MD5) is used based on the public key fingerprint format defined in RFC 4716. For more information, see [RFC 4716](https://tools.ietf.org/html/rfc4716).
     *
     * @example 7880c1ad4687fdbf7a6da2131****
     *
     * @var string
     */
    public $keyPairFingerPrint;

    /**
     * @description The ID of the SSH key pair.
     *
     * @example ssh-5lywanlkih1zo9yl8eg****
     *
     * @var string
     */
    public $keyPairId;

    /**
     * @description The name of the key pair.
     *
     * @example TestKeyPairName
     *
     * @var string
     */
    public $keyPairName;

    /**
     * @description The private key of the key pair. The private key is encoded with PEM in the PKCS#8 format.
     *
     * @example -----BEGIN RSA PRIVATE KEY-----\nMIIEogIBAAKCAQE****
     *
     * @var string
     */
    public $privateKeyBody;

    /**
     * @description The request ID.
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'keyPairFingerPrint' => 'KeyPairFingerPrint',
        'keyPairId'          => 'KeyPairId',
        'keyPairName'        => 'KeyPairName',
        'privateKeyBody'     => 'PrivateKeyBody',
        'requestId'          => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->keyPairFingerPrint) {
            $res['KeyPairFingerPrint'] = $this->keyPairFingerPrint;
        }
        if (null !== $this->keyPairId) {
            $res['KeyPairId'] = $this->keyPairId;
        }
        if (null !== $this->keyPairName) {
            $res['KeyPairName'] = $this->keyPairName;
        }
        if (null !== $this->privateKeyBody) {
            $res['PrivateKeyBody'] = $this->privateKeyBody;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateKeyPairResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['KeyPairFingerPrint'])) {
            $model->keyPairFingerPrint = $map['KeyPairFingerPrint'];
        }
        if (isset($map['KeyPairId'])) {
            $model->keyPairId = $map['KeyPairId'];
        }
        if (isset($map['KeyPairName'])) {
            $model->keyPairName = $map['KeyPairName'];
        }
        if (isset($map['PrivateKeyBody'])) {
            $model->privateKeyBody = $map['PrivateKeyBody'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
