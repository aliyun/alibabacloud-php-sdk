<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models;

use AlibabaCloud\Tea\Model;

class DeleteKeyPairsRequest extends Model
{
    /**
     * @var string[]
     */
    public $keyPairIds;
    protected $_name = [
        'keyPairIds' => 'KeyPairIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->keyPairIds) {
            $res['KeyPairIds'] = $this->keyPairIds;
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
        if (isset($map['KeyPairIds'])) {
            if (!empty($map['KeyPairIds'])) {
                $model->keyPairIds = $map['KeyPairIds'];
            }
        }

        return $model;
    }
}
