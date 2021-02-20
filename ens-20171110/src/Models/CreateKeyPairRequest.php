<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class CreateKeyPairRequest extends Model
{
    /**
     * @var string
     */
    public $version;

    /**
     * @var string
     */
    public $keyPairName;
    protected $_name = [
        'version'     => 'Version',
        'keyPairName' => 'KeyPairName',
    ];

    public function validate()
    {
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateKeyPairRequest
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

        return $model;
    }
}
