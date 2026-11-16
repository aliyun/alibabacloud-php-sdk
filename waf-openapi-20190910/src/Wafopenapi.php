<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20190910;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\CreateCertificateByCertificateIdRequest;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\CreateCertificateByCertificateIdResponse;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\CreateCertificateRequest;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\CreateCertificateResponse;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\CreateDomainRequest;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\CreateDomainResponse;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\CreateProtectionModuleRuleRequest;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\CreateProtectionModuleRuleResponse;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\DeleteDomainRequest;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\DeleteDomainResponse;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\DeleteInstanceRequest;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\DeleteInstanceResponse;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\DeleteProtectionModuleRuleRequest;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\DeleteProtectionModuleRuleResponse;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\DescribeCertificatesRequest;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\DescribeCertificatesResponse;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\DescribeCertMatchStatusRequest;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\DescribeCertMatchStatusResponse;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\DescribeDomainAdvanceConfigsRequest;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\DescribeDomainAdvanceConfigsResponse;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\DescribeDomainBasicConfigsRequest;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\DescribeDomainBasicConfigsResponse;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\DescribeDomainListRequest;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\DescribeDomainListResponse;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\DescribeDomainNamesRequest;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\DescribeDomainNamesResponse;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\DescribeDomainRequest;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\DescribeDomainResponse;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\DescribeDomainRuleGroupRequest;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\DescribeDomainRuleGroupResponse;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\DescribeInstanceInfoRequest;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\DescribeInstanceInfoResponse;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\DescribeInstanceSpecInfoRequest;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\DescribeInstanceSpecInfoResponse;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\DescribeLogServiceStatusRequest;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\DescribeLogServiceStatusResponse;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\DescribeProtectionModuleCodeConfigRequest;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\DescribeProtectionModuleCodeConfigResponse;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\DescribeProtectionModuleModeRequest;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\DescribeProtectionModuleModeResponse;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\DescribeProtectionModuleRulesRequest;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\DescribeProtectionModuleRulesResponse;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\DescribeProtectionModuleStatusRequest;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\DescribeProtectionModuleStatusResponse;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\DescribeRuleGroupsRequest;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\DescribeRuleGroupsResponse;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\DescribeRulesRequest;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\DescribeRulesResponse;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\DescribeWafSourceIpSegmentRequest;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\DescribeWafSourceIpSegmentResponse;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\ModifyDomainIpv6StatusRequest;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\ModifyDomainIpv6StatusResponse;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\ModifyDomainRequest;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\ModifyDomainResponse;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\ModifyLogRetrievalStatusRequest;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\ModifyLogRetrievalStatusResponse;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\ModifyLogServiceStatusRequest;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\ModifyLogServiceStatusResponse;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\ModifyProtectionModuleModeRequest;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\ModifyProtectionModuleModeResponse;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\ModifyProtectionModuleRuleRequest;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\ModifyProtectionModuleRuleResponse;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\ModifyProtectionModuleStatusRequest;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\ModifyProtectionModuleStatusResponse;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\ModifyProtectionRuleCacheStatusRequest;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\ModifyProtectionRuleCacheStatusResponse;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\ModifyProtectionRuleStatusRequest;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\ModifyProtectionRuleStatusResponse;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\MoveResourceGroupRequest;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\MoveResourceGroupResponse;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\SetDomainRuleGroupRequest;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\SetDomainRuleGroupResponse;
use Darabonba\GatewayPop\Client;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Wafopenapi extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_productId = 'waf-openapi';
        $gatewayClient = new Client();
        $this->_spi = $gatewayClient;
        $this->_endpointRule = 'regional';
        $this->_endpointMap = [
            'cn-qingdao' => 'wafopenapi.cn-hangzhou.aliyuncs.com',
            'cn-beijing' => 'wafopenapi.cn-hangzhou.aliyuncs.com',
            'cn-chengdu' => 'wafopenapi.cn-hangzhou.aliyuncs.com',
            'cn-zhangjiakou' => 'wafopenapi.cn-hangzhou.aliyuncs.com',
            'cn-huhehaote' => 'wafopenapi.cn-hangzhou.aliyuncs.com',
            'cn-hangzhou' => 'wafopenapi.cn-hangzhou.aliyuncs.com',
            'cn-shanghai' => 'wafopenapi.cn-hangzhou.aliyuncs.com',
            'cn-shenzhen' => 'wafopenapi.cn-hangzhou.aliyuncs.com',
            'cn-heyuan' => 'wafopenapi.cn-hangzhou.aliyuncs.com',
            'cn-wulanchabu' => 'wafopenapi.cn-hangzhou.aliyuncs.com',
            'cn-hongkong' => 'wafopenapi.ap-southeast-1.aliyuncs.com',
            'ap-southeast-1' => 'wafopenapi.ap-southeast-1.aliyuncs.com',
            'ap-southeast-2' => 'wafopenapi.ap-southeast-1.aliyuncs.com',
            'ap-southeast-3' => 'wafopenapi.ap-southeast-1.aliyuncs.com',
            'ap-southeast-5' => 'wafopenapi.ap-southeast-1.aliyuncs.com',
            'eu-west-1' => 'wafopenapi.ap-southeast-1.aliyuncs.com',
            'us-west-1' => 'wafopenapi.ap-southeast-1.aliyuncs.com',
            'us-east-1' => 'wafopenapi.ap-southeast-1.aliyuncs.com',
            'eu-central-1' => 'wafopenapi.ap-southeast-1.aliyuncs.com',
            'me-east-1' => 'wafopenapi.ap-southeast-1.aliyuncs.com',
            'ap-south-1' => 'wafopenapi.ap-southeast-1.aliyuncs.com',
            'cn-shanghai-finance-1' => 'wafopenapi.cn-hangzhou.aliyuncs.com',
            'cn-shenzhen-finance-1' => 'wafopenapi.cn-hangzhou.aliyuncs.com',
            'cn-north-2-gov-1' => 'wafopenapi.cn-hangzhou.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('waf-openapi', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
    }

    /**
     * @param string   $productId
     * @param string   $regionId
     * @param string   $endpointRule
     * @param string   $network
     * @param string   $suffix
     * @param string[] $endpointMap
     * @param string   $endpoint
     *
     * @return string
     */
    public function getEndpoint($productId, $regionId, $endpointRule, $network, $suffix, $endpointMap, $endpoint)
    {
        if (null !== $endpoint) {
            return $endpoint;
        }

        if (null !== $endpointMap && null !== @$endpointMap[$regionId]) {
            return @$endpointMap[$regionId];
        }

        return Utils::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * Uploads the certificate and private key for an added domain name configuration record.
     *
     * @remarks
     * Updates the uploaded certificate and private key for the configuration of a specified domain name.
     *
     * @param request - CreateCertificateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateCertificateResponse
     *
     * @param CreateCertificateRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CreateCertificateResponse
     */
    public function createCertificateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->certificate) {
            @$query['Certificate'] = $request->certificate;
        }

        if (null !== $request->certificateName) {
            @$query['CertificateName'] = $request->certificateName;
        }

        if (null !== $request->domain) {
            @$query['Domain'] = $request->domain;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->privateKey) {
            @$query['PrivateKey'] = $request->privateKey;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateCertificate',
            'version' => '2019-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateCertificateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Uploads the certificate and private key for an added domain name configuration record.
     *
     * @remarks
     * Updates the uploaded certificate and private key for the configuration of a specified domain name.
     *
     * @param request - CreateCertificateRequest
     *
     * @returns CreateCertificateResponse
     *
     * @param CreateCertificateRequest $request
     *
     * @return CreateCertificateResponse
     */
    public function createCertificate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCertificateWithOptions($request, $runtime);
    }

    /**
     * Creates a certificate for a specified domain name based on a certificate ID.
     *
     * @remarks
     * This operation adds an SSL certificate to a specified domain name by using a certificate ID. Before calling this operation, you can call [DescribeCertificates](https://help.aliyun.com/document_detail/160783.html) to query the IDs of all SSL certificates associated with the domain name. To ensure system stability, the queries per second (QPS) limit per user is 10. If this limit is exceeded, API calls are throttled, which may affect your services. Call this operation as needed.
     *
     * @param request - CreateCertificateByCertificateIdRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateCertificateByCertificateIdResponse
     *
     * @param CreateCertificateByCertificateIdRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return CreateCertificateByCertificateIdResponse
     */
    public function createCertificateByCertificateIdWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->certificateId) {
            @$query['CertificateId'] = $request->certificateId;
        }

        if (null !== $request->domain) {
            @$query['Domain'] = $request->domain;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateCertificateByCertificateId',
            'version' => '2019-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateCertificateByCertificateIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a certificate for a specified domain name based on a certificate ID.
     *
     * @remarks
     * This operation adds an SSL certificate to a specified domain name by using a certificate ID. Before calling this operation, you can call [DescribeCertificates](https://help.aliyun.com/document_detail/160783.html) to query the IDs of all SSL certificates associated with the domain name. To ensure system stability, the queries per second (QPS) limit per user is 10. If this limit is exceeded, API calls are throttled, which may affect your services. Call this operation as needed.
     *
     * @param request - CreateCertificateByCertificateIdRequest
     *
     * @returns CreateCertificateByCertificateIdResponse
     *
     * @param CreateCertificateByCertificateIdRequest $request
     *
     * @return CreateCertificateByCertificateIdResponse
     */
    public function createCertificateByCertificateId($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCertificateByCertificateIdWithOptions($request, $runtime);
    }

    /**
     * Adds a Website Config to a WAF instance for protection.
     *
     * @param request - CreateDomainRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateDomainResponse
     *
     * @param CreateDomainRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return CreateDomainResponse
     */
    public function createDomainWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accessHeaderMode) {
            @$query['AccessHeaderMode'] = $request->accessHeaderMode;
        }

        if (null !== $request->accessHeaders) {
            @$query['AccessHeaders'] = $request->accessHeaders;
        }

        if (null !== $request->accessType) {
            @$query['AccessType'] = $request->accessType;
        }

        if (null !== $request->cloudNativeInstances) {
            @$query['CloudNativeInstances'] = $request->cloudNativeInstances;
        }

        if (null !== $request->clusterType) {
            @$query['ClusterType'] = $request->clusterType;
        }

        if (null !== $request->connectionTime) {
            @$query['ConnectionTime'] = $request->connectionTime;
        }

        if (null !== $request->domain) {
            @$query['Domain'] = $request->domain;
        }

        if (null !== $request->http2Port) {
            @$query['Http2Port'] = $request->http2Port;
        }

        if (null !== $request->httpPort) {
            @$query['HttpPort'] = $request->httpPort;
        }

        if (null !== $request->httpToUserIp) {
            @$query['HttpToUserIp'] = $request->httpToUserIp;
        }

        if (null !== $request->httpsPort) {
            @$query['HttpsPort'] = $request->httpsPort;
        }

        if (null !== $request->httpsRedirect) {
            @$query['HttpsRedirect'] = $request->httpsRedirect;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->ipFollowStatus) {
            @$query['IpFollowStatus'] = $request->ipFollowStatus;
        }

        if (null !== $request->isAccessProduct) {
            @$query['IsAccessProduct'] = $request->isAccessProduct;
        }

        if (null !== $request->keepalive) {
            @$query['Keepalive'] = $request->keepalive;
        }

        if (null !== $request->keepaliveRequests) {
            @$query['KeepaliveRequests'] = $request->keepaliveRequests;
        }

        if (null !== $request->keepaliveTimeout) {
            @$query['KeepaliveTimeout'] = $request->keepaliveTimeout;
        }

        if (null !== $request->loadBalancing) {
            @$query['LoadBalancing'] = $request->loadBalancing;
        }

        if (null !== $request->logHeaders) {
            @$query['LogHeaders'] = $request->logHeaders;
        }

        if (null !== $request->readTime) {
            @$query['ReadTime'] = $request->readTime;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->retry) {
            @$query['Retry'] = $request->retry;
        }

        if (null !== $request->sniHost) {
            @$query['SniHost'] = $request->sniHost;
        }

        if (null !== $request->sniStatus) {
            @$query['SniStatus'] = $request->sniStatus;
        }

        if (null !== $request->sourceIps) {
            @$query['SourceIps'] = $request->sourceIps;
        }

        if (null !== $request->writeTime) {
            @$query['WriteTime'] = $request->writeTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateDomain',
            'version' => '2019-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Adds a Website Config to a WAF instance for protection.
     *
     * @param request - CreateDomainRequest
     *
     * @returns CreateDomainResponse
     *
     * @param CreateDomainRequest $request
     *
     * @return CreateDomainResponse
     */
    public function createDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDomainWithOptions($request, $runtime);
    }

    /**
     * Creates a configuration rule in a specified Web Application Firewall (WAF) protection module, such as web intrusion prevention, data security, advanced protection, bot management, access control, or rate limiting.
     *
     * @remarks
     * This operation creates a rule configuration in a specified WAF protection module, such as web intrusion prevention, data security, advanced protection, bot management, access control, or rate limiting. You can specify the protection module by setting the **DefenseType** parameter. For more information about the valid values of this parameter, see the description of the **DefenseType** request parameter.
     * To ensure system stability, the queries per second (QPS) limit for a single user is 10. If the limit is exceeded, API calls are throttled, which may affect your business. Call this operation as needed.
     *
     * @param request - CreateProtectionModuleRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateProtectionModuleRuleResponse
     *
     * @param CreateProtectionModuleRuleRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return CreateProtectionModuleRuleResponse
     */
    public function createProtectionModuleRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->defenseType) {
            @$query['DefenseType'] = $request->defenseType;
        }

        if (null !== $request->domain) {
            @$query['Domain'] = $request->domain;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->rule) {
            @$query['Rule'] = $request->rule;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateProtectionModuleRule',
            'version' => '2019-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateProtectionModuleRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a configuration rule in a specified Web Application Firewall (WAF) protection module, such as web intrusion prevention, data security, advanced protection, bot management, access control, or rate limiting.
     *
     * @remarks
     * This operation creates a rule configuration in a specified WAF protection module, such as web intrusion prevention, data security, advanced protection, bot management, access control, or rate limiting. You can specify the protection module by setting the **DefenseType** parameter. For more information about the valid values of this parameter, see the description of the **DefenseType** request parameter.
     * To ensure system stability, the queries per second (QPS) limit for a single user is 10. If the limit is exceeded, API calls are throttled, which may affect your business. Call this operation as needed.
     *
     * @param request - CreateProtectionModuleRuleRequest
     *
     * @returns CreateProtectionModuleRuleResponse
     *
     * @param CreateProtectionModuleRuleRequest $request
     *
     * @return CreateProtectionModuleRuleResponse
     */
    public function createProtectionModuleRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createProtectionModuleRuleWithOptions($request, $runtime);
    }

    /**
     * Deletes the configuration of a specified domain name.
     *
     * @param request - DeleteDomainRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteDomainResponse
     *
     * @param DeleteDomainRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DeleteDomainResponse
     */
    public function deleteDomainWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domain) {
            @$query['Domain'] = $request->domain;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteDomain',
            'version' => '2019-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes the configuration of a specified domain name.
     *
     * @param request - DeleteDomainRequest
     *
     * @returns DeleteDomainResponse
     *
     * @param DeleteDomainRequest $request
     *
     * @return DeleteDomainResponse
     */
    public function deleteDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDomainWithOptions($request, $runtime);
    }

    /**
     * Releases a pay-as-you-go Web Application Firewall (WAF) instance or an expired subscription instance.
     *
     * @remarks
     * After an instance is released, all data related to the instance is permanently lost and unrecoverable. Proceed with caution.
     *
     * @param request - DeleteInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteInstanceResponse
     *
     * @param DeleteInstanceRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteInstanceResponse
     */
    public function deleteInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteInstance',
            'version' => '2019-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Releases a pay-as-you-go Web Application Firewall (WAF) instance or an expired subscription instance.
     *
     * @remarks
     * After an instance is released, all data related to the instance is permanently lost and unrecoverable. Proceed with caution.
     *
     * @param request - DeleteInstanceRequest
     *
     * @returns DeleteInstanceResponse
     *
     * @param DeleteInstanceRequest $request
     *
     * @return DeleteInstanceResponse
     */
    public function deleteInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteInstanceWithOptions($request, $runtime);
    }

    /**
     * Deletes a rule configured in a specified protection module.
     *
     * @remarks
     * Deletes a rule configured in a specified protection module.
     * To ensure system stability, the queries per second (QPS) limit per user is 10. If this limit is exceeded, API calls are throttled, which may affect your business. Call the API at a reasonable frequency.
     *
     * @param request - DeleteProtectionModuleRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteProtectionModuleRuleResponse
     *
     * @param DeleteProtectionModuleRuleRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DeleteProtectionModuleRuleResponse
     */
    public function deleteProtectionModuleRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->defenseType) {
            @$query['DefenseType'] = $request->defenseType;
        }

        if (null !== $request->domain) {
            @$query['Domain'] = $request->domain;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->ruleId) {
            @$query['RuleId'] = $request->ruleId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteProtectionModuleRule',
            'version' => '2019-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteProtectionModuleRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a rule configured in a specified protection module.
     *
     * @remarks
     * Deletes a rule configured in a specified protection module.
     * To ensure system stability, the queries per second (QPS) limit per user is 10. If this limit is exceeded, API calls are throttled, which may affect your business. Call the API at a reasonable frequency.
     *
     * @param request - DeleteProtectionModuleRuleRequest
     *
     * @returns DeleteProtectionModuleRuleResponse
     *
     * @param DeleteProtectionModuleRuleRequest $request
     *
     * @return DeleteProtectionModuleRuleResponse
     */
    public function deleteProtectionModuleRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteProtectionModuleRuleWithOptions($request, $runtime);
    }

    /**
     * Checks whether the uploaded certificate and private key match for the configuration of a specified domain name.
     *
     * @param request - DescribeCertMatchStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeCertMatchStatusResponse
     *
     * @param DescribeCertMatchStatusRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeCertMatchStatusResponse
     */
    public function describeCertMatchStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->certificate) {
            @$query['Certificate'] = $request->certificate;
        }

        if (null !== $request->domain) {
            @$query['Domain'] = $request->domain;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->privateKey) {
            @$query['PrivateKey'] = $request->privateKey;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeCertMatchStatus',
            'version' => '2019-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeCertMatchStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Checks whether the uploaded certificate and private key match for the configuration of a specified domain name.
     *
     * @param request - DescribeCertMatchStatusRequest
     *
     * @returns DescribeCertMatchStatusResponse
     *
     * @param DescribeCertMatchStatusRequest $request
     *
     * @return DescribeCertMatchStatusResponse
     */
    public function describeCertMatchStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCertMatchStatusWithOptions($request, $runtime);
    }

    /**
     * Retrieves the available existing certificates for a specified domain name, which are certificates already managed in SSL Certificates Service.
     *
     * @remarks
     * This operation queries the SSL certificates associated with a domain name. These certificates are purchased through Alibaba Cloud SSL Certificates Service or uploaded to the service for hosting. The query returns information such as the certificate ID, name, associated domain names, and Subject Alternative Name (SAN) extension attributes. To ensure system stability, the queries per second (QPS) limit per user is 10. If this limit is exceeded, API calls are throttled, which may affect your services. Call this operation at a reasonable frequency.
     *
     * @param request - DescribeCertificatesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeCertificatesResponse
     *
     * @param DescribeCertificatesRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeCertificatesResponse
     */
    public function describeCertificatesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domain) {
            @$query['Domain'] = $request->domain;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeCertificates',
            'version' => '2019-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeCertificatesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the available existing certificates for a specified domain name, which are certificates already managed in SSL Certificates Service.
     *
     * @remarks
     * This operation queries the SSL certificates associated with a domain name. These certificates are purchased through Alibaba Cloud SSL Certificates Service or uploaded to the service for hosting. The query returns information such as the certificate ID, name, associated domain names, and Subject Alternative Name (SAN) extension attributes. To ensure system stability, the queries per second (QPS) limit per user is 10. If this limit is exceeded, API calls are throttled, which may affect your services. Call this operation at a reasonable frequency.
     *
     * @param request - DescribeCertificatesRequest
     *
     * @returns DescribeCertificatesResponse
     *
     * @param DescribeCertificatesRequest $request
     *
     * @return DescribeCertificatesResponse
     */
    public function describeCertificates($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCertificatesWithOptions($request, $runtime);
    }

    /**
     * Queries the configuration information of a domain name added to WAF.
     *
     * @param request - DescribeDomainRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDomainResponse
     *
     * @param DescribeDomainRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DescribeDomainResponse
     */
    public function describeDomainWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domain) {
            @$query['Domain'] = $request->domain;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDomain',
            'version' => '2019-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the configuration information of a domain name added to WAF.
     *
     * @param request - DescribeDomainRequest
     *
     * @returns DescribeDomainResponse
     *
     * @param DescribeDomainRequest $request
     *
     * @return DescribeDomainResponse
     */
    public function describeDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainWithOptions($request, $runtime);
    }

    /**
     * Queries the detailed configurations of domain names added to WAF for protection.
     *
     * @remarks
     * This operation queries the detailed configurations of domain names added to WAF for protection, such as the CNAME address, origin server addresses, and HTTP and HTTPS port lists. To ensure system stability, the queries per second (QPS) limit per user is 50. If this limit is exceeded, API calls are throttled, which may affect your services. Make API calls at a reasonable frequency.
     *
     * @param request - DescribeDomainAdvanceConfigsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDomainAdvanceConfigsResponse
     *
     * @param DescribeDomainAdvanceConfigsRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeDomainAdvanceConfigsResponse
     */
    public function describeDomainAdvanceConfigsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainList) {
            @$query['DomainList'] = $request->domainList;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDomainAdvanceConfigs',
            'version' => '2019-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDomainAdvanceConfigsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the detailed configurations of domain names added to WAF for protection.
     *
     * @remarks
     * This operation queries the detailed configurations of domain names added to WAF for protection, such as the CNAME address, origin server addresses, and HTTP and HTTPS port lists. To ensure system stability, the queries per second (QPS) limit per user is 50. If this limit is exceeded, API calls are throttled, which may affect your services. Make API calls at a reasonable frequency.
     *
     * @param request - DescribeDomainAdvanceConfigsRequest
     *
     * @returns DescribeDomainAdvanceConfigsResponse
     *
     * @param DescribeDomainAdvanceConfigsRequest $request
     *
     * @return DescribeDomainAdvanceConfigsResponse
     */
    public function describeDomainAdvanceConfigs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainAdvanceConfigsWithOptions($request, $runtime);
    }

    /**
     * Queries the basic configurations of website domains that are added to WAF for protection.
     *
     * @remarks
     * This operation performs a paging query on the basic configurations (hereinafter referred to as domain configurations) of website domains that are added to WAF for protection. The configurations include the status of domain configurations and the status and mode of default protection modules, such as the rule protection engine, HTTP flood protection, and custom mitigation policy. To ensure system stability, the queries per second (QPS) limit for a single user is 50. If you call the API beyond the limit, the requests will be throttled, which may affect your business. Call this operation at a reasonable frequency.
     *
     * @param request - DescribeDomainBasicConfigsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDomainBasicConfigsResponse
     *
     * @param DescribeDomainBasicConfigsRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeDomainBasicConfigsResponse
     */
    public function describeDomainBasicConfigsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accessType) {
            @$query['AccessType'] = $request->accessType;
        }

        if (null !== $request->cloudNativeProductId) {
            @$query['CloudNativeProductId'] = $request->cloudNativeProductId;
        }

        if (null !== $request->domainKey) {
            @$query['DomainKey'] = $request->domainKey;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDomainBasicConfigs',
            'version' => '2019-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDomainBasicConfigsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the basic configurations of website domains that are added to WAF for protection.
     *
     * @remarks
     * This operation performs a paging query on the basic configurations (hereinafter referred to as domain configurations) of website domains that are added to WAF for protection. The configurations include the status of domain configurations and the status and mode of default protection modules, such as the rule protection engine, HTTP flood protection, and custom mitigation policy. To ensure system stability, the queries per second (QPS) limit for a single user is 50. If you call the API beyond the limit, the requests will be throttled, which may affect your business. Call this operation at a reasonable frequency.
     *
     * @param request - DescribeDomainBasicConfigsRequest
     *
     * @returns DescribeDomainBasicConfigsResponse
     *
     * @param DescribeDomainBasicConfigsRequest $request
     *
     * @return DescribeDomainBasicConfigsResponse
     */
    public function describeDomainBasicConfigs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainBasicConfigsWithOptions($request, $runtime);
    }

    /**
     * Invokes DescribeDomainList to perform a paged query for the list of domain names added to WAF protection with paging support.
     *
     * @remarks
     * This operation can also be used to query all domain names added to WAF protection, but it does not support paged query (that is, it can only return all domain names at once without paging). For scenarios with a large number of domain names, invoke this operation to perform a paged query (which displays results by paging and supports conditional query).
     *
     * @param request - DescribeDomainListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDomainListResponse
     *
     * @param DescribeDomainListRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeDomainListResponse
     */
    public function describeDomainListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->domainNames) {
            @$query['DomainNames'] = $request->domainNames;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->isSub) {
            @$query['IsSub'] = $request->isSub;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDomainList',
            'version' => '2019-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDomainListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Invokes DescribeDomainList to perform a paged query for the list of domain names added to WAF protection with paging support.
     *
     * @remarks
     * This operation can also be used to query all domain names added to WAF protection, but it does not support paged query (that is, it can only return all domain names at once without paging). For scenarios with a large number of domain names, invoke this operation to perform a paged query (which displays results by paging and supports conditional query).
     *
     * @param request - DescribeDomainListRequest
     *
     * @returns DescribeDomainListResponse
     *
     * @param DescribeDomainListRequest $request
     *
     * @return DescribeDomainListResponse
     */
    public function describeDomainList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainListWithOptions($request, $runtime);
    }

    /**
     * Retrieves the list of domain names added to a specified WAF instance.
     *
     * @param request - DescribeDomainNamesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDomainNamesResponse
     *
     * @param DescribeDomainNamesRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeDomainNamesResponse
     */
    public function describeDomainNamesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDomainNames',
            'version' => '2019-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDomainNamesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the list of domain names added to a specified WAF instance.
     *
     * @param request - DescribeDomainNamesRequest
     *
     * @returns DescribeDomainNamesResponse
     *
     * @param DescribeDomainNamesRequest $request
     *
     * @return DescribeDomainNamesResponse
     */
    public function describeDomainNames($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainNamesWithOptions($request, $runtime);
    }

    /**
     * Queries the ID of the protection rule group bound to a domain name and the status of the intelligent rule hosting feature.
     *
     * @remarks
     * Queries the ID of the protection rule group bound to a specified domain name and the status of the intelligent rule hosting feature in the rule protection engine.
     * Note that to ensure system stability, the queries per second (QPS) limit for a single user is 10. If the limit is exceeded, API calls are throttled, which may affect your business. Call this operation as needed.
     *
     * @param request - DescribeDomainRuleGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDomainRuleGroupResponse
     *
     * @param DescribeDomainRuleGroupRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeDomainRuleGroupResponse
     */
    public function describeDomainRuleGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domain) {
            @$query['Domain'] = $request->domain;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDomainRuleGroup',
            'version' => '2019-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDomainRuleGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the ID of the protection rule group bound to a domain name and the status of the intelligent rule hosting feature.
     *
     * @remarks
     * Queries the ID of the protection rule group bound to a specified domain name and the status of the intelligent rule hosting feature in the rule protection engine.
     * Note that to ensure system stability, the queries per second (QPS) limit for a single user is 10. If the limit is exceeded, API calls are throttled, which may affect your business. Call this operation as needed.
     *
     * @param request - DescribeDomainRuleGroupRequest
     *
     * @returns DescribeDomainRuleGroupResponse
     *
     * @param DescribeDomainRuleGroupRequest $request
     *
     * @return DescribeDomainRuleGroupResponse
     */
    public function describeDomainRuleGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainRuleGroupWithOptions($request, $runtime);
    }

    /**
     * Queries the details of the WAF instance within the current Alibaba Cloud account.
     *
     * @remarks
     * This operation queries the details of the WAF instance within the current Alibaba Cloud account, such as the instance ID, edition, status, and expiration time. To ensure system stability, the queries per second (QPS) limit per user is 50. If this limit is exceeded, API calls are throttled, which may affect your services. Call this operation at a reasonable rate.
     *
     * @param request - DescribeInstanceInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeInstanceInfoResponse
     *
     * @param DescribeInstanceInfoRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeInstanceInfoResponse
     */
    public function describeInstanceInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeInstanceInfo',
            'version' => '2019-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeInstanceInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of the WAF instance within the current Alibaba Cloud account.
     *
     * @remarks
     * This operation queries the details of the WAF instance within the current Alibaba Cloud account, such as the instance ID, edition, status, and expiration time. To ensure system stability, the queries per second (QPS) limit per user is 50. If this limit is exceeded, API calls are throttled, which may affect your services. Call this operation at a reasonable rate.
     *
     * @param request - DescribeInstanceInfoRequest
     *
     * @returns DescribeInstanceInfoResponse
     *
     * @param DescribeInstanceInfoRequest $request
     *
     * @return DescribeInstanceInfoResponse
     */
    public function describeInstanceInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceInfoWithOptions($request, $runtime);
    }

    /**
     * Queries the specification information of a WAF instance.
     *
     * @param request - DescribeInstanceSpecInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeInstanceSpecInfoResponse
     *
     * @param DescribeInstanceSpecInfoRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeInstanceSpecInfoResponse
     */
    public function describeInstanceSpecInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeInstanceSpecInfo',
            'version' => '2019-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeInstanceSpecInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the specification information of a WAF instance.
     *
     * @param request - DescribeInstanceSpecInfoRequest
     *
     * @returns DescribeInstanceSpecInfoResponse
     *
     * @param DescribeInstanceSpecInfoRequest $request
     *
     * @return DescribeInstanceSpecInfoResponse
     */
    public function describeInstanceSpecInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceSpecInfoWithOptions($request, $runtime);
    }

    /**
     * Queries the log collection status of domain names that are added to WAF for protection.
     *
     * @param request - DescribeLogServiceStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeLogServiceStatusResponse
     *
     * @param DescribeLogServiceStatusRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeLogServiceStatusResponse
     */
    public function describeLogServiceStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainNames) {
            @$query['DomainNames'] = $request->domainNames;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->region) {
            @$query['Region'] = $request->region;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeLogServiceStatus',
            'version' => '2019-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeLogServiceStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the log collection status of domain names that are added to WAF for protection.
     *
     * @param request - DescribeLogServiceStatusRequest
     *
     * @returns DescribeLogServiceStatusResponse
     *
     * @param DescribeLogServiceStatusRequest $request
     *
     * @return DescribeLogServiceStatusResponse
     */
    public function describeLogServiceStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLogServiceStatusWithOptions($request, $runtime);
    }

    /**
     * Queries the region codes supported by the region-level IP blacklist of WAF.
     *
     * @remarks
     * Queries the region codes supported by the region-level IP blacklist of Web Application Firewall (WAF). To ensure system stability, the queries per second (QPS) limit per user is 100. If this limit is exceeded, API calls are throttled, which may affect your services. Call this API at a reasonable frequency.
     *
     * @param request - DescribeProtectionModuleCodeConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeProtectionModuleCodeConfigResponse
     *
     * @param DescribeProtectionModuleCodeConfigRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return DescribeProtectionModuleCodeConfigResponse
     */
    public function describeProtectionModuleCodeConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->codeType) {
            @$query['CodeType'] = $request->codeType;
        }

        if (null !== $request->codeValue) {
            @$query['CodeValue'] = $request->codeValue;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeProtectionModuleCodeConfig',
            'version' => '2019-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeProtectionModuleCodeConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the region codes supported by the region-level IP blacklist of WAF.
     *
     * @remarks
     * Queries the region codes supported by the region-level IP blacklist of Web Application Firewall (WAF). To ensure system stability, the queries per second (QPS) limit per user is 100. If this limit is exceeded, API calls are throttled, which may affect your services. Call this API at a reasonable frequency.
     *
     * @param request - DescribeProtectionModuleCodeConfigRequest
     *
     * @returns DescribeProtectionModuleCodeConfigResponse
     *
     * @param DescribeProtectionModuleCodeConfigRequest $request
     *
     * @return DescribeProtectionModuleCodeConfigResponse
     */
    public function describeProtectionModuleCodeConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeProtectionModuleCodeConfigWithOptions($request, $runtime);
    }

    /**
     * Queries the current protection pattern configured for a specified domain name, such as the regular expression protection engine, big data deep learning engine, HTTP flood protection, data risk control, and proactive defense.
     *
     * @remarks
     * This operation queries the current protection pattern used by a specified protection module in the website protection settings. Protection modules include the rule protection engine, deep learning engine, HTTP flood protection, data risk control, and proactive defense.
     * You can set the **DefenseType** parameter to specify the protection module to query. For more information about the valid values of this parameter, see the description of the **DefenseType** request parameter.
     * Before you call this operation, you must call the [CreateDomain](https://help.aliyun.com/document_detail/160780.html) operation to create a website configuration and add the domain name of your website to WAF for protection.
     * To ensure system stability, the queries per second (QPS) limit for a single user is 10. If the limit is exceeded, the system throttles your requests, which may affect your business. Call the API at a reasonable frequency.
     *
     * @param request - DescribeProtectionModuleModeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeProtectionModuleModeResponse
     *
     * @param DescribeProtectionModuleModeRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeProtectionModuleModeResponse
     */
    public function describeProtectionModuleModeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->defenseType) {
            @$query['DefenseType'] = $request->defenseType;
        }

        if (null !== $request->domain) {
            @$query['Domain'] = $request->domain;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeProtectionModuleMode',
            'version' => '2019-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeProtectionModuleModeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the current protection pattern configured for a specified domain name, such as the regular expression protection engine, big data deep learning engine, HTTP flood protection, data risk control, and proactive defense.
     *
     * @remarks
     * This operation queries the current protection pattern used by a specified protection module in the website protection settings. Protection modules include the rule protection engine, deep learning engine, HTTP flood protection, data risk control, and proactive defense.
     * You can set the **DefenseType** parameter to specify the protection module to query. For more information about the valid values of this parameter, see the description of the **DefenseType** request parameter.
     * Before you call this operation, you must call the [CreateDomain](https://help.aliyun.com/document_detail/160780.html) operation to create a website configuration and add the domain name of your website to WAF for protection.
     * To ensure system stability, the queries per second (QPS) limit for a single user is 10. If the limit is exceeded, the system throttles your requests, which may affect your business. Call the API at a reasonable frequency.
     *
     * @param request - DescribeProtectionModuleModeRequest
     *
     * @returns DescribeProtectionModuleModeResponse
     *
     * @param DescribeProtectionModuleModeRequest $request
     *
     * @return DescribeProtectionModuleModeResponse
     */
    public function describeProtectionModuleMode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeProtectionModuleModeWithOptions($request, $runtime);
    }

    /**
     * Queries the configuration records of WAF protection features, such as web intrusion prevention, data security, bot management, access control or throttling, and website whitelists.
     *
     * @remarks
     * Queries the configuration records of rules for a specified WAF protection feature module through a paged query. The modules include web intrusion prevention, data security, bot management, access control or throttling, and website whitelists.
     * You can specify the protection feature module settings by using the **DefenseType** parameter. For more information about the valid values of this parameter, see the description of the **DefenseType** request parameter.
     * To ensure system stability, the queries per second (QPS) limit for a single user is 50. If the limit is exceeded, API invocations are throttled, which may affect your business. Invoke this operation properly.
     *
     * @param request - DescribeProtectionModuleRulesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeProtectionModuleRulesResponse
     *
     * @param DescribeProtectionModuleRulesRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeProtectionModuleRulesResponse
     */
    public function describeProtectionModuleRulesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->defenseType) {
            @$query['DefenseType'] = $request->defenseType;
        }

        if (null !== $request->domain) {
            @$query['Domain'] = $request->domain;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->query) {
            @$query['Query'] = $request->query;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeProtectionModuleRules',
            'version' => '2019-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeProtectionModuleRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the configuration records of WAF protection features, such as web intrusion prevention, data security, bot management, access control or throttling, and website whitelists.
     *
     * @remarks
     * Queries the configuration records of rules for a specified WAF protection feature module through a paged query. The modules include web intrusion prevention, data security, bot management, access control or throttling, and website whitelists.
     * You can specify the protection feature module settings by using the **DefenseType** parameter. For more information about the valid values of this parameter, see the description of the **DefenseType** request parameter.
     * To ensure system stability, the queries per second (QPS) limit for a single user is 50. If the limit is exceeded, API invocations are throttled, which may affect your business. Invoke this operation properly.
     *
     * @param request - DescribeProtectionModuleRulesRequest
     *
     * @returns DescribeProtectionModuleRulesResponse
     *
     * @param DescribeProtectionModuleRulesRequest $request
     *
     * @return DescribeProtectionModuleRulesResponse
     */
    public function describeProtectionModuleRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeProtectionModuleRulesWithOptions($request, $runtime);
    }

    /**
     * Queries the status of WAF protection features, including web intrusion prevention, data security, advanced protection, bot management, and access control or throttling modules.
     *
     * @remarks
     * Queries the enabling status of a specified WAF protection feature module. You can set the **DefenseType** parameter to specify the protection feature module to query. For the meaning of specific parameter values, refer to the description of the **DefenseType** request parameter. To ensure system stability, the queries per second (QPS) limit for a single user is 50. If the limit is exceeded, API calls are throttled, which may affect your business. Make API calls at a reasonable frequency.
     *
     * @param request - DescribeProtectionModuleStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeProtectionModuleStatusResponse
     *
     * @param DescribeProtectionModuleStatusRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribeProtectionModuleStatusResponse
     */
    public function describeProtectionModuleStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->defenseType) {
            @$query['DefenseType'] = $request->defenseType;
        }

        if (null !== $request->domain) {
            @$query['Domain'] = $request->domain;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeProtectionModuleStatus',
            'version' => '2019-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeProtectionModuleStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the status of WAF protection features, including web intrusion prevention, data security, advanced protection, bot management, and access control or throttling modules.
     *
     * @remarks
     * Queries the enabling status of a specified WAF protection feature module. You can set the **DefenseType** parameter to specify the protection feature module to query. For the meaning of specific parameter values, refer to the description of the **DefenseType** request parameter. To ensure system stability, the queries per second (QPS) limit for a single user is 50. If the limit is exceeded, API calls are throttled, which may affect your business. Make API calls at a reasonable frequency.
     *
     * @param request - DescribeProtectionModuleStatusRequest
     *
     * @returns DescribeProtectionModuleStatusResponse
     *
     * @param DescribeProtectionModuleStatusRequest $request
     *
     * @return DescribeProtectionModuleStatusResponse
     */
    public function describeProtectionModuleStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeProtectionModuleStatusWithOptions($request, $runtime);
    }

    /**
     * Performs a paging query on regular expression rule groups.
     *
     * @param request - DescribeRuleGroupsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeRuleGroupsResponse
     *
     * @param DescribeRuleGroupsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeRuleGroupsResponse
     */
    public function describeRuleGroupsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->currentPage) {
            @$query['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->policyId) {
            @$query['PolicyId'] = $request->policyId;
        }

        if (null !== $request->region) {
            @$query['Region'] = $request->region;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->sourceIp) {
            @$query['SourceIp'] = $request->sourceIp;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        if (null !== $request->wafLang) {
            @$query['WafLang'] = $request->wafLang;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeRuleGroups',
            'version' => '2019-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeRuleGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Performs a paging query on regular expression rule groups.
     *
     * @param request - DescribeRuleGroupsRequest
     *
     * @returns DescribeRuleGroupsResponse
     *
     * @param DescribeRuleGroupsRequest $request
     *
     * @return DescribeRuleGroupsResponse
     */
    public function describeRuleGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRuleGroupsWithOptions($request, $runtime);
    }

    /**
     * Performs paging for a paged query of rules in a regular expression rule group.
     *
     * @param request - DescribeRulesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeRulesResponse
     *
     * @param DescribeRulesRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DescribeRulesResponse
     */
    public function describeRulesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->applicationType) {
            @$query['ApplicationType'] = $request->applicationType;
        }

        if (null !== $request->cveIdKey) {
            @$query['CveIdKey'] = $request->cveIdKey;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->protectionType) {
            @$query['ProtectionType'] = $request->protectionType;
        }

        if (null !== $request->region) {
            @$query['Region'] = $request->region;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->riskLevel) {
            @$query['RiskLevel'] = $request->riskLevel;
        }

        if (null !== $request->ruleGroupId) {
            @$query['RuleGroupId'] = $request->ruleGroupId;
        }

        if (null !== $request->ruleIdKey) {
            @$query['RuleIdKey'] = $request->ruleIdKey;
        }

        if (null !== $request->sourceIp) {
            @$query['SourceIp'] = $request->sourceIp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeRules',
            'version' => '2019-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Performs paging for a paged query of rules in a regular expression rule group.
     *
     * @param request - DescribeRulesRequest
     *
     * @returns DescribeRulesResponse
     *
     * @param DescribeRulesRequest $request
     *
     * @return DescribeRulesResponse
     */
    public function describeRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRulesWithOptions($request, $runtime);
    }

    /**
     * Queries the back-to-origin IP addresses and CIDR blocks used by WAF protection clusters.
     *
     * @param request - DescribeWafSourceIpSegmentRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeWafSourceIpSegmentResponse
     *
     * @param DescribeWafSourceIpSegmentRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeWafSourceIpSegmentResponse
     */
    public function describeWafSourceIpSegmentWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeWafSourceIpSegment',
            'version' => '2019-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeWafSourceIpSegmentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the back-to-origin IP addresses and CIDR blocks used by WAF protection clusters.
     *
     * @param request - DescribeWafSourceIpSegmentRequest
     *
     * @returns DescribeWafSourceIpSegmentResponse
     *
     * @param DescribeWafSourceIpSegmentRequest $request
     *
     * @return DescribeWafSourceIpSegmentResponse
     */
    public function describeWafSourceIpSegment($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeWafSourceIpSegmentWithOptions($request, $runtime);
    }

    /**
     * Modifies the configuration of an existing domain name.
     *
     * @param request - ModifyDomainRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyDomainResponse
     *
     * @param ModifyDomainRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ModifyDomainResponse
     */
    public function modifyDomainWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accessHeaderMode) {
            @$query['AccessHeaderMode'] = $request->accessHeaderMode;
        }

        if (null !== $request->accessHeaders) {
            @$query['AccessHeaders'] = $request->accessHeaders;
        }

        if (null !== $request->accessType) {
            @$query['AccessType'] = $request->accessType;
        }

        if (null !== $request->cloudNativeInstances) {
            @$query['CloudNativeInstances'] = $request->cloudNativeInstances;
        }

        if (null !== $request->clusterType) {
            @$query['ClusterType'] = $request->clusterType;
        }

        if (null !== $request->connectionTime) {
            @$query['ConnectionTime'] = $request->connectionTime;
        }

        if (null !== $request->domain) {
            @$query['Domain'] = $request->domain;
        }

        if (null !== $request->http2Port) {
            @$query['Http2Port'] = $request->http2Port;
        }

        if (null !== $request->httpPort) {
            @$query['HttpPort'] = $request->httpPort;
        }

        if (null !== $request->httpToUserIp) {
            @$query['HttpToUserIp'] = $request->httpToUserIp;
        }

        if (null !== $request->httpsPort) {
            @$query['HttpsPort'] = $request->httpsPort;
        }

        if (null !== $request->httpsRedirect) {
            @$query['HttpsRedirect'] = $request->httpsRedirect;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->ipFollowStatus) {
            @$query['IpFollowStatus'] = $request->ipFollowStatus;
        }

        if (null !== $request->isAccessProduct) {
            @$query['IsAccessProduct'] = $request->isAccessProduct;
        }

        if (null !== $request->keepalive) {
            @$query['Keepalive'] = $request->keepalive;
        }

        if (null !== $request->keepaliveRequests) {
            @$query['KeepaliveRequests'] = $request->keepaliveRequests;
        }

        if (null !== $request->keepaliveTimeout) {
            @$query['KeepaliveTimeout'] = $request->keepaliveTimeout;
        }

        if (null !== $request->loadBalancing) {
            @$query['LoadBalancing'] = $request->loadBalancing;
        }

        if (null !== $request->logHeaders) {
            @$query['LogHeaders'] = $request->logHeaders;
        }

        if (null !== $request->readTime) {
            @$query['ReadTime'] = $request->readTime;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->retry) {
            @$query['Retry'] = $request->retry;
        }

        if (null !== $request->sniHost) {
            @$query['SniHost'] = $request->sniHost;
        }

        if (null !== $request->sniStatus) {
            @$query['SniStatus'] = $request->sniStatus;
        }

        if (null !== $request->sourceIps) {
            @$query['SourceIps'] = $request->sourceIps;
        }

        if (null !== $request->writeTime) {
            @$query['WriteTime'] = $request->writeTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyDomain',
            'version' => '2019-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the configuration of an existing domain name.
     *
     * @param request - ModifyDomainRequest
     *
     * @returns ModifyDomainResponse
     *
     * @param ModifyDomainRequest $request
     *
     * @return ModifyDomainResponse
     */
    public function modifyDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDomainWithOptions($request, $runtime);
    }

    /**
     * Enables or disables the IPv6 security protection feature for a specified domain name configuration.
     *
     * @param request - ModifyDomainIpv6StatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyDomainIpv6StatusResponse
     *
     * @param ModifyDomainIpv6StatusRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ModifyDomainIpv6StatusResponse
     */
    public function modifyDomainIpv6StatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domain) {
            @$query['Domain'] = $request->domain;
        }

        if (null !== $request->enabled) {
            @$query['Enabled'] = $request->enabled;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyDomainIpv6Status',
            'version' => '2019-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyDomainIpv6StatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Enables or disables the IPv6 security protection feature for a specified domain name configuration.
     *
     * @param request - ModifyDomainIpv6StatusRequest
     *
     * @returns ModifyDomainIpv6StatusResponse
     *
     * @param ModifyDomainIpv6StatusRequest $request
     *
     * @return ModifyDomainIpv6StatusResponse
     */
    public function modifyDomainIpv6Status($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDomainIpv6StatusWithOptions($request, $runtime);
    }

    /**
     * Enables or disables the log search feature for a specified domain name.
     *
     * @remarks
     * The log search feature has been upgraded to Simple Log Service for WAF. For more information, see [WAF Log Service](https://help.aliyun.com/document_detail/100503.html). This operation is applicable only to existing users who still have the log search feature. To enable or disable Simple Log Service for WAF for a domain name, call [ModifyLogServiceStatus](https://help.aliyun.com/document_detail/162742.html).
     *
     * @param request - ModifyLogRetrievalStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyLogRetrievalStatusResponse
     *
     * @param ModifyLogRetrievalStatusRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ModifyLogRetrievalStatusResponse
     */
    public function modifyLogRetrievalStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domain) {
            @$query['Domain'] = $request->domain;
        }

        if (null !== $request->enabled) {
            @$query['Enabled'] = $request->enabled;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyLogRetrievalStatus',
            'version' => '2019-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyLogRetrievalStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Enables or disables the log search feature for a specified domain name.
     *
     * @remarks
     * The log search feature has been upgraded to Simple Log Service for WAF. For more information, see [WAF Log Service](https://help.aliyun.com/document_detail/100503.html). This operation is applicable only to existing users who still have the log search feature. To enable or disable Simple Log Service for WAF for a domain name, call [ModifyLogServiceStatus](https://help.aliyun.com/document_detail/162742.html).
     *
     * @param request - ModifyLogRetrievalStatusRequest
     *
     * @returns ModifyLogRetrievalStatusResponse
     *
     * @param ModifyLogRetrievalStatusRequest $request
     *
     * @return ModifyLogRetrievalStatusResponse
     */
    public function modifyLogRetrievalStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyLogRetrievalStatusWithOptions($request, $runtime);
    }

    /**
     * Enables or disables the log collection feature for a specified domain name configuration by calling the ModifyLogServiceStatus operation.
     *
     * @remarks
     * Before you enable the log collection feature for a domain name configuration, make sure that the real-time log query and analysis feature is activated for the WAF instance and that WAF is authorized to deliver recorded logs to your dedicated Simple Log Service Logstore.
     * For more information, see [Real-time log query and analysis](https://help.aliyun.com/document_detail/100503.html).
     *
     * @param request - ModifyLogServiceStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyLogServiceStatusResponse
     *
     * @param ModifyLogServiceStatusRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ModifyLogServiceStatusResponse
     */
    public function modifyLogServiceStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domain) {
            @$query['Domain'] = $request->domain;
        }

        if (null !== $request->enabled) {
            @$query['Enabled'] = $request->enabled;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyLogServiceStatus',
            'version' => '2019-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyLogServiceStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Enables or disables the log collection feature for a specified domain name configuration by calling the ModifyLogServiceStatus operation.
     *
     * @remarks
     * Before you enable the log collection feature for a domain name configuration, make sure that the real-time log query and analysis feature is activated for the WAF instance and that WAF is authorized to deliver recorded logs to your dedicated Simple Log Service Logstore.
     * For more information, see [Real-time log query and analysis](https://help.aliyun.com/document_detail/100503.html).
     *
     * @param request - ModifyLogServiceStatusRequest
     *
     * @returns ModifyLogServiceStatusResponse
     *
     * @param ModifyLogServiceStatusRequest $request
     *
     * @return ModifyLogServiceStatusResponse
     */
    public function modifyLogServiceStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyLogServiceStatusWithOptions($request, $runtime);
    }

    /**
     * Modifies the WAF protection mode for modules such as the RegEx protection engine, big data deep learning engine, CC attack protection, data risk control, and proactive defense.
     *
     * @remarks
     * You can specify the protection module by setting the **DefenseType** parameter. For more information about the valid values, see the description of the **DefenseType** request parameter.
     *
     * @param request - ModifyProtectionModuleModeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyProtectionModuleModeResponse
     *
     * @param ModifyProtectionModuleModeRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ModifyProtectionModuleModeResponse
     */
    public function modifyProtectionModuleModeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->defenseType) {
            @$query['DefenseType'] = $request->defenseType;
        }

        if (null !== $request->domain) {
            @$query['Domain'] = $request->domain;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->mode) {
            @$query['Mode'] = $request->mode;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyProtectionModuleMode',
            'version' => '2019-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyProtectionModuleModeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the WAF protection mode for modules such as the RegEx protection engine, big data deep learning engine, CC attack protection, data risk control, and proactive defense.
     *
     * @remarks
     * You can specify the protection module by setting the **DefenseType** parameter. For more information about the valid values, see the description of the **DefenseType** request parameter.
     *
     * @param request - ModifyProtectionModuleModeRequest
     *
     * @returns ModifyProtectionModuleModeResponse
     *
     * @param ModifyProtectionModuleModeRequest $request
     *
     * @return ModifyProtectionModuleModeResponse
     */
    public function modifyProtectionModuleMode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyProtectionModuleModeWithOptions($request, $runtime);
    }

    /**
     * Modifies the configuration rules of WAF protection features, such as web intrusion prevention, data security, advanced protection, bot management, access control, throttling, and whitelists.
     *
     * @remarks
     * This operation modifies the rule configurations of a specified WAF protection module, including web intrusion prevention, data security, advanced protection, bot management, access control or throttling, and whitelist modules. You can specify the protection module by setting the **DefenseType** parameter. For more information about the valid values, see the description of the **DefenseType** request parameter.
     * To ensure system stability, the queries per second (QPS) is limited to 10 per user. If the limit is exceeded, API calls are throttled, which may affect your business. Call this operation appropriately.
     *
     * @param request - ModifyProtectionModuleRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyProtectionModuleRuleResponse
     *
     * @param ModifyProtectionModuleRuleRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ModifyProtectionModuleRuleResponse
     */
    public function modifyProtectionModuleRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->defenseType) {
            @$query['DefenseType'] = $request->defenseType;
        }

        if (null !== $request->domain) {
            @$query['Domain'] = $request->domain;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->lockVersion) {
            @$query['LockVersion'] = $request->lockVersion;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->rule) {
            @$query['Rule'] = $request->rule;
        }

        if (null !== $request->ruleId) {
            @$query['RuleId'] = $request->ruleId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyProtectionModuleRule',
            'version' => '2019-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyProtectionModuleRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the configuration rules of WAF protection features, such as web intrusion prevention, data security, advanced protection, bot management, access control, throttling, and whitelists.
     *
     * @remarks
     * This operation modifies the rule configurations of a specified WAF protection module, including web intrusion prevention, data security, advanced protection, bot management, access control or throttling, and whitelist modules. You can specify the protection module by setting the **DefenseType** parameter. For more information about the valid values, see the description of the **DefenseType** request parameter.
     * To ensure system stability, the queries per second (QPS) is limited to 10 per user. If the limit is exceeded, API calls are throttled, which may affect your business. Call this operation appropriately.
     *
     * @param request - ModifyProtectionModuleRuleRequest
     *
     * @returns ModifyProtectionModuleRuleResponse
     *
     * @param ModifyProtectionModuleRuleRequest $request
     *
     * @return ModifyProtectionModuleRuleResponse
     */
    public function modifyProtectionModuleRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyProtectionModuleRuleWithOptions($request, $runtime);
    }

    /**
     * Enables or disables a specified WAF protection feature, such as web intrusion prevention, data security, advanced protection, bot management, access control, or throttling.
     *
     * @remarks
     * This operation enables or disables a specified WAF protection module.
     * You can set the **DefenseType** parameter to specify the protection module to operate on. For more information about the valid values, see the description of the **DefenseType** request parameter.
     * To ensure system stability, the China Chinese mainland per-user queries per second (QPS) limit is 20. If this limit is exceeded, API calls are throttled, which may affect your business. Call this operation at a reasonable frequency.
     *
     * @param request - ModifyProtectionModuleStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyProtectionModuleStatusResponse
     *
     * @param ModifyProtectionModuleStatusRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return ModifyProtectionModuleStatusResponse
     */
    public function modifyProtectionModuleStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->defenseType) {
            @$query['DefenseType'] = $request->defenseType;
        }

        if (null !== $request->domain) {
            @$query['Domain'] = $request->domain;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->moduleStatus) {
            @$query['ModuleStatus'] = $request->moduleStatus;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyProtectionModuleStatus',
            'version' => '2019-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyProtectionModuleStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Enables or disables a specified WAF protection feature, such as web intrusion prevention, data security, advanced protection, bot management, access control, or throttling.
     *
     * @remarks
     * This operation enables or disables a specified WAF protection module.
     * You can set the **DefenseType** parameter to specify the protection module to operate on. For more information about the valid values, see the description of the **DefenseType** request parameter.
     * To ensure system stability, the China Chinese mainland per-user queries per second (QPS) limit is 20. If this limit is exceeded, API calls are throttled, which may affect your business. Call this operation at a reasonable frequency.
     *
     * @param request - ModifyProtectionModuleStatusRequest
     *
     * @returns ModifyProtectionModuleStatusResponse
     *
     * @param ModifyProtectionModuleStatusRequest $request
     *
     * @return ModifyProtectionModuleStatusResponse
     */
    public function modifyProtectionModuleStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyProtectionModuleStatusWithOptions($request, $runtime);
    }

    /**
     * Updates the cache of a page protected by a specified web tamper-proofing rule.
     *
     * @param request - ModifyProtectionRuleCacheStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyProtectionRuleCacheStatusResponse
     *
     * @param ModifyProtectionRuleCacheStatusRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return ModifyProtectionRuleCacheStatusResponse
     */
    public function modifyProtectionRuleCacheStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->defenseType) {
            @$query['DefenseType'] = $request->defenseType;
        }

        if (null !== $request->domain) {
            @$query['Domain'] = $request->domain;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->ruleId) {
            @$query['RuleId'] = $request->ruleId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyProtectionRuleCacheStatus',
            'version' => '2019-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyProtectionRuleCacheStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the cache of a page protected by a specified web tamper-proofing rule.
     *
     * @param request - ModifyProtectionRuleCacheStatusRequest
     *
     * @returns ModifyProtectionRuleCacheStatusResponse
     *
     * @param ModifyProtectionRuleCacheStatusRequest $request
     *
     * @return ModifyProtectionRuleCacheStatusResponse
     */
    public function modifyProtectionRuleCacheStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyProtectionRuleCacheStatusWithOptions($request, $runtime);
    }

    /**
     * Enables or disables WAF protection feature modules for a domain name, such as web tamper-proofing, legitimate crawlers, crawler threat intelligence, custom protection policies, and website whitelists.
     *
     * @remarks
     * You can specify the protection module by setting the **DefenseType** parameter. For more information about the valid values, see the description of the **DefenseType** request parameter.
     *
     * @param request - ModifyProtectionRuleStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyProtectionRuleStatusResponse
     *
     * @param ModifyProtectionRuleStatusRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ModifyProtectionRuleStatusResponse
     */
    public function modifyProtectionRuleStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->defenseType) {
            @$query['DefenseType'] = $request->defenseType;
        }

        if (null !== $request->domain) {
            @$query['Domain'] = $request->domain;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->lockVersion) {
            @$query['LockVersion'] = $request->lockVersion;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->ruleId) {
            @$query['RuleId'] = $request->ruleId;
        }

        if (null !== $request->ruleStatus) {
            @$query['RuleStatus'] = $request->ruleStatus;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyProtectionRuleStatus',
            'version' => '2019-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyProtectionRuleStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Enables or disables WAF protection feature modules for a domain name, such as web tamper-proofing, legitimate crawlers, crawler threat intelligence, custom protection policies, and website whitelists.
     *
     * @remarks
     * You can specify the protection module by setting the **DefenseType** parameter. For more information about the valid values, see the description of the **DefenseType** request parameter.
     *
     * @param request - ModifyProtectionRuleStatusRequest
     *
     * @returns ModifyProtectionRuleStatusResponse
     *
     * @param ModifyProtectionRuleStatusRequest $request
     *
     * @return ModifyProtectionRuleStatusResponse
     */
    public function modifyProtectionRuleStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyProtectionRuleStatusWithOptions($request, $runtime);
    }

    /**
     * Moves a WAF resource to a different resource group.
     *
     * @remarks
     * A WAF resource represents a domain name that is added to WAF for protection. A resource group is a mechanism for organizing and managing resources within an Alibaba Cloud account. Resource groups help you manage resources across multiple projects or applications and simplify user authorization management within a single account. Domain name resources added to WAF belong to the default resource group by default. You can move WAF domain name resources to a custom resource group for grouped resource management.
     * You can create a resource group in the Alibaba Cloud Management Console. For related operations, see [Create a resource group](https://www.alibabacloud.com/help/en/resource-management/user-guide/create-a-resource-group). You can also create a resource group by invoking the Resource Management API. For more information, see [CreateResourceGroup](https://www.alibabacloud.com/help/en/resource-management/api-createresourcegroup).
     * For more information about resource groups, see [What is Resource Management?](https://www.alibabacloud.com/help/en/resource-management/product-overview/what-is-resource-management).
     *
     * @param request - MoveResourceGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns MoveResourceGroupResponse
     *
     * @param MoveResourceGroupRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return MoveResourceGroupResponse
     */
    public function moveResourceGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'MoveResourceGroup',
            'version' => '2019-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return MoveResourceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Moves a WAF resource to a different resource group.
     *
     * @remarks
     * A WAF resource represents a domain name that is added to WAF for protection. A resource group is a mechanism for organizing and managing resources within an Alibaba Cloud account. Resource groups help you manage resources across multiple projects or applications and simplify user authorization management within a single account. Domain name resources added to WAF belong to the default resource group by default. You can move WAF domain name resources to a custom resource group for grouped resource management.
     * You can create a resource group in the Alibaba Cloud Management Console. For related operations, see [Create a resource group](https://www.alibabacloud.com/help/en/resource-management/user-guide/create-a-resource-group). You can also create a resource group by invoking the Resource Management API. For more information, see [CreateResourceGroup](https://www.alibabacloud.com/help/en/resource-management/api-createresourcegroup).
     * For more information about resource groups, see [What is Resource Management?](https://www.alibabacloud.com/help/en/resource-management/product-overview/what-is-resource-management).
     *
     * @param request - MoveResourceGroupRequest
     *
     * @returns MoveResourceGroupResponse
     *
     * @param MoveResourceGroupRequest $request
     *
     * @return MoveResourceGroupResponse
     */
    public function moveResourceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->moveResourceGroupWithOptions($request, $runtime);
    }

    /**
     * Configures the protection rule group used by the regular expression protection engine for a specified domain name. In addition to the three system default protection rule groups, you can also select a custom rule group.
     *
     * @remarks
     * Configures the protection rule group for the rule-based protection engine and the status of the intelligent rule hosting feature for a specified domain name.
     * When configuring a protection rule group, you can use the built-in Normal, Strict, and Loose protection rule groups provided by WAF, or select a custom rule group. To ensure system stability, the queries per second (QPS) is limited to 10 per user. If the limit is exceeded, API calls are throttled, which may affect your business. Call this operation at an appropriate frequency.
     * >Notice:  Creating custom rule groups through the API is not currently supported. You must first create a rule group and obtain the corresponding rule group ID on the **System Management** > **Protection Rule Group** page in the [Web Application Firewall console](https://yundun.console.aliyun.com/?p=wafnext) before you can call this operation to apply a custom rule group to a domain name.
     * .
     *
     * @param request - SetDomainRuleGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SetDomainRuleGroupResponse
     *
     * @param SetDomainRuleGroupRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return SetDomainRuleGroupResponse
     */
    public function setDomainRuleGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domains) {
            @$query['Domains'] = $request->domains;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->ruleGroupId) {
            @$query['RuleGroupId'] = $request->ruleGroupId;
        }

        if (null !== $request->wafAiStatus) {
            @$query['WafAiStatus'] = $request->wafAiStatus;
        }

        if (null !== $request->wafVersion) {
            @$query['WafVersion'] = $request->wafVersion;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SetDomainRuleGroup',
            'version' => '2019-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SetDomainRuleGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Configures the protection rule group used by the regular expression protection engine for a specified domain name. In addition to the three system default protection rule groups, you can also select a custom rule group.
     *
     * @remarks
     * Configures the protection rule group for the rule-based protection engine and the status of the intelligent rule hosting feature for a specified domain name.
     * When configuring a protection rule group, you can use the built-in Normal, Strict, and Loose protection rule groups provided by WAF, or select a custom rule group. To ensure system stability, the queries per second (QPS) is limited to 10 per user. If the limit is exceeded, API calls are throttled, which may affect your business. Call this operation at an appropriate frequency.
     * >Notice:  Creating custom rule groups through the API is not currently supported. You must first create a rule group and obtain the corresponding rule group ID on the **System Management** > **Protection Rule Group** page in the [Web Application Firewall console](https://yundun.console.aliyun.com/?p=wafnext) before you can call this operation to apply a custom rule group to a domain name.
     * .
     *
     * @param request - SetDomainRuleGroupRequest
     *
     * @returns SetDomainRuleGroupResponse
     *
     * @param SetDomainRuleGroupRequest $request
     *
     * @return SetDomainRuleGroupResponse
     */
    public function setDomainRuleGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setDomainRuleGroupWithOptions($request, $runtime);
    }
}
