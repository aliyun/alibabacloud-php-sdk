<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddi\V20200617;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Ddi\V20200617\Models\CloneFlowJobRequest;
use AlibabaCloud\SDK\Ddi\V20200617\Models\CloneFlowJobResponse;
use AlibabaCloud\SDK\Ddi\V20200617\Models\CloneFlowRequest;
use AlibabaCloud\SDK\Ddi\V20200617\Models\CloneFlowResponse;
use AlibabaCloud\SDK\Ddi\V20200617\Models\CommitFlowEntitySnapshotRequest;
use AlibabaCloud\SDK\Ddi\V20200617\Models\CommitFlowEntitySnapshotResponse;
use AlibabaCloud\SDK\Ddi\V20200617\Models\CreateClusterV2Request;
use AlibabaCloud\SDK\Ddi\V20200617\Models\CreateClusterV2Response;
use AlibabaCloud\SDK\Ddi\V20200617\Models\CreateFlowCategoryRequest;
use AlibabaCloud\SDK\Ddi\V20200617\Models\CreateFlowCategoryResponse;
use AlibabaCloud\SDK\Ddi\V20200617\Models\CreateFlowEditLockRequest;
use AlibabaCloud\SDK\Ddi\V20200617\Models\CreateFlowEditLockResponse;
use AlibabaCloud\SDK\Ddi\V20200617\Models\CreateFlowJobRequest;
use AlibabaCloud\SDK\Ddi\V20200617\Models\CreateFlowJobResponse;
use AlibabaCloud\SDK\Ddi\V20200617\Models\CreateFlowProjectClusterSettingRequest;
use AlibabaCloud\SDK\Ddi\V20200617\Models\CreateFlowProjectClusterSettingResponse;
use AlibabaCloud\SDK\Ddi\V20200617\Models\CreateFlowProjectRequest;
use AlibabaCloud\SDK\Ddi\V20200617\Models\CreateFlowProjectResponse;
use AlibabaCloud\SDK\Ddi\V20200617\Models\CreateFlowProjectUserRequest;
use AlibabaCloud\SDK\Ddi\V20200617\Models\CreateFlowProjectUserResponse;
use AlibabaCloud\SDK\Ddi\V20200617\Models\CreateFlowRequest;
use AlibabaCloud\SDK\Ddi\V20200617\Models\CreateFlowResponse;
use AlibabaCloud\SDK\Ddi\V20200617\Models\DeleteFlowCategoryRequest;
use AlibabaCloud\SDK\Ddi\V20200617\Models\DeleteFlowCategoryResponse;
use AlibabaCloud\SDK\Ddi\V20200617\Models\DeleteFlowEditLockRequest;
use AlibabaCloud\SDK\Ddi\V20200617\Models\DeleteFlowEditLockResponse;
use AlibabaCloud\SDK\Ddi\V20200617\Models\DeleteFlowProjectClusterSettingRequest;
use AlibabaCloud\SDK\Ddi\V20200617\Models\DeleteFlowProjectClusterSettingResponse;
use AlibabaCloud\SDK\Ddi\V20200617\Models\DeleteFlowProjectRequest;
use AlibabaCloud\SDK\Ddi\V20200617\Models\DeleteFlowProjectResponse;
use AlibabaCloud\SDK\Ddi\V20200617\Models\DeleteFlowProjectUserRequest;
use AlibabaCloud\SDK\Ddi\V20200617\Models\DeleteFlowProjectUserResponse;
use AlibabaCloud\SDK\Ddi\V20200617\Models\DeleteFlowRequest;
use AlibabaCloud\SDK\Ddi\V20200617\Models\DeleteFlowResponse;
use AlibabaCloud\SDK\Ddi\V20200617\Models\DescribeClusterV2Request;
use AlibabaCloud\SDK\Ddi\V20200617\Models\DescribeClusterV2Response;
use AlibabaCloud\SDK\Ddi\V20200617\Models\DescribeFlowCategoryTreeRequest;
use AlibabaCloud\SDK\Ddi\V20200617\Models\DescribeFlowCategoryTreeResponse;
use AlibabaCloud\SDK\Ddi\V20200617\Models\DescribeFlowInstanceRequest;
use AlibabaCloud\SDK\Ddi\V20200617\Models\DescribeFlowInstanceResponse;
use AlibabaCloud\SDK\Ddi\V20200617\Models\DescribeFlowJobRequest;
use AlibabaCloud\SDK\Ddi\V20200617\Models\DescribeFlowJobResponse;
use AlibabaCloud\SDK\Ddi\V20200617\Models\DescribeFlowNodeInstanceContainerLogRequest;
use AlibabaCloud\SDK\Ddi\V20200617\Models\DescribeFlowNodeInstanceContainerLogResponse;
use AlibabaCloud\SDK\Ddi\V20200617\Models\DescribeFlowNodeInstanceLauncherLogRequest;
use AlibabaCloud\SDK\Ddi\V20200617\Models\DescribeFlowNodeInstanceLauncherLogResponse;
use AlibabaCloud\SDK\Ddi\V20200617\Models\DescribeFlowNodeInstanceRequest;
use AlibabaCloud\SDK\Ddi\V20200617\Models\DescribeFlowNodeInstanceResponse;
use AlibabaCloud\SDK\Ddi\V20200617\Models\DescribeFlowProjectClusterSettingRequest;
use AlibabaCloud\SDK\Ddi\V20200617\Models\DescribeFlowProjectClusterSettingResponse;
use AlibabaCloud\SDK\Ddi\V20200617\Models\DescribeFlowProjectRequest;
use AlibabaCloud\SDK\Ddi\V20200617\Models\DescribeFlowProjectResponse;
use AlibabaCloud\SDK\Ddi\V20200617\Models\DescribeFlowRequest;
use AlibabaCloud\SDK\Ddi\V20200617\Models\DescribeFlowResponse;
use AlibabaCloud\SDK\Ddi\V20200617\Models\DescribeFlowSLARequest;
use AlibabaCloud\SDK\Ddi\V20200617\Models\DescribeFlowSLAResponse;
use AlibabaCloud\SDK\Ddi\V20200617\Models\DescribeFlowVariableCollectionRequest;
use AlibabaCloud\SDK\Ddi\V20200617\Models\DescribeFlowVariableCollectionResponse;
use AlibabaCloud\SDK\Ddi\V20200617\Models\GetFlowAuditLogsRequest;
use AlibabaCloud\SDK\Ddi\V20200617\Models\GetFlowAuditLogsResponse;
use AlibabaCloud\SDK\Ddi\V20200617\Models\KillFlowJobRequest;
use AlibabaCloud\SDK\Ddi\V20200617\Models\KillFlowJobResponse;
use AlibabaCloud\SDK\Ddi\V20200617\Models\KillFlowRequest;
use AlibabaCloud\SDK\Ddi\V20200617\Models\KillFlowResponse;
use AlibabaCloud\SDK\Ddi\V20200617\Models\ListClustersRequest;
use AlibabaCloud\SDK\Ddi\V20200617\Models\ListClustersResponse;
use AlibabaCloud\SDK\Ddi\V20200617\Models\ListFlowClusterAllHostsRequest;
use AlibabaCloud\SDK\Ddi\V20200617\Models\ListFlowClusterAllHostsResponse;
use AlibabaCloud\SDK\Ddi\V20200617\Models\ListFlowClusterAllRequest;
use AlibabaCloud\SDK\Ddi\V20200617\Models\ListFlowClusterAllResponse;
use AlibabaCloud\SDK\Ddi\V20200617\Models\ListFlowClusterHostRequest;
use AlibabaCloud\SDK\Ddi\V20200617\Models\ListFlowClusterHostResponse;
use AlibabaCloud\SDK\Ddi\V20200617\Models\ListFlowClusterRequest;
use AlibabaCloud\SDK\Ddi\V20200617\Models\ListFlowClusterResponse;
use AlibabaCloud\SDK\Ddi\V20200617\Models\ListFlowEntitySnapshotRequest;
use AlibabaCloud\SDK\Ddi\V20200617\Models\ListFlowEntitySnapshotResponse;
use AlibabaCloud\SDK\Ddi\V20200617\Models\ListFlowInstanceRequest;
use AlibabaCloud\SDK\Ddi\V20200617\Models\ListFlowInstanceResponse;
use AlibabaCloud\SDK\Ddi\V20200617\Models\ListFlowJobHistoryRequest;
use AlibabaCloud\SDK\Ddi\V20200617\Models\ListFlowJobHistoryResponse;
use AlibabaCloud\SDK\Ddi\V20200617\Models\ListFlowJobsRequest;
use AlibabaCloud\SDK\Ddi\V20200617\Models\ListFlowJobsResponse;
use AlibabaCloud\SDK\Ddi\V20200617\Models\ListFlowNodeInstanceContainerStatusRequest;
use AlibabaCloud\SDK\Ddi\V20200617\Models\ListFlowNodeInstanceContainerStatusResponse;
use AlibabaCloud\SDK\Ddi\V20200617\Models\ListFlowNodeSqlResultRequest;
use AlibabaCloud\SDK\Ddi\V20200617\Models\ListFlowNodeSqlResultResponse;
use AlibabaCloud\SDK\Ddi\V20200617\Models\ListFlowProjectClusterSettingRequest;
use AlibabaCloud\SDK\Ddi\V20200617\Models\ListFlowProjectClusterSettingResponse;
use AlibabaCloud\SDK\Ddi\V20200617\Models\ListFlowProjectsRequest;
use AlibabaCloud\SDK\Ddi\V20200617\Models\ListFlowProjectsResponse;
use AlibabaCloud\SDK\Ddi\V20200617\Models\ListFlowProjectUserRequest;
use AlibabaCloud\SDK\Ddi\V20200617\Models\ListFlowProjectUserResponse;
use AlibabaCloud\SDK\Ddi\V20200617\Models\ListFlowRequest;
use AlibabaCloud\SDK\Ddi\V20200617\Models\ListFlowResponse;
use AlibabaCloud\SDK\Ddi\V20200617\Models\ListFlowsRequest;
use AlibabaCloud\SDK\Ddi\V20200617\Models\ListFlowsResponse;
use AlibabaCloud\SDK\Ddi\V20200617\Models\ListMainVersionsRequest;
use AlibabaCloud\SDK\Ddi\V20200617\Models\ListMainVersionsResponse;
use AlibabaCloud\SDK\Ddi\V20200617\Models\ModifyFlowCategoryRequest;
use AlibabaCloud\SDK\Ddi\V20200617\Models\ModifyFlowCategoryResponse;
use AlibabaCloud\SDK\Ddi\V20200617\Models\ModifyFlowForWebRequest;
use AlibabaCloud\SDK\Ddi\V20200617\Models\ModifyFlowForWebResponse;
use AlibabaCloud\SDK\Ddi\V20200617\Models\ModifyFlowJobRequest;
use AlibabaCloud\SDK\Ddi\V20200617\Models\ModifyFlowJobResponse;
use AlibabaCloud\SDK\Ddi\V20200617\Models\ModifyFlowProjectClusterSettingRequest;
use AlibabaCloud\SDK\Ddi\V20200617\Models\ModifyFlowProjectClusterSettingResponse;
use AlibabaCloud\SDK\Ddi\V20200617\Models\ModifyFlowProjectRequest;
use AlibabaCloud\SDK\Ddi\V20200617\Models\ModifyFlowProjectResponse;
use AlibabaCloud\SDK\Ddi\V20200617\Models\ModifyFlowRequest;
use AlibabaCloud\SDK\Ddi\V20200617\Models\ModifyFlowResponse;
use AlibabaCloud\SDK\Ddi\V20200617\Models\ModifyFlowVariableCollectionRequest;
use AlibabaCloud\SDK\Ddi\V20200617\Models\ModifyFlowVariableCollectionResponse;
use AlibabaCloud\SDK\Ddi\V20200617\Models\ReleaseClusterRequest;
use AlibabaCloud\SDK\Ddi\V20200617\Models\ReleaseClusterResponse;
use AlibabaCloud\SDK\Ddi\V20200617\Models\RerunFlowRequest;
use AlibabaCloud\SDK\Ddi\V20200617\Models\RerunFlowResponse;
use AlibabaCloud\SDK\Ddi\V20200617\Models\RestoreFlowEntitySnapshotRequest;
use AlibabaCloud\SDK\Ddi\V20200617\Models\RestoreFlowEntitySnapshotResponse;
use AlibabaCloud\SDK\Ddi\V20200617\Models\ResumeFlowRequest;
use AlibabaCloud\SDK\Ddi\V20200617\Models\ResumeFlowResponse;
use AlibabaCloud\SDK\Ddi\V20200617\Models\StartFlowRequest;
use AlibabaCloud\SDK\Ddi\V20200617\Models\StartFlowResponse;
use AlibabaCloud\SDK\Ddi\V20200617\Models\SubmitFlowJobRequest;
use AlibabaCloud\SDK\Ddi\V20200617\Models\SubmitFlowJobResponse;
use AlibabaCloud\SDK\Ddi\V20200617\Models\SubmitFlowRequest;
use AlibabaCloud\SDK\Ddi\V20200617\Models\SubmitFlowResponse;
use AlibabaCloud\SDK\Ddi\V20200617\Models\SuspendFlowRequest;
use AlibabaCloud\SDK\Ddi\V20200617\Models\SuspendFlowResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Ddi extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'central';
        $this->_endpointMap  = [
            'cn-qingdao'     => 'ddi.cn-qingdao.aliyuncs.com',
            'cn-chengdu'     => 'ddi.cn-chengdu.aliyuncs.com',
            'cn-zhangjiakou' => 'ddi.cn-zhangjiakou.aliyuncs.com',
            'cn-huhehaote'   => 'ddi.cn-huhehaote.aliyuncs.com',
            'cn-hongkong'    => 'ddi.cn-hongkong.aliyuncs.com',
            'ap-southeast-2' => 'ddi.ap-southeast-2.aliyuncs.com',
            'ap-southeast-3' => 'ddi.ap-southeast-3.aliyuncs.com',
            'ap-southeast-5' => 'ddi.ap-southeast-5.aliyuncs.com',
            'ap-northeast-1' => 'ddi.ap-northeast-1.aliyuncs.com',
            'eu-west-1'      => 'ddi.eu-west-1.aliyuncs.com',
            'us-east-1'      => 'ddi.us-east-1.aliyuncs.com',
            'eu-central-1'   => 'ddi.eu-central-1.aliyuncs.com',
            'me-east-1'      => 'ddi.me-east-1.aliyuncs.com',
            'ap-south-1'     => 'ddi.ap-south-1.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('ddi', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param CloneFlowRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return CloneFlowResponse
     */
    public function cloneFlowWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query              = [];
        $query['Id']        = $request->id;
        $query['ProjectId'] = $request->projectId;
        $query['RegionId']  = $request->regionId;
        $req                = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CloneFlow',
            'version'     => '2020-06-17',
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
        $query              = [];
        $query['Id']        = $request->id;
        $query['Name']      = $request->name;
        $query['ProjectId'] = $request->projectId;
        $query['RegionId']  = $request->regionId;
        $req                = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CloneFlowJob',
            'version'     => '2020-06-17',
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
     * @param CommitFlowEntitySnapshotRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return CommitFlowEntitySnapshotResponse
     */
    public function commitFlowEntitySnapshotWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                    = [];
        $query['EntityId']        = $request->entityId;
        $query['EntityType']      = $request->entityType;
        $query['Message']         = $request->message;
        $query['RegionId']        = $request->regionId;
        $query['ResourceOwnerId'] = $request->resourceOwnerId;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CommitFlowEntitySnapshot',
            'version'     => '2020-06-17',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CommitFlowEntitySnapshotResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CommitFlowEntitySnapshotRequest $request
     *
     * @return CommitFlowEntitySnapshotResponse
     */
    public function commitFlowEntitySnapshot($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->commitFlowEntitySnapshotWithOptions($request, $runtime);
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
        $query                           = [];
        $query['AuthorizeContent']       = $request->authorizeContent;
        $query['Auto']                   = $request->auto;
        $query['AutoPayOrder']           = $request->autoPayOrder;
        $query['BootstrapAction']        = $request->bootstrapAction;
        $query['ChargeType']             = $request->chargeType;
        $query['ClickHouseConf']         = $request->clickHouseConf;
        $query['ClientToken']            = $request->clientToken;
        $query['ClusterType']            = $request->clusterType;
        $query['Config']                 = $request->config;
        $query['Configurations']         = $request->configurations;
        $query['DepositType']            = $request->depositType;
        $query['EmrVer']                 = $request->emrVer;
        $query['EnableEas']              = $request->enableEas;
        $query['EnableHighAvailability'] = $request->enableHighAvailability;
        $query['EnableSsh']              = $request->enableSsh;
        $query['ExtraAttributes']        = $request->extraAttributes;
        $query['HostComponentInfo']      = $request->hostComponentInfo;
        $query['HostGroup']              = $request->hostGroup;
        $query['InitCustomHiveMetaDB']   = $request->initCustomHiveMetaDB;
        $query['InstanceGeneration']     = $request->instanceGeneration;
        $query['IsOpenPublicIp']         = $request->isOpenPublicIp;
        $query['KeyPairName']            = $request->keyPairName;
        $query['LogPath']                = $request->logPath;
        $query['MachineType']            = $request->machineType;
        $query['MasterPwd']              = $request->masterPwd;
        $query['MetaStoreConf']          = $request->metaStoreConf;
        $query['MetaStoreType']          = $request->metaStoreType;
        $query['Name']                   = $request->name;
        $query['NetType']                = $request->netType;
        $query['Period']                 = $request->period;
        $query['PromotionInfo']          = $request->promotionInfo;
        $query['RegionId']               = $request->regionId;
        $query['RelatedClusterId']       = $request->relatedClusterId;
        $query['ResourceGroupId']        = $request->resourceGroupId;
        $query['ResourceOwnerId']        = $request->resourceOwnerId;
        $query['SecurityGroupId']        = $request->securityGroupId;
        $query['SecurityGroupName']      = $request->securityGroupName;
        $query['ServiceInfo']            = $request->serviceInfo;
        $query['Tag']                    = $request->tag;
        $query['UseCustomHiveMetaDB']    = $request->useCustomHiveMetaDB;
        $query['UseLocalMetaDb']         = $request->useLocalMetaDb;
        $query['UserDefinedEmrEcsRole']  = $request->userDefinedEmrEcsRole;
        $query['UserInfo']               = $request->userInfo;
        $query['VSwitchId']              = $request->vSwitchId;
        $query['VpcId']                  = $request->vpcId;
        $query['WhiteListType']          = $request->whiteListType;
        $query['ZoneId']                 = $request->zoneId;
        $req                             = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateClusterV2',
            'version'     => '2020-06-17',
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
     * @param CreateFlowRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return CreateFlowResponse
     */
    public function createFlowWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                            = [];
        $query['AlertConf']               = $request->alertConf;
        $query['AlertDingDingGroupBizId'] = $request->alertDingDingGroupBizId;
        $query['AlertUserGroupBizId']     = $request->alertUserGroupBizId;
        $query['Application']             = $request->application;
        $query['ClientToken']             = $request->clientToken;
        $query['ClusterId']               = $request->clusterId;
        $query['CreateCluster']           = $request->createCluster;
        $query['CronExpression']          = $request->cronExpression;
        $query['Description']             = $request->description;
        $query['EndSchedule']             = $request->endSchedule;
        $query['HostName']                = $request->hostName;
        $query['Name']                    = $request->name;
        $query['Namespace']               = $request->namespace_;
        $query['ParentCategory']          = $request->parentCategory;
        $query['ParentFlowList']          = $request->parentFlowList;
        $query['ProjectId']               = $request->projectId;
        $query['RegionId']                = $request->regionId;
        $query['StartSchedule']           = $request->startSchedule;
        $req                              = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateFlow',
            'version'     => '2020-06-17',
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
        $query                = [];
        $query['ClientToken'] = $request->clientToken;
        $query['Name']        = $request->name;
        $query['ParentId']    = $request->parentId;
        $query['ProjectId']   = $request->projectId;
        $query['RegionId']    = $request->regionId;
        $query['Type']        = $request->type;
        $req                  = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateFlowCategory',
            'version'     => '2020-06-17',
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
     * @param CreateFlowEditLockRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CreateFlowEditLockResponse
     */
    public function createFlowEditLockWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                    = [];
        $query['EntityId']        = $request->entityId;
        $query['Force']           = $request->force;
        $query['RegionId']        = $request->regionId;
        $query['ResourceOwnerId'] = $request->resourceOwnerId;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateFlowEditLock',
            'version'     => '2020-06-17',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateFlowEditLockResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateFlowEditLockRequest $request
     *
     * @return CreateFlowEditLockResponse
     */
    public function createFlowEditLock($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createFlowEditLockWithOptions($request, $runtime);
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
        $query                    = [];
        $query['Adhoc']           = $request->adhoc;
        $query['AlertConf']       = $request->alertConf;
        $query['ClientToken']     = $request->clientToken;
        $query['ClusterId']       = $request->clusterId;
        $query['CustomVariables'] = $request->customVariables;
        $query['Description']     = $request->description;
        $query['EnvConf']         = $request->envConf;
        $query['FailAct']         = $request->failAct;
        $query['Mode']            = $request->mode;
        $query['MonitorConf']     = $request->monitorConf;
        $query['Name']            = $request->name;
        $query['ParamConf']       = $request->paramConf;
        $query['Params']          = $request->params;
        $query['ParentCategory']  = $request->parentCategory;
        $query['ProjectId']       = $request->projectId;
        $query['RegionId']        = $request->regionId;
        $query['ResourceList']    = $request->resourceList;
        $query['RetryPolicy']     = $request->retryPolicy;
        $query['RunConf']         = $request->runConf;
        $query['Type']            = $request->type;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateFlowJob',
            'version'     => '2020-06-17',
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
        $query                    = [];
        $query['ClientToken']     = $request->clientToken;
        $query['Description']     = $request->description;
        $query['Name']            = $request->name;
        $query['ProductType']     = $request->productType;
        $query['RegionId']        = $request->regionId;
        $query['ResourceGroupId'] = $request->resourceGroupId;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateFlowProject',
            'version'     => '2020-06-17',
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
        $query                 = [];
        $query['ClientToken']  = $request->clientToken;
        $query['ClusterId']    = $request->clusterId;
        $query['DefaultQueue'] = $request->defaultQueue;
        $query['DefaultUser']  = $request->defaultUser;
        $query['HostList']     = $request->hostList;
        $query['ProjectId']    = $request->projectId;
        $query['QueueList']    = $request->queueList;
        $query['RegionId']     = $request->regionId;
        $query['UserList']     = $request->userList;
        $req                   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateFlowProjectClusterSetting',
            'version'     => '2020-06-17',
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
        $query                = [];
        $query['ClientToken'] = $request->clientToken;
        $query['ProjectId']   = $request->projectId;
        $query['RegionId']    = $request->regionId;
        $query['User']        = $request->user;
        $req                  = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateFlowProjectUser',
            'version'     => '2020-06-17',
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
     * @param DeleteFlowRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return DeleteFlowResponse
     */
    public function deleteFlowWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query              = [];
        $query['Id']        = $request->id;
        $query['ProjectId'] = $request->projectId;
        $query['RegionId']  = $request->regionId;
        $req                = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteFlow',
            'version'     => '2020-06-17',
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
        $query              = [];
        $query['Id']        = $request->id;
        $query['ProjectId'] = $request->projectId;
        $query['RegionId']  = $request->regionId;
        $req                = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteFlowCategory',
            'version'     => '2020-06-17',
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
     * @param DeleteFlowEditLockRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteFlowEditLockResponse
     */
    public function deleteFlowEditLockWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                    = [];
        $query['EntityId']        = $request->entityId;
        $query['RegionId']        = $request->regionId;
        $query['ResourceOwnerId'] = $request->resourceOwnerId;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteFlowEditLock',
            'version'     => '2020-06-17',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteFlowEditLockResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteFlowEditLockRequest $request
     *
     * @return DeleteFlowEditLockResponse
     */
    public function deleteFlowEditLock($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteFlowEditLockWithOptions($request, $runtime);
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
        $query              = [];
        $query['ProjectId'] = $request->projectId;
        $query['RegionId']  = $request->regionId;
        $req                = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteFlowProject',
            'version'     => '2020-06-17',
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
        $query              = [];
        $query['ClusterId'] = $request->clusterId;
        $query['ProjectId'] = $request->projectId;
        $query['RegionId']  = $request->regionId;
        $req                = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteFlowProjectClusterSetting',
            'version'     => '2020-06-17',
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
        $query              = [];
        $query['ProjectId'] = $request->projectId;
        $query['RegionId']  = $request->regionId;
        $query['UserName']  = $request->userName;
        $req                = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteFlowProjectUser',
            'version'     => '2020-06-17',
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
     * @param DescribeClusterV2Request $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeClusterV2Response
     */
    public function describeClusterV2WithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                    = [];
        $query['Id']              = $request->id;
        $query['RegionId']        = $request->regionId;
        $query['ResourceOwnerId'] = $request->resourceOwnerId;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeClusterV2',
            'version'     => '2020-06-17',
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
        $query              = [];
        $query['Id']        = $request->id;
        $query['ProjectId'] = $request->projectId;
        $query['RegionId']  = $request->regionId;
        $req                = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeFlow',
            'version'     => '2020-06-17',
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
     * @param DescribeFlowCategoryTreeRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeFlowCategoryTreeResponse
     */
    public function describeFlowCategoryTreeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query               = [];
        $query['CategoryId'] = $request->categoryId;
        $query['Keyword']    = $request->keyword;
        $query['Mode']       = $request->mode;
        $query['ProjectId']  = $request->projectId;
        $query['RegionId']   = $request->regionId;
        $query['Type']       = $request->type;
        $req                 = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeFlowCategoryTree',
            'version'     => '2020-06-17',
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
        $query              = [];
        $query['Id']        = $request->id;
        $query['ProjectId'] = $request->projectId;
        $query['RegionId']  = $request->regionId;
        $req                = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeFlowInstance',
            'version'     => '2020-06-17',
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
        $query              = [];
        $query['Id']        = $request->id;
        $query['ProjectId'] = $request->projectId;
        $query['RegionId']  = $request->regionId;
        $req                = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeFlowJob',
            'version'     => '2020-06-17',
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
        $query              = [];
        $query['Id']        = $request->id;
        $query['ProjectId'] = $request->projectId;
        $query['RegionId']  = $request->regionId;
        $req                = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeFlowNodeInstance',
            'version'     => '2020-06-17',
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
        $query                   = [];
        $query['AppId']          = $request->appId;
        $query['ContainerId']    = $request->containerId;
        $query['Length']         = $request->length;
        $query['LogName']        = $request->logName;
        $query['NodeInstanceId'] = $request->nodeInstanceId;
        $query['Offset']         = $request->offset;
        $query['ProjectId']      = $request->projectId;
        $query['RegionId']       = $request->regionId;
        $req                     = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeFlowNodeInstanceContainerLog',
            'version'     => '2020-06-17',
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
        $query                   = [];
        $query['EndTime']        = $request->endTime;
        $query['Length']         = $request->length;
        $query['Lines']          = $request->lines;
        $query['NodeInstanceId'] = $request->nodeInstanceId;
        $query['Offset']         = $request->offset;
        $query['ProjectId']      = $request->projectId;
        $query['RegionId']       = $request->regionId;
        $query['Reverse']        = $request->reverse;
        $query['Start']          = $request->start;
        $query['StartTime']      = $request->startTime;
        $req                     = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeFlowNodeInstanceLauncherLog',
            'version'     => '2020-06-17',
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
        $query              = [];
        $query['ProjectId'] = $request->projectId;
        $query['RegionId']  = $request->regionId;
        $req                = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeFlowProject',
            'version'     => '2020-06-17',
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
        $query              = [];
        $query['ClusterId'] = $request->clusterId;
        $query['ProjectId'] = $request->projectId;
        $query['RegionId']  = $request->regionId;
        $req                = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeFlowProjectClusterSetting',
            'version'     => '2020-06-17',
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
     * @param DescribeFlowSLARequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeFlowSLAResponse
     */
    public function describeFlowSLAWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                    = [];
        $query['From']            = $request->from;
        $query['Metrics']         = $request->metrics;
        $query['PeriodType']      = $request->periodType;
        $query['ProjectId']       = $request->projectId;
        $query['RegionId']        = $request->regionId;
        $query['ResourceGroupId'] = $request->resourceGroupId;
        $query['ResourceOwnerId'] = $request->resourceOwnerId;
        $query['To']              = $request->to;
        $query['Type']            = $request->type;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeFlowSLA',
            'version'     => '2020-06-17',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeFlowSLAResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeFlowSLARequest $request
     *
     * @return DescribeFlowSLAResponse
     */
    public function describeFlowSLA($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFlowSLAWithOptions($request, $runtime);
    }

    /**
     * @param DescribeFlowVariableCollectionRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribeFlowVariableCollectionResponse
     */
    public function describeFlowVariableCollectionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                    = [];
        $query['EntityId']        = $request->entityId;
        $query['RegionId']        = $request->regionId;
        $query['ResourceGroupId'] = $request->resourceGroupId;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeFlowVariableCollection',
            'version'     => '2020-06-17',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeFlowVariableCollectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeFlowVariableCollectionRequest $request
     *
     * @return DescribeFlowVariableCollectionResponse
     */
    public function describeFlowVariableCollection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFlowVariableCollectionWithOptions($request, $runtime);
    }

    /**
     * @param GetFlowAuditLogsRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetFlowAuditLogsResponse
     */
    public function getFlowAuditLogsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                    = [];
        $query['CurrentSize']     = $request->currentSize;
        $query['EntityGroupId']   = $request->entityGroupId;
        $query['EntityId']        = $request->entityId;
        $query['EntityType']      = $request->entityType;
        $query['Limit']           = $request->limit;
        $query['Operation']       = $request->operation;
        $query['OperatorId']      = $request->operatorId;
        $query['OrderField']      = $request->orderField;
        $query['OrderMode']       = $request->orderMode;
        $query['PageCount']       = $request->pageCount;
        $query['PageNumber']      = $request->pageNumber;
        $query['PageSize']        = $request->pageSize;
        $query['RegionId']        = $request->regionId;
        $query['ResourceOwnerId'] = $request->resourceOwnerId;
        $query['Status']          = $request->status;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetFlowAuditLogs',
            'version'     => '2020-06-17',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetFlowAuditLogsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetFlowAuditLogsRequest $request
     *
     * @return GetFlowAuditLogsResponse
     */
    public function getFlowAuditLogs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getFlowAuditLogsWithOptions($request, $runtime);
    }

    /**
     * @param KillFlowRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return KillFlowResponse
     */
    public function killFlowWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                   = [];
        $query['FlowInstanceId'] = $request->flowInstanceId;
        $query['ProjectId']      = $request->projectId;
        $query['RegionId']       = $request->regionId;
        $req                     = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'KillFlow',
            'version'     => '2020-06-17',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return KillFlowResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param KillFlowRequest $request
     *
     * @return KillFlowResponse
     */
    public function killFlow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->killFlowWithOptions($request, $runtime);
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
        $query                  = [];
        $query['JobInstanceId'] = $request->jobInstanceId;
        $query['ProjectId']     = $request->projectId;
        $query['RegionId']      = $request->regionId;
        $req                    = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'KillFlowJob',
            'version'     => '2020-06-17',
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
     * @param ListClustersRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ListClustersResponse
     */
    public function listClustersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                    = [];
        $query['ClusterTypeList'] = $request->clusterTypeList;
        $query['CreateType']      = $request->createType;
        $query['DefaultStatus']   = $request->defaultStatus;
        $query['DepositType']     = $request->depositType;
        $query['ExpiredTagList']  = $request->expiredTagList;
        $query['IsDesc']          = $request->isDesc;
        $query['MachineType']     = $request->machineType;
        $query['Name']            = $request->name;
        $query['PageNumber']      = $request->pageNumber;
        $query['PageSize']        = $request->pageSize;
        $query['RegionId']        = $request->regionId;
        $query['ResourceGroupId'] = $request->resourceGroupId;
        $query['ResourceOwnerId'] = $request->resourceOwnerId;
        $query['StatusList']      = $request->statusList;
        $query['Tag']             = $request->tag;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListClusters',
            'version'     => '2020-06-17',
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
     * @param ListFlowRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return ListFlowResponse
     */
    public function listFlowWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query               = [];
        $query['ClusterId']  = $request->clusterId;
        $query['Id']         = $request->id;
        $query['JobId']      = $request->jobId;
        $query['Name']       = $request->name;
        $query['PageNumber'] = $request->pageNumber;
        $query['PageSize']   = $request->pageSize;
        $query['Periodic']   = $request->periodic;
        $query['ProjectId']  = $request->projectId;
        $query['RegionId']   = $request->regionId;
        $query['Status']     = $request->status;
        $req                 = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListFlow',
            'version'     => '2020-06-17',
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
     * @param ListFlowClusterRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListFlowClusterResponse
     */
    public function listFlowClusterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                    = [];
        $query['PageNumber']      = $request->pageNumber;
        $query['PageSize']        = $request->pageSize;
        $query['ProjectId']       = $request->projectId;
        $query['RegionId']        = $request->regionId;
        $query['ResourceGroupId'] = $request->resourceGroupId;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListFlowCluster',
            'version'     => '2020-06-17',
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
        $query                    = [];
        $query['ProductType']     = $request->productType;
        $query['RegionId']        = $request->regionId;
        $query['ResourceGroupId'] = $request->resourceGroupId;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListFlowClusterAll',
            'version'     => '2020-06-17',
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
        $query                    = [];
        $query['ClusterId']       = $request->clusterId;
        $query['ProjectId']       = $request->projectId;
        $query['RegionId']        = $request->regionId;
        $query['ResourceGroupId'] = $request->resourceGroupId;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListFlowClusterAllHosts',
            'version'     => '2020-06-17',
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
        $query                    = [];
        $query['ClusterId']       = $request->clusterId;
        $query['ProjectId']       = $request->projectId;
        $query['RegionId']        = $request->regionId;
        $query['ResourceGroupId'] = $request->resourceGroupId;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListFlowClusterHost',
            'version'     => '2020-06-17',
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
     * @param ListFlowEntitySnapshotRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ListFlowEntitySnapshotResponse
     */
    public function listFlowEntitySnapshotWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                    = [];
        $query['CommitterId']     = $request->committerId;
        $query['CurrentSize']     = $request->currentSize;
        $query['EntityGroupId']   = $request->entityGroupId;
        $query['EntityId']        = $request->entityId;
        $query['EntityType']      = $request->entityType;
        $query['Limit']           = $request->limit;
        $query['OrderField']      = $request->orderField;
        $query['OrderMode']       = $request->orderMode;
        $query['PageCount']       = $request->pageCount;
        $query['PageNumber']      = $request->pageNumber;
        $query['PageSize']        = $request->pageSize;
        $query['RegionId']        = $request->regionId;
        $query['ResourceOwnerId'] = $request->resourceOwnerId;
        $query['Revision']        = $request->revision;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListFlowEntitySnapshot',
            'version'     => '2020-06-17',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListFlowEntitySnapshotResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListFlowEntitySnapshotRequest $request
     *
     * @return ListFlowEntitySnapshotResponse
     */
    public function listFlowEntitySnapshot($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listFlowEntitySnapshotWithOptions($request, $runtime);
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
        $query               = [];
        $query['FlowId']     = $request->flowId;
        $query['FlowName']   = $request->flowName;
        $query['Id']         = $request->id;
        $query['InstanceId'] = $request->instanceId;
        $query['OrderBy']    = $request->orderBy;
        $query['OrderType']  = $request->orderType;
        $query['Owner']      = $request->owner;
        $query['PageNumber'] = $request->pageNumber;
        $query['PageSize']   = $request->pageSize;
        $query['ProjectId']  = $request->projectId;
        $query['RegionId']   = $request->regionId;
        $query['StatusList'] = $request->statusList;
        $query['TimeRange']  = $request->timeRange;
        $req                 = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListFlowInstance',
            'version'     => '2020-06-17',
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
     * @param ListFlowJobHistoryRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ListFlowJobHistoryResponse
     */
    public function listFlowJobHistoryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query               = [];
        $query['Id']         = $request->id;
        $query['InstanceId'] = $request->instanceId;
        $query['JobType']    = $request->jobType;
        $query['PageNumber'] = $request->pageNumber;
        $query['PageSize']   = $request->pageSize;
        $query['ProjectId']  = $request->projectId;
        $query['RegionId']   = $request->regionId;
        $query['StatusList'] = $request->statusList;
        $query['TimeRange']  = $request->timeRange;
        $req                 = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListFlowJobHistory',
            'version'     => '2020-06-17',
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
     * @param ListFlowJobsRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ListFlowJobsResponse
     */
    public function listFlowJobsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query               = [];
        $query['Adhoc']      = $request->adhoc;
        $query['Id']         = $request->id;
        $query['Name']       = $request->name;
        $query['PageNumber'] = $request->pageNumber;
        $query['PageSize']   = $request->pageSize;
        $query['ProjectId']  = $request->projectId;
        $query['RegionId']   = $request->regionId;
        $query['Type']       = $request->type;
        $req                 = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListFlowJobs',
            'version'     => '2020-06-17',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListFlowJobsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListFlowJobsRequest $request
     *
     * @return ListFlowJobsResponse
     */
    public function listFlowJobs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listFlowJobsWithOptions($request, $runtime);
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
        $query                   = [];
        $query['NodeInstanceId'] = $request->nodeInstanceId;
        $query['PageNumber']     = $request->pageNumber;
        $query['PageSize']       = $request->pageSize;
        $query['ProjectId']      = $request->projectId;
        $query['RegionId']       = $request->regionId;
        $req                     = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListFlowNodeInstanceContainerStatus',
            'version'     => '2020-06-17',
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
        $query                   = [];
        $query['Length']         = $request->length;
        $query['NodeInstanceId'] = $request->nodeInstanceId;
        $query['Offset']         = $request->offset;
        $query['ProjectId']      = $request->projectId;
        $query['RegionId']       = $request->regionId;
        $query['SqlIndex']       = $request->sqlIndex;
        $req                     = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListFlowNodeSqlResult',
            'version'     => '2020-06-17',
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
     * @param ListFlowProjectClusterSettingRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return ListFlowProjectClusterSettingResponse
     */
    public function listFlowProjectClusterSettingWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query               = [];
        $query['PageNumber'] = $request->pageNumber;
        $query['PageSize']   = $request->pageSize;
        $query['ProjectId']  = $request->projectId;
        $query['RegionId']   = $request->regionId;
        $req                 = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListFlowProjectClusterSetting',
            'version'     => '2020-06-17',
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
        $query               = [];
        $query['PageNumber'] = $request->pageNumber;
        $query['PageSize']   = $request->pageSize;
        $query['ProjectId']  = $request->projectId;
        $query['RegionId']   = $request->regionId;
        $req                 = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListFlowProjectUser',
            'version'     => '2020-06-17',
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
     * @param ListFlowProjectsRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListFlowProjectsResponse
     */
    public function listFlowProjectsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                    = [];
        $query['Name']            = $request->name;
        $query['PageNumber']      = $request->pageNumber;
        $query['PageSize']        = $request->pageSize;
        $query['ProductType']     = $request->productType;
        $query['ProjectId']       = $request->projectId;
        $query['RegionId']        = $request->regionId;
        $query['ResourceGroupId'] = $request->resourceGroupId;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListFlowProjects',
            'version'     => '2020-06-17',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListFlowProjectsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListFlowProjectsRequest $request
     *
     * @return ListFlowProjectsResponse
     */
    public function listFlowProjects($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listFlowProjectsWithOptions($request, $runtime);
    }

    /**
     * @param ListFlowsRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return ListFlowsResponse
     */
    public function listFlowsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query               = [];
        $query['ClusterId']  = $request->clusterId;
        $query['Id']         = $request->id;
        $query['JobId']      = $request->jobId;
        $query['Name']       = $request->name;
        $query['PageNumber'] = $request->pageNumber;
        $query['PageSize']   = $request->pageSize;
        $query['Periodic']   = $request->periodic;
        $query['ProjectId']  = $request->projectId;
        $query['RegionId']   = $request->regionId;
        $query['Status']     = $request->status;
        $req                 = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListFlows',
            'version'     => '2020-06-17',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListFlowsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListFlowsRequest $request
     *
     * @return ListFlowsResponse
     */
    public function listFlows($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listFlowsWithOptions($request, $runtime);
    }

    /**
     * @param ListMainVersionsRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListMainVersionsResponse
     */
    public function listMainVersionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListMainVersions',
            'version'     => '2020-06-17',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListMainVersionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListMainVersionsRequest $request
     *
     * @return ListMainVersionsResponse
     */
    public function listMainVersions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listMainVersionsWithOptions($request, $runtime);
    }

    /**
     * @param ModifyFlowRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return ModifyFlowResponse
     */
    public function modifyFlowWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                            = [];
        $query['AlertConf']               = $request->alertConf;
        $query['AlertDingDingGroupBizId'] = $request->alertDingDingGroupBizId;
        $query['AlertUserGroupBizId']     = $request->alertUserGroupBizId;
        $query['Application']             = $request->application;
        $query['ClusterId']               = $request->clusterId;
        $query['CreateCluster']           = $request->createCluster;
        $query['CronExpr']                = $request->cronExpr;
        $query['Description']             = $request->description;
        $query['EndSchedule']             = $request->endSchedule;
        $query['HostName']                = $request->hostName;
        $query['Id']                      = $request->id;
        $query['Name']                    = $request->name;
        $query['ParentCategory']          = $request->parentCategory;
        $query['ParentFlowList']          = $request->parentFlowList;
        $query['Periodic']                = $request->periodic;
        $query['ProjectId']               = $request->projectId;
        $query['RegionId']                = $request->regionId;
        $query['StartSchedule']           = $request->startSchedule;
        $query['Status']                  = $request->status;
        $req                              = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyFlow',
            'version'     => '2020-06-17',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyFlowResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyFlowRequest $request
     *
     * @return ModifyFlowResponse
     */
    public function modifyFlow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyFlowWithOptions($request, $runtime);
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
        $query              = [];
        $query['Id']        = $request->id;
        $query['Name']      = $request->name;
        $query['ParentId']  = $request->parentId;
        $query['ProjectId'] = $request->projectId;
        $query['RegionId']  = $request->regionId;
        $req                = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyFlowCategory',
            'version'     => '2020-06-17',
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
        $query                            = [];
        $query['AlertConf']               = $request->alertConf;
        $query['AlertDingDingGroupBizId'] = $request->alertDingDingGroupBizId;
        $query['AlertUserGroupBizId']     = $request->alertUserGroupBizId;
        $query['ClusterId']               = $request->clusterId;
        $query['CreateCluster']           = $request->createCluster;
        $query['CronExpr']                = $request->cronExpr;
        $query['Description']             = $request->description;
        $query['EndSchedule']             = $request->endSchedule;
        $query['Graph']                   = $request->graph;
        $query['HostName']                = $request->hostName;
        $query['Id']                      = $request->id;
        $query['Name']                    = $request->name;
        $query['Namespace']               = $request->namespace_;
        $query['ParentCategory']          = $request->parentCategory;
        $query['ParentFlowList']          = $request->parentFlowList;
        $query['Periodic']                = $request->periodic;
        $query['ProjectId']               = $request->projectId;
        $query['RegionId']                = $request->regionId;
        $query['StartSchedule']           = $request->startSchedule;
        $query['Status']                  = $request->status;
        $req                              = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyFlowForWeb',
            'version'     => '2020-06-17',
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
     * @param ModifyFlowJobRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ModifyFlowJobResponse
     */
    public function modifyFlowJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                    = [];
        $query['AlertConf']       = $request->alertConf;
        $query['ClusterId']       = $request->clusterId;
        $query['CustomVariables'] = $request->customVariables;
        $query['Description']     = $request->description;
        $query['EnvConf']         = $request->envConf;
        $query['FailAct']         = $request->failAct;
        $query['Id']              = $request->id;
        $query['KnoxPassword']    = $request->knoxPassword;
        $query['KnoxUser']        = $request->knoxUser;
        $query['Mode']            = $request->mode;
        $query['MonitorConf']     = $request->monitorConf;
        $query['Name']            = $request->name;
        $query['ParamConf']       = $request->paramConf;
        $query['Params']          = $request->params;
        $query['ProjectId']       = $request->projectId;
        $query['RegionId']        = $request->regionId;
        $query['ResourceList']    = $request->resourceList;
        $query['RetryPolicy']     = $request->retryPolicy;
        $query['RunConf']         = $request->runConf;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyFlowJob',
            'version'     => '2020-06-17',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyFlowJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyFlowJobRequest $request
     *
     * @return ModifyFlowJobResponse
     */
    public function modifyFlowJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyFlowJobWithOptions($request, $runtime);
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
        $query                = [];
        $query['Description'] = $request->description;
        $query['Name']        = $request->name;
        $query['ProjectId']   = $request->projectId;
        $query['RegionId']    = $request->regionId;
        $req                  = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyFlowProject',
            'version'     => '2020-06-17',
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
        $query                 = [];
        $query['ClusterId']    = $request->clusterId;
        $query['DefaultQueue'] = $request->defaultQueue;
        $query['DefaultUser']  = $request->defaultUser;
        $query['HostList']     = $request->hostList;
        $query['ProjectId']    = $request->projectId;
        $query['QueueList']    = $request->queueList;
        $query['RegionId']     = $request->regionId;
        $query['UserList']     = $request->userList;
        $req                   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyFlowProjectClusterSetting',
            'version'     => '2020-06-17',
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
     * @param ModifyFlowVariableCollectionRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return ModifyFlowVariableCollectionResponse
     */
    public function modifyFlowVariableCollectionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                    = [];
        $query['Data']            = $request->data;
        $query['RegionId']        = $request->regionId;
        $query['ResourceGroupId'] = $request->resourceGroupId;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyFlowVariableCollection',
            'version'     => '2020-06-17',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyFlowVariableCollectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyFlowVariableCollectionRequest $request
     *
     * @return ModifyFlowVariableCollectionResponse
     */
    public function modifyFlowVariableCollection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyFlowVariableCollectionWithOptions($request, $runtime);
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
        $query                    = [];
        $query['ForceRelease']    = $request->forceRelease;
        $query['Id']              = $request->id;
        $query['RegionId']        = $request->regionId;
        $query['ResourceOwnerId'] = $request->resourceOwnerId;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ReleaseCluster',
            'version'     => '2020-06-17',
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
     * @param RerunFlowRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return RerunFlowResponse
     */
    public function rerunFlowWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                   = [];
        $query['FlowInstanceId'] = $request->flowInstanceId;
        $query['ProjectId']      = $request->projectId;
        $query['ReRunFail']      = $request->reRunFail;
        $query['RegionId']       = $request->regionId;
        $req                     = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RerunFlow',
            'version'     => '2020-06-17',
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
     * @param RestoreFlowEntitySnapshotRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return RestoreFlowEntitySnapshotResponse
     */
    public function restoreFlowEntitySnapshotWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                    = [];
        $query['EntityId']        = $request->entityId;
        $query['EntityType']      = $request->entityType;
        $query['OperatorId']      = $request->operatorId;
        $query['RegionId']        = $request->regionId;
        $query['ResourceOwnerId'] = $request->resourceOwnerId;
        $query['Revision']        = $request->revision;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RestoreFlowEntitySnapshot',
            'version'     => '2020-06-17',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RestoreFlowEntitySnapshotResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RestoreFlowEntitySnapshotRequest $request
     *
     * @return RestoreFlowEntitySnapshotResponse
     */
    public function restoreFlowEntitySnapshot($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->restoreFlowEntitySnapshotWithOptions($request, $runtime);
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
        $query                   = [];
        $query['FlowInstanceId'] = $request->flowInstanceId;
        $query['ProjectId']      = $request->projectId;
        $query['RegionId']       = $request->regionId;
        $req                     = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ResumeFlow',
            'version'     => '2020-06-17',
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
     * @param StartFlowRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return StartFlowResponse
     */
    public function startFlowWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                   = [];
        $query['FlowInstanceId'] = $request->flowInstanceId;
        $query['ProjectId']      = $request->projectId;
        $query['RegionId']       = $request->regionId;
        $req                     = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'StartFlow',
            'version'     => '2020-06-17',
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
        $query              = [];
        $query['Conf']      = $request->conf;
        $query['FlowId']    = $request->flowId;
        $query['ProjectId'] = $request->projectId;
        $query['RegionId']  = $request->regionId;
        $req                = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SubmitFlow',
            'version'     => '2020-06-17',
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
        $query              = [];
        $query['ClusterId'] = $request->clusterId;
        $query['Conf']      = $request->conf;
        $query['HostName']  = $request->hostName;
        $query['JobId']     = $request->jobId;
        $query['ProjectId'] = $request->projectId;
        $query['RegionId']  = $request->regionId;
        $req                = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SubmitFlowJob',
            'version'     => '2020-06-17',
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
        $query                   = [];
        $query['FlowInstanceId'] = $request->flowInstanceId;
        $query['ProjectId']      = $request->projectId;
        $query['RegionId']       = $request->regionId;
        $req                     = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SuspendFlow',
            'version'     => '2020-06-17',
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
}
