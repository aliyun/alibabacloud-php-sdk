<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models;

use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeParameterTemplatesResponseBody\parameters;
use AlibabaCloud\Tea\Model;

class DescribeParameterTemplatesResponseBody extends Model
{
    /**
     * @var string
     */
    public $engine;

    /**
     * @var string
     */
    public $engineVersion;

    /**
     * @var string
     */
    public $parameterCount;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var parameters
     */
    public $parameters;
    protected $_name = [
        'engine'         => 'Engine',
        'engineVersion'  => 'EngineVersion',
        'parameterCount' => 'ParameterCount',
        'requestId'      => 'RequestId',
        'parameters'     => 'Parameters',
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
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->parameters) {
            $res['Parameters'] = null !== $this->parameters ? $this->parameters->toMap() : null;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Parameters'])) {
            $model->parameters = parameters::fromMap($map['Parameters']);
        }

        return $model;
    }
}
