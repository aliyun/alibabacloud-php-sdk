<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oss\V20190517\Models;

use AlibabaCloud\Tea\Model;

class PutBucketRequest extends Model
{
    /**
     * @var CreateBucketConfiguration
     */
    public $createBucketConfiguration;
    protected $_name = [
        'createBucketConfiguration' => 'CreateBucketConfiguration',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createBucketConfiguration) {
            $res['CreateBucketConfiguration'] = null !== $this->createBucketConfiguration ? $this->createBucketConfiguration->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PutBucketRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateBucketConfiguration'])) {
            $model->createBucketConfiguration = CreateBucketConfiguration::fromMap($map['CreateBucketConfiguration']);
        }

        return $model;
    }
}
