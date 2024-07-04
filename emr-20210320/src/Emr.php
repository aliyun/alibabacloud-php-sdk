<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Emr\V20210320\Models\CreateApiTemplateRequest;
use AlibabaCloud\SDK\Emr\V20210320\Models\CreateApiTemplateResponse;
use AlibabaCloud\SDK\Emr\V20210320\Models\CreateClusterRequest;
use AlibabaCloud\SDK\Emr\V20210320\Models\CreateClusterResponse;
use AlibabaCloud\SDK\Emr\V20210320\Models\CreateNodeGroupRequest;
use AlibabaCloud\SDK\Emr\V20210320\Models\CreateNodeGroupResponse;
use AlibabaCloud\SDK\Emr\V20210320\Models\CreateScriptRequest;
use AlibabaCloud\SDK\Emr\V20210320\Models\CreateScriptResponse;
use AlibabaCloud\SDK\Emr\V20210320\Models\DecreaseNodesRequest;
use AlibabaCloud\SDK\Emr\V20210320\Models\DecreaseNodesResponse;
use AlibabaCloud\SDK\Emr\V20210320\Models\DeleteApiTemplateRequest;
use AlibabaCloud\SDK\Emr\V20210320\Models\DeleteApiTemplateResponse;
use AlibabaCloud\SDK\Emr\V20210320\Models\DeleteClusterRequest;
use AlibabaCloud\SDK\Emr\V20210320\Models\DeleteClusterResponse;
use AlibabaCloud\SDK\Emr\V20210320\Models\DeleteScriptRequest;
use AlibabaCloud\SDK\Emr\V20210320\Models\DeleteScriptResponse;
use AlibabaCloud\SDK\Emr\V20210320\Models\GetApiTemplateRequest;
use AlibabaCloud\SDK\Emr\V20210320\Models\GetApiTemplateResponse;
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
use AlibabaCloud\SDK\Emr\V20210320\Models\ListInspectionHistoryRequest;
use AlibabaCloud\SDK\Emr\V20210320\Models\ListInspectionHistoryResponse;
use AlibabaCloud\SDK\Emr\V20210320\Models\ListInstanceTypesRequest;
use AlibabaCloud\SDK\Emr\V20210320\Models\ListInstanceTypesResponse;
use AlibabaCloud\SDK\Emr\V20210320\Models\ListNodeGroupsRequest;
use AlibabaCloud\SDK\Emr\V20210320\Models\ListNodeGroupsResponse;
use AlibabaCloud\SDK\Emr\V20210320\Models\ListNodesRequest;
use AlibabaCloud\SDK\Emr\V20210320\Models\ListNodesResponse;
use AlibabaCloud\SDK\Emr\V20210320\Models\ListReleaseVersionsRequest;
use AlibabaCloud\SDK\Emr\V20210320\Models\ListReleaseVersionsResponse;
use AlibabaCloud\SDK\Emr\V20210320\Models\ListResourceHealthInspectionsRequest;
use AlibabaCloud\SDK\Emr\V20210320\Models\ListResourceHealthInspectionsResponse;
use AlibabaCloud\SDK\Emr\V20210320\Models\ListScriptsRequest;
use AlibabaCloud\SDK\Emr\V20210320\Models\ListScriptsResponse;
use AlibabaCloud\SDK\Emr\V20210320\Models\ListTagResourcesRequest;
use AlibabaCloud\SDK\Emr\V20210320\Models\ListTagResourcesResponse;
use AlibabaCloud\SDK\Emr\V20210320\Models\PutAutoScalingPolicyRequest;
use AlibabaCloud\SDK\Emr\V20210320\Models\PutAutoScalingPolicyResponse;
use AlibabaCloud\SDK\Emr\V20210320\Models\RemoveAutoScalingPolicyRequest;
use AlibabaCloud\SDK\Emr\V20210320\Models\RemoveAutoScalingPolicyResponse;
use AlibabaCloud\SDK\Emr\V20210320\Models\RunApiTemplateRequest;
use AlibabaCloud\SDK\Emr\V20210320\Models\RunApiTemplateResponse;
use AlibabaCloud\SDK\Emr\V20210320\Models\RunApplicationActionRequest;
use AlibabaCloud\SDK\Emr\V20210320\Models\RunApplicationActionResponse;
use AlibabaCloud\SDK\Emr\V20210320\Models\TagResourcesRequest;
use AlibabaCloud\SDK\Emr\V20210320\Models\TagResourcesResponse;
use AlibabaCloud\SDK\Emr\V20210320\Models\UntagResourcesRequest;
use AlibabaCloud\SDK\Emr\V20210320\Models\UntagResourcesResponse;
use AlibabaCloud\SDK\Emr\V20210320\Models\UpdateApiTemplateRequest;
use AlibabaCloud\SDK\Emr\V20210320\Models\UpdateApiTemplateResponse;
use AlibabaCloud\SDK\Emr\V20210320\Models\UpdateApplicationConfigsRequest;
use AlibabaCloud\SDK\Emr\V20210320\Models\UpdateApplicationConfigsResponse;
use AlibabaCloud\SDK\Emr\V20210320\Models\UpdateScriptRequest;
use AlibabaCloud\SDK\Emr\V20210320\Models\UpdateScriptResponse;
use AlibabaCloud\SDK\Emr\V20210320\Models\UpdateScriptShrinkRequest;
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
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_(@$endpointMap[$regionId])) {
            return @$endpointMap[$regionId];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * @param CreateApiTemplateRequest $request CreateApiTemplateRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateApiTemplateResponse CreateApiTemplateResponse
     */
    public function createApiTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->apiName)) {
            $query['ApiName'] = $request->apiName;
        }
        if (!Utils::isUnset($request->content)) {
            $query['Content'] = $request->content;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->templateName)) {
            $query['TemplateName'] = $request->templateName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return CreateApiTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateApiTemplateRequest $request CreateApiTemplateRequest
     *
     * @return CreateApiTemplateResponse CreateApiTemplateResponse
     */
    public function createApiTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createApiTemplateWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a pay-as-you-go or subscription cluster.
     *  *
     * @param CreateClusterRequest $request CreateClusterRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateClusterResponse CreateClusterResponse
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
     * @summary Creates a pay-as-you-go or subscription cluster.
     *  *
     * @param CreateClusterRequest $request CreateClusterRequest
     *
     * @return CreateClusterResponse CreateClusterResponse
     */
    public function createCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createClusterWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a node group.
     *  *
     * @description 创建节点组。
     *  *
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
     * @summary Creates a node group.
     *  *
     * @description 创建节点组。
     *  *
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
     * @param CreateScriptRequest $request CreateScriptRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateScriptResponse CreateScriptResponse
     */
    public function createScriptWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->scriptType)) {
            $query['ScriptType'] = $request->scriptType;
        }
        if (!Utils::isUnset($request->scripts)) {
            $query['Scripts'] = $request->scripts;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return CreateScriptResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateScriptRequest $request CreateScriptRequest
     *
     * @return CreateScriptResponse CreateScriptResponse
     */
    public function createScript($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createScriptWithOptions($request, $runtime);
    }

    /**
     * @summary Perform a scale-out operation on the target node group.
     *  *
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
     * @summary Perform a scale-out operation on the target node group.
     *  *
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
     * @description 创建集群模板
     *  *
     * @param DeleteApiTemplateRequest $request DeleteApiTemplateRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteApiTemplateResponse DeleteApiTemplateResponse
     */
    public function deleteApiTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->apiName)) {
            $query['ApiName'] = $request->apiName;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->templateId)) {
            $query['TemplateId'] = $request->templateId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return DeleteApiTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @description 创建集群模板
     *  *
     * @param DeleteApiTemplateRequest $request DeleteApiTemplateRequest
     *
     * @return DeleteApiTemplateResponse DeleteApiTemplateResponse
     */
    public function deleteApiTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteApiTemplateWithOptions($request, $runtime);
    }

    /**
     * @param DeleteClusterRequest $request DeleteClusterRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteClusterResponse DeleteClusterResponse
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
     * @param DeleteClusterRequest $request DeleteClusterRequest
     *
     * @return DeleteClusterResponse DeleteClusterResponse
     */
    public function deleteCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteClusterWithOptions($request, $runtime);
    }

    /**
     * @param DeleteScriptRequest $request DeleteScriptRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteScriptResponse DeleteScriptResponse
     */
    public function deleteScriptWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->scriptId)) {
            $query['ScriptId'] = $request->scriptId;
        }
        if (!Utils::isUnset($request->scriptType)) {
            $query['ScriptType'] = $request->scriptType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return DeleteScriptResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteScriptRequest $request DeleteScriptRequest
     *
     * @return DeleteScriptResponse DeleteScriptResponse
     */
    public function deleteScript($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteScriptWithOptions($request, $runtime);
    }

    /**
     * @summary 获取API模板详情
     *  *
     * @param GetApiTemplateRequest $request GetApiTemplateRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return GetApiTemplateResponse GetApiTemplateResponse
     */
    public function getApiTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->templateId)) {
            $query['TemplateId'] = $request->templateId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return GetApiTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取API模板详情
     *  *
     * @param GetApiTemplateRequest $request GetApiTemplateRequest
     *
     * @return GetApiTemplateResponse GetApiTemplateResponse
     */
    public function getApiTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getApiTemplateWithOptions($request, $runtime);
    }

    /**
     * @description 查询应用详情。
     *  *
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
     * @description 查询应用详情。
     *  *
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
     * @description 获取弹性伸缩活动详情。
     *  *
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
     * @description 获取弹性伸缩活动详情。
     *  *
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
     * @summary Obtains the details of a cluster.
     *  *
     * @param GetClusterRequest $request GetClusterRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return GetClusterResponse GetClusterResponse
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
     * @summary Obtains the details of a cluster.
     *  *
     * @param GetClusterRequest $request GetClusterRequest
     *
     * @return GetClusterResponse GetClusterResponse
     */
    public function getCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getClusterWithOptions($request, $runtime);
    }

    /**
     * @summary Obtains job analysis information on E-MapReduce (EMR) Doctor.
     *  *
     * @description get one doctor analysis app
     *  *
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
     * @summary Obtains job analysis information on E-MapReduce (EMR) Doctor.
     *  *
     * @description get one doctor analysis app
     *  *
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
     * @summary Obtains the information about resource usage in a cluster on E-MapReduce (EMR) Doctor.
     *  *
     * @description get one specific luster engine queue by <type, name>
     *  *
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
     * @summary Obtains the information about resource usage in a cluster on E-MapReduce (EMR) Doctor.
     *  *
     * @description get one specific luster engine queue by <type, name>
     *  *
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
     * @summary Obtains the metrics of an HBase cluster.
     *  *
     * @description get Doctor HBaseCluster
     *  *
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
     * @summary Obtains the metrics of an HBase cluster.
     *  *
     * @description get Doctor HBaseCluster
     *  *
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
     * @description list Doctor HBaseRegions
     *  *
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
     * @description list Doctor HBaseRegions
     *  *
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
     * @summary Obtains the information about an HBase region server.
     *  *
     * @description get Doctor HBaseRegionServer
     *  *
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
     * @summary Obtains the information about an HBase region server.
     *  *
     * @description get Doctor HBaseRegionServer
     *  *
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
     * @description get Doctor HBaseTable
     *  *
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
     * @description get Doctor HBaseTable
     *  *
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
     * @summary Obtains the analysis results of the Hadoop Distributed File System (HDFS) storage resources of a cluster on E-MapReduce (EMR) Doctor.
     *  *
     * @description list Doctor HBaseTableRegions
     *  *
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
     * @summary Obtains the analysis results of the Hadoop Distributed File System (HDFS) storage resources of a cluster on E-MapReduce (EMR) Doctor.
     *  *
     * @description list Doctor HBaseTableRegions
     *  *
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
     * @summary Obtains the analysis results of a specific Hadoop Distributed File System (HDFS) directory of a cluster. The depth of the directory is not greater than five.
     *  *
     * @description get Doctor HDFSNode
     *  *
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
     * @summary Obtains the analysis results of a specific Hadoop Distributed File System (HDFS) directory of a cluster. The depth of the directory is not greater than five.
     *  *
     * @description get Doctor HDFSNode
     *  *
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
     * @summary Obtains the analysis results of Hadoop Distributed File System (HDFS) storage resources for a specific owner or group on E-MapReduce (EMR) Doctor.
     *  *
     * @description get Doctor HDFS UGI
     *  *
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
     * @summary Obtains the analysis results of Hadoop Distributed File System (HDFS) storage resources for a specific owner or group on E-MapReduce (EMR) Doctor.
     *  *
     * @description get Doctor HDFS UGI
     *  *
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
     * @summary Obtains the analysis results of a Hive cluster.
     *  *
     * @description list Doctor Hive Cluster
     *  *
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
     * @summary Obtains the analysis results of a Hive cluster.
     *  *
     * @description list Doctor Hive Cluster
     *  *
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
     * @summary Obtains the analysis results of a Hive database.
     *  *
     * @description get Doctor Hive Database
     *  *
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
     * @summary Obtains the analysis results of a Hive database.
     *  *
     * @description get Doctor Hive Database
     *  *
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
     * @summary Obtains the analysis results of a specific Hive table in a cluster on E-MapReduce (EMR) Doctor.
     *  *
     * @description get Doctor Hive Table
     *  *
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
     * @summary Obtains the analysis results of a specific Hive table in a cluster on E-MapReduce (EMR) Doctor.
     *  *
     * @description get Doctor Hive Table
     *  *
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
     * @summary Obtains the basic running information about a job on E-MapReduce (EMR) Doctor.
     *  *
     * @description Get realtime job by yarn
     *  *
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
     * @summary Obtains the basic running information about a job on E-MapReduce (EMR) Doctor.
     *  *
     * @description Get realtime job by yarn
     *  *
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
     * @description get specify component's report analysis by emr doctor
     *  *
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
     * @description get specify component's report analysis by emr doctor
     *  *
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
     * @summary You can call this operation to obtain the details of a node group.
     *  *
     * @description 获取节点组详情。
     *  *
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
     * @summary You can call this operation to obtain the details of a node group.
     *  *
     * @description 获取节点组详情。
     *  *
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
     * @summary Gets the details of an asynchronous operation.
     *  *
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
     * @summary Gets the details of an asynchronous operation.
     *  *
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
     * @summary Scale out the node group.
     *  *
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
        if (!Utils::isUnset($request->autoRenew)) {
            $query['AutoRenew'] = $request->autoRenew;
        }
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->increaseNodeCount)) {
            $query['IncreaseNodeCount'] = $request->increaseNodeCount;
        }
        if (!Utils::isUnset($request->minIncreaseNodeCount)) {
            $query['MinIncreaseNodeCount'] = $request->minIncreaseNodeCount;
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
     * @summary Scale out the node group.
     *  *
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
     * @summary Add an EMR resource to the target resource group. A resource can belong to only one resource group.
     *  *
     * @param JoinResourceGroupRequest $request JoinResourceGroupRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return JoinResourceGroupResponse JoinResourceGroupResponse
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
     * @summary Add an EMR resource to the target resource group. A resource can belong to only one resource group.
     *  *
     * @param JoinResourceGroupRequest $request JoinResourceGroupRequest
     *
     * @return JoinResourceGroupResponse JoinResourceGroupResponse
     */
    public function joinResourceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->joinResourceGroupWithOptions($request, $runtime);
    }

    /**
     * @summary 查询API模板
     *  *
     * @param ListApiTemplatesRequest $request ListApiTemplatesRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return ListApiTemplatesResponse ListApiTemplatesResponse
     */
    public function listApiTemplatesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->apiName)) {
            $query['ApiName'] = $request->apiName;
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
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->templateId)) {
            $query['TemplateId'] = $request->templateId;
        }
        if (!Utils::isUnset($request->templateIds)) {
            $query['TemplateIds'] = $request->templateIds;
        }
        if (!Utils::isUnset($request->templateName)) {
            $query['TemplateName'] = $request->templateName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return ListApiTemplatesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询API模板
     *  *
     * @param ListApiTemplatesRequest $request ListApiTemplatesRequest
     *
     * @return ListApiTemplatesResponse ListApiTemplatesResponse
     */
    public function listApiTemplates($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listApiTemplatesWithOptions($request, $runtime);
    }

    /**
     * @description 查询应用配置。
     *  *
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
     * @description 查询应用配置。
     *  *
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
     * @description 查询应用列表。
     *  *
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
     * @description 查询应用列表。
     *  *
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
     * @description 查询弹性伸缩活动列表。
     *  *
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
     * @description 查询弹性伸缩活动列表。
     *  *
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
     * @summary Queries E-MapReduce (EMR) clusters.
     *  *
     * @param ListClustersRequest $request ListClustersRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return ListClustersResponse ListClustersResponse
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
     * @summary Queries E-MapReduce (EMR) clusters.
     *  *
     * @param ListClustersRequest $request ListClustersRequest
     *
     * @return ListClustersResponse ListClustersResponse
     */
    public function listClusters($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listClustersWithOptions($request, $runtime);
    }

    /**
     * @description 查询组件实例列表。
     *  *
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
     * @description 查询组件实例列表。
     *  *
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
     * @description 查询组件列表。
     *  *
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
     * @description 查询组件列表。
     *  *
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
     * @summary Obtains the analysis results of multiple jobs on E-MapReduce (EMR) Doctor.
     *  *
     * @description list all doctor analysis apps
     *  *
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
     * @summary Obtains the analysis results of multiple jobs on E-MapReduce (EMR) Doctor.
     *  *
     * @description list all doctor analysis apps
     *  *
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
     * @summary Obtains the information about resource usage by resource type in a cluster on E-MapReduce (EMR) Doctor.
     *  *
     * @description list Doctor analysis result of cluster engine queue view
     *  *
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
     * @summary Obtains the information about resource usage by resource type in a cluster on E-MapReduce (EMR) Doctor.
     *  *
     * @description list Doctor analysis result of cluster engine queue view
     *  *
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
     * @summary Obtains the information about multiple HBase RegionServers at a time.
     *  *
     * @description list Doctor HBaseRegionServers
     *  *
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
     * @summary Obtains the information about multiple HBase RegionServers at a time.
     *  *
     * @description list Doctor HBaseRegionServers
     *  *
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
     * @summary Obtains the information about multiple HBase tables at a time.
     *  *
     * @description list Doctor HBaseTables
     *  *
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
     * @summary Obtains the information about multiple HBase tables at a time.
     *  *
     * @description list Doctor HBaseTables
     *  *
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
     * @description list Doctor HDFSNodes
     *  *
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
     * @description list Doctor HDFSNodes
     *  *
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
     * @summary Obtains the analysis results of Hadoop Distributed File System (HDFS) storage resources for multiple owners or groups at a time on E-MapReduce (EMR) Doctor.
     *  *
     * @description list Doctor HDFS UGIs
     *  *
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
     * @summary Obtains the analysis results of Hadoop Distributed File System (HDFS) storage resources for multiple owners or groups at a time on E-MapReduce (EMR) Doctor.
     *  *
     * @description list Doctor HDFS UGIs
     *  *
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
     * @summary Obtains the analysis results of multiple Hive databases at a time.
     *  *
     * @description list Doctor Hive Databases
     *  *
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
     * @summary Obtains the analysis results of multiple Hive databases at a time.
     *  *
     * @description list Doctor Hive Databases
     *  *
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
     * @summary Obtains the analysis results of multiple Hive tables at a time on E-MapReduce (EMR) Doctor.
     *  *
     * @description list Doctor Hive Tables
     *  *
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
     * @summary Obtains the analysis results of multiple Hive tables at a time on E-MapReduce (EMR) Doctor.
     *  *
     * @description list Doctor Hive Tables
     *  *
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
     * @summary Obtains the basic running information about multiple jobs at a time on E-MapReduce (EMR) Doctor.
     *  *
     * @description list realtime jobs by yarn
     *  *
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
     * @summary Obtains the basic running information about multiple jobs at a time on E-MapReduce (EMR) Doctor.
     *  *
     * @description list realtime jobs by yarn
     *  *
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
     * @summary Obtains the summary of basic running information about multiple jobs at a time on E-MapReduce (EMR) Doctor.
     *  *
     * @description list stats groupBy jobs by yarn
     *  *
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
     * @summary Obtains the summary of basic running information about multiple jobs at a time on E-MapReduce (EMR) Doctor.
     *  *
     * @description list stats groupBy jobs by yarn
     *  *
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
     * @summary Obtains the overall analysis result reports of E-MapReduce (EMR) Doctor at a time.
     *  *
     * @description list all reports analysis by emr doctor
     *  *
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
     * @summary Obtains the overall analysis result reports of E-MapReduce (EMR) Doctor at a time.
     *  *
     * @description list all reports analysis by emr doctor
     *  *
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
     * @param ListInspectionHistoryRequest $request ListInspectionHistoryRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return ListInspectionHistoryResponse ListInspectionHistoryResponse
     */
    public function listInspectionHistoryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->component)) {
            $query['Component'] = $request->component;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->language)) {
            $query['Language'] = $request->language;
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
        if (!Utils::isUnset($request->service)) {
            $query['Service'] = $request->service;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListInspectionHistory',
            'version'     => '2021-03-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListInspectionHistoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListInspectionHistoryRequest $request ListInspectionHistoryRequest
     *
     * @return ListInspectionHistoryResponse ListInspectionHistoryResponse
     */
    public function listInspectionHistory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listInspectionHistoryWithOptions($request, $runtime);
    }

    /**
     * @param ListInstanceTypesRequest $request ListInstanceTypesRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return ListInstanceTypesResponse ListInstanceTypesResponse
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
     * @param ListInstanceTypesRequest $request ListInstanceTypesRequest
     *
     * @return ListInstanceTypesResponse ListInstanceTypesResponse
     */
    public function listInstanceTypes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listInstanceTypesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the list of node groups in an EMR cluster.
     *  *
     * @param ListNodeGroupsRequest $request ListNodeGroupsRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return ListNodeGroupsResponse ListNodeGroupsResponse
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
     * @summary Queries the list of node groups in an EMR cluster.
     *  *
     * @param ListNodeGroupsRequest $request ListNodeGroupsRequest
     *
     * @return ListNodeGroupsResponse ListNodeGroupsResponse
     */
    public function listNodeGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listNodeGroupsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the node list of an EMR cluster.
     *  *
     * @param ListNodesRequest $request ListNodesRequest
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return ListNodesResponse ListNodesResponse
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
     * @summary Queries the node list of an EMR cluster.
     *  *
     * @param ListNodesRequest $request ListNodesRequest
     *
     * @return ListNodesResponse ListNodesResponse
     */
    public function listNodes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listNodesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the major E-MapReduce (EMR) versions.
     *  *
     * @description 查询主版本。
     *  *
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
     * @summary Queries the major E-MapReduce (EMR) versions.
     *  *
     * @description 查询主版本。
     *  *
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
     * @description 查询资源巡检项。
     *  *
     * @param ListResourceHealthInspectionsRequest $request ListResourceHealthInspectionsRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return ListResourceHealthInspectionsResponse ListResourceHealthInspectionsResponse
     */
    public function listResourceHealthInspectionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->applicationName)) {
            $query['ApplicationName'] = $request->applicationName;
        }
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->componentName)) {
            $query['ComponentName'] = $request->componentName;
        }
        if (!Utils::isUnset($request->healthStatuses)) {
            $query['HealthStatuses'] = $request->healthStatuses;
        }
        if (!Utils::isUnset($request->language)) {
            $query['Language'] = $request->language;
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
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListResourceHealthInspections',
            'version'     => '2021-03-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListResourceHealthInspectionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @description 查询资源巡检项。
     *  *
     * @param ListResourceHealthInspectionsRequest $request ListResourceHealthInspectionsRequest
     *
     * @return ListResourceHealthInspectionsResponse ListResourceHealthInspectionsResponse
     */
    public function listResourceHealthInspections($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listResourceHealthInspectionsWithOptions($request, $runtime);
    }

    /**
     * @param ListScriptsRequest $request ListScriptsRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return ListScriptsResponse ListScriptsResponse
     */
    public function listScriptsWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->scriptType)) {
            $query['ScriptType'] = $request->scriptType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return ListScriptsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListScriptsRequest $request ListScriptsRequest
     *
     * @return ListScriptsResponse ListScriptsResponse
     */
    public function listScripts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listScriptsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the tags that are bound to an EMR cluster.
     *  *
     * @param ListTagResourcesRequest $request ListTagResourcesRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return ListTagResourcesResponse ListTagResourcesResponse
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
     * @summary Queries the tags that are bound to an EMR cluster.
     *  *
     * @param ListTagResourcesRequest $request ListTagResourcesRequest
     *
     * @return ListTagResourcesResponse ListTagResourcesResponse
     */
    public function listTagResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTagResourcesWithOptions($request, $runtime);
    }

    /**
     * @summary Configures auto scaling rules.
     *  *
     * @description You can call this operation to configure auto scaling policies.
     *  *
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
     * @summary Configures auto scaling rules.
     *  *
     * @description You can call this operation to configure auto scaling policies.
     *  *
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
     * @param RemoveAutoScalingPolicyRequest $request RemoveAutoScalingPolicyRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return RemoveAutoScalingPolicyResponse RemoveAutoScalingPolicyResponse
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
     * @param RemoveAutoScalingPolicyRequest $request RemoveAutoScalingPolicyRequest
     *
     * @return RemoveAutoScalingPolicyResponse RemoveAutoScalingPolicyResponse
     */
    public function removeAutoScalingPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeAutoScalingPolicyWithOptions($request, $runtime);
    }

    /**
     * @param RunApiTemplateRequest $request RunApiTemplateRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return RunApiTemplateResponse RunApiTemplateResponse
     */
    public function runApiTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->apiName)) {
            $query['ApiName'] = $request->apiName;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->templateId)) {
            $query['TemplateId'] = $request->templateId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return RunApiTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RunApiTemplateRequest $request RunApiTemplateRequest
     *
     * @return RunApiTemplateResponse RunApiTemplateResponse
     */
    public function runApiTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->runApiTemplateWithOptions($request, $runtime);
    }

    /**
     * @param RunApplicationActionRequest $request RunApplicationActionRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return RunApplicationActionResponse RunApplicationActionResponse
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
     * @param RunApplicationActionRequest $request RunApplicationActionRequest
     *
     * @return RunApplicationActionResponse RunApplicationActionResponse
     */
    public function runApplicationAction($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->runApplicationActionWithOptions($request, $runtime);
    }

    /**
     * @summary Bind tags to a specified EMR cluster.
     *  *
     * @param TagResourcesRequest $request TagResourcesRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return TagResourcesResponse TagResourcesResponse
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
     * @summary Bind tags to a specified EMR cluster.
     *  *
     * @param TagResourcesRequest $request TagResourcesRequest
     *
     * @return TagResourcesResponse TagResourcesResponse
     */
    public function tagResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->tagResourcesWithOptions($request, $runtime);
    }

    /**
     * @summary Unbinds tags from a specified column in an EMR cluster. If the tag is not bound to other resources, the tag is automatically deleted.
     *  *
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
     * @summary Unbinds tags from a specified column in an EMR cluster. If the tag is not bound to other resources, the tag is automatically deleted.
     *  *
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
     * @summary Updates an API operation template.
     *  *
     * @description 修改集群模板
     *  *
     * @param UpdateApiTemplateRequest $request UpdateApiTemplateRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateApiTemplateResponse UpdateApiTemplateResponse
     */
    public function updateApiTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->apiName)) {
            $query['ApiName'] = $request->apiName;
        }
        if (!Utils::isUnset($request->content)) {
            $query['Content'] = $request->content;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->templateId)) {
            $query['TemplateId'] = $request->templateId;
        }
        if (!Utils::isUnset($request->templateName)) {
            $query['TemplateName'] = $request->templateName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return UpdateApiTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Updates an API operation template.
     *  *
     * @description 修改集群模板
     *  *
     * @param UpdateApiTemplateRequest $request UpdateApiTemplateRequest
     *
     * @return UpdateApiTemplateResponse UpdateApiTemplateResponse
     */
    public function updateApiTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateApiTemplateWithOptions($request, $runtime);
    }

    /**
     * @param UpdateApplicationConfigsRequest $request UpdateApplicationConfigsRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateApplicationConfigsResponse UpdateApplicationConfigsResponse
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
        if (!Utils::isUnset($request->refreshConfig)) {
            $query['RefreshConfig'] = $request->refreshConfig;
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
     * @param UpdateApplicationConfigsRequest $request UpdateApplicationConfigsRequest
     *
     * @return UpdateApplicationConfigsResponse UpdateApplicationConfigsResponse
     */
    public function updateApplicationConfigs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateApplicationConfigsWithOptions($request, $runtime);
    }

    /**
     * @param UpdateScriptRequest $tmpReq  UpdateScriptRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateScriptResponse UpdateScriptResponse
     */
    public function updateScriptWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateScriptShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->script)) {
            $request->scriptShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->script, 'Script', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->scriptShrink)) {
            $query['Script'] = $request->scriptShrink;
        }
        if (!Utils::isUnset($request->scriptId)) {
            $query['ScriptId'] = $request->scriptId;
        }
        if (!Utils::isUnset($request->scriptType)) {
            $query['ScriptType'] = $request->scriptType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return UpdateScriptResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateScriptRequest $request UpdateScriptRequest
     *
     * @return UpdateScriptResponse UpdateScriptResponse
     */
    public function updateScript($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateScriptWithOptions($request, $runtime);
    }
}
