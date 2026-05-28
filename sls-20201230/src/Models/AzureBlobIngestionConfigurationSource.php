<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Dara\Model;

class AzureBlobIngestionConfigurationSource extends Model
{
    /**
     * @var string
     */
    public $accountKey;

    /**
     * @var string
     */
    public $accountName;

    /**
     * @var mixed[]
     */
    public $advancedParameters;

    /**
     * @var string
     */
    public $compressionCodec;

    /**
     * @var string
     */
    public $containerName;

    /**
     * @var string
     */
    public $encoding;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var string
     */
    public $endpoint;

    /**
     * @var mixed[]
     */
    public $format;

    /**
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
     * @var string
     */
    public $processorId;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var bool
     */
    public $tagPackId;

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
    protected $_name = [
        'accountKey' => 'accountKey',
        'accountName' => 'accountName',
        'advancedParameters' => 'advancedParameters',
        'compressionCodec' => 'compressionCodec',
        'containerName' => 'containerName',
        'encoding' => 'encoding',
        'endTime' => 'endTime',
        'endpoint' => 'endpoint',
        'format' => 'format',
        'interval' => 'interval',
        'pattern' => 'pattern',
        'prefix' => 'prefix',
        'processorId' => 'processorId',
        'startTime' => 'startTime',
        'tagPackId' => 'tagPackId',
        'timeField' => 'timeField',
        'timeFormat' => 'timeFormat',
        'timePattern' => 'timePattern',
        'timeZone' => 'timeZone',
    ];

    public function validate()
    {
        if (\is_array($this->advancedParameters)) {
            Model::validateArray($this->advancedParameters);
        }
        if (\is_array($this->format)) {
            Model::validateArray($this->format);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accountKey) {
            $res['accountKey'] = $this->accountKey;
        }

        if (null !== $this->accountName) {
            $res['accountName'] = $this->accountName;
        }

        if (null !== $this->advancedParameters) {
            if (\is_array($this->advancedParameters)) {
                $res['advancedParameters'] = [];
                foreach ($this->advancedParameters as $key1 => $value1) {
                    $res['advancedParameters'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->compressionCodec) {
            $res['compressionCodec'] = $this->compressionCodec;
        }

        if (null !== $this->containerName) {
            $res['containerName'] = $this->containerName;
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
            if (\is_array($this->format)) {
                $res['format'] = [];
                foreach ($this->format as $key1 => $value1) {
                    $res['format'][$key1] = $value1;
                }
            }
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

        if (null !== $this->processorId) {
            $res['processorId'] = $this->processorId;
        }

        if (null !== $this->startTime) {
            $res['startTime'] = $this->startTime;
        }

        if (null !== $this->tagPackId) {
            $res['tagPackId'] = $this->tagPackId;
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

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['accountKey'])) {
            $model->accountKey = $map['accountKey'];
        }

        if (isset($map['accountName'])) {
            $model->accountName = $map['accountName'];
        }

        if (isset($map['advancedParameters'])) {
            if (!empty($map['advancedParameters'])) {
                $model->advancedParameters = [];
                foreach ($map['advancedParameters'] as $key1 => $value1) {
                    $model->advancedParameters[$key1] = $value1;
                }
            }
        }

        if (isset($map['compressionCodec'])) {
            $model->compressionCodec = $map['compressionCodec'];
        }

        if (isset($map['containerName'])) {
            $model->containerName = $map['containerName'];
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
            if (!empty($map['format'])) {
                $model->format = [];
                foreach ($map['format'] as $key1 => $value1) {
                    $model->format[$key1] = $value1;
                }
            }
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

        if (isset($map['processorId'])) {
            $model->processorId = $map['processorId'];
        }

        if (isset($map['startTime'])) {
            $model->startTime = $map['startTime'];
        }

        if (isset($map['tagPackId'])) {
            $model->tagPackId = $map['tagPackId'];
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

        return $model;
    }
}
