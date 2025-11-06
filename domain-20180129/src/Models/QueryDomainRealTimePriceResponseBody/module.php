<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models\QueryDomainRealTimePriceResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Domain\V20180129\Models\QueryDomainRealTimePriceResponseBody\module\domainPrices;

class module extends Model
{
    /**
     * @var domainPrices[]
     */
    public $domainPrices;
    protected $_name = [
        'domainPrices' => 'DomainPrices',
    ];

    public function validate()
    {
        if (\is_array($this->domainPrices)) {
            Model::validateArray($this->domainPrices);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->domainPrices) {
            if (\is_array($this->domainPrices)) {
                $res['DomainPrices'] = [];
                $n1 = 0;
                foreach ($this->domainPrices as $item1) {
                    $res['DomainPrices'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['DomainPrices'])) {
            if (!empty($map['DomainPrices'])) {
                $model->domainPrices = [];
                $n1 = 0;
                foreach ($map['DomainPrices'] as $item1) {
                    $model->domainPrices[$n1] = domainPrices::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
