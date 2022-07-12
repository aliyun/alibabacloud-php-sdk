<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230;

use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Sls\V20201230\Models\ApplyConfigToMachineGroupResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\BatchCreateEtlMetaRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\BatchCreateEtlMetaResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\BatchModifyEtlMetaStatusRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\BatchModifyEtlMetaStatusResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\BatchUpdateEtlMetaRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\BatchUpdateEtlMetaResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\CreateConsumerGroupRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\CreateConsumerGroupResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\CreateDomainRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\CreateDomainResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\CreateEtlMetaRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\CreateEtlMetaResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\CreateIndexRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\CreateIndexResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\CreateLoggingRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\CreateLoggingResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\CreateLogStoreRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\CreateLogStoreResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\CreateMachineGroupRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\CreateMachineGroupResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\CreateProjectRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\CreateProjectResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\CreateSavedSearchRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\CreateSavedSearchResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\DeleteConsumerGroupResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\DeleteDomainResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\DeleteEtlMetaRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\DeleteEtlMetaResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\DeleteIndexResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\DeleteLoggingResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\DeleteLogStoreResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\DeleteMachineGroupResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\DeleteProjectResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\DeleteSavedSearchResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\GetAppliedConfigsResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\GetCheckPointRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\GetCheckPointResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\GetContextLogsRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\GetContextLogsResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\GetCursorRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\GetCursorResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\GetCursorTimeRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\GetCursorTimeResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\GetEtlMetaRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\GetEtlMetaResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\GetHistogramsRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\GetHistogramsResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\GetIndexResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\GetLoggingResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\GetLogsRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\GetLogsResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\GetLogStoreResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\GetMachineGroupResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\GetProjectLogsRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\GetProjectLogsResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\GetProjectResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\GetSavedSearchResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\ListConsumerGroupResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\ListDomainsRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\ListDomainsResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\ListEtlMetaNameRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\ListEtlMetaNameResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\ListEtlMetaRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\ListEtlMetaResponse;
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
use AlibabaCloud\SDK\Sls\V20201230\Models\ListTagResourcesRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\ListTagResourcesResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\ListTagResourcesShrinkRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\MergeShardsRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\MergeShardsResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\RemoveConfigFromMachineGroupResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\SplitShardRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\SplitShardResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\TagResourcesRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\TagResourcesResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\UnTagResourcesRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\UnTagResourcesResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\UpdateCheckPointRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\UpdateCheckPointResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\UpdateConsumerGroupRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\UpdateConsumerGroupResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\UpdateEtlMetaRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\UpdateEtlMetaResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\UpdateIndexRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\UpdateIndexResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\UpdateLoggingRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\UpdateLoggingResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\UpdateLogStoreRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\UpdateLogStoreResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\UpdateMachineGroupRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\UpdateMachineGroupResponse;
use AlibabaCloud\SDK\Sls\V20201230\Models\UpdateProjectRequest;
use AlibabaCloud\SDK\Sls\V20201230\Models\UpdateProjectResponse;
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
        $machineGroup       = OpenApiUtilClient::getEncodeParam($machineGroup);
        $configName         = OpenApiUtilClient::getEncodeParam($configName);
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
     * @param string                    $project
     * @param BatchCreateEtlMetaRequest $request
     *
     * @return BatchCreateEtlMetaResponse
     */
    public function batchCreateEtlMeta($project, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->batchCreateEtlMetaWithOptions($project, $request, $headers, $runtime);
    }

    /**
     * @param string                    $project
     * @param BatchCreateEtlMetaRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return BatchCreateEtlMetaResponse
     */
    public function batchCreateEtlMetaWithOptions($project, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $hostMap            = [];
        $hostMap['project'] = $project;
        $body               = [];
        if (!Utils::isUnset($request->etlMetaList)) {
            $body['etlMetaList'] = $request->etlMetaList;
        }
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'BatchCreateEtlMeta',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/etlmetas',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return BatchCreateEtlMetaResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string                          $project
     * @param BatchModifyEtlMetaStatusRequest $request
     *
     * @return BatchModifyEtlMetaStatusResponse
     */
    public function batchModifyEtlMetaStatus($project, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->batchModifyEtlMetaStatusWithOptions($project, $request, $headers, $runtime);
    }

    /**
     * @param string                          $project
     * @param BatchModifyEtlMetaStatusRequest $request
     * @param string[]                        $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return BatchModifyEtlMetaStatusResponse
     */
    public function batchModifyEtlMetaStatusWithOptions($project, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $hostMap            = [];
        $hostMap['project'] = $project;
        $query              = [];
        if (!Utils::isUnset($request->type)) {
            $query['type'] = $request->type;
        }
        $body = [];
        if (!Utils::isUnset($request->etlMetaKeyList)) {
            $body['etlMetaKeyList'] = $request->etlMetaKeyList;
        }
        if (!Utils::isUnset($request->etlMetaName)) {
            $body['etlMetaName'] = $request->etlMetaName;
        }
        if (!Utils::isUnset($request->etlMetaTag)) {
            $body['etlMetaTag'] = $request->etlMetaTag;
        }
        if (!Utils::isUnset($request->range)) {
            $body['range'] = $request->range;
        }
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'BatchModifyEtlMetaStatus',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/etlmetas',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return BatchModifyEtlMetaStatusResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string                    $project
     * @param BatchUpdateEtlMetaRequest $request
     *
     * @return BatchUpdateEtlMetaResponse
     */
    public function batchUpdateEtlMeta($project, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->batchUpdateEtlMetaWithOptions($project, $request, $headers, $runtime);
    }

    /**
     * @param string                    $project
     * @param BatchUpdateEtlMetaRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return BatchUpdateEtlMetaResponse
     */
    public function batchUpdateEtlMetaWithOptions($project, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $hostMap            = [];
        $hostMap['project'] = $project;
        $body               = [];
        if (!Utils::isUnset($request->etlMetaList)) {
            $body['etlMetaList'] = $request->etlMetaList;
        }
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'BatchUpdateEtlMeta',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/etlmetas',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return BatchUpdateEtlMetaResponse::fromMap($this->execute($params, $req, $runtime));
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
        $logstore           = OpenApiUtilClient::getEncodeParam($logstore);
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
     * @param string               $project
     * @param CreateEtlMetaRequest $request
     *
     * @return CreateEtlMetaResponse
     */
    public function createEtlMeta($project, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createEtlMetaWithOptions($project, $request, $headers, $runtime);
    }

    /**
     * @param string               $project
     * @param CreateEtlMetaRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return CreateEtlMetaResponse
     */
    public function createEtlMetaWithOptions($project, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $hostMap            = [];
        $hostMap['project'] = $project;
        $body               = [];
        if (!Utils::isUnset($request->enable)) {
            $body['enable'] = $request->enable;
        }
        if (!Utils::isUnset($request->etlMetaKey)) {
            $body['etlMetaKey'] = $request->etlMetaKey;
        }
        if (!Utils::isUnset($request->etlMetaName)) {
            $body['etlMetaName'] = $request->etlMetaName;
        }
        if (!Utils::isUnset($request->etlMetaTag)) {
            $body['etlMetaTag'] = $request->etlMetaTag;
        }
        if (!Utils::isUnset($request->etlMetaValue)) {
            $body['etlMetaValue'] = $request->etlMetaValue;
        }
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateEtlMeta',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/etlmetas',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return CreateEtlMetaResponse::fromMap($this->execute($params, $req, $runtime));
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
        $logstore           = OpenApiUtilClient::getEncodeParam($logstore);
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
        $logstore           = OpenApiUtilClient::getEncodeParam($logstore);
        $consumerGroup      = OpenApiUtilClient::getEncodeParam($consumerGroup);
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
        $domainName         = OpenApiUtilClient::getEncodeParam($domainName);
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
     * @param string               $project
     * @param DeleteEtlMetaRequest $request
     *
     * @return DeleteEtlMetaResponse
     */
    public function deleteEtlMeta($project, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteEtlMetaWithOptions($project, $request, $headers, $runtime);
    }

    /**
     * @param string               $project
     * @param DeleteEtlMetaRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteEtlMetaResponse
     */
    public function deleteEtlMetaWithOptions($project, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $hostMap            = [];
        $hostMap['project'] = $project;
        $query              = [];
        if (!Utils::isUnset($request->etlMetaKey)) {
            $query['etlMetaKey'] = $request->etlMetaKey;
        }
        if (!Utils::isUnset($request->etlMetaName)) {
            $query['etlMetaName'] = $request->etlMetaName;
        }
        if (!Utils::isUnset($request->etlMetaTag)) {
            $query['etlMetaTag'] = $request->etlMetaTag;
        }
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteEtlMeta',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/etlmetas',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return DeleteEtlMetaResponse::fromMap($this->execute($params, $req, $runtime));
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
        $logstore           = OpenApiUtilClient::getEncodeParam($logstore);
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
        $logstore           = OpenApiUtilClient::getEncodeParam($logstore);
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
        $machineGroup       = OpenApiUtilClient::getEncodeParam($machineGroup);
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
     *
     * @return DeleteProjectResponse
     */
    public function deleteProject($project)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteProjectWithOptions($project, $headers, $runtime);
    }

    /**
     * @param string         $project
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteProjectResponse
     */
    public function deleteProjectWithOptions($project, $headers, $runtime)
    {
        $hostMap            = [];
        $hostMap['project'] = $project;
        $req                = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
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
        $savedsearchName    = OpenApiUtilClient::getEncodeParam($savedsearchName);
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
        $machineGroup       = OpenApiUtilClient::getEncodeParam($machineGroup);
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
        $logstore           = OpenApiUtilClient::getEncodeParam($logstore);
        $consumerGroup      = OpenApiUtilClient::getEncodeParam($consumerGroup);
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
        $logstore           = OpenApiUtilClient::getEncodeParam($logstore);
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
        $logstore           = OpenApiUtilClient::getEncodeParam($logstore);
        $shardId            = OpenApiUtilClient::getEncodeParam($shardId);
        $query              = [];
        if (!Utils::isUnset($request->from)) {
            $query['from'] = $request->from;
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
            'action'      => 'GetCursor',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/logstores/' . $logstore . '/shards/' . $shardId . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetCursorResponse::fromMap($this->execute($params, $req, $runtime));
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
        $logstore           = OpenApiUtilClient::getEncodeParam($logstore);
        $shardId            = OpenApiUtilClient::getEncodeParam($shardId);
        $query              = [];
        if (!Utils::isUnset($request->cursor)) {
            $query['cursor'] = $request->cursor;
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
            'action'      => 'GetCursorTime',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/logstores/' . $logstore . '/shards/' . $shardId . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetCursorTimeResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string            $project
     * @param GetEtlMetaRequest $request
     *
     * @return GetEtlMetaResponse
     */
    public function getEtlMeta($project, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getEtlMetaWithOptions($project, $request, $headers, $runtime);
    }

    /**
     * @param string            $project
     * @param GetEtlMetaRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return GetEtlMetaResponse
     */
    public function getEtlMetaWithOptions($project, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $hostMap            = [];
        $hostMap['project'] = $project;
        $query              = [];
        if (!Utils::isUnset($request->elMetaName)) {
            $query['elMetaName'] = $request->elMetaName;
        }
        if (!Utils::isUnset($request->etlMetaKey)) {
            $query['etlMetaKey'] = $request->etlMetaKey;
        }
        if (!Utils::isUnset($request->etlMetaTag)) {
            $query['etlMetaTag'] = $request->etlMetaTag;
        }
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetEtlMeta',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/etlmetas',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetEtlMetaResponse::fromMap($this->execute($params, $req, $runtime));
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
        $logstore           = OpenApiUtilClient::getEncodeParam($logstore);
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
        if (!Utils::isUnset($request->type)) {
            $query['type'] = $request->type;
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
            'pathname'    => '/logstores/' . $logstore . '/index',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'array',
        ]);

        return GetHistogramsResponse::fromMap($this->execute($params, $req, $runtime));
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
        $logstore           = OpenApiUtilClient::getEncodeParam($logstore);
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
        $logstore           = OpenApiUtilClient::getEncodeParam($logstore);
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
        $logstore           = OpenApiUtilClient::getEncodeParam($logstore);
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
        if (!Utils::isUnset($request->type)) {
            $query['type'] = $request->type;
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
            'pathname'    => '/logstores/' . $logstore . '/index',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'array',
        ]);

        return GetLogsResponse::fromMap($this->execute($params, $req, $runtime));
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
        $machineGroup       = OpenApiUtilClient::getEncodeParam($machineGroup);
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
     *
     * @return GetProjectResponse
     */
    public function getProject($project)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getProjectWithOptions($project, $headers, $runtime);
    }

    /**
     * @param string         $project
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetProjectResponse
     */
    public function getProjectWithOptions($project, $headers, $runtime)
    {
        $hostMap            = [];
        $hostMap['project'] = $project;
        $req                = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
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
        $savedsearchName    = OpenApiUtilClient::getEncodeParam($savedsearchName);
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
        $logstore           = OpenApiUtilClient::getEncodeParam($logstore);
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
     * @param ListEtlMetaRequest $request
     *
     * @return ListEtlMetaResponse
     */
    public function listEtlMeta($project, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listEtlMetaWithOptions($project, $request, $headers, $runtime);
    }

    /**
     * @param string             $project
     * @param ListEtlMetaRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return ListEtlMetaResponse
     */
    public function listEtlMetaWithOptions($project, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $hostMap            = [];
        $hostMap['project'] = $project;
        $query              = [];
        if (!Utils::isUnset($request->etlMetaKey)) {
            $query['etlMetaKey'] = $request->etlMetaKey;
        }
        if (!Utils::isUnset($request->etlMetaName)) {
            $query['etlMetaName'] = $request->etlMetaName;
        }
        if (!Utils::isUnset($request->etlMetaTag)) {
            $query['etlMetaTag'] = $request->etlMetaTag;
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
            'action'      => 'ListEtlMeta',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/etlmetas',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListEtlMetaResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string                 $project
     * @param ListEtlMetaNameRequest $request
     *
     * @return ListEtlMetaNameResponse
     */
    public function listEtlMetaName($project, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listEtlMetaNameWithOptions($project, $request, $headers, $runtime);
    }

    /**
     * @param string                 $project
     * @param ListEtlMetaNameRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return ListEtlMetaNameResponse
     */
    public function listEtlMetaNameWithOptions($project, $request, $headers, $runtime)
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
            'action'      => 'ListEtlMetaName',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/etlmetanames',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListEtlMetaNameResponse::fromMap($this->execute($params, $req, $runtime));
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
        $machineGroup       = OpenApiUtilClient::getEncodeParam($machineGroup);
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
     * @return ListShardsResponse
     */
    public function listShardsWithOptions($project, $logstore, $headers, $runtime)
    {
        $hostMap            = [];
        $hostMap['project'] = $project;
        $logstore           = OpenApiUtilClient::getEncodeParam($logstore);
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
     * @param string             $project
     * @param string             $logstore
     * @param string             $shardID
     * @param MergeShardsRequest $request
     *
     * @return MergeShardsResponse
     */
    public function mergeShards($project, $logstore, $shardID, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->mergeShardsWithOptions($project, $logstore, $shardID, $request, $headers, $runtime);
    }

    /**
     * @param string             $project
     * @param string             $logstore
     * @param string             $shardID
     * @param MergeShardsRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return MergeShardsResponse
     */
    public function mergeShardsWithOptions($project, $logstore, $shardID, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $hostMap            = [];
        $hostMap['project'] = $project;
        $logstore           = OpenApiUtilClient::getEncodeParam($logstore);
        $shardID            = OpenApiUtilClient::getEncodeParam($shardID);
        $query              = [];
        if (!Utils::isUnset($request->action)) {
            $query['action'] = $request->action;
        }
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'MergeShards',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/logstores/' . $logstore . '/shards/' . $shardID . '',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'array',
        ]);

        return MergeShardsResponse::fromMap($this->execute($params, $req, $runtime));
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
        $machineGroup       = OpenApiUtilClient::getEncodeParam($machineGroup);
        $configName         = OpenApiUtilClient::getEncodeParam($configName);
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
     * @param string            $project
     * @param string            $logstore
     * @param string            $shardID
     * @param SplitShardRequest $request
     *
     * @return SplitShardResponse
     */
    public function splitShard($project, $logstore, $shardID, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->splitShardWithOptions($project, $logstore, $shardID, $request, $headers, $runtime);
    }

    /**
     * @param string            $project
     * @param string            $logstore
     * @param string            $shardID
     * @param SplitShardRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return SplitShardResponse
     */
    public function splitShardWithOptions($project, $logstore, $shardID, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $hostMap            = [];
        $hostMap['project'] = $project;
        $logstore           = OpenApiUtilClient::getEncodeParam($logstore);
        $shardID            = OpenApiUtilClient::getEncodeParam($shardID);
        $query              = [];
        if (!Utils::isUnset($request->action)) {
            $query['action'] = $request->action;
        }
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
            'pathname'    => '/logstores/' . $logstore . '/shards/' . $shardID . '',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'array',
        ]);

        return SplitShardResponse::fromMap($this->execute($params, $req, $runtime));
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
     * @param UnTagResourcesRequest $request
     *
     * @return UnTagResourcesResponse
     */
    public function unTagResources($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->unTagResourcesWithOptions($request, $headers, $runtime);
    }

    /**
     * @param UnTagResourcesRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return UnTagResourcesResponse
     */
    public function unTagResourcesWithOptions($request, $headers, $runtime)
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
            'action'      => 'UnTagResources',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/untag',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return UnTagResourcesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param string                  $project
     * @param string                  $logstore
     * @param string                  $consumerGroup
     * @param UpdateCheckPointRequest $request
     *
     * @return UpdateCheckPointResponse
     */
    public function updateCheckPoint($project, $logstore, $consumerGroup, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateCheckPointWithOptions($project, $logstore, $consumerGroup, $request, $headers, $runtime);
    }

    /**
     * @param string                  $project
     * @param string                  $logstore
     * @param string                  $consumerGroup
     * @param UpdateCheckPointRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return UpdateCheckPointResponse
     */
    public function updateCheckPointWithOptions($project, $logstore, $consumerGroup, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $hostMap            = [];
        $hostMap['project'] = $project;
        $logstore           = OpenApiUtilClient::getEncodeParam($logstore);
        $consumerGroup      = OpenApiUtilClient::getEncodeParam($consumerGroup);
        $query              = [];
        if (!Utils::isUnset($request->consumer)) {
            $query['consumer'] = $request->consumer;
        }
        if (!Utils::isUnset($request->forceSuccess)) {
            $query['forceSuccess'] = $request->forceSuccess;
        }
        if (!Utils::isUnset($request->type)) {
            $query['type'] = $request->type;
        }
        $body = [];
        if (!Utils::isUnset($request->checkpoint)) {
            $body['checkpoint'] = $request->checkpoint;
        }
        if (!Utils::isUnset($request->shard)) {
            $body['shard'] = $request->shard;
        }
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateCheckPoint',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/logstores/' . $logstore . '/consumergroups/' . $consumerGroup . '',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return UpdateCheckPointResponse::fromMap($this->execute($params, $req, $runtime));
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
        $logstore           = OpenApiUtilClient::getEncodeParam($logstore);
        $consumerGroup      = OpenApiUtilClient::getEncodeParam($consumerGroup);
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
     * @param string               $project
     * @param UpdateEtlMetaRequest $request
     *
     * @return UpdateEtlMetaResponse
     */
    public function updateEtlMeta($project, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateEtlMetaWithOptions($project, $request, $headers, $runtime);
    }

    /**
     * @param string               $project
     * @param UpdateEtlMetaRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return UpdateEtlMetaResponse
     */
    public function updateEtlMetaWithOptions($project, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $hostMap            = [];
        $hostMap['project'] = $project;
        $body               = [];
        if (!Utils::isUnset($request->enable)) {
            $body['enable'] = $request->enable;
        }
        if (!Utils::isUnset($request->etlMetaKey)) {
            $body['etlMetaKey'] = $request->etlMetaKey;
        }
        if (!Utils::isUnset($request->etlMetaName)) {
            $body['etlMetaName'] = $request->etlMetaName;
        }
        if (!Utils::isUnset($request->etlMetaTag)) {
            $body['etlMetaTag'] = $request->etlMetaTag;
        }
        if (!Utils::isUnset($request->etlMetaValue)) {
            $body['etlMetaValue'] = $request->etlMetaValue;
        }
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateEtlMeta',
            'version'     => '2020-12-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/etlmetas',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return UpdateEtlMetaResponse::fromMap($this->execute($params, $req, $runtime));
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
        $logstore           = OpenApiUtilClient::getEncodeParam($logstore);
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
        $logstore           = OpenApiUtilClient::getEncodeParam($logstore);
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
        $groupName          = OpenApiUtilClient::getEncodeParam($groupName);
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
     * @param string               $project
     * @param UpdateProjectRequest $request
     *
     * @return UpdateProjectResponse
     */
    public function updateProject($project, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateProjectWithOptions($project, $request, $headers, $runtime);
    }

    /**
     * @param string               $project
     * @param UpdateProjectRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return UpdateProjectResponse
     */
    public function updateProjectWithOptions($project, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $hostMap            = [];
        $hostMap['project'] = $project;
        $body               = [];
        if (!Utils::isUnset($request->description)) {
            $body['description'] = $request->description;
        }
        $req = new OpenApiRequest([
            'hostMap' => $hostMap,
            'headers' => $headers,
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
        $savedsearchName    = OpenApiUtilClient::getEncodeParam($savedsearchName);
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
}
