<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeParametersResponseBody;

use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeParametersResponseBody\data\configParameters;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeParametersResponseBody\data\runningParameters;
use AlibabaCloud\Tea\Model;

class data extends Model
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
     * @var runningParameters[]
     */
    public $runningParameters;
    protected $_name = [
        'configParameters'  => 'ConfigParameters',
        'engine'            => 'Engine',
        'engineVersion'     => 'EngineVersion',
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
     * @return data
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
