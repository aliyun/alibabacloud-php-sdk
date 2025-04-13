<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Etindustryopenapi\V20200824\Models\QueryIndustryDeviceDataResponseBody\data;

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
     * @var int
     */
    public $time;

    /**
     * @var int
     */
    public $timeStamp;

    /**
     * @var string
     */
    public $value;
    protected $_name = [
        'eventTime' => 'EventTime',
        'processTime' => 'ProcessTime',
        'quality' => 'Quality',
        'time' => 'Time',
        'timeStamp' => 'TimeStamp',
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

        if (null !== $this->time) {
            $res['Time'] = $this->time;
        }

        if (null !== $this->timeStamp) {
            $res['TimeStamp'] = $this->timeStamp;
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

        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }

        if (isset($map['TimeStamp'])) {
            $model->timeStamp = $map['TimeStamp'];
        }

        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
