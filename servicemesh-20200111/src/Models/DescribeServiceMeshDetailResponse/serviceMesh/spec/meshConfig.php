<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshDetailResponse\serviceMesh\spec;

use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshDetailResponse\serviceMesh\spec\meshConfig\accessLog;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshDetailResponse\serviceMesh\spec\meshConfig\audit;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshDetailResponse\serviceMesh\spec\meshConfig\kiali;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshDetailResponse\serviceMesh\spec\meshConfig\OPA;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshDetailResponse\serviceMesh\spec\meshConfig\pilot;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshDetailResponse\serviceMesh\spec\meshConfig\prometheus;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshDetailResponse\serviceMesh\spec\meshConfig\proxy;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshDetailResponse\serviceMesh\spec\meshConfig\sidecarInjector;
use AlibabaCloud\Tea\Model;

class meshConfig extends Model
{
    /**
     * @var bool
     */
    public $enableLocalityLB;

    /**
     * @var bool
     */
    public $telemetry;

    /**
     * @var bool
     */
    public $tracing;

    /**
     * @var bool
     */
    public $customizedZipkin;

    /**
     * @var string
     */
    public $outboundTrafficPolicy;

    /**
     * @var string
     */
    public $includeIPRanges;

    /**
     * @var string
     */
    public $edition;

    /**
     * @var pilot
     */
    public $pilot;

    /**
     * @var OPA
     */
    public $OPA;

    /**
     * @var audit
     */
    public $audit;

    /**
     * @var proxy
     */
    public $proxy;

    /**
     * @var sidecarInjector
     */
    public $sidecarInjector;

    /**
     * @var kiali
     */
    public $kiali;

    /**
     * @var prometheus
     */
    public $prometheus;

    /**
     * @var accessLog
     */
    public $accessLog;
    protected $_name = [
        'enableLocalityLB'      => 'EnableLocalityLB',
        'telemetry'             => 'Telemetry',
        'tracing'               => 'Tracing',
        'customizedZipkin'      => 'CustomizedZipkin',
        'outboundTrafficPolicy' => 'OutboundTrafficPolicy',
        'includeIPRanges'       => 'IncludeIPRanges',
        'edition'               => 'Edition',
        'pilot'                 => 'Pilot',
        'OPA'                   => 'OPA',
        'audit'                 => 'Audit',
        'proxy'                 => 'Proxy',
        'sidecarInjector'       => 'SidecarInjector',
        'kiali'                 => 'Kiali',
        'prometheus'            => 'Prometheus',
        'accessLog'             => 'AccessLog',
    ];

    public function validate()
    {
        Model::validateRequired('enableLocalityLB', $this->enableLocalityLB, true);
        Model::validateRequired('telemetry', $this->telemetry, true);
        Model::validateRequired('tracing', $this->tracing, true);
        Model::validateRequired('customizedZipkin', $this->customizedZipkin, true);
        Model::validateRequired('outboundTrafficPolicy', $this->outboundTrafficPolicy, true);
        Model::validateRequired('includeIPRanges', $this->includeIPRanges, true);
        Model::validateRequired('edition', $this->edition, true);
        Model::validateRequired('pilot', $this->pilot, true);
        Model::validateRequired('OPA', $this->OPA, true);
        Model::validateRequired('audit', $this->audit, true);
        Model::validateRequired('proxy', $this->proxy, true);
        Model::validateRequired('sidecarInjector', $this->sidecarInjector, true);
        Model::validateRequired('kiali', $this->kiali, true);
        Model::validateRequired('prometheus', $this->prometheus, true);
        Model::validateRequired('accessLog', $this->accessLog, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->enableLocalityLB) {
            $res['EnableLocalityLB'] = $this->enableLocalityLB;
        }
        if (null !== $this->telemetry) {
            $res['Telemetry'] = $this->telemetry;
        }
        if (null !== $this->tracing) {
            $res['Tracing'] = $this->tracing;
        }
        if (null !== $this->customizedZipkin) {
            $res['CustomizedZipkin'] = $this->customizedZipkin;
        }
        if (null !== $this->outboundTrafficPolicy) {
            $res['OutboundTrafficPolicy'] = $this->outboundTrafficPolicy;
        }
        if (null !== $this->includeIPRanges) {
            $res['IncludeIPRanges'] = $this->includeIPRanges;
        }
        if (null !== $this->edition) {
            $res['Edition'] = $this->edition;
        }
        if (null !== $this->pilot) {
            $res['Pilot'] = null !== $this->pilot ? $this->pilot->toMap() : null;
        }
        if (null !== $this->OPA) {
            $res['OPA'] = null !== $this->OPA ? $this->OPA->toMap() : null;
        }
        if (null !== $this->audit) {
            $res['Audit'] = null !== $this->audit ? $this->audit->toMap() : null;
        }
        if (null !== $this->proxy) {
            $res['Proxy'] = null !== $this->proxy ? $this->proxy->toMap() : null;
        }
        if (null !== $this->sidecarInjector) {
            $res['SidecarInjector'] = null !== $this->sidecarInjector ? $this->sidecarInjector->toMap() : null;
        }
        if (null !== $this->kiali) {
            $res['Kiali'] = null !== $this->kiali ? $this->kiali->toMap() : null;
        }
        if (null !== $this->prometheus) {
            $res['Prometheus'] = null !== $this->prometheus ? $this->prometheus->toMap() : null;
        }
        if (null !== $this->accessLog) {
            $res['AccessLog'] = null !== $this->accessLog ? $this->accessLog->toMap() : null;
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
        if (isset($map['EnableLocalityLB'])) {
            $model->enableLocalityLB = $map['EnableLocalityLB'];
        }
        if (isset($map['Telemetry'])) {
            $model->telemetry = $map['Telemetry'];
        }
        if (isset($map['Tracing'])) {
            $model->tracing = $map['Tracing'];
        }
        if (isset($map['CustomizedZipkin'])) {
            $model->customizedZipkin = $map['CustomizedZipkin'];
        }
        if (isset($map['OutboundTrafficPolicy'])) {
            $model->outboundTrafficPolicy = $map['OutboundTrafficPolicy'];
        }
        if (isset($map['IncludeIPRanges'])) {
            $model->includeIPRanges = $map['IncludeIPRanges'];
        }
        if (isset($map['Edition'])) {
            $model->edition = $map['Edition'];
        }
        if (isset($map['Pilot'])) {
            $model->pilot = pilot::fromMap($map['Pilot']);
        }
        if (isset($map['OPA'])) {
            $model->OPA = OPA::fromMap($map['OPA']);
        }
        if (isset($map['Audit'])) {
            $model->audit = audit::fromMap($map['Audit']);
        }
        if (isset($map['Proxy'])) {
            $model->proxy = proxy::fromMap($map['Proxy']);
        }
        if (isset($map['SidecarInjector'])) {
            $model->sidecarInjector = sidecarInjector::fromMap($map['SidecarInjector']);
        }
        if (isset($map['Kiali'])) {
            $model->kiali = kiali::fromMap($map['Kiali']);
        }
        if (isset($map['Prometheus'])) {
            $model->prometheus = prometheus::fromMap($map['Prometheus']);
        }
        if (isset($map['AccessLog'])) {
            $model->accessLog = accessLog::fromMap($map['AccessLog']);
        }

        return $model;
    }
}
