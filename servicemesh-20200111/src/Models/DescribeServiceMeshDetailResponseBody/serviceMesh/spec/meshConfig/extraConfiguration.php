<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshDetailResponseBody\serviceMesh\spec\meshConfig;

use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshDetailResponseBody\serviceMesh\spec\meshConfig\extraConfiguration\CRAggregationConfiguration;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshDetailResponseBody\serviceMesh\spec\meshConfig\extraConfiguration\istioCRHistory;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshDetailResponseBody\serviceMesh\spec\meshConfig\extraConfiguration\lifecycle;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshDetailResponseBody\serviceMesh\spec\meshConfig\extraConfiguration\multiBuffer;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshDetailResponseBody\serviceMesh\spec\meshConfig\extraConfiguration\OPAScopeInjection;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshDetailResponseBody\serviceMesh\spec\meshConfig\extraConfiguration\rateLimit;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshDetailResponseBody\serviceMesh\spec\meshConfig\extraConfiguration\sidecarProxyInitResourceLimit;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshDetailResponseBody\serviceMesh\spec\meshConfig\extraConfiguration\sidecarProxyInitResourceRequest;
use AlibabaCloud\Tea\Model;

class extraConfiguration extends Model
{
    /**
     * @var CRAggregationConfiguration
     */
    public $CRAggregationConfiguration;

    /**
     * @var bool
     */
    public $CRAggregationEnabled;

    /**
     * @var mixed[][]
     */
    public $discoverySelectors;

    /**
     * @var istioCRHistory
     */
    public $istioCRHistory;

    /**
     * @var lifecycle
     */
    public $lifecycle;

    /**
     * @var multiBuffer
     */
    public $multiBuffer;

    /**
     * @var OPAScopeInjection
     */
    public $OPAScopeInjection;

    /**
     * @var rateLimit
     */
    public $rateLimit;

    /**
     * @var sidecarProxyInitResourceLimit
     */
    public $sidecarProxyInitResourceLimit;

    /**
     * @var sidecarProxyInitResourceRequest
     */
    public $sidecarProxyInitResourceRequest;

    /**
     * @var string
     */
    public $terminationDrainDuration;
    protected $_name = [
        'CRAggregationConfiguration'      => 'CRAggregationConfiguration',
        'CRAggregationEnabled'            => 'CRAggregationEnabled',
        'discoverySelectors'              => 'DiscoverySelectors',
        'istioCRHistory'                  => 'IstioCRHistory',
        'lifecycle'                       => 'Lifecycle',
        'multiBuffer'                     => 'MultiBuffer',
        'OPAScopeInjection'               => 'OPAScopeInjection',
        'rateLimit'                       => 'RateLimit',
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
        if (null !== $this->OPAScopeInjection) {
            $res['OPAScopeInjection'] = null !== $this->OPAScopeInjection ? $this->OPAScopeInjection->toMap() : null;
        }
        if (null !== $this->rateLimit) {
            $res['RateLimit'] = null !== $this->rateLimit ? $this->rateLimit->toMap() : null;
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
        if (isset($map['OPAScopeInjection'])) {
            $model->OPAScopeInjection = OPAScopeInjection::fromMap($map['OPAScopeInjection']);
        }
        if (isset($map['RateLimit'])) {
            $model->rateLimit = rateLimit::fromMap($map['RateLimit']);
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
