<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class PutBucketAclRequest extends Model
{
    /**
     * @description The access control list (ACL) of the bucket.
     *
     *   **public-read-write**
     *   **public-read**
     *   **private** (default)
     *
     * This parameter is required.
     * @example private
     *
     * @var string
     */
    public $bucketAcl;

    /**
     * @description The name of the bucket.
     *
     * This parameter is required.
     * @example test
     *
     * @var string
     */
    public $bucketName;
    protected $_name = [
        'bucketAcl'  => 'BucketAcl',
        'bucketName' => 'BucketName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bucketAcl) {
            $res['BucketAcl'] = $this->bucketAcl;
        }
        if (null !== $this->bucketName) {
            $res['BucketName'] = $this->bucketName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PutBucketAclRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BucketAcl'])) {
            $model->bucketAcl = $map['BucketAcl'];
        }
        if (isset($map['BucketName'])) {
            $model->bucketName = $map['BucketName'];
        }

        return $model;
    }
}
