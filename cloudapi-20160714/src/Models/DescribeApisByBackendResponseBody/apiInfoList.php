<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApisByBackendResponseBody;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApisByBackendResponseBody\apiInfoList\apiInfo;
use AlibabaCloud\Tea\Model;

class apiInfoList extends Model
{
    /**
     * @var apiInfo[]
     */
    public $apiInfo;
    protected $_name = [
        'apiInfo' => 'ApiInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiInfo) {
            $res['ApiInfo'] = [];
            if (null !== $this->apiInfo && \is_array($this->apiInfo)) {
                $n = 0;
                foreach ($this->apiInfo as $item) {
                    $res['ApiInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return apiInfoList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiInfo'])) {
            if (!empty($map['ApiInfo'])) {
                $model->apiInfo = [];
                $n              = 0;
                foreach ($map['ApiInfo'] as $item) {
                    $model->apiInfo[$n++] = null !== $item ? apiInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
