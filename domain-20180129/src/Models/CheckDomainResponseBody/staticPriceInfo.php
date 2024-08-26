<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models\CheckDomainResponseBody;

use AlibabaCloud\SDK\Domain\V20180129\Models\CheckDomainResponseBody\staticPriceInfo\priceInfo;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->priceInfo) {
            $res['PriceInfo'] = [];
            if (null !== $this->priceInfo && \is_array($this->priceInfo)) {
                $n = 0;
                foreach ($this->priceInfo as $item) {
                    $res['PriceInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return staticPriceInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PriceInfo'])) {
            if (!empty($map['PriceInfo'])) {
                $model->priceInfo = [];
                $n                = 0;
                foreach ($map['PriceInfo'] as $item) {
                    $model->priceInfo[$n++] = null !== $item ? priceInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
