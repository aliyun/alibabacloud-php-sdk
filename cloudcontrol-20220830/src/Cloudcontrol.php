<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudcontrol\V20220830;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\Dara\Url;
use AlibabaCloud\SDK\Cloudcontrol\V20220830\Models\CancelTaskResponse;
use AlibabaCloud\SDK\Cloudcontrol\V20220830\Models\CreateResourceRequest;
use AlibabaCloud\SDK\Cloudcontrol\V20220830\Models\CreateResourceResponse;
use AlibabaCloud\SDK\Cloudcontrol\V20220830\Models\DeleteResourceRequest;
use AlibabaCloud\SDK\Cloudcontrol\V20220830\Models\DeleteResourceResponse;
use AlibabaCloud\SDK\Cloudcontrol\V20220830\Models\DeleteResourceShrinkRequest;
use AlibabaCloud\SDK\Cloudcontrol\V20220830\Models\GetPriceRequest;
use AlibabaCloud\SDK\Cloudcontrol\V20220830\Models\GetPriceResponse;
use AlibabaCloud\SDK\Cloudcontrol\V20220830\Models\GetPriceShrinkRequest;
use AlibabaCloud\SDK\Cloudcontrol\V20220830\Models\GetResourcesRequest;
use AlibabaCloud\SDK\Cloudcontrol\V20220830\Models\GetResourcesResponse;
use AlibabaCloud\SDK\Cloudcontrol\V20220830\Models\GetResourcesShrinkRequest;
use AlibabaCloud\SDK\Cloudcontrol\V20220830\Models\GetResourceTypeHeaders;
use AlibabaCloud\SDK\Cloudcontrol\V20220830\Models\GetResourceTypeResponse;
use AlibabaCloud\SDK\Cloudcontrol\V20220830\Models\GetTaskResponse;
use AlibabaCloud\SDK\Cloudcontrol\V20220830\Models\ListDataSourcesRequest;
use AlibabaCloud\SDK\Cloudcontrol\V20220830\Models\ListDataSourcesResponse;
use AlibabaCloud\SDK\Cloudcontrol\V20220830\Models\ListDataSourcesShrinkRequest;
use AlibabaCloud\SDK\Cloudcontrol\V20220830\Models\ListProductsHeaders;
use AlibabaCloud\SDK\Cloudcontrol\V20220830\Models\ListProductsRequest;
use AlibabaCloud\SDK\Cloudcontrol\V20220830\Models\ListProductsResponse;
use AlibabaCloud\SDK\Cloudcontrol\V20220830\Models\ListResourceTypesHeaders;
use AlibabaCloud\SDK\Cloudcontrol\V20220830\Models\ListResourceTypesRequest;
use AlibabaCloud\SDK\Cloudcontrol\V20220830\Models\ListResourceTypesResponse;
use AlibabaCloud\SDK\Cloudcontrol\V20220830\Models\ListResourceTypesShrinkRequest;
use AlibabaCloud\SDK\Cloudcontrol\V20220830\Models\UpdateResourceRequest;
use AlibabaCloud\SDK\Cloudcontrol\V20220830\Models\UpdateResourceResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Cloudcontrol extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('cloudcontrol', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * Calls this operation to cancel a specified asynchronous task.
     *
     * @remarks
     * Only tasks that are in the Pending or Running state can be canceled.
     * You can call the CancelTask operation to cancel a Cloud Control API task, but the tasks that have been started in the downstream Alibaba Cloud services cannot be canceled.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CancelTaskResponse
     *
     * @param string         $taskId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return CancelTaskResponse
     */
    public function cancelTaskWithOptions($taskId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'CancelTask',
            'version' => '2022-08-30',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/tasks/' . Url::percentEncode($taskId) . '/operation/cancel',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CancelTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Calls this operation to cancel a specified asynchronous task.
     *
     * @remarks
     * Only tasks that are in the Pending or Running state can be canceled.
     * You can call the CancelTask operation to cancel a Cloud Control API task, but the tasks that have been started in the downstream Alibaba Cloud services cannot be canceled.
     *
     * @returns CancelTaskResponse
     *
     * @param string $taskId
     *
     * @return CancelTaskResponse
     */
    public function cancelTask($taskId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->cancelTaskWithOptions($taskId, $headers, $runtime);
    }

    /**
     * Calls this operation to create resources.
     *
     * @remarks
     * You can go to [OpenAPI Explorer](https://next.api.aliyun.com/cloudcontrol) to view the documentation and try out Cloud Control API.
     *
     * @param requestPath - the whole path of resource string
     * @param request - CreateResourceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateResourceResponse
     *
     * @param string                $requestPath
     * @param CreateResourceRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return CreateResourceResponse
     */
    public function createResourceWithOptions($requestPath, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['clientToken'] = $request->clientToken;
        }

        if (null !== $request->regionId) {
            @$query['regionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'CreateResource',
            'version' => '2022-08-30',
            'protocol' => 'HTTPS',
            'pathname' => '' . $requestPath . '',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Calls this operation to create resources.
     *
     * @remarks
     * You can go to [OpenAPI Explorer](https://next.api.aliyun.com/cloudcontrol) to view the documentation and try out Cloud Control API.
     *
     * @param requestPath - the whole path of resource string
     * @param request - CreateResourceRequest
     *
     * @returns CreateResourceResponse
     *
     * @param string                $requestPath
     * @param CreateResourceRequest $request
     *
     * @return CreateResourceResponse
     */
    public function createResource($requestPath, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createResourceWithOptions($requestPath, $request, $headers, $runtime);
    }

    /**
     * Calls this operation to delete resources.
     *
     * @remarks
     * You can go to [OpenAPI Explorer](https://next.api.aliyun.com/cloudcontrol) to view the documentation and try out Cloud Control API.
     *
     * @param requestPath - the whole path of resource string
     * @param tmpReq - DeleteResourceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteResourceResponse
     *
     * @param string                $requestPath
     * @param DeleteResourceRequest $tmpReq
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteResourceResponse
     */
    public function deleteResourceWithOptions($requestPath, $tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new DeleteResourceShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->filter) {
            $request->filterShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->filter, 'filter', 'json');
        }

        $query = [];
        if (null !== $request->clientToken) {
            @$query['clientToken'] = $request->clientToken;
        }

        if (null !== $request->filterShrink) {
            @$query['filter'] = $request->filterShrink;
        }

        if (null !== $request->regionId) {
            @$query['regionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteResource',
            'version' => '2022-08-30',
            'protocol' => 'HTTPS',
            'pathname' => '' . $requestPath . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Calls this operation to delete resources.
     *
     * @remarks
     * You can go to [OpenAPI Explorer](https://next.api.aliyun.com/cloudcontrol) to view the documentation and try out Cloud Control API.
     *
     * @param requestPath - the whole path of resource string
     * @param request - DeleteResourceRequest
     *
     * @returns DeleteResourceResponse
     *
     * @param string                $requestPath
     * @param DeleteResourceRequest $request
     *
     * @return DeleteResourceResponse
     */
    public function deleteResource($requestPath, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteResourceWithOptions($requestPath, $request, $headers, $runtime);
    }

    /**
     * An RFQ interface through which users can query resource prices.
     *
     * @param requestPath - the whole path of resource string
     * @param tmpReq - GetPriceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetPriceResponse
     *
     * @param string          $requestPath
     * @param GetPriceRequest $tmpReq
     * @param string[]        $headers
     * @param RuntimeOptions  $runtime
     *
     * @return GetPriceResponse
     */
    public function getPriceWithOptions($requestPath, $tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new GetPriceShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->resourceAttributes) {
            $request->resourceAttributesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->resourceAttributes, 'resourceAttributes', 'json');
        }

        $query = [];
        if (null !== $request->regionId) {
            @$query['regionId'] = $request->regionId;
        }

        if (null !== $request->resourceAttributesShrink) {
            @$query['resourceAttributes'] = $request->resourceAttributesShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetPrice',
            'version' => '2022-08-30',
            'protocol' => 'HTTPS',
            'pathname' => '' . $requestPath . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetPriceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * An RFQ interface through which users can query resource prices.
     *
     * @param requestPath - the whole path of resource string
     * @param request - GetPriceRequest
     *
     * @returns GetPriceResponse
     *
     * @param string          $requestPath
     * @param GetPriceRequest $request
     *
     * @return GetPriceResponse
     */
    public function getPrice($requestPath, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getPriceWithOptions($requestPath, $request, $headers, $runtime);
    }

    /**
     * You can call the operation to obtain resource metadata.
     *
     * @param requestPath - the whole path of resource string
     * @param headers - GetResourceTypeHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetResourceTypeResponse
     *
     * @param string                 $requestPath
     * @param GetResourceTypeHeaders $headers
     * @param RuntimeOptions         $runtime
     *
     * @return GetResourceTypeResponse
     */
    public function getResourceTypeWithOptions($requestPath, $headers, $runtime)
    {
        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsAcceptLanguage) {
            @$realHeaders['x-acs-accept-language'] = '' . $headers->xAcsAcceptLanguage;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
        ]);
        $params = new Params([
            'action' => 'GetResourceType',
            'version' => '2022-08-30',
            'protocol' => 'HTTPS',
            'pathname' => '' . $requestPath . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetResourceTypeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call the operation to obtain resource metadata.
     *
     * @param requestPath - the whole path of resource string
     *
     * @returns GetResourceTypeResponse
     *
     * @param string $requestPath
     *
     * @return GetResourceTypeResponse
     */
    public function getResourceType($requestPath)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetResourceTypeHeaders([]);

        return $this->getResourceTypeWithOptions($requestPath, $headers, $runtime);
    }

    /**
     * You can call the operation to query resources.
     *
     * @remarks
     * You can go to [OpenAPI Explorer](https://next.api.aliyun.com/cloudcontrol) to view the documentation and try out CloudControl API.
     * You can call this operation to query resources List and Get based on different request paths.
     *
     * @param requestPath - the whole path of resource string
     * @param tmpReq - GetResourcesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetResourcesResponse
     *
     * @param string              $requestPath
     * @param GetResourcesRequest $tmpReq
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return GetResourcesResponse
     */
    public function getResourcesWithOptions($requestPath, $tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new GetResourcesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->filter) {
            $request->filterShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->filter, 'filter', 'json');
        }

        $query = [];
        if (null !== $request->filterShrink) {
            @$query['filter'] = $request->filterShrink;
        }

        if (null !== $request->maxResults) {
            @$query['maxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['nextToken'] = $request->nextToken;
        }

        if (null !== $request->regionId) {
            @$query['regionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetResources',
            'version' => '2022-08-30',
            'protocol' => 'HTTPS',
            'pathname' => '' . $requestPath . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call the operation to query resources.
     *
     * @remarks
     * You can go to [OpenAPI Explorer](https://next.api.aliyun.com/cloudcontrol) to view the documentation and try out CloudControl API.
     * You can call this operation to query resources List and Get based on different request paths.
     *
     * @param requestPath - the whole path of resource string
     * @param request - GetResourcesRequest
     *
     * @returns GetResourcesResponse
     *
     * @param string              $requestPath
     * @param GetResourcesRequest $request
     *
     * @return GetResourcesResponse
     */
    public function getResources($requestPath, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getResourcesWithOptions($requestPath, $request, $headers, $runtime);
    }

    /**
     * Calls this operation to query a specified asynchronous task.
     *
     * @remarks
     * GET /api/v1/tasks/{taskId}.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetTaskResponse
     *
     * @param string         $taskId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetTaskResponse
     */
    public function getTaskWithOptions($taskId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetTask',
            'version' => '2022-08-30',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/tasks/' . Url::percentEncode($taskId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Calls this operation to query a specified asynchronous task.
     *
     * @remarks
     * GET /api/v1/tasks/{taskId}.
     *
     * @returns GetTaskResponse
     *
     * @param string $taskId
     *
     * @return GetTaskResponse
     */
    public function getTask($taskId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getTaskWithOptions($taskId, $headers, $runtime);
    }

    /**
     * You can call the operation to query the valid values of resource attributes, such as RegionID and ZoneId.
     *
     * @param requestPath - the whole path of resource string
     * @param tmpReq - ListDataSourcesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListDataSourcesResponse
     *
     * @param string                 $requestPath
     * @param ListDataSourcesRequest $tmpReq
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return ListDataSourcesResponse
     */
    public function listDataSourcesWithOptions($requestPath, $tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new ListDataSourcesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->filter) {
            $request->filterShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->filter, 'filter', 'json');
        }

        $query = [];
        if (null !== $request->attributeName) {
            @$query['attributeName'] = $request->attributeName;
        }

        if (null !== $request->filterShrink) {
            @$query['filter'] = $request->filterShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListDataSources',
            'version' => '2022-08-30',
            'protocol' => 'HTTPS',
            'pathname' => '' . $requestPath . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListDataSourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call the operation to query the valid values of resource attributes, such as RegionID and ZoneId.
     *
     * @param requestPath - the whole path of resource string
     * @param request - ListDataSourcesRequest
     *
     * @returns ListDataSourcesResponse
     *
     * @param string                 $requestPath
     * @param ListDataSourcesRequest $request
     *
     * @return ListDataSourcesResponse
     */
    public function listDataSources($requestPath, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listDataSourcesWithOptions($requestPath, $request, $headers, $runtime);
    }

    /**
     * Calls this operation to list the supported services.
     *
     * @remarks
     * GET /api/v1/providers/{provider}/products.
     *
     * @param request - ListProductsRequest
     * @param headers - ListProductsHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListProductsResponse
     *
     * @param string              $provider
     * @param ListProductsRequest $request
     * @param ListProductsHeaders $headers
     * @param RuntimeOptions      $runtime
     *
     * @return ListProductsResponse
     */
    public function listProductsWithOptions($provider, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->maxResults) {
            @$query['maxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['nextToken'] = $request->nextToken;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsAcceptLanguage) {
            @$realHeaders['x-acs-accept-language'] = '' . $headers->xAcsAcceptLanguage;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListProducts',
            'version' => '2022-08-30',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/providers/' . Url::percentEncode($provider) . '/products',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListProductsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Calls this operation to list the supported services.
     *
     * @remarks
     * GET /api/v1/providers/{provider}/products.
     *
     * @param request - ListProductsRequest
     *
     * @returns ListProductsResponse
     *
     * @param string              $provider
     * @param ListProductsRequest $request
     *
     * @return ListProductsResponse
     */
    public function listProducts($provider, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new ListProductsHeaders([]);

        return $this->listProductsWithOptions($provider, $request, $headers, $runtime);
    }

    /**
     * Calls this operation to list the resource types of a service.
     *
     * @remarks
     * GET /api/v1/providers/{provider}/products/{product}/resourceTypes.
     *
     * @param tmpReq - ListResourceTypesRequest
     * @param headers - ListResourceTypesHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListResourceTypesResponse
     *
     * @param string                   $provider
     * @param string                   $product
     * @param ListResourceTypesRequest $tmpReq
     * @param ListResourceTypesHeaders $headers
     * @param RuntimeOptions           $runtime
     *
     * @return ListResourceTypesResponse
     */
    public function listResourceTypesWithOptions($provider, $product, $tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new ListResourceTypesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->resourceTypes) {
            $request->resourceTypesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->resourceTypes, 'resourceTypes', 'simple');
        }

        $query = [];
        if (null !== $request->maxResults) {
            @$query['maxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['nextToken'] = $request->nextToken;
        }

        if (null !== $request->resourceTypesShrink) {
            @$query['resourceTypes'] = $request->resourceTypesShrink;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsAcceptLanguage) {
            @$realHeaders['x-acs-accept-language'] = '' . $headers->xAcsAcceptLanguage;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListResourceTypes',
            'version' => '2022-08-30',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/providers/' . Url::percentEncode($provider) . '/products/' . Url::percentEncode($product) . '/resourceTypes',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListResourceTypesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Calls this operation to list the resource types of a service.
     *
     * @remarks
     * GET /api/v1/providers/{provider}/products/{product}/resourceTypes.
     *
     * @param request - ListResourceTypesRequest
     *
     * @returns ListResourceTypesResponse
     *
     * @param string                   $provider
     * @param string                   $product
     * @param ListResourceTypesRequest $request
     *
     * @return ListResourceTypesResponse
     */
    public function listResourceTypes($provider, $product, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new ListResourceTypesHeaders([]);

        return $this->listResourceTypesWithOptions($provider, $product, $request, $headers, $runtime);
    }

    /**
     * Calls this operation to update resources.
     *
     * @remarks
     * You can go to [OpenAPI Explorer](https://next.api.aliyun.com/cloudcontrol) to view the documentation and try out Cloud Control API.
     * If resources fail to be updated at any time, the Cloud Control API does not roll the resource back to the original status.
     * The resource APIs cannot be rolled back. If the API operation is partially failed to be called, you can call the GetResource operation to view the latest status of the resource. If necessary, you can call the UpdateResource or DeleteResource operation to manually compensate for the failure.
     *
     * @param requestPath - the whole path of resource string
     * @param request - UpdateResourceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateResourceResponse
     *
     * @param string                $requestPath
     * @param UpdateResourceRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return UpdateResourceResponse
     */
    public function updateResourceWithOptions($requestPath, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['clientToken'] = $request->clientToken;
        }

        if (null !== $request->regionId) {
            @$query['regionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'UpdateResource',
            'version' => '2022-08-30',
            'protocol' => 'HTTPS',
            'pathname' => '' . $requestPath . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Calls this operation to update resources.
     *
     * @remarks
     * You can go to [OpenAPI Explorer](https://next.api.aliyun.com/cloudcontrol) to view the documentation and try out Cloud Control API.
     * If resources fail to be updated at any time, the Cloud Control API does not roll the resource back to the original status.
     * The resource APIs cannot be rolled back. If the API operation is partially failed to be called, you can call the GetResource operation to view the latest status of the resource. If necessary, you can call the UpdateResource or DeleteResource operation to manually compensate for the failure.
     *
     * @param requestPath - the whole path of resource string
     * @param request - UpdateResourceRequest
     *
     * @returns UpdateResourceResponse
     *
     * @param string                $requestPath
     * @param UpdateResourceRequest $request
     *
     * @return UpdateResourceResponse
     */
    public function updateResource($requestPath, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateResourceWithOptions($requestPath, $request, $headers, $runtime);
    }
}
