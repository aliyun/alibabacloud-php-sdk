<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsProductInstancesResponseBody;

use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsProductInstancesResponseBody\dnsProducts\dnsProduct;
use AlibabaCloud\Tea\Model;

class dnsProducts extends Model
{
    /**
     * @var dnsProduct[]
     */
    public $dnsProduct;
    protected $_name = [
        'dnsProduct' => 'DnsProduct',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->dnsProduct) {
            $res['DnsProduct'] = [];
            if (null !== $this->dnsProduct && \is_array($this->dnsProduct)) {
                $n = 0;
                foreach ($this->dnsProduct as $item) {
                    $res['DnsProduct'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dnsProducts
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DnsProduct'])) {
            if (!empty($map['DnsProduct'])) {
                $model->dnsProduct = [];
                $n = 0;
                foreach ($map['DnsProduct'] as $item) {
                    $model->dnsProduct[$n++] = null !== $item ? dnsProduct::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
