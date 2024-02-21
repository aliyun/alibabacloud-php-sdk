<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Emr\V20160408\Models\AddClusterServiceRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\AddClusterServiceResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\AddScalingConfigItemV2Request;
use AlibabaCloud\SDK\Emr\V20160408\Models\AddScalingConfigItemV2Response;
use AlibabaCloud\SDK\Emr\V20160408\Models\CloneFlowJobRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\CloneFlowJobResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\CloneFlowRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\CloneFlowResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\CreateClusterHostGroupRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\CreateClusterHostGroupResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\CreateClusterTemplateRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\CreateClusterTemplateResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\CreateClusterV2Request;
use AlibabaCloud\SDK\Emr\V20160408\Models\CreateClusterV2Response;
use AlibabaCloud\SDK\Emr\V20160408\Models\CreateClusterWithTemplateRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\CreateClusterWithTemplateResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\CreateFlowCategoryRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\CreateFlowCategoryResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\CreateFlowForWebRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\CreateFlowForWebResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\CreateFlowJobRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\CreateFlowJobResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\CreateFlowProjectClusterSettingRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\CreateFlowProjectClusterSettingResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\CreateFlowProjectRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\CreateFlowProjectResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\CreateFlowProjectUserRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\CreateFlowProjectUserResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\CreateFlowRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\CreateFlowResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\CreateResourcePoolRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\CreateResourcePoolResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\CreateResourceQueueRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\CreateResourceQueueResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\CreateScalingGroupV2Request;
use AlibabaCloud\SDK\Emr\V20160408\Models\CreateScalingGroupV2Response;
use AlibabaCloud\SDK\Emr\V20160408\Models\DeleteClusterTemplateRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\DeleteClusterTemplateResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\DeleteFlowCategoryRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\DeleteFlowCategoryResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\DeleteFlowJobRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\DeleteFlowJobResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\DeleteFlowProjectClusterSettingRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\DeleteFlowProjectClusterSettingResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\DeleteFlowProjectRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\DeleteFlowProjectResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\DeleteFlowProjectUserRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\DeleteFlowProjectUserResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\DeleteFlowRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\DeleteFlowResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\DeleteResourcePoolRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\DeleteResourcePoolResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\DeleteResourceQueueRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\DeleteResourceQueueResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeClusterBasicInfoRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeClusterBasicInfoResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeClusterOperationHostTaskLogRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeClusterOperationHostTaskLogResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeClusterResourcePoolSchedulerTypeRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeClusterResourcePoolSchedulerTypeResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeClusterServiceConfigRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeClusterServiceConfigResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeClusterServiceConfigTagRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeClusterServiceConfigTagResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeClusterServiceRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeClusterServiceResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeClusterTemplateRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeClusterTemplateResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeClusterV2Request;
use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeClusterV2Response;
use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeFlowCategoryRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeFlowCategoryResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeFlowCategoryTreeRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeFlowCategoryTreeResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeFlowInstanceRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeFlowInstanceResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeFlowJobRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeFlowJobResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeFlowNodeInstanceContainerLogRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeFlowNodeInstanceContainerLogResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeFlowNodeInstanceLauncherLogRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeFlowNodeInstanceLauncherLogResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeFlowNodeInstanceRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeFlowNodeInstanceResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeFlowProjectClusterSettingRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeFlowProjectClusterSettingResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeFlowProjectRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeFlowProjectResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeFlowRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeFlowResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeScalingConfigItemV2Request;
use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeScalingConfigItemV2Response;
use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeScalingGroupInstanceV2Request;
use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeScalingGroupInstanceV2Response;
use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeScalingGroupV2Request;
use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeScalingGroupV2Response;
use AlibabaCloud\SDK\Emr\V20160408\Models\JoinResourceGroupRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\JoinResourceGroupResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\KillFlowJobRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\KillFlowJobResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListClusterHostComponentRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListClusterHostComponentResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListClusterHostGroupRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListClusterHostGroupResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListClusterHostRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListClusterHostResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListClusterInstalledServiceRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListClusterInstalledServiceResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListClusterOperationHostRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListClusterOperationHostResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListClusterOperationHostTaskRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListClusterOperationHostTaskResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListClusterOperationRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListClusterOperationResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListClusterOperationTaskRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListClusterOperationTaskResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListClusterServiceComponentHealthInfoRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListClusterServiceComponentHealthInfoResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListClusterServiceConfigHistoryRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListClusterServiceConfigHistoryResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListClusterServiceQuickLinkRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListClusterServiceQuickLinkResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListClusterServiceRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListClusterServiceResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListClustersRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListClustersResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListClusterTemplatesRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListClusterTemplatesResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListEmrAvailableConfigRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListEmrAvailableConfigResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListEmrAvailableResourceRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListEmrAvailableResourceResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListEmrMainVersionRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListEmrMainVersionResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListFlowCategoryRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListFlowCategoryResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListFlowClusterAllHostsRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListFlowClusterAllHostsResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListFlowClusterAllRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListFlowClusterAllResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListFlowClusterHostRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListFlowClusterHostResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListFlowClusterRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListFlowClusterResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListFlowInstanceRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListFlowInstanceResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListFlowJobHistoryRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListFlowJobHistoryResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListFlowJobRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListFlowJobResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListFlowNodeInstanceContainerStatusRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListFlowNodeInstanceContainerStatusResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListFlowNodeInstanceRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListFlowNodeInstanceResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListFlowNodeSqlResultRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListFlowNodeSqlResultResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListFlowProjectClusterSettingRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListFlowProjectClusterSettingResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListFlowProjectRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListFlowProjectResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListFlowProjectUserRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListFlowProjectUserResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListFlowRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListFlowResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListResourcePoolRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListResourcePoolResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListScalingActivityV2Request;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListScalingActivityV2Response;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListScalingConfigItemV2Request;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListScalingConfigItemV2Response;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListScalingGroupV2Request;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListScalingGroupV2Response;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListTagResourcesRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListTagResourcesResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\ModifyClusterNameRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\ModifyClusterNameResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\ModifyClusterServiceConfigRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\ModifyClusterServiceConfigResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\ModifyClusterTemplateRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\ModifyClusterTemplateResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\ModifyFlowCategoryRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\ModifyFlowCategoryResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\ModifyFlowForWebRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\ModifyFlowForWebResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\ModifyFlowProjectClusterSettingRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\ModifyFlowProjectClusterSettingResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\ModifyFlowProjectRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\ModifyFlowProjectResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\ModifyResourcePoolRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\ModifyResourcePoolResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\ModifyResourcePoolSchedulerTypeRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\ModifyResourcePoolSchedulerTypeResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\ModifyResourceQueueRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\ModifyResourceQueueResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\ModifyScalingConfigItemV2Request;
use AlibabaCloud\SDK\Emr\V20160408\Models\ModifyScalingConfigItemV2Response;
use AlibabaCloud\SDK\Emr\V20160408\Models\ModifyScalingGroupV2Request;
use AlibabaCloud\SDK\Emr\V20160408\Models\ModifyScalingGroupV2Response;
use AlibabaCloud\SDK\Emr\V20160408\Models\RefreshClusterResourcePoolRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\RefreshClusterResourcePoolResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\ReleaseClusterHostGroupRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\ReleaseClusterHostGroupResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\ReleaseClusterRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\ReleaseClusterResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\RemoveScalingConfigItemV2Request;
use AlibabaCloud\SDK\Emr\V20160408\Models\RemoveScalingConfigItemV2Response;
use AlibabaCloud\SDK\Emr\V20160408\Models\RerunFlowRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\RerunFlowResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\ResizeClusterV2Request;
use AlibabaCloud\SDK\Emr\V20160408\Models\ResizeClusterV2Response;
use AlibabaCloud\SDK\Emr\V20160408\Models\ResumeFlowRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\ResumeFlowResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\RunClusterServiceActionRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\RunClusterServiceActionResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\RunScalingActionV2Request;
use AlibabaCloud\SDK\Emr\V20160408\Models\RunScalingActionV2Response;
use AlibabaCloud\SDK\Emr\V20160408\Models\StartFlowRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\StartFlowResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\SubmitFlowJobRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\SubmitFlowJobResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\SubmitFlowRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\SubmitFlowResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\SuspendFlowRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\SuspendFlowResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\TagResourcesRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\TagResourcesResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\UntagResourcesRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\UntagResourcesResponse;
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
     * @param AddClusterServiceRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return AddClusterServiceResponse
     */
    public function addClusterServiceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->comment)) {
            $query['Comment'] = $request->comment;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->service)) {
            $query['Service'] = $request->service;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddClusterService',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddClusterServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddClusterServiceRequest $request
     *
     * @return AddClusterServiceResponse
     */
    public function addClusterService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addClusterServiceWithOptions($request, $runtime);
    }

    /**
     * @param AddScalingConfigItemV2Request $request
     * @param RuntimeOptions                $runtime
     *
     * @return AddScalingConfigItemV2Response
     */
    public function addScalingConfigItemV2WithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->configItemInformation)) {
            $query['ConfigItemInformation'] = $request->configItemInformation;
        }
        if (!Utils::isUnset($request->configItemType)) {
            $query['ConfigItemType'] = $request->configItemType;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->scalingGroupBizId)) {
            $query['ScalingGroupBizId'] = $request->scalingGroupBizId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddScalingConfigItemV2',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddScalingConfigItemV2Response::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddScalingConfigItemV2Request $request
     *
     * @return AddScalingConfigItemV2Response
     */
    public function addScalingConfigItemV2($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addScalingConfigItemV2WithOptions($request, $runtime);
    }

    /**
     * @param CloneFlowRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return CloneFlowResponse
     */
    public function cloneFlowWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CloneFlow',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CloneFlowResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CloneFlowRequest $request
     *
     * @return CloneFlowResponse
     */
    public function cloneFlow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cloneFlowWithOptions($request, $runtime);
    }

    /**
     * @param CloneFlowJobRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return CloneFlowJobResponse
     */
    public function cloneFlowJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CloneFlowJob',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CloneFlowJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CloneFlowJobRequest $request
     *
     * @return CloneFlowJobResponse
     */
    public function cloneFlowJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cloneFlowJobWithOptions($request, $runtime);
    }

    /**
     * @param CreateClusterHostGroupRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return CreateClusterHostGroupResponse
     */
    public function createClusterHostGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->comment)) {
            $query['Comment'] = $request->comment;
        }
        if (!Utils::isUnset($request->hostGroupName)) {
            $query['HostGroupName'] = $request->hostGroupName;
        }
        if (!Utils::isUnset($request->hostGroupParams)) {
            $query['HostGroupParams'] = $request->hostGroupParams;
        }
        if (!Utils::isUnset($request->hostGroupType)) {
            $query['HostGroupType'] = $request->hostGroupType;
        }
        if (!Utils::isUnset($request->payType)) {
            $query['PayType'] = $request->payType;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->securityGroupId)) {
            $query['SecurityGroupId'] = $request->securityGroupId;
        }
        if (!Utils::isUnset($request->vswitchId)) {
            $query['VswitchId'] = $request->vswitchId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateClusterHostGroup',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateClusterHostGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateClusterHostGroupRequest $request
     *
     * @return CreateClusterHostGroupResponse
     */
    public function createClusterHostGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createClusterHostGroupWithOptions($request, $runtime);
    }

    /**
     * @param CreateClusterTemplateRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return CreateClusterTemplateResponse
     */
    public function createClusterTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->autoRenew)) {
            $query['AutoRenew'] = $request->autoRenew;
        }
        if (!Utils::isUnset($request->bootstrapAction)) {
            $query['BootstrapAction'] = $request->bootstrapAction;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->clusterType)) {
            $query['ClusterType'] = $request->clusterType;
        }
        if (!Utils::isUnset($request->config)) {
            $query['Config'] = $request->config;
        }
        if (!Utils::isUnset($request->configurations)) {
            $query['Configurations'] = $request->configurations;
        }
        if (!Utils::isUnset($request->dataDiskEncrypted)) {
            $query['DataDiskEncrypted'] = $request->dataDiskEncrypted;
        }
        if (!Utils::isUnset($request->dataDiskKMSKeyId)) {
            $query['DataDiskKMSKeyId'] = $request->dataDiskKMSKeyId;
        }
        if (!Utils::isUnset($request->depositType)) {
            $query['DepositType'] = $request->depositType;
        }
        if (!Utils::isUnset($request->easEnable)) {
            $query['EasEnable'] = $request->easEnable;
        }
        if (!Utils::isUnset($request->emrVer)) {
            $query['EmrVer'] = $request->emrVer;
        }
        if (!Utils::isUnset($request->highAvailabilityEnable)) {
            $query['HighAvailabilityEnable'] = $request->highAvailabilityEnable;
        }
        if (!Utils::isUnset($request->hostGroup)) {
            $query['HostGroup'] = $request->hostGroup;
        }
        if (!Utils::isUnset($request->initCustomHiveMetaDb)) {
            $query['InitCustomHiveMetaDb'] = $request->initCustomHiveMetaDb;
        }
        if (!Utils::isUnset($request->instanceGeneration)) {
            $query['InstanceGeneration'] = $request->instanceGeneration;
        }
        if (!Utils::isUnset($request->ioOptimized)) {
            $query['IoOptimized'] = $request->ioOptimized;
        }
        if (!Utils::isUnset($request->isOpenPublicIp)) {
            $query['IsOpenPublicIp'] = $request->isOpenPublicIp;
        }
        if (!Utils::isUnset($request->keyPairName)) {
            $query['KeyPairName'] = $request->keyPairName;
        }
        if (!Utils::isUnset($request->logPath)) {
            $query['LogPath'] = $request->logPath;
        }
        if (!Utils::isUnset($request->machineType)) {
            $query['MachineType'] = $request->machineType;
        }
        if (!Utils::isUnset($request->masterPwd)) {
            $query['MasterPwd'] = $request->masterPwd;
        }
        if (!Utils::isUnset($request->metaStoreConf)) {
            $query['MetaStoreConf'] = $request->metaStoreConf;
        }
        if (!Utils::isUnset($request->metaStoreType)) {
            $query['MetaStoreType'] = $request->metaStoreType;
        }
        if (!Utils::isUnset($request->netType)) {
            $query['NetType'] = $request->netType;
        }
        if (!Utils::isUnset($request->optionSoftWareList)) {
            $query['OptionSoftWareList'] = $request->optionSoftWareList;
        }
        if (!Utils::isUnset($request->period)) {
            $query['Period'] = $request->period;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->securityGroupId)) {
            $query['SecurityGroupId'] = $request->securityGroupId;
        }
        if (!Utils::isUnset($request->securityGroupName)) {
            $query['SecurityGroupName'] = $request->securityGroupName;
        }
        if (!Utils::isUnset($request->sshEnable)) {
            $query['SshEnable'] = $request->sshEnable;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        if (!Utils::isUnset($request->templateName)) {
            $query['TemplateName'] = $request->templateName;
        }
        if (!Utils::isUnset($request->useCustomHiveMetaDb)) {
            $query['UseCustomHiveMetaDb'] = $request->useCustomHiveMetaDb;
        }
        if (!Utils::isUnset($request->useLocalMetaDb)) {
            $query['UseLocalMetaDb'] = $request->useLocalMetaDb;
        }
        if (!Utils::isUnset($request->userDefinedEmrEcsRole)) {
            $query['UserDefinedEmrEcsRole'] = $request->userDefinedEmrEcsRole;
        }
        if (!Utils::isUnset($request->vSwitchId)) {
            $query['VSwitchId'] = $request->vSwitchId;
        }
        if (!Utils::isUnset($request->vpcId)) {
            $query['VpcId'] = $request->vpcId;
        }
        if (!Utils::isUnset($request->zoneId)) {
            $query['ZoneId'] = $request->zoneId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateClusterTemplate',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateClusterTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateClusterTemplateRequest $request
     *
     * @return CreateClusterTemplateResponse
     */
    public function createClusterTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createClusterTemplateWithOptions($request, $runtime);
    }

    /**
     * @param CreateClusterV2Request $request
     * @param RuntimeOptions         $runtime
     *
     * @return CreateClusterV2Response
     */
    public function createClusterV2WithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->authorizeContent)) {
            $query['AuthorizeContent'] = $request->authorizeContent;
        }
        if (!Utils::isUnset($request->autoPayOrder)) {
            $query['AutoPayOrder'] = $request->autoPayOrder;
        }
        if (!Utils::isUnset($request->autoRenew)) {
            $query['AutoRenew'] = $request->autoRenew;
        }
        if (!Utils::isUnset($request->bootstrapAction)) {
            $query['BootstrapAction'] = $request->bootstrapAction;
        }
        if (!Utils::isUnset($request->chargeType)) {
            $query['ChargeType'] = $request->chargeType;
        }
        if (!Utils::isUnset($request->clickHouseConf)) {
            $query['ClickHouseConf'] = $request->clickHouseConf;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->clusterType)) {
            $query['ClusterType'] = $request->clusterType;
        }
        if (!Utils::isUnset($request->config)) {
            $query['Config'] = $request->config;
        }
        if (!Utils::isUnset($request->configurations)) {
            $query['Configurations'] = $request->configurations;
        }
        if (!Utils::isUnset($request->dataDiskEncrypted)) {
            $query['DataDiskEncrypted'] = $request->dataDiskEncrypted;
        }
        if (!Utils::isUnset($request->dataDiskKMSKeyId)) {
            $query['DataDiskKMSKeyId'] = $request->dataDiskKMSKeyId;
        }
        if (!Utils::isUnset($request->depositType)) {
            $query['DepositType'] = $request->depositType;
        }
        if (!Utils::isUnset($request->easEnable)) {
            $query['EasEnable'] = $request->easEnable;
        }
        if (!Utils::isUnset($request->emrVer)) {
            $query['EmrVer'] = $request->emrVer;
        }
        if (!Utils::isUnset($request->extraAttributes)) {
            $query['ExtraAttributes'] = $request->extraAttributes;
        }
        if (!Utils::isUnset($request->highAvailabilityEnable)) {
            $query['HighAvailabilityEnable'] = $request->highAvailabilityEnable;
        }
        if (!Utils::isUnset($request->hostComponentInfo)) {
            $query['HostComponentInfo'] = $request->hostComponentInfo;
        }
        if (!Utils::isUnset($request->hostGroup)) {
            $query['HostGroup'] = $request->hostGroup;
        }
        if (!Utils::isUnset($request->initCustomHiveMetaDB)) {
            $query['InitCustomHiveMetaDB'] = $request->initCustomHiveMetaDB;
        }
        if (!Utils::isUnset($request->instanceGeneration)) {
            $query['InstanceGeneration'] = $request->instanceGeneration;
        }
        if (!Utils::isUnset($request->ioOptimized)) {
            $query['IoOptimized'] = $request->ioOptimized;
        }
        if (!Utils::isUnset($request->isOpenPublicIp)) {
            $query['IsOpenPublicIp'] = $request->isOpenPublicIp;
        }
        if (!Utils::isUnset($request->keyPairName)) {
            $query['KeyPairName'] = $request->keyPairName;
        }
        if (!Utils::isUnset($request->logPath)) {
            $query['LogPath'] = $request->logPath;
        }
        if (!Utils::isUnset($request->machineType)) {
            $query['MachineType'] = $request->machineType;
        }
        if (!Utils::isUnset($request->masterPwd)) {
            $query['MasterPwd'] = $request->masterPwd;
        }
        if (!Utils::isUnset($request->metaStoreConf)) {
            $query['MetaStoreConf'] = $request->metaStoreConf;
        }
        if (!Utils::isUnset($request->metaStoreType)) {
            $query['MetaStoreType'] = $request->metaStoreType;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->netType)) {
            $query['NetType'] = $request->netType;
        }
        if (!Utils::isUnset($request->optionSoftWareList)) {
            $query['OptionSoftWareList'] = $request->optionSoftWareList;
        }
        if (!Utils::isUnset($request->period)) {
            $query['Period'] = $request->period;
        }
        if (!Utils::isUnset($request->promotionInfo)) {
            $query['PromotionInfo'] = $request->promotionInfo;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->relatedClusterId)) {
            $query['RelatedClusterId'] = $request->relatedClusterId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->securityGroupId)) {
            $query['SecurityGroupId'] = $request->securityGroupId;
        }
        if (!Utils::isUnset($request->securityGroupName)) {
            $query['SecurityGroupName'] = $request->securityGroupName;
        }
        if (!Utils::isUnset($request->serviceInfo)) {
            $query['ServiceInfo'] = $request->serviceInfo;
        }
        if (!Utils::isUnset($request->sshEnable)) {
            $query['SshEnable'] = $request->sshEnable;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        if (!Utils::isUnset($request->useCustomHiveMetaDB)) {
            $query['UseCustomHiveMetaDB'] = $request->useCustomHiveMetaDB;
        }
        if (!Utils::isUnset($request->useLocalMetaDb)) {
            $query['UseLocalMetaDb'] = $request->useLocalMetaDb;
        }
        if (!Utils::isUnset($request->userDefinedEmrEcsRole)) {
            $query['UserDefinedEmrEcsRole'] = $request->userDefinedEmrEcsRole;
        }
        if (!Utils::isUnset($request->userInfo)) {
            $query['UserInfo'] = $request->userInfo;
        }
        if (!Utils::isUnset($request->vSwitchId)) {
            $query['VSwitchId'] = $request->vSwitchId;
        }
        if (!Utils::isUnset($request->vpcId)) {
            $query['VpcId'] = $request->vpcId;
        }
        if (!Utils::isUnset($request->whiteListType)) {
            $query['WhiteListType'] = $request->whiteListType;
        }
        if (!Utils::isUnset($request->zoneId)) {
            $query['ZoneId'] = $request->zoneId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateClusterV2',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateClusterV2Response::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateClusterV2Request $request
     *
     * @return CreateClusterV2Response
     */
    public function createClusterV2($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createClusterV2WithOptions($request, $runtime);
    }

    /**
     * @param CreateClusterWithTemplateRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return CreateClusterWithTemplateResponse
     */
    public function createClusterWithTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->clusterName)) {
            $query['ClusterName'] = $request->clusterName;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->templateBizId)) {
            $query['TemplateBizId'] = $request->templateBizId;
        }
        if (!Utils::isUnset($request->uniqueTag)) {
            $query['UniqueTag'] = $request->uniqueTag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateClusterWithTemplate',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateClusterWithTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateClusterWithTemplateRequest $request
     *
     * @return CreateClusterWithTemplateResponse
     */
    public function createClusterWithTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createClusterWithTemplateWithOptions($request, $runtime);
    }

    /**
     * @param CreateFlowRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return CreateFlowResponse
     */
    public function createFlowWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->alertConf)) {
            $query['AlertConf'] = $request->alertConf;
        }
        if (!Utils::isUnset($request->alertDingDingGroupBizId)) {
            $query['AlertDingDingGroupBizId'] = $request->alertDingDingGroupBizId;
        }
        if (!Utils::isUnset($request->alertUserGroupBizId)) {
            $query['AlertUserGroupBizId'] = $request->alertUserGroupBizId;
        }
        if (!Utils::isUnset($request->application)) {
            $query['Application'] = $request->application;
        }
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->createCluster)) {
            $query['CreateCluster'] = $request->createCluster;
        }
        if (!Utils::isUnset($request->cronExpr)) {
            $query['CronExpr'] = $request->cronExpr;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->endSchedule)) {
            $query['EndSchedule'] = $request->endSchedule;
        }
        if (!Utils::isUnset($request->hostName)) {
            $query['HostName'] = $request->hostName;
        }
        if (!Utils::isUnset($request->lifecycle)) {
            $query['Lifecycle'] = $request->lifecycle;
        }
        if (!Utils::isUnset($request->logArchiveLocation)) {
            $query['LogArchiveLocation'] = $request->logArchiveLocation;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $query['Namespace'] = $request->namespace_;
        }
        if (!Utils::isUnset($request->parentCategory)) {
            $query['ParentCategory'] = $request->parentCategory;
        }
        if (!Utils::isUnset($request->parentFlowList)) {
            $query['ParentFlowList'] = $request->parentFlowList;
        }
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->startSchedule)) {
            $query['StartSchedule'] = $request->startSchedule;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateFlow',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateFlowResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateFlowRequest $request
     *
     * @return CreateFlowResponse
     */
    public function createFlow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createFlowWithOptions($request, $runtime);
    }

    /**
     * @param CreateFlowCategoryRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CreateFlowCategoryResponse
     */
    public function createFlowCategoryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->parentId)) {
            $query['ParentId'] = $request->parentId;
        }
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
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
            'action'      => 'CreateFlowCategory',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateFlowCategoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateFlowCategoryRequest $request
     *
     * @return CreateFlowCategoryResponse
     */
    public function createFlowCategory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createFlowCategoryWithOptions($request, $runtime);
    }

    /**
     * @param CreateFlowForWebRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CreateFlowForWebResponse
     */
    public function createFlowForWebWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->alertConf)) {
            $query['AlertConf'] = $request->alertConf;
        }
        if (!Utils::isUnset($request->alertDingDingGroupBizId)) {
            $query['AlertDingDingGroupBizId'] = $request->alertDingDingGroupBizId;
        }
        if (!Utils::isUnset($request->alertUserGroupBizId)) {
            $query['AlertUserGroupBizId'] = $request->alertUserGroupBizId;
        }
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->createCluster)) {
            $query['CreateCluster'] = $request->createCluster;
        }
        if (!Utils::isUnset($request->cronExpr)) {
            $query['CronExpr'] = $request->cronExpr;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->endSchedule)) {
            $query['EndSchedule'] = $request->endSchedule;
        }
        if (!Utils::isUnset($request->graph)) {
            $query['Graph'] = $request->graph;
        }
        if (!Utils::isUnset($request->hostName)) {
            $query['HostName'] = $request->hostName;
        }
        if (!Utils::isUnset($request->lifecycle)) {
            $query['Lifecycle'] = $request->lifecycle;
        }
        if (!Utils::isUnset($request->logArchiveLocation)) {
            $query['LogArchiveLocation'] = $request->logArchiveLocation;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $query['Namespace'] = $request->namespace_;
        }
        if (!Utils::isUnset($request->parentCategory)) {
            $query['ParentCategory'] = $request->parentCategory;
        }
        if (!Utils::isUnset($request->parentFlowList)) {
            $query['ParentFlowList'] = $request->parentFlowList;
        }
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->startSchedule)) {
            $query['StartSchedule'] = $request->startSchedule;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateFlowForWeb',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateFlowForWebResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateFlowForWebRequest $request
     *
     * @return CreateFlowForWebResponse
     */
    public function createFlowForWeb($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createFlowForWebWithOptions($request, $runtime);
    }

    /**
     * @param CreateFlowJobRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return CreateFlowJobResponse
     */
    public function createFlowJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->adhoc)) {
            $query['Adhoc'] = $request->adhoc;
        }
        if (!Utils::isUnset($request->alertConf)) {
            $query['AlertConf'] = $request->alertConf;
        }
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->failAct)) {
            $query['FailAct'] = $request->failAct;
        }
        if (!Utils::isUnset($request->maxRetry)) {
            $query['MaxRetry'] = $request->maxRetry;
        }
        if (!Utils::isUnset($request->maxRunningTimeSec)) {
            $query['MaxRunningTimeSec'] = $request->maxRunningTimeSec;
        }
        if (!Utils::isUnset($request->mode)) {
            $query['Mode'] = $request->mode;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->parentCategory)) {
            $query['ParentCategory'] = $request->parentCategory;
        }
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->retryInterval)) {
            $query['RetryInterval'] = $request->retryInterval;
        }
        if (!Utils::isUnset($request->retryPolicy)) {
            $query['RetryPolicy'] = $request->retryPolicy;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $body = [];
        if (!Utils::isUnset($request->customVariables)) {
            $body['CustomVariables'] = $request->customVariables;
        }
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->envConf)) {
            $body['EnvConf'] = $request->envConf;
        }
        if (!Utils::isUnset($request->monitorConf)) {
            $body['MonitorConf'] = $request->monitorConf;
        }
        if (!Utils::isUnset($request->paramConf)) {
            $body['ParamConf'] = $request->paramConf;
        }
        if (!Utils::isUnset($request->params)) {
            $body['Params'] = $request->params;
        }
        if (!Utils::isUnset($request->resourceList)) {
            $body['ResourceList'] = $request->resourceList;
        }
        if (!Utils::isUnset($request->runConf)) {
            $body['RunConf'] = $request->runConf;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateFlowJob',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateFlowJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateFlowJobRequest $request
     *
     * @return CreateFlowJobResponse
     */
    public function createFlowJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createFlowJobWithOptions($request, $runtime);
    }

    /**
     * @param CreateFlowProjectRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CreateFlowProjectResponse
     */
    public function createFlowProjectWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->productType)) {
            $query['ProductType'] = $request->productType;
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
            'action'      => 'CreateFlowProject',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateFlowProjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateFlowProjectRequest $request
     *
     * @return CreateFlowProjectResponse
     */
    public function createFlowProject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createFlowProjectWithOptions($request, $runtime);
    }

    /**
     * @param CreateFlowProjectClusterSettingRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return CreateFlowProjectClusterSettingResponse
     */
    public function createFlowProjectClusterSettingWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->defaultQueue)) {
            $query['DefaultQueue'] = $request->defaultQueue;
        }
        if (!Utils::isUnset($request->defaultUser)) {
            $query['DefaultUser'] = $request->defaultUser;
        }
        if (!Utils::isUnset($request->hostList)) {
            $query['HostList'] = $request->hostList;
        }
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->queueList)) {
            $query['QueueList'] = $request->queueList;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->userList)) {
            $query['UserList'] = $request->userList;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateFlowProjectClusterSetting',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateFlowProjectClusterSettingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateFlowProjectClusterSettingRequest $request
     *
     * @return CreateFlowProjectClusterSettingResponse
     */
    public function createFlowProjectClusterSetting($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createFlowProjectClusterSettingWithOptions($request, $runtime);
    }

    /**
     * @param CreateFlowProjectUserRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return CreateFlowProjectUserResponse
     */
    public function createFlowProjectUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->user)) {
            $query['User'] = $request->user;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateFlowProjectUser',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateFlowProjectUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateFlowProjectUserRequest $request
     *
     * @return CreateFlowProjectUserResponse
     */
    public function createFlowProjectUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createFlowProjectUserWithOptions($request, $runtime);
    }

    /**
     * @param CreateResourcePoolRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CreateResourcePoolResponse
     */
    public function createResourcePoolWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->active)) {
            $query['Active'] = $request->active;
        }
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->config)) {
            $query['Config'] = $request->config;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->note)) {
            $query['Note'] = $request->note;
        }
        if (!Utils::isUnset($request->poolType)) {
            $query['PoolType'] = $request->poolType;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->yarnSiteConfig)) {
            $query['YarnSiteConfig'] = $request->yarnSiteConfig;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateResourcePool',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateResourcePoolResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateResourcePoolRequest $request
     *
     * @return CreateResourcePoolResponse
     */
    public function createResourcePool($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createResourcePoolWithOptions($request, $runtime);
    }

    /**
     * @param CreateResourceQueueRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return CreateResourceQueueResponse
     */
    public function createResourceQueueWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->config)) {
            $query['Config'] = $request->config;
        }
        if (!Utils::isUnset($request->leaf)) {
            $query['Leaf'] = $request->leaf;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->parentQueueId)) {
            $query['ParentQueueId'] = $request->parentQueueId;
        }
        if (!Utils::isUnset($request->qualifiedName)) {
            $query['QualifiedName'] = $request->qualifiedName;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->resourcePoolId)) {
            $query['ResourcePoolId'] = $request->resourcePoolId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateResourceQueue',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateResourceQueueResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateResourceQueueRequest $request
     *
     * @return CreateResourceQueueResponse
     */
    public function createResourceQueue($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createResourceQueueWithOptions($request, $runtime);
    }

    /**
     * @param CreateScalingGroupV2Request $request
     * @param RuntimeOptions              $runtime
     *
     * @return CreateScalingGroupV2Response
     */
    public function createScalingGroupV2WithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->hostGroupId)) {
            $query['HostGroupId'] = $request->hostGroupId;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateScalingGroupV2',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateScalingGroupV2Response::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateScalingGroupV2Request $request
     *
     * @return CreateScalingGroupV2Response
     */
    public function createScalingGroupV2($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createScalingGroupV2WithOptions($request, $runtime);
    }

    /**
     * @param DeleteClusterTemplateRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DeleteClusterTemplateResponse
     */
    public function deleteClusterTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bizId)) {
            $query['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteClusterTemplate',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteClusterTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteClusterTemplateRequest $request
     *
     * @return DeleteClusterTemplateResponse
     */
    public function deleteClusterTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteClusterTemplateWithOptions($request, $runtime);
    }

    /**
     * @param DeleteFlowRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return DeleteFlowResponse
     */
    public function deleteFlowWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteFlow',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteFlowResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteFlowRequest $request
     *
     * @return DeleteFlowResponse
     */
    public function deleteFlow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteFlowWithOptions($request, $runtime);
    }

    /**
     * @param DeleteFlowCategoryRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteFlowCategoryResponse
     */
    public function deleteFlowCategoryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteFlowCategory',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteFlowCategoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteFlowCategoryRequest $request
     *
     * @return DeleteFlowCategoryResponse
     */
    public function deleteFlowCategory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteFlowCategoryWithOptions($request, $runtime);
    }

    /**
     * @param DeleteFlowJobRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteFlowJobResponse
     */
    public function deleteFlowJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteFlowJob',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteFlowJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteFlowJobRequest $request
     *
     * @return DeleteFlowJobResponse
     */
    public function deleteFlowJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteFlowJobWithOptions($request, $runtime);
    }

    /**
     * @param DeleteFlowProjectRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteFlowProjectResponse
     */
    public function deleteFlowProjectWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteFlowProject',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteFlowProjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteFlowProjectRequest $request
     *
     * @return DeleteFlowProjectResponse
     */
    public function deleteFlowProject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteFlowProjectWithOptions($request, $runtime);
    }

    /**
     * @param DeleteFlowProjectClusterSettingRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DeleteFlowProjectClusterSettingResponse
     */
    public function deleteFlowProjectClusterSettingWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteFlowProjectClusterSetting',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteFlowProjectClusterSettingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteFlowProjectClusterSettingRequest $request
     *
     * @return DeleteFlowProjectClusterSettingResponse
     */
    public function deleteFlowProjectClusterSetting($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteFlowProjectClusterSettingWithOptions($request, $runtime);
    }

    /**
     * @param DeleteFlowProjectUserRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DeleteFlowProjectUserResponse
     */
    public function deleteFlowProjectUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->userName)) {
            $query['UserName'] = $request->userName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteFlowProjectUser',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteFlowProjectUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteFlowProjectUserRequest $request
     *
     * @return DeleteFlowProjectUserResponse
     */
    public function deleteFlowProjectUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteFlowProjectUserWithOptions($request, $runtime);
    }

    /**
     * @param DeleteResourcePoolRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteResourcePoolResponse
     */
    public function deleteResourcePoolWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->resourcePoolId)) {
            $query['ResourcePoolId'] = $request->resourcePoolId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteResourcePool',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteResourcePoolResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteResourcePoolRequest $request
     *
     * @return DeleteResourcePoolResponse
     */
    public function deleteResourcePool($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteResourcePoolWithOptions($request, $runtime);
    }

    /**
     * @param DeleteResourceQueueRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DeleteResourceQueueResponse
     */
    public function deleteResourceQueueWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->resourceQueueId)) {
            $query['ResourceQueueId'] = $request->resourceQueueId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteResourceQueue',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteResourceQueueResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteResourceQueueRequest $request
     *
     * @return DeleteResourceQueueResponse
     */
    public function deleteResourceQueue($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteResourceQueueWithOptions($request, $runtime);
    }

    /**
     * @param DescribeClusterBasicInfoRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeClusterBasicInfoResponse
     */
    public function describeClusterBasicInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeClusterBasicInfo',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeClusterBasicInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeClusterBasicInfoRequest $request
     *
     * @return DescribeClusterBasicInfoResponse
     */
    public function describeClusterBasicInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeClusterBasicInfoWithOptions($request, $runtime);
    }

    /**
     * @param DescribeClusterOperationHostTaskLogRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return DescribeClusterOperationHostTaskLogResponse
     */
    public function describeClusterOperationHostTaskLogWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->hostId)) {
            $query['HostId'] = $request->hostId;
        }
        if (!Utils::isUnset($request->operationId)) {
            $query['OperationId'] = $request->operationId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeClusterOperationHostTaskLog',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeClusterOperationHostTaskLogResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeClusterOperationHostTaskLogRequest $request
     *
     * @return DescribeClusterOperationHostTaskLogResponse
     */
    public function describeClusterOperationHostTaskLog($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeClusterOperationHostTaskLogWithOptions($request, $runtime);
    }

    /**
     * @param DescribeClusterResourcePoolSchedulerTypeRequest $request
     * @param RuntimeOptions                                  $runtime
     *
     * @return DescribeClusterResourcePoolSchedulerTypeResponse
     */
    public function describeClusterResourcePoolSchedulerTypeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeClusterResourcePoolSchedulerType',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeClusterResourcePoolSchedulerTypeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeClusterResourcePoolSchedulerTypeRequest $request
     *
     * @return DescribeClusterResourcePoolSchedulerTypeResponse
     */
    public function describeClusterResourcePoolSchedulerType($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeClusterResourcePoolSchedulerTypeWithOptions($request, $runtime);
    }

    /**
     * @param DescribeClusterServiceRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeClusterServiceResponse
     */
    public function describeClusterServiceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->serviceName)) {
            $query['ServiceName'] = $request->serviceName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeClusterService',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeClusterServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeClusterServiceRequest $request
     *
     * @return DescribeClusterServiceResponse
     */
    public function describeClusterService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeClusterServiceWithOptions($request, $runtime);
    }

    /**
     * @param DescribeClusterServiceConfigRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeClusterServiceConfigResponse
     */
    public function describeClusterServiceConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->configVersion)) {
            $query['ConfigVersion'] = $request->configVersion;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->hostInstanceId)) {
            $query['HostInstanceId'] = $request->hostInstanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->serviceName)) {
            $query['ServiceName'] = $request->serviceName;
        }
        if (!Utils::isUnset($request->tagValue)) {
            $query['TagValue'] = $request->tagValue;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeClusterServiceConfig',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeClusterServiceConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeClusterServiceConfigRequest $request
     *
     * @return DescribeClusterServiceConfigResponse
     */
    public function describeClusterServiceConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeClusterServiceConfigWithOptions($request, $runtime);
    }

    /**
     * @param DescribeClusterServiceConfigTagRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DescribeClusterServiceConfigTagResponse
     */
    public function describeClusterServiceConfigTagWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->configTag)) {
            $query['ConfigTag'] = $request->configTag;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->serviceName)) {
            $query['ServiceName'] = $request->serviceName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeClusterServiceConfigTag',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeClusterServiceConfigTagResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeClusterServiceConfigTagRequest $request
     *
     * @return DescribeClusterServiceConfigTagResponse
     */
    public function describeClusterServiceConfigTag($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeClusterServiceConfigTagWithOptions($request, $runtime);
    }

    /**
     * @param DescribeClusterTemplateRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeClusterTemplateResponse
     */
    public function describeClusterTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bizId)) {
            $query['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeClusterTemplate',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeClusterTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeClusterTemplateRequest $request
     *
     * @return DescribeClusterTemplateResponse
     */
    public function describeClusterTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeClusterTemplateWithOptions($request, $runtime);
    }

    /**
     * @param DescribeClusterV2Request $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeClusterV2Response
     */
    public function describeClusterV2WithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeClusterV2',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeClusterV2Response::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeClusterV2Request $request
     *
     * @return DescribeClusterV2Response
     */
    public function describeClusterV2($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeClusterV2WithOptions($request, $runtime);
    }

    /**
     * @param DescribeFlowRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DescribeFlowResponse
     */
    public function describeFlowWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeFlow',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeFlowResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeFlowRequest $request
     *
     * @return DescribeFlowResponse
     */
    public function describeFlow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFlowWithOptions($request, $runtime);
    }

    /**
     * @param DescribeFlowCategoryRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeFlowCategoryResponse
     */
    public function describeFlowCategoryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeFlowCategory',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeFlowCategoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeFlowCategoryRequest $request
     *
     * @return DescribeFlowCategoryResponse
     */
    public function describeFlowCategory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFlowCategoryWithOptions($request, $runtime);
    }

    /**
     * @param DescribeFlowCategoryTreeRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeFlowCategoryTreeResponse
     */
    public function describeFlowCategoryTreeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->categoryId)) {
            $query['CategoryId'] = $request->categoryId;
        }
        if (!Utils::isUnset($request->keyword)) {
            $query['Keyword'] = $request->keyword;
        }
        if (!Utils::isUnset($request->mode)) {
            $query['Mode'] = $request->mode;
        }
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
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
            'action'      => 'DescribeFlowCategoryTree',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeFlowCategoryTreeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeFlowCategoryTreeRequest $request
     *
     * @return DescribeFlowCategoryTreeResponse
     */
    public function describeFlowCategoryTree($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFlowCategoryTreeWithOptions($request, $runtime);
    }

    /**
     * @param DescribeFlowInstanceRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeFlowInstanceResponse
     */
    public function describeFlowInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeFlowInstance',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeFlowInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeFlowInstanceRequest $request
     *
     * @return DescribeFlowInstanceResponse
     */
    public function describeFlowInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFlowInstanceWithOptions($request, $runtime);
    }

    /**
     * @param DescribeFlowJobRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeFlowJobResponse
     */
    public function describeFlowJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeFlowJob',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeFlowJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeFlowJobRequest $request
     *
     * @return DescribeFlowJobResponse
     */
    public function describeFlowJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFlowJobWithOptions($request, $runtime);
    }

    /**
     * @param DescribeFlowNodeInstanceRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeFlowNodeInstanceResponse
     */
    public function describeFlowNodeInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeFlowNodeInstance',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeFlowNodeInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeFlowNodeInstanceRequest $request
     *
     * @return DescribeFlowNodeInstanceResponse
     */
    public function describeFlowNodeInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFlowNodeInstanceWithOptions($request, $runtime);
    }

    /**
     * @param DescribeFlowNodeInstanceContainerLogRequest $request
     * @param RuntimeOptions                              $runtime
     *
     * @return DescribeFlowNodeInstanceContainerLogResponse
     */
    public function describeFlowNodeInstanceContainerLogWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->containerId)) {
            $query['ContainerId'] = $request->containerId;
        }
        if (!Utils::isUnset($request->length)) {
            $query['Length'] = $request->length;
        }
        if (!Utils::isUnset($request->logName)) {
            $query['LogName'] = $request->logName;
        }
        if (!Utils::isUnset($request->nodeInstanceId)) {
            $query['NodeInstanceId'] = $request->nodeInstanceId;
        }
        if (!Utils::isUnset($request->offset)) {
            $query['Offset'] = $request->offset;
        }
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeFlowNodeInstanceContainerLog',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeFlowNodeInstanceContainerLogResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeFlowNodeInstanceContainerLogRequest $request
     *
     * @return DescribeFlowNodeInstanceContainerLogResponse
     */
    public function describeFlowNodeInstanceContainerLog($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFlowNodeInstanceContainerLogWithOptions($request, $runtime);
    }

    /**
     * @param DescribeFlowNodeInstanceLauncherLogRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return DescribeFlowNodeInstanceLauncherLogResponse
     */
    public function describeFlowNodeInstanceLauncherLogWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->length)) {
            $query['Length'] = $request->length;
        }
        if (!Utils::isUnset($request->lines)) {
            $query['Lines'] = $request->lines;
        }
        if (!Utils::isUnset($request->nodeInstanceId)) {
            $query['NodeInstanceId'] = $request->nodeInstanceId;
        }
        if (!Utils::isUnset($request->offset)) {
            $query['Offset'] = $request->offset;
        }
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->reverse)) {
            $query['Reverse'] = $request->reverse;
        }
        if (!Utils::isUnset($request->start)) {
            $query['Start'] = $request->start;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeFlowNodeInstanceLauncherLog',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeFlowNodeInstanceLauncherLogResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeFlowNodeInstanceLauncherLogRequest $request
     *
     * @return DescribeFlowNodeInstanceLauncherLogResponse
     */
    public function describeFlowNodeInstanceLauncherLog($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFlowNodeInstanceLauncherLogWithOptions($request, $runtime);
    }

    /**
     * @param DescribeFlowProjectRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeFlowProjectResponse
     */
    public function describeFlowProjectWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeFlowProject',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeFlowProjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeFlowProjectRequest $request
     *
     * @return DescribeFlowProjectResponse
     */
    public function describeFlowProject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFlowProjectWithOptions($request, $runtime);
    }

    /**
     * @param DescribeFlowProjectClusterSettingRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return DescribeFlowProjectClusterSettingResponse
     */
    public function describeFlowProjectClusterSettingWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeFlowProjectClusterSetting',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeFlowProjectClusterSettingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeFlowProjectClusterSettingRequest $request
     *
     * @return DescribeFlowProjectClusterSettingResponse
     */
    public function describeFlowProjectClusterSetting($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFlowProjectClusterSettingWithOptions($request, $runtime);
    }

    /**
     * @param DescribeScalingConfigItemV2Request $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeScalingConfigItemV2Response
     */
    public function describeScalingConfigItemV2WithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->configItemType)) {
            $query['ConfigItemType'] = $request->configItemType;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->scalingConfigItemId)) {
            $query['ScalingConfigItemId'] = $request->scalingConfigItemId;
        }
        if (!Utils::isUnset($request->scalingGroupBizId)) {
            $query['ScalingGroupBizId'] = $request->scalingGroupBizId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeScalingConfigItemV2',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeScalingConfigItemV2Response::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeScalingConfigItemV2Request $request
     *
     * @return DescribeScalingConfigItemV2Response
     */
    public function describeScalingConfigItemV2($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeScalingConfigItemV2WithOptions($request, $runtime);
    }

    /**
     * @param DescribeScalingGroupInstanceV2Request $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribeScalingGroupInstanceV2Response
     */
    public function describeScalingGroupInstanceV2WithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->hostGroupBizId)) {
            $query['HostGroupBizId'] = $request->hostGroupBizId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->scalingGroupBizId)) {
            $query['ScalingGroupBizId'] = $request->scalingGroupBizId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeScalingGroupInstanceV2',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeScalingGroupInstanceV2Response::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeScalingGroupInstanceV2Request $request
     *
     * @return DescribeScalingGroupInstanceV2Response
     */
    public function describeScalingGroupInstanceV2($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeScalingGroupInstanceV2WithOptions($request, $runtime);
    }

    /**
     * @param DescribeScalingGroupV2Request $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeScalingGroupV2Response
     */
    public function describeScalingGroupV2WithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->hostGroupBizId)) {
            $query['HostGroupBizId'] = $request->hostGroupBizId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->scalingGroupBizId)) {
            $query['ScalingGroupBizId'] = $request->scalingGroupBizId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeScalingGroupV2',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeScalingGroupV2Response::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeScalingGroupV2Request $request
     *
     * @return DescribeScalingGroupV2Response
     */
    public function describeScalingGroupV2($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeScalingGroupV2WithOptions($request, $runtime);
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
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'JoinResourceGroup',
            'version'     => '2016-04-08',
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
     * @param KillFlowJobRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return KillFlowJobResponse
     */
    public function killFlowJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->jobInstanceId)) {
            $query['JobInstanceId'] = $request->jobInstanceId;
        }
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'KillFlowJob',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return KillFlowJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param KillFlowJobRequest $request
     *
     * @return KillFlowJobResponse
     */
    public function killFlowJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->killFlowJobWithOptions($request, $runtime);
    }

    /**
     * @param ListClusterHostRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListClusterHostResponse
     */
    public function listClusterHostWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->componentName)) {
            $query['ComponentName'] = $request->componentName;
        }
        if (!Utils::isUnset($request->groupType)) {
            $query['GroupType'] = $request->groupType;
        }
        if (!Utils::isUnset($request->hostGroupId)) {
            $query['HostGroupId'] = $request->hostGroupId;
        }
        if (!Utils::isUnset($request->hostInstanceId)) {
            $query['HostInstanceId'] = $request->hostInstanceId;
        }
        if (!Utils::isUnset($request->hostName)) {
            $query['HostName'] = $request->hostName;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->privateIp)) {
            $query['PrivateIp'] = $request->privateIp;
        }
        if (!Utils::isUnset($request->publicIp)) {
            $query['PublicIp'] = $request->publicIp;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->statusList)) {
            $query['StatusList'] = $request->statusList;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListClusterHost',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListClusterHostResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListClusterHostRequest $request
     *
     * @return ListClusterHostResponse
     */
    public function listClusterHost($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listClusterHostWithOptions($request, $runtime);
    }

    /**
     * @param ListClusterHostComponentRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ListClusterHostComponentResponse
     */
    public function listClusterHostComponentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->componentName)) {
            $query['ComponentName'] = $request->componentName;
        }
        if (!Utils::isUnset($request->componentStatus)) {
            $query['ComponentStatus'] = $request->componentStatus;
        }
        if (!Utils::isUnset($request->hostInstanceId)) {
            $query['HostInstanceId'] = $request->hostInstanceId;
        }
        if (!Utils::isUnset($request->hostName)) {
            $query['HostName'] = $request->hostName;
        }
        if (!Utils::isUnset($request->hostRole)) {
            $query['HostRole'] = $request->hostRole;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->serviceName)) {
            $query['ServiceName'] = $request->serviceName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListClusterHostComponent',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListClusterHostComponentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListClusterHostComponentRequest $request
     *
     * @return ListClusterHostComponentResponse
     */
    public function listClusterHostComponent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listClusterHostComponentWithOptions($request, $runtime);
    }

    /**
     * @param ListClusterHostGroupRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ListClusterHostGroupResponse
     */
    public function listClusterHostGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->hostGroupId)) {
            $query['HostGroupId'] = $request->hostGroupId;
        }
        if (!Utils::isUnset($request->hostGroupName)) {
            $query['HostGroupName'] = $request->hostGroupName;
        }
        if (!Utils::isUnset($request->hostGroupType)) {
            $query['HostGroupType'] = $request->hostGroupType;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->statusList)) {
            $query['StatusList'] = $request->statusList;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListClusterHostGroup',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListClusterHostGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListClusterHostGroupRequest $request
     *
     * @return ListClusterHostGroupResponse
     */
    public function listClusterHostGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listClusterHostGroupWithOptions($request, $runtime);
    }

    /**
     * @param ListClusterInstalledServiceRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ListClusterInstalledServiceResponse
     */
    public function listClusterInstalledServiceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListClusterInstalledService',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListClusterInstalledServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListClusterInstalledServiceRequest $request
     *
     * @return ListClusterInstalledServiceResponse
     */
    public function listClusterInstalledService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listClusterInstalledServiceWithOptions($request, $runtime);
    }

    /**
     * @param ListClusterOperationRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ListClusterOperationResponse
     */
    public function listClusterOperationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->operationId)) {
            $query['OperationId'] = $request->operationId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->serviceName)) {
            $query['ServiceName'] = $request->serviceName;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListClusterOperation',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListClusterOperationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListClusterOperationRequest $request
     *
     * @return ListClusterOperationResponse
     */
    public function listClusterOperation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listClusterOperationWithOptions($request, $runtime);
    }

    /**
     * @param ListClusterOperationHostRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ListClusterOperationHostResponse
     */
    public function listClusterOperationHostWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->operationId)) {
            $query['OperationId'] = $request->operationId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListClusterOperationHost',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListClusterOperationHostResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListClusterOperationHostRequest $request
     *
     * @return ListClusterOperationHostResponse
     */
    public function listClusterOperationHost($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listClusterOperationHostWithOptions($request, $runtime);
    }

    /**
     * @param ListClusterOperationHostTaskRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return ListClusterOperationHostTaskResponse
     */
    public function listClusterOperationHostTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->hostId)) {
            $query['HostId'] = $request->hostId;
        }
        if (!Utils::isUnset($request->operationId)) {
            $query['OperationId'] = $request->operationId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListClusterOperationHostTask',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListClusterOperationHostTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListClusterOperationHostTaskRequest $request
     *
     * @return ListClusterOperationHostTaskResponse
     */
    public function listClusterOperationHostTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listClusterOperationHostTaskWithOptions($request, $runtime);
    }

    /**
     * @param ListClusterOperationTaskRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ListClusterOperationTaskResponse
     */
    public function listClusterOperationTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->operationId)) {
            $query['OperationId'] = $request->operationId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListClusterOperationTask',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListClusterOperationTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListClusterOperationTaskRequest $request
     *
     * @return ListClusterOperationTaskResponse
     */
    public function listClusterOperationTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listClusterOperationTaskWithOptions($request, $runtime);
    }

    /**
     * @param ListClusterServiceRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ListClusterServiceResponse
     */
    public function listClusterServiceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListClusterService',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListClusterServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListClusterServiceRequest $request
     *
     * @return ListClusterServiceResponse
     */
    public function listClusterService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listClusterServiceWithOptions($request, $runtime);
    }

    /**
     * @param ListClusterServiceComponentHealthInfoRequest $request
     * @param RuntimeOptions                               $runtime
     *
     * @return ListClusterServiceComponentHealthInfoResponse
     */
    public function listClusterServiceComponentHealthInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->componentName)) {
            $query['ComponentName'] = $request->componentName;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->serviceName)) {
            $query['ServiceName'] = $request->serviceName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListClusterServiceComponentHealthInfo',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListClusterServiceComponentHealthInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListClusterServiceComponentHealthInfoRequest $request
     *
     * @return ListClusterServiceComponentHealthInfoResponse
     */
    public function listClusterServiceComponentHealthInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listClusterServiceComponentHealthInfoWithOptions($request, $runtime);
    }

    /**
     * @param ListClusterServiceConfigHistoryRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return ListClusterServiceConfigHistoryResponse
     */
    public function listClusterServiceConfigHistoryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->author)) {
            $query['Author'] = $request->author;
        }
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->comment)) {
            $query['Comment'] = $request->comment;
        }
        if (!Utils::isUnset($request->configFileName)) {
            $query['ConfigFileName'] = $request->configFileName;
        }
        if (!Utils::isUnset($request->configItemKey)) {
            $query['ConfigItemKey'] = $request->configItemKey;
        }
        if (!Utils::isUnset($request->configVersion)) {
            $query['ConfigVersion'] = $request->configVersion;
        }
        if (!Utils::isUnset($request->hostGroupId)) {
            $query['HostGroupId'] = $request->hostGroupId;
        }
        if (!Utils::isUnset($request->hostInstanceId)) {
            $query['HostInstanceId'] = $request->hostInstanceId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->serviceName)) {
            $query['ServiceName'] = $request->serviceName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListClusterServiceConfigHistory',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListClusterServiceConfigHistoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListClusterServiceConfigHistoryRequest $request
     *
     * @return ListClusterServiceConfigHistoryResponse
     */
    public function listClusterServiceConfigHistory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listClusterServiceConfigHistoryWithOptions($request, $runtime);
    }

    /**
     * @param ListClusterServiceQuickLinkRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ListClusterServiceQuickLinkResponse
     */
    public function listClusterServiceQuickLinkWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->directType)) {
            $query['DirectType'] = $request->directType;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->serviceName)) {
            $query['ServiceName'] = $request->serviceName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListClusterServiceQuickLink',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListClusterServiceQuickLinkResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListClusterServiceQuickLinkRequest $request
     *
     * @return ListClusterServiceQuickLinkResponse
     */
    public function listClusterServiceQuickLink($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listClusterServiceQuickLinkWithOptions($request, $runtime);
    }

    /**
     * @param ListClusterTemplatesRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ListClusterTemplatesResponse
     */
    public function listClusterTemplatesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bizId)) {
            $query['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->productType)) {
            $query['ProductType'] = $request->productType;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListClusterTemplates',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListClusterTemplatesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListClusterTemplatesRequest $request
     *
     * @return ListClusterTemplatesResponse
     */
    public function listClusterTemplates($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listClusterTemplatesWithOptions($request, $runtime);
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
        if (!Utils::isUnset($request->clusterTypeList)) {
            $query['ClusterTypeList'] = $request->clusterTypeList;
        }
        if (!Utils::isUnset($request->createType)) {
            $query['CreateType'] = $request->createType;
        }
        if (!Utils::isUnset($request->defaultStatus)) {
            $query['DefaultStatus'] = $request->defaultStatus;
        }
        if (!Utils::isUnset($request->depositType)) {
            $query['DepositType'] = $request->depositType;
        }
        if (!Utils::isUnset($request->expiredTagList)) {
            $query['ExpiredTagList'] = $request->expiredTagList;
        }
        if (!Utils::isUnset($request->isDesc)) {
            $query['IsDesc'] = $request->isDesc;
        }
        if (!Utils::isUnset($request->machineType)) {
            $query['MachineType'] = $request->machineType;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->statusList)) {
            $query['StatusList'] = $request->statusList;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        if (!Utils::isUnset($request->vpcId)) {
            $query['VpcId'] = $request->vpcId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListClusters',
            'version'     => '2016-04-08',
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
     * @param ListEmrAvailableConfigRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ListEmrAvailableConfigResponse
     */
    public function listEmrAvailableConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListEmrAvailableConfig',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListEmrAvailableConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListEmrAvailableConfigRequest $request
     *
     * @return ListEmrAvailableConfigResponse
     */
    public function listEmrAvailableConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listEmrAvailableConfigWithOptions($request, $runtime);
    }

    /**
     * @param ListEmrAvailableResourceRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ListEmrAvailableResourceResponse
     */
    public function listEmrAvailableResourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->clusterType)) {
            $query['ClusterType'] = $request->clusterType;
        }
        if (!Utils::isUnset($request->dataDiskType)) {
            $query['DataDiskType'] = $request->dataDiskType;
        }
        if (!Utils::isUnset($request->depositType)) {
            $query['DepositType'] = $request->depositType;
        }
        if (!Utils::isUnset($request->destinationResource)) {
            $query['DestinationResource'] = $request->destinationResource;
        }
        if (!Utils::isUnset($request->emrVersion)) {
            $query['EmrVersion'] = $request->emrVersion;
        }
        if (!Utils::isUnset($request->instanceChargeType)) {
            $query['InstanceChargeType'] = $request->instanceChargeType;
        }
        if (!Utils::isUnset($request->instanceType)) {
            $query['InstanceType'] = $request->instanceType;
        }
        if (!Utils::isUnset($request->netType)) {
            $query['NetType'] = $request->netType;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->spotStrategy)) {
            $query['SpotStrategy'] = $request->spotStrategy;
        }
        if (!Utils::isUnset($request->systemDiskType)) {
            $query['SystemDiskType'] = $request->systemDiskType;
        }
        if (!Utils::isUnset($request->zoneId)) {
            $query['ZoneId'] = $request->zoneId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListEmrAvailableResource',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListEmrAvailableResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListEmrAvailableResourceRequest $request
     *
     * @return ListEmrAvailableResourceResponse
     */
    public function listEmrAvailableResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listEmrAvailableResourceWithOptions($request, $runtime);
    }

    /**
     * @param ListEmrMainVersionRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ListEmrMainVersionResponse
     */
    public function listEmrMainVersionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->emrVersion)) {
            $query['EmrVersion'] = $request->emrVersion;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->stackName)) {
            $query['StackName'] = $request->stackName;
        }
        if (!Utils::isUnset($request->stackVersion)) {
            $query['StackVersion'] = $request->stackVersion;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListEmrMainVersion',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListEmrMainVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListEmrMainVersionRequest $request
     *
     * @return ListEmrMainVersionResponse
     */
    public function listEmrMainVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listEmrMainVersionWithOptions($request, $runtime);
    }

    /**
     * @param ListFlowRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return ListFlowResponse
     */
    public function listFlowWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->jobId)) {
            $query['JobId'] = $request->jobId;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->periodic)) {
            $query['Periodic'] = $request->periodic;
        }
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListFlow',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListFlowResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListFlowRequest $request
     *
     * @return ListFlowResponse
     */
    public function listFlow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listFlowWithOptions($request, $runtime);
    }

    /**
     * @param ListFlowCategoryRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListFlowCategoryResponse
     */
    public function listFlowCategoryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->parentId)) {
            $query['ParentId'] = $request->parentId;
        }
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->root)) {
            $query['Root'] = $request->root;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListFlowCategory',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListFlowCategoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListFlowCategoryRequest $request
     *
     * @return ListFlowCategoryResponse
     */
    public function listFlowCategory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listFlowCategoryWithOptions($request, $runtime);
    }

    /**
     * @param ListFlowClusterRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListFlowClusterResponse
     */
    public function listFlowClusterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
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
            'action'      => 'ListFlowCluster',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListFlowClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListFlowClusterRequest $request
     *
     * @return ListFlowClusterResponse
     */
    public function listFlowCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listFlowClusterWithOptions($request, $runtime);
    }

    /**
     * @param ListFlowClusterAllRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ListFlowClusterAllResponse
     */
    public function listFlowClusterAllWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->productType)) {
            $query['ProductType'] = $request->productType;
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
            'action'      => 'ListFlowClusterAll',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListFlowClusterAllResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListFlowClusterAllRequest $request
     *
     * @return ListFlowClusterAllResponse
     */
    public function listFlowClusterAll($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listFlowClusterAllWithOptions($request, $runtime);
    }

    /**
     * @param ListFlowClusterAllHostsRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ListFlowClusterAllHostsResponse
     */
    public function listFlowClusterAllHostsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
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
            'action'      => 'ListFlowClusterAllHosts',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListFlowClusterAllHostsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListFlowClusterAllHostsRequest $request
     *
     * @return ListFlowClusterAllHostsResponse
     */
    public function listFlowClusterAllHosts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listFlowClusterAllHostsWithOptions($request, $runtime);
    }

    /**
     * @param ListFlowClusterHostRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ListFlowClusterHostResponse
     */
    public function listFlowClusterHostWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
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
            'action'      => 'ListFlowClusterHost',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListFlowClusterHostResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListFlowClusterHostRequest $request
     *
     * @return ListFlowClusterHostResponse
     */
    public function listFlowClusterHost($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listFlowClusterHostWithOptions($request, $runtime);
    }

    /**
     * @param ListFlowInstanceRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListFlowInstanceResponse
     */
    public function listFlowInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->flowId)) {
            $query['FlowId'] = $request->flowId;
        }
        if (!Utils::isUnset($request->flowName)) {
            $query['FlowName'] = $request->flowName;
        }
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->nodeInstanceId)) {
            $query['NodeInstanceId'] = $request->nodeInstanceId;
        }
        if (!Utils::isUnset($request->orderBy)) {
            $query['OrderBy'] = $request->orderBy;
        }
        if (!Utils::isUnset($request->orderType)) {
            $query['OrderType'] = $request->orderType;
        }
        if (!Utils::isUnset($request->owner)) {
            $query['Owner'] = $request->owner;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->statusList)) {
            $query['StatusList'] = $request->statusList;
        }
        if (!Utils::isUnset($request->timeRange)) {
            $query['TimeRange'] = $request->timeRange;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListFlowInstance',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListFlowInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListFlowInstanceRequest $request
     *
     * @return ListFlowInstanceResponse
     */
    public function listFlowInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listFlowInstanceWithOptions($request, $runtime);
    }

    /**
     * @param ListFlowJobRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ListFlowJobResponse
     */
    public function listFlowJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->adhoc)) {
            $query['Adhoc'] = $request->adhoc;
        }
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
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
            'action'      => 'ListFlowJob',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListFlowJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListFlowJobRequest $request
     *
     * @return ListFlowJobResponse
     */
    public function listFlowJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listFlowJobWithOptions($request, $runtime);
    }

    /**
     * @param ListFlowJobHistoryRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ListFlowJobHistoryResponse
     */
    public function listFlowJobHistoryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->jobType)) {
            $query['JobType'] = $request->jobType;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->statusList)) {
            $query['StatusList'] = $request->statusList;
        }
        if (!Utils::isUnset($request->timeRange)) {
            $query['TimeRange'] = $request->timeRange;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListFlowJobHistory',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListFlowJobHistoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListFlowJobHistoryRequest $request
     *
     * @return ListFlowJobHistoryResponse
     */
    public function listFlowJobHistory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listFlowJobHistoryWithOptions($request, $runtime);
    }

    /**
     * @param ListFlowNodeInstanceRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ListFlowNodeInstanceResponse
     */
    public function listFlowNodeInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->orderBy)) {
            $query['OrderBy'] = $request->orderBy;
        }
        if (!Utils::isUnset($request->orderType)) {
            $query['OrderType'] = $request->orderType;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->statusList)) {
            $query['StatusList'] = $request->statusList;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListFlowNodeInstance',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListFlowNodeInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListFlowNodeInstanceRequest $request
     *
     * @return ListFlowNodeInstanceResponse
     */
    public function listFlowNodeInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listFlowNodeInstanceWithOptions($request, $runtime);
    }

    /**
     * @param ListFlowNodeInstanceContainerStatusRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return ListFlowNodeInstanceContainerStatusResponse
     */
    public function listFlowNodeInstanceContainerStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->nodeInstanceId)) {
            $query['NodeInstanceId'] = $request->nodeInstanceId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListFlowNodeInstanceContainerStatus',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListFlowNodeInstanceContainerStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListFlowNodeInstanceContainerStatusRequest $request
     *
     * @return ListFlowNodeInstanceContainerStatusResponse
     */
    public function listFlowNodeInstanceContainerStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listFlowNodeInstanceContainerStatusWithOptions($request, $runtime);
    }

    /**
     * @param ListFlowNodeSqlResultRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ListFlowNodeSqlResultResponse
     */
    public function listFlowNodeSqlResultWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->length)) {
            $query['Length'] = $request->length;
        }
        if (!Utils::isUnset($request->nodeInstanceId)) {
            $query['NodeInstanceId'] = $request->nodeInstanceId;
        }
        if (!Utils::isUnset($request->offset)) {
            $query['Offset'] = $request->offset;
        }
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->sqlIndex)) {
            $query['SqlIndex'] = $request->sqlIndex;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListFlowNodeSqlResult',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListFlowNodeSqlResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListFlowNodeSqlResultRequest $request
     *
     * @return ListFlowNodeSqlResultResponse
     */
    public function listFlowNodeSqlResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listFlowNodeSqlResultWithOptions($request, $runtime);
    }

    /**
     * @param ListFlowProjectRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListFlowProjectResponse
     */
    public function listFlowProjectWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->productType)) {
            $query['ProductType'] = $request->productType;
        }
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
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
            'action'      => 'ListFlowProject',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListFlowProjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListFlowProjectRequest $request
     *
     * @return ListFlowProjectResponse
     */
    public function listFlowProject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listFlowProjectWithOptions($request, $runtime);
    }

    /**
     * @param ListFlowProjectClusterSettingRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return ListFlowProjectClusterSettingResponse
     */
    public function listFlowProjectClusterSettingWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListFlowProjectClusterSetting',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListFlowProjectClusterSettingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListFlowProjectClusterSettingRequest $request
     *
     * @return ListFlowProjectClusterSettingResponse
     */
    public function listFlowProjectClusterSetting($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listFlowProjectClusterSettingWithOptions($request, $runtime);
    }

    /**
     * @param ListFlowProjectUserRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ListFlowProjectUserResponse
     */
    public function listFlowProjectUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListFlowProjectUser',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListFlowProjectUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListFlowProjectUserRequest $request
     *
     * @return ListFlowProjectUserResponse
     */
    public function listFlowProjectUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listFlowProjectUserWithOptions($request, $runtime);
    }

    /**
     * @param ListResourcePoolRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListResourcePoolResponse
     */
    public function listResourcePoolWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->poolType)) {
            $query['PoolType'] = $request->poolType;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListResourcePool',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListResourcePoolResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListResourcePoolRequest $request
     *
     * @return ListResourcePoolResponse
     */
    public function listResourcePool($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listResourcePoolWithOptions($request, $runtime);
    }

    /**
     * @param ListScalingActivityV2Request $request
     * @param RuntimeOptions               $runtime
     *
     * @return ListScalingActivityV2Response
     */
    public function listScalingActivityV2WithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterBizId)) {
            $query['ClusterBizId'] = $request->clusterBizId;
        }
        if (!Utils::isUnset($request->currentSize)) {
            $query['CurrentSize'] = $request->currentSize;
        }
        if (!Utils::isUnset($request->hostGroupId)) {
            $query['HostGroupId'] = $request->hostGroupId;
        }
        if (!Utils::isUnset($request->hostGroupName)) {
            $query['HostGroupName'] = $request->hostGroupName;
        }
        if (!Utils::isUnset($request->limit)) {
            $query['Limit'] = $request->limit;
        }
        if (!Utils::isUnset($request->orderField)) {
            $query['OrderField'] = $request->orderField;
        }
        if (!Utils::isUnset($request->orderMode)) {
            $query['OrderMode'] = $request->orderMode;
        }
        if (!Utils::isUnset($request->pageCount)) {
            $query['PageCount'] = $request->pageCount;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->scalingGroupBizId)) {
            $query['ScalingGroupBizId'] = $request->scalingGroupBizId;
        }
        if (!Utils::isUnset($request->scalingRuleName)) {
            $query['ScalingRuleName'] = $request->scalingRuleName;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListScalingActivityV2',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListScalingActivityV2Response::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListScalingActivityV2Request $request
     *
     * @return ListScalingActivityV2Response
     */
    public function listScalingActivityV2($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listScalingActivityV2WithOptions($request, $runtime);
    }

    /**
     * @param ListScalingConfigItemV2Request $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ListScalingConfigItemV2Response
     */
    public function listScalingConfigItemV2WithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->configItemType)) {
            $query['ConfigItemType'] = $request->configItemType;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->scalingGroupBizId)) {
            $query['ScalingGroupBizId'] = $request->scalingGroupBizId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListScalingConfigItemV2',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListScalingConfigItemV2Response::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListScalingConfigItemV2Request $request
     *
     * @return ListScalingConfigItemV2Response
     */
    public function listScalingConfigItemV2($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listScalingConfigItemV2WithOptions($request, $runtime);
    }

    /**
     * @param ListScalingGroupV2Request $request
     * @param RuntimeOptions            $runtime
     *
     * @return ListScalingGroupV2Response
     */
    public function listScalingGroupV2WithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterBizId)) {
            $query['ClusterBizId'] = $request->clusterBizId;
        }
        if (!Utils::isUnset($request->currentSize)) {
            $query['CurrentSize'] = $request->currentSize;
        }
        if (!Utils::isUnset($request->limit)) {
            $query['Limit'] = $request->limit;
        }
        if (!Utils::isUnset($request->orderField)) {
            $query['OrderField'] = $request->orderField;
        }
        if (!Utils::isUnset($request->orderMode)) {
            $query['OrderMode'] = $request->orderMode;
        }
        if (!Utils::isUnset($request->pageCount)) {
            $query['PageCount'] = $request->pageCount;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListScalingGroupV2',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListScalingGroupV2Response::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListScalingGroupV2Request $request
     *
     * @return ListScalingGroupV2Response
     */
    public function listScalingGroupV2($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listScalingGroupV2WithOptions($request, $runtime);
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
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListTagResources',
            'version'     => '2016-04-08',
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
     * @param ModifyClusterNameRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ModifyClusterNameResponse
     */
    public function modifyClusterNameWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyClusterName',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyClusterNameResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyClusterNameRequest $request
     *
     * @return ModifyClusterNameResponse
     */
    public function modifyClusterName($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyClusterNameWithOptions($request, $runtime);
    }

    /**
     * @param ModifyClusterServiceConfigRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ModifyClusterServiceConfigResponse
     */
    public function modifyClusterServiceConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->comment)) {
            $query['Comment'] = $request->comment;
        }
        if (!Utils::isUnset($request->configParams)) {
            $query['ConfigParams'] = $request->configParams;
        }
        if (!Utils::isUnset($request->configType)) {
            $query['ConfigType'] = $request->configType;
        }
        if (!Utils::isUnset($request->customConfigParams)) {
            $query['CustomConfigParams'] = $request->customConfigParams;
        }
        if (!Utils::isUnset($request->gatewayClusterIdList)) {
            $query['GatewayClusterIdList'] = $request->gatewayClusterIdList;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->hostInstanceId)) {
            $query['HostInstanceId'] = $request->hostInstanceId;
        }
        if (!Utils::isUnset($request->refreshHostConfig)) {
            $query['RefreshHostConfig'] = $request->refreshHostConfig;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->serviceName)) {
            $query['ServiceName'] = $request->serviceName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyClusterServiceConfig',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyClusterServiceConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyClusterServiceConfigRequest $request
     *
     * @return ModifyClusterServiceConfigResponse
     */
    public function modifyClusterServiceConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyClusterServiceConfigWithOptions($request, $runtime);
    }

    /**
     * @param ModifyClusterTemplateRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ModifyClusterTemplateResponse
     */
    public function modifyClusterTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->autoRenew)) {
            $query['AutoRenew'] = $request->autoRenew;
        }
        if (!Utils::isUnset($request->bizId)) {
            $query['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->bootstrapAction)) {
            $query['BootstrapAction'] = $request->bootstrapAction;
        }
        if (!Utils::isUnset($request->chargeType)) {
            $query['ChargeType'] = $request->chargeType;
        }
        if (!Utils::isUnset($request->clusterType)) {
            $query['ClusterType'] = $request->clusterType;
        }
        if (!Utils::isUnset($request->config)) {
            $query['Config'] = $request->config;
        }
        if (!Utils::isUnset($request->configurations)) {
            $query['Configurations'] = $request->configurations;
        }
        if (!Utils::isUnset($request->dataDiskEncrypted)) {
            $query['DataDiskEncrypted'] = $request->dataDiskEncrypted;
        }
        if (!Utils::isUnset($request->dataDiskKMSKeyId)) {
            $query['DataDiskKMSKeyId'] = $request->dataDiskKMSKeyId;
        }
        if (!Utils::isUnset($request->depositType)) {
            $query['DepositType'] = $request->depositType;
        }
        if (!Utils::isUnset($request->easEnable)) {
            $query['EasEnable'] = $request->easEnable;
        }
        if (!Utils::isUnset($request->emrVer)) {
            $query['EmrVer'] = $request->emrVer;
        }
        if (!Utils::isUnset($request->highAvailabilityEnable)) {
            $query['HighAvailabilityEnable'] = $request->highAvailabilityEnable;
        }
        if (!Utils::isUnset($request->hostGroup)) {
            $query['HostGroup'] = $request->hostGroup;
        }
        if (!Utils::isUnset($request->initCustomHiveMetaDb)) {
            $query['InitCustomHiveMetaDb'] = $request->initCustomHiveMetaDb;
        }
        if (!Utils::isUnset($request->instanceGeneration)) {
            $query['InstanceGeneration'] = $request->instanceGeneration;
        }
        if (!Utils::isUnset($request->ioOptimized)) {
            $query['IoOptimized'] = $request->ioOptimized;
        }
        if (!Utils::isUnset($request->isOpenPublicIp)) {
            $query['IsOpenPublicIp'] = $request->isOpenPublicIp;
        }
        if (!Utils::isUnset($request->keyPairName)) {
            $query['KeyPairName'] = $request->keyPairName;
        }
        if (!Utils::isUnset($request->logPath)) {
            $query['LogPath'] = $request->logPath;
        }
        if (!Utils::isUnset($request->machineType)) {
            $query['MachineType'] = $request->machineType;
        }
        if (!Utils::isUnset($request->masterPwd)) {
            $query['MasterPwd'] = $request->masterPwd;
        }
        if (!Utils::isUnset($request->metaStoreConf)) {
            $query['MetaStoreConf'] = $request->metaStoreConf;
        }
        if (!Utils::isUnset($request->metaStoreType)) {
            $query['MetaStoreType'] = $request->metaStoreType;
        }
        if (!Utils::isUnset($request->netType)) {
            $query['NetType'] = $request->netType;
        }
        if (!Utils::isUnset($request->optionSoftWareList)) {
            $query['OptionSoftWareList'] = $request->optionSoftWareList;
        }
        if (!Utils::isUnset($request->period)) {
            $query['Period'] = $request->period;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->securityGroupId)) {
            $query['SecurityGroupId'] = $request->securityGroupId;
        }
        if (!Utils::isUnset($request->securityGroupName)) {
            $query['SecurityGroupName'] = $request->securityGroupName;
        }
        if (!Utils::isUnset($request->sshEnable)) {
            $query['SshEnable'] = $request->sshEnable;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        if (!Utils::isUnset($request->templateName)) {
            $query['TemplateName'] = $request->templateName;
        }
        if (!Utils::isUnset($request->useCustomHiveMetaDb)) {
            $query['UseCustomHiveMetaDb'] = $request->useCustomHiveMetaDb;
        }
        if (!Utils::isUnset($request->useLocalMetaDb)) {
            $query['UseLocalMetaDb'] = $request->useLocalMetaDb;
        }
        if (!Utils::isUnset($request->userDefinedEmrEcsRole)) {
            $query['UserDefinedEmrEcsRole'] = $request->userDefinedEmrEcsRole;
        }
        if (!Utils::isUnset($request->vSwitchId)) {
            $query['VSwitchId'] = $request->vSwitchId;
        }
        if (!Utils::isUnset($request->vpcId)) {
            $query['VpcId'] = $request->vpcId;
        }
        if (!Utils::isUnset($request->zoneId)) {
            $query['ZoneId'] = $request->zoneId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyClusterTemplate',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyClusterTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyClusterTemplateRequest $request
     *
     * @return ModifyClusterTemplateResponse
     */
    public function modifyClusterTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyClusterTemplateWithOptions($request, $runtime);
    }

    /**
     * @param ModifyFlowCategoryRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ModifyFlowCategoryResponse
     */
    public function modifyFlowCategoryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->parentId)) {
            $query['ParentId'] = $request->parentId;
        }
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyFlowCategory',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyFlowCategoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyFlowCategoryRequest $request
     *
     * @return ModifyFlowCategoryResponse
     */
    public function modifyFlowCategory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyFlowCategoryWithOptions($request, $runtime);
    }

    /**
     * @param ModifyFlowForWebRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ModifyFlowForWebResponse
     */
    public function modifyFlowForWebWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->alertConf)) {
            $query['AlertConf'] = $request->alertConf;
        }
        if (!Utils::isUnset($request->alertDingDingGroupBizId)) {
            $query['AlertDingDingGroupBizId'] = $request->alertDingDingGroupBizId;
        }
        if (!Utils::isUnset($request->alertUserGroupBizId)) {
            $query['AlertUserGroupBizId'] = $request->alertUserGroupBizId;
        }
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->createCluster)) {
            $query['CreateCluster'] = $request->createCluster;
        }
        if (!Utils::isUnset($request->cronExpr)) {
            $query['CronExpr'] = $request->cronExpr;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->endSchedule)) {
            $query['EndSchedule'] = $request->endSchedule;
        }
        if (!Utils::isUnset($request->graph)) {
            $query['Graph'] = $request->graph;
        }
        if (!Utils::isUnset($request->hostName)) {
            $query['HostName'] = $request->hostName;
        }
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->lifecycle)) {
            $query['Lifecycle'] = $request->lifecycle;
        }
        if (!Utils::isUnset($request->logArchiveLocation)) {
            $query['LogArchiveLocation'] = $request->logArchiveLocation;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $query['Namespace'] = $request->namespace_;
        }
        if (!Utils::isUnset($request->parentCategory)) {
            $query['ParentCategory'] = $request->parentCategory;
        }
        if (!Utils::isUnset($request->parentFlowList)) {
            $query['ParentFlowList'] = $request->parentFlowList;
        }
        if (!Utils::isUnset($request->periodic)) {
            $query['Periodic'] = $request->periodic;
        }
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->startSchedule)) {
            $query['StartSchedule'] = $request->startSchedule;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyFlowForWeb',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyFlowForWebResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyFlowForWebRequest $request
     *
     * @return ModifyFlowForWebResponse
     */
    public function modifyFlowForWeb($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyFlowForWebWithOptions($request, $runtime);
    }

    /**
     * @param ModifyFlowProjectRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ModifyFlowProjectResponse
     */
    public function modifyFlowProjectWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyFlowProject',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyFlowProjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyFlowProjectRequest $request
     *
     * @return ModifyFlowProjectResponse
     */
    public function modifyFlowProject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyFlowProjectWithOptions($request, $runtime);
    }

    /**
     * @param ModifyFlowProjectClusterSettingRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return ModifyFlowProjectClusterSettingResponse
     */
    public function modifyFlowProjectClusterSettingWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->defaultQueue)) {
            $query['DefaultQueue'] = $request->defaultQueue;
        }
        if (!Utils::isUnset($request->defaultUser)) {
            $query['DefaultUser'] = $request->defaultUser;
        }
        if (!Utils::isUnset($request->hostList)) {
            $query['HostList'] = $request->hostList;
        }
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->queueList)) {
            $query['QueueList'] = $request->queueList;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->userList)) {
            $query['UserList'] = $request->userList;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyFlowProjectClusterSetting',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyFlowProjectClusterSettingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyFlowProjectClusterSettingRequest $request
     *
     * @return ModifyFlowProjectClusterSettingResponse
     */
    public function modifyFlowProjectClusterSetting($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyFlowProjectClusterSettingWithOptions($request, $runtime);
    }

    /**
     * @param ModifyResourcePoolRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ModifyResourcePoolResponse
     */
    public function modifyResourcePoolWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->active)) {
            $query['Active'] = $request->active;
        }
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->config)) {
            $query['Config'] = $request->config;
        }
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->yarnsiteconfig)) {
            $query['Yarnsiteconfig'] = $request->yarnsiteconfig;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyResourcePool',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyResourcePoolResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyResourcePoolRequest $request
     *
     * @return ModifyResourcePoolResponse
     */
    public function modifyResourcePool($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyResourcePoolWithOptions($request, $runtime);
    }

    /**
     * @param ModifyResourcePoolSchedulerTypeRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return ModifyResourcePoolSchedulerTypeResponse
     */
    public function modifyResourcePoolSchedulerTypeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->schedulerType)) {
            $query['SchedulerType'] = $request->schedulerType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyResourcePoolSchedulerType',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyResourcePoolSchedulerTypeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyResourcePoolSchedulerTypeRequest $request
     *
     * @return ModifyResourcePoolSchedulerTypeResponse
     */
    public function modifyResourcePoolSchedulerType($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyResourcePoolSchedulerTypeWithOptions($request, $runtime);
    }

    /**
     * @param ModifyResourceQueueRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ModifyResourceQueueResponse
     */
    public function modifyResourceQueueWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->config)) {
            $query['Config'] = $request->config;
        }
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->leaf)) {
            $query['Leaf'] = $request->leaf;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->parentQueueId)) {
            $query['ParentQueueId'] = $request->parentQueueId;
        }
        if (!Utils::isUnset($request->qualifiedName)) {
            $query['QualifiedName'] = $request->qualifiedName;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->resourcePoolId)) {
            $query['ResourcePoolId'] = $request->resourcePoolId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyResourceQueue',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyResourceQueueResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyResourceQueueRequest $request
     *
     * @return ModifyResourceQueueResponse
     */
    public function modifyResourceQueue($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyResourceQueueWithOptions($request, $runtime);
    }

    /**
     * @param ModifyScalingConfigItemV2Request $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ModifyScalingConfigItemV2Response
     */
    public function modifyScalingConfigItemV2WithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->configItemBizId)) {
            $query['ConfigItemBizId'] = $request->configItemBizId;
        }
        if (!Utils::isUnset($request->configItemInformation)) {
            $query['ConfigItemInformation'] = $request->configItemInformation;
        }
        if (!Utils::isUnset($request->configItemType)) {
            $query['ConfigItemType'] = $request->configItemType;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->scalingGroupBizId)) {
            $query['ScalingGroupBizId'] = $request->scalingGroupBizId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyScalingConfigItemV2',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyScalingConfigItemV2Response::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyScalingConfigItemV2Request $request
     *
     * @return ModifyScalingConfigItemV2Response
     */
    public function modifyScalingConfigItemV2($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyScalingConfigItemV2WithOptions($request, $runtime);
    }

    /**
     * @param ModifyScalingGroupV2Request $request
     * @param RuntimeOptions              $runtime
     *
     * @return ModifyScalingGroupV2Response
     */
    public function modifyScalingGroupV2WithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->scalingGroupBizId)) {
            $query['ScalingGroupBizId'] = $request->scalingGroupBizId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyScalingGroupV2',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyScalingGroupV2Response::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyScalingGroupV2Request $request
     *
     * @return ModifyScalingGroupV2Response
     */
    public function modifyScalingGroupV2($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyScalingGroupV2WithOptions($request, $runtime);
    }

    /**
     * @param RefreshClusterResourcePoolRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return RefreshClusterResourcePoolResponse
     */
    public function refreshClusterResourcePoolWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->resourcePoolId)) {
            $query['ResourcePoolId'] = $request->resourcePoolId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RefreshClusterResourcePool',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RefreshClusterResourcePoolResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RefreshClusterResourcePoolRequest $request
     *
     * @return RefreshClusterResourcePoolResponse
     */
    public function refreshClusterResourcePool($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->refreshClusterResourcePoolWithOptions($request, $runtime);
    }

    /**
     * @param ReleaseClusterRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ReleaseClusterResponse
     */
    public function releaseClusterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->forceRelease)) {
            $query['ForceRelease'] = $request->forceRelease;
        }
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ReleaseCluster',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ReleaseClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ReleaseClusterRequest $request
     *
     * @return ReleaseClusterResponse
     */
    public function releaseCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->releaseClusterWithOptions($request, $runtime);
    }

    /**
     * @param ReleaseClusterHostGroupRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ReleaseClusterHostGroupResponse
     */
    public function releaseClusterHostGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->decommissionTimeout)) {
            $query['DecommissionTimeout'] = $request->decommissionTimeout;
        }
        if (!Utils::isUnset($request->enableGracefulDecommission)) {
            $query['EnableGracefulDecommission'] = $request->enableGracefulDecommission;
        }
        if (!Utils::isUnset($request->hostGroupId)) {
            $query['HostGroupId'] = $request->hostGroupId;
        }
        if (!Utils::isUnset($request->instanceIdList)) {
            $query['InstanceIdList'] = $request->instanceIdList;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->releaseNumber)) {
            $query['ReleaseNumber'] = $request->releaseNumber;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ReleaseClusterHostGroup',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ReleaseClusterHostGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ReleaseClusterHostGroupRequest $request
     *
     * @return ReleaseClusterHostGroupResponse
     */
    public function releaseClusterHostGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->releaseClusterHostGroupWithOptions($request, $runtime);
    }

    /**
     * @param RemoveScalingConfigItemV2Request $request
     * @param RuntimeOptions                   $runtime
     *
     * @return RemoveScalingConfigItemV2Response
     */
    public function removeScalingConfigItemV2WithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->configItemBizId)) {
            $query['ConfigItemBizId'] = $request->configItemBizId;
        }
        if (!Utils::isUnset($request->configItemType)) {
            $query['ConfigItemType'] = $request->configItemType;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->scalingGroupBizId)) {
            $query['ScalingGroupBizId'] = $request->scalingGroupBizId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RemoveScalingConfigItemV2',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RemoveScalingConfigItemV2Response::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RemoveScalingConfigItemV2Request $request
     *
     * @return RemoveScalingConfigItemV2Response
     */
    public function removeScalingConfigItemV2($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeScalingConfigItemV2WithOptions($request, $runtime);
    }

    /**
     * @param RerunFlowRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return RerunFlowResponse
     */
    public function rerunFlowWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->flowInstanceId)) {
            $query['FlowInstanceId'] = $request->flowInstanceId;
        }
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->reRunFail)) {
            $query['ReRunFail'] = $request->reRunFail;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RerunFlow',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RerunFlowResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RerunFlowRequest $request
     *
     * @return RerunFlowResponse
     */
    public function rerunFlow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->rerunFlowWithOptions($request, $runtime);
    }

    /**
     * @param ResizeClusterV2Request $request
     * @param RuntimeOptions         $runtime
     *
     * @return ResizeClusterV2Response
     */
    public function resizeClusterV2WithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->autoPayOrder)) {
            $query['AutoPayOrder'] = $request->autoPayOrder;
        }
        if (!Utils::isUnset($request->clickhouseConf)) {
            $query['ClickhouseConf'] = $request->clickhouseConf;
        }
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->hostComponentInfo)) {
            $query['HostComponentInfo'] = $request->hostComponentInfo;
        }
        if (!Utils::isUnset($request->hostGroup)) {
            $query['HostGroup'] = $request->hostGroup;
        }
        if (!Utils::isUnset($request->isOpenPublicIp)) {
            $query['IsOpenPublicIp'] = $request->isOpenPublicIp;
        }
        if (!Utils::isUnset($request->promotionInfo)) {
            $query['PromotionInfo'] = $request->promotionInfo;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->vswitchId)) {
            $query['VswitchId'] = $request->vswitchId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ResizeClusterV2',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ResizeClusterV2Response::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ResizeClusterV2Request $request
     *
     * @return ResizeClusterV2Response
     */
    public function resizeClusterV2($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resizeClusterV2WithOptions($request, $runtime);
    }

    /**
     * @param ResumeFlowRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return ResumeFlowResponse
     */
    public function resumeFlowWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->flowInstanceId)) {
            $query['FlowInstanceId'] = $request->flowInstanceId;
        }
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ResumeFlow',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ResumeFlowResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ResumeFlowRequest $request
     *
     * @return ResumeFlowResponse
     */
    public function resumeFlow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resumeFlowWithOptions($request, $runtime);
    }

    /**
     * @param RunClusterServiceActionRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return RunClusterServiceActionResponse
     */
    public function runClusterServiceActionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->comment)) {
            $query['Comment'] = $request->comment;
        }
        if (!Utils::isUnset($request->componentNameList)) {
            $query['ComponentNameList'] = $request->componentNameList;
        }
        if (!Utils::isUnset($request->customCommand)) {
            $query['CustomCommand'] = $request->customCommand;
        }
        if (!Utils::isUnset($request->customParams)) {
            $query['CustomParams'] = $request->customParams;
        }
        if (!Utils::isUnset($request->executeStrategy)) {
            $query['ExecuteStrategy'] = $request->executeStrategy;
        }
        if (!Utils::isUnset($request->hostGroupIdList)) {
            $query['HostGroupIdList'] = $request->hostGroupIdList;
        }
        if (!Utils::isUnset($request->hostIdList)) {
            $query['HostIdList'] = $request->hostIdList;
        }
        if (!Utils::isUnset($request->interval)) {
            $query['Interval'] = $request->interval;
        }
        if (!Utils::isUnset($request->isRolling)) {
            $query['IsRolling'] = $request->isRolling;
        }
        if (!Utils::isUnset($request->nodeCountPerBatch)) {
            $query['NodeCountPerBatch'] = $request->nodeCountPerBatch;
        }
        if (!Utils::isUnset($request->onlyRestartStaleConfigNodes)) {
            $query['OnlyRestartStaleConfigNodes'] = $request->onlyRestartStaleConfigNodes;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->serviceActionName)) {
            $query['ServiceActionName'] = $request->serviceActionName;
        }
        if (!Utils::isUnset($request->serviceName)) {
            $query['ServiceName'] = $request->serviceName;
        }
        if (!Utils::isUnset($request->totlerateFailCount)) {
            $query['TotlerateFailCount'] = $request->totlerateFailCount;
        }
        if (!Utils::isUnset($request->turnOnMaintenanceMode)) {
            $query['TurnOnMaintenanceMode'] = $request->turnOnMaintenanceMode;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RunClusterServiceAction',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RunClusterServiceActionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RunClusterServiceActionRequest $request
     *
     * @return RunClusterServiceActionResponse
     */
    public function runClusterServiceAction($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->runClusterServiceActionWithOptions($request, $runtime);
    }

    /**
     * @param RunScalingActionV2Request $request
     * @param RuntimeOptions            $runtime
     *
     * @return RunScalingActionV2Response
     */
    public function runScalingActionV2WithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->actionParam)) {
            $query['ActionParam'] = $request->actionParam;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->scalingActionType)) {
            $query['ScalingActionType'] = $request->scalingActionType;
        }
        if (!Utils::isUnset($request->scalingGroupBizId)) {
            $query['ScalingGroupBizId'] = $request->scalingGroupBizId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RunScalingActionV2',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RunScalingActionV2Response::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RunScalingActionV2Request $request
     *
     * @return RunScalingActionV2Response
     */
    public function runScalingActionV2($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->runScalingActionV2WithOptions($request, $runtime);
    }

    /**
     * @param StartFlowRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return StartFlowResponse
     */
    public function startFlowWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->flowInstanceId)) {
            $query['FlowInstanceId'] = $request->flowInstanceId;
        }
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'StartFlow',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StartFlowResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param StartFlowRequest $request
     *
     * @return StartFlowResponse
     */
    public function startFlow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startFlowWithOptions($request, $runtime);
    }

    /**
     * @param SubmitFlowRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return SubmitFlowResponse
     */
    public function submitFlowWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->conf)) {
            $query['Conf'] = $request->conf;
        }
        if (!Utils::isUnset($request->flowId)) {
            $query['FlowId'] = $request->flowId;
        }
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SubmitFlow',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SubmitFlowResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SubmitFlowRequest $request
     *
     * @return SubmitFlowResponse
     */
    public function submitFlow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitFlowWithOptions($request, $runtime);
    }

    /**
     * @param SubmitFlowJobRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return SubmitFlowJobResponse
     */
    public function submitFlowJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->conf)) {
            $query['Conf'] = $request->conf;
        }
        if (!Utils::isUnset($request->hostName)) {
            $query['HostName'] = $request->hostName;
        }
        if (!Utils::isUnset($request->jobId)) {
            $query['JobId'] = $request->jobId;
        }
        if (!Utils::isUnset($request->jobInstanceId)) {
            $query['JobInstanceId'] = $request->jobInstanceId;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $query['Namespace'] = $request->namespace_;
        }
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SubmitFlowJob',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SubmitFlowJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SubmitFlowJobRequest $request
     *
     * @return SubmitFlowJobResponse
     */
    public function submitFlowJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitFlowJobWithOptions($request, $runtime);
    }

    /**
     * @param SuspendFlowRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return SuspendFlowResponse
     */
    public function suspendFlowWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->flowInstanceId)) {
            $query['FlowInstanceId'] = $request->flowInstanceId;
        }
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SuspendFlow',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SuspendFlowResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SuspendFlowRequest $request
     *
     * @return SuspendFlowResponse
     */
    public function suspendFlow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->suspendFlowWithOptions($request, $runtime);
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
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'TagResources',
            'version'     => '2016-04-08',
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
     * @param UntagResourcesRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return UntagResourcesResponse
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
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->tagKey)) {
            $query['TagKey'] = $request->tagKey;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UntagResources',
            'version'     => '2016-04-08',
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
     * @param UntagResourcesRequest $request
     *
     * @return UntagResourcesResponse
     */
    public function untagResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->untagResourcesWithOptions($request, $runtime);
    }
}
