<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeCloudGtmInstanceConfigFullInfoResponseBody;

use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeCloudGtmInstanceConfigFullInfoResponseBody\addressPools\addressPool;
use AlibabaCloud\Tea\Model;

class addressPools extends Model
{
    /**
     * @var addressPool[]
     */
    public $addressPool;
    protected $_name = [
        'addressPool' => 'AddressPool',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->addressPool) {
            $res['AddressPool'] = [];
            if (null !== $this->addressPool && \is_array($this->addressPool)) {
                $n = 0;
                foreach ($this->addressPool as $item) {
                    $res['AddressPool'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return addressPools
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AddressPool'])) {
            if (!empty($map['AddressPool'])) {
                $model->addressPool = [];
                $n                  = 0;
                foreach ($map['AddressPool'] as $item) {
                    $model->addressPool[$n++] = null !== $item ? addressPool::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
