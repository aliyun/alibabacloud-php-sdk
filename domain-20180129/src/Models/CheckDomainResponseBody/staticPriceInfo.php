<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models\CheckDomainResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Domain\V20180129\Models\CheckDomainResponseBody\staticPriceInfo\priceInfo;

class staticPriceInfo extends Model
{
    /**
     * @var priceInfo[]
     */
    public $priceInfo;
    protected $_name = [
        'priceInfo' => 'PriceInfo',
    ];

    public function validate()
    {
        if (\is_array($this->priceInfo)) {
            Model::validateArray($this->priceInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->priceInfo) {
            if (\is_array($this->priceInfo)) {
                $res['PriceInfo'] = [];
                $n1 = 0;
                foreach ($this->priceInfo as $item1) {
                    $res['PriceInfo'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['PriceInfo'])) {
            if (!empty($map['PriceInfo'])) {
                $model->priceInfo = [];
                $n1 = 0;
                foreach ($map['PriceInfo'] as $item1) {
                    $model->priceInfo[$n1] = priceInfo::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
