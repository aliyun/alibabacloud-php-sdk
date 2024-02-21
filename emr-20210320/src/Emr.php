<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Emr\V20210320\Models\CreateClusterRequest;
use AlibabaCloud\SDK\Emr\V20210320\Models\CreateClusterResponse;
use AlibabaCloud\SDK\Emr\V20210320\Models\CreateNodeGroupRequest;
use AlibabaCloud\SDK\Emr\V20210320\Models\CreateNodeGroupResponse;
use AlibabaCloud\SDK\Emr\V20210320\Models\DecreaseNodesRequest;
use AlibabaCloud\SDK\Emr\V20210320\Models\DecreaseNodesResponse;
use AlibabaCloud\SDK\Emr\V20210320\Models\DeleteClusterRequest;
use AlibabaCloud\SDK\Emr\V20210320\Models\DeleteClusterResponse;
use AlibabaCloud\SDK\Emr\V20210320\Models\GetApmDataRequest;
use AlibabaCloud\SDK\Emr\V20210320\Models\GetApmDataResponse;
use AlibabaCloud\SDK\Emr\V20210320\Models\GetApplicationRequest;
use AlibabaCloud\SDK\Emr\V20210320\Models\GetApplicationResponse;
use AlibabaCloud\SDK\Emr\V20210320\Models\GetAutoScalingActivityRequest;
use AlibabaCloud\SDK\Emr\V20210320\Models\GetAutoScalingActivityResponse;
use AlibabaCloud\SDK\Emr\V20210320\Models\GetAutoScalingPolicyRequest;
use AlibabaCloud\SDK\Emr\V20210320\Models\GetAutoScalingPolicyResponse;
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
use AlibabaCloud\SDK\Emr\V20210320\Models\ListApmMetadataRequest;
use AlibabaCloud\SDK\Emr\V20210320\Models\ListApmMetadataResponse;
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
use AlibabaCloud\SDK\Emr\V20210320\Models\ListTagResourcesRequest;
use AlibabaCloud\SDK\Emr\V20210320\Models\ListTagResourcesResponse;
use AlibabaCloud\SDK\Emr\V20210320\Models\PutAutoScalingPolicyRequest;
use AlibabaCloud\SDK\Emr\V20210320\Models\PutAutoScalingPolicyResponse;
use AlibabaCloud\SDK\Emr\V20210320\Models\QueryApmComponentsRequest;
use AlibabaCloud\SDK\Emr\V20210320\Models\QueryApmComponentsResponse;
use AlibabaCloud\SDK\Emr\V20210320\Models\QueryApmGrafanaDataRequest;
use AlibabaCloud\SDK\Emr\V20210320\Models\QueryApmGrafanaDataResponse;
use AlibabaCloud\SDK\Emr\V20210320\Models\QueryApmGrafanaDataShrinkRequest;
use AlibabaCloud\SDK\Emr\V20210320\Models\RemoveAutoScalingPolicyRequest;
use AlibabaCloud\SDK\Emr\V20210320\Models\RemoveAutoScalingPolicyResponse;
use AlibabaCloud\SDK\Emr\V20210320\Models\RunApplicationActionRequest;
use AlibabaCloud\SDK\Emr\V20210320\Models\RunApplicationActionResponse;
use AlibabaCloud\SDK\Emr\V20210320\Models\TagResourcesRequest;
use AlibabaCloud\SDK\Emr\V20210320\Models\TagResourcesResponse;
use AlibabaCloud\SDK\Emr\V20210320\Models\UntagResourcesRequest;
use AlibabaCloud\SDK\Emr\V20210320\Models\UntagResourcesResponse;
use AlibabaCloud\SDK\Emr\V20210320\Models\UpdateApplicationConfigsRequest;
use AlibabaCloud\SDK\Emr\V20210320\Models\UpdateApplicationConfigsResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Emr extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap  = [
            'cn-beijing'            => 'emr.aliyuncs.com',
            'cn-hangzhou'           => 'emr.aliyuncs.com',
            'cn-shanghai'           => 'emr.aliyuncs.com',
            'cn-shenzhen'           => 'emr.aliyuncs.com',
            'ap-southeast-1'        => 'emr.aliyuncs.com',
            'us-west-1'             => 'emr.aliyuncs.com',
            'cn-hangzhou-finance'   => 'emr.aliyuncs.com',
            'cn-shenzhen-finance-1' => 'emr.aliyuncs.com',
            'cn-shanghai-finance-1' => 'emr.aliyuncs.com',
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
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_(@$endpointMap[$regionId])) {
            return @$endpointMap[$regionId];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * @param CreateClusterRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return CreateClusterResponse
     */
    public function createClusterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->applicationConfigs)) {
            $query['ApplicationConfigs'] = $request->applicationConfigs;
        }
        if (!Utils::isUnset($request->applications)) {
            $query['Applications'] = $request->applications;
        }
        if (!Utils::isUnset($request->bootstrapScripts)) {
            $query['BootstrapScripts'] = $request->bootstrapScripts;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->clusterName)) {
            $query['ClusterName'] = $request->clusterName;
        }
        if (!Utils::isUnset($request->clusterType)) {
            $query['ClusterType'] = $request->clusterType;
        }
        if (!Utils::isUnset($request->deployMode)) {
            $query['DeployMode'] = $request->deployMode;
        }
        if (!Utils::isUnset($request->nodeAttributes)) {
            $query['NodeAttributes'] = $request->nodeAttributes;
        }
        if (!Utils::isUnset($request->nodeGroups)) {
            $query['NodeGroups'] = $request->nodeGroups;
        }
        if (!Utils::isUnset($request->paymentType)) {
            $query['PaymentType'] = $request->paymentType;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->releaseVersion)) {
            $query['ReleaseVersion'] = $request->releaseVersion;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->securityMode)) {
            $query['SecurityMode'] = $request->securityMode;
        }
        if (!Utils::isUnset($request->subscriptionConfig)) {
            $query['SubscriptionConfig'] = $request->subscriptionConfig;
        }
        if (!Utils::isUnset($request->tags)) {
            $query['Tags'] = $request->tags;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return CreateClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * 创建节点组。
     *   *
     * @param CreateNodeGroupRequest $request CreateNodeGroupRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateNodeGroupResponse CreateNodeGroupResponse
     */
    public function createNodeGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->nodeGroup)) {
            $query['NodeGroup'] = $request->nodeGroup;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return CreateNodeGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建节点组。
     *   *
     * @param CreateNodeGroupRequest $request CreateNodeGroupRequest
     *
     * @return CreateNodeGroupResponse CreateNodeGroupResponse
     */
    public function createNodeGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createNodeGroupWithOptions($request, $runtime);
    }

    /**
     * 缩容节点。
     *   *
     * @param DecreaseNodesRequest $request DecreaseNodesRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return DecreaseNodesResponse DecreaseNodesResponse
     */
    public function decreaseNodesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->decreaseNodeCount)) {
            $query['DecreaseNodeCount'] = $request->decreaseNodeCount;
        }
        if (!Utils::isUnset($request->nodeGroupId)) {
            $query['NodeGroupId'] = $request->nodeGroupId;
        }
        if (!Utils::isUnset($request->nodeIds)) {
            $query['NodeIds'] = $request->nodeIds;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return DecreaseNodesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 缩容节点。
     *   *
     * @param DecreaseNodesRequest $request DecreaseNodesRequest
     *
     * @return DecreaseNodesResponse DecreaseNodesResponse
     */
    public function decreaseNodes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->decreaseNodesWithOptions($request, $runtime);
    }

    /**
     * @param DeleteClusterRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteClusterResponse
     */
    public function deleteClusterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return DeleteClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param GetApmDataRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return GetApmDataResponse
     */
    public function getApmDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->componentName)) {
            $query['ComponentName'] = $request->componentName;
        }
        if (!Utils::isUnset($request->language)) {
            $query['Language'] = $request->language;
        }
        if (!Utils::isUnset($request->provider)) {
            $query['Provider'] = $request->provider;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetApmData',
            'version'     => '2021-03-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetApmDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetApmDataRequest $request
     *
     * @return GetApmDataResponse
     */
    public function getApmData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getApmDataWithOptions($request, $runtime);
    }

    /**
     * 查询应用详情。
     *   *
     * @param GetApplicationRequest $request GetApplicationRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return GetApplicationResponse GetApplicationResponse
     */
    public function getApplicationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->applicationName)) {
            $query['ApplicationName'] = $request->applicationName;
        }
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return GetApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询应用详情。
     *   *
     * @param GetApplicationRequest $request GetApplicationRequest
     *
     * @return GetApplicationResponse GetApplicationResponse
     */
    public function getApplication($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getApplicationWithOptions($request, $runtime);
    }

    /**
     * 获取弹性伸缩活动详情。
     *   *
     * @param GetAutoScalingActivityRequest $request GetAutoScalingActivityRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return GetAutoScalingActivityResponse GetAutoScalingActivityResponse
     */
    public function getAutoScalingActivityWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->scalingActivityId)) {
            $query['ScalingActivityId'] = $request->scalingActivityId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return GetAutoScalingActivityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取弹性伸缩活动详情。
     *   *
     * @param GetAutoScalingActivityRequest $request GetAutoScalingActivityRequest
     *
     * @return GetAutoScalingActivityResponse GetAutoScalingActivityResponse
     */
    public function getAutoScalingActivity($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAutoScalingActivityWithOptions($request, $runtime);
    }

    /**
     * 获取弹性伸缩策略信息。
     *   *
     * @param GetAutoScalingPolicyRequest $request GetAutoScalingPolicyRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return GetAutoScalingPolicyResponse GetAutoScalingPolicyResponse
     */
    public function getAutoScalingPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->nodeGroupId)) {
            $query['NodeGroupId'] = $request->nodeGroupId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return GetAutoScalingPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取弹性伸缩策略信息。
     *   *
     * @param GetAutoScalingPolicyRequest $request GetAutoScalingPolicyRequest
     *
     * @return GetAutoScalingPolicyResponse GetAutoScalingPolicyResponse
     */
    public function getAutoScalingPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAutoScalingPolicyWithOptions($request, $runtime);
    }

    /**
     * @param GetClusterRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return GetClusterResponse
     */
    public function getClusterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return GetClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * get one doctor analysis app.
     *   *
     * @param GetDoctorApplicationRequest $request GetDoctorApplicationRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return GetDoctorApplicationResponse GetDoctorApplicationResponse
     */
    public function getDoctorApplicationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->dateTime)) {
            $query['DateTime'] = $request->dateTime;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return GetDoctorApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * get one doctor analysis app.
     *   *
     * @param GetDoctorApplicationRequest $request GetDoctorApplicationRequest
     *
     * @return GetDoctorApplicationResponse GetDoctorApplicationResponse
     */
    public function getDoctorApplication($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDoctorApplicationWithOptions($request, $runtime);
    }

    /**
     * get one specific luster engine queue by <type, name>.
     *   *
     * @param GetDoctorComputeSummaryRequest $request GetDoctorComputeSummaryRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return GetDoctorComputeSummaryResponse GetDoctorComputeSummaryResponse
     */
    public function getDoctorComputeSummaryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->componentInfo)) {
            $query['ComponentInfo'] = $request->componentInfo;
        }
        if (!Utils::isUnset($request->dateTime)) {
            $query['DateTime'] = $request->dateTime;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return GetDoctorComputeSummaryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * get one specific luster engine queue by <type, name>.
     *   *
     * @param GetDoctorComputeSummaryRequest $request GetDoctorComputeSummaryRequest
     *
     * @return GetDoctorComputeSummaryResponse GetDoctorComputeSummaryResponse
     */
    public function getDoctorComputeSummary($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDoctorComputeSummaryWithOptions($request, $runtime);
    }

    /**
     * get Doctor HBaseCluster.
     *   *
     * @param GetDoctorHBaseClusterRequest $request GetDoctorHBaseClusterRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return GetDoctorHBaseClusterResponse GetDoctorHBaseClusterResponse
     */
    public function getDoctorHBaseClusterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->dateTime)) {
            $query['DateTime'] = $request->dateTime;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return GetDoctorHBaseClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * get Doctor HBaseCluster.
     *   *
     * @param GetDoctorHBaseClusterRequest $request GetDoctorHBaseClusterRequest
     *
     * @return GetDoctorHBaseClusterResponse GetDoctorHBaseClusterResponse
     */
    public function getDoctorHBaseCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDoctorHBaseClusterWithOptions($request, $runtime);
    }

    /**
     * list Doctor HBaseRegions.
     *   *
     * @param GetDoctorHBaseRegionRequest $request GetDoctorHBaseRegionRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return GetDoctorHBaseRegionResponse GetDoctorHBaseRegionResponse
     */
    public function getDoctorHBaseRegionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->dateTime)) {
            $query['DateTime'] = $request->dateTime;
        }
        if (!Utils::isUnset($request->hbaseRegionId)) {
            $query['HbaseRegionId'] = $request->hbaseRegionId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return GetDoctorHBaseRegionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * list Doctor HBaseRegions.
     *   *
     * @param GetDoctorHBaseRegionRequest $request GetDoctorHBaseRegionRequest
     *
     * @return GetDoctorHBaseRegionResponse GetDoctorHBaseRegionResponse
     */
    public function getDoctorHBaseRegion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDoctorHBaseRegionWithOptions($request, $runtime);
    }

    /**
     * get Doctor HBaseRegionServer.
     *   *
     * @param GetDoctorHBaseRegionServerRequest $request GetDoctorHBaseRegionServerRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return GetDoctorHBaseRegionServerResponse GetDoctorHBaseRegionServerResponse
     */
    public function getDoctorHBaseRegionServerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->dateTime)) {
            $query['DateTime'] = $request->dateTime;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->regionServerHost)) {
            $query['RegionServerHost'] = $request->regionServerHost;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return GetDoctorHBaseRegionServerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * get Doctor HBaseRegionServer.
     *   *
     * @param GetDoctorHBaseRegionServerRequest $request GetDoctorHBaseRegionServerRequest
     *
     * @return GetDoctorHBaseRegionServerResponse GetDoctorHBaseRegionServerResponse
     */
    public function getDoctorHBaseRegionServer($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDoctorHBaseRegionServerWithOptions($request, $runtime);
    }

    /**
     * get Doctor HBaseTable.
     *   *
     * @param GetDoctorHBaseTableRequest $request GetDoctorHBaseTableRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return GetDoctorHBaseTableResponse GetDoctorHBaseTableResponse
     */
    public function getDoctorHBaseTableWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->dateTime)) {
            $query['DateTime'] = $request->dateTime;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->tableName)) {
            $query['TableName'] = $request->tableName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return GetDoctorHBaseTableResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * get Doctor HBaseTable.
     *   *
     * @param GetDoctorHBaseTableRequest $request GetDoctorHBaseTableRequest
     *
     * @return GetDoctorHBaseTableResponse GetDoctorHBaseTableResponse
     */
    public function getDoctorHBaseTable($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDoctorHBaseTableWithOptions($request, $runtime);
    }

    /**
     * list Doctor HBaseTableRegions.
     *   *
     * @param GetDoctorHDFSClusterRequest $request GetDoctorHDFSClusterRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return GetDoctorHDFSClusterResponse GetDoctorHDFSClusterResponse
     */
    public function getDoctorHDFSClusterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->dateTime)) {
            $query['DateTime'] = $request->dateTime;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return GetDoctorHDFSClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * list Doctor HBaseTableRegions.
     *   *
     * @param GetDoctorHDFSClusterRequest $request GetDoctorHDFSClusterRequest
     *
     * @return GetDoctorHDFSClusterResponse GetDoctorHDFSClusterResponse
     */
    public function getDoctorHDFSCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDoctorHDFSClusterWithOptions($request, $runtime);
    }

    /**
     * get Doctor HDFSNode.
     *   *
     * @param GetDoctorHDFSDirectoryRequest $request GetDoctorHDFSDirectoryRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return GetDoctorHDFSDirectoryResponse GetDoctorHDFSDirectoryResponse
     */
    public function getDoctorHDFSDirectoryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->dateTime)) {
            $query['DateTime'] = $request->dateTime;
        }
        if (!Utils::isUnset($request->dirPath)) {
            $query['DirPath'] = $request->dirPath;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return GetDoctorHDFSDirectoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * get Doctor HDFSNode.
     *   *
     * @param GetDoctorHDFSDirectoryRequest $request GetDoctorHDFSDirectoryRequest
     *
     * @return GetDoctorHDFSDirectoryResponse GetDoctorHDFSDirectoryResponse
     */
    public function getDoctorHDFSDirectory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDoctorHDFSDirectoryWithOptions($request, $runtime);
    }

    /**
     * get Doctor HDFS UGI.
     *   *
     * @param GetDoctorHDFSUGIRequest $request GetDoctorHDFSUGIRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return GetDoctorHDFSUGIResponse GetDoctorHDFSUGIResponse
     */
    public function getDoctorHDFSUGIWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->dateTime)) {
            $query['DateTime'] = $request->dateTime;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return GetDoctorHDFSUGIResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * get Doctor HDFS UGI.
     *   *
     * @param GetDoctorHDFSUGIRequest $request GetDoctorHDFSUGIRequest
     *
     * @return GetDoctorHDFSUGIResponse GetDoctorHDFSUGIResponse
     */
    public function getDoctorHDFSUGI($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDoctorHDFSUGIWithOptions($request, $runtime);
    }

    /**
     * list Doctor Hive Cluster.
     *   *
     * @param GetDoctorHiveClusterRequest $request GetDoctorHiveClusterRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return GetDoctorHiveClusterResponse GetDoctorHiveClusterResponse
     */
    public function getDoctorHiveClusterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->dateTime)) {
            $query['DateTime'] = $request->dateTime;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return GetDoctorHiveClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * list Doctor Hive Cluster.
     *   *
     * @param GetDoctorHiveClusterRequest $request GetDoctorHiveClusterRequest
     *
     * @return GetDoctorHiveClusterResponse GetDoctorHiveClusterResponse
     */
    public function getDoctorHiveCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDoctorHiveClusterWithOptions($request, $runtime);
    }

    /**
     * get Doctor Hive Database.
     *   *
     * @param GetDoctorHiveDatabaseRequest $request GetDoctorHiveDatabaseRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return GetDoctorHiveDatabaseResponse GetDoctorHiveDatabaseResponse
     */
    public function getDoctorHiveDatabaseWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->databaseName)) {
            $query['DatabaseName'] = $request->databaseName;
        }
        if (!Utils::isUnset($request->dateTime)) {
            $query['DateTime'] = $request->dateTime;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return GetDoctorHiveDatabaseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * get Doctor Hive Database.
     *   *
     * @param GetDoctorHiveDatabaseRequest $request GetDoctorHiveDatabaseRequest
     *
     * @return GetDoctorHiveDatabaseResponse GetDoctorHiveDatabaseResponse
     */
    public function getDoctorHiveDatabase($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDoctorHiveDatabaseWithOptions($request, $runtime);
    }

    /**
     * get Doctor Hive Table.
     *   *
     * @param GetDoctorHiveTableRequest $request GetDoctorHiveTableRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return GetDoctorHiveTableResponse GetDoctorHiveTableResponse
     */
    public function getDoctorHiveTableWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->dateTime)) {
            $query['DateTime'] = $request->dateTime;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->tableName)) {
            $query['TableName'] = $request->tableName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return GetDoctorHiveTableResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * get Doctor Hive Table.
     *   *
     * @param GetDoctorHiveTableRequest $request GetDoctorHiveTableRequest
     *
     * @return GetDoctorHiveTableResponse GetDoctorHiveTableResponse
     */
    public function getDoctorHiveTable($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDoctorHiveTableWithOptions($request, $runtime);
    }

    /**
     * Get realtime job by yarn.
     *   *
     * @param GetDoctorJobRequest $request GetDoctorJobRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return GetDoctorJobResponse GetDoctorJobResponse
     */
    public function getDoctorJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return GetDoctorJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Get realtime job by yarn.
     *   *
     * @param GetDoctorJobRequest $request GetDoctorJobRequest
     *
     * @return GetDoctorJobResponse GetDoctorJobResponse
     */
    public function getDoctorJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDoctorJobWithOptions($request, $runtime);
    }

    /**
     * get specify component's report analysis by emr doctor.
     *   *
     * @param GetDoctorReportComponentSummaryRequest $request GetDoctorReportComponentSummaryRequest
     * @param RuntimeOptions                         $runtime runtime options for this request RuntimeOptions
     *
     * @return GetDoctorReportComponentSummaryResponse GetDoctorReportComponentSummaryResponse
     */
    public function getDoctorReportComponentSummaryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->componentType)) {
            $query['ComponentType'] = $request->componentType;
        }
        if (!Utils::isUnset($request->dateTime)) {
            $query['DateTime'] = $request->dateTime;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return GetDoctorReportComponentSummaryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * get specify component's report analysis by emr doctor.
     *   *
     * @param GetDoctorReportComponentSummaryRequest $request GetDoctorReportComponentSummaryRequest
     *
     * @return GetDoctorReportComponentSummaryResponse GetDoctorReportComponentSummaryResponse
     */
    public function getDoctorReportComponentSummary($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDoctorReportComponentSummaryWithOptions($request, $runtime);
    }

    /**
     * 获取节点组详情。
     *   *
     * @param GetNodeGroupRequest $request GetNodeGroupRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return GetNodeGroupResponse GetNodeGroupResponse
     */
    public function getNodeGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->nodeGroupId)) {
            $query['NodeGroupId'] = $request->nodeGroupId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return GetNodeGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取节点组详情。
     *   *
     * @param GetNodeGroupRequest $request GetNodeGroupRequest
     *
     * @return GetNodeGroupResponse GetNodeGroupResponse
     */
    public function getNodeGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getNodeGroupWithOptions($request, $runtime);
    }

    /**
     * 获取操作详情。
     *   *
     * @param GetOperationRequest $request GetOperationRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return GetOperationResponse GetOperationResponse
     */
    public function getOperationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->operationId)) {
            $query['OperationId'] = $request->operationId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return GetOperationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取操作详情。
     *   *
     * @param GetOperationRequest $request GetOperationRequest
     *
     * @return GetOperationResponse GetOperationResponse
     */
    public function getOperation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getOperationWithOptions($request, $runtime);
    }

    /**
     * 扩容节点。
     *   *
     * @param IncreaseNodesRequest $request IncreaseNodesRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return IncreaseNodesResponse IncreaseNodesResponse
     */
    public function increaseNodesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->applicationConfigs)) {
            $query['ApplicationConfigs'] = $request->applicationConfigs;
        }
        if (!Utils::isUnset($request->autoPayOrder)) {
            $query['AutoPayOrder'] = $request->autoPayOrder;
        }
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->increaseNodeCount)) {
            $query['IncreaseNodeCount'] = $request->increaseNodeCount;
        }
        if (!Utils::isUnset($request->nodeGroupId)) {
            $query['NodeGroupId'] = $request->nodeGroupId;
        }
        if (!Utils::isUnset($request->paymentDuration)) {
            $query['PaymentDuration'] = $request->paymentDuration;
        }
        if (!Utils::isUnset($request->paymentDurationUnit)) {
            $query['PaymentDurationUnit'] = $request->paymentDurationUnit;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return IncreaseNodesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 扩容节点。
     *   *
     * @param IncreaseNodesRequest $request IncreaseNodesRequest
     *
     * @return IncreaseNodesResponse IncreaseNodesResponse
     */
    public function increaseNodes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->increaseNodesWithOptions($request, $runtime);
    }

    /**
     * @param JoinResourceGroupRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return JoinResourceGroupResponse
     */
    public function joinResourceGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return JoinResourceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ListApmMetadataRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListApmMetadataResponse
     */
    public function listApmMetadataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListApmMetadata',
            'version'     => '2021-03-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListApmMetadataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListApmMetadataRequest $request
     *
     * @return ListApmMetadataResponse
     */
    public function listApmMetadata($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listApmMetadataWithOptions($request, $runtime);
    }

    /**
     * 查询应用配置。
     *   *
     * @param ListApplicationConfigsRequest $request ListApplicationConfigsRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return ListApplicationConfigsResponse ListApplicationConfigsResponse
     */
    public function listApplicationConfigsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->applicationName)) {
            $query['ApplicationName'] = $request->applicationName;
        }
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->configFileName)) {
            $query['ConfigFileName'] = $request->configFileName;
        }
        if (!Utils::isUnset($request->configItemKey)) {
            $query['ConfigItemKey'] = $request->configItemKey;
        }
        if (!Utils::isUnset($request->configItemValue)) {
            $query['ConfigItemValue'] = $request->configItemValue;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->nodeGroupId)) {
            $query['NodeGroupId'] = $request->nodeGroupId;
        }
        if (!Utils::isUnset($request->nodeId)) {
            $query['NodeId'] = $request->nodeId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return ListApplicationConfigsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询应用配置。
     *   *
     * @param ListApplicationConfigsRequest $request ListApplicationConfigsRequest
     *
     * @return ListApplicationConfigsResponse ListApplicationConfigsResponse
     */
    public function listApplicationConfigs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listApplicationConfigsWithOptions($request, $runtime);
    }

    /**
     * 查询应用列表。
     *   *
     * @param ListApplicationsRequest $request ListApplicationsRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return ListApplicationsResponse ListApplicationsResponse
     */
    public function listApplicationsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->applicationNames)) {
            $query['ApplicationNames'] = $request->applicationNames;
        }
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return ListApplicationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询应用列表。
     *   *
     * @param ListApplicationsRequest $request ListApplicationsRequest
     *
     * @return ListApplicationsResponse ListApplicationsResponse
     */
    public function listApplications($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listApplicationsWithOptions($request, $runtime);
    }

    /**
     * 查询弹性伸缩活动列表。
     *   *
     * @param ListAutoScalingActivitiesRequest $request ListAutoScalingActivitiesRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return ListAutoScalingActivitiesResponse ListAutoScalingActivitiesResponse
     */
    public function listAutoScalingActivitiesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->nodeGroupId)) {
            $query['NodeGroupId'] = $request->nodeGroupId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->scalingActivityStates)) {
            $query['ScalingActivityStates'] = $request->scalingActivityStates;
        }
        if (!Utils::isUnset($request->scalingActivityType)) {
            $query['ScalingActivityType'] = $request->scalingActivityType;
        }
        if (!Utils::isUnset($request->scalingRuleName)) {
            $query['ScalingRuleName'] = $request->scalingRuleName;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return ListAutoScalingActivitiesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询弹性伸缩活动列表。
     *   *
     * @param ListAutoScalingActivitiesRequest $request ListAutoScalingActivitiesRequest
     *
     * @return ListAutoScalingActivitiesResponse ListAutoScalingActivitiesResponse
     */
    public function listAutoScalingActivities($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAutoScalingActivitiesWithOptions($request, $runtime);
    }

    /**
     * @param ListClustersRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ListClustersResponse
     */
    public function listClustersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterIds)) {
            $query['ClusterIds'] = $request->clusterIds;
        }
        if (!Utils::isUnset($request->clusterName)) {
            $query['ClusterName'] = $request->clusterName;
        }
        if (!Utils::isUnset($request->clusterStates)) {
            $query['ClusterStates'] = $request->clusterStates;
        }
        if (!Utils::isUnset($request->clusterTypes)) {
            $query['ClusterTypes'] = $request->clusterTypes;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->paymentTypes)) {
            $query['PaymentTypes'] = $request->paymentTypes;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->tags)) {
            $query['Tags'] = $request->tags;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return ListClustersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * 查询组件实例列表。
     *   *
     * @param ListComponentInstancesRequest $request ListComponentInstancesRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return ListComponentInstancesResponse ListComponentInstancesResponse
     */
    public function listComponentInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->applicationNames)) {
            $query['ApplicationNames'] = $request->applicationNames;
        }
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->componentNames)) {
            $query['ComponentNames'] = $request->componentNames;
        }
        if (!Utils::isUnset($request->componentStates)) {
            $query['ComponentStates'] = $request->componentStates;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->nodeIds)) {
            $query['NodeIds'] = $request->nodeIds;
        }
        if (!Utils::isUnset($request->nodeNames)) {
            $query['NodeNames'] = $request->nodeNames;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return ListComponentInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询组件实例列表。
     *   *
     * @param ListComponentInstancesRequest $request ListComponentInstancesRequest
     *
     * @return ListComponentInstancesResponse ListComponentInstancesResponse
     */
    public function listComponentInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listComponentInstancesWithOptions($request, $runtime);
    }

    /**
     * 查询组件列表。
     *   *
     * @param ListComponentsRequest $request ListComponentsRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return ListComponentsResponse ListComponentsResponse
     */
    public function listComponentsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->applicationNames)) {
            $query['ApplicationNames'] = $request->applicationNames;
        }
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->componentNames)) {
            $query['ComponentNames'] = $request->componentNames;
        }
        if (!Utils::isUnset($request->componentStates)) {
            $query['ComponentStates'] = $request->componentStates;
        }
        if (!Utils::isUnset($request->includeExpiredConfig)) {
            $query['IncludeExpiredConfig'] = $request->includeExpiredConfig;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return ListComponentsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询组件列表。
     *   *
     * @param ListComponentsRequest $request ListComponentsRequest
     *
     * @return ListComponentsResponse ListComponentsResponse
     */
    public function listComponents($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listComponentsWithOptions($request, $runtime);
    }

    /**
     * list all doctor analysis apps.
     *   *
     * @param ListDoctorApplicationsRequest $request ListDoctorApplicationsRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return ListDoctorApplicationsResponse ListDoctorApplicationsResponse
     */
    public function listDoctorApplicationsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appIds)) {
            $query['AppIds'] = $request->appIds;
        }
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->dateTime)) {
            $query['DateTime'] = $request->dateTime;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->orderBy)) {
            $query['OrderBy'] = $request->orderBy;
        }
        if (!Utils::isUnset($request->orderType)) {
            $query['OrderType'] = $request->orderType;
        }
        if (!Utils::isUnset($request->queues)) {
            $query['Queues'] = $request->queues;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->types)) {
            $query['Types'] = $request->types;
        }
        if (!Utils::isUnset($request->users)) {
            $query['Users'] = $request->users;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return ListDoctorApplicationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * list all doctor analysis apps.
     *   *
     * @param ListDoctorApplicationsRequest $request ListDoctorApplicationsRequest
     *
     * @return ListDoctorApplicationsResponse ListDoctorApplicationsResponse
     */
    public function listDoctorApplications($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDoctorApplicationsWithOptions($request, $runtime);
    }

    /**
     * list Doctor analysis result of cluster engine queue view.
     *   *
     * @param ListDoctorComputeSummaryRequest $request ListDoctorComputeSummaryRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return ListDoctorComputeSummaryResponse ListDoctorComputeSummaryResponse
     */
    public function listDoctorComputeSummaryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->componentTypes)) {
            $query['ComponentTypes'] = $request->componentTypes;
        }
        if (!Utils::isUnset($request->dateTime)) {
            $query['DateTime'] = $request->dateTime;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->orderBy)) {
            $query['OrderBy'] = $request->orderBy;
        }
        if (!Utils::isUnset($request->orderType)) {
            $query['OrderType'] = $request->orderType;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return ListDoctorComputeSummaryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * list Doctor analysis result of cluster engine queue view.
     *   *
     * @param ListDoctorComputeSummaryRequest $request ListDoctorComputeSummaryRequest
     *
     * @return ListDoctorComputeSummaryResponse ListDoctorComputeSummaryResponse
     */
    public function listDoctorComputeSummary($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDoctorComputeSummaryWithOptions($request, $runtime);
    }

    /**
     * list Doctor HBaseRegionServers.
     *   *
     * @param ListDoctorHBaseRegionServersRequest $request ListDoctorHBaseRegionServersRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return ListDoctorHBaseRegionServersResponse ListDoctorHBaseRegionServersResponse
     */
    public function listDoctorHBaseRegionServersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->dateTime)) {
            $query['DateTime'] = $request->dateTime;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->orderBy)) {
            $query['OrderBy'] = $request->orderBy;
        }
        if (!Utils::isUnset($request->orderType)) {
            $query['OrderType'] = $request->orderType;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->regionServerHosts)) {
            $query['RegionServerHosts'] = $request->regionServerHosts;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return ListDoctorHBaseRegionServersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * list Doctor HBaseRegionServers.
     *   *
     * @param ListDoctorHBaseRegionServersRequest $request ListDoctorHBaseRegionServersRequest
     *
     * @return ListDoctorHBaseRegionServersResponse ListDoctorHBaseRegionServersResponse
     */
    public function listDoctorHBaseRegionServers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDoctorHBaseRegionServersWithOptions($request, $runtime);
    }

    /**
     * list Doctor HBaseTables.
     *   *
     * @param ListDoctorHBaseTablesRequest $request ListDoctorHBaseTablesRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return ListDoctorHBaseTablesResponse ListDoctorHBaseTablesResponse
     */
    public function listDoctorHBaseTablesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->dateTime)) {
            $query['DateTime'] = $request->dateTime;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->orderBy)) {
            $query['OrderBy'] = $request->orderBy;
        }
        if (!Utils::isUnset($request->orderType)) {
            $query['OrderType'] = $request->orderType;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->tableNames)) {
            $query['TableNames'] = $request->tableNames;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return ListDoctorHBaseTablesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * list Doctor HBaseTables.
     *   *
     * @param ListDoctorHBaseTablesRequest $request ListDoctorHBaseTablesRequest
     *
     * @return ListDoctorHBaseTablesResponse ListDoctorHBaseTablesResponse
     */
    public function listDoctorHBaseTables($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDoctorHBaseTablesWithOptions($request, $runtime);
    }

    /**
     * list Doctor HDFSNodes.
     *   *
     * @param ListDoctorHDFSDirectoriesRequest $request ListDoctorHDFSDirectoriesRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return ListDoctorHDFSDirectoriesResponse ListDoctorHDFSDirectoriesResponse
     */
    public function listDoctorHDFSDirectoriesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->dateTime)) {
            $query['DateTime'] = $request->dateTime;
        }
        if (!Utils::isUnset($request->dirPath)) {
            $query['DirPath'] = $request->dirPath;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->orderBy)) {
            $query['OrderBy'] = $request->orderBy;
        }
        if (!Utils::isUnset($request->orderType)) {
            $query['OrderType'] = $request->orderType;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return ListDoctorHDFSDirectoriesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * list Doctor HDFSNodes.
     *   *
     * @param ListDoctorHDFSDirectoriesRequest $request ListDoctorHDFSDirectoriesRequest
     *
     * @return ListDoctorHDFSDirectoriesResponse ListDoctorHDFSDirectoriesResponse
     */
    public function listDoctorHDFSDirectories($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDoctorHDFSDirectoriesWithOptions($request, $runtime);
    }

    /**
     * list Doctor HDFS UGIs.
     *   *
     * @param ListDoctorHDFSUGIRequest $request ListDoctorHDFSUGIRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return ListDoctorHDFSUGIResponse ListDoctorHDFSUGIResponse
     */
    public function listDoctorHDFSUGIWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->dateTime)) {
            $query['DateTime'] = $request->dateTime;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->orderBy)) {
            $query['OrderBy'] = $request->orderBy;
        }
        if (!Utils::isUnset($request->orderType)) {
            $query['OrderType'] = $request->orderType;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return ListDoctorHDFSUGIResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * list Doctor HDFS UGIs.
     *   *
     * @param ListDoctorHDFSUGIRequest $request ListDoctorHDFSUGIRequest
     *
     * @return ListDoctorHDFSUGIResponse ListDoctorHDFSUGIResponse
     */
    public function listDoctorHDFSUGI($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDoctorHDFSUGIWithOptions($request, $runtime);
    }

    /**
     * list Doctor Hive Databases.
     *   *
     * @param ListDoctorHiveDatabasesRequest $request ListDoctorHiveDatabasesRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return ListDoctorHiveDatabasesResponse ListDoctorHiveDatabasesResponse
     */
    public function listDoctorHiveDatabasesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->databaseNames)) {
            $query['DatabaseNames'] = $request->databaseNames;
        }
        if (!Utils::isUnset($request->dateTime)) {
            $query['DateTime'] = $request->dateTime;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->orderBy)) {
            $query['OrderBy'] = $request->orderBy;
        }
        if (!Utils::isUnset($request->orderType)) {
            $query['OrderType'] = $request->orderType;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return ListDoctorHiveDatabasesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * list Doctor Hive Databases.
     *   *
     * @param ListDoctorHiveDatabasesRequest $request ListDoctorHiveDatabasesRequest
     *
     * @return ListDoctorHiveDatabasesResponse ListDoctorHiveDatabasesResponse
     */
    public function listDoctorHiveDatabases($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDoctorHiveDatabasesWithOptions($request, $runtime);
    }

    /**
     * list Doctor Hive Tables.
     *   *
     * @param ListDoctorHiveTablesRequest $request ListDoctorHiveTablesRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return ListDoctorHiveTablesResponse ListDoctorHiveTablesResponse
     */
    public function listDoctorHiveTablesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->dateTime)) {
            $query['DateTime'] = $request->dateTime;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->orderBy)) {
            $query['OrderBy'] = $request->orderBy;
        }
        if (!Utils::isUnset($request->orderType)) {
            $query['OrderType'] = $request->orderType;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->tableNames)) {
            $query['TableNames'] = $request->tableNames;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return ListDoctorHiveTablesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * list Doctor Hive Tables.
     *   *
     * @param ListDoctorHiveTablesRequest $request ListDoctorHiveTablesRequest
     *
     * @return ListDoctorHiveTablesResponse ListDoctorHiveTablesResponse
     */
    public function listDoctorHiveTables($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDoctorHiveTablesWithOptions($request, $runtime);
    }

    /**
     * list realtime jobs by yarn.
     *   *
     * @param ListDoctorJobsRequest $request ListDoctorJobsRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return ListDoctorJobsResponse ListDoctorJobsResponse
     */
    public function listDoctorJobsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appIds)) {
            $query['AppIds'] = $request->appIds;
        }
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->endRange)) {
            $query['EndRange'] = $request->endRange;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->orderBy)) {
            $query['OrderBy'] = $request->orderBy;
        }
        if (!Utils::isUnset($request->orderType)) {
            $query['OrderType'] = $request->orderType;
        }
        if (!Utils::isUnset($request->queues)) {
            $query['Queues'] = $request->queues;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->startRange)) {
            $query['StartRange'] = $request->startRange;
        }
        if (!Utils::isUnset($request->types)) {
            $query['Types'] = $request->types;
        }
        if (!Utils::isUnset($request->users)) {
            $query['Users'] = $request->users;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return ListDoctorJobsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * list realtime jobs by yarn.
     *   *
     * @param ListDoctorJobsRequest $request ListDoctorJobsRequest
     *
     * @return ListDoctorJobsResponse ListDoctorJobsResponse
     */
    public function listDoctorJobs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDoctorJobsWithOptions($request, $runtime);
    }

    /**
     * list stats groupBy jobs by yarn.
     *   *
     * @param ListDoctorJobsStatsRequest $request ListDoctorJobsStatsRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return ListDoctorJobsStatsResponse ListDoctorJobsStatsResponse
     */
    public function listDoctorJobsStatsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->endRange)) {
            $query['EndRange'] = $request->endRange;
        }
        if (!Utils::isUnset($request->groupBy)) {
            $query['GroupBy'] = $request->groupBy;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->orderBy)) {
            $query['OrderBy'] = $request->orderBy;
        }
        if (!Utils::isUnset($request->orderType)) {
            $query['OrderType'] = $request->orderType;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->startRange)) {
            $query['StartRange'] = $request->startRange;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return ListDoctorJobsStatsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * list stats groupBy jobs by yarn.
     *   *
     * @param ListDoctorJobsStatsRequest $request ListDoctorJobsStatsRequest
     *
     * @return ListDoctorJobsStatsResponse ListDoctorJobsStatsResponse
     */
    public function listDoctorJobsStats($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDoctorJobsStatsWithOptions($request, $runtime);
    }

    /**
     * list all reports analysis by emr doctor.
     *   *
     * @param ListDoctorReportsRequest $request ListDoctorReportsRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return ListDoctorReportsResponse ListDoctorReportsResponse
     */
    public function listDoctorReportsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return ListDoctorReportsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * list all reports analysis by emr doctor.
     *   *
     * @param ListDoctorReportsRequest $request ListDoctorReportsRequest
     *
     * @return ListDoctorReportsResponse ListDoctorReportsResponse
     */
    public function listDoctorReports($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDoctorReportsWithOptions($request, $runtime);
    }

    /**
     * @param ListInstanceTypesRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ListInstanceTypesResponse
     */
    public function listInstanceTypesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->clusterType)) {
            $query['ClusterType'] = $request->clusterType;
        }
        if (!Utils::isUnset($request->deployMode)) {
            $query['DeployMode'] = $request->deployMode;
        }
        if (!Utils::isUnset($request->instanceType)) {
            $query['InstanceType'] = $request->instanceType;
        }
        if (!Utils::isUnset($request->isModification)) {
            $query['IsModification'] = $request->isModification;
        }
        if (!Utils::isUnset($request->nodeGroupId)) {
            $query['NodeGroupId'] = $request->nodeGroupId;
        }
        if (!Utils::isUnset($request->nodeGroupType)) {
            $query['NodeGroupType'] = $request->nodeGroupType;
        }
        if (!Utils::isUnset($request->paymentType)) {
            $query['PaymentType'] = $request->paymentType;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->releaseVersion)) {
            $query['ReleaseVersion'] = $request->releaseVersion;
        }
        if (!Utils::isUnset($request->zoneId)) {
            $query['ZoneId'] = $request->zoneId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return ListInstanceTypesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ListNodeGroupsRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ListNodeGroupsResponse
     */
    public function listNodeGroupsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->nodeGroupIds)) {
            $query['NodeGroupIds'] = $request->nodeGroupIds;
        }
        if (!Utils::isUnset($request->nodeGroupNames)) {
            $query['NodeGroupNames'] = $request->nodeGroupNames;
        }
        if (!Utils::isUnset($request->nodeGroupStates)) {
            $query['NodeGroupStates'] = $request->nodeGroupStates;
        }
        if (!Utils::isUnset($request->nodeGroupTypes)) {
            $query['NodeGroupTypes'] = $request->nodeGroupTypes;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return ListNodeGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ListNodesRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return ListNodesResponse
     */
    public function listNodesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->nodeGroupIds)) {
            $query['NodeGroupIds'] = $request->nodeGroupIds;
        }
        if (!Utils::isUnset($request->nodeIds)) {
            $query['NodeIds'] = $request->nodeIds;
        }
        if (!Utils::isUnset($request->nodeNames)) {
            $query['NodeNames'] = $request->nodeNames;
        }
        if (!Utils::isUnset($request->nodeStates)) {
            $query['NodeStates'] = $request->nodeStates;
        }
        if (!Utils::isUnset($request->privateIps)) {
            $query['PrivateIps'] = $request->privateIps;
        }
        if (!Utils::isUnset($request->publicIps)) {
            $query['PublicIps'] = $request->publicIps;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->tags)) {
            $query['Tags'] = $request->tags;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return ListNodesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * 查询主版本。
     *   *
     * @param ListReleaseVersionsRequest $request ListReleaseVersionsRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return ListReleaseVersionsResponse ListReleaseVersionsResponse
     */
    public function listReleaseVersionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterType)) {
            $query['ClusterType'] = $request->clusterType;
        }
        if (!Utils::isUnset($request->iaasType)) {
            $query['IaasType'] = $request->iaasType;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return ListReleaseVersionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询主版本。
     *   *
     * @param ListReleaseVersionsRequest $request ListReleaseVersionsRequest
     *
     * @return ListReleaseVersionsResponse ListReleaseVersionsResponse
     */
    public function listReleaseVersions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listReleaseVersionsWithOptions($request, $runtime);
    }

    /**
     * @param ListTagResourcesRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListTagResourcesResponse
     */
    public function listTagResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceIds)) {
            $query['ResourceIds'] = $request->resourceIds;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->tags)) {
            $query['Tags'] = $request->tags;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return ListTagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * You can call this operation to configure auto scaling policies.
     *   *
     * @param PutAutoScalingPolicyRequest $request PutAutoScalingPolicyRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return PutAutoScalingPolicyResponse PutAutoScalingPolicyResponse
     */
    public function putAutoScalingPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->constraints)) {
            $query['Constraints'] = $request->constraints;
        }
        if (!Utils::isUnset($request->nodeGroupId)) {
            $query['NodeGroupId'] = $request->nodeGroupId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->scalingRules)) {
            $query['ScalingRules'] = $request->scalingRules;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return PutAutoScalingPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call this operation to configure auto scaling policies.
     *   *
     * @param PutAutoScalingPolicyRequest $request PutAutoScalingPolicyRequest
     *
     * @return PutAutoScalingPolicyResponse PutAutoScalingPolicyResponse
     */
    public function putAutoScalingPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->putAutoScalingPolicyWithOptions($request, $runtime);
    }

    /**
     * @param QueryApmComponentsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return QueryApmComponentsResponse
     */
    public function queryApmComponentsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->provider)) {
            $query['Provider'] = $request->provider;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryApmComponents',
            'version'     => '2021-03-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryApmComponentsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryApmComponentsRequest $request
     *
     * @return QueryApmComponentsResponse
     */
    public function queryApmComponents($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryApmComponentsWithOptions($request, $runtime);
    }

    /**
     * @param QueryApmGrafanaDataRequest $tmpReq
     * @param RuntimeOptions             $runtime
     *
     * @return QueryApmGrafanaDataResponse
     */
    public function queryApmGrafanaDataWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new QueryApmGrafanaDataShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->variables)) {
            $request->variablesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->variables, 'Variables', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->dashboardId)) {
            $query['DashboardId'] = $request->dashboardId;
        }
        if (!Utils::isUnset($request->end)) {
            $query['End'] = $request->end;
        }
        if (!Utils::isUnset($request->provider)) {
            $query['Provider'] = $request->provider;
        }
        if (!Utils::isUnset($request->query)) {
            $query['Query'] = $request->query;
        }
        if (!Utils::isUnset($request->queryParams)) {
            $query['QueryParams'] = $request->queryParams;
        }
        if (!Utils::isUnset($request->queryUrl)) {
            $query['QueryUrl'] = $request->queryUrl;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->start)) {
            $query['Start'] = $request->start;
        }
        if (!Utils::isUnset($request->step)) {
            $query['Step'] = $request->step;
        }
        if (!Utils::isUnset($request->time)) {
            $query['Time'] = $request->time;
        }
        if (!Utils::isUnset($request->variablesShrink)) {
            $query['Variables'] = $request->variablesShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryApmGrafanaData',
            'version'     => '2021-03-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryApmGrafanaDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryApmGrafanaDataRequest $request
     *
     * @return QueryApmGrafanaDataResponse
     */
    public function queryApmGrafanaData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryApmGrafanaDataWithOptions($request, $runtime);
    }

    /**
     * @param RemoveAutoScalingPolicyRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return RemoveAutoScalingPolicyResponse
     */
    public function removeAutoScalingPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->nodeGroupId)) {
            $query['NodeGroupId'] = $request->nodeGroupId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return RemoveAutoScalingPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param RunApplicationActionRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return RunApplicationActionResponse
     */
    public function runApplicationActionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->actionName)) {
            $query['ActionName'] = $request->actionName;
        }
        if (!Utils::isUnset($request->batchSize)) {
            $query['BatchSize'] = $request->batchSize;
        }
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->componentInstanceSelector)) {
            $query['ComponentInstanceSelector'] = $request->componentInstanceSelector;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->executeStrategy)) {
            $query['ExecuteStrategy'] = $request->executeStrategy;
        }
        if (!Utils::isUnset($request->interval)) {
            $query['Interval'] = $request->interval;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->rollingExecute)) {
            $query['RollingExecute'] = $request->rollingExecute;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return RunApplicationActionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param TagResourcesRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return TagResourcesResponse
     */
    public function tagResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceIds)) {
            $query['ResourceIds'] = $request->resourceIds;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->tags)) {
            $query['Tags'] = $request->tags;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return TagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * 删除指定资源标签。
     *   *
     * @param UntagResourcesRequest $request UntagResourcesRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return UntagResourcesResponse UntagResourcesResponse
     */
    public function untagResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->all)) {
            $query['All'] = $request->all;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceIds)) {
            $query['ResourceIds'] = $request->resourceIds;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->tagKeys)) {
            $query['TagKeys'] = $request->tagKeys;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return UntagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除指定资源标签。
     *   *
     * @param UntagResourcesRequest $request UntagResourcesRequest
     *
     * @return UntagResourcesResponse UntagResourcesResponse
     */
    public function untagResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->untagResourcesWithOptions($request, $runtime);
    }

    /**
     * @param UpdateApplicationConfigsRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return UpdateApplicationConfigsResponse
     */
    public function updateApplicationConfigsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->applicationConfigs)) {
            $query['ApplicationConfigs'] = $request->applicationConfigs;
        }
        if (!Utils::isUnset($request->applicationName)) {
            $query['ApplicationName'] = $request->applicationName;
        }
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->configAction)) {
            $query['ConfigAction'] = $request->configAction;
        }
        if (!Utils::isUnset($request->configScope)) {
            $query['ConfigScope'] = $request->configScope;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->nodeGroupId)) {
            $query['NodeGroupId'] = $request->nodeGroupId;
        }
        if (!Utils::isUnset($request->nodeId)) {
            $query['NodeId'] = $request->nodeId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return UpdateApplicationConfigsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateApplicationConfigsRequest $request
     *
     * @return UpdateApplicationConfigsResponse
     */
    public function updateApplicationConfigs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateApplicationConfigsWithOptions($request, $runtime);
    }
}
