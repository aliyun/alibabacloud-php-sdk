<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClusterParametersResponseBody\parameters;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClusterParametersResponseBody\runningParameters;
use AlibabaCloud\Tea\Model;

class DescribeDBClusterParametersResponseBody extends Model
{
    /**
     * @description The ID of the cluster.
     *
     * @example pc-bp1s826a1up******
     *
     * @var string
     */
    public $DBClusterId;

    /**
     * @description The database engine that the clusters runs. Valid values:
     *
     *   **MySQL**
     *   **PostgreSQL**
     *   **Oracle**
     *
     * @example MySQL
     *
     * @var string
     */
    public $DBType;

    /**
     * @description The version of the database engine.
     *
     * - Valid values for the MySQL database engine:
     * - **5.6**
     * - **5.7**
     * - **8.0**
     * - Valid value for the PostgreSQL database engine:
     * - **11**
     * - **14**
     * - Valid value for the Oracle database engine:  **11**
     * @example 5.6
     *
     * @var string
     */
    public $DBVersion;

    /**
     * @description The cluster engine.
     *
     * @example POLARDB
     *
     * @var string
     */
    public $engine;

    /**
     * @description The number of parameters.
     *
     * @example 1
     *
     * @var string
     */
    public $parameterNumbers;

    /**
     * @description A comparison of parameters between the source RDS instance and the destination PolarDB cluster.
     *
     * @var parameters
     */
    public $parameters;

    /**
     * @description The ID of the request.
     *
     * @example EBEAA83D-1734-42E3-85E3-E25F6E******
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The parameters of the PolarDB cluster.
     *
     * @var runningParameters
     */
    public $runningParameters;
    protected $_name = [
        'DBClusterId'       => 'DBClusterId',
        'DBType'            => 'DBType',
        'DBVersion'         => 'DBVersion',
        'engine'            => 'Engine',
        'parameterNumbers'  => 'ParameterNumbers',
        'parameters'        => 'Parameters',
        'requestId'         => 'RequestId',
        'runningParameters' => 'RunningParameters',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }
        if (null !== $this->DBType) {
            $res['DBType'] = $this->DBType;
        }
        if (null !== $this->DBVersion) {
            $res['DBVersion'] = $this->DBVersion;
        }
        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }
        if (null !== $this->parameterNumbers) {
            $res['ParameterNumbers'] = $this->parameterNumbers;
        }
        if (null !== $this->parameters) {
            $res['Parameters'] = null !== $this->parameters ? $this->parameters->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->runningParameters) {
            $res['RunningParameters'] = null !== $this->runningParameters ? $this->runningParameters->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDBClusterParametersResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }
        if (isset($map['DBType'])) {
            $model->DBType = $map['DBType'];
        }
        if (isset($map['DBVersion'])) {
            $model->DBVersion = $map['DBVersion'];
        }
        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }
        if (isset($map['ParameterNumbers'])) {
            $model->parameterNumbers = $map['ParameterNumbers'];
        }
        if (isset($map['Parameters'])) {
            $model->parameters = parameters::fromMap($map['Parameters']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['RunningParameters'])) {
            $model->runningParameters = runningParameters::fromMap($map['RunningParameters']);
        }

        return $model;
    }
}
