<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshDetailResponseBody\serviceMesh\spec\meshConfig;

use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshDetailResponseBody\serviceMesh\spec\meshConfig\pilot\configSource;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshDetailResponseBody\serviceMesh\spec\meshConfig\pilot\feature;
use AlibabaCloud\Tea\Model;

class pilot extends Model
{
    /**
     * @description The configurations of communication between external services and services in the mesh.
     *
     * @var configSource
     */
    public $configSource;

    /**
     * @description The configurations of Pilot features.
     *
     * @var feature
     */
    public $feature;

    /**
     * @description Indicates whether HTTP/1.0 is supported. Valid values:
     *
     *   `true`: HTTP/1.0 is supported.
     *   `false`: HTTP/1.0 is not supported.
     *
     * @example false
     *
     * @var bool
     */
    public $http10Enabled;

    /**
     * @description The sampling percentage of tracing analysis.
     *
     * @example 100
     *
     * @var float
     */
    public $traceSampling;
    protected $_name = [
        'configSource'  => 'ConfigSource',
        'feature'       => 'Feature',
        'http10Enabled' => 'Http10Enabled',
        'traceSampling' => 'TraceSampling',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->configSource) {
            $res['ConfigSource'] = null !== $this->configSource ? $this->configSource->toMap() : null;
        }
        if (null !== $this->feature) {
            $res['Feature'] = null !== $this->feature ? $this->feature->toMap() : null;
        }
        if (null !== $this->http10Enabled) {
            $res['Http10Enabled'] = $this->http10Enabled;
        }
        if (null !== $this->traceSampling) {
            $res['TraceSampling'] = $this->traceSampling;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return pilot
     */
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
