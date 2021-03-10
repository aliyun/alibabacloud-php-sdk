<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\BatchGetEdgeDriverResponse;

use AlibabaCloud\Tea\Model;

class driverList extends Model
{
    /**
     * @var string
     */
    public $driverId;

    /**
     * @var string
     */
    public $driverName;

    /**
     * @var string
     */
    public $driverProtocol;

    /**
     * @var string
     */
    public $runtime;

    /**
     * @var string
     */
    public $cpuArch;

    /**
     * @var int
     */
    public $type;

    /**
     * @var bool
     */
    public $isBuiltIn;

    /**
     * @var int
     */
    public $gmtCreateTimestamp;

    /**
     * @var int
     */
    public $gmtModifiedTimestamp;
    protected $_name = [
        'driverId'             => 'DriverId',
        'driverName'           => 'DriverName',
        'driverProtocol'       => 'DriverProtocol',
        'runtime'              => 'Runtime',
        'cpuArch'              => 'CpuArch',
        'type'                 => 'Type',
        'isBuiltIn'            => 'IsBuiltIn',
        'gmtCreateTimestamp'   => 'GmtCreateTimestamp',
        'gmtModifiedTimestamp' => 'GmtModifiedTimestamp',
    ];

    public function validate()
    {
        Model::validateRequired('driverId', $this->driverId, true);
        Model::validateRequired('driverName', $this->driverName, true);
        Model::validateRequired('driverProtocol', $this->driverProtocol, true);
        Model::validateRequired('runtime', $this->runtime, true);
        Model::validateRequired('cpuArch', $this->cpuArch, true);
        Model::validateRequired('type', $this->type, true);
        Model::validateRequired('isBuiltIn', $this->isBuiltIn, true);
        Model::validateRequired('gmtCreateTimestamp', $this->gmtCreateTimestamp, true);
        Model::validateRequired('gmtModifiedTimestamp', $this->gmtModifiedTimestamp, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->driverId) {
            $res['DriverId'] = $this->driverId;
        }
        if (null !== $this->driverName) {
            $res['DriverName'] = $this->driverName;
        }
        if (null !== $this->driverProtocol) {
            $res['DriverProtocol'] = $this->driverProtocol;
        }
        if (null !== $this->runtime) {
            $res['Runtime'] = $this->runtime;
        }
        if (null !== $this->cpuArch) {
            $res['CpuArch'] = $this->cpuArch;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->isBuiltIn) {
            $res['IsBuiltIn'] = $this->isBuiltIn;
        }
        if (null !== $this->gmtCreateTimestamp) {
            $res['GmtCreateTimestamp'] = $this->gmtCreateTimestamp;
        }
        if (null !== $this->gmtModifiedTimestamp) {
            $res['GmtModifiedTimestamp'] = $this->gmtModifiedTimestamp;
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
        if (isset($map['DriverId'])) {
            $model->driverId = $map['DriverId'];
        }
        if (isset($map['DriverName'])) {
            $model->driverName = $map['DriverName'];
        }
        if (isset($map['DriverProtocol'])) {
            $model->driverProtocol = $map['DriverProtocol'];
        }
        if (isset($map['Runtime'])) {
            $model->runtime = $map['Runtime'];
        }
        if (isset($map['CpuArch'])) {
            $model->cpuArch = $map['CpuArch'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['IsBuiltIn'])) {
            $model->isBuiltIn = $map['IsBuiltIn'];
        }
        if (isset($map['GmtCreateTimestamp'])) {
            $model->gmtCreateTimestamp = $map['GmtCreateTimestamp'];
        }
        if (isset($map['GmtModifiedTimestamp'])) {
            $model->gmtModifiedTimestamp = $map['GmtModifiedTimestamp'];
        }

        return $model;
    }
}
