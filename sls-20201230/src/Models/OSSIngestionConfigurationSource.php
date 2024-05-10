<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Tea\Model;

class OSSIngestionConfigurationSource extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example ossbucket
     *
     * @var string
     */
    public $bucket;

    /**
     * @description This parameter is required.
     *
     * @example none
     *
     * @var string
     */
    public $compressionCodec;

    /**
     * @description This parameter is required.
     *
     * @example UTF-8
     *
     * @var string
     */
    public $encoding;

    /**
     * @example 1714360481
     *
     * @var int
     */
    public $endTime;

    /**
     * @description This parameter is required.
     *
     * @example oss-cn-hangzhou.aliyuncs.com
     *
     * @var string
     */
    public $endpoint;

    /**
     * @description This parameter is required.
     *
     * @var mixed[]
     */
    public $format;

    /**
     * @description This parameter is required.
     *
     * @example never
     *
     * @var string
     */
    public $interval;

    /**
     * @example .*
     *
     * @var string
     */
    public $pattern;

    /**
     * @example prefix
     *
     * @var string
     */
    public $prefix;

    /**
     * @example true
     *
     * @var bool
     */
    public $restoreObjectEnabled;

    /**
     * @example acs:ram::12345:role/aliyunlogdefaultrole
     *
     * @var string
     */
    public $roleARN;

    /**
     * @example 1714274081
     *
     * @var int
     */
    public $startTime;

    /**
     * @example __time__
     *
     * @var string
     */
    public $timeField;

    /**
     * @example yyyy-MM-dd HH:mm:ss
     *
     * @var string
     */
    public $timeFormat;

    /**
     * @example [0-9]{0,2}\/[0-9a-zA-Z]+\/[0-9:,]+
     *
     * @var string
     */
    public $timePattern;

    /**
     * @example GMT+08:00
     *
     * @var string
     */
    public $timeZone;

    /**
     * @description This parameter is required.
     *
     * @example false
     *
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
