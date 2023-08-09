<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models;

use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeParametersResponseBody\configParameters;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeParametersResponseBody\runningParameters;
use AlibabaCloud\Tea\Model;

class DescribeParametersResponseBody extends Model
{
    /**
     * @description The parameter settings in the configuration template.
     *
     * @var configParameters
     */
    public $configParameters;

    /**
     * @description The database engine of the instance. Default value: **mongodb**.
     *
     * @example mongodb
     *
     * @var string
     */
    public $engine;

    /**
     * @description The version of the database engine.
     *
     * @example 4.0
     *
     * @var string
     */
    public $engineVersion;

    /**
     * @description The ID of the request.
     *
     * @example 3ADD0C7D-2D2A-4F15-88FF-E7AC9B9FDCC8
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The parameter settings for the running instance.
     *
     * @var runningParameters
     */
    public $runningParameters;
    protected $_name = [
        'configParameters'  => 'ConfigParameters',
        'engine'            => 'Engine',
        'engineVersion'     => 'EngineVersion',
        'requestId'         => 'RequestId',
        'runningParameters' => 'RunningParameters',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->configParameters) {
            $res['ConfigParameters'] = null !== $this->configParameters ? $this->configParameters->toMap() : null;
        }
        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }
        if (null !== $this->engineVersion) {
            $res['EngineVersion'] = $this->engineVersion;
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
     * @return DescribeParametersResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConfigParameters'])) {
            $model->configParameters = configParameters::fromMap($map['ConfigParameters']);
        }
        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }
        if (isset($map['EngineVersion'])) {
            $model->engineVersion = $map['EngineVersion'];
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
