<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceCenter\V20221201;

use AlibabaCloud\Dara\Models\RuntimeOptions;
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
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

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
        if (null !== $endpoint) {
            return $endpoint;
        }

        if (null !== $endpointMap && null !== @$endpointMap[$regionId]) {
            return @$endpointMap[$regionId];
        }

        return Utils::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * Sets a default filter.
     *
     * @param request - AssociateDefaultFilterRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns AssociateDefaultFilterResponse
     *
     * @param AssociateDefaultFilterRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return AssociateDefaultFilterResponse
     */
    public function associateDefaultFilterWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->filterName) {
            @$query['FilterName'] = $request->filterName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return AssociateDefaultFilterResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return AssociateDefaultFilterResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Sets a default filter.
     *
     * @param request - AssociateDefaultFilterRequest
     * @returns AssociateDefaultFilterResponse
     *
     * @param AssociateDefaultFilterRequest $request
     *
     * @return AssociateDefaultFilterResponse
     */
    public function associateDefaultFilter($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->associateDefaultFilterWithOptions($request, $runtime);
    }

    /**
     * Creates a filter.
     *
     * @param request - CreateFilterRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns CreateFilterResponse
     *
     * @param CreateFilterRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return CreateFilterResponse
     */
    public function createFilterWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->filterConfiguration) {
            @$query['FilterConfiguration'] = $request->filterConfiguration;
        }

        if (null !== $request->filterName) {
            @$query['FilterName'] = $request->filterName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateFilterResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateFilterResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Creates a filter.
     *
     * @param request - CreateFilterRequest
     * @returns CreateFilterResponse
     *
     * @param CreateFilterRequest $request
     *
     * @return CreateFilterResponse
     */
    public function createFilter($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createFilterWithOptions($request, $runtime);
    }

    /**
     * Creates a custom query template.
     *
     * @param request - CreateSavedQueryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns CreateSavedQueryResponse
     *
     * @param CreateSavedQueryRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CreateSavedQueryResponse
     */
    public function createSavedQueryWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->expression) {
            @$query['Expression'] = $request->expression;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateSavedQueryResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateSavedQueryResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Creates a custom query template.
     *
     * @param request - CreateSavedQueryRequest
     * @returns CreateSavedQueryResponse
     *
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
     * Deletes a filter.
     *
     * @param request - DeleteFilterRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DeleteFilterResponse
     *
     * @param DeleteFilterRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DeleteFilterResponse
     */
    public function deleteFilterWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->filterName) {
            @$query['FilterName'] = $request->filterName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteFilterResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteFilterResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Deletes a filter.
     *
     * @param request - DeleteFilterRequest
     * @returns DeleteFilterResponse
     *
     * @param DeleteFilterRequest $request
     *
     * @return DeleteFilterResponse
     */
    public function deleteFilter($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteFilterWithOptions($request, $runtime);
    }

    /**
     * Deletes a custom query template.
     *
     * @param request - DeleteSavedQueryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DeleteSavedQueryResponse
     *
     * @param DeleteSavedQueryRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteSavedQueryResponse
     */
    public function deleteSavedQueryWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->queryId) {
            @$query['QueryId'] = $request->queryId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteSavedQueryResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteSavedQueryResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Deletes a custom query template.
     *
     * @param request - DeleteSavedQueryRequest
     * @returns DeleteSavedQueryResponse
     *
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
     * Disables the cross-account resource search feature by using the management account of a resource directory or a delegated administrator account of Resource Center.
     *
     * @param request - DisableMultiAccountResourceCenterRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DisableMultiAccountResourceCenterResponse
     *
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DisableMultiAccountResourceCenterResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DisableMultiAccountResourceCenterResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Disables the cross-account resource search feature by using the management account of a resource directory or a delegated administrator account of Resource Center.
     *
     * @returns DisableMultiAccountResourceCenterResponse
     *
     * @return DisableMultiAccountResourceCenterResponse
     */
    public function disableMultiAccountResourceCenter()
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableMultiAccountResourceCenterWithOptions($runtime);
    }

    /**
     * Deactivates the Resource Center service.
     *
     * @param request - DisableResourceCenterRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DisableResourceCenterResponse
     *
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DisableResourceCenterResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DisableResourceCenterResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Deactivates the Resource Center service.
     *
     * @returns DisableResourceCenterResponse
     *
     * @return DisableResourceCenterResponse
     */
    public function disableResourceCenter()
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableResourceCenterWithOptions($runtime);
    }

    /**
     * Cancels the default filter.
     *
     * @param request - DisassociateDefaultFilterRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DisassociateDefaultFilterResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return DisassociateDefaultFilterResponse
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DisassociateDefaultFilterResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DisassociateDefaultFilterResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Cancels the default filter.
     *
     * @returns DisassociateDefaultFilterResponse
     *
     * @return DisassociateDefaultFilterResponse
     */
    public function disassociateDefaultFilter()
    {
        $runtime = new RuntimeOptions([]);

        return $this->disassociateDefaultFilterWithOptions($runtime);
    }

    /**
     * Enables the cross-account resource search feature by using the management account of a resource directory or a delegated administrator account of Resource Center.
     *
     * @remarks
     * If you have created a resource directory for your enterprise, you can enable the cross-account resource search feature by using the management account of the resource directory or a delegated administrator account of Resource Center to view the resources of members in the resource directory. For more information about a resource directory, see [Resource Directory overview](https://help.aliyun.com/document_detail/200506.html).
     *
     * @param request - EnableMultiAccountResourceCenterRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns EnableMultiAccountResourceCenterResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return EnableMultiAccountResourceCenterResponse
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return EnableMultiAccountResourceCenterResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return EnableMultiAccountResourceCenterResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Enables the cross-account resource search feature by using the management account of a resource directory or a delegated administrator account of Resource Center.
     *
     * @remarks
     * If you have created a resource directory for your enterprise, you can enable the cross-account resource search feature by using the management account of the resource directory or a delegated administrator account of Resource Center to view the resources of members in the resource directory. For more information about a resource directory, see [Resource Directory overview](https://help.aliyun.com/document_detail/200506.html).
     * @returns EnableMultiAccountResourceCenterResponse
     *
     * @return EnableMultiAccountResourceCenterResponse
     */
    public function enableMultiAccountResourceCenter()
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableMultiAccountResourceCenterWithOptions($runtime);
    }

    /**
     * Activates the Resource Center service.
     *
     * @param request - EnableResourceCenterRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns EnableResourceCenterResponse
     *
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return EnableResourceCenterResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return EnableResourceCenterResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Activates the Resource Center service.
     *
     * @returns EnableResourceCenterResponse
     *
     * @return EnableResourceCenterResponse
     */
    public function enableResourceCenter()
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableResourceCenterWithOptions($runtime);
    }

    /**
     * Executes an SQL statement to query resources across accounts.
     *
     * @param request - ExecuteMultiAccountSQLQueryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ExecuteMultiAccountSQLQueryResponse
     *
     * @param ExecuteMultiAccountSQLQueryRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ExecuteMultiAccountSQLQueryResponse
     */
    public function executeMultiAccountSQLQueryWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->expression) {
            @$query['Expression'] = $request->expression;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->scope) {
            @$query['Scope'] = $request->scope;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ExecuteMultiAccountSQLQueryResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ExecuteMultiAccountSQLQueryResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Executes an SQL statement to query resources across accounts.
     *
     * @param request - ExecuteMultiAccountSQLQueryRequest
     * @returns ExecuteMultiAccountSQLQueryResponse
     *
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
     * Executes an SQL statement to query the resources that can be accessed within the current account.
     *
     * @param request - ExecuteSQLQueryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ExecuteSQLQueryResponse
     *
     * @param ExecuteSQLQueryRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ExecuteSQLQueryResponse
     */
    public function executeSQLQueryWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->expression) {
            @$query['Expression'] = $request->expression;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->scope) {
            @$query['Scope'] = $request->scope;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ExecuteSQLQueryResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ExecuteSQLQueryResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Executes an SQL statement to query the resources that can be accessed within the current account.
     *
     * @param request - ExecuteSQLQueryRequest
     * @returns ExecuteSQLQueryResponse
     *
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
     * Queries the information about a sample query template.
     *
     * @param request - GetExampleQueryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetExampleQueryResponse
     *
     * @param GetExampleQueryRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetExampleQueryResponse
     */
    public function getExampleQueryWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->queryId) {
            @$query['QueryId'] = $request->queryId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetExampleQueryResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetExampleQueryResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the information about a sample query template.
     *
     * @param request - GetExampleQueryRequest
     * @returns GetExampleQueryResponse
     *
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
     * Queries the status of the cross-account resource search feature by using the management account of a resource directory or a delegated administrator account of Resource Center.
     *
     * @param request - GetMultiAccountResourceCenterServiceStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetMultiAccountResourceCenterServiceStatusResponse
     *
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetMultiAccountResourceCenterServiceStatusResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetMultiAccountResourceCenterServiceStatusResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the status of the cross-account resource search feature by using the management account of a resource directory or a delegated administrator account of Resource Center.
     *
     * @returns GetMultiAccountResourceCenterServiceStatusResponse
     *
     * @return GetMultiAccountResourceCenterServiceStatusResponse
     */
    public function getMultiAccountResourceCenterServiceStatus()
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMultiAccountResourceCenterServiceStatusWithOptions($runtime);
    }

    /**
     * Queries the configurations of a resource within the management account or a member of a resource directory.
     *
     * @param request - GetMultiAccountResourceConfigurationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetMultiAccountResourceConfigurationResponse
     *
     * @param GetMultiAccountResourceConfigurationRequest $request
     * @param RuntimeOptions                              $runtime
     *
     * @return GetMultiAccountResourceConfigurationResponse
     */
    public function getMultiAccountResourceConfigurationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accountId) {
            @$query['AccountId'] = $request->accountId;
        }

        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceRegionId) {
            @$query['ResourceRegionId'] = $request->resourceRegionId;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetMultiAccountResourceConfigurationResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetMultiAccountResourceConfigurationResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the configurations of a resource within the management account or a member of a resource directory.
     *
     * @param request - GetMultiAccountResourceConfigurationRequest
     * @returns GetMultiAccountResourceConfigurationResponse
     *
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
     * Queries the status of the Resource Center service.
     *
     * @param request - GetResourceCenterServiceStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetResourceCenterServiceStatusResponse
     *
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetResourceCenterServiceStatusResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetResourceCenterServiceStatusResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the status of the Resource Center service.
     *
     * @returns GetResourceCenterServiceStatusResponse
     *
     * @return GetResourceCenterServiceStatusResponse
     */
    public function getResourceCenterServiceStatus()
    {
        $runtime = new RuntimeOptions([]);

        return $this->getResourceCenterServiceStatusWithOptions($runtime);
    }

    /**
     * Queries the configurations of a resource within the current account.
     *
     * @param request - GetResourceConfigurationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetResourceConfigurationResponse
     *
     * @param GetResourceConfigurationRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return GetResourceConfigurationResponse
     */
    public function getResourceConfigurationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceRegionId) {
            @$query['ResourceRegionId'] = $request->resourceRegionId;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetResourceConfigurationResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetResourceConfigurationResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the configurations of a resource within the current account.
     *
     * @param request - GetResourceConfigurationRequest
     * @returns GetResourceConfigurationResponse
     *
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
     * Queries the numbers of resources on which the current account has access permissions.
     *
     * @param request - GetResourceCountsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetResourceCountsResponse
     *
     * @param GetResourceCountsRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetResourceCountsResponse
     */
    public function getResourceCountsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->filter) {
            @$query['Filter'] = $request->filter;
        }

        if (null !== $request->groupByKey) {
            @$query['GroupByKey'] = $request->groupByKey;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetResourceCountsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetResourceCountsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the numbers of resources on which the current account has access permissions.
     *
     * @param request - GetResourceCountsRequest
     * @returns GetResourceCountsResponse
     *
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
     * Queries the information about a custom query template.
     *
     * @param request - GetSavedQueryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetSavedQueryResponse
     *
     * @param GetSavedQueryRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetSavedQueryResponse
     */
    public function getSavedQueryWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->queryId) {
            @$query['QueryId'] = $request->queryId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetSavedQueryResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetSavedQueryResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the information about a custom query template.
     *
     * @param request - GetSavedQueryRequest
     * @returns GetSavedQueryResponse
     *
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
     * Queries all sample query templates.
     *
     * @param request - ListExampleQueriesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListExampleQueriesResponse
     *
     * @param ListExampleQueriesRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ListExampleQueriesResponse
     */
    public function listExampleQueriesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListExampleQueriesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListExampleQueriesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries all sample query templates.
     *
     * @param request - ListExampleQueriesRequest
     * @returns ListExampleQueriesResponse
     *
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
     * Queries a list of filters.
     *
     * @param request - ListFiltersRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListFiltersResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return ListFiltersResponse
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListFiltersResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListFiltersResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries a list of filters.
     *
     * @returns ListFiltersResponse
     *
     * @return ListFiltersResponse
     */
    public function listFilters()
    {
        $runtime = new RuntimeOptions([]);

        return $this->listFiltersWithOptions($runtime);
    }

    /**
     * Queries the resource groups within the management account or a member of a resource directory by using the management account of the resource directory or a delegated administrator account of Resource Center.
     *
     * @param request - ListMultiAccountResourceGroupsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListMultiAccountResourceGroupsResponse
     *
     * @param ListMultiAccountResourceGroupsRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return ListMultiAccountResourceGroupsResponse
     */
    public function listMultiAccountResourceGroupsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accountId) {
            @$query['AccountId'] = $request->accountId;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->resourceGroupIds) {
            @$query['ResourceGroupIds'] = $request->resourceGroupIds;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListMultiAccountResourceGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListMultiAccountResourceGroupsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the resource groups within the management account or a member of a resource directory by using the management account of the resource directory or a delegated administrator account of Resource Center.
     *
     * @param request - ListMultiAccountResourceGroupsRequest
     * @returns ListMultiAccountResourceGroupsResponse
     *
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
     * Queries the tag keys of resources within the management account or a member of a resource directory by using the management account of the resource directory or a delegated administrator account of Resource Center.
     *
     * @param request - ListMultiAccountTagKeysRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListMultiAccountTagKeysResponse
     *
     * @param ListMultiAccountTagKeysRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ListMultiAccountTagKeysResponse
     */
    public function listMultiAccountTagKeysWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->matchType) {
            @$query['MatchType'] = $request->matchType;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->scope) {
            @$query['Scope'] = $request->scope;
        }

        if (null !== $request->tagKey) {
            @$query['TagKey'] = $request->tagKey;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListMultiAccountTagKeysResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListMultiAccountTagKeysResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the tag keys of resources within the management account or a member of a resource directory by using the management account of the resource directory or a delegated administrator account of Resource Center.
     *
     * @param request - ListMultiAccountTagKeysRequest
     * @returns ListMultiAccountTagKeysResponse
     *
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
     * Queries the tag values of resources within the management account or a member of a resource directory by using the management account of the resource directory or a delegated administrator account of Resource Center.
     *
     * @param request - ListMultiAccountTagValuesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListMultiAccountTagValuesResponse
     *
     * @param ListMultiAccountTagValuesRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ListMultiAccountTagValuesResponse
     */
    public function listMultiAccountTagValuesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->matchType) {
            @$query['MatchType'] = $request->matchType;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->scope) {
            @$query['Scope'] = $request->scope;
        }

        if (null !== $request->tagKey) {
            @$query['TagKey'] = $request->tagKey;
        }

        if (null !== $request->tagValue) {
            @$query['TagValue'] = $request->tagValue;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListMultiAccountTagValuesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListMultiAccountTagValuesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the tag values of resources within the management account or a member of a resource directory by using the management account of the resource directory or a delegated administrator account of Resource Center.
     *
     * @param request - ListMultiAccountTagValuesRequest
     * @returns ListMultiAccountTagValuesResponse
     *
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
     * Queries the resource types supported by Resource Center.
     *
     * @param request - ListResourceTypesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListResourceTypesResponse
     *
     * @param ListResourceTypesRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ListResourceTypesResponse
     */
    public function listResourceTypesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->query) {
            @$query['Query'] = $request->query;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListResourceTypesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListResourceTypesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the resource types supported by Resource Center.
     *
     * @param request - ListResourceTypesRequest
     * @returns ListResourceTypesResponse
     *
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
     * Queries all custom query templates.
     *
     * @param request - ListSavedQueriesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListSavedQueriesResponse
     *
     * @param ListSavedQueriesRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListSavedQueriesResponse
     */
    public function listSavedQueriesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListSavedQueriesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListSavedQueriesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries all custom query templates.
     *
     * @param request - ListSavedQueriesRequest
     * @returns ListSavedQueriesResponse
     *
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
     * Queries the tag keys of resources within the current account.
     *
     * @param request - ListTagKeysRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListTagKeysResponse
     *
     * @param ListTagKeysRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ListTagKeysResponse
     */
    public function listTagKeysWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->matchType) {
            @$query['MatchType'] = $request->matchType;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->tagKey) {
            @$query['TagKey'] = $request->tagKey;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListTagKeysResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListTagKeysResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the tag keys of resources within the current account.
     *
     * @param request - ListTagKeysRequest
     * @returns ListTagKeysResponse
     *
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
     * Queries the tag values of resources within the current account.
     *
     * @param request - ListTagValuesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListTagValuesResponse
     *
     * @param ListTagValuesRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ListTagValuesResponse
     */
    public function listTagValuesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->matchType) {
            @$query['MatchType'] = $request->matchType;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->tagKey) {
            @$query['TagKey'] = $request->tagKey;
        }

        if (null !== $request->tagValue) {
            @$query['TagValue'] = $request->tagValue;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListTagValuesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListTagValuesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the tag values of resources within the current account.
     *
     * @param request - ListTagValuesRequest
     * @returns ListTagValuesResponse
     *
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
     * Searches for resources within the management account or members of a resource directory.
     *
     * @remarks
     *   You can use this operation to search for only resources whose types are supported by Resource Center in services that work with Resource Center. For more information about the services and the resource types that are supported by Resource Center, see [Services that work with Resource Center](https://help.aliyun.com/document_detail/477798.html).
     * *   Before you use a RAM user or a RAM role to call the operation, you must make sure that the RAM user or RAM role is granted the required permissions. For more information, see [Grant a RAM user the permissions to use Resource Center](https://help.aliyun.com/document_detail/600556.html).
     * *   By default, the operation returns a maximum of 20 entries. You can configure the `MaxResults` parameter to specify the maximum number of entries to return.
     * *   If the response does not contain the `NextToken` parameter, all entries are returned. Otherwise, more entries exist. If you want to obtain the entries, you can call the operation again to initiate another query request. In the request, set the `NextToken` parameter to the value of `NextToken` in the last response of the operation. If you do not configure the `NextToken` parameter, entries on the first page are returned by default.
     * *   You can specify one or more filter conditions to narrow the search scope. For more information about supported filter parameters and matching methods, see the Supported filter parameters section. Multiple filter conditions have logical `AND` relations. Only resources that meet all filter conditions are returned. The values of a filter condition have logical `OR` relations. Resources that meet any value of the filter condition are returned.
     * *   You can visit [Sample Code Center](https://api.alibabacloud.com/api-tools/demo/ResourceCenter) to view more sample queries.
     *
     * @param request - SearchMultiAccountResourcesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns SearchMultiAccountResourcesResponse
     *
     * @param SearchMultiAccountResourcesRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return SearchMultiAccountResourcesResponse
     */
    public function searchMultiAccountResourcesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->filter) {
            @$query['Filter'] = $request->filter;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->scope) {
            @$query['Scope'] = $request->scope;
        }

        if (null !== $request->sortCriterion) {
            @$query['SortCriterion'] = $request->sortCriterion;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return SearchMultiAccountResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SearchMultiAccountResourcesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Searches for resources within the management account or members of a resource directory.
     *
     * @remarks
     *   You can use this operation to search for only resources whose types are supported by Resource Center in services that work with Resource Center. For more information about the services and the resource types that are supported by Resource Center, see [Services that work with Resource Center](https://help.aliyun.com/document_detail/477798.html).
     * *   Before you use a RAM user or a RAM role to call the operation, you must make sure that the RAM user or RAM role is granted the required permissions. For more information, see [Grant a RAM user the permissions to use Resource Center](https://help.aliyun.com/document_detail/600556.html).
     * *   By default, the operation returns a maximum of 20 entries. You can configure the `MaxResults` parameter to specify the maximum number of entries to return.
     * *   If the response does not contain the `NextToken` parameter, all entries are returned. Otherwise, more entries exist. If you want to obtain the entries, you can call the operation again to initiate another query request. In the request, set the `NextToken` parameter to the value of `NextToken` in the last response of the operation. If you do not configure the `NextToken` parameter, entries on the first page are returned by default.
     * *   You can specify one or more filter conditions to narrow the search scope. For more information about supported filter parameters and matching methods, see the Supported filter parameters section. Multiple filter conditions have logical `AND` relations. Only resources that meet all filter conditions are returned. The values of a filter condition have logical `OR` relations. Resources that meet any value of the filter condition are returned.
     * *   You can visit [Sample Code Center](https://api.alibabacloud.com/api-tools/demo/ResourceCenter) to view more sample queries.
     *
     * @param request - SearchMultiAccountResourcesRequest
     * @returns SearchMultiAccountResourcesResponse
     *
     * @param SearchMultiAccountResourcesRequest $request
     *
     * @return SearchMultiAccountResourcesResponse
     */
    public function searchMultiAccountResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->searchMultiAccountResourcesWithOptions($request, $runtime);
    }

    /**
     * Search for resources that you can access within the current account.
     *
     * @remarks
     *   You can use this operation to search for only resources whose types are supported by Resource Center in services that work with Resource Center. For more information about the services and the resource types that are supported by Resource Center, see [Services that work with Resource Center](https://help.aliyun.com/document_detail/477798.html).
     * *   By default, the operation returns a maximum of 20 entries. You can configure the `MaxResults` parameter to specify the maximum number of entries to return.
     * *   If the response does not contain the `NextToken` parameter, all entries are returned. Otherwise, more entries exist. If you want to obtain the entries, you can call the operation again to initiate another query request. In the request, set the `NextToken` parameter to the value of `NextToken` in the last response of the operation. If you do not configure the `NextToken` parameter, entries on the first page are returned by default.
     * *   You can specify one or more filter conditions to narrow the search scope. For more information about supported filter parameters and matching methods, see the Supported filter parameters section. Multiple filter conditions have logical `AND` relations. Only resources that meet all filter conditions are returned. The values of a filter condition have logical `OR` relations. Resources that meet any value of the filter condition are returned.
     * *   You can visit [Sample Code Center](https://api.aliyun.com/api-tools/demo/ResourceCenter) to view more sample queries.
     *
     * @param request - SearchResourcesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns SearchResourcesResponse
     *
     * @param SearchResourcesRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return SearchResourcesResponse
     */
    public function searchResourcesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->filter) {
            @$query['Filter'] = $request->filter;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->sortCriterion) {
            @$query['SortCriterion'] = $request->sortCriterion;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return SearchResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SearchResourcesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Search for resources that you can access within the current account.
     *
     * @remarks
     *   You can use this operation to search for only resources whose types are supported by Resource Center in services that work with Resource Center. For more information about the services and the resource types that are supported by Resource Center, see [Services that work with Resource Center](https://help.aliyun.com/document_detail/477798.html).
     * *   By default, the operation returns a maximum of 20 entries. You can configure the `MaxResults` parameter to specify the maximum number of entries to return.
     * *   If the response does not contain the `NextToken` parameter, all entries are returned. Otherwise, more entries exist. If you want to obtain the entries, you can call the operation again to initiate another query request. In the request, set the `NextToken` parameter to the value of `NextToken` in the last response of the operation. If you do not configure the `NextToken` parameter, entries on the first page are returned by default.
     * *   You can specify one or more filter conditions to narrow the search scope. For more information about supported filter parameters and matching methods, see the Supported filter parameters section. Multiple filter conditions have logical `AND` relations. Only resources that meet all filter conditions are returned. The values of a filter condition have logical `OR` relations. Resources that meet any value of the filter condition are returned.
     * *   You can visit [Sample Code Center](https://api.aliyun.com/api-tools/demo/ResourceCenter) to view more sample queries.
     *
     * @param request - SearchResourcesRequest
     * @returns SearchResourcesResponse
     *
     * @param SearchResourcesRequest $request
     *
     * @return SearchResourcesResponse
     */
    public function searchResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->searchResourcesWithOptions($request, $runtime);
    }

    /**
     * Updates a filter.
     *
     * @param request - UpdateFilterRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns UpdateFilterResponse
     *
     * @param UpdateFilterRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return UpdateFilterResponse
     */
    public function updateFilterWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->filterConfiguration) {
            @$query['FilterConfiguration'] = $request->filterConfiguration;
        }

        if (null !== $request->filterName) {
            @$query['FilterName'] = $request->filterName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateFilterResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateFilterResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Updates a filter.
     *
     * @param request - UpdateFilterRequest
     * @returns UpdateFilterResponse
     *
     * @param UpdateFilterRequest $request
     *
     * @return UpdateFilterResponse
     */
    public function updateFilter($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateFilterWithOptions($request, $runtime);
    }

    /**
     * Updates a custom query template.
     *
     * @param request - UpdateSavedQueryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns UpdateSavedQueryResponse
     *
     * @param UpdateSavedQueryRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return UpdateSavedQueryResponse
     */
    public function updateSavedQueryWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->expression) {
            @$query['Expression'] = $request->expression;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->queryId) {
            @$query['QueryId'] = $request->queryId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateSavedQueryResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateSavedQueryResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Updates a custom query template.
     *
     * @param request - UpdateSavedQueryRequest
     * @returns UpdateSavedQueryResponse
     *
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
