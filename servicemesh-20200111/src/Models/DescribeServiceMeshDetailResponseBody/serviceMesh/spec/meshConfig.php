<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshDetailResponseBody\serviceMesh\spec;

use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshDetailResponseBody\serviceMesh\spec\meshConfig\accessLog;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshDetailResponseBody\serviceMesh\spec\meshConfig\audit;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshDetailResponseBody\serviceMesh\spec\meshConfig\controlPlaneLogInfo;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshDetailResponseBody\serviceMesh\spec\meshConfig\edition;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshDetailResponseBody\serviceMesh\spec\meshConfig\extraConfiguration;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshDetailResponseBody\serviceMesh\spec\meshConfig\k8sNewAPIsSupport;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshDetailResponseBody\serviceMesh\spec\meshConfig\kiali;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshDetailResponseBody\serviceMesh\spec\meshConfig\localityLB;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshDetailResponseBody\serviceMesh\spec\meshConfig\MSE;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshDetailResponseBody\serviceMesh\spec\meshConfig\OPA;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshDetailResponseBody\serviceMesh\spec\meshConfig\pilot;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshDetailResponseBody\serviceMesh\spec\meshConfig\prometheus;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshDetailResponseBody\serviceMesh\spec\meshConfig\protocolSupport;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshDetailResponseBody\serviceMesh\spec\meshConfig\proxy;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshDetailResponseBody\serviceMesh\spec\meshConfig\sidecarInjector;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshDetailResponseBody\serviceMesh\spec\meshConfig\webAssemblyFilterDeployment;
use AlibabaCloud\Tea\Model;

class meshConfig extends Model
{
    /**
     * @description The configurations of access log collection.
     *
     * @var accessLog
     */
    public $accessLog;

    /**
     * @description The information about mesh audit.
     *
     * @var audit
     */
    public $audit;

    /**
     * @description The configurations of control plane log collection.
     *
     * @var controlPlaneLogInfo
     */
    public $controlPlaneLogInfo;

    /**
     * @description Indicates whether a custom Zipkin system is used. Valid values:
     *
     *   `true`
     *   `false`
     *
     * @example false
     *
     * @var bool
     */
    public $customizedZipkin;

    /**
     * @description The information about the edition.
     *
     * @var edition
     */
    public $edition;

    /**
     * @description Indicates whether the feature that routes traffic to the nearest instance is enabled. Valid values:
     *
     *   `true`
     *   `false`
     *
     * @example true
     *
     * @var bool
     */
    public $enableLocalityLB;

    /**
     * @description The IP ranges in CIDR form to be excluded from redirection to sidecar proxies in the ASM instance.
     *
     * @example 172.16.0.0
     *
     * @var string
     */
    public $excludeIPRanges;

    /**
     * @description The inbound ports to be excluded from redirection to sidecar proxies in the ASM instance.
     *
     * @example 80,81
     *
     * @var string
     */
    public $excludeInboundPorts;

    /**
     * @description The outbound ports to be excluded from redirection to sidecar proxies in the ASM instance.
     *
     * @example 80,81
     *
     * @var string
     */
    public $excludeOutboundPorts;

    /**
     * @description The configurations of additional features for the ASM instance.
     *
     * @var extraConfiguration
     */
    public $extraConfiguration;

    /**
     * @description The IP ranges in CIDR form to redirect to the sidecar proxies in the ASM instance.
     *
     * @example 192.168.0.0/16
     *
     * @var string
     */
    public $includeIPRanges;

    /**
     * @description The information about the Kubernetes API.
     *
     * @var k8sNewAPIsSupport
     */
    public $k8sNewAPIsSupport;

    /**
     * @description The configurations of mesh topology.
     *
     * @var kiali
     */
    public $kiali;

    /**
     * @description The configurations of cross-region load balancing.
     *
     * @var localityLB
     */
    public $localityLB;

    /**
     * @description The configurations of Microservices Engine (MSE).
     *
     * @var MSE
     */
    public $MSE;

    /**
     * @description The information about the Open Policy Agent (OPA) plug-in.
     *
     * @var OPA
     */
    public $OPA;

    /**
     * @description The outbound traffic policy. Valid values:
     *
     *   `ALLOW_ANY`: Outbound traffic to all external services is allowed.
     *   `REGISTRY_ONLY`: Outbound traffic is allowed to only external services that are defined in the service registry of the ASM instance.
     *
     * @example ALLOW_ANY
     *
     * @var string
     */
    public $outboundTrafficPolicy;

    /**
     * @description The Pilot configurations.
     *
     * @var pilot
     */
    public $pilot;

    /**
     * @description The configurations of Prometheus monitoring.
     *
     * @var prometheus
     */
    public $prometheus;

    /**
     * @description The configurations of protocol support.
     *
     * @var protocolSupport
     */
    public $protocolSupport;

    /**
     * @description The proxy configurations.
     *
     * @var proxy
     */
    public $proxy;

    /**
     * @description The configurations of the sidecar injector.
     *
     * @var sidecarInjector
     */
    public $sidecarInjector;

    /**
     * @description Indicates whether Prometheus monitoring is enabled. We recommend that you use [Managed Service for Prometheus](https://arms.console.aliyun.com/). Valid values:
     *
     *   `true`
     *   `false`
     *
     * @example true
     *
     * @var bool
     */
    public $telemetry;

    /**
     * @description Indicates whether tracing analysis is enabled. This feature can be enabled only after [Managed Service for OpenTelemetry](https://tracing-analysis.console.aliyun.com/) is activated. Valid values:
     *
     *   `true`
     *   `false`
     *
     * @example true
     *
     * @var bool
     */
    public $tracing;

    /**
     * @description The configurations of WebAssembly Filter.
     *
     * @var webAssemblyFilterDeployment
     */
    public $webAssemblyFilterDeployment;
    protected $_name = [
        'accessLog'                   => 'AccessLog',
        'audit'                       => 'Audit',
        'controlPlaneLogInfo'         => 'ControlPlaneLogInfo',
        'customizedZipkin'            => 'CustomizedZipkin',
        'edition'                     => 'Edition',
        'enableLocalityLB'            => 'EnableLocalityLB',
        'excludeIPRanges'             => 'ExcludeIPRanges',
        'excludeInboundPorts'         => 'ExcludeInboundPorts',
        'excludeOutboundPorts'        => 'ExcludeOutboundPorts',
        'extraConfiguration'          => 'ExtraConfiguration',
        'includeIPRanges'             => 'IncludeIPRanges',
        'k8sNewAPIsSupport'           => 'K8sNewAPIsSupport',
        'kiali'                       => 'Kiali',
        'localityLB'                  => 'LocalityLB',
        'MSE'                         => 'MSE',
        'OPA'                         => 'OPA',
        'outboundTrafficPolicy'       => 'OutboundTrafficPolicy',
        'pilot'                       => 'Pilot',
        'prometheus'                  => 'Prometheus',
        'protocolSupport'             => 'ProtocolSupport',
        'proxy'                       => 'Proxy',
        'sidecarInjector'             => 'SidecarInjector',
        'telemetry'                   => 'Telemetry',
        'tracing'                     => 'Tracing',
        'webAssemblyFilterDeployment' => 'WebAssemblyFilterDeployment',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessLog) {
            $res['AccessLog'] = null !== $this->accessLog ? $this->accessLog->toMap() : null;
        }
        if (null !== $this->audit) {
            $res['Audit'] = null !== $this->audit ? $this->audit->toMap() : null;
        }
        if (null !== $this->controlPlaneLogInfo) {
            $res['ControlPlaneLogInfo'] = null !== $this->controlPlaneLogInfo ? $this->controlPlaneLogInfo->toMap() : null;
        }
        if (null !== $this->customizedZipkin) {
            $res['CustomizedZipkin'] = $this->customizedZipkin;
        }
        if (null !== $this->edition) {
            $res['Edition'] = null !== $this->edition ? $this->edition->toMap() : null;
        }
        if (null !== $this->enableLocalityLB) {
            $res['EnableLocalityLB'] = $this->enableLocalityLB;
        }
        if (null !== $this->excludeIPRanges) {
            $res['ExcludeIPRanges'] = $this->excludeIPRanges;
        }
        if (null !== $this->excludeInboundPorts) {
            $res['ExcludeInboundPorts'] = $this->excludeInboundPorts;
        }
        if (null !== $this->excludeOutboundPorts) {
            $res['ExcludeOutboundPorts'] = $this->excludeOutboundPorts;
        }
        if (null !== $this->extraConfiguration) {
            $res['ExtraConfiguration'] = null !== $this->extraConfiguration ? $this->extraConfiguration->toMap() : null;
        }
        if (null !== $this->includeIPRanges) {
            $res['IncludeIPRanges'] = $this->includeIPRanges;
        }
        if (null !== $this->k8sNewAPIsSupport) {
            $res['K8sNewAPIsSupport'] = null !== $this->k8sNewAPIsSupport ? $this->k8sNewAPIsSupport->toMap() : null;
        }
        if (null !== $this->kiali) {
            $res['Kiali'] = null !== $this->kiali ? $this->kiali->toMap() : null;
        }
        if (null !== $this->localityLB) {
            $res['LocalityLB'] = null !== $this->localityLB ? $this->localityLB->toMap() : null;
        }
        if (null !== $this->MSE) {
            $res['MSE'] = null !== $this->MSE ? $this->MSE->toMap() : null;
        }
        if (null !== $this->OPA) {
            $res['OPA'] = null !== $this->OPA ? $this->OPA->toMap() : null;
        }
        if (null !== $this->outboundTrafficPolicy) {
            $res['OutboundTrafficPolicy'] = $this->outboundTrafficPolicy;
        }
        if (null !== $this->pilot) {
            $res['Pilot'] = null !== $this->pilot ? $this->pilot->toMap() : null;
        }
        if (null !== $this->prometheus) {
            $res['Prometheus'] = null !== $this->prometheus ? $this->prometheus->toMap() : null;
        }
        if (null !== $this->protocolSupport) {
            $res['ProtocolSupport'] = null !== $this->protocolSupport ? $this->protocolSupport->toMap() : null;
        }
        if (null !== $this->proxy) {
            $res['Proxy'] = null !== $this->proxy ? $this->proxy->toMap() : null;
        }
        if (null !== $this->sidecarInjector) {
            $res['SidecarInjector'] = null !== $this->sidecarInjector ? $this->sidecarInjector->toMap() : null;
        }
        if (null !== $this->telemetry) {
            $res['Telemetry'] = $this->telemetry;
        }
        if (null !== $this->tracing) {
            $res['Tracing'] = $this->tracing;
        }
        if (null !== $this->webAssemblyFilterDeployment) {
            $res['WebAssemblyFilterDeployment'] = null !== $this->webAssemblyFilterDeployment ? $this->webAssemblyFilterDeployment->toMap() : null;
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
        if (isset($map['AccessLog'])) {
            $model->accessLog = accessLog::fromMap($map['AccessLog']);
        }
        if (isset($map['Audit'])) {
            $model->audit = audit::fromMap($map['Audit']);
        }
        if (isset($map['ControlPlaneLogInfo'])) {
            $model->controlPlaneLogInfo = controlPlaneLogInfo::fromMap($map['ControlPlaneLogInfo']);
        }
        if (isset($map['CustomizedZipkin'])) {
            $model->customizedZipkin = $map['CustomizedZipkin'];
        }
        if (isset($map['Edition'])) {
            $model->edition = edition::fromMap($map['Edition']);
        }
        if (isset($map['EnableLocalityLB'])) {
            $model->enableLocalityLB = $map['EnableLocalityLB'];
        }
        if (isset($map['ExcludeIPRanges'])) {
            $model->excludeIPRanges = $map['ExcludeIPRanges'];
        }
        if (isset($map['ExcludeInboundPorts'])) {
            $model->excludeInboundPorts = $map['ExcludeInboundPorts'];
        }
        if (isset($map['ExcludeOutboundPorts'])) {
            $model->excludeOutboundPorts = $map['ExcludeOutboundPorts'];
        }
        if (isset($map['ExtraConfiguration'])) {
            $model->extraConfiguration = extraConfiguration::fromMap($map['ExtraConfiguration']);
        }
        if (isset($map['IncludeIPRanges'])) {
            $model->includeIPRanges = $map['IncludeIPRanges'];
        }
        if (isset($map['K8sNewAPIsSupport'])) {
            $model->k8sNewAPIsSupport = k8sNewAPIsSupport::fromMap($map['K8sNewAPIsSupport']);
        }
        if (isset($map['Kiali'])) {
            $model->kiali = kiali::fromMap($map['Kiali']);
        }
        if (isset($map['LocalityLB'])) {
            $model->localityLB = localityLB::fromMap($map['LocalityLB']);
        }
        if (isset($map['MSE'])) {
            $model->MSE = MSE::fromMap($map['MSE']);
        }
        if (isset($map['OPA'])) {
            $model->OPA = OPA::fromMap($map['OPA']);
        }
        if (isset($map['OutboundTrafficPolicy'])) {
            $model->outboundTrafficPolicy = $map['OutboundTrafficPolicy'];
        }
        if (isset($map['Pilot'])) {
            $model->pilot = pilot::fromMap($map['Pilot']);
        }
        if (isset($map['Prometheus'])) {
            $model->prometheus = prometheus::fromMap($map['Prometheus']);
        }
        if (isset($map['ProtocolSupport'])) {
            $model->protocolSupport = protocolSupport::fromMap($map['ProtocolSupport']);
        }
        if (isset($map['Proxy'])) {
            $model->proxy = proxy::fromMap($map['Proxy']);
        }
        if (isset($map['SidecarInjector'])) {
            $model->sidecarInjector = sidecarInjector::fromMap($map['SidecarInjector']);
        }
        if (isset($map['Telemetry'])) {
            $model->telemetry = $map['Telemetry'];
        }
        if (isset($map['Tracing'])) {
            $model->tracing = $map['Tracing'];
        }
        if (isset($map['WebAssemblyFilterDeployment'])) {
            $model->webAssemblyFilterDeployment = webAssemblyFilterDeployment::fromMap($map['WebAssemblyFilterDeployment']);
        }

        return $model;
    }
}
