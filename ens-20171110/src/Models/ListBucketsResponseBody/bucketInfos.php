<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\ListBucketsResponseBody;

use AlibabaCloud\Tea\Model;

class bucketInfos extends Model
{
    /**
     * @description The access control list (ACL) of the bucket.
     *
     *   **public-read-write**
     *   **public-read**
     *   **private** (default)
     *
     * @example private
     *
     * @var string
     */
    public $bucketAcl;

    /**
     * @description The name of the bucket.
     *
     * @example test
     *
     * @var string
     */
    public $bucketName;

    /**
     * @description The remarks.
     *
     * @example numb
     *
     * @var string
     */
    public $comment;

    /**
     * @description The time when the bucket was created. The time follows the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time is displayed in UTC.
     *
     * @example 2022-10-12T05:45:00Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The ID of the region where the node is located.
     *
     * @example cn-dalian-unicom
     *
     * @var string
     */
    public $ensRegionId;

    /**
     * @description The type of the single-node storage. Set the value to sink.
     *
     * @example sink
     *
     * @var string
     */
    public $logicalBucketType;

    /**
     * @description The time when the bucket was modified. The time follows the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time is displayed in UTC.
     *
     * @example 2022-10-12T06:45:00Z
     *
     * @var string
     */
    public $modifyTime;
    protected $_name = [
        'bucketAcl' => 'BucketAcl',
        'bucketName' => 'BucketName',
        'comment' => 'Comment',
        'createTime' => 'CreateTime',
        'ensRegionId' => 'EnsRegionId',
        'logicalBucketType' => 'LogicalBucketType',
        'modifyTime' => 'ModifyTime',
    ];

    public function validate() {}

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
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->ensRegionId) {
            $res['EnsRegionId'] = $this->ensRegionId;
        }
        if (null !== $this->logicalBucketType) {
            $res['LogicalBucketType'] = $this->logicalBucketType;
        }
        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return bucketInfos
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
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['EnsRegionId'])) {
            $model->ensRegionId = $map['EnsRegionId'];
        }
        if (isset($map['LogicalBucketType'])) {
            $model->logicalBucketType = $map['LogicalBucketType'];
        }
        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }

        return $model;
    }
}
