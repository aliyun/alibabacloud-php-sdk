<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeParametersResponseBody\configParameters;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeParametersResponseBody\runningParameters;
use AlibabaCloud\Tea\Model;

class DescribeParametersResponseBody extends Model
{
    /**
     * @var runningParameters
     */
    public $runningParameters;

    /**
     * @var string
     */
    public $engineVersion;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var configParameters
     */
    public $configParameters;

    /**
     * @var string
     */
    public $engine;
    protected $_name = [
        'runningParameters' => 'RunningParameters',
        'engineVersion'     => 'EngineVersion',
        'requestId'         => 'RequestId',
        'configParameters'  => 'ConfigParameters',
        'engine'            => 'Engine',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->runningParameters) {
            $res['RunningParameters'] = null !== $this->runningParameters ? $this->runningParameters->toMap() : null;
        }
        if (null !== $this->engineVersion) {
            $res['EngineVersion'] = $this->engineVersion;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->configParameters) {
            $res['ConfigParameters'] = null !== $this->configParameters ? $this->configParameters->toMap() : null;
        }
        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
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
        if (isset($map['RunningParameters'])) {
            $model->runningParameters = runningParameters::fromMap($map['RunningParameters']);
        }
        if (isset($map['EngineVersion'])) {
            $model->engineVersion = $map['EngineVersion'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ConfigParameters'])) {
            $model->configParameters = configParameters::fromMap($map['ConfigParameters']);
        }
        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }

        return $model;
    }
}
