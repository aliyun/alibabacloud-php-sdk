<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SWASOPEN\V20200601\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\DescribeDatabaseInstanceParametersResponseBody\configParameters;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\DescribeDatabaseInstanceParametersResponseBody\runningParameters;

class DescribeDatabaseInstanceParametersResponseBody extends Model
{
    /**
     * @var configParameters[]
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
        if (\is_array($this->configParameters)) {
            Model::validateArray($this->configParameters);
        }
        if (\is_array($this->runningParameters)) {
            Model::validateArray($this->runningParameters);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->configParameters) {
            if (\is_array($this->configParameters)) {
                $res['ConfigParameters'] = [];
                $n1                      = 0;
                foreach ($this->configParameters as $item1) {
                    $res['ConfigParameters'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
            if (\is_array($this->runningParameters)) {
                $res['RunningParameters'] = [];
                $n1                       = 0;
                foreach ($this->runningParameters as $item1) {
                    $res['RunningParameters'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
            if (!empty($map['ConfigParameters'])) {
                $model->configParameters = [];
                $n1                      = 0;
                foreach ($map['ConfigParameters'] as $item1) {
                    $model->configParameters[$n1++] = configParameters::fromMap($item1);
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
                $n1                       = 0;
                foreach ($map['RunningParameters'] as $item1) {
                    $model->runningParameters[$n1++] = runningParameters::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
