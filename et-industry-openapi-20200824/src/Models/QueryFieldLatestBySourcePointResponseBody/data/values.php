<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Etindustryopenapi\V20200824\Models\QueryFieldLatestBySourcePointResponseBody\data;

use AlibabaCloud\Dara\Model;

class values extends Model
{
    /**
     * @var string
     */
    public $eventTime;

    /**
     * @var string
     */
    public $processTime;

    /**
     * @var int
     */
    public $quality;

    /**
     * @var string
     */
    public $sampleType;

    /**
     * @var int
     */
    public $time;

    /**
     * @var int
     */
    public $timestamp;

    /**
     * @var string
     */
    public $value;
    protected $_name = [
        'eventTime' => 'EventTime',
        'processTime' => 'ProcessTime',
        'quality' => 'Quality',
        'sampleType' => 'SampleType',
        'time' => 'Time',
        'timestamp' => 'Timestamp',
        'value' => 'Value',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->eventTime) {
            $res['EventTime'] = $this->eventTime;
        }

        if (null !== $this->processTime) {
            $res['ProcessTime'] = $this->processTime;
        }

        if (null !== $this->quality) {
            $res['Quality'] = $this->quality;
        }

        if (null !== $this->sampleType) {
            $res['SampleType'] = $this->sampleType;
        }

        if (null !== $this->time) {
            $res['Time'] = $this->time;
        }

        if (null !== $this->timestamp) {
            $res['Timestamp'] = $this->timestamp;
        }

        if (null !== $this->value) {
            $res['Value'] = $this->value;
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
        if (isset($map['EventTime'])) {
            $model->eventTime = $map['EventTime'];
        }

        if (isset($map['ProcessTime'])) {
            $model->processTime = $map['ProcessTime'];
        }

        if (isset($map['Quality'])) {
            $model->quality = $map['Quality'];
        }

        if (isset($map['SampleType'])) {
            $model->sampleType = $map['SampleType'];
        }

        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }

        if (isset($map['Timestamp'])) {
            $model->timestamp = $map['Timestamp'];
        }

        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
