<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20190910\Models;

use AlibabaCloud\Tea\Model;

class ModifyDomainRequest extends Model
{
    /**
     * @description The method that WAF uses to obtain the actual IP address of a client. Valid values:
     *
     *   **0**: WAF reads the first value of the X-Forwarded-For (XFF) header field as the actual IP address of the client. This is the default value.
     *   **1**: WAF reads the value of a custom header field as the actual IP address of the client.
     *
     * >  You need to specify the parameter only when the **IsAccessProduct** parameter is set to **1**.
     * @example 0
     *
     * @var int
     */
    public $accessHeaderMode;

    /**
     * @description The custom header fields that are used to obtain the actual IP address of a client. Specify the value in the `["header1","header2",...]` format.
     *
     * >  You need to specify the parameter only when the **AccessHeaderMode** parameter is set to **1**.
     * @example ["X-Client-IP"]
     *
     * @var string
     */
    public $accessHeaders;

    /**
     * @description The mode that is used to add the domain name. Valid values:
     *
     *   **waf-cloud-dns**: CNAME record mode. This is the default value.
     *   **waf-cloud-native**: transparent proxy mode.
     *
     * @example waf-cloud-dns
     *
     * @var string
     */
    public $accessType;

    /**
     * @description The list of server and port configurations for the transparent proxy mode. The value is a string that consists of JSON arrays. Each element in a JSON array is a JSON struct that contains the following fields:
     *
     *   **ProtocolPortConfigs**: the list of protocol and port configurations. This field is required. Data type: array. Each element in a JSON array is a JSON struct that contains the following fields:
     *
     *   **Ports**: the list of ports. This field is required. Data type: array. The value is in the `[port1,port2,……]` format.
     *   **Protocol**: the protocol. This field is required. Data type: string. Valid values: **http** and **https**.
     *
     *   **CloudNativeProductName**: the type of the cloud service instance. This field is required. Data type: string. Valid values: **ECS**, **SLB**, and **ALB**.
     *
     *   **RedirectionTypeName**: the type of traffic redirection port. This field is required. Data type: string. Valid values: **ECS**, **SLB-L4**, **SLB-L7**, and **ALB**.
     *
     *   **InstanceId**: the ID of the cloud service instance. This field is required. Data type: string.
     *
     *   **IPAddressList**: the list of public IP addresses of the cloud service instance. This field is required. Data type: array. The value is in the `["ip1","ip2",...]` format.
     *
     * >  You need to specify the parameter only when the value of the **AccessType** parameter is set to **waf-cloud-native**.
     * @example [{"ProtocolPortConfigs":[{"Ports":[80],"Protocol":"http"}],"RedirectionTypeName":"ALB","InstanceId":"alb-s65nua68wdedsp****","IPAddressList":["182.XX.XX.113"],"CloudNativeProductName":"ALB"}]
     *
     * @var string
     */
    public $cloudNativeInstances;

    /**
     * @description The type of WAF protection cluster. Valid values:
     *
     *   **0**: shared cluster. This is the default value.
     *   **1**: exclusive cluster.
     *
     * >  You need to specify the parameter only when the value of the **AccessType** parameter is set to **waf-cloud-dns**.
     * @example 0
     *
     * @var int
     */
    public $clusterType;

    /**
     * @description The timeout period for connections of WAF exclusive clusters. Unit: seconds.
     *
     * >  You need to specify the parameter only when the value of the **AccessType** parameter is set to **waf-cloud-dns** and the value of the **ClusterType** parameter is set to **1**.
     * @example 5
     *
     * @var int
     */
    public $connectionTime;

    /**
     * @description The domain name whose configurations you want to modify.
     *
     * This parameter is required.
     * @example www.example.com
     *
     * @var string
     */
    public $domain;

    /**
     * @description The HTTP/2 ports. Specify the value in the `["port1","port2",...]` format.
     *
     * >  You need to specify this parameter only when the value of the **AccessType** parameter is set to **waf-cloud-dns** and the **HttpsPort** parameter is not empty. If the HttpsPort parameter is not empty, your website uses HTTPS.
     * @example [443]
     *
     * @var string
     */
    public $http2Port;

    /**
     * @description The HTTP ports. Specify the value in the `["port1","port2",...]` format.
     *
     * >  You need to specify the parameter only when the value of the **AccessType** parameter is set to **waf-cloud-dns**. If you specify this parameter, your website uses HTTP. You must specify at least one of the **HttpPort** and **HttpsPort** parameters.
     * @example [80]
     *
     * @var string
     */
    public $httpPort;

    /**
     * @description Specifies whether to enable the feature of redirecting HTTPS requests to HTTP requests. If you enable the feature, HTTPS requests are redirected to HTTP requests on port 80, which is used by default. Valid values:
     *
     *   **0**: disables the feature. This is the default value.
     *   **1**: enables the feature.
     *
     * >  You need to specify this parameter only when the value of the **AccessType** parameter is set to **waf-cloud-dns** and the **HttpsPort** parameter is not empty. If the HttpsPort parameter is not empty, your website uses HTTPS.
     * @example 0
     *
     * @var int
     */
    public $httpToUserIp;

    /**
     * @description The HTTPS ports. Specify the value in the `["port1","port2",...]` format.
     *
     * >  You need to specify the parameter only when the value of the **AccessType** parameter is set to **waf-cloud-dns**. If you specify this parameter, your website uses HTTPS. You must specify at least one of the **HttpPort** and **HttpsPort** parameters.
     * @example [443]
     *
     * @var string
     */
    public $httpsPort;

    /**
     * @description Specifies whether to enable the feature of redirecting HTTP requests to HTTPS requests. If you enable the feature, HTTP requests are redirected to HTTPS requests on port 443, which is used by default. Valid values:
     *
     *   **0**: disables the feature. This is the default value.
     *   **1**: enables the feature.
     *
     * >  You need to specify this parameter only when the value of the **AccessType** parameter is set to **waf-cloud-dns** and the **HttpsPort** parameter is not empty. If the HttpsPort parameter is not empty, your website uses HTTPS.
     * @example 0
     *
     * @var int
     */
    public $httpsRedirect;

    /**
     * @description The ID of the WAF instance.
     *
     * This parameter is required.
     * @example waf-cn-7pp26f1****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description Specifies whether to enable the feature of forwarding requests to the origin servers that use the IP address type specified in the requests. If you enable the feature, WAF forwards requests from IPv4 addresses to origin servers that use IPv4 addresses and requests from IPv6 addresses to origin servers that use IPv6 addresses. Valid values:
     *
     *   **0**: disables the feature. This is the default value.
     *   **1**: enables the feature.
     *
     * >  You need to specify the parameter only when the value of the **AccessType** parameter is set to **waf-cloud-dns**.
     * @example 0
     *
     * @var int
     */
    public $ipFollowStatus;

    /**
     * @description Specifies whether to deploy a Layer 7 proxy, which is used to filter inbound traffic before the traffic reaches the WAF instance. The supported Layer 7 proxies include Anti-DDoS Pro, Anti-DDoS Premium, and Alibaba Cloud CDN. Valid values:
     *
     *   **0**: does not configure a Layer 7 proxy
     *   **1**: configures a Layer 7 proxy
     *
     * This parameter is required.
     * @example 0
     *
     * @var int
     */
    public $isAccessProduct;

    /**
     * @example true
     *
     * @var bool
     */
    public $keepalive;

    /**
     * @example 1000
     *
     * @var int
     */
    public $keepaliveRequests;

    /**
     * @example 60
     *
     * @var int
     */
    public $keepaliveTimeout;

    /**
     * @description The load balancing algorithm that is used when WAF forwards requests to the origin server. Valid values:
     *
     *   **0**: IP hash
     *   **1**: round-robin
     *   **2**: least time
     *
     * >  You need to specify the parameter only when the value of the **AccessType** parameter is set to **waf-cloud-dns**.
     * @example 0
     *
     * @var int
     */
    public $loadBalancing;

    /**
     * @description The key-value pair that is used to mark the requests that pass through the WAF instance.
     *
     * >  If requests contain the custom header field, WAF overwrites the original value of the field with the specified value.
     * @example [{"k":"ALIWAF-TAG","v":"Yes"}]
     *
     * @var string
     */
    public $logHeaders;

    /**
     * @description The timeout period for read connections of WAF exclusive clusters. Unit: seconds.
     *
     * >  You need to specify the parameter only when the value of the **AccessType** parameter is set to **waf-cloud-dns** and the value of the **ClusterType** parameter is set to **1**.
     * @example 120
     *
     * @var int
     */
    public $readTime;

    /**
     * @description The region in which the WAF instance is deployed. Valid values:
     *
     *   **cn-hangzhou**: Chinese mainland.
     *   **ap-southeast-1**: outside the Chinese mainland.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example rg-atstuj3rtop****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @example true
     *
     * @var bool
     */
    public $retry;

    /**
     * @description The value of the custom SNI field. If this parameter is not specified, the value of the **Host** field in the request header is automatically used as the value of the SNI field.
     *
     * If you want WAF to use an SNI field whose value is different from the value of the Host field, you can specify a custom value for the SNI field.
     *
     * >  This parameter needs to be set only when the value of the **SniStatus** parameter is set to **1**.
     * @example waf.example.com
     *
     * @var string
     */
    public $sniHost;

    /**
     * @description Specifies whether to enable origin SNI. Origin Server Name Indication (SNI) specifies the domain name to which an HTTPS connection needs to be established at the start of the TLS handshaking process when WAF forwards requests to the origin server. If the origin server hosts multiple domain names, you must enable this feature. Valid values:
     *
     *   **0**: disables origin SNI.
     *   **1**: enables origin SNI.
     *
     * By default, origin SNI is disabled for WAF instances in the Chinese mainland and enabled for WAF instances outside the Chinese mainland.
     *
     * >  You need to specify this parameter only when the value of the **AccessType** parameter is set to **waf-cloud-dns** and the **HttpsPort** parameter is not empty. If the HttpsPort parameter is not empty, your website uses HTTPS.
     * @example 1
     *
     * @var int
     */
    public $sniStatus;

    /**
     * @description The address type of the origin server. The address can be an IP address or a domain name. You can specify only one type of address.
     *
     *   If you use the IP address type, specify the value in the `["ip1","ip2",...]` format. You can add up to 20 IP addresses.
     *   If you use the domain name type, specify the value in the `["domain"]` format. You can enter only one domain name.
     *
     * >  You need to specify the parameter only when the value of the **AccessType** parameter is set to **waf-cloud-dns**.
     * @example ["39.XX.XX.197"]
     *
     * @var string
     */
    public $sourceIps;

    /**
     * @description The timeout period for write connections of WAF exclusive clusters. Unit: seconds.
     *
     * >  You need to specify the parameter only when the value of the **AccessType** parameter is set to **waf-cloud-dns** and the value of the **ClusterType** parameter is set to **1**.
     * @example 120
     *
     * @var int
     */
    public $writeTime;
    protected $_name = [
        'accessHeaderMode'     => 'AccessHeaderMode',
        'accessHeaders'        => 'AccessHeaders',
        'accessType'           => 'AccessType',
        'cloudNativeInstances' => 'CloudNativeInstances',
        'clusterType'          => 'ClusterType',
        'connectionTime'       => 'ConnectionTime',
        'domain'               => 'Domain',
        'http2Port'            => 'Http2Port',
        'httpPort'             => 'HttpPort',
        'httpToUserIp'         => 'HttpToUserIp',
        'httpsPort'            => 'HttpsPort',
        'httpsRedirect'        => 'HttpsRedirect',
        'instanceId'           => 'InstanceId',
        'ipFollowStatus'       => 'IpFollowStatus',
        'isAccessProduct'      => 'IsAccessProduct',
        'keepalive'            => 'Keepalive',
        'keepaliveRequests'    => 'KeepaliveRequests',
        'keepaliveTimeout'     => 'KeepaliveTimeout',
        'loadBalancing'        => 'LoadBalancing',
        'logHeaders'           => 'LogHeaders',
        'readTime'             => 'ReadTime',
        'regionId'             => 'RegionId',
        'resourceGroupId'      => 'ResourceGroupId',
        'retry'                => 'Retry',
        'sniHost'              => 'SniHost',
        'sniStatus'            => 'SniStatus',
        'sourceIps'            => 'SourceIps',
        'writeTime'            => 'WriteTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessHeaderMode) {
            $res['AccessHeaderMode'] = $this->accessHeaderMode;
        }
        if (null !== $this->accessHeaders) {
            $res['AccessHeaders'] = $this->accessHeaders;
        }
        if (null !== $this->accessType) {
            $res['AccessType'] = $this->accessType;
        }
        if (null !== $this->cloudNativeInstances) {
            $res['CloudNativeInstances'] = $this->cloudNativeInstances;
        }
        if (null !== $this->clusterType) {
            $res['ClusterType'] = $this->clusterType;
        }
        if (null !== $this->connectionTime) {
            $res['ConnectionTime'] = $this->connectionTime;
        }
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->http2Port) {
            $res['Http2Port'] = $this->http2Port;
        }
        if (null !== $this->httpPort) {
            $res['HttpPort'] = $this->httpPort;
        }
        if (null !== $this->httpToUserIp) {
            $res['HttpToUserIp'] = $this->httpToUserIp;
        }
        if (null !== $this->httpsPort) {
            $res['HttpsPort'] = $this->httpsPort;
        }
        if (null !== $this->httpsRedirect) {
            $res['HttpsRedirect'] = $this->httpsRedirect;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->ipFollowStatus) {
            $res['IpFollowStatus'] = $this->ipFollowStatus;
        }
        if (null !== $this->isAccessProduct) {
            $res['IsAccessProduct'] = $this->isAccessProduct;
        }
        if (null !== $this->keepalive) {
            $res['Keepalive'] = $this->keepalive;
        }
        if (null !== $this->keepaliveRequests) {
            $res['KeepaliveRequests'] = $this->keepaliveRequests;
        }
        if (null !== $this->keepaliveTimeout) {
            $res['KeepaliveTimeout'] = $this->keepaliveTimeout;
        }
        if (null !== $this->loadBalancing) {
            $res['LoadBalancing'] = $this->loadBalancing;
        }
        if (null !== $this->logHeaders) {
            $res['LogHeaders'] = $this->logHeaders;
        }
        if (null !== $this->readTime) {
            $res['ReadTime'] = $this->readTime;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->retry) {
            $res['Retry'] = $this->retry;
        }
        if (null !== $this->sniHost) {
            $res['SniHost'] = $this->sniHost;
        }
        if (null !== $this->sniStatus) {
            $res['SniStatus'] = $this->sniStatus;
        }
        if (null !== $this->sourceIps) {
            $res['SourceIps'] = $this->sourceIps;
        }
        if (null !== $this->writeTime) {
            $res['WriteTime'] = $this->writeTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyDomainRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessHeaderMode'])) {
            $model->accessHeaderMode = $map['AccessHeaderMode'];
        }
        if (isset($map['AccessHeaders'])) {
            $model->accessHeaders = $map['AccessHeaders'];
        }
        if (isset($map['AccessType'])) {
            $model->accessType = $map['AccessType'];
        }
        if (isset($map['CloudNativeInstances'])) {
            $model->cloudNativeInstances = $map['CloudNativeInstances'];
        }
        if (isset($map['ClusterType'])) {
            $model->clusterType = $map['ClusterType'];
        }
        if (isset($map['ConnectionTime'])) {
            $model->connectionTime = $map['ConnectionTime'];
        }
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['Http2Port'])) {
            $model->http2Port = $map['Http2Port'];
        }
        if (isset($map['HttpPort'])) {
            $model->httpPort = $map['HttpPort'];
        }
        if (isset($map['HttpToUserIp'])) {
            $model->httpToUserIp = $map['HttpToUserIp'];
        }
        if (isset($map['HttpsPort'])) {
            $model->httpsPort = $map['HttpsPort'];
        }
        if (isset($map['HttpsRedirect'])) {
            $model->httpsRedirect = $map['HttpsRedirect'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['IpFollowStatus'])) {
            $model->ipFollowStatus = $map['IpFollowStatus'];
        }
        if (isset($map['IsAccessProduct'])) {
            $model->isAccessProduct = $map['IsAccessProduct'];
        }
        if (isset($map['Keepalive'])) {
            $model->keepalive = $map['Keepalive'];
        }
        if (isset($map['KeepaliveRequests'])) {
            $model->keepaliveRequests = $map['KeepaliveRequests'];
        }
        if (isset($map['KeepaliveTimeout'])) {
            $model->keepaliveTimeout = $map['KeepaliveTimeout'];
        }
        if (isset($map['LoadBalancing'])) {
            $model->loadBalancing = $map['LoadBalancing'];
        }
        if (isset($map['LogHeaders'])) {
            $model->logHeaders = $map['LogHeaders'];
        }
        if (isset($map['ReadTime'])) {
            $model->readTime = $map['ReadTime'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['Retry'])) {
            $model->retry = $map['Retry'];
        }
        if (isset($map['SniHost'])) {
            $model->sniHost = $map['SniHost'];
        }
        if (isset($map['SniStatus'])) {
            $model->sniStatus = $map['SniStatus'];
        }
        if (isset($map['SourceIps'])) {
            $model->sourceIps = $map['SourceIps'];
        }
        if (isset($map['WriteTime'])) {
            $model->writeTime = $map['WriteTime'];
        }

        return $model;
    }
}
