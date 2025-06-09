<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models\OSSExportConfiguration;

use AlibabaCloud\Dara\Model;

class sink extends Model
{
    /**
     * @var string
     */
    public $bucket;

    /**
     * @var int
     */
    public $bufferInterval;

    /**
     * @var int
     */
    public $bufferSize;

    /**
     * @var string
     */
    public $compressionType;

    /**
     * @var mixed[]
     */
    public $contentDetail;

    /**
     * @var string
     */
    public $contentType;

    /**
     * @var int
     */
    public $delaySec;

    /**
     * @var int
     */
    public $delaySeconds;

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
    public $pathFormatType;

    /**
     * @var string
     */
    public $prefix;

    /**
     * @var string
     */
    public $roleArn;

    /**
     * @var string
     */
    public $suffix;

    /**
     * @var string
     */
    public $timeZone;
    protected $_name = [
        'bucket' => 'bucket',
        'bufferInterval' => 'bufferInterval',
        'bufferSize' => 'bufferSize',
        'compressionType' => 'compressionType',
        'contentDetail' => 'contentDetail',
        'contentType' => 'contentType',
        'delaySec' => 'delaySec',
        'delaySeconds' => 'delaySeconds',
        'endpoint' => 'endpoint',
        'pathFormat' => 'pathFormat',
        'pathFormatType' => 'pathFormatType',
        'prefix' => 'prefix',
        'roleArn' => 'roleArn',
        'suffix' => 'suffix',
        'timeZone' => 'timeZone',
    ];

    public function validate()
    {
        if (\is_array($this->contentDetail)) {
            Model::validateArray($this->contentDetail);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bucket) {
            $res['bucket'] = $this->bucket;
        }

        if (null !== $this->bufferInterval) {
            $res['bufferInterval'] = $this->bufferInterval;
        }

        if (null !== $this->bufferSize) {
            $res['bufferSize'] = $this->bufferSize;
        }

        if (null !== $this->compressionType) {
            $res['compressionType'] = $this->compressionType;
        }

        if (null !== $this->contentDetail) {
            if (\is_array($this->contentDetail)) {
                $res['contentDetail'] = [];
                foreach ($this->contentDetail as $key1 => $value1) {
                    $res['contentDetail'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->contentType) {
            $res['contentType'] = $this->contentType;
        }

        if (null !== $this->delaySec) {
            $res['delaySec'] = $this->delaySec;
        }

        if (null !== $this->delaySeconds) {
            $res['delaySeconds'] = $this->delaySeconds;
        }

        if (null !== $this->endpoint) {
            $res['endpoint'] = $this->endpoint;
        }

        if (null !== $this->pathFormat) {
            $res['pathFormat'] = $this->pathFormat;
        }

        if (null !== $this->pathFormatType) {
            $res['pathFormatType'] = $this->pathFormatType;
        }

        if (null !== $this->prefix) {
            $res['prefix'] = $this->prefix;
        }

        if (null !== $this->roleArn) {
            $res['roleArn'] = $this->roleArn;
        }

        if (null !== $this->suffix) {
            $res['suffix'] = $this->suffix;
        }

        if (null !== $this->timeZone) {
            $res['timeZone'] = $this->timeZone;
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
        if (isset($map['bucket'])) {
            $model->bucket = $map['bucket'];
        }

        if (isset($map['bufferInterval'])) {
            $model->bufferInterval = $map['bufferInterval'];
        }

        if (isset($map['bufferSize'])) {
            $model->bufferSize = $map['bufferSize'];
        }

        if (isset($map['compressionType'])) {
            $model->compressionType = $map['compressionType'];
        }

        if (isset($map['contentDetail'])) {
            if (!empty($map['contentDetail'])) {
                $model->contentDetail = [];
                foreach ($map['contentDetail'] as $key1 => $value1) {
                    $model->contentDetail[$key1] = $value1;
                }
            }
        }

        if (isset($map['contentType'])) {
            $model->contentType = $map['contentType'];
        }

        if (isset($map['delaySec'])) {
            $model->delaySec = $map['delaySec'];
        }

        if (isset($map['delaySeconds'])) {
            $model->delaySeconds = $map['delaySeconds'];
        }

        if (isset($map['endpoint'])) {
            $model->endpoint = $map['endpoint'];
        }

        if (isset($map['pathFormat'])) {
            $model->pathFormat = $map['pathFormat'];
        }

        if (isset($map['pathFormatType'])) {
            $model->pathFormatType = $map['pathFormatType'];
        }

        if (isset($map['prefix'])) {
            $model->prefix = $map['prefix'];
        }

        if (isset($map['roleArn'])) {
            $model->roleArn = $map['roleArn'];
        }

        if (isset($map['suffix'])) {
            $model->suffix = $map['suffix'];
        }

        if (isset($map['timeZone'])) {
            $model->timeZone = $map['timeZone'];
        }

        return $model;
    }
}
