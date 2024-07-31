<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SWASOPEN\V20200601\Models;

use AlibabaCloud\Tea\Model;

class CreateKeyPairResponseBody extends Model
{
    /**
     * @description The name of the key pair. The name must be 2 to 64 characters in length and can contain letters, digits, colons (.), underscores (_), and hyphens (-). It must start with a letter but cannot start with http:// or https://.
     *
     * @example KeyPairName
     *
     * @var string
     */
    public $keyPairName;

    /**
     * @description The private key of the key pair. The PEM-encoded private key is in PKCS#8 format.
     *
     * @example MIIEpAIBAAKCAQEAtReyMzLIcBH78EV2zj****
     *
     * @var string
     */
    public $privateKeyBody;

    /**
     * @description The request ID.
     *
     * @example 20758A-585D-4A41-A9B2-28DA8F4F****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'keyPairName'    => 'KeyPairName',
        'privateKeyBody' => 'PrivateKeyBody',
        'requestId'      => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
