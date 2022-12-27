<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class ImportKeyPairRequest extends Model
{
    /**
     * @example TestKeyPairName
     *
     * @var string
     */
    public $keyPairName;

    /**
     * @example ssh-rsa AAAAB****
     *
     * @var string
     */
    public $publicKeyBody;

    /**
     * @example 2017-11-10
     *
     * @var string
     */
    public $version;
    protected $_name = [
        'keyPairName'   => 'KeyPairName',
        'publicKeyBody' => 'PublicKeyBody',
        'version'       => 'Version',
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
        if (null !== $this->version) {
            $res['Version'] = $this->version;
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
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
