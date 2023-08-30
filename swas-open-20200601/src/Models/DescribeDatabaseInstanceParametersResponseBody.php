<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SWASOPEN\V20200601\Models;

use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\DescribeDatabaseInstanceParametersResponseBody\configParameters;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\DescribeDatabaseInstanceParametersResponseBody\runningParameters;
use AlibabaCloud\Tea\Model;

class DescribeDatabaseInstanceParametersResponseBody extends Model
{
    /**
     * @description The range of ParameterValue.
     *
     * > The value of CheckingCode varies based on the value of ParameterName.
     * @var configParameters[]
     */
    public $configParameters;

    /**
     * @description The database engine that the instance runs. The value must be MySQL.
     *
     * @example MySQL
     *
     * @var string
     */
    public $engine;

    /**
     * @description The version of the database engine. Valid values:
     *
     *   5.7: MySQL 5.7.
     *   8.0: MySQL 8.0.
     *
     * @example 5.5
     *
     * @var string
     */
    public $engineVersion;

    /**
     * @description The request ID.
     *
     * @example 30637AD6-D977-4833-A54C-CC89483E****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The range of ParameterValue.
     *
     * > The value of CheckingCode varies based on the value of ParameterName.
     * @var runningParameters[]
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
            $res['ConfigParameters'] = [];
            if (null !== $this->configParameters && \is_array($this->configParameters)) {
                $n = 0;
                foreach ($this->configParameters as $item) {
                    $res['ConfigParameters'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
            $res['RunningParameters'] = [];
            if (null !== $this->runningParameters && \is_array($this->runningParameters)) {
                $n = 0;
                foreach ($this->runningParameters as $item) {
                    $res['RunningParameters'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDatabaseInstanceParametersResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConfigParameters'])) {
            if (!empty($map['ConfigParameters'])) {
                $model->configParameters = [];
                $n                       = 0;
                foreach ($map['ConfigParameters'] as $item) {
                    $model->configParameters[$n++] = null !== $item ? configParameters::fromMap($item) : $item;
                }
            }
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
            if (!empty($map['RunningParameters'])) {
                $model->runningParameters = [];
                $n                        = 0;
                foreach ($map['RunningParameters'] as $item) {
                    $model->runningParameters[$n++] = null !== $item ? runningParameters::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
