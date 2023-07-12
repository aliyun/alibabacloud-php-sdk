<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QueryDeviceOriginalEventDataResponse\data\list_;

use AlibabaCloud\Tea\Model;

class eventInfo extends Model
{
    /**
     * @var string
     */
    public $eventType;

    /**
     * @var string
     */
    public $identifier;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $outputData;

    /**
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
        Model::validateRequired('eventType', $this->eventType, true);
        Model::validateRequired('identifier', $this->identifier, true);
        Model::validateRequired('name', $this->name, true);
        Model::validateRequired('outputData', $this->outputData, true);
        Model::validateRequired('time', $this->time, true);
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
