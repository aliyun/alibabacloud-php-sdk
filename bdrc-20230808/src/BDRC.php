<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BDRC\V20230808;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\BDRC\V20230808\Models\CheckRulesRequest;
use AlibabaCloud\SDK\BDRC\V20230808\Models\CheckRulesResponse;
use AlibabaCloud\SDK\BDRC\V20230808\Models\CloseBdrcServiceResponse;
use AlibabaCloud\SDK\BDRC\V20230808\Models\DescribeCheckDetailsRequest;
use AlibabaCloud\SDK\BDRC\V20230808\Models\DescribeCheckDetailsResponse;
use AlibabaCloud\SDK\BDRC\V20230808\Models\DescribeProductsResponse;
use AlibabaCloud\SDK\BDRC\V20230808\Models\DescribeResourcesRequest;
use AlibabaCloud\SDK\BDRC\V20230808\Models\DescribeResourcesResponse;
use AlibabaCloud\SDK\BDRC\V20230808\Models\DescribeRulesRequest;
use AlibabaCloud\SDK\BDRC\V20230808\Models\DescribeRulesResponse;
use AlibabaCloud\SDK\BDRC\V20230808\Models\DescribeTaskResponse;
use AlibabaCloud\SDK\BDRC\V20230808\Models\DescribeTasksRequest;
use AlibabaCloud\SDK\BDRC\V20230808\Models\DescribeTasksResponse;
use AlibabaCloud\SDK\BDRC\V20230808\Models\DescribeTopRiskyResourcesRequest;
use AlibabaCloud\SDK\BDRC\V20230808\Models\DescribeTopRiskyResourcesResponse;
use AlibabaCloud\SDK\BDRC\V20230808\Models\DisableCheckProductRequest;
use AlibabaCloud\SDK\BDRC\V20230808\Models\DisableCheckProductResponse;
use AlibabaCloud\SDK\BDRC\V20230808\Models\DisableCheckResourceRequest;
use AlibabaCloud\SDK\BDRC\V20230808\Models\DisableCheckResourceResponse;
use AlibabaCloud\SDK\BDRC\V20230808\Models\EnableCheckProductRequest;
use AlibabaCloud\SDK\BDRC\V20230808\Models\EnableCheckProductResponse;
use AlibabaCloud\SDK\BDRC\V20230808\Models\EnableCheckResourceRequest;
use AlibabaCloud\SDK\BDRC\V20230808\Models\EnableCheckResourceResponse;
use AlibabaCloud\SDK\BDRC\V20230808\Models\GetBdrcServiceResponse;
use AlibabaCloud\SDK\BDRC\V20230808\Models\OpenBdrcServiceResponse;
use AlibabaCloud\SDK\BDRC\V20230808\Models\UpdateResourcesRequest;
use AlibabaCloud\SDK\BDRC\V20230808\Models\UpdateResourcesResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class BDRC extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
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
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_(@$endpointMap[$regionId])) {
            return @$endpointMap[$regionId];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * @param CheckRulesRequest $request CheckRulesRequest
     * @param string[]          $headers map
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return CheckRulesResponse CheckRulesResponse
     */
    public function checkRulesWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->resourceArn)) {
            $body['ResourceArn'] = $request->resourceArn;
        }
        if (!Utils::isUnset($request->ruleId)) {
            $body['RuleId'] = $request->ruleId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CheckRules',
            'version'     => '2023-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/rules/check',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CheckRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CheckRulesRequest $request CheckRulesRequest
     *
     * @return CheckRulesResponse CheckRulesResponse
     */
    public function checkRules($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->checkRulesWithOptions($request, $headers, $runtime);
    }

    /**
     * @param string[]       $headers map
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return CloseBdrcServiceResponse CloseBdrcServiceResponse
     */
    public function closeBdrcServiceWithOptions($headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'CloseBdrcService',
            'version'     => '2023-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/service/close',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CloseBdrcServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return CloseBdrcServiceResponse CloseBdrcServiceResponse
     */
    public function closeBdrcService()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->closeBdrcServiceWithOptions($headers, $runtime);
    }

    /**
     * @param DescribeCheckDetailsRequest $request DescribeCheckDetailsRequest
     * @param string[]                    $headers map
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeCheckDetailsResponse DescribeCheckDetailsResponse
     */
    public function describeCheckDetailsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->resourceArn)) {
            $query['ResourceArn'] = $request->resourceArn;
        }
        if (!Utils::isUnset($request->ruleId)) {
            $query['RuleId'] = $request->ruleId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeCheckDetails',
            'version'     => '2023-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/check-details',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeCheckDetailsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeCheckDetailsRequest $request DescribeCheckDetailsRequest
     *
     * @return DescribeCheckDetailsResponse DescribeCheckDetailsResponse
     */
    public function describeCheckDetails($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeCheckDetailsWithOptions($request, $headers, $runtime);
    }

    /**
     * @param string[]       $headers map
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeProductsResponse DescribeProductsResponse
     */
    public function describeProductsWithOptions($headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DescribeProducts',
            'version'     => '2023-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/products',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeProductsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return DescribeProductsResponse DescribeProductsResponse
     */
    public function describeProducts()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeProductsWithOptions($headers, $runtime);
    }

    /**
     * @param DescribeResourcesRequest $request DescribeResourcesRequest
     * @param string[]                 $headers map
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeResourcesResponse DescribeResourcesResponse
     */
    public function describeResourcesWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->failedRuleTemplate)) {
            $query['FailedRuleTemplate'] = $request->failedRuleTemplate;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->sortBy)) {
            $query['SortBy'] = $request->sortBy;
        }
        if (!Utils::isUnset($request->sortOrder)) {
            $query['SortOrder'] = $request->sortOrder;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeResources',
            'version'     => '2023-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/resources',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeResourcesRequest $request DescribeResourcesRequest
     *
     * @return DescribeResourcesResponse DescribeResourcesResponse
     */
    public function describeResources($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeResourcesWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DescribeRulesRequest $request DescribeRulesRequest
     * @param string[]             $headers map
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeRulesResponse DescribeRulesResponse
     */
    public function describeRulesWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeRules',
            'version'     => '2023-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/rules',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeRulesRequest $request DescribeRulesRequest
     *
     * @return DescribeRulesResponse DescribeRulesResponse
     */
    public function describeRules($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeRulesWithOptions($request, $headers, $runtime);
    }

    /**
     * @param string         $TaskId
     * @param string[]       $headers map
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeTaskResponse DescribeTaskResponse
     */
    public function describeTaskWithOptions($TaskId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DescribeTask',
            'version'     => '2023-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/tasks/' . OpenApiUtilClient::getEncodeParam($TaskId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $TaskId
     *
     * @return DescribeTaskResponse DescribeTaskResponse
     */
    public function describeTask($TaskId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeTaskWithOptions($TaskId, $headers, $runtime);
    }

    /**
     * @param DescribeTasksRequest $request DescribeTasksRequest
     * @param string[]             $headers map
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeTasksResponse DescribeTasksResponse
     */
    public function describeTasksWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->taskStatus)) {
            $query['TaskStatus'] = $request->taskStatus;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeTasks',
            'version'     => '2023-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/tasks',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeTasksRequest $request DescribeTasksRequest
     *
     * @return DescribeTasksResponse DescribeTasksResponse
     */
    public function describeTasks($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeTasksWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DescribeTopRiskyResourcesRequest $request DescribeTopRiskyResourcesRequest
     * @param string[]                         $headers map
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeTopRiskyResourcesResponse DescribeTopRiskyResourcesResponse
     */
    public function describeTopRiskyResourcesWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeTopRiskyResources',
            'version'     => '2023-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/resources/top-risky',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeTopRiskyResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeTopRiskyResourcesRequest $request DescribeTopRiskyResourcesRequest
     *
     * @return DescribeTopRiskyResourcesResponse DescribeTopRiskyResourcesResponse
     */
    public function describeTopRiskyResources($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeTopRiskyResourcesWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DisableCheckProductRequest $request DisableCheckProductRequest
     * @param string[]                   $headers map
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DisableCheckProductResponse DisableCheckProductResponse
     */
    public function disableCheckProductWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->productType)) {
            $body['ProductType'] = $request->productType;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DisableCheckProduct',
            'version'     => '2023-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/products/disable-check',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DisableCheckProductResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DisableCheckProductRequest $request DisableCheckProductRequest
     *
     * @return DisableCheckProductResponse DisableCheckProductResponse
     */
    public function disableCheckProduct($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->disableCheckProductWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DisableCheckResourceRequest $request DisableCheckResourceRequest
     * @param string[]                    $headers map
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return DisableCheckResourceResponse DisableCheckResourceResponse
     */
    public function disableCheckResourceWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->resourceArn)) {
            $body['ResourceArn'] = $request->resourceArn;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DisableCheckResource',
            'version'     => '2023-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/resources/disable-check',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DisableCheckResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DisableCheckResourceRequest $request DisableCheckResourceRequest
     *
     * @return DisableCheckResourceResponse DisableCheckResourceResponse
     */
    public function disableCheckResource($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->disableCheckResourceWithOptions($request, $headers, $runtime);
    }

    /**
     * @param EnableCheckProductRequest $request EnableCheckProductRequest
     * @param string[]                  $headers map
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return EnableCheckProductResponse EnableCheckProductResponse
     */
    public function enableCheckProductWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->productType)) {
            $body['ProductType'] = $request->productType;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'EnableCheckProduct',
            'version'     => '2023-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/products/enable-check',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return EnableCheckProductResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param EnableCheckProductRequest $request EnableCheckProductRequest
     *
     * @return EnableCheckProductResponse EnableCheckProductResponse
     */
    public function enableCheckProduct($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->enableCheckProductWithOptions($request, $headers, $runtime);
    }

    /**
     * @param EnableCheckResourceRequest $request EnableCheckResourceRequest
     * @param string[]                   $headers map
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return EnableCheckResourceResponse EnableCheckResourceResponse
     */
    public function enableCheckResourceWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->resourceArn)) {
            $body['ResourceArn'] = $request->resourceArn;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'EnableCheckResource',
            'version'     => '2023-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/resources/enable-check',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return EnableCheckResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param EnableCheckResourceRequest $request EnableCheckResourceRequest
     *
     * @return EnableCheckResourceResponse EnableCheckResourceResponse
     */
    public function enableCheckResource($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->enableCheckResourceWithOptions($request, $headers, $runtime);
    }

    /**
     * @param string[]       $headers map
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return GetBdrcServiceResponse GetBdrcServiceResponse
     */
    public function getBdrcServiceWithOptions($headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetBdrcService',
            'version'     => '2023-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/service',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetBdrcServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return GetBdrcServiceResponse GetBdrcServiceResponse
     */
    public function getBdrcService()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getBdrcServiceWithOptions($headers, $runtime);
    }

    /**
     * @param string[]       $headers map
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return OpenBdrcServiceResponse OpenBdrcServiceResponse
     */
    public function openBdrcServiceWithOptions($headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'OpenBdrcService',
            'version'     => '2023-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/service/open',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return OpenBdrcServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return OpenBdrcServiceResponse OpenBdrcServiceResponse
     */
    public function openBdrcService()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->openBdrcServiceWithOptions($headers, $runtime);
    }

    /**
     * @param UpdateResourcesRequest $request UpdateResourcesRequest
     * @param string[]               $headers map
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateResourcesResponse UpdateResourcesResponse
     */
    public function updateResourcesWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->resourceType)) {
            $body['ResourceType'] = $request->resourceType;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateResources',
            'version'     => '2023-08-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/resources/update',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateResourcesRequest $request UpdateResourcesRequest
     *
     * @return UpdateResourcesResponse UpdateResourcesResponse
     */
    public function updateResources($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateResourcesWithOptions($request, $headers, $runtime);
    }
}
