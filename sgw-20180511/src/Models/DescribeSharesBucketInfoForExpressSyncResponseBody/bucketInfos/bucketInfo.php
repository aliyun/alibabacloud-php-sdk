<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sgw\V20180511\Models\DescribeSharesBucketInfoForExpressSyncResponseBody\bucketInfos;

use AlibabaCloud\Tea\Model;

class bucketInfo extends Model
{
    /**
     * @example zy-1m***
     *
     * @var string
     */
    public $bucketName;

    /**
     * @example test1
     *
     * @var string
     */
    public $bucketPrefix;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $bucketRegion;
    protected $_name = [
        'bucketName'   => 'BucketName',
        'bucketPrefix' => 'BucketPrefix',
        'bucketRegion' => 'BucketRegion',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bucketName) {
            $res['BucketName'] = $this->bucketName;
        }
        if (null !== $this->bucketPrefix) {
            $res['BucketPrefix'] = $this->bucketPrefix;
        }
        if (null !== $this->bucketRegion) {
            $res['BucketRegion'] = $this->bucketRegion;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return bucketInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BucketName'])) {
            $model->bucketName = $map['BucketName'];
        }
        if (isset($map['BucketPrefix'])) {
            $model->bucketPrefix = $map['BucketPrefix'];
        }
        if (isset($map['BucketRegion'])) {
            $model->bucketRegion = $map['BucketRegion'];
        }

        return $model;
    }
}
