<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wss\V20211221;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\Wss\V20211221\Models\CreateMultiOrderRequest;
use AlibabaCloud\SDK\Wss\V20211221\Models\CreateMultiOrderResponse;
use AlibabaCloud\SDK\Wss\V20211221\Models\CreateMultiOrderShrinkRequest;
use AlibabaCloud\SDK\Wss\V20211221\Models\DescribeCreditPackageAgentsRequest;
use AlibabaCloud\SDK\Wss\V20211221\Models\DescribeCreditPackageAgentsResponse;
use AlibabaCloud\SDK\Wss\V20211221\Models\DescribeCreditUsageInfoRequest;
use AlibabaCloud\SDK\Wss\V20211221\Models\DescribeCreditUsageInfoResponse;
use AlibabaCloud\SDK\Wss\V20211221\Models\DescribeDeductionStatisticRequest;
use AlibabaCloud\SDK\Wss\V20211221\Models\DescribeDeductionStatisticResponse;
use AlibabaCloud\SDK\Wss\V20211221\Models\DescribeDeliveryAddressResponse;
use AlibabaCloud\SDK\Wss\V20211221\Models\DescribeMultiPriceRequest;
use AlibabaCloud\SDK\Wss\V20211221\Models\DescribeMultiPriceResponse;
use AlibabaCloud\SDK\Wss\V20211221\Models\DescribePackageDeductionsRequest;
use AlibabaCloud\SDK\Wss\V20211221\Models\DescribePackageDeductionsResponse;
use AlibabaCloud\SDK\Wss\V20211221\Models\DescribeRunIdDeductionsRequest;
use AlibabaCloud\SDK\Wss\V20211221\Models\DescribeRunIdDeductionsResponse;
use AlibabaCloud\SDK\Wss\V20211221\Models\ModifyInstancePropertiesRequest;
use AlibabaCloud\SDK\Wss\V20211221\Models\ModifyInstancePropertiesResponse;
use AlibabaCloud\SDK\Wss\V20211221\Models\SetAgentCreditQuotaRequest;
use AlibabaCloud\SDK\Wss\V20211221\Models\SetAgentCreditQuotaResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Wss extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap = [
            'ap-southeast-1' => 'wss.ap-southeast-1.aliyuncs.com',
            'cn-shanghai' => 'wss.cn-shanghai.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('wss', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * Places, renews, or modifies orders for specific products of Elastic Desktop Service (EDS) Enterprise Edition, such as monthly duration packages.
     *
     * @remarks
     * <props="china">Before you use this operation, make sure that you fully understand the billing methods and [pricing](https://www.aliyun.com/price/product?#/gws/detail/gws) of EDS.
     * <props="intl">Before you use this operation, make sure that you fully understand the billing methods and [pricing](https://www.alibabacloud.com/zh/product/cloud-desktop?#J_8623712560) of EDS.
     * If automatic payment is not specified, this operation does not process the payment. You must use the order ID returned by this operation to construct a payment redirect URL and complete the payment before the order takes effect and the resources are provisioned.
     *
     * @param tmpReq - CreateMultiOrderRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateMultiOrderResponse
     *
     * @param CreateMultiOrderRequest $tmpReq
     * @param RuntimeOptions          $runtime
     *
     * @return CreateMultiOrderResponse
     */
    public function createMultiOrderWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateMultiOrderShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->properties) {
            $request->propertiesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->properties, 'Properties', 'json');
        }

        $query = [];
        if (null !== $request->channelCookie) {
            @$query['ChannelCookie'] = $request->channelCookie;
        }

        if (null !== $request->orderItems) {
            @$query['OrderItems'] = $request->orderItems;
        }

        if (null !== $request->orderType) {
            @$query['OrderType'] = $request->orderType;
        }

        if (null !== $request->propertiesShrink) {
            @$query['Properties'] = $request->propertiesShrink;
        }

        if (null !== $request->resellerOwnerUid) {
            @$query['ResellerOwnerUid'] = $request->resellerOwnerUid;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateMultiOrder',
            'version' => '2021-12-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateMultiOrderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Places, renews, or modifies orders for specific products of Elastic Desktop Service (EDS) Enterprise Edition, such as monthly duration packages.
     *
     * @remarks
     * <props="china">Before you use this operation, make sure that you fully understand the billing methods and [pricing](https://www.aliyun.com/price/product?#/gws/detail/gws) of EDS.
     * <props="intl">Before you use this operation, make sure that you fully understand the billing methods and [pricing](https://www.alibabacloud.com/zh/product/cloud-desktop?#J_8623712560) of EDS.
     * If automatic payment is not specified, this operation does not process the payment. You must use the order ID returned by this operation to construct a payment redirect URL and complete the payment before the order takes effect and the resources are provisioned.
     *
     * @param request - CreateMultiOrderRequest
     *
     * @returns CreateMultiOrderResponse
     *
     * @param CreateMultiOrderRequest $request
     *
     * @return CreateMultiOrderResponse
     */
    public function createMultiOrder($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createMultiOrderWithOptions($request, $runtime);
    }

    /**
     * Queries the list of Agents and usage summary information under the current username.
     *
     * @remarks
     * ## Request description
     * - **Paging support**: Use the `NextToken` and `MaxResults` parameters for paging. Set `NextToken` to an empty character string for the first request.
     * - **Filtering**: Use the `AgentType` and `AgentIds` parameters to filter the returned Agent list.
     * - **Status filtering**: Use the `Status` parameter to filter Agents by status (0: deleted, 1: active).
     * - **Sorting**: Results are sorted by `id` in ascending order by default.
     * - **Additional parameter for anonymous edition**: The `FillInstance` parameter automatically populates the bound JVS_COPILOT AgentId of the currently logged-on user.
     *
     * @param request - DescribeCreditPackageAgentsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeCreditPackageAgentsResponse
     *
     * @param DescribeCreditPackageAgentsRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeCreditPackageAgentsResponse
     */
    public function describeCreditPackageAgentsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentIds) {
            @$query['AgentIds'] = $request->agentIds;
        }

        if (null !== $request->agentType) {
            @$query['AgentType'] = $request->agentType;
        }

        if (null !== $request->bizType) {
            @$query['BizType'] = $request->bizType;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeCreditPackageAgents',
            'version' => '2021-12-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeCreditPackageAgentsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the list of Agents and usage summary information under the current username.
     *
     * @remarks
     * ## Request description
     * - **Paging support**: Use the `NextToken` and `MaxResults` parameters for paging. Set `NextToken` to an empty character string for the first request.
     * - **Filtering**: Use the `AgentType` and `AgentIds` parameters to filter the returned Agent list.
     * - **Status filtering**: Use the `Status` parameter to filter Agents by status (0: deleted, 1: active).
     * - **Sorting**: Results are sorted by `id` in ascending order by default.
     * - **Additional parameter for anonymous edition**: The `FillInstance` parameter automatically populates the bound JVS_COPILOT AgentId of the currently logged-on user.
     *
     * @param request - DescribeCreditPackageAgentsRequest
     *
     * @returns DescribeCreditPackageAgentsResponse
     *
     * @param DescribeCreditPackageAgentsRequest $request
     *
     * @return DescribeCreditPackageAgentsResponse
     */
    public function describeCreditPackageAgents($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCreditPackageAgentsWithOptions($request, $runtime);
    }

    /**
     * Queries credit usage details by a specified dimension such as user, credit package, or agent.
     *
     * @remarks
     * ## Request description
     * This API queries credit usage details based on the dimension specified by `UsageType` (User / CreditPackage / Agent). The response includes the total credits, remaining credits, used credits, hourly consumption samples, alert thresholds, and period quotas of the current credit package.
     * - **User**: User dimension. Returns the aggregated usage and remaining credits of all active credit packages for the current user.
     * - **CreditPackage**: Credit package dimension. Returns the total credits, remaining credits, and consumption samples of a specified credit package instance.
     * - **Agent**: Agent dimension. Returns the cumulative usage, current period usage, quota, and alert information of a specified agent.
     * **Notes**:
     * - The `InstanceIds` parameter can be omitted when `UsageType=User`. Pass a credit package instance ID when `UsageType=CreditPackage`, or pass an AgentId when `UsageType=Agent`.
     * - Anonymous requests support the `FillInstance` parameter. When `InstanceIds` is not explicitly provided and `FillInstance=true`, the server automatically populates the bound `JVS_COPILOT` AgentId based on the current logon `wyId`.
     * - Time window constants: The `dayUsedCredit` statistics window is `now - ONE_DAY_MILLIS`, and the `weekUsedCredit` statistics window is `now - ONE_WEEK_MILLIS`.
     * - The consumption samples in `currentCreditConsumeList` are aggregated by hour and may have an asynchronous synchronization delay of up to 5 minutes.
     *
     * @param request - DescribeCreditUsageInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeCreditUsageInfoResponse
     *
     * @param DescribeCreditUsageInfoRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeCreditUsageInfoResponse
     */
    public function describeCreditUsageInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizType) {
            @$query['BizType'] = $request->bizType;
        }

        if (null !== $request->instanceIds) {
            @$query['InstanceIds'] = $request->instanceIds;
        }

        if (null !== $request->usageType) {
            @$query['UsageType'] = $request->usageType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeCreditUsageInfo',
            'version' => '2021-12-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeCreditUsageInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries credit usage details by a specified dimension such as user, credit package, or agent.
     *
     * @remarks
     * ## Request description
     * This API queries credit usage details based on the dimension specified by `UsageType` (User / CreditPackage / Agent). The response includes the total credits, remaining credits, used credits, hourly consumption samples, alert thresholds, and period quotas of the current credit package.
     * - **User**: User dimension. Returns the aggregated usage and remaining credits of all active credit packages for the current user.
     * - **CreditPackage**: Credit package dimension. Returns the total credits, remaining credits, and consumption samples of a specified credit package instance.
     * - **Agent**: Agent dimension. Returns the cumulative usage, current period usage, quota, and alert information of a specified agent.
     * **Notes**:
     * - The `InstanceIds` parameter can be omitted when `UsageType=User`. Pass a credit package instance ID when `UsageType=CreditPackage`, or pass an AgentId when `UsageType=Agent`.
     * - Anonymous requests support the `FillInstance` parameter. When `InstanceIds` is not explicitly provided and `FillInstance=true`, the server automatically populates the bound `JVS_COPILOT` AgentId based on the current logon `wyId`.
     * - Time window constants: The `dayUsedCredit` statistics window is `now - ONE_DAY_MILLIS`, and the `weekUsedCredit` statistics window is `now - ONE_WEEK_MILLIS`.
     * - The consumption samples in `currentCreditConsumeList` are aggregated by hour and may have an asynchronous synchronization delay of up to 5 minutes.
     *
     * @param request - DescribeCreditUsageInfoRequest
     *
     * @returns DescribeCreditUsageInfoResponse
     *
     * @param DescribeCreditUsageInfoRequest $request
     *
     * @return DescribeCreditUsageInfoResponse
     */
    public function describeCreditUsageInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCreditUsageInfoWithOptions($request, $runtime);
    }

    /**
     * Retrieves resource deduction and usage statistics based on specified conditions.
     *
     * @remarks
     * ## Request description
     * - This operation supports GET and POST methods.
     * - The `periods` parameter is in JSON array format. Each element is a `PeriodParam` object that contains the `periodUnit` and `baseTime` fields.
     * - The `resourceTypes` parameter is in JSON array format and contains multiple resource type strings.
     * - The `startTime` and `endTime` parameters are in timestamp format and specify the time range for the query.
     * - Pagination parameters include `nextToken`, `maxResults`, `pageNo`, and `pageSize`, which control the number and pagination of returned results.
     * - When the `resourceTypes` parameter contains invalid values or the `periods` parameter fails JSON parsing, a `SalesClientException` exception is thrown.
     *
     * @param request - DescribeDeductionStatisticRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDeductionStatisticResponse
     *
     * @param DescribeDeductionStatisticRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeDeductionStatisticResponse
     */
    public function describeDeductionStatisticWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->instanceIds) {
            @$query['InstanceIds'] = $request->instanceIds;
        }

        if (null !== $request->periods) {
            @$query['Periods'] = $request->periods;
        }

        if (null !== $request->resourceTypes) {
            @$query['ResourceTypes'] = $request->resourceTypes;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDeductionStatistic',
            'version' => '2021-12-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDeductionStatisticResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves resource deduction and usage statistics based on specified conditions.
     *
     * @remarks
     * ## Request description
     * - This operation supports GET and POST methods.
     * - The `periods` parameter is in JSON array format. Each element is a `PeriodParam` object that contains the `periodUnit` and `baseTime` fields.
     * - The `resourceTypes` parameter is in JSON array format and contains multiple resource type strings.
     * - The `startTime` and `endTime` parameters are in timestamp format and specify the time range for the query.
     * - Pagination parameters include `nextToken`, `maxResults`, `pageNo`, and `pageSize`, which control the number and pagination of returned results.
     * - When the `resourceTypes` parameter contains invalid values or the `periods` parameter fails JSON parsing, a `SalesClientException` exception is thrown.
     *
     * @param request - DescribeDeductionStatisticRequest
     *
     * @returns DescribeDeductionStatisticResponse
     *
     * @param DescribeDeductionStatisticRequest $request
     *
     * @return DescribeDeductionStatisticResponse
     */
    public function describeDeductionStatistic($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDeductionStatisticWithOptions($request, $runtime);
    }

    /**
     * Retrieves information about delivery addresses.
     *
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDeliveryAddressResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return DescribeDeliveryAddressResponse
     */
    public function describeDeliveryAddressWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'DescribeDeliveryAddress',
            'version' => '2021-12-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDeliveryAddressResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves information about delivery addresses.
     *
     * @returns DescribeDeliveryAddressResponse
     *
     * @return DescribeDeliveryAddressResponse
     */
    public function describeDeliveryAddress()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDeliveryAddressWithOptions($runtime);
    }

    /**
     * Queries the prices of Elastic Desktop Service products, including prices for new purchases, renewals, specification changes, and unsubscriptions.
     *
     * @remarks
     * <props="china">Before you call this operation, make sure that you fully understand the billing of Elastic Desktop Service and its [pricing](https://www.aliyun.com/price/product?#/gws/detail/gws).
     *
     * @param request - DescribeMultiPriceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeMultiPriceResponse
     *
     * @param DescribeMultiPriceRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeMultiPriceResponse
     */
    public function describeMultiPriceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->orderItems) {
            @$query['OrderItems'] = $request->orderItems;
        }

        if (null !== $request->orderType) {
            @$query['OrderType'] = $request->orderType;
        }

        if (null !== $request->packageCode) {
            @$query['PackageCode'] = $request->packageCode;
        }

        if (null !== $request->resellerOwnerUid) {
            @$query['ResellerOwnerUid'] = $request->resellerOwnerUid;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeMultiPrice',
            'version' => '2021-12-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeMultiPriceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the prices of Elastic Desktop Service products, including prices for new purchases, renewals, specification changes, and unsubscriptions.
     *
     * @remarks
     * <props="china">Before you call this operation, make sure that you fully understand the billing of Elastic Desktop Service and its [pricing](https://www.aliyun.com/price/product?#/gws/detail/gws).
     *
     * @param request - DescribeMultiPriceRequest
     *
     * @returns DescribeMultiPriceResponse
     *
     * @param DescribeMultiPriceRequest $request
     *
     * @return DescribeMultiPriceResponse
     */
    public function describeMultiPrice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMultiPriceWithOptions($request, $runtime);
    }

    /**
     * Queries the deduction details of a core-hour package.
     *
     * @param request - DescribePackageDeductionsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribePackageDeductionsResponse
     *
     * @param DescribePackageDeductionsRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribePackageDeductionsResponse
     */
    public function describePackageDeductionsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->instanceIds) {
            @$query['InstanceIds'] = $request->instanceIds;
        }

        if (null !== $request->packageIds) {
            @$query['PackageIds'] = $request->packageIds;
        }

        if (null !== $request->pageNum) {
            @$query['PageNum'] = $request->pageNum;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->resourceTypes) {
            @$query['ResourceTypes'] = $request->resourceTypes;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribePackageDeductions',
            'version' => '2021-12-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribePackageDeductionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the deduction details of a core-hour package.
     *
     * @param request - DescribePackageDeductionsRequest
     *
     * @returns DescribePackageDeductionsResponse
     *
     * @param DescribePackageDeductionsRequest $request
     *
     * @return DescribePackageDeductionsResponse
     */
    public function describePackageDeductions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePackageDeductionsWithOptions($request, $runtime);
    }

    /**
     * Queries AI credit deductions.
     *
     * @remarks
     * ## Operation description
     * - This operation supports GET and POST methods.
     * - The `periods` parameter is in JSON array format. Each element is a `PeriodParam` object that contains the `periodUnit` and `baseTime` fields.
     * - The `resourceTypes` parameter is in JSON array format and contains multiple resource type strings.
     * - The `startTime` and `endTime` parameters are in timestamp format and specify the time range for the query.
     * - Pagination parameters include `nextToken`, `maxResults`, `pageNo`, and `pageSize`, which control the number of returned results and pagination.
     * - When the `resourceTypes` parameter contains invalid values or the `periods` parameter fails JSON parsing, a `SalesClientException` exception is thrown.
     *
     * @param request - DescribeRunIdDeductionsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeRunIdDeductionsResponse
     *
     * @param DescribeRunIdDeductionsRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeRunIdDeductionsResponse
     */
    public function describeRunIdDeductionsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentType) {
            @$query['AgentType'] = $request->agentType;
        }

        if (null !== $request->agentTypes) {
            @$query['AgentTypes'] = $request->agentTypes;
        }

        if (null !== $request->aliUid) {
            @$query['AliUid'] = $request->aliUid;
        }

        if (null !== $request->bizType) {
            @$query['BizType'] = $request->bizType;
        }

        if (null !== $request->deductionTypes) {
            @$query['DeductionTypes'] = $request->deductionTypes;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->groupByFields) {
            @$query['GroupByFields'] = $request->groupByFields;
        }

        if (null !== $request->groupResourceTypes) {
            @$query['GroupResourceTypes'] = $request->groupResourceTypes;
        }

        if (null !== $request->groupSeparator) {
            @$query['GroupSeparator'] = $request->groupSeparator;
        }

        if (null !== $request->instanceIdType) {
            @$query['InstanceIdType'] = $request->instanceIdType;
        }

        if (null !== $request->instanceIds) {
            @$query['InstanceIds'] = $request->instanceIds;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->packageIds) {
            @$query['PackageIds'] = $request->packageIds;
        }

        if (null !== $request->pageNum) {
            @$query['PageNum'] = $request->pageNum;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->resourceTypes) {
            @$query['ResourceTypes'] = $request->resourceTypes;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->wyId) {
            @$query['WyId'] = $request->wyId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeRunIdDeductions',
            'version' => '2021-12-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeRunIdDeductionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries AI credit deductions.
     *
     * @remarks
     * ## Operation description
     * - This operation supports GET and POST methods.
     * - The `periods` parameter is in JSON array format. Each element is a `PeriodParam` object that contains the `periodUnit` and `baseTime` fields.
     * - The `resourceTypes` parameter is in JSON array format and contains multiple resource type strings.
     * - The `startTime` and `endTime` parameters are in timestamp format and specify the time range for the query.
     * - Pagination parameters include `nextToken`, `maxResults`, `pageNo`, and `pageSize`, which control the number of returned results and pagination.
     * - When the `resourceTypes` parameter contains invalid values or the `periods` parameter fails JSON parsing, a `SalesClientException` exception is thrown.
     *
     * @param request - DescribeRunIdDeductionsRequest
     *
     * @returns DescribeRunIdDeductionsResponse
     *
     * @param DescribeRunIdDeductionsRequest $request
     *
     * @return DescribeRunIdDeductionsResponse
     */
    public function describeRunIdDeductions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRunIdDeductionsWithOptions($request, $runtime);
    }

    /**
     * Modifies the attributes of an instance.
     *
     * @param request - ModifyInstancePropertiesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyInstancePropertiesResponse
     *
     * @param ModifyInstancePropertiesRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ModifyInstancePropertiesResponse
     */
    public function modifyInstancePropertiesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->instanceIds) {
            @$query['InstanceIds'] = $request->instanceIds;
        }

        if (null !== $request->key) {
            @$query['Key'] = $request->key;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->value) {
            @$query['Value'] = $request->value;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyInstanceProperties',
            'version' => '2021-12-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyInstancePropertiesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the attributes of an instance.
     *
     * @param request - ModifyInstancePropertiesRequest
     *
     * @returns ModifyInstancePropertiesResponse
     *
     * @param ModifyInstancePropertiesRequest $request
     *
     * @return ModifyInstancePropertiesResponse
     */
    public function modifyInstanceProperties($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyInstancePropertiesWithOptions($request, $runtime);
    }

    /**
     * Sets the credit quota for specified Agents.
     *
     * @remarks
     * ## Description
     * This operation sets the credit quota for one or more Agents of a specific type.
     * ### Usage notes
     * - The `AgentType` parameter specifies the type of Agent to which the quota applies, such as `JVSClaw` or `OpenClaw`.
     * - The `AgentIds` parameter is an array of up to 100 Agent IDs.
     * - The `CreditQuota` parameter specifies the credit quota for each Agent.
     * ### Examples
     *
     * @param request - SetAgentCreditQuotaRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SetAgentCreditQuotaResponse
     *
     * @param SetAgentCreditQuotaRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return SetAgentCreditQuotaResponse
     */
    public function setAgentCreditQuotaWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentIds) {
            @$query['AgentIds'] = $request->agentIds;
        }

        if (null !== $request->agentType) {
            @$query['AgentType'] = $request->agentType;
        }

        if (null !== $request->bizType) {
            @$query['BizType'] = $request->bizType;
        }

        if (null !== $request->creditQuota) {
            @$query['CreditQuota'] = $request->creditQuota;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SetAgentCreditQuota',
            'version' => '2021-12-21',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SetAgentCreditQuotaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Sets the credit quota for specified Agents.
     *
     * @remarks
     * ## Description
     * This operation sets the credit quota for one or more Agents of a specific type.
     * ### Usage notes
     * - The `AgentType` parameter specifies the type of Agent to which the quota applies, such as `JVSClaw` or `OpenClaw`.
     * - The `AgentIds` parameter is an array of up to 100 Agent IDs.
     * - The `CreditQuota` parameter specifies the credit quota for each Agent.
     * ### Examples
     *
     * @param request - SetAgentCreditQuotaRequest
     *
     * @returns SetAgentCreditQuotaResponse
     *
     * @param SetAgentCreditQuotaRequest $request
     *
     * @return SetAgentCreditQuotaResponse
     */
    public function setAgentCreditQuota($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setAgentCreditQuotaWithOptions($request, $runtime);
    }
}
