<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models;

use AlibabaCloud\Tea\Model;

class UpdateMeshFeatureRequest extends Model
{
    /**
     * @var string
     */
    public $serviceMeshId;

    /**
     * @var bool
     */
    public $tracing;

    /**
     * @var float
     */
    public $traceSampling;

    /**
     * @var bool
     */
    public $localityLoadBalancing;

    /**
     * @var bool
     */
    public $telemetry;

    /**
     * @var bool
     */
    public $openAgentPolicy;

    /**
     * @var string
     */
    public $OPALogLevel;

    /**
     * @var string
     */
    public $OPARequestCPU;

    /**
     * @var string
     */
    public $OPARequestMemory;

    /**
     * @var string
     */
    public $OPALimitCPU;

    /**
     * @var string
     */
    public $OPALimitMemory;

    /**
     * @var bool
     */
    public $pilotPublicEip;

    /**
     * @var bool
     */
    public $enableAudit;

    /**
     * @var string
     */
    public $auditProject;

    /**
     * @var bool
     */
    public $CADisableSecretAutoGeneration;

    /**
     * @var string
     */
    public $CAListenedNamespaces;

    /**
     * @var string
     */
    public $appNamespaces;

    /**
     * @var string
     */
    public $clusterDomain;

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
    public $proxyRequestCPU;

    /**
     * @var string
     */
    public $proxyRequestMemory;

    /**
     * @var string
     */
    public $proxyLimitCPU;

    /**
     * @var string
     */
    public $proxyLimitMemory;

    /**
     * @var string
     */
    public $includeIPRanges;

    /**
     * @var bool
     */
    public $enableNamespacesByDefault;

    /**
     * @var bool
     */
    public $autoInjectionPolicyEnabled;

    /**
     * @var string
     */
    public $sidecarInjectorRequestCPU;

    /**
     * @var string
     */
    public $sidecarInjectorRequestMemory;

    /**
     * @var string
     */
    public $sidecarInjectorLimitCPU;

    /**
     * @var string
     */
    public $sidecarInjectorLimitMemory;

    /**
     * @var string
     */
    public $sidecarInjectorWebhookAsYaml;

    /**
     * @var bool
     */
    public $cniEnabled;

    /**
     * @var string
     */
    public $cniExcludeNamespaces;

    /**
     * @var bool
     */
    public $opaEnabled;

    /**
     * @var bool
     */
    public $http10Enabled;
    protected $_name = [
        'serviceMeshId'                 => 'ServiceMeshId',
        'tracing'                       => 'Tracing',
        'traceSampling'                 => 'TraceSampling',
        'localityLoadBalancing'         => 'LocalityLoadBalancing',
        'telemetry'                     => 'Telemetry',
        'openAgentPolicy'               => 'OpenAgentPolicy',
        'OPALogLevel'                   => 'OPALogLevel',
        'OPARequestCPU'                 => 'OPARequestCPU',
        'OPARequestMemory'              => 'OPARequestMemory',
        'OPALimitCPU'                   => 'OPALimitCPU',
        'OPALimitMemory'                => 'OPALimitMemory',
        'pilotPublicEip'                => 'PilotPublicEip',
        'enableAudit'                   => 'EnableAudit',
        'auditProject'                  => 'AuditProject',
        'CADisableSecretAutoGeneration' => 'CADisableSecretAutoGeneration',
        'CAListenedNamespaces'          => 'CAListenedNamespaces',
        'appNamespaces'                 => 'AppNamespaces',
        'clusterDomain'                 => 'ClusterDomain',
        'customizedZipkin'              => 'CustomizedZipkin',
        'outboundTrafficPolicy'         => 'OutboundTrafficPolicy',
        'proxyRequestCPU'               => 'ProxyRequestCPU',
        'proxyRequestMemory'            => 'ProxyRequestMemory',
        'proxyLimitCPU'                 => 'ProxyLimitCPU',
        'proxyLimitMemory'              => 'ProxyLimitMemory',
        'includeIPRanges'               => 'IncludeIPRanges',
        'enableNamespacesByDefault'     => 'EnableNamespacesByDefault',
        'autoInjectionPolicyEnabled'    => 'AutoInjectionPolicyEnabled',
        'sidecarInjectorRequestCPU'     => 'SidecarInjectorRequestCPU',
        'sidecarInjectorRequestMemory'  => 'SidecarInjectorRequestMemory',
        'sidecarInjectorLimitCPU'       => 'SidecarInjectorLimitCPU',
        'sidecarInjectorLimitMemory'    => 'SidecarInjectorLimitMemory',
        'sidecarInjectorWebhookAsYaml'  => 'SidecarInjectorWebhookAsYaml',
        'cniEnabled'                    => 'CniEnabled',
        'cniExcludeNamespaces'          => 'CniExcludeNamespaces',
        'opaEnabled'                    => 'OpaEnabled',
        'http10Enabled'                 => 'Http10Enabled',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->serviceMeshId) {
            $res['ServiceMeshId'] = $this->serviceMeshId;
        }
        if (null !== $this->tracing) {
            $res['Tracing'] = $this->tracing;
        }
        if (null !== $this->traceSampling) {
            $res['TraceSampling'] = $this->traceSampling;
        }
        if (null !== $this->localityLoadBalancing) {
            $res['LocalityLoadBalancing'] = $this->localityLoadBalancing;
        }
        if (null !== $this->telemetry) {
            $res['Telemetry'] = $this->telemetry;
        }
        if (null !== $this->openAgentPolicy) {
            $res['OpenAgentPolicy'] = $this->openAgentPolicy;
        }
        if (null !== $this->OPALogLevel) {
            $res['OPALogLevel'] = $this->OPALogLevel;
        }
        if (null !== $this->OPARequestCPU) {
            $res['OPARequestCPU'] = $this->OPARequestCPU;
        }
        if (null !== $this->OPARequestMemory) {
            $res['OPARequestMemory'] = $this->OPARequestMemory;
        }
        if (null !== $this->OPALimitCPU) {
            $res['OPALimitCPU'] = $this->OPALimitCPU;
        }
        if (null !== $this->OPALimitMemory) {
            $res['OPALimitMemory'] = $this->OPALimitMemory;
        }
        if (null !== $this->pilotPublicEip) {
            $res['PilotPublicEip'] = $this->pilotPublicEip;
        }
        if (null !== $this->enableAudit) {
            $res['EnableAudit'] = $this->enableAudit;
        }
        if (null !== $this->auditProject) {
            $res['AuditProject'] = $this->auditProject;
        }
        if (null !== $this->CADisableSecretAutoGeneration) {
            $res['CADisableSecretAutoGeneration'] = $this->CADisableSecretAutoGeneration;
        }
        if (null !== $this->CAListenedNamespaces) {
            $res['CAListenedNamespaces'] = $this->CAListenedNamespaces;
        }
        if (null !== $this->appNamespaces) {
            $res['AppNamespaces'] = $this->appNamespaces;
        }
        if (null !== $this->clusterDomain) {
            $res['ClusterDomain'] = $this->clusterDomain;
        }
        if (null !== $this->customizedZipkin) {
            $res['CustomizedZipkin'] = $this->customizedZipkin;
        }
        if (null !== $this->outboundTrafficPolicy) {
            $res['OutboundTrafficPolicy'] = $this->outboundTrafficPolicy;
        }
        if (null !== $this->proxyRequestCPU) {
            $res['ProxyRequestCPU'] = $this->proxyRequestCPU;
        }
        if (null !== $this->proxyRequestMemory) {
            $res['ProxyRequestMemory'] = $this->proxyRequestMemory;
        }
        if (null !== $this->proxyLimitCPU) {
            $res['ProxyLimitCPU'] = $this->proxyLimitCPU;
        }
        if (null !== $this->proxyLimitMemory) {
            $res['ProxyLimitMemory'] = $this->proxyLimitMemory;
        }
        if (null !== $this->includeIPRanges) {
            $res['IncludeIPRanges'] = $this->includeIPRanges;
        }
        if (null !== $this->enableNamespacesByDefault) {
            $res['EnableNamespacesByDefault'] = $this->enableNamespacesByDefault;
        }
        if (null !== $this->autoInjectionPolicyEnabled) {
            $res['AutoInjectionPolicyEnabled'] = $this->autoInjectionPolicyEnabled;
        }
        if (null !== $this->sidecarInjectorRequestCPU) {
            $res['SidecarInjectorRequestCPU'] = $this->sidecarInjectorRequestCPU;
        }
        if (null !== $this->sidecarInjectorRequestMemory) {
            $res['SidecarInjectorRequestMemory'] = $this->sidecarInjectorRequestMemory;
        }
        if (null !== $this->sidecarInjectorLimitCPU) {
            $res['SidecarInjectorLimitCPU'] = $this->sidecarInjectorLimitCPU;
        }
        if (null !== $this->sidecarInjectorLimitMemory) {
            $res['SidecarInjectorLimitMemory'] = $this->sidecarInjectorLimitMemory;
        }
        if (null !== $this->sidecarInjectorWebhookAsYaml) {
            $res['SidecarInjectorWebhookAsYaml'] = $this->sidecarInjectorWebhookAsYaml;
        }
        if (null !== $this->cniEnabled) {
            $res['CniEnabled'] = $this->cniEnabled;
        }
        if (null !== $this->cniExcludeNamespaces) {
            $res['CniExcludeNamespaces'] = $this->cniExcludeNamespaces;
        }
        if (null !== $this->opaEnabled) {
            $res['OpaEnabled'] = $this->opaEnabled;
        }
        if (null !== $this->http10Enabled) {
            $res['Http10Enabled'] = $this->http10Enabled;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateMeshFeatureRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ServiceMeshId'])) {
            $model->serviceMeshId = $map['ServiceMeshId'];
        }
        if (isset($map['Tracing'])) {
            $model->tracing = $map['Tracing'];
        }
        if (isset($map['TraceSampling'])) {
            $model->traceSampling = $map['TraceSampling'];
        }
        if (isset($map['LocalityLoadBalancing'])) {
            $model->localityLoadBalancing = $map['LocalityLoadBalancing'];
        }
        if (isset($map['Telemetry'])) {
            $model->telemetry = $map['Telemetry'];
        }
        if (isset($map['OpenAgentPolicy'])) {
            $model->openAgentPolicy = $map['OpenAgentPolicy'];
        }
        if (isset($map['OPALogLevel'])) {
            $model->OPALogLevel = $map['OPALogLevel'];
        }
        if (isset($map['OPARequestCPU'])) {
            $model->OPARequestCPU = $map['OPARequestCPU'];
        }
        if (isset($map['OPARequestMemory'])) {
            $model->OPARequestMemory = $map['OPARequestMemory'];
        }
        if (isset($map['OPALimitCPU'])) {
            $model->OPALimitCPU = $map['OPALimitCPU'];
        }
        if (isset($map['OPALimitMemory'])) {
            $model->OPALimitMemory = $map['OPALimitMemory'];
        }
        if (isset($map['PilotPublicEip'])) {
            $model->pilotPublicEip = $map['PilotPublicEip'];
        }
        if (isset($map['EnableAudit'])) {
            $model->enableAudit = $map['EnableAudit'];
        }
        if (isset($map['AuditProject'])) {
            $model->auditProject = $map['AuditProject'];
        }
        if (isset($map['CADisableSecretAutoGeneration'])) {
            $model->CADisableSecretAutoGeneration = $map['CADisableSecretAutoGeneration'];
        }
        if (isset($map['CAListenedNamespaces'])) {
            $model->CAListenedNamespaces = $map['CAListenedNamespaces'];
        }
        if (isset($map['AppNamespaces'])) {
            $model->appNamespaces = $map['AppNamespaces'];
        }
        if (isset($map['ClusterDomain'])) {
            $model->clusterDomain = $map['ClusterDomain'];
        }
        if (isset($map['CustomizedZipkin'])) {
            $model->customizedZipkin = $map['CustomizedZipkin'];
        }
        if (isset($map['OutboundTrafficPolicy'])) {
            $model->outboundTrafficPolicy = $map['OutboundTrafficPolicy'];
        }
        if (isset($map['ProxyRequestCPU'])) {
            $model->proxyRequestCPU = $map['ProxyRequestCPU'];
        }
        if (isset($map['ProxyRequestMemory'])) {
            $model->proxyRequestMemory = $map['ProxyRequestMemory'];
        }
        if (isset($map['ProxyLimitCPU'])) {
            $model->proxyLimitCPU = $map['ProxyLimitCPU'];
        }
        if (isset($map['ProxyLimitMemory'])) {
            $model->proxyLimitMemory = $map['ProxyLimitMemory'];
        }
        if (isset($map['IncludeIPRanges'])) {
            $model->includeIPRanges = $map['IncludeIPRanges'];
        }
        if (isset($map['EnableNamespacesByDefault'])) {
            $model->enableNamespacesByDefault = $map['EnableNamespacesByDefault'];
        }
        if (isset($map['AutoInjectionPolicyEnabled'])) {
            $model->autoInjectionPolicyEnabled = $map['AutoInjectionPolicyEnabled'];
        }
        if (isset($map['SidecarInjectorRequestCPU'])) {
            $model->sidecarInjectorRequestCPU = $map['SidecarInjectorRequestCPU'];
        }
        if (isset($map['SidecarInjectorRequestMemory'])) {
            $model->sidecarInjectorRequestMemory = $map['SidecarInjectorRequestMemory'];
        }
        if (isset($map['SidecarInjectorLimitCPU'])) {
            $model->sidecarInjectorLimitCPU = $map['SidecarInjectorLimitCPU'];
        }
        if (isset($map['SidecarInjectorLimitMemory'])) {
            $model->sidecarInjectorLimitMemory = $map['SidecarInjectorLimitMemory'];
        }
        if (isset($map['SidecarInjectorWebhookAsYaml'])) {
            $model->sidecarInjectorWebhookAsYaml = $map['SidecarInjectorWebhookAsYaml'];
        }
        if (isset($map['CniEnabled'])) {
            $model->cniEnabled = $map['CniEnabled'];
        }
        if (isset($map['CniExcludeNamespaces'])) {
            $model->cniExcludeNamespaces = $map['CniExcludeNamespaces'];
        }
        if (isset($map['OpaEnabled'])) {
            $model->opaEnabled = $map['OpaEnabled'];
        }
        if (isset($map['Http10Enabled'])) {
            $model->http10Enabled = $map['Http10Enabled'];
        }

        return $model;
    }
}
