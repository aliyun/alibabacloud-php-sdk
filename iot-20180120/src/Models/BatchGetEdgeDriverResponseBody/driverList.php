<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\BatchGetEdgeDriverResponseBody;

use AlibabaCloud\Tea\Model;

class driverList extends Model
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
     * @description The ID of the driver.
     *
     * @example fec565038d7544978d9aed5c1a******
     *
     * @var string
     */
    public $driverId;

    /**
     * @description The name of the driver.
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
     * @description The time when the driver was created. The time is displayed in UTC.
     *
     * @example 1581912859713
     *
     * @var int
     */
    public $gmtCreateTimestamp;

    /**
     * @description The time when the driver was last modified. The time is displayed in UTC.
     *
     * @example 1581912859713
     *
     * @var int
     */
    public $gmtModifiedTimestamp;

    /**
     * @description Indicates whether the driver is a built-in driver.
     *
     *   true: indicates that the driver is a built-in driver, that is, the driver code is pre-configured on the gateway device.
     *   false: indicates that the driver is not a built-in driver.
     *
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

    /**
     * @description The type of the driver. Valid values:
     *
     *   0: official driver
     *   1: custom driver
     *
     * @example 1
     *
     * @var int
     */
    public $type;
    protected $_name = [
        'cpuArch'              => 'CpuArch',
        'driverId'             => 'DriverId',
        'driverName'           => 'DriverName',
        'driverProtocol'       => 'DriverProtocol',
        'gmtCreateTimestamp'   => 'GmtCreateTimestamp',
        'gmtModifiedTimestamp' => 'GmtModifiedTimestamp',
        'isBuiltIn'            => 'IsBuiltIn',
        'runtime'              => 'Runtime',
        'type'                 => 'Type',
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
        if (null !== $this->driverId) {
            $res['DriverId'] = $this->driverId;
        }
        if (null !== $this->driverName) {
            $res['DriverName'] = $this->driverName;
        }
        if (null !== $this->driverProtocol) {
            $res['DriverProtocol'] = $this->driverProtocol;
        }
        if (null !== $this->gmtCreateTimestamp) {
            $res['GmtCreateTimestamp'] = $this->gmtCreateTimestamp;
        }
        if (null !== $this->gmtModifiedTimestamp) {
            $res['GmtModifiedTimestamp'] = $this->gmtModifiedTimestamp;
        }
        if (null !== $this->isBuiltIn) {
            $res['IsBuiltIn'] = $this->isBuiltIn;
        }
        if (null !== $this->runtime) {
            $res['Runtime'] = $this->runtime;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return driverList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CpuArch'])) {
            $model->cpuArch = $map['CpuArch'];
        }
        if (isset($map['DriverId'])) {
            $model->driverId = $map['DriverId'];
        }
        if (isset($map['DriverName'])) {
            $model->driverName = $map['DriverName'];
        }
        if (isset($map['DriverProtocol'])) {
            $model->driverProtocol = $map['DriverProtocol'];
        }
        if (isset($map['GmtCreateTimestamp'])) {
            $model->gmtCreateTimestamp = $map['GmtCreateTimestamp'];
        }
        if (isset($map['GmtModifiedTimestamp'])) {
            $model->gmtModifiedTimestamp = $map['GmtModifiedTimestamp'];
        }
        if (isset($map['IsBuiltIn'])) {
            $model->isBuiltIn = $map['IsBuiltIn'];
        }
        if (isset($map['Runtime'])) {
            $model->runtime = $map['Runtime'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
