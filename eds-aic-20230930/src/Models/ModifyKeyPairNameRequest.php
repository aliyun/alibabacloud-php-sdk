<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models;

use AlibabaCloud\Tea\Model;

class ModifyKeyPairNameRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example kp-6v2q33ae4tw3a****
     *
     * @var string
     */
    public $keyPairId;

    /**
     * @description This parameter is required.
     *
     * @example newKeyPairName
     *
     * @var string
     */
    public $newKeyPairName;
    protected $_name = [
        'keyPairId'      => 'KeyPairId',
        'newKeyPairName' => 'NewKeyPairName',
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
        if (null !== $this->newKeyPairName) {
            $res['NewKeyPairName'] = $this->newKeyPairName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyKeyPairNameRequest
     */
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
