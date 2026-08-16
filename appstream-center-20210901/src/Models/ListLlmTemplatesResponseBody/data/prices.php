<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListLlmTemplatesResponseBody\data;

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
        'prices' => 'Prices',
        'rangeName' => 'RangeName',
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
                $res['Prices'] = [];
                $n1 = 0;
                foreach ($this->prices as $item1) {
                    $res['Prices'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->rangeName) {
            $res['RangeName'] = $this->rangeName;
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
        if (isset($map['Prices'])) {
            if (!empty($map['Prices'])) {
                $model->prices = [];
                $n1 = 0;
                foreach ($map['Prices'] as $item1) {
                    $model->prices[$n1] = prices\prices::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RangeName'])) {
            $model->rangeName = $map['RangeName'];
        }

        return $model;
    }
}
