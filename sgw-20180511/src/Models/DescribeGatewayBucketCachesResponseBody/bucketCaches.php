<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sgw\V20180511\Models\DescribeGatewayBucketCachesResponseBody;

use AlibabaCloud\SDK\Sgw\V20180511\Models\DescribeGatewayBucketCachesResponseBody\bucketCaches\bucketCache;
use AlibabaCloud\Tea\Model;

class bucketCaches extends Model
{
    /**
     * @var bucketCache[]
     */
    public $bucketCache;
    protected $_name = [
        'bucketCache' => 'BucketCache',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bucketCache) {
            $res['BucketCache'] = [];
            if (null !== $this->bucketCache && \is_array($this->bucketCache)) {
                $n = 0;
                foreach ($this->bucketCache as $item) {
                    $res['BucketCache'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return bucketCaches
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BucketCache'])) {
            if (!empty($map['BucketCache'])) {
                $model->bucketCache = [];
                $n                  = 0;
                foreach ($map['BucketCache'] as $item) {
                    $model->bucketCache[$n++] = null !== $item ? bucketCache::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
