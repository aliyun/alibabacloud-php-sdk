<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Dara\Model;

class PutBucketRequest extends Model
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
    public $dispatchScope;

    /**
     * @var string
     */
    public $ensRegionId;

    /**
     * @var string
     */
    public $logicalBucketType;
    protected $_name = [
        'bucketAcl' => 'BucketAcl',
        'bucketName' => 'BucketName',
        'comment' => 'Comment',
        'dispatchScope' => 'DispatchScope',
        'ensRegionId' => 'EnsRegionId',
        'logicalBucketType' => 'LogicalBucketType',
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
