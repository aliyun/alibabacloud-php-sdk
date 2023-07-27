<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models;

use AlibabaCloud\Tea\Model;

class CreateServiceMeshRequest extends Model
{
    /**
     * @description Specifies whether to enable access log collection. Valid values:
     *
     *   `true`
     *   `false`
     *
     * Default value: `false`.
     * @example false
     *
     * @var bool
     */
    public $accessLogEnabled;

    /**
     * @description Specifies whether to enable access log collection. Valid values:
     *
     *   "": disables access log collection.
     *   `/dev/stdout`: enables access log collection. Access logs are written to /dev/stdout.
     *
     * @example /dev/stdout
     *
     * @var string
     */
    public $accessLogFile;

    /**
     * @description Custom fields of access logs. To set this parameter, you must enable access log collection. Otherwise, you cannot set this parameter. The value must be a JSON string. The following key values must be contained: authority_for, bytes_received, bytes_sent, downstream_local_address, downstream_remote_address, duration, istio_policy_status, method, path, protocol, requested_server_name, response_code, response_flags, route_name, start_time, trace_id, upstream_cluster, upstream_host, upstream_local_address, upstream_service_time, upstream_transport_failure_reason, user_agent, and x_forwarded_for.
     *
     * @example {"authority_for":"%REQ(:AUTHORITY)%","bytes_received":"%BYTES_RECEIVED%","bytes_sent":"%BYTES_SENT%","downstream_local_address":"%DOWNSTREAM_LOCAL_ADDRESS%","downstream_remote_address":"%DOWNSTREAM_REMOTE_ADDRESS%","duration":"%DURATION%","istio_policy_status":"%DYNAMIC_METADATA(istio.mixer:status)%","method":"%REQ(:METHOD)%","path":"%REQ(X-ENVOY-ORIGINAL-PATH?:PATH)%","protocol":"%PROTOCOL%","request_id":"%REQ(X-REQUEST-ID)%","requested_server_name":"%REQUESTED_SERVER_NAME%","response_code":"%RESPONSE_CODE%","response_flags":"%RESPONSE_FLAGS%","route_name":"%ROUTE_NAME%","start_time":"%START_TIME%","trace_id":"%REQ(X-B3-TRACEID)%","upstream_cluster":"%UPSTREAM_CLUSTER%","upstream_host":"%UPSTREAM_HOST%","upstream_local_address":"%UPSTREAM_LOCAL_ADDRESS%","upstream_service_time":"%RESP(X-ENVOY-UPSTREAM-SERVICE-TIME)%","upstream_transport_failure_reason":"%UPSTREAM_TRANSPORT_FAILURE_REASON%","user_agent":"%REQ(USER-AGENT)%","x_forwarded_for":"%REQ(X-FORWARDED-FOR)%"}
     *
     * @var string
     */
    public $accessLogFormat;

    /**
     * @description The SLS project from which access logs are collected.
     *
     * @example mesh-log-cf245a429b6ff4b6e97f20797758*****
     *
     * @var string
     */
    public $accessLogProject;

    /**
     * @description Specifies whether to enable gRPC Access Log Service (ALS) of Envoy. gRPC is short for Google Remote Procedure Call. Valid values:
     *
     *   `true`
     *   `false`
     *
     * Default value: `false`.
     * @example false
     *
     * @var bool
     */
    public $accessLogServiceEnabled;

    /**
     * @description The endpoint of Envoy\"s gRPC ALS.
     *
     * @example 0.0.0.0
     *
     * @var string
     */
    public $accessLogServiceHost;

    /**
     * @description The port of Envoy\"s gRPC ALS.
     *
     * @example 9999
     *
     * @var int
     */
    public $accessLogServicePort;

    /**
     * @description The type of the SLB instance that is bound to Istio Pilot. Valid values: `slb.s1.small`, `slb.s2.small`, `slb.s2.medium`, `slb.s3.small`, `slb.s3.medium`, and `slb.s3.large`.
     *
     * @example slb.s1.small
     *
     * @var string
     */
    public $apiServerLoadBalancerSpec;

    /**
     * @description Specifies whether to expose the API server to the Internet. Valid values:
     *
     *   `true`
     *   `false`
     *
     * > If you set this parameter to `false`, the API server cannot be accessed over the Internet.
     * @example false
     *
     * @var bool
     */
    public $apiServerPublicEip;

    /**
     * @description The name of the Log Service project that is used for mesh audit.
     *
     * Default value: mesh-log-{ASM instance ID}.
     * @example mesh-log-xxxx
     *
     * @var string
     */
    public $auditProject;

    /**
     * @description Specifies whether to enable auto-renewal for the SLB instance if the SLB instance uses the subscription billing method. Valid values:
     *
     * - false
     * @example true
     *
     * @var bool
     */
    public $autoRenew;

    /**
     * @description The auto-renewal period of the SLB instance. This parameter is valid only if the `ChargeType` parameter is set to `PrePay`. If the original subscription period of the SLB instance is less than one year, the value of this parameter indicates the number of months for auto-renewal. If the original subscription period of the SLB instance is more than one year, the value of this parameter indicates the number of years for auto-renewal.
     *
     * @example 3
     *
     * @var int
     */
    public $autoRenewPeriod;

    /**
     * @description Specifies whether to allow the Kubernetes API of clusters on the data plane to access Istio resources. The version of the ASM instance must be V1.9.7.93 or later. Valid values:
     *
     *   `true`
     *   `false`
     *
     * Default value: `false`.
     * @example false
     *
     * @var bool
     */
    public $CRAggregationEnabled;

    /**
     * @description The billing method of the SLB instance. Valid values:
     *   `PayOnDemand`: pay-as-you-go.
     *   `PrePay`: subscription.
     *
     * @example PrePay
     *
     * @var string
     */
    public $chargeType;

    /**
     * @description The edition of the ASM instance. Valid values:
     *
     * - `ultimate`: Ultimate Edition
     * @example standard
     *
     * @var string
     */
    public $clusterSpec;

    /**
     * @description Specifies whether to enable the external service registry. Valid values:
     *
     *   `true`
     *   `false`
     *
     * Default value: `false`.
     * @example false
     *
     * @var bool
     */
    public $configSourceEnabled;

    /**
     * @description The instance ID of the Nacos registry.
     *
     * @example mse-cn-tl326******
     *
     * @var string
     */
    public $configSourceNacosID;

    /**
     * @description Specifies whether to enable the collection of control plane logs. Valid values:
     *
     *   `true`
     *   `false`
     *
     * Default value: `false`.
     * @example false
     *
     * @var bool
     */
    public $controlPlaneLogEnabled;

    /**
     * @description The name of the Log Service project that is used to collect the logs of the control plane.
     *
     * @example mesh-log-cf245a429b6ff4b6e97f20797758*****
     *
     * @var string
     */
    public $controlPlaneLogProject;

    /**
     * @description Specifies whether to use a custom Prometheus instance. Valid values:
     *
     *   `true`
     *   `false`
     *
     * Default value: `false`.
     * @example false
     *
     * @var bool
     */
    public $customizedPrometheus;

    /**
     * @description Specifies whether to use a self-managed Zipkin system to collect tracing data. Valid values:
     *
     *   `true`: uses a self-managed Zipkin system to collect tracing data.
     *   `false`: uses Alibaba Cloud Tracing Analysis to collect tracing data.
     *
     * Default value: `false`.
     * @example false
     *
     * @var bool
     */
    public $customizedZipkin;

    /**
     * @description Specifies whether to enable the DNS proxy feature. Valid values:
     *
     *   `true`
     *   `false`
     *
     * Default value: `false`.
     * @example false
     *
     * @var bool
     */
    public $DNSProxyingEnabled;

    /**
     * @description Specifies whether to enable Dubbo Filter. Valid values:
     *
     *   `true`
     *   `false`
     *
     * Default value: `false`.
     * @example false
     *
     * @var bool
     */
    public $dubboFilterEnabled;

    /**
     * @description The edition of the ASM instance.
     *
     * @example Pro
     *
     * @var string
     */
    public $edition;

    /**
     * @description Specifies whether to enable the mesh audit feature. To enable this feature, make sure that you have activated [Log Service](https://sls.console.aliyun.com/). Valid values:
     *
     *   `true`
     *   `false`
     *
     * Default value: `false`.
     * @example false
     *
     * @var bool
     */
    public $enableAudit;

    /**
     * @description Specifies whether to enable the rollback feature for Istio resources. Valid values:
     *
     *   `true`
     *   `false`
     *
     * Default value: `false`.
     * @example false
     *
     * @var bool
     */
    public $enableCRHistory;

    /**
     * @description Specifies whether to enable Secret Discovery Service (SDS). Valid values:
     *
     *   `true`
     *   `false`
     *
     * Default value: `false`.
     * @example false
     *
     * @var bool
     */
    public $enableSDSServer;

    /**
     * @description The IP ranges in CIDR form to be excluded from redirection to the sidecar proxy in the ASM instance.
     *
     * @example 100.100.10*.***
     *
     * @var string
     */
    public $excludeIPRanges;

    /**
     * @description The inbound ports to be excluded from redirection to the sidecar proxy in the ASM instance. Separate multiple port numbers with commas (,).
     *
     * @example 80,81
     *
     * @var string
     */
    public $excludeInboundPorts;

    /**
     * @description The outbound ports to be excluded from redirection to the sidecar proxy in the ASM instance. Separate multiple port numbers with commas (,).
     *
     * @example 80,81
     *
     * @var string
     */
    public $excludeOutboundPorts;

    /**
     * @description The existing CA certificate, which is encoded in Base64. This parameter is used in scenarios where you migrate open source Istio to ASM. It specifies the content of the ca-cert.pem file in the istio-ca-secret secret. The secret is in the istio-system namespace of the Kubernetes cluster where the open source Istio is installed.
     *
     * @example CA cert content, base64 encoded format.
     *
     * @var string
     */
    public $existingCaCert;

    /**
     * @description The existing CA key, which is encoded in Base64. This parameter is used in scenarios where you migrate open source Istio to ASM. It specifies the content of the ca-key.pem file in the istio-ca-secret secret. The secret is in the istio-system namespace of the Kubernetes cluster where the open source Istio is installed.
     *
     * @example CA key content, base64 encoded format.
     *
     * @var string
     */
    public $existingCaKey;

    /**
     * @description The type of the existing CA certificate. Valid values:
     *
     *   1: Self-signed certificate generated by istiod. The certificate corresponds to the secret named istio-ca-secret in the istio-system namespace. If you use this type of certificate, you must set the `ExistingCaCert` and `ExsitingCaKey` parameters.
     *   2: Administrator-specified certificate. For more information, see [plugin ca cert](https://istio.io/latest/docs/tasks/security/cert-management/plugin-ca-cert/). In most cases, the certificate corresponds to the secret named cacerts in the istio-system namespace. If you use this type of certificate, you must set the `ExisingRootCaCert` and `ExisingRootCaKey` parameters.
     *
     * @example 1
     *
     * @var string
     */
    public $existingCaType;

    /**
     * @description The existing root certificate, which is encoded in Base64.
     *
     * @example Existing CA cert content, base64 encoded format.
     *
     * @var string
     */
    public $existingRootCaCert;

    /**
     * @description The private key that corresponds to the root certificate, which is encoded in Base64.
     *
     * @example Existing CA key content, base64 encoded format.
     *
     * @var string
     */
    public $existingRootCaKey;

    /**
     * @description Specifies whether to enable gateway configuration filtering. Valid values:
     *
     *   `true`
     *   `false`
     *
     * Default value: `false`.
     * @example false
     *
     * @var bool
     */
    public $filterGatewayClusterConfig;

    /**
     * @description Specifies whether to enable Gateway API. Valid values:
     *
     *   `true`
     *   `false`
     *
     * Default value: `false`.
     * @example false
     *
     * @var bool
     */
    public $gatewayAPIEnabled;

    /**
     * @description The IP ranges in CIDR form for which traffic is to be redirected to the sidecar proxy in the ASM instance.
     *
     * @example *
     *
     * @var string
     */
    public $includeIPRanges;

    /**
     * @description The Istio version of the ASM instance.
     *
     * @example v1.5.4.1-g5960ec40-aliyun
     *
     * @var string
     */
    public $istioVersion;

    /**
     * @description Specifies whether to enable the mesh topology feature. To enable this feature, make sure that you have enabled Prometheus monitoring. If Prometheus monitoring is disabled, you must set this parameter to `false`.`` Valid values:
     *
     *   `true`
     *   `false`
     *
     * Default value: `false`.
     * @example false
     *
     * @var bool
     */
    public $kialiEnabled;

    /**
     * @description The configurations for the access to the nearest instance.
     *
     * @example {"failover":[{"from":"cn-hangzhou","to":"cn-shanghai"}]}
     *
     * @var string
     */
    public $localityLBConf;

    /**
     * @description Specifies whether to route traffic to the nearest instance. Valid values:
     *
     *   `true`
     *   `false`
     *
     * Default value: `false`.
     * @example false
     *
     * @var bool
     */
    public $localityLoadBalancing;

    /**
     * @description Specifies whether to enable Microservices Engine (MSE). Valid values:
     *
     *   `true`
     *   `false`
     *
     * Default value: `false`.
     * @example false
     *
     * @var bool
     */
    public $MSEEnabled;

    /**
     * @description Specifies whether to enable MultiBuffer-based Transport Layer Security (TLS) acceleration. Valid values:
     *
     * Default value: `true`
     * @example true
     *
     * @var bool
     */
    public $multiBufferEnabled;

    /**
     * @description The pull-request latency. Default value: 30. Unit: seconds.
     *
     * @example 30s
     *
     * @var string
     */
    public $multiBufferPollDelay;

    /**
     * @description Specifies whether to enable MySQL Filter. Valid values:
     *
     *   `true`
     *   `false`
     *
     * Default value: `false`.
     * @example false
     *
     * @var bool
     */
    public $mysqlFilterEnabled;

    /**
     * @description The name of the ASM instance.
     *
     * @example mesh1
     *
     * @var string
     */
    public $name;

    /**
     * @description The maximum number of CPU cores that are available to the OPA container.
     *
     * @example 2
     *
     * @var string
     */
    public $OPALimitCPU;

    /**
     * @description The maximum size of the memory that is available to the OPA container. You can specify the parameter value in the standard quantity representation form used by Kubernetes. 1 Mi equals 1,024 KB.
     *
     * @example 1024Mi
     *
     * @var string
     */
    public $OPALimitMemory;

    /**
     * @description The log level of the OPA container.
     *
     * @example info
     *
     * @var string
     */
    public $OPALogLevel;

    /**
     * @description The minimum number of CPU cores that are required by the OPA container. You can specify the parameter value in the standard representation form of CPUs in Kubernetes. For example, if you set the value to 1, one CPU core is required.
     *
     * @example 1
     *
     * @var string
     */
    public $OPARequestCPU;

    /**
     * @description The minimum size of the memory that is required by the OPA container. You can specify the parameter value in the standard quantity representation form used by Kubernetes. 1 Mi equals 1,024 KB.
     *
     * @example 512Mi
     *
     * @var string
     */
    public $OPARequestMemory;

    /**
     * @description Specifies whether to enable the OPA plug-in. Valid values:
     *
     *   `true`
     *   `false`
     *
     * Default value: `false`.
     * @example false
     *
     * @var bool
     */
    public $opaEnabled;

    /**
     * @description Specifies whether to install the Open Policy Agent (OPA) plug-in. Valid values:
     *
     *   `true`
     *   `false`
     *
     * Default value: `false`.
     * @example false
     *
     * @var bool
     */
    public $openAgentPolicy;

    /**
     * @description The subscription period of the SLB instance. Unit: month. This parameter is valid only if the ChargeType parameter is set to PrePay. For example, if the subscription period is one year, set this parameter to 12.
     *
     * @example 3
     *
     * @var int
     */
    public $period;

    /**
     * @description The type of the SLB instance that is bound to Istio Pilot. Valid values: `slb.s1.small`, `slb.s2.small`, `slb.s2.medium`, `slb.s3.small`, `slb.s3.medium`, and `slb.s3.large`.
     *
     * @example slb.s1.small
     *
     * @var string
     */
    public $pilotLoadBalancerSpec;

    /**
     * @description The endpoint of the custom Prometheus instance.
     *
     * @example http://prometheus:9090
     *
     * @var string
     */
    public $prometheusUrl;

    /**
     * @description The maximum number of CPU cores that are available to the proxy container.
     *
     * @example 2000m
     *
     * @var string
     */
    public $proxyLimitCPU;

    /**
     * @description The maximum size of the memory that is available to the proxy container.
     *
     * @example 1024Mi
     *
     * @var string
     */
    public $proxyLimitMemory;

    /**
     * @description The minimum number of CPU cores that are required by the proxy container.
     *
     * @example 100m
     *
     * @var string
     */
    public $proxyRequestCPU;

    /**
     * @description The minimum size of the memory that is required by the proxy container.
     *
     * @example 128Mi
     *
     * @var string
     */
    public $proxyRequestMemory;

    /**
     * @description Specifies whether to enable Redis Filter. Valid values:
     *
     *   `true`
     *   `false`
     *
     * Default value: `false`.
     * @example true
     *
     * @var bool
     */
    public $redisFilterEnabled;

    /**
     * @description The ID of the region in which the ASM instance resides.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description Specifies whether to enable Prometheus monitoring. We recommend that you use Prometheus Service of [Application Real-Time Monitoring Service (ARMS)](https://arms.console.aliyun.com/). Valid values:
     *
     *   `true`
     *   `false`
     *
     * Default value: `false`.
     * @example false
     *
     * @var bool
     */
    public $telemetry;

    /**
     * @description Specifies whether to enable Thrift Filter. Valid values:
     *
     *   `true`
     *   `false`
     *
     * Default value: `false`.
     * @example false
     *
     * @var bool
     */
    public $thriftFilterEnabled;

    /**
     * @description The sampling percentage of Tracing Analysis.
     *
     * @example 100
     *
     * @var float
     */
    public $traceSampling;

    /**
     * @description Specifies whether to enable the Tracing Analysis feature. Valid values:
     *
     *   `true`
     *   `false`
     *
     * Default value: `false`.
     * @example false
     *
     * @var bool
     */
    public $tracing;

    /**
     * @description Specifies whether to use an existing CA certificate and private key.
     *
     * @example false
     *
     * @var bool
     */
    public $useExistingCA;

    /**
     * @description The ID of the vSwitch to which the ASM instance is connected.
     *
     * @example ["vsw-xzegf5dndkbf4m6eg****"]
     *
     * @var string
     */
    public $vSwitches;

    /**
     * @description The ID of the virtual private cloud (VPC) in which the ASM instance resides.
     *
     * @example vpc-xzelac2tw4ic7wz31****
     *
     * @var string
     */
    public $vpcId;

    /**
     * @description Specifies whether to enable WebAssembly Filter. Valid values:
     *
     *   `true`
     *   `false`
     *
     * Default value: `false`.
     * @example false
     *
     * @var bool
     */
    public $webAssemblyFilterEnabled;
    protected $_name = [
        'accessLogEnabled'           => 'AccessLogEnabled',
        'accessLogFile'              => 'AccessLogFile',
        'accessLogFormat'            => 'AccessLogFormat',
        'accessLogProject'           => 'AccessLogProject',
        'accessLogServiceEnabled'    => 'AccessLogServiceEnabled',
        'accessLogServiceHost'       => 'AccessLogServiceHost',
        'accessLogServicePort'       => 'AccessLogServicePort',
        'apiServerLoadBalancerSpec'  => 'ApiServerLoadBalancerSpec',
        'apiServerPublicEip'         => 'ApiServerPublicEip',
        'auditProject'               => 'AuditProject',
        'autoRenew'                  => 'AutoRenew',
        'autoRenewPeriod'            => 'AutoRenewPeriod',
        'CRAggregationEnabled'       => 'CRAggregationEnabled',
        'chargeType'                 => 'ChargeType',
        'clusterSpec'                => 'ClusterSpec',
        'configSourceEnabled'        => 'ConfigSourceEnabled',
        'configSourceNacosID'        => 'ConfigSourceNacosID',
        'controlPlaneLogEnabled'     => 'ControlPlaneLogEnabled',
        'controlPlaneLogProject'     => 'ControlPlaneLogProject',
        'customizedPrometheus'       => 'CustomizedPrometheus',
        'customizedZipkin'           => 'CustomizedZipkin',
        'DNSProxyingEnabled'         => 'DNSProxyingEnabled',
        'dubboFilterEnabled'         => 'DubboFilterEnabled',
        'edition'                    => 'Edition',
        'enableAudit'                => 'EnableAudit',
        'enableCRHistory'            => 'EnableCRHistory',
        'enableSDSServer'            => 'EnableSDSServer',
        'excludeIPRanges'            => 'ExcludeIPRanges',
        'excludeInboundPorts'        => 'ExcludeInboundPorts',
        'excludeOutboundPorts'       => 'ExcludeOutboundPorts',
        'existingCaCert'             => 'ExistingCaCert',
        'existingCaKey'              => 'ExistingCaKey',
        'existingCaType'             => 'ExistingCaType',
        'existingRootCaCert'         => 'ExistingRootCaCert',
        'existingRootCaKey'          => 'ExistingRootCaKey',
        'filterGatewayClusterConfig' => 'FilterGatewayClusterConfig',
        'gatewayAPIEnabled'          => 'GatewayAPIEnabled',
        'includeIPRanges'            => 'IncludeIPRanges',
        'istioVersion'               => 'IstioVersion',
        'kialiEnabled'               => 'KialiEnabled',
        'localityLBConf'             => 'LocalityLBConf',
        'localityLoadBalancing'      => 'LocalityLoadBalancing',
        'MSEEnabled'                 => 'MSEEnabled',
        'multiBufferEnabled'         => 'MultiBufferEnabled',
        'multiBufferPollDelay'       => 'MultiBufferPollDelay',
        'mysqlFilterEnabled'         => 'MysqlFilterEnabled',
        'name'                       => 'Name',
        'OPALimitCPU'                => 'OPALimitCPU',
        'OPALimitMemory'             => 'OPALimitMemory',
        'OPALogLevel'                => 'OPALogLevel',
        'OPARequestCPU'              => 'OPARequestCPU',
        'OPARequestMemory'           => 'OPARequestMemory',
        'opaEnabled'                 => 'OpaEnabled',
        'openAgentPolicy'            => 'OpenAgentPolicy',
        'period'                     => 'Period',
        'pilotLoadBalancerSpec'      => 'PilotLoadBalancerSpec',
        'prometheusUrl'              => 'PrometheusUrl',
        'proxyLimitCPU'              => 'ProxyLimitCPU',
        'proxyLimitMemory'           => 'ProxyLimitMemory',
        'proxyRequestCPU'            => 'ProxyRequestCPU',
        'proxyRequestMemory'         => 'ProxyRequestMemory',
        'redisFilterEnabled'         => 'RedisFilterEnabled',
        'regionId'                   => 'RegionId',
        'telemetry'                  => 'Telemetry',
        'thriftFilterEnabled'        => 'ThriftFilterEnabled',
        'traceSampling'              => 'TraceSampling',
        'tracing'                    => 'Tracing',
        'useExistingCA'              => 'UseExistingCA',
        'vSwitches'                  => 'VSwitches',
        'vpcId'                      => 'VpcId',
        'webAssemblyFilterEnabled'   => 'WebAssemblyFilterEnabled',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessLogEnabled) {
            $res['AccessLogEnabled'] = $this->accessLogEnabled;
        }
        if (null !== $this->accessLogFile) {
            $res['AccessLogFile'] = $this->accessLogFile;
        }
        if (null !== $this->accessLogFormat) {
            $res['AccessLogFormat'] = $this->accessLogFormat;
        }
        if (null !== $this->accessLogProject) {
            $res['AccessLogProject'] = $this->accessLogProject;
        }
        if (null !== $this->accessLogServiceEnabled) {
            $res['AccessLogServiceEnabled'] = $this->accessLogServiceEnabled;
        }
        if (null !== $this->accessLogServiceHost) {
            $res['AccessLogServiceHost'] = $this->accessLogServiceHost;
        }
        if (null !== $this->accessLogServicePort) {
            $res['AccessLogServicePort'] = $this->accessLogServicePort;
        }
        if (null !== $this->apiServerLoadBalancerSpec) {
            $res['ApiServerLoadBalancerSpec'] = $this->apiServerLoadBalancerSpec;
        }
        if (null !== $this->apiServerPublicEip) {
            $res['ApiServerPublicEip'] = $this->apiServerPublicEip;
        }
        if (null !== $this->auditProject) {
            $res['AuditProject'] = $this->auditProject;
        }
        if (null !== $this->autoRenew) {
            $res['AutoRenew'] = $this->autoRenew;
        }
        if (null !== $this->autoRenewPeriod) {
            $res['AutoRenewPeriod'] = $this->autoRenewPeriod;
        }
        if (null !== $this->CRAggregationEnabled) {
            $res['CRAggregationEnabled'] = $this->CRAggregationEnabled;
        }
        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }
        if (null !== $this->clusterSpec) {
            $res['ClusterSpec'] = $this->clusterSpec;
        }
        if (null !== $this->configSourceEnabled) {
            $res['ConfigSourceEnabled'] = $this->configSourceEnabled;
        }
        if (null !== $this->configSourceNacosID) {
            $res['ConfigSourceNacosID'] = $this->configSourceNacosID;
        }
        if (null !== $this->controlPlaneLogEnabled) {
            $res['ControlPlaneLogEnabled'] = $this->controlPlaneLogEnabled;
        }
        if (null !== $this->controlPlaneLogProject) {
            $res['ControlPlaneLogProject'] = $this->controlPlaneLogProject;
        }
        if (null !== $this->customizedPrometheus) {
            $res['CustomizedPrometheus'] = $this->customizedPrometheus;
        }
        if (null !== $this->customizedZipkin) {
            $res['CustomizedZipkin'] = $this->customizedZipkin;
        }
        if (null !== $this->DNSProxyingEnabled) {
            $res['DNSProxyingEnabled'] = $this->DNSProxyingEnabled;
        }
        if (null !== $this->dubboFilterEnabled) {
            $res['DubboFilterEnabled'] = $this->dubboFilterEnabled;
        }
        if (null !== $this->edition) {
            $res['Edition'] = $this->edition;
        }
        if (null !== $this->enableAudit) {
            $res['EnableAudit'] = $this->enableAudit;
        }
        if (null !== $this->enableCRHistory) {
            $res['EnableCRHistory'] = $this->enableCRHistory;
        }
        if (null !== $this->enableSDSServer) {
            $res['EnableSDSServer'] = $this->enableSDSServer;
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
        if (null !== $this->existingCaCert) {
            $res['ExistingCaCert'] = $this->existingCaCert;
        }
        if (null !== $this->existingCaKey) {
            $res['ExistingCaKey'] = $this->existingCaKey;
        }
        if (null !== $this->existingCaType) {
            $res['ExistingCaType'] = $this->existingCaType;
        }
        if (null !== $this->existingRootCaCert) {
            $res['ExistingRootCaCert'] = $this->existingRootCaCert;
        }
        if (null !== $this->existingRootCaKey) {
            $res['ExistingRootCaKey'] = $this->existingRootCaKey;
        }
        if (null !== $this->filterGatewayClusterConfig) {
            $res['FilterGatewayClusterConfig'] = $this->filterGatewayClusterConfig;
        }
        if (null !== $this->gatewayAPIEnabled) {
            $res['GatewayAPIEnabled'] = $this->gatewayAPIEnabled;
        }
        if (null !== $this->includeIPRanges) {
            $res['IncludeIPRanges'] = $this->includeIPRanges;
        }
        if (null !== $this->istioVersion) {
            $res['IstioVersion'] = $this->istioVersion;
        }
        if (null !== $this->kialiEnabled) {
            $res['KialiEnabled'] = $this->kialiEnabled;
        }
        if (null !== $this->localityLBConf) {
            $res['LocalityLBConf'] = $this->localityLBConf;
        }
        if (null !== $this->localityLoadBalancing) {
            $res['LocalityLoadBalancing'] = $this->localityLoadBalancing;
        }
        if (null !== $this->MSEEnabled) {
            $res['MSEEnabled'] = $this->MSEEnabled;
        }
        if (null !== $this->multiBufferEnabled) {
            $res['MultiBufferEnabled'] = $this->multiBufferEnabled;
        }
        if (null !== $this->multiBufferPollDelay) {
            $res['MultiBufferPollDelay'] = $this->multiBufferPollDelay;
        }
        if (null !== $this->mysqlFilterEnabled) {
            $res['MysqlFilterEnabled'] = $this->mysqlFilterEnabled;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->OPALimitCPU) {
            $res['OPALimitCPU'] = $this->OPALimitCPU;
        }
        if (null !== $this->OPALimitMemory) {
            $res['OPALimitMemory'] = $this->OPALimitMemory;
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
        if (null !== $this->opaEnabled) {
            $res['OpaEnabled'] = $this->opaEnabled;
        }
        if (null !== $this->openAgentPolicy) {
            $res['OpenAgentPolicy'] = $this->openAgentPolicy;
        }
        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }
        if (null !== $this->pilotLoadBalancerSpec) {
            $res['PilotLoadBalancerSpec'] = $this->pilotLoadBalancerSpec;
        }
        if (null !== $this->prometheusUrl) {
            $res['PrometheusUrl'] = $this->prometheusUrl;
        }
        if (null !== $this->proxyLimitCPU) {
            $res['ProxyLimitCPU'] = $this->proxyLimitCPU;
        }
        if (null !== $this->proxyLimitMemory) {
            $res['ProxyLimitMemory'] = $this->proxyLimitMemory;
        }
        if (null !== $this->proxyRequestCPU) {
            $res['ProxyRequestCPU'] = $this->proxyRequestCPU;
        }
        if (null !== $this->proxyRequestMemory) {
            $res['ProxyRequestMemory'] = $this->proxyRequestMemory;
        }
        if (null !== $this->redisFilterEnabled) {
            $res['RedisFilterEnabled'] = $this->redisFilterEnabled;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->telemetry) {
            $res['Telemetry'] = $this->telemetry;
        }
        if (null !== $this->thriftFilterEnabled) {
            $res['ThriftFilterEnabled'] = $this->thriftFilterEnabled;
        }
        if (null !== $this->traceSampling) {
            $res['TraceSampling'] = $this->traceSampling;
        }
        if (null !== $this->tracing) {
            $res['Tracing'] = $this->tracing;
        }
        if (null !== $this->useExistingCA) {
            $res['UseExistingCA'] = $this->useExistingCA;
        }
        if (null !== $this->vSwitches) {
            $res['VSwitches'] = $this->vSwitches;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->webAssemblyFilterEnabled) {
            $res['WebAssemblyFilterEnabled'] = $this->webAssemblyFilterEnabled;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateServiceMeshRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessLogEnabled'])) {
            $model->accessLogEnabled = $map['AccessLogEnabled'];
        }
        if (isset($map['AccessLogFile'])) {
            $model->accessLogFile = $map['AccessLogFile'];
        }
        if (isset($map['AccessLogFormat'])) {
            $model->accessLogFormat = $map['AccessLogFormat'];
        }
        if (isset($map['AccessLogProject'])) {
            $model->accessLogProject = $map['AccessLogProject'];
        }
        if (isset($map['AccessLogServiceEnabled'])) {
            $model->accessLogServiceEnabled = $map['AccessLogServiceEnabled'];
        }
        if (isset($map['AccessLogServiceHost'])) {
            $model->accessLogServiceHost = $map['AccessLogServiceHost'];
        }
        if (isset($map['AccessLogServicePort'])) {
            $model->accessLogServicePort = $map['AccessLogServicePort'];
        }
        if (isset($map['ApiServerLoadBalancerSpec'])) {
            $model->apiServerLoadBalancerSpec = $map['ApiServerLoadBalancerSpec'];
        }
        if (isset($map['ApiServerPublicEip'])) {
            $model->apiServerPublicEip = $map['ApiServerPublicEip'];
        }
        if (isset($map['AuditProject'])) {
            $model->auditProject = $map['AuditProject'];
        }
        if (isset($map['AutoRenew'])) {
            $model->autoRenew = $map['AutoRenew'];
        }
        if (isset($map['AutoRenewPeriod'])) {
            $model->autoRenewPeriod = $map['AutoRenewPeriod'];
        }
        if (isset($map['CRAggregationEnabled'])) {
            $model->CRAggregationEnabled = $map['CRAggregationEnabled'];
        }
        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }
        if (isset($map['ClusterSpec'])) {
            $model->clusterSpec = $map['ClusterSpec'];
        }
        if (isset($map['ConfigSourceEnabled'])) {
            $model->configSourceEnabled = $map['ConfigSourceEnabled'];
        }
        if (isset($map['ConfigSourceNacosID'])) {
            $model->configSourceNacosID = $map['ConfigSourceNacosID'];
        }
        if (isset($map['ControlPlaneLogEnabled'])) {
            $model->controlPlaneLogEnabled = $map['ControlPlaneLogEnabled'];
        }
        if (isset($map['ControlPlaneLogProject'])) {
            $model->controlPlaneLogProject = $map['ControlPlaneLogProject'];
        }
        if (isset($map['CustomizedPrometheus'])) {
            $model->customizedPrometheus = $map['CustomizedPrometheus'];
        }
        if (isset($map['CustomizedZipkin'])) {
            $model->customizedZipkin = $map['CustomizedZipkin'];
        }
        if (isset($map['DNSProxyingEnabled'])) {
            $model->DNSProxyingEnabled = $map['DNSProxyingEnabled'];
        }
        if (isset($map['DubboFilterEnabled'])) {
            $model->dubboFilterEnabled = $map['DubboFilterEnabled'];
        }
        if (isset($map['Edition'])) {
            $model->edition = $map['Edition'];
        }
        if (isset($map['EnableAudit'])) {
            $model->enableAudit = $map['EnableAudit'];
        }
        if (isset($map['EnableCRHistory'])) {
            $model->enableCRHistory = $map['EnableCRHistory'];
        }
        if (isset($map['EnableSDSServer'])) {
            $model->enableSDSServer = $map['EnableSDSServer'];
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
        if (isset($map['ExistingCaCert'])) {
            $model->existingCaCert = $map['ExistingCaCert'];
        }
        if (isset($map['ExistingCaKey'])) {
            $model->existingCaKey = $map['ExistingCaKey'];
        }
        if (isset($map['ExistingCaType'])) {
            $model->existingCaType = $map['ExistingCaType'];
        }
        if (isset($map['ExistingRootCaCert'])) {
            $model->existingRootCaCert = $map['ExistingRootCaCert'];
        }
        if (isset($map['ExistingRootCaKey'])) {
            $model->existingRootCaKey = $map['ExistingRootCaKey'];
        }
        if (isset($map['FilterGatewayClusterConfig'])) {
            $model->filterGatewayClusterConfig = $map['FilterGatewayClusterConfig'];
        }
        if (isset($map['GatewayAPIEnabled'])) {
            $model->gatewayAPIEnabled = $map['GatewayAPIEnabled'];
        }
        if (isset($map['IncludeIPRanges'])) {
            $model->includeIPRanges = $map['IncludeIPRanges'];
        }
        if (isset($map['IstioVersion'])) {
            $model->istioVersion = $map['IstioVersion'];
        }
        if (isset($map['KialiEnabled'])) {
            $model->kialiEnabled = $map['KialiEnabled'];
        }
        if (isset($map['LocalityLBConf'])) {
            $model->localityLBConf = $map['LocalityLBConf'];
        }
        if (isset($map['LocalityLoadBalancing'])) {
            $model->localityLoadBalancing = $map['LocalityLoadBalancing'];
        }
        if (isset($map['MSEEnabled'])) {
            $model->MSEEnabled = $map['MSEEnabled'];
        }
        if (isset($map['MultiBufferEnabled'])) {
            $model->multiBufferEnabled = $map['MultiBufferEnabled'];
        }
        if (isset($map['MultiBufferPollDelay'])) {
            $model->multiBufferPollDelay = $map['MultiBufferPollDelay'];
        }
        if (isset($map['MysqlFilterEnabled'])) {
            $model->mysqlFilterEnabled = $map['MysqlFilterEnabled'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['OPALimitCPU'])) {
            $model->OPALimitCPU = $map['OPALimitCPU'];
        }
        if (isset($map['OPALimitMemory'])) {
            $model->OPALimitMemory = $map['OPALimitMemory'];
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
        if (isset($map['OpaEnabled'])) {
            $model->opaEnabled = $map['OpaEnabled'];
        }
        if (isset($map['OpenAgentPolicy'])) {
            $model->openAgentPolicy = $map['OpenAgentPolicy'];
        }
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }
        if (isset($map['PilotLoadBalancerSpec'])) {
            $model->pilotLoadBalancerSpec = $map['PilotLoadBalancerSpec'];
        }
        if (isset($map['PrometheusUrl'])) {
            $model->prometheusUrl = $map['PrometheusUrl'];
        }
        if (isset($map['ProxyLimitCPU'])) {
            $model->proxyLimitCPU = $map['ProxyLimitCPU'];
        }
        if (isset($map['ProxyLimitMemory'])) {
            $model->proxyLimitMemory = $map['ProxyLimitMemory'];
        }
        if (isset($map['ProxyRequestCPU'])) {
            $model->proxyRequestCPU = $map['ProxyRequestCPU'];
        }
        if (isset($map['ProxyRequestMemory'])) {
            $model->proxyRequestMemory = $map['ProxyRequestMemory'];
        }
        if (isset($map['RedisFilterEnabled'])) {
            $model->redisFilterEnabled = $map['RedisFilterEnabled'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Telemetry'])) {
            $model->telemetry = $map['Telemetry'];
        }
        if (isset($map['ThriftFilterEnabled'])) {
            $model->thriftFilterEnabled = $map['ThriftFilterEnabled'];
        }
        if (isset($map['TraceSampling'])) {
            $model->traceSampling = $map['TraceSampling'];
        }
        if (isset($map['Tracing'])) {
            $model->tracing = $map['Tracing'];
        }
        if (isset($map['UseExistingCA'])) {
            $model->useExistingCA = $map['UseExistingCA'];
        }
        if (isset($map['VSwitches'])) {
            $model->vSwitches = $map['VSwitches'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['WebAssemblyFilterEnabled'])) {
            $model->webAssemblyFilterEnabled = $map['WebAssemblyFilterEnabled'];
        }

        return $model;
    }
}
