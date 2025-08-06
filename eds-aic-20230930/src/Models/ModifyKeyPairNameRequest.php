<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models;

use AlibabaCloud\Dara\Model;

class ModifyKeyPairNameRequest extends Model
{
    /**
     * @var string
     */
    public $keyPairId;

    /**
     * @var string
     */
    public $newKeyPairName;
    protected $_name = [
        'keyPairId' => 'KeyPairId',
        'newKeyPairName' => 'NewKeyPairName',
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

        if (null !== $this->newKeyPairName) {
            $res['NewKeyPairName'] = $this->newKeyPairName;
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

        if (isset($map['NewKeyPairName'])) {
            $model->newKeyPairName = $map['NewKeyPairName'];
        }

        return $model;
    }
}
