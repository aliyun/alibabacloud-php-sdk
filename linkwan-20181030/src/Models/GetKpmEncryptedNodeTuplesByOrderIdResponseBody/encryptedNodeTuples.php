<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\LinkWAN\V20181030\Models\GetKpmEncryptedNodeTuplesByOrderIdResponseBody;

use AlibabaCloud\SDK\LinkWAN\V20181030\Models\GetKpmEncryptedNodeTuplesByOrderIdResponseBody\encryptedNodeTuples\encryptedNodeTuple;
use AlibabaCloud\Tea\Model;

class encryptedNodeTuples extends Model
{
    /**
     * @var encryptedNodeTuple[]
     */
    public $encryptedNodeTuple;
    protected $_name = [
        'encryptedNodeTuple' => 'EncryptedNodeTuple',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->encryptedNodeTuple) {
            $res['EncryptedNodeTuple'] = [];
            if (null !== $this->encryptedNodeTuple && \is_array($this->encryptedNodeTuple)) {
                $n = 0;
                foreach ($this->encryptedNodeTuple as $item) {
                    $res['EncryptedNodeTuple'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return encryptedNodeTuples
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EncryptedNodeTuple'])) {
            if (!empty($map['EncryptedNodeTuple'])) {
                $model->encryptedNodeTuple = [];
                $n                         = 0;
                foreach ($map['EncryptedNodeTuple'] as $item) {
                    $model->encryptedNodeTuple[$n++] = null !== $item ? encryptedNodeTuple::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
