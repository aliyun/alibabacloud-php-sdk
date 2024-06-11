<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models;

use AlibabaCloud\Tea\Model;

class DetachKeyPairRequest extends Model
{
    /**
     * @var string[]
     */
    public $instanceIds;

    /**
     * @description This parameter is required.
     *
     * @example kp-6v2q33ae4tw3a****
     *
     * @var string
     */
    public $keyPairId;
    protected $_name = [
        'instanceIds' => 'InstanceIds',
        'keyPairId'   => 'KeyPairId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceIds) {
            $res['InstanceIds'] = $this->instanceIds;
        }
        if (null !== $this->keyPairId) {
            $res['KeyPairId'] = $this->keyPairId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DetachKeyPairRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceIds'])) {
            if (!empty($map['InstanceIds'])) {
                $model->instanceIds = $map['InstanceIds'];
            }
        }
        if (isset($map['KeyPairId'])) {
            $model->keyPairId = $map['KeyPairId'];
        }

        return $model;
    }
}
