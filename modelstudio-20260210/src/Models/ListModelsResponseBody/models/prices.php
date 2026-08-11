<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ModelStudio\V20260210\Models\ListModelsResponseBody\models;

use AlibabaCloud\Dara\Model;

class prices extends Model
{
    /**
     * @var prices\prices[]
     */
    public $prices;

    /**
     * @var string
     */
    public $rangeName;
    protected $_name = [
        'prices' => 'prices',
        'rangeName' => 'rangeName',
    ];

    public function validate()
    {
        if (\is_array($this->prices)) {
            Model::validateArray($this->prices);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->prices) {
            if (\is_array($this->prices)) {
                $res['prices'] = [];
                $n1 = 0;
                foreach ($this->prices as $item1) {
                    $res['prices'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->rangeName) {
            $res['rangeName'] = $this->rangeName;
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
        if (isset($map['prices'])) {
            if (!empty($map['prices'])) {
                $model->prices = [];
                $n1 = 0;
                foreach ($map['prices'] as $item1) {
                    $model->prices[$n1] = prices\prices::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['rangeName'])) {
            $model->rangeName = $map['rangeName'];
        }

        return $model;
    }
}
