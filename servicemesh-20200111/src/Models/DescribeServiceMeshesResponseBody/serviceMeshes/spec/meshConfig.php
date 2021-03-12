<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshesResponseBody\serviceMeshes\spec;

use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshesResponseBody\serviceMeshes\spec\meshConfig\pilot;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshesResponseBody\serviceMeshes\spec\meshConfig\sidecarInjector;
use AlibabaCloud\Tea\Model;

class meshConfig extends Model
{
    /**
     * @var bool
     */
    public $telemetry;

    /**
     * @var string
     */
    public $outboundTrafficPolicy;

    /**
     * @var bool
     */
    public $tracing;

    /**
     * @var bool
     */
    public $strictMtls;

    /**
     * @var pilot
     */
    public $pilot;

    /**
     * @var bool
     */
    public $mtls;

    /**
     * @var sidecarInjector
     */
    public $sidecarInjector;
    protected $_name = [
        'telemetry'             => 'Telemetry',
        'outboundTrafficPolicy' => 'OutboundTrafficPolicy',
        'tracing'               => 'Tracing',
        'strictMtls'            => 'StrictMtls',
        'pilot'                 => 'Pilot',
        'mtls'                  => 'Mtls',
        'sidecarInjector'       => 'SidecarInjector',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->telemetry) {
            $res['Telemetry'] = $this->telemetry;
        }
        if (null !== $this->outboundTrafficPolicy) {
            $res['OutboundTrafficPolicy'] = $this->outboundTrafficPolicy;
        }
        if (null !== $this->tracing) {
            $res['Tracing'] = $this->tracing;
        }
        if (null !== $this->strictMtls) {
            $res['StrictMtls'] = $this->strictMtls;
        }
        if (null !== $this->pilot) {
            $res['Pilot'] = null !== $this->pilot ? $this->pilot->toMap() : null;
        }
        if (null !== $this->mtls) {
            $res['Mtls'] = $this->mtls;
        }
        if (null !== $this->sidecarInjector) {
            $res['SidecarInjector'] = null !== $this->sidecarInjector ? $this->sidecarInjector->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return meshConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Telemetry'])) {
            $model->telemetry = $map['Telemetry'];
        }
        if (isset($map['OutboundTrafficPolicy'])) {
            $model->outboundTrafficPolicy = $map['OutboundTrafficPolicy'];
        }
        if (isset($map['Tracing'])) {
            $model->tracing = $map['Tracing'];
        }
        if (isset($map['StrictMtls'])) {
            $model->strictMtls = $map['StrictMtls'];
        }
        if (isset($map['Pilot'])) {
            $model->pilot = pilot::fromMap($map['Pilot']);
        }
        if (isset($map['Mtls'])) {
            $model->mtls = $map['Mtls'];
        }
        if (isset($map['SidecarInjector'])) {
            $model->sidecarInjector = sidecarInjector::fromMap($map['SidecarInjector']);
        }

        return $model;
    }
}
