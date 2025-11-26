<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Dara\Model;

class GetBucketAclResponseBody extends Model
{
    /**
     * @var string
     */
    public $bucketAcl;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'bucketAcl' => 'BucketAcl',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
