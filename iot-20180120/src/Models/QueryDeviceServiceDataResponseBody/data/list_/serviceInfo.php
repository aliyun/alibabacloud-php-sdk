<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QueryDeviceServiceDataResponseBody\data\list_;

use AlibabaCloud\Tea\Model;

class serviceInfo extends Model
{
    /**
     * @example Set
     *
     * @var string
     */
    public $identifier;

    /**
     * @example {\"code\":200,\"data\":{},\"id\":\"100686\",\"message\":\"success\",\"version\":\"1.0\"}
     *
     * @var string
     */
    public $inputData;

    /**
     * @var string
     */
    public $name;

    /**
     * @example {\"LightAdjustLevel\":123}
     *
     * @var string
     */
    public $outputData;

    /**
     * @example 1579249499000
     *
     * @var string
     */
    public $time;
    protected $_name = [
        'identifier' => 'Identifier',
        'inputData'  => 'InputData',
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
        if (null !== $this->identifier) {
            $res['Identifier'] = $this->identifier;
        }
        if (null !== $this->inputData) {
            $res['InputData'] = $this->inputData;
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
     * @return serviceInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Identifier'])) {
            $model->identifier = $map['Identifier'];
        }
        if (isset($map['InputData'])) {
            $model->inputData = $map['InputData'];
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
