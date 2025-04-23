<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsGtmInstanceAddressPoolResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsGtmInstanceAddressPoolResponseBody\addrs\addr;

class addrs extends Model
{
    /**
     * @var addr[]
     */
    public $addr;
    protected $_name = [
        'addr' => 'Addr',
    ];

    public function validate()
    {
        if (\is_array($this->addr)) {
            Model::validateArray($this->addr);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->addr) {
            if (\is_array($this->addr)) {
                $res['Addr'] = [];
                $n1 = 0;
                foreach ($this->addr as $item1) {
                    $res['Addr'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Addr'])) {
            if (!empty($map['Addr'])) {
                $model->addr = [];
                $n1 = 0;
                foreach ($map['Addr'] as $item1) {
                    $model->addr[$n1++] = addr::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
