<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\Dara\Url;
use AlibabaCloud\SDK\Eas\V20210701\Models\AttachGatewayDomainRequest;
use AlibabaCloud\SDK\Eas\V20210701\Models\AttachGatewayDomainResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\AttachGatewayDomainShrinkRequest;
use AlibabaCloud\SDK\Eas\V20210701\Models\CloneServiceRequest;
use AlibabaCloud\SDK\Eas\V20210701\Models\CloneServiceResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\CloneServiceShrinkRequest;
use AlibabaCloud\SDK\Eas\V20210701\Models\CommitServiceResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\CreateAclPolicyRequest;
use AlibabaCloud\SDK\Eas\V20210701\Models\CreateAclPolicyResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\CreateAclPolicyShrinkRequest;
use AlibabaCloud\SDK\Eas\V20210701\Models\CreateAppServiceRequest;
use AlibabaCloud\SDK\Eas\V20210701\Models\CreateAppServiceResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\CreateBenchmarkTaskRequest;
use AlibabaCloud\SDK\Eas\V20210701\Models\CreateBenchmarkTaskResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\CreateFaultInjectionRequest;
use AlibabaCloud\SDK\Eas\V20210701\Models\CreateFaultInjectionResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\CreateGatewayIntranetLinkedVpcPeerRequest;
use AlibabaCloud\SDK\Eas\V20210701\Models\CreateGatewayIntranetLinkedVpcPeerResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\CreateGatewayIntranetLinkedVpcPeerShrinkRequest;
use AlibabaCloud\SDK\Eas\V20210701\Models\CreateGatewayIntranetLinkedVpcRequest;
use AlibabaCloud\SDK\Eas\V20210701\Models\CreateGatewayIntranetLinkedVpcResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\CreateGatewayRequest;
use AlibabaCloud\SDK\Eas\V20210701\Models\CreateGatewayResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\CreateResourceInstancesRequest;
use AlibabaCloud\SDK\Eas\V20210701\Models\CreateResourceInstancesResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\CreateResourceLogRequest;
use AlibabaCloud\SDK\Eas\V20210701\Models\CreateResourceLogResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\CreateResourceRequest;
use AlibabaCloud\SDK\Eas\V20210701\Models\CreateResourceResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\CreateServiceAutoScalerRequest;
use AlibabaCloud\SDK\Eas\V20210701\Models\CreateServiceAutoScalerResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\CreateServiceCronScalerRequest;
use AlibabaCloud\SDK\Eas\V20210701\Models\CreateServiceCronScalerResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\CreateServiceMirrorRequest;
use AlibabaCloud\SDK\Eas\V20210701\Models\CreateServiceMirrorResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\CreateServiceRequest;
use AlibabaCloud\SDK\Eas\V20210701\Models\CreateServiceResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\CreateServiceShrinkRequest;
use AlibabaCloud\SDK\Eas\V20210701\Models\CreateVirtualResourceRequest;
use AlibabaCloud\SDK\Eas\V20210701\Models\CreateVirtualResourceResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\DeleteAclPolicyRequest;
use AlibabaCloud\SDK\Eas\V20210701\Models\DeleteAclPolicyResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\DeleteAclPolicyShrinkRequest;
use AlibabaCloud\SDK\Eas\V20210701\Models\DeleteBenchmarkTaskResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\DeleteFaultInjectionResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\DeleteGatewayIntranetLinkedVpcPeerRequest;
use AlibabaCloud\SDK\Eas\V20210701\Models\DeleteGatewayIntranetLinkedVpcPeerResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\DeleteGatewayIntranetLinkedVpcPeerShrinkRequest;
use AlibabaCloud\SDK\Eas\V20210701\Models\DeleteGatewayIntranetLinkedVpcRequest;
use AlibabaCloud\SDK\Eas\V20210701\Models\DeleteGatewayIntranetLinkedVpcResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\DeleteGatewayLabelRequest;
use AlibabaCloud\SDK\Eas\V20210701\Models\DeleteGatewayLabelResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\DeleteGatewayLabelShrinkRequest;
use AlibabaCloud\SDK\Eas\V20210701\Models\DeleteGatewayResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\DeleteResourceDLinkResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\DeleteResourceInstanceLabelRequest;
use AlibabaCloud\SDK\Eas\V20210701\Models\DeleteResourceInstanceLabelResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\DeleteResourceInstanceLabelShrinkRequest;
use AlibabaCloud\SDK\Eas\V20210701\Models\DeleteResourceInstancesRequest;
use AlibabaCloud\SDK\Eas\V20210701\Models\DeleteResourceInstancesResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\DeleteResourceLogResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\DeleteResourceResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\DeleteServiceAutoScalerResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\DeleteServiceCronScalerResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\DeleteServiceInstancesRequest;
use AlibabaCloud\SDK\Eas\V20210701\Models\DeleteServiceInstancesResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\DeleteServiceLabelRequest;
use AlibabaCloud\SDK\Eas\V20210701\Models\DeleteServiceLabelResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\DeleteServiceLabelShrinkRequest;
use AlibabaCloud\SDK\Eas\V20210701\Models\DeleteServiceMirrorResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\DeleteServiceResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\DeleteVirtualResourceResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\DescribeBenchmarkTaskReportRequest;
use AlibabaCloud\SDK\Eas\V20210701\Models\DescribeBenchmarkTaskReportResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\DescribeBenchmarkTaskResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\DescribeGatewayResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\DescribeGroupEndpointsResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\DescribeGroupResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\DescribeMachineSpecRequest;
use AlibabaCloud\SDK\Eas\V20210701\Models\DescribeMachineSpecResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\DescribeMachineSpecShrinkRequest;
use AlibabaCloud\SDK\Eas\V20210701\Models\DescribeRegionsResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\DescribeResourceDLinkResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\DescribeResourceLogResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\DescribeResourceResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\DescribeServiceAutoScalerResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\DescribeServiceCronScalerResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\DescribeServiceDiagnosisResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\DescribeServiceEndpointsResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\DescribeServiceEventRequest;
use AlibabaCloud\SDK\Eas\V20210701\Models\DescribeServiceEventResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\DescribeServiceInstanceDiagnosisResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\DescribeServiceLogRequest;
use AlibabaCloud\SDK\Eas\V20210701\Models\DescribeServiceLogResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\DescribeServiceMirrorResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\DescribeServiceResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\DescribeServiceSignedUrlRequest;
use AlibabaCloud\SDK\Eas\V20210701\Models\DescribeServiceSignedUrlResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\DescribeSpotDiscountHistoryRequest;
use AlibabaCloud\SDK\Eas\V20210701\Models\DescribeSpotDiscountHistoryResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\DescribeVirtualResourceResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\DetachGatewayDomainRequest;
use AlibabaCloud\SDK\Eas\V20210701\Models\DetachGatewayDomainResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\DetachGatewayDomainShrinkRequest;
use AlibabaCloud\SDK\Eas\V20210701\Models\DevelopServiceRequest;
use AlibabaCloud\SDK\Eas\V20210701\Models\DevelopServiceResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\ListAclPolicyRequest;
use AlibabaCloud\SDK\Eas\V20210701\Models\ListAclPolicyResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\ListBenchmarkTaskRequest;
use AlibabaCloud\SDK\Eas\V20210701\Models\ListBenchmarkTaskResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\ListGatewayDomainsResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\ListGatewayIntranetLinkedVpcPeerRequest;
use AlibabaCloud\SDK\Eas\V20210701\Models\ListGatewayIntranetLinkedVpcPeerResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\ListGatewayIntranetLinkedVpcResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\ListGatewayIntranetSupportedZoneResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\ListGatewayRequest;
use AlibabaCloud\SDK\Eas\V20210701\Models\ListGatewayResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\ListGatewayShrinkRequest;
use AlibabaCloud\SDK\Eas\V20210701\Models\ListGroupsRequest;
use AlibabaCloud\SDK\Eas\V20210701\Models\ListGroupsResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\ListResourceInstancesRequest;
use AlibabaCloud\SDK\Eas\V20210701\Models\ListResourceInstancesResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\ListResourceInstancesShrinkRequest;
use AlibabaCloud\SDK\Eas\V20210701\Models\ListResourceInstanceWorkerRequest;
use AlibabaCloud\SDK\Eas\V20210701\Models\ListResourceInstanceWorkerResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\ListResourceServicesRequest;
use AlibabaCloud\SDK\Eas\V20210701\Models\ListResourceServicesResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\ListResourcesRequest;
use AlibabaCloud\SDK\Eas\V20210701\Models\ListResourcesResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\ListServiceContainersResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\ListServiceInstanceFaultInjectionInfoResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\ListServiceInstancesRequest;
use AlibabaCloud\SDK\Eas\V20210701\Models\ListServiceInstancesResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\ListServicesRequest;
use AlibabaCloud\SDK\Eas\V20210701\Models\ListServicesResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\ListServicesShrinkRequest;
use AlibabaCloud\SDK\Eas\V20210701\Models\ListServiceVersionsRequest;
use AlibabaCloud\SDK\Eas\V20210701\Models\ListServiceVersionsResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\ListTenantAddonsResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\ListVirtualResourceRequest;
use AlibabaCloud\SDK\Eas\V20210701\Models\ListVirtualResourceResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\MigrateResourceInstanceRequest;
use AlibabaCloud\SDK\Eas\V20210701\Models\MigrateResourceInstanceResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\ReinstallTenantAddonResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\ReleaseServiceRequest;
use AlibabaCloud\SDK\Eas\V20210701\Models\ReleaseServiceResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\RestartServiceResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\StartBenchmarkTaskResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\StartServiceResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\StopBenchmarkTaskResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\StopServiceResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\UpdateAppServiceRequest;
use AlibabaCloud\SDK\Eas\V20210701\Models\UpdateAppServiceResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\UpdateBenchmarkTaskRequest;
use AlibabaCloud\SDK\Eas\V20210701\Models\UpdateBenchmarkTaskResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\UpdateGatewayLabelRequest;
use AlibabaCloud\SDK\Eas\V20210701\Models\UpdateGatewayLabelResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\UpdateGatewayRequest;
use AlibabaCloud\SDK\Eas\V20210701\Models\UpdateGatewayResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\UpdateGroupRequest;
use AlibabaCloud\SDK\Eas\V20210701\Models\UpdateGroupResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\UpdateResourceDLinkRequest;
use AlibabaCloud\SDK\Eas\V20210701\Models\UpdateResourceDLinkResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\UpdateResourceInstanceLabelRequest;
use AlibabaCloud\SDK\Eas\V20210701\Models\UpdateResourceInstanceLabelResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\UpdateResourceInstanceLabelShrinkRequest;
use AlibabaCloud\SDK\Eas\V20210701\Models\UpdateResourceInstanceRequest;
use AlibabaCloud\SDK\Eas\V20210701\Models\UpdateResourceInstanceResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\UpdateResourceRequest;
use AlibabaCloud\SDK\Eas\V20210701\Models\UpdateResourceResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\UpdateServiceAutoScalerRequest;
use AlibabaCloud\SDK\Eas\V20210701\Models\UpdateServiceAutoScalerResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\UpdateServiceCronScalerRequest;
use AlibabaCloud\SDK\Eas\V20210701\Models\UpdateServiceCronScalerResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\UpdateServiceInstanceRequest;
use AlibabaCloud\SDK\Eas\V20210701\Models\UpdateServiceInstanceResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\UpdateServiceLabelRequest;
use AlibabaCloud\SDK\Eas\V20210701\Models\UpdateServiceLabelResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\UpdateServiceMirrorRequest;
use AlibabaCloud\SDK\Eas\V20210701\Models\UpdateServiceMirrorResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\UpdateServiceRequest;
use AlibabaCloud\SDK\Eas\V20210701\Models\UpdateServiceResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\UpdateServiceSafetyLockRequest;
use AlibabaCloud\SDK\Eas\V20210701\Models\UpdateServiceSafetyLockResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\UpdateServiceVersionRequest;
use AlibabaCloud\SDK\Eas\V20210701\Models\UpdateServiceVersionResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\UpdateVirtualResourceRequest;
use AlibabaCloud\SDK\Eas\V20210701\Models\UpdateVirtualResourceResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Eas extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap = [
            'cn-beijing' => 'pai-eas.cn-beijing.aliyuncs.com',
            'cn-zhangjiakou' => 'pai-eas.cn-zhangjiakou.aliyuncs.com',
            'cn-hangzhou' => 'pai-eas.cn-hangzhou.aliyuncs.com',
            'cn-shanghai' => 'pai-eas.cn-shanghai.aliyuncs.com',
            'cn-shenzhen' => 'pai-eas.cn-shenzhen.aliyuncs.com',
            'cn-hongkong' => 'pai-eas.cn-hongkong.aliyuncs.com',
            'ap-southeast-1' => 'pai-eas.ap-southeast-1.aliyuncs.com',
            'ap-southeast-5' => 'pai-eas.ap-southeast-5.aliyuncs.com',
            'us-east-1' => 'pai-eas.us-east-1.aliyuncs.com',
            'us-west-1' => 'pai-eas.us-west-1.aliyuncs.com',
            'eu-central-1' => 'pai-eas.eu-central-1.aliyuncs.com',
            'ap-south-1' => 'pai-eas.ap-south-1.aliyuncs.com',
            'cn-shanghai-finance-1' => 'pai-eas.cn-shanghai-finance-1.aliyuncs.com',
            'cn-north-2-gov-1' => 'pai-eas.cn-north-2-gov-1.aliyuncs.com',
            'cn-chengdu' => 'pai-eas.cn-chengdu.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('eas', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * Binds a custom domain name to a private gateway.
     *
     * @param tmpReq - AttachGatewayDomainRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AttachGatewayDomainResponse
     *
     * @param string                     $ClusterId
     * @param string                     $GatewayId
     * @param AttachGatewayDomainRequest $tmpReq
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return AttachGatewayDomainResponse
     */
    public function attachGatewayDomainWithOptions($ClusterId, $GatewayId, $tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new AttachGatewayDomainShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->customDomain) {
            $request->customDomainShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->customDomain, 'CustomDomain', 'json');
        }

        $query = [];
        if (null !== $request->customDomainShrink) {
            @$query['CustomDomain'] = $request->customDomainShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AttachGatewayDomain',
            'version' => '2021-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/gateways/' . Url::percentEncode($ClusterId) . '/' . Url::percentEncode($GatewayId) . '/domain/attach',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return AttachGatewayDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Binds a custom domain name to a private gateway.
     *
     * @param request - AttachGatewayDomainRequest
     *
     * @returns AttachGatewayDomainResponse
     *
     * @param string                     $ClusterId
     * @param string                     $GatewayId
     * @param AttachGatewayDomainRequest $request
     *
     * @return AttachGatewayDomainResponse
     */
    public function attachGatewayDomain($ClusterId, $GatewayId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->attachGatewayDomainWithOptions($ClusterId, $GatewayId, $request, $headers, $runtime);
    }

    /**
     * Clones a service.
     *
     * @param tmpReq - CloneServiceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CloneServiceResponse
     *
     * @param string              $ClusterId
     * @param string              $ServiceName
     * @param CloneServiceRequest $tmpReq
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return CloneServiceResponse
     */
    public function cloneServiceWithOptions($ClusterId, $ServiceName, $tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new CloneServiceShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->labels) {
            $request->labelsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->labels, 'Labels', 'json');
        }

        $query = [];
        if (null !== $request->labelsShrink) {
            @$query['Labels'] = $request->labelsShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => $request->body,
        ]);
        $params = new Params([
            'action' => 'CloneService',
            'version' => '2021-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/services/' . Url::percentEncode($ClusterId) . '/' . Url::percentEncode($ServiceName) . '/clone',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CloneServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Clones a service.
     *
     * @param request - CloneServiceRequest
     *
     * @returns CloneServiceResponse
     *
     * @param string              $ClusterId
     * @param string              $ServiceName
     * @param CloneServiceRequest $request
     *
     * @return CloneServiceResponse
     */
    public function cloneService($ClusterId, $ServiceName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->cloneServiceWithOptions($ClusterId, $ServiceName, $request, $headers, $runtime);
    }

    /**
     * Commits the Worker0 container in the custom container service and deploys the container as a new image.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CommitServiceResponse
     *
     * @param string         $ClusterId
     * @param string         $ServiceName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return CommitServiceResponse
     */
    public function commitServiceWithOptions($ClusterId, $ServiceName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'CommitService',
            'version' => '2021-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/services/' . Url::percentEncode($ClusterId) . '/' . Url::percentEncode($ServiceName) . '/commit',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CommitServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Commits the Worker0 container in the custom container service and deploys the container as a new image.
     *
     * @returns CommitServiceResponse
     *
     * @param string $ClusterId
     * @param string $ServiceName
     *
     * @return CommitServiceResponse
     */
    public function commitService($ClusterId, $ServiceName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->commitServiceWithOptions($ClusterId, $ServiceName, $headers, $runtime);
    }

    /**
     * Creates an access control list (ACL) for a private gateway. The IP CIDR blocks added to the ACL can access the private gateway.
     *
     * @param tmpReq - CreateAclPolicyRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateAclPolicyResponse
     *
     * @param string                 $ClusterId
     * @param string                 $GatewayId
     * @param CreateAclPolicyRequest $tmpReq
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return CreateAclPolicyResponse
     */
    public function createAclPolicyWithOptions($ClusterId, $GatewayId, $tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateAclPolicyShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->aclPolicyList) {
            $request->aclPolicyListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->aclPolicyList, 'AclPolicyList', 'json');
        }

        $query = [];
        if (null !== $request->aclPolicyListShrink) {
            @$query['AclPolicyList'] = $request->aclPolicyListShrink;
        }

        if (null !== $request->vpcId) {
            @$query['VpcId'] = $request->vpcId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateAclPolicy',
            'version' => '2021-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/gateways/' . Url::percentEncode($ClusterId) . '/' . Url::percentEncode($GatewayId) . '/acl_policy',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateAclPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an access control list (ACL) for a private gateway. The IP CIDR blocks added to the ACL can access the private gateway.
     *
     * @param request - CreateAclPolicyRequest
     *
     * @returns CreateAclPolicyResponse
     *
     * @param string                 $ClusterId
     * @param string                 $GatewayId
     * @param CreateAclPolicyRequest $request
     *
     * @return CreateAclPolicyResponse
     */
    public function createAclPolicy($ClusterId, $GatewayId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createAclPolicyWithOptions($ClusterId, $GatewayId, $request, $headers, $runtime);
    }

    /**
     * Creates an application service to obtain the inference capabilities of large models.
     *
     * @param request - CreateAppServiceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateAppServiceResponse
     *
     * @param CreateAppServiceRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return CreateAppServiceResponse
     */
    public function createAppServiceWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->quotaId) {
            @$query['QuotaId'] = $request->quotaId;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $body = [];
        if (null !== $request->appType) {
            @$body['AppType'] = $request->appType;
        }

        if (null !== $request->appVersion) {
            @$body['AppVersion'] = $request->appVersion;
        }

        if (null !== $request->config) {
            @$body['Config'] = $request->config;
        }

        if (null !== $request->replicas) {
            @$body['Replicas'] = $request->replicas;
        }

        if (null !== $request->serviceName) {
            @$body['ServiceName'] = $request->serviceName;
        }

        if (null !== $request->serviceSpec) {
            @$body['ServiceSpec'] = $request->serviceSpec;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateAppService',
            'version' => '2021-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/app_services',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateAppServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an application service to obtain the inference capabilities of large models.
     *
     * @param request - CreateAppServiceRequest
     *
     * @returns CreateAppServiceResponse
     *
     * @param CreateAppServiceRequest $request
     *
     * @return CreateAppServiceResponse
     */
    public function createAppService($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createAppServiceWithOptions($request, $headers, $runtime);
    }

    /**
     * Creates a stress testing task.
     *
     * @param request - CreateBenchmarkTaskRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateBenchmarkTaskResponse
     *
     * @param CreateBenchmarkTaskRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return CreateBenchmarkTaskResponse
     */
    public function createBenchmarkTaskWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => $request->body,
        ]);
        $params = new Params([
            'action' => 'CreateBenchmarkTask',
            'version' => '2021-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/benchmark-tasks',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateBenchmarkTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a stress testing task.
     *
     * @param request - CreateBenchmarkTaskRequest
     *
     * @returns CreateBenchmarkTaskResponse
     *
     * @param CreateBenchmarkTaskRequest $request
     *
     * @return CreateBenchmarkTaskResponse
     */
    public function createBenchmarkTask($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createBenchmarkTaskWithOptions($request, $headers, $runtime);
    }

    /**
     * 创建故障注入任务
     *
     * @param request - CreateFaultInjectionRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateFaultInjectionResponse
     *
     * @param string                      $ClusterId
     * @param string                      $ServiceName
     * @param string                      $InstanceName
     * @param CreateFaultInjectionRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return CreateFaultInjectionResponse
     */
    public function createFaultInjectionWithOptions($ClusterId, $ServiceName, $InstanceName, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->faultArgs) {
            @$body['FaultArgs'] = $request->faultArgs;
        }

        if (null !== $request->faultType) {
            @$body['FaultType'] = $request->faultType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateFaultInjection',
            'version' => '2021-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/services/' . Url::percentEncode($ClusterId) . '/' . Url::percentEncode($ServiceName) . '/instances/' . Url::percentEncode($InstanceName) . '/faults',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateFaultInjectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建故障注入任务
     *
     * @param request - CreateFaultInjectionRequest
     *
     * @returns CreateFaultInjectionResponse
     *
     * @param string                      $ClusterId
     * @param string                      $ServiceName
     * @param string                      $InstanceName
     * @param CreateFaultInjectionRequest $request
     *
     * @return CreateFaultInjectionResponse
     */
    public function createFaultInjection($ClusterId, $ServiceName, $InstanceName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createFaultInjectionWithOptions($ClusterId, $ServiceName, $InstanceName, $request, $headers, $runtime);
    }

    /**
     * Creates a gateway.
     *
     * @param request - CreateGatewayRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateGatewayResponse
     *
     * @param CreateGatewayRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return CreateGatewayResponse
     */
    public function createGatewayWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->resourceName) {
            @$query['ResourceName'] = $request->resourceName;
        }

        $body = [];
        if (null !== $request->autoRenewal) {
            @$body['AutoRenewal'] = $request->autoRenewal;
        }

        if (null !== $request->chargeType) {
            @$body['ChargeType'] = $request->chargeType;
        }

        if (null !== $request->enableInternet) {
            @$body['EnableInternet'] = $request->enableInternet;
        }

        if (null !== $request->enableIntranet) {
            @$body['EnableIntranet'] = $request->enableIntranet;
        }

        if (null !== $request->gatewayType) {
            @$body['GatewayType'] = $request->gatewayType;
        }

        if (null !== $request->instanceType) {
            @$body['InstanceType'] = $request->instanceType;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        if (null !== $request->replicas) {
            @$body['Replicas'] = $request->replicas;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateGateway',
            'version' => '2021-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/gateways',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateGatewayResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a gateway.
     *
     * @param request - CreateGatewayRequest
     *
     * @returns CreateGatewayResponse
     *
     * @param CreateGatewayRequest $request
     *
     * @return CreateGatewayResponse
     */
    public function createGateway($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createGatewayWithOptions($request, $headers, $runtime);
    }

    /**
     * Creates an internal endpoint of a private gateway.
     *
     * @param request - CreateGatewayIntranetLinkedVpcRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateGatewayIntranetLinkedVpcResponse
     *
     * @param string                                $ClusterId
     * @param string                                $GatewayId
     * @param CreateGatewayIntranetLinkedVpcRequest $request
     * @param string[]                              $headers
     * @param RuntimeOptions                        $runtime
     *
     * @return CreateGatewayIntranetLinkedVpcResponse
     */
    public function createGatewayIntranetLinkedVpcWithOptions($ClusterId, $GatewayId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accountId) {
            @$query['AccountId'] = $request->accountId;
        }

        if (null !== $request->enableAuthoritativeDns) {
            @$query['EnableAuthoritativeDns'] = $request->enableAuthoritativeDns;
        }

        if (null !== $request->vSwitchId) {
            @$query['VSwitchId'] = $request->vSwitchId;
        }

        if (null !== $request->vpcId) {
            @$query['VpcId'] = $request->vpcId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateGatewayIntranetLinkedVpc',
            'version' => '2021-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/gateways/' . Url::percentEncode($ClusterId) . '/' . Url::percentEncode($GatewayId) . '/intranet_endpoint_linked_vpc',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateGatewayIntranetLinkedVpcResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an internal endpoint of a private gateway.
     *
     * @param request - CreateGatewayIntranetLinkedVpcRequest
     *
     * @returns CreateGatewayIntranetLinkedVpcResponse
     *
     * @param string                                $ClusterId
     * @param string                                $GatewayId
     * @param CreateGatewayIntranetLinkedVpcRequest $request
     *
     * @return CreateGatewayIntranetLinkedVpcResponse
     */
    public function createGatewayIntranetLinkedVpc($ClusterId, $GatewayId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createGatewayIntranetLinkedVpcWithOptions($ClusterId, $GatewayId, $request, $headers, $runtime);
    }

    /**
     * Creates a VPC peering connection on an internal endpoint of a gateway.
     *
     * @param tmpReq - CreateGatewayIntranetLinkedVpcPeerRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateGatewayIntranetLinkedVpcPeerResponse
     *
     * @param string                                    $ClusterId
     * @param string                                    $GatewayId
     * @param CreateGatewayIntranetLinkedVpcPeerRequest $tmpReq
     * @param string[]                                  $headers
     * @param RuntimeOptions                            $runtime
     *
     * @return CreateGatewayIntranetLinkedVpcPeerResponse
     */
    public function createGatewayIntranetLinkedVpcPeerWithOptions($ClusterId, $GatewayId, $tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateGatewayIntranetLinkedVpcPeerShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->peerVpcs) {
            $request->peerVpcsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->peerVpcs, 'PeerVpcs', 'json');
        }

        $query = [];
        if (null !== $request->peerVpcsShrink) {
            @$query['PeerVpcs'] = $request->peerVpcsShrink;
        }

        if (null !== $request->vpcId) {
            @$query['VpcId'] = $request->vpcId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateGatewayIntranetLinkedVpcPeer',
            'version' => '2021-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/gateways/' . Url::percentEncode($ClusterId) . '/' . Url::percentEncode($GatewayId) . '/intranet_endpoint_linked_vpc_peer',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateGatewayIntranetLinkedVpcPeerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a VPC peering connection on an internal endpoint of a gateway.
     *
     * @param request - CreateGatewayIntranetLinkedVpcPeerRequest
     *
     * @returns CreateGatewayIntranetLinkedVpcPeerResponse
     *
     * @param string                                    $ClusterId
     * @param string                                    $GatewayId
     * @param CreateGatewayIntranetLinkedVpcPeerRequest $request
     *
     * @return CreateGatewayIntranetLinkedVpcPeerResponse
     */
    public function createGatewayIntranetLinkedVpcPeer($ClusterId, $GatewayId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createGatewayIntranetLinkedVpcPeerWithOptions($ClusterId, $GatewayId, $request, $headers, $runtime);
    }

    /**
     * Creates a resource group.
     *
     * @remarks
     * *Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/144261.html) of Elastic Algorithm Service (EAS).
     *
     * @param request - CreateResourceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateResourceResponse
     *
     * @param CreateResourceRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return CreateResourceResponse
     */
    public function createResourceWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->autoRenewal) {
            @$body['AutoRenewal'] = $request->autoRenewal;
        }

        if (null !== $request->chargeType) {
            @$body['ChargeType'] = $request->chargeType;
        }

        if (null !== $request->ecsInstanceCount) {
            @$body['EcsInstanceCount'] = $request->ecsInstanceCount;
        }

        if (null !== $request->ecsInstanceType) {
            @$body['EcsInstanceType'] = $request->ecsInstanceType;
        }

        if (null !== $request->labels) {
            @$body['Labels'] = $request->labels;
        }

        if (null !== $request->resourceName) {
            @$body['ResourceName'] = $request->resourceName;
        }

        if (null !== $request->resourceType) {
            @$body['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->selfManagedResourceOptions) {
            @$body['SelfManagedResourceOptions'] = $request->selfManagedResourceOptions;
        }

        if (null !== $request->systemDiskSize) {
            @$body['SystemDiskSize'] = $request->systemDiskSize;
        }

        if (null !== $request->zone) {
            @$body['Zone'] = $request->zone;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateResource',
            'version' => '2021-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/resources',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a resource group.
     *
     * @remarks
     * *Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/144261.html) of Elastic Algorithm Service (EAS).
     *
     * @param request - CreateResourceRequest
     *
     * @returns CreateResourceResponse
     *
     * @param CreateResourceRequest $request
     *
     * @return CreateResourceResponse
     */
    public function createResource($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createResourceWithOptions($request, $headers, $runtime);
    }

    /**
     * Creates instances in a dedicated resource group.
     *
     * @param request - CreateResourceInstancesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateResourceInstancesResponse
     *
     * @param string                         $ClusterId
     * @param string                         $ResourceId
     * @param CreateResourceInstancesRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return CreateResourceInstancesResponse
     */
    public function createResourceInstancesWithOptions($ClusterId, $ResourceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->autoRenewal) {
            @$body['AutoRenewal'] = $request->autoRenewal;
        }

        if (null !== $request->chargeType) {
            @$body['ChargeType'] = $request->chargeType;
        }

        if (null !== $request->ecsInstanceCount) {
            @$body['EcsInstanceCount'] = $request->ecsInstanceCount;
        }

        if (null !== $request->ecsInstanceType) {
            @$body['EcsInstanceType'] = $request->ecsInstanceType;
        }

        if (null !== $request->labels) {
            @$body['Labels'] = $request->labels;
        }

        if (null !== $request->systemDiskSize) {
            @$body['SystemDiskSize'] = $request->systemDiskSize;
        }

        if (null !== $request->userData) {
            @$body['UserData'] = $request->userData;
        }

        if (null !== $request->zone) {
            @$body['Zone'] = $request->zone;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateResourceInstances',
            'version' => '2021-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/resources/' . Url::percentEncode($ClusterId) . '/' . Url::percentEncode($ResourceId) . '/instances',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateResourceInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates instances in a dedicated resource group.
     *
     * @param request - CreateResourceInstancesRequest
     *
     * @returns CreateResourceInstancesResponse
     *
     * @param string                         $ClusterId
     * @param string                         $ResourceId
     * @param CreateResourceInstancesRequest $request
     *
     * @return CreateResourceInstancesResponse
     */
    public function createResourceInstances($ClusterId, $ResourceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createResourceInstancesWithOptions($ClusterId, $ResourceId, $request, $headers, $runtime);
    }

    /**
     * Enables the LogShipper feature of Log Service for a resource group.
     *
     * @param request - CreateResourceLogRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateResourceLogResponse
     *
     * @param string                   $ClusterId
     * @param string                   $ResourceId
     * @param CreateResourceLogRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return CreateResourceLogResponse
     */
    public function createResourceLogWithOptions($ClusterId, $ResourceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->logStore) {
            @$body['LogStore'] = $request->logStore;
        }

        if (null !== $request->projectName) {
            @$body['ProjectName'] = $request->projectName;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateResourceLog',
            'version' => '2021-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/resources/' . Url::percentEncode($ClusterId) . '/' . Url::percentEncode($ResourceId) . '/log',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateResourceLogResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Enables the LogShipper feature of Log Service for a resource group.
     *
     * @param request - CreateResourceLogRequest
     *
     * @returns CreateResourceLogResponse
     *
     * @param string                   $ClusterId
     * @param string                   $ResourceId
     * @param CreateResourceLogRequest $request
     *
     * @return CreateResourceLogResponse
     */
    public function createResourceLog($ClusterId, $ResourceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createResourceLogWithOptions($ClusterId, $ResourceId, $request, $headers, $runtime);
    }

    /**
     * Creates a model service in Elastic Algorithm Service (EAS).
     *
     * @remarks
     * *Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/144261.html) of Elastic Algorithm Service (EAS).
     *
     * @param tmpReq - CreateServiceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateServiceResponse
     *
     * @param CreateServiceRequest $tmpReq
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return CreateServiceResponse
     */
    public function createServiceWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateServiceShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->labels) {
            $request->labelsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->labels, 'Labels', 'json');
        }

        $query = [];
        if (null !== $request->develop) {
            @$query['Develop'] = $request->develop;
        }

        if (null !== $request->labelsShrink) {
            @$query['Labels'] = $request->labelsShrink;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => $request->body,
        ]);
        $params = new Params([
            'action' => 'CreateService',
            'version' => '2021-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/services',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a model service in Elastic Algorithm Service (EAS).
     *
     * @remarks
     * *Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/144261.html) of Elastic Algorithm Service (EAS).
     *
     * @param request - CreateServiceRequest
     *
     * @returns CreateServiceResponse
     *
     * @param CreateServiceRequest $request
     *
     * @return CreateServiceResponse
     */
    public function createService($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createServiceWithOptions($request, $headers, $runtime);
    }

    /**
     * Enables the Autoscaler feature and creates an Autoscaler controller for a service.
     *
     * @param request - CreateServiceAutoScalerRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateServiceAutoScalerResponse
     *
     * @param string                         $ClusterId
     * @param string                         $ServiceName
     * @param CreateServiceAutoScalerRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return CreateServiceAutoScalerResponse
     */
    public function createServiceAutoScalerWithOptions($ClusterId, $ServiceName, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->behavior) {
            @$body['behavior'] = $request->behavior;
        }

        if (null !== $request->max) {
            @$body['max'] = $request->max;
        }

        if (null !== $request->min) {
            @$body['min'] = $request->min;
        }

        if (null !== $request->scaleStrategies) {
            @$body['scaleStrategies'] = $request->scaleStrategies;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateServiceAutoScaler',
            'version' => '2021-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/services/' . Url::percentEncode($ClusterId) . '/' . Url::percentEncode($ServiceName) . '/autoscaler',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateServiceAutoScalerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Enables the Autoscaler feature and creates an Autoscaler controller for a service.
     *
     * @param request - CreateServiceAutoScalerRequest
     *
     * @returns CreateServiceAutoScalerResponse
     *
     * @param string                         $ClusterId
     * @param string                         $ServiceName
     * @param CreateServiceAutoScalerRequest $request
     *
     * @return CreateServiceAutoScalerResponse
     */
    public function createServiceAutoScaler($ClusterId, $ServiceName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createServiceAutoScalerWithOptions($ClusterId, $ServiceName, $request, $headers, $runtime);
    }

    /**
     * Enables the Cron Horizontal Pod Autoscaler (CronHPA) feature for a service.
     *
     * @param request - CreateServiceCronScalerRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateServiceCronScalerResponse
     *
     * @param string                         $ClusterId
     * @param string                         $ServiceName
     * @param CreateServiceCronScalerRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return CreateServiceCronScalerResponse
     */
    public function createServiceCronScalerWithOptions($ClusterId, $ServiceName, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->excludeDates) {
            @$body['ExcludeDates'] = $request->excludeDates;
        }

        if (null !== $request->scaleJobs) {
            @$body['ScaleJobs'] = $request->scaleJobs;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateServiceCronScaler',
            'version' => '2021-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/services/' . Url::percentEncode($ClusterId) . '/' . Url::percentEncode($ServiceName) . '/cronscaler',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateServiceCronScalerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Enables the Cron Horizontal Pod Autoscaler (CronHPA) feature for a service.
     *
     * @param request - CreateServiceCronScalerRequest
     *
     * @returns CreateServiceCronScalerResponse
     *
     * @param string                         $ClusterId
     * @param string                         $ServiceName
     * @param CreateServiceCronScalerRequest $request
     *
     * @return CreateServiceCronScalerResponse
     */
    public function createServiceCronScaler($ClusterId, $ServiceName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createServiceCronScalerWithOptions($ClusterId, $ServiceName, $request, $headers, $runtime);
    }

    /**
     * Enables the traffic mirroring feature for a service. After the feature is enabled, requests received by the service can be mirrored to another service.
     *
     * @param request - CreateServiceMirrorRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateServiceMirrorResponse
     *
     * @param string                     $ClusterId
     * @param string                     $ServiceName
     * @param CreateServiceMirrorRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return CreateServiceMirrorResponse
     */
    public function createServiceMirrorWithOptions($ClusterId, $ServiceName, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->ratio) {
            @$body['Ratio'] = $request->ratio;
        }

        if (null !== $request->target) {
            @$body['Target'] = $request->target;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateServiceMirror',
            'version' => '2021-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/services/' . Url::percentEncode($ClusterId) . '/' . Url::percentEncode($ServiceName) . '/mirror',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateServiceMirrorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Enables the traffic mirroring feature for a service. After the feature is enabled, requests received by the service can be mirrored to another service.
     *
     * @param request - CreateServiceMirrorRequest
     *
     * @returns CreateServiceMirrorResponse
     *
     * @param string                     $ClusterId
     * @param string                     $ServiceName
     * @param CreateServiceMirrorRequest $request
     *
     * @return CreateServiceMirrorResponse
     */
    public function createServiceMirror($ClusterId, $ServiceName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createServiceMirrorWithOptions($ClusterId, $ServiceName, $request, $headers, $runtime);
    }

    /**
     * Creates a virtual resource group.
     *
     * @param request - CreateVirtualResourceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateVirtualResourceResponse
     *
     * @param CreateVirtualResourceRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return CreateVirtualResourceResponse
     */
    public function createVirtualResourceWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->disableSpotProtectionPeriod) {
            @$body['DisableSpotProtectionPeriod'] = $request->disableSpotProtectionPeriod;
        }

        if (null !== $request->resources) {
            @$body['Resources'] = $request->resources;
        }

        if (null !== $request->virtualResourceName) {
            @$body['VirtualResourceName'] = $request->virtualResourceName;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateVirtualResource',
            'version' => '2021-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/virtualresources',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateVirtualResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a virtual resource group.
     *
     * @param request - CreateVirtualResourceRequest
     *
     * @returns CreateVirtualResourceResponse
     *
     * @param CreateVirtualResourceRequest $request
     *
     * @return CreateVirtualResourceResponse
     */
    public function createVirtualResource($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createVirtualResourceWithOptions($request, $headers, $runtime);
    }

    /**
     * Deletes an access control list (ACL) for a private gateway. The IP CIDR block that is deleted from the ACL cannot access the private gateway.
     *
     * @param tmpReq - DeleteAclPolicyRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteAclPolicyResponse
     *
     * @param string                 $ClusterId
     * @param string                 $GatewayId
     * @param DeleteAclPolicyRequest $tmpReq
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteAclPolicyResponse
     */
    public function deleteAclPolicyWithOptions($ClusterId, $GatewayId, $tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new DeleteAclPolicyShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->aclPolicyList) {
            $request->aclPolicyListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->aclPolicyList, 'AclPolicyList', 'json');
        }

        $query = [];
        if (null !== $request->aclPolicyListShrink) {
            @$query['AclPolicyList'] = $request->aclPolicyListShrink;
        }

        if (null !== $request->vpcId) {
            @$query['VpcId'] = $request->vpcId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteAclPolicy',
            'version' => '2021-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/gateways/' . Url::percentEncode($ClusterId) . '/' . Url::percentEncode($GatewayId) . '/acl_policy',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteAclPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes an access control list (ACL) for a private gateway. The IP CIDR block that is deleted from the ACL cannot access the private gateway.
     *
     * @param request - DeleteAclPolicyRequest
     *
     * @returns DeleteAclPolicyResponse
     *
     * @param string                 $ClusterId
     * @param string                 $GatewayId
     * @param DeleteAclPolicyRequest $request
     *
     * @return DeleteAclPolicyResponse
     */
    public function deleteAclPolicy($ClusterId, $GatewayId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteAclPolicyWithOptions($ClusterId, $GatewayId, $request, $headers, $runtime);
    }

    /**
     * Deletes a stress testing task.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteBenchmarkTaskResponse
     *
     * @param string         $ClusterId
     * @param string         $TaskName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteBenchmarkTaskResponse
     */
    public function deleteBenchmarkTaskWithOptions($ClusterId, $TaskName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteBenchmarkTask',
            'version' => '2021-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/benchmark-tasks/' . Url::percentEncode($ClusterId) . '/' . Url::percentEncode($TaskName) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteBenchmarkTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a stress testing task.
     *
     * @returns DeleteBenchmarkTaskResponse
     *
     * @param string $ClusterId
     * @param string $TaskName
     *
     * @return DeleteBenchmarkTaskResponse
     */
    public function deleteBenchmarkTask($ClusterId, $TaskName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteBenchmarkTaskWithOptions($ClusterId, $TaskName, $headers, $runtime);
    }

    /**
     * 删除故障注入任务
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteFaultInjectionResponse
     *
     * @param string         $ClusterId
     * @param string         $ServiceName
     * @param string         $InstanceName
     * @param string         $FaultType
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteFaultInjectionResponse
     */
    public function deleteFaultInjectionWithOptions($ClusterId, $ServiceName, $InstanceName, $FaultType, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteFaultInjection',
            'version' => '2021-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/services/' . Url::percentEncode($ClusterId) . '/' . Url::percentEncode($ServiceName) . '/instances/' . Url::percentEncode($InstanceName) . '/faults/' . Url::percentEncode($FaultType) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteFaultInjectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除故障注入任务
     *
     * @returns DeleteFaultInjectionResponse
     *
     * @param string $ClusterId
     * @param string $ServiceName
     * @param string $InstanceName
     * @param string $FaultType
     *
     * @return DeleteFaultInjectionResponse
     */
    public function deleteFaultInjection($ClusterId, $ServiceName, $InstanceName, $FaultType)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteFaultInjectionWithOptions($ClusterId, $ServiceName, $InstanceName, $FaultType, $headers, $runtime);
    }

    /**
     * Deletes a private gateway.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteGatewayResponse
     *
     * @param string         $ClusterId
     * @param string         $GatewayId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteGatewayResponse
     */
    public function deleteGatewayWithOptions($ClusterId, $GatewayId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteGateway',
            'version' => '2021-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/gateways/' . Url::percentEncode($ClusterId) . '/' . Url::percentEncode($GatewayId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteGatewayResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a private gateway.
     *
     * @returns DeleteGatewayResponse
     *
     * @param string $ClusterId
     * @param string $GatewayId
     *
     * @return DeleteGatewayResponse
     */
    public function deleteGateway($ClusterId, $GatewayId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteGatewayWithOptions($ClusterId, $GatewayId, $headers, $runtime);
    }

    /**
     * 删除网关内网访问端点.
     *
     * @param request - DeleteGatewayIntranetLinkedVpcRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteGatewayIntranetLinkedVpcResponse
     *
     * @param string                                $ClusterId
     * @param string                                $GatewayId
     * @param DeleteGatewayIntranetLinkedVpcRequest $request
     * @param string[]                              $headers
     * @param RuntimeOptions                        $runtime
     *
     * @return DeleteGatewayIntranetLinkedVpcResponse
     */
    public function deleteGatewayIntranetLinkedVpcWithOptions($ClusterId, $GatewayId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->vSwitchId) {
            @$query['VSwitchId'] = $request->vSwitchId;
        }

        if (null !== $request->vpcId) {
            @$query['VpcId'] = $request->vpcId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteGatewayIntranetLinkedVpc',
            'version' => '2021-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/gateways/' . Url::percentEncode($ClusterId) . '/' . Url::percentEncode($GatewayId) . '/intranet_endpoint_linked_vpc',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteGatewayIntranetLinkedVpcResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除网关内网访问端点.
     *
     * @param request - DeleteGatewayIntranetLinkedVpcRequest
     *
     * @returns DeleteGatewayIntranetLinkedVpcResponse
     *
     * @param string                                $ClusterId
     * @param string                                $GatewayId
     * @param DeleteGatewayIntranetLinkedVpcRequest $request
     *
     * @return DeleteGatewayIntranetLinkedVpcResponse
     */
    public function deleteGatewayIntranetLinkedVpc($ClusterId, $GatewayId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteGatewayIntranetLinkedVpcWithOptions($ClusterId, $GatewayId, $request, $headers, $runtime);
    }

    /**
     * Deletes a VPC peering connection from an internal endpoint of a gateway.
     *
     * @param tmpReq - DeleteGatewayIntranetLinkedVpcPeerRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteGatewayIntranetLinkedVpcPeerResponse
     *
     * @param string                                    $ClusterId
     * @param string                                    $GatewayId
     * @param DeleteGatewayIntranetLinkedVpcPeerRequest $tmpReq
     * @param string[]                                  $headers
     * @param RuntimeOptions                            $runtime
     *
     * @return DeleteGatewayIntranetLinkedVpcPeerResponse
     */
    public function deleteGatewayIntranetLinkedVpcPeerWithOptions($ClusterId, $GatewayId, $tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new DeleteGatewayIntranetLinkedVpcPeerShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->peerVpcs) {
            $request->peerVpcsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->peerVpcs, 'PeerVpcs', 'json');
        }

        $query = [];
        if (null !== $request->peerVpcsShrink) {
            @$query['PeerVpcs'] = $request->peerVpcsShrink;
        }

        if (null !== $request->vpcId) {
            @$query['VpcId'] = $request->vpcId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteGatewayIntranetLinkedVpcPeer',
            'version' => '2021-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/gateways/' . Url::percentEncode($ClusterId) . '/' . Url::percentEncode($GatewayId) . '/intranet_endpoint_linked_vpc_peer',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteGatewayIntranetLinkedVpcPeerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a VPC peering connection from an internal endpoint of a gateway.
     *
     * @param request - DeleteGatewayIntranetLinkedVpcPeerRequest
     *
     * @returns DeleteGatewayIntranetLinkedVpcPeerResponse
     *
     * @param string                                    $ClusterId
     * @param string                                    $GatewayId
     * @param DeleteGatewayIntranetLinkedVpcPeerRequest $request
     *
     * @return DeleteGatewayIntranetLinkedVpcPeerResponse
     */
    public function deleteGatewayIntranetLinkedVpcPeer($ClusterId, $GatewayId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteGatewayIntranetLinkedVpcPeerWithOptions($ClusterId, $GatewayId, $request, $headers, $runtime);
    }

    /**
     * 删除网关标签.
     *
     * @param tmpReq - DeleteGatewayLabelRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteGatewayLabelResponse
     *
     * @param string                    $ClusterId
     * @param string                    $GatewayId
     * @param DeleteGatewayLabelRequest $tmpReq
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteGatewayLabelResponse
     */
    public function deleteGatewayLabelWithOptions($ClusterId, $GatewayId, $tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new DeleteGatewayLabelShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->labelKeys) {
            $request->labelKeysShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->labelKeys, 'LabelKeys', 'json');
        }

        $query = [];
        if (null !== $request->labelKeysShrink) {
            @$query['LabelKeys'] = $request->labelKeysShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteGatewayLabel',
            'version' => '2021-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/gateways/' . Url::percentEncode($ClusterId) . '/' . Url::percentEncode($GatewayId) . '/label',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteGatewayLabelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除网关标签.
     *
     * @param request - DeleteGatewayLabelRequest
     *
     * @returns DeleteGatewayLabelResponse
     *
     * @param string                    $ClusterId
     * @param string                    $GatewayId
     * @param DeleteGatewayLabelRequest $request
     *
     * @return DeleteGatewayLabelResponse
     */
    public function deleteGatewayLabel($ClusterId, $GatewayId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteGatewayLabelWithOptions($ClusterId, $GatewayId, $request, $headers, $runtime);
    }

    /**
     * Deletes a resource group that contains no resources or instances.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteResourceResponse
     *
     * @param string         $ClusterId
     * @param string         $ResourceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteResourceResponse
     */
    public function deleteResourceWithOptions($ClusterId, $ResourceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteResource',
            'version' => '2021-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/resources/' . Url::percentEncode($ClusterId) . '/' . Url::percentEncode($ResourceId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a resource group that contains no resources or instances.
     *
     * @returns DeleteResourceResponse
     *
     * @param string $ClusterId
     * @param string $ResourceId
     *
     * @return DeleteResourceResponse
     */
    public function deleteResource($ClusterId, $ResourceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteResourceWithOptions($ClusterId, $ResourceId, $headers, $runtime);
    }

    /**
     * Disables the virtual private cloud (VPC) direct connection feature for a dedicated resource group.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteResourceDLinkResponse
     *
     * @param string         $ClusterId
     * @param string         $ResourceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteResourceDLinkResponse
     */
    public function deleteResourceDLinkWithOptions($ClusterId, $ResourceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteResourceDLink',
            'version' => '2021-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/resources/' . Url::percentEncode($ClusterId) . '/' . Url::percentEncode($ResourceId) . '/dlink',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteResourceDLinkResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Disables the virtual private cloud (VPC) direct connection feature for a dedicated resource group.
     *
     * @returns DeleteResourceDLinkResponse
     *
     * @param string $ClusterId
     * @param string $ResourceId
     *
     * @return DeleteResourceDLinkResponse
     */
    public function deleteResourceDLink($ClusterId, $ResourceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteResourceDLinkWithOptions($ClusterId, $ResourceId, $headers, $runtime);
    }

    /**
     * Deletes the tags of an instance in a resource group.
     *
     * @param tmpReq - DeleteResourceInstanceLabelRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteResourceInstanceLabelResponse
     *
     * @param string                             $ClusterId
     * @param string                             $ResourceId
     * @param DeleteResourceInstanceLabelRequest $tmpReq
     * @param string[]                           $headers
     * @param RuntimeOptions                     $runtime
     *
     * @return DeleteResourceInstanceLabelResponse
     */
    public function deleteResourceInstanceLabelWithOptions($ClusterId, $ResourceId, $tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new DeleteResourceInstanceLabelShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->instanceIds) {
            $request->instanceIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->instanceIds, 'InstanceIds', 'simple');
        }

        if (null !== $tmpReq->keys) {
            $request->keysShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->keys, 'Keys', 'simple');
        }

        if (null !== $tmpReq->labelKeys) {
            $request->labelKeysShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->labelKeys, 'LabelKeys', 'json');
        }

        $query = [];
        if (null !== $request->allInstances) {
            @$query['AllInstances'] = $request->allInstances;
        }

        if (null !== $request->instanceIdsShrink) {
            @$query['InstanceIds'] = $request->instanceIdsShrink;
        }

        if (null !== $request->keysShrink) {
            @$query['Keys'] = $request->keysShrink;
        }

        if (null !== $request->labelKeysShrink) {
            @$query['LabelKeys'] = $request->labelKeysShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteResourceInstanceLabel',
            'version' => '2021-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/resources/' . Url::percentEncode($ClusterId) . '/' . Url::percentEncode($ResourceId) . '/label',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteResourceInstanceLabelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes the tags of an instance in a resource group.
     *
     * @param request - DeleteResourceInstanceLabelRequest
     *
     * @returns DeleteResourceInstanceLabelResponse
     *
     * @param string                             $ClusterId
     * @param string                             $ResourceId
     * @param DeleteResourceInstanceLabelRequest $request
     *
     * @return DeleteResourceInstanceLabelResponse
     */
    public function deleteResourceInstanceLabel($ClusterId, $ResourceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteResourceInstanceLabelWithOptions($ClusterId, $ResourceId, $request, $headers, $runtime);
    }

    /**
     * Deletes instances in a dedicated resource group. You can delete only pay-as-you-go instances as a regular user.
     *
     * @param request - DeleteResourceInstancesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteResourceInstancesResponse
     *
     * @param string                         $ClusterId
     * @param string                         $ResourceId
     * @param DeleteResourceInstancesRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return DeleteResourceInstancesResponse
     */
    public function deleteResourceInstancesWithOptions($ClusterId, $ResourceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->allFailed) {
            @$query['AllFailed'] = $request->allFailed;
        }

        if (null !== $request->instanceList) {
            @$query['InstanceList'] = $request->instanceList;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteResourceInstances',
            'version' => '2021-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/resources/' . Url::percentEncode($ClusterId) . '/' . Url::percentEncode($ResourceId) . '/instances',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteResourceInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes instances in a dedicated resource group. You can delete only pay-as-you-go instances as a regular user.
     *
     * @param request - DeleteResourceInstancesRequest
     *
     * @returns DeleteResourceInstancesResponse
     *
     * @param string                         $ClusterId
     * @param string                         $ResourceId
     * @param DeleteResourceInstancesRequest $request
     *
     * @return DeleteResourceInstancesResponse
     */
    public function deleteResourceInstances($ClusterId, $ResourceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteResourceInstancesWithOptions($ClusterId, $ResourceId, $request, $headers, $runtime);
    }

    /**
     * Disables the LogShipper feature of Log Service for a dedicated resource group.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteResourceLogResponse
     *
     * @param string         $ClusterId
     * @param string         $ResourceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteResourceLogResponse
     */
    public function deleteResourceLogWithOptions($ClusterId, $ResourceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteResourceLog',
            'version' => '2021-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/resources/' . Url::percentEncode($ClusterId) . '/' . Url::percentEncode($ResourceId) . '/log',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteResourceLogResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Disables the LogShipper feature of Log Service for a dedicated resource group.
     *
     * @returns DeleteResourceLogResponse
     *
     * @param string $ClusterId
     * @param string $ResourceId
     *
     * @return DeleteResourceLogResponse
     */
    public function deleteResourceLog($ClusterId, $ResourceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteResourceLogWithOptions($ClusterId, $ResourceId, $headers, $runtime);
    }

    /**
     * Deletes a service.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteServiceResponse
     *
     * @param string         $ClusterId
     * @param string         $ServiceName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteServiceResponse
     */
    public function deleteServiceWithOptions($ClusterId, $ServiceName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteService',
            'version' => '2021-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/services/' . Url::percentEncode($ClusterId) . '/' . Url::percentEncode($ServiceName) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a service.
     *
     * @returns DeleteServiceResponse
     *
     * @param string $ClusterId
     * @param string $ServiceName
     *
     * @return DeleteServiceResponse
     */
    public function deleteService($ClusterId, $ServiceName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteServiceWithOptions($ClusterId, $ServiceName, $headers, $runtime);
    }

    /**
     * Deletes the existing Autoscaler controller and disables the Autoscaler feature for a service.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteServiceAutoScalerResponse
     *
     * @param string         $ClusterId
     * @param string         $ServiceName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteServiceAutoScalerResponse
     */
    public function deleteServiceAutoScalerWithOptions($ClusterId, $ServiceName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteServiceAutoScaler',
            'version' => '2021-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/services/' . Url::percentEncode($ClusterId) . '/' . Url::percentEncode($ServiceName) . '/autoscaler',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteServiceAutoScalerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes the existing Autoscaler controller and disables the Autoscaler feature for a service.
     *
     * @returns DeleteServiceAutoScalerResponse
     *
     * @param string $ClusterId
     * @param string $ServiceName
     *
     * @return DeleteServiceAutoScalerResponse
     */
    public function deleteServiceAutoScaler($ClusterId, $ServiceName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteServiceAutoScalerWithOptions($ClusterId, $ServiceName, $headers, $runtime);
    }

    /**
     * Disables the Cronscaler feature for a service.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteServiceCronScalerResponse
     *
     * @param string         $ClusterId
     * @param string         $ServiceName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteServiceCronScalerResponse
     */
    public function deleteServiceCronScalerWithOptions($ClusterId, $ServiceName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteServiceCronScaler',
            'version' => '2021-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/services/' . Url::percentEncode($ClusterId) . '/' . Url::percentEncode($ServiceName) . '/cronscaler',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteServiceCronScalerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Disables the Cronscaler feature for a service.
     *
     * @returns DeleteServiceCronScalerResponse
     *
     * @param string $ClusterId
     * @param string $ServiceName
     *
     * @return DeleteServiceCronScalerResponse
     */
    public function deleteServiceCronScaler($ClusterId, $ServiceName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteServiceCronScalerWithOptions($ClusterId, $ServiceName, $headers, $runtime);
    }

    /**
     * Restarts the instances of a service.
     *
     * @param request - DeleteServiceInstancesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteServiceInstancesResponse
     *
     * @param string                        $ClusterId
     * @param string                        $ServiceName
     * @param DeleteServiceInstancesRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return DeleteServiceInstancesResponse
     */
    public function deleteServiceInstancesWithOptions($ClusterId, $ServiceName, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->container) {
            @$query['Container'] = $request->container;
        }

        if (null !== $request->instanceList) {
            @$query['InstanceList'] = $request->instanceList;
        }

        if (null !== $request->isReplica) {
            @$query['IsReplica'] = $request->isReplica;
        }

        if (null !== $request->softRestart) {
            @$query['SoftRestart'] = $request->softRestart;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteServiceInstances',
            'version' => '2021-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/services/' . Url::percentEncode($ClusterId) . '/' . Url::percentEncode($ServiceName) . '/instances',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteServiceInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Restarts the instances of a service.
     *
     * @param request - DeleteServiceInstancesRequest
     *
     * @returns DeleteServiceInstancesResponse
     *
     * @param string                        $ClusterId
     * @param string                        $ServiceName
     * @param DeleteServiceInstancesRequest $request
     *
     * @return DeleteServiceInstancesResponse
     */
    public function deleteServiceInstances($ClusterId, $ServiceName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteServiceInstancesWithOptions($ClusterId, $ServiceName, $request, $headers, $runtime);
    }

    /**
     * Deletes existing service tags.
     *
     * @param tmpReq - DeleteServiceLabelRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteServiceLabelResponse
     *
     * @param string                    $ClusterId
     * @param string                    $ServiceName
     * @param DeleteServiceLabelRequest $tmpReq
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteServiceLabelResponse
     */
    public function deleteServiceLabelWithOptions($ClusterId, $ServiceName, $tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new DeleteServiceLabelShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->keys) {
            $request->keysShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->keys, 'Keys', 'simple');
        }

        if (null !== $tmpReq->labelKeys) {
            $request->labelKeysShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->labelKeys, 'LabelKeys', 'json');
        }

        $query = [];
        if (null !== $request->keysShrink) {
            @$query['Keys'] = $request->keysShrink;
        }

        if (null !== $request->labelKeysShrink) {
            @$query['LabelKeys'] = $request->labelKeysShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteServiceLabel',
            'version' => '2021-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/services/' . Url::percentEncode($ClusterId) . '/' . Url::percentEncode($ServiceName) . '/label',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteServiceLabelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes existing service tags.
     *
     * @param request - DeleteServiceLabelRequest
     *
     * @returns DeleteServiceLabelResponse
     *
     * @param string                    $ClusterId
     * @param string                    $ServiceName
     * @param DeleteServiceLabelRequest $request
     *
     * @return DeleteServiceLabelResponse
     */
    public function deleteServiceLabel($ClusterId, $ServiceName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteServiceLabelWithOptions($ClusterId, $ServiceName, $request, $headers, $runtime);
    }

    /**
     * Disables the traffic mirroring feature for a service.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteServiceMirrorResponse
     *
     * @param string         $ClusterId
     * @param string         $ServiceName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteServiceMirrorResponse
     */
    public function deleteServiceMirrorWithOptions($ClusterId, $ServiceName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteServiceMirror',
            'version' => '2021-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/services/' . Url::percentEncode($ClusterId) . '/' . Url::percentEncode($ServiceName) . '/mirror',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteServiceMirrorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Disables the traffic mirroring feature for a service.
     *
     * @returns DeleteServiceMirrorResponse
     *
     * @param string $ClusterId
     * @param string $ServiceName
     *
     * @return DeleteServiceMirrorResponse
     */
    public function deleteServiceMirror($ClusterId, $ServiceName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteServiceMirrorWithOptions($ClusterId, $ServiceName, $headers, $runtime);
    }

    /**
     * Deletes a virtual resource group that contains no resources or instances.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteVirtualResourceResponse
     *
     * @param string         $ClusterId
     * @param string         $VirtualResourceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteVirtualResourceResponse
     */
    public function deleteVirtualResourceWithOptions($ClusterId, $VirtualResourceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteVirtualResource',
            'version' => '2021-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/virtualresources/' . Url::percentEncode($ClusterId) . '/' . Url::percentEncode($VirtualResourceId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteVirtualResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a virtual resource group that contains no resources or instances.
     *
     * @returns DeleteVirtualResourceResponse
     *
     * @param string $ClusterId
     * @param string $VirtualResourceId
     *
     * @return DeleteVirtualResourceResponse
     */
    public function deleteVirtualResource($ClusterId, $VirtualResourceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteVirtualResourceWithOptions($ClusterId, $VirtualResourceId, $headers, $runtime);
    }

    /**
     * Queries details about the configurations of a stress testing task.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeBenchmarkTaskResponse
     *
     * @param string         $ClusterId
     * @param string         $TaskName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DescribeBenchmarkTaskResponse
     */
    public function describeBenchmarkTaskWithOptions($ClusterId, $TaskName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DescribeBenchmarkTask',
            'version' => '2021-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/benchmark-tasks/' . Url::percentEncode($ClusterId) . '/' . Url::percentEncode($TaskName) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DescribeBenchmarkTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries details about the configurations of a stress testing task.
     *
     * @returns DescribeBenchmarkTaskResponse
     *
     * @param string $ClusterId
     * @param string $TaskName
     *
     * @return DescribeBenchmarkTaskResponse
     */
    public function describeBenchmarkTask($ClusterId, $TaskName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeBenchmarkTaskWithOptions($ClusterId, $TaskName, $headers, $runtime);
    }

    /**
     * Queries the report of a stress testing task.
     *
     * @param request - DescribeBenchmarkTaskReportRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeBenchmarkTaskReportResponse
     *
     * @param string                             $ClusterId
     * @param string                             $TaskName
     * @param DescribeBenchmarkTaskReportRequest $request
     * @param string[]                           $headers
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeBenchmarkTaskReportResponse
     */
    public function describeBenchmarkTaskReportWithOptions($ClusterId, $TaskName, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->reportType) {
            @$query['ReportType'] = $request->reportType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeBenchmarkTaskReport',
            'version' => '2021-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/benchmark-tasks/' . Url::percentEncode($ClusterId) . '/' . Url::percentEncode($TaskName) . '/report',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DescribeBenchmarkTaskReportResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the report of a stress testing task.
     *
     * @param request - DescribeBenchmarkTaskReportRequest
     *
     * @returns DescribeBenchmarkTaskReportResponse
     *
     * @param string                             $ClusterId
     * @param string                             $TaskName
     * @param DescribeBenchmarkTaskReportRequest $request
     *
     * @return DescribeBenchmarkTaskReportResponse
     */
    public function describeBenchmarkTaskReport($ClusterId, $TaskName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeBenchmarkTaskReportWithOptions($ClusterId, $TaskName, $request, $headers, $runtime);
    }

    /**
     * Queries the details of a private gateway.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeGatewayResponse
     *
     * @param string         $ClusterId
     * @param string         $GatewayId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DescribeGatewayResponse
     */
    public function describeGatewayWithOptions($ClusterId, $GatewayId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DescribeGateway',
            'version' => '2021-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/gateways/' . Url::percentEncode($ClusterId) . '/' . Url::percentEncode($GatewayId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DescribeGatewayResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of a private gateway.
     *
     * @returns DescribeGatewayResponse
     *
     * @param string $ClusterId
     * @param string $GatewayId
     *
     * @return DescribeGatewayResponse
     */
    public function describeGateway($ClusterId, $GatewayId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeGatewayWithOptions($ClusterId, $GatewayId, $headers, $runtime);
    }

    /**
     * Queries the information about a service group.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeGroupResponse
     *
     * @param string         $ClusterId
     * @param string         $GroupName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DescribeGroupResponse
     */
    public function describeGroupWithOptions($ClusterId, $GroupName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DescribeGroup',
            'version' => '2021-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/groups/' . Url::percentEncode($ClusterId) . '/' . Url::percentEncode($GroupName) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DescribeGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about a service group.
     *
     * @returns DescribeGroupResponse
     *
     * @param string $ClusterId
     * @param string $GroupName
     *
     * @return DescribeGroupResponse
     */
    public function describeGroup($ClusterId, $GroupName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeGroupWithOptions($ClusterId, $GroupName, $headers, $runtime);
    }

    /**
     * Obtains a list of endpoints of service groups.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeGroupEndpointsResponse
     *
     * @param string         $ClusterId
     * @param string         $GroupName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DescribeGroupEndpointsResponse
     */
    public function describeGroupEndpointsWithOptions($ClusterId, $GroupName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DescribeGroupEndpoints',
            'version' => '2021-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/groups/' . Url::percentEncode($ClusterId) . '/' . Url::percentEncode($GroupName) . '/endpoints',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DescribeGroupEndpointsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Obtains a list of endpoints of service groups.
     *
     * @returns DescribeGroupEndpointsResponse
     *
     * @param string $ClusterId
     * @param string $GroupName
     *
     * @return DescribeGroupEndpointsResponse
     */
    public function describeGroupEndpoints($ClusterId, $GroupName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeGroupEndpointsWithOptions($ClusterId, $GroupName, $headers, $runtime);
    }

    /**
     * Queries a list of instance types for an available instance in a shared resource group.
     *
     * @param tmpReq - DescribeMachineSpecRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeMachineSpecResponse
     *
     * @param DescribeMachineSpecRequest $tmpReq
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeMachineSpecResponse
     */
    public function describeMachineSpecWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new DescribeMachineSpecShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->instanceTypes) {
            $request->instanceTypesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->instanceTypes, 'InstanceTypes', 'simple');
        }

        $query = [];
        if (null !== $request->chargeType) {
            @$query['ChargeType'] = $request->chargeType;
        }

        if (null !== $request->instanceTypesShrink) {
            @$query['InstanceTypes'] = $request->instanceTypesShrink;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeMachineSpec',
            'version' => '2021-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/public/instance_types',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DescribeMachineSpecResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of instance types for an available instance in a shared resource group.
     *
     * @param request - DescribeMachineSpecRequest
     *
     * @returns DescribeMachineSpecResponse
     *
     * @param DescribeMachineSpecRequest $request
     *
     * @return DescribeMachineSpecResponse
     */
    public function describeMachineSpec($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeMachineSpecWithOptions($request, $headers, $runtime);
    }

    /**
     * Queries available regions.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeRegionsResponse
     *
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DescribeRegionsResponse
     */
    public function describeRegionsWithOptions($headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DescribeRegions',
            'version' => '2021-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/regions',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DescribeRegionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries available regions.
     *
     * @returns DescribeRegionsResponse
     *
     * @return DescribeRegionsResponse
     */
    public function describeRegions()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeRegionsWithOptions($headers, $runtime);
    }

    /**
     * Queries the information about a resource group.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeResourceResponse
     *
     * @param string         $ClusterId
     * @param string         $ResourceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DescribeResourceResponse
     */
    public function describeResourceWithOptions($ClusterId, $ResourceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DescribeResource',
            'version' => '2021-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/resources/' . Url::percentEncode($ClusterId) . '/' . Url::percentEncode($ResourceId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DescribeResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about a resource group.
     *
     * @returns DescribeResourceResponse
     *
     * @param string $ClusterId
     * @param string $ResourceId
     *
     * @return DescribeResourceResponse
     */
    public function describeResource($ClusterId, $ResourceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeResourceWithOptions($ClusterId, $ResourceId, $headers, $runtime);
    }

    /**
     * Queries detailed configurations about a virtual private cloud (VPC) direct connection of a dedicated resource group.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeResourceDLinkResponse
     *
     * @param string         $ClusterId
     * @param string         $ResourceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DescribeResourceDLinkResponse
     */
    public function describeResourceDLinkWithOptions($ClusterId, $ResourceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DescribeResourceDLink',
            'version' => '2021-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/resources/' . Url::percentEncode($ClusterId) . '/' . Url::percentEncode($ResourceId) . '/dlink',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DescribeResourceDLinkResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries detailed configurations about a virtual private cloud (VPC) direct connection of a dedicated resource group.
     *
     * @returns DescribeResourceDLinkResponse
     *
     * @param string $ClusterId
     * @param string $ResourceId
     *
     * @return DescribeResourceDLinkResponse
     */
    public function describeResourceDLink($ClusterId, $ResourceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeResourceDLinkWithOptions($ClusterId, $ResourceId, $headers, $runtime);
    }

    /**
     * Queries the details about the LogShipper configurations of Log Service for a dedicated resource group.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeResourceLogResponse
     *
     * @param string         $ClusterId
     * @param string         $ResourceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DescribeResourceLogResponse
     */
    public function describeResourceLogWithOptions($ClusterId, $ResourceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DescribeResourceLog',
            'version' => '2021-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/resources/' . Url::percentEncode($ClusterId) . '/' . Url::percentEncode($ResourceId) . '/log',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DescribeResourceLogResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details about the LogShipper configurations of Log Service for a dedicated resource group.
     *
     * @returns DescribeResourceLogResponse
     *
     * @param string $ClusterId
     * @param string $ResourceId
     *
     * @return DescribeResourceLogResponse
     */
    public function describeResourceLog($ClusterId, $ResourceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeResourceLogWithOptions($ClusterId, $ResourceId, $headers, $runtime);
    }

    /**
     * Queries the details about a service.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeServiceResponse
     *
     * @param string         $ClusterId
     * @param string         $ServiceName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DescribeServiceResponse
     */
    public function describeServiceWithOptions($ClusterId, $ServiceName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DescribeService',
            'version' => '2021-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/services/' . Url::percentEncode($ClusterId) . '/' . Url::percentEncode($ServiceName) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DescribeServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details about a service.
     *
     * @returns DescribeServiceResponse
     *
     * @param string $ClusterId
     * @param string $ServiceName
     *
     * @return DescribeServiceResponse
     */
    public function describeService($ClusterId, $ServiceName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeServiceWithOptions($ClusterId, $ServiceName, $headers, $runtime);
    }

    /**
     * Queries information about the Autoscaler configurations of a service.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeServiceAutoScalerResponse
     *
     * @param string         $ClusterId
     * @param string         $ServiceName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DescribeServiceAutoScalerResponse
     */
    public function describeServiceAutoScalerWithOptions($ClusterId, $ServiceName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DescribeServiceAutoScaler',
            'version' => '2021-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/services/' . Url::percentEncode($ClusterId) . '/' . Url::percentEncode($ServiceName) . '/autoscaler',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DescribeServiceAutoScalerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries information about the Autoscaler configurations of a service.
     *
     * @returns DescribeServiceAutoScalerResponse
     *
     * @param string $ClusterId
     * @param string $ServiceName
     *
     * @return DescribeServiceAutoScalerResponse
     */
    public function describeServiceAutoScaler($ClusterId, $ServiceName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeServiceAutoScalerWithOptions($ClusterId, $ServiceName, $headers, $runtime);
    }

    /**
     * Queries the Cron Horizontal Pod Autoscaler (CronHPA) configurations of a service.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeServiceCronScalerResponse
     *
     * @param string         $ClusterId
     * @param string         $ServiceName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DescribeServiceCronScalerResponse
     */
    public function describeServiceCronScalerWithOptions($ClusterId, $ServiceName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DescribeServiceCronScaler',
            'version' => '2021-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/services/' . Url::percentEncode($ClusterId) . '/' . Url::percentEncode($ServiceName) . '/cronscaler',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DescribeServiceCronScalerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the Cron Horizontal Pod Autoscaler (CronHPA) configurations of a service.
     *
     * @returns DescribeServiceCronScalerResponse
     *
     * @param string $ClusterId
     * @param string $ServiceName
     *
     * @return DescribeServiceCronScalerResponse
     */
    public function describeServiceCronScaler($ClusterId, $ServiceName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeServiceCronScalerWithOptions($ClusterId, $ServiceName, $headers, $runtime);
    }

    /**
     * Queries the diagnostics details of a service.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeServiceDiagnosisResponse
     *
     * @param string         $ClusterId
     * @param string         $ServiceName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DescribeServiceDiagnosisResponse
     */
    public function describeServiceDiagnosisWithOptions($ClusterId, $ServiceName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DescribeServiceDiagnosis',
            'version' => '2021-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/services/' . Url::percentEncode($ClusterId) . '/' . Url::percentEncode($ServiceName) . '/diagnosis',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DescribeServiceDiagnosisResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the diagnostics details of a service.
     *
     * @returns DescribeServiceDiagnosisResponse
     *
     * @param string $ClusterId
     * @param string $ServiceName
     *
     * @return DescribeServiceDiagnosisResponse
     */
    public function describeServiceDiagnosis($ClusterId, $ServiceName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeServiceDiagnosisWithOptions($ClusterId, $ServiceName, $headers, $runtime);
    }

    /**
     * Obtains a list of service endpoints.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeServiceEndpointsResponse
     *
     * @param string         $ClusterId
     * @param string         $ServiceName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DescribeServiceEndpointsResponse
     */
    public function describeServiceEndpointsWithOptions($ClusterId, $ServiceName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DescribeServiceEndpoints',
            'version' => '2021-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/services/' . Url::percentEncode($ClusterId) . '/' . Url::percentEncode($ServiceName) . '/endpoints',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DescribeServiceEndpointsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Obtains a list of service endpoints.
     *
     * @returns DescribeServiceEndpointsResponse
     *
     * @param string $ClusterId
     * @param string $ServiceName
     *
     * @return DescribeServiceEndpointsResponse
     */
    public function describeServiceEndpoints($ClusterId, $ServiceName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeServiceEndpointsWithOptions($ClusterId, $ServiceName, $headers, $runtime);
    }

    /**
     * Queries information about recent service deployment events.
     *
     * @param request - DescribeServiceEventRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeServiceEventResponse
     *
     * @param string                      $ClusterId
     * @param string                      $ServiceName
     * @param DescribeServiceEventRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeServiceEventResponse
     */
    public function describeServiceEventWithOptions($ClusterId, $ServiceName, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->eventType) {
            @$query['EventType'] = $request->eventType;
        }

        if (null !== $request->instanceName) {
            @$query['InstanceName'] = $request->instanceName;
        }

        if (null !== $request->pageNum) {
            @$query['PageNum'] = $request->pageNum;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeServiceEvent',
            'version' => '2021-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/services/' . Url::percentEncode($ClusterId) . '/' . Url::percentEncode($ServiceName) . '/events',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DescribeServiceEventResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries information about recent service deployment events.
     *
     * @param request - DescribeServiceEventRequest
     *
     * @returns DescribeServiceEventResponse
     *
     * @param string                      $ClusterId
     * @param string                      $ServiceName
     * @param DescribeServiceEventRequest $request
     *
     * @return DescribeServiceEventResponse
     */
    public function describeServiceEvent($ClusterId, $ServiceName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeServiceEventWithOptions($ClusterId, $ServiceName, $request, $headers, $runtime);
    }

    /**
     * Queries the diagnostics details of an instance that runs Elastic Algorithm Service (EAS).
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeServiceInstanceDiagnosisResponse
     *
     * @param string         $ClusterId
     * @param string         $ServiceName
     * @param string         $InstanceName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DescribeServiceInstanceDiagnosisResponse
     */
    public function describeServiceInstanceDiagnosisWithOptions($ClusterId, $ServiceName, $InstanceName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DescribeServiceInstanceDiagnosis',
            'version' => '2021-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/services/' . Url::percentEncode($ClusterId) . '/' . Url::percentEncode($ServiceName) . '/instances/' . Url::percentEncode($InstanceName) . '/diagnosis',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DescribeServiceInstanceDiagnosisResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the diagnostics details of an instance that runs Elastic Algorithm Service (EAS).
     *
     * @returns DescribeServiceInstanceDiagnosisResponse
     *
     * @param string $ClusterId
     * @param string $ServiceName
     * @param string $InstanceName
     *
     * @return DescribeServiceInstanceDiagnosisResponse
     */
    public function describeServiceInstanceDiagnosis($ClusterId, $ServiceName, $InstanceName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeServiceInstanceDiagnosisWithOptions($ClusterId, $ServiceName, $InstanceName, $headers, $runtime);
    }

    /**
     * Queries the information about the logs of a service.
     *
     * @param request - DescribeServiceLogRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeServiceLogResponse
     *
     * @param string                    $ClusterId
     * @param string                    $ServiceName
     * @param DescribeServiceLogRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeServiceLogResponse
     */
    public function describeServiceLogWithOptions($ClusterId, $ServiceName, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->containerName) {
            @$query['ContainerName'] = $request->containerName;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->instanceName) {
            @$query['InstanceName'] = $request->instanceName;
        }

        if (null !== $request->ip) {
            @$query['Ip'] = $request->ip;
        }

        if (null !== $request->keyword) {
            @$query['Keyword'] = $request->keyword;
        }

        if (null !== $request->pageNum) {
            @$query['PageNum'] = $request->pageNum;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->previous) {
            @$query['Previous'] = $request->previous;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeServiceLog',
            'version' => '2021-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/services/' . Url::percentEncode($ClusterId) . '/' . Url::percentEncode($ServiceName) . '/logs',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DescribeServiceLogResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about the logs of a service.
     *
     * @param request - DescribeServiceLogRequest
     *
     * @returns DescribeServiceLogResponse
     *
     * @param string                    $ClusterId
     * @param string                    $ServiceName
     * @param DescribeServiceLogRequest $request
     *
     * @return DescribeServiceLogResponse
     */
    public function describeServiceLog($ClusterId, $ServiceName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeServiceLogWithOptions($ClusterId, $ServiceName, $request, $headers, $runtime);
    }

    /**
     * Queries details about the traffic mirroring settings of a service.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeServiceMirrorResponse
     *
     * @param string         $ClusterId
     * @param string         $ServiceName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DescribeServiceMirrorResponse
     */
    public function describeServiceMirrorWithOptions($ClusterId, $ServiceName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DescribeServiceMirror',
            'version' => '2021-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/services/' . Url::percentEncode($ClusterId) . '/' . Url::percentEncode($ServiceName) . '/mirror',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DescribeServiceMirrorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries details about the traffic mirroring settings of a service.
     *
     * @returns DescribeServiceMirrorResponse
     *
     * @param string $ClusterId
     * @param string $ServiceName
     *
     * @return DescribeServiceMirrorResponse
     */
    public function describeServiceMirror($ClusterId, $ServiceName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeServiceMirrorWithOptions($ClusterId, $ServiceName, $headers, $runtime);
    }

    /**
     * Obtains the logon-free URL of the service.
     *
     * @param request - DescribeServiceSignedUrlRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeServiceSignedUrlResponse
     *
     * @param string                          $ClusterId
     * @param string                          $ServiceName
     * @param DescribeServiceSignedUrlRequest $request
     * @param string[]                        $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeServiceSignedUrlResponse
     */
    public function describeServiceSignedUrlWithOptions($ClusterId, $ServiceName, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->expire) {
            @$query['Expire'] = $request->expire;
        }

        if (null !== $request->internal) {
            @$query['Internal'] = $request->internal;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeServiceSignedUrl',
            'version' => '2021-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/services/' . Url::percentEncode($ClusterId) . '/' . Url::percentEncode($ServiceName) . '/signed_url',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DescribeServiceSignedUrlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Obtains the logon-free URL of the service.
     *
     * @param request - DescribeServiceSignedUrlRequest
     *
     * @returns DescribeServiceSignedUrlResponse
     *
     * @param string                          $ClusterId
     * @param string                          $ServiceName
     * @param DescribeServiceSignedUrlRequest $request
     *
     * @return DescribeServiceSignedUrlResponse
     */
    public function describeServiceSignedUrl($ClusterId, $ServiceName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeServiceSignedUrlWithOptions($ClusterId, $ServiceName, $request, $headers, $runtime);
    }

    /**
     * Queries the historical prices of preemptible instances. For more information about preemptible instances, see Create and use preemptible instances.
     *
     * @param request - DescribeSpotDiscountHistoryRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeSpotDiscountHistoryResponse
     *
     * @param DescribeSpotDiscountHistoryRequest $request
     * @param string[]                           $headers
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeSpotDiscountHistoryResponse
     */
    public function describeSpotDiscountHistoryWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceType) {
            @$query['InstanceType'] = $request->instanceType;
        }

        if (null !== $request->isProtect) {
            @$query['IsProtect'] = $request->isProtect;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeSpotDiscountHistory',
            'version' => '2021-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/public/spot_discount',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DescribeSpotDiscountHistoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the historical prices of preemptible instances. For more information about preemptible instances, see Create and use preemptible instances.
     *
     * @param request - DescribeSpotDiscountHistoryRequest
     *
     * @returns DescribeSpotDiscountHistoryResponse
     *
     * @param DescribeSpotDiscountHistoryRequest $request
     *
     * @return DescribeSpotDiscountHistoryResponse
     */
    public function describeSpotDiscountHistory($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeSpotDiscountHistoryWithOptions($request, $headers, $runtime);
    }

    /**
     * Views the details of a virtual resource group.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeVirtualResourceResponse
     *
     * @param string         $ClusterId
     * @param string         $VirtualResourceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DescribeVirtualResourceResponse
     */
    public function describeVirtualResourceWithOptions($ClusterId, $VirtualResourceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DescribeVirtualResource',
            'version' => '2021-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/virtualresources/' . Url::percentEncode($ClusterId) . '/' . Url::percentEncode($VirtualResourceId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DescribeVirtualResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Views the details of a virtual resource group.
     *
     * @returns DescribeVirtualResourceResponse
     *
     * @param string $ClusterId
     * @param string $VirtualResourceId
     *
     * @return DescribeVirtualResourceResponse
     */
    public function describeVirtualResource($ClusterId, $VirtualResourceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeVirtualResourceWithOptions($ClusterId, $VirtualResourceId, $headers, $runtime);
    }

    /**
     * Unbinds a custom domain name from a private gateway.
     *
     * @param tmpReq - DetachGatewayDomainRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DetachGatewayDomainResponse
     *
     * @param string                     $ClusterId
     * @param string                     $GatewayId
     * @param DetachGatewayDomainRequest $tmpReq
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return DetachGatewayDomainResponse
     */
    public function detachGatewayDomainWithOptions($ClusterId, $GatewayId, $tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new DetachGatewayDomainShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->customDomain) {
            $request->customDomainShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->customDomain, 'CustomDomain', 'json');
        }

        $query = [];
        if (null !== $request->customDomainShrink) {
            @$query['CustomDomain'] = $request->customDomainShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DetachGatewayDomain',
            'version' => '2021-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/gateways/' . Url::percentEncode($ClusterId) . '/' . Url::percentEncode($GatewayId) . '/domain/detach',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DetachGatewayDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Unbinds a custom domain name from a private gateway.
     *
     * @param request - DetachGatewayDomainRequest
     *
     * @returns DetachGatewayDomainResponse
     *
     * @param string                     $ClusterId
     * @param string                     $GatewayId
     * @param DetachGatewayDomainRequest $request
     *
     * @return DetachGatewayDomainResponse
     */
    public function detachGatewayDomain($ClusterId, $GatewayId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->detachGatewayDomainWithOptions($ClusterId, $GatewayId, $request, $headers, $runtime);
    }

    /**
     * Switches a container service to development mode or exits development mode.
     *
     * @param request - DevelopServiceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DevelopServiceResponse
     *
     * @param string                $ClusterId
     * @param string                $ServiceName
     * @param DevelopServiceRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return DevelopServiceResponse
     */
    public function developServiceWithOptions($ClusterId, $ServiceName, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->exit) {
            @$query['Exit'] = $request->exit;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DevelopService',
            'version' => '2021-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/services/' . Url::percentEncode($ClusterId) . '/' . Url::percentEncode($ServiceName) . '/develop',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DevelopServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Switches a container service to development mode or exits development mode.
     *
     * @param request - DevelopServiceRequest
     *
     * @returns DevelopServiceResponse
     *
     * @param string                $ClusterId
     * @param string                $ServiceName
     * @param DevelopServiceRequest $request
     *
     * @return DevelopServiceResponse
     */
    public function developService($ClusterId, $ServiceName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->developServiceWithOptions($ClusterId, $ServiceName, $request, $headers, $runtime);
    }

    /**
     * Queries access control lists (ACLs) created for a private gateway.
     *
     * @param request - ListAclPolicyRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAclPolicyResponse
     *
     * @param string               $ClusterId
     * @param string               $GatewayId
     * @param ListAclPolicyRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return ListAclPolicyResponse
     */
    public function listAclPolicyWithOptions($ClusterId, $GatewayId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->vpcId) {
            @$query['VpcId'] = $request->vpcId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListAclPolicy',
            'version' => '2021-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/gateways/' . Url::percentEncode($ClusterId) . '/' . Url::percentEncode($GatewayId) . '/acl_policy',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListAclPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries access control lists (ACLs) created for a private gateway.
     *
     * @param request - ListAclPolicyRequest
     *
     * @returns ListAclPolicyResponse
     *
     * @param string               $ClusterId
     * @param string               $GatewayId
     * @param ListAclPolicyRequest $request
     *
     * @return ListAclPolicyResponse
     */
    public function listAclPolicy($ClusterId, $GatewayId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listAclPolicyWithOptions($ClusterId, $GatewayId, $request, $headers, $runtime);
    }

    /**
     * Queries a list of stress testing tasks that are created by the current user.
     *
     * @param request - ListBenchmarkTaskRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListBenchmarkTaskResponse
     *
     * @param ListBenchmarkTaskRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return ListBenchmarkTaskResponse
     */
    public function listBenchmarkTaskWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->filter) {
            @$query['Filter'] = $request->filter;
        }

        if (null !== $request->modelId) {
            @$query['ModelId'] = $request->modelId;
        }

        if (null !== $request->order) {
            @$query['Order'] = $request->order;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->requestMethod) {
            @$query['RequestMethod'] = $request->requestMethod;
        }

        if (null !== $request->serviceName) {
            @$query['ServiceName'] = $request->serviceName;
        }

        if (null !== $request->sort) {
            @$query['Sort'] = $request->sort;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListBenchmarkTask',
            'version' => '2021-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/benchmark-tasks',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListBenchmarkTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of stress testing tasks that are created by the current user.
     *
     * @param request - ListBenchmarkTaskRequest
     *
     * @returns ListBenchmarkTaskResponse
     *
     * @param ListBenchmarkTaskRequest $request
     *
     * @return ListBenchmarkTaskResponse
     */
    public function listBenchmarkTask($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listBenchmarkTaskWithOptions($request, $headers, $runtime);
    }

    /**
     * Queries a list of private gateways.
     *
     * @param tmpReq - ListGatewayRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListGatewayResponse
     *
     * @param ListGatewayRequest $tmpReq
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return ListGatewayResponse
     */
    public function listGatewayWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new ListGatewayShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->label) {
            $request->labelShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->label, 'Label', 'json');
        }

        $query = [];
        if (null !== $request->chargeType) {
            @$query['ChargeType'] = $request->chargeType;
        }

        if (null !== $request->gatewayId) {
            @$query['GatewayId'] = $request->gatewayId;
        }

        if (null !== $request->gatewayName) {
            @$query['GatewayName'] = $request->gatewayName;
        }

        if (null !== $request->gatewayType) {
            @$query['GatewayType'] = $request->gatewayType;
        }

        if (null !== $request->internetEnabled) {
            @$query['InternetEnabled'] = $request->internetEnabled;
        }

        if (null !== $request->labelShrink) {
            @$query['Label'] = $request->labelShrink;
        }

        if (null !== $request->order) {
            @$query['Order'] = $request->order;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->resourceName) {
            @$query['ResourceName'] = $request->resourceName;
        }

        if (null !== $request->sort) {
            @$query['Sort'] = $request->sort;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListGateway',
            'version' => '2021-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/gateways',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListGatewayResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of private gateways.
     *
     * @param request - ListGatewayRequest
     *
     * @returns ListGatewayResponse
     *
     * @param ListGatewayRequest $request
     *
     * @return ListGatewayResponse
     */
    public function listGateway($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listGatewayWithOptions($request, $headers, $runtime);
    }

    /**
     * Queries a list of custom domain names of a private gateway.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListGatewayDomainsResponse
     *
     * @param string         $ClusterId
     * @param string         $GatewayId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ListGatewayDomainsResponse
     */
    public function listGatewayDomainsWithOptions($ClusterId, $GatewayId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'ListGatewayDomains',
            'version' => '2021-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/gateways/' . Url::percentEncode($ClusterId) . '/' . Url::percentEncode($GatewayId) . '/domains',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListGatewayDomainsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of custom domain names of a private gateway.
     *
     * @returns ListGatewayDomainsResponse
     *
     * @param string $ClusterId
     * @param string $GatewayId
     *
     * @return ListGatewayDomainsResponse
     */
    public function listGatewayDomains($ClusterId, $GatewayId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listGatewayDomainsWithOptions($ClusterId, $GatewayId, $headers, $runtime);
    }

    /**
     * Queries a list of the internal endpoints of a private gateway.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListGatewayIntranetLinkedVpcResponse
     *
     * @param string         $ClusterId
     * @param string         $GatewayId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ListGatewayIntranetLinkedVpcResponse
     */
    public function listGatewayIntranetLinkedVpcWithOptions($ClusterId, $GatewayId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'ListGatewayIntranetLinkedVpc',
            'version' => '2021-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/gateways/' . Url::percentEncode($ClusterId) . '/' . Url::percentEncode($GatewayId) . '/intranet_endpoint_linked_vpc',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListGatewayIntranetLinkedVpcResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of the internal endpoints of a private gateway.
     *
     * @returns ListGatewayIntranetLinkedVpcResponse
     *
     * @param string $ClusterId
     * @param string $GatewayId
     *
     * @return ListGatewayIntranetLinkedVpcResponse
     */
    public function listGatewayIntranetLinkedVpc($ClusterId, $GatewayId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listGatewayIntranetLinkedVpcWithOptions($ClusterId, $GatewayId, $headers, $runtime);
    }

    /**
     * Obtains a list of all VPC peering connections on internal endpoint of a gateway.
     *
     * @param request - ListGatewayIntranetLinkedVpcPeerRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListGatewayIntranetLinkedVpcPeerResponse
     *
     * @param string                                  $ClusterId
     * @param string                                  $GatewayId
     * @param ListGatewayIntranetLinkedVpcPeerRequest $request
     * @param string[]                                $headers
     * @param RuntimeOptions                          $runtime
     *
     * @return ListGatewayIntranetLinkedVpcPeerResponse
     */
    public function listGatewayIntranetLinkedVpcPeerWithOptions($ClusterId, $GatewayId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->vpcId) {
            @$query['VpcId'] = $request->vpcId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListGatewayIntranetLinkedVpcPeer',
            'version' => '2021-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/gateways/' . Url::percentEncode($ClusterId) . '/' . Url::percentEncode($GatewayId) . '/intranet_endpoint_linked_vpc_peer',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListGatewayIntranetLinkedVpcPeerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Obtains a list of all VPC peering connections on internal endpoint of a gateway.
     *
     * @param request - ListGatewayIntranetLinkedVpcPeerRequest
     *
     * @returns ListGatewayIntranetLinkedVpcPeerResponse
     *
     * @param string                                  $ClusterId
     * @param string                                  $GatewayId
     * @param ListGatewayIntranetLinkedVpcPeerRequest $request
     *
     * @return ListGatewayIntranetLinkedVpcPeerResponse
     */
    public function listGatewayIntranetLinkedVpcPeer($ClusterId, $GatewayId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listGatewayIntranetLinkedVpcPeerWithOptions($ClusterId, $GatewayId, $request, $headers, $runtime);
    }

    /**
     * Obtains the zones supported by a gateway within an intranet.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListGatewayIntranetSupportedZoneResponse
     *
     * @param string         $GatewayId
     * @param string         $ClusterId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ListGatewayIntranetSupportedZoneResponse
     */
    public function listGatewayIntranetSupportedZoneWithOptions($GatewayId, $ClusterId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'ListGatewayIntranetSupportedZone',
            'version' => '2021-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/gateways/' . Url::percentEncode($ClusterId) . '/' . Url::percentEncode($GatewayId) . '/intranet_supported_zone',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListGatewayIntranetSupportedZoneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Obtains the zones supported by a gateway within an intranet.
     *
     * @returns ListGatewayIntranetSupportedZoneResponse
     *
     * @param string $GatewayId
     * @param string $ClusterId
     *
     * @return ListGatewayIntranetSupportedZoneResponse
     */
    public function listGatewayIntranetSupportedZone($GatewayId, $ClusterId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listGatewayIntranetSupportedZoneWithOptions($GatewayId, $ClusterId, $headers, $runtime);
    }

    /**
     * Queries created service groups.
     *
     * @param request - ListGroupsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListGroupsResponse
     *
     * @param ListGroupsRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return ListGroupsResponse
     */
    public function listGroupsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->filter) {
            @$query['Filter'] = $request->filter;
        }

        if (null !== $request->order) {
            @$query['Order'] = $request->order;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->sort) {
            @$query['Sort'] = $request->sort;
        }

        if (null !== $request->trafficMode) {
            @$query['TrafficMode'] = $request->trafficMode;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListGroups',
            'version' => '2021-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/groups',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries created service groups.
     *
     * @param request - ListGroupsRequest
     *
     * @returns ListGroupsResponse
     *
     * @param ListGroupsRequest $request
     *
     * @return ListGroupsResponse
     */
    public function listGroups($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listGroupsWithOptions($request, $headers, $runtime);
    }

    /**
     * Queries a list of workers in a resource group.
     *
     * @param request - ListResourceInstanceWorkerRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListResourceInstanceWorkerResponse
     *
     * @param string                            $ClusterId
     * @param string                            $ResourceId
     * @param string                            $InstanceName
     * @param ListResourceInstanceWorkerRequest $request
     * @param string[]                          $headers
     * @param RuntimeOptions                    $runtime
     *
     * @return ListResourceInstanceWorkerResponse
     */
    public function listResourceInstanceWorkerWithOptions($ClusterId, $ResourceId, $InstanceName, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->order) {
            @$query['Order'] = $request->order;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->ready) {
            @$query['Ready'] = $request->ready;
        }

        if (null !== $request->serviceName) {
            @$query['ServiceName'] = $request->serviceName;
        }

        if (null !== $request->sort) {
            @$query['Sort'] = $request->sort;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        if (null !== $request->workerName) {
            @$query['WorkerName'] = $request->workerName;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListResourceInstanceWorker',
            'version' => '2021-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/resources/' . Url::percentEncode($ClusterId) . '/' . Url::percentEncode($ResourceId) . '/instance/' . Url::percentEncode($InstanceName) . '/workers',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListResourceInstanceWorkerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of workers in a resource group.
     *
     * @param request - ListResourceInstanceWorkerRequest
     *
     * @returns ListResourceInstanceWorkerResponse
     *
     * @param string                            $ClusterId
     * @param string                            $ResourceId
     * @param string                            $InstanceName
     * @param ListResourceInstanceWorkerRequest $request
     *
     * @return ListResourceInstanceWorkerResponse
     */
    public function listResourceInstanceWorker($ClusterId, $ResourceId, $InstanceName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listResourceInstanceWorkerWithOptions($ClusterId, $ResourceId, $InstanceName, $request, $headers, $runtime);
    }

    /**
     * Queries a list of instances in a dedicated resource group.
     *
     * @param tmpReq - ListResourceInstancesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListResourceInstancesResponse
     *
     * @param string                       $ClusterId
     * @param string                       $ResourceId
     * @param ListResourceInstancesRequest $tmpReq
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return ListResourceInstancesResponse
     */
    public function listResourceInstancesWithOptions($ClusterId, $ResourceId, $tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new ListResourceInstancesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->label) {
            $request->labelShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->label, 'Label', 'json');
        }

        $query = [];
        if (null !== $request->chargeType) {
            @$query['ChargeType'] = $request->chargeType;
        }

        if (null !== $request->filter) {
            @$query['Filter'] = $request->filter;
        }

        if (null !== $request->instanceIP) {
            @$query['InstanceIP'] = $request->instanceIP;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->instanceName) {
            @$query['InstanceName'] = $request->instanceName;
        }

        if (null !== $request->instanceStatus) {
            @$query['InstanceStatus'] = $request->instanceStatus;
        }

        if (null !== $request->labelShrink) {
            @$query['Label'] = $request->labelShrink;
        }

        if (null !== $request->order) {
            @$query['Order'] = $request->order;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->sort) {
            @$query['Sort'] = $request->sort;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListResourceInstances',
            'version' => '2021-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/resources/' . Url::percentEncode($ClusterId) . '/' . Url::percentEncode($ResourceId) . '/instances',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListResourceInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of instances in a dedicated resource group.
     *
     * @param request - ListResourceInstancesRequest
     *
     * @returns ListResourceInstancesResponse
     *
     * @param string                       $ClusterId
     * @param string                       $ResourceId
     * @param ListResourceInstancesRequest $request
     *
     * @return ListResourceInstancesResponse
     */
    public function listResourceInstances($ClusterId, $ResourceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listResourceInstancesWithOptions($ClusterId, $ResourceId, $request, $headers, $runtime);
    }

    /**
     * Queries a list of services that are deployed in the dedicated resource group.
     *
     * @deprecated OpenAPI ListResourceServices is deprecated
     *
     * @param request - ListResourceServicesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListResourceServicesResponse
     *
     * @param string                      $ClusterId
     * @param string                      $ResourceId
     * @param ListResourceServicesRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return ListResourceServicesResponse
     */
    public function listResourceServicesWithOptions($ClusterId, $ResourceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListResourceServices',
            'version' => '2021-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/resources/' . Url::percentEncode($ClusterId) . '/' . Url::percentEncode($ResourceId) . '/services',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListResourceServicesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    // Deprecated
    /**
     * Queries a list of services that are deployed in the dedicated resource group.
     *
     * @deprecated OpenAPI ListResourceServices is deprecated
     *
     * @param request - ListResourceServicesRequest
     *
     * @returns ListResourceServicesResponse
     *
     * @param string                      $ClusterId
     * @param string                      $ResourceId
     * @param ListResourceServicesRequest $request
     *
     * @return ListResourceServicesResponse
     */
    public function listResourceServices($ClusterId, $ResourceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listResourceServicesWithOptions($ClusterId, $ResourceId, $request, $headers, $runtime);
    }

    /**
     * Queries a list of dedicated resource groups for the current user.
     *
     * @param request - ListResourcesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListResourcesResponse
     *
     * @param ListResourcesRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return ListResourcesResponse
     */
    public function listResourcesWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->order) {
            @$query['Order'] = $request->order;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceName) {
            @$query['ResourceName'] = $request->resourceName;
        }

        if (null !== $request->resourceStatus) {
            @$query['ResourceStatus'] = $request->resourceStatus;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->sort) {
            @$query['Sort'] = $request->sort;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListResources',
            'version' => '2021-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/resources',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of dedicated resource groups for the current user.
     *
     * @param request - ListResourcesRequest
     *
     * @returns ListResourcesResponse
     *
     * @param ListResourcesRequest $request
     *
     * @return ListResourcesResponse
     */
    public function listResources($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listResourcesWithOptions($request, $headers, $runtime);
    }

    /**
     * Queries the containers of a service.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListServiceContainersResponse
     *
     * @param string         $ClusterId
     * @param string         $ServiceName
     * @param string         $InstanceName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ListServiceContainersResponse
     */
    public function listServiceContainersWithOptions($ClusterId, $ServiceName, $InstanceName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'ListServiceContainers',
            'version' => '2021-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/services/' . Url::percentEncode($ClusterId) . '/' . Url::percentEncode($ServiceName) . '/instances/' . Url::percentEncode($InstanceName) . '/containers',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListServiceContainersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the containers of a service.
     *
     * @returns ListServiceContainersResponse
     *
     * @param string $ClusterId
     * @param string $ServiceName
     * @param string $InstanceName
     *
     * @return ListServiceContainersResponse
     */
    public function listServiceContainers($ClusterId, $ServiceName, $InstanceName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listServiceContainersWithOptions($ClusterId, $ServiceName, $InstanceName, $headers, $runtime);
    }

    /**
     * 获取故障注入信息.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListServiceInstanceFaultInjectionInfoResponse
     *
     * @param string         $ClusterId
     * @param string         $ServiceName
     * @param string         $InstanceName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ListServiceInstanceFaultInjectionInfoResponse
     */
    public function listServiceInstanceFaultInjectionInfoWithOptions($ClusterId, $ServiceName, $InstanceName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'ListServiceInstanceFaultInjectionInfo',
            'version' => '2021-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/services/' . Url::percentEncode($ClusterId) . '/' . Url::percentEncode($ServiceName) . '/instances/' . Url::percentEncode($InstanceName) . '/faults',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListServiceInstanceFaultInjectionInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取故障注入信息.
     *
     * @returns ListServiceInstanceFaultInjectionInfoResponse
     *
     * @param string $ClusterId
     * @param string $ServiceName
     * @param string $InstanceName
     *
     * @return ListServiceInstanceFaultInjectionInfoResponse
     */
    public function listServiceInstanceFaultInjectionInfo($ClusterId, $ServiceName, $InstanceName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listServiceInstanceFaultInjectionInfoWithOptions($ClusterId, $ServiceName, $InstanceName, $headers, $runtime);
    }

    /**
     * Queries instances of a service.
     *
     * @param request - ListServiceInstancesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListServiceInstancesResponse
     *
     * @param string                      $ClusterId
     * @param string                      $ServiceName
     * @param ListServiceInstancesRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return ListServiceInstancesResponse
     */
    public function listServiceInstancesWithOptions($ClusterId, $ServiceName, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->filter) {
            @$query['Filter'] = $request->filter;
        }

        if (null !== $request->hostIP) {
            @$query['HostIP'] = $request->hostIP;
        }

        if (null !== $request->instanceIP) {
            @$query['InstanceIP'] = $request->instanceIP;
        }

        if (null !== $request->instanceName) {
            @$query['InstanceName'] = $request->instanceName;
        }

        if (null !== $request->instanceStatus) {
            @$query['InstanceStatus'] = $request->instanceStatus;
        }

        if (null !== $request->instanceType) {
            @$query['InstanceType'] = $request->instanceType;
        }

        if (null !== $request->isSpot) {
            @$query['IsSpot'] = $request->isSpot;
        }

        if (null !== $request->listReplica) {
            @$query['ListReplica'] = $request->listReplica;
        }

        if (null !== $request->memberType) {
            @$query['MemberType'] = $request->memberType;
        }

        if (null !== $request->order) {
            @$query['Order'] = $request->order;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->replicaName) {
            @$query['ReplicaName'] = $request->replicaName;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->role) {
            @$query['Role'] = $request->role;
        }

        if (null !== $request->sort) {
            @$query['Sort'] = $request->sort;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListServiceInstances',
            'version' => '2021-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/services/' . Url::percentEncode($ClusterId) . '/' . Url::percentEncode($ServiceName) . '/instances',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListServiceInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries instances of a service.
     *
     * @param request - ListServiceInstancesRequest
     *
     * @returns ListServiceInstancesResponse
     *
     * @param string                      $ClusterId
     * @param string                      $ServiceName
     * @param ListServiceInstancesRequest $request
     *
     * @return ListServiceInstancesResponse
     */
    public function listServiceInstances($ClusterId, $ServiceName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listServiceInstancesWithOptions($ClusterId, $ServiceName, $request, $headers, $runtime);
    }

    /**
     * Queries the information about the historical versions of a service.
     *
     * @param request - ListServiceVersionsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListServiceVersionsResponse
     *
     * @param string                     $ClusterId
     * @param string                     $ServiceName
     * @param ListServiceVersionsRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return ListServiceVersionsResponse
     */
    public function listServiceVersionsWithOptions($ClusterId, $ServiceName, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListServiceVersions',
            'version' => '2021-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/services/' . Url::percentEncode($ClusterId) . '/' . Url::percentEncode($ServiceName) . '/versions',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListServiceVersionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about the historical versions of a service.
     *
     * @param request - ListServiceVersionsRequest
     *
     * @returns ListServiceVersionsResponse
     *
     * @param string                     $ClusterId
     * @param string                     $ServiceName
     * @param ListServiceVersionsRequest $request
     *
     * @return ListServiceVersionsResponse
     */
    public function listServiceVersions($ClusterId, $ServiceName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listServiceVersionsWithOptions($ClusterId, $ServiceName, $request, $headers, $runtime);
    }

    /**
     * Lists services.
     *
     * @param tmpReq - ListServicesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListServicesResponse
     *
     * @param ListServicesRequest $tmpReq
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return ListServicesResponse
     */
    public function listServicesWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new ListServicesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->label) {
            $request->labelShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->label, 'Label', 'json');
        }

        $query = [];
        if (null !== $request->autoscalerEnabled) {
            @$query['AutoscalerEnabled'] = $request->autoscalerEnabled;
        }

        if (null !== $request->cronscalerEnabled) {
            @$query['CronscalerEnabled'] = $request->cronscalerEnabled;
        }

        if (null !== $request->filter) {
            @$query['Filter'] = $request->filter;
        }

        if (null !== $request->gateway) {
            @$query['Gateway'] = $request->gateway;
        }

        if (null !== $request->groupName) {
            @$query['GroupName'] = $request->groupName;
        }

        if (null !== $request->includeNoWorkspace) {
            @$query['IncludeNoWorkspace'] = $request->includeNoWorkspace;
        }

        if (null !== $request->labelShrink) {
            @$query['Label'] = $request->labelShrink;
        }

        if (null !== $request->order) {
            @$query['Order'] = $request->order;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->parentServiceUid) {
            @$query['ParentServiceUid'] = $request->parentServiceUid;
        }

        if (null !== $request->quotaId) {
            @$query['QuotaId'] = $request->quotaId;
        }

        if (null !== $request->resourceAliasName) {
            @$query['ResourceAliasName'] = $request->resourceAliasName;
        }

        if (null !== $request->resourceBurstable) {
            @$query['ResourceBurstable'] = $request->resourceBurstable;
        }

        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceName) {
            @$query['ResourceName'] = $request->resourceName;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->role) {
            @$query['Role'] = $request->role;
        }

        if (null !== $request->serviceName) {
            @$query['ServiceName'] = $request->serviceName;
        }

        if (null !== $request->serviceStatus) {
            @$query['ServiceStatus'] = $request->serviceStatus;
        }

        if (null !== $request->serviceType) {
            @$query['ServiceType'] = $request->serviceType;
        }

        if (null !== $request->serviceUid) {
            @$query['ServiceUid'] = $request->serviceUid;
        }

        if (null !== $request->sort) {
            @$query['Sort'] = $request->sort;
        }

        if (null !== $request->trafficState) {
            @$query['TrafficState'] = $request->trafficState;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListServices',
            'version' => '2021-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/services',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListServicesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Lists services.
     *
     * @param request - ListServicesRequest
     *
     * @returns ListServicesResponse
     *
     * @param ListServicesRequest $request
     *
     * @return ListServicesResponse
     */
    public function listServices($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listServicesWithOptions($request, $headers, $runtime);
    }

    /**
     * Queries a list of tenant plug-ins.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTenantAddonsResponse
     *
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ListTenantAddonsResponse
     */
    public function listTenantAddonsWithOptions($headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'ListTenantAddons',
            'version' => '2021-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/tenantaddons',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListTenantAddonsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of tenant plug-ins.
     *
     * @returns ListTenantAddonsResponse
     *
     * @return ListTenantAddonsResponse
     */
    public function listTenantAddons()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listTenantAddonsWithOptions($headers, $runtime);
    }

    /**
     * Queries a list of virtual resource groups for the current user.
     *
     * @param request - ListVirtualResourceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListVirtualResourceResponse
     *
     * @param ListVirtualResourceRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return ListVirtualResourceResponse
     */
    public function listVirtualResourceWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->order) {
            @$query['Order'] = $request->order;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->sort) {
            @$query['Sort'] = $request->sort;
        }

        if (null !== $request->virtualResourceId) {
            @$query['VirtualResourceId'] = $request->virtualResourceId;
        }

        if (null !== $request->virtualResourceName) {
            @$query['VirtualResourceName'] = $request->virtualResourceName;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListVirtualResource',
            'version' => '2021-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/virtualresources',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListVirtualResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of virtual resource groups for the current user.
     *
     * @param request - ListVirtualResourceRequest
     *
     * @returns ListVirtualResourceResponse
     *
     * @param ListVirtualResourceRequest $request
     *
     * @return ListVirtualResourceResponse
     */
    public function listVirtualResource($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listVirtualResourceWithOptions($request, $headers, $runtime);
    }

    /**
     * Migrates resource group instances.
     *
     * @param request - MigrateResourceInstanceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns MigrateResourceInstanceResponse
     *
     * @param string                         $ClusterId
     * @param string                         $ResourceId
     * @param MigrateResourceInstanceRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return MigrateResourceInstanceResponse
     */
    public function migrateResourceInstanceWithOptions($ClusterId, $ResourceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->destResourceId) {
            @$body['DestResourceId'] = $request->destResourceId;
        }

        if (null !== $request->instanceIds) {
            @$body['InstanceIds'] = $request->instanceIds;
        }

        if (null !== $request->migrateToHybrid) {
            @$body['MigrateToHybrid'] = $request->migrateToHybrid;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'MigrateResourceInstance',
            'version' => '2021-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/resources/' . Url::percentEncode($ClusterId) . '/' . Url::percentEncode($ResourceId) . '/instances/migrate',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return MigrateResourceInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Migrates resource group instances.
     *
     * @param request - MigrateResourceInstanceRequest
     *
     * @returns MigrateResourceInstanceResponse
     *
     * @param string                         $ClusterId
     * @param string                         $ResourceId
     * @param MigrateResourceInstanceRequest $request
     *
     * @return MigrateResourceInstanceResponse
     */
    public function migrateResourceInstance($ClusterId, $ResourceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->migrateResourceInstanceWithOptions($ClusterId, $ResourceId, $request, $headers, $runtime);
    }

    /**
     * Resets tenant configurations.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ReinstallTenantAddonResponse
     *
     * @param string         $ClusterId
     * @param string         $TenantAddonName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ReinstallTenantAddonResponse
     */
    public function reinstallTenantAddonWithOptions($ClusterId, $TenantAddonName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'ReinstallTenantAddon',
            'version' => '2021-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/tenantaddons/' . Url::percentEncode($ClusterId) . '/' . Url::percentEncode($TenantAddonName) . '/reinstall',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ReinstallTenantAddonResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Resets tenant configurations.
     *
     * @returns ReinstallTenantAddonResponse
     *
     * @param string $ClusterId
     * @param string $TenantAddonName
     *
     * @return ReinstallTenantAddonResponse
     */
    public function reinstallTenantAddon($ClusterId, $TenantAddonName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->reinstallTenantAddonWithOptions($ClusterId, $TenantAddonName, $headers, $runtime);
    }

    /**
     * Switch the traffic state or weight of the service.
     *
     * @param request - ReleaseServiceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ReleaseServiceResponse
     *
     * @param string                $ClusterId
     * @param string                $ServiceName
     * @param ReleaseServiceRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return ReleaseServiceResponse
     */
    public function releaseServiceWithOptions($ClusterId, $ServiceName, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->trafficState) {
            @$body['TrafficState'] = $request->trafficState;
        }

        if (null !== $request->weight) {
            @$body['Weight'] = $request->weight;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ReleaseService',
            'version' => '2021-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/services/' . Url::percentEncode($ClusterId) . '/' . Url::percentEncode($ServiceName) . '/release',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ReleaseServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Switch the traffic state or weight of the service.
     *
     * @param request - ReleaseServiceRequest
     *
     * @returns ReleaseServiceResponse
     *
     * @param string                $ClusterId
     * @param string                $ServiceName
     * @param ReleaseServiceRequest $request
     *
     * @return ReleaseServiceResponse
     */
    public function releaseService($ClusterId, $ServiceName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->releaseServiceWithOptions($ClusterId, $ServiceName, $request, $headers, $runtime);
    }

    /**
     * Restarts a service.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RestartServiceResponse
     *
     * @param string         $ClusterId
     * @param string         $ServiceName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return RestartServiceResponse
     */
    public function restartServiceWithOptions($ClusterId, $ServiceName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'RestartService',
            'version' => '2021-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/services/' . Url::percentEncode($ClusterId) . '/' . Url::percentEncode($ServiceName) . '/restart',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return RestartServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Restarts a service.
     *
     * @returns RestartServiceResponse
     *
     * @param string $ClusterId
     * @param string $ServiceName
     *
     * @return RestartServiceResponse
     */
    public function restartService($ClusterId, $ServiceName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->restartServiceWithOptions($ClusterId, $ServiceName, $headers, $runtime);
    }

    /**
     * Starts a stress testing task.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StartBenchmarkTaskResponse
     *
     * @param string         $ClusterId
     * @param string         $TaskName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return StartBenchmarkTaskResponse
     */
    public function startBenchmarkTaskWithOptions($ClusterId, $TaskName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'StartBenchmarkTask',
            'version' => '2021-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/benchmark-tasks/' . Url::percentEncode($ClusterId) . '/' . Url::percentEncode($TaskName) . '/start',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return StartBenchmarkTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Starts a stress testing task.
     *
     * @returns StartBenchmarkTaskResponse
     *
     * @param string $ClusterId
     * @param string $TaskName
     *
     * @return StartBenchmarkTaskResponse
     */
    public function startBenchmarkTask($ClusterId, $TaskName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->startBenchmarkTaskWithOptions($ClusterId, $TaskName, $headers, $runtime);
    }

    /**
     * Starts a service.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StartServiceResponse
     *
     * @param string         $ClusterId
     * @param string         $ServiceName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return StartServiceResponse
     */
    public function startServiceWithOptions($ClusterId, $ServiceName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'StartService',
            'version' => '2021-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/services/' . Url::percentEncode($ClusterId) . '/' . Url::percentEncode($ServiceName) . '/start',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return StartServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Starts a service.
     *
     * @returns StartServiceResponse
     *
     * @param string $ClusterId
     * @param string $ServiceName
     *
     * @return StartServiceResponse
     */
    public function startService($ClusterId, $ServiceName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->startServiceWithOptions($ClusterId, $ServiceName, $headers, $runtime);
    }

    /**
     * Stops a stress testing task.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StopBenchmarkTaskResponse
     *
     * @param string         $ClusterId
     * @param string         $TaskName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return StopBenchmarkTaskResponse
     */
    public function stopBenchmarkTaskWithOptions($ClusterId, $TaskName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'StopBenchmarkTask',
            'version' => '2021-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/benchmark-tasks/' . Url::percentEncode($ClusterId) . '/' . Url::percentEncode($TaskName) . '/stop',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return StopBenchmarkTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Stops a stress testing task.
     *
     * @returns StopBenchmarkTaskResponse
     *
     * @param string $ClusterId
     * @param string $TaskName
     *
     * @return StopBenchmarkTaskResponse
     */
    public function stopBenchmarkTask($ClusterId, $TaskName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->stopBenchmarkTaskWithOptions($ClusterId, $TaskName, $headers, $runtime);
    }

    /**
     * Stops a running service.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StopServiceResponse
     *
     * @param string         $ClusterId
     * @param string         $ServiceName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return StopServiceResponse
     */
    public function stopServiceWithOptions($ClusterId, $ServiceName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'StopService',
            'version' => '2021-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/services/' . Url::percentEncode($ClusterId) . '/' . Url::percentEncode($ServiceName) . '/stop',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return StopServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Stops a running service.
     *
     * @returns StopServiceResponse
     *
     * @param string $ClusterId
     * @param string $ServiceName
     *
     * @return StopServiceResponse
     */
    public function stopService($ClusterId, $ServiceName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->stopServiceWithOptions($ClusterId, $ServiceName, $headers, $runtime);
    }

    /**
     * Updates an application service.
     *
     * @param request - UpdateAppServiceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateAppServiceResponse
     *
     * @param string                  $ClusterId
     * @param string                  $ServiceName
     * @param UpdateAppServiceRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return UpdateAppServiceResponse
     */
    public function updateAppServiceWithOptions($ClusterId, $ServiceName, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->quotaId) {
            @$query['QuotaId'] = $request->quotaId;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $body = [];
        if (null !== $request->appType) {
            @$body['AppType'] = $request->appType;
        }

        if (null !== $request->appVersion) {
            @$body['AppVersion'] = $request->appVersion;
        }

        if (null !== $request->config) {
            @$body['Config'] = $request->config;
        }

        if (null !== $request->replicas) {
            @$body['Replicas'] = $request->replicas;
        }

        if (null !== $request->serviceSpec) {
            @$body['ServiceSpec'] = $request->serviceSpec;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateAppService',
            'version' => '2021-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/app_services/' . Url::percentEncode($ClusterId) . '/' . Url::percentEncode($ServiceName) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateAppServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates an application service.
     *
     * @param request - UpdateAppServiceRequest
     *
     * @returns UpdateAppServiceResponse
     *
     * @param string                  $ClusterId
     * @param string                  $ServiceName
     * @param UpdateAppServiceRequest $request
     *
     * @return UpdateAppServiceResponse
     */
    public function updateAppService($ClusterId, $ServiceName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateAppServiceWithOptions($ClusterId, $ServiceName, $request, $headers, $runtime);
    }

    /**
     * Updates a stress testing task.
     *
     * @param request - UpdateBenchmarkTaskRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateBenchmarkTaskResponse
     *
     * @param string                     $ClusterId
     * @param string                     $TaskName
     * @param UpdateBenchmarkTaskRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return UpdateBenchmarkTaskResponse
     */
    public function updateBenchmarkTaskWithOptions($ClusterId, $TaskName, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => $request->body,
        ]);
        $params = new Params([
            'action' => 'UpdateBenchmarkTask',
            'version' => '2021-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/benchmark-tasks/' . Url::percentEncode($ClusterId) . '/' . Url::percentEncode($TaskName) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateBenchmarkTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates a stress testing task.
     *
     * @param request - UpdateBenchmarkTaskRequest
     *
     * @returns UpdateBenchmarkTaskResponse
     *
     * @param string                     $ClusterId
     * @param string                     $TaskName
     * @param UpdateBenchmarkTaskRequest $request
     *
     * @return UpdateBenchmarkTaskResponse
     */
    public function updateBenchmarkTask($ClusterId, $TaskName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateBenchmarkTaskWithOptions($ClusterId, $TaskName, $request, $headers, $runtime);
    }

    /**
     * Update a private gateway.
     *
     * @param request - UpdateGatewayRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateGatewayResponse
     *
     * @param string               $GatewayId
     * @param string               $ClusterId
     * @param UpdateGatewayRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return UpdateGatewayResponse
     */
    public function updateGatewayWithOptions($GatewayId, $ClusterId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->enableInternet) {
            @$body['EnableInternet'] = $request->enableInternet;
        }

        if (null !== $request->enableIntranet) {
            @$body['EnableIntranet'] = $request->enableIntranet;
        }

        if (null !== $request->enableSSLRedirection) {
            @$body['EnableSSLRedirection'] = $request->enableSSLRedirection;
        }

        if (null !== $request->instanceType) {
            @$body['InstanceType'] = $request->instanceType;
        }

        if (null !== $request->isDefault) {
            @$body['IsDefault'] = $request->isDefault;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        if (null !== $request->replicas) {
            @$body['Replicas'] = $request->replicas;
        }

        if (null !== $request->vSwitchIds) {
            @$body['VSwitchIds'] = $request->vSwitchIds;
        }

        if (null !== $request->vpcId) {
            @$body['VpcId'] = $request->vpcId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateGateway',
            'version' => '2021-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/gateways/' . Url::percentEncode($ClusterId) . '/' . Url::percentEncode($GatewayId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateGatewayResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Update a private gateway.
     *
     * @param request - UpdateGatewayRequest
     *
     * @returns UpdateGatewayResponse
     *
     * @param string               $GatewayId
     * @param string               $ClusterId
     * @param UpdateGatewayRequest $request
     *
     * @return UpdateGatewayResponse
     */
    public function updateGateway($GatewayId, $ClusterId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateGatewayWithOptions($GatewayId, $ClusterId, $request, $headers, $runtime);
    }

    /**
     * 修改网关标签.
     *
     * @param request - UpdateGatewayLabelRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateGatewayLabelResponse
     *
     * @param string                    $ClusterId
     * @param string                    $GatewayId
     * @param UpdateGatewayLabelRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return UpdateGatewayLabelResponse
     */
    public function updateGatewayLabelWithOptions($ClusterId, $GatewayId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->labels) {
            @$body['Labels'] = $request->labels;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateGatewayLabel',
            'version' => '2021-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/gateways/' . Url::percentEncode($ClusterId) . '/' . Url::percentEncode($GatewayId) . '/label',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateGatewayLabelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 修改网关标签.
     *
     * @param request - UpdateGatewayLabelRequest
     *
     * @returns UpdateGatewayLabelResponse
     *
     * @param string                    $ClusterId
     * @param string                    $GatewayId
     * @param UpdateGatewayLabelRequest $request
     *
     * @return UpdateGatewayLabelResponse
     */
    public function updateGatewayLabel($ClusterId, $GatewayId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateGatewayLabelWithOptions($ClusterId, $GatewayId, $request, $headers, $runtime);
    }

    /**
     * Updates the specific fields of a service group.
     *
     * @param request - UpdateGroupRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateGroupResponse
     *
     * @param string             $ClusterId
     * @param string             $GroupName
     * @param UpdateGroupRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return UpdateGroupResponse
     */
    public function updateGroupWithOptions($ClusterId, $GroupName, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->trafficMode) {
            @$body['TrafficMode'] = $request->trafficMode;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateGroup',
            'version' => '2021-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/groups/' . Url::percentEncode($ClusterId) . '/' . Url::percentEncode($GroupName) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the specific fields of a service group.
     *
     * @param request - UpdateGroupRequest
     *
     * @returns UpdateGroupResponse
     *
     * @param string             $ClusterId
     * @param string             $GroupName
     * @param UpdateGroupRequest $request
     *
     * @return UpdateGroupResponse
     */
    public function updateGroup($ClusterId, $GroupName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateGroupWithOptions($ClusterId, $GroupName, $request, $headers, $runtime);
    }

    /**
     * Updates the information about a dedicated resource group. Only the name of a dedicated resource group can be updated.
     *
     * @param request - UpdateResourceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateResourceResponse
     *
     * @param string                $ClusterId
     * @param string                $ResourceId
     * @param UpdateResourceRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return UpdateResourceResponse
     */
    public function updateResourceWithOptions($ClusterId, $ResourceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->resourceName) {
            @$body['ResourceName'] = $request->resourceName;
        }

        if (null !== $request->selfManagedResourceOptions) {
            @$body['SelfManagedResourceOptions'] = $request->selfManagedResourceOptions;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateResource',
            'version' => '2021-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/resources/' . Url::percentEncode($ClusterId) . '/' . Url::percentEncode($ResourceId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the information about a dedicated resource group. Only the name of a dedicated resource group can be updated.
     *
     * @param request - UpdateResourceRequest
     *
     * @returns UpdateResourceResponse
     *
     * @param string                $ClusterId
     * @param string                $ResourceId
     * @param UpdateResourceRequest $request
     *
     * @return UpdateResourceResponse
     */
    public function updateResource($ClusterId, $ResourceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateResourceWithOptions($ClusterId, $ResourceId, $request, $headers, $runtime);
    }

    /**
     * Updates the configurations of a virtual private cloud (VPC) direct connection for a dedicated resource group.
     *
     * @param request - UpdateResourceDLinkRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateResourceDLinkResponse
     *
     * @param string                     $ClusterId
     * @param string                     $ResourceId
     * @param UpdateResourceDLinkRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return UpdateResourceDLinkResponse
     */
    public function updateResourceDLinkWithOptions($ClusterId, $ResourceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->destinationCIDRs) {
            @$body['DestinationCIDRs'] = $request->destinationCIDRs;
        }

        if (null !== $request->securityGroupId) {
            @$body['SecurityGroupId'] = $request->securityGroupId;
        }

        if (null !== $request->vSwitchId) {
            @$body['VSwitchId'] = $request->vSwitchId;
        }

        if (null !== $request->vSwitchIdList) {
            @$body['VSwitchIdList'] = $request->vSwitchIdList;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateResourceDLink',
            'version' => '2021-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/resources/' . Url::percentEncode($ClusterId) . '/' . Url::percentEncode($ResourceId) . '/dlink',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateResourceDLinkResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the configurations of a virtual private cloud (VPC) direct connection for a dedicated resource group.
     *
     * @param request - UpdateResourceDLinkRequest
     *
     * @returns UpdateResourceDLinkResponse
     *
     * @param string                     $ClusterId
     * @param string                     $ResourceId
     * @param UpdateResourceDLinkRequest $request
     *
     * @return UpdateResourceDLinkResponse
     */
    public function updateResourceDLink($ClusterId, $ResourceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateResourceDLinkWithOptions($ClusterId, $ResourceId, $request, $headers, $runtime);
    }

    /**
     * Updates the service scheduling status of an instance in a dedicated resource group.
     *
     * @param request - UpdateResourceInstanceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateResourceInstanceResponse
     *
     * @param string                        $ClusterId
     * @param string                        $ResourceId
     * @param string                        $InstanceId
     * @param UpdateResourceInstanceRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return UpdateResourceInstanceResponse
     */
    public function updateResourceInstanceWithOptions($ClusterId, $ResourceId, $InstanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->action) {
            @$body['Action'] = $request->action;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateResourceInstance',
            'version' => '2021-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/resources/' . Url::percentEncode($ClusterId) . '/' . Url::percentEncode($ResourceId) . '/instances/' . Url::percentEncode($InstanceId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateResourceInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the service scheduling status of an instance in a dedicated resource group.
     *
     * @param request - UpdateResourceInstanceRequest
     *
     * @returns UpdateResourceInstanceResponse
     *
     * @param string                        $ClusterId
     * @param string                        $ResourceId
     * @param string                        $InstanceId
     * @param UpdateResourceInstanceRequest $request
     *
     * @return UpdateResourceInstanceResponse
     */
    public function updateResourceInstance($ClusterId, $ResourceId, $InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateResourceInstanceWithOptions($ClusterId, $ResourceId, $InstanceId, $request, $headers, $runtime);
    }

    /**
     * Updates the tag of an instance in a resource group.
     *
     * @param tmpReq - UpdateResourceInstanceLabelRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateResourceInstanceLabelResponse
     *
     * @param string                             $ClusterId
     * @param string                             $ResourceId
     * @param UpdateResourceInstanceLabelRequest $tmpReq
     * @param string[]                           $headers
     * @param RuntimeOptions                     $runtime
     *
     * @return UpdateResourceInstanceLabelResponse
     */
    public function updateResourceInstanceLabelWithOptions($ClusterId, $ResourceId, $tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateResourceInstanceLabelShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->instanceIds) {
            $request->instanceIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->instanceIds, 'InstanceIds', 'simple');
        }

        $query = [];
        if (null !== $request->allInstances) {
            @$query['AllInstances'] = $request->allInstances;
        }

        if (null !== $request->instanceIdsShrink) {
            @$query['InstanceIds'] = $request->instanceIdsShrink;
        }

        $body = [];
        if (null !== $request->labels) {
            @$body['Labels'] = $request->labels;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateResourceInstanceLabel',
            'version' => '2021-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/resources/' . Url::percentEncode($ClusterId) . '/' . Url::percentEncode($ResourceId) . '/label',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateResourceInstanceLabelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the tag of an instance in a resource group.
     *
     * @param request - UpdateResourceInstanceLabelRequest
     *
     * @returns UpdateResourceInstanceLabelResponse
     *
     * @param string                             $ClusterId
     * @param string                             $ResourceId
     * @param UpdateResourceInstanceLabelRequest $request
     *
     * @return UpdateResourceInstanceLabelResponse
     */
    public function updateResourceInstanceLabel($ClusterId, $ResourceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateResourceInstanceLabelWithOptions($ClusterId, $ResourceId, $request, $headers, $runtime);
    }

    /**
     * Updates a model or processor of a service. If only the metadata.instance field is updated, manual scaling can be performed.
     *
     * @param request - UpdateServiceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateServiceResponse
     *
     * @param string               $ClusterId
     * @param string               $ServiceName
     * @param UpdateServiceRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return UpdateServiceResponse
     */
    public function updateServiceWithOptions($ClusterId, $ServiceName, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->memberToUpdate) {
            @$query['MemberToUpdate'] = $request->memberToUpdate;
        }

        if (null !== $request->updateType) {
            @$query['UpdateType'] = $request->updateType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => $request->body,
        ]);
        $params = new Params([
            'action' => 'UpdateService',
            'version' => '2021-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/services/' . Url::percentEncode($ClusterId) . '/' . Url::percentEncode($ServiceName) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates a model or processor of a service. If only the metadata.instance field is updated, manual scaling can be performed.
     *
     * @param request - UpdateServiceRequest
     *
     * @returns UpdateServiceResponse
     *
     * @param string               $ClusterId
     * @param string               $ServiceName
     * @param UpdateServiceRequest $request
     *
     * @return UpdateServiceResponse
     */
    public function updateService($ClusterId, $ServiceName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateServiceWithOptions($ClusterId, $ServiceName, $request, $headers, $runtime);
    }

    /**
     * Updates the Autoscaler configurations of a service.
     *
     * @param request - UpdateServiceAutoScalerRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateServiceAutoScalerResponse
     *
     * @param string                         $ClusterId
     * @param string                         $ServiceName
     * @param UpdateServiceAutoScalerRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return UpdateServiceAutoScalerResponse
     */
    public function updateServiceAutoScalerWithOptions($ClusterId, $ServiceName, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->behavior) {
            @$body['behavior'] = $request->behavior;
        }

        if (null !== $request->max) {
            @$body['max'] = $request->max;
        }

        if (null !== $request->min) {
            @$body['min'] = $request->min;
        }

        if (null !== $request->scaleStrategies) {
            @$body['scaleStrategies'] = $request->scaleStrategies;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateServiceAutoScaler',
            'version' => '2021-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/services/' . Url::percentEncode($ClusterId) . '/' . Url::percentEncode($ServiceName) . '/autoscaler',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateServiceAutoScalerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the Autoscaler configurations of a service.
     *
     * @param request - UpdateServiceAutoScalerRequest
     *
     * @returns UpdateServiceAutoScalerResponse
     *
     * @param string                         $ClusterId
     * @param string                         $ServiceName
     * @param UpdateServiceAutoScalerRequest $request
     *
     * @return UpdateServiceAutoScalerResponse
     */
    public function updateServiceAutoScaler($ClusterId, $ServiceName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateServiceAutoScalerWithOptions($ClusterId, $ServiceName, $request, $headers, $runtime);
    }

    /**
     * Updates the Cron Horizontal Pod Autoscaler (CronHPA) settings of a service.
     *
     * @param request - UpdateServiceCronScalerRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateServiceCronScalerResponse
     *
     * @param string                         $ClusterId
     * @param string                         $ServiceName
     * @param UpdateServiceCronScalerRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return UpdateServiceCronScalerResponse
     */
    public function updateServiceCronScalerWithOptions($ClusterId, $ServiceName, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->excludeDates) {
            @$body['ExcludeDates'] = $request->excludeDates;
        }

        if (null !== $request->scaleJobs) {
            @$body['ScaleJobs'] = $request->scaleJobs;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateServiceCronScaler',
            'version' => '2021-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/services/' . Url::percentEncode($ClusterId) . '/' . Url::percentEncode($ServiceName) . '/cronscaler',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateServiceCronScalerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the Cron Horizontal Pod Autoscaler (CronHPA) settings of a service.
     *
     * @param request - UpdateServiceCronScalerRequest
     *
     * @returns UpdateServiceCronScalerResponse
     *
     * @param string                         $ClusterId
     * @param string                         $ServiceName
     * @param UpdateServiceCronScalerRequest $request
     *
     * @return UpdateServiceCronScalerResponse
     */
    public function updateServiceCronScaler($ClusterId, $ServiceName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateServiceCronScalerWithOptions($ClusterId, $ServiceName, $request, $headers, $runtime);
    }

    /**
     * Updates attributes of service instances. Only isolation can be performed for service instances.
     *
     * @param request - UpdateServiceInstanceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateServiceInstanceResponse
     *
     * @param string                       $ClusterId
     * @param string                       $ServiceName
     * @param string                       $InstanceName
     * @param UpdateServiceInstanceRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return UpdateServiceInstanceResponse
     */
    public function updateServiceInstanceWithOptions($ClusterId, $ServiceName, $InstanceName, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->isReplica) {
            @$query['IsReplica'] = $request->isReplica;
        }

        $body = [];
        if (null !== $request->detach) {
            @$body['Detach'] = $request->detach;
        }

        if (null !== $request->hibernate) {
            @$body['Hibernate'] = $request->hibernate;
        }

        if (null !== $request->isolate) {
            @$body['Isolate'] = $request->isolate;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateServiceInstance',
            'version' => '2021-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/services/' . Url::percentEncode($ClusterId) . '/' . Url::percentEncode($ServiceName) . '/instances/' . Url::percentEncode($InstanceName) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateServiceInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates attributes of service instances. Only isolation can be performed for service instances.
     *
     * @param request - UpdateServiceInstanceRequest
     *
     * @returns UpdateServiceInstanceResponse
     *
     * @param string                       $ClusterId
     * @param string                       $ServiceName
     * @param string                       $InstanceName
     * @param UpdateServiceInstanceRequest $request
     *
     * @return UpdateServiceInstanceResponse
     */
    public function updateServiceInstance($ClusterId, $ServiceName, $InstanceName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateServiceInstanceWithOptions($ClusterId, $ServiceName, $InstanceName, $request, $headers, $runtime);
    }

    /**
     * Adds service tags or updates existing service tags.
     *
     * @param request - UpdateServiceLabelRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateServiceLabelResponse
     *
     * @param string                    $ClusterId
     * @param string                    $ServiceName
     * @param UpdateServiceLabelRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return UpdateServiceLabelResponse
     */
    public function updateServiceLabelWithOptions($ClusterId, $ServiceName, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->labels) {
            @$body['Labels'] = $request->labels;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateServiceLabel',
            'version' => '2021-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/services/' . Url::percentEncode($ClusterId) . '/' . Url::percentEncode($ServiceName) . '/label',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateServiceLabelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Adds service tags or updates existing service tags.
     *
     * @param request - UpdateServiceLabelRequest
     *
     * @returns UpdateServiceLabelResponse
     *
     * @param string                    $ClusterId
     * @param string                    $ServiceName
     * @param UpdateServiceLabelRequest $request
     *
     * @return UpdateServiceLabelResponse
     */
    public function updateServiceLabel($ClusterId, $ServiceName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateServiceLabelWithOptions($ClusterId, $ServiceName, $request, $headers, $runtime);
    }

    /**
     * Updates the traffic mirroring configurations of a service.
     *
     * @param request - UpdateServiceMirrorRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateServiceMirrorResponse
     *
     * @param string                     $ClusterId
     * @param string                     $ServiceName
     * @param UpdateServiceMirrorRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return UpdateServiceMirrorResponse
     */
    public function updateServiceMirrorWithOptions($ClusterId, $ServiceName, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->ratio) {
            @$body['Ratio'] = $request->ratio;
        }

        if (null !== $request->target) {
            @$body['Target'] = $request->target;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateServiceMirror',
            'version' => '2021-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/services/' . Url::percentEncode($ClusterId) . '/' . Url::percentEncode($ServiceName) . '/mirror',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateServiceMirrorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the traffic mirroring configurations of a service.
     *
     * @param request - UpdateServiceMirrorRequest
     *
     * @returns UpdateServiceMirrorResponse
     *
     * @param string                     $ClusterId
     * @param string                     $ServiceName
     * @param UpdateServiceMirrorRequest $request
     *
     * @return UpdateServiceMirrorResponse
     */
    public function updateServiceMirror($ClusterId, $ServiceName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateServiceMirrorWithOptions($ClusterId, $ServiceName, $request, $headers, $runtime);
    }

    /**
     * Updates the safety lock of a service to minimize misoperations on the service.
     *
     * @param request - UpdateServiceSafetyLockRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateServiceSafetyLockResponse
     *
     * @param string                         $ClusterId
     * @param string                         $ServiceName
     * @param UpdateServiceSafetyLockRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return UpdateServiceSafetyLockResponse
     */
    public function updateServiceSafetyLockWithOptions($ClusterId, $ServiceName, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->lock) {
            @$body['Lock'] = $request->lock;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateServiceSafetyLock',
            'version' => '2021-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/services/' . Url::percentEncode($ClusterId) . '/' . Url::percentEncode($ServiceName) . '/lock',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateServiceSafetyLockResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the safety lock of a service to minimize misoperations on the service.
     *
     * @param request - UpdateServiceSafetyLockRequest
     *
     * @returns UpdateServiceSafetyLockResponse
     *
     * @param string                         $ClusterId
     * @param string                         $ServiceName
     * @param UpdateServiceSafetyLockRequest $request
     *
     * @return UpdateServiceSafetyLockResponse
     */
    public function updateServiceSafetyLock($ClusterId, $ServiceName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateServiceSafetyLockWithOptions($ClusterId, $ServiceName, $request, $headers, $runtime);
    }

    /**
     * Updates the version of a service or rolls back the service to a specific version.
     *
     * @param request - UpdateServiceVersionRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateServiceVersionResponse
     *
     * @param string                      $ClusterId
     * @param string                      $ServiceName
     * @param UpdateServiceVersionRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return UpdateServiceVersionResponse
     */
    public function updateServiceVersionWithOptions($ClusterId, $ServiceName, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->version) {
            @$body['Version'] = $request->version;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateServiceVersion',
            'version' => '2021-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/services/' . Url::percentEncode($ClusterId) . '/' . Url::percentEncode($ServiceName) . '/version',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateServiceVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the version of a service or rolls back the service to a specific version.
     *
     * @param request - UpdateServiceVersionRequest
     *
     * @returns UpdateServiceVersionResponse
     *
     * @param string                      $ClusterId
     * @param string                      $ServiceName
     * @param UpdateServiceVersionRequest $request
     *
     * @return UpdateServiceVersionResponse
     */
    public function updateServiceVersion($ClusterId, $ServiceName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateServiceVersionWithOptions($ClusterId, $ServiceName, $request, $headers, $runtime);
    }

    /**
     * Updates the information about a virtual resource group.
     *
     * @param request - UpdateVirtualResourceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateVirtualResourceResponse
     *
     * @param string                       $ClusterId
     * @param string                       $VirtualResourceId
     * @param UpdateVirtualResourceRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return UpdateVirtualResourceResponse
     */
    public function updateVirtualResourceWithOptions($ClusterId, $VirtualResourceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->disableSpotProtectionPeriod) {
            @$body['DisableSpotProtectionPeriod'] = $request->disableSpotProtectionPeriod;
        }

        if (null !== $request->resources) {
            @$body['Resources'] = $request->resources;
        }

        if (null !== $request->virtualResourceName) {
            @$body['VirtualResourceName'] = $request->virtualResourceName;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateVirtualResource',
            'version' => '2021-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/virtualresources/' . Url::percentEncode($ClusterId) . '/' . Url::percentEncode($VirtualResourceId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateVirtualResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the information about a virtual resource group.
     *
     * @param request - UpdateVirtualResourceRequest
     *
     * @returns UpdateVirtualResourceResponse
     *
     * @param string                       $ClusterId
     * @param string                       $VirtualResourceId
     * @param UpdateVirtualResourceRequest $request
     *
     * @return UpdateVirtualResourceResponse
     */
    public function updateVirtualResource($ClusterId, $VirtualResourceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateVirtualResourceWithOptions($ClusterId, $VirtualResourceId, $request, $headers, $runtime);
    }
}
