<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oss\V20190517\Models;

use AlibabaCloud\SDK\Oss\V20190517\Models\GetBucketInfoResponseBody\bucketInfo;
use AlibabaCloud\Tea\Model;

class GetBucketInfoResponseBody extends Model
{
    /**
     * @var bucketInfo
     */
    public $bucketInfo;
    protected $_name = [
        'bucketInfo' => 'Bucket',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bucketInfo) {
            $res['Bucket'] = null !== $this->bucketInfo ? $this->bucketInfo->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetBucketInfoResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Bucket'])) {
            $model->bucketInfo = bucketInfo::fromMap($map['Bucket']);
        }

        return $model;
    }
}
