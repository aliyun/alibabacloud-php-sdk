<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models;

use AlibabaCloud\Dara\Model;

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
        if (\is_array($this->keyPairIds)) {
            Model::validateArray($this->keyPairIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->keyPairIds) {
            if (\is_array($this->keyPairIds)) {
                $res['KeyPairIds'] = [];
                $n1                = 0;
                foreach ($this->keyPairIds as $item1) {
                    $res['KeyPairIds'][$n1++] = $item1;
                }
            }
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
        if (isset($map['KeyPairIds'])) {
            if (!empty($map['KeyPairIds'])) {
                $model->keyPairIds = [];
                $n1                = 0;
                foreach ($map['KeyPairIds'] as $item1) {
                    $model->keyPairIds[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
