<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class CreateEdgeDriverRequest extends Model
{
    /**
     * @example x86-64
     *
     * @var string
     */
    public $cpuArch;

    /**
     * @example MyLedDriver
     *
     * @var string
     */
    public $driverName;

    /**
     * @example customize
     *
     * @var string
     */
    public $driverProtocol;

    /**
     * @example iot_instc_pu****_c*-v64********
     *
     * @var string
     */
    public $iotInstanceId;

    /**
     * @example false
     *
     * @var bool
     */
    public $isBuiltIn;

    /**
     * @example c
     *
     * @var string
     */
    public $runtime;
    protected $_name = [
        'cpuArch'        => 'CpuArch',
        'driverName'     => 'DriverName',
        'driverProtocol' => 'DriverProtocol',
        'iotInstanceId'  => 'IotInstanceId',
        'isBuiltIn'      => 'IsBuiltIn',
        'runtime'        => 'Runtime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cpuArch) {
            $res['CpuArch'] = $this->cpuArch;
        }
        if (null !== $this->driverName) {
            $res['DriverName'] = $this->driverName;
        }
        if (null !== $this->driverProtocol) {
            $res['DriverProtocol'] = $this->driverProtocol;
        }
        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }
        if (null !== $this->isBuiltIn) {
            $res['IsBuiltIn'] = $this->isBuiltIn;
        }
        if (null !== $this->runtime) {
            $res['Runtime'] = $this->runtime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateEdgeDriverRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CpuArch'])) {
            $model->cpuArch = $map['CpuArch'];
        }
        if (isset($map['DriverName'])) {
            $model->driverName = $map['DriverName'];
        }
        if (isset($map['DriverProtocol'])) {
            $model->driverProtocol = $map['DriverProtocol'];
        }
        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }
        if (isset($map['IsBuiltIn'])) {
            $model->isBuiltIn = $map['IsBuiltIn'];
        }
        if (isset($map['Runtime'])) {
            $model->runtime = $map['Runtime'];
        }

        return $model;
    }
}
