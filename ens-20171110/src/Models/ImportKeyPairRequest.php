<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class ImportKeyPairRequest extends Model
{
    /**
     * @var string
     */
    public $version;

    /**
     * @var string
     */
    public $keyPairName;

    /**
     * @var string
     */
    public $publicKeyBody;
    protected $_name = [
        'version'       => 'Version',
        'keyPairName'   => 'KeyPairName',
        'publicKeyBody' => 'PublicKeyBody',
    ];

    public function validate()
    {
        Model::validateRequired('version', $this->version, true);
        Model::validateRequired('keyPairName', $this->keyPairName, true);
        Model::validateRequired('publicKeyBody', $this->publicKeyBody, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }
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
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }
        if (isset($map['KeyPairName'])) {
            $model->keyPairName = $map['KeyPairName'];
        }
        if (isset($map['PublicKeyBody'])) {
            $model->publicKeyBody = $map['PublicKeyBody'];
        }

        return $model;
    }
}
