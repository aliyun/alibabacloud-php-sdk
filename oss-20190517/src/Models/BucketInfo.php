<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oss\V20190517\Models;

use AlibabaCloud\SDK\Oss\V20190517\Models\BucketInfo\bucket;
use AlibabaCloud\Tea\Model;

class BucketInfo extends Model
{
    /**
     * @var bucket
     */
    public $bucket;
    protected $_name = [
        'bucket' => 'Bucket',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bucket) {
            $res['Bucket'] = null !== $this->bucket ? $this->bucket->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BucketInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Bucket'])) {
            $model->bucket = bucket::fromMap($map['Bucket']);
        }

        return $model;
    }
}
