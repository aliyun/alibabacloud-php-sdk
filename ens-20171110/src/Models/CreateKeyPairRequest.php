<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class CreateKeyPairRequest extends Model
{
    /**
     * @description The name of the key pair. The name must conform to the following naming conventions:
     *
     *   The name must be 2 to 128 characters in length, and can contain letters, digits, colons (:), underscores (\_), and hyphens (-).
     *   It must start with a letter but cannot start with `http://` or `https://`.
     *
     * @example TestKeyPairName
     *
     * @var string
     */
    public $keyPairName;
    protected $_name = [
        'keyPairName' => 'KeyPairName',
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
        if (isset($map['KeyPairName'])) {
            $model->keyPairName = $map['KeyPairName'];
        }

        return $model;
    }
}
