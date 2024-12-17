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
use AlibabaCloud\SDK\Sddp\V20190103\Models\ScanOssObjectV1Request;
use AlibabaCloud\SDK\Sddp\V20190103\Models\ScanOssObjectV1Response;
use AlibabaCloud\SDK\Sddp\V20190103\Models\ScanOssObjectV1ShrinkRequest;
use AlibabaCloud\SDK\Sddp\V20190103\Models\StopMaskingProcessRequest;
use AlibabaCloud\SDK\Sddp\V20190103\Models\StopMaskingProcessResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\GatewayPop\Client;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Sddp extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_productId    = 'Sddp';
        $gatewayClient       = new Client();
        $this->_spi          = $gatewayClient;
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
     * @summary Modifies the configurations of a common configuration item for alerts.
     *  *
     * @description You can call this operation to create or restore configurations based on the codes of common configuration items. This allows you to manage the configurations of common configuration items.
     * # Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param CreateConfigRequest $request CreateConfigRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateConfigResponse CreateConfigResponse
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
        if (!Utils::isUnset($request->featureType)) {
            $query['FeatureType'] = $request->featureType;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return CreateConfigResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateConfigResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Modifies the configurations of a common configuration item for alerts.
     *  *
     * @description You can call this operation to create or restore configurations based on the codes of common configuration items. This allows you to manage the configurations of common configuration items.
     * # Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param CreateConfigRequest $request CreateConfigRequest
     *
     * @return CreateConfigResponse CreateConfigResponse
     */
    public function createConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createConfigWithOptions($request, $runtime);
    }

    /**
     * @summary Authorizes Data Security Center (DSC) to scan data assets. The data assets can be a database, a project, or a bucket.
     *  *
     * @description You can call this operation to authorize DSC to scan data assets to ensure the security of the data assets.
     * # Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param CreateDataLimitRequest $request CreateDataLimitRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateDataLimitResponse CreateDataLimitResponse
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
        if (!Utils::isUnset($request->certificatePermission)) {
            $query['CertificatePermission'] = $request->certificatePermission;
        }
        if (!Utils::isUnset($request->enable)) {
            $query['Enable'] = $request->enable;
        }
        if (!Utils::isUnset($request->engineType)) {
            $query['EngineType'] = $request->engineType;
        }
        if (!Utils::isUnset($request->eventStatus)) {
            $query['EventStatus'] = $request->eventStatus;
        }
        if (!Utils::isUnset($request->featureType)) {
            $query['FeatureType'] = $request->featureType;
        }
        if (!Utils::isUnset($request->instantlyScan)) {
            $query['InstantlyScan'] = $request->instantlyScan;
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
        if (!Utils::isUnset($request->samplingSize)) {
            $query['SamplingSize'] = $request->samplingSize;
        }
        if (!Utils::isUnset($request->serviceRegionId)) {
            $query['ServiceRegionId'] = $request->serviceRegionId;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return CreateDataLimitResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateDataLimitResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Authorizes Data Security Center (DSC) to scan data assets. The data assets can be a database, a project, or a bucket.
     *  *
     * @description You can call this operation to authorize DSC to scan data assets to ensure the security of the data assets.
     * # Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param CreateDataLimitRequest $request CreateDataLimitRequest
     *
     * @return CreateDataLimitResponse CreateDataLimitResponse
     */
    public function createDataLimit($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDataLimitWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a custom sensitive data detection rule.
     *  *
     * @param CreateRuleRequest $request CreateRuleRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateRuleResponse CreateRuleResponse
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
        if (!Utils::isUnset($request->matchType)) {
            $query['MatchType'] = $request->matchType;
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
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
        }
        if (!Utils::isUnset($request->statExpress)) {
            $query['StatExpress'] = $request->statExpress;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->supportForm)) {
            $query['SupportForm'] = $request->supportForm;
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return CreateRuleResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateRuleResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Creates a custom sensitive data detection rule.
     *  *
     * @param CreateRuleRequest $request CreateRuleRequest
     *
     * @return CreateRuleResponse CreateRuleResponse
     */
    public function createRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createRuleWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a custom scan task. The custom scan task is used to scan data assets on which Data Security Center (DSC) is granted the scan permissions for sensitive data.
     *  *
     * @description You can call this operation to create a custom scan task for authorized data assets. You can customize the interval between two consecutive scan tasks and the time when the scan task is executed next time.
     * # Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param CreateScanTaskRequest $request CreateScanTaskRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateScanTaskResponse CreateScanTaskResponse
     */
    public function createScanTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dataLimitId)) {
            $query['DataLimitId'] = $request->dataLimitId;
        }
        if (!Utils::isUnset($request->featureType)) {
            $query['FeatureType'] = $request->featureType;
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
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return CreateScanTaskResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateScanTaskResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Creates a custom scan task. The custom scan task is used to scan data assets on which Data Security Center (DSC) is granted the scan permissions for sensitive data.
     *  *
     * @description You can call this operation to create a custom scan task for authorized data assets. You can customize the interval between two consecutive scan tasks and the time when the scan task is executed next time.
     * # Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param CreateScanTaskRequest $request CreateScanTaskRequest
     *
     * @return CreateScanTaskResponse CreateScanTaskResponse
     */
    public function createScanTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createScanTaskWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a service-linked role for Data Security Center (DSC) to grant DSC the permissions to access data assets in other services.
     *  *
     * @description You can call this operation to allow DSC to access the data assets in services such as Object Storage Service (OSS), ApsaraDB RDS, and MaxCompute. After you call this operation, the system automatically creates a service-linked role named AliyunServiceRoleForSDDP and attaches the AliyunServiceRolePolicyForSDDP policy to the role.
     * # Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param CreateSlrRoleRequest $request CreateSlrRoleRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateSlrRoleResponse CreateSlrRoleResponse
     */
    public function createSlrRoleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->featureType)) {
            $query['FeatureType'] = $request->featureType;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return CreateSlrRoleResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateSlrRoleResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Creates a service-linked role for Data Security Center (DSC) to grant DSC the permissions to access data assets in other services.
     *  *
     * @description You can call this operation to allow DSC to access the data assets in services such as Object Storage Service (OSS), ApsaraDB RDS, and MaxCompute. After you call this operation, the system automatically creates a service-linked role named AliyunServiceRoleForSDDP and attaches the AliyunServiceRolePolicyForSDDP policy to the role.
     * # Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param CreateSlrRoleRequest $request CreateSlrRoleRequest
     *
     * @return CreateSlrRoleResponse CreateSlrRoleResponse
     */
    public function createSlrRole($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSlrRoleWithOptions($request, $runtime);
    }

    /**
     * @summary Revokes the scan permissions on a data asset. The data asset can be a database, an instance, or a bucket.
     *  *
     * @description You can call this operation to revoke the permissions on a data asset from Data Security Center (DSC).
     * # Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param DeleteDataLimitRequest $request DeleteDataLimitRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteDataLimitResponse DeleteDataLimitResponse
     */
    public function deleteDataLimitWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->featureType)) {
            $query['FeatureType'] = $request->featureType;
        }
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DeleteDataLimitResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteDataLimitResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Revokes the scan permissions on a data asset. The data asset can be a database, an instance, or a bucket.
     *  *
     * @description You can call this operation to revoke the permissions on a data asset from Data Security Center (DSC).
     * # Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param DeleteDataLimitRequest $request DeleteDataLimitRequest
     *
     * @return DeleteDataLimitResponse DeleteDataLimitResponse
     */
    public function deleteDataLimit($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDataLimitWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a custom sensitive data detection rule from Data Security Center (DSC).
     *  *
     * @param DeleteRuleRequest $request DeleteRuleRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteRuleResponse DeleteRuleResponse
     */
    public function deleteRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->featureType)) {
            $query['FeatureType'] = $request->featureType;
        }
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->sourceIp)) {
            $query['SourceIp'] = $request->sourceIp;
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DeleteRuleResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteRuleResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Deletes a custom sensitive data detection rule from Data Security Center (DSC).
     *  *
     * @param DeleteRuleRequest $request DeleteRuleRequest
     *
     * @return DeleteRuleResponse DeleteRuleResponse
     */
    public function deleteRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteRuleWithOptions($request, $runtime);
    }

    /**
     * @param DescribeCategoryTemplateListRequest $request DescribeCategoryTemplateListRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeCategoryTemplateListResponse DescribeCategoryTemplateListResponse
     */
    public function describeCategoryTemplateListWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->usageScenario)) {
            $query['UsageScenario'] = $request->usageScenario;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeCategoryTemplateList',
            'version'     => '2019-01-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeCategoryTemplateListResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeCategoryTemplateListResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param DescribeCategoryTemplateListRequest $request DescribeCategoryTemplateListRequest
     *
     * @return DescribeCategoryTemplateListResponse DescribeCategoryTemplateListResponse
     */
    public function describeCategoryTemplateList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCategoryTemplateListWithOptions($request, $runtime);
    }

    /**
     * @summary Queries rules in a classification template by page.
     *  *
     * @description You can call this operation to query rules in a classification template.
     * # Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param DescribeCategoryTemplateRuleListRequest $request DescribeCategoryTemplateRuleListRequest
     * @param RuntimeOptions                          $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeCategoryTemplateRuleListResponse DescribeCategoryTemplateRuleListResponse
     */
    public function describeCategoryTemplateRuleListWithOptions($request, $runtime)
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeCategoryTemplateRuleListResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeCategoryTemplateRuleListResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries rules in a classification template by page.
     *  *
     * @description You can call this operation to query rules in a classification template.
     * # Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param DescribeCategoryTemplateRuleListRequest $request DescribeCategoryTemplateRuleListRequest
     *
     * @return DescribeCategoryTemplateRuleListResponse DescribeCategoryTemplateRuleListResponse
     */
    public function describeCategoryTemplateRuleList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCategoryTemplateRuleListWithOptions($request, $runtime);
    }

    /**
     * @summary Queries data in the columns of the tables that Data Security Center (DSC) is authorized to access. The tables include the tables of MaxCompute and ApsaraDB RDS.
     *  *
     * @description You can call this operation to query the data in columns of a table that may contain sensitive data. This helps you analyze sensitive data.
     * ## [](#)Precautions
     * The DescribeColumns operation is changed to DescribeColumnsV2. We recommend that you call the DescribeColumnsV2 operation when you develop your applications.
     * ## [](#qps)Limits
     * Each Alibaba Cloud account can call this operation up to 10 times per second. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param DescribeColumnsRequest $request DescribeColumnsRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeColumnsResponse DescribeColumnsResponse
     */
    public function describeColumnsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->engineType)) {
            $query['EngineType'] = $request->engineType;
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
        if (!Utils::isUnset($request->modelTagId)) {
            $query['ModelTagId'] = $request->modelTagId;
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
        if (!Utils::isUnset($request->templateId)) {
            $query['TemplateId'] = $request->templateId;
        }
        if (!Utils::isUnset($request->templateRuleId)) {
            $query['TemplateRuleId'] = $request->templateRuleId;
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeColumnsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeColumnsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries data in the columns of the tables that Data Security Center (DSC) is authorized to access. The tables include the tables of MaxCompute and ApsaraDB RDS.
     *  *
     * @description You can call this operation to query the data in columns of a table that may contain sensitive data. This helps you analyze sensitive data.
     * ## [](#)Precautions
     * The DescribeColumns operation is changed to DescribeColumnsV2. We recommend that you call the DescribeColumnsV2 operation when you develop your applications.
     * ## [](#qps)Limits
     * Each Alibaba Cloud account can call this operation up to 10 times per second. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param DescribeColumnsRequest $request DescribeColumnsRequest
     *
     * @return DescribeColumnsResponse DescribeColumnsResponse
     */
    public function describeColumns($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeColumnsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the columns of tables in instances, such as MaxCompute projects and ApsaraDB RDS instances, that you authorize Data Security Center (DSC) to access.
     *  *
     * @param DescribeColumnsV2Request $request DescribeColumnsV2Request
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeColumnsV2Response DescribeColumnsV2Response
     */
    public function describeColumnsV2WithOptions($request, $runtime)
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
            'action'      => 'DescribeColumnsV2',
            'version'     => '2019-01-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeColumnsV2Response::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeColumnsV2Response::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the columns of tables in instances, such as MaxCompute projects and ApsaraDB RDS instances, that you authorize Data Security Center (DSC) to access.
     *  *
     * @param DescribeColumnsV2Request $request DescribeColumnsV2Request
     *
     * @return DescribeColumnsV2Response DescribeColumnsV2Response
     */
    public function describeColumnsV2($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeColumnsV2WithOptions($request, $runtime);
    }

    /**
     * @summary Queries common configuration items for alerts.
     *  *
     * @param DescribeConfigsRequest $request DescribeConfigsRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeConfigsResponse DescribeConfigsResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeConfigsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeConfigsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries common configuration items for alerts.
     *  *
     * @param DescribeConfigsRequest $request DescribeConfigsRequest
     *
     * @return DescribeConfigsResponse DescribeConfigsResponse
     */
    public function describeConfigs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeConfigsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the sensitive data detection results of data assets that Data Security Center (DSC) is authorized to access.
     *  *
     * @param DescribeDataAssetsRequest $request DescribeDataAssetsRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDataAssetsResponse DescribeDataAssetsResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeDataAssetsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeDataAssetsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the sensitive data detection results of data assets that Data Security Center (DSC) is authorized to access.
     *  *
     * @param DescribeDataAssetsRequest $request DescribeDataAssetsRequest
     *
     * @return DescribeDataAssetsResponse DescribeDataAssetsResponse
     */
    public function describeDataAssets($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDataAssetsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the details of a data asset, such as a MaxCompute project, an ApsaraDB RDS database, or an Object Storage Service (OSS) bucket, that you authorize Data Security Center (DSC) to access.
     *  *
     * @param DescribeDataLimitDetailRequest $request DescribeDataLimitDetailRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDataLimitDetailResponse DescribeDataLimitDetailResponse
     */
    public function describeDataLimitDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->featureType)) {
            $query['FeatureType'] = $request->featureType;
        }
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeDataLimitDetailResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeDataLimitDetailResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the details of a data asset, such as a MaxCompute project, an ApsaraDB RDS database, or an Object Storage Service (OSS) bucket, that you authorize Data Security Center (DSC) to access.
     *  *
     * @param DescribeDataLimitDetailRequest $request DescribeDataLimitDetailRequest
     *
     * @return DescribeDataLimitDetailResponse DescribeDataLimitDetailResponse
     */
    public function describeDataLimitDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDataLimitDetailWithOptions($request, $runtime);
    }

    /**
     * @summary Queries data assets, such as instances, databases, and Object Storage Service (OSS) buckets, that you authorize Data Security Center (DSC) to scan in a service.
     *  *
     * @description You can call this operation to query the data assets that are authorized to be scanned. This facilitates resource search and aggregation.
     * # Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param DescribeDataLimitSetRequest $request DescribeDataLimitSetRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDataLimitSetResponse DescribeDataLimitSetResponse
     */
    public function describeDataLimitSetWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->featureType)) {
            $query['FeatureType'] = $request->featureType;
        }
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeDataLimitSetResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeDataLimitSetResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries data assets, such as instances, databases, and Object Storage Service (OSS) buckets, that you authorize Data Security Center (DSC) to scan in a service.
     *  *
     * @description You can call this operation to query the data assets that are authorized to be scanned. This facilitates resource search and aggregation.
     * # Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param DescribeDataLimitSetRequest $request DescribeDataLimitSetRequest
     *
     * @return DescribeDataLimitSetResponse DescribeDataLimitSetResponse
     */
    public function describeDataLimitSet($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDataLimitSetWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the data assets such as instances, databases, or buckets that Data Security Center (DSC) is authorized to access.
     *  *
     * @param DescribeDataLimitsRequest $request DescribeDataLimitsRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDataLimitsResponse DescribeDataLimitsResponse
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
        if (!Utils::isUnset($request->featureType)) {
            $query['FeatureType'] = $request->featureType;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->memberAccount)) {
            $query['MemberAccount'] = $request->memberAccount;
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeDataLimitsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeDataLimitsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the data assets such as instances, databases, or buckets that Data Security Center (DSC) is authorized to access.
     *  *
     * @param DescribeDataLimitsRequest $request DescribeDataLimitsRequest
     *
     * @return DescribeDataLimitsResponse DescribeDataLimitsResponse
     */
    public function describeDataLimits($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDataLimitsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the execution information about a de-identification task.
     *  *
     * @description You can call this operation to query the execution information of a static de-identification task, including the status and progress.
     * # Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param DescribeDataMaskingRunHistoryRequest $request DescribeDataMaskingRunHistoryRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDataMaskingRunHistoryResponse DescribeDataMaskingRunHistoryResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeDataMaskingRunHistoryResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeDataMaskingRunHistoryResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the execution information about a de-identification task.
     *  *
     * @description You can call this operation to query the execution information of a static de-identification task, including the status and progress.
     * # Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param DescribeDataMaskingRunHistoryRequest $request DescribeDataMaskingRunHistoryRequest
     *
     * @return DescribeDataMaskingRunHistoryResponse DescribeDataMaskingRunHistoryResponse
     */
    public function describeDataMaskingRunHistory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDataMaskingRunHistoryWithOptions($request, $runtime);
    }

    /**
     * @summary Queries de-identification tasks.
     *  *
     * @description You can call this operation to query static de-identification tasks. This facilitates task queries and management.
     * # Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param DescribeDataMaskingTasksRequest $request DescribeDataMaskingTasksRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDataMaskingTasksResponse DescribeDataMaskingTasksResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeDataMaskingTasksResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeDataMaskingTasksResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries de-identification tasks.
     *  *
     * @description You can call this operation to query static de-identification tasks. This facilitates task queries and management.
     * # Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param DescribeDataMaskingTasksRequest $request DescribeDataMaskingTasksRequest
     *
     * @return DescribeDataMaskingTasksResponse DescribeDataMaskingTasksResponse
     */
    public function describeDataMaskingTasks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDataMaskingTasksWithOptions($request, $runtime);
    }

    /**
     * @summary 查看数据对象列详情
     *  *
     * @param DescribeDataObjectColumnDetailRequest $request DescribeDataObjectColumnDetailRequest
     * @param RuntimeOptions                        $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDataObjectColumnDetailResponse DescribeDataObjectColumnDetailResponse
     */
    public function describeDataObjectColumnDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->featureType)) {
            $query['FeatureType'] = $request->featureType;
        }
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->productId)) {
            $query['ProductId'] = $request->productId;
        }
        if (!Utils::isUnset($request->templateId)) {
            $query['TemplateId'] = $request->templateId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDataObjectColumnDetail',
            'version'     => '2019-01-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeDataObjectColumnDetailResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeDataObjectColumnDetailResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 查看数据对象列详情
     *  *
     * @param DescribeDataObjectColumnDetailRequest $request DescribeDataObjectColumnDetailRequest
     *
     * @return DescribeDataObjectColumnDetailResponse DescribeDataObjectColumnDetailResponse
     */
    public function describeDataObjectColumnDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDataObjectColumnDetailWithOptions($request, $runtime);
    }

    /**
     * @summary 查看数据对象列详情V2
     *  *
     * @param DescribeDataObjectColumnDetailV2Request $request DescribeDataObjectColumnDetailV2Request
     * @param RuntimeOptions                          $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDataObjectColumnDetailV2Response DescribeDataObjectColumnDetailV2Response
     */
    public function describeDataObjectColumnDetailV2WithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->featureType)) {
            $query['FeatureType'] = $request->featureType;
        }
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->productId)) {
            $query['ProductId'] = $request->productId;
        }
        if (!Utils::isUnset($request->templateId)) {
            $query['TemplateId'] = $request->templateId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDataObjectColumnDetailV2',
            'version'     => '2019-01-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeDataObjectColumnDetailV2Response::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeDataObjectColumnDetailV2Response::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 查看数据对象列详情V2
     *  *
     * @param DescribeDataObjectColumnDetailV2Request $request DescribeDataObjectColumnDetailV2Request
     *
     * @return DescribeDataObjectColumnDetailV2Response DescribeDataObjectColumnDetailV2Response
     */
    public function describeDataObjectColumnDetailV2($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDataObjectColumnDetailV2WithOptions($request, $runtime);
    }

    /**
     * @summary 分页查询数据目录对象
     *  *
     * @param DescribeDataObjectsRequest $request DescribeDataObjectsRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDataObjectsResponse DescribeDataObjectsResponse
     */
    public function describeDataObjectsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->domainId)) {
            $query['DomainId'] = $request->domainId;
        }
        if (!Utils::isUnset($request->featureType)) {
            $query['FeatureType'] = $request->featureType;
        }
        if (!Utils::isUnset($request->fileCategoryCode)) {
            $query['FileCategoryCode'] = $request->fileCategoryCode;
        }
        if (!Utils::isUnset($request->fileType)) {
            $query['FileType'] = $request->fileType;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->memberAccount)) {
            $query['MemberAccount'] = $request->memberAccount;
        }
        if (!Utils::isUnset($request->modelIds)) {
            $query['ModelIds'] = $request->modelIds;
        }
        if (!Utils::isUnset($request->modelTagIds)) {
            $query['ModelTagIds'] = $request->modelTagIds;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->parentCategoryIds)) {
            $query['ParentCategoryIds'] = $request->parentCategoryIds;
        }
        if (!Utils::isUnset($request->productIds)) {
            $query['ProductIds'] = $request->productIds;
        }
        if (!Utils::isUnset($request->queryName)) {
            $query['QueryName'] = $request->queryName;
        }
        if (!Utils::isUnset($request->riskLevels)) {
            $query['RiskLevels'] = $request->riskLevels;
        }
        if (!Utils::isUnset($request->serviceRegionId)) {
            $query['ServiceRegionId'] = $request->serviceRegionId;
        }
        if (!Utils::isUnset($request->templateId)) {
            $query['TemplateId'] = $request->templateId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDataObjects',
            'version'     => '2019-01-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeDataObjectsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeDataObjectsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 分页查询数据目录对象
     *  *
     * @param DescribeDataObjectsRequest $request DescribeDataObjectsRequest
     *
     * @return DescribeDataObjectsResponse DescribeDataObjectsResponse
     */
    public function describeDataObjects($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDataObjectsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDocTypesRequest $request DescribeDocTypesRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDocTypesResponse DescribeDocTypesResponse
     */
    public function describeDocTypesWithOptions($request, $runtime)
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
            'action'      => 'DescribeDocTypes',
            'version'     => '2019-01-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeDocTypesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeDocTypesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param DescribeDocTypesRequest $request DescribeDocTypesRequest
     *
     * @return DescribeDocTypesResponse DescribeDocTypesResponse
     */
    public function describeDocTypes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDocTypesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the details of an anomalous event. The details include the time when the anomalous event occurred, and the description and handling status of the anomalous event.
     *  *
     * @param DescribeEventDetailRequest $request DescribeEventDetailRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeEventDetailResponse DescribeEventDetailResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeEventDetailResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeEventDetailResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the details of an anomalous event. The details include the time when the anomalous event occurred, and the description and handling status of the anomalous event.
     *  *
     * @param DescribeEventDetailRequest $request DescribeEventDetailRequest
     *
     * @return DescribeEventDetailResponse DescribeEventDetailResponse
     */
    public function describeEventDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEventDetailWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the types of anomalous events.
     *  *
     * @param DescribeEventTypesRequest $request DescribeEventTypesRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeEventTypesResponse DescribeEventTypesResponse
     */
    public function describeEventTypesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->featureType)) {
            $query['FeatureType'] = $request->featureType;
        }
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeEventTypesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeEventTypesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the types of anomalous events.
     *  *
     * @param DescribeEventTypesRequest $request DescribeEventTypesRequest
     *
     * @return DescribeEventTypesResponse DescribeEventTypesResponse
     */
    public function describeEventTypes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEventTypesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries anomalous events.
     *  *
     * @description You can call this operation to query anomalous events that may involve data leaks. This helps you search for and handle anomalous events.
     * # Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param DescribeEventsRequest $request DescribeEventsRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeEventsResponse DescribeEventsResponse
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
        if (!Utils::isUnset($request->warnLevel)) {
            $query['WarnLevel'] = $request->warnLevel;
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeEventsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeEventsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries anomalous events.
     *  *
     * @description You can call this operation to query anomalous events that may involve data leaks. This helps you search for and handle anomalous events.
     * # Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param DescribeEventsRequest $request DescribeEventsRequest
     *
     * @return DescribeEventsResponse DescribeEventsResponse
     */
    public function describeEvents($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEventsWithOptions($request, $runtime);
    }

    /**
     * @summary 查询识别任务状态
     *  *
     * @param DescribeIdentifyTaskStatusRequest $request DescribeIdentifyTaskStatusRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeIdentifyTaskStatusResponse DescribeIdentifyTaskStatusResponse
     */
    public function describeIdentifyTaskStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeIdentifyTaskStatus',
            'version'     => '2019-01-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeIdentifyTaskStatusResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeIdentifyTaskStatusResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 查询识别任务状态
     *  *
     * @param DescribeIdentifyTaskStatusRequest $request DescribeIdentifyTaskStatusRequest
     *
     * @return DescribeIdentifyTaskStatusResponse DescribeIdentifyTaskStatusResponse
     */
    public function describeIdentifyTaskStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeIdentifyTaskStatusWithOptions($request, $runtime);
    }

    /**
     * @summary Queries a list of data assets.
     *  *
     * @description You can query a list of unauthorized or authorized data assets based on the value of AuthStatus.
     * This operation is no longer used for the KMS console of the new version.
     * # [](#qps-)QPS limits
     * This operation can be called up to 10 times per second for each Alibaba Cloud account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param DescribeInstanceSourcesRequest $request DescribeInstanceSourcesRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeInstanceSourcesResponse DescribeInstanceSourcesResponse
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
        if (!Utils::isUnset($request->featureType)) {
            $query['FeatureType'] = $request->featureType;
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeInstanceSourcesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeInstanceSourcesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries a list of data assets.
     *  *
     * @description You can query a list of unauthorized or authorized data assets based on the value of AuthStatus.
     * This operation is no longer used for the KMS console of the new version.
     * # [](#qps-)QPS limits
     * This operation can be called up to 10 times per second for each Alibaba Cloud account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param DescribeInstanceSourcesRequest $request DescribeInstanceSourcesRequest
     *
     * @return DescribeInstanceSourcesResponse DescribeInstanceSourcesResponse
     */
    public function describeInstanceSources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceSourcesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries data assets such as MaxCompute, ApsaraDB RDS, and Object Storage Service (OSS) that you authorize Data Security Center (DSC) to access.
     *  *
     * @description When you call the DescribeInstances operation, you can specify parameters such as Name and RiskLevelId to query data assets that meet filter conditions.
     * # Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param DescribeInstancesRequest $request DescribeInstancesRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeInstancesResponse DescribeInstancesResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeInstancesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries data assets such as MaxCompute, ApsaraDB RDS, and Object Storage Service (OSS) that you authorize Data Security Center (DSC) to access.
     *  *
     * @description When you call the DescribeInstances operation, you can specify parameters such as Name and RiskLevelId to query data assets that meet filter conditions.
     * # Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param DescribeInstancesRequest $request DescribeInstancesRequest
     *
     * @return DescribeInstancesResponse DescribeInstancesResponse
     */
    public function describeInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstancesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the details of an Object Storage Service (OSS) object that Data Security Center (DSC) is authorized to access.
     *  *
     * @description You can call this operation to query the details of an Object Storage Service (OSS) object. This helps you locate sensitive data detected in OSS.
     * ## [](#)Precautions
     * The DescribeOssObjectDetail operation is chagned to DescribeOssObjectDetailV2. We recommend that you call the DescribeOssObjectDetailV2 operation when you develop your applications.
     * ## [](#qps)Limits
     * Each Alibaba Cloud account can call this operation up to 10 times per second. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param DescribeOssObjectDetailRequest $request DescribeOssObjectDetailRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeOssObjectDetailResponse DescribeOssObjectDetailResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeOssObjectDetailResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeOssObjectDetailResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the details of an Object Storage Service (OSS) object that Data Security Center (DSC) is authorized to access.
     *  *
     * @description You can call this operation to query the details of an Object Storage Service (OSS) object. This helps you locate sensitive data detected in OSS.
     * ## [](#)Precautions
     * The DescribeOssObjectDetail operation is chagned to DescribeOssObjectDetailV2. We recommend that you call the DescribeOssObjectDetailV2 operation when you develop your applications.
     * ## [](#qps)Limits
     * Each Alibaba Cloud account can call this operation up to 10 times per second. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param DescribeOssObjectDetailRequest $request DescribeOssObjectDetailRequest
     *
     * @return DescribeOssObjectDetailResponse DescribeOssObjectDetailResponse
     */
    public function describeOssObjectDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeOssObjectDetailWithOptions($request, $runtime);
    }

    /**
     * @summary 调用本接口查询数据安全中心连接授权的OSS的单个存储对象的详细信息
     *  *
     * @param DescribeOssObjectDetailV2Request $request DescribeOssObjectDetailV2Request
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeOssObjectDetailV2Response DescribeOssObjectDetailV2Response
     */
    public function describeOssObjectDetailV2WithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bucketName)) {
            $query['BucketName'] = $request->bucketName;
        }
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->objectKey)) {
            $query['ObjectKey'] = $request->objectKey;
        }
        if (!Utils::isUnset($request->serviceRegionId)) {
            $query['ServiceRegionId'] = $request->serviceRegionId;
        }
        if (!Utils::isUnset($request->templateId)) {
            $query['TemplateId'] = $request->templateId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeOssObjectDetailV2',
            'version'     => '2019-01-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeOssObjectDetailV2Response::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeOssObjectDetailV2Response::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 调用本接口查询数据安全中心连接授权的OSS的单个存储对象的详细信息
     *  *
     * @param DescribeOssObjectDetailV2Request $request DescribeOssObjectDetailV2Request
     *
     * @return DescribeOssObjectDetailV2Response DescribeOssObjectDetailV2Response
     */
    public function describeOssObjectDetailV2($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeOssObjectDetailV2WithOptions($request, $runtime);
    }

    /**
     * @summary Queries Object Storage Service (OSS) objects that you authorize Data Security Center (DSC) to access.
     *  *
     * @param DescribeOssObjectsRequest $request DescribeOssObjectsRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeOssObjectsResponse DescribeOssObjectsResponse
     */
    public function describeOssObjectsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->fileCategoryCode)) {
            $query['FileCategoryCode'] = $request->fileCategoryCode;
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
        if (!Utils::isUnset($request->marker)) {
            $query['Marker'] = $request->marker;
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
        if (!Utils::isUnset($request->templateId)) {
            $query['TemplateId'] = $request->templateId;
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeOssObjectsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeOssObjectsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries Object Storage Service (OSS) objects that you authorize Data Security Center (DSC) to access.
     *  *
     * @param DescribeOssObjectsRequest $request DescribeOssObjectsRequest
     *
     * @return DescribeOssObjectsResponse DescribeOssObjectsResponse
     */
    public function describeOssObjects($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeOssObjectsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries information about the MaxCompute packages that Data Security Center (DSC) is authorized to access. The information includes the names of MaxCompute packages, the accounts of MaxCompute package owners, and the sensitivity levels of MaxCompute packages.
     *  *
     * @description You can call this operation to query MaxCompute packages that are scanned by DSC. This helps you search for MaxCompute packages and view the summary of MaxCompute packages.
     * # Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param DescribePackagesRequest $request DescribePackagesRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribePackagesResponse DescribePackagesResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribePackagesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribePackagesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries information about the MaxCompute packages that Data Security Center (DSC) is authorized to access. The information includes the names of MaxCompute packages, the accounts of MaxCompute package owners, and the sensitivity levels of MaxCompute packages.
     *  *
     * @description You can call this operation to query MaxCompute packages that are scanned by DSC. This helps you search for MaxCompute packages and view the summary of MaxCompute packages.
     * # Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param DescribePackagesRequest $request DescribePackagesRequest
     *
     * @return DescribePackagesResponse DescribePackagesResponse
     */
    public function describePackages($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePackagesWithOptions($request, $runtime);
    }

    /**
     * @summary 获取一级授权列表
     *  *
     * @param DescribeParentInstanceRequest $request DescribeParentInstanceRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeParentInstanceResponse DescribeParentInstanceResponse
     */
    public function describeParentInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->authStatus)) {
            $query['AuthStatus'] = $request->authStatus;
        }
        if (!Utils::isUnset($request->checkStatus)) {
            $query['CheckStatus'] = $request->checkStatus;
        }
        if (!Utils::isUnset($request->clusterStatus)) {
            $query['ClusterStatus'] = $request->clusterStatus;
        }
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->dbName)) {
            $query['DbName'] = $request->dbName;
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
        if (!Utils::isUnset($request->memberAccount)) {
            $query['MemberAccount'] = $request->memberAccount;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->serviceRegionId)) {
            $query['ServiceRegionId'] = $request->serviceRegionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeParentInstance',
            'version'     => '2019-01-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeParentInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeParentInstanceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 获取一级授权列表
     *  *
     * @param DescribeParentInstanceRequest $request DescribeParentInstanceRequest
     *
     * @return DescribeParentInstanceResponse DescribeParentInstanceResponse
     */
    public function describeParentInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeParentInstanceWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the sensitivity levels that are defined in a rule template provided by Data Security Center (DSC).
     *  *
     * @description You can call this operation to query the sensitivity levels that are defined in the current rule template provided by DSC. This helps you learn about the number of times that each sensitivity level is referenced in the rule template and the highest sensitivity level.
     * # Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param DescribeRiskLevelsRequest $request DescribeRiskLevelsRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeRiskLevelsResponse DescribeRiskLevelsResponse
     */
    public function describeRiskLevelsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->featureType)) {
            $query['FeatureType'] = $request->featureType;
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeRiskLevelsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeRiskLevelsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the sensitivity levels that are defined in a rule template provided by Data Security Center (DSC).
     *  *
     * @description You can call this operation to query the sensitivity levels that are defined in the current rule template provided by DSC. This helps you learn about the number of times that each sensitivity level is referenced in the rule template and the highest sensitivity level.
     * # Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param DescribeRiskLevelsRequest $request DescribeRiskLevelsRequest
     *
     * @return DescribeRiskLevelsResponse DescribeRiskLevelsResponse
     */
    public function describeRiskLevels($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRiskLevelsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries sensitive data detection rules.
     *  *
     * @param DescribeRulesRequest $request DescribeRulesRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeRulesResponse DescribeRulesResponse
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
        if (!Utils::isUnset($request->cooperationChannel)) {
            $query['CooperationChannel'] = $request->cooperationChannel;
        }
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->customType)) {
            $query['CustomType'] = $request->customType;
        }
        if (!Utils::isUnset($request->featureType)) {
            $query['FeatureType'] = $request->featureType;
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
        if (!Utils::isUnset($request->matchType)) {
            $query['MatchType'] = $request->matchType;
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
        if (!Utils::isUnset($request->simplify)) {
            $query['Simplify'] = $request->simplify;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->supportForm)) {
            $query['SupportForm'] = $request->supportForm;
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeRulesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeRulesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries sensitive data detection rules.
     *  *
     * @param DescribeRulesRequest $request DescribeRulesRequest
     *
     * @return DescribeRulesResponse DescribeRulesResponse
     */
    public function describeRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRulesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries tables in data assets, such as MaxCompute projects and ApsaraDB RDS instances, that you authorize Data Security Center (DSC) to access.
     *  *
     * @description When you call the DescribeTables operation to query tables, you can specify parameters such as Name and RiskLevelId to filter tables.
     * # Limits
     * You can send up to 10 requests per second to call this operation by using your Alibaba Cloud account. If you send excessive requests, throttling is implemented, and your business may be affected.
     *  *
     * @param DescribeTablesRequest $request DescribeTablesRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeTablesResponse DescribeTablesResponse
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
        if (!Utils::isUnset($request->templateId)) {
            $query['TemplateId'] = $request->templateId;
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeTablesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeTablesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries tables in data assets, such as MaxCompute projects and ApsaraDB RDS instances, that you authorize Data Security Center (DSC) to access.
     *  *
     * @description When you call the DescribeTables operation to query tables, you can specify parameters such as Name and RiskLevelId to filter tables.
     * # Limits
     * You can send up to 10 requests per second to call this operation by using your Alibaba Cloud account. If you send excessive requests, throttling is implemented, and your business may be affected.
     *  *
     * @param DescribeTablesRequest $request DescribeTablesRequest
     *
     * @return DescribeTablesResponse DescribeTablesResponse
     */
    public function describeTables($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTablesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeTemplateAllRulesRequest $request DescribeTemplateAllRulesRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeTemplateAllRulesResponse DescribeTemplateAllRulesResponse
     */
    public function describeTemplateAllRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->featureType)) {
            $query['FeatureType'] = $request->featureType;
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
            'action'      => 'DescribeTemplateAllRules',
            'version'     => '2019-01-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeTemplateAllRulesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeTemplateAllRulesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param DescribeTemplateAllRulesRequest $request DescribeTemplateAllRulesRequest
     *
     * @return DescribeTemplateAllRulesResponse DescribeTemplateAllRulesResponse
     */
    public function describeTemplateAllRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTemplateAllRulesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about an account.
     *  *
     * @description You can call this operation to query the information about the current account. This helps you get familiar with your account that accesses Data Security Center (DSC).
     * # Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param DescribeUserStatusRequest $request DescribeUserStatusRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeUserStatusResponse DescribeUserStatusResponse
     */
    public function describeUserStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->featureType)) {
            $query['FeatureType'] = $request->featureType;
        }
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeUserStatusResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeUserStatusResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the information about an account.
     *  *
     * @description You can call this operation to query the information about the current account. This helps you get familiar with your account that accesses Data Security Center (DSC).
     * # Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param DescribeUserStatusRequest $request DescribeUserStatusRequest
     *
     * @return DescribeUserStatusResponse DescribeUserStatusResponse
     */
    public function describeUserStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeUserStatusWithOptions($request, $runtime);
    }

    /**
     * @summary Disables a configuration item. After you disable a configuration item, you can call the CreateConfig operation to enable the configuration item by specifying the code of the configuration item for the Code parameter in the request.
     *  *
     * @description You can call this operation to disable a configuration item based on the code of the configuration item. This helps you modify configurations at the earliest opportunity.
     * # Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param DisableUserConfigRequest $request DisableUserConfigRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return DisableUserConfigResponse DisableUserConfigResponse
     */
    public function disableUserConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->code)) {
            $query['Code'] = $request->code;
        }
        if (!Utils::isUnset($request->featureType)) {
            $query['FeatureType'] = $request->featureType;
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DisableUserConfigResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DisableUserConfigResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Disables a configuration item. After you disable a configuration item, you can call the CreateConfig operation to enable the configuration item by specifying the code of the configuration item for the Code parameter in the request.
     *  *
     * @description You can call this operation to disable a configuration item based on the code of the configuration item. This helps you modify configurations at the earliest opportunity.
     * # Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param DisableUserConfigRequest $request DisableUserConfigRequest
     *
     * @return DisableUserConfigResponse DisableUserConfigResponse
     */
    public function disableUserConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableUserConfigWithOptions($request, $runtime);
    }

    /**
     * @summary Dynamically de-identifies sensitive data.
     *  *
     * @param ExecDatamaskRequest $request ExecDatamaskRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return ExecDatamaskResponse ExecDatamaskResponse
     */
    public function execDatamaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->data)) {
            $query['Data'] = $request->data;
        }
        if (!Utils::isUnset($request->featureType)) {
            $query['FeatureType'] = $request->featureType;
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ExecDatamaskResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ExecDatamaskResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Dynamically de-identifies sensitive data.
     *  *
     * @param ExecDatamaskRequest $request ExecDatamaskRequest
     *
     * @return ExecDatamaskResponse ExecDatamaskResponse
     */
    public function execDatamask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->execDatamaskWithOptions($request, $runtime);
    }

    /**
     * @summary Triggers a de-identification task.
     *  *
     * @param ManualTriggerMaskingProcessRequest $request ManualTriggerMaskingProcessRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return ManualTriggerMaskingProcessResponse ManualTriggerMaskingProcessResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ManualTriggerMaskingProcessResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ManualTriggerMaskingProcessResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Triggers a de-identification task.
     *  *
     * @param ManualTriggerMaskingProcessRequest $request ManualTriggerMaskingProcessRequest
     *
     * @return ManualTriggerMaskingProcessResponse ManualTriggerMaskingProcessResponse
     */
    public function manualTriggerMaskingProcess($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->manualTriggerMaskingProcessWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies configuration items for a data asset that you authorize Data Security Center (DSC) to access.
     *  *
     * @param ModifyDataLimitRequest $request ModifyDataLimitRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyDataLimitResponse ModifyDataLimitResponse
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
        if (!Utils::isUnset($request->featureType)) {
            $query['FeatureType'] = $request->featureType;
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
        if (!Utils::isUnset($request->samplingSize)) {
            $query['SamplingSize'] = $request->samplingSize;
        }
        if (!Utils::isUnset($request->securityGroupIdList)) {
            $query['SecurityGroupIdList'] = $request->securityGroupIdList;
        }
        if (!Utils::isUnset($request->serviceRegionId)) {
            $query['ServiceRegionId'] = $request->serviceRegionId;
        }
        if (!Utils::isUnset($request->userName)) {
            $query['UserName'] = $request->userName;
        }
        if (!Utils::isUnset($request->vSwitchIdList)) {
            $query['VSwitchIdList'] = $request->vSwitchIdList;
        }
        if (!Utils::isUnset($request->vpcId)) {
            $query['VpcId'] = $request->vpcId;
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ModifyDataLimitResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ModifyDataLimitResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Modifies configuration items for a data asset that you authorize Data Security Center (DSC) to access.
     *  *
     * @param ModifyDataLimitRequest $request ModifyDataLimitRequest
     *
     * @return ModifyDataLimitResponse ModifyDataLimitResponse
     */
    public function modifyDataLimit($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDataLimitWithOptions($request, $runtime);
    }

    /**
     * @summary Changes the sensitivity levels of sensitive data. You can change the default sensitivity levels of data that cannot be classified as sensitive or insensitive, and the sensitivity levels of data that can be classified as sensitive.
     *  *
     * @description You can call this operation to modify the sensitivity levels of data. This helps you manage the sensitivity levels.
     * # Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param ModifyDefaultLevelRequest $request ModifyDefaultLevelRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyDefaultLevelResponse ModifyDefaultLevelResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ModifyDefaultLevelResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ModifyDefaultLevelResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Changes the sensitivity levels of sensitive data. You can change the default sensitivity levels of data that cannot be classified as sensitive or insensitive, and the sensitivity levels of data that can be classified as sensitive.
     *  *
     * @description You can call this operation to modify the sensitivity levels of data. This helps you manage the sensitivity levels.
     * # Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param ModifyDefaultLevelRequest $request ModifyDefaultLevelRequest
     *
     * @return ModifyDefaultLevelResponse ModifyDefaultLevelResponse
     */
    public function modifyDefaultLevel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDefaultLevelWithOptions($request, $runtime);
    }

    /**
     * @summary Handles an anomalous event.
     *  *
     * @description You can call this operation to handle anomalous events that involve data leaks. This helps protect your data assets at the earliest opportunity.
     * # Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param ModifyEventStatusRequest $request ModifyEventStatusRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyEventStatusResponse ModifyEventStatusResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ModifyEventStatusResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ModifyEventStatusResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Handles an anomalous event.
     *  *
     * @description You can call this operation to handle anomalous events that involve data leaks. This helps protect your data assets at the earliest opportunity.
     * # Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param ModifyEventStatusRequest $request ModifyEventStatusRequest
     *
     * @return ModifyEventStatusResponse ModifyEventStatusResponse
     */
    public function modifyEventStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyEventStatusWithOptions($request, $runtime);
    }

    /**
     * @summary Enables the detection of anomalous events of subtypes.
     *  *
     * @param ModifyEventTypeStatusRequest $request ModifyEventTypeStatusRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyEventTypeStatusResponse ModifyEventTypeStatusResponse
     */
    public function modifyEventTypeStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->featureType)) {
            $query['FeatureType'] = $request->featureType;
        }
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ModifyEventTypeStatusResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ModifyEventTypeStatusResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Enables the detection of anomalous events of subtypes.
     *  *
     * @param ModifyEventTypeStatusRequest $request ModifyEventTypeStatusRequest
     *
     * @return ModifyEventTypeStatusResponse ModifyEventTypeStatusResponse
     */
    public function modifyEventTypeStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyEventTypeStatusWithOptions($request, $runtime);
    }

    /**
     * @summary Enables or disables the report task.
     *  *
     * @description You can call this operation to enable or disable the report task. After you activate Data Security Center (DSC), the report task is enabled by default. After you disable the report task, you cannot view statistics that are newly generated in the Report Center module, on the Overview page of the Cloud Native Data Audit module, and in the Data security lab module. Existing statistics are not affected.
     * # Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param ModifyReportTaskStatusRequest $request ModifyReportTaskStatusRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyReportTaskStatusResponse ModifyReportTaskStatusResponse
     */
    public function modifyReportTaskStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->featureType)) {
            $query['FeatureType'] = $request->featureType;
        }
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ModifyReportTaskStatusResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ModifyReportTaskStatusResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Enables or disables the report task.
     *  *
     * @description You can call this operation to enable or disable the report task. After you activate Data Security Center (DSC), the report task is enabled by default. After you disable the report task, you cannot view statistics that are newly generated in the Report Center module, on the Overview page of the Cloud Native Data Audit module, and in the Data security lab module. Existing statistics are not affected.
     * # Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param ModifyReportTaskStatusRequest $request ModifyReportTaskStatusRequest
     *
     * @return ModifyReportTaskStatusResponse ModifyReportTaskStatusResponse
     */
    public function modifyReportTaskStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyReportTaskStatusWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies a custom sensitive data detection rule in Data Security Center (DSC).
     *  *
     * @description When you call this operation, you must configure request parameters to specify the rule name, rule ID, and rule content.
     * # Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param ModifyRuleRequest $request ModifyRuleRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyRuleResponse ModifyRuleResponse
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
        if (!Utils::isUnset($request->matchType)) {
            $query['MatchType'] = $request->matchType;
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
        if (!Utils::isUnset($request->supportForm)) {
            $query['SupportForm'] = $request->supportForm;
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ModifyRuleResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ModifyRuleResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Modifies a custom sensitive data detection rule in Data Security Center (DSC).
     *  *
     * @description When you call this operation, you must configure request parameters to specify the rule name, rule ID, and rule content.
     * # Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param ModifyRuleRequest $request ModifyRuleRequest
     *
     * @return ModifyRuleResponse ModifyRuleResponse
     */
    public function modifyRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyRuleWithOptions($request, $runtime);
    }

    /**
     * @summary Enables or disables a sensitive data detection rule.
     *  *
     * @param ModifyRuleStatusRequest $request ModifyRuleStatusRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyRuleStatusResponse ModifyRuleStatusResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ModifyRuleStatusResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ModifyRuleStatusResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Enables or disables a sensitive data detection rule.
     *  *
     * @param ModifyRuleStatusRequest $request ModifyRuleStatusRequest
     *
     * @return ModifyRuleStatusResponse ModifyRuleStatusResponse
     */
    public function modifyRuleStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyRuleStatusWithOptions($request, $runtime);
    }

    /**
     * @summary 创建文件扫描任务
     *  *
     * @param ScanOssObjectV1Request $tmpReq  ScanOssObjectV1Request
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return ScanOssObjectV1Response ScanOssObjectV1Response
     */
    public function scanOssObjectV1WithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ScanOssObjectV1ShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->objectKeyList)) {
            $request->objectKeyListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->objectKeyList, 'ObjectKeyList', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->bucketName)) {
            $query['BucketName'] = $request->bucketName;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->objectKeyListShrink)) {
            $query['ObjectKeyList'] = $request->objectKeyListShrink;
        }
        if (!Utils::isUnset($request->serviceRegionId)) {
            $query['ServiceRegionId'] = $request->serviceRegionId;
        }
        if (!Utils::isUnset($request->templateId)) {
            $query['TemplateId'] = $request->templateId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ScanOssObjectV1',
            'version'     => '2019-01-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ScanOssObjectV1Response::fromMap($this->callApi($params, $req, $runtime));
        }

        return ScanOssObjectV1Response::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 创建文件扫描任务
     *  *
     * @param ScanOssObjectV1Request $request ScanOssObjectV1Request
     *
     * @return ScanOssObjectV1Response ScanOssObjectV1Response
     */
    public function scanOssObjectV1($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->scanOssObjectV1WithOptions($request, $runtime);
    }

    /**
     * @summary Stops a de-identification task. After you stop a de-identification task, you can resume the task by calling the ManualTriggerMaskingProcess operation.
     *  *
     * @description You can call this operation to stop a de-identification task that is running. For example, you can stop a de-identification task that is used to de-identify specific data.
     * # Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param StopMaskingProcessRequest $request StopMaskingProcessRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return StopMaskingProcessResponse StopMaskingProcessResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return StopMaskingProcessResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return StopMaskingProcessResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Stops a de-identification task. After you stop a de-identification task, you can resume the task by calling the ManualTriggerMaskingProcess operation.
     *  *
     * @description You can call this operation to stop a de-identification task that is running. For example, you can stop a de-identification task that is used to de-identify specific data.
     * # Limits
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param StopMaskingProcessRequest $request StopMaskingProcessRequest
     *
     * @return StopMaskingProcessResponse StopMaskingProcessResponse
     */
    public function stopMaskingProcess($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopMaskingProcessWithOptions($request, $runtime);
    }
}
