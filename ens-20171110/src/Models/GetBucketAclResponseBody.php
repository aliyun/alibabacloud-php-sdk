<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class GetBucketAclResponseBody extends Model
{
    /**
     * @description The ACL of the bucket.
     *
     * @example private
     *
     * @var string
     */
    public $bucketAcl;

    /**
     * @description The ID of the request.
     *
     * @example 5C881388-2D4B-46F4-A96B-D4E6BD0886A2
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'bucketAcl' => 'BucketAcl',
        'requestId' => 'RequestId',
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
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetBucketAclResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BucketAcl'])) {
            $model->bucketAcl = $map['BucketAcl'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
