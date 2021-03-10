<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QueryDeviceServiceDataResponse\data\list_;

use AlibabaCloud\Tea\Model;

class serviceInfo extends Model
{
    /**
     * @var string
     */
    public $time;

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
    public $inputData;

    /**
     * @var string
     */
    public $outputData;
    protected $_name = [
        'time'       => 'Time',
        'identifier' => 'Identifier',
        'name'       => 'Name',
        'inputData'  => 'InputData',
        'outputData' => 'OutputData',
    ];

    public function validate()
    {
        Model::validateRequired('time', $this->time, true);
        Model::validateRequired('identifier', $this->identifier, true);
        Model::validateRequired('name', $this->name, true);
        Model::validateRequired('inputData', $this->inputData, true);
        Model::validateRequired('outputData', $this->outputData, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->time) {
            $res['Time'] = $this->time;
        }
        if (null !== $this->identifier) {
            $res['Identifier'] = $this->identifier;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->inputData) {
            $res['InputData'] = $this->inputData;
        }
        if (null !== $this->outputData) {
            $res['OutputData'] = $this->outputData;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return serviceInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }
        if (isset($map['Identifier'])) {
            $model->identifier = $map['Identifier'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['InputData'])) {
            $model->inputData = $map['InputData'];
        }
        if (isset($map['OutputData'])) {
            $model->outputData = $map['OutputData'];
        }

        return $model;
    }
}
