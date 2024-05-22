<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class DeleteBucketLifecycleRequest extends Model
{
    /**
     * @description The name of the bucket.
     *
     * This parameter is required.
     * @example test
     *
     * @var string
     */
    public $bucketName;

    /**
     * @description The ID of the rule. If this parameter is not specified, all rules are removed.
     *
     * @example 1
     *
     * @var string
     */
    public $ruleId;
    protected $_name = [
        'bucketName' => 'BucketName',
        'ruleId'     => 'RuleId',
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
        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteBucketLifecycleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BucketName'])) {
            $model->bucketName = $map['BucketName'];
        }
        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }

        return $model;
    }
}
