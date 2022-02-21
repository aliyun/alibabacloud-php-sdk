<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models;

use AlibabaCloud\SDK\Vs\V20181212\Models\ListBucketsResponseBody\bucketInfos;
use AlibabaCloud\Tea\Model;

class ListBucketsResponseBody extends Model
{
    /**
     * @var bucketInfos[]
     */
    public $bucketInfos;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'bucketInfos' => 'BucketInfos',
        'requestId'   => 'RequestId',
        'totalCount'  => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bucketInfos) {
            $res['BucketInfos'] = [];
            if (null !== $this->bucketInfos && \is_array($this->bucketInfos)) {
                $n = 0;
                foreach ($this->bucketInfos as $item) {
                    $res['BucketInfos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListBucketsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BucketInfos'])) {
            if (!empty($map['BucketInfos'])) {
                $model->bucketInfos = [];
                $n                  = 0;
                foreach ($map['BucketInfos'] as $item) {
                    $model->bucketInfos[$n++] = null !== $item ? bucketInfos::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
