<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudesl\V20190801\Models\DescribeStoresResponseBody;

use AlibabaCloud\SDK\Cloudesl\V20190801\Models\DescribeStoresResponseBody\stores\storeInfo;
use AlibabaCloud\Tea\Model;

class stores extends Model
{
    /**
     * @var storeInfo[]
     */
    public $storeInfo;
    protected $_name = [
        'storeInfo' => 'StoreInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->storeInfo) {
            $res['StoreInfo'] = [];
            if (null !== $this->storeInfo && \is_array($this->storeInfo)) {
                $n = 0;
                foreach ($this->storeInfo as $item) {
                    $res['StoreInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return stores
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['StoreInfo'])) {
            if (!empty($map['StoreInfo'])) {
                $model->storeInfo = [];
                $n                = 0;
                foreach ($map['StoreInfo'] as $item) {
                    $model->storeInfo[$n++] = null !== $item ? storeInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
