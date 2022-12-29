<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models;

use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeParameterTemplatesResponseBody\parameters;
use AlibabaCloud\Tea\Model;

class DescribeParameterTemplatesResponseBody extends Model
{
    /**
     * @description The database engine of the instance.
     *
     * @example mongodb
     *
     * @var string
     */
    public $engine;

    /**
     * @description The database engine version of the instance.
     *
     * @example 5.0
     *
     * @var string
     */
    public $engineVersion;

    /**
     * @description The number of parameters that are supported by the instance.
     *
     * @example 10
     *
     * @var string
     */
    public $parameterCount;

    /**
     * @description Details about the parameter templates.
     *
     * @var parameters
     */
    public $parameters;

    /**
     * @description The ID of the request.
     *
     * @example BDA54203-9D61-54A3-A568-D281F785****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'engine'         => 'Engine',
        'engineVersion'  => 'EngineVersion',
        'parameterCount' => 'ParameterCount',
        'parameters'     => 'Parameters',
        'requestId'      => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }
        if (null !== $this->engineVersion) {
            $res['EngineVersion'] = $this->engineVersion;
        }
        if (null !== $this->parameterCount) {
            $res['ParameterCount'] = $this->parameterCount;
        }
        if (null !== $this->parameters) {
            $res['Parameters'] = null !== $this->parameters ? $this->parameters->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }
        if (isset($map['EngineVersion'])) {
            $model->engineVersion = $map['EngineVersion'];
        }
        if (isset($map['ParameterCount'])) {
            $model->parameterCount = $map['ParameterCount'];
        }
        if (isset($map['Parameters'])) {
            $model->parameters = parameters::fromMap($map['Parameters']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
