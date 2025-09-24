<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\GetResourcePackagePriceResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\GetResourcePackagePriceResponseBody\data\promotions\promotion;

class promotions extends Model
{
    /**
     * @var promotion[]
     */
    public $promotion;
    protected $_name = [
        'promotion' => 'Promotion',
    ];

    public function validate()
    {
        if (\is_array($this->promotion)) {
            Model::validateArray($this->promotion);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->promotion) {
            if (\is_array($this->promotion)) {
                $res['Promotion'] = [];
                $n1 = 0;
                foreach ($this->promotion as $item1) {
                    $res['Promotion'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['Promotion'])) {
            if (!empty($map['Promotion'])) {
                $model->promotion = [];
                $n1 = 0;
                foreach ($map['Promotion'] as $item1) {
                    $model->promotion[$n1] = promotion::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
