<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\SDK\Ens\V20171110\Models\GetOssStorageAndAccByBucketsResponseBody\bucketList;
use AlibabaCloud\Tea\Model;

class GetOssStorageAndAccByBucketsResponseBody extends Model
{
    /**
     * @description The information about the bucket.
     *
     * @var bucketList[]
     */
    public $bucketList;

    /**
     * @description The request ID.
     *
     * @example 112F4860-F1B2-58DD-8FC0-75F19DA1C4BF
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'bucketList' => 'BucketList',
        'requestId'  => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bucketList) {
            $res['BucketList'] = [];
            if (null !== $this->bucketList && \is_array($this->bucketList)) {
                $n = 0;
                foreach ($this->bucketList as $item) {
                    $res['BucketList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetOssStorageAndAccByBucketsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BucketList'])) {
            if (!empty($map['BucketList'])) {
                $model->bucketList = [];
                $n                 = 0;
                foreach ($map['BucketList'] as $item) {
                    $model->bucketList[$n++] = null !== $item ? bucketList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
