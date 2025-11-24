<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshesResponseBody\serviceMeshes\spec;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshesResponseBody\serviceMeshes\spec\meshConfig\extraConfiguration;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshesResponseBody\serviceMeshes\spec\meshConfig\pilot;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshesResponseBody\serviceMeshes\spec\meshConfig\sidecarInjector;

class meshConfig extends Model
{
    /**
     * @var extraConfiguration
     */
    public $extraConfiguration;

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
        'extraConfiguration' => 'ExtraConfiguration',
        'mtls' => 'Mtls',
        'outboundTrafficPolicy' => 'OutboundTrafficPolicy',
        'pilot' => 'Pilot',
        'sidecarInjector' => 'SidecarInjector',
        'strictMtls' => 'StrictMtls',
        'telemetry' => 'Telemetry',
        'tracing' => 'Tracing',
    ];

    public function validate()
    {
        if (null !== $this->extraConfiguration) {
            $this->extraConfiguration->validate();
        }
        if (null !== $this->pilot) {
            $this->pilot->validate();
        }
        if (null !== $this->sidecarInjector) {
            $this->sidecarInjector->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->extraConfiguration) {
            $res['ExtraConfiguration'] = null !== $this->extraConfiguration ? $this->extraConfiguration->toArray($noStream) : $this->extraConfiguration;
        }

        if (null !== $this->mtls) {
            $res['Mtls'] = $this->mtls;
        }

        if (null !== $this->outboundTrafficPolicy) {
            $res['OutboundTrafficPolicy'] = $this->outboundTrafficPolicy;
        }

        if (null !== $this->pilot) {
            $res['Pilot'] = null !== $this->pilot ? $this->pilot->toArray($noStream) : $this->pilot;
        }

        if (null !== $this->sidecarInjector) {
            $res['SidecarInjector'] = null !== $this->sidecarInjector ? $this->sidecarInjector->toArray($noStream) : $this->sidecarInjector;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExtraConfiguration'])) {
            $model->extraConfiguration = extraConfiguration::fromMap($map['ExtraConfiguration']);
        }

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
