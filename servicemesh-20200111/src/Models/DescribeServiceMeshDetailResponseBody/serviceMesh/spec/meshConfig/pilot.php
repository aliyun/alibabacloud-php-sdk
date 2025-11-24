<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshDetailResponseBody\serviceMesh\spec\meshConfig;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshDetailResponseBody\serviceMesh\spec\meshConfig\pilot\configSource;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshDetailResponseBody\serviceMesh\spec\meshConfig\pilot\feature;

class pilot extends Model
{
    /**
     * @var configSource
     */
    public $configSource;

    /**
     * @var feature
     */
    public $feature;

    /**
     * @var bool
     */
    public $http10Enabled;

    /**
     * @var float
     */
    public $traceSampling;
    protected $_name = [
        'configSource' => 'ConfigSource',
        'feature' => 'Feature',
        'http10Enabled' => 'Http10Enabled',
        'traceSampling' => 'TraceSampling',
    ];

    public function validate()
    {
        if (null !== $this->configSource) {
            $this->configSource->validate();
        }
        if (null !== $this->feature) {
            $this->feature->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->configSource) {
            $res['ConfigSource'] = null !== $this->configSource ? $this->configSource->toArray($noStream) : $this->configSource;
        }

        if (null !== $this->feature) {
            $res['Feature'] = null !== $this->feature ? $this->feature->toArray($noStream) : $this->feature;
        }

        if (null !== $this->http10Enabled) {
            $res['Http10Enabled'] = $this->http10Enabled;
        }

        if (null !== $this->traceSampling) {
            $res['TraceSampling'] = $this->traceSampling;
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
        if (isset($map['ConfigSource'])) {
            $model->configSource = configSource::fromMap($map['ConfigSource']);
        }

        if (isset($map['Feature'])) {
            $model->feature = feature::fromMap($map['Feature']);
        }

        if (isset($map['Http10Enabled'])) {
            $model->http10Enabled = $map['Http10Enabled'];
        }

        if (isset($map['TraceSampling'])) {
            $model->traceSampling = $map['TraceSampling'];
        }

        return $model;
    }
}
