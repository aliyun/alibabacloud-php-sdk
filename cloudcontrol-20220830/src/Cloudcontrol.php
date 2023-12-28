<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudcontrol\V20220830;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Cloudcontrol\V20220830\Models\CancelTaskResponse;
use AlibabaCloud\SDK\Cloudcontrol\V20220830\Models\CreateResourceRequest;
use AlibabaCloud\SDK\Cloudcontrol\V20220830\Models\CreateResourceResponse;
use AlibabaCloud\SDK\Cloudcontrol\V20220830\Models\DeleteResourceRequest;
use AlibabaCloud\SDK\Cloudcontrol\V20220830\Models\DeleteResourceResponse;
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
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

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
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_(@$endpointMap[$regionId])) {
            return @$endpointMap[$regionId];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
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
            'action'      => 'CancelTask',
            'version'     => '2022-08-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/tasks/' . OpenApiUtilClient::getEncodeParam($taskId) . '/operation/cancel',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CancelTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param string                $requestPath
     * @param CreateResourceRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return CreateResourceResponse
     */
    public function createResourceWithOptions($requestPath, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['regionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($request->body),
        ]);
        $params = new Params([
            'action'      => 'CreateResource',
            'version'     => '2022-08-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '' . $requestPath . '',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param string                $requestPath
     * @param DeleteResourceRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteResourceResponse
     */
    public function deleteResourceWithOptions($requestPath, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['regionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteResource',
            'version'     => '2022-08-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '' . $requestPath . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param string          $requestPath
     * @param GetPriceRequest $tmpReq
     * @param string[]        $headers
     * @param RuntimeOptions  $runtime
     *
     * @return GetPriceResponse
     */
    public function getPriceWithOptions($requestPath, $tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new GetPriceShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->resourceAttributes)) {
            $request->resourceAttributesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->resourceAttributes, 'resourceAttributes', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['regionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceAttributesShrink)) {
            $query['resourceAttributes'] = $request->resourceAttributesShrink;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetPrice',
            'version'     => '2022-08-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '' . $requestPath . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetPriceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param string                 $requestPath
     * @param GetResourceTypeHeaders $headers
     * @param RuntimeOptions         $runtime
     *
     * @return GetResourceTypeResponse
     */
    public function getResourceTypeWithOptions($requestPath, $headers, $runtime)
    {
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsAcceptLanguage)) {
            $realHeaders['x-acs-accept-language'] = Utils::toJSONString($headers->xAcsAcceptLanguage);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
        ]);
        $params = new Params([
            'action'      => 'GetResourceType',
            'version'     => '2022-08-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '' . $requestPath . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetResourceTypeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param string              $requestPath
     * @param GetResourcesRequest $tmpReq
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return GetResourcesResponse
     */
    public function getResourcesWithOptions($requestPath, $tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new GetResourcesShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->filter)) {
            $request->filterShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->filter, 'filter', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->filterShrink)) {
            $query['filter'] = $request->filterShrink;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['maxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['nextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['regionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetResources',
            'version'     => '2022-08-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '' . $requestPath . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * GET /api/v1/tasks/{taskId}。
     *   *
     * @param string         $taskId
     * @param string[]       $headers map
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return GetTaskResponse GetTaskResponse
     */
    public function getTaskWithOptions($taskId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetTask',
            'version'     => '2022-08-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/tasks/' . OpenApiUtilClient::getEncodeParam($taskId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * GET /api/v1/tasks/{taskId}。
     *   *
     * @param string $taskId
     *
     * @return GetTaskResponse GetTaskResponse
     */
    public function getTask($taskId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getTaskWithOptions($taskId, $headers, $runtime);
    }

    /**
     * @param string                 $requestPath
     * @param ListDataSourcesRequest $tmpReq
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return ListDataSourcesResponse
     */
    public function listDataSourcesWithOptions($requestPath, $tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListDataSourcesShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->filter)) {
            $request->filterShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->filter, 'filter', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->attributeName)) {
            $query['attributeName'] = $request->attributeName;
        }
        if (!Utils::isUnset($request->filterShrink)) {
            $query['filter'] = $request->filterShrink;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListDataSources',
            'version'     => '2022-08-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '' . $requestPath . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListDataSourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * GET /api/v1/providers/{provider}/products。
     *   *
     * @param string              $provider
     * @param ListProductsRequest $request  ListProductsRequest
     * @param ListProductsHeaders $headers  ListProductsHeaders
     * @param RuntimeOptions      $runtime  runtime options for this request RuntimeOptions
     *
     * @return ListProductsResponse ListProductsResponse
     */
    public function listProductsWithOptions($provider, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->maxResults)) {
            $query['maxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['nextToken'] = $request->nextToken;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsAcceptLanguage)) {
            $realHeaders['x-acs-accept-language'] = Utils::toJSONString($headers->xAcsAcceptLanguage);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListProducts',
            'version'     => '2022-08-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/providers/' . OpenApiUtilClient::getEncodeParam($provider) . '/products',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListProductsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * GET /api/v1/providers/{provider}/products。
     *   *
     * @param string              $provider
     * @param ListProductsRequest $request  ListProductsRequest
     *
     * @return ListProductsResponse ListProductsResponse
     */
    public function listProducts($provider, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new ListProductsHeaders([]);

        return $this->listProductsWithOptions($provider, $request, $headers, $runtime);
    }

    /**
     * GET /api/v1/providers/{provider}/products/{product}/resourceTypes。
     *   *
     * @param string                   $provider
     * @param string                   $product
     * @param ListResourceTypesRequest $tmpReq   ListResourceTypesRequest
     * @param ListResourceTypesHeaders $headers  ListResourceTypesHeaders
     * @param RuntimeOptions           $runtime  runtime options for this request RuntimeOptions
     *
     * @return ListResourceTypesResponse ListResourceTypesResponse
     */
    public function listResourceTypesWithOptions($provider, $product, $tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListResourceTypesShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->resourceTypes)) {
            $request->resourceTypesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->resourceTypes, 'resourceTypes', 'simple');
        }
        $query = [];
        if (!Utils::isUnset($request->maxResults)) {
            $query['maxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['nextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->resourceTypesShrink)) {
            $query['resourceTypes'] = $request->resourceTypesShrink;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsAcceptLanguage)) {
            $realHeaders['x-acs-accept-language'] = Utils::toJSONString($headers->xAcsAcceptLanguage);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListResourceTypes',
            'version'     => '2022-08-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/providers/' . OpenApiUtilClient::getEncodeParam($provider) . '/products/' . OpenApiUtilClient::getEncodeParam($product) . '/resourceTypes',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListResourceTypesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * GET /api/v1/providers/{provider}/products/{product}/resourceTypes。
     *   *
     * @param string                   $provider
     * @param string                   $product
     * @param ListResourceTypesRequest $request  ListResourceTypesRequest
     *
     * @return ListResourceTypesResponse ListResourceTypesResponse
     */
    public function listResourceTypes($provider, $product, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new ListResourceTypesHeaders([]);

        return $this->listResourceTypesWithOptions($provider, $product, $request, $headers, $runtime);
    }

    /**
     * @param string                $requestPath
     * @param UpdateResourceRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return UpdateResourceResponse
     */
    public function updateResourceWithOptions($requestPath, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['regionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($request->body),
        ]);
        $params = new Params([
            'action'      => 'UpdateResource',
            'version'     => '2022-08-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '' . $requestPath . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
