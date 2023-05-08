<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshesResponseBody\serviceMeshes\spec\meshConfig;

use AlibabaCloud\Tea\Model;

class pilot extends Model
{
    /**
     * @description Indicates whether the support for HTTP 1.0 is enabled. Valid values:
     *
     *   `true`: The support for HTTP 1.0 is enabled.
     *   `false`: The support for HTTP 1.0 is disabled.
     *
     * @example true
     *
     * @var bool
     */
    public $http10Enabled;

    /**
     * @description The sampling percentage of tracing.
     *
     * @example 0.2
     *
     * @var float
     */
    public $traceSampling;
    protected $_name = [
        'http10Enabled' => 'Http10Enabled',
        'traceSampling' => 'TraceSampling',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
        if (isset($map['Http10Enabled'])) {
            $model->http10Enabled = $map['Http10Enabled'];
        }
        if (isset($map['TraceSampling'])) {
            $model->traceSampling = $map['TraceSampling'];
        }

        return $model;
    }
}
