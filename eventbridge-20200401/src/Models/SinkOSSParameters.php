<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\SinkOSSParameters\contentTransform;

class SinkOSSParameters extends Model
{
    /**
     * @var string
     */
    public $bucketName;

    /**
     * @var string
     */
    public $compressionType;

    /**
     * @var contentTransform
     */
    public $contentTransform;

    /**
     * @var string
     */
    public $endpoint;

    /**
     * @var string
     */
    public $pathFormat;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $roleArn;

    /**
     * @var string
     */
    public $rotateIntervalMs;

    /**
     * @var string
     */
    public $rotateSizeBytes;

    /**
     * @var bool
     */
    public $SSLEnabled;

    /**
     * @var string
     */
    public $taskConcurrency;

    /**
     * @var string
     */
    public $timeZone;
    protected $_name = [
        'bucketName' => 'BucketName',
        'compressionType' => 'CompressionType',
        'contentTransform' => 'ContentTransform',
        'endpoint' => 'Endpoint',
        'pathFormat' => 'PathFormat',
        'regionId' => 'RegionId',
        'roleArn' => 'RoleArn',
        'rotateIntervalMs' => 'RotateIntervalMs',
        'rotateSizeBytes' => 'RotateSizeBytes',
        'SSLEnabled' => 'SSLEnabled',
        'taskConcurrency' => 'TaskConcurrency',
        'timeZone' => 'TimeZone',
    ];

    public function validate()
    {
        if (null !== $this->contentTransform) {
            $this->contentTransform->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bucketName) {
            $res['BucketName'] = $this->bucketName;
        }

        if (null !== $this->compressionType) {
            $res['CompressionType'] = $this->compressionType;
        }

        if (null !== $this->contentTransform) {
            $res['ContentTransform'] = null !== $this->contentTransform ? $this->contentTransform->toArray($noStream) : $this->contentTransform;
        }

        if (null !== $this->endpoint) {
            $res['Endpoint'] = $this->endpoint;
        }

        if (null !== $this->pathFormat) {
            $res['PathFormat'] = $this->pathFormat;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->roleArn) {
            $res['RoleArn'] = $this->roleArn;
        }

        if (null !== $this->rotateIntervalMs) {
            $res['RotateIntervalMs'] = $this->rotateIntervalMs;
        }

        if (null !== $this->rotateSizeBytes) {
            $res['RotateSizeBytes'] = $this->rotateSizeBytes;
        }

        if (null !== $this->SSLEnabled) {
            $res['SSLEnabled'] = $this->SSLEnabled;
        }

        if (null !== $this->taskConcurrency) {
            $res['TaskConcurrency'] = $this->taskConcurrency;
        }

        if (null !== $this->timeZone) {
            $res['TimeZone'] = $this->timeZone;
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
        if (isset($map['BucketName'])) {
            $model->bucketName = $map['BucketName'];
        }

        if (isset($map['CompressionType'])) {
            $model->compressionType = $map['CompressionType'];
        }

        if (isset($map['ContentTransform'])) {
            $model->contentTransform = contentTransform::fromMap($map['ContentTransform']);
        }

        if (isset($map['Endpoint'])) {
            $model->endpoint = $map['Endpoint'];
        }

        if (isset($map['PathFormat'])) {
            $model->pathFormat = $map['PathFormat'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['RoleArn'])) {
            $model->roleArn = $map['RoleArn'];
        }

        if (isset($map['RotateIntervalMs'])) {
            $model->rotateIntervalMs = $map['RotateIntervalMs'];
        }

        if (isset($map['RotateSizeBytes'])) {
            $model->rotateSizeBytes = $map['RotateSizeBytes'];
        }

        if (isset($map['SSLEnabled'])) {
            $model->SSLEnabled = $map['SSLEnabled'];
        }

        if (isset($map['TaskConcurrency'])) {
            $model->taskConcurrency = $map['TaskConcurrency'];
        }

        if (isset($map['TimeZone'])) {
            $model->timeZone = $map['TimeZone'];
        }

        return $model;
    }
}
