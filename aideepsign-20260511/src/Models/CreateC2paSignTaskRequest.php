<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AIDeepSign\V20260511\Models;

use AlibabaCloud\Dara\Model;

class CreateC2paSignTaskRequest extends Model
{
    /**
     * @var bool
     */
    public $allowOverwrite;

    /**
     * @var string
     */
    public $bucketName;

    /**
     * @var string
     */
    public $bucketRegionId;

    /**
     * @var string
     */
    public $customAssertions;

    /**
     * @var string
     */
    public $fileUrl;

    /**
     * @var string
     */
    public $objectKey;

    /**
     * @var string
     */
    public $softwareAgent;

    /**
     * @var string
     */
    public $sourceType;

    /**
     * @var string
     */
    public $targetBucketName;

    /**
     * @var string
     */
    public $targetBucketRegion;

    /**
     * @var string
     */
    public $targetObjectKey;
    protected $_name = [
        'allowOverwrite' => 'AllowOverwrite',
        'bucketName' => 'BucketName',
        'bucketRegionId' => 'BucketRegionId',
        'customAssertions' => 'CustomAssertions',
        'fileUrl' => 'FileUrl',
        'objectKey' => 'ObjectKey',
        'softwareAgent' => 'SoftwareAgent',
        'sourceType' => 'SourceType',
        'targetBucketName' => 'TargetBucketName',
        'targetBucketRegion' => 'TargetBucketRegion',
        'targetObjectKey' => 'TargetObjectKey',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->allowOverwrite) {
            $res['AllowOverwrite'] = $this->allowOverwrite;
        }

        if (null !== $this->bucketName) {
            $res['BucketName'] = $this->bucketName;
        }

        if (null !== $this->bucketRegionId) {
            $res['BucketRegionId'] = $this->bucketRegionId;
        }

        if (null !== $this->customAssertions) {
            $res['CustomAssertions'] = $this->customAssertions;
        }

        if (null !== $this->fileUrl) {
            $res['FileUrl'] = $this->fileUrl;
        }

        if (null !== $this->objectKey) {
            $res['ObjectKey'] = $this->objectKey;
        }

        if (null !== $this->softwareAgent) {
            $res['SoftwareAgent'] = $this->softwareAgent;
        }

        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
        }

        if (null !== $this->targetBucketName) {
            $res['TargetBucketName'] = $this->targetBucketName;
        }

        if (null !== $this->targetBucketRegion) {
            $res['TargetBucketRegion'] = $this->targetBucketRegion;
        }

        if (null !== $this->targetObjectKey) {
            $res['TargetObjectKey'] = $this->targetObjectKey;
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
        if (isset($map['AllowOverwrite'])) {
            $model->allowOverwrite = $map['AllowOverwrite'];
        }

        if (isset($map['BucketName'])) {
            $model->bucketName = $map['BucketName'];
        }

        if (isset($map['BucketRegionId'])) {
            $model->bucketRegionId = $map['BucketRegionId'];
        }

        if (isset($map['CustomAssertions'])) {
            $model->customAssertions = $map['CustomAssertions'];
        }

        if (isset($map['FileUrl'])) {
            $model->fileUrl = $map['FileUrl'];
        }

        if (isset($map['ObjectKey'])) {
            $model->objectKey = $map['ObjectKey'];
        }

        if (isset($map['SoftwareAgent'])) {
            $model->softwareAgent = $map['SoftwareAgent'];
        }

        if (isset($map['SourceType'])) {
            $model->sourceType = $map['SourceType'];
        }

        if (isset($map['TargetBucketName'])) {
            $model->targetBucketName = $map['TargetBucketName'];
        }

        if (isset($map['TargetBucketRegion'])) {
            $model->targetBucketRegion = $map['TargetBucketRegion'];
        }

        if (isset($map['TargetObjectKey'])) {
            $model->targetObjectKey = $map['TargetObjectKey'];
        }

        return $model;
    }
}
