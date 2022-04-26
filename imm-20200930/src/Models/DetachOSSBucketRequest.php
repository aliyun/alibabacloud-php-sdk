<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class DetachOSSBucketRequest extends Model
{
    /**
     * @var string
     */
    public $OSSBucket;
    protected $_name = [
        'OSSBucket' => 'OSSBucket',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->OSSBucket) {
            $res['OSSBucket'] = $this->OSSBucket;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DetachOSSBucketRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OSSBucket'])) {
            $model->OSSBucket = $map['OSSBucket'];
        }

        return $model;
    }
}
