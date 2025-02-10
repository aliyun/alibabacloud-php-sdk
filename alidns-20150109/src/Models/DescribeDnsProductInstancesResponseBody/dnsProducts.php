<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsProductInstancesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsProductInstancesResponseBody\dnsProducts\dnsProduct;

class dnsProducts extends Model
{
    /**
     * @var dnsProduct[]
     */
    public $dnsProduct;
    protected $_name = [
        'dnsProduct' => 'DnsProduct',
    ];

    public function validate()
    {
        if (\is_array($this->dnsProduct)) {
            Model::validateArray($this->dnsProduct);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dnsProduct) {
            if (\is_array($this->dnsProduct)) {
                $res['DnsProduct'] = [];
                $n1                = 0;
                foreach ($this->dnsProduct as $item1) {
                    $res['DnsProduct'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['DnsProduct'])) {
            if (!empty($map['DnsProduct'])) {
                $model->dnsProduct = [];
                $n1                = 0;
                foreach ($map['DnsProduct'] as $item1) {
                    $model->dnsProduct[$n1++] = dnsProduct::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
