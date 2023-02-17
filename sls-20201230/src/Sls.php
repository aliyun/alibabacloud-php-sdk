<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230;

use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Sls\V20201230\Models\ApplyConfigToMachineGroupResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\ChangeResourceGroupRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\ChangeResourceGroupResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\CreateAlertRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\CreateAlertResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\CreateConsumerGroupRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\CreateConsumerGroupResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\CreateDomainRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\CreateDomainResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\CreateETLJobRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\CreateETLJobResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\CreateIndexRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\CreateIndexResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\CreateJobRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\CreateJobResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\CreateJobTestRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\CreateJobTestResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\CreateLoggingRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\CreateLoggingResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\CreateLogStoreRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\CreateLogStoreResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\CreateMachineGroupRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\CreateMachineGroupResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\CreateOdpsShipperRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\CreateOdpsShipperResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\CreateOssExternalStoreRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\CreateOssExternalStoreResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\CreateOssShipperRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\CreateOssShipperResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\CreateProjectRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\CreateProjectResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\CreateRdsExternalStoreRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\CreateRdsExternalStoreResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\CreateSavedSearchRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\CreateSavedSearchResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\DeleteAlertResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\DeleteConsumerGroupResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\DeleteDomainResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\DeleteETLJobResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\DeleteExternalStoreResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\DeleteIndexResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\DeleteJobResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\DeleteLoggingResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\DeleteLogStoreResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\DeleteMachineGroupResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\DeleteProjectPolicyResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\DeleteProjectRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\DeleteProjectResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\DeleteSavedSearchResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\DeleteShipperResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\GetAlertResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\GetAppliedConfigsResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\GetAppliedMachineGroupsResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\GetCheckPointRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\GetCheckPointResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\GetContextLogsRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\GetContextLogsResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\GetCursorRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\GetCursorResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\GetCursorTimeRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\GetCursorTimeResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\GetEtlJobResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\GetExternalStoreResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\GetHistogramsRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\GetHistogramsResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\GetIndexResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\GetJobResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\GetLoggingResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\GetLogsRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\GetLogsResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\GetLogStoreResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\GetMachineGroupResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\GetProjectLogsRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\GetProjectLogsResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\GetProjectPolicyResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\GetProjectRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\GetProjectResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\GetSavedSearchResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\GetShipperStatusRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\GetShipperStatusResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\ListAlertResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\ListConsumerGroupResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\ListDomainsRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\ListDomainsResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\ListETLJobsResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\ListExternalStoreRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\ListExternalStoreResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\ListJobsResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\ListLogStoresRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\ListLogStoresResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\ListMachineGroupRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\ListMachineGroupResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\ListMachinesRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\ListMachinesResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\ListProjectRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\ListProjectResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\ListSavedSearchRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\ListSavedSearchResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\ListShardsResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\ListShipperResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\ListTagResourcesRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\ListTagResourcesResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\ListTagResourcesShrinkRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\PullDataRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\PullDataResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\PutProjectPolicyRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\PutProjectPolicyResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\PutWebtrackingRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\PutWebtrackingResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\RemoveConfigFromMachineGroupResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\SplitShardRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\SplitShardResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\TagResourcesRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\TagResourcesResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\UntagResourcesRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\UntagResourcesResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\UpdateAlertRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\UpdateAlertResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\UpdateConsumerGroupRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\UpdateConsumerGroupResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\UpdateEtlJobRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\UpdateEtlJobResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\UpdateIndexRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\UpdateIndexResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\UpdateJobRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\UpdateJobResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\UpdateJobShrinkRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\UpdateLoggingRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\UpdateLoggingResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\UpdateLogStoreRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\UpdateLogStoreResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\UpdateMachineGroupMachineRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\UpdateMachineGroupMachineResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\UpdateMachineGroupRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\UpdateMachineGroupResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\UpdateOdpsShipperRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\UpdateOdpsShipperResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\UpdateOssExternalStoreRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\UpdateOssExternalStoreResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\UpdateOssShipperRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\UpdateOssShipperResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\UpdateProjectRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\UpdateProjectResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\UpdateRdsExternalStoreRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\UpdateRdsExternalStoreResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\UpdateSavedSearchRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\UpdateSavedSearchResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\GatewaySls\Client as DarabonbaGatewaySlsClient;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Sls extends OpenApiClient
{
    protected $_client;

    public function __construct($config)
    {
        parent::__construct($config);
        $this->_client       = new DarabonbaGatewaySlsClient();
        $this->_spi          = $this->_client;
        $this->_endpointRule = 'central';
    }

    /**
     * @param string         $project
     * @param string         $machineGroup
     * @param string         $configName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ApplyConfigToMachineGroupResponse
     */
    public function applyConfigToMachineGroupWithOptions($project, $machineGroup, $configName, $headers, $runtime)
    {
        $hostMap            = [];
        $hostMap['project'] = $project;
        $req                = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'ApplyConfigToMachineGroup',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/machinegroups/' . $machineGroup . '/configs/' . $configName . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return ApplyConfigToMachineGroupResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string $project
     * @param string $machineGroup
     * @param string $configName
     *
     * @return ApplyConfigToMachineGroupResponse
     */
    public function applyConfigToMachineGroup($project, $machineGroup, $configName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->applyConfigToMachineGroupWithOptions($project, $machineGroup, $configName, $headers, $runtime);
    }

    /**
     * @param ChangeResourceGroupRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return ChangeResourceGroupResponse
     */
    public function changeResourceGroupWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->resourceGroupId)) {
            $body['resourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $body['resourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $body['resourceType'] = $request->resourceType;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ChangeResourceGroup',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/resourcegroup',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return ChangeResourceGroupResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param ChangeResourceGroupRequest $request
     *
     * @return ChangeResourceGroupResponse
     */
    public function changeResourceGroup($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->changeResourceGroupWithOptions($request, $headers, $runtime);
    }

    /**
     * @param string             $project
     * @param CreateAlertRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return CreateAlertResponse
     */
    public function createAlertWithOptions($project, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $hostMap            = [];
        $hostMap['project'] = $project;
        $req                = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($request->body),
        ]);
        $params = new Params([
            'action'      => 'CreateAlert',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/jobs',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return CreateAlertResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string             $project
     * @param CreateAlertRequest $request
     *
     * @return CreateAlertResponse
     */
    public function createAlert($project, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createAlertWithOptions($project, $request, $headers, $runtime);
    }

    /**
     * @param string                     $project
     * @param string                     $logstore
     * @param CreateConsumerGroupRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return CreateConsumerGroupResponse
     */
    public function createConsumerGroupWithOptions($project, $logstore, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $hostMap            = [];
        $hostMap['project'] = $project;
        $body               = [];
        if (!Utils::isUnset($request->consumerGroup)) {
            $body['consumerGroup'] = $request->consumerGroup;
        }
        if (!Utils::isUnset($request->order)) {
            $body['order'] = $request->order;
        }
        if (!Utils::isUnset($request->timeout)) {
            $body['timeout'] = $request->timeout;
        }
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateConsumerGroup',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/logstores/' . $logstore . '/consumergroups',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return CreateConsumerGroupResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string                     $project
     * @param string                     $logstore
     * @param CreateConsumerGroupRequest $request
     *
     * @return CreateConsumerGroupResponse
     */
    public function createConsumerGroup($project, $logstore, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createConsumerGroupWithOptions($project, $logstore, $request, $headers, $runtime);
    }

    /**
     * @param string              $project
     * @param CreateDomainRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return CreateDomainResponse
     */
    public function createDomainWithOptions($project, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $hostMap            = [];
        $hostMap['project'] = $project;
        $body               = [];
        if (!Utils::isUnset($request->domainName)) {
            $body['domainName'] = $request->domainName;
        }
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateDomain',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/domains',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return CreateDomainResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string              $project
     * @param CreateDomainRequest $request
     *
     * @return CreateDomainResponse
     */
    public function createDomain($project, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createDomainWithOptions($project, $request, $headers, $runtime);
    }

    /**
     * @param string              $project
     * @param CreateETLJobRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return CreateETLJobResponse
     */
    public function createETLJobWithOptions($project, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $hostMap            = [];
        $hostMap['project'] = $project;
        $req                = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($request->body),
        ]);
        $params = new Params([
            'action'      => 'CreateETLJob',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/jobs',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateETLJobResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string              $project
     * @param CreateETLJobRequest $request
     *
     * @return CreateETLJobResponse
     */
    public function createETLJob($project, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createETLJobWithOptions($project, $request, $headers, $runtime);
    }

    /**
     * @param string             $project
     * @param string             $logstore
     * @param CreateIndexRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return CreateIndexResponse
     */
    public function createIndexWithOptions($project, $logstore, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $hostMap            = [];
        $hostMap['project'] = $project;
        $body               = [];
        if (!Utils::isUnset($request->keys)) {
            $body['keys'] = $request->keys;
        }
        if (!Utils::isUnset($request->line)) {
            $body['line'] = $request->line;
        }
        if (!Utils::isUnset($request->logReduce)) {
            $body['log_reduce'] = $request->logReduce;
        }
        if (!Utils::isUnset($request->logReduceBlackList)) {
            $body['log_reduce_black_list'] = $request->logReduceBlackList;
        }
        if (!Utils::isUnset($request->logReduceWhiteList)) {
            $body['log_reduce_white_list'] = $request->logReduceWhiteList;
        }
        if (!Utils::isUnset($request->maxTextLen)) {
            $body['max_text_len'] = $request->maxTextLen;
        }
        if (!Utils::isUnset($request->ttl)) {
            $body['ttl'] = $request->ttl;
        }
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateIndex',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/logstores/' . $logstore . '/index',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return CreateIndexResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string             $project
     * @param string             $logstore
     * @param CreateIndexRequest $request
     *
     * @return CreateIndexResponse
     */
    public function createIndex($project, $logstore, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createIndexWithOptions($project, $logstore, $request, $headers, $runtime);
    }

    /**
     * @param string           $project
     * @param CreateJobRequest $request
     * @param string[]         $headers
     * @param RuntimeOptions   $runtime
     *
     * @return CreateJobResponse
     */
    public function createJobWithOptions($project, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $hostMap            = [];
        $hostMap['project'] = $project;
        $body               = [];
        if (!Utils::isUnset($request->enable)) {
            $body['enable'] = $request->enable;
        }
        if (!Utils::isUnset($request->functionConfig)) {
            $body['functionConfig'] = $request->functionConfig;
        }
        if (!Utils::isUnset($request->functionParameter)) {
            $body['functionParameter'] = $request->functionParameter;
        }
        if (!Utils::isUnset($request->jobName)) {
            $body['jobName'] = $request->jobName;
        }
        if (!Utils::isUnset($request->logConfig)) {
            $body['logConfig'] = $request->logConfig;
        }
        if (!Utils::isUnset($request->sourceConfig)) {
            $body['sourceConfig'] = $request->sourceConfig;
        }
        if (!Utils::isUnset($request->triggerConfig)) {
            $body['triggerConfig'] = $request->triggerConfig;
        }
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateJob',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/jobs',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateJobResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string           $project
     * @param CreateJobRequest $request
     *
     * @return CreateJobResponse
     */
    public function createJob($project, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createJobWithOptions($project, $request, $headers, $runtime);
    }

    /**
     * @param CreateJobTestRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return CreateJobTestResponse
     */
    public function createJobTestWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessKeyId)) {
            $query['accessKeyId'] = $request->accessKeyId;
        }
        if (!Utils::isUnset($request->accessKeySecret)) {
            $query['accessKeySecret'] = $request->accessKeySecret;
        }
        if (!Utils::isUnset($request->description)) {
            $query['description'] = $request->description;
        }
        if (!Utils::isUnset($request->displayName)) {
            $query['displayName'] = $request->displayName;
        }
        if (!Utils::isUnset($request->fromTime)) {
            $query['fromTime'] = $request->fromTime;
        }
        if (!Utils::isUnset($request->logstore)) {
            $query['logstore'] = $request->logstore;
        }
        if (!Utils::isUnset($request->parameters)) {
            $query['parameters'] = $request->parameters;
        }
        if (!Utils::isUnset($request->projectName)) {
            $query['projectName'] = $request->projectName;
        }
        if (!Utils::isUnset($request->projectName)) {
            $query['projectName'] = $request->projectName;
        }
        if (!Utils::isUnset($request->roleArn)) {
            $query['roleArn'] = $request->roleArn;
        }
        if (!Utils::isUnset($request->script)) {
            $query['script'] = $request->script;
        }
        if (!Utils::isUnset($request->sinks)) {
            $query['sinks'] = $request->sinks;
        }
        if (!Utils::isUnset($request->toTime)) {
            $query['toTime'] = $request->toTime;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateJobTest',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/jobs',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateJobTestResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param CreateJobTestRequest $request
     *
     * @return CreateJobTestResponse
     */
    public function createJobTest($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createJobTestWithOptions($request, $headers, $runtime);
    }

    /**
     * @param string                $project
     * @param CreateLogStoreRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return CreateLogStoreResponse
     */
    public function createLogStoreWithOptions($project, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $hostMap            = [];
        $hostMap['project'] = $project;
        $body               = [];
        if (!Utils::isUnset($request->appendMeta)) {
            $body['appendMeta'] = $request->appendMeta;
        }
        if (!Utils::isUnset($request->autoSplit)) {
            $body['autoSplit'] = $request->autoSplit;
        }
        if (!Utils::isUnset($request->enableTracking)) {
            $body['enable_tracking'] = $request->enableTracking;
        }
        if (!Utils::isUnset($request->encryptConf)) {
            $body['encrypt_conf'] = $request->encryptConf;
        }
        if (!Utils::isUnset($request->hotTtl)) {
            $body['hot_ttl'] = $request->hotTtl;
        }
        if (!Utils::isUnset($request->logstoreName)) {
            $body['logstoreName'] = $request->logstoreName;
        }
        if (!Utils::isUnset($request->maxSplitShard)) {
            $body['maxSplitShard'] = $request->maxSplitShard;
        }
        if (!Utils::isUnset($request->mode)) {
            $body['mode'] = $request->mode;
        }
        if (!Utils::isUnset($request->shardCount)) {
            $body['shardCount'] = $request->shardCount;
        }
        if (!Utils::isUnset($request->telemetryType)) {
            $body['telemetryType'] = $request->telemetryType;
        }
        if (!Utils::isUnset($request->ttl)) {
            $body['ttl'] = $request->ttl;
        }
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateLogStore',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/logstores',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return CreateLogStoreResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string                $project
     * @param CreateLogStoreRequest $request
     *
     * @return CreateLogStoreResponse
     */
    public function createLogStore($project, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createLogStoreWithOptions($project, $request, $headers, $runtime);
    }

    /**
     * @param string               $project
     * @param CreateLoggingRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return CreateLoggingResponse
     */
    public function createLoggingWithOptions($project, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $hostMap            = [];
        $hostMap['project'] = $project;
        $body               = [];
        if (!Utils::isUnset($request->loggingDetails)) {
            $body['loggingDetails'] = $request->loggingDetails;
        }
        if (!Utils::isUnset($request->loggingProject)) {
            $body['loggingProject'] = $request->loggingProject;
        }
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateLogging',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/logging',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return CreateLoggingResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string               $project
     * @param CreateLoggingRequest $request
     *
     * @return CreateLoggingResponse
     */
    public function createLogging($project, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createLoggingWithOptions($project, $request, $headers, $runtime);
    }

    /**
     * @param string                    $project
     * @param CreateMachineGroupRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return CreateMachineGroupResponse
     */
    public function createMachineGroupWithOptions($project, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $hostMap            = [];
        $hostMap['project'] = $project;
        $body               = [];
        if (!Utils::isUnset($request->groupAttribute)) {
            $body['groupAttribute'] = $request->groupAttribute;
        }
        if (!Utils::isUnset($request->groupName)) {
            $body['groupName'] = $request->groupName;
        }
        if (!Utils::isUnset($request->groupType)) {
            $body['groupType'] = $request->groupType;
        }
        if (!Utils::isUnset($request->machineIdentifyType)) {
            $body['machineIdentifyType'] = $request->machineIdentifyType;
        }
        if (!Utils::isUnset($request->machineList)) {
            $body['machineList'] = $request->machineList;
        }
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateMachineGroup',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/machinegroups',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return CreateMachineGroupResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string                    $project
     * @param CreateMachineGroupRequest $request
     *
     * @return CreateMachineGroupResponse
     */
    public function createMachineGroup($project, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createMachineGroupWithOptions($project, $request, $headers, $runtime);
    }

    /**
     * @param string                   $project
     * @param string                   $logstore
     * @param CreateOdpsShipperRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return CreateOdpsShipperResponse
     */
    public function createOdpsShipperWithOptions($project, $logstore, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $hostMap            = [];
        $hostMap['project'] = $project;
        $body               = [];
        if (!Utils::isUnset($request->shipperName)) {
            $body['shipperName'] = $request->shipperName;
        }
        if (!Utils::isUnset($request->targetConfiguration)) {
            $body['targetConfiguration'] = $request->targetConfiguration;
        }
        if (!Utils::isUnset($request->targetType)) {
            $body['targetType'] = $request->targetType;
        }
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateOdpsShipper',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/logstores/' . $logstore . '/shipper',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return CreateOdpsShipperResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string                   $project
     * @param string                   $logstore
     * @param CreateOdpsShipperRequest $request
     *
     * @return CreateOdpsShipperResponse
     */
    public function createOdpsShipper($project, $logstore, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createOdpsShipperWithOptions($project, $logstore, $request, $headers, $runtime);
    }

    /**
     * @param string                        $project
     * @param CreateOssExternalStoreRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return CreateOssExternalStoreResponse
     */
    public function createOssExternalStoreWithOptions($project, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $hostMap            = [];
        $hostMap['project'] = $project;
        $body               = [];
        if (!Utils::isUnset($request->externalStoreName)) {
            $body['externalStoreName'] = $request->externalStoreName;
        }
        if (!Utils::isUnset($request->parameter)) {
            $body['parameter'] = $request->parameter;
        }
        if (!Utils::isUnset($request->storeType)) {
            $body['storeType'] = $request->storeType;
        }
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateOssExternalStore',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/externalstores',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return CreateOssExternalStoreResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string                        $project
     * @param CreateOssExternalStoreRequest $request
     *
     * @return CreateOssExternalStoreResponse
     */
    public function createOssExternalStore($project, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createOssExternalStoreWithOptions($project, $request, $headers, $runtime);
    }

    /**
     * @param string                  $project
     * @param string                  $logstore
     * @param CreateOssShipperRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return CreateOssShipperResponse
     */
    public function createOssShipperWithOptions($project, $logstore, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $hostMap            = [];
        $hostMap['project'] = $project;
        $body               = [];
        if (!Utils::isUnset($request->shipperName)) {
            $body['shipperName'] = $request->shipperName;
        }
        if (!Utils::isUnset($request->targetConfiguration)) {
            $body['targetConfiguration'] = $request->targetConfiguration;
        }
        if (!Utils::isUnset($request->targetType)) {
            $body['targetType'] = $request->targetType;
        }
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateOssShipper',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/logstores/' . $logstore . '/shipper',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return CreateOssShipperResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string                  $project
     * @param string                  $logstore
     * @param CreateOssShipperRequest $request
     *
     * @return CreateOssShipperResponse
     */
    public function createOssShipper($project, $logstore, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createOssShipperWithOptions($project, $logstore, $request, $headers, $runtime);
    }

    /**
     * @param CreateProjectRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return CreateProjectResponse
     */
    public function createProjectWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->description)) {
            $body['description'] = $request->description;
        }
        if (!Utils::isUnset($request->projectName)) {
            $body['projectName'] = $request->projectName;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $body['resourceGroupId'] = $request->resourceGroupId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateProject',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return CreateProjectResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param CreateProjectRequest $request
     *
     * @return CreateProjectResponse
     */
    public function createProject($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createProjectWithOptions($request, $headers, $runtime);
    }

    /**
     * @param string                        $project
     * @param CreateRdsExternalStoreRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return CreateRdsExternalStoreResponse
     */
    public function createRdsExternalStoreWithOptions($project, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $hostMap            = [];
        $hostMap['project'] = $project;
        $body               = [];
        if (!Utils::isUnset($request->externalStoreName)) {
            $body['externalStoreName'] = $request->externalStoreName;
        }
        if (!Utils::isUnset($request->parameter)) {
            $body['parameter'] = $request->parameter;
        }
        if (!Utils::isUnset($request->storeType)) {
            $body['storeType'] = $request->storeType;
        }
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateRdsExternalStore',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/externalstores',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return CreateRdsExternalStoreResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string                        $project
     * @param CreateRdsExternalStoreRequest $request
     *
     * @return CreateRdsExternalStoreResponse
     */
    public function createRdsExternalStore($project, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createRdsExternalStoreWithOptions($project, $request, $headers, $runtime);
    }

    /**
     * @param string                   $project
     * @param CreateSavedSearchRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return CreateSavedSearchResponse
     */
    public function createSavedSearchWithOptions($project, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $hostMap            = [];
        $hostMap['project'] = $project;
        $body               = [];
        if (!Utils::isUnset($request->displayName)) {
            $body['displayName'] = $request->displayName;
        }
        if (!Utils::isUnset($request->logstore)) {
            $body['logstore'] = $request->logstore;
        }
        if (!Utils::isUnset($request->savedsearchName)) {
            $body['savedsearchName'] = $request->savedsearchName;
        }
        if (!Utils::isUnset($request->searchQuery)) {
            $body['searchQuery'] = $request->searchQuery;
        }
        if (!Utils::isUnset($request->topic)) {
            $body['topic'] = $request->topic;
        }
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateSavedSearch',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/savedsearches',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return CreateSavedSearchResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string                   $project
     * @param CreateSavedSearchRequest $request
     *
     * @return CreateSavedSearchResponse
     */
    public function createSavedSearch($project, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createSavedSearchWithOptions($project, $request, $headers, $runtime);
    }

    /**
     * @param string         $project
     * @param string         $alert
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteAlertResponse
     */
    public function deleteAlertWithOptions($project, $alert, $headers, $runtime)
    {
        $hostMap            = [];
        $hostMap['project'] = $project;
        $req                = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteAlert',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/jobs/' . $alert . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return DeleteAlertResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string $project
     * @param string $alert
     *
     * @return DeleteAlertResponse
     */
    public function deleteAlert($project, $alert)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteAlertWithOptions($project, $alert, $headers, $runtime);
    }

    /**
     * @param string         $project
     * @param string         $logstore
     * @param string         $consumerGroup
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteConsumerGroupResponse
     */
    public function deleteConsumerGroupWithOptions($project, $logstore, $consumerGroup, $headers, $runtime)
    {
        $hostMap            = [];
        $hostMap['project'] = $project;
        $req                = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteConsumerGroup',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/logstores/' . $logstore . '/consumergroups/' . $consumerGroup . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return DeleteConsumerGroupResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string $project
     * @param string $logstore
     * @param string $consumerGroup
     *
     * @return DeleteConsumerGroupResponse
     */
    public function deleteConsumerGroup($project, $logstore, $consumerGroup)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteConsumerGroupWithOptions($project, $logstore, $consumerGroup, $headers, $runtime);
    }

    /**
     * @param string         $project
     * @param string         $domainName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteDomainResponse
     */
    public function deleteDomainWithOptions($project, $domainName, $headers, $runtime)
    {
        $hostMap            = [];
        $hostMap['project'] = $project;
        $req                = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteDomain',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/domains/' . $domainName . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return DeleteDomainResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string $project
     * @param string $domainName
     *
     * @return DeleteDomainResponse
     */
    public function deleteDomain($project, $domainName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteDomainWithOptions($project, $domainName, $headers, $runtime);
    }

    /**
     * @param string         $project
     * @param string         $etlJobName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteETLJobResponse
     */
    public function deleteETLJobWithOptions($project, $etlJobName, $headers, $runtime)
    {
        $hostMap            = [];
        $hostMap['project'] = $project;
        $req                = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteETLJob',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/jobs/' . $etlJobName . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'any',
        ]);

        return DeleteETLJobResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string $project
     * @param string $etlJobName
     *
     * @return DeleteETLJobResponse
     */
    public function deleteETLJob($project, $etlJobName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteETLJobWithOptions($project, $etlJobName, $headers, $runtime);
    }

    /**
     * @param string         $project
     * @param string         $externalStoreName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteExternalStoreResponse
     */
    public function deleteExternalStoreWithOptions($project, $externalStoreName, $headers, $runtime)
    {
        $hostMap            = [];
        $hostMap['project'] = $project;
        $req                = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteExternalStore',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/externalstores/' . $externalStoreName . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return DeleteExternalStoreResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string $project
     * @param string $externalStoreName
     *
     * @return DeleteExternalStoreResponse
     */
    public function deleteExternalStore($project, $externalStoreName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteExternalStoreWithOptions($project, $externalStoreName, $headers, $runtime);
    }

    /**
     * @param string         $project
     * @param string         $logstore
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteIndexResponse
     */
    public function deleteIndexWithOptions($project, $logstore, $headers, $runtime)
    {
        $hostMap            = [];
        $hostMap['project'] = $project;
        $req                = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteIndex',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/logstores/' . $logstore . '/index',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return DeleteIndexResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string $project
     * @param string $logstore
     *
     * @return DeleteIndexResponse
     */
    public function deleteIndex($project, $logstore)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteIndexWithOptions($project, $logstore, $headers, $runtime);
    }

    /**
     * @param string         $project
     * @param string         $etlJobName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteJobResponse
     */
    public function deleteJobWithOptions($project, $etlJobName, $headers, $runtime)
    {
        $hostMap            = [];
        $hostMap['project'] = $project;
        $req                = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteJob',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/jobs/' . $etlJobName . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'any',
        ]);

        return DeleteJobResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string $project
     * @param string $etlJobName
     *
     * @return DeleteJobResponse
     */
    public function deleteJob($project, $etlJobName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteJobWithOptions($project, $etlJobName, $headers, $runtime);
    }

    /**
     * @param string         $project
     * @param string         $logstore
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteLogStoreResponse
     */
    public function deleteLogStoreWithOptions($project, $logstore, $headers, $runtime)
    {
        $hostMap            = [];
        $hostMap['project'] = $project;
        $req                = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteLogStore',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/logstores/' . $logstore . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return DeleteLogStoreResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string $project
     * @param string $logstore
     *
     * @return DeleteLogStoreResponse
     */
    public function deleteLogStore($project, $logstore)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteLogStoreWithOptions($project, $logstore, $headers, $runtime);
    }

    /**
     * @param string         $project
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteLoggingResponse
     */
    public function deleteLoggingWithOptions($project, $headers, $runtime)
    {
        $hostMap            = [];
        $hostMap['project'] = $project;
        $req                = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteLogging',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/logging',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return DeleteLoggingResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string $project
     *
     * @return DeleteLoggingResponse
     */
    public function deleteLogging($project)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteLoggingWithOptions($project, $headers, $runtime);
    }

    /**
     * @param string         $project
     * @param string         $machineGroup
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteMachineGroupResponse
     */
    public function deleteMachineGroupWithOptions($project, $machineGroup, $headers, $runtime)
    {
        $hostMap            = [];
        $hostMap['project'] = $project;
        $req                = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteMachineGroup',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/machinegroups/' . $machineGroup . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return DeleteMachineGroupResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string $project
     * @param string $machineGroup
     *
     * @return DeleteMachineGroupResponse
     */
    public function deleteMachineGroup($project, $machineGroup)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteMachineGroupWithOptions($project, $machineGroup, $headers, $runtime);
    }

    /**
     * @param DeleteProjectRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteProjectResponse
     */
    public function deleteProjectWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->project)) {
            $query['project'] = $request->project;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteProject',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return DeleteProjectResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param DeleteProjectRequest $request
     *
     * @return DeleteProjectResponse
     */
    public function deleteProject($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteProjectWithOptions($request, $headers, $runtime);
    }

    /**
     * @param string         $project
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteProjectPolicyResponse
     */
    public function deleteProjectPolicyWithOptions($project, $headers, $runtime)
    {
        $hostMap            = [];
        $hostMap['project'] = $project;
        $req                = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteProjectPolicy',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/policy',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteProjectPolicyResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string $project
     *
     * @return DeleteProjectPolicyResponse
     */
    public function deleteProjectPolicy($project)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteProjectPolicyWithOptions($project, $headers, $runtime);
    }

    /**
     * @param string         $project
     * @param string         $savedsearchName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteSavedSearchResponse
     */
    public function deleteSavedSearchWithOptions($project, $savedsearchName, $headers, $runtime)
    {
        $hostMap            = [];
        $hostMap['project'] = $project;
        $req                = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteSavedSearch',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/savedsearches/' . $savedsearchName . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return DeleteSavedSearchResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string $project
     * @param string $savedsearchName
     *
     * @return DeleteSavedSearchResponse
     */
    public function deleteSavedSearch($project, $savedsearchName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteSavedSearchWithOptions($project, $savedsearchName, $headers, $runtime);
    }

    /**
     * @param string         $project
     * @param string         $logstore
     * @param string         $shipperName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteShipperResponse
     */
    public function deleteShipperWithOptions($project, $logstore, $shipperName, $headers, $runtime)
    {
        $hostMap            = [];
        $hostMap['project'] = $project;
        $req                = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteShipper',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/logstores/' . $logstore . '/shipper/' . $shipperName . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return DeleteShipperResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string $project
     * @param string $logstore
     * @param string $shipperName
     *
     * @return DeleteShipperResponse
     */
    public function deleteShipper($project, $logstore, $shipperName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteShipperWithOptions($project, $logstore, $shipperName, $headers, $runtime);
    }

    /**
     * @param string         $project
     * @param string         $alert
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetAlertResponse
     */
    public function getAlertWithOptions($project, $alert, $headers, $runtime)
    {
        $hostMap            = [];
        $hostMap['project'] = $project;
        $req                = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetAlert',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/jobs/' . $alert . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetAlertResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string $project
     * @param string $alert
     *
     * @return GetAlertResponse
     */
    public function getAlert($project, $alert)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getAlertWithOptions($project, $alert, $headers, $runtime);
    }

    /**
     * @param string         $project
     * @param string         $machineGroup
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetAppliedConfigsResponse
     */
    public function getAppliedConfigsWithOptions($project, $machineGroup, $headers, $runtime)
    {
        $hostMap            = [];
        $hostMap['project'] = $project;
        $req                = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetAppliedConfigs',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/machinegroups/' . $machineGroup . '/configs',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetAppliedConfigsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string $project
     * @param string $machineGroup
     *
     * @return GetAppliedConfigsResponse
     */
    public function getAppliedConfigs($project, $machineGroup)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getAppliedConfigsWithOptions($project, $machineGroup, $headers, $runtime);
    }

    /**
     * @param string         $project
     * @param string         $configName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetAppliedMachineGroupsResponse
     */
    public function getAppliedMachineGroupsWithOptions($project, $configName, $headers, $runtime)
    {
        $hostMap            = [];
        $hostMap['project'] = $project;
        $req                = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetAppliedMachineGroups',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/configs/' . $configName . '/machinegroups',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetAppliedMachineGroupsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string $project
     * @param string $configName
     *
     * @return GetAppliedMachineGroupsResponse
     */
    public function getAppliedMachineGroups($project, $configName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getAppliedMachineGroupsWithOptions($project, $configName, $headers, $runtime);
    }

    /**
     * @param string               $project
     * @param string               $logstore
     * @param string               $consumerGroup
     * @param GetCheckPointRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return GetCheckPointResponse
     */
    public function getCheckPointWithOptions($project, $logstore, $consumerGroup, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $hostMap            = [];
        $hostMap['project'] = $project;
        $query              = [];
        if (!Utils::isUnset($request->shard)) {
            $query['shard'] = $request->shard;
        }
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetCheckPoint',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/logstores/' . $logstore . '/consumergroups/' . $consumerGroup . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'array',
        ]);

        return GetCheckPointResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string               $project
     * @param string               $logstore
     * @param string               $consumerGroup
     * @param GetCheckPointRequest $request
     *
     * @return GetCheckPointResponse
     */
    public function getCheckPoint($project, $logstore, $consumerGroup, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getCheckPointWithOptions($project, $logstore, $consumerGroup, $request, $headers, $runtime);
    }

    /**
     * @param string                $project
     * @param string                $logstore
     * @param GetContextLogsRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return GetContextLogsResponse
     */
    public function getContextLogsWithOptions($project, $logstore, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $hostMap            = [];
        $hostMap['project'] = $project;
        $query              = [];
        if (!Utils::isUnset($request->backLines)) {
            $query['back_lines'] = $request->backLines;
        }
        if (!Utils::isUnset($request->forwardLines)) {
            $query['forward_lines'] = $request->forwardLines;
        }
        if (!Utils::isUnset($request->packId)) {
            $query['pack_id'] = $request->packId;
        }
        if (!Utils::isUnset($request->packMeta)) {
            $query['pack_meta'] = $request->packMeta;
        }
        if (!Utils::isUnset($request->type)) {
            $query['type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetContextLogs',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/logstores/' . $logstore . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetContextLogsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string                $project
     * @param string                $logstore
     * @param GetContextLogsRequest $request
     *
     * @return GetContextLogsResponse
     */
    public function getContextLogs($project, $logstore, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getContextLogsWithOptions($project, $logstore, $request, $headers, $runtime);
    }

    /**
     * @param string           $project
     * @param string           $logstore
     * @param string           $shardId
     * @param GetCursorRequest $request
     * @param string[]         $headers
     * @param RuntimeOptions   $runtime
     *
     * @return GetCursorResponse
     */
    public function getCursorWithOptions($project, $logstore, $shardId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $hostMap            = [];
        $hostMap['project'] = $project;
        $query              = [];
        if (!Utils::isUnset($request->from)) {
            $query['from'] = $request->from;
        }
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetCursor',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/logstores/' . $logstore . '/shards/' . $shardId . '?type=cursor',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetCursorResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string           $project
     * @param string           $logstore
     * @param string           $shardId
     * @param GetCursorRequest $request
     *
     * @return GetCursorResponse
     */
    public function getCursor($project, $logstore, $shardId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getCursorWithOptions($project, $logstore, $shardId, $request, $headers, $runtime);
    }

    /**
     * @param string               $project
     * @param string               $logstore
     * @param string               $shardId
     * @param GetCursorTimeRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return GetCursorTimeResponse
     */
    public function getCursorTimeWithOptions($project, $logstore, $shardId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $hostMap            = [];
        $hostMap['project'] = $project;
        $query              = [];
        if (!Utils::isUnset($request->cursor)) {
            $query['cursor'] = $request->cursor;
        }
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetCursorTime',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/logstores/' . $logstore . '/shards/' . $shardId . '?type=cursor_time',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetCursorTimeResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string               $project
     * @param string               $logstore
     * @param string               $shardId
     * @param GetCursorTimeRequest $request
     *
     * @return GetCursorTimeResponse
     */
    public function getCursorTime($project, $logstore, $shardId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getCursorTimeWithOptions($project, $logstore, $shardId, $request, $headers, $runtime);
    }

    /**
     * @param string         $project
     * @param string         $etlJobName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetEtlJobResponse
     */
    public function getEtlJobWithOptions($project, $etlJobName, $headers, $runtime)
    {
        $hostMap            = [];
        $hostMap['project'] = $project;
        $req                = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetEtlJob',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/jobs/' . $etlJobName . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetEtlJobResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string $project
     * @param string $etlJobName
     *
     * @return GetEtlJobResponse
     */
    public function getEtlJob($project, $etlJobName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getEtlJobWithOptions($project, $etlJobName, $headers, $runtime);
    }

    /**
     * @param string         $project
     * @param string         $externalStoreName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetExternalStoreResponse
     */
    public function getExternalStoreWithOptions($project, $externalStoreName, $headers, $runtime)
    {
        $hostMap            = [];
        $hostMap['project'] = $project;
        $req                = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetExternalStore',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/externalstores/' . $externalStoreName . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetExternalStoreResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string $project
     * @param string $externalStoreName
     *
     * @return GetExternalStoreResponse
     */
    public function getExternalStore($project, $externalStoreName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getExternalStoreWithOptions($project, $externalStoreName, $headers, $runtime);
    }

    /**
     * @param string               $project
     * @param string               $logstore
     * @param GetHistogramsRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return GetHistogramsResponse
     */
    public function getHistogramsWithOptions($project, $logstore, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $hostMap            = [];
        $hostMap['project'] = $project;
        $query              = [];
        if (!Utils::isUnset($request->from)) {
            $query['from'] = $request->from;
        }
        if (!Utils::isUnset($request->query)) {
            $query['query'] = $request->query;
        }
        if (!Utils::isUnset($request->to)) {
            $query['to'] = $request->to;
        }
        if (!Utils::isUnset($request->topic)) {
            $query['topic'] = $request->topic;
        }
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetHistograms',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/logstores/' . $logstore . '/index?type=histogram',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'array',
        ]);

        return GetHistogramsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string               $project
     * @param string               $logstore
     * @param GetHistogramsRequest $request
     *
     * @return GetHistogramsResponse
     */
    public function getHistograms($project, $logstore, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getHistogramsWithOptions($project, $logstore, $request, $headers, $runtime);
    }

    /**
     * @param string         $project
     * @param string         $logstore
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetIndexResponse
     */
    public function getIndexWithOptions($project, $logstore, $headers, $runtime)
    {
        $hostMap            = [];
        $hostMap['project'] = $project;
        $req                = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetIndex',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/logstores/' . $logstore . '/index',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetIndexResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string $project
     * @param string $logstore
     *
     * @return GetIndexResponse
     */
    public function getIndex($project, $logstore)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getIndexWithOptions($project, $logstore, $headers, $runtime);
    }

    /**
     * @param string         $project
     * @param string         $etlJobName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetJobResponse
     */
    public function getJobWithOptions($project, $etlJobName, $headers, $runtime)
    {
        $hostMap            = [];
        $hostMap['project'] = $project;
        $req                = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetJob',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/jobs/' . $etlJobName . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'any',
        ]);

        return GetJobResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string $project
     * @param string $etlJobName
     *
     * @return GetJobResponse
     */
    public function getJob($project, $etlJobName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getJobWithOptions($project, $etlJobName, $headers, $runtime);
    }

    /**
     * @param string         $project
     * @param string         $logstore
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetLogStoreResponse
     */
    public function getLogStoreWithOptions($project, $logstore, $headers, $runtime)
    {
        $hostMap            = [];
        $hostMap['project'] = $project;
        $req                = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetLogStore',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/logstores/' . $logstore . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetLogStoreResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string $project
     * @param string $logstore
     *
     * @return GetLogStoreResponse
     */
    public function getLogStore($project, $logstore)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getLogStoreWithOptions($project, $logstore, $headers, $runtime);
    }

    /**
     * @param string         $project
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetLoggingResponse
     */
    public function getLoggingWithOptions($project, $headers, $runtime)
    {
        $hostMap            = [];
        $hostMap['project'] = $project;
        $req                = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetLogging',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/logging',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetLoggingResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string $project
     *
     * @return GetLoggingResponse
     */
    public function getLogging($project)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getLoggingWithOptions($project, $headers, $runtime);
    }

    /**
     * @param string         $project
     * @param string         $logstore
     * @param GetLogsRequest $request
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetLogsResponse
     */
    public function getLogsWithOptions($project, $logstore, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $hostMap            = [];
        $hostMap['project'] = $project;
        $query              = [];
        if (!Utils::isUnset($request->from)) {
            $query['from'] = $request->from;
        }
        if (!Utils::isUnset($request->line)) {
            $query['line'] = $request->line;
        }
        if (!Utils::isUnset($request->offset)) {
            $query['offset'] = $request->offset;
        }
        if (!Utils::isUnset($request->powerSql)) {
            $query['powerSql'] = $request->powerSql;
        }
        if (!Utils::isUnset($request->query)) {
            $query['query'] = $request->query;
        }
        if (!Utils::isUnset($request->reverse)) {
            $query['reverse'] = $request->reverse;
        }
        if (!Utils::isUnset($request->to)) {
            $query['to'] = $request->to;
        }
        if (!Utils::isUnset($request->topic)) {
            $query['topic'] = $request->topic;
        }
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetLogs',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/logstores/' . $logstore . '?type=log',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'array',
        ]);

        return GetLogsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string         $project
     * @param string         $logstore
     * @param GetLogsRequest $request
     *
     * @return GetLogsResponse
     */
    public function getLogs($project, $logstore, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getLogsWithOptions($project, $logstore, $request, $headers, $runtime);
    }

    /**
     * @param string         $project
     * @param string         $machineGroup
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetMachineGroupResponse
     */
    public function getMachineGroupWithOptions($project, $machineGroup, $headers, $runtime)
    {
        $hostMap            = [];
        $hostMap['project'] = $project;
        $req                = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetMachineGroup',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/machinegroups/' . $machineGroup . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetMachineGroupResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string $project
     * @param string $machineGroup
     *
     * @return GetMachineGroupResponse
     */
    public function getMachineGroup($project, $machineGroup)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getMachineGroupWithOptions($project, $machineGroup, $headers, $runtime);
    }

    /**
     * @param GetProjectRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return GetProjectResponse
     */
    public function getProjectWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->project)) {
            $query['project'] = $request->project;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetProject',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetProjectResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param GetProjectRequest $request
     *
     * @return GetProjectResponse
     */
    public function getProject($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getProjectWithOptions($request, $headers, $runtime);
    }

    /**
     * @param string                $project
     * @param GetProjectLogsRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return GetProjectLogsResponse
     */
    public function getProjectLogsWithOptions($project, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $hostMap            = [];
        $hostMap['project'] = $project;
        $query              = [];
        if (!Utils::isUnset($request->powerSql)) {
            $query['powerSql'] = $request->powerSql;
        }
        if (!Utils::isUnset($request->query)) {
            $query['query'] = $request->query;
        }
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetProjectLogs',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/logs',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'array',
        ]);

        return GetProjectLogsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string                $project
     * @param GetProjectLogsRequest $request
     *
     * @return GetProjectLogsResponse
     */
    public function getProjectLogs($project, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getProjectLogsWithOptions($project, $request, $headers, $runtime);
    }

    /**
     * @param string         $project
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetProjectPolicyResponse
     */
    public function getProjectPolicyWithOptions($project, $headers, $runtime)
    {
        $hostMap            = [];
        $hostMap['project'] = $project;
        $req                = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetProjectPolicy',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/policy',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'string',
        ]);

        return GetProjectPolicyResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string $project
     *
     * @return GetProjectPolicyResponse
     */
    public function getProjectPolicy($project)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getProjectPolicyWithOptions($project, $headers, $runtime);
    }

    /**
     * @param string         $project
     * @param string         $savedsearchName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetSavedSearchResponse
     */
    public function getSavedSearchWithOptions($project, $savedsearchName, $headers, $runtime)
    {
        $hostMap            = [];
        $hostMap['project'] = $project;
        $req                = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetSavedSearch',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/savedsearches/' . $savedsearchName . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetSavedSearchResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string $project
     * @param string $savedsearchName
     *
     * @return GetSavedSearchResponse
     */
    public function getSavedSearch($project, $savedsearchName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getSavedSearchWithOptions($project, $savedsearchName, $headers, $runtime);
    }

    /**
     * @param string                  $project
     * @param string                  $logstore
     * @param string                  $shipperName
     * @param GetShipperStatusRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return GetShipperStatusResponse
     */
    public function getShipperStatusWithOptions($project, $logstore, $shipperName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $hostMap            = [];
        $hostMap['project'] = $project;
        $query              = [];
        if (!Utils::isUnset($request->from)) {
            $query['from'] = $request->from;
        }
        if (!Utils::isUnset($request->offset)) {
            $query['offset'] = $request->offset;
        }
        if (!Utils::isUnset($request->size)) {
            $query['size'] = $request->size;
        }
        if (!Utils::isUnset($request->status)) {
            $query['status'] = $request->status;
        }
        if (!Utils::isUnset($request->to)) {
            $query['to'] = $request->to;
        }
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetShipperStatus',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/logstores/' . $logstore . '/shipper/' . $shipperName . '/tasks',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetShipperStatusResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string                  $project
     * @param string                  $logstore
     * @param string                  $shipperName
     * @param GetShipperStatusRequest $request
     *
     * @return GetShipperStatusResponse
     */
    public function getShipperStatus($project, $logstore, $shipperName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getShipperStatusWithOptions($project, $logstore, $shipperName, $request, $headers, $runtime);
    }

    /**
     * @param string         $project
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ListAlertResponse
     */
    public function listAlertWithOptions($project, $headers, $runtime)
    {
        $hostMap            = [];
        $hostMap['project'] = $project;
        $req                = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'ListAlert',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/jobs',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListAlertResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string $project
     *
     * @return ListAlertResponse
     */
    public function listAlert($project)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listAlertWithOptions($project, $headers, $runtime);
    }

    /**
     * @param string         $project
     * @param string         $logstore
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ListConsumerGroupResponse
     */
    public function listConsumerGroupWithOptions($project, $logstore, $headers, $runtime)
    {
        $hostMap            = [];
        $hostMap['project'] = $project;
        $req                = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'ListConsumerGroup',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/logstores/' . $logstore . '/consumergroups',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'array',
        ]);

        return ListConsumerGroupResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string $project
     * @param string $logstore
     *
     * @return ListConsumerGroupResponse
     */
    public function listConsumerGroup($project, $logstore)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listConsumerGroupWithOptions($project, $logstore, $headers, $runtime);
    }

    /**
     * @param string             $project
     * @param ListDomainsRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return ListDomainsResponse
     */
    public function listDomainsWithOptions($project, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $hostMap            = [];
        $hostMap['project'] = $project;
        $query              = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['domainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->offset)) {
            $query['offset'] = $request->offset;
        }
        if (!Utils::isUnset($request->size)) {
            $query['size'] = $request->size;
        }
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListDomains',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/domains',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListDomainsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string             $project
     * @param ListDomainsRequest $request
     *
     * @return ListDomainsResponse
     */
    public function listDomains($project, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listDomainsWithOptions($project, $request, $headers, $runtime);
    }

    /**
     * @param string         $project
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ListETLJobsResponse
     */
    public function listETLJobsWithOptions($project, $headers, $runtime)
    {
        $hostMap            = [];
        $hostMap['project'] = $project;
        $req                = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'ListETLJobs',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/jobs',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListETLJobsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string $project
     *
     * @return ListETLJobsResponse
     */
    public function listETLJobs($project)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listETLJobsWithOptions($project, $headers, $runtime);
    }

    /**
     * @param string                   $project
     * @param ListExternalStoreRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return ListExternalStoreResponse
     */
    public function listExternalStoreWithOptions($project, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $hostMap            = [];
        $hostMap['project'] = $project;
        $query              = [];
        if (!Utils::isUnset($request->externalStoreName)) {
            $query['externalStoreName'] = $request->externalStoreName;
        }
        if (!Utils::isUnset($request->offset)) {
            $query['offset'] = $request->offset;
        }
        if (!Utils::isUnset($request->sizs)) {
            $query['sizs'] = $request->sizs;
        }
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListExternalStore',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/externalstores',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListExternalStoreResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string                   $project
     * @param ListExternalStoreRequest $request
     *
     * @return ListExternalStoreResponse
     */
    public function listExternalStore($project, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listExternalStoreWithOptions($project, $request, $headers, $runtime);
    }

    /**
     * @param string         $project
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ListJobsResponse
     */
    public function listJobsWithOptions($project, $headers, $runtime)
    {
        $hostMap            = [];
        $hostMap['project'] = $project;
        $req                = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'ListJobs',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/jobs',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListJobsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string $project
     *
     * @return ListJobsResponse
     */
    public function listJobs($project)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listJobsWithOptions($project, $headers, $runtime);
    }

    /**
     * @param string               $project
     * @param ListLogStoresRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return ListLogStoresResponse
     */
    public function listLogStoresWithOptions($project, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $hostMap            = [];
        $hostMap['project'] = $project;
        $query              = [];
        if (!Utils::isUnset($request->logstoreName)) {
            $query['logstoreName'] = $request->logstoreName;
        }
        if (!Utils::isUnset($request->mode)) {
            $query['mode'] = $request->mode;
        }
        if (!Utils::isUnset($request->offset)) {
            $query['offset'] = $request->offset;
        }
        if (!Utils::isUnset($request->size)) {
            $query['size'] = $request->size;
        }
        if (!Utils::isUnset($request->telemetryType)) {
            $query['telemetryType'] = $request->telemetryType;
        }
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListLogStores',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/logstores',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListLogStoresResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string               $project
     * @param ListLogStoresRequest $request
     *
     * @return ListLogStoresResponse
     */
    public function listLogStores($project, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listLogStoresWithOptions($project, $request, $headers, $runtime);
    }

    /**
     * @param string                  $project
     * @param ListMachineGroupRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return ListMachineGroupResponse
     */
    public function listMachineGroupWithOptions($project, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $hostMap            = [];
        $hostMap['project'] = $project;
        $query              = [];
        if (!Utils::isUnset($request->groupName)) {
            $query['groupName'] = $request->groupName;
        }
        if (!Utils::isUnset($request->offset)) {
            $query['offset'] = $request->offset;
        }
        if (!Utils::isUnset($request->size)) {
            $query['size'] = $request->size;
        }
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListMachineGroup',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/machinegroups',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListMachineGroupResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string                  $project
     * @param ListMachineGroupRequest $request
     *
     * @return ListMachineGroupResponse
     */
    public function listMachineGroup($project, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listMachineGroupWithOptions($project, $request, $headers, $runtime);
    }

    /**
     * @param string              $project
     * @param string              $machineGroup
     * @param ListMachinesRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return ListMachinesResponse
     */
    public function listMachinesWithOptions($project, $machineGroup, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $hostMap            = [];
        $hostMap['project'] = $project;
        $query              = [];
        if (!Utils::isUnset($request->offset)) {
            $query['offset'] = $request->offset;
        }
        if (!Utils::isUnset($request->size)) {
            $query['size'] = $request->size;
        }
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListMachines',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/machinegroups/' . $machineGroup . '/machines',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListMachinesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string              $project
     * @param string              $machineGroup
     * @param ListMachinesRequest $request
     *
     * @return ListMachinesResponse
     */
    public function listMachines($project, $machineGroup, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listMachinesWithOptions($project, $machineGroup, $request, $headers, $runtime);
    }

    /**
     * @param ListProjectRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return ListProjectResponse
     */
    public function listProjectWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->offset)) {
            $query['offset'] = $request->offset;
        }
        if (!Utils::isUnset($request->projectName)) {
            $query['projectName'] = $request->projectName;
        }
        if (!Utils::isUnset($request->size)) {
            $query['size'] = $request->size;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListProject',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListProjectResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param ListProjectRequest $request
     *
     * @return ListProjectResponse
     */
    public function listProject($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listProjectWithOptions($request, $headers, $runtime);
    }

    /**
     * @param string                 $project
     * @param ListSavedSearchRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return ListSavedSearchResponse
     */
    public function listSavedSearchWithOptions($project, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $hostMap            = [];
        $hostMap['project'] = $project;
        $query              = [];
        if (!Utils::isUnset($request->offset)) {
            $query['offset'] = $request->offset;
        }
        if (!Utils::isUnset($request->size)) {
            $query['size'] = $request->size;
        }
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListSavedSearch',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/savedsearches',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListSavedSearchResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string                 $project
     * @param ListSavedSearchRequest $request
     *
     * @return ListSavedSearchResponse
     */
    public function listSavedSearch($project, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listSavedSearchWithOptions($project, $request, $headers, $runtime);
    }

    /**
     * @param string         $project
     * @param string         $logstore
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ListShardsResponse
     */
    public function listShardsWithOptions($project, $logstore, $headers, $runtime)
    {
        $hostMap            = [];
        $hostMap['project'] = $project;
        $req                = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'ListShards',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/logstores/' . $logstore . '/shards',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'array',
        ]);

        return ListShardsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string $project
     * @param string $logstore
     *
     * @return ListShardsResponse
     */
    public function listShards($project, $logstore)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listShardsWithOptions($project, $logstore, $headers, $runtime);
    }

    /**
     * @param string         $project
     * @param string         $logstore
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ListShipperResponse
     */
    public function listShipperWithOptions($project, $logstore, $headers, $runtime)
    {
        $hostMap            = [];
        $hostMap['project'] = $project;
        $req                = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'ListShipper',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/logstores/' . $logstore . '/shipper',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListShipperResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string $project
     * @param string $logstore
     *
     * @return ListShipperResponse
     */
    public function listShipper($project, $logstore)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listShipperWithOptions($project, $logstore, $headers, $runtime);
    }

    /**
     * @param ListTagResourcesRequest $tmpReq
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return ListTagResourcesResponse
     */
    public function listTagResourcesWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListTagResourcesShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->resourceId)) {
            $request->resourceIdShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->resourceId, 'resourceId', 'json');
        }
        if (!Utils::isUnset($tmpReq->tags)) {
            $request->tagsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tags, 'tags', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->resourceIdShrink)) {
            $query['resourceId'] = $request->resourceIdShrink;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['resourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->tagsShrink)) {
            $query['tags'] = $request->tagsShrink;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListTagResources',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/tags',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListTagResourcesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param ListTagResourcesRequest $request
     *
     * @return ListTagResourcesResponse
     */
    public function listTagResources($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listTagResourcesWithOptions($request, $headers, $runtime);
    }

    /**
     * @param string          $project
     * @param string          $logstore
     * @param string          $shard
     * @param PullDataRequest $request
     * @param string[]        $headers
     * @param RuntimeOptions  $runtime
     *
     * @return PullDataResponse
     */
    public function pullDataWithOptions($project, $logstore, $shard, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $hostMap            = [];
        $hostMap['project'] = $project;
        $query              = [];
        if (!Utils::isUnset($request->count)) {
            $query['count'] = $request->count;
        }
        if (!Utils::isUnset($request->cursor)) {
            $query['cursor'] = $request->cursor;
        }
        if (!Utils::isUnset($request->endCursor)) {
            $query['endCursor'] = $request->endCursor;
        }
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'PullData',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/logstores/' . $logstore . '/shards/' . $shard . '?type=log',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return PullDataResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string          $project
     * @param string          $logstore
     * @param string          $shard
     * @param PullDataRequest $request
     *
     * @return PullDataResponse
     */
    public function pullData($project, $logstore, $shard, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->pullDataWithOptions($project, $logstore, $shard, $request, $headers, $runtime);
    }

    /**
     * @param string                  $project
     * @param PutProjectPolicyRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return PutProjectPolicyResponse
     */
    public function putProjectPolicyWithOptions($project, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $hostMap            = [];
        $hostMap['project'] = $project;
        $req                = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'body'    => $request->body,
        ]);
        $params = new Params([
            'action'      => 'PutProjectPolicy',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/policy',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return PutProjectPolicyResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string                  $project
     * @param PutProjectPolicyRequest $request
     *
     * @return PutProjectPolicyResponse
     */
    public function putProjectPolicy($project, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->putProjectPolicyWithOptions($project, $request, $headers, $runtime);
    }

    /**
     * @param string                $project
     * @param string                $logstoreName
     * @param PutWebtrackingRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return PutWebtrackingResponse
     */
    public function putWebtrackingWithOptions($project, $logstoreName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $hostMap            = [];
        $hostMap['project'] = $project;
        $body               = [];
        if (!Utils::isUnset($request->logs)) {
            $body['__logs__'] = $request->logs;
        }
        if (!Utils::isUnset($request->source)) {
            $body['__source__'] = $request->source;
        }
        if (!Utils::isUnset($request->tags)) {
            $body['__tags__'] = $request->tags;
        }
        if (!Utils::isUnset($request->topic)) {
            $body['__topic__'] = $request->topic;
        }
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'PutWebtracking',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/logstores/' . $logstoreName . '/track',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return PutWebtrackingResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string                $project
     * @param string                $logstoreName
     * @param PutWebtrackingRequest $request
     *
     * @return PutWebtrackingResponse
     */
    public function putWebtracking($project, $logstoreName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->putWebtrackingWithOptions($project, $logstoreName, $request, $headers, $runtime);
    }

    /**
     * @param string         $project
     * @param string         $machineGroup
     * @param string         $configName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return RemoveConfigFromMachineGroupResponse
     */
    public function removeConfigFromMachineGroupWithOptions($project, $machineGroup, $configName, $headers, $runtime)
    {
        $hostMap            = [];
        $hostMap['project'] = $project;
        $req                = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'RemoveConfigFromMachineGroup',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/machinegroups/' . $machineGroup . '/configs/' . $configName . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return RemoveConfigFromMachineGroupResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string $project
     * @param string $machineGroup
     * @param string $configName
     *
     * @return RemoveConfigFromMachineGroupResponse
     */
    public function removeConfigFromMachineGroup($project, $machineGroup, $configName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->removeConfigFromMachineGroupWithOptions($project, $machineGroup, $configName, $headers, $runtime);
    }

    /**
     * @param string            $project
     * @param string            $logstore
     * @param string            $shard
     * @param SplitShardRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return SplitShardResponse
     */
    public function splitShardWithOptions($project, $logstore, $shard, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $hostMap            = [];
        $hostMap['project'] = $project;
        $query              = [];
        if (!Utils::isUnset($request->key)) {
            $query['key'] = $request->key;
        }
        if (!Utils::isUnset($request->shardCount)) {
            $query['shardCount'] = $request->shardCount;
        }
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SplitShard',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/logstores/' . $logstore . '/shards/' . $shard . '?action=split',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'array',
        ]);

        return SplitShardResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string            $project
     * @param string            $logstore
     * @param string            $shard
     * @param SplitShardRequest $request
     *
     * @return SplitShardResponse
     */
    public function splitShard($project, $logstore, $shard, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->splitShardWithOptions($project, $logstore, $shard, $request, $headers, $runtime);
    }

    /**
     * @param TagResourcesRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return TagResourcesResponse
     */
    public function tagResourcesWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->resourceId)) {
            $body['resourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $body['resourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->tags)) {
            $body['tags'] = $request->tags;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'TagResources',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/tag',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return TagResourcesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param TagResourcesRequest $request
     *
     * @return TagResourcesResponse
     */
    public function tagResources($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->tagResourcesWithOptions($request, $headers, $runtime);
    }

    /**
     * @param UntagResourcesRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return UntagResourcesResponse
     */
    public function untagResourcesWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->all)) {
            $body['all'] = $request->all;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $body['resourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $body['resourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->tags)) {
            $body['tags'] = $request->tags;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UntagResources',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/untag',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UntagResourcesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param UntagResourcesRequest $request
     *
     * @return UntagResourcesResponse
     */
    public function untagResources($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->untagResourcesWithOptions($request, $headers, $runtime);
    }

    /**
     * @param string             $project
     * @param string             $alert
     * @param UpdateAlertRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return UpdateAlertResponse
     */
    public function updateAlertWithOptions($project, $alert, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $hostMap            = [];
        $hostMap['project'] = $project;
        $req                = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($request->alert),
        ]);
        $params = new Params([
            'action'      => 'UpdateAlert',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/jobs/' . $alert . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateAlertResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string             $project
     * @param string             $alert
     * @param UpdateAlertRequest $request
     *
     * @return UpdateAlertResponse
     */
    public function updateAlert($project, $alert, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateAlertWithOptions($project, $alert, $request, $headers, $runtime);
    }

    /**
     * @param string                     $project
     * @param string                     $logstore
     * @param string                     $consumerGroup
     * @param UpdateConsumerGroupRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return UpdateConsumerGroupResponse
     */
    public function updateConsumerGroupWithOptions($project, $logstore, $consumerGroup, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $hostMap            = [];
        $hostMap['project'] = $project;
        $body               = [];
        if (!Utils::isUnset($request->order)) {
            $body['order'] = $request->order;
        }
        if (!Utils::isUnset($request->timeout)) {
            $body['timeout'] = $request->timeout;
        }
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateConsumerGroup',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/logstores/' . $logstore . '/consumergroups/' . $consumerGroup . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return UpdateConsumerGroupResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string                     $project
     * @param string                     $logstore
     * @param string                     $consumerGroup
     * @param UpdateConsumerGroupRequest $request
     *
     * @return UpdateConsumerGroupResponse
     */
    public function updateConsumerGroup($project, $logstore, $consumerGroup, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateConsumerGroupWithOptions($project, $logstore, $consumerGroup, $request, $headers, $runtime);
    }

    /**
     * @param string              $project
     * @param string              $etlJob
     * @param UpdateEtlJobRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return UpdateEtlJobResponse
     */
    public function updateEtlJobWithOptions($project, $etlJob, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $hostMap            = [];
        $hostMap['project'] = $project;
        $req                = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($request->body),
        ]);
        $params = new Params([
            'action'      => 'UpdateEtlJob',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/jobs/' . $etlJob . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateEtlJobResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string              $project
     * @param string              $etlJob
     * @param UpdateEtlJobRequest $request
     *
     * @return UpdateEtlJobResponse
     */
    public function updateEtlJob($project, $etlJob, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateEtlJobWithOptions($project, $etlJob, $request, $headers, $runtime);
    }

    /**
     * @param string             $project
     * @param string             $logstore
     * @param UpdateIndexRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return UpdateIndexResponse
     */
    public function updateIndexWithOptions($project, $logstore, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $hostMap            = [];
        $hostMap['project'] = $project;
        $body               = [];
        if (!Utils::isUnset($request->keys)) {
            $body['keys'] = $request->keys;
        }
        if (!Utils::isUnset($request->line)) {
            $body['line'] = $request->line;
        }
        if (!Utils::isUnset($request->logReduce)) {
            $body['log_reduce'] = $request->logReduce;
        }
        if (!Utils::isUnset($request->logReduceBlackList)) {
            $body['log_reduce_black_list'] = $request->logReduceBlackList;
        }
        if (!Utils::isUnset($request->logReduceWhiteList)) {
            $body['log_reduce_white_list'] = $request->logReduceWhiteList;
        }
        if (!Utils::isUnset($request->maxTextLen)) {
            $body['max_text_len'] = $request->maxTextLen;
        }
        if (!Utils::isUnset($request->ttl)) {
            $body['ttl'] = $request->ttl;
        }
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateIndex',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/logstores/' . $logstore . '/index',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return UpdateIndexResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string             $project
     * @param string             $logstore
     * @param UpdateIndexRequest $request
     *
     * @return UpdateIndexResponse
     */
    public function updateIndex($project, $logstore, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateIndexWithOptions($project, $logstore, $request, $headers, $runtime);
    }

    /**
     * @param string           $project
     * @param string           $etlJob
     * @param UpdateJobRequest $tmpReq
     * @param string[]         $headers
     * @param RuntimeOptions   $runtime
     *
     * @return UpdateJobResponse
     */
    public function updateJobWithOptions($project, $etlJob, $tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $hostMap            = [];
        $hostMap['project'] = $project;
        $request            = new UpdateJobShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->body)) {
            $request->bodyShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->body, 'body', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->bodyShrink)) {
            $query['body'] = $request->bodyShrink;
        }
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateJob',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/jobs/' . $etlJob . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateJobResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string           $project
     * @param string           $etlJob
     * @param UpdateJobRequest $request
     *
     * @return UpdateJobResponse
     */
    public function updateJob($project, $etlJob, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateJobWithOptions($project, $etlJob, $request, $headers, $runtime);
    }

    /**
     * @param string                $project
     * @param string                $logstore
     * @param UpdateLogStoreRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return UpdateLogStoreResponse
     */
    public function updateLogStoreWithOptions($project, $logstore, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $hostMap            = [];
        $hostMap['project'] = $project;
        $body               = [];
        if (!Utils::isUnset($request->appendMeta)) {
            $body['appendMeta'] = $request->appendMeta;
        }
        if (!Utils::isUnset($request->autoSplit)) {
            $body['autoSplit'] = $request->autoSplit;
        }
        if (!Utils::isUnset($request->enableTracking)) {
            $body['enable_tracking'] = $request->enableTracking;
        }
        if (!Utils::isUnset($request->encryptConf)) {
            $body['encrypt_conf'] = $request->encryptConf;
        }
        if (!Utils::isUnset($request->hotTtl)) {
            $body['hot_ttl'] = $request->hotTtl;
        }
        if (!Utils::isUnset($request->logstoreName)) {
            $body['logstoreName'] = $request->logstoreName;
        }
        if (!Utils::isUnset($request->maxSplitShard)) {
            $body['maxSplitShard'] = $request->maxSplitShard;
        }
        if (!Utils::isUnset($request->mode)) {
            $body['mode'] = $request->mode;
        }
        if (!Utils::isUnset($request->shardCount)) {
            $body['shardCount'] = $request->shardCount;
        }
        if (!Utils::isUnset($request->telemetryType)) {
            $body['telemetryType'] = $request->telemetryType;
        }
        if (!Utils::isUnset($request->ttl)) {
            $body['ttl'] = $request->ttl;
        }
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateLogStore',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/logstores/' . $logstore . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return UpdateLogStoreResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string                $project
     * @param string                $logstore
     * @param UpdateLogStoreRequest $request
     *
     * @return UpdateLogStoreResponse
     */
    public function updateLogStore($project, $logstore, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateLogStoreWithOptions($project, $logstore, $request, $headers, $runtime);
    }

    /**
     * @param string               $project
     * @param UpdateLoggingRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return UpdateLoggingResponse
     */
    public function updateLoggingWithOptions($project, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $hostMap            = [];
        $hostMap['project'] = $project;
        $body               = [];
        if (!Utils::isUnset($request->loggingDetails)) {
            $body['loggingDetails'] = $request->loggingDetails;
        }
        if (!Utils::isUnset($request->loggingProject)) {
            $body['loggingProject'] = $request->loggingProject;
        }
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateLogging',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/logging',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return UpdateLoggingResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string               $project
     * @param UpdateLoggingRequest $request
     *
     * @return UpdateLoggingResponse
     */
    public function updateLogging($project, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateLoggingWithOptions($project, $request, $headers, $runtime);
    }

    /**
     * @param string                    $project
     * @param string                    $groupName
     * @param UpdateMachineGroupRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return UpdateMachineGroupResponse
     */
    public function updateMachineGroupWithOptions($project, $groupName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $hostMap            = [];
        $hostMap['project'] = $project;
        $body               = [];
        if (!Utils::isUnset($request->groupAttribute)) {
            $body['groupAttribute'] = $request->groupAttribute;
        }
        if (!Utils::isUnset($request->groupName)) {
            $body['groupName'] = $request->groupName;
        }
        if (!Utils::isUnset($request->groupType)) {
            $body['groupType'] = $request->groupType;
        }
        if (!Utils::isUnset($request->machineIdentifyType)) {
            $body['machineIdentifyType'] = $request->machineIdentifyType;
        }
        if (!Utils::isUnset($request->machineList)) {
            $body['machineList'] = $request->machineList;
        }
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateMachineGroup',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/machinegroups/' . $groupName . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return UpdateMachineGroupResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string                    $project
     * @param string                    $groupName
     * @param UpdateMachineGroupRequest $request
     *
     * @return UpdateMachineGroupResponse
     */
    public function updateMachineGroup($project, $groupName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateMachineGroupWithOptions($project, $groupName, $request, $headers, $runtime);
    }

    /**
     * @param string                           $project
     * @param string                           $machineGroup
     * @param UpdateMachineGroupMachineRequest $request
     * @param string[]                         $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return UpdateMachineGroupMachineResponse
     */
    public function updateMachineGroupMachineWithOptions($project, $machineGroup, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $hostMap            = [];
        $hostMap['project'] = $project;
        $query              = [];
        if (!Utils::isUnset($request->action)) {
            $query['action'] = $request->action;
        }
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => $request->body,
        ]);
        $params = new Params([
            'action'      => 'UpdateMachineGroupMachine',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/machinegroups/' . $machineGroup . '/machines',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return UpdateMachineGroupMachineResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string                           $project
     * @param string                           $machineGroup
     * @param UpdateMachineGroupMachineRequest $request
     *
     * @return UpdateMachineGroupMachineResponse
     */
    public function updateMachineGroupMachine($project, $machineGroup, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateMachineGroupMachineWithOptions($project, $machineGroup, $request, $headers, $runtime);
    }

    /**
     * @param string                   $project
     * @param string                   $logstore
     * @param string                   $shipperName
     * @param UpdateOdpsShipperRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return UpdateOdpsShipperResponse
     */
    public function updateOdpsShipperWithOptions($project, $logstore, $shipperName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $hostMap            = [];
        $hostMap['project'] = $project;
        $body               = [];
        if (!Utils::isUnset($request->shipperName)) {
            $body['shipperName'] = $request->shipperName;
        }
        if (!Utils::isUnset($request->targetConfiguration)) {
            $body['targetConfiguration'] = $request->targetConfiguration;
        }
        if (!Utils::isUnset($request->targetType)) {
            $body['targetType'] = $request->targetType;
        }
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateOdpsShipper',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/logstores/' . $logstore . '/shipper/' . $shipperName . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return UpdateOdpsShipperResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string                   $project
     * @param string                   $logstore
     * @param string                   $shipperName
     * @param UpdateOdpsShipperRequest $request
     *
     * @return UpdateOdpsShipperResponse
     */
    public function updateOdpsShipper($project, $logstore, $shipperName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateOdpsShipperWithOptions($project, $logstore, $shipperName, $request, $headers, $runtime);
    }

    /**
     * @param string                        $project
     * @param string                        $externalStoreName
     * @param UpdateOssExternalStoreRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return UpdateOssExternalStoreResponse
     */
    public function updateOssExternalStoreWithOptions($project, $externalStoreName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $hostMap            = [];
        $hostMap['project'] = $project;
        $body               = [];
        if (!Utils::isUnset($request->externalStoreName)) {
            $body['externalStoreName'] = $request->externalStoreName;
        }
        if (!Utils::isUnset($request->parameter)) {
            $body['parameter'] = $request->parameter;
        }
        if (!Utils::isUnset($request->storeType)) {
            $body['storeType'] = $request->storeType;
        }
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateOssExternalStore',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/externalstores/' . $externalStoreName . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return UpdateOssExternalStoreResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string                        $project
     * @param string                        $externalStoreName
     * @param UpdateOssExternalStoreRequest $request
     *
     * @return UpdateOssExternalStoreResponse
     */
    public function updateOssExternalStore($project, $externalStoreName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateOssExternalStoreWithOptions($project, $externalStoreName, $request, $headers, $runtime);
    }

    /**
     * @param string                  $project
     * @param string                  $logstore
     * @param string                  $shipperName
     * @param UpdateOssShipperRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return UpdateOssShipperResponse
     */
    public function updateOssShipperWithOptions($project, $logstore, $shipperName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $hostMap            = [];
        $hostMap['project'] = $project;
        $body               = [];
        if (!Utils::isUnset($request->shipperName)) {
            $body['shipperName'] = $request->shipperName;
        }
        if (!Utils::isUnset($request->targetConfiguration)) {
            $body['targetConfiguration'] = $request->targetConfiguration;
        }
        if (!Utils::isUnset($request->targetType)) {
            $body['targetType'] = $request->targetType;
        }
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateOssShipper',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/logstores/' . $logstore . '/shipper/' . $shipperName . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return UpdateOssShipperResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string                  $project
     * @param string                  $logstore
     * @param string                  $shipperName
     * @param UpdateOssShipperRequest $request
     *
     * @return UpdateOssShipperResponse
     */
    public function updateOssShipper($project, $logstore, $shipperName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateOssShipperWithOptions($project, $logstore, $shipperName, $request, $headers, $runtime);
    }

    /**
     * @param UpdateProjectRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return UpdateProjectResponse
     */
    public function updateProjectWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->project)) {
            $query['project'] = $request->project;
        }
        $body = [];
        if (!Utils::isUnset($request->description)) {
            $body['description'] = $request->description;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateProject',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return UpdateProjectResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param UpdateProjectRequest $request
     *
     * @return UpdateProjectResponse
     */
    public function updateProject($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateProjectWithOptions($request, $headers, $runtime);
    }

    /**
     * @param string                        $project
     * @param string                        $externalStoreName
     * @param UpdateRdsExternalStoreRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return UpdateRdsExternalStoreResponse
     */
    public function updateRdsExternalStoreWithOptions($project, $externalStoreName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $hostMap            = [];
        $hostMap['project'] = $project;
        $body               = [];
        if (!Utils::isUnset($request->externalStoreName)) {
            $body['externalStoreName'] = $request->externalStoreName;
        }
        if (!Utils::isUnset($request->parameter)) {
            $body['parameter'] = $request->parameter;
        }
        if (!Utils::isUnset($request->storeType)) {
            $body['storeType'] = $request->storeType;
        }
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateRdsExternalStore',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/externalstores/' . $externalStoreName . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return UpdateRdsExternalStoreResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string                        $project
     * @param string                        $externalStoreName
     * @param UpdateRdsExternalStoreRequest $request
     *
     * @return UpdateRdsExternalStoreResponse
     */
    public function updateRdsExternalStore($project, $externalStoreName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateRdsExternalStoreWithOptions($project, $externalStoreName, $request, $headers, $runtime);
    }

    /**
     * @param string                   $project
     * @param string                   $savedsearchName
     * @param UpdateSavedSearchRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return UpdateSavedSearchResponse
     */
    public function updateSavedSearchWithOptions($project, $savedsearchName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $hostMap            = [];
        $hostMap['project'] = $project;
        $body               = [];
        if (!Utils::isUnset($request->displayName)) {
            $body['displayName'] = $request->displayName;
        }
        if (!Utils::isUnset($request->logstore)) {
            $body['logstore'] = $request->logstore;
        }
        if (!Utils::isUnset($request->savedsearchName)) {
            $body['savedsearchName'] = $request->savedsearchName;
        }
        if (!Utils::isUnset($request->searchQuery)) {
            $body['searchQuery'] = $request->searchQuery;
        }
        if (!Utils::isUnset($request->topic)) {
            $body['topic'] = $request->topic;
        }
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateSavedSearch',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/savedsearches/' . $savedsearchName . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return UpdateSavedSearchResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string                   $project
     * @param string                   $savedsearchName
     * @param UpdateSavedSearchRequest $request
     *
     * @return UpdateSavedSearchResponse
     */
    public function updateSavedSearch($project, $savedsearchName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateSavedSearchWithOptions($project, $savedsearchName, $request, $headers, $runtime);
    }
}
