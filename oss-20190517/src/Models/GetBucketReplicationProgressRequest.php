<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oss\V20190517\Models;

use AlibabaCloud\Tea\Model;

class GetBucketReplicationProgressRequest extends Model
{
    /**
     * @example test_replication_1
     *
     * @var string
     */
    public $ruleId;
    protected $_name = [
        'ruleId' => 'rule-id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ruleId) {
            $res['rule-id'] = $this->ruleId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetBucketReplicationProgressRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['rule-id'])) {
            $model->ruleId = $map['rule-id'];
        }

        return $model;
    }
}
