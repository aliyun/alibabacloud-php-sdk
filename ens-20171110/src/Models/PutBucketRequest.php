<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class PutBucketRequest extends Model
{
    /**
     * @description The access control list (ACL) of the bucket.
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
     * @description The name of the bucket.
     *
     * This parameter can contain 3 to 50 characters in length and can contain only lowercase letters, digits, and hyphens (-). The name cannot start or end with a hyphen (-).
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
     * @description The ID of the region where the node is located. If this parameter is not specified, the node is the global default node.
     *
     * @example cn-beijing-15
     *
     * @var string
     */
    public $ensRegionId;

    /**
     * @description Single-node storage. Set the value to sink.
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
        if (isset($map['EnsRegionId'])) {
            $model->ensRegionId = $map['EnsRegionId'];
        }
        if (isset($map['LogicalBucketType'])) {
            $model->logicalBucketType = $map['LogicalBucketType'];
        }

        return $model;
    }
}
