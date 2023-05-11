<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class CreateEdgeDriverRequest extends Model
{
    /**
     * @description The CPU architecture that the driver supports. Valid values:
     *
     *   ARMv7
     *   ARMv7-HF
     *   AArch64
     *   x86-64
     *   x86
     *
     * @example x86-64
     *
     * @var string
     */
    public $cpuArch;

    /**
     * @description The name of the driver to create. The name cannot exceed 20 characters in length and can contain only uppercase letters, lowercase letters, digits, and underscores (\_). It must start with a letter.
     *
     * @example MyLedDriver
     *
     * @var string
     */
    public $driverName;

    /**
     * @description The communications protocol that the driver uses. Valid values:
     *
     *   modbus: Modbus protocol
     *   opc-ua: OPC UA protocol
     *   customize: custom protocol
     *
     * @example customize
     *
     * @var string
     */
    public $driverProtocol;

    /**
     * @description The ID of the Internet of Things (IoT) service instance. This parameter is not required for public instances. However, this parameter is required for the instances that you have purchased.
     *
     * @example iot_instc_pu****_c*-v64********
     *
     * @var string
     */
    public $iotInstanceId;

    /**
     * @description Specifies whether the driver is a built-in driver.
     *
     *   true: indicates that the driver is a built-in driver, that is, the driver code is pre-configured on the gateway device.
     *
     *   false: indicates that the driver is not a built-in driver and you must upload the driver code. Default value: false.
     *
     * > If the driver is not a built-in driver, you must upload the driver code.
     * @example false
     *
     * @var bool
     */
    public $isBuiltIn;

    /**
     * @description The language in which the driver is programmed. Valid values:
     *
     *   nodejs8: Node.js v8
     *   python3: Python v3.5
     *   c: C
     *
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
