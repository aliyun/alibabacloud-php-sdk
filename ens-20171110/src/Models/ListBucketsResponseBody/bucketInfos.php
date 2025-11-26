<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\ListBucketsResponseBody;

use AlibabaCloud\Dara\Model;

class bucketInfos extends Model
{
    /**
     * @var string
     */
    public $bucketAcl;

    /**
     * @var string
     */
    public $bucketName;

    /**
     * @var string
     */
    public $comment;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $ensRegionId;

    /**
     * @var string
     */
    public $logicalBucketType;

    /**
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
