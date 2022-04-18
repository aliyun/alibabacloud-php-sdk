<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20190103;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Sddp\V20190103\Models\CreateConfigRequest;
use AlibabaCloud\SDK\Sddp\V20190103\Models\CreateConfigResponse;
use AlibabaCloud\SDK\Sddp\V20190103\Models\CreateDataLimitRequest;
use AlibabaCloud\SDK\Sddp\V20190103\Models\CreateDataLimitResponse;
use AlibabaCloud\SDK\Sddp\V20190103\Models\CreateRuleRequest;
use AlibabaCloud\SDK\Sddp\V20190103\Models\CreateRuleResponse;
use AlibabaCloud\SDK\Sddp\V20190103\Models\CreateScanTaskRequest;
use AlibabaCloud\SDK\Sddp\V20190103\Models\CreateScanTaskResponse;
use AlibabaCloud\SDK\Sddp\V20190103\Models\CreateSlrRoleRequest;
use AlibabaCloud\SDK\Sddp\V20190103\Models\CreateSlrRoleResponse;
use AlibabaCloud\SDK\Sddp\V20190103\Models\DeleteDataLimitRequest;
use AlibabaCloud\SDK\Sddp\V20190103\Models\DeleteDataLimitResponse;
use AlibabaCloud\SDK\Sddp\V20190103\Models\DeleteRuleRequest;
use AlibabaCloud\SDK\Sddp\V20190103\Models\DeleteRuleResponse;
use AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeCategoryTemplateRuleListRequest;
use AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeCategoryTemplateRuleListResponse;
use AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeColumnsRequest;
use AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeColumnsResponse;
use AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeConfigsRequest;
use AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeConfigsResponse;
use AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeDataAssetsRequest;
use AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeDataAssetsResponse;
use AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeDataLimitDetailRequest;
use AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeDataLimitDetailResponse;
use AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeDataLimitSetRequest;
use AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeDataLimitSetResponse;
use AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeDataLimitsRequest;
use AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeDataLimitsResponse;
use AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeDataMaskingRunHistoryRequest;
use AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeDataMaskingRunHistoryResponse;
use AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeDataMaskingTasksRequest;
use AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeDataMaskingTasksResponse;
use AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeEventDetailRequest;
use AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeEventDetailResponse;
use AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeEventsRequest;
use AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeEventsResponse;
use AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeEventTypesRequest;
use AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeEventTypesResponse;
use AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeInstanceSourcesRequest;
use AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeInstanceSourcesResponse;
use AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeInstancesRequest;
use AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeInstancesResponse;
use AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeOssObjectDetailRequest;
use AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeOssObjectDetailResponse;
use AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeOssObjectsRequest;
use AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeOssObjectsResponse;
use AlibabaCloud\SDK\Sddp\V20190103\Models\DescribePackagesRequest;
use AlibabaCloud\SDK\Sddp\V20190103\Models\DescribePackagesResponse;
use AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeRiskLevelsRequest;
use AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeRiskLevelsResponse;
use AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeRulesRequest;
use AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeRulesResponse;
use AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeTablesRequest;
use AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeTablesResponse;
use AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeUserStatusRequest;
use AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeUserStatusResponse;
use AlibabaCloud\SDK\Sddp\V20190103\Models\DisableUserConfigRequest;
use AlibabaCloud\SDK\Sddp\V20190103\Models\DisableUserConfigResponse;
use AlibabaCloud\SDK\Sddp\V20190103\Models\ExecDatamaskRequest;
use AlibabaCloud\SDK\Sddp\V20190103\Models\ExecDatamaskResponse;
use AlibabaCloud\SDK\Sddp\V20190103\Models\ManualTriggerMaskingProcessRequest;
use AlibabaCloud\SDK\Sddp\V20190103\Models\ManualTriggerMaskingProcessResponse;
use AlibabaCloud\SDK\Sddp\V20190103\Models\ModifyDataLimitRequest;
use AlibabaCloud\SDK\Sddp\V20190103\Models\ModifyDataLimitResponse;
use AlibabaCloud\SDK\Sddp\V20190103\Models\ModifyDefaultLevelRequest;
use AlibabaCloud\SDK\Sddp\V20190103\Models\ModifyDefaultLevelResponse;
use AlibabaCloud\SDK\Sddp\V20190103\Models\ModifyEventStatusRequest;
use AlibabaCloud\SDK\Sddp\V20190103\Models\ModifyEventStatusResponse;
use AlibabaCloud\SDK\Sddp\V20190103\Models\ModifyEventTypeStatusRequest;
use AlibabaCloud\SDK\Sddp\V20190103\Models\ModifyEventTypeStatusResponse;
use AlibabaCloud\SDK\Sddp\V20190103\Models\ModifyReportTaskStatusRequest;
use AlibabaCloud\SDK\Sddp\V20190103\Models\ModifyReportTaskStatusResponse;
use AlibabaCloud\SDK\Sddp\V20190103\Models\ModifyRuleRequest;
use AlibabaCloud\SDK\Sddp\V20190103\Models\ModifyRuleResponse;
use AlibabaCloud\SDK\Sddp\V20190103\Models\ModifyRuleStatusRequest;
use AlibabaCloud\SDK\Sddp\V20190103\Models\ModifyRuleStatusResponse;
use AlibabaCloud\SDK\Sddp\V20190103\Models\StopMaskingProcessRequest;
use AlibabaCloud\SDK\Sddp\V20190103\Models\StopMaskingProcessResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Sddp extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap  = [
            'cn-hongkong' => 'sddp-api.cn-hongkong.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('sddp', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param CreateConfigRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return CreateConfigResponse
     */
    public function createConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->code)) {
            $query['Code'] = $request->code;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->value)) {
            $query['Value'] = $request->value;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateConfig',
            'version'     => '2019-01-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateConfigRequest $request
     *
     * @return CreateConfigResponse
     */
    public function createConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createConfigWithOptions($request, $runtime);
    }

    /**
     * @param CreateDataLimitRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CreateDataLimitResponse
     */
    public function createDataLimitWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->auditStatus)) {
            $query['AuditStatus'] = $request->auditStatus;
        }
        if (!Utils::isUnset($request->autoScan)) {
            $query['AutoScan'] = $request->autoScan;
        }
        if (!Utils::isUnset($request->engineType)) {
            $query['EngineType'] = $request->engineType;
        }
        if (!Utils::isUnset($request->eventStatus)) {
            $query['EventStatus'] = $request->eventStatus;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->logStoreDay)) {
            $query['LogStoreDay'] = $request->logStoreDay;
        }
        if (!Utils::isUnset($request->ocrStatus)) {
            $query['OcrStatus'] = $request->ocrStatus;
        }
        if (!Utils::isUnset($request->parentId)) {
            $query['ParentId'] = $request->parentId;
        }
        if (!Utils::isUnset($request->password)) {
            $query['Password'] = $request->password;
        }
        if (!Utils::isUnset($request->port)) {
            $query['Port'] = $request->port;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->serviceRegionId)) {
            $query['ServiceRegionId'] = $request->serviceRegionId;
        }
        if (!Utils::isUnset($request->userName)) {
            $query['UserName'] = $request->userName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateDataLimit',
            'version'     => '2019-01-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateDataLimitResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateDataLimitRequest $request
     *
     * @return CreateDataLimitResponse
     */
    public function createDataLimit($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDataLimitWithOptions($request, $runtime);
    }

    /**
     * @param CreateRuleRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return CreateRuleResponse
     */
    public function createRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->category)) {
            $query['Category'] = $request->category;
        }
        if (!Utils::isUnset($request->content)) {
            $query['Content'] = $request->content;
        }
        if (!Utils::isUnset($request->contentCategory)) {
            $query['ContentCategory'] = $request->contentCategory;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->productCode)) {
            $query['ProductCode'] = $request->productCode;
        }
        if (!Utils::isUnset($request->productId)) {
            $query['ProductId'] = $request->productId;
        }
        if (!Utils::isUnset($request->riskLevelId)) {
            $query['RiskLevelId'] = $request->riskLevelId;
        }
        if (!Utils::isUnset($request->ruleType)) {
            $query['RuleType'] = $request->ruleType;
        }
        if (!Utils::isUnset($request->statExpress)) {
            $query['StatExpress'] = $request->statExpress;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->target)) {
            $query['Target'] = $request->target;
        }
        if (!Utils::isUnset($request->warnLevel)) {
            $query['WarnLevel'] = $request->warnLevel;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateRule',
            'version'     => '2019-01-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateRuleRequest $request
     *
     * @return CreateRuleResponse
     */
    public function createRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createRuleWithOptions($request, $runtime);
    }

    /**
     * @param CreateScanTaskRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CreateScanTaskResponse
     */
    public function createScanTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dataLimitId)) {
            $query['DataLimitId'] = $request->dataLimitId;
        }
        if (!Utils::isUnset($request->intervalDay)) {
            $query['IntervalDay'] = $request->intervalDay;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->ossScanPath)) {
            $query['OssScanPath'] = $request->ossScanPath;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->runHour)) {
            $query['RunHour'] = $request->runHour;
        }
        if (!Utils::isUnset($request->runMinute)) {
            $query['RunMinute'] = $request->runMinute;
        }
        if (!Utils::isUnset($request->scanRange)) {
            $query['ScanRange'] = $request->scanRange;
        }
        if (!Utils::isUnset($request->scanRangeContent)) {
            $query['ScanRangeContent'] = $request->scanRangeContent;
        }
        if (!Utils::isUnset($request->taskName)) {
            $query['TaskName'] = $request->taskName;
        }
        if (!Utils::isUnset($request->taskUserName)) {
            $query['TaskUserName'] = $request->taskUserName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateScanTask',
            'version'     => '2019-01-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateScanTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateScanTaskRequest $request
     *
     * @return CreateScanTaskResponse
     */
    public function createScanTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createScanTaskWithOptions($request, $runtime);
    }

    /**
     * @param CreateSlrRoleRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return CreateSlrRoleResponse
     */
    public function createSlrRoleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateSlrRole',
            'version'     => '2019-01-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateSlrRoleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateSlrRoleRequest $request
     *
     * @return CreateSlrRoleResponse
     */
    public function createSlrRole($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSlrRoleWithOptions($request, $runtime);
    }

    /**
     * @param DeleteDataLimitRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteDataLimitResponse
     */
    public function deleteDataLimitWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteDataLimit',
            'version'     => '2019-01-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteDataLimitResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteDataLimitRequest $request
     *
     * @return DeleteDataLimitResponse
     */
    public function deleteDataLimit($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDataLimitWithOptions($request, $runtime);
    }

    /**
     * @param DeleteRuleRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return DeleteRuleResponse
     */
    public function deleteRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteRule',
            'version'     => '2019-01-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteRuleRequest $request
     *
     * @return DeleteRuleResponse
     */
    public function deleteRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteRuleWithOptions($request, $runtime);
    }

    /**
     * @param DescribeCategoryTemplateRuleListRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return DescribeCategoryTemplateRuleListResponse
     */
    public function describeCategoryTemplateRuleListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->riskLevelId)) {
            $query['RiskLevelId'] = $request->riskLevelId;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeCategoryTemplateRuleList',
            'version'     => '2019-01-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeCategoryTemplateRuleListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeCategoryTemplateRuleListRequest $request
     *
     * @return DescribeCategoryTemplateRuleListResponse
     */
    public function describeCategoryTemplateRuleList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCategoryTemplateRuleListWithOptions($request, $runtime);
    }

    /**
     * @param DescribeColumnsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeColumnsResponse
     */
    public function describeColumnsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->instanceName)) {
            $query['InstanceName'] = $request->instanceName;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->productCode)) {
            $query['ProductCode'] = $request->productCode;
        }
        if (!Utils::isUnset($request->riskLevelId)) {
            $query['RiskLevelId'] = $request->riskLevelId;
        }
        if (!Utils::isUnset($request->ruleId)) {
            $query['RuleId'] = $request->ruleId;
        }
        if (!Utils::isUnset($request->ruleName)) {
            $query['RuleName'] = $request->ruleName;
        }
        if (!Utils::isUnset($request->sensLevelName)) {
            $query['SensLevelName'] = $request->sensLevelName;
        }
        if (!Utils::isUnset($request->tableId)) {
            $query['TableId'] = $request->tableId;
        }
        if (!Utils::isUnset($request->tableName)) {
            $query['TableName'] = $request->tableName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeColumns',
            'version'     => '2019-01-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeColumnsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeColumnsRequest $request
     *
     * @return DescribeColumnsResponse
     */
    public function describeColumns($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeColumnsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeConfigsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeConfigsResponse
     */
    public function describeConfigsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeConfigs',
            'version'     => '2019-01-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeConfigsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeConfigsRequest $request
     *
     * @return DescribeConfigsResponse
     */
    public function describeConfigs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeConfigsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDataAssetsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeDataAssetsResponse
     */
    public function describeDataAssetsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->rangeId)) {
            $query['RangeId'] = $request->rangeId;
        }
        if (!Utils::isUnset($request->riskLevels)) {
            $query['RiskLevels'] = $request->riskLevels;
        }
        if (!Utils::isUnset($request->ruleId)) {
            $query['RuleId'] = $request->ruleId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDataAssets',
            'version'     => '2019-01-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDataAssetsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDataAssetsRequest $request
     *
     * @return DescribeDataAssetsResponse
     */
    public function describeDataAssets($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDataAssetsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDataLimitDetailRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeDataLimitDetailResponse
     */
    public function describeDataLimitDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->networkType)) {
            $query['NetworkType'] = $request->networkType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDataLimitDetail',
            'version'     => '2019-01-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDataLimitDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDataLimitDetailRequest $request
     *
     * @return DescribeDataLimitDetailResponse
     */
    public function describeDataLimitDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDataLimitDetailWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDataLimitSetRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeDataLimitSetResponse
     */
    public function describeDataLimitSetWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->parentId)) {
            $query['ParentId'] = $request->parentId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDataLimitSet',
            'version'     => '2019-01-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDataLimitSetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDataLimitSetRequest $request
     *
     * @return DescribeDataLimitSetResponse
     */
    public function describeDataLimitSet($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDataLimitSetWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDataLimitsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeDataLimitsResponse
     */
    public function describeDataLimitsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->auditStatus)) {
            $query['AuditStatus'] = $request->auditStatus;
        }
        if (!Utils::isUnset($request->checkStatus)) {
            $query['CheckStatus'] = $request->checkStatus;
        }
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->datamaskStatus)) {
            $query['DatamaskStatus'] = $request->datamaskStatus;
        }
        if (!Utils::isUnset($request->enable)) {
            $query['Enable'] = $request->enable;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->engineType)) {
            $query['EngineType'] = $request->engineType;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->parentId)) {
            $query['ParentId'] = $request->parentId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->serviceRegionId)) {
            $query['ServiceRegionId'] = $request->serviceRegionId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDataLimits',
            'version'     => '2019-01-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDataLimitsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDataLimitsRequest $request
     *
     * @return DescribeDataLimitsResponse
     */
    public function describeDataLimits($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDataLimitsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDataMaskingRunHistoryRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeDataMaskingRunHistoryResponse
     */
    public function describeDataMaskingRunHistoryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->dstType)) {
            $query['DstType'] = $request->dstType;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->mainProcessId)) {
            $query['MainProcessId'] = $request->mainProcessId;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->srcTableName)) {
            $query['SrcTableName'] = $request->srcTableName;
        }
        if (!Utils::isUnset($request->srcType)) {
            $query['SrcType'] = $request->srcType;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
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
            'action'      => 'DescribeDataMaskingRunHistory',
            'version'     => '2019-01-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDataMaskingRunHistoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDataMaskingRunHistoryRequest $request
     *
     * @return DescribeDataMaskingRunHistoryResponse
     */
    public function describeDataMaskingRunHistory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDataMaskingRunHistoryWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDataMaskingTasksRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeDataMaskingTasksResponse
     */
    public function describeDataMaskingTasksWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->dstType)) {
            $query['DstType'] = $request->dstType;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->searchKey)) {
            $query['SearchKey'] = $request->searchKey;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDataMaskingTasks',
            'version'     => '2019-01-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDataMaskingTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDataMaskingTasksRequest $request
     *
     * @return DescribeDataMaskingTasksResponse
     */
    public function describeDataMaskingTasks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDataMaskingTasksWithOptions($request, $runtime);
    }

    /**
     * @param DescribeEventDetailRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeEventDetailResponse
     */
    public function describeEventDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeEventDetail',
            'version'     => '2019-01-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeEventDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeEventDetailRequest $request
     *
     * @return DescribeEventDetailResponse
     */
    public function describeEventDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEventDetailWithOptions($request, $runtime);
    }

    /**
     * @param DescribeEventTypesRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeEventTypesResponse
     */
    public function describeEventTypesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->parentTypeId)) {
            $query['ParentTypeId'] = $request->parentTypeId;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeEventTypes',
            'version'     => '2019-01-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeEventTypesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeEventTypesRequest $request
     *
     * @return DescribeEventTypesResponse
     */
    public function describeEventTypes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEventTypesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeEventsRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DescribeEventsResponse
     */
    public function describeEventsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->dealUserId)) {
            $query['DealUserId'] = $request->dealUserId;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->instanceName)) {
            $query['InstanceName'] = $request->instanceName;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->productCode)) {
            $query['ProductCode'] = $request->productCode;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->subTypeCode)) {
            $query['SubTypeCode'] = $request->subTypeCode;
        }
        if (!Utils::isUnset($request->targetProductCode)) {
            $query['TargetProductCode'] = $request->targetProductCode;
        }
        if (!Utils::isUnset($request->typeCode)) {
            $query['TypeCode'] = $request->typeCode;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        if (!Utils::isUnset($request->userName)) {
            $query['UserName'] = $request->userName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeEvents',
            'version'     => '2019-01-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeEventsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeEventsRequest $request
     *
     * @return DescribeEventsResponse
     */
    public function describeEvents($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEventsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeInstanceSourcesRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeInstanceSourcesResponse
     */
    public function describeInstanceSourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->auditStatus)) {
            $query['AuditStatus'] = $request->auditStatus;
        }
        if (!Utils::isUnset($request->authStatus)) {
            $query['AuthStatus'] = $request->authStatus;
        }
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->engineType)) {
            $query['EngineType'] = $request->engineType;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->productCode)) {
            $query['ProductCode'] = $request->productCode;
        }
        if (!Utils::isUnset($request->productId)) {
            $query['ProductId'] = $request->productId;
        }
        if (!Utils::isUnset($request->searchKey)) {
            $query['SearchKey'] = $request->searchKey;
        }
        if (!Utils::isUnset($request->searchType)) {
            $query['SearchType'] = $request->searchType;
        }
        if (!Utils::isUnset($request->serviceRegionId)) {
            $query['ServiceRegionId'] = $request->serviceRegionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeInstanceSources',
            'version'     => '2019-01-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeInstanceSourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeInstanceSourcesRequest $request
     *
     * @return DescribeInstanceSourcesResponse
     */
    public function describeInstanceSources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceSourcesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeInstancesRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeInstancesResponse
     */
    public function describeInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->featureType)) {
            $query['FeatureType'] = $request->featureType;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->productCode)) {
            $query['ProductCode'] = $request->productCode;
        }
        if (!Utils::isUnset($request->productId)) {
            $query['ProductId'] = $request->productId;
        }
        if (!Utils::isUnset($request->riskLevelId)) {
            $query['RiskLevelId'] = $request->riskLevelId;
        }
        if (!Utils::isUnset($request->ruleId)) {
            $query['RuleId'] = $request->ruleId;
        }
        if (!Utils::isUnset($request->serviceRegionId)) {
            $query['ServiceRegionId'] = $request->serviceRegionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeInstances',
            'version'     => '2019-01-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeInstancesRequest $request
     *
     * @return DescribeInstancesResponse
     */
    public function describeInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstancesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeOssObjectDetailRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeOssObjectDetailResponse
     */
    public function describeOssObjectDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeOssObjectDetail',
            'version'     => '2019-01-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeOssObjectDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeOssObjectDetailRequest $request
     *
     * @return DescribeOssObjectDetailResponse
     */
    public function describeOssObjectDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeOssObjectDetailWithOptions($request, $runtime);
    }

    /**
     * @param DescribeOssObjectsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeOssObjectsResponse
     */
    public function describeOssObjectsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->lastScanTimeEnd)) {
            $query['LastScanTimeEnd'] = $request->lastScanTimeEnd;
        }
        if (!Utils::isUnset($request->lastScanTimeStart)) {
            $query['LastScanTimeStart'] = $request->lastScanTimeStart;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->riskLevelId)) {
            $query['RiskLevelId'] = $request->riskLevelId;
        }
        if (!Utils::isUnset($request->ruleId)) {
            $query['RuleId'] = $request->ruleId;
        }
        if (!Utils::isUnset($request->serviceRegionId)) {
            $query['ServiceRegionId'] = $request->serviceRegionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeOssObjects',
            'version'     => '2019-01-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeOssObjectsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeOssObjectsRequest $request
     *
     * @return DescribeOssObjectsResponse
     */
    public function describeOssObjects($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeOssObjectsWithOptions($request, $runtime);
    }

    /**
     * @param DescribePackagesRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DescribePackagesResponse
     */
    public function describePackagesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->productId)) {
            $query['ProductId'] = $request->productId;
        }
        if (!Utils::isUnset($request->riskLevelId)) {
            $query['RiskLevelId'] = $request->riskLevelId;
        }
        if (!Utils::isUnset($request->ruleId)) {
            $query['RuleId'] = $request->ruleId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribePackages',
            'version'     => '2019-01-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribePackagesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribePackagesRequest $request
     *
     * @return DescribePackagesResponse
     */
    public function describePackages($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePackagesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeRiskLevelsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeRiskLevelsResponse
     */
    public function describeRiskLevelsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeRiskLevels',
            'version'     => '2019-01-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeRiskLevelsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeRiskLevelsRequest $request
     *
     * @return DescribeRiskLevelsResponse
     */
    public function describeRiskLevels($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRiskLevelsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeRulesRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DescribeRulesResponse
     */
    public function describeRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->category)) {
            $query['Category'] = $request->category;
        }
        if (!Utils::isUnset($request->contentCategory)) {
            $query['ContentCategory'] = $request->contentCategory;
        }
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->customType)) {
            $query['CustomType'] = $request->customType;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->keywordCompatible)) {
            $query['KeywordCompatible'] = $request->keywordCompatible;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->productCode)) {
            $query['ProductCode'] = $request->productCode;
        }
        if (!Utils::isUnset($request->productId)) {
            $query['ProductId'] = $request->productId;
        }
        if (!Utils::isUnset($request->riskLevelId)) {
            $query['RiskLevelId'] = $request->riskLevelId;
        }
        if (!Utils::isUnset($request->ruleType)) {
            $query['RuleType'] = $request->ruleType;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->warnLevel)) {
            $query['WarnLevel'] = $request->warnLevel;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeRules',
            'version'     => '2019-01-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeRulesRequest $request
     *
     * @return DescribeRulesResponse
     */
    public function describeRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRulesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeTablesRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DescribeTablesResponse
     */
    public function describeTablesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->packageId)) {
            $query['PackageId'] = $request->packageId;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->productCode)) {
            $query['ProductCode'] = $request->productCode;
        }
        if (!Utils::isUnset($request->productId)) {
            $query['ProductId'] = $request->productId;
        }
        if (!Utils::isUnset($request->riskLevelId)) {
            $query['RiskLevelId'] = $request->riskLevelId;
        }
        if (!Utils::isUnset($request->ruleId)) {
            $query['RuleId'] = $request->ruleId;
        }
        if (!Utils::isUnset($request->serviceRegionId)) {
            $query['ServiceRegionId'] = $request->serviceRegionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeTables',
            'version'     => '2019-01-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeTablesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeTablesRequest $request
     *
     * @return DescribeTablesResponse
     */
    public function describeTables($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTablesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeUserStatusRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeUserStatusResponse
     */
    public function describeUserStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeUserStatus',
            'version'     => '2019-01-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeUserStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeUserStatusRequest $request
     *
     * @return DescribeUserStatusResponse
     */
    public function describeUserStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeUserStatusWithOptions($request, $runtime);
    }

    /**
     * @param DisableUserConfigRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DisableUserConfigResponse
     */
    public function disableUserConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->code)) {
            $query['Code'] = $request->code;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DisableUserConfig',
            'version'     => '2019-01-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DisableUserConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DisableUserConfigRequest $request
     *
     * @return DisableUserConfigResponse
     */
    public function disableUserConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableUserConfigWithOptions($request, $runtime);
    }

    /**
     * @param ExecDatamaskRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ExecDatamaskResponse
     */
    public function execDatamaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->data)) {
            $query['Data'] = $request->data;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->templateId)) {
            $query['TemplateId'] = $request->templateId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ExecDatamask',
            'version'     => '2019-01-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ExecDatamaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ExecDatamaskRequest $request
     *
     * @return ExecDatamaskResponse
     */
    public function execDatamask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->execDatamaskWithOptions($request, $runtime);
    }

    /**
     * @param ManualTriggerMaskingProcessRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ManualTriggerMaskingProcessResponse
     */
    public function manualTriggerMaskingProcessWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ManualTriggerMaskingProcess',
            'version'     => '2019-01-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ManualTriggerMaskingProcessResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ManualTriggerMaskingProcessRequest $request
     *
     * @return ManualTriggerMaskingProcessResponse
     */
    public function manualTriggerMaskingProcess($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->manualTriggerMaskingProcessWithOptions($request, $runtime);
    }

    /**
     * @param ModifyDataLimitRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ModifyDataLimitResponse
     */
    public function modifyDataLimitWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->auditStatus)) {
            $query['AuditStatus'] = $request->auditStatus;
        }
        if (!Utils::isUnset($request->autoScan)) {
            $query['AutoScan'] = $request->autoScan;
        }
        if (!Utils::isUnset($request->engineType)) {
            $query['EngineType'] = $request->engineType;
        }
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->logStoreDay)) {
            $query['LogStoreDay'] = $request->logStoreDay;
        }
        if (!Utils::isUnset($request->modifyPassword)) {
            $query['ModifyPassword'] = $request->modifyPassword;
        }
        if (!Utils::isUnset($request->password)) {
            $query['Password'] = $request->password;
        }
        if (!Utils::isUnset($request->port)) {
            $query['Port'] = $request->port;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->serviceRegionId)) {
            $query['ServiceRegionId'] = $request->serviceRegionId;
        }
        if (!Utils::isUnset($request->userName)) {
            $query['UserName'] = $request->userName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyDataLimit',
            'version'     => '2019-01-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyDataLimitResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyDataLimitRequest $request
     *
     * @return ModifyDataLimitResponse
     */
    public function modifyDataLimit($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDataLimitWithOptions($request, $runtime);
    }

    /**
     * @param ModifyDefaultLevelRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ModifyDefaultLevelResponse
     */
    public function modifyDefaultLevelWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->defaultId)) {
            $query['DefaultId'] = $request->defaultId;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->sensitiveIds)) {
            $query['SensitiveIds'] = $request->sensitiveIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyDefaultLevel',
            'version'     => '2019-01-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyDefaultLevelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyDefaultLevelRequest $request
     *
     * @return ModifyDefaultLevelResponse
     */
    public function modifyDefaultLevel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDefaultLevelWithOptions($request, $runtime);
    }

    /**
     * @param ModifyEventStatusRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ModifyEventStatusResponse
     */
    public function modifyEventStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->backed)) {
            $query['Backed'] = $request->backed;
        }
        if (!Utils::isUnset($request->dealReason)) {
            $query['DealReason'] = $request->dealReason;
        }
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyEventStatus',
            'version'     => '2019-01-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyEventStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyEventStatusRequest $request
     *
     * @return ModifyEventStatusResponse
     */
    public function modifyEventStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyEventStatusWithOptions($request, $runtime);
    }

    /**
     * @param ModifyEventTypeStatusRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ModifyEventTypeStatusResponse
     */
    public function modifyEventTypeStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->subTypeIds)) {
            $query['SubTypeIds'] = $request->subTypeIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyEventTypeStatus',
            'version'     => '2019-01-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyEventTypeStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyEventTypeStatusRequest $request
     *
     * @return ModifyEventTypeStatusResponse
     */
    public function modifyEventTypeStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyEventTypeStatusWithOptions($request, $runtime);
    }

    /**
     * @param ModifyReportTaskStatusRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ModifyReportTaskStatusResponse
     */
    public function modifyReportTaskStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->reportTaskStatus)) {
            $query['ReportTaskStatus'] = $request->reportTaskStatus;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyReportTaskStatus',
            'version'     => '2019-01-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyReportTaskStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyReportTaskStatusRequest $request
     *
     * @return ModifyReportTaskStatusResponse
     */
    public function modifyReportTaskStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyReportTaskStatusWithOptions($request, $runtime);
    }

    /**
     * @param ModifyRuleRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return ModifyRuleResponse
     */
    public function modifyRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->category)) {
            $query['Category'] = $request->category;
        }
        if (!Utils::isUnset($request->content)) {
            $query['Content'] = $request->content;
        }
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->productCode)) {
            $query['ProductCode'] = $request->productCode;
        }
        if (!Utils::isUnset($request->productId)) {
            $query['ProductId'] = $request->productId;
        }
        if (!Utils::isUnset($request->riskLevelId)) {
            $query['RiskLevelId'] = $request->riskLevelId;
        }
        if (!Utils::isUnset($request->ruleType)) {
            $query['RuleType'] = $request->ruleType;
        }
        if (!Utils::isUnset($request->warnLevel)) {
            $query['WarnLevel'] = $request->warnLevel;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyRule',
            'version'     => '2019-01-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyRuleRequest $request
     *
     * @return ModifyRuleResponse
     */
    public function modifyRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyRuleWithOptions($request, $runtime);
    }

    /**
     * @param ModifyRuleStatusRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ModifyRuleStatusResponse
     */
    public function modifyRuleStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->ids)) {
            $query['Ids'] = $request->ids;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyRuleStatus',
            'version'     => '2019-01-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyRuleStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyRuleStatusRequest $request
     *
     * @return ModifyRuleStatusResponse
     */
    public function modifyRuleStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyRuleStatusWithOptions($request, $runtime);
    }

    /**
     * @param StopMaskingProcessRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return StopMaskingProcessResponse
     */
    public function stopMaskingProcessWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'StopMaskingProcess',
            'version'     => '2019-01-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StopMaskingProcessResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param StopMaskingProcessRequest $request
     *
     * @return StopMaskingProcessResponse
     */
    public function stopMaskingProcess($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopMaskingProcessWithOptions($request, $runtime);
    }
}
