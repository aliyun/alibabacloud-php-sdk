<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20190103;

use AlibabaCloud\Dara\Models\RuntimeOptions;
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
use AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeAuditLogsRequest;
use AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeAuditLogsResponse;
use AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeCategoryTemplateListRequest;
use AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeCategoryTemplateListResponse;
use AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeCategoryTemplateRuleListRequest;
use AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeCategoryTemplateRuleListResponse;
use AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeColumnsRequest;
use AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeColumnsResponse;
use AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeColumnsV2Request;
use AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeColumnsV2Response;
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
use AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeDataObjectColumnDetailRequest;
use AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeDataObjectColumnDetailResponse;
use AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeDataObjectColumnDetailV2Request;
use AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeDataObjectColumnDetailV2Response;
use AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeDataObjectsRequest;
use AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeDataObjectsResponse;
use AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeDocTypesRequest;
use AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeDocTypesResponse;
use AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeEventDetailRequest;
use AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeEventDetailResponse;
use AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeEventsRequest;
use AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeEventsResponse;
use AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeEventTypesRequest;
use AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeEventTypesResponse;
use AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeIdentifyTaskStatusRequest;
use AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeIdentifyTaskStatusResponse;
use AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeInstanceSourcesRequest;
use AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeInstanceSourcesResponse;
use AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeInstancesRequest;
use AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeInstancesResponse;
use AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeOssObjectDetailRequest;
use AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeOssObjectDetailResponse;
use AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeOssObjectDetailV2Request;
use AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeOssObjectDetailV2Response;
use AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeOssObjectsRequest;
use AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeOssObjectsResponse;
use AlibabaCloud\SDK\Sddp\V20190103\Models\DescribePackagesRequest;
use AlibabaCloud\SDK\Sddp\V20190103\Models\DescribePackagesResponse;
use AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeParentInstanceRequest;
use AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeParentInstanceResponse;
use AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeRiskLevelsRequest;
use AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeRiskLevelsResponse;
use AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeRulesRequest;
use AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeRulesResponse;
use AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeTablesRequest;
use AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeTablesResponse;
use AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeTemplateAllRulesRequest;
use AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeTemplateAllRulesResponse;
use AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeUserStatusRequest;
use AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeUserStatusResponse;
use AlibabaCloud\SDK\Sddp\V20190103\Models\DisableUserConfigRequest;
use AlibabaCloud\SDK\Sddp\V20190103\Models\DisableUserConfigResponse;
use AlibabaCloud\SDK\Sddp\V20190103\Models\ExecDatamaskRequest;
use AlibabaCloud\SDK\Sddp\V20190103\Models\ExecDatamaskResponse;
use AlibabaCloud\SDK\Sddp\V20190103\Models\ManualTriggerMaskingProcessRequest;
use AlibabaCloud\SDK\Sddp\V20190103\Models\ManualTriggerMaskingProcessResponse;
use AlibabaCloud\SDK\Sddp\V20190103\Models\MaskOssImageRequest;
use AlibabaCloud\SDK\Sddp\V20190103\Models\MaskOssImageResponse;
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
use AlibabaCloud\SDK\Sddp\V20190103\Models\RestoreOssImageRequest;
use AlibabaCloud\SDK\Sddp\V20190103\Models\RestoreOssImageResponse;
use AlibabaCloud\SDK\Sddp\V20190103\Models\ScanOssObjectV1Request;
use AlibabaCloud\SDK\Sddp\V20190103\Models\ScanOssObjectV1Response;
use AlibabaCloud\SDK\Sddp\V20190103\Models\ScanOssObjectV1ShrinkRequest;
use AlibabaCloud\SDK\Sddp\V20190103\Models\StopMaskingProcessRequest;
use AlibabaCloud\SDK\Sddp\V20190103\Models\StopMaskingProcessResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Sddp extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap = [
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
        if (null !== $endpoint) {
            return $endpoint;
        }

        if (null !== $endpointMap && null !== @$endpointMap[$regionId]) {
            return @$endpointMap[$regionId];
        }

        return Utils::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * Modifies the configurations of a common configuration item for alerts.
     *
     * @remarks
     * You can call this operation to create or restore configurations based on the codes of common configuration items. This allows you to manage the configurations of common configuration items.
     * # Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - CreateConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateConfigResponse
     *
     * @param CreateConfigRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return CreateConfigResponse
     */
    public function createConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->code) {
            @$query['Code'] = $request->code;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->featureType) {
            @$query['FeatureType'] = $request->featureType;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->sourceIp) {
            @$query['SourceIp'] = $request->sourceIp;
        }

        if (null !== $request->value) {
            @$query['Value'] = $request->value;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateConfig',
            'version' => '2019-01-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the configurations of a common configuration item for alerts.
     *
     * @remarks
     * You can call this operation to create or restore configurations based on the codes of common configuration items. This allows you to manage the configurations of common configuration items.
     * # Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - CreateConfigRequest
     *
     * @returns CreateConfigResponse
     *
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
     * Authorizes Data Security Center (DSC) to scan data assets. The data assets can be a database, a project, or a bucket.
     *
     * @remarks
     * You can call this operation to authorize DSC to scan data assets to ensure the security of the data assets.
     *
     * @param request - CreateDataLimitRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateDataLimitResponse
     *
     * @param CreateDataLimitRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CreateDataLimitResponse
     */
    public function createDataLimitWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->auditStatus) {
            @$query['AuditStatus'] = $request->auditStatus;
        }

        if (null !== $request->autoScan) {
            @$query['AutoScan'] = $request->autoScan;
        }

        if (null !== $request->certificatePermission) {
            @$query['CertificatePermission'] = $request->certificatePermission;
        }

        if (null !== $request->enable) {
            @$query['Enable'] = $request->enable;
        }

        if (null !== $request->engineType) {
            @$query['EngineType'] = $request->engineType;
        }

        if (null !== $request->eventStatus) {
            @$query['EventStatus'] = $request->eventStatus;
        }

        if (null !== $request->featureType) {
            @$query['FeatureType'] = $request->featureType;
        }

        if (null !== $request->instantlyScan) {
            @$query['InstantlyScan'] = $request->instantlyScan;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->logStoreDay) {
            @$query['LogStoreDay'] = $request->logStoreDay;
        }

        if (null !== $request->ocrStatus) {
            @$query['OcrStatus'] = $request->ocrStatus;
        }

        if (null !== $request->parentId) {
            @$query['ParentId'] = $request->parentId;
        }

        if (null !== $request->password) {
            @$query['Password'] = $request->password;
        }

        if (null !== $request->port) {
            @$query['Port'] = $request->port;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->samplingSize) {
            @$query['SamplingSize'] = $request->samplingSize;
        }

        if (null !== $request->serviceRegionId) {
            @$query['ServiceRegionId'] = $request->serviceRegionId;
        }

        if (null !== $request->sourceIp) {
            @$query['SourceIp'] = $request->sourceIp;
        }

        if (null !== $request->userName) {
            @$query['UserName'] = $request->userName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateDataLimit',
            'version' => '2019-01-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateDataLimitResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Authorizes Data Security Center (DSC) to scan data assets. The data assets can be a database, a project, or a bucket.
     *
     * @remarks
     * You can call this operation to authorize DSC to scan data assets to ensure the security of the data assets.
     *
     * @param request - CreateDataLimitRequest
     *
     * @returns CreateDataLimitResponse
     *
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
     * Creates a custom sensitive data detection rule.
     *
     * @param request - CreateRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateRuleResponse
     *
     * @param CreateRuleRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return CreateRuleResponse
     */
    public function createRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->category) {
            @$query['Category'] = $request->category;
        }

        if (null !== $request->content) {
            @$query['Content'] = $request->content;
        }

        if (null !== $request->contentCategory) {
            @$query['ContentCategory'] = $request->contentCategory;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->matchType) {
            @$query['MatchType'] = $request->matchType;
        }

        if (null !== $request->modelRuleIds) {
            @$query['ModelRuleIds'] = $request->modelRuleIds;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->productCode) {
            @$query['ProductCode'] = $request->productCode;
        }

        if (null !== $request->productId) {
            @$query['ProductId'] = $request->productId;
        }

        if (null !== $request->riskLevelId) {
            @$query['RiskLevelId'] = $request->riskLevelId;
        }

        if (null !== $request->ruleType) {
            @$query['RuleType'] = $request->ruleType;
        }

        if (null !== $request->sourceIp) {
            @$query['SourceIp'] = $request->sourceIp;
        }

        if (null !== $request->statExpress) {
            @$query['StatExpress'] = $request->statExpress;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        if (null !== $request->supportForm) {
            @$query['SupportForm'] = $request->supportForm;
        }

        if (null !== $request->target) {
            @$query['Target'] = $request->target;
        }

        if (null !== $request->templateRuleIds) {
            @$query['TemplateRuleIds'] = $request->templateRuleIds;
        }

        if (null !== $request->warnLevel) {
            @$query['WarnLevel'] = $request->warnLevel;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateRule',
            'version' => '2019-01-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a custom sensitive data detection rule.
     *
     * @param request - CreateRuleRequest
     *
     * @returns CreateRuleResponse
     *
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
     * Creates a custom scan task. The custom scan task is used to scan data assets on which Data Security Center (DSC) is granted the scan permissions for sensitive data.
     *
     * @remarks
     * You can call this operation to create a custom scan task for authorized data assets. You can customize the interval between two consecutive scan tasks and the time when the scan task is executed next time.
     * # Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - CreateScanTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateScanTaskResponse
     *
     * @param CreateScanTaskRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CreateScanTaskResponse
     */
    public function createScanTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dataLimitId) {
            @$query['DataLimitId'] = $request->dataLimitId;
        }

        if (null !== $request->featureType) {
            @$query['FeatureType'] = $request->featureType;
        }

        if (null !== $request->intervalDay) {
            @$query['IntervalDay'] = $request->intervalDay;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->ossScanPath) {
            @$query['OssScanPath'] = $request->ossScanPath;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->runHour) {
            @$query['RunHour'] = $request->runHour;
        }

        if (null !== $request->runMinute) {
            @$query['RunMinute'] = $request->runMinute;
        }

        if (null !== $request->scanRange) {
            @$query['ScanRange'] = $request->scanRange;
        }

        if (null !== $request->scanRangeContent) {
            @$query['ScanRangeContent'] = $request->scanRangeContent;
        }

        if (null !== $request->sourceIp) {
            @$query['SourceIp'] = $request->sourceIp;
        }

        if (null !== $request->taskName) {
            @$query['TaskName'] = $request->taskName;
        }

        if (null !== $request->taskUserName) {
            @$query['TaskUserName'] = $request->taskUserName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateScanTask',
            'version' => '2019-01-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateScanTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a custom scan task. The custom scan task is used to scan data assets on which Data Security Center (DSC) is granted the scan permissions for sensitive data.
     *
     * @remarks
     * You can call this operation to create a custom scan task for authorized data assets. You can customize the interval between two consecutive scan tasks and the time when the scan task is executed next time.
     * # Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - CreateScanTaskRequest
     *
     * @returns CreateScanTaskResponse
     *
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
     * Creates a service-linked role for Data Security Center (DSC) to grant DSC the permissions to access data assets in other services.
     *
     * @remarks
     * You can call this operation to allow DSC to access the data assets in services such as Object Storage Service (OSS), ApsaraDB RDS, and MaxCompute. After you call this operation, the system automatically creates a service-linked role named AliyunServiceRoleForSDDP and attaches the AliyunServiceRolePolicyForSDDP policy to the role.
     * # Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - CreateSlrRoleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateSlrRoleResponse
     *
     * @param CreateSlrRoleRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return CreateSlrRoleResponse
     */
    public function createSlrRoleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->featureType) {
            @$query['FeatureType'] = $request->featureType;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->sourceIp) {
            @$query['SourceIp'] = $request->sourceIp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateSlrRole',
            'version' => '2019-01-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateSlrRoleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a service-linked role for Data Security Center (DSC) to grant DSC the permissions to access data assets in other services.
     *
     * @remarks
     * You can call this operation to allow DSC to access the data assets in services such as Object Storage Service (OSS), ApsaraDB RDS, and MaxCompute. After you call this operation, the system automatically creates a service-linked role named AliyunServiceRoleForSDDP and attaches the AliyunServiceRolePolicyForSDDP policy to the role.
     * # Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - CreateSlrRoleRequest
     *
     * @returns CreateSlrRoleResponse
     *
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
     * Revokes the scan permissions on a data asset. The data asset can be a database, an instance, or a bucket.
     *
     * @remarks
     * You can call this operation to revoke the permissions on a data asset from Data Security Center (DSC).
     * # Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - DeleteDataLimitRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteDataLimitResponse
     *
     * @param DeleteDataLimitRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteDataLimitResponse
     */
    public function deleteDataLimitWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->featureType) {
            @$query['FeatureType'] = $request->featureType;
        }

        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->sourceIp) {
            @$query['SourceIp'] = $request->sourceIp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteDataLimit',
            'version' => '2019-01-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteDataLimitResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Revokes the scan permissions on a data asset. The data asset can be a database, an instance, or a bucket.
     *
     * @remarks
     * You can call this operation to revoke the permissions on a data asset from Data Security Center (DSC).
     * # Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - DeleteDataLimitRequest
     *
     * @returns DeleteDataLimitResponse
     *
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
     * Deletes a custom sensitive data detection rule from Data Security Center (DSC).
     *
     * @param request - DeleteRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteRuleResponse
     *
     * @param DeleteRuleRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return DeleteRuleResponse
     */
    public function deleteRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->featureType) {
            @$query['FeatureType'] = $request->featureType;
        }

        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->sourceIp) {
            @$query['SourceIp'] = $request->sourceIp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteRule',
            'version' => '2019-01-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a custom sensitive data detection rule from Data Security Center (DSC).
     *
     * @param request - DeleteRuleRequest
     *
     * @returns DeleteRuleResponse
     *
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
     * 查询审计告警日志列表.
     *
     * @param request - DescribeAuditLogsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeAuditLogsResponse
     *
     * @param DescribeAuditLogsRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeAuditLogsResponse
     */
    public function describeAuditLogsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->asyncRequestId) {
            @$query['AsyncRequestId'] = $request->asyncRequestId;
        }

        if (null !== $request->clientIp) {
            @$query['ClientIp'] = $request->clientIp;
        }

        if (null !== $request->clientUa) {
            @$query['ClientUa'] = $request->clientUa;
        }

        if (null !== $request->currentPage) {
            @$query['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->databaseName) {
            @$query['DatabaseName'] = $request->databaseName;
        }

        if (null !== $request->effectRowRange) {
            @$query['EffectRowRange'] = $request->effectRowRange;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->executeTimeRange) {
            @$query['ExecuteTimeRange'] = $request->executeTimeRange;
        }

        if (null !== $request->instanceName) {
            @$query['InstanceName'] = $request->instanceName;
        }

        if (null !== $request->ipType) {
            @$query['IpType'] = $request->ipType;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->loadWhiteList) {
            @$query['LoadWhiteList'] = $request->loadWhiteList;
        }

        if (null !== $request->logSource) {
            @$query['LogSource'] = $request->logSource;
        }

        if (null !== $request->memberAccount) {
            @$query['MemberAccount'] = $request->memberAccount;
        }

        if (null !== $request->message) {
            @$query['Message'] = $request->message;
        }

        if (null !== $request->operateType) {
            @$query['OperateType'] = $request->operateType;
        }

        if (null !== $request->ossObjectKey) {
            @$query['OssObjectKey'] = $request->ossObjectKey;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->productCode) {
            @$query['ProductCode'] = $request->productCode;
        }

        if (null !== $request->productId) {
            @$query['ProductId'] = $request->productId;
        }

        if (null !== $request->ruleAggQuery) {
            @$query['RuleAggQuery'] = $request->ruleAggQuery;
        }

        if (null !== $request->ruleCategory) {
            @$query['RuleCategory'] = $request->ruleCategory;
        }

        if (null !== $request->ruleID) {
            @$query['RuleID'] = $request->ruleID;
        }

        if (null !== $request->ruleName) {
            @$query['RuleName'] = $request->ruleName;
        }

        if (null !== $request->sqlText) {
            @$query['SqlText'] = $request->sqlText;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->userName) {
            @$query['UserName'] = $request->userName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeAuditLogs',
            'version' => '2019-01-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeAuditLogsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询审计告警日志列表.
     *
     * @param request - DescribeAuditLogsRequest
     *
     * @returns DescribeAuditLogsResponse
     *
     * @param DescribeAuditLogsRequest $request
     *
     * @return DescribeAuditLogsResponse
     */
    public function describeAuditLogs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAuditLogsWithOptions($request, $runtime);
    }

    /**
     * Call this interface to query the list of industry templates.
     *
     * @param request - DescribeCategoryTemplateListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeCategoryTemplateListResponse
     *
     * @param DescribeCategoryTemplateListRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeCategoryTemplateListResponse
     */
    public function describeCategoryTemplateListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->currentPage) {
            @$query['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->featureType) {
            @$query['FeatureType'] = $request->featureType;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->usageScenario) {
            @$query['UsageScenario'] = $request->usageScenario;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeCategoryTemplateList',
            'version' => '2019-01-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeCategoryTemplateListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Call this interface to query the list of industry templates.
     *
     * @param request - DescribeCategoryTemplateListRequest
     *
     * @returns DescribeCategoryTemplateListResponse
     *
     * @param DescribeCategoryTemplateListRequest $request
     *
     * @return DescribeCategoryTemplateListResponse
     */
    public function describeCategoryTemplateList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCategoryTemplateListWithOptions($request, $runtime);
    }

    /**
     * Queries rules in a classification template by page.
     *
     * @remarks
     * You can call this operation to query rules in a classification template.
     * # Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - DescribeCategoryTemplateRuleListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeCategoryTemplateRuleListResponse
     *
     * @param DescribeCategoryTemplateRuleListRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return DescribeCategoryTemplateRuleListResponse
     */
    public function describeCategoryTemplateRuleListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->currentPage) {
            @$query['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->featureType) {
            @$query['FeatureType'] = $request->featureType;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->riskLevelId) {
            @$query['RiskLevelId'] = $request->riskLevelId;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeCategoryTemplateRuleList',
            'version' => '2019-01-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeCategoryTemplateRuleListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries rules in a classification template by page.
     *
     * @remarks
     * You can call this operation to query rules in a classification template.
     * # Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - DescribeCategoryTemplateRuleListRequest
     *
     * @returns DescribeCategoryTemplateRuleListResponse
     *
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
     * Queries data in the columns of the tables that Data Security Center (DSC) is authorized to access. The tables include the tables of MaxCompute and ApsaraDB RDS.
     *
     * @remarks
     * You can call this operation to query the data in columns of a table that may contain sensitive data. This helps you analyze sensitive data.
     * ## [](#)Precautions
     * The DescribeColumns operation is changed to DescribeColumnsV2. We recommend that you call the DescribeColumnsV2 operation when you develop your applications.
     * ## [](#qps)Limits
     * Each Alibaba Cloud account can call this operation up to 10 times per second. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - DescribeColumnsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeColumnsResponse
     *
     * @param DescribeColumnsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeColumnsResponse
     */
    public function describeColumnsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->currentPage) {
            @$query['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->engineType) {
            @$query['EngineType'] = $request->engineType;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->instanceName) {
            @$query['InstanceName'] = $request->instanceName;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->modelTagId) {
            @$query['ModelTagId'] = $request->modelTagId;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->productCode) {
            @$query['ProductCode'] = $request->productCode;
        }

        if (null !== $request->productId) {
            @$query['ProductId'] = $request->productId;
        }

        if (null !== $request->riskLevelId) {
            @$query['RiskLevelId'] = $request->riskLevelId;
        }

        if (null !== $request->ruleId) {
            @$query['RuleId'] = $request->ruleId;
        }

        if (null !== $request->ruleName) {
            @$query['RuleName'] = $request->ruleName;
        }

        if (null !== $request->sensLevelName) {
            @$query['SensLevelName'] = $request->sensLevelName;
        }

        if (null !== $request->tableId) {
            @$query['TableId'] = $request->tableId;
        }

        if (null !== $request->tableName) {
            @$query['TableName'] = $request->tableName;
        }

        if (null !== $request->templateId) {
            @$query['TemplateId'] = $request->templateId;
        }

        if (null !== $request->templateRuleId) {
            @$query['TemplateRuleId'] = $request->templateRuleId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeColumns',
            'version' => '2019-01-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeColumnsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries data in the columns of the tables that Data Security Center (DSC) is authorized to access. The tables include the tables of MaxCompute and ApsaraDB RDS.
     *
     * @remarks
     * You can call this operation to query the data in columns of a table that may contain sensitive data. This helps you analyze sensitive data.
     * ## [](#)Precautions
     * The DescribeColumns operation is changed to DescribeColumnsV2. We recommend that you call the DescribeColumnsV2 operation when you develop your applications.
     * ## [](#qps)Limits
     * Each Alibaba Cloud account can call this operation up to 10 times per second. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - DescribeColumnsRequest
     *
     * @returns DescribeColumnsResponse
     *
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
     * Query data in columns of data assets such as MaxCompute, RDS, etc., that are authorized by the Data Security Center.
     *
     * @param request - DescribeColumnsV2Request
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeColumnsV2Response
     *
     * @param DescribeColumnsV2Request $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeColumnsV2Response
     */
    public function describeColumnsV2WithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->currentPage) {
            @$query['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->engineType) {
            @$query['EngineType'] = $request->engineType;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->instanceName) {
            @$query['InstanceName'] = $request->instanceName;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->productCode) {
            @$query['ProductCode'] = $request->productCode;
        }

        if (null !== $request->riskLevelId) {
            @$query['RiskLevelId'] = $request->riskLevelId;
        }

        if (null !== $request->ruleId) {
            @$query['RuleId'] = $request->ruleId;
        }

        if (null !== $request->ruleName) {
            @$query['RuleName'] = $request->ruleName;
        }

        if (null !== $request->sensLevelName) {
            @$query['SensLevelName'] = $request->sensLevelName;
        }

        if (null !== $request->tableId) {
            @$query['TableId'] = $request->tableId;
        }

        if (null !== $request->tableName) {
            @$query['TableName'] = $request->tableName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeColumnsV2',
            'version' => '2019-01-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeColumnsV2Response::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query data in columns of data assets such as MaxCompute, RDS, etc., that are authorized by the Data Security Center.
     *
     * @param request - DescribeColumnsV2Request
     *
     * @returns DescribeColumnsV2Response
     *
     * @param DescribeColumnsV2Request $request
     *
     * @return DescribeColumnsV2Response
     */
    public function describeColumnsV2($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeColumnsV2WithOptions($request, $runtime);
    }

    /**
     * Queries common configuration items for alerts.
     *
     * @param request - DescribeConfigsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeConfigsResponse
     *
     * @param DescribeConfigsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeConfigsResponse
     */
    public function describeConfigsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeConfigs',
            'version' => '2019-01-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeConfigsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries common configuration items for alerts.
     *
     * @param request - DescribeConfigsRequest
     *
     * @returns DescribeConfigsResponse
     *
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
     * Queries the sensitive data detection results of data assets that Data Security Center (DSC) is authorized to access.
     *
     * @param request - DescribeDataAssetsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDataAssetsResponse
     *
     * @param DescribeDataAssetsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeDataAssetsResponse
     */
    public function describeDataAssetsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->currentPage) {
            @$query['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->rangeId) {
            @$query['RangeId'] = $request->rangeId;
        }

        if (null !== $request->riskLevels) {
            @$query['RiskLevels'] = $request->riskLevels;
        }

        if (null !== $request->ruleId) {
            @$query['RuleId'] = $request->ruleId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDataAssets',
            'version' => '2019-01-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDataAssetsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the sensitive data detection results of data assets that Data Security Center (DSC) is authorized to access.
     *
     * @param request - DescribeDataAssetsRequest
     *
     * @returns DescribeDataAssetsResponse
     *
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
     * Queries the details of a data asset, such as a MaxCompute project, an ApsaraDB RDS database, or an Object Storage Service (OSS) bucket, that you authorize Data Security Center (DSC) to access.
     *
     * @param request - DescribeDataLimitDetailRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDataLimitDetailResponse
     *
     * @param DescribeDataLimitDetailRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeDataLimitDetailResponse
     */
    public function describeDataLimitDetailWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->featureType) {
            @$query['FeatureType'] = $request->featureType;
        }

        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->networkType) {
            @$query['NetworkType'] = $request->networkType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDataLimitDetail',
            'version' => '2019-01-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDataLimitDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of a data asset, such as a MaxCompute project, an ApsaraDB RDS database, or an Object Storage Service (OSS) bucket, that you authorize Data Security Center (DSC) to access.
     *
     * @param request - DescribeDataLimitDetailRequest
     *
     * @returns DescribeDataLimitDetailResponse
     *
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
     * Queries data assets, such as instances, databases, and Object Storage Service (OSS) buckets, that you authorize Data Security Center (DSC) to scan in a service.
     *
     * @remarks
     * You can call this operation to query the data assets that are authorized to be scanned. This facilitates resource search and aggregation.
     * # Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - DescribeDataLimitSetRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDataLimitSetResponse
     *
     * @param DescribeDataLimitSetRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeDataLimitSetResponse
     */
    public function describeDataLimitSetWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->featureType) {
            @$query['FeatureType'] = $request->featureType;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->parentId) {
            @$query['ParentId'] = $request->parentId;
        }

        if (null !== $request->regionType) {
            @$query['RegionType'] = $request->regionType;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDataLimitSet',
            'version' => '2019-01-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDataLimitSetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries data assets, such as instances, databases, and Object Storage Service (OSS) buckets, that you authorize Data Security Center (DSC) to scan in a service.
     *
     * @remarks
     * You can call this operation to query the data assets that are authorized to be scanned. This facilitates resource search and aggregation.
     * # Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - DescribeDataLimitSetRequest
     *
     * @returns DescribeDataLimitSetResponse
     *
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
     * Queries the data assets such as instances, databases, or buckets that Data Security Center (DSC) is authorized to access.
     *
     * @param request - DescribeDataLimitsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDataLimitsResponse
     *
     * @param DescribeDataLimitsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeDataLimitsResponse
     */
    public function describeDataLimitsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->auditStatus) {
            @$query['AuditStatus'] = $request->auditStatus;
        }

        if (null !== $request->checkStatus) {
            @$query['CheckStatus'] = $request->checkStatus;
        }

        if (null !== $request->currentPage) {
            @$query['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->datamaskStatus) {
            @$query['DatamaskStatus'] = $request->datamaskStatus;
        }

        if (null !== $request->enable) {
            @$query['Enable'] = $request->enable;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->engineType) {
            @$query['EngineType'] = $request->engineType;
        }

        if (null !== $request->featureType) {
            @$query['FeatureType'] = $request->featureType;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->memberAccount) {
            @$query['MemberAccount'] = $request->memberAccount;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->parentId) {
            @$query['ParentId'] = $request->parentId;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->serviceRegionId) {
            @$query['ServiceRegionId'] = $request->serviceRegionId;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDataLimits',
            'version' => '2019-01-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDataLimitsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the data assets such as instances, databases, or buckets that Data Security Center (DSC) is authorized to access.
     *
     * @param request - DescribeDataLimitsRequest
     *
     * @returns DescribeDataLimitsResponse
     *
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
     * Queries the execution information about a de-identification task.
     *
     * @remarks
     * You can call this operation to query the execution information of a static de-identification task, including the status and progress.
     * # Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - DescribeDataMaskingRunHistoryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDataMaskingRunHistoryResponse
     *
     * @param DescribeDataMaskingRunHistoryRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeDataMaskingRunHistoryResponse
     */
    public function describeDataMaskingRunHistoryWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->currentPage) {
            @$query['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->dstType) {
            @$query['DstType'] = $request->dstType;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->mainProcessId) {
            @$query['MainProcessId'] = $request->mainProcessId;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->srcTableName) {
            @$query['SrcTableName'] = $request->srcTableName;
        }

        if (null !== $request->srcType) {
            @$query['SrcType'] = $request->srcType;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        if (null !== $request->taskId) {
            @$query['TaskId'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDataMaskingRunHistory',
            'version' => '2019-01-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDataMaskingRunHistoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the execution information about a de-identification task.
     *
     * @remarks
     * You can call this operation to query the execution information of a static de-identification task, including the status and progress.
     * # Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - DescribeDataMaskingRunHistoryRequest
     *
     * @returns DescribeDataMaskingRunHistoryResponse
     *
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
     * Queries de-identification tasks.
     *
     * @remarks
     * You can call this operation to query static de-identification tasks. This facilitates task queries and management.
     * # Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - DescribeDataMaskingTasksRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDataMaskingTasksResponse
     *
     * @param DescribeDataMaskingTasksRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeDataMaskingTasksResponse
     */
    public function describeDataMaskingTasksWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->currentPage) {
            @$query['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->dstType) {
            @$query['DstType'] = $request->dstType;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->searchKey) {
            @$query['SearchKey'] = $request->searchKey;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDataMaskingTasks',
            'version' => '2019-01-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDataMaskingTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries de-identification tasks.
     *
     * @remarks
     * You can call this operation to query static de-identification tasks. This facilitates task queries and management.
     * # Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - DescribeDataMaskingTasksRequest
     *
     * @returns DescribeDataMaskingTasksResponse
     *
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
     * View data object column details.
     *
     * @remarks
     * ## Notes
     * The DescribeDataObjectColumnDetail interface has been revised to DescribeDataObjectColumnDetailV2. It is recommended that you use the newer version, DescribeDataObjectColumnDetailV2, when developing your application.
     *
     * @param request - DescribeDataObjectColumnDetailRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDataObjectColumnDetailResponse
     *
     * @param DescribeDataObjectColumnDetailRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribeDataObjectColumnDetailResponse
     */
    public function describeDataObjectColumnDetailWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->currentPage) {
            @$query['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->featureType) {
            @$query['FeatureType'] = $request->featureType;
        }

        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->productId) {
            @$query['ProductId'] = $request->productId;
        }

        if (null !== $request->templateId) {
            @$query['TemplateId'] = $request->templateId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDataObjectColumnDetail',
            'version' => '2019-01-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDataObjectColumnDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * View data object column details.
     *
     * @remarks
     * ## Notes
     * The DescribeDataObjectColumnDetail interface has been revised to DescribeDataObjectColumnDetailV2. It is recommended that you use the newer version, DescribeDataObjectColumnDetailV2, when developing your application.
     *
     * @param request - DescribeDataObjectColumnDetailRequest
     *
     * @returns DescribeDataObjectColumnDetailResponse
     *
     * @param DescribeDataObjectColumnDetailRequest $request
     *
     * @return DescribeDataObjectColumnDetailResponse
     */
    public function describeDataObjectColumnDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDataObjectColumnDetailWithOptions($request, $runtime);
    }

    /**
     * View Data Object Column Details V2.
     *
     * @param request - DescribeDataObjectColumnDetailV2Request
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDataObjectColumnDetailV2Response
     *
     * @param DescribeDataObjectColumnDetailV2Request $request
     * @param RuntimeOptions                          $runtime
     *
     * @return DescribeDataObjectColumnDetailV2Response
     */
    public function describeDataObjectColumnDetailV2WithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->currentPage) {
            @$query['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->featureType) {
            @$query['FeatureType'] = $request->featureType;
        }

        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->productId) {
            @$query['ProductId'] = $request->productId;
        }

        if (null !== $request->templateId) {
            @$query['TemplateId'] = $request->templateId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDataObjectColumnDetailV2',
            'version' => '2019-01-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDataObjectColumnDetailV2Response::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * View Data Object Column Details V2.
     *
     * @param request - DescribeDataObjectColumnDetailV2Request
     *
     * @returns DescribeDataObjectColumnDetailV2Response
     *
     * @param DescribeDataObjectColumnDetailV2Request $request
     *
     * @return DescribeDataObjectColumnDetailV2Response
     */
    public function describeDataObjectColumnDetailV2($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDataObjectColumnDetailV2WithOptions($request, $runtime);
    }

    /**
     * Paginated Query of Data Catalog Objects.
     *
     * @param request - DescribeDataObjectsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDataObjectsResponse
     *
     * @param DescribeDataObjectsRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeDataObjectsResponse
     */
    public function describeDataObjectsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->currentPage) {
            @$query['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->domainId) {
            @$query['DomainId'] = $request->domainId;
        }

        if (null !== $request->featureType) {
            @$query['FeatureType'] = $request->featureType;
        }

        if (null !== $request->fileCategoryCode) {
            @$query['FileCategoryCode'] = $request->fileCategoryCode;
        }

        if (null !== $request->fileType) {
            @$query['FileType'] = $request->fileType;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->memberAccount) {
            @$query['MemberAccount'] = $request->memberAccount;
        }

        if (null !== $request->modelIds) {
            @$query['ModelIds'] = $request->modelIds;
        }

        if (null !== $request->modelTagIds) {
            @$query['ModelTagIds'] = $request->modelTagIds;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->parentCategoryIds) {
            @$query['ParentCategoryIds'] = $request->parentCategoryIds;
        }

        if (null !== $request->productIds) {
            @$query['ProductIds'] = $request->productIds;
        }

        if (null !== $request->queryName) {
            @$query['QueryName'] = $request->queryName;
        }

        if (null !== $request->riskLevels) {
            @$query['RiskLevels'] = $request->riskLevels;
        }

        if (null !== $request->serviceRegionId) {
            @$query['ServiceRegionId'] = $request->serviceRegionId;
        }

        if (null !== $request->templateId) {
            @$query['TemplateId'] = $request->templateId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDataObjects',
            'version' => '2019-01-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDataObjectsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Paginated Query of Data Catalog Objects.
     *
     * @param request - DescribeDataObjectsRequest
     *
     * @returns DescribeDataObjectsResponse
     *
     * @param DescribeDataObjectsRequest $request
     *
     * @return DescribeDataObjectsResponse
     */
    public function describeDataObjects($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDataObjectsWithOptions($request, $runtime);
    }

    /**
     * Queries a list of OSS object types that can be identified.
     *
     * @param request - DescribeDocTypesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDocTypesResponse
     *
     * @param DescribeDocTypesRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DescribeDocTypesResponse
     */
    public function describeDocTypesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDocTypes',
            'version' => '2019-01-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDocTypesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of OSS object types that can be identified.
     *
     * @param request - DescribeDocTypesRequest
     *
     * @returns DescribeDocTypesResponse
     *
     * @param DescribeDocTypesRequest $request
     *
     * @return DescribeDocTypesResponse
     */
    public function describeDocTypes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDocTypesWithOptions($request, $runtime);
    }

    /**
     * Queries the details of an anomalous event. The details include the time when the anomalous event occurred, and the description and handling status of the anomalous event.
     *
     * @param request - DescribeEventDetailRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeEventDetailResponse
     *
     * @param DescribeEventDetailRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeEventDetailResponse
     */
    public function describeEventDetailWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeEventDetail',
            'version' => '2019-01-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeEventDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of an anomalous event. The details include the time when the anomalous event occurred, and the description and handling status of the anomalous event.
     *
     * @param request - DescribeEventDetailRequest
     *
     * @returns DescribeEventDetailResponse
     *
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
     * Queries the types of anomalous events.
     *
     * @param request - DescribeEventTypesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeEventTypesResponse
     *
     * @param DescribeEventTypesRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeEventTypesResponse
     */
    public function describeEventTypesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->featureType) {
            @$query['FeatureType'] = $request->featureType;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->parentTypeId) {
            @$query['ParentTypeId'] = $request->parentTypeId;
        }

        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeEventTypes',
            'version' => '2019-01-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeEventTypesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the types of anomalous events.
     *
     * @param request - DescribeEventTypesRequest
     *
     * @returns DescribeEventTypesResponse
     *
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
     * Queries anomalous events.
     *
     * @remarks
     * You can call this operation to query anomalous events that may involve data leaks. This helps you search for and handle anomalous events.
     * # Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - DescribeEventsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeEventsResponse
     *
     * @param DescribeEventsRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DescribeEventsResponse
     */
    public function describeEventsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->currentPage) {
            @$query['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->dealUserId) {
            @$query['DealUserId'] = $request->dealUserId;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        if (null !== $request->instanceName) {
            @$query['InstanceName'] = $request->instanceName;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->productCode) {
            @$query['ProductCode'] = $request->productCode;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        if (null !== $request->subTypeCode) {
            @$query['SubTypeCode'] = $request->subTypeCode;
        }

        if (null !== $request->targetProductCode) {
            @$query['TargetProductCode'] = $request->targetProductCode;
        }

        if (null !== $request->typeCode) {
            @$query['TypeCode'] = $request->typeCode;
        }

        if (null !== $request->userId) {
            @$query['UserId'] = $request->userId;
        }

        if (null !== $request->userName) {
            @$query['UserName'] = $request->userName;
        }

        if (null !== $request->warnLevel) {
            @$query['WarnLevel'] = $request->warnLevel;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeEvents',
            'version' => '2019-01-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeEventsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries anomalous events.
     *
     * @remarks
     * You can call this operation to query anomalous events that may involve data leaks. This helps you search for and handle anomalous events.
     * # Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - DescribeEventsRequest
     *
     * @returns DescribeEventsResponse
     *
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
     * Query the status of an identification task.
     *
     * @remarks
     * ## QPS Limit
     * The QPS limit for this interface per user is 10 times/second. Exceeding the limit will result in API calls being rate-limited, which may affect your business. Please call it reasonably.
     *
     * @param request - DescribeIdentifyTaskStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeIdentifyTaskStatusResponse
     *
     * @param DescribeIdentifyTaskStatusRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeIdentifyTaskStatusResponse
     */
    public function describeIdentifyTaskStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeIdentifyTaskStatus',
            'version' => '2019-01-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeIdentifyTaskStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query the status of an identification task.
     *
     * @remarks
     * ## QPS Limit
     * The QPS limit for this interface per user is 10 times/second. Exceeding the limit will result in API calls being rate-limited, which may affect your business. Please call it reasonably.
     *
     * @param request - DescribeIdentifyTaskStatusRequest
     *
     * @returns DescribeIdentifyTaskStatusResponse
     *
     * @param DescribeIdentifyTaskStatusRequest $request
     *
     * @return DescribeIdentifyTaskStatusResponse
     */
    public function describeIdentifyTaskStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeIdentifyTaskStatusWithOptions($request, $runtime);
    }

    /**
     * Queries a list of data assets.
     *
     * @remarks
     * You can query a list of unauthorized or authorized data assets based on the value of AuthStatus.
     * This operation is no longer used for the KMS console of the new version.
     *
     * @param request - DescribeInstanceSourcesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeInstanceSourcesResponse
     *
     * @param DescribeInstanceSourcesRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeInstanceSourcesResponse
     */
    public function describeInstanceSourcesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->auditStatus) {
            @$query['AuditStatus'] = $request->auditStatus;
        }

        if (null !== $request->authStatus) {
            @$query['AuthStatus'] = $request->authStatus;
        }

        if (null !== $request->currentPage) {
            @$query['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->engineType) {
            @$query['EngineType'] = $request->engineType;
        }

        if (null !== $request->featureType) {
            @$query['FeatureType'] = $request->featureType;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->productCode) {
            @$query['ProductCode'] = $request->productCode;
        }

        if (null !== $request->productId) {
            @$query['ProductId'] = $request->productId;
        }

        if (null !== $request->searchKey) {
            @$query['SearchKey'] = $request->searchKey;
        }

        if (null !== $request->searchType) {
            @$query['SearchType'] = $request->searchType;
        }

        if (null !== $request->serviceRegionId) {
            @$query['ServiceRegionId'] = $request->serviceRegionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeInstanceSources',
            'version' => '2019-01-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeInstanceSourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of data assets.
     *
     * @remarks
     * You can query a list of unauthorized or authorized data assets based on the value of AuthStatus.
     * This operation is no longer used for the KMS console of the new version.
     *
     * @param request - DescribeInstanceSourcesRequest
     *
     * @returns DescribeInstanceSourcesResponse
     *
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
     * Queries data assets such as MaxCompute, ApsaraDB RDS, and Object Storage Service (OSS) that you authorize Data Security Center (DSC) to access.
     *
     * @remarks
     * When you call the DescribeInstances operation, you can specify parameters such as Name and RiskLevelId to query data assets that meet filter conditions.
     * # Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - DescribeInstancesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeInstancesResponse
     *
     * @param DescribeInstancesRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeInstancesResponse
     */
    public function describeInstancesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->currentPage) {
            @$query['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->featureType) {
            @$query['FeatureType'] = $request->featureType;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->productCode) {
            @$query['ProductCode'] = $request->productCode;
        }

        if (null !== $request->productId) {
            @$query['ProductId'] = $request->productId;
        }

        if (null !== $request->riskLevelId) {
            @$query['RiskLevelId'] = $request->riskLevelId;
        }

        if (null !== $request->ruleId) {
            @$query['RuleId'] = $request->ruleId;
        }

        if (null !== $request->serviceRegionId) {
            @$query['ServiceRegionId'] = $request->serviceRegionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeInstances',
            'version' => '2019-01-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries data assets such as MaxCompute, ApsaraDB RDS, and Object Storage Service (OSS) that you authorize Data Security Center (DSC) to access.
     *
     * @remarks
     * When you call the DescribeInstances operation, you can specify parameters such as Name and RiskLevelId to query data assets that meet filter conditions.
     * # Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - DescribeInstancesRequest
     *
     * @returns DescribeInstancesResponse
     *
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
     * Queries the details of an Object Storage Service (OSS) object that Data Security Center (DSC) is authorized to access.
     *
     * @remarks
     * You can call this operation to query the details of an Object Storage Service (OSS) object. This helps you locate sensitive data detected in OSS.
     * ## [](#)Precautions
     * The DescribeOssObjectDetail operation is chagned to DescribeOssObjectDetailV2. We recommend that you call the DescribeOssObjectDetailV2 operation when you develop your applications.
     * ## [](#qps)Limits
     * Each Alibaba Cloud account can call this operation up to 10 times per second. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - DescribeOssObjectDetailRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeOssObjectDetailResponse
     *
     * @param DescribeOssObjectDetailRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeOssObjectDetailResponse
     */
    public function describeOssObjectDetailWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeOssObjectDetail',
            'version' => '2019-01-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeOssObjectDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of an Object Storage Service (OSS) object that Data Security Center (DSC) is authorized to access.
     *
     * @remarks
     * You can call this operation to query the details of an Object Storage Service (OSS) object. This helps you locate sensitive data detected in OSS.
     * ## [](#)Precautions
     * The DescribeOssObjectDetail operation is chagned to DescribeOssObjectDetailV2. We recommend that you call the DescribeOssObjectDetailV2 operation when you develop your applications.
     * ## [](#qps)Limits
     * Each Alibaba Cloud account can call this operation up to 10 times per second. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - DescribeOssObjectDetailRequest
     *
     * @returns DescribeOssObjectDetailResponse
     *
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
     * Call this interface to query the details of a single storage object in OSS that is authorized by the Data Security Center.
     *
     * @remarks
     * This interface is generally used to query the detailed information of OSS storage objects, which facilitates the accurate positioning of sensitive OSS assets.
     *
     * @param request - DescribeOssObjectDetailV2Request
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeOssObjectDetailV2Response
     *
     * @param DescribeOssObjectDetailV2Request $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeOssObjectDetailV2Response
     */
    public function describeOssObjectDetailV2WithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bucketName) {
            @$query['BucketName'] = $request->bucketName;
        }

        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->objectKey) {
            @$query['ObjectKey'] = $request->objectKey;
        }

        if (null !== $request->serviceRegionId) {
            @$query['ServiceRegionId'] = $request->serviceRegionId;
        }

        if (null !== $request->templateId) {
            @$query['TemplateId'] = $request->templateId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeOssObjectDetailV2',
            'version' => '2019-01-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeOssObjectDetailV2Response::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Call this interface to query the details of a single storage object in OSS that is authorized by the Data Security Center.
     *
     * @remarks
     * This interface is generally used to query the detailed information of OSS storage objects, which facilitates the accurate positioning of sensitive OSS assets.
     *
     * @param request - DescribeOssObjectDetailV2Request
     *
     * @returns DescribeOssObjectDetailV2Response
     *
     * @param DescribeOssObjectDetailV2Request $request
     *
     * @return DescribeOssObjectDetailV2Response
     */
    public function describeOssObjectDetailV2($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeOssObjectDetailV2WithOptions($request, $runtime);
    }

    /**
     * Queries Object Storage Service (OSS) objects that you authorize Data Security Center (DSC) to access.
     *
     * @param request - DescribeOssObjectsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeOssObjectsResponse
     *
     * @param DescribeOssObjectsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeOssObjectsResponse
     */
    public function describeOssObjectsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->currentPage) {
            @$query['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->fileCategoryCode) {
            @$query['FileCategoryCode'] = $request->fileCategoryCode;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->lastScanTimeEnd) {
            @$query['LastScanTimeEnd'] = $request->lastScanTimeEnd;
        }

        if (null !== $request->lastScanTimeStart) {
            @$query['LastScanTimeStart'] = $request->lastScanTimeStart;
        }

        if (null !== $request->marker) {
            @$query['Marker'] = $request->marker;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->riskLevelId) {
            @$query['RiskLevelId'] = $request->riskLevelId;
        }

        if (null !== $request->ruleId) {
            @$query['RuleId'] = $request->ruleId;
        }

        if (null !== $request->serviceRegionId) {
            @$query['ServiceRegionId'] = $request->serviceRegionId;
        }

        if (null !== $request->templateId) {
            @$query['TemplateId'] = $request->templateId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeOssObjects',
            'version' => '2019-01-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeOssObjectsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries Object Storage Service (OSS) objects that you authorize Data Security Center (DSC) to access.
     *
     * @param request - DescribeOssObjectsRequest
     *
     * @returns DescribeOssObjectsResponse
     *
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
     * Queries information about the MaxCompute packages that Data Security Center (DSC) is authorized to access. The information includes the names of MaxCompute packages, the accounts of MaxCompute package owners, and the sensitivity levels of MaxCompute packages.
     *
     * @remarks
     * You can call this operation to query MaxCompute packages that are scanned by DSC. This helps you search for MaxCompute packages and view the summary of MaxCompute packages.
     * # Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - DescribePackagesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribePackagesResponse
     *
     * @param DescribePackagesRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DescribePackagesResponse
     */
    public function describePackagesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->currentPage) {
            @$query['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->productId) {
            @$query['ProductId'] = $request->productId;
        }

        if (null !== $request->riskLevelId) {
            @$query['RiskLevelId'] = $request->riskLevelId;
        }

        if (null !== $request->ruleId) {
            @$query['RuleId'] = $request->ruleId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribePackages',
            'version' => '2019-01-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribePackagesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries information about the MaxCompute packages that Data Security Center (DSC) is authorized to access. The information includes the names of MaxCompute packages, the accounts of MaxCompute package owners, and the sensitivity levels of MaxCompute packages.
     *
     * @remarks
     * You can call this operation to query MaxCompute packages that are scanned by DSC. This helps you search for MaxCompute packages and view the summary of MaxCompute packages.
     * # Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - DescribePackagesRequest
     *
     * @returns DescribePackagesResponse
     *
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
     * Gets the list of first-level authorizations.
     *
     * @param request - DescribeParentInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeParentInstanceResponse
     *
     * @param DescribeParentInstanceRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeParentInstanceResponse
     */
    public function describeParentInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->authStatus) {
            @$query['AuthStatus'] = $request->authStatus;
        }

        if (null !== $request->checkStatus) {
            @$query['CheckStatus'] = $request->checkStatus;
        }

        if (null !== $request->clusterStatus) {
            @$query['ClusterStatus'] = $request->clusterStatus;
        }

        if (null !== $request->currentPage) {
            @$query['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->dbName) {
            @$query['DbName'] = $request->dbName;
        }

        if (null !== $request->engineType) {
            @$query['EngineType'] = $request->engineType;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->memberAccount) {
            @$query['MemberAccount'] = $request->memberAccount;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->serviceRegionId) {
            @$query['ServiceRegionId'] = $request->serviceRegionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeParentInstance',
            'version' => '2019-01-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeParentInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Gets the list of first-level authorizations.
     *
     * @param request - DescribeParentInstanceRequest
     *
     * @returns DescribeParentInstanceResponse
     *
     * @param DescribeParentInstanceRequest $request
     *
     * @return DescribeParentInstanceResponse
     */
    public function describeParentInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeParentInstanceWithOptions($request, $runtime);
    }

    /**
     * Queries the sensitivity levels that are defined in a rule template provided by Data Security Center (DSC).
     *
     * @remarks
     * You can call this operation to query the sensitivity levels that are defined in the current rule template provided by DSC. This helps you learn about the number of times that each sensitivity level is referenced in the rule template and the highest sensitivity level.
     * # Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - DescribeRiskLevelsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeRiskLevelsResponse
     *
     * @param DescribeRiskLevelsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeRiskLevelsResponse
     */
    public function describeRiskLevelsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->featureType) {
            @$query['FeatureType'] = $request->featureType;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->templateId) {
            @$query['TemplateId'] = $request->templateId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeRiskLevels',
            'version' => '2019-01-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeRiskLevelsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the sensitivity levels that are defined in a rule template provided by Data Security Center (DSC).
     *
     * @remarks
     * You can call this operation to query the sensitivity levels that are defined in the current rule template provided by DSC. This helps you learn about the number of times that each sensitivity level is referenced in the rule template and the highest sensitivity level.
     * # Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - DescribeRiskLevelsRequest
     *
     * @returns DescribeRiskLevelsResponse
     *
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
     * Queries sensitive data detection rules.
     *
     * @param request - DescribeRulesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeRulesResponse
     *
     * @param DescribeRulesRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DescribeRulesResponse
     */
    public function describeRulesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->category) {
            @$query['Category'] = $request->category;
        }

        if (null !== $request->contentCategory) {
            @$query['ContentCategory'] = $request->contentCategory;
        }

        if (null !== $request->cooperationChannel) {
            @$query['CooperationChannel'] = $request->cooperationChannel;
        }

        if (null !== $request->currentPage) {
            @$query['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->customType) {
            @$query['CustomType'] = $request->customType;
        }

        if (null !== $request->featureType) {
            @$query['FeatureType'] = $request->featureType;
        }

        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->keywordCompatible) {
            @$query['KeywordCompatible'] = $request->keywordCompatible;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->matchType) {
            @$query['MatchType'] = $request->matchType;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->productCode) {
            @$query['ProductCode'] = $request->productCode;
        }

        if (null !== $request->productId) {
            @$query['ProductId'] = $request->productId;
        }

        if (null !== $request->riskLevelId) {
            @$query['RiskLevelId'] = $request->riskLevelId;
        }

        if (null !== $request->ruleType) {
            @$query['RuleType'] = $request->ruleType;
        }

        if (null !== $request->simplify) {
            @$query['Simplify'] = $request->simplify;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        if (null !== $request->supportForm) {
            @$query['SupportForm'] = $request->supportForm;
        }

        if (null !== $request->warnLevel) {
            @$query['WarnLevel'] = $request->warnLevel;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeRules',
            'version' => '2019-01-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries sensitive data detection rules.
     *
     * @param request - DescribeRulesRequest
     *
     * @returns DescribeRulesResponse
     *
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
     * Queries tables in data assets, such as MaxCompute projects and ApsaraDB RDS instances, that you authorize Data Security Center (DSC) to access.
     *
     * @remarks
     * When you call the DescribeTables operation to query tables, you can specify parameters such as Name and RiskLevelId to filter tables.
     * # Limits
     * You can send up to 10 requests per second to call this operation by using your Alibaba Cloud account. If you send excessive requests, throttling is implemented, and your business may be affected.
     *
     * @param request - DescribeTablesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeTablesResponse
     *
     * @param DescribeTablesRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DescribeTablesResponse
     */
    public function describeTablesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->currentPage) {
            @$query['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->packageId) {
            @$query['PackageId'] = $request->packageId;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->productCode) {
            @$query['ProductCode'] = $request->productCode;
        }

        if (null !== $request->productId) {
            @$query['ProductId'] = $request->productId;
        }

        if (null !== $request->riskLevelId) {
            @$query['RiskLevelId'] = $request->riskLevelId;
        }

        if (null !== $request->ruleId) {
            @$query['RuleId'] = $request->ruleId;
        }

        if (null !== $request->serviceRegionId) {
            @$query['ServiceRegionId'] = $request->serviceRegionId;
        }

        if (null !== $request->templateId) {
            @$query['TemplateId'] = $request->templateId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeTables',
            'version' => '2019-01-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeTablesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries tables in data assets, such as MaxCompute projects and ApsaraDB RDS instances, that you authorize Data Security Center (DSC) to access.
     *
     * @remarks
     * When you call the DescribeTables operation to query tables, you can specify parameters such as Name and RiskLevelId to filter tables.
     * # Limits
     * You can send up to 10 requests per second to call this operation by using your Alibaba Cloud account. If you send excessive requests, throttling is implemented, and your business may be affected.
     *
     * @param request - DescribeTablesRequest
     *
     * @returns DescribeTablesResponse
     *
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
     * Call this interface to query all models list of industry templates.
     *
     * @param request - DescribeTemplateAllRulesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeTemplateAllRulesResponse
     *
     * @param DescribeTemplateAllRulesRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeTemplateAllRulesResponse
     */
    public function describeTemplateAllRulesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->featureType) {
            @$query['FeatureType'] = $request->featureType;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->templateId) {
            @$query['TemplateId'] = $request->templateId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeTemplateAllRules',
            'version' => '2019-01-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeTemplateAllRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Call this interface to query all models list of industry templates.
     *
     * @param request - DescribeTemplateAllRulesRequest
     *
     * @returns DescribeTemplateAllRulesResponse
     *
     * @param DescribeTemplateAllRulesRequest $request
     *
     * @return DescribeTemplateAllRulesResponse
     */
    public function describeTemplateAllRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTemplateAllRulesWithOptions($request, $runtime);
    }

    /**
     * Queries the information about an account.
     *
     * @remarks
     * You can call this operation to query the information about the current account. This helps you get familiar with your account that accesses Data Security Center (DSC).
     * # Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - DescribeUserStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeUserStatusResponse
     *
     * @param DescribeUserStatusRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeUserStatusResponse
     */
    public function describeUserStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->featureType) {
            @$query['FeatureType'] = $request->featureType;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeUserStatus',
            'version' => '2019-01-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeUserStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about an account.
     *
     * @remarks
     * You can call this operation to query the information about the current account. This helps you get familiar with your account that accesses Data Security Center (DSC).
     * # Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - DescribeUserStatusRequest
     *
     * @returns DescribeUserStatusResponse
     *
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
     * Disables a configuration item. After you disable a configuration item, you can call the CreateConfig operation to enable the configuration item by specifying the code of the configuration item for the Code parameter in the request.
     *
     * @remarks
     * You can call this operation to disable a configuration item based on the code of the configuration item. This helps you modify configurations at the earliest opportunity.
     * # Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - DisableUserConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DisableUserConfigResponse
     *
     * @param DisableUserConfigRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DisableUserConfigResponse
     */
    public function disableUserConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->code) {
            @$query['Code'] = $request->code;
        }

        if (null !== $request->featureType) {
            @$query['FeatureType'] = $request->featureType;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DisableUserConfig',
            'version' => '2019-01-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DisableUserConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Disables a configuration item. After you disable a configuration item, you can call the CreateConfig operation to enable the configuration item by specifying the code of the configuration item for the Code parameter in the request.
     *
     * @remarks
     * You can call this operation to disable a configuration item based on the code of the configuration item. This helps you modify configurations at the earliest opportunity.
     * # Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - DisableUserConfigRequest
     *
     * @returns DisableUserConfigResponse
     *
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
     * Dynamically de-identifies sensitive data.
     *
     * @param request - ExecDatamaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ExecDatamaskResponse
     *
     * @param ExecDatamaskRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ExecDatamaskResponse
     */
    public function execDatamaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->data) {
            @$query['Data'] = $request->data;
        }

        if (null !== $request->featureType) {
            @$query['FeatureType'] = $request->featureType;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->templateId) {
            @$query['TemplateId'] = $request->templateId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ExecDatamask',
            'version' => '2019-01-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ExecDatamaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Dynamically de-identifies sensitive data.
     *
     * @param request - ExecDatamaskRequest
     *
     * @returns ExecDatamaskResponse
     *
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
     * Triggers a de-identification task.
     *
     * @param request - ManualTriggerMaskingProcessRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ManualTriggerMaskingProcessResponse
     *
     * @param ManualTriggerMaskingProcessRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ManualTriggerMaskingProcessResponse
     */
    public function manualTriggerMaskingProcessWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ManualTriggerMaskingProcess',
            'version' => '2019-01-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ManualTriggerMaskingProcessResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Triggers a de-identification task.
     *
     * @param request - ManualTriggerMaskingProcessRequest
     *
     * @returns ManualTriggerMaskingProcessResponse
     *
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
     * OSS图片脱敏.
     *
     * @param request - MaskOssImageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns MaskOssImageResponse
     *
     * @param MaskOssImageRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return MaskOssImageResponse
     */
    public function maskOssImageWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bucketName) {
            @$query['BucketName'] = $request->bucketName;
        }

        if (null !== $request->isAlwaysUpload) {
            @$query['IsAlwaysUpload'] = $request->isAlwaysUpload;
        }

        if (null !== $request->isSupportRestore) {
            @$query['IsSupportRestore'] = $request->isSupportRestore;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->maskRuleIdList) {
            @$query['MaskRuleIdList'] = $request->maskRuleIdList;
        }

        if (null !== $request->objectKey) {
            @$query['ObjectKey'] = $request->objectKey;
        }

        if (null !== $request->serviceRegionId) {
            @$query['ServiceRegionId'] = $request->serviceRegionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'MaskOssImage',
            'version' => '2019-01-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return MaskOssImageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * OSS图片脱敏.
     *
     * @param request - MaskOssImageRequest
     *
     * @returns MaskOssImageResponse
     *
     * @param MaskOssImageRequest $request
     *
     * @return MaskOssImageResponse
     */
    public function maskOssImage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->maskOssImageWithOptions($request, $runtime);
    }

    /**
     * Modifies configuration items for a data asset that you authorize Data Security Center (DSC) to access.
     *
     * @param request - ModifyDataLimitRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyDataLimitResponse
     *
     * @param ModifyDataLimitRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ModifyDataLimitResponse
     */
    public function modifyDataLimitWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->auditStatus) {
            @$query['AuditStatus'] = $request->auditStatus;
        }

        if (null !== $request->autoScan) {
            @$query['AutoScan'] = $request->autoScan;
        }

        if (null !== $request->engineType) {
            @$query['EngineType'] = $request->engineType;
        }

        if (null !== $request->featureType) {
            @$query['FeatureType'] = $request->featureType;
        }

        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->logStoreDay) {
            @$query['LogStoreDay'] = $request->logStoreDay;
        }

        if (null !== $request->modifyPassword) {
            @$query['ModifyPassword'] = $request->modifyPassword;
        }

        if (null !== $request->password) {
            @$query['Password'] = $request->password;
        }

        if (null !== $request->port) {
            @$query['Port'] = $request->port;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->samplingSize) {
            @$query['SamplingSize'] = $request->samplingSize;
        }

        if (null !== $request->securityGroupIdList) {
            @$query['SecurityGroupIdList'] = $request->securityGroupIdList;
        }

        if (null !== $request->serviceRegionId) {
            @$query['ServiceRegionId'] = $request->serviceRegionId;
        }

        if (null !== $request->userName) {
            @$query['UserName'] = $request->userName;
        }

        if (null !== $request->vSwitchIdList) {
            @$query['VSwitchIdList'] = $request->vSwitchIdList;
        }

        if (null !== $request->vpcId) {
            @$query['VpcId'] = $request->vpcId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyDataLimit',
            'version' => '2019-01-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyDataLimitResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies configuration items for a data asset that you authorize Data Security Center (DSC) to access.
     *
     * @param request - ModifyDataLimitRequest
     *
     * @returns ModifyDataLimitResponse
     *
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
     * Changes the sensitivity levels of sensitive data. You can change the default sensitivity levels of data that cannot be classified as sensitive or insensitive, and the sensitivity levels of data that can be classified as sensitive.
     *
     * @remarks
     * You can call this operation to modify the sensitivity levels of data. This helps you manage the sensitivity levels.
     * # Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - ModifyDefaultLevelRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyDefaultLevelResponse
     *
     * @param ModifyDefaultLevelRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ModifyDefaultLevelResponse
     */
    public function modifyDefaultLevelWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->defaultId) {
            @$query['DefaultId'] = $request->defaultId;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->sensitiveIds) {
            @$query['SensitiveIds'] = $request->sensitiveIds;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyDefaultLevel',
            'version' => '2019-01-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyDefaultLevelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Changes the sensitivity levels of sensitive data. You can change the default sensitivity levels of data that cannot be classified as sensitive or insensitive, and the sensitivity levels of data that can be classified as sensitive.
     *
     * @remarks
     * You can call this operation to modify the sensitivity levels of data. This helps you manage the sensitivity levels.
     * # Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - ModifyDefaultLevelRequest
     *
     * @returns ModifyDefaultLevelResponse
     *
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
     * Handles an anomalous event.
     *
     * @remarks
     * You can call this operation to handle anomalous events that involve data leaks. This helps protect your data assets at the earliest opportunity.
     * # Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - ModifyEventStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyEventStatusResponse
     *
     * @param ModifyEventStatusRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ModifyEventStatusResponse
     */
    public function modifyEventStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->backed) {
            @$query['Backed'] = $request->backed;
        }

        if (null !== $request->dealReason) {
            @$query['DealReason'] = $request->dealReason;
        }

        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyEventStatus',
            'version' => '2019-01-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyEventStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Handles an anomalous event.
     *
     * @remarks
     * You can call this operation to handle anomalous events that involve data leaks. This helps protect your data assets at the earliest opportunity.
     * # Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - ModifyEventStatusRequest
     *
     * @returns ModifyEventStatusResponse
     *
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
     * Enables the detection of anomalous events of subtypes.
     *
     * @param request - ModifyEventTypeStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyEventTypeStatusResponse
     *
     * @param ModifyEventTypeStatusRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ModifyEventTypeStatusResponse
     */
    public function modifyEventTypeStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->featureType) {
            @$query['FeatureType'] = $request->featureType;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->subTypeIds) {
            @$query['SubTypeIds'] = $request->subTypeIds;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyEventTypeStatus',
            'version' => '2019-01-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyEventTypeStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Enables the detection of anomalous events of subtypes.
     *
     * @param request - ModifyEventTypeStatusRequest
     *
     * @returns ModifyEventTypeStatusResponse
     *
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
     * Enables or disables the report task.
     *
     * @remarks
     * You can call this operation to enable or disable the report task. After you activate Data Security Center (DSC), the report task is enabled by default. After you disable the report task, you cannot view statistics that are newly generated in the Report Center module, on the Overview page of the Cloud Native Data Audit module, and in the Data security lab module. Existing statistics are not affected.
     * # Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - ModifyReportTaskStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyReportTaskStatusResponse
     *
     * @param ModifyReportTaskStatusRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ModifyReportTaskStatusResponse
     */
    public function modifyReportTaskStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->featureType) {
            @$query['FeatureType'] = $request->featureType;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->reportTaskStatus) {
            @$query['ReportTaskStatus'] = $request->reportTaskStatus;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyReportTaskStatus',
            'version' => '2019-01-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyReportTaskStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Enables or disables the report task.
     *
     * @remarks
     * You can call this operation to enable or disable the report task. After you activate Data Security Center (DSC), the report task is enabled by default. After you disable the report task, you cannot view statistics that are newly generated in the Report Center module, on the Overview page of the Cloud Native Data Audit module, and in the Data security lab module. Existing statistics are not affected.
     * # Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - ModifyReportTaskStatusRequest
     *
     * @returns ModifyReportTaskStatusResponse
     *
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
     * Modifies a custom sensitive data detection rule in Data Security Center (DSC).
     *
     * @remarks
     * When you call this operation, you must configure request parameters to specify the rule name, rule ID, and rule content.
     * # Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - ModifyRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyRuleResponse
     *
     * @param ModifyRuleRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return ModifyRuleResponse
     */
    public function modifyRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->category) {
            @$query['Category'] = $request->category;
        }

        if (null !== $request->content) {
            @$query['Content'] = $request->content;
        }

        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->matchType) {
            @$query['MatchType'] = $request->matchType;
        }

        if (null !== $request->modelRuleIds) {
            @$query['ModelRuleIds'] = $request->modelRuleIds;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->productCode) {
            @$query['ProductCode'] = $request->productCode;
        }

        if (null !== $request->productId) {
            @$query['ProductId'] = $request->productId;
        }

        if (null !== $request->riskLevelId) {
            @$query['RiskLevelId'] = $request->riskLevelId;
        }

        if (null !== $request->ruleType) {
            @$query['RuleType'] = $request->ruleType;
        }

        if (null !== $request->supportForm) {
            @$query['SupportForm'] = $request->supportForm;
        }

        if (null !== $request->templateRuleIds) {
            @$query['TemplateRuleIds'] = $request->templateRuleIds;
        }

        if (null !== $request->warnLevel) {
            @$query['WarnLevel'] = $request->warnLevel;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyRule',
            'version' => '2019-01-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies a custom sensitive data detection rule in Data Security Center (DSC).
     *
     * @remarks
     * When you call this operation, you must configure request parameters to specify the rule name, rule ID, and rule content.
     * # Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - ModifyRuleRequest
     *
     * @returns ModifyRuleResponse
     *
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
     * Enables or disables a sensitive data detection rule.
     *
     * @param request - ModifyRuleStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyRuleStatusResponse
     *
     * @param ModifyRuleStatusRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ModifyRuleStatusResponse
     */
    public function modifyRuleStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        if (null !== $request->ids) {
            @$query['Ids'] = $request->ids;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyRuleStatus',
            'version' => '2019-01-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyRuleStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Enables or disables a sensitive data detection rule.
     *
     * @param request - ModifyRuleStatusRequest
     *
     * @returns ModifyRuleStatusResponse
     *
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
     * 图片复原
     *
     * @param request - RestoreOssImageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RestoreOssImageResponse
     *
     * @param RestoreOssImageRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return RestoreOssImageResponse
     */
    public function restoreOssImageWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bucket) {
            @$query['Bucket'] = $request->bucket;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->objectKey) {
            @$query['ObjectKey'] = $request->objectKey;
        }

        if (null !== $request->serviceRegionId) {
            @$query['ServiceRegionId'] = $request->serviceRegionId;
        }

        if (null !== $request->targetObjectKey) {
            @$query['TargetObjectKey'] = $request->targetObjectKey;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RestoreOssImage',
            'version' => '2019-01-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RestoreOssImageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 图片复原
     *
     * @param request - RestoreOssImageRequest
     *
     * @returns RestoreOssImageResponse
     *
     * @param RestoreOssImageRequest $request
     *
     * @return RestoreOssImageResponse
     */
    public function restoreOssImage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->restoreOssImageWithOptions($request, $runtime);
    }

    /**
     * Creates an identification task to scan sensitive data in Object Storage Service (OSS) objects.
     *
     * @remarks
     * ### [](#)Prerequisites
     * To call this operation, make sure that asset authorization for your OSS bucket is complete and the bucket is connected. If the authorization is not complete, the bucket_not_authorized error code is returned when you call the operation.
     * ### [](#qps-)Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     * ### [](#)Additional information
     * After you call this operation, you can obtain the task ID. You can specify the task ID in the DescribeIdentifyTaskDetail operation to query the state of the task.
     * After the task is complete, you can call the DescribeOssObjectDetailV2 operation to query the identification results of sensitive data in the related OSS objects. When you call the DescribeOssObjectDetailV2 operation, you must specify BucketName, ServiceRegionId, and ObjectKey.
     *
     * @param tmpReq - ScanOssObjectV1Request
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ScanOssObjectV1Response
     *
     * @param ScanOssObjectV1Request $tmpReq
     * @param RuntimeOptions         $runtime
     *
     * @return ScanOssObjectV1Response
     */
    public function scanOssObjectV1WithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ScanOssObjectV1ShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->objectKeyList) {
            $request->objectKeyListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->objectKeyList, 'ObjectKeyList', 'json');
        }

        $query = [];
        if (null !== $request->bucketName) {
            @$query['BucketName'] = $request->bucketName;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->objectKeyListShrink) {
            @$query['ObjectKeyList'] = $request->objectKeyListShrink;
        }

        if (null !== $request->serviceRegionId) {
            @$query['ServiceRegionId'] = $request->serviceRegionId;
        }

        if (null !== $request->templateId) {
            @$query['TemplateId'] = $request->templateId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ScanOssObjectV1',
            'version' => '2019-01-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ScanOssObjectV1Response::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an identification task to scan sensitive data in Object Storage Service (OSS) objects.
     *
     * @remarks
     * ### [](#)Prerequisites
     * To call this operation, make sure that asset authorization for your OSS bucket is complete and the bucket is connected. If the authorization is not complete, the bucket_not_authorized error code is returned when you call the operation.
     * ### [](#qps-)Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     * ### [](#)Additional information
     * After you call this operation, you can obtain the task ID. You can specify the task ID in the DescribeIdentifyTaskDetail operation to query the state of the task.
     * After the task is complete, you can call the DescribeOssObjectDetailV2 operation to query the identification results of sensitive data in the related OSS objects. When you call the DescribeOssObjectDetailV2 operation, you must specify BucketName, ServiceRegionId, and ObjectKey.
     *
     * @param request - ScanOssObjectV1Request
     *
     * @returns ScanOssObjectV1Response
     *
     * @param ScanOssObjectV1Request $request
     *
     * @return ScanOssObjectV1Response
     */
    public function scanOssObjectV1($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->scanOssObjectV1WithOptions($request, $runtime);
    }

    /**
     * Stops a de-identification task. After you stop a de-identification task, you can resume the task by calling the ManualTriggerMaskingProcess operation.
     *
     * @remarks
     * You can call this operation to stop a de-identification task that is running. For example, you can stop a de-identification task that is used to de-identify specific data.
     * # Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - StopMaskingProcessRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StopMaskingProcessResponse
     *
     * @param StopMaskingProcessRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return StopMaskingProcessResponse
     */
    public function stopMaskingProcessWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'StopMaskingProcess',
            'version' => '2019-01-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return StopMaskingProcessResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Stops a de-identification task. After you stop a de-identification task, you can resume the task by calling the ManualTriggerMaskingProcess operation.
     *
     * @remarks
     * You can call this operation to stop a de-identification task that is running. For example, you can stop a de-identification task that is used to de-identify specific data.
     * # Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - StopMaskingProcessRequest
     *
     * @returns StopMaskingProcessResponse
     *
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
