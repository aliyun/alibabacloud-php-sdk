<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeParameterTemplatesResponseBody\parameters;
use AlibabaCloud\Tea\Model;

class DescribeParameterTemplatesResponseBody extends Model
{
    /**
     * @var string
     */
    public $parameterCount;

    /**
     * @var string
     */
    public $DBVersion;

    /**
     * @var parameters
     */
    public $parameters;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $DBType;

    /**
     * @var string
     */
    public $engine;
    protected $_name = [
        'parameterCount' => 'ParameterCount',
        'DBVersion'      => 'DBVersion',
        'parameters'     => 'Parameters',
        'requestId'      => 'RequestId',
        'DBType'         => 'DBType',
        'engine'         => 'Engine',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->parameterCount) {
            $res['ParameterCount'] = $this->parameterCount;
        }
        if (null !== $this->DBVersion) {
            $res['DBVersion'] = $this->DBVersion;
        }
        if (null !== $this->parameters) {
            $res['Parameters'] = null !== $this->parameters ? $this->parameters->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->DBType) {
            $res['DBType'] = $this->DBType;
        }
        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeParameterTemplatesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ParameterCount'])) {
            $model->parameterCount = $map['ParameterCount'];
        }
        if (isset($map['DBVersion'])) {
            $model->DBVersion = $map['DBVersion'];
        }
        if (isset($map['Parameters'])) {
            $model->parameters = parameters::fromMap($map['Parameters']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['DBType'])) {
            $model->DBType = $map['DBType'];
        }
        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }

        return $model;
    }
}
