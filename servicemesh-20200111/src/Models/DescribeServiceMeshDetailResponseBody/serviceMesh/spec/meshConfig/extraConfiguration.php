<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshDetailResponseBody\serviceMesh\spec\meshConfig;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshDetailResponseBody\serviceMesh\spec\meshConfig\extraConfiguration\accessLogExtraConf;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshDetailResponseBody\serviceMesh\spec\meshConfig\extraConfiguration\adaptiveXdsConfiguration;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshDetailResponseBody\serviceMesh\spec\meshConfig\extraConfiguration\autoDiagnosis;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshDetailResponseBody\serviceMesh\spec\meshConfig\extraConfiguration\CRAggregationConfiguration;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshDetailResponseBody\serviceMesh\spec\meshConfig\extraConfiguration\istioCRHistory;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshDetailResponseBody\serviceMesh\spec\meshConfig\extraConfiguration\istiodExtraConfiguration;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshDetailResponseBody\serviceMesh\spec\meshConfig\extraConfiguration\lifecycle;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshDetailResponseBody\serviceMesh\spec\meshConfig\extraConfiguration\multiBuffer;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshDetailResponseBody\serviceMesh\spec\meshConfig\extraConfiguration\NFDConfiguration;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshDetailResponseBody\serviceMesh\spec\meshConfig\extraConfiguration\OPAScopeInjection;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshDetailResponseBody\serviceMesh\spec\meshConfig\extraConfiguration\playground;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshDetailResponseBody\serviceMesh\spec\meshConfig\extraConfiguration\sidecarProxyInitResourceLimit;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshDetailResponseBody\serviceMesh\spec\meshConfig\extraConfiguration\sidecarProxyInitResourceRequest;

class extraConfiguration extends Model
{
    /**
     * @var accessLogExtraConf
     */
    public $accessLogExtraConf;

    /**
     * @var adaptiveXdsConfiguration
     */
    public $adaptiveXdsConfiguration;

    /**
     * @var autoDiagnosis
     */
    public $autoDiagnosis;

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
     * @var istiodExtraConfiguration
     */
    public $istiodExtraConfiguration;

    /**
     * @var lifecycle
     */
    public $lifecycle;

    /**
     * @var multiBuffer
     */
    public $multiBuffer;

    /**
     * @var NFDConfiguration
     */
    public $NFDConfiguration;

    /**
     * @var OPAScopeInjection
     */
    public $OPAScopeInjection;

    /**
     * @var playground
     */
    public $playground;

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
        'accessLogExtraConf' => 'AccessLogExtraConf',
        'adaptiveXdsConfiguration' => 'AdaptiveXdsConfiguration',
        'autoDiagnosis' => 'AutoDiagnosis',
        'CRAggregationConfiguration' => 'CRAggregationConfiguration',
        'CRAggregationEnabled' => 'CRAggregationEnabled',
        'discoverySelectors' => 'DiscoverySelectors',
        'istioCRHistory' => 'IstioCRHistory',
        'istiodExtraConfiguration' => 'IstiodExtraConfiguration',
        'lifecycle' => 'Lifecycle',
        'multiBuffer' => 'MultiBuffer',
        'NFDConfiguration' => 'NFDConfiguration',
        'OPAScopeInjection' => 'OPAScopeInjection',
        'playground' => 'Playground',
        'sidecarProxyInitResourceLimit' => 'SidecarProxyInitResourceLimit',
        'sidecarProxyInitResourceRequest' => 'SidecarProxyInitResourceRequest',
        'terminationDrainDuration' => 'TerminationDrainDuration',
    ];

    public function validate()
    {
        if (null !== $this->accessLogExtraConf) {
            $this->accessLogExtraConf->validate();
        }
        if (null !== $this->adaptiveXdsConfiguration) {
            $this->adaptiveXdsConfiguration->validate();
        }
        if (null !== $this->autoDiagnosis) {
            $this->autoDiagnosis->validate();
        }
        if (null !== $this->CRAggregationConfiguration) {
            $this->CRAggregationConfiguration->validate();
        }
        if (\is_array($this->discoverySelectors)) {
            Model::validateArray($this->discoverySelectors);
        }
        if (null !== $this->istioCRHistory) {
            $this->istioCRHistory->validate();
        }
        if (null !== $this->istiodExtraConfiguration) {
            $this->istiodExtraConfiguration->validate();
        }
        if (null !== $this->lifecycle) {
            $this->lifecycle->validate();
        }
        if (null !== $this->multiBuffer) {
            $this->multiBuffer->validate();
        }
        if (null !== $this->NFDConfiguration) {
            $this->NFDConfiguration->validate();
        }
        if (null !== $this->OPAScopeInjection) {
            $this->OPAScopeInjection->validate();
        }
        if (null !== $this->playground) {
            $this->playground->validate();
        }
        if (null !== $this->sidecarProxyInitResourceLimit) {
            $this->sidecarProxyInitResourceLimit->validate();
        }
        if (null !== $this->sidecarProxyInitResourceRequest) {
            $this->sidecarProxyInitResourceRequest->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessLogExtraConf) {
            $res['AccessLogExtraConf'] = null !== $this->accessLogExtraConf ? $this->accessLogExtraConf->toArray($noStream) : $this->accessLogExtraConf;
        }

        if (null !== $this->adaptiveXdsConfiguration) {
            $res['AdaptiveXdsConfiguration'] = null !== $this->adaptiveXdsConfiguration ? $this->adaptiveXdsConfiguration->toArray($noStream) : $this->adaptiveXdsConfiguration;
        }

        if (null !== $this->autoDiagnosis) {
            $res['AutoDiagnosis'] = null !== $this->autoDiagnosis ? $this->autoDiagnosis->toArray($noStream) : $this->autoDiagnosis;
        }

        if (null !== $this->CRAggregationConfiguration) {
            $res['CRAggregationConfiguration'] = null !== $this->CRAggregationConfiguration ? $this->CRAggregationConfiguration->toArray($noStream) : $this->CRAggregationConfiguration;
        }

        if (null !== $this->CRAggregationEnabled) {
            $res['CRAggregationEnabled'] = $this->CRAggregationEnabled;
        }

        if (null !== $this->discoverySelectors) {
            if (\is_array($this->discoverySelectors)) {
                $res['DiscoverySelectors'] = [];
                $n1 = 0;
                foreach ($this->discoverySelectors as $item1) {
                    if (\is_array($item1)) {
                        $res['DiscoverySelectors'][$n1] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $res['DiscoverySelectors'][$n1][$key2] = $value2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        if (null !== $this->istioCRHistory) {
            $res['IstioCRHistory'] = null !== $this->istioCRHistory ? $this->istioCRHistory->toArray($noStream) : $this->istioCRHistory;
        }

        if (null !== $this->istiodExtraConfiguration) {
            $res['IstiodExtraConfiguration'] = null !== $this->istiodExtraConfiguration ? $this->istiodExtraConfiguration->toArray($noStream) : $this->istiodExtraConfiguration;
        }

        if (null !== $this->lifecycle) {
            $res['Lifecycle'] = null !== $this->lifecycle ? $this->lifecycle->toArray($noStream) : $this->lifecycle;
        }

        if (null !== $this->multiBuffer) {
            $res['MultiBuffer'] = null !== $this->multiBuffer ? $this->multiBuffer->toArray($noStream) : $this->multiBuffer;
        }

        if (null !== $this->NFDConfiguration) {
            $res['NFDConfiguration'] = null !== $this->NFDConfiguration ? $this->NFDConfiguration->toArray($noStream) : $this->NFDConfiguration;
        }

        if (null !== $this->OPAScopeInjection) {
            $res['OPAScopeInjection'] = null !== $this->OPAScopeInjection ? $this->OPAScopeInjection->toArray($noStream) : $this->OPAScopeInjection;
        }

        if (null !== $this->playground) {
            $res['Playground'] = null !== $this->playground ? $this->playground->toArray($noStream) : $this->playground;
        }

        if (null !== $this->sidecarProxyInitResourceLimit) {
            $res['SidecarProxyInitResourceLimit'] = null !== $this->sidecarProxyInitResourceLimit ? $this->sidecarProxyInitResourceLimit->toArray($noStream) : $this->sidecarProxyInitResourceLimit;
        }

        if (null !== $this->sidecarProxyInitResourceRequest) {
            $res['SidecarProxyInitResourceRequest'] = null !== $this->sidecarProxyInitResourceRequest ? $this->sidecarProxyInitResourceRequest->toArray($noStream) : $this->sidecarProxyInitResourceRequest;
        }

        if (null !== $this->terminationDrainDuration) {
            $res['TerminationDrainDuration'] = $this->terminationDrainDuration;
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
                $model->discoverySelectors = [];
                $n1 = 0;
                foreach ($map['DiscoverySelectors'] as $item1) {
                    if (!empty($item1)) {
                        $model->discoverySelectors[$n1] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $model->discoverySelectors[$n1][$key2] = $value2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        if (isset($map['IstioCRHistory'])) {
            $model->istioCRHistory = istioCRHistory::fromMap($map['IstioCRHistory']);
        }

        if (isset($map['IstiodExtraConfiguration'])) {
            $model->istiodExtraConfiguration = istiodExtraConfiguration::fromMap($map['IstiodExtraConfiguration']);
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

        if (isset($map['Playground'])) {
            $model->playground = playground::fromMap($map['Playground']);
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
