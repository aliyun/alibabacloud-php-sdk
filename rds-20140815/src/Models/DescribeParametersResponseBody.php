<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeParametersResponseBody\configParameters;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeParametersResponseBody\paramGroupInfo;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeParametersResponseBody\runningParameters;
use AlibabaCloud\Tea\Model;

class DescribeParametersResponseBody extends Model
{
    /**
     * @description The list of parameters that are being synchronized. After you modify and submit the parameter settings, you must wait for the parameter modifications to be synchronized to the instance. After the synchronization, you can delete the parameters from the list.
     *
     * @var configParameters
     */
    public $configParameters;

    /**
     * @description The type of the database engine.
     *
     * @example MySQL
     *
     * @var string
     */
    public $engine;

    /**
     * @description The database engine version of the instance.
     *
     * @example 5.5
     *
     * @var string
     */
    public $engineVersion;

    /**
     * @var paramGroupInfo
     */
    public $paramGroupInfo;

    /**
     * @description The ID of the request.
     *
     * @example 1AD222E9-E606-4A42-BF6D-8A4442913CEF
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The list of parameters that are in use.
     *
     * @var runningParameters
     */
    public $runningParameters;
    protected $_name = [
        'configParameters'  => 'ConfigParameters',
        'engine'            => 'Engine',
        'engineVersion'     => 'EngineVersion',
        'paramGroupInfo'    => 'ParamGroupInfo',
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
        if (null !== $this->paramGroupInfo) {
            $res['ParamGroupInfo'] = null !== $this->paramGroupInfo ? $this->paramGroupInfo->toMap() : null;
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
        if (isset($map['ParamGroupInfo'])) {
            $model->paramGroupInfo = paramGroupInfo::fromMap($map['ParamGroupInfo']);
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
