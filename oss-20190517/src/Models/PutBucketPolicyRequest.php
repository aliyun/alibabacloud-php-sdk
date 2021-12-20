<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oss\V20190517\Models;

use AlibabaCloud\Tea\Model;

class PutBucketPolicyRequest extends Model
{
    /**
     * @var string
     */
    public $policy;
    protected $_name = [
        'policy' => 'body',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->policy) {
            $res['body'] = $this->policy;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PutBucketPolicyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['body'])) {
            $model->policy = $map['body'];
        }

        return $model;
    }
}
