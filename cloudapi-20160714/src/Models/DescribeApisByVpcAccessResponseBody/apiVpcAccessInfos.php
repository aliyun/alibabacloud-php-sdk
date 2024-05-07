<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApisByVpcAccessResponseBody;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApisByVpcAccessResponseBody\apiVpcAccessInfos\apiVpcAccessInfo;
use AlibabaCloud\Tea\Model;

class apiVpcAccessInfos extends Model
{
    /**
     * @var apiVpcAccessInfo[]
     */
    public $apiVpcAccessInfo;
    protected $_name = [
        'apiVpcAccessInfo' => 'ApiVpcAccessInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiVpcAccessInfo) {
            $res['ApiVpcAccessInfo'] = [];
            if (null !== $this->apiVpcAccessInfo && \is_array($this->apiVpcAccessInfo)) {
                $n = 0;
                foreach ($this->apiVpcAccessInfo as $item) {
                    $res['ApiVpcAccessInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return apiVpcAccessInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiVpcAccessInfo'])) {
            if (!empty($map['ApiVpcAccessInfo'])) {
                $model->apiVpcAccessInfo = [];
                $n                       = 0;
                foreach ($map['ApiVpcAccessInfo'] as $item) {
                    $model->apiVpcAccessInfo[$n++] = null !== $item ? apiVpcAccessInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
