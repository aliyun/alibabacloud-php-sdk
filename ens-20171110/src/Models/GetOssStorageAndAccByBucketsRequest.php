<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class GetOssStorageAndAccByBucketsRequest extends Model
{
    /**
     * @description The information about the bucket.
     *
     * @example my-bucket
     *
     * @var string
     */
    public $bucketList;
    protected $_name = [
        'bucketList' => 'BucketList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bucketList) {
            $res['BucketList'] = $this->bucketList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetOssStorageAndAccByBucketsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BucketList'])) {
            $model->bucketList = $map['BucketList'];
        }

        return $model;
    }
}
