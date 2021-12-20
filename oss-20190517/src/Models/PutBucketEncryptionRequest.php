<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oss\V20190517\Models;

use AlibabaCloud\Tea\Model;

class PutBucketEncryptionRequest extends Model
{
    /**
     * @var ServerSideEncryptionRule
     */
    public $serverSideEncryptionRule;
    protected $_name = [
        'serverSideEncryptionRule' => 'ServerSideEncryptionRule',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->serverSideEncryptionRule) {
            $res['ServerSideEncryptionRule'] = null !== $this->serverSideEncryptionRule ? $this->serverSideEncryptionRule->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PutBucketEncryptionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ServerSideEncryptionRule'])) {
            $model->serverSideEncryptionRule = ServerSideEncryptionRule::fromMap($map['ServerSideEncryptionRule']);
        }

        return $model;
    }
}
