<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshDetailResponseBody\serviceMesh\spec\meshConfig;

use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshDetailResponseBody\serviceMesh\spec\meshConfig\extraConfiguration\accessLogExtraConf;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshDetailResponseBody\serviceMesh\spec\meshConfig\extraConfiguration\adaptiveXdsConfiguration;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshDetailResponseBody\serviceMesh\spec\meshConfig\extraConfiguration\autoDiagnosis;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshDetailResponseBody\serviceMesh\spec\meshConfig\extraConfiguration\CRAggregationConfiguration;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshDetailResponseBody\serviceMesh\spec\meshConfig\extraConfiguration\istioCRHistory;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshDetailResponseBody\serviceMesh\spec\meshConfig\extraConfiguration\lifecycle;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshDetailResponseBody\serviceMesh\spec\meshConfig\extraConfiguration\multiBuffer;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshDetailResponseBody\serviceMesh\spec\meshConfig\extraConfiguration\NFDConfiguration;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshDetailResponseBody\serviceMesh\spec\meshConfig\extraConfiguration\OPAScopeInjection;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshDetailResponseBody\serviceMesh\spec\meshConfig\extraConfiguration\sidecarProxyInitResourceLimit;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshDetailResponseBody\serviceMesh\spec\meshConfig\extraConfiguration\sidecarProxyInitResourceRequest;
use AlibabaCloud\Tea\Model;

class extraConfiguration extends Model
{
    /**
     * @description The configurations of additional features for access log collection.
     *
     * @var accessLogExtraConf
     */
    public $accessLogExtraConf;

    /**
     * @description The configurations of adaptive xDS optimization.
     *
     * @var adaptiveXdsConfiguration
     */
    public $adaptiveXdsConfiguration;

    /**
     * @description The configurations of automatic diagnostics for the ASM instance.
     *
     * @var autoDiagnosis
     */
    public $autoDiagnosis;

    /**
     * @description Access to Istio resources by using the Kubernetes API on the data plane.
     *
     * @var CRAggregationConfiguration
     */
    public $CRAggregationConfiguration;

    /**
     * @description Indicates whether the Kubernetes API of clusters on the data plane can be used to access Istio resources. Valid values:
     *
     *   `true`
     *   `false`
     *
     * @example false
     *
     * @var bool
     */
    public $CRAggregationEnabled;

    /**
     * @description The label selectors used to specify the namespaces of the clusters on the data plane. The control plane discovers and processes only application services in the specified namespaces.
     *
     * @var mixed[][]
     */
    public $discoverySelectors;

    /**
     * @description The configurations of the rollback feature for Istio resources.
     *
     * @var istioCRHistory
     */
    public $istioCRHistory;

    /**
     * @description The lifecycle of Istio Proxy.
     *
     * @var lifecycle
     */
    public $lifecycle;

    /**
     * @description The information about Transport Layer Security (TLS) acceleration based on MulitiBuffer.
     *
     * @var multiBuffer
     */
    public $multiBuffer;

    /**
     * @description The configurations of Node Feature Discovery (NFD).
     *
     * @var NFDConfiguration
     */
    public $NFDConfiguration;

    /**
     * @description The configurations of the feature of controlling the OPA injection scope.
     *
     * @var OPAScopeInjection
     */
    public $OPAScopeInjection;

    /**
     * @description The resource limits on the istio-init container.
     *
     * @var sidecarProxyInitResourceLimit
     */
    public $sidecarProxyInitResourceLimit;

    /**
     * @description The resources that are required by the istio-init container.
     *
     * @var sidecarProxyInitResourceRequest
     */
    public $sidecarProxyInitResourceRequest;

    /**
     * @description The maximum period of time that Istio Proxy waits for a request to end.
     *
     * @example 5s
     *
     * @var string
     */
    public $terminationDrainDuration;
    protected $_name = [
        'accessLogExtraConf'              => 'AccessLogExtraConf',
        'adaptiveXdsConfiguration'        => 'AdaptiveXdsConfiguration',
        'autoDiagnosis'                   => 'AutoDiagnosis',
        'CRAggregationConfiguration'      => 'CRAggregationConfiguration',
        'CRAggregationEnabled'            => 'CRAggregationEnabled',
        'discoverySelectors'              => 'DiscoverySelectors',
        'istioCRHistory'                  => 'IstioCRHistory',
        'lifecycle'                       => 'Lifecycle',
        'multiBuffer'                     => 'MultiBuffer',
        'NFDConfiguration'                => 'NFDConfiguration',
        'OPAScopeInjection'               => 'OPAScopeInjection',
        'sidecarProxyInitResourceLimit'   => 'SidecarProxyInitResourceLimit',
        'sidecarProxyInitResourceRequest' => 'SidecarProxyInitResourceRequest',
        'terminationDrainDuration'        => 'TerminationDrainDuration',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessLogExtraConf) {
            $res['AccessLogExtraConf'] = null !== $this->accessLogExtraConf ? $this->accessLogExtraConf->toMap() : null;
        }
        if (null !== $this->adaptiveXdsConfiguration) {
            $res['AdaptiveXdsConfiguration'] = null !== $this->adaptiveXdsConfiguration ? $this->adaptiveXdsConfiguration->toMap() : null;
        }
        if (null !== $this->autoDiagnosis) {
            $res['AutoDiagnosis'] = null !== $this->autoDiagnosis ? $this->autoDiagnosis->toMap() : null;
        }
        if (null !== $this->CRAggregationConfiguration) {
            $res['CRAggregationConfiguration'] = null !== $this->CRAggregationConfiguration ? $this->CRAggregationConfiguration->toMap() : null;
        }
        if (null !== $this->CRAggregationEnabled) {
            $res['CRAggregationEnabled'] = $this->CRAggregationEnabled;
        }
        if (null !== $this->discoverySelectors) {
            $res['DiscoverySelectors'] = $this->discoverySelectors;
        }
        if (null !== $this->istioCRHistory) {
            $res['IstioCRHistory'] = null !== $this->istioCRHistory ? $this->istioCRHistory->toMap() : null;
        }
        if (null !== $this->lifecycle) {
            $res['Lifecycle'] = null !== $this->lifecycle ? $this->lifecycle->toMap() : null;
        }
        if (null !== $this->multiBuffer) {
            $res['MultiBuffer'] = null !== $this->multiBuffer ? $this->multiBuffer->toMap() : null;
        }
        if (null !== $this->NFDConfiguration) {
            $res['NFDConfiguration'] = null !== $this->NFDConfiguration ? $this->NFDConfiguration->toMap() : null;
        }
        if (null !== $this->OPAScopeInjection) {
            $res['OPAScopeInjection'] = null !== $this->OPAScopeInjection ? $this->OPAScopeInjection->toMap() : null;
        }
        if (null !== $this->sidecarProxyInitResourceLimit) {
            $res['SidecarProxyInitResourceLimit'] = null !== $this->sidecarProxyInitResourceLimit ? $this->sidecarProxyInitResourceLimit->toMap() : null;
        }
        if (null !== $this->sidecarProxyInitResourceRequest) {
            $res['SidecarProxyInitResourceRequest'] = null !== $this->sidecarProxyInitResourceRequest ? $this->sidecarProxyInitResourceRequest->toMap() : null;
        }
        if (null !== $this->terminationDrainDuration) {
            $res['TerminationDrainDuration'] = $this->terminationDrainDuration;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return extraConfiguration
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessLogExtraConf'])) {
            $model->accessLogExtraConf = accessLogExtraConf::fromMap($map['AccessLogExtraConf']);
        }
        if (isset($map['AdaptiveXdsConfiguration'])) {
            $model->adaptiveXdsConfiguration = adaptiveXdsConfiguration::fromMap($map['AdaptiveXdsConfiguration']);
        }
        if (isset($map['AutoDiagnosis'])) {
            $model->autoDiagnosis = autoDiagnosis::fromMap($map['AutoDiagnosis']);
        }
        if (isset($map['CRAggregationConfiguration'])) {
            $model->CRAggregationConfiguration = CRAggregationConfiguration::fromMap($map['CRAggregationConfiguration']);
        }
        if (isset($map['CRAggregationEnabled'])) {
            $model->CRAggregationEnabled = $map['CRAggregationEnabled'];
        }
        if (isset($map['DiscoverySelectors'])) {
            if (!empty($map['DiscoverySelectors'])) {
                $model->discoverySelectors = $map['DiscoverySelectors'];
            }
        }
        if (isset($map['IstioCRHistory'])) {
            $model->istioCRHistory = istioCRHistory::fromMap($map['IstioCRHistory']);
        }
        if (isset($map['Lifecycle'])) {
            $model->lifecycle = lifecycle::fromMap($map['Lifecycle']);
        }
        if (isset($map['MultiBuffer'])) {
            $model->multiBuffer = multiBuffer::fromMap($map['MultiBuffer']);
        }
        if (isset($map['NFDConfiguration'])) {
            $model->NFDConfiguration = NFDConfiguration::fromMap($map['NFDConfiguration']);
        }
        if (isset($map['OPAScopeInjection'])) {
            $model->OPAScopeInjection = OPAScopeInjection::fromMap($map['OPAScopeInjection']);
        }
        if (isset($map['SidecarProxyInitResourceLimit'])) {
            $model->sidecarProxyInitResourceLimit = sidecarProxyInitResourceLimit::fromMap($map['SidecarProxyInitResourceLimit']);
        }
        if (isset($map['SidecarProxyInitResourceRequest'])) {
            $model->sidecarProxyInitResourceRequest = sidecarProxyInitResourceRequest::fromMap($map['SidecarProxyInitResourceRequest']);
        }
        if (isset($map['TerminationDrainDuration'])) {
            $model->terminationDrainDuration = $map['TerminationDrainDuration'];
        }

        return $model;
    }
}
