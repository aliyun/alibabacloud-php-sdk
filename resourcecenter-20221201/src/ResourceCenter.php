<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceCenter\V20221201;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\ResourceCenter\V20221201\Models\AssociateDefaultFilterRequest;
use AlibabaCloud\SDK\ResourceCenter\V20221201\Models\AssociateDefaultFilterResponse;
use AlibabaCloud\SDK\ResourceCenter\V20221201\Models\CreateFilterRequest;
use AlibabaCloud\SDK\ResourceCenter\V20221201\Models\CreateFilterResponse;
use AlibabaCloud\SDK\ResourceCenter\V20221201\Models\CreateSavedQueryRequest;
use AlibabaCloud\SDK\ResourceCenter\V20221201\Models\CreateSavedQueryResponse;
use AlibabaCloud\SDK\ResourceCenter\V20221201\Models\DeleteFilterRequest;
use AlibabaCloud\SDK\ResourceCenter\V20221201\Models\DeleteFilterResponse;
use AlibabaCloud\SDK\ResourceCenter\V20221201\Models\DeleteSavedQueryRequest;
use AlibabaCloud\SDK\ResourceCenter\V20221201\Models\DeleteSavedQueryResponse;
use AlibabaCloud\SDK\ResourceCenter\V20221201\Models\DisableMultiAccountResourceCenterResponse;
use AlibabaCloud\SDK\ResourceCenter\V20221201\Models\DisableResourceCenterResponse;
use AlibabaCloud\SDK\ResourceCenter\V20221201\Models\DisassociateDefaultFilterResponse;
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
use AlibabaCloud\SDK\ResourceCenter\V20221201\Models\ListFiltersResponse;
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
use AlibabaCloud\SDK\ResourceCenter\V20221201\Models\UpdateFilterRequest;
use AlibabaCloud\SDK\ResourceCenter\V20221201\Models\UpdateFilterResponse;
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
     * @summary Sets a default filter.
     *  *
     * @param AssociateDefaultFilterRequest $request AssociateDefaultFilterRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return AssociateDefaultFilterResponse AssociateDefaultFilterResponse
     */
    public function associateDefaultFilterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->filterName)) {
            $query['FilterName'] = $request->filterName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AssociateDefaultFilter',
            'version'     => '2022-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AssociateDefaultFilterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Sets a default filter.
     *  *
     * @param AssociateDefaultFilterRequest $request AssociateDefaultFilterRequest
     *
     * @return AssociateDefaultFilterResponse AssociateDefaultFilterResponse
     */
    public function associateDefaultFilter($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->associateDefaultFilterWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a filter.
     *  *
     * @param CreateFilterRequest $request CreateFilterRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateFilterResponse CreateFilterResponse
     */
    public function createFilterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->filterConfiguration)) {
            $query['FilterConfiguration'] = $request->filterConfiguration;
        }
        if (!Utils::isUnset($request->filterName)) {
            $query['FilterName'] = $request->filterName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateFilter',
            'version'     => '2022-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateFilterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates a filter.
     *  *
     * @param CreateFilterRequest $request CreateFilterRequest
     *
     * @return CreateFilterResponse CreateFilterResponse
     */
    public function createFilter($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createFilterWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a custom query template.
     *  *
     * @param CreateSavedQueryRequest $request CreateSavedQueryRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateSavedQueryResponse CreateSavedQueryResponse
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
     * @summary Creates a custom query template.
     *  *
     * @param CreateSavedQueryRequest $request CreateSavedQueryRequest
     *
     * @return CreateSavedQueryResponse CreateSavedQueryResponse
     */
    public function createSavedQuery($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSavedQueryWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a filter.
     *  *
     * @param DeleteFilterRequest $request DeleteFilterRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteFilterResponse DeleteFilterResponse
     */
    public function deleteFilterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->filterName)) {
            $query['FilterName'] = $request->filterName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteFilter',
            'version'     => '2022-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteFilterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes a filter.
     *  *
     * @param DeleteFilterRequest $request DeleteFilterRequest
     *
     * @return DeleteFilterResponse DeleteFilterResponse
     */
    public function deleteFilter($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteFilterWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a custom query template.
     *  *
     * @param DeleteSavedQueryRequest $request DeleteSavedQueryRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteSavedQueryResponse DeleteSavedQueryResponse
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
     * @summary Deletes a custom query template.
     *  *
     * @param DeleteSavedQueryRequest $request DeleteSavedQueryRequest
     *
     * @return DeleteSavedQueryResponse DeleteSavedQueryResponse
     */
    public function deleteSavedQuery($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSavedQueryWithOptions($request, $runtime);
    }

    /**
     * @summary Disables the cross-account resource search feature by using the management account of a resource directory or a delegated administrator account of Resource Center.
     *  *
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return DisableMultiAccountResourceCenterResponse DisableMultiAccountResourceCenterResponse
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
     * @summary Disables the cross-account resource search feature by using the management account of a resource directory or a delegated administrator account of Resource Center.
     *  *
     * @return DisableMultiAccountResourceCenterResponse DisableMultiAccountResourceCenterResponse
     */
    public function disableMultiAccountResourceCenter()
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableMultiAccountResourceCenterWithOptions($runtime);
    }

    /**
     * @summary Deactivates the Resource Center service.
     *  *
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return DisableResourceCenterResponse DisableResourceCenterResponse
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
     * @summary Deactivates the Resource Center service.
     *  *
     * @return DisableResourceCenterResponse DisableResourceCenterResponse
     */
    public function disableResourceCenter()
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableResourceCenterWithOptions($runtime);
    }

    /**
     * @summary Cancels the default filter.
     *  *
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return DisassociateDefaultFilterResponse DisassociateDefaultFilterResponse
     */
    public function disassociateDefaultFilterWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'DisassociateDefaultFilter',
            'version'     => '2022-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DisassociateDefaultFilterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Cancels the default filter.
     *  *
     * @return DisassociateDefaultFilterResponse DisassociateDefaultFilterResponse
     */
    public function disassociateDefaultFilter()
    {
        $runtime = new RuntimeOptions([]);

        return $this->disassociateDefaultFilterWithOptions($runtime);
    }

    /**
     * @summary Enables the cross-account resource search feature by using the management account of a resource directory or a delegated administrator account of Resource Center.
     *  *
     * @description If you have created a resource directory for your enterprise, you can enable the cross-account resource search feature by using the management account of the resource directory or a delegated administrator account of Resource Center to view the resources of members in the resource directory. For more information about a resource directory, see [Resource Directory overview](https://help.aliyun.com/document_detail/200506.html).
     *  *
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
     * @summary Enables the cross-account resource search feature by using the management account of a resource directory or a delegated administrator account of Resource Center.
     *  *
     * @description If you have created a resource directory for your enterprise, you can enable the cross-account resource search feature by using the management account of the resource directory or a delegated administrator account of Resource Center to view the resources of members in the resource directory. For more information about a resource directory, see [Resource Directory overview](https://help.aliyun.com/document_detail/200506.html).
     *  *
     * @return EnableMultiAccountResourceCenterResponse EnableMultiAccountResourceCenterResponse
     */
    public function enableMultiAccountResourceCenter()
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableMultiAccountResourceCenterWithOptions($runtime);
    }

    /**
     * @summary Activates the Resource Center service.
     *  *
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return EnableResourceCenterResponse EnableResourceCenterResponse
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
     * @summary Activates the Resource Center service.
     *  *
     * @return EnableResourceCenterResponse EnableResourceCenterResponse
     */
    public function enableResourceCenter()
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableResourceCenterWithOptions($runtime);
    }

    /**
     * @summary Executes an SQL statement to query resources across accounts.
     *  *
     * @param ExecuteMultiAccountSQLQueryRequest $request ExecuteMultiAccountSQLQueryRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return ExecuteMultiAccountSQLQueryResponse ExecuteMultiAccountSQLQueryResponse
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
     * @summary Executes an SQL statement to query resources across accounts.
     *  *
     * @param ExecuteMultiAccountSQLQueryRequest $request ExecuteMultiAccountSQLQueryRequest
     *
     * @return ExecuteMultiAccountSQLQueryResponse ExecuteMultiAccountSQLQueryResponse
     */
    public function executeMultiAccountSQLQuery($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->executeMultiAccountSQLQueryWithOptions($request, $runtime);
    }

    /**
     * @summary Executes an SQL statement to query the resources that can be accessed within the current account.
     *  *
     * @param ExecuteSQLQueryRequest $request ExecuteSQLQueryRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return ExecuteSQLQueryResponse ExecuteSQLQueryResponse
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
     * @summary Executes an SQL statement to query the resources that can be accessed within the current account.
     *  *
     * @param ExecuteSQLQueryRequest $request ExecuteSQLQueryRequest
     *
     * @return ExecuteSQLQueryResponse ExecuteSQLQueryResponse
     */
    public function executeSQLQuery($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->executeSQLQueryWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about a sample query template.
     *  *
     * @param GetExampleQueryRequest $request GetExampleQueryRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return GetExampleQueryResponse GetExampleQueryResponse
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
     * @summary Queries the information about a sample query template.
     *  *
     * @param GetExampleQueryRequest $request GetExampleQueryRequest
     *
     * @return GetExampleQueryResponse GetExampleQueryResponse
     */
    public function getExampleQuery($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getExampleQueryWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the status of the cross-account resource search feature by using the management account of a resource directory or a delegated administrator account of Resource Center.
     *  *
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return GetMultiAccountResourceCenterServiceStatusResponse GetMultiAccountResourceCenterServiceStatusResponse
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
     * @summary Queries the status of the cross-account resource search feature by using the management account of a resource directory or a delegated administrator account of Resource Center.
     *  *
     * @return GetMultiAccountResourceCenterServiceStatusResponse GetMultiAccountResourceCenterServiceStatusResponse
     */
    public function getMultiAccountResourceCenterServiceStatus()
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMultiAccountResourceCenterServiceStatusWithOptions($runtime);
    }

    /**
     * @summary Queries the configurations of a resource within the management account or a member of a resource directory.
     *  *
     * @param GetMultiAccountResourceConfigurationRequest $request GetMultiAccountResourceConfigurationRequest
     * @param RuntimeOptions                              $runtime runtime options for this request RuntimeOptions
     *
     * @return GetMultiAccountResourceConfigurationResponse GetMultiAccountResourceConfigurationResponse
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
     * @summary Queries the configurations of a resource within the management account or a member of a resource directory.
     *  *
     * @param GetMultiAccountResourceConfigurationRequest $request GetMultiAccountResourceConfigurationRequest
     *
     * @return GetMultiAccountResourceConfigurationResponse GetMultiAccountResourceConfigurationResponse
     */
    public function getMultiAccountResourceConfiguration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMultiAccountResourceConfigurationWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the status of the Resource Center service.
     *  *
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return GetResourceCenterServiceStatusResponse GetResourceCenterServiceStatusResponse
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
     * @summary Queries the status of the Resource Center service.
     *  *
     * @return GetResourceCenterServiceStatusResponse GetResourceCenterServiceStatusResponse
     */
    public function getResourceCenterServiceStatus()
    {
        $runtime = new RuntimeOptions([]);

        return $this->getResourceCenterServiceStatusWithOptions($runtime);
    }

    /**
     * @summary Queries the configurations of a resource within the current account.
     *  *
     * @param GetResourceConfigurationRequest $request GetResourceConfigurationRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return GetResourceConfigurationResponse GetResourceConfigurationResponse
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
     * @summary Queries the configurations of a resource within the current account.
     *  *
     * @param GetResourceConfigurationRequest $request GetResourceConfigurationRequest
     *
     * @return GetResourceConfigurationResponse GetResourceConfigurationResponse
     */
    public function getResourceConfiguration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getResourceConfigurationWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the numbers of resources on which the current account has access permissions.
     *  *
     * @param GetResourceCountsRequest $request GetResourceCountsRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return GetResourceCountsResponse GetResourceCountsResponse
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
     * @summary Queries the numbers of resources on which the current account has access permissions.
     *  *
     * @param GetResourceCountsRequest $request GetResourceCountsRequest
     *
     * @return GetResourceCountsResponse GetResourceCountsResponse
     */
    public function getResourceCounts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getResourceCountsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about a custom query template.
     *  *
     * @param GetSavedQueryRequest $request GetSavedQueryRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return GetSavedQueryResponse GetSavedQueryResponse
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
     * @summary Queries the information about a custom query template.
     *  *
     * @param GetSavedQueryRequest $request GetSavedQueryRequest
     *
     * @return GetSavedQueryResponse GetSavedQueryResponse
     */
    public function getSavedQuery($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSavedQueryWithOptions($request, $runtime);
    }

    /**
     * @summary Queries all sample query templates.
     *  *
     * @param ListExampleQueriesRequest $request ListExampleQueriesRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return ListExampleQueriesResponse ListExampleQueriesResponse
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
     * @summary Queries all sample query templates.
     *  *
     * @param ListExampleQueriesRequest $request ListExampleQueriesRequest
     *
     * @return ListExampleQueriesResponse ListExampleQueriesResponse
     */
    public function listExampleQueries($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listExampleQueriesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries a list of filters.
     *  *
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return ListFiltersResponse ListFiltersResponse
     */
    public function listFiltersWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'ListFilters',
            'version'     => '2022-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListFiltersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries a list of filters.
     *  *
     * @return ListFiltersResponse ListFiltersResponse
     */
    public function listFilters()
    {
        $runtime = new RuntimeOptions([]);

        return $this->listFiltersWithOptions($runtime);
    }

    /**
     * @summary Queries the resource groups within the management account or a member of a resource directory by using the management account of the resource directory or a delegated administrator account of Resource Center.
     *  *
     * @param ListMultiAccountResourceGroupsRequest $request ListMultiAccountResourceGroupsRequest
     * @param RuntimeOptions                        $runtime runtime options for this request RuntimeOptions
     *
     * @return ListMultiAccountResourceGroupsResponse ListMultiAccountResourceGroupsResponse
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
     * @summary Queries the resource groups within the management account or a member of a resource directory by using the management account of the resource directory or a delegated administrator account of Resource Center.
     *  *
     * @param ListMultiAccountResourceGroupsRequest $request ListMultiAccountResourceGroupsRequest
     *
     * @return ListMultiAccountResourceGroupsResponse ListMultiAccountResourceGroupsResponse
     */
    public function listMultiAccountResourceGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listMultiAccountResourceGroupsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the tag keys of resources within the management account or a member of a resource directory by using the management account of the resource directory or a delegated administrator account of Resource Center.
     *  *
     * @param ListMultiAccountTagKeysRequest $request ListMultiAccountTagKeysRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return ListMultiAccountTagKeysResponse ListMultiAccountTagKeysResponse
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
     * @summary Queries the tag keys of resources within the management account or a member of a resource directory by using the management account of the resource directory or a delegated administrator account of Resource Center.
     *  *
     * @param ListMultiAccountTagKeysRequest $request ListMultiAccountTagKeysRequest
     *
     * @return ListMultiAccountTagKeysResponse ListMultiAccountTagKeysResponse
     */
    public function listMultiAccountTagKeys($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listMultiAccountTagKeysWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the tag values of resources within the management account or a member of a resource directory by using the management account of the resource directory or a delegated administrator account of Resource Center.
     *  *
     * @param ListMultiAccountTagValuesRequest $request ListMultiAccountTagValuesRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return ListMultiAccountTagValuesResponse ListMultiAccountTagValuesResponse
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
     * @summary Queries the tag values of resources within the management account or a member of a resource directory by using the management account of the resource directory or a delegated administrator account of Resource Center.
     *  *
     * @param ListMultiAccountTagValuesRequest $request ListMultiAccountTagValuesRequest
     *
     * @return ListMultiAccountTagValuesResponse ListMultiAccountTagValuesResponse
     */
    public function listMultiAccountTagValues($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listMultiAccountTagValuesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the resource types supported by Resource Center.
     *  *
     * @param ListResourceTypesRequest $request ListResourceTypesRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return ListResourceTypesResponse ListResourceTypesResponse
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
     * @summary Queries the resource types supported by Resource Center.
     *  *
     * @param ListResourceTypesRequest $request ListResourceTypesRequest
     *
     * @return ListResourceTypesResponse ListResourceTypesResponse
     */
    public function listResourceTypes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listResourceTypesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries all custom query templates.
     *  *
     * @param ListSavedQueriesRequest $request ListSavedQueriesRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return ListSavedQueriesResponse ListSavedQueriesResponse
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
     * @summary Queries all custom query templates.
     *  *
     * @param ListSavedQueriesRequest $request ListSavedQueriesRequest
     *
     * @return ListSavedQueriesResponse ListSavedQueriesResponse
     */
    public function listSavedQueries($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSavedQueriesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the tag keys of resources within the current account.
     *  *
     * @param ListTagKeysRequest $request ListTagKeysRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return ListTagKeysResponse ListTagKeysResponse
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
     * @summary Queries the tag keys of resources within the current account.
     *  *
     * @param ListTagKeysRequest $request ListTagKeysRequest
     *
     * @return ListTagKeysResponse ListTagKeysResponse
     */
    public function listTagKeys($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTagKeysWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the tag values of resources within the current account.
     *  *
     * @param ListTagValuesRequest $request ListTagValuesRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return ListTagValuesResponse ListTagValuesResponse
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
     * @summary Queries the tag values of resources within the current account.
     *  *
     * @param ListTagValuesRequest $request ListTagValuesRequest
     *
     * @return ListTagValuesResponse ListTagValuesResponse
     */
    public function listTagValues($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTagValuesWithOptions($request, $runtime);
    }

    /**
     * @summary Searches for resources within the management account or members of a resource directory.
     *  *
     * @description *   You can use this operation to search for only resources whose types are supported by Resource Center in services that work with Resource Center. For more information about the services and the resource types that are supported by Resource Center, see [Services that work with Resource Center](https://help.aliyun.com/document_detail/477798.html).
     * *   Before you use a RAM user or a RAM role to call the operation, you must make sure that the RAM user or RAM role is granted the required permissions. For more information, see [Grant a RAM user the permissions to use Resource Center](https://help.aliyun.com/document_detail/600556.html).
     * *   By default, the operation returns a maximum of 20 entries. You can configure the `MaxResults` parameter to specify the maximum number of entries to return.
     * *   If the response does not contain the `NextToken` parameter, all entries are returned. Otherwise, more entries exist. If you want to obtain the entries, you can call the operation again to initiate another query request. In the request, set the `NextToken` parameter to the value of `NextToken` in the last response of the operation. If you do not configure the `NextToken` parameter, entries on the first page are returned by default.
     * *   You can specify one or more filter conditions to narrow the search scope. For more information about supported filter parameters and matching methods, see the Supported filter parameters section. Multiple filter conditions have logical `AND` relations. Only resources that meet all filter conditions are returned. The values of a filter condition have logical `OR` relations. Resources that meet any value of the filter condition are returned.
     * *   You can visit [Sample Code Center](https://api.alibabacloud.com/api-tools/demo/ResourceCenter) to view more sample queries.
     *  *
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
     * @summary Searches for resources within the management account or members of a resource directory.
     *  *
     * @description *   You can use this operation to search for only resources whose types are supported by Resource Center in services that work with Resource Center. For more information about the services and the resource types that are supported by Resource Center, see [Services that work with Resource Center](https://help.aliyun.com/document_detail/477798.html).
     * *   Before you use a RAM user or a RAM role to call the operation, you must make sure that the RAM user or RAM role is granted the required permissions. For more information, see [Grant a RAM user the permissions to use Resource Center](https://help.aliyun.com/document_detail/600556.html).
     * *   By default, the operation returns a maximum of 20 entries. You can configure the `MaxResults` parameter to specify the maximum number of entries to return.
     * *   If the response does not contain the `NextToken` parameter, all entries are returned. Otherwise, more entries exist. If you want to obtain the entries, you can call the operation again to initiate another query request. In the request, set the `NextToken` parameter to the value of `NextToken` in the last response of the operation. If you do not configure the `NextToken` parameter, entries on the first page are returned by default.
     * *   You can specify one or more filter conditions to narrow the search scope. For more information about supported filter parameters and matching methods, see the Supported filter parameters section. Multiple filter conditions have logical `AND` relations. Only resources that meet all filter conditions are returned. The values of a filter condition have logical `OR` relations. Resources that meet any value of the filter condition are returned.
     * *   You can visit [Sample Code Center](https://api.alibabacloud.com/api-tools/demo/ResourceCenter) to view more sample queries.
     *  *
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
     * @summary Search for resources that you can access within the current account.
     *  *
     * @description *   You can use this operation to search for only resources whose types are supported by Resource Center in services that work with Resource Center. For more information about the services and the resource types that are supported by Resource Center, see [Services that work with Resource Center](https://help.aliyun.com/document_detail/477798.html).
     * *   By default, the operation returns a maximum of 20 entries. You can configure the `MaxResults` parameter to specify the maximum number of entries to return.
     * *   If the response does not contain the `NextToken` parameter, all entries are returned. Otherwise, more entries exist. If you want to obtain the entries, you can call the operation again to initiate another query request. In the request, set the `NextToken` parameter to the value of `NextToken` in the last response of the operation. If you do not configure the `NextToken` parameter, entries on the first page are returned by default.
     * *   You can specify one or more filter conditions to narrow the search scope. For more information about supported filter parameters and matching methods, see the Supported filter parameters section. Multiple filter conditions have logical `AND` relations. Only resources that meet all filter conditions are returned. The values of a filter condition have logical `OR` relations. Resources that meet any value of the filter condition are returned.
     * *   You can visit [Sample Code Center](https://api.aliyun.com/api-tools/demo/ResourceCenter) to view more sample queries.
     *  *
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
     * @summary Search for resources that you can access within the current account.
     *  *
     * @description *   You can use this operation to search for only resources whose types are supported by Resource Center in services that work with Resource Center. For more information about the services and the resource types that are supported by Resource Center, see [Services that work with Resource Center](https://help.aliyun.com/document_detail/477798.html).
     * *   By default, the operation returns a maximum of 20 entries. You can configure the `MaxResults` parameter to specify the maximum number of entries to return.
     * *   If the response does not contain the `NextToken` parameter, all entries are returned. Otherwise, more entries exist. If you want to obtain the entries, you can call the operation again to initiate another query request. In the request, set the `NextToken` parameter to the value of `NextToken` in the last response of the operation. If you do not configure the `NextToken` parameter, entries on the first page are returned by default.
     * *   You can specify one or more filter conditions to narrow the search scope. For more information about supported filter parameters and matching methods, see the Supported filter parameters section. Multiple filter conditions have logical `AND` relations. Only resources that meet all filter conditions are returned. The values of a filter condition have logical `OR` relations. Resources that meet any value of the filter condition are returned.
     * *   You can visit [Sample Code Center](https://api.aliyun.com/api-tools/demo/ResourceCenter) to view more sample queries.
     *  *
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
     * @summary Updates a filter.
     *  *
     * @param UpdateFilterRequest $request UpdateFilterRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateFilterResponse UpdateFilterResponse
     */
    public function updateFilterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->filterConfiguration)) {
            $query['FilterConfiguration'] = $request->filterConfiguration;
        }
        if (!Utils::isUnset($request->filterName)) {
            $query['FilterName'] = $request->filterName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateFilter',
            'version'     => '2022-12-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateFilterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Updates a filter.
     *  *
     * @param UpdateFilterRequest $request UpdateFilterRequest
     *
     * @return UpdateFilterResponse UpdateFilterResponse
     */
    public function updateFilter($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateFilterWithOptions($request, $runtime);
    }

    /**
     * @summary Updates a custom query template.
     *  *
     * @param UpdateSavedQueryRequest $request UpdateSavedQueryRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateSavedQueryResponse UpdateSavedQueryResponse
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
     * @summary Updates a custom query template.
     *  *
     * @param UpdateSavedQueryRequest $request UpdateSavedQueryRequest
     *
     * @return UpdateSavedQueryResponse UpdateSavedQueryResponse
     */
    public function updateSavedQuery($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateSavedQueryWithOptions($request, $runtime);
    }
}
