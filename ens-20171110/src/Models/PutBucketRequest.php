<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class PutBucketRequest extends Model
{
    /**
     * @description The access control list (ACL) of the bucket. Valid values:
     *
     *   **private** (default)
     *   **public-read-write**
     *   **public-read**
     *
     * @example private
     *
     * @var string
     */
    public $bucketAcl;

    /**
     * @description The name of the bucket. This parameter can contain 3 to 50 characters in length and can contain only lowercase letters, digits, and hyphens (-). The name cannot start or end with a hyphen (-).
     *
     * This parameter is required.
     * @example test
     *
     * @var string
     */
    public $bucketName;

    /**
     * @description The remarks. The remarks are 0 to 128 characters in length.
     *
     * @example numb
     *
     * @var string
     */
    public $comment;

    /**
     * @description The scheduling scope. This parameter takes effect only when the value of the LogicalBucketType parameter is standard. Valid values:
     *
     *   **domestic**: Chinese mainland.
     *   **oversea**: outside the Chinese mainland.
     *
     * @example domestic
     *
     * @var string
     */
    public $dispatchScope;

    /**
     * @description The region ID of the node. This parameter is required if the value of the LogicalBucketType parameter is sink.
     *
     * @example cn-beijing-15
     *
     * @var string
     */
    public $ensRegionId;

    /**
     * @description The type of the bucket. Valid values:
     *
     *   **sink**: single-node bucket.
     *   **standard**: bucket for global scheduling.
     *
     * @example sink
     *
     * @var string
     */
    public $logicalBucketType;
    protected $_name = [
        'bucketAcl'         => 'BucketAcl',
        'bucketName'        => 'BucketName',
        'comment'           => 'Comment',
        'dispatchScope'     => 'DispatchScope',
        'ensRegionId'       => 'EnsRegionId',
        'logicalBucketType' => 'LogicalBucketType',
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
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }
        if (null !== $this->dispatchScope) {
            $res['DispatchScope'] = $this->dispatchScope;
        }
        if (null !== $this->ensRegionId) {
            $res['EnsRegionId'] = $this->ensRegionId;
        }
        if (null !== $this->logicalBucketType) {
            $res['LogicalBucketType'] = $this->logicalBucketType;
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
        if (isset($map['BucketAcl'])) {
            $model->bucketAcl = $map['BucketAcl'];
        }
        if (isset($map['BucketName'])) {
            $model->bucketName = $map['BucketName'];
        }
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }
        if (isset($map['DispatchScope'])) {
            $model->dispatchScope = $map['DispatchScope'];
        }
        if (isset($map['EnsRegionId'])) {
            $model->ensRegionId = $map['EnsRegionId'];
        }
        if (isset($map['LogicalBucketType'])) {
            $model->logicalBucketType = $map['LogicalBucketType'];
        }

        return $model;
    }
}
