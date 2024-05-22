<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class GetBucketLifecycleRequest extends Model
{
    /**
     * @description The name of the bucket.
     *
     * This parameter is required.
     * @example tese
     *
     * @var string
     */
    public $bucketName;

    /**
     * @description The ID of the rule that you want to query. If this parameter is not specified, all rules are returned.
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
     * @return GetBucketLifecycleRequest
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
