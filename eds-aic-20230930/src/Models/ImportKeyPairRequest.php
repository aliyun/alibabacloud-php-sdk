<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models;

use AlibabaCloud\Tea\Model;

class ImportKeyPairRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example TestKeyPairName
     *
     * @var string
     */
    public $keyPairName;

    /**
     * @description This parameter is required.
     *
     * @example ABC1234567*****
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
