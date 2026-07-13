<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BDRC\V20230808;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\Dara\Url;
use AlibabaCloud\SDK\BDRC\V20230808\Models\CheckRulesRequest;
use AlibabaCloud\SDK\BDRC\V20230808\Models\CheckRulesResponse;
use AlibabaCloud\SDK\BDRC\V20230808\Models\CloseBdrcServiceResponse;
use AlibabaCloud\SDK\BDRC\V20230808\Models\CreateProtectionPolicyRequest;
use AlibabaCloud\SDK\BDRC\V20230808\Models\CreateProtectionPolicyResponse;
use AlibabaCloud\SDK\BDRC\V20230808\Models\CreateProtectionPolicyShrinkRequest;
use AlibabaCloud\SDK\BDRC\V20230808\Models\CreateResourceCategoryRequest;
use AlibabaCloud\SDK\BDRC\V20230808\Models\CreateResourceCategoryResponse;
use AlibabaCloud\SDK\BDRC\V20230808\Models\DeleteProtectionPolicyRequest;
use AlibabaCloud\SDK\BDRC\V20230808\Models\DeleteProtectionPolicyResponse;
use AlibabaCloud\SDK\BDRC\V20230808\Models\DeleteResourceCategoryRequest;
use AlibabaCloud\SDK\BDRC\V20230808\Models\DeleteResourceCategoryResponse;
use AlibabaCloud\SDK\BDRC\V20230808\Models\DescribeCheckDetailsRequest;
use AlibabaCloud\SDK\BDRC\V20230808\Models\DescribeCheckDetailsResponse;
use AlibabaCloud\SDK\BDRC\V20230808\Models\DescribeProductDataRedundancyTypeStatRequest;
use AlibabaCloud\SDK\BDRC\V20230808\Models\DescribeProductDataRedundancyTypeStatResponse;
use AlibabaCloud\SDK\BDRC\V20230808\Models\DescribeProductDataRedundancyTypeStatShrinkRequest;
use AlibabaCloud\SDK\BDRC\V20230808\Models\DescribeProductsRequest;
use AlibabaCloud\SDK\BDRC\V20230808\Models\DescribeProductsResponse;
use AlibabaCloud\SDK\BDRC\V20230808\Models\DescribeProductsShrinkRequest;
use AlibabaCloud\SDK\BDRC\V20230808\Models\DescribeResourcesRequest;
use AlibabaCloud\SDK\BDRC\V20230808\Models\DescribeResourcesResponse;
use AlibabaCloud\SDK\BDRC\V20230808\Models\DescribeResourcesShrinkRequest;
use AlibabaCloud\SDK\BDRC\V20230808\Models\DescribeRulesRequest;
use AlibabaCloud\SDK\BDRC\V20230808\Models\DescribeRulesResponse;
use AlibabaCloud\SDK\BDRC\V20230808\Models\DescribeRulesShrinkRequest;
use AlibabaCloud\SDK\BDRC\V20230808\Models\DescribeTaskResponse;
use AlibabaCloud\SDK\BDRC\V20230808\Models\DescribeTasksRequest;
use AlibabaCloud\SDK\BDRC\V20230808\Models\DescribeTasksResponse;
use AlibabaCloud\SDK\BDRC\V20230808\Models\DescribeTopRiskyResourcesRequest;
use AlibabaCloud\SDK\BDRC\V20230808\Models\DescribeTopRiskyResourcesResponse;
use AlibabaCloud\SDK\BDRC\V20230808\Models\DescribeTopRiskyResourcesShrinkRequest;
use AlibabaCloud\SDK\BDRC\V20230808\Models\DisableCheckProductRequest;
use AlibabaCloud\SDK\BDRC\V20230808\Models\DisableCheckProductResponse;
use AlibabaCloud\SDK\BDRC\V20230808\Models\DisableCheckResourceRequest;
use AlibabaCloud\SDK\BDRC\V20230808\Models\DisableCheckResourceResponse;
use AlibabaCloud\SDK\BDRC\V20230808\Models\EnableCheckProductRequest;
use AlibabaCloud\SDK\BDRC\V20230808\Models\EnableCheckProductResponse;
use AlibabaCloud\SDK\BDRC\V20230808\Models\EnableCheckResourceRequest;
use AlibabaCloud\SDK\BDRC\V20230808\Models\EnableCheckResourceResponse;
use AlibabaCloud\SDK\BDRC\V20230808\Models\GetBdrcServiceResponse;
use AlibabaCloud\SDK\BDRC\V20230808\Models\GetMessageRequest;
use AlibabaCloud\SDK\BDRC\V20230808\Models\GetMessageResponse;
use AlibabaCloud\SDK\BDRC\V20230808\Models\GetProtectionPolicyRequest;
use AlibabaCloud\SDK\BDRC\V20230808\Models\GetProtectionPolicyResponse;
use AlibabaCloud\SDK\BDRC\V20230808\Models\GetResourceCategoryRequest;
use AlibabaCloud\SDK\BDRC\V20230808\Models\GetResourceCategoryResponse;
use AlibabaCloud\SDK\BDRC\V20230808\Models\ListMessagesRequest;
use AlibabaCloud\SDK\BDRC\V20230808\Models\ListMessagesResponse;
use AlibabaCloud\SDK\BDRC\V20230808\Models\ListProtectionPoliciesRequest;
use AlibabaCloud\SDK\BDRC\V20230808\Models\ListProtectionPoliciesResponse;
use AlibabaCloud\SDK\BDRC\V20230808\Models\ListProtectionPolicyApplicationsRequest;
use AlibabaCloud\SDK\BDRC\V20230808\Models\ListProtectionPolicyApplicationsResponse;
use AlibabaCloud\SDK\BDRC\V20230808\Models\ListResourceCategoriesRequest;
use AlibabaCloud\SDK\BDRC\V20230808\Models\ListResourceCategoriesResponse;
use AlibabaCloud\SDK\BDRC\V20230808\Models\OpenBdrcServiceResponse;
use AlibabaCloud\SDK\BDRC\V20230808\Models\UpdateProtectionPolicyRequest;
use AlibabaCloud\SDK\BDRC\V20230808\Models\UpdateProtectionPolicyResponse;
use AlibabaCloud\SDK\BDRC\V20230808\Models\UpdateProtectionPolicyShrinkRequest;
use AlibabaCloud\SDK\BDRC\V20230808\Models\UpdateResourceCategoryRequest;
use AlibabaCloud\SDK\BDRC\V20230808\Models\UpdateResourceCategoryResponse;
use AlibabaCloud\SDK\BDRC\V20230808\Models\UpdateResourcesRequest;
use AlibabaCloud\SDK\BDRC\V20230808\Models\UpdateResourcesResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class BDRC extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap = [
            'cn-shanghai-finance-1' => 'bdrc.cn-shanghai-finance-1.aliyuncs.com',
            'cn-shanghai' => 'bdrc.cn-shanghai.aliyuncs.com',
            'ap-southeast-1' => 'bdrc.ap-southeast-1.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('bdrc', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * Checks data protection scoring rules. Calling this operation triggers an asynchronous task to check whether your resources meet the data protection scoring requirements.
     *
     * @param request - CheckRulesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CheckRulesResponse
     *
     * @param CheckRulesRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return CheckRulesResponse
     */
    public function checkRulesWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->resourceArn) {
            @$body['ResourceArn'] = $request->resourceArn;
        }

        if (null !== $request->ruleId) {
            @$body['RuleId'] = $request->ruleId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CheckRules',
            'version' => '2023-08-08',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/rules/check',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CheckRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Checks data protection scoring rules. Calling this operation triggers an asynchronous task to check whether your resources meet the data protection scoring requirements.
     *
     * @param request - CheckRulesRequest
     *
     * @returns CheckRulesResponse
     *
     * @param CheckRulesRequest $request
     *
     * @return CheckRulesResponse
     */
    public function checkRules($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->checkRulesWithOptions($request, $headers, $runtime);
    }

    /**
     * Shuts down the Backup and Disaster Recovery Center.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CloseBdrcServiceResponse
     *
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return CloseBdrcServiceResponse
     */
    public function closeBdrcServiceWithOptions($headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'CloseBdrcService',
            'version' => '2023-08-08',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/service/close',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CloseBdrcServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Shuts down the Backup and Disaster Recovery Center.
     *
     * @returns CloseBdrcServiceResponse
     *
     * @return CloseBdrcServiceResponse
     */
    public function closeBdrcService()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->closeBdrcServiceWithOptions($headers, $runtime);
    }

    /**
     * Creates a protection policy.
     *
     * @param tmpReq - CreateProtectionPolicyRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateProtectionPolicyResponse
     *
     * @param CreateProtectionPolicyRequest $tmpReq
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return CreateProtectionPolicyResponse
     */
    public function createProtectionPolicyWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateProtectionPolicyShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->boundResourceCategoryIds) {
            $request->boundResourceCategoryIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->boundResourceCategoryIds, 'BoundResourceCategoryIds', 'json');
        }

        if (null !== $tmpReq->subProtectionPolicies) {
            $request->subProtectionPoliciesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->subProtectionPolicies, 'SubProtectionPolicies', 'json');
        }

        $body = [];
        if (null !== $request->boundResourceCategoryIdsShrink) {
            @$body['BoundResourceCategoryIds'] = $request->boundResourceCategoryIdsShrink;
        }

        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->protectionPolicyName) {
            @$body['ProtectionPolicyName'] = $request->protectionPolicyName;
        }

        if (null !== $request->protectionPolicyRegionId) {
            @$body['ProtectionPolicyRegionId'] = $request->protectionPolicyRegionId;
        }

        if (null !== $request->subProtectionPoliciesShrink) {
            @$body['SubProtectionPolicies'] = $request->subProtectionPoliciesShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateProtectionPolicy',
            'version' => '2023-08-08',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/protection-policies',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateProtectionPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a protection policy.
     *
     * @param request - CreateProtectionPolicyRequest
     *
     * @returns CreateProtectionPolicyResponse
     *
     * @param CreateProtectionPolicyRequest $request
     *
     * @return CreateProtectionPolicyResponse
     */
    public function createProtectionPolicy($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createProtectionPolicyWithOptions($request, $headers, $runtime);
    }

    /**
     * Creates a resource category.
     *
     * @param request - CreateResourceCategoryRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateResourceCategoryResponse
     *
     * @param CreateResourceCategoryRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return CreateResourceCategoryResponse
     */
    public function createResourceCategoryWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->resourceCategoryName) {
            @$body['ResourceCategoryName'] = $request->resourceCategoryName;
        }

        if (null !== $request->resourceMatcher) {
            @$body['ResourceMatcher'] = $request->resourceMatcher;
        }

        if (null !== $request->resourceType) {
            @$body['ResourceType'] = $request->resourceType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateResourceCategory',
            'version' => '2023-08-08',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/resource-categories/create',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateResourceCategoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a resource category.
     *
     * @param request - CreateResourceCategoryRequest
     *
     * @returns CreateResourceCategoryResponse
     *
     * @param CreateResourceCategoryRequest $request
     *
     * @return CreateResourceCategoryResponse
     */
    public function createResourceCategory($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createResourceCategoryWithOptions($request, $headers, $runtime);
    }

    /**
     * Deletes a protection policy.
     *
     * @param request - DeleteProtectionPolicyRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteProtectionPolicyResponse
     *
     * @param string                        $ProtectionPolicyId
     * @param DeleteProtectionPolicyRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return DeleteProtectionPolicyResponse
     */
    public function deleteProtectionPolicyWithOptions($ProtectionPolicyId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteProtectionPolicy',
            'version' => '2023-08-08',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/protection-policies/' . Url::percentEncode($ProtectionPolicyId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteProtectionPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a protection policy.
     *
     * @param request - DeleteProtectionPolicyRequest
     *
     * @returns DeleteProtectionPolicyResponse
     *
     * @param string                        $ProtectionPolicyId
     * @param DeleteProtectionPolicyRequest $request
     *
     * @return DeleteProtectionPolicyResponse
     */
    public function deleteProtectionPolicy($ProtectionPolicyId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteProtectionPolicyWithOptions($ProtectionPolicyId, $request, $headers, $runtime);
    }

    /**
     * Deletes a resource category.
     *
     * @param request - DeleteResourceCategoryRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteResourceCategoryResponse
     *
     * @param DeleteResourceCategoryRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return DeleteResourceCategoryResponse
     */
    public function deleteResourceCategoryWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->resourceCategoryId) {
            @$body['ResourceCategoryId'] = $request->resourceCategoryId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteResourceCategory',
            'version' => '2023-08-08',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/resource-categories/delete',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteResourceCategoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a resource category.
     *
     * @param request - DeleteResourceCategoryRequest
     *
     * @returns DeleteResourceCategoryResponse
     *
     * @param DeleteResourceCategoryRequest $request
     *
     * @return DeleteResourceCategoryResponse
     */
    public function deleteResourceCategory($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteResourceCategoryWithOptions($request, $headers, $runtime);
    }

    /**
     * Retrieves the check results for data protection rules.
     *
     * @param request - DescribeCheckDetailsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeCheckDetailsResponse
     *
     * @param DescribeCheckDetailsRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeCheckDetailsResponse
     */
    public function describeCheckDetailsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->resourceArn) {
            @$query['ResourceArn'] = $request->resourceArn;
        }

        if (null !== $request->ruleId) {
            @$query['RuleId'] = $request->ruleId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeCheckDetails',
            'version' => '2023-08-08',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/check-details',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DescribeCheckDetailsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the check results for data protection rules.
     *
     * @param request - DescribeCheckDetailsRequest
     *
     * @returns DescribeCheckDetailsResponse
     *
     * @param DescribeCheckDetailsRequest $request
     *
     * @return DescribeCheckDetailsResponse
     */
    public function describeCheckDetails($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeCheckDetailsWithOptions($request, $headers, $runtime);
    }

    /**
     * Queries statistics on data redundancy types for a cloud service.
     *
     * @param tmpReq - DescribeProductDataRedundancyTypeStatRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeProductDataRedundancyTypeStatResponse
     *
     * @param DescribeProductDataRedundancyTypeStatRequest $tmpReq
     * @param string[]                                     $headers
     * @param RuntimeOptions                               $runtime
     *
     * @return DescribeProductDataRedundancyTypeStatResponse
     */
    public function describeProductDataRedundancyTypeStatWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new DescribeProductDataRedundancyTypeStatShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->resourceOwnerIds) {
            $request->resourceOwnerIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->resourceOwnerIds, 'ResourceOwnerIds', 'json');
        }

        $query = [];
        if (null !== $request->productType) {
            @$query['ProductType'] = $request->productType;
        }

        if (null !== $request->resourceCategoryId) {
            @$query['ResourceCategoryId'] = $request->resourceCategoryId;
        }

        if (null !== $request->resourceOwnerIdsShrink) {
            @$query['ResourceOwnerIds'] = $request->resourceOwnerIdsShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeProductDataRedundancyTypeStat',
            'version' => '2023-08-08',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/products/data-redundancy-type-stat',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DescribeProductDataRedundancyTypeStatResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries statistics on data redundancy types for a cloud service.
     *
     * @param request - DescribeProductDataRedundancyTypeStatRequest
     *
     * @returns DescribeProductDataRedundancyTypeStatResponse
     *
     * @param DescribeProductDataRedundancyTypeStatRequest $request
     *
     * @return DescribeProductDataRedundancyTypeStatResponse
     */
    public function describeProductDataRedundancyTypeStat($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeProductDataRedundancyTypeStatWithOptions($request, $headers, $runtime);
    }

    /**
     * Queries the data protection score status for cloud products.
     *
     * @param tmpReq - DescribeProductsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeProductsResponse
     *
     * @param DescribeProductsRequest $tmpReq
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return DescribeProductsResponse
     */
    public function describeProductsWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new DescribeProductsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->resourceOwnerIds) {
            $request->resourceOwnerIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->resourceOwnerIds, 'ResourceOwnerIds', 'json');
        }

        $query = [];
        if (null !== $request->productType) {
            @$query['ProductType'] = $request->productType;
        }

        if (null !== $request->resourceCategoryId) {
            @$query['ResourceCategoryId'] = $request->resourceCategoryId;
        }

        if (null !== $request->resourceOwnerIdsShrink) {
            @$query['ResourceOwnerIds'] = $request->resourceOwnerIdsShrink;
        }

        if (null !== $request->resourceRegionId) {
            @$query['ResourceRegionId'] = $request->resourceRegionId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeProducts',
            'version' => '2023-08-08',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/products',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DescribeProductsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the data protection score status for cloud products.
     *
     * @param request - DescribeProductsRequest
     *
     * @returns DescribeProductsResponse
     *
     * @param DescribeProductsRequest $request
     *
     * @return DescribeProductsResponse
     */
    public function describeProducts($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeProductsWithOptions($request, $headers, $runtime);
    }

    /**
     * Query resources.
     *
     * @param tmpReq - DescribeResourcesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeResourcesResponse
     *
     * @param DescribeResourcesRequest $tmpReq
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeResourcesResponse
     */
    public function describeResourcesWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new DescribeResourcesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->resourceOwnerIds) {
            $request->resourceOwnerIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->resourceOwnerIds, 'ResourceOwnerIds', 'json');
        }

        $query = [];
        if (null !== $request->dataRedundancyType) {
            @$query['DataRedundancyType'] = $request->dataRedundancyType;
        }

        if (null !== $request->failedRuleTemplate) {
            @$query['FailedRuleTemplate'] = $request->failedRuleTemplate;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->resourceArn) {
            @$query['ResourceArn'] = $request->resourceArn;
        }

        if (null !== $request->resourceCategoryId) {
            @$query['ResourceCategoryId'] = $request->resourceCategoryId;
        }

        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceOwnerIdsShrink) {
            @$query['ResourceOwnerIds'] = $request->resourceOwnerIdsShrink;
        }

        if (null !== $request->resourceRegionId) {
            @$query['ResourceRegionId'] = $request->resourceRegionId;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->sortBy) {
            @$query['SortBy'] = $request->sortBy;
        }

        if (null !== $request->sortOrder) {
            @$query['SortOrder'] = $request->sortOrder;
        }

        if (null !== $request->storageClass) {
            @$query['StorageClass'] = $request->storageClass;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeResources',
            'version' => '2023-08-08',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/resources',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DescribeResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query resources.
     *
     * @param request - DescribeResourcesRequest
     *
     * @returns DescribeResourcesResponse
     *
     * @param DescribeResourcesRequest $request
     *
     * @return DescribeResourcesResponse
     */
    public function describeResources($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeResourcesWithOptions($request, $headers, $runtime);
    }

    /**
     * Lists all data protection rules.
     *
     * @param tmpReq - DescribeRulesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeRulesResponse
     *
     * @param DescribeRulesRequest $tmpReq
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return DescribeRulesResponse
     */
    public function describeRulesWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new DescribeRulesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->resourceOwnerIds) {
            $request->resourceOwnerIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->resourceOwnerIds, 'ResourceOwnerIds', 'json');
        }

        $query = [];
        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->resourceCategoryId) {
            @$query['ResourceCategoryId'] = $request->resourceCategoryId;
        }

        if (null !== $request->resourceOwnerIdsShrink) {
            @$query['ResourceOwnerIds'] = $request->resourceOwnerIdsShrink;
        }

        if (null !== $request->resourceRegionId) {
            @$query['ResourceRegionId'] = $request->resourceRegionId;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeRules',
            'version' => '2023-08-08',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/rules',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DescribeRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Lists all data protection rules.
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
        $headers = [];

        return $this->describeRulesWithOptions($request, $headers, $runtime);
    }

    /**
     * Retrieves the details of an asynchronous task.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeTaskResponse
     *
     * @param string         $TaskId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DescribeTaskResponse
     */
    public function describeTaskWithOptions($TaskId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DescribeTask',
            'version' => '2023-08-08',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/tasks/' . Url::percentEncode($TaskId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DescribeTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the details of an asynchronous task.
     *
     * @returns DescribeTaskResponse
     *
     * @param string $TaskId
     *
     * @return DescribeTaskResponse
     */
    public function describeTask($TaskId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeTaskWithOptions($TaskId, $headers, $runtime);
    }

    /**
     * Retrieves asynchronous tasks.
     *
     * @param request - DescribeTasksRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeTasksResponse
     *
     * @param DescribeTasksRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return DescribeTasksResponse
     */
    public function describeTasksWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->taskStatus) {
            @$query['TaskStatus'] = $request->taskStatus;
        }

        if (null !== $request->taskType) {
            @$query['TaskType'] = $request->taskType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeTasks',
            'version' => '2023-08-08',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/tasks',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DescribeTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves asynchronous tasks.
     *
     * @param request - DescribeTasksRequest
     *
     * @returns DescribeTasksResponse
     *
     * @param DescribeTasksRequest $request
     *
     * @return DescribeTasksResponse
     */
    public function describeTasks($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeTasksWithOptions($request, $headers, $runtime);
    }

    /**
     * Lists the most threatened resources.
     *
     * @param tmpReq - DescribeTopRiskyResourcesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeTopRiskyResourcesResponse
     *
     * @param DescribeTopRiskyResourcesRequest $tmpReq
     * @param string[]                         $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeTopRiskyResourcesResponse
     */
    public function describeTopRiskyResourcesWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new DescribeTopRiskyResourcesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->resourceOwnerIds) {
            $request->resourceOwnerIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->resourceOwnerIds, 'ResourceOwnerIds', 'json');
        }

        $query = [];
        if (null !== $request->resourceCategoryId) {
            @$query['ResourceCategoryId'] = $request->resourceCategoryId;
        }

        if (null !== $request->resourceOwnerIdsShrink) {
            @$query['ResourceOwnerIds'] = $request->resourceOwnerIdsShrink;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeTopRiskyResources',
            'version' => '2023-08-08',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/resources/top-risky',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DescribeTopRiskyResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Lists the most threatened resources.
     *
     * @param request - DescribeTopRiskyResourcesRequest
     *
     * @returns DescribeTopRiskyResourcesResponse
     *
     * @param DescribeTopRiskyResourcesRequest $request
     *
     * @return DescribeTopRiskyResourcesResponse
     */
    public function describeTopRiskyResources($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeTopRiskyResourcesWithOptions($request, $headers, $runtime);
    }

    /**
     * Disables the data protection score for a cloud product.
     *
     * @param request - DisableCheckProductRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DisableCheckProductResponse
     *
     * @param DisableCheckProductRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return DisableCheckProductResponse
     */
    public function disableCheckProductWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->productType) {
            @$body['ProductType'] = $request->productType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DisableCheckProduct',
            'version' => '2023-08-08',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/products/disable-check',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DisableCheckProductResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Disables the data protection score for a cloud product.
     *
     * @param request - DisableCheckProductRequest
     *
     * @returns DisableCheckProductResponse
     *
     * @param DisableCheckProductRequest $request
     *
     * @return DisableCheckProductResponse
     */
    public function disableCheckProduct($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->disableCheckProductWithOptions($request, $headers, $runtime);
    }

    /**
     * Disables the data protection score for a resource.
     *
     * @param request - DisableCheckResourceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DisableCheckResourceResponse
     *
     * @param DisableCheckResourceRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return DisableCheckResourceResponse
     */
    public function disableCheckResourceWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->resourceArn) {
            @$body['ResourceArn'] = $request->resourceArn;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DisableCheckResource',
            'version' => '2023-08-08',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/resources/disable-check',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DisableCheckResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Disables the data protection score for a resource.
     *
     * @param request - DisableCheckResourceRequest
     *
     * @returns DisableCheckResourceResponse
     *
     * @param DisableCheckResourceRequest $request
     *
     * @return DisableCheckResourceResponse
     */
    public function disableCheckResource($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->disableCheckResourceWithOptions($request, $headers, $runtime);
    }

    /**
     * Enables data protection scoring for a cloud product.
     *
     * @param request - EnableCheckProductRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EnableCheckProductResponse
     *
     * @param EnableCheckProductRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return EnableCheckProductResponse
     */
    public function enableCheckProductWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->productType) {
            @$body['ProductType'] = $request->productType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'EnableCheckProduct',
            'version' => '2023-08-08',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/products/enable-check',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return EnableCheckProductResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Enables data protection scoring for a cloud product.
     *
     * @param request - EnableCheckProductRequest
     *
     * @returns EnableCheckProductResponse
     *
     * @param EnableCheckProductRequest $request
     *
     * @return EnableCheckProductResponse
     */
    public function enableCheckProduct($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->enableCheckProductWithOptions($request, $headers, $runtime);
    }

    /**
     * Enables data protection scoring for a single resource.
     *
     * @param request - EnableCheckResourceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EnableCheckResourceResponse
     *
     * @param EnableCheckResourceRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return EnableCheckResourceResponse
     */
    public function enableCheckResourceWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->resourceArn) {
            @$body['ResourceArn'] = $request->resourceArn;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'EnableCheckResource',
            'version' => '2023-08-08',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/resources/enable-check',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return EnableCheckResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Enables data protection scoring for a single resource.
     *
     * @param request - EnableCheckResourceRequest
     *
     * @returns EnableCheckResourceResponse
     *
     * @param EnableCheckResourceRequest $request
     *
     * @return EnableCheckResourceResponse
     */
    public function enableCheckResource($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->enableCheckResourceWithOptions($request, $headers, $runtime);
    }

    /**
     * Queries the status of the Backup and Disaster Recovery Center.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetBdrcServiceResponse
     *
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetBdrcServiceResponse
     */
    public function getBdrcServiceWithOptions($headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetBdrcService',
            'version' => '2023-08-08',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/service',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetBdrcServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the status of the Backup and Disaster Recovery Center.
     *
     * @returns GetBdrcServiceResponse
     *
     * @return GetBdrcServiceResponse
     */
    public function getBdrcService()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getBdrcServiceWithOptions($headers, $runtime);
    }

    /**
     * Retrieves a single message.
     *
     * @param request - GetMessageRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetMessageResponse
     *
     * @param string            $MessageId
     * @param GetMessageRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return GetMessageResponse
     */
    public function getMessageWithOptions($MessageId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetMessage',
            'version' => '2023-08-08',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/messages/' . Url::percentEncode($MessageId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetMessageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves a single message.
     *
     * @param request - GetMessageRequest
     *
     * @returns GetMessageResponse
     *
     * @param string            $MessageId
     * @param GetMessageRequest $request
     *
     * @return GetMessageResponse
     */
    public function getMessage($MessageId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getMessageWithOptions($MessageId, $request, $headers, $runtime);
    }

    /**
     * Retrieves a protection policy.
     *
     * @param request - GetProtectionPolicyRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetProtectionPolicyResponse
     *
     * @param string                     $ProtectionPolicyId
     * @param GetProtectionPolicyRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return GetProtectionPolicyResponse
     */
    public function getProtectionPolicyWithOptions($ProtectionPolicyId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetProtectionPolicy',
            'version' => '2023-08-08',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/protection-policies/' . Url::percentEncode($ProtectionPolicyId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetProtectionPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves a protection policy.
     *
     * @param request - GetProtectionPolicyRequest
     *
     * @returns GetProtectionPolicyResponse
     *
     * @param string                     $ProtectionPolicyId
     * @param GetProtectionPolicyRequest $request
     *
     * @return GetProtectionPolicyResponse
     */
    public function getProtectionPolicy($ProtectionPolicyId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getProtectionPolicyWithOptions($ProtectionPolicyId, $request, $headers, $runtime);
    }

    /**
     * Retrieves a single resource category.
     *
     * @param request - GetResourceCategoryRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetResourceCategoryResponse
     *
     * @param GetResourceCategoryRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return GetResourceCategoryResponse
     */
    public function getResourceCategoryWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->resourceCategoryId) {
            @$query['ResourceCategoryId'] = $request->resourceCategoryId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetResourceCategory',
            'version' => '2023-08-08',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/resource-categories/get',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetResourceCategoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves a single resource category.
     *
     * @param request - GetResourceCategoryRequest
     *
     * @returns GetResourceCategoryResponse
     *
     * @param GetResourceCategoryRequest $request
     *
     * @return GetResourceCategoryResponse
     */
    public function getResourceCategory($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getResourceCategoryWithOptions($request, $headers, $runtime);
    }

    /**
     * Queries messages in batches.
     *
     * @param request - ListMessagesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListMessagesResponse
     *
     * @param ListMessagesRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return ListMessagesResponse
     */
    public function listMessagesWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->messageLevel) {
            @$query['MessageLevel'] = $request->messageLevel;
        }

        if (null !== $request->messageTimeEarlierThan) {
            @$query['MessageTimeEarlierThan'] = $request->messageTimeEarlierThan;
        }

        if (null !== $request->messageTimeLaterThan) {
            @$query['MessageTimeLaterThan'] = $request->messageTimeLaterThan;
        }

        if (null !== $request->messageType) {
            @$query['MessageType'] = $request->messageType;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListMessages',
            'version' => '2023-08-08',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/messages',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListMessagesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries messages in batches.
     *
     * @param request - ListMessagesRequest
     *
     * @returns ListMessagesResponse
     *
     * @param ListMessagesRequest $request
     *
     * @return ListMessagesResponse
     */
    public function listMessages($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listMessagesWithOptions($request, $headers, $runtime);
    }

    /**
     * Retrieves a list of protection policies.
     *
     * @param request - ListProtectionPoliciesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListProtectionPoliciesResponse
     *
     * @param ListProtectionPoliciesRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return ListProtectionPoliciesResponse
     */
    public function listProtectionPoliciesWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->protectionPolicyId) {
            @$query['ProtectionPolicyId'] = $request->protectionPolicyId;
        }

        if (null !== $request->protectionPolicyRegionId) {
            @$query['ProtectionPolicyRegionId'] = $request->protectionPolicyRegionId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListProtectionPolicies',
            'version' => '2023-08-08',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/protection-policies',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListProtectionPoliciesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves a list of protection policies.
     *
     * @param request - ListProtectionPoliciesRequest
     *
     * @returns ListProtectionPoliciesResponse
     *
     * @param ListProtectionPoliciesRequest $request
     *
     * @return ListProtectionPoliciesResponse
     */
    public function listProtectionPolicies($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listProtectionPoliciesWithOptions($request, $headers, $runtime);
    }

    /**
     * Retrieves the application history of the protection policy.
     *
     * @param request - ListProtectionPolicyApplicationsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListProtectionPolicyApplicationsResponse
     *
     * @param string                                  $ProtectionPolicyId
     * @param ListProtectionPolicyApplicationsRequest $request
     * @param string[]                                $headers
     * @param RuntimeOptions                          $runtime
     *
     * @return ListProtectionPolicyApplicationsResponse
     */
    public function listProtectionPolicyApplicationsWithOptions($ProtectionPolicyId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->applyStatus) {
            @$query['ApplyStatus'] = $request->applyStatus;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->subProtectionPolicyType) {
            @$query['SubProtectionPolicyType'] = $request->subProtectionPolicyType;
        }

        if (null !== $request->taskId) {
            @$query['TaskId'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListProtectionPolicyApplications',
            'version' => '2023-08-08',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/protection-policies/' . Url::percentEncode($ProtectionPolicyId) . '/list-applications',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListProtectionPolicyApplicationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the application history of the protection policy.
     *
     * @param request - ListProtectionPolicyApplicationsRequest
     *
     * @returns ListProtectionPolicyApplicationsResponse
     *
     * @param string                                  $ProtectionPolicyId
     * @param ListProtectionPolicyApplicationsRequest $request
     *
     * @return ListProtectionPolicyApplicationsResponse
     */
    public function listProtectionPolicyApplications($ProtectionPolicyId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listProtectionPolicyApplicationsWithOptions($ProtectionPolicyId, $request, $headers, $runtime);
    }

    /**
     * Retrieves a list of resource categories.
     *
     * @param request - ListResourceCategoriesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListResourceCategoriesResponse
     *
     * @param ListResourceCategoriesRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return ListResourceCategoriesResponse
     */
    public function listResourceCategoriesWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->resourceCategoryId) {
            @$query['ResourceCategoryId'] = $request->resourceCategoryId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListResourceCategories',
            'version' => '2023-08-08',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/resource-categories/list',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListResourceCategoriesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves a list of resource categories.
     *
     * @param request - ListResourceCategoriesRequest
     *
     * @returns ListResourceCategoriesResponse
     *
     * @param ListResourceCategoriesRequest $request
     *
     * @return ListResourceCategoriesResponse
     */
    public function listResourceCategories($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listResourceCategoriesWithOptions($request, $headers, $runtime);
    }

    /**
     * Enables the Backup and Disaster Recovery Center.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns OpenBdrcServiceResponse
     *
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return OpenBdrcServiceResponse
     */
    public function openBdrcServiceWithOptions($headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'OpenBdrcService',
            'version' => '2023-08-08',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/service/open',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return OpenBdrcServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Enables the Backup and Disaster Recovery Center.
     *
     * @returns OpenBdrcServiceResponse
     *
     * @return OpenBdrcServiceResponse
     */
    public function openBdrcService()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->openBdrcServiceWithOptions($headers, $runtime);
    }

    /**
     * Updates a protection policy.
     *
     * @param tmpReq - UpdateProtectionPolicyRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateProtectionPolicyResponse
     *
     * @param string                        $ProtectionPolicyId
     * @param UpdateProtectionPolicyRequest $tmpReq
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return UpdateProtectionPolicyResponse
     */
    public function updateProtectionPolicyWithOptions($ProtectionPolicyId, $tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateProtectionPolicyShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->boundResourceCategoryIds) {
            $request->boundResourceCategoryIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->boundResourceCategoryIds, 'BoundResourceCategoryIds', 'json');
        }

        if (null !== $tmpReq->subProtectionPolicies) {
            $request->subProtectionPoliciesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->subProtectionPolicies, 'SubProtectionPolicies', 'json');
        }

        $body = [];
        if (null !== $request->boundResourceCategoryIdsShrink) {
            @$body['BoundResourceCategoryIds'] = $request->boundResourceCategoryIdsShrink;
        }

        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->protectionPolicyName) {
            @$body['ProtectionPolicyName'] = $request->protectionPolicyName;
        }

        if (null !== $request->subProtectionPoliciesShrink) {
            @$body['SubProtectionPolicies'] = $request->subProtectionPoliciesShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateProtectionPolicy',
            'version' => '2023-08-08',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/protection-policies/' . Url::percentEncode($ProtectionPolicyId) . '',
            'method' => 'PATCH',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateProtectionPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates a protection policy.
     *
     * @param request - UpdateProtectionPolicyRequest
     *
     * @returns UpdateProtectionPolicyResponse
     *
     * @param string                        $ProtectionPolicyId
     * @param UpdateProtectionPolicyRequest $request
     *
     * @return UpdateProtectionPolicyResponse
     */
    public function updateProtectionPolicy($ProtectionPolicyId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateProtectionPolicyWithOptions($ProtectionPolicyId, $request, $headers, $runtime);
    }

    /**
     * Updates a resource category.
     *
     * @param request - UpdateResourceCategoryRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateResourceCategoryResponse
     *
     * @param UpdateResourceCategoryRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return UpdateResourceCategoryResponse
     */
    public function updateResourceCategoryWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->resourceCategoryId) {
            @$body['ResourceCategoryId'] = $request->resourceCategoryId;
        }

        if (null !== $request->resourceCategoryName) {
            @$body['ResourceCategoryName'] = $request->resourceCategoryName;
        }

        if (null !== $request->resourceMatcher) {
            @$body['ResourceMatcher'] = $request->resourceMatcher;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateResourceCategory',
            'version' => '2023-08-08',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/resource-categories/update',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateResourceCategoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates a resource category.
     *
     * @param request - UpdateResourceCategoryRequest
     *
     * @returns UpdateResourceCategoryResponse
     *
     * @param UpdateResourceCategoryRequest $request
     *
     * @return UpdateResourceCategoryResponse
     */
    public function updateResourceCategory($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateResourceCategoryWithOptions($request, $headers, $runtime);
    }

    /**
     * Updates the resource list. When you call this operation, an asynchronous task is triggered to update your resource list and data protection score.
     *
     * @param request - UpdateResourcesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateResourcesResponse
     *
     * @param UpdateResourcesRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return UpdateResourcesResponse
     */
    public function updateResourcesWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->resourceType) {
            @$body['ResourceType'] = $request->resourceType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateResources',
            'version' => '2023-08-08',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/resources/update',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the resource list. When you call this operation, an asynchronous task is triggered to update your resource list and data protection score.
     *
     * @param request - UpdateResourcesRequest
     *
     * @returns UpdateResourcesResponse
     *
     * @param UpdateResourcesRequest $request
     *
     * @return UpdateResourcesResponse
     */
    public function updateResources($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateResourcesWithOptions($request, $headers, $runtime);
    }
}
