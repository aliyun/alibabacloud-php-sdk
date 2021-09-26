<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20190103;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\SDK\Sddp\V20190103\Models\BatchDeleteDataLimitResponse;
use AlibabaCloud\SDK\Sddp\V20190103\Models\CreateConfigRequest;
use AlibabaCloud\SDK\Sddp\V20190103\Models\CreateConfigResponse;
use AlibabaCloud\SDK\Sddp\V20190103\Models\CreateDataLimitRequest;
use AlibabaCloud\SDK\Sddp\V20190103\Models\CreateDataLimitResponse;
use AlibabaCloud\SDK\Sddp\V20190103\Models\CreateRuleRequest;
use AlibabaCloud\SDK\Sddp\V20190103\Models\CreateRuleResponse;
use AlibabaCloud\SDK\Sddp\V20190103\Models\CreateScanTaskRequest;
use AlibabaCloud\SDK\Sddp\V20190103\Models\CreateScanTaskResponse;
use AlibabaCloud\SDK\Sddp\V20190103\Models\DeleteDataLimitRequest;
use AlibabaCloud\SDK\Sddp\V20190103\Models\DeleteDataLimitResponse;
use AlibabaCloud\SDK\Sddp\V20190103\Models\DeleteRuleRequest;
use AlibabaCloud\SDK\Sddp\V20190103\Models\DeleteRuleResponse;
use AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeAccountDetailRequest;
use AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeAccountDetailResponse;
use AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeAccountsRequest;
use AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeAccountsResponse;
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
use AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeDataLimitsInstanceDimRequest;
use AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeDataLimitsInstanceDimResponse;
use AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeDataLimitsRequest;
use AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeDataLimitsResponse;
use AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeDataMaskingRunHistoryRequest;
use AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeDataMaskingRunHistoryResponse;
use AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeDataMaskingTasksRequest;
use AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeDataMaskingTasksResponse;
use AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeDataTotalCountRequest;
use AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeDataTotalCountResponse;
use AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeEventDetailRequest;
use AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeEventDetailResponse;
use AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeEventsRequest;
use AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeEventsResponse;
use AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeEventTopRequest;
use AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeEventTopResponse;
use AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeEventTypesDetailRequest;
use AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeEventTypesDetailResponse;
use AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeEventTypesRequest;
use AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeEventTypesResponse;
use AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeInstancePortraitRequest;
use AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeInstancePortraitResponse;
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
use AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeRuleCategoryRequest;
use AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeRuleCategoryResponse;
use AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeRulesRequest;
use AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeRulesResponse;
use AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeTablesRequest;
use AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeTablesResponse;
use AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeUserCountRequest;
use AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeUserCountResponse;
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
use AlibabaCloud\SDK\Sddp\V20190103\Models\ModifyRuleRequest;
use AlibabaCloud\SDK\Sddp\V20190103\Models\ModifyRuleResponse;
use AlibabaCloud\SDK\Sddp\V20190103\Models\ModifyRuleStatusRequest;
use AlibabaCloud\SDK\Sddp\V20190103\Models\ModifyRuleStatusResponse;
use AlibabaCloud\SDK\Sddp\V20190103\Models\StopMaskingProcessRequest;
use AlibabaCloud\SDK\Sddp\V20190103\Models\StopMaskingProcessResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
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
     * @param RuntimeOptions $runtime
     *
     * @return BatchDeleteDataLimitResponse
     */
    public function batchDeleteDataLimitWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);

        return BatchDeleteDataLimitResponse::fromMap($this->doRPCRequest('BatchDeleteDataLimit', '2019-01-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @return BatchDeleteDataLimitResponse
     */
    public function batchDeleteDataLimit()
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchDeleteDataLimitWithOptions($runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateConfigResponse::fromMap($this->doRPCRequest('CreateConfig', '2019-01-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateDataLimitResponse::fromMap($this->doRPCRequest('CreateDataLimit', '2019-01-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateRuleResponse::fromMap($this->doRPCRequest('CreateRule', '2019-01-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateScanTaskResponse::fromMap($this->doRPCRequest('CreateScanTask', '2019-01-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DeleteDataLimitRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteDataLimitResponse
     */
    public function deleteDataLimitWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteDataLimitResponse::fromMap($this->doRPCRequest('DeleteDataLimit', '2019-01-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteRuleResponse::fromMap($this->doRPCRequest('DeleteRule', '2019-01-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeAccountDetailRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeAccountDetailResponse
     */
    public function describeAccountDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeAccountDetailResponse::fromMap($this->doRPCRequest('DescribeAccountDetail', '2019-01-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeAccountDetailRequest $request
     *
     * @return DescribeAccountDetailResponse
     */
    public function describeAccountDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAccountDetailWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAccountsRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DescribeAccountsResponse
     */
    public function describeAccountsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeAccountsResponse::fromMap($this->doRPCRequest('DescribeAccounts', '2019-01-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeAccountsRequest $request
     *
     * @return DescribeAccountsResponse
     */
    public function describeAccounts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAccountsWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeColumnsResponse::fromMap($this->doRPCRequest('DescribeColumns', '2019-01-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeConfigsResponse::fromMap($this->doRPCRequest('DescribeConfigs', '2019-01-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDataAssetsResponse::fromMap($this->doRPCRequest('DescribeDataAssets', '2019-01-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDataLimitDetailResponse::fromMap($this->doRPCRequest('DescribeDataLimitDetail', '2019-01-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeDataLimitsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeDataLimitsResponse
     */
    public function describeDataLimitsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDataLimitsResponse::fromMap($this->doRPCRequest('DescribeDataLimits', '2019-01-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeDataLimitSetRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeDataLimitSetResponse
     */
    public function describeDataLimitSetWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDataLimitSetResponse::fromMap($this->doRPCRequest('DescribeDataLimitSet', '2019-01-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeDataLimitsInstanceDimRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeDataLimitsInstanceDimResponse
     */
    public function describeDataLimitsInstanceDimWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDataLimitsInstanceDimResponse::fromMap($this->doRPCRequest('DescribeDataLimitsInstanceDim', '2019-01-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeDataLimitsInstanceDimRequest $request
     *
     * @return DescribeDataLimitsInstanceDimResponse
     */
    public function describeDataLimitsInstanceDim($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDataLimitsInstanceDimWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDataMaskingRunHistoryResponse::fromMap($this->doRPCRequest('DescribeDataMaskingRunHistory', '2019-01-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDataMaskingTasksResponse::fromMap($this->doRPCRequest('DescribeDataMaskingTasks', '2019-01-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeDataTotalCountRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeDataTotalCountResponse
     */
    public function describeDataTotalCountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDataTotalCountResponse::fromMap($this->doRPCRequest('DescribeDataTotalCount', '2019-01-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeDataTotalCountRequest $request
     *
     * @return DescribeDataTotalCountResponse
     */
    public function describeDataTotalCount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDataTotalCountWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeEventDetailResponse::fromMap($this->doRPCRequest('DescribeEventDetail', '2019-01-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeEventsRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DescribeEventsResponse
     */
    public function describeEventsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeEventsResponse::fromMap($this->doRPCRequest('DescribeEvents', '2019-01-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeEventTopRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DescribeEventTopResponse
     */
    public function describeEventTopWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeEventTopResponse::fromMap($this->doRPCRequest('DescribeEventTop', '2019-01-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeEventTopRequest $request
     *
     * @return DescribeEventTopResponse
     */
    public function describeEventTop($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEventTopWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeEventTypesResponse::fromMap($this->doRPCRequest('DescribeEventTypes', '2019-01-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeEventTypesDetailRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeEventTypesDetailResponse
     */
    public function describeEventTypesDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeEventTypesDetailResponse::fromMap($this->doRPCRequest('DescribeEventTypesDetail', '2019-01-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeEventTypesDetailRequest $request
     *
     * @return DescribeEventTypesDetailResponse
     */
    public function describeEventTypesDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEventTypesDetailWithOptions($request, $runtime);
    }

    /**
     * @param DescribeInstancePortraitRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeInstancePortraitResponse
     */
    public function describeInstancePortraitWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeInstancePortraitResponse::fromMap($this->doRPCRequest('DescribeInstancePortrait', '2019-01-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeInstancePortraitRequest $request
     *
     * @return DescribeInstancePortraitResponse
     */
    public function describeInstancePortrait($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstancePortraitWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeInstancesResponse::fromMap($this->doRPCRequest('DescribeInstances', '2019-01-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeInstanceSourcesRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeInstanceSourcesResponse
     */
    public function describeInstanceSourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeInstanceSourcesResponse::fromMap($this->doRPCRequest('DescribeInstanceSources', '2019-01-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeOssObjectDetailRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeOssObjectDetailResponse
     */
    public function describeOssObjectDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeOssObjectDetailResponse::fromMap($this->doRPCRequest('DescribeOssObjectDetail', '2019-01-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeOssObjectsResponse::fromMap($this->doRPCRequest('DescribeOssObjects', '2019-01-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribePackagesResponse::fromMap($this->doRPCRequest('DescribePackages', '2019-01-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeRiskLevelsResponse::fromMap($this->doRPCRequest('DescribeRiskLevels', '2019-01-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeRuleCategoryRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeRuleCategoryResponse
     */
    public function describeRuleCategoryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeRuleCategoryResponse::fromMap($this->doRPCRequest('DescribeRuleCategory', '2019-01-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeRuleCategoryRequest $request
     *
     * @return DescribeRuleCategoryResponse
     */
    public function describeRuleCategory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRuleCategoryWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeRulesResponse::fromMap($this->doRPCRequest('DescribeRules', '2019-01-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeTablesResponse::fromMap($this->doRPCRequest('DescribeTables', '2019-01-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeUserCountRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeUserCountResponse
     */
    public function describeUserCountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeUserCountResponse::fromMap($this->doRPCRequest('DescribeUserCount', '2019-01-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeUserCountRequest $request
     *
     * @return DescribeUserCountResponse
     */
    public function describeUserCount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeUserCountWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeUserStatusResponse::fromMap($this->doRPCRequest('DescribeUserStatus', '2019-01-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DisableUserConfigResponse::fromMap($this->doRPCRequest('DisableUserConfig', '2019-01-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ExecDatamaskResponse::fromMap($this->doRPCRequest('ExecDatamask', '2019-01-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ManualTriggerMaskingProcessResponse::fromMap($this->doRPCRequest('ManualTriggerMaskingProcess', '2019-01-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyDataLimitResponse::fromMap($this->doRPCRequest('ModifyDataLimit', '2019-01-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyDefaultLevelResponse::fromMap($this->doRPCRequest('ModifyDefaultLevel', '2019-01-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyEventStatusResponse::fromMap($this->doRPCRequest('ModifyEventStatus', '2019-01-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyEventTypeStatusResponse::fromMap($this->doRPCRequest('ModifyEventTypeStatus', '2019-01-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param ModifyRuleRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return ModifyRuleResponse
     */
    public function modifyRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyRuleResponse::fromMap($this->doRPCRequest('ModifyRule', '2019-01-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyRuleStatusResponse::fromMap($this->doRPCRequest('ModifyRuleStatus', '2019-01-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return StopMaskingProcessResponse::fromMap($this->doRPCRequest('StopMaskingProcess', '2019-01-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
