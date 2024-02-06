<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class DeleteObjectRequest extends Model
{
    /**
     * @description The name of the bucket.
     *
     * @example tets
     *
     * @var string
     */
    public $bucketName;

    /**
     * @description The name of the source file.
     *
     * @example image5
     *
     * @var string
     */
    public $objectKey;
    protected $_name = [
        'bucketName' => 'BucketName',
        'objectKey'  => 'ObjectKey',
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
        if (null !== $this->objectKey) {
            $res['ObjectKey'] = $this->objectKey;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteObjectRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BucketName'])) {
            $model->bucketName = $map['BucketName'];
        }
        if (isset($map['ObjectKey'])) {
            $model->objectKey = $map['ObjectKey'];
        }

        return $model;
    }
}
