<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Dara\Model;

class DetectImageCroppingResponseBody extends Model
{
    /**
     * @var CroppingSuggestion[]
     */
    public $croppings;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'croppings' => 'Croppings',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->croppings)) {
            Model::validateArray($this->croppings);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->croppings) {
            if (\is_array($this->croppings)) {
                $res['Croppings'] = [];
                $n1 = 0;
                foreach ($this->croppings as $item1) {
                    $res['Croppings'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Croppings'])) {
            if (!empty($map['Croppings'])) {
                $model->croppings = [];
                $n1 = 0;
                foreach ($map['Croppings'] as $item1) {
                    $model->croppings[$n1] = CroppingSuggestion::fromMap($item1);
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
