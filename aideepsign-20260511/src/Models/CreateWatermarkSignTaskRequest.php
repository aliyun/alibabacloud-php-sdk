<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AIDeepSign\V20260511\Models;

use AlibabaCloud\Dara\Model;

class CreateWatermarkSignTaskRequest extends Model
{
    /**
     * @var bool
     */
    public $allowOverwrite;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $customAssertions;

    /**
     * @var string
     */
    public $fileType;

    /**
     * @var string
     */
    public $fileUrl;

    /**
     * @var string
     */
    public $level;

    /**
     * @var string
     */
    public $reserved;

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

    /**
     * @var string
     */
    public $watermarkContent;
    protected $_name = [
        'allowOverwrite' => 'AllowOverwrite',
        'clientToken' => 'ClientToken',
        'customAssertions' => 'CustomAssertions',
        'fileType' => 'FileType',
        'fileUrl' => 'FileUrl',
        'level' => 'Level',
        'reserved' => 'Reserved',
        'softwareAgent' => 'SoftwareAgent',
        'sourceType' => 'SourceType',
        'targetBucketName' => 'TargetBucketName',
        'targetBucketRegion' => 'TargetBucketRegion',
        'targetObjectKey' => 'TargetObjectKey',
        'watermarkContent' => 'WatermarkContent',
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

        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->customAssertions) {
            $res['CustomAssertions'] = $this->customAssertions;
        }

        if (null !== $this->fileType) {
            $res['FileType'] = $this->fileType;
        }

        if (null !== $this->fileUrl) {
            $res['FileUrl'] = $this->fileUrl;
        }

        if (null !== $this->level) {
            $res['Level'] = $this->level;
        }

        if (null !== $this->reserved) {
            $res['Reserved'] = $this->reserved;
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

        if (null !== $this->watermarkContent) {
            $res['WatermarkContent'] = $this->watermarkContent;
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

        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['CustomAssertions'])) {
            $model->customAssertions = $map['CustomAssertions'];
        }

        if (isset($map['FileType'])) {
            $model->fileType = $map['FileType'];
        }

        if (isset($map['FileUrl'])) {
            $model->fileUrl = $map['FileUrl'];
        }

        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }

        if (isset($map['Reserved'])) {
            $model->reserved = $map['Reserved'];
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

        if (isset($map['WatermarkContent'])) {
            $model->watermarkContent = $map['WatermarkContent'];
        }

        return $model;
    }
}
