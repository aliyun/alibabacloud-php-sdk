<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class CreateEdgeDriverRequest extends Model
{
    /**
     * @var string
     */
    public $iotInstanceId;

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
     * @var bool
     */
    public $isBuiltIn;
    protected $_name = [
        'iotInstanceId'  => 'IotInstanceId',
        'driverName'     => 'DriverName',
        'driverProtocol' => 'DriverProtocol',
        'runtime'        => 'Runtime',
        'cpuArch'        => 'CpuArch',
        'isBuiltIn'      => 'IsBuiltIn',
    ];

    public function validate()
    {
        Model::validateRequired('driverName', $this->driverName, true);
        Model::validateRequired('driverProtocol', $this->driverProtocol, true);
        Model::validateRequired('runtime', $this->runtime, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
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
        if (null !== $this->isBuiltIn) {
            $res['IsBuiltIn'] = $this->isBuiltIn;
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
        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
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
        if (isset($map['IsBuiltIn'])) {
            $model->isBuiltIn = $map['IsBuiltIn'];
        }

        return $model;
    }
}
