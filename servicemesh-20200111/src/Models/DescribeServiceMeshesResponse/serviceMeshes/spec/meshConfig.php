<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshesResponse\serviceMeshes\spec;

use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshesResponse\serviceMeshes\spec\meshConfig\pilot;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshesResponse\serviceMeshes\spec\meshConfig\sidecarInjector;
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
     * @var bool
     */
    public $strictMtls;

    /**
     * @var bool
     */
    public $tracing;

    /**
     * @var bool
     */
    public $telemetry;

    /**
     * @var pilot
     */
    public $pilot;

    /**
     * @var sidecarInjector
     */
    public $sidecarInjector;
    protected $_name = [
        'mtls'                  => 'Mtls',
        'outboundTrafficPolicy' => 'OutboundTrafficPolicy',
        'strictMtls'            => 'StrictMtls',
        'tracing'               => 'Tracing',
        'telemetry'             => 'Telemetry',
        'pilot'                 => 'Pilot',
        'sidecarInjector'       => 'SidecarInjector',
    ];

    public function validate()
    {
        Model::validateRequired('mtls', $this->mtls, true);
        Model::validateRequired('outboundTrafficPolicy', $this->outboundTrafficPolicy, true);
        Model::validateRequired('strictMtls', $this->strictMtls, true);
        Model::validateRequired('tracing', $this->tracing, true);
        Model::validateRequired('telemetry', $this->telemetry, true);
        Model::validateRequired('pilot', $this->pilot, true);
        Model::validateRequired('sidecarInjector', $this->sidecarInjector, true);
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
        if (null !== $this->strictMtls) {
            $res['StrictMtls'] = $this->strictMtls;
        }
        if (null !== $this->tracing) {
            $res['Tracing'] = $this->tracing;
        }
        if (null !== $this->telemetry) {
            $res['Telemetry'] = $this->telemetry;
        }
        if (null !== $this->pilot) {
            $res['Pilot'] = null !== $this->pilot ? $this->pilot->toMap() : null;
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
        if (isset($map['Mtls'])) {
            $model->mtls = $map['Mtls'];
        }
        if (isset($map['OutboundTrafficPolicy'])) {
            $model->outboundTrafficPolicy = $map['OutboundTrafficPolicy'];
        }
        if (isset($map['StrictMtls'])) {
            $model->strictMtls = $map['StrictMtls'];
        }
        if (isset($map['Tracing'])) {
            $model->tracing = $map['Tracing'];
        }
        if (isset($map['Telemetry'])) {
            $model->telemetry = $map['Telemetry'];
        }
        if (isset($map['Pilot'])) {
            $model->pilot = pilot::fromMap($map['Pilot']);
        }
        if (isset($map['SidecarInjector'])) {
            $model->sidecarInjector = sidecarInjector::fromMap($map['SidecarInjector']);
        }

        return $model;
    }
}
