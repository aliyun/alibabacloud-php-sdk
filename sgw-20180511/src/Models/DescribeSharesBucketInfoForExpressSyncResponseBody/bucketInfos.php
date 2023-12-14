<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sgw\V20180511\Models\DescribeSharesBucketInfoForExpressSyncResponseBody;

use AlibabaCloud\SDK\Sgw\V20180511\Models\DescribeSharesBucketInfoForExpressSyncResponseBody\bucketInfos\bucketInfo;
use AlibabaCloud\Tea\Model;

class bucketInfos extends Model
{
    /**
     * @var bucketInfo[]
     */
    public $bucketInfo;
    protected $_name = [
        'bucketInfo' => 'BucketInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bucketInfo) {
            $res['BucketInfo'] = [];
            if (null !== $this->bucketInfo && \is_array($this->bucketInfo)) {
                $n = 0;
                foreach ($this->bucketInfo as $item) {
                    $res['BucketInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return bucketInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BucketInfo'])) {
            if (!empty($map['BucketInfo'])) {
                $model->bucketInfo = [];
                $n                 = 0;
                foreach ($map['BucketInfo'] as $item) {
                    $model->bucketInfo[$n++] = null !== $item ? bucketInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
