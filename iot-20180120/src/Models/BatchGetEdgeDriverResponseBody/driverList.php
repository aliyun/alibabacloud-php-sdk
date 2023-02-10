<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\BatchGetEdgeDriverResponseBody;

use AlibabaCloud\Tea\Model;

class driverList extends Model
{
    /**
     * @example x86-64
     *
     * @var string
     */
    public $cpuArch;

    /**
     * @example fec565038d7544978d9aed5c1a******
     *
     * @var string
     */
    public $driverId;

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
     * @example 1581912859713
     *
     * @var int
     */
    public $gmtCreateTimestamp;

    /**
     * @example 1581912859713
     *
     * @var int
     */
    public $gmtModifiedTimestamp;

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

    /**
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
