<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeParameterTemplatesResponseBody\parameters;

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
     * @var parameters
     */
    public $parameters;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'engine' => 'Engine',
        'engineVersion' => 'EngineVersion',
        'parameterCount' => 'ParameterCount',
        'parameters' => 'Parameters',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->parameters) {
            $this->parameters->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            $res['Parameters'] = null !== $this->parameters ? $this->parameters->toArray($noStream) : $this->parameters;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
