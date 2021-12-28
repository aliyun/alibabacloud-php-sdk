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
     * @var accessLog
     */
    public $accessLog;

    /**
     * @var audit
     */
    public $audit;

    /**
     * @var controlPlaneLogInfo
     */
    public $controlPlaneLogInfo;

    /**
     * @var bool
     */
    public $customizedZipkin;

    /**
     * @var edition
     */
    public $edition;

    /**
     * @var bool
     */
    public $enableLocalityLB;

    /**
     * @var string
     */
    public $excludeIPRanges;

    /**
     * @var string
     */
    public $excludeInboundPorts;

    /**
     * @var string
     */
    public $excludeOutboundPorts;

    /**
     * @var extraConfiguration
     */
    public $extraConfiguration;

    /**
     * @var string
     */
    public $includeIPRanges;

    /**
     * @var k8sNewAPIsSupport
     */
    public $k8sNewAPIsSupport;

    /**
     * @var kiali
     */
    public $kiali;

    /**
     * @var localityLB
     */
    public $localityLB;

    /**
     * @var MSE
     */
    public $MSE;

    /**
     * @var OPA
     */
    public $OPA;

    /**
     * @var string
     */
    public $outboundTrafficPolicy;

    /**
     * @var pilot
     */
    public $pilot;

    /**
     * @var prometheus
     */
    public $prometheus;

    /**
     * @var protocolSupport
     */
    public $protocolSupport;

    /**
     * @var proxy
     */
    public $proxy;

    /**
     * @var sidecarInjector
     */
    public $sidecarInjector;

    /**
     * @var bool
     */
    public $telemetry;

    /**
     * @var bool
     */
    public $tracing;

    /**
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
