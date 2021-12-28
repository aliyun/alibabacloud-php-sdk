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
    public $mtls;

    /**
     * @var string
     */
    public $outboundTrafficPolicy;

    /**
     * @var pilot
     */
    public $pilot;

    /**
     * @var sidecarInjector
     */
    public $sidecarInjector;

    /**
     * @var bool
     */
    public $strictMtls;

    /**
     * @var bool
     */
    public $telemetry;

    /**
     * @var bool
     */
    public $tracing;
    protected $_name = [
        'mtls'                  => 'Mtls',
        'outboundTrafficPolicy' => 'OutboundTrafficPolicy',
        'pilot'                 => 'Pilot',
        'sidecarInjector'       => 'SidecarInjector',
        'strictMtls'            => 'StrictMtls',
        'telemetry'             => 'Telemetry',
        'tracing'               => 'Tracing',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->mtls) {
            $res['Mtls'] = $this->mtls;
        }
        if (null !== $this->outboundTrafficPolicy) {
            $res['OutboundTrafficPolicy'] = $this->outboundTrafficPolicy;
        }
        if (null !== $this->pilot) {
            $res['Pilot'] = null !== $this->pilot ? $this->pilot->toMap() : null;
        }
        if (null !== $this->sidecarInjector) {
            $res['SidecarInjector'] = null !== $this->sidecarInjector ? $this->sidecarInjector->toMap() : null;
        }
        if (null !== $this->strictMtls) {
            $res['StrictMtls'] = $this->strictMtls;
        }
        if (null !== $this->telemetry) {
            $res['Telemetry'] = $this->telemetry;
        }
        if (null !== $this->tracing) {
            $res['Tracing'] = $this->tracing;
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
        if (isset($map['Mtls'])) {
            $model->mtls = $map['Mtls'];
        }
        if (isset($map['OutboundTrafficPolicy'])) {
            $model->outboundTrafficPolicy = $map['OutboundTrafficPolicy'];
        }
        if (isset($map['Pilot'])) {
            $model->pilot = pilot::fromMap($map['Pilot']);
        }
        if (isset($map['SidecarInjector'])) {
            $model->sidecarInjector = sidecarInjector::fromMap($map['SidecarInjector']);
        }
        if (isset($map['StrictMtls'])) {
            $model->strictMtls = $map['StrictMtls'];
        }
        if (isset($map['Telemetry'])) {
            $model->telemetry = $map['Telemetry'];
        }
        if (isset($map['Tracing'])) {
            $model->tracing = $map['Tracing'];
        }

        return $model;
    }
}
