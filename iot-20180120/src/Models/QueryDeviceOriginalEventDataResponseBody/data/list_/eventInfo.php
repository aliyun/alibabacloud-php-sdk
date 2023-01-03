<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QueryDeviceOriginalEventDataResponseBody\data\list_;

use AlibabaCloud\Tea\Model;

class eventInfo extends Model
{
    /**
     * @example info
     *
     * @var string
     */
    public $eventType;

    /**
     * @example PowerOff
     *
     * @var string
     */
    public $identifier;

    /**
     * @var string
     */
    public $name;

    /**
     * @example {"structArgs":{"structchildFLOATf71c20e":1.23}}
     *
     * @var string
     */
    public $outputData;

    /**
     * @example 1579163099000
     *
     * @var string
     */
    public $time;
    protected $_name = [
        'eventType'  => 'EventType',
        'identifier' => 'Identifier',
        'name'       => 'Name',
        'outputData' => 'OutputData',
        'time'       => 'Time',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->eventType) {
            $res['EventType'] = $this->eventType;
        }
        if (null !== $this->identifier) {
            $res['Identifier'] = $this->identifier;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->outputData) {
            $res['OutputData'] = $this->outputData;
        }
        if (null !== $this->time) {
            $res['Time'] = $this->time;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return eventInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EventType'])) {
            $model->eventType = $map['EventType'];
        }
        if (isset($map['Identifier'])) {
            $model->identifier = $map['Identifier'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['OutputData'])) {
            $model->outputData = $map['OutputData'];
        }
        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }

        return $model;
    }
}
