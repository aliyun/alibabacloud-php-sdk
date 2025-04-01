<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeParametersResponseBody\configParameters;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeParametersResponseBody\runningParameters;

class DescribeParametersResponseBody extends Model
{
    /**
     * @var configParameters
     */
    public $configParameters;

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
    public $requestId;

    /**
     * @var runningParameters
     */
    public $runningParameters;
    protected $_name = [
        'configParameters' => 'ConfigParameters',
        'engine' => 'Engine',
        'engineVersion' => 'EngineVersion',
        'requestId' => 'RequestId',
        'runningParameters' => 'RunningParameters',
    ];

    public function validate()
    {
        if (null !== $this->configParameters) {
            $this->configParameters->validate();
        }
        if (null !== $this->runningParameters) {
            $this->runningParameters->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->configParameters) {
            $res['ConfigParameters'] = null !== $this->configParameters ? $this->configParameters->toArray($noStream) : $this->configParameters;
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
