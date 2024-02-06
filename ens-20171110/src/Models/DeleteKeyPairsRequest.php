<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class DeleteKeyPairsRequest extends Model
{
    /**
     * @var string
     */
    public $keyPairId;

    /**
     * @description The key pair name. The name must conform to the following naming conventions:
     *
     *   The name must be 2 to 128 characters in length, and can contain letters, digits, colons (:), underscores (\_), and hyphens (-).
     *   It can contain letters, digits, colons (:), underscores (\_), and hyphens (-). The name must start with a letter but cannot start with `http://` or `https://`.
     *   It can contain letters, digits, colons (:), underscores (\_), and hyphens (-).
     *
     * Before you delete a key pair, you can call the DescribeKeyPairs operation to query existing key pairs.
     * @example TestKeyPairName
     *
     * @var string
     */
    public $keyPairName;
    protected $_name = [
        'keyPairId'   => 'KeyPairId',
        'keyPairName' => 'KeyPairName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->keyPairId) {
            $res['KeyPairId'] = $this->keyPairId;
        }
        if (null !== $this->keyPairName) {
            $res['KeyPairName'] = $this->keyPairName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteKeyPairsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['KeyPairId'])) {
            $model->keyPairId = $map['KeyPairId'];
        }
        if (isset($map['KeyPairName'])) {
            $model->keyPairName = $map['KeyPairName'];
        }

        return $model;
    }
}
