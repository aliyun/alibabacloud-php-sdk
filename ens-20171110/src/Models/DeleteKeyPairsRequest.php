<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Dara\Model;

class DeleteKeyPairsRequest extends Model
{
    /**
     * @var string
     */
    public $keyPairId;

    /**
     * @var string
     */
    public $keyPairName;
    protected $_name = [
        'keyPairId' => 'KeyPairId',
        'keyPairName' => 'KeyPairName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
