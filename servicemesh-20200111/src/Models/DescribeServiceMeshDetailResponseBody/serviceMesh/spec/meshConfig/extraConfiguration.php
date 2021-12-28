<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshDetailResponseBody\serviceMesh\spec\meshConfig;

use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshDetailResponseBody\serviceMesh\spec\meshConfig\extraConfiguration\istioCRHistory;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshDetailResponseBody\serviceMesh\spec\meshConfig\extraConfiguration\lifecycle;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshDetailResponseBody\serviceMesh\spec\meshConfig\extraConfiguration\multiBuffer;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshDetailResponseBody\serviceMesh\spec\meshConfig\extraConfiguration\sidecarProxyInitResourceLimit;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshDetailResponseBody\serviceMesh\spec\meshConfig\extraConfiguration\sidecarProxyInitResourceRequest;
use AlibabaCloud\Tea\Model;

class extraConfiguration extends Model
{
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
        'CRAggregationEnabled'            => 'CRAggregationEnabled',
        'discoverySelectors'              => 'DiscoverySelectors',
        'istioCRHistory'                  => 'IstioCRHistory',
        'lifecycle'                       => 'Lifecycle',
        'multiBuffer'                     => 'MultiBuffer',
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
