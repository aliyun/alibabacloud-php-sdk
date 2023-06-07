<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SWASOPEN\V20200601\Models;

use AlibabaCloud\Tea\Model;

class CreateInstanceKeyPairResponseBody extends Model
{
    /**
     * @example If2K1ItazA4GlKkWCEhdRj8Wd6czAvK9*****
     *
     * @var string
     */
    public $fingerprint;

    /**
     * @example ceshi
     *
     * @var string
     */
    public $keyPairName;

    /**
     * @example ***
     *
     * @var string
     */
    public $privateKey;

    /**
     * @example 20758A-585D-4A41-A9B2-28DA8F4F534F
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'fingerprint' => 'Fingerprint',
        'keyPairName' => 'KeyPairName',
        'privateKey'  => 'PrivateKey',
        'requestId'   => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fingerprint) {
            $res['Fingerprint'] = $this->fingerprint;
        }
        if (null !== $this->keyPairName) {
            $res['KeyPairName'] = $this->keyPairName;
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
     * @return CreateInstanceKeyPairResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Fingerprint'])) {
            $model->fingerprint = $map['Fingerprint'];
        }
        if (isset($map['KeyPairName'])) {
            $model->keyPairName = $map['KeyPairName'];
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
