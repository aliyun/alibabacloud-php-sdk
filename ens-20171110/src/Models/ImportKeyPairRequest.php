<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class ImportKeyPairRequest extends Model
{
    /**
     * @description The name of the key pair. The name must conform to the following naming conventions:
     *
     *   The name must be 2 to 128 characters in length.
     *   The name must start with a letter but cannot start with `http://` or `https://`.
     *   The name can contain letters, digits, colons (:), underscores (\_), and hyphens (-).
     *
     * You can specify the name of only one key pair.
     * @example TestKeyPairName
     *
     * @var string
     */
    public $keyPairName;

    /**
     * @description The public key of the key pair. You can specify only one public key.
     *
     * @example ssh-rsa AAAAB****
     *
     * @var string
     */
    public $publicKeyBody;
    protected $_name = [
        'keyPairName'   => 'KeyPairName',
        'publicKeyBody' => 'PublicKeyBody',
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
        if (null !== $this->publicKeyBody) {
            $res['PublicKeyBody'] = $this->publicKeyBody;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ImportKeyPairRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['KeyPairName'])) {
            $model->keyPairName = $map['KeyPairName'];
        }
        if (isset($map['PublicKeyBody'])) {
            $model->publicKeyBody = $map['PublicKeyBody'];
        }

        return $model;
    }
}
