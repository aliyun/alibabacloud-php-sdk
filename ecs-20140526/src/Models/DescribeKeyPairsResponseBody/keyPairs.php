<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeKeyPairsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeKeyPairsResponseBody\keyPairs\keyPair;

class keyPairs extends Model
{
    /**
     * @var keyPair[]
     */
    public $keyPair;
    protected $_name = [
        'keyPair' => 'KeyPair',
    ];

    public function validate()
    {
        if (\is_array($this->keyPair)) {
            Model::validateArray($this->keyPair);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->keyPair) {
            if (\is_array($this->keyPair)) {
                $res['KeyPair'] = [];
                $n1 = 0;
                foreach ($this->keyPair as $item1) {
                    $res['KeyPair'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['KeyPair'])) {
            if (!empty($map['KeyPair'])) {
                $model->keyPair = [];
                $n1 = 0;
                foreach ($map['KeyPair'] as $item1) {
                    $model->keyPair[$n1++] = keyPair::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
