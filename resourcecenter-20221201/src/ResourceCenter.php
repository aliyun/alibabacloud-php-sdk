<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceCenter\V20221201;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\ResourceCenter\V20221201\Models\CreateSavedQueryRequest;
use AlibabaCloud\SDK\ResourceCenter\V20221201\Models\CreateSavedQueryResponse;
use AlibabaCloud\SDK\ResourceCenter\V20221201\Models\DeleteSavedQueryRequest;
use AlibabaCloud\SDK\ResourceCenter\V20221201\Models\DeleteSavedQueryResponse;
use AlibabaCloud\SDK\ResourceCenter\V20221201\Models\DisableMultiAccountResourceCenterResponse;
use AlibabaCloud\SDK\ResourceCenter\V20221201\Models\DisableResourceCenterResponse;
use AlibabaCloud\SDK\ResourceCenter\V20221201\Models\EnableMultiAccountResourceCenterResponse;
use AlibabaCloud\SDK\ResourceCenter\V20221201\Models\EnableResourceCenterResponse;
use AlibabaCloud\SDK\ResourceCenter\V20221201\Models\ExecuteMultiAccountSQLQueryRequest;
use AlibabaCloud\SDK\ResourceCenter\V20221201\Models\ExecuteMultiAccountSQLQueryResponse;
use AlibabaCloud\SDK\ResourceCenter\V20221201\Models\ExecuteSQLQueryRequest;
use AlibabaCloud\SDK\ResourceCenter\V20221201\Models\ExecuteSQLQueryResponse;
use AlibabaCloud\SDK\ResourceCenter\V20221201\Models\GetExampleQueryRequest;
use AlibabaCloud\SDK\ResourceCenter\V20221201\Models\GetExampleQueryResponse;
use AlibabaCloud\SDK\ResourceCenter\V20221201\Models\GetMultiAccountResourceCenterServiceStatusResponse;
use AlibabaCloud\SDK\ResourceCenter\V20221201\Models\GetMultiAccountResourceConfigurationRequest;
use AlibabaCloud\SDK\ResourceCenter\V20221201\Models\GetMultiAccountResourceConfigurationResponse;
use AlibabaCloud\SDK\ResourceCenter\V20221201\Models\GetResourceCenterServiceStatusResponse;
use AlibabaCloud\SDK\ResourceCenter\V20221201\Models\GetResourceConfigurationRequest;
use AlibabaCloud\SDK\ResourceCenter\V20221201\Models\GetResourceConfigurationResponse;
use AlibabaCloud\SDK\ResourceCenter\V20221201\Models\GetResourceCountsRequest;
use AlibabaCloud\SDK\ResourceCenter\V20221201\Models\GetResourceCountsResponse;
use AlibabaCloud\SDK\ResourceCenter\V20221201\Models\GetSavedQueryRequest;
use AlibabaCloud\SDK\ResourceCenter\V20221201\Models\GetSavedQueryResponse;
use AlibabaCloud\SDK\ResourceCenter\V20221201\Models\ListExampleQueriesRequest;
use AlibabaCloud\SDK\ResourceCenter\V20221201\Models\ListExampleQueriesResponse;
use AlibabaCloud\SDK\ResourceCenter\V20221201\Models\ListMultiAccountResourceGroupsRequest;
use AlibabaCloud\SDK\ResourceCenter\V20221201\Models\ListMultiAccountResourceGroupsResponse;
use AlibabaCloud\SDK\ResourceCenter\V20221201\Models\ListMultiAccountTagKeysRequest;
use AlibabaCloud\SDK\ResourceCenter\V20221201\Models\ListMultiAccountTagKeysResponse;
use AlibabaCloud\SDK\ResourceCenter\V20221201\Models\ListMultiAccountTagValuesRequest;
use AlibabaCloud\SDK\ResourceCenter\V20221201\Models\ListMultiAccountTagValuesResponse;
use AlibabaCloud\SDK\ResourceCenter\V20221201\Models\ListResourceTypesRequest;
use AlibabaCloud\SDK\ResourceCenter\V20221201\Models\ListResourceTypesResponse;
use AlibabaCloud\SDK\ResourceCenter\V20221201\Models\ListSavedQueriesRequest;
use AlibabaCloud\SDK\ResourceCenter\V20221201\Models\ListSavedQueriesResponse;
use AlibabaCloud\SDK\ResourceCenter\V20221201\Models\ListTagKeysRequest;
use AlibabaCloud\SDK\ResourceCenter\V20221201\Models\ListTagKeysResponse;
use AlibabaCloud\SDK\ResourceCenter\V20221201\Models\ListTagValuesRequest;
use AlibabaCloud\SDK\ResourceCenter\V20221201\Models\ListTagValuesResponse;
use AlibabaCloud\SDK\ResourceCenter\V20221201\Models\SearchMultiAccountResourcesRequest;
use AlibabaCloud\SDK\ResourceCenter\V20221201\Models\SearchMultiAccountResourcesResponse;
use AlibabaCloud\SDK\ResourceCenter\V20221201\Models\SearchResourcesRequest;
use AlibabaCloud\SDK\ResourceCenter\V20221201\Models\SearchResourcesResponse;
use AlibabaCloud\SDK\ResourceCenter\V20221201\Models\UpdateSavedQueryRequest;
use AlibabaCloud\SDK\ResourceCenter\V20221201\Models\UpdateSavedQueryResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class ResourceCenter extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('resourcecenter', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param CreateSavedQueryRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CreateSavedQueryResponse
     */
    public function createSavedQueryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->expression)) {
            $query['Expression'] = $request->expression;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateSavedQuery',
            'version'     => '2022-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateSavedQueryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateSavedQueryRequest $request
     *
     * @return CreateSavedQueryResponse
     */
    public function createSavedQuery($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSavedQueryWithOptions($request, $runtime);
    }

    /**
     * @param DeleteSavedQueryRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteSavedQueryResponse
     */
    public function deleteSavedQueryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->queryId)) {
            $query['QueryId'] = $request->queryId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteSavedQuery',
            'version'     => '2022-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteSavedQueryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteSavedQueryRequest $request
     *
     * @return DeleteSavedQueryResponse
     */
    public function deleteSavedQuery($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSavedQueryWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return DisableMultiAccountResourceCenterResponse
     */
    public function disableMultiAccountResourceCenterWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'DisableMultiAccountResourceCenter',
            'version'     => '2022-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DisableMultiAccountResourceCenterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return DisableMultiAccountResourceCenterResponse
     */
    public function disableMultiAccountResourceCenter()
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableMultiAccountResourceCenterWithOptions($runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return DisableResourceCenterResponse
     */
    public function disableResourceCenterWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'DisableResourceCenter',
            'version'     => '2022-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DisableResourceCenterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return DisableResourceCenterResponse
     */
    public function disableResourceCenter()
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableResourceCenterWithOptions($runtime);
    }

    /**
     * If you have created a resource directory for your enterprise, you can enable the cross-account resource search feature by using the management account of the resource directory or a delegated administrator account of Resource Center to view the resources of members in the resource directory. For more information about a resource directory, see [Resource Directory overview](~~200506~~).
     *   *
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return EnableMultiAccountResourceCenterResponse EnableMultiAccountResourceCenterResponse
     */
    public function enableMultiAccountResourceCenterWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'EnableMultiAccountResourceCenter',
            'version'     => '2022-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return EnableMultiAccountResourceCenterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * If you have created a resource directory for your enterprise, you can enable the cross-account resource search feature by using the management account of the resource directory or a delegated administrator account of Resource Center to view the resources of members in the resource directory. For more information about a resource directory, see [Resource Directory overview](~~200506~~).
     *   *
     * @return EnableMultiAccountResourceCenterResponse EnableMultiAccountResourceCenterResponse
     */
    public function enableMultiAccountResourceCenter()
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableMultiAccountResourceCenterWithOptions($runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return EnableResourceCenterResponse
     */
    public function enableResourceCenterWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'EnableResourceCenter',
            'version'     => '2022-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return EnableResourceCenterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return EnableResourceCenterResponse
     */
    public function enableResourceCenter()
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableResourceCenterWithOptions($runtime);
    }

    /**
     * @param ExecuteMultiAccountSQLQueryRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ExecuteMultiAccountSQLQueryResponse
     */
    public function executeMultiAccountSQLQueryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->expression)) {
            $query['Expression'] = $request->expression;
        }
        if (!Utils::isUnset($request->scope)) {
            $query['Scope'] = $request->scope;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ExecuteMultiAccountSQLQuery',
            'version'     => '2022-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ExecuteMultiAccountSQLQueryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ExecuteMultiAccountSQLQueryRequest $request
     *
     * @return ExecuteMultiAccountSQLQueryResponse
     */
    public function executeMultiAccountSQLQuery($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->executeMultiAccountSQLQueryWithOptions($request, $runtime);
    }

    /**
     * @param ExecuteSQLQueryRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ExecuteSQLQueryResponse
     */
    public function executeSQLQueryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->expression)) {
            $query['Expression'] = $request->expression;
        }
        if (!Utils::isUnset($request->scope)) {
            $query['Scope'] = $request->scope;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ExecuteSQLQuery',
            'version'     => '2022-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ExecuteSQLQueryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ExecuteSQLQueryRequest $request
     *
     * @return ExecuteSQLQueryResponse
     */
    public function executeSQLQuery($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->executeSQLQueryWithOptions($request, $runtime);
    }

    /**
     * @param GetExampleQueryRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetExampleQueryResponse
     */
    public function getExampleQueryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->queryId)) {
            $query['QueryId'] = $request->queryId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetExampleQuery',
            'version'     => '2022-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetExampleQueryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetExampleQueryRequest $request
     *
     * @return GetExampleQueryResponse
     */
    public function getExampleQuery($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getExampleQueryWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return GetMultiAccountResourceCenterServiceStatusResponse
     */
    public function getMultiAccountResourceCenterServiceStatusWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'GetMultiAccountResourceCenterServiceStatus',
            'version'     => '2022-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetMultiAccountResourceCenterServiceStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return GetMultiAccountResourceCenterServiceStatusResponse
     */
    public function getMultiAccountResourceCenterServiceStatus()
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMultiAccountResourceCenterServiceStatusWithOptions($runtime);
    }

    /**
     * @param GetMultiAccountResourceConfigurationRequest $request
     * @param RuntimeOptions                              $runtime
     *
     * @return GetMultiAccountResourceConfigurationResponse
     */
    public function getMultiAccountResourceConfigurationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accountId)) {
            $query['AccountId'] = $request->accountId;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceRegionId)) {
            $query['ResourceRegionId'] = $request->resourceRegionId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetMultiAccountResourceConfiguration',
            'version'     => '2022-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetMultiAccountResourceConfigurationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetMultiAccountResourceConfigurationRequest $request
     *
     * @return GetMultiAccountResourceConfigurationResponse
     */
    public function getMultiAccountResourceConfiguration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMultiAccountResourceConfigurationWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return GetResourceCenterServiceStatusResponse
     */
    public function getResourceCenterServiceStatusWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'GetResourceCenterServiceStatus',
            'version'     => '2022-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetResourceCenterServiceStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return GetResourceCenterServiceStatusResponse
     */
    public function getResourceCenterServiceStatus()
    {
        $runtime = new RuntimeOptions([]);

        return $this->getResourceCenterServiceStatusWithOptions($runtime);
    }

    /**
     * @param GetResourceConfigurationRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return GetResourceConfigurationResponse
     */
    public function getResourceConfigurationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceRegionId)) {
            $query['ResourceRegionId'] = $request->resourceRegionId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetResourceConfiguration',
            'version'     => '2022-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetResourceConfigurationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetResourceConfigurationRequest $request
     *
     * @return GetResourceConfigurationResponse
     */
    public function getResourceConfiguration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getResourceConfigurationWithOptions($request, $runtime);
    }

    /**
     * @param GetResourceCountsRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetResourceCountsResponse
     */
    public function getResourceCountsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->filter)) {
            $query['Filter'] = $request->filter;
        }
        if (!Utils::isUnset($request->groupByKey)) {
            $query['GroupByKey'] = $request->groupByKey;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetResourceCounts',
            'version'     => '2022-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetResourceCountsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetResourceCountsRequest $request
     *
     * @return GetResourceCountsResponse
     */
    public function getResourceCounts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getResourceCountsWithOptions($request, $runtime);
    }

    /**
     * @param GetSavedQueryRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetSavedQueryResponse
     */
    public function getSavedQueryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->queryId)) {
            $query['QueryId'] = $request->queryId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetSavedQuery',
            'version'     => '2022-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetSavedQueryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetSavedQueryRequest $request
     *
     * @return GetSavedQueryResponse
     */
    public function getSavedQuery($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSavedQueryWithOptions($request, $runtime);
    }

    /**
     * @param ListExampleQueriesRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ListExampleQueriesResponse
     */
    public function listExampleQueriesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListExampleQueries',
            'version'     => '2022-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListExampleQueriesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListExampleQueriesRequest $request
     *
     * @return ListExampleQueriesResponse
     */
    public function listExampleQueries($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listExampleQueriesWithOptions($request, $runtime);
    }

    /**
     * @param ListMultiAccountResourceGroupsRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return ListMultiAccountResourceGroupsResponse
     */
    public function listMultiAccountResourceGroupsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accountId)) {
            $query['AccountId'] = $request->accountId;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->resourceGroupIds)) {
            $query['ResourceGroupIds'] = $request->resourceGroupIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListMultiAccountResourceGroups',
            'version'     => '2022-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListMultiAccountResourceGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListMultiAccountResourceGroupsRequest $request
     *
     * @return ListMultiAccountResourceGroupsResponse
     */
    public function listMultiAccountResourceGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listMultiAccountResourceGroupsWithOptions($request, $runtime);
    }

    /**
     * @param ListMultiAccountTagKeysRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ListMultiAccountTagKeysResponse
     */
    public function listMultiAccountTagKeysWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->matchType)) {
            $query['MatchType'] = $request->matchType;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->scope)) {
            $query['Scope'] = $request->scope;
        }
        if (!Utils::isUnset($request->tagKey)) {
            $query['TagKey'] = $request->tagKey;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListMultiAccountTagKeys',
            'version'     => '2022-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListMultiAccountTagKeysResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListMultiAccountTagKeysRequest $request
     *
     * @return ListMultiAccountTagKeysResponse
     */
    public function listMultiAccountTagKeys($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listMultiAccountTagKeysWithOptions($request, $runtime);
    }

    /**
     * @param ListMultiAccountTagValuesRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ListMultiAccountTagValuesResponse
     */
    public function listMultiAccountTagValuesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->matchType)) {
            $query['MatchType'] = $request->matchType;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->scope)) {
            $query['Scope'] = $request->scope;
        }
        if (!Utils::isUnset($request->tagKey)) {
            $query['TagKey'] = $request->tagKey;
        }
        if (!Utils::isUnset($request->tagValue)) {
            $query['TagValue'] = $request->tagValue;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListMultiAccountTagValues',
            'version'     => '2022-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListMultiAccountTagValuesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListMultiAccountTagValuesRequest $request
     *
     * @return ListMultiAccountTagValuesResponse
     */
    public function listMultiAccountTagValues($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listMultiAccountTagValuesWithOptions($request, $runtime);
    }

    /**
     * @param ListResourceTypesRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ListResourceTypesResponse
     */
    public function listResourceTypesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->query)) {
            $query['Query'] = $request->query;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListResourceTypes',
            'version'     => '2022-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListResourceTypesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListResourceTypesRequest $request
     *
     * @return ListResourceTypesResponse
     */
    public function listResourceTypes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listResourceTypesWithOptions($request, $runtime);
    }

    /**
     * @param ListSavedQueriesRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListSavedQueriesResponse
     */
    public function listSavedQueriesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListSavedQueries',
            'version'     => '2022-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListSavedQueriesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListSavedQueriesRequest $request
     *
     * @return ListSavedQueriesResponse
     */
    public function listSavedQueries($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSavedQueriesWithOptions($request, $runtime);
    }

    /**
     * @param ListTagKeysRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ListTagKeysResponse
     */
    public function listTagKeysWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->matchType)) {
            $query['MatchType'] = $request->matchType;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->tagKey)) {
            $query['TagKey'] = $request->tagKey;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListTagKeys',
            'version'     => '2022-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListTagKeysResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListTagKeysRequest $request
     *
     * @return ListTagKeysResponse
     */
    public function listTagKeys($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTagKeysWithOptions($request, $runtime);
    }

    /**
     * @param ListTagValuesRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ListTagValuesResponse
     */
    public function listTagValuesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->matchType)) {
            $query['MatchType'] = $request->matchType;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->tagKey)) {
            $query['TagKey'] = $request->tagKey;
        }
        if (!Utils::isUnset($request->tagValue)) {
            $query['TagValue'] = $request->tagValue;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListTagValues',
            'version'     => '2022-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListTagValuesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListTagValuesRequest $request
     *
     * @return ListTagValuesResponse
     */
    public function listTagValues($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTagValuesWithOptions($request, $runtime);
    }

    /**
     * *   You can use this operation to search for only resources whose types are supported by Resource Center in services that work with Resource Center. For more information about the services and the resource types that are supported by Resource Center, see [Services that work with Resource Center](~~477798~~).
     *   * *   Before you use a RAM user or a RAM role to call the operation, you must make sure that the RAM user or RAM role is granted the required permissions. For more information, see [Grant a RAM user the permissions to use Resource Center](~~600556~~).
     *   * *   By default, the operation returns a maximum of 20 entries. You can configure the `MaxResults` parameter to specify the maximum number of entries to return.
     *   * *   If the response does not contain the `NextToken` parameter, all entries are returned. Otherwise, more entries exist. If you want to obtain the entries, you can call the operation again to initiate another query request. In the request, set the `NextToken` parameter to the value of `NextToken` in the last response of the operation. If you do not configure the `NextToken` parameter, entries on the first page are returned by default.
     *   * *   You can specify one or more filter conditions to narrow the search scope. For more information about supported filter parameters and matching methods, see the Supported filter parameters section. Multiple filter conditions have logical `AND` relations. Only resources that meet all filter conditions are returned. The values of a filter condition have logical `OR` relations. Resources that meet any value of the filter condition are returned.
     *   * *   You can visit [Sample Code Center](https://api.alibabacloud.com/api-tools/demo/ResourceCenter) to view more sample queries.
     *   *
     * @param SearchMultiAccountResourcesRequest $request SearchMultiAccountResourcesRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return SearchMultiAccountResourcesResponse SearchMultiAccountResourcesResponse
     */
    public function searchMultiAccountResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->filter)) {
            $query['Filter'] = $request->filter;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->scope)) {
            $query['Scope'] = $request->scope;
        }
        if (!Utils::isUnset($request->sortCriterion)) {
            $query['SortCriterion'] = $request->sortCriterion;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SearchMultiAccountResources',
            'version'     => '2022-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SearchMultiAccountResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * *   You can use this operation to search for only resources whose types are supported by Resource Center in services that work with Resource Center. For more information about the services and the resource types that are supported by Resource Center, see [Services that work with Resource Center](~~477798~~).
     *   * *   Before you use a RAM user or a RAM role to call the operation, you must make sure that the RAM user or RAM role is granted the required permissions. For more information, see [Grant a RAM user the permissions to use Resource Center](~~600556~~).
     *   * *   By default, the operation returns a maximum of 20 entries. You can configure the `MaxResults` parameter to specify the maximum number of entries to return.
     *   * *   If the response does not contain the `NextToken` parameter, all entries are returned. Otherwise, more entries exist. If you want to obtain the entries, you can call the operation again to initiate another query request. In the request, set the `NextToken` parameter to the value of `NextToken` in the last response of the operation. If you do not configure the `NextToken` parameter, entries on the first page are returned by default.
     *   * *   You can specify one or more filter conditions to narrow the search scope. For more information about supported filter parameters and matching methods, see the Supported filter parameters section. Multiple filter conditions have logical `AND` relations. Only resources that meet all filter conditions are returned. The values of a filter condition have logical `OR` relations. Resources that meet any value of the filter condition are returned.
     *   * *   You can visit [Sample Code Center](https://api.alibabacloud.com/api-tools/demo/ResourceCenter) to view more sample queries.
     *   *
     * @param SearchMultiAccountResourcesRequest $request SearchMultiAccountResourcesRequest
     *
     * @return SearchMultiAccountResourcesResponse SearchMultiAccountResourcesResponse
     */
    public function searchMultiAccountResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->searchMultiAccountResourcesWithOptions($request, $runtime);
    }

    /**
     * *   You can use this operation to search for only resources whose types are supported by Resource Center in services that work with Resource Center. For more information about the services and the resource types that are supported by Resource Center, see [Services that work with Resource Center](~~477798~~).
     *   * *   By default, the operation returns a maximum of 20 entries. You can configure the `MaxResults` parameter to specify the maximum number of entries to return.
     *   * *   If the response does not contain the `NextToken` parameter, all entries are returned. Otherwise, more entries exist. If you want to obtain the entries, you can call the operation again to initiate another query request. In the request, set the `NextToken` parameter to the value of `NextToken` in the last response of the operation. If you do not configure the `NextToken` parameter, entries on the first page are returned by default.
     *   * *   You can specify one or more filter conditions to narrow the search scope. For more information about supported filter parameters and matching methods, see the Supported filter parameters section. Multiple filter conditions have logical `AND` relations. Only resources that meet all filter conditions are returned. The values of a filter condition have logical `OR` relations. Resources that meet any value of the filter condition are returned.
     *   * *   You can visit [Sample Code Center](https://api.aliyun.com/api-tools/demo/ResourceCenter) to view more sample queries.
     *   *
     * @param SearchResourcesRequest $request SearchResourcesRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return SearchResourcesResponse SearchResourcesResponse
     */
    public function searchResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->filter)) {
            $query['Filter'] = $request->filter;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->sortCriterion)) {
            $query['SortCriterion'] = $request->sortCriterion;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SearchResources',
            'version'     => '2022-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SearchResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * *   You can use this operation to search for only resources whose types are supported by Resource Center in services that work with Resource Center. For more information about the services and the resource types that are supported by Resource Center, see [Services that work with Resource Center](~~477798~~).
     *   * *   By default, the operation returns a maximum of 20 entries. You can configure the `MaxResults` parameter to specify the maximum number of entries to return.
     *   * *   If the response does not contain the `NextToken` parameter, all entries are returned. Otherwise, more entries exist. If you want to obtain the entries, you can call the operation again to initiate another query request. In the request, set the `NextToken` parameter to the value of `NextToken` in the last response of the operation. If you do not configure the `NextToken` parameter, entries on the first page are returned by default.
     *   * *   You can specify one or more filter conditions to narrow the search scope. For more information about supported filter parameters and matching methods, see the Supported filter parameters section. Multiple filter conditions have logical `AND` relations. Only resources that meet all filter conditions are returned. The values of a filter condition have logical `OR` relations. Resources that meet any value of the filter condition are returned.
     *   * *   You can visit [Sample Code Center](https://api.aliyun.com/api-tools/demo/ResourceCenter) to view more sample queries.
     *   *
     * @param SearchResourcesRequest $request SearchResourcesRequest
     *
     * @return SearchResourcesResponse SearchResourcesResponse
     */
    public function searchResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->searchResourcesWithOptions($request, $runtime);
    }

    /**
     * @param UpdateSavedQueryRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return UpdateSavedQueryResponse
     */
    public function updateSavedQueryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->expression)) {
            $query['Expression'] = $request->expression;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->queryId)) {
            $query['QueryId'] = $request->queryId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateSavedQuery',
            'version'     => '2022-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateSavedQueryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateSavedQueryRequest $request
     *
     * @return UpdateSavedQueryResponse
     */
    public function updateSavedQuery($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateSavedQueryWithOptions($request, $runtime);
    }
}
