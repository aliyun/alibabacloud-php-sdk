<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiProductsByAppResponseBody;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiProductsByAppResponseBody\apiProductInfoList\apiProductInfo;
use AlibabaCloud\Tea\Model;

class apiProductInfoList extends Model
{
    /**
     * @var apiProductInfo[]
     */
    public $apiProductInfo;
    protected $_name = [
        'apiProductInfo' => 'ApiProductInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiProductInfo) {
            $res['ApiProductInfo'] = [];
            if (null !== $this->apiProductInfo && \is_array($this->apiProductInfo)) {
                $n = 0;
                foreach ($this->apiProductInfo as $item) {
                    $res['ApiProductInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return apiProductInfoList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiProductInfo'])) {
            if (!empty($map['ApiProductInfo'])) {
                $model->apiProductInfo = [];
                $n                     = 0;
                foreach ($map['ApiProductInfo'] as $item) {
                    $model->apiProductInfo[$n++] = null !== $item ? apiProductInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
