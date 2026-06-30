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
            'cn-shanghai' => 'wss.cn-shanghai.aliyuncs.com',
            'ap-southeast-1' => 'wss.ap-southeast-1.aliyuncs.com',
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
     * Use this API to order, renew, and modify specific products, such as monthly resource plans for Elastic Desktop Service (EDS) Enterprise Edition.
     *
     * @remarks
     * <props="china">
     * Before calling this API, make sure you understand how Wuying Workspace is billed and its [pricing](https://www.aliyun.com/price/product?#/gws/detail/gws).
     * <props="intl">
     * Before calling this API, make sure you understand how Wuying Workspace is billed and its [pricing](https://www.alibabacloud.com/zh/product/cloud-desktop?#J_8623712560).
     * If you do not specify automatic payment, this API does not handle the payment. You must use the returned order ID to construct a payment URL. The order becomes active and the resource is provisioned only after the payment is complete.
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
     * Use this API to order, renew, and modify specific products, such as monthly resource plans for Elastic Desktop Service (EDS) Enterprise Edition.
     *
     * @remarks
     * <props="china">
     * Before calling this API, make sure you understand how Wuying Workspace is billed and its [pricing](https://www.aliyun.com/price/product?#/gws/detail/gws).
     * <props="intl">
     * Before calling this API, make sure you understand how Wuying Workspace is billed and its [pricing](https://www.alibabacloud.com/zh/product/cloud-desktop?#J_8623712560).
     * If you do not specify automatic payment, this API does not handle the payment. You must use the returned order ID to construct a payment URL. The order becomes active and the resource is provisioned only after the payment is complete.
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
     * Queries a list of agents and their usage information.
     *
     * @remarks
     * ## Usage notes
     * - **Pagination**: This operation supports pagination by using the `NextToken` and `MaxResults` parameters. For the first request, set `NextToken` to an empty string.
     * - **Filtering**: Use the `AgentType` and `AgentIds` parameters to filter the results.
     * - **Status filtering**: Use the `Status` parameter to filter agents by status. Valid values are 0 (deleted) and 1 (active).
     * - **Sorting**: By default, the results are sorted by `id` in ascending order.
     * - **Additional parameter for anonymous edition**: The `FillInstance` parameter automatically populates the ID of the JVS_COPILOT agent that is associated with the current user.
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
     * Queries a list of agents and their usage information.
     *
     * @remarks
     * ## Usage notes
     * - **Pagination**: This operation supports pagination by using the `NextToken` and `MaxResults` parameters. For the first request, set `NextToken` to an empty string.
     * - **Filtering**: Use the `AgentType` and `AgentIds` parameters to filter the results.
     * - **Status filtering**: Use the `Status` parameter to filter agents by status. Valid values are 0 (deleted) and 1 (active).
     * - **Sorting**: By default, the results are sorted by `id` in ascending order.
     * - **Additional parameter for anonymous edition**: The `FillInstance` parameter automatically populates the ID of the JVS_COPILOT agent that is associated with the current user.
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
     * Queries credit usage by a specified dimension such as user, credit package, or agent.
     *
     * @remarks
     * ## Operation description
     * This API operation queries credit usage details based on the dimension specified by `UsageType` (User, CreditPackage, or Agent). The response includes the total, remaining, and used credits of the current credit package, hourly consumption samples, alert thresholds, period quotas, and other information.
     * - **User**: User dimension. Returns the aggregated usage and remaining credits across all active credit packages for the current user.
     * - **CreditPackage**: Credit package dimension. Returns the total, remaining, and consumption samples for a specified credit package instance.
     * - **Agent**: Agent dimension. Returns the cumulative usage, current period usage, quota, alert, and other information for a specified agent.
     * **Notes**:
     * - The `InstanceIds` parameter can be omitted when `UsageType=User`. Set this parameter to the credit package instance ID when `UsageType=CreditPackage`, or to the AgentId when `UsageType=Agent`.
     * - Anonymous requests support the `FillInstance` parameter. If `InstanceIds` is not explicitly specified and `FillInstance=true`, the server automatically populates the bound `JVS_COPILOT` AgentId based on the current logon `wyId`.
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
     * Queries credit usage by a specified dimension such as user, credit package, or agent.
     *
     * @remarks
     * ## Operation description
     * This API operation queries credit usage details based on the dimension specified by `UsageType` (User, CreditPackage, or Agent). The response includes the total, remaining, and used credits of the current credit package, hourly consumption samples, alert thresholds, period quotas, and other information.
     * - **User**: User dimension. Returns the aggregated usage and remaining credits across all active credit packages for the current user.
     * - **CreditPackage**: Credit package dimension. Returns the total, remaining, and consumption samples for a specified credit package instance.
     * - **Agent**: Agent dimension. Returns the cumulative usage, current period usage, quota, alert, and other information for a specified agent.
     * **Notes**:
     * - The `InstanceIds` parameter can be omitted when `UsageType=User`. Set this parameter to the credit package instance ID when `UsageType=CreditPackage`, or to the AgentId when `UsageType=Agent`.
     * - Anonymous requests support the `FillInstance` parameter. If `InstanceIds` is not explicitly specified and `FillInstance=true`, the server automatically populates the bound `JVS_COPILOT` AgentId based on the current logon `wyId`.
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
     * Retrieves resource deduction and usage statistics based on specified criteria.
     *
     * @remarks
     * ## Request
     * - This API supports GET and POST methods.
     * - The `periods` parameter is a JSON array of `PeriodParam` objects, each containing the `periodUnit` and `baseTime` fields.
     * - The `resourceTypes` parameter is a JSON array of resource type strings.
     * - The `startTime` and `endTime` parameters are timestamps that define the query\\"s time range.
     * - The `nextToken`, `maxResults`, `pageNo`, and `pageSize` parameters control pagination and the number of results to return.
     * - The API throws a `SalesClientException` if the `resourceTypes` parameter contains an invalid value or if the `periods` parameter fails JSON parsing.
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
     * Retrieves resource deduction and usage statistics based on specified criteria.
     *
     * @remarks
     * ## Request
     * - This API supports GET and POST methods.
     * - The `periods` parameter is a JSON array of `PeriodParam` objects, each containing the `periodUnit` and `baseTime` fields.
     * - The `resourceTypes` parameter is a JSON array of resource type strings.
     * - The `startTime` and `endTime` parameters are timestamps that define the query\\"s time range.
     * - The `nextToken`, `maxResults`, `pageNo`, and `pageSize` parameters control pagination and the number of results to return.
     * - The API throws a `SalesClientException` if the `resourceTypes` parameter contains an invalid value or if the `periods` parameter fails JSON parsing.
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
     * Queries prices for Elastic Desktop Service products, covering order types such as purchase, renewal, configuration change, and cancellation.
     *
     * @remarks
     * <props="china">
     * Before using this interface, ensure you understand the billing methods and [pricing](https://www.aliyun.com/price/product?#/gws/detail/gws) for Wuying Workspace.
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
     * Queries prices for Elastic Desktop Service products, covering order types such as purchase, renewal, configuration change, and cancellation.
     *
     * @remarks
     * <props="china">
     * Before using this interface, ensure you understand the billing methods and [pricing](https://www.aliyun.com/price/product?#/gws/detail/gws) for Wuying Workspace.
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
     * Query deduction details for time-based packages.
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
     * Query deduction details for time-based packages.
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
