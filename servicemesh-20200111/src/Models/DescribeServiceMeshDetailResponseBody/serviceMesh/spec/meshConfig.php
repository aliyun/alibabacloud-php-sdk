<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshDetailResponseBody\serviceMesh\spec;

use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshDetailResponseBody\serviceMesh\spec\meshConfig\audit;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshDetailResponseBody\serviceMesh\spec\meshConfig\OPA;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshDetailResponseBody\serviceMesh\spec\meshConfig\pilot;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshDetailResponseBody\serviceMesh\spec\meshConfig\proxy;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshDetailResponseBody\serviceMesh\spec\meshConfig\sidecarInjector;
use AlibabaCloud\Tea\Model;

class meshConfig extends Model
{
    /**
     * @var bool
     */
    public $telemetry;

    /**
     * @var OPA
     */
    public $OPA;

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
    public $enableLocalityLB;

    /**
     * @var audit
     */
    public $audit;

    /**
     * @var pilot
     */
    public $pilot;

    /**
     * @var bool
     */
    public $customizedZipkin;

    /**
     * @var string
     */
    public $includeIPRanges;

    /**
     * @var sidecarInjector
     */
    public $sidecarInjector;

    /**
     * @var proxy
     */
    public $proxy;
    protected $_name = [
        'telemetry'             => 'Telemetry',
        'OPA'                   => 'OPA',
        'outboundTrafficPolicy' => 'OutboundTrafficPolicy',
        'tracing'               => 'Tracing',
        'enableLocalityLB'      => 'EnableLocalityLB',
        'audit'                 => 'Audit',
        'pilot'                 => 'Pilot',
        'customizedZipkin'      => 'CustomizedZipkin',
        'includeIPRanges'       => 'IncludeIPRanges',
        'sidecarInjector'       => 'SidecarInjector',
        'proxy'                 => 'Proxy',
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
        if (null !== $this->OPA) {
            $res['OPA'] = null !== $this->OPA ? $this->OPA->toMap() : null;
        }
        if (null !== $this->outboundTrafficPolicy) {
            $res['OutboundTrafficPolicy'] = $this->outboundTrafficPolicy;
        }
        if (null !== $this->tracing) {
            $res['Tracing'] = $this->tracing;
        }
        if (null !== $this->enableLocalityLB) {
            $res['EnableLocalityLB'] = $this->enableLocalityLB;
        }
        if (null !== $this->audit) {
            $res['Audit'] = null !== $this->audit ? $this->audit->toMap() : null;
        }
        if (null !== $this->pilot) {
            $res['Pilot'] = null !== $this->pilot ? $this->pilot->toMap() : null;
        }
        if (null !== $this->customizedZipkin) {
            $res['CustomizedZipkin'] = $this->customizedZipkin;
        }
        if (null !== $this->includeIPRanges) {
            $res['IncludeIPRanges'] = $this->includeIPRanges;
        }
        if (null !== $this->sidecarInjector) {
            $res['SidecarInjector'] = null !== $this->sidecarInjector ? $this->sidecarInjector->toMap() : null;
        }
        if (null !== $this->proxy) {
            $res['Proxy'] = null !== $this->proxy ? $this->proxy->toMap() : null;
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
        if (isset($map['OPA'])) {
            $model->OPA = OPA::fromMap($map['OPA']);
        }
        if (isset($map['OutboundTrafficPolicy'])) {
            $model->outboundTrafficPolicy = $map['OutboundTrafficPolicy'];
        }
        if (isset($map['Tracing'])) {
            $model->tracing = $map['Tracing'];
        }
        if (isset($map['EnableLocalityLB'])) {
            $model->enableLocalityLB = $map['EnableLocalityLB'];
        }
        if (isset($map['Audit'])) {
            $model->audit = audit::fromMap($map['Audit']);
        }
        if (isset($map['Pilot'])) {
            $model->pilot = pilot::fromMap($map['Pilot']);
        }
        if (isset($map['CustomizedZipkin'])) {
            $model->customizedZipkin = $map['CustomizedZipkin'];
        }
        if (isset($map['IncludeIPRanges'])) {
            $model->includeIPRanges = $map['IncludeIPRanges'];
        }
        if (isset($map['SidecarInjector'])) {
            $model->sidecarInjector = sidecarInjector::fromMap($map['SidecarInjector']);
        }
        if (isset($map['Proxy'])) {
            $model->proxy = proxy::fromMap($map['Proxy']);
        }

        return $model;
    }
}
