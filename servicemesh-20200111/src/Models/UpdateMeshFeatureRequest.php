<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models;

use AlibabaCloud\Tea\Model;

class UpdateMeshFeatureRequest extends Model
{
    /**
     * @description Specifies whether to enable access log collection. Valid values:
     *
     *   `true`: enables access log collection.
     *   `false`: disables access log collection.
     *
     * Default value: `false`.
     * @example false
     *
     * @var bool
     */
    public $accessLogEnabled;

    /**
     * @description Specifies whether to enable access logging. Valid values:
     *
     *   `""`: disables access logging.
     *   `/dev/stdout`: enables access logging. Access logs are written to /dev/stdout.
     *
     * @example “”
     *
     * @var string
     */
    public $accessLogFile;

    /**
     * @description The custom format of access logs. To set this parameter, make sure that you have enabled access log collection. The value must be a JSON string. The following key names must be contained: authority_for, bytes_received, bytes_sent, downstream_local_address, downstream_remote_address, duration, istio_policy_status, method, path, protocol, requested_server_name, response_code, response_flags, route_name, start_time, trace_id, upstream_cluster, upstream_host, upstream_local_address, upstream_service_time, upstream_transport_failure_reason, user_agent, and x_forwarded_for.
     *
     * @example {"authority_for":"%REQ(:AUTHORITY)%","bytes_received":"%BYTES_RECEIVED%","bytes_sent":"%BYTES_SENT%","downstream_local_address":"%DOWNSTREAM_LOCAL_ADDRESS%","downstream_remote_address":"%DOWNSTREAM_REMOTE_ADDRESS%","duration":"%DURATION%","istio_policy_status":"%DYNAMIC_METADATA(istio.mixer:status)%","method":"%REQ(:METHOD)%","path":"%REQ(X-ENVOY-ORIGINAL-PATH?:PATH)%","protocol":"%PROTOCOL%","request_id":"%REQ(X-REQUEST-ID)%","requested_server_name":"%REQUESTED_SERVER_NAME%","response_code":"%RESPONSE_CODE%","response_flags":"%RESPONSE_FLAGS%","route_name":"%ROUTE_NAME%","start_time":"%START_TIME%","trace_id":"%REQ(X-B3-TRACEID)%","upstream_cluster":"%UPSTREAM_CLUSTER%","upstream_host":"%UPSTREAM_HOST%","upstream_local_address":"%UPSTREAM_LOCAL_ADDRESS%","upstream_service_time":"%RESP(X-ENVOY-UPSTREAM-SERVICE-TIME)%","upstream_transport_failure_reason":"%UPSTREAM_TRANSPORT_FAILURE_REASON%","user_agent":"%REQ(USER-AGENT)%","x_forwarded_for":"%REQ(X-FORWARDED-FOR)%"}
     *
     * @var string
     */
    public $accessLogFormat;

    /**
     * @description The retention period for the access logs of the sidecar proxy. Unit: day. The logs are collected by using Log Service. For example, `30` indicates 30 days.
     *
     * @example 30
     *
     * @var int
     */
    public $accessLogGatewayLifecycle;

    /**
     * @description The custom project on which the Log Service collects logs.
     *
     * @example mesh-log-cf245a429b6ff4b6e97f20797758e****
     *
     * @var string
     */
    public $accessLogProject;

    /**
     * @description Specifies whether to enable gRPC Access Log Service (ALS) for Envoy. Valid values:
     *
     *   `true`: enables gRPC ALS for Envoy.
     *   `false`: disables gRPC ALS for Envoy.
     *
     * Default value: `false`.
     * @example false
     *
     * @var bool
     */
    public $accessLogServiceEnabled;

    /**
     * @description The endpoint of gRPC ALS for Envoy.
     *
     * @example 0.0.0.0
     *
     * @var string
     */
    public $accessLogServiceHost;

    /**
     * @description The port of gRPC ALS for Envoy.
     *
     * @example 9999
     *
     * @var int
     */
    public $accessLogServicePort;

    /**
     * @description Specifies whether to enable automatic diagnostics for the ASM instance. If you enable this feature, the ASM instance is automatically diagnosed when you modify Istio resources in the ASM instance.
     *
     * @example 30
     *
     * @var int
     */
    public $accessLogSidecarLifecycle;

    /**
     * @description The name of the Log Service project that is used for mesh audit.
     *
     * Default value: `mesh-log-{ASM instance ID}`.
     * @example mesh-log-c08ba3fd1e64xxb0f8cc1ad8****
     *
     * @var string
     */
    public $auditProject;

    /**
     * @description Specifies whether to enable automatic sidecar proxy injection by using pod annotations. Valid values:
     *
     *   `true`: enables automatic sidecar proxy injection by using pod annotations.
     *   `false`: disables automatic sidecar proxy injection by using pod annotations.
     *
     * Default value: `false`.
     * @example false
     *
     * @var bool
     */
    public $autoInjectionPolicyEnabled;

    /**
     * @description Specifies whether to use the Kubernetes API of clusters on the data plane to access Istio resources. To use this feature, the version of the ASM instance must be V1.9.7.93 or later.
     *
     * @example false
     *
     * @var bool
     */
    public $CRAggregationEnabled;

    /**
     * @description Specifies whether to enable the feature of controlling the OPA injection scope. Valid values:
     *
     *   `true`: enables the feature.
     *   `false`: disables the feature.
     *
     * @example standard
     *
     * @var string
     */
    public $clusterSpec;

    /**
     * @description Specifies whether to enable the Container Network Interface (CNI) plug-in. Valid values:
     *
     *   `true`: enables the CNI plug-in.
     *   `false`: disables the CNI plug-in.
     *
     * Default value: `false`.
     * @example false
     *
     * @var bool
     */
    public $cniEnabled;

    /**
     * @description The namespaces to be excluded for the CNI plug-in.
     *
     * @example kube-system
     *
     * @var string
     */
    public $cniExcludeNamespaces;

    /**
     * @description Specifies whether to delay application container startup until the sidecar proxy container is started in a pod.
     *
     * @example 2
     *
     * @var int
     */
    public $concurrency;

    /**
     * @description Specifies whether to enable the external service registry. Valid values:
     *
     *   `true`: enables the external service registry.
     *   `false`: disables the external service registry.
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
     * @description Specifies whether to use a custom Prometheus instance. Valid values:
     *
     *   `true`: uses a custom Prometheus instance.
     *   `false`: does not use a custom Prometheus instance.
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
     *   `true`: uses a self-managed Zipkin system.
     *   `false`: does not use a self-managed Zipkin system.
     *
     * Default value: `false`.
     * @example false
     *
     * @var bool
     */
    public $customizedZipkin;

    /**
     * @description Specifies whether to enable DNS proxy. Valid values:
     *
     *   `true`: enables the DNS proxy feature.
     *   `false`: disables the DNS proxy feature.
     *
     * Default value: `false`.
     * @example false
     *
     * @var bool
     */
    public $DNSProxyingEnabled;

    /**
     * @description Specifies the default scheduling configurations that ASM delivers to components on the data plane. You can configure nodeSelector and tolerations in the JSON format.
     *
     *
     * >* Modifying the value of this parameter is a high-risk operation. The modification will cause all components on the data plane of ASM to restart. Exercise caution before modifying the value of this parameter.
     * >* The configurations specified by this parameter do not apply to the ASM gateway. You can configure scheduling on the ASM gateway.
     * @example {"tolerations":[{"key":"test-taints", "operator":"Exists", "effect":"NoSchedule"}], "nodeSelector":{"kubernetes.io/hostname":"test-nodes"}}
     *
     * @var string
     */
    public $defaultComponentsScheduleConfig;

    /**
     * @description The label selectors used to specify the namespaces of the clusters on the data plane for selective service discovery.
     *
     * @example [{"matchExpressions":[{"key":"asm-discovery","operator":"Exists"}]}]
     *
     * @var string
     */
    public $discoverySelectors;

    /**
     * @description Specifies whether to enable Dubbo Filter. Valid values:
     *
     *   `true`: enables Dubbo Filter.
     *   `false`: disables Dubbo Filter.
     *
     * Default value: `false`.
     * @example false
     *
     * @var bool
     */
    public $dubboFilterEnabled;

    /**
     * @description Specifies whether to enable the mesh audit feature. To enable this feature, make sure that you have activated [Log Service](https://sls.console.aliyun.com/). Valid values:
     *
     *   `true`: enables the mesh audit feature.
     *   `false`: disables the mesh audit feature.
     *
     * Default value: `false`.
     * @example false
     *
     * @var bool
     */
    public $enableAudit;

    /**
     * @description The ports for which outbound traffic is redirected to the sidecar proxy.
     *
     * @example true
     *
     * @var bool
     */
    public $enableAutoDiagnosis;

    /**
     * @description Specifies the authentication token of an ARMS Prometheus instance when the Mesh Topology feature is enabled and ARMS Prometheus is used to collect monitoring metrics. The token is used to allow Mesh Topology to access the ARMS Prometheus instance. The token is in the JSON format. The key in the JSON object is the ID of the cluster on the data plane, and the value is the authentication token of the ARMS Prometheus instance deployed in the cluster.
     *
     * @example true
     *
     * @var bool
     */
    public $enableBootstrapXdsAgent;

    /**
     * @description Specifies whether to enable the rollback feature for Istio resources.
     *
     * @example false
     *
     * @var bool
     */
    public $enableCRHistory;

    /**
     * @description Specifies whether to enable automatic sidecar proxy injection for all namespaces. Valid values:
     *
     *   `true`: enables automatic sidecar proxy injection for all namespaces.
     *   `false`: disables automatic sidecar proxy injection for all namespaces.
     *
     * Default value: `false`.
     * @example false
     *
     * @var bool
     */
    public $enableNamespacesByDefault;

    /**
     * @description Specifies whether to enable Secret Discovery Service (SDS). Valid values:
     *
     *   `true`: enables SDS.
     *   `false`: disables SDS.
     *
     * Default value: `false`.
     * @example false
     *
     * @var bool
     */
    public $enableSDSServer;

    /**
     * @description The IP addresses of external services to which traffic is not intercepted.
     *
     * @example 100.100.XXX.XXX
     *
     * @var string
     */
    public $excludeIPRanges;

    /**
     * @description The ports for which inbound traffic is not redirected to the sidecar proxy. Separate multiple ports with commas (,).
     *
     * @example 80,81
     *
     * @var string
     */
    public $excludeInboundPorts;

    /**
     * @description The ports for which outbound traffic is not redirected to the sidecar proxy. Separate multiple ports with commas (,).
     *
     * @example 80,81
     *
     * @var string
     */
    public $excludeOutboundPorts;

    /**
     * @description Specifies whether to enable gateway configuration filtering. Valid values:
     *
     *   `true`: enables gateway configuration filtering.
     *   `false`: disables gateway configuration filtering.
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
     *   `true`: enables Gateway API.
     *   `false`: disables Gateway API.
     *
     * Default value: `false`.
     * @example false
     *
     * @var bool
     */
    public $gatewayAPIEnabled;

    /**
     * @description Other metrics of the sidecar proxy on the data plane.
     *
     * @example true
     *
     * @var bool
     */
    public $holdApplicationUntilProxyStarts;

    /**
     * @description Specifies whether to support HTTP 1.0. Valid values:
     *
     *   `true`: supports HTTP 1.0.
     *   `false`: does not support HTTP 1.0.
     *
     * Default value: `false`.
     * @example false
     *
     * @var bool
     */
    public $http10Enabled;

    /**
     * @description The IP addresses of external services to which traffic is intercepted.
     *
     * @example *
     *
     * @var string
     */
    public $includeIPRanges;

    /**
     * @description The ports for which inbound traffic is redirected to the sidecar proxy.
     *
     * @example 80,81
     *
     * @var string
     */
    public $includeInboundPorts;

    /**
     * @description The log level of the sidecar proxy on the data plane. Log levels include `none`, `error`, `warn`, `info`, and `debug`. The levels correspond to different amounts of information reported by the logs. For example, none-level logs report the least information, while debug-level logs report the most information.
     *
     * @example 8000,8001
     *
     * @var string
     */
    public $includeOutboundPorts;

    /**
     * @description Specifies whether to enable Node Feature Discovery (NFD).
     *
     * @example false
     *
     * @var bool
     */
    public $integrateKiali;

    /**
     * @description Specifies whether to load the bootstrap configuration before the sidecar proxy is started.
     *
     * @example TPROXY
     *
     * @var string
     */
    public $interceptionMode;

    /**
     * @description Specifies the default scheduling configurations that ASM delivers to components on the data plane. You can configure `nodeSelector` and tolerations in the JSON format.
     *
     * > *   Modifying the value of this parameter is a high-risk operation. The modification will cause all components on the data plane of ASM to restart. Exercise caution before modifying the value of this parameter.
     * >*   The configurations specified by this parameter do not apply to the ASM gateway. You can configure gateway-specific scheduling on the ASM gateway.
     * @example {"c31e3b******5634b":"token_example"}
     *
     * @var string
     */
    public $kialiArmsAuthTokens;

    /**
     * @description Specifies whether to enable the Mesh Topology feature. To enable this feature, make sure that you have enabled Prometheus monitoring. If Prometheus monitoring is disabled, the Mesh Topology feature must be disabled. Valid values:````
     *
     *   `true`: enables the Mesh Topology feature.
     *   `false`: disables the Mesh Topology feature.
     *
     * Default value: `false`.
     * @example false
     *
     * @var bool
     */
    public $kialiEnabled;

    /**
     * @description 当开启网格拓扑且为访问网格拓扑创建CLB时，通过此参数使用Annotation配置不同集群中网格拓扑服务的CLB。
     *
     * 有关如何通过注解配置CLB，参考 [通过Annotation配置传统型负载均衡CLB](https://help.aliyun.com/document_detail/86531.html)。
     * @example {"c31e3b******5634b":{"service.beta.kubernetes.io/alibaba-cloud-loadbalancer-address-type":"intranet"}}
     *
     * @var string
     */
    public $kialiServiceAnnotations;

    /**
     * @description The lifecycle of the sidecar proxy.
     *
     * @example {"postStart":{"exec":{"command":["pilot-agent","wait"]}},"preStop":{"exec":{"command":["/bin/sh","-c","sleep 15"]}}}
     *
     * @var string
     */
    public $lifecycle;

    /**
     * @description The configurations of cross-region load balancing. Valid values:
     *
     *   `failover`: the configurations of cross-region failover. Example:
     *
     * ]
     *
     *   `distribute`: the configurations of cross-region traffic distribution. Example:
     *
     * ]
     * @example {"failover":[{"from":"cn-hangzhou","to":"cn-shanghai"}]}
     *
     * @var string
     */
    public $localityLBConf;

    /**
     * @description Specifies whether to enable cross-region load balancing. Valid values:
     *
     *   `true`: enables cross-region load balancing.
     *   `false`: disables cross-region load balancing.
     *
     * Default value: `false`.
     * @example true
     *
     * @var bool
     */
    public $localityLoadBalancing;

    /**
     * @description The number of worker threads used by the sidecar proxy on the data plane.
     *
     * @example info
     *
     * @var string
     */
    public $logLevel;

    /**
     * @description Specifies whether to enable Microservice Engine (MSE). Valid values:
     *
     *   `true`: enables MSE.
     *   `false`: disables MSE.
     *
     * Default value: `false`.
     * @example false
     *
     * @var bool
     */
    public $MSEEnabled;

    /**
     * @description Specifies whether to enable Transport Layer Security (TLS) acceleration based on MultiBuffer.
     *
     * @example false
     *
     * @var bool
     */
    public $multiBufferEnabled;

    /**
     * @description The pull-request latency. By default, this parameter is left empty.
     *
     * @example 0.02s
     *
     * @var string
     */
    public $multiBufferPollDelay;

    /**
     * @description Specifies whether to enable MySQL Filter. Valid values:
     *
     *   `true`: enables MySQL Filter.
     *   `false`: disables MySQL Filter.
     *
     * Default value: `false`.
     * @example false
     *
     * @var bool
     */
    public $mysqlFilterEnabled;

    /**
     * @description Specifies whether to clear feature labels on nodes when NFD is disabled.
     *
     * This parameter is valid only when the `NFDEnabled` parameter is set to `false`.
     * @example false
     *
     * @var bool
     */
    public $NFDEnabled;

    /**
     * @description The minimum number of CPU cores requested by the proxy service that exports Tracing Analysis data. For example, `1000m` indicates one CPU core.
     *
     * @example false
     *
     * @var bool
     */
    public $NFDLabelPruned;

    /**
     * @description The maximum size of the memory that is available to the pod that injects OPA proxies into application pods. For example, `1024Mi` indicates 1024 MB.
     *
     * @example 1000m
     *
     * @var string
     */
    public $OPAInjectorCPULimit;

    /**
     * @description The minimum size of the memory requested by the pod that injects OPA proxies into application pods. For example, `50 Mi` indicates 50 MB.
     *
     * @example 80m
     *
     * @var string
     */
    public $OPAInjectorCPURequirement;

    /**
     * @description Specifies whether to create an SLB instance for accessing the ASM mesh topology.
     *
     * @example 1024Mi
     *
     * @var string
     */
    public $OPAInjectorMemoryLimit;

    /**
     * @description The maximum number of CPU cores that are available to the pod that injects OPA proxies into application pods. For example, `1000m` indicates one CPU core.
     *
     * @example 50Mi
     *
     * @var string
     */
    public $OPAInjectorMemoryRequirement;

    /**
     * @description The maximum number of CPU cores that are available to the OPA proxy container.
     *
     * @example 2
     *
     * @var string
     */
    public $OPALimitCPU;

    /**
     * @description The maximum size of the memory that is available to the OPA proxy container.
     *
     * @example 1024Mi
     *
     * @var string
     */
    public $OPALimitMemory;

    /**
     * @description The log level of the OPA proxy container.
     *
     *   `info`: outputs all information.
     *   `debug`: outputs debugging and error information.
     *   `error`: outputs only error information.
     *
     * @example info
     *
     * @var string
     */
    public $OPALogLevel;

    /**
     * @description The number of CPU cores that are requested by the OPA proxy container.
     *
     * @example 1
     *
     * @var string
     */
    public $OPARequestCPU;

    /**
     * @description The size of the memory that is requested by the OPA proxy container.
     *
     * @example 512Mi
     *
     * @var string
     */
    public $OPARequestMemory;

    /**
     * @description The minimum number of CPU cores requested by the pod that injects OPA proxies into application pods. For example, `1000m` indicates one CPU core.
     *
     * @example false
     *
     * @var bool
     */
    public $OPAScopeInjected;

    /**
     * @description Specifies whether to enable the OPA plug-in. Valid values:
     *
     *   `true`: enables the OPA plug-in.
     *   `false`: disables the OPA plug-in.
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
     *   `true`: installs the OPA plug-in.
     *   `false`: does not install the OPA plug-in.
     *
     * Default value: `false`.
     * @example false
     *
     * @var bool
     */
    public $openAgentPolicy;

    /**
     * @description The policy for accessing external services. Valid values:
     *
     *   `ALLOW_ANY`: allows access to all external services.
     *   `REGISTRY_ONLY`: allows access to only the external services that are defined in the ServiceEntry of the ASM instance.
     *
     * @example ALLOW_ANY
     *
     * @var string
     */
    public $outboundTrafficPolicy;

    /**
     * @description The endpoint of Prometheus monitoring. If you use ARMS Prometheus, set this parameter to the endpoint of Prometheus provided by ARMS.
     *
     * @example http://prometheus:9090
     *
     * @var string
     */
    public $prometheusUrl;

    /**
     * @description The maximum number of CPU cores that are available to the istio-init container.
     *
     * @example 2000m
     *
     * @var string
     */
    public $proxyInitCPUResourceLimit;

    /**
     * @description The number of CPU cores that are requested by the istio-init container.
     *
     * @example 10m
     *
     * @var string
     */
    public $proxyInitCPUResourceRequest;

    /**
     * @description The maximum size of the memory that is available to the istio-init container.
     *
     * @example 1024Mi
     *
     * @var string
     */
    public $proxyInitMemoryResourceLimit;

    /**
     * @description The size of the memory that is requested by the istio-init container.
     *
     * @example 10Mi
     *
     * @var string
     */
    public $proxyInitMemoryResourceRequest;

    /**
     * @description The maximum number of CPU cores that are available to the sidecar proxy container.
     *
     * @example 2000m
     *
     * @var string
     */
    public $proxyLimitCPU;

    /**
     * @description The maximum size of the memory that is available to the sidecar proxy container.
     *
     * @example 1024Mi
     *
     * @var string
     */
    public $proxyLimitMemory;

    /**
     * @description The number of CPU cores that are requested by the sidecar proxy container.
     *
     * @example 100m
     *
     * @var string
     */
    public $proxyRequestCPU;

    /**
     * @description The size of the memory that is requested by the sidecar proxy container.
     *
     * @example 128Mi
     *
     * @var string
     */
    public $proxyRequestMemory;

    /**
     * @description The mode in which the sidecar proxy intercepts inbound traffic. Valid values:
     *
     *   `REDIRECT`: The sidecar proxy intercepts inbound traffic in the REDIRECT mode.
     *   `TPROXY`: The sidecar proxy intercepts inbound traffic in the TPROXY mode.
     *
     * @example {"inclusionRegexps":".*adaptive_concurrency.*"}
     *
     * @var string
     */
    public $proxyStatsMatcher;

    /**
     * @description Specifies whether to enable Redis Filter. Valid values:
     *
     *   `true`: enables Redis Filter.
     *   `false`: disables Redis Filter.
     *
     * Default value: `false`.
     * @example false
     *
     * @var bool
     */
    public $redisFilterEnabled;

    /**
     * @description The ID of the ASM instance.
     *
     * @example cb8963379255149cb98c8686f274x****
     *
     * @var string
     */
    public $serviceMeshId;

    /**
     * @description The maximum number of CPU cores that are available to the pod where a sidecar proxy injector resides.
     *
     * @example 4000m
     *
     * @var string
     */
    public $sidecarInjectorLimitCPU;

    /**
     * @description The maximum size of the memory that is available to the pod where a sidecar proxy injector resides.
     *
     * @example 2048Mi
     *
     * @var string
     */
    public $sidecarInjectorLimitMemory;

    /**
     * @description The number of CPU cores that are requested by the pod where a sidecar proxy injector resides.
     *
     * @example 1000m
     *
     * @var string
     */
    public $sidecarInjectorRequestCPU;

    /**
     * @description The size of the memory that is requested by the pod where a sidecar proxy injector resides.
     *
     * @example 512Mi
     *
     * @var string
     */
    public $sidecarInjectorRequestMemory;

    /**
     * @description Other configurations of automatic sidecar proxy injection, in the YAML format.
     *
     * @example {"injectedAnnotations":{"test/istio-init":"runtime/default2","test/istio-proxy":"runtime/default"},"replicaCount":2,"nodeSelector":{"beta.kubernetes.io/os":"linux"}}
     *
     * @var string
     */
    public $sidecarInjectorWebhookAsYaml;

    /**
     * @description Specifies whether to enable Prometheus monitoring. We recommend that you enable [ARMS Prometheus](https://arms.console.aliyun.com/). Valid values:
     *
     *   `true`: enables Prometheus monitoring.
     *   `false`: disables Prometheus monitoring.
     *
     * Default value: `false`.
     * @example false
     *
     * @var bool
     */
    public $telemetry;

    /**
     * @description The maximum period of time that the sidecar proxy waits for requests to be processed before the proxy is stopped. For example, if you want to specify a period of 5 seconds, set this parameter to 5s.
     *
     * @example 5s
     *
     * @var string
     */
    public $terminationDrainDuration;

    /**
     * @description Specifies whether to enable Thrift Filter. Valid values:
     *
     *   `true`: enables Thrift Filter.
     *   `false`: disables Thrift Filter.
     *
     * Default value: `false`.
     * @example false
     *
     * @var bool
     */
    public $thriftFilterEnabled;

    /**
     * @description The custom tag of Tracing Analysis. Specify this parameter in the JSON format.
     *
     * }
     * @example {"mytag": {"literal":{"value":"test"}}}
     *
     * @var string
     */
    public $traceCustomTags;

    /**
     * @description The maximum length of the request path contained in the HttpUrl span tag. Default value: `256`.
     *
     * @example 256
     *
     * @var string
     */
    public $traceMaxPathTagLength;

    /**
     * @description The sampling percentage of Tracing Analysis.
     *
     * @example 100
     *
     * @var float
     */
    public $traceSampling;

    /**
     * @description Specifies whether to enable the Tracing Analysis feature. To enable this feature, make sure that you have activated [Tracing Analysis](https://tracing-analysis.console.aliyun.com/). Valid values:
     *
     *   `true`: enables the Tracing Analysis feature.
     *   `false`: disables the Tracing Analysis feature.
     *
     * Default value: `false`.
     * @example false
     *
     * @var bool
     */
    public $tracing;

    /**
     * @description The maximum size of the memory that is available to the proxy service that exports Tracing Analysis data. For example, `1Mi` indicates 1 MB.
     *
     * @example 1000Mi
     *
     * @var string
     */
    public $tracingOnExtZipkinLimitCPU;

    /**
     * @description The retention period for the access logs of the ingress gateway. Unit: day. The logs are collected by using Log Service. For example, `30` indicates 30 days.
     *
     * @example 1024Mi
     *
     * @var string
     */
    public $tracingOnExtZipkinLimitMemory;

    /**
     * @description The minimum size of the memory requested by the proxy service that exports Tracing Analysis data. For example, `1Mi` indicates 1 MB.
     *
     * @example 200m
     *
     * @var string
     */
    public $tracingOnExtZipkinRequestCPU;

    /**
     * @description The maximum number of CPU cores that are available to the proxy service that exports Tracing Analysis data. For example, `1000m` indicates one CPU core.
     *
     * @example 200Mi
     *
     * @var string
     */
    public $tracingOnExtZipkinRequestMemory;

    /**
     * @description Specifies whether to enable WebAssembly Filter. Valid values:
     *
     *   `true`: enables WebAssembly Filter.
     *   `false`: disables WebAssembly Filter.
     *
     * Default value: `false`.
     * @example false
     *
     * @var bool
     */
    public $webAssemblyFilterEnabled;
    protected $_name = [
        'accessLogEnabled'                => 'AccessLogEnabled',
        'accessLogFile'                   => 'AccessLogFile',
        'accessLogFormat'                 => 'AccessLogFormat',
        'accessLogGatewayLifecycle'       => 'AccessLogGatewayLifecycle',
        'accessLogProject'                => 'AccessLogProject',
        'accessLogServiceEnabled'         => 'AccessLogServiceEnabled',
        'accessLogServiceHost'            => 'AccessLogServiceHost',
        'accessLogServicePort'            => 'AccessLogServicePort',
        'accessLogSidecarLifecycle'       => 'AccessLogSidecarLifecycle',
        'auditProject'                    => 'AuditProject',
        'autoInjectionPolicyEnabled'      => 'AutoInjectionPolicyEnabled',
        'CRAggregationEnabled'            => 'CRAggregationEnabled',
        'clusterSpec'                     => 'ClusterSpec',
        'cniEnabled'                      => 'CniEnabled',
        'cniExcludeNamespaces'            => 'CniExcludeNamespaces',
        'concurrency'                     => 'Concurrency',
        'configSourceEnabled'             => 'ConfigSourceEnabled',
        'configSourceNacosID'             => 'ConfigSourceNacosID',
        'customizedPrometheus'            => 'CustomizedPrometheus',
        'customizedZipkin'                => 'CustomizedZipkin',
        'DNSProxyingEnabled'              => 'DNSProxyingEnabled',
        'defaultComponentsScheduleConfig' => 'DefaultComponentsScheduleConfig',
        'discoverySelectors'              => 'DiscoverySelectors',
        'dubboFilterEnabled'              => 'DubboFilterEnabled',
        'enableAudit'                     => 'EnableAudit',
        'enableAutoDiagnosis'             => 'EnableAutoDiagnosis',
        'enableBootstrapXdsAgent'         => 'EnableBootstrapXdsAgent',
        'enableCRHistory'                 => 'EnableCRHistory',
        'enableNamespacesByDefault'       => 'EnableNamespacesByDefault',
        'enableSDSServer'                 => 'EnableSDSServer',
        'excludeIPRanges'                 => 'ExcludeIPRanges',
        'excludeInboundPorts'             => 'ExcludeInboundPorts',
        'excludeOutboundPorts'            => 'ExcludeOutboundPorts',
        'filterGatewayClusterConfig'      => 'FilterGatewayClusterConfig',
        'gatewayAPIEnabled'               => 'GatewayAPIEnabled',
        'holdApplicationUntilProxyStarts' => 'HoldApplicationUntilProxyStarts',
        'http10Enabled'                   => 'Http10Enabled',
        'includeIPRanges'                 => 'IncludeIPRanges',
        'includeInboundPorts'             => 'IncludeInboundPorts',
        'includeOutboundPorts'            => 'IncludeOutboundPorts',
        'integrateKiali'                  => 'IntegrateKiali',
        'interceptionMode'                => 'InterceptionMode',
        'kialiArmsAuthTokens'             => 'KialiArmsAuthTokens',
        'kialiEnabled'                    => 'KialiEnabled',
        'kialiServiceAnnotations'         => 'KialiServiceAnnotations',
        'lifecycle'                       => 'Lifecycle',
        'localityLBConf'                  => 'LocalityLBConf',
        'localityLoadBalancing'           => 'LocalityLoadBalancing',
        'logLevel'                        => 'LogLevel',
        'MSEEnabled'                      => 'MSEEnabled',
        'multiBufferEnabled'              => 'MultiBufferEnabled',
        'multiBufferPollDelay'            => 'MultiBufferPollDelay',
        'mysqlFilterEnabled'              => 'MysqlFilterEnabled',
        'NFDEnabled'                      => 'NFDEnabled',
        'NFDLabelPruned'                  => 'NFDLabelPruned',
        'OPAInjectorCPULimit'             => 'OPAInjectorCPULimit',
        'OPAInjectorCPURequirement'       => 'OPAInjectorCPURequirement',
        'OPAInjectorMemoryLimit'          => 'OPAInjectorMemoryLimit',
        'OPAInjectorMemoryRequirement'    => 'OPAInjectorMemoryRequirement',
        'OPALimitCPU'                     => 'OPALimitCPU',
        'OPALimitMemory'                  => 'OPALimitMemory',
        'OPALogLevel'                     => 'OPALogLevel',
        'OPARequestCPU'                   => 'OPARequestCPU',
        'OPARequestMemory'                => 'OPARequestMemory',
        'OPAScopeInjected'                => 'OPAScopeInjected',
        'opaEnabled'                      => 'OpaEnabled',
        'openAgentPolicy'                 => 'OpenAgentPolicy',
        'outboundTrafficPolicy'           => 'OutboundTrafficPolicy',
        'prometheusUrl'                   => 'PrometheusUrl',
        'proxyInitCPUResourceLimit'       => 'ProxyInitCPUResourceLimit',
        'proxyInitCPUResourceRequest'     => 'ProxyInitCPUResourceRequest',
        'proxyInitMemoryResourceLimit'    => 'ProxyInitMemoryResourceLimit',
        'proxyInitMemoryResourceRequest'  => 'ProxyInitMemoryResourceRequest',
        'proxyLimitCPU'                   => 'ProxyLimitCPU',
        'proxyLimitMemory'                => 'ProxyLimitMemory',
        'proxyRequestCPU'                 => 'ProxyRequestCPU',
        'proxyRequestMemory'              => 'ProxyRequestMemory',
        'proxyStatsMatcher'               => 'ProxyStatsMatcher',
        'redisFilterEnabled'              => 'RedisFilterEnabled',
        'serviceMeshId'                   => 'ServiceMeshId',
        'sidecarInjectorLimitCPU'         => 'SidecarInjectorLimitCPU',
        'sidecarInjectorLimitMemory'      => 'SidecarInjectorLimitMemory',
        'sidecarInjectorRequestCPU'       => 'SidecarInjectorRequestCPU',
        'sidecarInjectorRequestMemory'    => 'SidecarInjectorRequestMemory',
        'sidecarInjectorWebhookAsYaml'    => 'SidecarInjectorWebhookAsYaml',
        'telemetry'                       => 'Telemetry',
        'terminationDrainDuration'        => 'TerminationDrainDuration',
        'thriftFilterEnabled'             => 'ThriftFilterEnabled',
        'traceCustomTags'                 => 'TraceCustomTags',
        'traceMaxPathTagLength'           => 'TraceMaxPathTagLength',
        'traceSampling'                   => 'TraceSampling',
        'tracing'                         => 'Tracing',
        'tracingOnExtZipkinLimitCPU'      => 'TracingOnExtZipkinLimitCPU',
        'tracingOnExtZipkinLimitMemory'   => 'TracingOnExtZipkinLimitMemory',
        'tracingOnExtZipkinRequestCPU'    => 'TracingOnExtZipkinRequestCPU',
        'tracingOnExtZipkinRequestMemory' => 'TracingOnExtZipkinRequestMemory',
        'webAssemblyFilterEnabled'        => 'WebAssemblyFilterEnabled',
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
        if (null !== $this->accessLogGatewayLifecycle) {
            $res['AccessLogGatewayLifecycle'] = $this->accessLogGatewayLifecycle;
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
        if (null !== $this->accessLogSidecarLifecycle) {
            $res['AccessLogSidecarLifecycle'] = $this->accessLogSidecarLifecycle;
        }
        if (null !== $this->auditProject) {
            $res['AuditProject'] = $this->auditProject;
        }
        if (null !== $this->autoInjectionPolicyEnabled) {
            $res['AutoInjectionPolicyEnabled'] = $this->autoInjectionPolicyEnabled;
        }
        if (null !== $this->CRAggregationEnabled) {
            $res['CRAggregationEnabled'] = $this->CRAggregationEnabled;
        }
        if (null !== $this->clusterSpec) {
            $res['ClusterSpec'] = $this->clusterSpec;
        }
        if (null !== $this->cniEnabled) {
            $res['CniEnabled'] = $this->cniEnabled;
        }
        if (null !== $this->cniExcludeNamespaces) {
            $res['CniExcludeNamespaces'] = $this->cniExcludeNamespaces;
        }
        if (null !== $this->concurrency) {
            $res['Concurrency'] = $this->concurrency;
        }
        if (null !== $this->configSourceEnabled) {
            $res['ConfigSourceEnabled'] = $this->configSourceEnabled;
        }
        if (null !== $this->configSourceNacosID) {
            $res['ConfigSourceNacosID'] = $this->configSourceNacosID;
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
        if (null !== $this->defaultComponentsScheduleConfig) {
            $res['DefaultComponentsScheduleConfig'] = $this->defaultComponentsScheduleConfig;
        }
        if (null !== $this->discoverySelectors) {
            $res['DiscoverySelectors'] = $this->discoverySelectors;
        }
        if (null !== $this->dubboFilterEnabled) {
            $res['DubboFilterEnabled'] = $this->dubboFilterEnabled;
        }
        if (null !== $this->enableAudit) {
            $res['EnableAudit'] = $this->enableAudit;
        }
        if (null !== $this->enableAutoDiagnosis) {
            $res['EnableAutoDiagnosis'] = $this->enableAutoDiagnosis;
        }
        if (null !== $this->enableBootstrapXdsAgent) {
            $res['EnableBootstrapXdsAgent'] = $this->enableBootstrapXdsAgent;
        }
        if (null !== $this->enableCRHistory) {
            $res['EnableCRHistory'] = $this->enableCRHistory;
        }
        if (null !== $this->enableNamespacesByDefault) {
            $res['EnableNamespacesByDefault'] = $this->enableNamespacesByDefault;
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
        if (null !== $this->filterGatewayClusterConfig) {
            $res['FilterGatewayClusterConfig'] = $this->filterGatewayClusterConfig;
        }
        if (null !== $this->gatewayAPIEnabled) {
            $res['GatewayAPIEnabled'] = $this->gatewayAPIEnabled;
        }
        if (null !== $this->holdApplicationUntilProxyStarts) {
            $res['HoldApplicationUntilProxyStarts'] = $this->holdApplicationUntilProxyStarts;
        }
        if (null !== $this->http10Enabled) {
            $res['Http10Enabled'] = $this->http10Enabled;
        }
        if (null !== $this->includeIPRanges) {
            $res['IncludeIPRanges'] = $this->includeIPRanges;
        }
        if (null !== $this->includeInboundPorts) {
            $res['IncludeInboundPorts'] = $this->includeInboundPorts;
        }
        if (null !== $this->includeOutboundPorts) {
            $res['IncludeOutboundPorts'] = $this->includeOutboundPorts;
        }
        if (null !== $this->integrateKiali) {
            $res['IntegrateKiali'] = $this->integrateKiali;
        }
        if (null !== $this->interceptionMode) {
            $res['InterceptionMode'] = $this->interceptionMode;
        }
        if (null !== $this->kialiArmsAuthTokens) {
            $res['KialiArmsAuthTokens'] = $this->kialiArmsAuthTokens;
        }
        if (null !== $this->kialiEnabled) {
            $res['KialiEnabled'] = $this->kialiEnabled;
        }
        if (null !== $this->kialiServiceAnnotations) {
            $res['KialiServiceAnnotations'] = $this->kialiServiceAnnotations;
        }
        if (null !== $this->lifecycle) {
            $res['Lifecycle'] = $this->lifecycle;
        }
        if (null !== $this->localityLBConf) {
            $res['LocalityLBConf'] = $this->localityLBConf;
        }
        if (null !== $this->localityLoadBalancing) {
            $res['LocalityLoadBalancing'] = $this->localityLoadBalancing;
        }
        if (null !== $this->logLevel) {
            $res['LogLevel'] = $this->logLevel;
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
        if (null !== $this->NFDEnabled) {
            $res['NFDEnabled'] = $this->NFDEnabled;
        }
        if (null !== $this->NFDLabelPruned) {
            $res['NFDLabelPruned'] = $this->NFDLabelPruned;
        }
        if (null !== $this->OPAInjectorCPULimit) {
            $res['OPAInjectorCPULimit'] = $this->OPAInjectorCPULimit;
        }
        if (null !== $this->OPAInjectorCPURequirement) {
            $res['OPAInjectorCPURequirement'] = $this->OPAInjectorCPURequirement;
        }
        if (null !== $this->OPAInjectorMemoryLimit) {
            $res['OPAInjectorMemoryLimit'] = $this->OPAInjectorMemoryLimit;
        }
        if (null !== $this->OPAInjectorMemoryRequirement) {
            $res['OPAInjectorMemoryRequirement'] = $this->OPAInjectorMemoryRequirement;
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
        if (null !== $this->OPAScopeInjected) {
            $res['OPAScopeInjected'] = $this->OPAScopeInjected;
        }
        if (null !== $this->opaEnabled) {
            $res['OpaEnabled'] = $this->opaEnabled;
        }
        if (null !== $this->openAgentPolicy) {
            $res['OpenAgentPolicy'] = $this->openAgentPolicy;
        }
        if (null !== $this->outboundTrafficPolicy) {
            $res['OutboundTrafficPolicy'] = $this->outboundTrafficPolicy;
        }
        if (null !== $this->prometheusUrl) {
            $res['PrometheusUrl'] = $this->prometheusUrl;
        }
        if (null !== $this->proxyInitCPUResourceLimit) {
            $res['ProxyInitCPUResourceLimit'] = $this->proxyInitCPUResourceLimit;
        }
        if (null !== $this->proxyInitCPUResourceRequest) {
            $res['ProxyInitCPUResourceRequest'] = $this->proxyInitCPUResourceRequest;
        }
        if (null !== $this->proxyInitMemoryResourceLimit) {
            $res['ProxyInitMemoryResourceLimit'] = $this->proxyInitMemoryResourceLimit;
        }
        if (null !== $this->proxyInitMemoryResourceRequest) {
            $res['ProxyInitMemoryResourceRequest'] = $this->proxyInitMemoryResourceRequest;
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
        if (null !== $this->proxyStatsMatcher) {
            $res['ProxyStatsMatcher'] = $this->proxyStatsMatcher;
        }
        if (null !== $this->redisFilterEnabled) {
            $res['RedisFilterEnabled'] = $this->redisFilterEnabled;
        }
        if (null !== $this->serviceMeshId) {
            $res['ServiceMeshId'] = $this->serviceMeshId;
        }
        if (null !== $this->sidecarInjectorLimitCPU) {
            $res['SidecarInjectorLimitCPU'] = $this->sidecarInjectorLimitCPU;
        }
        if (null !== $this->sidecarInjectorLimitMemory) {
            $res['SidecarInjectorLimitMemory'] = $this->sidecarInjectorLimitMemory;
        }
        if (null !== $this->sidecarInjectorRequestCPU) {
            $res['SidecarInjectorRequestCPU'] = $this->sidecarInjectorRequestCPU;
        }
        if (null !== $this->sidecarInjectorRequestMemory) {
            $res['SidecarInjectorRequestMemory'] = $this->sidecarInjectorRequestMemory;
        }
        if (null !== $this->sidecarInjectorWebhookAsYaml) {
            $res['SidecarInjectorWebhookAsYaml'] = $this->sidecarInjectorWebhookAsYaml;
        }
        if (null !== $this->telemetry) {
            $res['Telemetry'] = $this->telemetry;
        }
        if (null !== $this->terminationDrainDuration) {
            $res['TerminationDrainDuration'] = $this->terminationDrainDuration;
        }
        if (null !== $this->thriftFilterEnabled) {
            $res['ThriftFilterEnabled'] = $this->thriftFilterEnabled;
        }
        if (null !== $this->traceCustomTags) {
            $res['TraceCustomTags'] = $this->traceCustomTags;
        }
        if (null !== $this->traceMaxPathTagLength) {
            $res['TraceMaxPathTagLength'] = $this->traceMaxPathTagLength;
        }
        if (null !== $this->traceSampling) {
            $res['TraceSampling'] = $this->traceSampling;
        }
        if (null !== $this->tracing) {
            $res['Tracing'] = $this->tracing;
        }
        if (null !== $this->tracingOnExtZipkinLimitCPU) {
            $res['TracingOnExtZipkinLimitCPU'] = $this->tracingOnExtZipkinLimitCPU;
        }
        if (null !== $this->tracingOnExtZipkinLimitMemory) {
            $res['TracingOnExtZipkinLimitMemory'] = $this->tracingOnExtZipkinLimitMemory;
        }
        if (null !== $this->tracingOnExtZipkinRequestCPU) {
            $res['TracingOnExtZipkinRequestCPU'] = $this->tracingOnExtZipkinRequestCPU;
        }
        if (null !== $this->tracingOnExtZipkinRequestMemory) {
            $res['TracingOnExtZipkinRequestMemory'] = $this->tracingOnExtZipkinRequestMemory;
        }
        if (null !== $this->webAssemblyFilterEnabled) {
            $res['WebAssemblyFilterEnabled'] = $this->webAssemblyFilterEnabled;
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
        if (isset($map['AccessLogEnabled'])) {
            $model->accessLogEnabled = $map['AccessLogEnabled'];
        }
        if (isset($map['AccessLogFile'])) {
            $model->accessLogFile = $map['AccessLogFile'];
        }
        if (isset($map['AccessLogFormat'])) {
            $model->accessLogFormat = $map['AccessLogFormat'];
        }
        if (isset($map['AccessLogGatewayLifecycle'])) {
            $model->accessLogGatewayLifecycle = $map['AccessLogGatewayLifecycle'];
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
        if (isset($map['AccessLogSidecarLifecycle'])) {
            $model->accessLogSidecarLifecycle = $map['AccessLogSidecarLifecycle'];
        }
        if (isset($map['AuditProject'])) {
            $model->auditProject = $map['AuditProject'];
        }
        if (isset($map['AutoInjectionPolicyEnabled'])) {
            $model->autoInjectionPolicyEnabled = $map['AutoInjectionPolicyEnabled'];
        }
        if (isset($map['CRAggregationEnabled'])) {
            $model->CRAggregationEnabled = $map['CRAggregationEnabled'];
        }
        if (isset($map['ClusterSpec'])) {
            $model->clusterSpec = $map['ClusterSpec'];
        }
        if (isset($map['CniEnabled'])) {
            $model->cniEnabled = $map['CniEnabled'];
        }
        if (isset($map['CniExcludeNamespaces'])) {
            $model->cniExcludeNamespaces = $map['CniExcludeNamespaces'];
        }
        if (isset($map['Concurrency'])) {
            $model->concurrency = $map['Concurrency'];
        }
        if (isset($map['ConfigSourceEnabled'])) {
            $model->configSourceEnabled = $map['ConfigSourceEnabled'];
        }
        if (isset($map['ConfigSourceNacosID'])) {
            $model->configSourceNacosID = $map['ConfigSourceNacosID'];
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
        if (isset($map['DefaultComponentsScheduleConfig'])) {
            $model->defaultComponentsScheduleConfig = $map['DefaultComponentsScheduleConfig'];
        }
        if (isset($map['DiscoverySelectors'])) {
            $model->discoverySelectors = $map['DiscoverySelectors'];
        }
        if (isset($map['DubboFilterEnabled'])) {
            $model->dubboFilterEnabled = $map['DubboFilterEnabled'];
        }
        if (isset($map['EnableAudit'])) {
            $model->enableAudit = $map['EnableAudit'];
        }
        if (isset($map['EnableAutoDiagnosis'])) {
            $model->enableAutoDiagnosis = $map['EnableAutoDiagnosis'];
        }
        if (isset($map['EnableBootstrapXdsAgent'])) {
            $model->enableBootstrapXdsAgent = $map['EnableBootstrapXdsAgent'];
        }
        if (isset($map['EnableCRHistory'])) {
            $model->enableCRHistory = $map['EnableCRHistory'];
        }
        if (isset($map['EnableNamespacesByDefault'])) {
            $model->enableNamespacesByDefault = $map['EnableNamespacesByDefault'];
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
        if (isset($map['FilterGatewayClusterConfig'])) {
            $model->filterGatewayClusterConfig = $map['FilterGatewayClusterConfig'];
        }
        if (isset($map['GatewayAPIEnabled'])) {
            $model->gatewayAPIEnabled = $map['GatewayAPIEnabled'];
        }
        if (isset($map['HoldApplicationUntilProxyStarts'])) {
            $model->holdApplicationUntilProxyStarts = $map['HoldApplicationUntilProxyStarts'];
        }
        if (isset($map['Http10Enabled'])) {
            $model->http10Enabled = $map['Http10Enabled'];
        }
        if (isset($map['IncludeIPRanges'])) {
            $model->includeIPRanges = $map['IncludeIPRanges'];
        }
        if (isset($map['IncludeInboundPorts'])) {
            $model->includeInboundPorts = $map['IncludeInboundPorts'];
        }
        if (isset($map['IncludeOutboundPorts'])) {
            $model->includeOutboundPorts = $map['IncludeOutboundPorts'];
        }
        if (isset($map['IntegrateKiali'])) {
            $model->integrateKiali = $map['IntegrateKiali'];
        }
        if (isset($map['InterceptionMode'])) {
            $model->interceptionMode = $map['InterceptionMode'];
        }
        if (isset($map['KialiArmsAuthTokens'])) {
            $model->kialiArmsAuthTokens = $map['KialiArmsAuthTokens'];
        }
        if (isset($map['KialiEnabled'])) {
            $model->kialiEnabled = $map['KialiEnabled'];
        }
        if (isset($map['KialiServiceAnnotations'])) {
            $model->kialiServiceAnnotations = $map['KialiServiceAnnotations'];
        }
        if (isset($map['Lifecycle'])) {
            $model->lifecycle = $map['Lifecycle'];
        }
        if (isset($map['LocalityLBConf'])) {
            $model->localityLBConf = $map['LocalityLBConf'];
        }
        if (isset($map['LocalityLoadBalancing'])) {
            $model->localityLoadBalancing = $map['LocalityLoadBalancing'];
        }
        if (isset($map['LogLevel'])) {
            $model->logLevel = $map['LogLevel'];
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
        if (isset($map['NFDEnabled'])) {
            $model->NFDEnabled = $map['NFDEnabled'];
        }
        if (isset($map['NFDLabelPruned'])) {
            $model->NFDLabelPruned = $map['NFDLabelPruned'];
        }
        if (isset($map['OPAInjectorCPULimit'])) {
            $model->OPAInjectorCPULimit = $map['OPAInjectorCPULimit'];
        }
        if (isset($map['OPAInjectorCPURequirement'])) {
            $model->OPAInjectorCPURequirement = $map['OPAInjectorCPURequirement'];
        }
        if (isset($map['OPAInjectorMemoryLimit'])) {
            $model->OPAInjectorMemoryLimit = $map['OPAInjectorMemoryLimit'];
        }
        if (isset($map['OPAInjectorMemoryRequirement'])) {
            $model->OPAInjectorMemoryRequirement = $map['OPAInjectorMemoryRequirement'];
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
        if (isset($map['OPAScopeInjected'])) {
            $model->OPAScopeInjected = $map['OPAScopeInjected'];
        }
        if (isset($map['OpaEnabled'])) {
            $model->opaEnabled = $map['OpaEnabled'];
        }
        if (isset($map['OpenAgentPolicy'])) {
            $model->openAgentPolicy = $map['OpenAgentPolicy'];
        }
        if (isset($map['OutboundTrafficPolicy'])) {
            $model->outboundTrafficPolicy = $map['OutboundTrafficPolicy'];
        }
        if (isset($map['PrometheusUrl'])) {
            $model->prometheusUrl = $map['PrometheusUrl'];
        }
        if (isset($map['ProxyInitCPUResourceLimit'])) {
            $model->proxyInitCPUResourceLimit = $map['ProxyInitCPUResourceLimit'];
        }
        if (isset($map['ProxyInitCPUResourceRequest'])) {
            $model->proxyInitCPUResourceRequest = $map['ProxyInitCPUResourceRequest'];
        }
        if (isset($map['ProxyInitMemoryResourceLimit'])) {
            $model->proxyInitMemoryResourceLimit = $map['ProxyInitMemoryResourceLimit'];
        }
        if (isset($map['ProxyInitMemoryResourceRequest'])) {
            $model->proxyInitMemoryResourceRequest = $map['ProxyInitMemoryResourceRequest'];
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
        if (isset($map['ProxyStatsMatcher'])) {
            $model->proxyStatsMatcher = $map['ProxyStatsMatcher'];
        }
        if (isset($map['RedisFilterEnabled'])) {
            $model->redisFilterEnabled = $map['RedisFilterEnabled'];
        }
        if (isset($map['ServiceMeshId'])) {
            $model->serviceMeshId = $map['ServiceMeshId'];
        }
        if (isset($map['SidecarInjectorLimitCPU'])) {
            $model->sidecarInjectorLimitCPU = $map['SidecarInjectorLimitCPU'];
        }
        if (isset($map['SidecarInjectorLimitMemory'])) {
            $model->sidecarInjectorLimitMemory = $map['SidecarInjectorLimitMemory'];
        }
        if (isset($map['SidecarInjectorRequestCPU'])) {
            $model->sidecarInjectorRequestCPU = $map['SidecarInjectorRequestCPU'];
        }
        if (isset($map['SidecarInjectorRequestMemory'])) {
            $model->sidecarInjectorRequestMemory = $map['SidecarInjectorRequestMemory'];
        }
        if (isset($map['SidecarInjectorWebhookAsYaml'])) {
            $model->sidecarInjectorWebhookAsYaml = $map['SidecarInjectorWebhookAsYaml'];
        }
        if (isset($map['Telemetry'])) {
            $model->telemetry = $map['Telemetry'];
        }
        if (isset($map['TerminationDrainDuration'])) {
            $model->terminationDrainDuration = $map['TerminationDrainDuration'];
        }
        if (isset($map['ThriftFilterEnabled'])) {
            $model->thriftFilterEnabled = $map['ThriftFilterEnabled'];
        }
        if (isset($map['TraceCustomTags'])) {
            $model->traceCustomTags = $map['TraceCustomTags'];
        }
        if (isset($map['TraceMaxPathTagLength'])) {
            $model->traceMaxPathTagLength = $map['TraceMaxPathTagLength'];
        }
        if (isset($map['TraceSampling'])) {
            $model->traceSampling = $map['TraceSampling'];
        }
        if (isset($map['Tracing'])) {
            $model->tracing = $map['Tracing'];
        }
        if (isset($map['TracingOnExtZipkinLimitCPU'])) {
            $model->tracingOnExtZipkinLimitCPU = $map['TracingOnExtZipkinLimitCPU'];
        }
        if (isset($map['TracingOnExtZipkinLimitMemory'])) {
            $model->tracingOnExtZipkinLimitMemory = $map['TracingOnExtZipkinLimitMemory'];
        }
        if (isset($map['TracingOnExtZipkinRequestCPU'])) {
            $model->tracingOnExtZipkinRequestCPU = $map['TracingOnExtZipkinRequestCPU'];
        }
        if (isset($map['TracingOnExtZipkinRequestMemory'])) {
            $model->tracingOnExtZipkinRequestMemory = $map['TracingOnExtZipkinRequestMemory'];
        }
        if (isset($map['WebAssemblyFilterEnabled'])) {
            $model->webAssemblyFilterEnabled = $map['WebAssemblyFilterEnabled'];
        }

        return $model;
    }
}
