<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->croppings) {
            $res['Croppings'] = [];
            if (null !== $this->croppings && \is_array($this->croppings)) {
                $n = 0;
                foreach ($this->croppings as $item) {
                    $res['Croppings'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DetectImageCroppingResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Croppings'])) {
            if (!empty($map['Croppings'])) {
                $model->croppings = [];
                $n                = 0;
                foreach ($map['Croppings'] as $item) {
                    $model->croppings[$n++] = null !== $item ? CroppingSuggestion::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
