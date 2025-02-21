<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\Emr\V20210320\Models\CreateApiTemplateRequest;
use AlibabaCloud\SDK\Emr\V20210320\Models\CreateApiTemplateResponse;
use AlibabaCloud\SDK\Emr\V20210320\Models\CreateClusterRequest;
use AlibabaCloud\SDK\Emr\V20210320\Models\CreateClusterResponse;
use AlibabaCloud\SDK\Emr\V20210320\Models\CreateNodeGroupRequest;
use AlibabaCloud\SDK\Emr\V20210320\Models\CreateNodeGroupResponse;
use AlibabaCloud\SDK\Emr\V20210320\Models\CreateScriptRequest;
use AlibabaCloud\SDK\Emr\V20210320\Models\CreateScriptResponse;
use AlibabaCloud\SDK\Emr\V20210320\Models\CreateUsersRequest;
use AlibabaCloud\SDK\Emr\V20210320\Models\CreateUsersResponse;
use AlibabaCloud\SDK\Emr\V20210320\Models\DecreaseNodesRequest;
use AlibabaCloud\SDK\Emr\V20210320\Models\DecreaseNodesResponse;
use AlibabaCloud\SDK\Emr\V20210320\Models\DeleteApiTemplateRequest;
use AlibabaCloud\SDK\Emr\V20210320\Models\DeleteApiTemplateResponse;
use AlibabaCloud\SDK\Emr\V20210320\Models\DeleteClusterRequest;
use AlibabaCloud\SDK\Emr\V20210320\Models\DeleteClusterResponse;
use AlibabaCloud\SDK\Emr\V20210320\Models\DeleteScriptRequest;
use AlibabaCloud\SDK\Emr\V20210320\Models\DeleteScriptResponse;
use AlibabaCloud\SDK\Emr\V20210320\Models\DeleteUsersRequest;
use AlibabaCloud\SDK\Emr\V20210320\Models\DeleteUsersResponse;
use AlibabaCloud\SDK\Emr\V20210320\Models\DeleteUsersShrinkRequest;
use AlibabaCloud\SDK\Emr\V20210320\Models\GetApiTemplateRequest;
use AlibabaCloud\SDK\Emr\V20210320\Models\GetApiTemplateResponse;
use AlibabaCloud\SDK\Emr\V20210320\Models\GetApplicationRequest;
use AlibabaCloud\SDK\Emr\V20210320\Models\GetApplicationResponse;
use AlibabaCloud\SDK\Emr\V20210320\Models\GetAutoScalingActivityRequest;
use AlibabaCloud\SDK\Emr\V20210320\Models\GetAutoScalingActivityResponse;
use AlibabaCloud\SDK\Emr\V20210320\Models\GetAutoScalingPolicyRequest;
use AlibabaCloud\SDK\Emr\V20210320\Models\GetAutoScalingPolicyResponse;
use AlibabaCloud\SDK\Emr\V20210320\Models\GetClusterCloneMetaRequest;
use AlibabaCloud\SDK\Emr\V20210320\Models\GetClusterCloneMetaResponse;
use AlibabaCloud\SDK\Emr\V20210320\Models\GetClusterRequest;
use AlibabaCloud\SDK\Emr\V20210320\Models\GetClusterResponse;
use AlibabaCloud\SDK\Emr\V20210320\Models\GetDoctorApplicationRequest;
use AlibabaCloud\SDK\Emr\V20210320\Models\GetDoctorApplicationResponse;
use AlibabaCloud\SDK\Emr\V20210320\Models\GetDoctorComputeSummaryRequest;
use AlibabaCloud\SDK\Emr\V20210320\Models\GetDoctorComputeSummaryResponse;
use AlibabaCloud\SDK\Emr\V20210320\Models\GetDoctorHBaseClusterRequest;
use AlibabaCloud\SDK\Emr\V20210320\Models\GetDoctorHBaseClusterResponse;
use AlibabaCloud\SDK\Emr\V20210320\Models\GetDoctorHBaseRegionRequest;
use AlibabaCloud\SDK\Emr\V20210320\Models\GetDoctorHBaseRegionResponse;
use AlibabaCloud\SDK\Emr\V20210320\Models\GetDoctorHBaseRegionServerRequest;
use AlibabaCloud\SDK\Emr\V20210320\Models\GetDoctorHBaseRegionServerResponse;
use AlibabaCloud\SDK\Emr\V20210320\Models\GetDoctorHBaseTableRequest;
use AlibabaCloud\SDK\Emr\V20210320\Models\GetDoctorHBaseTableResponse;
use AlibabaCloud\SDK\Emr\V20210320\Models\GetDoctorHDFSClusterRequest;
use AlibabaCloud\SDK\Emr\V20210320\Models\GetDoctorHDFSClusterResponse;
use AlibabaCloud\SDK\Emr\V20210320\Models\GetDoctorHDFSDirectoryRequest;
use AlibabaCloud\SDK\Emr\V20210320\Models\GetDoctorHDFSDirectoryResponse;
use AlibabaCloud\SDK\Emr\V20210320\Models\GetDoctorHDFSUGIRequest;
use AlibabaCloud\SDK\Emr\V20210320\Models\GetDoctorHDFSUGIResponse;
use AlibabaCloud\SDK\Emr\V20210320\Models\GetDoctorHiveClusterRequest;
use AlibabaCloud\SDK\Emr\V20210320\Models\GetDoctorHiveClusterResponse;
use AlibabaCloud\SDK\Emr\V20210320\Models\GetDoctorHiveDatabaseRequest;
use AlibabaCloud\SDK\Emr\V20210320\Models\GetDoctorHiveDatabaseResponse;
use AlibabaCloud\SDK\Emr\V20210320\Models\GetDoctorHiveTableRequest;
use AlibabaCloud\SDK\Emr\V20210320\Models\GetDoctorHiveTableResponse;
use AlibabaCloud\SDK\Emr\V20210320\Models\GetDoctorJobRequest;
use AlibabaCloud\SDK\Emr\V20210320\Models\GetDoctorJobResponse;
use AlibabaCloud\SDK\Emr\V20210320\Models\GetDoctorReportComponentSummaryRequest;
use AlibabaCloud\SDK\Emr\V20210320\Models\GetDoctorReportComponentSummaryResponse;
use AlibabaCloud\SDK\Emr\V20210320\Models\GetNodeGroupRequest;
use AlibabaCloud\SDK\Emr\V20210320\Models\GetNodeGroupResponse;
use AlibabaCloud\SDK\Emr\V20210320\Models\GetOperationRequest;
use AlibabaCloud\SDK\Emr\V20210320\Models\GetOperationResponse;
use AlibabaCloud\SDK\Emr\V20210320\Models\IncreaseNodesRequest;
use AlibabaCloud\SDK\Emr\V20210320\Models\IncreaseNodesResponse;
use AlibabaCloud\SDK\Emr\V20210320\Models\JoinResourceGroupRequest;
use AlibabaCloud\SDK\Emr\V20210320\Models\JoinResourceGroupResponse;
use AlibabaCloud\SDK\Emr\V20210320\Models\ListApiTemplatesRequest;
use AlibabaCloud\SDK\Emr\V20210320\Models\ListApiTemplatesResponse;
use AlibabaCloud\SDK\Emr\V20210320\Models\ListApplicationConfigsRequest;
use AlibabaCloud\SDK\Emr\V20210320\Models\ListApplicationConfigsResponse;
use AlibabaCloud\SDK\Emr\V20210320\Models\ListApplicationsRequest;
use AlibabaCloud\SDK\Emr\V20210320\Models\ListApplicationsResponse;
use AlibabaCloud\SDK\Emr\V20210320\Models\ListAutoScalingActivitiesRequest;
use AlibabaCloud\SDK\Emr\V20210320\Models\ListAutoScalingActivitiesResponse;
use AlibabaCloud\SDK\Emr\V20210320\Models\ListClustersRequest;
use AlibabaCloud\SDK\Emr\V20210320\Models\ListClustersResponse;
use AlibabaCloud\SDK\Emr\V20210320\Models\ListComponentInstancesRequest;
use AlibabaCloud\SDK\Emr\V20210320\Models\ListComponentInstancesResponse;
use AlibabaCloud\SDK\Emr\V20210320\Models\ListComponentsRequest;
use AlibabaCloud\SDK\Emr\V20210320\Models\ListComponentsResponse;
use AlibabaCloud\SDK\Emr\V20210320\Models\ListDoctorApplicationsRequest;
use AlibabaCloud\SDK\Emr\V20210320\Models\ListDoctorApplicationsResponse;
use AlibabaCloud\SDK\Emr\V20210320\Models\ListDoctorComputeSummaryRequest;
use AlibabaCloud\SDK\Emr\V20210320\Models\ListDoctorComputeSummaryResponse;
use AlibabaCloud\SDK\Emr\V20210320\Models\ListDoctorHBaseRegionServersRequest;
use AlibabaCloud\SDK\Emr\V20210320\Models\ListDoctorHBaseRegionServersResponse;
use AlibabaCloud\SDK\Emr\V20210320\Models\ListDoctorHBaseTablesRequest;
use AlibabaCloud\SDK\Emr\V20210320\Models\ListDoctorHBaseTablesResponse;
use AlibabaCloud\SDK\Emr\V20210320\Models\ListDoctorHDFSDirectoriesRequest;
use AlibabaCloud\SDK\Emr\V20210320\Models\ListDoctorHDFSDirectoriesResponse;
use AlibabaCloud\SDK\Emr\V20210320\Models\ListDoctorHDFSUGIRequest;
use AlibabaCloud\SDK\Emr\V20210320\Models\ListDoctorHDFSUGIResponse;
use AlibabaCloud\SDK\Emr\V20210320\Models\ListDoctorHiveDatabasesRequest;
use AlibabaCloud\SDK\Emr\V20210320\Models\ListDoctorHiveDatabasesResponse;
use AlibabaCloud\SDK\Emr\V20210320\Models\ListDoctorHiveTablesRequest;
use AlibabaCloud\SDK\Emr\V20210320\Models\ListDoctorHiveTablesResponse;
use AlibabaCloud\SDK\Emr\V20210320\Models\ListDoctorJobsRequest;
use AlibabaCloud\SDK\Emr\V20210320\Models\ListDoctorJobsResponse;
use AlibabaCloud\SDK\Emr\V20210320\Models\ListDoctorJobsStatsRequest;
use AlibabaCloud\SDK\Emr\V20210320\Models\ListDoctorJobsStatsResponse;
use AlibabaCloud\SDK\Emr\V20210320\Models\ListDoctorReportsRequest;
use AlibabaCloud\SDK\Emr\V20210320\Models\ListDoctorReportsResponse;
use AlibabaCloud\SDK\Emr\V20210320\Models\ListInstanceTypesRequest;
use AlibabaCloud\SDK\Emr\V20210320\Models\ListInstanceTypesResponse;
use AlibabaCloud\SDK\Emr\V20210320\Models\ListNodeGroupsRequest;
use AlibabaCloud\SDK\Emr\V20210320\Models\ListNodeGroupsResponse;
use AlibabaCloud\SDK\Emr\V20210320\Models\ListNodesRequest;
use AlibabaCloud\SDK\Emr\V20210320\Models\ListNodesResponse;
use AlibabaCloud\SDK\Emr\V20210320\Models\ListReleaseVersionsRequest;
use AlibabaCloud\SDK\Emr\V20210320\Models\ListReleaseVersionsResponse;
use AlibabaCloud\SDK\Emr\V20210320\Models\ListScriptsRequest;
use AlibabaCloud\SDK\Emr\V20210320\Models\ListScriptsResponse;
use AlibabaCloud\SDK\Emr\V20210320\Models\ListTagResourcesRequest;
use AlibabaCloud\SDK\Emr\V20210320\Models\ListTagResourcesResponse;
use AlibabaCloud\SDK\Emr\V20210320\Models\ListUsersRequest;
use AlibabaCloud\SDK\Emr\V20210320\Models\ListUsersResponse;
use AlibabaCloud\SDK\Emr\V20210320\Models\PutAutoScalingPolicyRequest;
use AlibabaCloud\SDK\Emr\V20210320\Models\PutAutoScalingPolicyResponse;
use AlibabaCloud\SDK\Emr\V20210320\Models\RemoveAutoScalingPolicyRequest;
use AlibabaCloud\SDK\Emr\V20210320\Models\RemoveAutoScalingPolicyResponse;
use AlibabaCloud\SDK\Emr\V20210320\Models\RunApiTemplateRequest;
use AlibabaCloud\SDK\Emr\V20210320\Models\RunApiTemplateResponse;
use AlibabaCloud\SDK\Emr\V20210320\Models\RunApplicationActionRequest;
use AlibabaCloud\SDK\Emr\V20210320\Models\RunApplicationActionResponse;
use AlibabaCloud\SDK\Emr\V20210320\Models\RunClusterRequest;
use AlibabaCloud\SDK\Emr\V20210320\Models\RunClusterResponse;
use AlibabaCloud\SDK\Emr\V20210320\Models\RunClusterShrinkRequest;
use AlibabaCloud\SDK\Emr\V20210320\Models\TagResourcesRequest;
use AlibabaCloud\SDK\Emr\V20210320\Models\TagResourcesResponse;
use AlibabaCloud\SDK\Emr\V20210320\Models\UntagResourcesRequest;
use AlibabaCloud\SDK\Emr\V20210320\Models\UntagResourcesResponse;
use AlibabaCloud\SDK\Emr\V20210320\Models\UpdateApiTemplateRequest;
use AlibabaCloud\SDK\Emr\V20210320\Models\UpdateApiTemplateResponse;
use AlibabaCloud\SDK\Emr\V20210320\Models\UpdateApplicationConfigsRequest;
use AlibabaCloud\SDK\Emr\V20210320\Models\UpdateApplicationConfigsResponse;
use AlibabaCloud\SDK\Emr\V20210320\Models\UpdateClusterAttributeRequest;
use AlibabaCloud\SDK\Emr\V20210320\Models\UpdateClusterAttributeResponse;
use AlibabaCloud\SDK\Emr\V20210320\Models\UpdateScriptRequest;
use AlibabaCloud\SDK\Emr\V20210320\Models\UpdateScriptResponse;
use AlibabaCloud\SDK\Emr\V20210320\Models\UpdateScriptShrinkRequest;
use AlibabaCloud\SDK\Emr\V20210320\Models\UpdateUserAttributeRequest;
use AlibabaCloud\SDK\Emr\V20210320\Models\UpdateUserAttributeResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Emr extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap  = [
            'cn-beijing'                  => 'emr.aliyuncs.com',
            'cn-hangzhou'                 => 'emr.aliyuncs.com',
            'cn-shanghai'                 => 'emr.aliyuncs.com',
            'cn-shenzhen'                 => 'emr.aliyuncs.com',
            'ap-southeast-1'              => 'emr.aliyuncs.com',
            'us-west-1'                   => 'emr.aliyuncs.com',
            'cn-shanghai-finance-1'       => 'emr.aliyuncs.com',
            'cn-shenzhen-finance-1'       => 'emr.aliyuncs.com',
            'cn-north-2-gov-1'            => 'emr.aliyuncs.com',
            'ap-northeast-2-pop'          => 'emr.aliyuncs.com',
            'cn-beijing-finance-1'        => 'emr.aliyuncs.com',
            'cn-beijing-finance-pop'      => 'emr.aliyuncs.com',
            'cn-beijing-gov-1'            => 'emr.aliyuncs.com',
            'cn-beijing-nu16-b01'         => 'emr.aliyuncs.com',
            'cn-edge-1'                   => 'emr.aliyuncs.com',
            'cn-fujian'                   => 'emr.aliyuncs.com',
            'cn-haidian-cm12-c01'         => 'emr.aliyuncs.com',
            'cn-hangzhou-bj-b01'          => 'emr.aliyuncs.com',
            'cn-hangzhou-finance'         => 'emr.aliyuncs.com',
            'cn-hangzhou-internal-prod-1' => 'emr.aliyuncs.com',
            'cn-hangzhou-internal-test-1' => 'emr.aliyuncs.com',
            'cn-hangzhou-internal-test-2' => 'emr.aliyuncs.com',
            'cn-hangzhou-internal-test-3' => 'emr.aliyuncs.com',
            'cn-hangzhou-test-306'        => 'emr.aliyuncs.com',
            'cn-hongkong-finance-pop'     => 'emr.aliyuncs.com',
            'cn-huhehaote-nebula-1'       => 'emr.aliyuncs.com',
            'cn-qingdao-nebula'           => 'emr.aliyuncs.com',
            'cn-shanghai-et15-b01'        => 'emr.aliyuncs.com',
            'cn-shanghai-et2-b01'         => 'emr.aliyuncs.com',
            'cn-shanghai-inner'           => 'emr.aliyuncs.com',
            'cn-shanghai-internal-test-1' => 'emr.aliyuncs.com',
            'cn-shenzhen-inner'           => 'emr.aliyuncs.com',
            'cn-shenzhen-st4-d01'         => 'emr.aliyuncs.com',
            'cn-shenzhen-su18-b01'        => 'emr.aliyuncs.com',
            'cn-wuhan'                    => 'emr.aliyuncs.com',
            'cn-yushanfang'               => 'emr.aliyuncs.com',
            'cn-zhangbei'                 => 'emr.aliyuncs.com',
            'cn-zhangbei-na61-b01'        => 'emr.aliyuncs.com',
            'cn-zhangjiakou-na62-a01'     => 'emr.aliyuncs.com',
            'cn-zhengzhou-nebula-1'       => 'emr.aliyuncs.com',
            'eu-west-1-oxs'               => 'emr.aliyuncs.com',
            'rus-west-1-pop'              => 'emr.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('emr', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * Creates a predefined API operation template. The template contains information about an API operation, including the basic structure, request method, URL path, request parameters, and response format.
     *
     * @param request - CreateApiTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns CreateApiTemplateResponse
     *
     * @param CreateApiTemplateRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CreateApiTemplateResponse
     */
    public function createApiTemplateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->apiName) {
            @$query['ApiName'] = $request->apiName;
        }

        if (null !== $request->content) {
            @$query['Content'] = $request->content;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->templateName) {
            @$query['TemplateName'] = $request->templateName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateApiTemplate',
            'version'     => '2021-03-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateApiTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateApiTemplateResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Creates a predefined API operation template. The template contains information about an API operation, including the basic structure, request method, URL path, request parameters, and response format.
     *
     * @param request - CreateApiTemplateRequest
     * @returns CreateApiTemplateResponse
     *
     * @param CreateApiTemplateRequest $request
     *
     * @return CreateApiTemplateResponse
     */
    public function createApiTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createApiTemplateWithOptions($request, $runtime);
    }

    /**
     * Creates a pay-as-you-go or subscription cluster.
     *
     * @param request - CreateClusterRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns CreateClusterResponse
     *
     * @param CreateClusterRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return CreateClusterResponse
     */
    public function createClusterWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->applicationConfigs) {
            @$query['ApplicationConfigs'] = $request->applicationConfigs;
        }

        if (null !== $request->applications) {
            @$query['Applications'] = $request->applications;
        }

        if (null !== $request->bootstrapScripts) {
            @$query['BootstrapScripts'] = $request->bootstrapScripts;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->clusterName) {
            @$query['ClusterName'] = $request->clusterName;
        }

        if (null !== $request->clusterType) {
            @$query['ClusterType'] = $request->clusterType;
        }

        if (null !== $request->deletionProtection) {
            @$query['DeletionProtection'] = $request->deletionProtection;
        }

        if (null !== $request->deployMode) {
            @$query['DeployMode'] = $request->deployMode;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->nodeAttributes) {
            @$query['NodeAttributes'] = $request->nodeAttributes;
        }

        if (null !== $request->nodeGroups) {
            @$query['NodeGroups'] = $request->nodeGroups;
        }

        if (null !== $request->paymentType) {
            @$query['PaymentType'] = $request->paymentType;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->releaseVersion) {
            @$query['ReleaseVersion'] = $request->releaseVersion;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->securityMode) {
            @$query['SecurityMode'] = $request->securityMode;
        }

        if (null !== $request->subscriptionConfig) {
            @$query['SubscriptionConfig'] = $request->subscriptionConfig;
        }

        if (null !== $request->tags) {
            @$query['Tags'] = $request->tags;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateCluster',
            'version'     => '2021-03-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateClusterResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateClusterResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Creates a pay-as-you-go or subscription cluster.
     *
     * @param request - CreateClusterRequest
     * @returns CreateClusterResponse
     *
     * @param CreateClusterRequest $request
     *
     * @return CreateClusterResponse
     */
    public function createCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createClusterWithOptions($request, $runtime);
    }

    /**
     * Creates a node group.
     *
     * @remarks
     * 创建节点组。
     *
     * @param request - CreateNodeGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns CreateNodeGroupResponse
     *
     * @param CreateNodeGroupRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CreateNodeGroupResponse
     */
    public function createNodeGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->nodeGroup) {
            @$query['NodeGroup'] = $request->nodeGroup;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateNodeGroup',
            'version'     => '2021-03-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateNodeGroupResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateNodeGroupResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Creates a node group.
     *
     * @remarks
     * 创建节点组。
     *
     * @param request - CreateNodeGroupRequest
     * @returns CreateNodeGroupResponse
     *
     * @param CreateNodeGroupRequest $request
     *
     * @return CreateNodeGroupResponse
     */
    public function createNodeGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createNodeGroupWithOptions($request, $runtime);
    }

    /**
     * Adds a bootstrap action or a common script of an E-MapReduce (EMR) cluster.
     *
     * @param request - CreateScriptRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns CreateScriptResponse
     *
     * @param CreateScriptRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return CreateScriptResponse
     */
    public function createScriptWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->scriptType) {
            @$query['ScriptType'] = $request->scriptType;
        }

        if (null !== $request->scripts) {
            @$query['Scripts'] = $request->scripts;
        }

        if (null !== $request->timeoutSecs) {
            @$query['TimeoutSecs'] = $request->timeoutSecs;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateScript',
            'version'     => '2021-03-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateScriptResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateScriptResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Adds a bootstrap action or a common script of an E-MapReduce (EMR) cluster.
     *
     * @param request - CreateScriptRequest
     * @returns CreateScriptResponse
     *
     * @param CreateScriptRequest $request
     *
     * @return CreateScriptResponse
     */
    public function createScript($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createScriptWithOptions($request, $runtime);
    }

    /**
     * 创建用户.
     *
     * @param request - CreateUsersRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns CreateUsersResponse
     *
     * @param CreateUsersRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return CreateUsersResponse
     */
    public function createUsersWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->users) {
            @$query['Users'] = $request->users;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateUsers',
            'version'     => '2021-03-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateUsersResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateUsersResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 创建用户.
     *
     * @param request - CreateUsersRequest
     * @returns CreateUsersResponse
     *
     * @param CreateUsersRequest $request
     *
     * @return CreateUsersResponse
     */
    public function createUsers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createUsersWithOptions($request, $runtime);
    }

    /**
     * Perform a scale-out operation on the target node group.
     *
     * @param request - DecreaseNodesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DecreaseNodesResponse
     *
     * @param DecreaseNodesRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DecreaseNodesResponse
     */
    public function decreaseNodesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->batchInterval) {
            @$query['BatchInterval'] = $request->batchInterval;
        }

        if (null !== $request->batchSize) {
            @$query['BatchSize'] = $request->batchSize;
        }

        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->decreaseNodeCount) {
            @$query['DecreaseNodeCount'] = $request->decreaseNodeCount;
        }

        if (null !== $request->nodeGroupId) {
            @$query['NodeGroupId'] = $request->nodeGroupId;
        }

        if (null !== $request->nodeIds) {
            @$query['NodeIds'] = $request->nodeIds;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'DecreaseNodes',
            'version'     => '2021-03-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DecreaseNodesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DecreaseNodesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Perform a scale-out operation on the target node group.
     *
     * @param request - DecreaseNodesRequest
     * @returns DecreaseNodesResponse
     *
     * @param DecreaseNodesRequest $request
     *
     * @return DecreaseNodesResponse
     */
    public function decreaseNodes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->decreaseNodesWithOptions($request, $runtime);
    }

    /**
     * Deletes an API operation template.
     *
     * @remarks
     * 创建集群模板
     *
     * @param request - DeleteApiTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DeleteApiTemplateResponse
     *
     * @param DeleteApiTemplateRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteApiTemplateResponse
     */
    public function deleteApiTemplateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->apiName) {
            @$query['ApiName'] = $request->apiName;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->templateId) {
            @$query['TemplateId'] = $request->templateId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteApiTemplate',
            'version'     => '2021-03-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteApiTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteApiTemplateResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Deletes an API operation template.
     *
     * @remarks
     * 创建集群模板
     *
     * @param request - DeleteApiTemplateRequest
     * @returns DeleteApiTemplateResponse
     *
     * @param DeleteApiTemplateRequest $request
     *
     * @return DeleteApiTemplateResponse
     */
    public function deleteApiTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteApiTemplateWithOptions($request, $runtime);
    }

    /**
     * @param request - DeleteClusterRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DeleteClusterResponse
     *
     * @param DeleteClusterRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteClusterResponse
     */
    public function deleteClusterWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteCluster',
            'version'     => '2021-03-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteClusterResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteClusterResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - DeleteClusterRequest
     * @returns DeleteClusterResponse
     *
     * @param DeleteClusterRequest $request
     *
     * @return DeleteClusterResponse
     */
    public function deleteCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteClusterWithOptions($request, $runtime);
    }

    /**
     * Deletes a bootstrap action or a common script of an E-MapReduce (EMR) cluster.
     *
     * @param request - DeleteScriptRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DeleteScriptResponse
     *
     * @param DeleteScriptRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DeleteScriptResponse
     */
    public function deleteScriptWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->scriptId) {
            @$query['ScriptId'] = $request->scriptId;
        }

        if (null !== $request->scriptType) {
            @$query['ScriptType'] = $request->scriptType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteScript',
            'version'     => '2021-03-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteScriptResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteScriptResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Deletes a bootstrap action or a common script of an E-MapReduce (EMR) cluster.
     *
     * @param request - DeleteScriptRequest
     * @returns DeleteScriptResponse
     *
     * @param DeleteScriptRequest $request
     *
     * @return DeleteScriptResponse
     */
    public function deleteScript($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteScriptWithOptions($request, $runtime);
    }

    /**
     * @param tmpReq - DeleteUsersRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DeleteUsersResponse
     *
     * @param DeleteUsersRequest $tmpReq
     * @param RuntimeOptions     $runtime
     *
     * @return DeleteUsersResponse
     */
    public function deleteUsersWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new DeleteUsersShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->userNames) {
            $request->userNamesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->userNames, 'UserNames', 'json');
        }

        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $body = [];
        if (null !== $request->clusterId) {
            @$body['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->userNamesShrink) {
            @$body['UserNames'] = $request->userNamesShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body'  => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteUsers',
            'version'     => '2021-03-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteUsersResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteUsersResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - DeleteUsersRequest
     * @returns DeleteUsersResponse
     *
     * @param DeleteUsersRequest $request
     *
     * @return DeleteUsersResponse
     */
    public function deleteUsers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteUsersWithOptions($request, $runtime);
    }

    /**
     * Queries the detailed configuration information about an API operation template.
     *
     * @param request - GetApiTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetApiTemplateResponse
     *
     * @param GetApiTemplateRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return GetApiTemplateResponse
     */
    public function getApiTemplateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->templateId) {
            @$query['TemplateId'] = $request->templateId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetApiTemplate',
            'version'     => '2021-03-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetApiTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetApiTemplateResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the detailed configuration information about an API operation template.
     *
     * @param request - GetApiTemplateRequest
     * @returns GetApiTemplateResponse
     *
     * @param GetApiTemplateRequest $request
     *
     * @return GetApiTemplateResponse
     */
    public function getApiTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getApiTemplateWithOptions($request, $runtime);
    }

    /**
     * @remarks
     * 查询应用详情。
     *
     * @param request - GetApplicationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetApplicationResponse
     *
     * @param GetApplicationRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return GetApplicationResponse
     */
    public function getApplicationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->applicationName) {
            @$query['ApplicationName'] = $request->applicationName;
        }

        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetApplication',
            'version'     => '2021-03-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetApplicationResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @remarks
     * 查询应用详情。
     *
     * @param request - GetApplicationRequest
     * @returns GetApplicationResponse
     *
     * @param GetApplicationRequest $request
     *
     * @return GetApplicationResponse
     */
    public function getApplication($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getApplicationWithOptions($request, $runtime);
    }

    /**
     * 获取弹性伸缩活动详情。
     *
     * @param request - GetAutoScalingActivityRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetAutoScalingActivityResponse
     *
     * @param GetAutoScalingActivityRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return GetAutoScalingActivityResponse
     */
    public function getAutoScalingActivityWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->scalingActivityId) {
            @$query['ScalingActivityId'] = $request->scalingActivityId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetAutoScalingActivity',
            'version'     => '2021-03-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetAutoScalingActivityResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetAutoScalingActivityResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取弹性伸缩活动详情。
     *
     * @param request - GetAutoScalingActivityRequest
     * @returns GetAutoScalingActivityResponse
     *
     * @param GetAutoScalingActivityRequest $request
     *
     * @return GetAutoScalingActivityResponse
     */
    public function getAutoScalingActivity($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAutoScalingActivityWithOptions($request, $runtime);
    }

    /**
     * null.
     *
     * @param request - GetAutoScalingPolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetAutoScalingPolicyResponse
     *
     * @param GetAutoScalingPolicyRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return GetAutoScalingPolicyResponse
     */
    public function getAutoScalingPolicyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->nodeGroupId) {
            @$query['NodeGroupId'] = $request->nodeGroupId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetAutoScalingPolicy',
            'version'     => '2021-03-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetAutoScalingPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetAutoScalingPolicyResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * null.
     *
     * @param request - GetAutoScalingPolicyRequest
     * @returns GetAutoScalingPolicyResponse
     *
     * @param GetAutoScalingPolicyRequest $request
     *
     * @return GetAutoScalingPolicyResponse
     */
    public function getAutoScalingPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAutoScalingPolicyWithOptions($request, $runtime);
    }

    /**
     * Obtains the details of a cluster.
     *
     * @param request - GetClusterRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetClusterResponse
     *
     * @param GetClusterRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return GetClusterResponse
     */
    public function getClusterWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetCluster',
            'version'     => '2021-03-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetClusterResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetClusterResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Obtains the details of a cluster.
     *
     * @param request - GetClusterRequest
     * @returns GetClusterResponse
     *
     * @param GetClusterRequest $request
     *
     * @return GetClusterResponse
     */
    public function getCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getClusterWithOptions($request, $runtime);
    }

    /**
     * Obtains metadata of the E-MapReduce (EMR) cluster that you want to clone. This helps you call the CreateCluster API operation to quickly create an EMR cluster.
     *
     * @param request - GetClusterCloneMetaRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetClusterCloneMetaResponse
     *
     * @param GetClusterCloneMetaRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetClusterCloneMetaResponse
     */
    public function getClusterCloneMetaWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetClusterCloneMeta',
            'version'     => '2021-03-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetClusterCloneMetaResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetClusterCloneMetaResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Obtains metadata of the E-MapReduce (EMR) cluster that you want to clone. This helps you call the CreateCluster API operation to quickly create an EMR cluster.
     *
     * @param request - GetClusterCloneMetaRequest
     * @returns GetClusterCloneMetaResponse
     *
     * @param GetClusterCloneMetaRequest $request
     *
     * @return GetClusterCloneMetaResponse
     */
    public function getClusterCloneMeta($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getClusterCloneMetaWithOptions($request, $runtime);
    }

    /**
     * Obtains job analysis information on E-MapReduce (EMR) Doctor.
     *
     * @remarks
     * get one doctor analysis app
     *
     * @param request - GetDoctorApplicationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetDoctorApplicationResponse
     *
     * @param GetDoctorApplicationRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return GetDoctorApplicationResponse
     */
    public function getDoctorApplicationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->dateTime) {
            @$query['DateTime'] = $request->dateTime;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetDoctorApplication',
            'version'     => '2021-03-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetDoctorApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetDoctorApplicationResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Obtains job analysis information on E-MapReduce (EMR) Doctor.
     *
     * @remarks
     * get one doctor analysis app
     *
     * @param request - GetDoctorApplicationRequest
     * @returns GetDoctorApplicationResponse
     *
     * @param GetDoctorApplicationRequest $request
     *
     * @return GetDoctorApplicationResponse
     */
    public function getDoctorApplication($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDoctorApplicationWithOptions($request, $runtime);
    }

    /**
     * Obtains the information about resource usage in a cluster on E-MapReduce (EMR) Doctor.
     *
     * @remarks
     * get one specific luster engine queue by <type, name>
     *
     * @param request - GetDoctorComputeSummaryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetDoctorComputeSummaryResponse
     *
     * @param GetDoctorComputeSummaryRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return GetDoctorComputeSummaryResponse
     */
    public function getDoctorComputeSummaryWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->componentInfo) {
            @$query['ComponentInfo'] = $request->componentInfo;
        }

        if (null !== $request->dateTime) {
            @$query['DateTime'] = $request->dateTime;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetDoctorComputeSummary',
            'version'     => '2021-03-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetDoctorComputeSummaryResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetDoctorComputeSummaryResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Obtains the information about resource usage in a cluster on E-MapReduce (EMR) Doctor.
     *
     * @remarks
     * get one specific luster engine queue by <type, name>
     *
     * @param request - GetDoctorComputeSummaryRequest
     * @returns GetDoctorComputeSummaryResponse
     *
     * @param GetDoctorComputeSummaryRequest $request
     *
     * @return GetDoctorComputeSummaryResponse
     */
    public function getDoctorComputeSummary($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDoctorComputeSummaryWithOptions($request, $runtime);
    }

    /**
     * Obtains the metrics of an HBase cluster.
     *
     * @remarks
     * get Doctor HBaseCluster
     *
     * @param request - GetDoctorHBaseClusterRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetDoctorHBaseClusterResponse
     *
     * @param GetDoctorHBaseClusterRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GetDoctorHBaseClusterResponse
     */
    public function getDoctorHBaseClusterWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->dateTime) {
            @$query['DateTime'] = $request->dateTime;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetDoctorHBaseCluster',
            'version'     => '2021-03-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetDoctorHBaseClusterResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetDoctorHBaseClusterResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Obtains the metrics of an HBase cluster.
     *
     * @remarks
     * get Doctor HBaseCluster
     *
     * @param request - GetDoctorHBaseClusterRequest
     * @returns GetDoctorHBaseClusterResponse
     *
     * @param GetDoctorHBaseClusterRequest $request
     *
     * @return GetDoctorHBaseClusterResponse
     */
    public function getDoctorHBaseCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDoctorHBaseClusterWithOptions($request, $runtime);
    }

    /**
     * Get HBase Region information.
     *
     * @remarks
     * List Doctor HBase Regions
     *
     * @param request - GetDoctorHBaseRegionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetDoctorHBaseRegionResponse
     *
     * @param GetDoctorHBaseRegionRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return GetDoctorHBaseRegionResponse
     */
    public function getDoctorHBaseRegionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->dateTime) {
            @$query['DateTime'] = $request->dateTime;
        }

        if (null !== $request->hbaseRegionId) {
            @$query['HbaseRegionId'] = $request->hbaseRegionId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetDoctorHBaseRegion',
            'version'     => '2021-03-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetDoctorHBaseRegionResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetDoctorHBaseRegionResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Get HBase Region information.
     *
     * @remarks
     * List Doctor HBase Regions
     *
     * @param request - GetDoctorHBaseRegionRequest
     * @returns GetDoctorHBaseRegionResponse
     *
     * @param GetDoctorHBaseRegionRequest $request
     *
     * @return GetDoctorHBaseRegionResponse
     */
    public function getDoctorHBaseRegion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDoctorHBaseRegionWithOptions($request, $runtime);
    }

    /**
     * Obtains the information about an HBase region server.
     *
     * @remarks
     * get Doctor HBaseRegionServer
     *
     * @param request - GetDoctorHBaseRegionServerRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetDoctorHBaseRegionServerResponse
     *
     * @param GetDoctorHBaseRegionServerRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return GetDoctorHBaseRegionServerResponse
     */
    public function getDoctorHBaseRegionServerWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->dateTime) {
            @$query['DateTime'] = $request->dateTime;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->regionServerHost) {
            @$query['RegionServerHost'] = $request->regionServerHost;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetDoctorHBaseRegionServer',
            'version'     => '2021-03-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetDoctorHBaseRegionServerResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetDoctorHBaseRegionServerResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Obtains the information about an HBase region server.
     *
     * @remarks
     * get Doctor HBaseRegionServer
     *
     * @param request - GetDoctorHBaseRegionServerRequest
     * @returns GetDoctorHBaseRegionServerResponse
     *
     * @param GetDoctorHBaseRegionServerRequest $request
     *
     * @return GetDoctorHBaseRegionServerResponse
     */
    public function getDoctorHBaseRegionServer($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDoctorHBaseRegionServerWithOptions($request, $runtime);
    }

    /**
     * Get HBase Table information.
     *
     * @remarks
     * get Doctor HBaseTable
     *
     * @param request - GetDoctorHBaseTableRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetDoctorHBaseTableResponse
     *
     * @param GetDoctorHBaseTableRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetDoctorHBaseTableResponse
     */
    public function getDoctorHBaseTableWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->dateTime) {
            @$query['DateTime'] = $request->dateTime;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->tableName) {
            @$query['TableName'] = $request->tableName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetDoctorHBaseTable',
            'version'     => '2021-03-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetDoctorHBaseTableResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetDoctorHBaseTableResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Get HBase Table information.
     *
     * @remarks
     * get Doctor HBaseTable
     *
     * @param request - GetDoctorHBaseTableRequest
     * @returns GetDoctorHBaseTableResponse
     *
     * @param GetDoctorHBaseTableRequest $request
     *
     * @return GetDoctorHBaseTableResponse
     */
    public function getDoctorHBaseTable($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDoctorHBaseTableWithOptions($request, $runtime);
    }

    /**
     * Obtains the analysis results of the Hadoop Distributed File System (HDFS) storage resources of a cluster on E-MapReduce (EMR) Doctor.
     *
     * @remarks
     * list Doctor HBaseTableRegions
     *
     * @param request - GetDoctorHDFSClusterRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetDoctorHDFSClusterResponse
     *
     * @param GetDoctorHDFSClusterRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return GetDoctorHDFSClusterResponse
     */
    public function getDoctorHDFSClusterWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->dateTime) {
            @$query['DateTime'] = $request->dateTime;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetDoctorHDFSCluster',
            'version'     => '2021-03-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetDoctorHDFSClusterResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetDoctorHDFSClusterResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Obtains the analysis results of the Hadoop Distributed File System (HDFS) storage resources of a cluster on E-MapReduce (EMR) Doctor.
     *
     * @remarks
     * list Doctor HBaseTableRegions
     *
     * @param request - GetDoctorHDFSClusterRequest
     * @returns GetDoctorHDFSClusterResponse
     *
     * @param GetDoctorHDFSClusterRequest $request
     *
     * @return GetDoctorHDFSClusterResponse
     */
    public function getDoctorHDFSCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDoctorHDFSClusterWithOptions($request, $runtime);
    }

    /**
     * Obtains the analysis results of a specific Hadoop Distributed File System (HDFS) directory of a cluster. The depth of the directory is not greater than five.
     *
     * @remarks
     * get Doctor HDFSNode
     *
     * @param request - GetDoctorHDFSDirectoryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetDoctorHDFSDirectoryResponse
     *
     * @param GetDoctorHDFSDirectoryRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return GetDoctorHDFSDirectoryResponse
     */
    public function getDoctorHDFSDirectoryWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->dateTime) {
            @$query['DateTime'] = $request->dateTime;
        }

        if (null !== $request->dirPath) {
            @$query['DirPath'] = $request->dirPath;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetDoctorHDFSDirectory',
            'version'     => '2021-03-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetDoctorHDFSDirectoryResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetDoctorHDFSDirectoryResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Obtains the analysis results of a specific Hadoop Distributed File System (HDFS) directory of a cluster. The depth of the directory is not greater than five.
     *
     * @remarks
     * get Doctor HDFSNode
     *
     * @param request - GetDoctorHDFSDirectoryRequest
     * @returns GetDoctorHDFSDirectoryResponse
     *
     * @param GetDoctorHDFSDirectoryRequest $request
     *
     * @return GetDoctorHDFSDirectoryResponse
     */
    public function getDoctorHDFSDirectory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDoctorHDFSDirectoryWithOptions($request, $runtime);
    }

    /**
     * Obtains the analysis results of Hadoop Distributed File System (HDFS) storage resources for a specific owner or group on E-MapReduce (EMR) Doctor.
     *
     * @remarks
     * get Doctor HDFS UGI
     *
     * @param request - GetDoctorHDFSUGIRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetDoctorHDFSUGIResponse
     *
     * @param GetDoctorHDFSUGIRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetDoctorHDFSUGIResponse
     */
    public function getDoctorHDFSUGIWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->dateTime) {
            @$query['DateTime'] = $request->dateTime;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetDoctorHDFSUGI',
            'version'     => '2021-03-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetDoctorHDFSUGIResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetDoctorHDFSUGIResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Obtains the analysis results of Hadoop Distributed File System (HDFS) storage resources for a specific owner or group on E-MapReduce (EMR) Doctor.
     *
     * @remarks
     * get Doctor HDFS UGI
     *
     * @param request - GetDoctorHDFSUGIRequest
     * @returns GetDoctorHDFSUGIResponse
     *
     * @param GetDoctorHDFSUGIRequest $request
     *
     * @return GetDoctorHDFSUGIResponse
     */
    public function getDoctorHDFSUGI($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDoctorHDFSUGIWithOptions($request, $runtime);
    }

    /**
     * Obtains the analysis results of a Hive cluster.
     *
     * @remarks
     * list Doctor Hive Cluster
     *
     * @param request - GetDoctorHiveClusterRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetDoctorHiveClusterResponse
     *
     * @param GetDoctorHiveClusterRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return GetDoctorHiveClusterResponse
     */
    public function getDoctorHiveClusterWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->dateTime) {
            @$query['DateTime'] = $request->dateTime;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetDoctorHiveCluster',
            'version'     => '2021-03-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetDoctorHiveClusterResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetDoctorHiveClusterResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Obtains the analysis results of a Hive cluster.
     *
     * @remarks
     * list Doctor Hive Cluster
     *
     * @param request - GetDoctorHiveClusterRequest
     * @returns GetDoctorHiveClusterResponse
     *
     * @param GetDoctorHiveClusterRequest $request
     *
     * @return GetDoctorHiveClusterResponse
     */
    public function getDoctorHiveCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDoctorHiveClusterWithOptions($request, $runtime);
    }

    /**
     * Obtains the analysis results of a Hive database.
     *
     * @remarks
     * get Doctor Hive Database
     *
     * @param request - GetDoctorHiveDatabaseRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetDoctorHiveDatabaseResponse
     *
     * @param GetDoctorHiveDatabaseRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GetDoctorHiveDatabaseResponse
     */
    public function getDoctorHiveDatabaseWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->databaseName) {
            @$query['DatabaseName'] = $request->databaseName;
        }

        if (null !== $request->dateTime) {
            @$query['DateTime'] = $request->dateTime;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetDoctorHiveDatabase',
            'version'     => '2021-03-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetDoctorHiveDatabaseResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetDoctorHiveDatabaseResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Obtains the analysis results of a Hive database.
     *
     * @remarks
     * get Doctor Hive Database
     *
     * @param request - GetDoctorHiveDatabaseRequest
     * @returns GetDoctorHiveDatabaseResponse
     *
     * @param GetDoctorHiveDatabaseRequest $request
     *
     * @return GetDoctorHiveDatabaseResponse
     */
    public function getDoctorHiveDatabase($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDoctorHiveDatabaseWithOptions($request, $runtime);
    }

    /**
     * Obtains the analysis results of a specific Hive table in a cluster on E-MapReduce (EMR) Doctor.
     *
     * @remarks
     * get Doctor Hive Table
     *
     * @param request - GetDoctorHiveTableRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetDoctorHiveTableResponse
     *
     * @param GetDoctorHiveTableRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetDoctorHiveTableResponse
     */
    public function getDoctorHiveTableWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->dateTime) {
            @$query['DateTime'] = $request->dateTime;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->tableName) {
            @$query['TableName'] = $request->tableName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetDoctorHiveTable',
            'version'     => '2021-03-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetDoctorHiveTableResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetDoctorHiveTableResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Obtains the analysis results of a specific Hive table in a cluster on E-MapReduce (EMR) Doctor.
     *
     * @remarks
     * get Doctor Hive Table
     *
     * @param request - GetDoctorHiveTableRequest
     * @returns GetDoctorHiveTableResponse
     *
     * @param GetDoctorHiveTableRequest $request
     *
     * @return GetDoctorHiveTableResponse
     */
    public function getDoctorHiveTable($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDoctorHiveTableWithOptions($request, $runtime);
    }

    /**
     * Obtains the basic running information about a job on E-MapReduce (EMR) Doctor.
     *
     * @remarks
     * Get realtime job by yarn
     *
     * @param request - GetDoctorJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetDoctorJobResponse
     *
     * @param GetDoctorJobRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return GetDoctorJobResponse
     */
    public function getDoctorJobWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetDoctorJob',
            'version'     => '2021-03-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetDoctorJobResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetDoctorJobResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Obtains the basic running information about a job on E-MapReduce (EMR) Doctor.
     *
     * @remarks
     * Get realtime job by yarn
     *
     * @param request - GetDoctorJobRequest
     * @returns GetDoctorJobResponse
     *
     * @param GetDoctorJobRequest $request
     *
     * @return GetDoctorJobResponse
     */
    public function getDoctorJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDoctorJobWithOptions($request, $runtime);
    }

    /**
     * Obtain the analysis result report of a specified component from EMR Doctor.
     *
     * @remarks
     * get specify component\\"s report analysis by EMR Doctor
     *
     * @param request - GetDoctorReportComponentSummaryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetDoctorReportComponentSummaryResponse
     *
     * @param GetDoctorReportComponentSummaryRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return GetDoctorReportComponentSummaryResponse
     */
    public function getDoctorReportComponentSummaryWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->componentType) {
            @$query['ComponentType'] = $request->componentType;
        }

        if (null !== $request->dateTime) {
            @$query['DateTime'] = $request->dateTime;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetDoctorReportComponentSummary',
            'version'     => '2021-03-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetDoctorReportComponentSummaryResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetDoctorReportComponentSummaryResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Obtain the analysis result report of a specified component from EMR Doctor.
     *
     * @remarks
     * get specify component\\"s report analysis by EMR Doctor
     *
     * @param request - GetDoctorReportComponentSummaryRequest
     * @returns GetDoctorReportComponentSummaryResponse
     *
     * @param GetDoctorReportComponentSummaryRequest $request
     *
     * @return GetDoctorReportComponentSummaryResponse
     */
    public function getDoctorReportComponentSummary($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDoctorReportComponentSummaryWithOptions($request, $runtime);
    }

    /**
     * You can call this operation to obtain the details of a node group.
     *
     * @remarks
     * 获取节点组详情。
     *
     * @param request - GetNodeGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetNodeGroupResponse
     *
     * @param GetNodeGroupRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return GetNodeGroupResponse
     */
    public function getNodeGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->nodeGroupId) {
            @$query['NodeGroupId'] = $request->nodeGroupId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetNodeGroup',
            'version'     => '2021-03-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetNodeGroupResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetNodeGroupResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * You can call this operation to obtain the details of a node group.
     *
     * @remarks
     * 获取节点组详情。
     *
     * @param request - GetNodeGroupRequest
     * @returns GetNodeGroupResponse
     *
     * @param GetNodeGroupRequest $request
     *
     * @return GetNodeGroupResponse
     */
    public function getNodeGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getNodeGroupWithOptions($request, $runtime);
    }

    /**
     * Gets the details of an asynchronous operation.
     *
     * @param request - GetOperationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetOperationResponse
     *
     * @param GetOperationRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return GetOperationResponse
     */
    public function getOperationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->operationId) {
            @$query['OperationId'] = $request->operationId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetOperation',
            'version'     => '2021-03-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetOperationResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetOperationResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Gets the details of an asynchronous operation.
     *
     * @param request - GetOperationRequest
     * @returns GetOperationResponse
     *
     * @param GetOperationRequest $request
     *
     * @return GetOperationResponse
     */
    public function getOperation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getOperationWithOptions($request, $runtime);
    }

    /**
     * Scale out the node group.
     *
     * @param request - IncreaseNodesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns IncreaseNodesResponse
     *
     * @param IncreaseNodesRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return IncreaseNodesResponse
     */
    public function increaseNodesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->applicationConfigs) {
            @$query['ApplicationConfigs'] = $request->applicationConfigs;
        }

        if (null !== $request->autoPayOrder) {
            @$query['AutoPayOrder'] = $request->autoPayOrder;
        }

        if (null !== $request->autoRenew) {
            @$query['AutoRenew'] = $request->autoRenew;
        }

        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->increaseNodeCount) {
            @$query['IncreaseNodeCount'] = $request->increaseNodeCount;
        }

        if (null !== $request->minIncreaseNodeCount) {
            @$query['MinIncreaseNodeCount'] = $request->minIncreaseNodeCount;
        }

        if (null !== $request->nodeGroupId) {
            @$query['NodeGroupId'] = $request->nodeGroupId;
        }

        if (null !== $request->paymentDuration) {
            @$query['PaymentDuration'] = $request->paymentDuration;
        }

        if (null !== $request->paymentDurationUnit) {
            @$query['PaymentDurationUnit'] = $request->paymentDurationUnit;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'IncreaseNodes',
            'version'     => '2021-03-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return IncreaseNodesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return IncreaseNodesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Scale out the node group.
     *
     * @param request - IncreaseNodesRequest
     * @returns IncreaseNodesResponse
     *
     * @param IncreaseNodesRequest $request
     *
     * @return IncreaseNodesResponse
     */
    public function increaseNodes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->increaseNodesWithOptions($request, $runtime);
    }

    /**
     * Add an EMR resource to the target resource group. A resource can belong to only one resource group.
     *
     * @param request - JoinResourceGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns JoinResourceGroupResponse
     *
     * @param JoinResourceGroupRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return JoinResourceGroupResponse
     */
    public function joinResourceGroupWithOptions($request, $runtime)
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
            'action'      => 'JoinResourceGroup',
            'version'     => '2021-03-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return JoinResourceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return JoinResourceGroupResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Add an EMR resource to the target resource group. A resource can belong to only one resource group.
     *
     * @param request - JoinResourceGroupRequest
     * @returns JoinResourceGroupResponse
     *
     * @param JoinResourceGroupRequest $request
     *
     * @return JoinResourceGroupResponse
     */
    public function joinResourceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->joinResourceGroupWithOptions($request, $runtime);
    }

    /**
     * 查询API模板
     *
     * @param request - ListApiTemplatesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListApiTemplatesResponse
     *
     * @param ListApiTemplatesRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListApiTemplatesResponse
     */
    public function listApiTemplatesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->apiName) {
            @$query['ApiName'] = $request->apiName;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->templateId) {
            @$query['TemplateId'] = $request->templateId;
        }

        if (null !== $request->templateIds) {
            @$query['TemplateIds'] = $request->templateIds;
        }

        if (null !== $request->templateName) {
            @$query['TemplateName'] = $request->templateName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListApiTemplates',
            'version'     => '2021-03-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListApiTemplatesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListApiTemplatesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 查询API模板
     *
     * @param request - ListApiTemplatesRequest
     * @returns ListApiTemplatesResponse
     *
     * @param ListApiTemplatesRequest $request
     *
     * @return ListApiTemplatesResponse
     */
    public function listApiTemplates($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listApiTemplatesWithOptions($request, $runtime);
    }

    /**
     * @remarks
     * 查询应用配置。
     *
     * @param request - ListApplicationConfigsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListApplicationConfigsResponse
     *
     * @param ListApplicationConfigsRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ListApplicationConfigsResponse
     */
    public function listApplicationConfigsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->applicationName) {
            @$query['ApplicationName'] = $request->applicationName;
        }

        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->configFileName) {
            @$query['ConfigFileName'] = $request->configFileName;
        }

        if (null !== $request->configItemKey) {
            @$query['ConfigItemKey'] = $request->configItemKey;
        }

        if (null !== $request->configItemValue) {
            @$query['ConfigItemValue'] = $request->configItemValue;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->nodeGroupId) {
            @$query['NodeGroupId'] = $request->nodeGroupId;
        }

        if (null !== $request->nodeId) {
            @$query['NodeId'] = $request->nodeId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListApplicationConfigs',
            'version'     => '2021-03-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListApplicationConfigsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListApplicationConfigsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @remarks
     * 查询应用配置。
     *
     * @param request - ListApplicationConfigsRequest
     * @returns ListApplicationConfigsResponse
     *
     * @param ListApplicationConfigsRequest $request
     *
     * @return ListApplicationConfigsResponse
     */
    public function listApplicationConfigs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listApplicationConfigsWithOptions($request, $runtime);
    }

    /**
     * @param request - ListApplicationsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListApplicationsResponse
     *
     * @param ListApplicationsRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListApplicationsResponse
     */
    public function listApplicationsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->applicationNames) {
            @$query['ApplicationNames'] = $request->applicationNames;
        }

        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListApplications',
            'version'     => '2021-03-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListApplicationsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListApplicationsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - ListApplicationsRequest
     * @returns ListApplicationsResponse
     *
     * @param ListApplicationsRequest $request
     *
     * @return ListApplicationsResponse
     */
    public function listApplications($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listApplicationsWithOptions($request, $runtime);
    }

    /**
     * 查询弹性伸缩活动列表。
     *
     * @param request - ListAutoScalingActivitiesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListAutoScalingActivitiesResponse
     *
     * @param ListAutoScalingActivitiesRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ListAutoScalingActivitiesResponse
     */
    public function listAutoScalingActivitiesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->nodeGroupId) {
            @$query['NodeGroupId'] = $request->nodeGroupId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->scalingActivityStates) {
            @$query['ScalingActivityStates'] = $request->scalingActivityStates;
        }

        if (null !== $request->scalingActivityType) {
            @$query['ScalingActivityType'] = $request->scalingActivityType;
        }

        if (null !== $request->scalingPolicyType) {
            @$query['ScalingPolicyType'] = $request->scalingPolicyType;
        }

        if (null !== $request->scalingRuleName) {
            @$query['ScalingRuleName'] = $request->scalingRuleName;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListAutoScalingActivities',
            'version'     => '2021-03-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListAutoScalingActivitiesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListAutoScalingActivitiesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 查询弹性伸缩活动列表。
     *
     * @param request - ListAutoScalingActivitiesRequest
     * @returns ListAutoScalingActivitiesResponse
     *
     * @param ListAutoScalingActivitiesRequest $request
     *
     * @return ListAutoScalingActivitiesResponse
     */
    public function listAutoScalingActivities($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAutoScalingActivitiesWithOptions($request, $runtime);
    }

    /**
     * Queries E-MapReduce (EMR) clusters.
     *
     * @param request - ListClustersRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListClustersResponse
     *
     * @param ListClustersRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ListClustersResponse
     */
    public function listClustersWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterIds) {
            @$query['ClusterIds'] = $request->clusterIds;
        }

        if (null !== $request->clusterName) {
            @$query['ClusterName'] = $request->clusterName;
        }

        if (null !== $request->clusterStates) {
            @$query['ClusterStates'] = $request->clusterStates;
        }

        if (null !== $request->clusterTypes) {
            @$query['ClusterTypes'] = $request->clusterTypes;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->paymentTypes) {
            @$query['PaymentTypes'] = $request->paymentTypes;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->tags) {
            @$query['Tags'] = $request->tags;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListClusters',
            'version'     => '2021-03-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListClustersResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListClustersResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries E-MapReduce (EMR) clusters.
     *
     * @param request - ListClustersRequest
     * @returns ListClustersResponse
     *
     * @param ListClustersRequest $request
     *
     * @return ListClustersResponse
     */
    public function listClusters($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listClustersWithOptions($request, $runtime);
    }

    /**
     * @remarks
     * 查询组件实例列表。
     *
     * @param request - ListComponentInstancesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListComponentInstancesResponse
     *
     * @param ListComponentInstancesRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ListComponentInstancesResponse
     */
    public function listComponentInstancesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->applicationNames) {
            @$query['ApplicationNames'] = $request->applicationNames;
        }

        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->componentNames) {
            @$query['ComponentNames'] = $request->componentNames;
        }

        if (null !== $request->componentStates) {
            @$query['ComponentStates'] = $request->componentStates;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->nodeIds) {
            @$query['NodeIds'] = $request->nodeIds;
        }

        if (null !== $request->nodeNames) {
            @$query['NodeNames'] = $request->nodeNames;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListComponentInstances',
            'version'     => '2021-03-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListComponentInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListComponentInstancesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @remarks
     * 查询组件实例列表。
     *
     * @param request - ListComponentInstancesRequest
     * @returns ListComponentInstancesResponse
     *
     * @param ListComponentInstancesRequest $request
     *
     * @return ListComponentInstancesResponse
     */
    public function listComponentInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listComponentInstancesWithOptions($request, $runtime);
    }

    /**
     * @param request - ListComponentsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListComponentsResponse
     *
     * @param ListComponentsRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ListComponentsResponse
     */
    public function listComponentsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->applicationNames) {
            @$query['ApplicationNames'] = $request->applicationNames;
        }

        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->componentNames) {
            @$query['ComponentNames'] = $request->componentNames;
        }

        if (null !== $request->componentStates) {
            @$query['ComponentStates'] = $request->componentStates;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListComponents',
            'version'     => '2021-03-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListComponentsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListComponentsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - ListComponentsRequest
     * @returns ListComponentsResponse
     *
     * @param ListComponentsRequest $request
     *
     * @return ListComponentsResponse
     */
    public function listComponents($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listComponentsWithOptions($request, $runtime);
    }

    /**
     * Obtains the analysis results of multiple jobs on E-MapReduce (EMR) Doctor.
     *
     * @remarks
     * list all doctor analysis apps
     *
     * @param request - ListDoctorApplicationsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListDoctorApplicationsResponse
     *
     * @param ListDoctorApplicationsRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ListDoctorApplicationsResponse
     */
    public function listDoctorApplicationsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appIds) {
            @$query['AppIds'] = $request->appIds;
        }

        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->dateTime) {
            @$query['DateTime'] = $request->dateTime;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->orderBy) {
            @$query['OrderBy'] = $request->orderBy;
        }

        if (null !== $request->orderType) {
            @$query['OrderType'] = $request->orderType;
        }

        if (null !== $request->queues) {
            @$query['Queues'] = $request->queues;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->types) {
            @$query['Types'] = $request->types;
        }

        if (null !== $request->users) {
            @$query['Users'] = $request->users;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListDoctorApplications',
            'version'     => '2021-03-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListDoctorApplicationsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListDoctorApplicationsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Obtains the analysis results of multiple jobs on E-MapReduce (EMR) Doctor.
     *
     * @remarks
     * list all doctor analysis apps
     *
     * @param request - ListDoctorApplicationsRequest
     * @returns ListDoctorApplicationsResponse
     *
     * @param ListDoctorApplicationsRequest $request
     *
     * @return ListDoctorApplicationsResponse
     */
    public function listDoctorApplications($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDoctorApplicationsWithOptions($request, $runtime);
    }

    /**
     * Obtains the information about resource usage by resource type in a cluster on E-MapReduce (EMR) Doctor.
     *
     * @remarks
     * list Doctor analysis result of cluster engine queue view
     *
     * @param request - ListDoctorComputeSummaryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListDoctorComputeSummaryResponse
     *
     * @param ListDoctorComputeSummaryRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ListDoctorComputeSummaryResponse
     */
    public function listDoctorComputeSummaryWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->componentTypes) {
            @$query['ComponentTypes'] = $request->componentTypes;
        }

        if (null !== $request->dateTime) {
            @$query['DateTime'] = $request->dateTime;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->orderBy) {
            @$query['OrderBy'] = $request->orderBy;
        }

        if (null !== $request->orderType) {
            @$query['OrderType'] = $request->orderType;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListDoctorComputeSummary',
            'version'     => '2021-03-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListDoctorComputeSummaryResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListDoctorComputeSummaryResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Obtains the information about resource usage by resource type in a cluster on E-MapReduce (EMR) Doctor.
     *
     * @remarks
     * list Doctor analysis result of cluster engine queue view
     *
     * @param request - ListDoctorComputeSummaryRequest
     * @returns ListDoctorComputeSummaryResponse
     *
     * @param ListDoctorComputeSummaryRequest $request
     *
     * @return ListDoctorComputeSummaryResponse
     */
    public function listDoctorComputeSummary($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDoctorComputeSummaryWithOptions($request, $runtime);
    }

    /**
     * Obtains the information about multiple HBase RegionServers at a time.
     *
     * @remarks
     * list Doctor HBaseRegionServers
     *
     * @param request - ListDoctorHBaseRegionServersRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListDoctorHBaseRegionServersResponse
     *
     * @param ListDoctorHBaseRegionServersRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return ListDoctorHBaseRegionServersResponse
     */
    public function listDoctorHBaseRegionServersWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->dateTime) {
            @$query['DateTime'] = $request->dateTime;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->orderBy) {
            @$query['OrderBy'] = $request->orderBy;
        }

        if (null !== $request->orderType) {
            @$query['OrderType'] = $request->orderType;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->regionServerHosts) {
            @$query['RegionServerHosts'] = $request->regionServerHosts;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListDoctorHBaseRegionServers',
            'version'     => '2021-03-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListDoctorHBaseRegionServersResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListDoctorHBaseRegionServersResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Obtains the information about multiple HBase RegionServers at a time.
     *
     * @remarks
     * list Doctor HBaseRegionServers
     *
     * @param request - ListDoctorHBaseRegionServersRequest
     * @returns ListDoctorHBaseRegionServersResponse
     *
     * @param ListDoctorHBaseRegionServersRequest $request
     *
     * @return ListDoctorHBaseRegionServersResponse
     */
    public function listDoctorHBaseRegionServers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDoctorHBaseRegionServersWithOptions($request, $runtime);
    }

    /**
     * Obtains the information about multiple HBase tables at a time.
     *
     * @remarks
     * list Doctor HBaseTables
     *
     * @param request - ListDoctorHBaseTablesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListDoctorHBaseTablesResponse
     *
     * @param ListDoctorHBaseTablesRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ListDoctorHBaseTablesResponse
     */
    public function listDoctorHBaseTablesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->dateTime) {
            @$query['DateTime'] = $request->dateTime;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->orderBy) {
            @$query['OrderBy'] = $request->orderBy;
        }

        if (null !== $request->orderType) {
            @$query['OrderType'] = $request->orderType;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->tableNames) {
            @$query['TableNames'] = $request->tableNames;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListDoctorHBaseTables',
            'version'     => '2021-03-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListDoctorHBaseTablesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListDoctorHBaseTablesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Obtains the information about multiple HBase tables at a time.
     *
     * @remarks
     * list Doctor HBaseTables
     *
     * @param request - ListDoctorHBaseTablesRequest
     * @returns ListDoctorHBaseTablesResponse
     *
     * @param ListDoctorHBaseTablesRequest $request
     *
     * @return ListDoctorHBaseTablesResponse
     */
    public function listDoctorHBaseTables($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDoctorHBaseTablesWithOptions($request, $runtime);
    }

    /**
     * @remarks
     * list Doctor HDFSNodes
     *
     * @param request - ListDoctorHDFSDirectoriesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListDoctorHDFSDirectoriesResponse
     *
     * @param ListDoctorHDFSDirectoriesRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ListDoctorHDFSDirectoriesResponse
     */
    public function listDoctorHDFSDirectoriesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->dateTime) {
            @$query['DateTime'] = $request->dateTime;
        }

        if (null !== $request->dirPath) {
            @$query['DirPath'] = $request->dirPath;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->orderBy) {
            @$query['OrderBy'] = $request->orderBy;
        }

        if (null !== $request->orderType) {
            @$query['OrderType'] = $request->orderType;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListDoctorHDFSDirectories',
            'version'     => '2021-03-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListDoctorHDFSDirectoriesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListDoctorHDFSDirectoriesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @remarks
     * list Doctor HDFSNodes
     *
     * @param request - ListDoctorHDFSDirectoriesRequest
     * @returns ListDoctorHDFSDirectoriesResponse
     *
     * @param ListDoctorHDFSDirectoriesRequest $request
     *
     * @return ListDoctorHDFSDirectoriesResponse
     */
    public function listDoctorHDFSDirectories($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDoctorHDFSDirectoriesWithOptions($request, $runtime);
    }

    /**
     * Obtains the analysis results of Hadoop Distributed File System (HDFS) storage resources for multiple owners or groups at a time on E-MapReduce (EMR) Doctor.
     *
     * @remarks
     * list Doctor HDFS UGIs
     *
     * @param request - ListDoctorHDFSUGIRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListDoctorHDFSUGIResponse
     *
     * @param ListDoctorHDFSUGIRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ListDoctorHDFSUGIResponse
     */
    public function listDoctorHDFSUGIWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->dateTime) {
            @$query['DateTime'] = $request->dateTime;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->orderBy) {
            @$query['OrderBy'] = $request->orderBy;
        }

        if (null !== $request->orderType) {
            @$query['OrderType'] = $request->orderType;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListDoctorHDFSUGI',
            'version'     => '2021-03-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListDoctorHDFSUGIResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListDoctorHDFSUGIResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Obtains the analysis results of Hadoop Distributed File System (HDFS) storage resources for multiple owners or groups at a time on E-MapReduce (EMR) Doctor.
     *
     * @remarks
     * list Doctor HDFS UGIs
     *
     * @param request - ListDoctorHDFSUGIRequest
     * @returns ListDoctorHDFSUGIResponse
     *
     * @param ListDoctorHDFSUGIRequest $request
     *
     * @return ListDoctorHDFSUGIResponse
     */
    public function listDoctorHDFSUGI($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDoctorHDFSUGIWithOptions($request, $runtime);
    }

    /**
     * Obtains the analysis results of multiple Hive databases at a time.
     *
     * @remarks
     * list Doctor Hive Databases
     *
     * @param request - ListDoctorHiveDatabasesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListDoctorHiveDatabasesResponse
     *
     * @param ListDoctorHiveDatabasesRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ListDoctorHiveDatabasesResponse
     */
    public function listDoctorHiveDatabasesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->databaseNames) {
            @$query['DatabaseNames'] = $request->databaseNames;
        }

        if (null !== $request->dateTime) {
            @$query['DateTime'] = $request->dateTime;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->orderBy) {
            @$query['OrderBy'] = $request->orderBy;
        }

        if (null !== $request->orderType) {
            @$query['OrderType'] = $request->orderType;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListDoctorHiveDatabases',
            'version'     => '2021-03-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListDoctorHiveDatabasesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListDoctorHiveDatabasesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Obtains the analysis results of multiple Hive databases at a time.
     *
     * @remarks
     * list Doctor Hive Databases
     *
     * @param request - ListDoctorHiveDatabasesRequest
     * @returns ListDoctorHiveDatabasesResponse
     *
     * @param ListDoctorHiveDatabasesRequest $request
     *
     * @return ListDoctorHiveDatabasesResponse
     */
    public function listDoctorHiveDatabases($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDoctorHiveDatabasesWithOptions($request, $runtime);
    }

    /**
     * Obtains the analysis results of multiple Hive tables at a time on E-MapReduce (EMR) Doctor.
     *
     * @remarks
     * list Doctor Hive Tables
     *
     * @param request - ListDoctorHiveTablesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListDoctorHiveTablesResponse
     *
     * @param ListDoctorHiveTablesRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ListDoctorHiveTablesResponse
     */
    public function listDoctorHiveTablesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->dateTime) {
            @$query['DateTime'] = $request->dateTime;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->orderBy) {
            @$query['OrderBy'] = $request->orderBy;
        }

        if (null !== $request->orderType) {
            @$query['OrderType'] = $request->orderType;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->tableNames) {
            @$query['TableNames'] = $request->tableNames;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListDoctorHiveTables',
            'version'     => '2021-03-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListDoctorHiveTablesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListDoctorHiveTablesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Obtains the analysis results of multiple Hive tables at a time on E-MapReduce (EMR) Doctor.
     *
     * @remarks
     * list Doctor Hive Tables
     *
     * @param request - ListDoctorHiveTablesRequest
     * @returns ListDoctorHiveTablesResponse
     *
     * @param ListDoctorHiveTablesRequest $request
     *
     * @return ListDoctorHiveTablesResponse
     */
    public function listDoctorHiveTables($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDoctorHiveTablesWithOptions($request, $runtime);
    }

    /**
     * Obtains the basic running information about multiple jobs at a time on E-MapReduce (EMR) Doctor.
     *
     * @remarks
     * list realtime jobs by yarn
     *
     * @param request - ListDoctorJobsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListDoctorJobsResponse
     *
     * @param ListDoctorJobsRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ListDoctorJobsResponse
     */
    public function listDoctorJobsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appIds) {
            @$query['AppIds'] = $request->appIds;
        }

        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->endRange) {
            @$query['EndRange'] = $request->endRange;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->orderBy) {
            @$query['OrderBy'] = $request->orderBy;
        }

        if (null !== $request->orderType) {
            @$query['OrderType'] = $request->orderType;
        }

        if (null !== $request->queues) {
            @$query['Queues'] = $request->queues;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->startRange) {
            @$query['StartRange'] = $request->startRange;
        }

        if (null !== $request->types) {
            @$query['Types'] = $request->types;
        }

        if (null !== $request->users) {
            @$query['Users'] = $request->users;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListDoctorJobs',
            'version'     => '2021-03-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListDoctorJobsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListDoctorJobsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Obtains the basic running information about multiple jobs at a time on E-MapReduce (EMR) Doctor.
     *
     * @remarks
     * list realtime jobs by yarn
     *
     * @param request - ListDoctorJobsRequest
     * @returns ListDoctorJobsResponse
     *
     * @param ListDoctorJobsRequest $request
     *
     * @return ListDoctorJobsResponse
     */
    public function listDoctorJobs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDoctorJobsWithOptions($request, $runtime);
    }

    /**
     * Obtains the summary of basic running information about multiple jobs at a time on E-MapReduce (EMR) Doctor.
     *
     * @remarks
     * list stats groupBy jobs by yarn
     *
     * @param request - ListDoctorJobsStatsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListDoctorJobsStatsResponse
     *
     * @param ListDoctorJobsStatsRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ListDoctorJobsStatsResponse
     */
    public function listDoctorJobsStatsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->endRange) {
            @$query['EndRange'] = $request->endRange;
        }

        if (null !== $request->groupBy) {
            @$query['GroupBy'] = $request->groupBy;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->orderBy) {
            @$query['OrderBy'] = $request->orderBy;
        }

        if (null !== $request->orderType) {
            @$query['OrderType'] = $request->orderType;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->startRange) {
            @$query['StartRange'] = $request->startRange;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListDoctorJobsStats',
            'version'     => '2021-03-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListDoctorJobsStatsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListDoctorJobsStatsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Obtains the summary of basic running information about multiple jobs at a time on E-MapReduce (EMR) Doctor.
     *
     * @remarks
     * list stats groupBy jobs by yarn
     *
     * @param request - ListDoctorJobsStatsRequest
     * @returns ListDoctorJobsStatsResponse
     *
     * @param ListDoctorJobsStatsRequest $request
     *
     * @return ListDoctorJobsStatsResponse
     */
    public function listDoctorJobsStats($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDoctorJobsStatsWithOptions($request, $runtime);
    }

    /**
     * Obtains the overall analysis result reports of E-MapReduce (EMR) Doctor at a time.
     *
     * @remarks
     * list all reports analysis by emr doctor
     *
     * @param request - ListDoctorReportsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListDoctorReportsResponse
     *
     * @param ListDoctorReportsRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ListDoctorReportsResponse
     */
    public function listDoctorReportsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListDoctorReports',
            'version'     => '2021-03-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListDoctorReportsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListDoctorReportsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Obtains the overall analysis result reports of E-MapReduce (EMR) Doctor at a time.
     *
     * @remarks
     * list all reports analysis by emr doctor
     *
     * @param request - ListDoctorReportsRequest
     * @returns ListDoctorReportsResponse
     *
     * @param ListDoctorReportsRequest $request
     *
     * @return ListDoctorReportsResponse
     */
    public function listDoctorReports($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDoctorReportsWithOptions($request, $runtime);
    }

    /**
     * Lists instance types.
     *
     * @param request - ListInstanceTypesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListInstanceTypesResponse
     *
     * @param ListInstanceTypesRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ListInstanceTypesResponse
     */
    public function listInstanceTypesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->clusterType) {
            @$query['ClusterType'] = $request->clusterType;
        }

        if (null !== $request->deployMode) {
            @$query['DeployMode'] = $request->deployMode;
        }

        if (null !== $request->instanceType) {
            @$query['InstanceType'] = $request->instanceType;
        }

        if (null !== $request->isModification) {
            @$query['IsModification'] = $request->isModification;
        }

        if (null !== $request->nodeGroupId) {
            @$query['NodeGroupId'] = $request->nodeGroupId;
        }

        if (null !== $request->nodeGroupType) {
            @$query['NodeGroupType'] = $request->nodeGroupType;
        }

        if (null !== $request->paymentType) {
            @$query['PaymentType'] = $request->paymentType;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->releaseVersion) {
            @$query['ReleaseVersion'] = $request->releaseVersion;
        }

        if (null !== $request->zoneId) {
            @$query['ZoneId'] = $request->zoneId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListInstanceTypes',
            'version'     => '2021-03-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListInstanceTypesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListInstanceTypesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Lists instance types.
     *
     * @param request - ListInstanceTypesRequest
     * @returns ListInstanceTypesResponse
     *
     * @param ListInstanceTypesRequest $request
     *
     * @return ListInstanceTypesResponse
     */
    public function listInstanceTypes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listInstanceTypesWithOptions($request, $runtime);
    }

    /**
     * Queries the list of node groups in an EMR cluster.
     *
     * @param request - ListNodeGroupsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListNodeGroupsResponse
     *
     * @param ListNodeGroupsRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ListNodeGroupsResponse
     */
    public function listNodeGroupsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->nodeGroupIds) {
            @$query['NodeGroupIds'] = $request->nodeGroupIds;
        }

        if (null !== $request->nodeGroupNames) {
            @$query['NodeGroupNames'] = $request->nodeGroupNames;
        }

        if (null !== $request->nodeGroupStates) {
            @$query['NodeGroupStates'] = $request->nodeGroupStates;
        }

        if (null !== $request->nodeGroupTypes) {
            @$query['NodeGroupTypes'] = $request->nodeGroupTypes;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListNodeGroups',
            'version'     => '2021-03-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListNodeGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListNodeGroupsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the list of node groups in an EMR cluster.
     *
     * @param request - ListNodeGroupsRequest
     * @returns ListNodeGroupsResponse
     *
     * @param ListNodeGroupsRequest $request
     *
     * @return ListNodeGroupsResponse
     */
    public function listNodeGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listNodeGroupsWithOptions($request, $runtime);
    }

    /**
     * Queries the node list of an EMR cluster.
     *
     * @param request - ListNodesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListNodesResponse
     *
     * @param ListNodesRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return ListNodesResponse
     */
    public function listNodesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->nodeGroupIds) {
            @$query['NodeGroupIds'] = $request->nodeGroupIds;
        }

        if (null !== $request->nodeIds) {
            @$query['NodeIds'] = $request->nodeIds;
        }

        if (null !== $request->nodeNames) {
            @$query['NodeNames'] = $request->nodeNames;
        }

        if (null !== $request->nodeStates) {
            @$query['NodeStates'] = $request->nodeStates;
        }

        if (null !== $request->privateIps) {
            @$query['PrivateIps'] = $request->privateIps;
        }

        if (null !== $request->publicIps) {
            @$query['PublicIps'] = $request->publicIps;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->tags) {
            @$query['Tags'] = $request->tags;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListNodes',
            'version'     => '2021-03-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListNodesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListNodesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the node list of an EMR cluster.
     *
     * @param request - ListNodesRequest
     * @returns ListNodesResponse
     *
     * @param ListNodesRequest $request
     *
     * @return ListNodesResponse
     */
    public function listNodes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listNodesWithOptions($request, $runtime);
    }

    /**
     * Queries the major E-MapReduce (EMR) versions.
     *
     * @remarks
     * 查询主版本。
     *
     * @param request - ListReleaseVersionsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListReleaseVersionsResponse
     *
     * @param ListReleaseVersionsRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ListReleaseVersionsResponse
     */
    public function listReleaseVersionsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterType) {
            @$query['ClusterType'] = $request->clusterType;
        }

        if (null !== $request->iaasType) {
            @$query['IaasType'] = $request->iaasType;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListReleaseVersions',
            'version'     => '2021-03-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListReleaseVersionsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListReleaseVersionsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the major E-MapReduce (EMR) versions.
     *
     * @remarks
     * 查询主版本。
     *
     * @param request - ListReleaseVersionsRequest
     * @returns ListReleaseVersionsResponse
     *
     * @param ListReleaseVersionsRequest $request
     *
     * @return ListReleaseVersionsResponse
     */
    public function listReleaseVersions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listReleaseVersionsWithOptions($request, $runtime);
    }

    /**
     * Query EMR cluster bootstrap scripts or regular scripts.
     *
     * @param request - ListScriptsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListScriptsResponse
     *
     * @param ListScriptsRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ListScriptsResponse
     */
    public function listScriptsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->scriptId) {
            @$query['ScriptId'] = $request->scriptId;
        }

        if (null !== $request->scriptName) {
            @$query['ScriptName'] = $request->scriptName;
        }

        if (null !== $request->scriptType) {
            @$query['ScriptType'] = $request->scriptType;
        }

        if (null !== $request->statuses) {
            @$query['Statuses'] = $request->statuses;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListScripts',
            'version'     => '2021-03-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListScriptsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListScriptsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Query EMR cluster bootstrap scripts or regular scripts.
     *
     * @param request - ListScriptsRequest
     * @returns ListScriptsResponse
     *
     * @param ListScriptsRequest $request
     *
     * @return ListScriptsResponse
     */
    public function listScripts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listScriptsWithOptions($request, $runtime);
    }

    /**
     * Queries the tags that are bound to an EMR cluster.
     *
     * @param request - ListTagResourcesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListTagResourcesResponse
     *
     * @param ListTagResourcesRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListTagResourcesResponse
     */
    public function listTagResourcesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceIds) {
            @$query['ResourceIds'] = $request->resourceIds;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->tags) {
            @$query['Tags'] = $request->tags;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListTagResources',
            'version'     => '2021-03-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListTagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListTagResourcesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the tags that are bound to an EMR cluster.
     *
     * @param request - ListTagResourcesRequest
     * @returns ListTagResourcesResponse
     *
     * @param ListTagResourcesRequest $request
     *
     * @return ListTagResourcesResponse
     */
    public function listTagResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTagResourcesWithOptions($request, $runtime);
    }

    /**
     * @param request - ListUsersRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListUsersResponse
     *
     * @param ListUsersRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return ListUsersResponse
     */
    public function listUsersWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->userName) {
            @$query['UserName'] = $request->userName;
        }

        if (null !== $request->userNames) {
            @$query['UserNames'] = $request->userNames;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListUsers',
            'version'     => '2021-03-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListUsersResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListUsersResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - ListUsersRequest
     * @returns ListUsersResponse
     *
     * @param ListUsersRequest $request
     *
     * @return ListUsersResponse
     */
    public function listUsers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listUsersWithOptions($request, $runtime);
    }

    /**
     * Configures auto scaling rules.
     *
     * @remarks
     * You can call this operation to configure auto scaling policies.
     *
     * @param request - PutAutoScalingPolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns PutAutoScalingPolicyResponse
     *
     * @param PutAutoScalingPolicyRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return PutAutoScalingPolicyResponse
     */
    public function putAutoScalingPolicyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->constraints) {
            @$query['Constraints'] = $request->constraints;
        }

        if (null !== $request->nodeGroupId) {
            @$query['NodeGroupId'] = $request->nodeGroupId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->scalingRules) {
            @$query['ScalingRules'] = $request->scalingRules;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'PutAutoScalingPolicy',
            'version'     => '2021-03-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return PutAutoScalingPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return PutAutoScalingPolicyResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Configures auto scaling rules.
     *
     * @remarks
     * You can call this operation to configure auto scaling policies.
     *
     * @param request - PutAutoScalingPolicyRequest
     * @returns PutAutoScalingPolicyResponse
     *
     * @param PutAutoScalingPolicyRequest $request
     *
     * @return PutAutoScalingPolicyResponse
     */
    public function putAutoScalingPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->putAutoScalingPolicyWithOptions($request, $runtime);
    }

    /**
     * @param request - RemoveAutoScalingPolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns RemoveAutoScalingPolicyResponse
     *
     * @param RemoveAutoScalingPolicyRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return RemoveAutoScalingPolicyResponse
     */
    public function removeAutoScalingPolicyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->nodeGroupId) {
            @$query['NodeGroupId'] = $request->nodeGroupId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'RemoveAutoScalingPolicy',
            'version'     => '2021-03-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return RemoveAutoScalingPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return RemoveAutoScalingPolicyResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - RemoveAutoScalingPolicyRequest
     * @returns RemoveAutoScalingPolicyResponse
     *
     * @param RemoveAutoScalingPolicyRequest $request
     *
     * @return RemoveAutoScalingPolicyResponse
     */
    public function removeAutoScalingPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeAutoScalingPolicyWithOptions($request, $runtime);
    }

    /**
     * @param request - RunApiTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns RunApiTemplateResponse
     *
     * @param RunApiTemplateRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return RunApiTemplateResponse
     */
    public function runApiTemplateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->apiName) {
            @$query['ApiName'] = $request->apiName;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->templateId) {
            @$query['TemplateId'] = $request->templateId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'RunApiTemplate',
            'version'     => '2021-03-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return RunApiTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return RunApiTemplateResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - RunApiTemplateRequest
     * @returns RunApiTemplateResponse
     *
     * @param RunApiTemplateRequest $request
     *
     * @return RunApiTemplateResponse
     */
    public function runApiTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->runApiTemplateWithOptions($request, $runtime);
    }

    /**
     * Manages a service deployed in a cluster. For example, you can call this operation to start pr stop a service.
     *
     * @param request - RunApplicationActionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns RunApplicationActionResponse
     *
     * @param RunApplicationActionRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return RunApplicationActionResponse
     */
    public function runApplicationActionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->actionName) {
            @$query['ActionName'] = $request->actionName;
        }

        if (null !== $request->batchSize) {
            @$query['BatchSize'] = $request->batchSize;
        }

        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->componentInstanceSelector) {
            @$query['ComponentInstanceSelector'] = $request->componentInstanceSelector;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->executeStrategy) {
            @$query['ExecuteStrategy'] = $request->executeStrategy;
        }

        if (null !== $request->interval) {
            @$query['Interval'] = $request->interval;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->rollingExecute) {
            @$query['RollingExecute'] = $request->rollingExecute;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'RunApplicationAction',
            'version'     => '2021-03-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return RunApplicationActionResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return RunApplicationActionResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Manages a service deployed in a cluster. For example, you can call this operation to start pr stop a service.
     *
     * @param request - RunApplicationActionRequest
     * @returns RunApplicationActionResponse
     *
     * @param RunApplicationActionRequest $request
     *
     * @return RunApplicationActionResponse
     */
    public function runApplicationAction($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->runApplicationActionWithOptions($request, $runtime);
    }

    /**
     * Creates a pay-as-you-go or subscription E-MapReduce (EMR) cluster.
     *
     * @remarks
     * RunCluster is an upgraded version of CreateCluster. RunCluster uses HTTPS POST requests and supports more parameters. Complex parameters, such as parameters of the object and array types, are in the JSON format and are more friendly for users who use CLI.
     *
     * @param tmpReq - RunClusterRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns RunClusterResponse
     *
     * @param RunClusterRequest $tmpReq
     * @param RuntimeOptions    $runtime
     *
     * @return RunClusterResponse
     */
    public function runClusterWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new RunClusterShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->applicationConfigs) {
            $request->applicationConfigsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->applicationConfigs, 'ApplicationConfigs', 'json');
        }

        if (null !== $tmpReq->applications) {
            $request->applicationsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->applications, 'Applications', 'json');
        }

        if (null !== $tmpReq->bootstrapScripts) {
            $request->bootstrapScriptsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->bootstrapScripts, 'BootstrapScripts', 'json');
        }

        if (null !== $tmpReq->nodeAttributes) {
            $request->nodeAttributesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->nodeAttributes, 'NodeAttributes', 'json');
        }

        if (null !== $tmpReq->nodeGroups) {
            $request->nodeGroupsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->nodeGroups, 'NodeGroups', 'json');
        }

        if (null !== $tmpReq->subscriptionConfig) {
            $request->subscriptionConfigShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->subscriptionConfig, 'SubscriptionConfig', 'json');
        }

        if (null !== $tmpReq->tags) {
            $request->tagsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tags, 'Tags', 'json');
        }

        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $body = [];
        if (null !== $request->applicationConfigsShrink) {
            @$body['ApplicationConfigs'] = $request->applicationConfigsShrink;
        }

        if (null !== $request->applicationsShrink) {
            @$body['Applications'] = $request->applicationsShrink;
        }

        if (null !== $request->bootstrapScriptsShrink) {
            @$body['BootstrapScripts'] = $request->bootstrapScriptsShrink;
        }

        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->clusterName) {
            @$body['ClusterName'] = $request->clusterName;
        }

        if (null !== $request->clusterType) {
            @$body['ClusterType'] = $request->clusterType;
        }

        if (null !== $request->deletionProtection) {
            @$body['DeletionProtection'] = $request->deletionProtection;
        }

        if (null !== $request->deployMode) {
            @$body['DeployMode'] = $request->deployMode;
        }

        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->nodeAttributesShrink) {
            @$body['NodeAttributes'] = $request->nodeAttributesShrink;
        }

        if (null !== $request->nodeGroupsShrink) {
            @$body['NodeGroups'] = $request->nodeGroupsShrink;
        }

        if (null !== $request->paymentType) {
            @$body['PaymentType'] = $request->paymentType;
        }

        if (null !== $request->releaseVersion) {
            @$body['ReleaseVersion'] = $request->releaseVersion;
        }

        if (null !== $request->resourceGroupId) {
            @$body['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->securityMode) {
            @$body['SecurityMode'] = $request->securityMode;
        }

        if (null !== $request->subscriptionConfigShrink) {
            @$body['SubscriptionConfig'] = $request->subscriptionConfigShrink;
        }

        if (null !== $request->tagsShrink) {
            @$body['Tags'] = $request->tagsShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body'  => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'RunCluster',
            'version'     => '2021-03-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return RunClusterResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return RunClusterResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Creates a pay-as-you-go or subscription E-MapReduce (EMR) cluster.
     *
     * @remarks
     * RunCluster is an upgraded version of CreateCluster. RunCluster uses HTTPS POST requests and supports more parameters. Complex parameters, such as parameters of the object and array types, are in the JSON format and are more friendly for users who use CLI.
     *
     * @param request - RunClusterRequest
     * @returns RunClusterResponse
     *
     * @param RunClusterRequest $request
     *
     * @return RunClusterResponse
     */
    public function runCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->runClusterWithOptions($request, $runtime);
    }

    /**
     * Bind tags to a specified EMR cluster.
     *
     * @param request - TagResourcesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns TagResourcesResponse
     *
     * @param TagResourcesRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return TagResourcesResponse
     */
    public function tagResourcesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceIds) {
            @$query['ResourceIds'] = $request->resourceIds;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->tags) {
            @$query['Tags'] = $request->tags;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'TagResources',
            'version'     => '2021-03-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return TagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return TagResourcesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Bind tags to a specified EMR cluster.
     *
     * @param request - TagResourcesRequest
     * @returns TagResourcesResponse
     *
     * @param TagResourcesRequest $request
     *
     * @return TagResourcesResponse
     */
    public function tagResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->tagResourcesWithOptions($request, $runtime);
    }

    /**
     * Unbinds tags from a specified column in an EMR cluster. If the tag is not bound to other resources, the tag is automatically deleted.
     *
     * @param request - UntagResourcesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns UntagResourcesResponse
     *
     * @param UntagResourcesRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return UntagResourcesResponse
     */
    public function untagResourcesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->all) {
            @$query['All'] = $request->all;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceIds) {
            @$query['ResourceIds'] = $request->resourceIds;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->tagKeys) {
            @$query['TagKeys'] = $request->tagKeys;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'UntagResources',
            'version'     => '2021-03-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UntagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UntagResourcesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Unbinds tags from a specified column in an EMR cluster. If the tag is not bound to other resources, the tag is automatically deleted.
     *
     * @param request - UntagResourcesRequest
     * @returns UntagResourcesResponse
     *
     * @param UntagResourcesRequest $request
     *
     * @return UntagResourcesResponse
     */
    public function untagResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->untagResourcesWithOptions($request, $runtime);
    }

    /**
     * Updates an API operation template.
     *
     * @remarks
     * 修改集群模板
     *
     * @param request - UpdateApiTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns UpdateApiTemplateResponse
     *
     * @param UpdateApiTemplateRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return UpdateApiTemplateResponse
     */
    public function updateApiTemplateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->apiName) {
            @$query['ApiName'] = $request->apiName;
        }

        if (null !== $request->content) {
            @$query['Content'] = $request->content;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->templateId) {
            @$query['TemplateId'] = $request->templateId;
        }

        if (null !== $request->templateName) {
            @$query['TemplateName'] = $request->templateName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateApiTemplate',
            'version'     => '2021-03-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateApiTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateApiTemplateResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Updates an API operation template.
     *
     * @remarks
     * 修改集群模板
     *
     * @param request - UpdateApiTemplateRequest
     * @returns UpdateApiTemplateResponse
     *
     * @param UpdateApiTemplateRequest $request
     *
     * @return UpdateApiTemplateResponse
     */
    public function updateApiTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateApiTemplateWithOptions($request, $runtime);
    }

    /**
     * @param request - UpdateApplicationConfigsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns UpdateApplicationConfigsResponse
     *
     * @param UpdateApplicationConfigsRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return UpdateApplicationConfigsResponse
     */
    public function updateApplicationConfigsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->applicationName) {
            @$query['ApplicationName'] = $request->applicationName;
        }

        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->configAction) {
            @$query['ConfigAction'] = $request->configAction;
        }

        if (null !== $request->configScope) {
            @$query['ConfigScope'] = $request->configScope;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->nodeGroupId) {
            @$query['NodeGroupId'] = $request->nodeGroupId;
        }

        if (null !== $request->nodeId) {
            @$query['NodeId'] = $request->nodeId;
        }

        if (null !== $request->refreshConfig) {
            @$query['RefreshConfig'] = $request->refreshConfig;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $body     = [];
        $bodyFlat = [];
        if (null !== $request->applicationConfigs) {
            @$bodyFlat['ApplicationConfigs'] = $request->applicationConfigs;
        }

        $body = Dara::merge([
        ], $body, Utils::query($bodyFlat));
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body'  => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateApplicationConfigs',
            'version'     => '2021-03-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateApplicationConfigsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateApplicationConfigsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - UpdateApplicationConfigsRequest
     * @returns UpdateApplicationConfigsResponse
     *
     * @param UpdateApplicationConfigsRequest $request
     *
     * @return UpdateApplicationConfigsResponse
     */
    public function updateApplicationConfigs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateApplicationConfigsWithOptions($request, $runtime);
    }

    /**
     * Update cluster attributes.
     *
     * @param request - UpdateClusterAttributeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns UpdateClusterAttributeResponse
     *
     * @param UpdateClusterAttributeRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return UpdateClusterAttributeResponse
     */
    public function updateClusterAttributeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->clusterName) {
            @$query['ClusterName'] = $request->clusterName;
        }

        if (null !== $request->deletionProtection) {
            @$query['DeletionProtection'] = $request->deletionProtection;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateClusterAttribute',
            'version'     => '2021-03-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateClusterAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateClusterAttributeResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Update cluster attributes.
     *
     * @param request - UpdateClusterAttributeRequest
     * @returns UpdateClusterAttributeResponse
     *
     * @param UpdateClusterAttributeRequest $request
     *
     * @return UpdateClusterAttributeResponse
     */
    public function updateClusterAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateClusterAttributeWithOptions($request, $runtime);
    }

    /**
     * Updates a bootstrap action or a common script of an E-MapReduce (EMR) cluster.
     *
     * @param tmpReq - UpdateScriptRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns UpdateScriptResponse
     *
     * @param UpdateScriptRequest $tmpReq
     * @param RuntimeOptions      $runtime
     *
     * @return UpdateScriptResponse
     */
    public function updateScriptWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateScriptShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->script) {
            $request->scriptShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->script, 'Script', 'json');
        }

        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->scriptShrink) {
            @$query['Script'] = $request->scriptShrink;
        }

        if (null !== $request->scriptId) {
            @$query['ScriptId'] = $request->scriptId;
        }

        if (null !== $request->scriptType) {
            @$query['ScriptType'] = $request->scriptType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateScript',
            'version'     => '2021-03-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateScriptResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateScriptResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Updates a bootstrap action or a common script of an E-MapReduce (EMR) cluster.
     *
     * @param request - UpdateScriptRequest
     * @returns UpdateScriptResponse
     *
     * @param UpdateScriptRequest $request
     *
     * @return UpdateScriptResponse
     */
    public function updateScript($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateScriptWithOptions($request, $runtime);
    }

    /**
     * @param request - UpdateUserAttributeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns UpdateUserAttributeResponse
     *
     * @param UpdateUserAttributeRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return UpdateUserAttributeResponse
     */
    public function updateUserAttributeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->password) {
            @$query['Password'] = $request->password;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->userId) {
            @$query['UserId'] = $request->userId;
        }

        if (null !== $request->userName) {
            @$query['UserName'] = $request->userName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateUserAttribute',
            'version'     => '2021-03-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateUserAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateUserAttributeResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - UpdateUserAttributeRequest
     * @returns UpdateUserAttributeResponse
     *
     * @param UpdateUserAttributeRequest $request
     *
     * @return UpdateUserAttributeResponse
     */
    public function updateUserAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateUserAttributeWithOptions($request, $runtime);
    }
}
