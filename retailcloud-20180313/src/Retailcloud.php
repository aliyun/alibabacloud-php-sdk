<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Retailcloud\V20180313;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Retailcloud\V20180313\Models\AddClusterNodeRequest;
use AlibabaCloud\SDK\Retailcloud\V20180313\Models\AddClusterNodeResponse;
use AlibabaCloud\SDK\Retailcloud\V20180313\Models\AllocatePodConfigRequest;
use AlibabaCloud\SDK\Retailcloud\V20180313\Models\AllocatePodConfigResponse;
use AlibabaCloud\SDK\Retailcloud\V20180313\Models\BatchAddServersRequest;
use AlibabaCloud\SDK\Retailcloud\V20180313\Models\BatchAddServersResponse;
use AlibabaCloud\SDK\Retailcloud\V20180313\Models\BindGroupRequest;
use AlibabaCloud\SDK\Retailcloud\V20180313\Models\BindGroupResponse;
use AlibabaCloud\SDK\Retailcloud\V20180313\Models\BindNodeLabelRequest;
use AlibabaCloud\SDK\Retailcloud\V20180313\Models\BindNodeLabelResponse;
use AlibabaCloud\SDK\Retailcloud\V20180313\Models\CloseDeployOrderRequest;
use AlibabaCloud\SDK\Retailcloud\V20180313\Models\CloseDeployOrderResponse;
use AlibabaCloud\SDK\Retailcloud\V20180313\Models\CreateAccountRequest;
use AlibabaCloud\SDK\Retailcloud\V20180313\Models\CreateAccountResponse;
use AlibabaCloud\SDK\Retailcloud\V20180313\Models\CreateAppGroupRequest;
use AlibabaCloud\SDK\Retailcloud\V20180313\Models\CreateAppGroupResponse;
use AlibabaCloud\SDK\Retailcloud\V20180313\Models\CreateAppMonitorsRequest;
use AlibabaCloud\SDK\Retailcloud\V20180313\Models\CreateAppMonitorsResponse;
use AlibabaCloud\SDK\Retailcloud\V20180313\Models\CreateAppRequest;
use AlibabaCloud\SDK\Retailcloud\V20180313\Models\CreateAppResourceAllocRequest;
use AlibabaCloud\SDK\Retailcloud\V20180313\Models\CreateAppResourceAllocResponse;
use AlibabaCloud\SDK\Retailcloud\V20180313\Models\CreateAppResponse;
use AlibabaCloud\SDK\Retailcloud\V20180313\Models\CreateClusterRequest;
use AlibabaCloud\SDK\Retailcloud\V20180313\Models\CreateClusterResponse;
use AlibabaCloud\SDK\Retailcloud\V20180313\Models\CreateDbRequest;
use AlibabaCloud\SDK\Retailcloud\V20180313\Models\CreateDbResponse;
use AlibabaCloud\SDK\Retailcloud\V20180313\Models\CreateDeployConfigRequest;
use AlibabaCloud\SDK\Retailcloud\V20180313\Models\CreateDeployConfigResponse;
use AlibabaCloud\SDK\Retailcloud\V20180313\Models\CreateEciConfigRequest;
use AlibabaCloud\SDK\Retailcloud\V20180313\Models\CreateEciConfigResponse;
use AlibabaCloud\SDK\Retailcloud\V20180313\Models\CreateEnvironmentRequest;
use AlibabaCloud\SDK\Retailcloud\V20180313\Models\CreateEnvironmentResponse;
use AlibabaCloud\SDK\Retailcloud\V20180313\Models\CreateNodeLabelRequest;
use AlibabaCloud\SDK\Retailcloud\V20180313\Models\CreateNodeLabelResponse;
use AlibabaCloud\SDK\Retailcloud\V20180313\Models\CreatePersistentVolumeClaimRequest;
use AlibabaCloud\SDK\Retailcloud\V20180313\Models\CreatePersistentVolumeClaimResponse;
use AlibabaCloud\SDK\Retailcloud\V20180313\Models\CreatePersistentVolumeRequest;
use AlibabaCloud\SDK\Retailcloud\V20180313\Models\CreatePersistentVolumeResponse;
use AlibabaCloud\SDK\Retailcloud\V20180313\Models\CreateServiceRequest;
use AlibabaCloud\SDK\Retailcloud\V20180313\Models\CreateServiceResponse;
use AlibabaCloud\SDK\Retailcloud\V20180313\Models\CreateSlbAPRequest;
use AlibabaCloud\SDK\Retailcloud\V20180313\Models\CreateSlbAPResponse;
use AlibabaCloud\SDK\Retailcloud\V20180313\Models\DeleteAppDetailRequest;
use AlibabaCloud\SDK\Retailcloud\V20180313\Models\DeleteAppDetailResponse;
use AlibabaCloud\SDK\Retailcloud\V20180313\Models\DeleteAppEnvironmentRequest;
use AlibabaCloud\SDK\Retailcloud\V20180313\Models\DeleteAppEnvironmentResponse;
use AlibabaCloud\SDK\Retailcloud\V20180313\Models\DeleteAppGroupRequest;
use AlibabaCloud\SDK\Retailcloud\V20180313\Models\DeleteAppGroupResponse;
use AlibabaCloud\SDK\Retailcloud\V20180313\Models\DeleteAppResourceAllocRequest;
use AlibabaCloud\SDK\Retailcloud\V20180313\Models\DeleteAppResourceAllocResponse;
use AlibabaCloud\SDK\Retailcloud\V20180313\Models\DeleteClusterRequest;
use AlibabaCloud\SDK\Retailcloud\V20180313\Models\DeleteClusterResponse;
use AlibabaCloud\SDK\Retailcloud\V20180313\Models\DeleteDatabaseRequest;
use AlibabaCloud\SDK\Retailcloud\V20180313\Models\DeleteDatabaseResponse;
use AlibabaCloud\SDK\Retailcloud\V20180313\Models\DeleteDeployConfigRequest;
use AlibabaCloud\SDK\Retailcloud\V20180313\Models\DeleteDeployConfigResponse;
use AlibabaCloud\SDK\Retailcloud\V20180313\Models\DeleteNodeLabelRequest;
use AlibabaCloud\SDK\Retailcloud\V20180313\Models\DeleteNodeLabelResponse;
use AlibabaCloud\SDK\Retailcloud\V20180313\Models\DeletePersistentVolumeClaimRequest;
use AlibabaCloud\SDK\Retailcloud\V20180313\Models\DeletePersistentVolumeClaimResponse;
use AlibabaCloud\SDK\Retailcloud\V20180313\Models\DeletePersistentVolumeRequest;
use AlibabaCloud\SDK\Retailcloud\V20180313\Models\DeletePersistentVolumeResponse;
use AlibabaCloud\SDK\Retailcloud\V20180313\Models\DeleteRdsAccountRequest;
use AlibabaCloud\SDK\Retailcloud\V20180313\Models\DeleteRdsAccountResponse;
use AlibabaCloud\SDK\Retailcloud\V20180313\Models\DeleteServiceRequest;
use AlibabaCloud\SDK\Retailcloud\V20180313\Models\DeleteServiceResponse;
use AlibabaCloud\SDK\Retailcloud\V20180313\Models\DeleteSlbAPRequest;
use AlibabaCloud\SDK\Retailcloud\V20180313\Models\DeleteSlbAPResponse;
use AlibabaCloud\SDK\Retailcloud\V20180313\Models\DeployAppRequest;
use AlibabaCloud\SDK\Retailcloud\V20180313\Models\DeployAppResponse;
use AlibabaCloud\SDK\Retailcloud\V20180313\Models\DescribeAppDetailRequest;
use AlibabaCloud\SDK\Retailcloud\V20180313\Models\DescribeAppDetailResponse;
use AlibabaCloud\SDK\Retailcloud\V20180313\Models\DescribeAppEnvDeployBaselineRequest;
use AlibabaCloud\SDK\Retailcloud\V20180313\Models\DescribeAppEnvDeployBaselineResponse;
use AlibabaCloud\SDK\Retailcloud\V20180313\Models\DescribeAppEnvironmentDetailRequest;
use AlibabaCloud\SDK\Retailcloud\V20180313\Models\DescribeAppEnvironmentDetailResponse;
use AlibabaCloud\SDK\Retailcloud\V20180313\Models\DescribeAppGroupDeploySettingRequest;
use AlibabaCloud\SDK\Retailcloud\V20180313\Models\DescribeAppGroupDeploySettingResponse;
use AlibabaCloud\SDK\Retailcloud\V20180313\Models\DescribeAppMonitorMetricRequest;
use AlibabaCloud\SDK\Retailcloud\V20180313\Models\DescribeAppMonitorMetricResponse;
use AlibabaCloud\SDK\Retailcloud\V20180313\Models\DescribeAppResourceAllocRequest;
use AlibabaCloud\SDK\Retailcloud\V20180313\Models\DescribeAppResourceAllocResponse;
use AlibabaCloud\SDK\Retailcloud\V20180313\Models\DescribeClusterDetailRequest;
use AlibabaCloud\SDK\Retailcloud\V20180313\Models\DescribeClusterDetailResponse;
use AlibabaCloud\SDK\Retailcloud\V20180313\Models\DescribeDatabasesRequest;
use AlibabaCloud\SDK\Retailcloud\V20180313\Models\DescribeDatabasesResponse;
use AlibabaCloud\SDK\Retailcloud\V20180313\Models\DescribeDeployOrderDetailRequest;
use AlibabaCloud\SDK\Retailcloud\V20180313\Models\DescribeDeployOrderDetailResponse;
use AlibabaCloud\SDK\Retailcloud\V20180313\Models\DescribeEciConfigRequest;
use AlibabaCloud\SDK\Retailcloud\V20180313\Models\DescribeEciConfigResponse;
use AlibabaCloud\SDK\Retailcloud\V20180313\Models\DescribeEventMonitorListRequest;
use AlibabaCloud\SDK\Retailcloud\V20180313\Models\DescribeEventMonitorListResponse;
use AlibabaCloud\SDK\Retailcloud\V20180313\Models\DescribeJobLogRequest;
use AlibabaCloud\SDK\Retailcloud\V20180313\Models\DescribeJobLogResponse;
use AlibabaCloud\SDK\Retailcloud\V20180313\Models\DescribePodContainerLogListRequest;
use AlibabaCloud\SDK\Retailcloud\V20180313\Models\DescribePodContainerLogListResponse;
use AlibabaCloud\SDK\Retailcloud\V20180313\Models\DescribePodEventsRequest;
use AlibabaCloud\SDK\Retailcloud\V20180313\Models\DescribePodEventsResponse;
use AlibabaCloud\SDK\Retailcloud\V20180313\Models\DescribePodLogRequest;
use AlibabaCloud\SDK\Retailcloud\V20180313\Models\DescribePodLogResponse;
use AlibabaCloud\SDK\Retailcloud\V20180313\Models\DescribeRdsAccountsRequest;
use AlibabaCloud\SDK\Retailcloud\V20180313\Models\DescribeRdsAccountsResponse;
use AlibabaCloud\SDK\Retailcloud\V20180313\Models\DescribeServiceDetailRequest;
use AlibabaCloud\SDK\Retailcloud\V20180313\Models\DescribeServiceDetailResponse;
use AlibabaCloud\SDK\Retailcloud\V20180313\Models\DescribeSlbAPDetailRequest;
use AlibabaCloud\SDK\Retailcloud\V20180313\Models\DescribeSlbAPDetailResponse;
use AlibabaCloud\SDK\Retailcloud\V20180313\Models\GetInstTransInfoRequest;
use AlibabaCloud\SDK\Retailcloud\V20180313\Models\GetInstTransInfoResponse;
use AlibabaCloud\SDK\Retailcloud\V20180313\Models\GetRdsBackUpRequest;
use AlibabaCloud\SDK\Retailcloud\V20180313\Models\GetRdsBackUpResponse;
use AlibabaCloud\SDK\Retailcloud\V20180313\Models\GrantDbToAccountRequest;
use AlibabaCloud\SDK\Retailcloud\V20180313\Models\GrantDbToAccountResponse;
use AlibabaCloud\SDK\Retailcloud\V20180313\Models\ListAppCmsGroupsRequest;
use AlibabaCloud\SDK\Retailcloud\V20180313\Models\ListAppCmsGroupsResponse;
use AlibabaCloud\SDK\Retailcloud\V20180313\Models\ListAppEnvironmentRequest;
use AlibabaCloud\SDK\Retailcloud\V20180313\Models\ListAppEnvironmentResponse;
use AlibabaCloud\SDK\Retailcloud\V20180313\Models\ListAppGroupMappingRequest;
use AlibabaCloud\SDK\Retailcloud\V20180313\Models\ListAppGroupMappingResponse;
use AlibabaCloud\SDK\Retailcloud\V20180313\Models\ListAppGroupRequest;
use AlibabaCloud\SDK\Retailcloud\V20180313\Models\ListAppGroupResponse;
use AlibabaCloud\SDK\Retailcloud\V20180313\Models\ListAppInstanceRequest;
use AlibabaCloud\SDK\Retailcloud\V20180313\Models\ListAppInstanceResponse;
use AlibabaCloud\SDK\Retailcloud\V20180313\Models\ListAppRequest;
use AlibabaCloud\SDK\Retailcloud\V20180313\Models\ListAppResourceAllocsRequest;
use AlibabaCloud\SDK\Retailcloud\V20180313\Models\ListAppResourceAllocsResponse;
use AlibabaCloud\SDK\Retailcloud\V20180313\Models\ListAppResponse;
use AlibabaCloud\SDK\Retailcloud\V20180313\Models\ListAvailableClusterNodeRequest;
use AlibabaCloud\SDK\Retailcloud\V20180313\Models\ListAvailableClusterNodeResponse;
use AlibabaCloud\SDK\Retailcloud\V20180313\Models\ListClusterNodeRequest;
use AlibabaCloud\SDK\Retailcloud\V20180313\Models\ListClusterNodeResponse;
use AlibabaCloud\SDK\Retailcloud\V20180313\Models\ListClusterRequest;
use AlibabaCloud\SDK\Retailcloud\V20180313\Models\ListClusterResponse;
use AlibabaCloud\SDK\Retailcloud\V20180313\Models\ListDeployConfigRequest;
use AlibabaCloud\SDK\Retailcloud\V20180313\Models\ListDeployConfigResponse;
use AlibabaCloud\SDK\Retailcloud\V20180313\Models\ListDeployOrdersRequest;
use AlibabaCloud\SDK\Retailcloud\V20180313\Models\ListDeployOrdersResponse;
use AlibabaCloud\SDK\Retailcloud\V20180313\Models\ListJobHistoriesRequest;
use AlibabaCloud\SDK\Retailcloud\V20180313\Models\ListJobHistoriesResponse;
use AlibabaCloud\SDK\Retailcloud\V20180313\Models\ListNodeLabelBindingsRequest;
use AlibabaCloud\SDK\Retailcloud\V20180313\Models\ListNodeLabelBindingsResponse;
use AlibabaCloud\SDK\Retailcloud\V20180313\Models\ListNodeLabelsRequest;
use AlibabaCloud\SDK\Retailcloud\V20180313\Models\ListNodeLabelsResponse;
use AlibabaCloud\SDK\Retailcloud\V20180313\Models\ListPersistentVolumeClaimRequest;
use AlibabaCloud\SDK\Retailcloud\V20180313\Models\ListPersistentVolumeClaimResponse;
use AlibabaCloud\SDK\Retailcloud\V20180313\Models\ListPersistentVolumeRequest;
use AlibabaCloud\SDK\Retailcloud\V20180313\Models\ListPersistentVolumeResponse;
use AlibabaCloud\SDK\Retailcloud\V20180313\Models\ListPodsRequest;
use AlibabaCloud\SDK\Retailcloud\V20180313\Models\ListPodsResponse;
use AlibabaCloud\SDK\Retailcloud\V20180313\Models\ListServicesRequest;
use AlibabaCloud\SDK\Retailcloud\V20180313\Models\ListServicesResponse;
use AlibabaCloud\SDK\Retailcloud\V20180313\Models\ListSlbAPsRequest;
use AlibabaCloud\SDK\Retailcloud\V20180313\Models\ListSlbAPsResponse;
use AlibabaCloud\SDK\Retailcloud\V20180313\Models\ListUsersRequest;
use AlibabaCloud\SDK\Retailcloud\V20180313\Models\ListUsersResponse;
use AlibabaCloud\SDK\Retailcloud\V20180313\Models\ModifyServiceRequest;
use AlibabaCloud\SDK\Retailcloud\V20180313\Models\ModifyServiceResponse;
use AlibabaCloud\SDK\Retailcloud\V20180313\Models\ModifySlbAPRequest;
use AlibabaCloud\SDK\Retailcloud\V20180313\Models\ModifySlbAPResponse;
use AlibabaCloud\SDK\Retailcloud\V20180313\Models\OfflineAppEnvironmentRequest;
use AlibabaCloud\SDK\Retailcloud\V20180313\Models\OfflineAppEnvironmentResponse;
use AlibabaCloud\SDK\Retailcloud\V20180313\Models\QueryClusterDetailRequest;
use AlibabaCloud\SDK\Retailcloud\V20180313\Models\QueryClusterDetailResponse;
use AlibabaCloud\SDK\Retailcloud\V20180313\Models\RebuildAppInstanceRequest;
use AlibabaCloud\SDK\Retailcloud\V20180313\Models\RebuildAppInstanceResponse;
use AlibabaCloud\SDK\Retailcloud\V20180313\Models\RemoveClusterNodeRequest;
use AlibabaCloud\SDK\Retailcloud\V20180313\Models\RemoveClusterNodeResponse;
use AlibabaCloud\SDK\Retailcloud\V20180313\Models\ResetAccountPasswordRequest;
use AlibabaCloud\SDK\Retailcloud\V20180313\Models\ResetAccountPasswordResponse;
use AlibabaCloud\SDK\Retailcloud\V20180313\Models\ResourceStatusNotifyRequest;
use AlibabaCloud\SDK\Retailcloud\V20180313\Models\ResourceStatusNotifyResponse;
use AlibabaCloud\SDK\Retailcloud\V20180313\Models\RestartAppInstanceRequest;
use AlibabaCloud\SDK\Retailcloud\V20180313\Models\RestartAppInstanceResponse;
use AlibabaCloud\SDK\Retailcloud\V20180313\Models\ResumeDeployRequest;
use AlibabaCloud\SDK\Retailcloud\V20180313\Models\ResumeDeployResponse;
use AlibabaCloud\SDK\Retailcloud\V20180313\Models\ScaleAppRequest;
use AlibabaCloud\SDK\Retailcloud\V20180313\Models\ScaleAppResponse;
use AlibabaCloud\SDK\Retailcloud\V20180313\Models\SetDeployPauseTypeRequest;
use AlibabaCloud\SDK\Retailcloud\V20180313\Models\SetDeployPauseTypeResponse;
use AlibabaCloud\SDK\Retailcloud\V20180313\Models\SubmitInfoRequest;
use AlibabaCloud\SDK\Retailcloud\V20180313\Models\SubmitInfoResponse;
use AlibabaCloud\SDK\Retailcloud\V20180313\Models\SyncPodInfoRequest;
use AlibabaCloud\SDK\Retailcloud\V20180313\Models\SyncPodInfoResponse;
use AlibabaCloud\SDK\Retailcloud\V20180313\Models\UnbindGroupRequest;
use AlibabaCloud\SDK\Retailcloud\V20180313\Models\UnbindGroupResponse;
use AlibabaCloud\SDK\Retailcloud\V20180313\Models\UnbindNodeLabelRequest;
use AlibabaCloud\SDK\Retailcloud\V20180313\Models\UnbindNodeLabelResponse;
use AlibabaCloud\SDK\Retailcloud\V20180313\Models\UpdateAppMonitorsRequest;
use AlibabaCloud\SDK\Retailcloud\V20180313\Models\UpdateAppMonitorsResponse;
use AlibabaCloud\SDK\Retailcloud\V20180313\Models\UpdateAppRequest;
use AlibabaCloud\SDK\Retailcloud\V20180313\Models\UpdateAppResponse;
use AlibabaCloud\SDK\Retailcloud\V20180313\Models\UpdateDeployConfigRequest;
use AlibabaCloud\SDK\Retailcloud\V20180313\Models\UpdateDeployConfigResponse;
use AlibabaCloud\SDK\Retailcloud\V20180313\Models\UpdateEciConfigRequest;
use AlibabaCloud\SDK\Retailcloud\V20180313\Models\UpdateEciConfigResponse;
use AlibabaCloud\SDK\Retailcloud\V20180313\Models\UpdateEnvironmentRequest;
use AlibabaCloud\SDK\Retailcloud\V20180313\Models\UpdateEnvironmentResponse;
use AlibabaCloud\SDK\Retailcloud\V20180313\Models\UpdateNormalDeployConfigRequest;
use AlibabaCloud\SDK\Retailcloud\V20180313\Models\UpdateNormalDeployConfigResponse;
use AlibabaCloud\SDK\Retailcloud\V20180313\Models\UpdateNormalDeployConfigShrinkRequest;
use AlibabaCloud\Tea\Tea;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Retailcloud extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap  = [
            'ap-northeast-1'              => 'retailcloud.aliyuncs.com',
            'ap-northeast-2-pop'          => 'retailcloud.aliyuncs.com',
            'ap-south-1'                  => 'retailcloud.aliyuncs.com',
            'ap-southeast-1'              => 'retailcloud.aliyuncs.com',
            'ap-southeast-2'              => 'retailcloud.aliyuncs.com',
            'ap-southeast-3'              => 'retailcloud.aliyuncs.com',
            'ap-southeast-5'              => 'retailcloud.aliyuncs.com',
            'cn-beijing'                  => 'retailcloud.aliyuncs.com',
            'cn-beijing-finance-1'        => 'retailcloud.aliyuncs.com',
            'cn-beijing-finance-pop'      => 'retailcloud.aliyuncs.com',
            'cn-beijing-gov-1'            => 'retailcloud.aliyuncs.com',
            'cn-beijing-nu16-b01'         => 'retailcloud.aliyuncs.com',
            'cn-chengdu'                  => 'retailcloud.aliyuncs.com',
            'cn-edge-1'                   => 'retailcloud.aliyuncs.com',
            'cn-fujian'                   => 'retailcloud.aliyuncs.com',
            'cn-haidian-cm12-c01'         => 'retailcloud.aliyuncs.com',
            'cn-hangzhou'                 => 'retailcloud.aliyuncs.com',
            'cn-hangzhou-bj-b01'          => 'retailcloud.aliyuncs.com',
            'cn-hangzhou-finance'         => 'retailcloud.aliyuncs.com',
            'cn-hangzhou-internal-prod-1' => 'retailcloud.aliyuncs.com',
            'cn-hangzhou-internal-test-1' => 'retailcloud.aliyuncs.com',
            'cn-hangzhou-internal-test-2' => 'retailcloud.aliyuncs.com',
            'cn-hangzhou-internal-test-3' => 'retailcloud.aliyuncs.com',
            'cn-hangzhou-test-306'        => 'retailcloud.aliyuncs.com',
            'cn-hongkong'                 => 'retailcloud.aliyuncs.com',
            'cn-hongkong-finance-pop'     => 'retailcloud.aliyuncs.com',
            'cn-huhehaote'                => 'retailcloud.aliyuncs.com',
            'cn-north-2-gov-1'            => 'retailcloud.aliyuncs.com',
            'cn-qingdao'                  => 'retailcloud.aliyuncs.com',
            'cn-qingdao-nebula'           => 'retailcloud.aliyuncs.com',
            'cn-shanghai'                 => 'retailcloud.aliyuncs.com',
            'cn-shanghai-et15-b01'        => 'retailcloud.aliyuncs.com',
            'cn-shanghai-et2-b01'         => 'retailcloud.aliyuncs.com',
            'cn-shanghai-finance-1'       => 'retailcloud.aliyuncs.com',
            'cn-shanghai-inner'           => 'retailcloud.aliyuncs.com',
            'cn-shanghai-internal-test-1' => 'retailcloud.aliyuncs.com',
            'cn-shenzhen'                 => 'retailcloud.aliyuncs.com',
            'cn-shenzhen-finance-1'       => 'retailcloud.aliyuncs.com',
            'cn-shenzhen-inner'           => 'retailcloud.aliyuncs.com',
            'cn-shenzhen-st4-d01'         => 'retailcloud.aliyuncs.com',
            'cn-shenzhen-su18-b01'        => 'retailcloud.aliyuncs.com',
            'cn-wuhan'                    => 'retailcloud.aliyuncs.com',
            'cn-yushanfang'               => 'retailcloud.aliyuncs.com',
            'cn-zhangbei-na61-b01'        => 'retailcloud.aliyuncs.com',
            'cn-zhangjiakou'              => 'retailcloud.aliyuncs.com',
            'cn-zhangjiakou-na62-a01'     => 'retailcloud.aliyuncs.com',
            'cn-zhengzhou-nebula-1'       => 'retailcloud.aliyuncs.com',
            'eu-central-1'                => 'retailcloud.aliyuncs.com',
            'eu-west-1'                   => 'retailcloud.aliyuncs.com',
            'eu-west-1-oxs'               => 'retailcloud.aliyuncs.com',
            'me-east-1'                   => 'retailcloud.aliyuncs.com',
            'rus-west-1-pop'              => 'retailcloud.aliyuncs.com',
            'us-east-1'                   => 'retailcloud.aliyuncs.com',
            'us-west-1'                   => 'retailcloud.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('retailcloud', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param AddClusterNodeRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return AddClusterNodeResponse
     */
    public function addClusterNodeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterInstanceId)) {
            $query['ClusterInstanceId'] = $request->clusterInstanceId;
        }
        if (!Utils::isUnset($request->ecsInstanceIdList)) {
            $query['EcsInstanceIdList'] = $request->ecsInstanceIdList;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddClusterNode',
            'version'     => '2018-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddClusterNodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddClusterNodeRequest $request
     *
     * @return AddClusterNodeResponse
     */
    public function addClusterNode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addClusterNodeWithOptions($request, $runtime);
    }

    /**
     * @param AllocatePodConfigRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return AllocatePodConfigResponse
     */
    public function allocatePodConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->envId)) {
            $query['EnvId'] = $request->envId;
        }
        if (!Utils::isUnset($request->requestId)) {
            $query['RequestId'] = $request->requestId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AllocatePodConfig',
            'version'     => '2018-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AllocatePodConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AllocatePodConfigRequest $request
     *
     * @return AllocatePodConfigResponse
     */
    public function allocatePodConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->allocatePodConfigWithOptions($request, $runtime);
    }

    /**
     * @param BatchAddServersRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return BatchAddServersResponse
     */
    public function batchAddServersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->sign)) {
            $query['Sign'] = $request->sign;
        }
        if (!Utils::isUnset($request->vpcId)) {
            $query['VpcId'] = $request->vpcId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'BatchAddServers',
            'version'     => '2018-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BatchAddServersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param BatchAddServersRequest $request
     *
     * @return BatchAddServersResponse
     */
    public function batchAddServers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchAddServersWithOptions($request, $runtime);
    }

    /**
     * @param BindGroupRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return BindGroupResponse
     */
    public function bindGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->bizCode)) {
            $query['BizCode'] = $request->bizCode;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'BindGroup',
            'version'     => '2018-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BindGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param BindGroupRequest $request
     *
     * @return BindGroupResponse
     */
    public function bindGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->bindGroupWithOptions($request, $runtime);
    }

    /**
     * @param BindNodeLabelRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return BindNodeLabelResponse
     */
    public function bindNodeLabelWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->labelKey)) {
            $query['LabelKey'] = $request->labelKey;
        }
        if (!Utils::isUnset($request->labelValue)) {
            $query['LabelValue'] = $request->labelValue;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'BindNodeLabel',
            'version'     => '2018-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BindNodeLabelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param BindNodeLabelRequest $request
     *
     * @return BindNodeLabelResponse
     */
    public function bindNodeLabel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->bindNodeLabelWithOptions($request, $runtime);
    }

    /**
     * @param CloseDeployOrderRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CloseDeployOrderResponse
     */
    public function closeDeployOrderWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->deployOrderId)) {
            $query['DeployOrderId'] = $request->deployOrderId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CloseDeployOrder',
            'version'     => '2018-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CloseDeployOrderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CloseDeployOrderRequest $request
     *
     * @return CloseDeployOrderResponse
     */
    public function closeDeployOrder($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->closeDeployOrderWithOptions($request, $runtime);
    }

    /**
     * @param CreateAccountRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return CreateAccountResponse
     */
    public function createAccountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->accountName)) {
            $body['AccountName'] = $request->accountName;
        }
        if (!Utils::isUnset($request->accountPassword)) {
            $body['AccountPassword'] = $request->accountPassword;
        }
        if (!Utils::isUnset($request->accountType)) {
            $body['AccountType'] = $request->accountType;
        }
        if (!Utils::isUnset($request->dbInstanceId)) {
            $body['DbInstanceId'] = $request->dbInstanceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateAccount',
            'version'     => '2018-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateAccountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateAccountRequest $request
     *
     * @return CreateAccountResponse
     */
    public function createAccount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAccountWithOptions($request, $runtime);
    }

    /**
     * @param CreateAppRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return CreateAppResponse
     */
    public function createAppWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->bizCode)) {
            $body['BizCode'] = $request->bizCode;
        }
        if (!Utils::isUnset($request->bizTitle)) {
            $body['BizTitle'] = $request->bizTitle;
        }
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->groupName)) {
            $body['GroupName'] = $request->groupName;
        }
        if (!Utils::isUnset($request->language)) {
            $body['Language'] = $request->language;
        }
        if (!Utils::isUnset($request->middleWareIdList)) {
            $body['MiddleWareIdList'] = $request->middleWareIdList;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $body['Namespace'] = $request->namespace_;
        }
        if (!Utils::isUnset($request->operatingSystem)) {
            $body['OperatingSystem'] = $request->operatingSystem;
        }
        if (!Utils::isUnset($request->serviceType)) {
            $body['ServiceType'] = $request->serviceType;
        }
        if (!Utils::isUnset($request->stateType)) {
            $body['StateType'] = $request->stateType;
        }
        if (!Utils::isUnset($request->title)) {
            $body['Title'] = $request->title;
        }
        if (!Utils::isUnset($request->userRoles)) {
            $body['UserRoles'] = $request->userRoles;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateApp',
            'version'     => '2018-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateAppResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateAppRequest $request
     *
     * @return CreateAppResponse
     */
    public function createApp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAppWithOptions($request, $runtime);
    }

    /**
     * @param CreateAppGroupRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CreateAppGroupResponse
     */
    public function createAppGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->bizCode)) {
            $body['BizCode'] = $request->bizCode;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateAppGroup',
            'version'     => '2018-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateAppGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateAppGroupRequest $request
     *
     * @return CreateAppGroupResponse
     */
    public function createAppGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAppGroupWithOptions($request, $runtime);
    }

    /**
     * @param CreateAppMonitorsRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CreateAppMonitorsResponse
     */
    public function createAppMonitorsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->alarmTemplateId)) {
            $query['AlarmTemplateId'] = $request->alarmTemplateId;
        }
        if (!Utils::isUnset($request->envType)) {
            $query['EnvType'] = $request->envType;
        }
        if (!Utils::isUnset($request->mainUserId)) {
            $query['MainUserId'] = $request->mainUserId;
        }
        if (!Utils::isUnset($request->silenceTime)) {
            $query['SilenceTime'] = $request->silenceTime;
        }
        $body = [];
        if (!Utils::isUnset($request->appIds)) {
            $body['AppIds'] = $request->appIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateAppMonitors',
            'version'     => '2018-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateAppMonitorsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateAppMonitorsRequest $request
     *
     * @return CreateAppMonitorsResponse
     */
    public function createAppMonitors($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAppMonitorsWithOptions($request, $runtime);
    }

    /**
     * @param CreateAppResourceAllocRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return CreateAppResourceAllocResponse
     */
    public function createAppResourceAllocWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appEnvId)) {
            $query['AppEnvId'] = $request->appEnvId;
        }
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateAppResourceAlloc',
            'version'     => '2018-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateAppResourceAllocResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateAppResourceAllocRequest $request
     *
     * @return CreateAppResourceAllocResponse
     */
    public function createAppResourceAlloc($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAppResourceAllocWithOptions($request, $runtime);
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
        if (!Utils::isUnset($request->businessCode)) {
            $query['BusinessCode'] = $request->businessCode;
        }
        if (!Utils::isUnset($request->cloudMonitorFlags)) {
            $query['CloudMonitorFlags'] = $request->cloudMonitorFlags;
        }
        if (!Utils::isUnset($request->clusterEnvType)) {
            $query['ClusterEnvType'] = $request->clusterEnvType;
        }
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->clusterTitle)) {
            $query['ClusterTitle'] = $request->clusterTitle;
        }
        if (!Utils::isUnset($request->clusterType)) {
            $query['ClusterType'] = $request->clusterType;
        }
        if (!Utils::isUnset($request->createWithArmsIntegration)) {
            $query['CreateWithArmsIntegration'] = $request->createWithArmsIntegration;
        }
        if (!Utils::isUnset($request->createWithLogIntegration)) {
            $query['CreateWithLogIntegration'] = $request->createWithLogIntegration;
        }
        if (!Utils::isUnset($request->keyPair)) {
            $query['KeyPair'] = $request->keyPair;
        }
        if (!Utils::isUnset($request->netPlug)) {
            $query['NetPlug'] = $request->netPlug;
        }
        if (!Utils::isUnset($request->password)) {
            $query['Password'] = $request->password;
        }
        if (!Utils::isUnset($request->podCIDR)) {
            $query['PodCIDR'] = $request->podCIDR;
        }
        if (!Utils::isUnset($request->privateZone)) {
            $query['PrivateZone'] = $request->privateZone;
        }
        if (!Utils::isUnset($request->publicSlb)) {
            $query['PublicSlb'] = $request->publicSlb;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->regionName)) {
            $query['RegionName'] = $request->regionName;
        }
        if (!Utils::isUnset($request->serviceCIDR)) {
            $query['ServiceCIDR'] = $request->serviceCIDR;
        }
        if (!Utils::isUnset($request->snatEntry)) {
            $query['SnatEntry'] = $request->snatEntry;
        }
        if (!Utils::isUnset($request->vpcId)) {
            $query['VpcId'] = $request->vpcId;
        }
        if (!Utils::isUnset($request->vswitchids)) {
            $query['Vswitchids'] = $request->vswitchids;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateCluster',
            'version'     => '2018-03-13',
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
     * @param CreateDbRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return CreateDbResponse
     */
    public function createDbWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->characterSetName)) {
            $body['CharacterSetName'] = $request->characterSetName;
        }
        if (!Utils::isUnset($request->dbDescription)) {
            $body['DbDescription'] = $request->dbDescription;
        }
        if (!Utils::isUnset($request->dbInstanceId)) {
            $body['DbInstanceId'] = $request->dbInstanceId;
        }
        if (!Utils::isUnset($request->dbName)) {
            $body['DbName'] = $request->dbName;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateDb',
            'version'     => '2018-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateDbResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateDbRequest $request
     *
     * @return CreateDbResponse
     */
    public function createDb($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDbWithOptions($request, $runtime);
    }

    /**
     * @param CreateDeployConfigRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CreateDeployConfigResponse
     */
    public function createDeployConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->codePath)) {
            $query['CodePath'] = $request->codePath;
        }
        if (!Utils::isUnset($request->configMap)) {
            $query['ConfigMap'] = $request->configMap;
        }
        if (!Utils::isUnset($request->configMapList)) {
            $query['ConfigMapList'] = $request->configMapList;
        }
        if (!Utils::isUnset($request->cronJob)) {
            $query['CronJob'] = $request->cronJob;
        }
        if (!Utils::isUnset($request->deployment)) {
            $query['Deployment'] = $request->deployment;
        }
        if (!Utils::isUnset($request->envType)) {
            $query['EnvType'] = $request->envType;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->secretList)) {
            $query['SecretList'] = $request->secretList;
        }
        if (!Utils::isUnset($request->statefulSet)) {
            $query['StatefulSet'] = $request->statefulSet;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateDeployConfig',
            'version'     => '2018-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateDeployConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateDeployConfigRequest $request
     *
     * @return CreateDeployConfigResponse
     */
    public function createDeployConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDeployConfigWithOptions($request, $runtime);
    }

    /**
     * @param CreateEciConfigRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CreateEciConfigResponse
     */
    public function createEciConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appEnvId)) {
            $query['AppEnvId'] = $request->appEnvId;
        }
        if (!Utils::isUnset($request->eipBandwidth)) {
            $query['EipBandwidth'] = $request->eipBandwidth;
        }
        if (!Utils::isUnset($request->enableEciSchedulePolicy)) {
            $query['EnableEciSchedulePolicy'] = $request->enableEciSchedulePolicy;
        }
        if (!Utils::isUnset($request->mirrorCache)) {
            $query['MirrorCache'] = $request->mirrorCache;
        }
        if (!Utils::isUnset($request->normalInstanceLimit)) {
            $query['NormalInstanceLimit'] = $request->normalInstanceLimit;
        }
        if (!Utils::isUnset($request->scheduleVirtualNode)) {
            $query['ScheduleVirtualNode'] = $request->scheduleVirtualNode;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateEciConfig',
            'version'     => '2018-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateEciConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateEciConfigRequest $request
     *
     * @return CreateEciConfigResponse
     */
    public function createEciConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createEciConfigWithOptions($request, $runtime);
    }

    /**
     * @param CreateEnvironmentRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CreateEnvironmentResponse
     */
    public function createEnvironmentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->appSchemaId)) {
            $query['AppSchemaId'] = $request->appSchemaId;
        }
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->envName)) {
            $query['EnvName'] = $request->envName;
        }
        if (!Utils::isUnset($request->envType)) {
            $query['EnvType'] = $request->envType;
        }
        if (!Utils::isUnset($request->region)) {
            $query['Region'] = $request->region;
        }
        if (!Utils::isUnset($request->replicas)) {
            $query['Replicas'] = $request->replicas;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateEnvironment',
            'version'     => '2018-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateEnvironmentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateEnvironmentRequest $request
     *
     * @return CreateEnvironmentResponse
     */
    public function createEnvironment($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createEnvironmentWithOptions($request, $runtime);
    }

    /**
     * @param CreateNodeLabelRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CreateNodeLabelResponse
     */
    public function createNodeLabelWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->labelKey)) {
            $query['LabelKey'] = $request->labelKey;
        }
        if (!Utils::isUnset($request->labelValue)) {
            $query['LabelValue'] = $request->labelValue;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateNodeLabel',
            'version'     => '2018-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateNodeLabelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateNodeLabelRequest $request
     *
     * @return CreateNodeLabelResponse
     */
    public function createNodeLabel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createNodeLabelWithOptions($request, $runtime);
    }

    /**
     * @param CreatePersistentVolumeRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return CreatePersistentVolumeResponse
     */
    public function createPersistentVolumeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->accessModes)) {
            $body['AccessModes'] = $request->accessModes;
        }
        if (!Utils::isUnset($request->capacity)) {
            $body['Capacity'] = $request->capacity;
        }
        if (!Utils::isUnset($request->clusterInstanceId)) {
            $body['ClusterInstanceId'] = $request->clusterInstanceId;
        }
        if (!Utils::isUnset($request->mountDir)) {
            $body['MountDir'] = $request->mountDir;
        }
        if (!Utils::isUnset($request->mountTargetDomain)) {
            $body['MountTargetDomain'] = $request->mountTargetDomain;
        }
        if (!Utils::isUnset($request->NFSVersion)) {
            $body['NFSVersion'] = $request->NFSVersion;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->nasType)) {
            $body['NasType'] = $request->nasType;
        }
        if (!Utils::isUnset($request->reclaimPolicy)) {
            $body['ReclaimPolicy'] = $request->reclaimPolicy;
        }
        if (!Utils::isUnset($request->storageClass)) {
            $body['StorageClass'] = $request->storageClass;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreatePersistentVolume',
            'version'     => '2018-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreatePersistentVolumeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreatePersistentVolumeRequest $request
     *
     * @return CreatePersistentVolumeResponse
     */
    public function createPersistentVolume($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createPersistentVolumeWithOptions($request, $runtime);
    }

    /**
     * @param CreatePersistentVolumeClaimRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return CreatePersistentVolumeClaimResponse
     */
    public function createPersistentVolumeClaimWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessModes)) {
            $query['AccessModes'] = $request->accessModes;
        }
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->capacity)) {
            $query['Capacity'] = $request->capacity;
        }
        if (!Utils::isUnset($request->envId)) {
            $query['EnvId'] = $request->envId;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->storageClass)) {
            $query['StorageClass'] = $request->storageClass;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreatePersistentVolumeClaim',
            'version'     => '2018-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreatePersistentVolumeClaimResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreatePersistentVolumeClaimRequest $request
     *
     * @return CreatePersistentVolumeClaimResponse
     */
    public function createPersistentVolumeClaim($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createPersistentVolumeClaimWithOptions($request, $runtime);
    }

    /**
     * @param CreateServiceRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return CreateServiceResponse
     */
    public function createServiceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->envId)) {
            $query['EnvId'] = $request->envId;
        }
        if (!Utils::isUnset($request->headless)) {
            $query['Headless'] = $request->headless;
        }
        if (!Utils::isUnset($request->k8sServiceId)) {
            $query['K8sServiceId'] = $request->k8sServiceId;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->serviceType)) {
            $query['ServiceType'] = $request->serviceType;
        }
        $body = [];
        if (!Utils::isUnset($request->portMappings)) {
            $body['PortMappings'] = $request->portMappings;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateService',
            'version'     => '2018-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateServiceRequest $request
     *
     * @return CreateServiceResponse
     */
    public function createService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createServiceWithOptions($request, $runtime);
    }

    /**
     * @param CreateSlbAPRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return CreateSlbAPResponse
     */
    public function createSlbAPWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cookieTimeout)) {
            $query['CookieTimeout'] = $request->cookieTimeout;
        }
        if (!Utils::isUnset($request->envId)) {
            $query['EnvId'] = $request->envId;
        }
        if (!Utils::isUnset($request->establishedTimeout)) {
            $query['EstablishedTimeout'] = $request->establishedTimeout;
        }
        if (!Utils::isUnset($request->listenerPort)) {
            $query['ListenerPort'] = $request->listenerPort;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->protocol)) {
            $query['Protocol'] = $request->protocol;
        }
        if (!Utils::isUnset($request->realServerPort)) {
            $query['RealServerPort'] = $request->realServerPort;
        }
        if (!Utils::isUnset($request->slbId)) {
            $query['SlbId'] = $request->slbId;
        }
        if (!Utils::isUnset($request->sslCertId)) {
            $query['SslCertId'] = $request->sslCertId;
        }
        if (!Utils::isUnset($request->stickySession)) {
            $query['StickySession'] = $request->stickySession;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateSlbAP',
            'version'     => '2018-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateSlbAPResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateSlbAPRequest $request
     *
     * @return CreateSlbAPResponse
     */
    public function createSlbAP($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSlbAPWithOptions($request, $runtime);
    }

    /**
     * @param DeleteAppDetailRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteAppDetailResponse
     */
    public function deleteAppDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteAppDetail',
            'version'     => '2018-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteAppDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteAppDetailRequest $request
     *
     * @return DeleteAppDetailResponse
     */
    public function deleteAppDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAppDetailWithOptions($request, $runtime);
    }

    /**
     * @param DeleteAppEnvironmentRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DeleteAppEnvironmentResponse
     */
    public function deleteAppEnvironmentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->envId)) {
            $query['EnvId'] = $request->envId;
        }
        if (!Utils::isUnset($request->force)) {
            $query['Force'] = $request->force;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteAppEnvironment',
            'version'     => '2018-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteAppEnvironmentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteAppEnvironmentRequest $request
     *
     * @return DeleteAppEnvironmentResponse
     */
    public function deleteAppEnvironment($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAppEnvironmentWithOptions($request, $runtime);
    }

    /**
     * @param DeleteAppGroupRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteAppGroupResponse
     */
    public function deleteAppGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->force)) {
            $query['Force'] = $request->force;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteAppGroup',
            'version'     => '2018-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteAppGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteAppGroupRequest $request
     *
     * @return DeleteAppGroupResponse
     */
    public function deleteAppGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAppGroupWithOptions($request, $runtime);
    }

    /**
     * @param DeleteAppResourceAllocRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DeleteAppResourceAllocResponse
     */
    public function deleteAppResourceAllocWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appEnvId)) {
            $query['AppEnvId'] = $request->appEnvId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteAppResourceAlloc',
            'version'     => '2018-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteAppResourceAllocResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteAppResourceAllocRequest $request
     *
     * @return DeleteAppResourceAllocResponse
     */
    public function deleteAppResourceAlloc($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAppResourceAllocWithOptions($request, $runtime);
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
        if (!Utils::isUnset($request->clusterInstanceId)) {
            $query['ClusterInstanceId'] = $request->clusterInstanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteCluster',
            'version'     => '2018-03-13',
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
     * @param DeleteDatabaseRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteDatabaseResponse
     */
    public function deleteDatabaseWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $body['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->DBName)) {
            $body['DBName'] = $request->DBName;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteDatabase',
            'version'     => '2018-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteDatabaseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteDatabaseRequest $request
     *
     * @return DeleteDatabaseResponse
     */
    public function deleteDatabase($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDatabaseWithOptions($request, $runtime);
    }

    /**
     * @param DeleteDeployConfigRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteDeployConfigResponse
     */
    public function deleteDeployConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->schemaId)) {
            $query['SchemaId'] = $request->schemaId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteDeployConfig',
            'version'     => '2018-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteDeployConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteDeployConfigRequest $request
     *
     * @return DeleteDeployConfigResponse
     */
    public function deleteDeployConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDeployConfigWithOptions($request, $runtime);
    }

    /**
     * @param DeleteNodeLabelRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteNodeLabelResponse
     */
    public function deleteNodeLabelWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->force)) {
            $query['Force'] = $request->force;
        }
        if (!Utils::isUnset($request->labelKey)) {
            $query['LabelKey'] = $request->labelKey;
        }
        if (!Utils::isUnset($request->labelValue)) {
            $query['LabelValue'] = $request->labelValue;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteNodeLabel',
            'version'     => '2018-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteNodeLabelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteNodeLabelRequest $request
     *
     * @return DeleteNodeLabelResponse
     */
    public function deleteNodeLabel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteNodeLabelWithOptions($request, $runtime);
    }

    /**
     * @param DeletePersistentVolumeRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DeletePersistentVolumeResponse
     */
    public function deletePersistentVolumeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clusterInstanceId)) {
            $body['ClusterInstanceId'] = $request->clusterInstanceId;
        }
        if (!Utils::isUnset($request->persistentVolumeName)) {
            $body['PersistentVolumeName'] = $request->persistentVolumeName;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeletePersistentVolume',
            'version'     => '2018-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeletePersistentVolumeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeletePersistentVolumeRequest $request
     *
     * @return DeletePersistentVolumeResponse
     */
    public function deletePersistentVolume($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deletePersistentVolumeWithOptions($request, $runtime);
    }

    /**
     * @param DeletePersistentVolumeClaimRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DeletePersistentVolumeClaimResponse
     */
    public function deletePersistentVolumeClaimWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->envId)) {
            $query['EnvId'] = $request->envId;
        }
        if (!Utils::isUnset($request->persistentVolumeClaimName)) {
            $query['PersistentVolumeClaimName'] = $request->persistentVolumeClaimName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeletePersistentVolumeClaim',
            'version'     => '2018-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeletePersistentVolumeClaimResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeletePersistentVolumeClaimRequest $request
     *
     * @return DeletePersistentVolumeClaimResponse
     */
    public function deletePersistentVolumeClaim($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deletePersistentVolumeClaimWithOptions($request, $runtime);
    }

    /**
     * @param DeleteRdsAccountRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteRdsAccountResponse
     */
    public function deleteRdsAccountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->accountName)) {
            $body['AccountName'] = $request->accountName;
        }
        if (!Utils::isUnset($request->dbInstanceId)) {
            $body['DbInstanceId'] = $request->dbInstanceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteRdsAccount',
            'version'     => '2018-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteRdsAccountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteRdsAccountRequest $request
     *
     * @return DeleteRdsAccountResponse
     */
    public function deleteRdsAccount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteRdsAccountWithOptions($request, $runtime);
    }

    /**
     * @param DeleteServiceRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteServiceResponse
     */
    public function deleteServiceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->serviceId)) {
            $query['ServiceId'] = $request->serviceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteService',
            'version'     => '2018-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteServiceRequest $request
     *
     * @return DeleteServiceResponse
     */
    public function deleteService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteServiceWithOptions($request, $runtime);
    }

    /**
     * @param DeleteSlbAPRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return DeleteSlbAPResponse
     */
    public function deleteSlbAPWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->slbAPId)) {
            $query['SlbAPId'] = $request->slbAPId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteSlbAP',
            'version'     => '2018-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteSlbAPResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteSlbAPRequest $request
     *
     * @return DeleteSlbAPResponse
     */
    public function deleteSlbAP($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSlbAPWithOptions($request, $runtime);
    }

    /**
     * @param DeployAppRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return DeployAppResponse
     */
    public function deployAppWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->armsFlag)) {
            $query['ArmsFlag'] = $request->armsFlag;
        }
        if (!Utils::isUnset($request->containerImageList)) {
            $query['ContainerImageList'] = $request->containerImageList;
        }
        if (!Utils::isUnset($request->defaultPacketOfAppGroup)) {
            $query['DefaultPacketOfAppGroup'] = $request->defaultPacketOfAppGroup;
        }
        if (!Utils::isUnset($request->deployPacketId)) {
            $query['DeployPacketId'] = $request->deployPacketId;
        }
        if (!Utils::isUnset($request->deployPacketUrl)) {
            $query['DeployPacketUrl'] = $request->deployPacketUrl;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->envId)) {
            $query['EnvId'] = $request->envId;
        }
        if (!Utils::isUnset($request->initContainerImageList)) {
            $query['InitContainerImageList'] = $request->initContainerImageList;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->pauseType)) {
            $query['PauseType'] = $request->pauseType;
        }
        if (!Utils::isUnset($request->totalPartitions)) {
            $query['TotalPartitions'] = $request->totalPartitions;
        }
        if (!Utils::isUnset($request->updateStrategyType)) {
            $query['UpdateStrategyType'] = $request->updateStrategyType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeployApp',
            'version'     => '2018-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeployAppResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeployAppRequest $request
     *
     * @return DeployAppResponse
     */
    public function deployApp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deployAppWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAppDetailRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeAppDetailResponse
     */
    public function describeAppDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeAppDetail',
            'version'     => '2018-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAppDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeAppDetailRequest $request
     *
     * @return DescribeAppDetailResponse
     */
    public function describeAppDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAppDetailWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAppEnvDeployBaselineRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeAppEnvDeployBaselineResponse
     */
    public function describeAppEnvDeployBaselineWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->envId)) {
            $query['EnvId'] = $request->envId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeAppEnvDeployBaseline',
            'version'     => '2018-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAppEnvDeployBaselineResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeAppEnvDeployBaselineRequest $request
     *
     * @return DescribeAppEnvDeployBaselineResponse
     */
    public function describeAppEnvDeployBaseline($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAppEnvDeployBaselineWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAppEnvironmentDetailRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeAppEnvironmentDetailResponse
     */
    public function describeAppEnvironmentDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeAppEnvironmentDetail',
            'version'     => '2018-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAppEnvironmentDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeAppEnvironmentDetailRequest $request
     *
     * @return DescribeAppEnvironmentDetailResponse
     */
    public function describeAppEnvironmentDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAppEnvironmentDetailWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAppGroupDeploySettingRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeAppGroupDeploySettingResponse
     */
    public function describeAppGroupDeploySettingWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appGroupId)) {
            $query['AppGroupId'] = $request->appGroupId;
        }
        if (!Utils::isUnset($request->envType)) {
            $query['EnvType'] = $request->envType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeAppGroupDeploySetting',
            'version'     => '2018-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAppGroupDeploySettingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeAppGroupDeploySettingRequest $request
     *
     * @return DescribeAppGroupDeploySettingResponse
     */
    public function describeAppGroupDeploySetting($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAppGroupDeploySettingWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAppMonitorMetricRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeAppMonitorMetricResponse
     */
    public function describeAppMonitorMetricWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->deployOrderId)) {
            $query['DeployOrderId'] = $request->deployOrderId;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->envId)) {
            $query['EnvId'] = $request->envId;
        }
        if (!Utils::isUnset($request->metric)) {
            $query['Metric'] = $request->metric;
        }
        if (!Utils::isUnset($request->podName)) {
            $query['PodName'] = $request->podName;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeAppMonitorMetric',
            'version'     => '2018-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAppMonitorMetricResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeAppMonitorMetricRequest $request
     *
     * @return DescribeAppMonitorMetricResponse
     */
    public function describeAppMonitorMetric($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAppMonitorMetricWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAppResourceAllocRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeAppResourceAllocResponse
     */
    public function describeAppResourceAllocWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeAppResourceAlloc',
            'version'     => '2018-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAppResourceAllocResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeAppResourceAllocRequest $request
     *
     * @return DescribeAppResourceAllocResponse
     */
    public function describeAppResourceAlloc($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAppResourceAllocWithOptions($request, $runtime);
    }

    /**
     * @param DescribeClusterDetailRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeClusterDetailResponse
     */
    public function describeClusterDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterInstanceId)) {
            $query['ClusterInstanceId'] = $request->clusterInstanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeClusterDetail',
            'version'     => '2018-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeClusterDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeClusterDetailRequest $request
     *
     * @return DescribeClusterDetailResponse
     */
    public function describeClusterDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeClusterDetailWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDatabasesRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeDatabasesResponse
     */
    public function describeDatabasesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDatabases',
            'version'     => '2018-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDatabasesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDatabasesRequest $request
     *
     * @return DescribeDatabasesResponse
     */
    public function describeDatabases($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDatabasesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDeployOrderDetailRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeDeployOrderDetailResponse
     */
    public function describeDeployOrderDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->deployOrderId)) {
            $query['DeployOrderId'] = $request->deployOrderId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDeployOrderDetail',
            'version'     => '2018-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDeployOrderDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDeployOrderDetailRequest $request
     *
     * @return DescribeDeployOrderDetailResponse
     */
    public function describeDeployOrderDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDeployOrderDetailWithOptions($request, $runtime);
    }

    /**
     * @param DescribeEciConfigRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeEciConfigResponse
     */
    public function describeEciConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeEciConfig',
            'version'     => '2018-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeEciConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeEciConfigRequest $request
     *
     * @return DescribeEciConfigResponse
     */
    public function describeEciConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEciConfigWithOptions($request, $runtime);
    }

    /**
     * @param DescribeEventMonitorListRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeEventMonitorListResponse
     */
    public function describeEventMonitorListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->envId)) {
            $query['EnvId'] = $request->envId;
        }
        if (!Utils::isUnset($request->eventLevel)) {
            $query['EventLevel'] = $request->eventLevel;
        }
        if (!Utils::isUnset($request->eventType)) {
            $query['EventType'] = $request->eventType;
        }
        if (!Utils::isUnset($request->pageNum)) {
            $query['PageNum'] = $request->pageNum;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->podName)) {
            $query['PodName'] = $request->podName;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeEventMonitorList',
            'version'     => '2018-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeEventMonitorListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeEventMonitorListRequest $request
     *
     * @return DescribeEventMonitorListResponse
     */
    public function describeEventMonitorList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEventMonitorListWithOptions($request, $runtime);
    }

    /**
     * @param DescribeJobLogRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DescribeJobLogResponse
     */
    public function describeJobLogWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeJobLog',
            'version'     => '2018-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeJobLogResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeJobLogRequest $request
     *
     * @return DescribeJobLogResponse
     */
    public function describeJobLog($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeJobLogWithOptions($request, $runtime);
    }

    /**
     * @param DescribePodContainerLogListRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribePodContainerLogListResponse
     */
    public function describePodContainerLogListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->envId)) {
            $query['EnvId'] = $request->envId;
        }
        if (!Utils::isUnset($request->line)) {
            $query['Line'] = $request->line;
        }
        if (!Utils::isUnset($request->podName)) {
            $query['PodName'] = $request->podName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribePodContainerLogList',
            'version'     => '2018-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribePodContainerLogListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribePodContainerLogListRequest $request
     *
     * @return DescribePodContainerLogListResponse
     */
    public function describePodContainerLogList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePodContainerLogListWithOptions($request, $runtime);
    }

    /**
     * @param DescribePodEventsRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribePodEventsResponse
     */
    public function describePodEventsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appInstId)) {
            $query['AppInstId'] = $request->appInstId;
        }
        if (!Utils::isUnset($request->deployOrderId)) {
            $query['DeployOrderId'] = $request->deployOrderId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribePodEvents',
            'version'     => '2018-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribePodEventsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribePodEventsRequest $request
     *
     * @return DescribePodEventsResponse
     */
    public function describePodEvents($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePodEventsWithOptions($request, $runtime);
    }

    /**
     * @param DescribePodLogRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DescribePodLogResponse
     */
    public function describePodLogWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appInstId)) {
            $body['AppInstId'] = $request->appInstId;
        }
        if (!Utils::isUnset($request->deployOrderId)) {
            $body['DeployOrderId'] = $request->deployOrderId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribePodLog',
            'version'     => '2018-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribePodLogResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribePodLogRequest $request
     *
     * @return DescribePodLogResponse
     */
    public function describePodLog($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePodLogWithOptions($request, $runtime);
    }

    /**
     * @param DescribeRdsAccountsRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeRdsAccountsResponse
     */
    public function describeRdsAccountsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeRdsAccounts',
            'version'     => '2018-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeRdsAccountsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeRdsAccountsRequest $request
     *
     * @return DescribeRdsAccountsResponse
     */
    public function describeRdsAccounts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRdsAccountsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeServiceDetailRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeServiceDetailResponse
     */
    public function describeServiceDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->serviceId)) {
            $query['ServiceId'] = $request->serviceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeServiceDetail',
            'version'     => '2018-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeServiceDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeServiceDetailRequest $request
     *
     * @return DescribeServiceDetailResponse
     */
    public function describeServiceDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeServiceDetailWithOptions($request, $runtime);
    }

    /**
     * @param DescribeSlbAPDetailRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeSlbAPDetailResponse
     */
    public function describeSlbAPDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->slbAPId)) {
            $query['SlbAPId'] = $request->slbAPId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeSlbAPDetail',
            'version'     => '2018-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSlbAPDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeSlbAPDetailRequest $request
     *
     * @return DescribeSlbAPDetailResponse
     */
    public function describeSlbAPDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSlbAPDetailWithOptions($request, $runtime);
    }

    /**
     * @param GetInstTransInfoRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetInstTransInfoResponse
     */
    public function getInstTransInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->aliyunCommodityCode)) {
            $body['aliyunCommodityCode'] = $request->aliyunCommodityCode;
        }
        if (!Utils::isUnset($request->aliyunEquipId)) {
            $body['aliyunEquipId'] = $request->aliyunEquipId;
        }
        if (!Utils::isUnset($request->aliyunUid)) {
            $body['aliyunUid'] = $request->aliyunUid;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetInstTransInfo',
            'version'     => '2018-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetInstTransInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetInstTransInfoRequest $request
     *
     * @return GetInstTransInfoResponse
     */
    public function getInstTransInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getInstTransInfoWithOptions($request, $runtime);
    }

    /**
     * @param GetRdsBackUpRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return GetRdsBackUpResponse
     */
    public function getRdsBackUpWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->backupId)) {
            $body['BackupId'] = $request->backupId;
        }
        if (!Utils::isUnset($request->backupType)) {
            $body['BackupType'] = $request->backupType;
        }
        if (!Utils::isUnset($request->dbInstanceId)) {
            $body['DbInstanceId'] = $request->dbInstanceId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $body['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetRdsBackUp',
            'version'     => '2018-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetRdsBackUpResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetRdsBackUpRequest $request
     *
     * @return GetRdsBackUpResponse
     */
    public function getRdsBackUp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getRdsBackUpWithOptions($request, $runtime);
    }

    /**
     * @param GrantDbToAccountRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GrantDbToAccountResponse
     */
    public function grantDbToAccountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->accountName)) {
            $body['AccountName'] = $request->accountName;
        }
        if (!Utils::isUnset($request->accountPrivilege)) {
            $body['AccountPrivilege'] = $request->accountPrivilege;
        }
        if (!Utils::isUnset($request->dbInstanceId)) {
            $body['DbInstanceId'] = $request->dbInstanceId;
        }
        if (!Utils::isUnset($request->dbName)) {
            $body['DbName'] = $request->dbName;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GrantDbToAccount',
            'version'     => '2018-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GrantDbToAccountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GrantDbToAccountRequest $request
     *
     * @return GrantDbToAccountResponse
     */
    public function grantDbToAccount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->grantDbToAccountWithOptions($request, $runtime);
    }

    /**
     * @param ListAppRequest $request
     * @param RuntimeOptions $runtime
     *
     * @return ListAppResponse
     */
    public function listAppWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListApp',
            'version'     => '2018-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListAppResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListAppRequest $request
     *
     * @return ListAppResponse
     */
    public function listApp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAppWithOptions($request, $runtime);
    }

    /**
     * @param ListAppCmsGroupsRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListAppCmsGroupsResponse
     */
    public function listAppCmsGroupsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListAppCmsGroups',
            'version'     => '2018-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListAppCmsGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListAppCmsGroupsRequest $request
     *
     * @return ListAppCmsGroupsResponse
     */
    public function listAppCmsGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAppCmsGroupsWithOptions($request, $runtime);
    }

    /**
     * @param ListAppEnvironmentRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ListAppEnvironmentResponse
     */
    public function listAppEnvironmentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListAppEnvironment',
            'version'     => '2018-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListAppEnvironmentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListAppEnvironmentRequest $request
     *
     * @return ListAppEnvironmentResponse
     */
    public function listAppEnvironment($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAppEnvironmentWithOptions($request, $runtime);
    }

    /**
     * @param ListAppGroupRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ListAppGroupResponse
     */
    public function listAppGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bizCode)) {
            $query['BizCode'] = $request->bizCode;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListAppGroup',
            'version'     => '2018-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListAppGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListAppGroupRequest $request
     *
     * @return ListAppGroupResponse
     */
    public function listAppGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAppGroupWithOptions($request, $runtime);
    }

    /**
     * @param ListAppGroupMappingRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ListAppGroupMappingResponse
     */
    public function listAppGroupMappingWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bizCode)) {
            $query['BizCode'] = $request->bizCode;
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListAppGroupMapping',
            'version'     => '2018-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListAppGroupMappingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListAppGroupMappingRequest $request
     *
     * @return ListAppGroupMappingResponse
     */
    public function listAppGroupMapping($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAppGroupMappingWithOptions($request, $runtime);
    }

    /**
     * @param ListAppInstanceRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListAppInstanceResponse
     */
    public function listAppInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->envId)) {
            $body['EnvId'] = $request->envId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $body['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListAppInstance',
            'version'     => '2018-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListAppInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListAppInstanceRequest $request
     *
     * @return ListAppInstanceResponse
     */
    public function listAppInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAppInstanceWithOptions($request, $runtime);
    }

    /**
     * @param ListAppResourceAllocsRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ListAppResourceAllocsResponse
     */
    public function listAppResourceAllocsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListAppResourceAllocs',
            'version'     => '2018-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListAppResourceAllocsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListAppResourceAllocsRequest $request
     *
     * @return ListAppResourceAllocsResponse
     */
    public function listAppResourceAllocs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAppResourceAllocsWithOptions($request, $runtime);
    }

    /**
     * @param ListAvailableClusterNodeRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ListAvailableClusterNodeResponse
     */
    public function listAvailableClusterNodeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListAvailableClusterNode',
            'version'     => '2018-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListAvailableClusterNodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListAvailableClusterNodeRequest $request
     *
     * @return ListAvailableClusterNodeResponse
     */
    public function listAvailableClusterNode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAvailableClusterNodeWithOptions($request, $runtime);
    }

    /**
     * @param ListClusterRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ListClusterResponse
     */
    public function listClusterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListCluster',
            'version'     => '2018-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListClusterRequest $request
     *
     * @return ListClusterResponse
     */
    public function listCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listClusterWithOptions($request, $runtime);
    }

    /**
     * @param ListClusterNodeRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListClusterNodeResponse
     */
    public function listClusterNodeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListClusterNode',
            'version'     => '2018-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListClusterNodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListClusterNodeRequest $request
     *
     * @return ListClusterNodeResponse
     */
    public function listClusterNode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listClusterNodeWithOptions($request, $runtime);
    }

    /**
     * @param ListDeployConfigRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListDeployConfigResponse
     */
    public function listDeployConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->envType)) {
            $query['EnvType'] = $request->envType;
        }
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListDeployConfig',
            'version'     => '2018-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListDeployConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListDeployConfigRequest $request
     *
     * @return ListDeployConfigResponse
     */
    public function listDeployConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDeployConfigWithOptions($request, $runtime);
    }

    /**
     * @param ListDeployOrdersRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListDeployOrdersResponse
     */
    public function listDeployOrdersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->deployCategory)) {
            $query['DeployCategory'] = $request->deployCategory;
        }
        if (!Utils::isUnset($request->deployType)) {
            $query['DeployType'] = $request->deployType;
        }
        if (!Utils::isUnset($request->endTimeGreaterThan)) {
            $query['EndTimeGreaterThan'] = $request->endTimeGreaterThan;
        }
        if (!Utils::isUnset($request->endTimeGreaterThanOrEqualTo)) {
            $query['EndTimeGreaterThanOrEqualTo'] = $request->endTimeGreaterThanOrEqualTo;
        }
        if (!Utils::isUnset($request->endTimeLessThan)) {
            $query['EndTimeLessThan'] = $request->endTimeLessThan;
        }
        if (!Utils::isUnset($request->endTimeLessThanOrEqualTo)) {
            $query['EndTimeLessThanOrEqualTo'] = $request->endTimeLessThanOrEqualTo;
        }
        if (!Utils::isUnset($request->envId)) {
            $query['EnvId'] = $request->envId;
        }
        if (!Utils::isUnset($request->envType)) {
            $query['EnvType'] = $request->envType;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->partitionType)) {
            $query['PartitionType'] = $request->partitionType;
        }
        if (!Utils::isUnset($request->pauseType)) {
            $query['PauseType'] = $request->pauseType;
        }
        if (!Utils::isUnset($request->startTimeGreaterThan)) {
            $query['StartTimeGreaterThan'] = $request->startTimeGreaterThan;
        }
        if (!Utils::isUnset($request->startTimeGreaterThanOrEqualTo)) {
            $query['StartTimeGreaterThanOrEqualTo'] = $request->startTimeGreaterThanOrEqualTo;
        }
        if (!Utils::isUnset($request->startTimeLessThan)) {
            $query['StartTimeLessThan'] = $request->startTimeLessThan;
        }
        if (!Utils::isUnset($request->startTimeLessThanOrEqualTo)) {
            $query['StartTimeLessThanOrEqualTo'] = $request->startTimeLessThanOrEqualTo;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        $body = [];
        if (!Utils::isUnset($request->resultList)) {
            $body['ResultList'] = $request->resultList;
        }
        if (!Utils::isUnset($request->statusList)) {
            $body['StatusList'] = $request->statusList;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListDeployOrders',
            'version'     => '2018-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListDeployOrdersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListDeployOrdersRequest $request
     *
     * @return ListDeployOrdersResponse
     */
    public function listDeployOrders($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDeployOrdersWithOptions($request, $runtime);
    }

    /**
     * @param ListJobHistoriesRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListJobHistoriesResponse
     */
    public function listJobHistoriesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListJobHistories',
            'version'     => '2018-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListJobHistoriesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListJobHistoriesRequest $request
     *
     * @return ListJobHistoriesResponse
     */
    public function listJobHistories($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listJobHistoriesWithOptions($request, $runtime);
    }

    /**
     * @param ListNodeLabelBindingsRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ListNodeLabelBindingsResponse
     */
    public function listNodeLabelBindingsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListNodeLabelBindings',
            'version'     => '2018-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListNodeLabelBindingsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListNodeLabelBindingsRequest $request
     *
     * @return ListNodeLabelBindingsResponse
     */
    public function listNodeLabelBindings($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listNodeLabelBindingsWithOptions($request, $runtime);
    }

    /**
     * @param ListNodeLabelsRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ListNodeLabelsResponse
     */
    public function listNodeLabelsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->labelKey)) {
            $query['LabelKey'] = $request->labelKey;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListNodeLabels',
            'version'     => '2018-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListNodeLabelsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListNodeLabelsRequest $request
     *
     * @return ListNodeLabelsResponse
     */
    public function listNodeLabels($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listNodeLabelsWithOptions($request, $runtime);
    }

    /**
     * @param ListPersistentVolumeRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ListPersistentVolumeResponse
     */
    public function listPersistentVolumeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clusterInstanceId)) {
            $body['ClusterInstanceId'] = $request->clusterInstanceId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $body['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListPersistentVolume',
            'version'     => '2018-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListPersistentVolumeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListPersistentVolumeRequest $request
     *
     * @return ListPersistentVolumeResponse
     */
    public function listPersistentVolume($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPersistentVolumeWithOptions($request, $runtime);
    }

    /**
     * @param ListPersistentVolumeClaimRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ListPersistentVolumeClaimResponse
     */
    public function listPersistentVolumeClaimWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->envId)) {
            $query['EnvId'] = $request->envId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListPersistentVolumeClaim',
            'version'     => '2018-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListPersistentVolumeClaimResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListPersistentVolumeClaimRequest $request
     *
     * @return ListPersistentVolumeClaimResponse
     */
    public function listPersistentVolumeClaim($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPersistentVolumeClaimWithOptions($request, $runtime);
    }

    /**
     * @param ListPodsRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return ListPodsResponse
     */
    public function listPodsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->deployOrderId)) {
            $query['DeployOrderId'] = $request->deployOrderId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $body = [];
        if (!Utils::isUnset($request->resultList)) {
            $body['ResultList'] = $request->resultList;
        }
        if (!Utils::isUnset($request->statusList)) {
            $body['StatusList'] = $request->statusList;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListPods',
            'version'     => '2018-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListPodsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListPodsRequest $request
     *
     * @return ListPodsResponse
     */
    public function listPods($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPodsWithOptions($request, $runtime);
    }

    /**
     * @param ListServicesRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ListServicesResponse
     */
    public function listServicesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->envId)) {
            $query['EnvId'] = $request->envId;
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
        if (!Utils::isUnset($request->serviceType)) {
            $query['ServiceType'] = $request->serviceType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListServices',
            'version'     => '2018-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListServicesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListServicesRequest $request
     *
     * @return ListServicesResponse
     */
    public function listServices($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listServicesWithOptions($request, $runtime);
    }

    /**
     * @param ListSlbAPsRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return ListSlbAPsResponse
     */
    public function listSlbAPsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->envId)) {
            $query['EnvId'] = $request->envId;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->networkMode)) {
            $query['NetworkMode'] = $request->networkMode;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->slbId)) {
            $query['SlbId'] = $request->slbId;
        }
        $body = [];
        if (!Utils::isUnset($request->protocolList)) {
            $body['ProtocolList'] = $request->protocolList;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListSlbAPs',
            'version'     => '2018-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListSlbAPsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListSlbAPsRequest $request
     *
     * @return ListSlbAPsResponse
     */
    public function listSlbAPs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSlbAPsWithOptions($request, $runtime);
    }

    /**
     * @param ListUsersRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return ListUsersResponse
     */
    public function listUsersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListUsers',
            'version'     => '2018-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListUsersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ModifyServiceRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ModifyServiceResponse
     */
    public function modifyServiceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->serviceId)) {
            $query['ServiceId'] = $request->serviceId;
        }
        $body = [];
        if (!Utils::isUnset($request->portMappings)) {
            $body['PortMappings'] = $request->portMappings;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ModifyService',
            'version'     => '2018-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyServiceRequest $request
     *
     * @return ModifyServiceResponse
     */
    public function modifyService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyServiceWithOptions($request, $runtime);
    }

    /**
     * @param ModifySlbAPRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ModifySlbAPResponse
     */
    public function modifySlbAPWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cookieTimeout)) {
            $query['CookieTimeout'] = $request->cookieTimeout;
        }
        if (!Utils::isUnset($request->establishedTimeout)) {
            $query['EstablishedTimeout'] = $request->establishedTimeout;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->realServerPort)) {
            $query['RealServerPort'] = $request->realServerPort;
        }
        if (!Utils::isUnset($request->slbAPId)) {
            $query['SlbAPId'] = $request->slbAPId;
        }
        if (!Utils::isUnset($request->sslCertId)) {
            $query['SslCertId'] = $request->sslCertId;
        }
        if (!Utils::isUnset($request->stickySession)) {
            $query['StickySession'] = $request->stickySession;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifySlbAP',
            'version'     => '2018-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifySlbAPResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifySlbAPRequest $request
     *
     * @return ModifySlbAPResponse
     */
    public function modifySlbAP($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifySlbAPWithOptions($request, $runtime);
    }

    /**
     * @param OfflineAppEnvironmentRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return OfflineAppEnvironmentResponse
     */
    public function offlineAppEnvironmentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->deletePvc)) {
            $query['DeletePvc'] = $request->deletePvc;
        }
        if (!Utils::isUnset($request->envId)) {
            $query['EnvId'] = $request->envId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'OfflineAppEnvironment',
            'version'     => '2018-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return OfflineAppEnvironmentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param OfflineAppEnvironmentRequest $request
     *
     * @return OfflineAppEnvironmentResponse
     */
    public function offlineAppEnvironment($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->offlineAppEnvironmentWithOptions($request, $runtime);
    }

    /**
     * @param QueryClusterDetailRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return QueryClusterDetailResponse
     */
    public function queryClusterDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryClusterDetail',
            'version'     => '2018-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryClusterDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryClusterDetailRequest $request
     *
     * @return QueryClusterDetailResponse
     */
    public function queryClusterDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryClusterDetailWithOptions($request, $runtime);
    }

    /**
     * @param RebuildAppInstanceRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return RebuildAppInstanceResponse
     */
    public function rebuildAppInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->appInstanceId)) {
            $query['AppInstanceId'] = $request->appInstanceId;
        }
        if (!Utils::isUnset($request->envId)) {
            $query['EnvId'] = $request->envId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RebuildAppInstance',
            'version'     => '2018-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RebuildAppInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RebuildAppInstanceRequest $request
     *
     * @return RebuildAppInstanceResponse
     */
    public function rebuildAppInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->rebuildAppInstanceWithOptions($request, $runtime);
    }

    /**
     * @param RemoveClusterNodeRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return RemoveClusterNodeResponse
     */
    public function removeClusterNodeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterInstanceId)) {
            $query['ClusterInstanceId'] = $request->clusterInstanceId;
        }
        if (!Utils::isUnset($request->ecsInstanceIdList)) {
            $query['EcsInstanceIdList'] = $request->ecsInstanceIdList;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RemoveClusterNode',
            'version'     => '2018-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RemoveClusterNodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RemoveClusterNodeRequest $request
     *
     * @return RemoveClusterNodeResponse
     */
    public function removeClusterNode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeClusterNodeWithOptions($request, $runtime);
    }

    /**
     * @param ResetAccountPasswordRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ResetAccountPasswordResponse
     */
    public function resetAccountPasswordWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->accountName)) {
            $body['AccountName'] = $request->accountName;
        }
        if (!Utils::isUnset($request->accountPassword)) {
            $body['AccountPassword'] = $request->accountPassword;
        }
        if (!Utils::isUnset($request->dbInstanceId)) {
            $body['DbInstanceId'] = $request->dbInstanceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ResetAccountPassword',
            'version'     => '2018-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ResetAccountPasswordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ResetAccountPasswordRequest $request
     *
     * @return ResetAccountPasswordResponse
     */
    public function resetAccountPassword($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resetAccountPasswordWithOptions($request, $runtime);
    }

    /**
     * @param ResourceStatusNotifyRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ResourceStatusNotifyResponse
     */
    public function resourceStatusNotifyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->data)) {
            $body['data'] = $request->data;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ResourceStatusNotify',
            'version'     => '2018-03-13',
            'protocol'    => 'HTTP',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'none',
        ]);

        return ResourceStatusNotifyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ResourceStatusNotifyRequest $request
     *
     * @return ResourceStatusNotifyResponse
     */
    public function resourceStatusNotify($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resourceStatusNotifyWithOptions($request, $runtime);
    }

    /**
     * @param RestartAppInstanceRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return RestartAppInstanceResponse
     */
    public function restartAppInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->appInstanceIdList)) {
            $query['AppInstanceIdList'] = $request->appInstanceIdList;
        }
        if (!Utils::isUnset($request->envId)) {
            $query['EnvId'] = $request->envId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RestartAppInstance',
            'version'     => '2018-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RestartAppInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RestartAppInstanceRequest $request
     *
     * @return RestartAppInstanceResponse
     */
    public function restartAppInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->restartAppInstanceWithOptions($request, $runtime);
    }

    /**
     * @param ResumeDeployRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ResumeDeployResponse
     */
    public function resumeDeployWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->deployOrderId)) {
            $query['DeployOrderId'] = $request->deployOrderId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ResumeDeploy',
            'version'     => '2018-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ResumeDeployResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ResumeDeployRequest $request
     *
     * @return ResumeDeployResponse
     */
    public function resumeDeploy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resumeDeployWithOptions($request, $runtime);
    }

    /**
     * @param ScaleAppRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return ScaleAppResponse
     */
    public function scaleAppWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->envId)) {
            $query['EnvId'] = $request->envId;
        }
        if (!Utils::isUnset($request->replicas)) {
            $query['Replicas'] = $request->replicas;
        }
        if (!Utils::isUnset($request->totalPartitions)) {
            $query['TotalPartitions'] = $request->totalPartitions;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ScaleApp',
            'version'     => '2018-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ScaleAppResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ScaleAppRequest $request
     *
     * @return ScaleAppResponse
     */
    public function scaleApp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->scaleAppWithOptions($request, $runtime);
    }

    /**
     * @param SetDeployPauseTypeRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return SetDeployPauseTypeResponse
     */
    public function setDeployPauseTypeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->deployOrderId)) {
            $query['DeployOrderId'] = $request->deployOrderId;
        }
        if (!Utils::isUnset($request->deployPauseType)) {
            $query['DeployPauseType'] = $request->deployPauseType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetDeployPauseType',
            'version'     => '2018-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetDeployPauseTypeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SetDeployPauseTypeRequest $request
     *
     * @return SetDeployPauseTypeResponse
     */
    public function setDeployPauseType($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setDeployPauseTypeWithOptions($request, $runtime);
    }

    /**
     * @param SubmitInfoRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return SubmitInfoResponse
     */
    public function submitInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->callerUid)) {
            $query['CallerUid'] = $request->callerUid;
        }
        if (!Utils::isUnset($request->mainUserId)) {
            $query['MainUserId'] = $request->mainUserId;
        }
        if (!Utils::isUnset($request->requestId)) {
            $query['RequestId'] = $request->requestId;
        }
        $body = [];
        if (!Utils::isUnset($request->ecsDescList)) {
            $body['EcsDescList'] = $request->ecsDescList;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'SubmitInfo',
            'version'     => '2018-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SubmitInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SubmitInfoRequest $request
     *
     * @return SubmitInfoResponse
     */
    public function submitInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitInfoWithOptions($request, $runtime);
    }

    /**
     * @param SyncPodInfoRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return SyncPodInfoResponse
     */
    public function syncPodInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->podName)) {
            $query['PodName'] = $request->podName;
        }
        if (!Utils::isUnset($request->reason)) {
            $query['Reason'] = $request->reason;
        }
        if (!Utils::isUnset($request->requestId)) {
            $query['RequestId'] = $request->requestId;
        }
        if (!Utils::isUnset($request->sideCarType)) {
            $query['SideCarType'] = $request->sideCarType;
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
            'action'      => 'SyncPodInfo',
            'version'     => '2018-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SyncPodInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SyncPodInfoRequest $request
     *
     * @return SyncPodInfoResponse
     */
    public function syncPodInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->syncPodInfoWithOptions($request, $runtime);
    }

    /**
     * @param UnbindGroupRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return UnbindGroupResponse
     */
    public function unbindGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->bizCode)) {
            $query['BizCode'] = $request->bizCode;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UnbindGroup',
            'version'     => '2018-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UnbindGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UnbindGroupRequest $request
     *
     * @return UnbindGroupResponse
     */
    public function unbindGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unbindGroupWithOptions($request, $runtime);
    }

    /**
     * @param UnbindNodeLabelRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return UnbindNodeLabelResponse
     */
    public function unbindNodeLabelWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->labelKey)) {
            $query['LabelKey'] = $request->labelKey;
        }
        if (!Utils::isUnset($request->labelValue)) {
            $query['LabelValue'] = $request->labelValue;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UnbindNodeLabel',
            'version'     => '2018-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UnbindNodeLabelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UnbindNodeLabelRequest $request
     *
     * @return UnbindNodeLabelResponse
     */
    public function unbindNodeLabel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unbindNodeLabelWithOptions($request, $runtime);
    }

    /**
     * @param UpdateAppRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return UpdateAppResponse
     */
    public function updateAppWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->bizTitle)) {
            $body['BizTitle'] = $request->bizTitle;
        }
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->language)) {
            $body['Language'] = $request->language;
        }
        if (!Utils::isUnset($request->middleWareIdList)) {
            $body['MiddleWareIdList'] = $request->middleWareIdList;
        }
        if (!Utils::isUnset($request->operatingSystem)) {
            $body['OperatingSystem'] = $request->operatingSystem;
        }
        if (!Utils::isUnset($request->serviceType)) {
            $body['ServiceType'] = $request->serviceType;
        }
        if (!Utils::isUnset($request->userRoles)) {
            $body['UserRoles'] = $request->userRoles;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateApp',
            'version'     => '2018-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateAppResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateAppRequest $request
     *
     * @return UpdateAppResponse
     */
    public function updateApp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAppWithOptions($request, $runtime);
    }

    /**
     * @param UpdateAppMonitorsRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return UpdateAppMonitorsResponse
     */
    public function updateAppMonitorsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->mainUserId)) {
            $body['MainUserId'] = $request->mainUserId;
        }
        if (!Utils::isUnset($request->monitorIds)) {
            $body['MonitorIds'] = $request->monitorIds;
        }
        if (!Utils::isUnset($request->silenceTime)) {
            $body['SilenceTime'] = $request->silenceTime;
        }
        if (!Utils::isUnset($request->templateId)) {
            $body['TemplateId'] = $request->templateId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateAppMonitors',
            'version'     => '2018-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateAppMonitorsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateAppMonitorsRequest $request
     *
     * @return UpdateAppMonitorsResponse
     */
    public function updateAppMonitors($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAppMonitorsWithOptions($request, $runtime);
    }

    /**
     * @param UpdateDeployConfigRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return UpdateDeployConfigResponse
     */
    public function updateDeployConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->codePath)) {
            $query['CodePath'] = $request->codePath;
        }
        if (!Utils::isUnset($request->configMap)) {
            $query['ConfigMap'] = $request->configMap;
        }
        if (!Utils::isUnset($request->configMapList)) {
            $query['ConfigMapList'] = $request->configMapList;
        }
        if (!Utils::isUnset($request->cronJob)) {
            $query['CronJob'] = $request->cronJob;
        }
        if (!Utils::isUnset($request->deployment)) {
            $query['Deployment'] = $request->deployment;
        }
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->secretList)) {
            $query['SecretList'] = $request->secretList;
        }
        if (!Utils::isUnset($request->statefulSet)) {
            $query['StatefulSet'] = $request->statefulSet;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateDeployConfig',
            'version'     => '2018-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateDeployConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateDeployConfigRequest $request
     *
     * @return UpdateDeployConfigResponse
     */
    public function updateDeployConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateDeployConfigWithOptions($request, $runtime);
    }

    /**
     * @param UpdateEciConfigRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return UpdateEciConfigResponse
     */
    public function updateEciConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appEnvId)) {
            $query['AppEnvId'] = $request->appEnvId;
        }
        if (!Utils::isUnset($request->eipBandwidth)) {
            $query['EipBandwidth'] = $request->eipBandwidth;
        }
        if (!Utils::isUnset($request->enableEciSchedulePolicy)) {
            $query['EnableEciSchedulePolicy'] = $request->enableEciSchedulePolicy;
        }
        if (!Utils::isUnset($request->mirrorCache)) {
            $query['MirrorCache'] = $request->mirrorCache;
        }
        if (!Utils::isUnset($request->normalInstanceLimit)) {
            $query['NormalInstanceLimit'] = $request->normalInstanceLimit;
        }
        if (!Utils::isUnset($request->scheduleVirtualNode)) {
            $query['ScheduleVirtualNode'] = $request->scheduleVirtualNode;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateEciConfig',
            'version'     => '2018-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateEciConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateEciConfigRequest $request
     *
     * @return UpdateEciConfigResponse
     */
    public function updateEciConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateEciConfigWithOptions($request, $runtime);
    }

    /**
     * @param UpdateEnvironmentRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return UpdateEnvironmentResponse
     */
    public function updateEnvironmentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appEnvId)) {
            $query['AppEnvId'] = $request->appEnvId;
        }
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->appSchemaId)) {
            $query['AppSchemaId'] = $request->appSchemaId;
        }
        if (!Utils::isUnset($request->replicas)) {
            $query['Replicas'] = $request->replicas;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateEnvironment',
            'version'     => '2018-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateEnvironmentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateEnvironmentRequest $request
     *
     * @return UpdateEnvironmentResponse
     */
    public function updateEnvironment($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateEnvironmentWithOptions($request, $runtime);
    }

    /**
     * @param UpdateNormalDeployConfigRequest $tmpReq
     * @param RuntimeOptions                  $runtime
     *
     * @return UpdateNormalDeployConfigResponse
     */
    public function updateNormalDeployConfigWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateNormalDeployConfigShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->containerResourceLimit)) {
            $request->containerResourceLimitShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->containerResourceLimit), 'ContainerResourceLimit', 'json');
        }
        if (!Utils::isUnset($tmpReq->containerResourceRequest)) {
            $request->containerResourceRequestShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->containerResourceRequest), 'ContainerResourceRequest', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->containerResourceLimitShrink)) {
            $query['ContainerResourceLimit'] = $request->containerResourceLimitShrink;
        }
        if (!Utils::isUnset($request->containerResourceRequestShrink)) {
            $query['ContainerResourceRequest'] = $request->containerResourceRequestShrink;
        }
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateNormalDeployConfig',
            'version'     => '2018-03-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateNormalDeployConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateNormalDeployConfigRequest $request
     *
     * @return UpdateNormalDeployConfigResponse
     */
    public function updateNormalDeployConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateNormalDeployConfigWithOptions($request, $runtime);
    }
}
