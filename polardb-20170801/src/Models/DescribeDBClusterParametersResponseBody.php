<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClusterParametersResponseBody\parameters;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClusterParametersResponseBody\runningParameters;

class DescribeDBClusterParametersResponseBody extends Model
{
    /**
     * @var string
     */
    public $DBClusterId;
    /**
     * @var string
     */
    public $DBType;
    /**
     * @var string
     */
    public $DBVersion;
    /**
     * @var string
     */
    public $engine;
    /**
     * @var string
     */
    public $parameterNumbers;
    /**
     * @var parameters
     */
    public $parameters;
    /**
     * @var string
     */
    public $requestId;
    /**
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
        if (null !== $this->parameters) {
            $this->parameters->validate();
        }
        if (null !== $this->runningParameters) {
            $this->runningParameters->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            $res['Parameters'] = null !== $this->parameters ? $this->parameters->toArray($noStream) : $this->parameters;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->runningParameters) {
            $res['RunningParameters'] = null !== $this->runningParameters ? $this->runningParameters->toArray($noStream) : $this->runningParameters;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
