<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models\CreateKeyPairResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The time when the key pair was created.
     *
     * @example 2024-06-30 08:45:09.0
     *
     * @var string
     */
    public $gmtCreated;

    /**
     * @description The ID of the key pair.
     *
     * @example kp-6v2q33ae4tw3*****
     *
     * @var string
     */
    public $keyPairId;

    /**
     * @description The name of the key pair.
     *
     * @example testKeyPairName
     *
     * @var string
     */
    public $keyPairName;

    /**
     * @description The private key of the key pair. The PEM-encoded private key that is in PKCS#8 format and adheres to the ADB connection specification.
     *
     * @example MIIEpAIBAAKCAQEAtReyMzLIcBH78EV2zj****
     *
     * @var string
     */
    public $privateKeyBody;
    protected $_name = [
        'gmtCreated' => 'GmtCreated',
        'keyPairId' => 'KeyPairId',
        'keyPairName' => 'KeyPairName',
        'privateKeyBody' => 'PrivateKeyBody',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->gmtCreated) {
            $res['GmtCreated'] = $this->gmtCreated;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GmtCreated'])) {
            $model->gmtCreated = $map['GmtCreated'];
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

        return $model;
    }
}
