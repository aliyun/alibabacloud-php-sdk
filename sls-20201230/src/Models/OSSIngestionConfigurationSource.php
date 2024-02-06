<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Tea\Model;

class OSSIngestionConfigurationSource extends Model
{
    /**
     * @example ossbucket
     *
     * @var string
     */
    public $bucket;

    /**
     * @example none,snappy,gzip
     *
     * @var string
     */
    public $compressionCodec;

    /**
     * @example UTF-8
     *
     * @var string
     */
    public $encoding;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @example oss-cn-hangzhou.aliyuncs.com
     *
     * @var string
     */
    public $endpoint;

    /**
     * @var mixed[]
     */
    public $format;

    /**
     * @example never
     *
     * @var string
     */
    public $interval;

    /**
     * @var string
     */
    public $pattern;

    /**
     * @var string
     */
    public $prefix;

    /**
     * @var bool
     */
    public $restoreObjectEnabled;

    /**
     * @var string
     */
    public $roleARN;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var string
     */
    public $timeField;

    /**
     * @var string
     */
    public $timeFormat;

    /**
     * @var string
     */
    public $timePattern;

    /**
     * @var string
     */
    public $timeZone;

    /**
     * @var bool
     */
    public $useMetaIndex;
    protected $_name = [
        'bucket'               => 'bucket',
        'compressionCodec'     => 'compressionCodec',
        'encoding'             => 'encoding',
        'endTime'              => 'endTime',
        'endpoint'             => 'endpoint',
        'format'               => 'format',
        'interval'             => 'interval',
        'pattern'              => 'pattern',
        'prefix'               => 'prefix',
        'restoreObjectEnabled' => 'restoreObjectEnabled',
        'roleARN'              => 'roleARN',
        'startTime'            => 'startTime',
        'timeField'            => 'timeField',
        'timeFormat'           => 'timeFormat',
        'timePattern'          => 'timePattern',
        'timeZone'             => 'timeZone',
        'useMetaIndex'         => 'useMetaIndex',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bucket) {
            $res['bucket'] = $this->bucket;
        }
        if (null !== $this->compressionCodec) {
            $res['compressionCodec'] = $this->compressionCodec;
        }
        if (null !== $this->encoding) {
            $res['encoding'] = $this->encoding;
        }
        if (null !== $this->endTime) {
            $res['endTime'] = $this->endTime;
        }
        if (null !== $this->endpoint) {
            $res['endpoint'] = $this->endpoint;
        }
        if (null !== $this->format) {
            $res['format'] = $this->format;
        }
        if (null !== $this->interval) {
            $res['interval'] = $this->interval;
        }
        if (null !== $this->pattern) {
            $res['pattern'] = $this->pattern;
        }
        if (null !== $this->prefix) {
            $res['prefix'] = $this->prefix;
        }
        if (null !== $this->restoreObjectEnabled) {
            $res['restoreObjectEnabled'] = $this->restoreObjectEnabled;
        }
        if (null !== $this->roleARN) {
            $res['roleARN'] = $this->roleARN;
        }
        if (null !== $this->startTime) {
            $res['startTime'] = $this->startTime;
        }
        if (null !== $this->timeField) {
            $res['timeField'] = $this->timeField;
        }
        if (null !== $this->timeFormat) {
            $res['timeFormat'] = $this->timeFormat;
        }
        if (null !== $this->timePattern) {
            $res['timePattern'] = $this->timePattern;
        }
        if (null !== $this->timeZone) {
            $res['timeZone'] = $this->timeZone;
        }
        if (null !== $this->useMetaIndex) {
            $res['useMetaIndex'] = $this->useMetaIndex;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return OSSIngestionConfigurationSource
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['bucket'])) {
            $model->bucket = $map['bucket'];
        }
        if (isset($map['compressionCodec'])) {
            $model->compressionCodec = $map['compressionCodec'];
        }
        if (isset($map['encoding'])) {
            $model->encoding = $map['encoding'];
        }
        if (isset($map['endTime'])) {
            $model->endTime = $map['endTime'];
        }
        if (isset($map['endpoint'])) {
            $model->endpoint = $map['endpoint'];
        }
        if (isset($map['format'])) {
            $model->format = $map['format'];
        }
        if (isset($map['interval'])) {
            $model->interval = $map['interval'];
        }
        if (isset($map['pattern'])) {
            $model->pattern = $map['pattern'];
        }
        if (isset($map['prefix'])) {
            $model->prefix = $map['prefix'];
        }
        if (isset($map['restoreObjectEnabled'])) {
            $model->restoreObjectEnabled = $map['restoreObjectEnabled'];
        }
        if (isset($map['roleARN'])) {
            $model->roleARN = $map['roleARN'];
        }
        if (isset($map['startTime'])) {
            $model->startTime = $map['startTime'];
        }
        if (isset($map['timeField'])) {
            $model->timeField = $map['timeField'];
        }
        if (isset($map['timeFormat'])) {
            $model->timeFormat = $map['timeFormat'];
        }
        if (isset($map['timePattern'])) {
            $model->timePattern = $map['timePattern'];
        }
        if (isset($map['timeZone'])) {
            $model->timeZone = $map['timeZone'];
        }
        if (isset($map['useMetaIndex'])) {
            $model->useMetaIndex = $map['useMetaIndex'];
        }

        return $model;
    }
}
