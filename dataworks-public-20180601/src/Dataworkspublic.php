<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20180601;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Dataworkspublic\V20180601\Models\CheckCallbackRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20180601\Models\CheckCallbackResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20180601\Models\CreateManualDagRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20180601\Models\CreateManualDagResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20180601\Models\DeleteFileRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20180601\Models\DeleteFileResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20180601\Models\DescribeEmrHiveTableRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20180601\Models\DescribeEmrHiveTableResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20180601\Models\GetDataServiceApiContextRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20180601\Models\GetDataServiceApiContextResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20180601\Models\GetDataServiceContextUpdateEventResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20180601\Models\GetSwitchValueRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20180601\Models\GetSwitchValueResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20180601\Models\ListEmrHiveAuditLogsRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20180601\Models\ListEmrHiveAuditLogsResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20180601\Models\ListEmrHiveDatabasesRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20180601\Models\ListEmrHiveDatabasesResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20180601\Models\ListEmrHiveTablesRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20180601\Models\ListEmrHiveTablesResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20180601\Models\ListGovernanceIssueDataServiceAPIsRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20180601\Models\ListGovernanceIssueDataServiceAPIsResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20180601\Models\ListGovernanceIssueTablesRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20180601\Models\ListGovernanceIssueTablesResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20180601\Models\ListGovernanceIssueTasksRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20180601\Models\ListGovernanceIssueTasksResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20180601\Models\ListGovernanceRulesRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20180601\Models\ListGovernanceRulesResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20180601\Models\ListHiveColumnLineagesRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20180601\Models\ListHiveColumnLineagesResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20180601\Models\ListHiveTableLineagesRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20180601\Models\ListHiveTableLineagesResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20180601\Models\ListTablePartitionsRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20180601\Models\ListTablePartitionsResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20180601\Models\OpenDataWorksStandardServiceRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20180601\Models\OpenDataWorksStandardServiceResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20180601\Models\SearchManualDagNodeInstanceRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20180601\Models\SearchManualDagNodeInstanceResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20180601\Models\SendTaskMetaCallbackRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20180601\Models\SendTaskMetaCallbackResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20180601\Models\SetSwitchValueRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20180601\Models\SetSwitchValueResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20180601\Models\StartCheckQualityRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20180601\Models\StartCheckQualityResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20180601\Models\StartCollectQualityRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20180601\Models\StartCollectQualityResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20180601\Models\StartDoCheckQualityRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20180601\Models\StartDoCheckQualityResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20180601\Models\StartTaskQualityRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20180601\Models\StartTaskQualityResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20180601\Models\StopCollectQualityRequest;
use AlibabaCloud\SDK\Dataworkspublic\V20180601\Models\StopCollectQualityResponse;
use AlibabaCloud\SDK\Dataworkspublic\V20180601\Models\TriggerDataLoaderResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Dataworkspublic extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap  = [
            'ap-northeast-1'        => 'dataworks.ap-northeast-1.aliyuncs.com',
            'ap-south-1'            => 'dataworks.ap-south-1.aliyuncs.com',
            'ap-southeast-1'        => 'dataworks.ap-southeast-1.aliyuncs.com',
            'ap-southeast-2'        => 'dataworks.ap-southeast-2.aliyuncs.com',
            'ap-southeast-3'        => 'dataworks.ap-southeast-3.aliyuncs.com',
            'ap-southeast-5'        => 'dataworks.ap-southeast-5.aliyuncs.com',
            'cn-beijing'            => 'dataworks.cn-beijing.aliyuncs.com',
            'cn-chengdu'            => 'dataworks.cn-chengdu.aliyuncs.com',
            'cn-hangzhou'           => 'dataworks.cn-hangzhou.aliyuncs.com',
            'cn-hongkong'           => 'dataworks.cn-hongkong.aliyuncs.com',
            'cn-huhehaote'          => 'dataworks.aliyuncs.com',
            'cn-qingdao'            => 'dataworks.aliyuncs.com',
            'cn-shanghai'           => 'dataworks.cn-shanghai.aliyuncs.com',
            'cn-shenzhen'           => 'dataworks.cn-shenzhen.aliyuncs.com',
            'cn-zhangjiakou'        => 'dataworks.aliyuncs.com',
            'eu-central-1'          => 'dataworks.eu-central-1.aliyuncs.com',
            'eu-west-1'             => 'dataworks.eu-west-1.aliyuncs.com',
            'me-east-1'             => 'dataworks.me-east-1.aliyuncs.com',
            'us-east-1'             => 'dataworks.us-east-1.aliyuncs.com',
            'us-west-1'             => 'dataworks.us-west-1.aliyuncs.com',
            'cn-hangzhou-finance'   => 'dataworks.aliyuncs.com',
            'cn-shenzhen-finance-1' => 'dataworks.aliyuncs.com',
            'cn-shanghai-finance-1' => 'dataworks.aliyuncs.com',
            'cn-north-2-gov-1'      => 'dataworks.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('dataworks-public', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param CheckCallbackRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return CheckCallbackResponse
     */
    public function checkCallbackWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->callbackResultString)) {
            $body['CallbackResultString'] = $request->callbackResultString;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CheckCallback',
            'version'     => '2018-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CheckCallbackResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CheckCallbackRequest $request
     *
     * @return CheckCallbackResponse
     */
    public function checkCallback($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkCallbackWithOptions($request, $runtime);
    }

    /**
     * @param CreateManualDagRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CreateManualDagResponse
     */
    public function createManualDagWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bizdate)) {
            $query['Bizdate'] = $request->bizdate;
        }
        if (!Utils::isUnset($request->dagPara)) {
            $query['DagPara'] = $request->dagPara;
        }
        if (!Utils::isUnset($request->flowName)) {
            $query['FlowName'] = $request->flowName;
        }
        if (!Utils::isUnset($request->nodePara)) {
            $query['NodePara'] = $request->nodePara;
        }
        if (!Utils::isUnset($request->projectName)) {
            $query['ProjectName'] = $request->projectName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateManualDag',
            'version'     => '2018-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateManualDagResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateManualDagRequest $request
     *
     * @return CreateManualDagResponse
     */
    public function createManualDag($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createManualDagWithOptions($request, $runtime);
    }

    /**
     * @param DeleteFileRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return DeleteFileResponse
     */
    public function deleteFileWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->fileId)) {
            $body['FileId'] = $request->fileId;
        }
        if (!Utils::isUnset($request->projectId)) {
            $body['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->projectIdentifier)) {
            $body['ProjectIdentifier'] = $request->projectIdentifier;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteFile',
            'version'     => '2018-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteFileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteFileRequest $request
     *
     * @return DeleteFileResponse
     */
    public function deleteFile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteFileWithOptions($request, $runtime);
    }

    /**
     * @param DescribeEmrHiveTableRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeEmrHiveTableResponse
     */
    public function describeEmrHiveTableWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->databaseName)) {
            $query['DatabaseName'] = $request->databaseName;
        }
        if (!Utils::isUnset($request->tableName)) {
            $query['TableName'] = $request->tableName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeEmrHiveTable',
            'version'     => '2018-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeEmrHiveTableResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeEmrHiveTableRequest $request
     *
     * @return DescribeEmrHiveTableResponse
     */
    public function describeEmrHiveTable($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEmrHiveTableWithOptions($request, $runtime);
    }

    /**
     * @param GetDataServiceApiContextRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return GetDataServiceApiContextResponse
     */
    public function getDataServiceApiContextWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetDataServiceApiContext',
            'version'     => '2018-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetDataServiceApiContextResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetDataServiceApiContextRequest $request
     *
     * @return GetDataServiceApiContextResponse
     */
    public function getDataServiceApiContext($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDataServiceApiContextWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return GetDataServiceContextUpdateEventResponse
     */
    public function getDataServiceContextUpdateEventWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'GetDataServiceContextUpdateEvent',
            'version'     => '2018-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetDataServiceContextUpdateEventResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return GetDataServiceContextUpdateEventResponse
     */
    public function getDataServiceContextUpdateEvent()
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDataServiceContextUpdateEventWithOptions($runtime);
    }

    /**
     * @param GetSwitchValueRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return GetSwitchValueResponse
     */
    public function getSwitchValueWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->switchName)) {
            $query['SwitchName'] = $request->switchName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetSwitchValue',
            'version'     => '2018-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetSwitchValueResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetSwitchValueRequest $request
     *
     * @return GetSwitchValueResponse
     */
    public function getSwitchValue($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSwitchValueWithOptions($request, $runtime);
    }

    /**
     * @param ListEmrHiveAuditLogsRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ListEmrHiveAuditLogsResponse
     */
    public function listEmrHiveAuditLogsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->databaseName)) {
            $query['DatabaseName'] = $request->databaseName;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->tableName)) {
            $query['TableName'] = $request->tableName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListEmrHiveAuditLogs',
            'version'     => '2018-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListEmrHiveAuditLogsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListEmrHiveAuditLogsRequest $request
     *
     * @return ListEmrHiveAuditLogsResponse
     */
    public function listEmrHiveAuditLogs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listEmrHiveAuditLogsWithOptions($request, $runtime);
    }

    /**
     * @param ListEmrHiveDatabasesRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ListEmrHiveDatabasesResponse
     */
    public function listEmrHiveDatabasesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListEmrHiveDatabases',
            'version'     => '2018-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListEmrHiveDatabasesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListEmrHiveDatabasesRequest $request
     *
     * @return ListEmrHiveDatabasesResponse
     */
    public function listEmrHiveDatabases($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listEmrHiveDatabasesWithOptions($request, $runtime);
    }

    /**
     * @param ListEmrHiveTablesRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ListEmrHiveTablesResponse
     */
    public function listEmrHiveTablesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->databaseName)) {
            $query['DatabaseName'] = $request->databaseName;
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
            'action'      => 'ListEmrHiveTables',
            'version'     => '2018-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListEmrHiveTablesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListEmrHiveTablesRequest $request
     *
     * @return ListEmrHiveTablesResponse
     */
    public function listEmrHiveTables($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listEmrHiveTablesWithOptions($request, $runtime);
    }

    /**
     * @param ListGovernanceIssueDataServiceAPIsRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return ListGovernanceIssueDataServiceAPIsResponse
     */
    public function listGovernanceIssueDataServiceAPIsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->bizDate)) {
            $body['BizDate'] = $request->bizDate;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $body['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $body['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->projectId)) {
            $body['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->ruleCategory)) {
            $body['RuleCategory'] = $request->ruleCategory;
        }
        if (!Utils::isUnset($request->ruleId)) {
            $body['RuleId'] = $request->ruleId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListGovernanceIssueDataServiceAPIs',
            'version'     => '2018-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListGovernanceIssueDataServiceAPIsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListGovernanceIssueDataServiceAPIsRequest $request
     *
     * @return ListGovernanceIssueDataServiceAPIsResponse
     */
    public function listGovernanceIssueDataServiceAPIs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listGovernanceIssueDataServiceAPIsWithOptions($request, $runtime);
    }

    /**
     * @param ListGovernanceIssueTablesRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ListGovernanceIssueTablesResponse
     */
    public function listGovernanceIssueTablesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->bizDate)) {
            $body['BizDate'] = $request->bizDate;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $body['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $body['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->projectId)) {
            $body['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->ruleCategory)) {
            $body['RuleCategory'] = $request->ruleCategory;
        }
        if (!Utils::isUnset($request->ruleId)) {
            $body['RuleId'] = $request->ruleId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListGovernanceIssueTables',
            'version'     => '2018-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListGovernanceIssueTablesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListGovernanceIssueTablesRequest $request
     *
     * @return ListGovernanceIssueTablesResponse
     */
    public function listGovernanceIssueTables($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listGovernanceIssueTablesWithOptions($request, $runtime);
    }

    /**
     * @param ListGovernanceIssueTasksRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ListGovernanceIssueTasksResponse
     */
    public function listGovernanceIssueTasksWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->bizDate)) {
            $body['BizDate'] = $request->bizDate;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $body['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $body['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->projectId)) {
            $body['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->ruleCategory)) {
            $body['RuleCategory'] = $request->ruleCategory;
        }
        if (!Utils::isUnset($request->ruleId)) {
            $body['RuleId'] = $request->ruleId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListGovernanceIssueTasks',
            'version'     => '2018-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListGovernanceIssueTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListGovernanceIssueTasksRequest $request
     *
     * @return ListGovernanceIssueTasksResponse
     */
    public function listGovernanceIssueTasks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listGovernanceIssueTasksWithOptions($request, $runtime);
    }

    /**
     * @param ListGovernanceRulesRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ListGovernanceRulesResponse
     */
    public function listGovernanceRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->category)) {
            $body['Category'] = $request->category;
        }
        if (!Utils::isUnset($request->issueType)) {
            $body['IssueType'] = $request->issueType;
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
            'action'      => 'ListGovernanceRules',
            'version'     => '2018-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListGovernanceRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListGovernanceRulesRequest $request
     *
     * @return ListGovernanceRulesResponse
     */
    public function listGovernanceRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listGovernanceRulesWithOptions($request, $runtime);
    }

    /**
     * @param ListHiveColumnLineagesRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ListHiveColumnLineagesResponse
     */
    public function listHiveColumnLineagesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->columnName)) {
            $query['ColumnName'] = $request->columnName;
        }
        if (!Utils::isUnset($request->databaseName)) {
            $query['DatabaseName'] = $request->databaseName;
        }
        if (!Utils::isUnset($request->tableName)) {
            $query['TableName'] = $request->tableName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListHiveColumnLineages',
            'version'     => '2018-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListHiveColumnLineagesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListHiveColumnLineagesRequest $request
     *
     * @return ListHiveColumnLineagesResponse
     */
    public function listHiveColumnLineages($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listHiveColumnLineagesWithOptions($request, $runtime);
    }

    /**
     * @param ListHiveTableLineagesRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ListHiveTableLineagesResponse
     */
    public function listHiveTableLineagesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->databaseName)) {
            $query['DatabaseName'] = $request->databaseName;
        }
        if (!Utils::isUnset($request->tableName)) {
            $query['TableName'] = $request->tableName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListHiveTableLineages',
            'version'     => '2018-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListHiveTableLineagesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListHiveTableLineagesRequest $request
     *
     * @return ListHiveTableLineagesResponse
     */
    public function listHiveTableLineages($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listHiveTableLineagesWithOptions($request, $runtime);
    }

    /**
     * @param ListTablePartitionsRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ListTablePartitionsResponse
     */
    public function listTablePartitionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->databaseName)) {
            $query['DatabaseName'] = $request->databaseName;
        }
        if (!Utils::isUnset($request->order)) {
            $query['Order'] = $request->order;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->tableName)) {
            $query['TableName'] = $request->tableName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListTablePartitions',
            'version'     => '2018-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListTablePartitionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListTablePartitionsRequest $request
     *
     * @return ListTablePartitionsResponse
     */
    public function listTablePartitions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTablePartitionsWithOptions($request, $runtime);
    }

    /**
     * @param OpenDataWorksStandardServiceRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return OpenDataWorksStandardServiceResponse
     */
    public function openDataWorksStandardServiceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->region)) {
            $query['Region'] = $request->region;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'OpenDataWorksStandardService',
            'version'     => '2018-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return OpenDataWorksStandardServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param OpenDataWorksStandardServiceRequest $request
     *
     * @return OpenDataWorksStandardServiceResponse
     */
    public function openDataWorksStandardService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->openDataWorksStandardServiceWithOptions($request, $runtime);
    }

    /**
     * @param SearchManualDagNodeInstanceRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return SearchManualDagNodeInstanceResponse
     */
    public function searchManualDagNodeInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dagId)) {
            $query['DagId'] = $request->dagId;
        }
        if (!Utils::isUnset($request->projectName)) {
            $query['ProjectName'] = $request->projectName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SearchManualDagNodeInstance',
            'version'     => '2018-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SearchManualDagNodeInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SearchManualDagNodeInstanceRequest $request
     *
     * @return SearchManualDagNodeInstanceResponse
     */
    public function searchManualDagNodeInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->searchManualDagNodeInstanceWithOptions($request, $runtime);
    }

    /**
     * @param SendTaskMetaCallbackRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return SendTaskMetaCallbackResponse
     */
    public function sendTaskMetaCallbackWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->code)) {
            $body['Code'] = $request->code;
        }
        if (!Utils::isUnset($request->connectionInfo)) {
            $body['ConnectionInfo'] = $request->connectionInfo;
        }
        if (!Utils::isUnset($request->endTime)) {
            $body['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->resources)) {
            $body['Resources'] = $request->resources;
        }
        if (!Utils::isUnset($request->startTime)) {
            $body['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->subType)) {
            $body['SubType'] = $request->subType;
        }
        if (!Utils::isUnset($request->taskEnvParam)) {
            $body['TaskEnvParam'] = $request->taskEnvParam;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        if (!Utils::isUnset($request->type)) {
            $body['Type'] = $request->type;
        }
        if (!Utils::isUnset($request->user)) {
            $body['User'] = $request->user;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'SendTaskMetaCallback',
            'version'     => '2018-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SendTaskMetaCallbackResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SendTaskMetaCallbackRequest $request
     *
     * @return SendTaskMetaCallbackResponse
     */
    public function sendTaskMetaCallback($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->sendTaskMetaCallbackWithOptions($request, $runtime);
    }

    /**
     * @param SetSwitchValueRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return SetSwitchValueResponse
     */
    public function setSwitchValueWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->switchName)) {
            $query['SwitchName'] = $request->switchName;
        }
        if (!Utils::isUnset($request->switchValue)) {
            $query['SwitchValue'] = $request->switchValue;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetSwitchValue',
            'version'     => '2018-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetSwitchValueResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SetSwitchValueRequest $request
     *
     * @return SetSwitchValueResponse
     */
    public function setSwitchValue($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setSwitchValueWithOptions($request, $runtime);
    }

    /**
     * @param StartCheckQualityRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return StartCheckQualityResponse
     */
    public function startCheckQualityWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->callbackResultString)) {
            $body['CallbackResultString'] = $request->callbackResultString;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'StartCheckQuality',
            'version'     => '2018-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StartCheckQualityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param StartCheckQualityRequest $request
     *
     * @return StartCheckQualityResponse
     */
    public function startCheckQuality($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startCheckQualityWithOptions($request, $runtime);
    }

    /**
     * @param StartCollectQualityRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return StartCollectQualityResponse
     */
    public function startCollectQualityWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->callbackResultString)) {
            $body['CallbackResultString'] = $request->callbackResultString;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'StartCollectQuality',
            'version'     => '2018-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StartCollectQualityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param StartCollectQualityRequest $request
     *
     * @return StartCollectQualityResponse
     */
    public function startCollectQuality($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startCollectQualityWithOptions($request, $runtime);
    }

    /**
     * @param StartDoCheckQualityRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return StartDoCheckQualityResponse
     */
    public function startDoCheckQualityWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->callbackResultString)) {
            $body['CallbackResultString'] = $request->callbackResultString;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'StartDoCheckQuality',
            'version'     => '2018-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StartDoCheckQualityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param StartDoCheckQualityRequest $request
     *
     * @return StartDoCheckQualityResponse
     */
    public function startDoCheckQuality($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startDoCheckQualityWithOptions($request, $runtime);
    }

    /**
     * @param StartTaskQualityRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return StartTaskQualityResponse
     */
    public function startTaskQualityWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->callbackResultString)) {
            $body['CallbackResultString'] = $request->callbackResultString;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'StartTaskQuality',
            'version'     => '2018-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StartTaskQualityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param StartTaskQualityRequest $request
     *
     * @return StartTaskQualityResponse
     */
    public function startTaskQuality($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startTaskQualityWithOptions($request, $runtime);
    }

    /**
     * @param StopCollectQualityRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return StopCollectQualityResponse
     */
    public function stopCollectQualityWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->callbackResultString)) {
            $body['CallbackResultString'] = $request->callbackResultString;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'StopCollectQuality',
            'version'     => '2018-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StopCollectQualityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param StopCollectQualityRequest $request
     *
     * @return StopCollectQualityResponse
     */
    public function stopCollectQuality($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopCollectQualityWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return TriggerDataLoaderResponse
     */
    public function triggerDataLoaderWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'TriggerDataLoader',
            'version'     => '2018-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return TriggerDataLoaderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return TriggerDataLoaderResponse
     */
    public function triggerDataLoader()
    {
        $runtime = new RuntimeOptions([]);

        return $this->triggerDataLoaderWithOptions($runtime);
    }
}
