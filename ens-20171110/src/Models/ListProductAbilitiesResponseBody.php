<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Dara\Model;

class ListProductAbilitiesResponseBody extends Model
{
    /**
     * @var string[]
     */
    public $productAbilities;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'productAbilities' => 'ProductAbilities',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->productAbilities)) {
            Model::validateArray($this->productAbilities);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->productAbilities) {
            if (\is_array($this->productAbilities)) {
                $res['ProductAbilities'] = [];
                $n1 = 0;
                foreach ($this->productAbilities as $item1) {
                    $res['ProductAbilities'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['ProductAbilities'])) {
            if (!empty($map['ProductAbilities'])) {
                $model->productAbilities = [];
                $n1 = 0;
                foreach ($map['ProductAbilities'] as $item1) {
                    $model->productAbilities[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
