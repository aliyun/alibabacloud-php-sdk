<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceCenter\V20221201;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\ResourceCenter\V20221201\Models\AssociateDefaultFilterRequest;
use AlibabaCloud\SDK\ResourceCenter\V20221201\Models\AssociateDefaultFilterResponse;
use AlibabaCloud\SDK\ResourceCenter\V20221201\Models\BatchGetResourceConfigurationsRequest;
use AlibabaCloud\SDK\ResourceCenter\V20221201\Models\BatchGetResourceConfigurationsResponse;
use AlibabaCloud\SDK\ResourceCenter\V20221201\Models\CreateDeliveryChannelRequest;
use AlibabaCloud\SDK\ResourceCenter\V20221201\Models\CreateDeliveryChannelResponse;
use AlibabaCloud\SDK\ResourceCenter\V20221201\Models\CreateFilterRequest;
use AlibabaCloud\SDK\ResourceCenter\V20221201\Models\CreateFilterResponse;
use AlibabaCloud\SDK\ResourceCenter\V20221201\Models\CreateMultiAccountDeliveryChannelRequest;
use AlibabaCloud\SDK\ResourceCenter\V20221201\Models\CreateMultiAccountDeliveryChannelResponse;
use AlibabaCloud\SDK\ResourceCenter\V20221201\Models\CreateSavedQueryRequest;
use AlibabaCloud\SDK\ResourceCenter\V20221201\Models\CreateSavedQueryResponse;
use AlibabaCloud\SDK\ResourceCenter\V20221201\Models\DeleteDeliveryChannelRequest;
use AlibabaCloud\SDK\ResourceCenter\V20221201\Models\DeleteDeliveryChannelResponse;
use AlibabaCloud\SDK\ResourceCenter\V20221201\Models\DeleteFilterRequest;
use AlibabaCloud\SDK\ResourceCenter\V20221201\Models\DeleteFilterResponse;
use AlibabaCloud\SDK\ResourceCenter\V20221201\Models\DeleteMultiAccountDeliveryChannelRequest;
use AlibabaCloud\SDK\ResourceCenter\V20221201\Models\DeleteMultiAccountDeliveryChannelResponse;
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
use AlibabaCloud\SDK\ResourceCenter\V20221201\Models\GetDeliveryChannelRequest;
use AlibabaCloud\SDK\ResourceCenter\V20221201\Models\GetDeliveryChannelResponse;
use AlibabaCloud\SDK\ResourceCenter\V20221201\Models\GetDeliveryChannelStatisticsRequest;
use AlibabaCloud\SDK\ResourceCenter\V20221201\Models\GetDeliveryChannelStatisticsResponse;
use AlibabaCloud\SDK\ResourceCenter\V20221201\Models\GetExampleQueryRequest;
use AlibabaCloud\SDK\ResourceCenter\V20221201\Models\GetExampleQueryResponse;
use AlibabaCloud\SDK\ResourceCenter\V20221201\Models\GetMultiAccountDeliveryChannelRequest;
use AlibabaCloud\SDK\ResourceCenter\V20221201\Models\GetMultiAccountDeliveryChannelResponse;
use AlibabaCloud\SDK\ResourceCenter\V20221201\Models\GetMultiAccountDeliveryChannelStatisticsRequest;
use AlibabaCloud\SDK\ResourceCenter\V20221201\Models\GetMultiAccountDeliveryChannelStatisticsResponse;
use AlibabaCloud\SDK\ResourceCenter\V20221201\Models\GetMultiAccountResourceCenterServiceStatusResponse;
use AlibabaCloud\SDK\ResourceCenter\V20221201\Models\GetMultiAccountResourceConfigurationRequest;
use AlibabaCloud\SDK\ResourceCenter\V20221201\Models\GetMultiAccountResourceConfigurationResponse;
use AlibabaCloud\SDK\ResourceCenter\V20221201\Models\GetMultiAccountResourceCountsRequest;
use AlibabaCloud\SDK\ResourceCenter\V20221201\Models\GetMultiAccountResourceCountsResponse;
use AlibabaCloud\SDK\ResourceCenter\V20221201\Models\GetResourceCenterServiceStatusResponse;
use AlibabaCloud\SDK\ResourceCenter\V20221201\Models\GetResourceConfigurationRequest;
use AlibabaCloud\SDK\ResourceCenter\V20221201\Models\GetResourceConfigurationResponse;
use AlibabaCloud\SDK\ResourceCenter\V20221201\Models\GetResourceCountsRequest;
use AlibabaCloud\SDK\ResourceCenter\V20221201\Models\GetResourceCountsResponse;
use AlibabaCloud\SDK\ResourceCenter\V20221201\Models\GetSavedQueryRequest;
use AlibabaCloud\SDK\ResourceCenter\V20221201\Models\GetSavedQueryResponse;
use AlibabaCloud\SDK\ResourceCenter\V20221201\Models\ListDeliveryChannelsRequest;
use AlibabaCloud\SDK\ResourceCenter\V20221201\Models\ListDeliveryChannelsResponse;
use AlibabaCloud\SDK\ResourceCenter\V20221201\Models\ListExampleQueriesRequest;
use AlibabaCloud\SDK\ResourceCenter\V20221201\Models\ListExampleQueriesResponse;
use AlibabaCloud\SDK\ResourceCenter\V20221201\Models\ListFiltersResponse;
use AlibabaCloud\SDK\ResourceCenter\V20221201\Models\ListMultiAccountDeliveryChannelsRequest;
use AlibabaCloud\SDK\ResourceCenter\V20221201\Models\ListMultiAccountDeliveryChannelsResponse;
use AlibabaCloud\SDK\ResourceCenter\V20221201\Models\ListMultiAccountResourceGroupsRequest;
use AlibabaCloud\SDK\ResourceCenter\V20221201\Models\ListMultiAccountResourceGroupsResponse;
use AlibabaCloud\SDK\ResourceCenter\V20221201\Models\ListMultiAccountResourceRelationshipsRequest;
use AlibabaCloud\SDK\ResourceCenter\V20221201\Models\ListMultiAccountResourceRelationshipsResponse;
use AlibabaCloud\SDK\ResourceCenter\V20221201\Models\ListMultiAccountTagKeysRequest;
use AlibabaCloud\SDK\ResourceCenter\V20221201\Models\ListMultiAccountTagKeysResponse;
use AlibabaCloud\SDK\ResourceCenter\V20221201\Models\ListMultiAccountTagValuesRequest;
use AlibabaCloud\SDK\ResourceCenter\V20221201\Models\ListMultiAccountTagValuesResponse;
use AlibabaCloud\SDK\ResourceCenter\V20221201\Models\ListResourceRelationshipsRequest;
use AlibabaCloud\SDK\ResourceCenter\V20221201\Models\ListResourceRelationshipsResponse;
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
use AlibabaCloud\SDK\ResourceCenter\V20221201\Models\UpdateDeliveryChannelRequest;
use AlibabaCloud\SDK\ResourceCenter\V20221201\Models\UpdateDeliveryChannelResponse;
use AlibabaCloud\SDK\ResourceCenter\V20221201\Models\UpdateFilterRequest;
use AlibabaCloud\SDK\ResourceCenter\V20221201\Models\UpdateFilterResponse;
use AlibabaCloud\SDK\ResourceCenter\V20221201\Models\UpdateMultiAccountDeliveryChannelRequest;
use AlibabaCloud\SDK\ResourceCenter\V20221201\Models\UpdateMultiAccountDeliveryChannelResponse;
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
     *
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
            'action' => 'AssociateDefaultFilter',
            'version' => '2022-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AssociateDefaultFilterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Sets a default filter.
     *
     * @param request - AssociateDefaultFilterRequest
     *
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
     * Queries the configurations of multiple resources in your account.
     *
     * @param request - BatchGetResourceConfigurationsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BatchGetResourceConfigurationsResponse
     *
     * @param BatchGetResourceConfigurationsRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return BatchGetResourceConfigurationsResponse
     */
    public function batchGetResourceConfigurationsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->resources) {
            @$query['Resources'] = $request->resources;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'BatchGetResourceConfigurations',
            'version' => '2022-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return BatchGetResourceConfigurationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the configurations of multiple resources in your account.
     *
     * @param request - BatchGetResourceConfigurationsRequest
     *
     * @returns BatchGetResourceConfigurationsResponse
     *
     * @param BatchGetResourceConfigurationsRequest $request
     *
     * @return BatchGetResourceConfigurationsResponse
     */
    public function batchGetResourceConfigurations($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchGetResourceConfigurationsWithOptions($request, $runtime);
    }

    /**
     * Creates a resource delivery channel for the current account.
     *
     * @remarks
     * Resource delivery supports the scheduled delivery of resource snapshots and the delivery of resource configuration changes.
     * Scheduled delivery of resource snapshots supports two scenarios:
     * - Standard delivery: Leave the `ResourceSnapshotDelivery.CustomExpression` parameter empty.
     * - Custom delivery: Set the `ResourceSnapshotDelivery.CustomExpression` parameter to an appropriate value.
     *
     * @param request - CreateDeliveryChannelRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateDeliveryChannelResponse
     *
     * @param CreateDeliveryChannelRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return CreateDeliveryChannelResponse
     */
    public function createDeliveryChannelWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->deliveryChannelDescription) {
            @$query['DeliveryChannelDescription'] = $request->deliveryChannelDescription;
        }

        if (null !== $request->deliveryChannelFilter) {
            @$query['DeliveryChannelFilter'] = $request->deliveryChannelFilter;
        }

        if (null !== $request->deliveryChannelName) {
            @$query['DeliveryChannelName'] = $request->deliveryChannelName;
        }

        if (null !== $request->resourceChangeDelivery) {
            @$query['ResourceChangeDelivery'] = $request->resourceChangeDelivery;
        }

        if (null !== $request->resourceSnapshotDelivery) {
            @$query['ResourceSnapshotDelivery'] = $request->resourceSnapshotDelivery;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateDeliveryChannel',
            'version' => '2022-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateDeliveryChannelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a resource delivery channel for the current account.
     *
     * @remarks
     * Resource delivery supports the scheduled delivery of resource snapshots and the delivery of resource configuration changes.
     * Scheduled delivery of resource snapshots supports two scenarios:
     * - Standard delivery: Leave the `ResourceSnapshotDelivery.CustomExpression` parameter empty.
     * - Custom delivery: Set the `ResourceSnapshotDelivery.CustomExpression` parameter to an appropriate value.
     *
     * @param request - CreateDeliveryChannelRequest
     *
     * @returns CreateDeliveryChannelResponse
     *
     * @param CreateDeliveryChannelRequest $request
     *
     * @return CreateDeliveryChannelResponse
     */
    public function createDeliveryChannel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDeliveryChannelWithOptions($request, $runtime);
    }

    /**
     * Creates a filter.
     *
     * @param request - CreateFilterRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'action' => 'CreateFilter',
            'version' => '2022-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateFilterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a filter.
     *
     * @param request - CreateFilterRequest
     *
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
     * Creates a multi-account delivery channel.
     *
     * @remarks
     * In Resource Center, you can create multi-account delivery channels by using the management account of your resource directory or the delegated administrator account of Resource Center to deliver resource configuration change events and scheduled resource snapshots within the members in your resource directory to Object Storage Service (OSS) or Simple Log Service (SLS). Then, other Alibaba Cloud services consume standardized resource information from OSS or Simple Log Service.
     * Scheduled resource snapshots support the following delivery scenarios:
     * - Standard delivery: Leave the `ResourceSnapshotDelivery.CustomExpression` parameter empty.
     * - Custom delivery: Set the `ResourceSnapshotDelivery.CustomExpression` parameter to an appropriate value.
     *
     * @param request - CreateMultiAccountDeliveryChannelRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateMultiAccountDeliveryChannelResponse
     *
     * @param CreateMultiAccountDeliveryChannelRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return CreateMultiAccountDeliveryChannelResponse
     */
    public function createMultiAccountDeliveryChannelWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->deliveryChannelDescription) {
            @$query['DeliveryChannelDescription'] = $request->deliveryChannelDescription;
        }

        if (null !== $request->deliveryChannelFilter) {
            @$query['DeliveryChannelFilter'] = $request->deliveryChannelFilter;
        }

        if (null !== $request->deliveryChannelName) {
            @$query['DeliveryChannelName'] = $request->deliveryChannelName;
        }

        if (null !== $request->resourceChangeDelivery) {
            @$query['ResourceChangeDelivery'] = $request->resourceChangeDelivery;
        }

        if (null !== $request->resourceSnapshotDelivery) {
            @$query['ResourceSnapshotDelivery'] = $request->resourceSnapshotDelivery;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateMultiAccountDeliveryChannel',
            'version' => '2022-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateMultiAccountDeliveryChannelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a multi-account delivery channel.
     *
     * @remarks
     * In Resource Center, you can create multi-account delivery channels by using the management account of your resource directory or the delegated administrator account of Resource Center to deliver resource configuration change events and scheduled resource snapshots within the members in your resource directory to Object Storage Service (OSS) or Simple Log Service (SLS). Then, other Alibaba Cloud services consume standardized resource information from OSS or Simple Log Service.
     * Scheduled resource snapshots support the following delivery scenarios:
     * - Standard delivery: Leave the `ResourceSnapshotDelivery.CustomExpression` parameter empty.
     * - Custom delivery: Set the `ResourceSnapshotDelivery.CustomExpression` parameter to an appropriate value.
     *
     * @param request - CreateMultiAccountDeliveryChannelRequest
     *
     * @returns CreateMultiAccountDeliveryChannelResponse
     *
     * @param CreateMultiAccountDeliveryChannelRequest $request
     *
     * @return CreateMultiAccountDeliveryChannelResponse
     */
    public function createMultiAccountDeliveryChannel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createMultiAccountDeliveryChannelWithOptions($request, $runtime);
    }

    /**
     * Creates a custom query template.
     *
     * @param request - CreateSavedQueryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'action' => 'CreateSavedQuery',
            'version' => '2022-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateSavedQueryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a custom query template.
     *
     * @param request - CreateSavedQueryRequest
     *
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
     * Deletes a single-account delivery channel.
     *
     * @param request - DeleteDeliveryChannelRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteDeliveryChannelResponse
     *
     * @param DeleteDeliveryChannelRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DeleteDeliveryChannelResponse
     */
    public function deleteDeliveryChannelWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->deliveryChannelId) {
            @$query['DeliveryChannelId'] = $request->deliveryChannelId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteDeliveryChannel',
            'version' => '2022-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteDeliveryChannelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a single-account delivery channel.
     *
     * @param request - DeleteDeliveryChannelRequest
     *
     * @returns DeleteDeliveryChannelResponse
     *
     * @param DeleteDeliveryChannelRequest $request
     *
     * @return DeleteDeliveryChannelResponse
     */
    public function deleteDeliveryChannel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDeliveryChannelWithOptions($request, $runtime);
    }

    /**
     * Deletes a filter.
     *
     * @param request - DeleteFilterRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'action' => 'DeleteFilter',
            'version' => '2022-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteFilterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a filter.
     *
     * @param request - DeleteFilterRequest
     *
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
     * Deletes a multi-account delivery channel.
     *
     * @param request - DeleteMultiAccountDeliveryChannelRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteMultiAccountDeliveryChannelResponse
     *
     * @param DeleteMultiAccountDeliveryChannelRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return DeleteMultiAccountDeliveryChannelResponse
     */
    public function deleteMultiAccountDeliveryChannelWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->deliveryChannelId) {
            @$query['DeliveryChannelId'] = $request->deliveryChannelId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteMultiAccountDeliveryChannel',
            'version' => '2022-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteMultiAccountDeliveryChannelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a multi-account delivery channel.
     *
     * @param request - DeleteMultiAccountDeliveryChannelRequest
     *
     * @returns DeleteMultiAccountDeliveryChannelResponse
     *
     * @param DeleteMultiAccountDeliveryChannelRequest $request
     *
     * @return DeleteMultiAccountDeliveryChannelResponse
     */
    public function deleteMultiAccountDeliveryChannel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteMultiAccountDeliveryChannelWithOptions($request, $runtime);
    }

    /**
     * Deletes a custom query template.
     *
     * @param request - DeleteSavedQueryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'action' => 'DeleteSavedQuery',
            'version' => '2022-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteSavedQueryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a custom query template.
     *
     * @param request - DeleteSavedQueryRequest
     *
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
     * 关闭跨账号搜索功能.
     *
     * @param request - DisableMultiAccountResourceCenterRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DisableMultiAccountResourceCenterResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return DisableMultiAccountResourceCenterResponse
     */
    public function disableMultiAccountResourceCenterWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'DisableMultiAccountResourceCenter',
            'version' => '2022-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DisableMultiAccountResourceCenterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 关闭跨账号搜索功能.
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
     * 禁用资源中心.
     *
     * @param request - DisableResourceCenterRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DisableResourceCenterResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return DisableResourceCenterResponse
     */
    public function disableResourceCenterWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'DisableResourceCenter',
            'version' => '2022-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DisableResourceCenterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 禁用资源中心.
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
     *
     * @returns DisassociateDefaultFilterResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return DisassociateDefaultFilterResponse
     */
    public function disassociateDefaultFilterWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'DisassociateDefaultFilter',
            'version' => '2022-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DisassociateDefaultFilterResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * 开通跨账号搜索功能.
     *
     * @param request - EnableMultiAccountResourceCenterRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EnableMultiAccountResourceCenterResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return EnableMultiAccountResourceCenterResponse
     */
    public function enableMultiAccountResourceCenterWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'EnableMultiAccountResourceCenter',
            'version' => '2022-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return EnableMultiAccountResourceCenterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 开通跨账号搜索功能.
     *
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
     *
     * @returns EnableResourceCenterResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return EnableResourceCenterResponse
     */
    public function enableResourceCenterWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'EnableResourceCenter',
            'version' => '2022-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return EnableResourceCenterResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * 执行多账号查询.
     *
     * @param request - ExecuteMultiAccountSQLQueryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'action' => 'ExecuteMultiAccountSQLQuery',
            'version' => '2022-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ExecuteMultiAccountSQLQueryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 执行多账号查询.
     *
     * @param request - ExecuteMultiAccountSQLQueryRequest
     *
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
     *
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
            'action' => 'ExecuteSQLQuery',
            'version' => '2022-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ExecuteSQLQueryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Executes an SQL statement to query the resources that can be accessed within the current account.
     *
     * @param request - ExecuteSQLQueryRequest
     *
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
     * Queries the information about a delivery channel within the current account.
     *
     * @param request - GetDeliveryChannelRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetDeliveryChannelResponse
     *
     * @param GetDeliveryChannelRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetDeliveryChannelResponse
     */
    public function getDeliveryChannelWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->deliveryChannelId) {
            @$query['DeliveryChannelId'] = $request->deliveryChannelId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetDeliveryChannel',
            'version' => '2022-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetDeliveryChannelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about a delivery channel within the current account.
     *
     * @param request - GetDeliveryChannelRequest
     *
     * @returns GetDeliveryChannelResponse
     *
     * @param GetDeliveryChannelRequest $request
     *
     * @return GetDeliveryChannelResponse
     */
    public function getDeliveryChannel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDeliveryChannelWithOptions($request, $runtime);
    }

    /**
     * Queries the statistics of a resource delivery channel in the current account.
     *
     * @param request - GetDeliveryChannelStatisticsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetDeliveryChannelStatisticsResponse
     *
     * @param GetDeliveryChannelStatisticsRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return GetDeliveryChannelStatisticsResponse
     */
    public function getDeliveryChannelStatisticsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->deliveryChannelId) {
            @$query['DeliveryChannelId'] = $request->deliveryChannelId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetDeliveryChannelStatistics',
            'version' => '2022-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetDeliveryChannelStatisticsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the statistics of a resource delivery channel in the current account.
     *
     * @param request - GetDeliveryChannelStatisticsRequest
     *
     * @returns GetDeliveryChannelStatisticsResponse
     *
     * @param GetDeliveryChannelStatisticsRequest $request
     *
     * @return GetDeliveryChannelStatisticsResponse
     */
    public function getDeliveryChannelStatistics($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDeliveryChannelStatisticsWithOptions($request, $runtime);
    }

    /**
     * Queries the information about a sample query template.
     *
     * @param request - GetExampleQueryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'action' => 'GetExampleQuery',
            'version' => '2022-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetExampleQueryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about a sample query template.
     *
     * @param request - GetExampleQueryRequest
     *
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
     * Queries the information about a cross-account resource delivery channel.
     *
     * @param request - GetMultiAccountDeliveryChannelRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetMultiAccountDeliveryChannelResponse
     *
     * @param GetMultiAccountDeliveryChannelRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return GetMultiAccountDeliveryChannelResponse
     */
    public function getMultiAccountDeliveryChannelWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->deliveryChannelId) {
            @$query['DeliveryChannelId'] = $request->deliveryChannelId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetMultiAccountDeliveryChannel',
            'version' => '2022-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetMultiAccountDeliveryChannelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about a cross-account resource delivery channel.
     *
     * @param request - GetMultiAccountDeliveryChannelRequest
     *
     * @returns GetMultiAccountDeliveryChannelResponse
     *
     * @param GetMultiAccountDeliveryChannelRequest $request
     *
     * @return GetMultiAccountDeliveryChannelResponse
     */
    public function getMultiAccountDeliveryChannel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMultiAccountDeliveryChannelWithOptions($request, $runtime);
    }

    /**
     * Queries the statistics on a multi-account delivery channel.
     *
     * @param request - GetMultiAccountDeliveryChannelStatisticsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetMultiAccountDeliveryChannelStatisticsResponse
     *
     * @param GetMultiAccountDeliveryChannelStatisticsRequest $request
     * @param RuntimeOptions                                  $runtime
     *
     * @return GetMultiAccountDeliveryChannelStatisticsResponse
     */
    public function getMultiAccountDeliveryChannelStatisticsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->deliveryChannelId) {
            @$query['DeliveryChannelId'] = $request->deliveryChannelId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetMultiAccountDeliveryChannelStatistics',
            'version' => '2022-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetMultiAccountDeliveryChannelStatisticsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the statistics on a multi-account delivery channel.
     *
     * @param request - GetMultiAccountDeliveryChannelStatisticsRequest
     *
     * @returns GetMultiAccountDeliveryChannelStatisticsResponse
     *
     * @param GetMultiAccountDeliveryChannelStatisticsRequest $request
     *
     * @return GetMultiAccountDeliveryChannelStatisticsResponse
     */
    public function getMultiAccountDeliveryChannelStatistics($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMultiAccountDeliveryChannelStatisticsWithOptions($request, $runtime);
    }

    /**
     * 获取跨账号资源中心服务状态
     *
     * @param request - GetMultiAccountResourceCenterServiceStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetMultiAccountResourceCenterServiceStatusResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return GetMultiAccountResourceCenterServiceStatusResponse
     */
    public function getMultiAccountResourceCenterServiceStatusWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'GetMultiAccountResourceCenterServiceStatus',
            'version' => '2022-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetMultiAccountResourceCenterServiceStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取跨账号资源中心服务状态
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
     *
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
            'action' => 'GetMultiAccountResourceConfiguration',
            'version' => '2022-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetMultiAccountResourceConfigurationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the configurations of a resource within the management account or a member of a resource directory.
     *
     * @param request - GetMultiAccountResourceConfigurationRequest
     *
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
     * Queries the number of resources within the management account and multiple members of a resource directory.
     *
     * @remarks
     * You can query only resources supported by Resource Center. For more information, see [Services that work with Resource Center](https://help.aliyun.com/document_detail/477798.html).
     *
     * @param request - GetMultiAccountResourceCountsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetMultiAccountResourceCountsResponse
     *
     * @param GetMultiAccountResourceCountsRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return GetMultiAccountResourceCountsResponse
     */
    public function getMultiAccountResourceCountsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->filter) {
            @$query['Filter'] = $request->filter;
        }

        if (null !== $request->groupByKey) {
            @$query['GroupByKey'] = $request->groupByKey;
        }

        if (null !== $request->scope) {
            @$query['Scope'] = $request->scope;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetMultiAccountResourceCounts',
            'version' => '2022-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetMultiAccountResourceCountsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the number of resources within the management account and multiple members of a resource directory.
     *
     * @remarks
     * You can query only resources supported by Resource Center. For more information, see [Services that work with Resource Center](https://help.aliyun.com/document_detail/477798.html).
     *
     * @param request - GetMultiAccountResourceCountsRequest
     *
     * @returns GetMultiAccountResourceCountsResponse
     *
     * @param GetMultiAccountResourceCountsRequest $request
     *
     * @return GetMultiAccountResourceCountsResponse
     */
    public function getMultiAccountResourceCounts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMultiAccountResourceCountsWithOptions($request, $runtime);
    }

    /**
     * Queries the status of the Resource Center service.
     *
     * @param request - GetResourceCenterServiceStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetResourceCenterServiceStatusResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return GetResourceCenterServiceStatusResponse
     */
    public function getResourceCenterServiceStatusWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'GetResourceCenterServiceStatus',
            'version' => '2022-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetResourceCenterServiceStatusResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * 获取资源配置.
     *
     * @param request - GetResourceConfigurationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'action' => 'GetResourceConfiguration',
            'version' => '2022-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetResourceConfigurationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取资源配置.
     *
     * @param request - GetResourceConfigurationRequest
     *
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
     * Queries the number of resources in your account that you have permission to access.
     *
     * @remarks
     * - You can query the number of resources in your account that you have permission to access.
     * - You can query only the [Alibaba Cloud services and resource types that are supported by Resource Center](https://help.aliyun.com/document_detail/477798.html).
     *
     * @param request - GetResourceCountsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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

        if (null !== $request->includeDeletedResources) {
            @$query['IncludeDeletedResources'] = $request->includeDeletedResources;
        }

        if (null !== $request->searchExpression) {
            @$query['SearchExpression'] = $request->searchExpression;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetResourceCounts',
            'version' => '2022-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetResourceCountsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the number of resources in your account that you have permission to access.
     *
     * @remarks
     * - You can query the number of resources in your account that you have permission to access.
     * - You can query only the [Alibaba Cloud services and resource types that are supported by Resource Center](https://help.aliyun.com/document_detail/477798.html).
     *
     * @param request - GetResourceCountsRequest
     *
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
     *
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
            'action' => 'GetSavedQuery',
            'version' => '2022-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetSavedQueryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about a custom query template.
     *
     * @param request - GetSavedQueryRequest
     *
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
     * Queries a list of delivery channels within the current account.
     *
     * @param request - ListDeliveryChannelsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListDeliveryChannelsResponse
     *
     * @param ListDeliveryChannelsRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ListDeliveryChannelsResponse
     */
    public function listDeliveryChannelsWithOptions($request, $runtime)
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
            'action' => 'ListDeliveryChannels',
            'version' => '2022-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListDeliveryChannelsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of delivery channels within the current account.
     *
     * @param request - ListDeliveryChannelsRequest
     *
     * @returns ListDeliveryChannelsResponse
     *
     * @param ListDeliveryChannelsRequest $request
     *
     * @return ListDeliveryChannelsResponse
     */
    public function listDeliveryChannels($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDeliveryChannelsWithOptions($request, $runtime);
    }

    /**
     * Queries all sample query templates.
     *
     * @param request - ListExampleQueriesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'action' => 'ListExampleQueries',
            'version' => '2022-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListExampleQueriesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries all sample query templates.
     *
     * @param request - ListExampleQueriesRequest
     *
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
     * 获取过滤器列表.
     *
     * @param request - ListFiltersRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListFiltersResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return ListFiltersResponse
     */
    public function listFiltersWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'ListFilters',
            'version' => '2022-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListFiltersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取过滤器列表.
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
     * Queries a list of delivery channels in resource directory mode.
     *
     * @param request - ListMultiAccountDeliveryChannelsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListMultiAccountDeliveryChannelsResponse
     *
     * @param ListMultiAccountDeliveryChannelsRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return ListMultiAccountDeliveryChannelsResponse
     */
    public function listMultiAccountDeliveryChannelsWithOptions($request, $runtime)
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
            'action' => 'ListMultiAccountDeliveryChannels',
            'version' => '2022-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListMultiAccountDeliveryChannelsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of delivery channels in resource directory mode.
     *
     * @param request - ListMultiAccountDeliveryChannelsRequest
     *
     * @returns ListMultiAccountDeliveryChannelsResponse
     *
     * @param ListMultiAccountDeliveryChannelsRequest $request
     *
     * @return ListMultiAccountDeliveryChannelsResponse
     */
    public function listMultiAccountDeliveryChannels($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listMultiAccountDeliveryChannelsWithOptions($request, $runtime);
    }

    /**
     * Queries the resource groups within the management account or a member in a resource directory.
     *
     * @param request - ListMultiAccountResourceGroupsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'action' => 'ListMultiAccountResourceGroups',
            'version' => '2022-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListMultiAccountResourceGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the resource groups within the management account or a member in a resource directory.
     *
     * @param request - ListMultiAccountResourceGroupsRequest
     *
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
     * 跨账号列出资源关系.
     *
     * @param request - ListMultiAccountResourceRelationshipsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListMultiAccountResourceRelationshipsResponse
     *
     * @param ListMultiAccountResourceRelationshipsRequest $request
     * @param RuntimeOptions                               $runtime
     *
     * @return ListMultiAccountResourceRelationshipsResponse
     */
    public function listMultiAccountResourceRelationshipsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->relatedResourceFilter) {
            @$query['RelatedResourceFilter'] = $request->relatedResourceFilter;
        }

        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->scope) {
            @$query['Scope'] = $request->scope;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListMultiAccountResourceRelationships',
            'version' => '2022-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListMultiAccountResourceRelationshipsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 跨账号列出资源关系.
     *
     * @param request - ListMultiAccountResourceRelationshipsRequest
     *
     * @returns ListMultiAccountResourceRelationshipsResponse
     *
     * @param ListMultiAccountResourceRelationshipsRequest $request
     *
     * @return ListMultiAccountResourceRelationshipsResponse
     */
    public function listMultiAccountResourceRelationships($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listMultiAccountResourceRelationshipsWithOptions($request, $runtime);
    }

    /**
     * 查询多账号标签键.
     *
     * @param request - ListMultiAccountTagKeysRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'action' => 'ListMultiAccountTagKeys',
            'version' => '2022-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListMultiAccountTagKeysResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询多账号标签键.
     *
     * @param request - ListMultiAccountTagKeysRequest
     *
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
     * 查询多账号标签值
     *
     * @param request - ListMultiAccountTagValuesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'action' => 'ListMultiAccountTagValues',
            'version' => '2022-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListMultiAccountTagValuesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询多账号标签值
     *
     * @param request - ListMultiAccountTagValuesRequest
     *
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
     * 列出资源关系.
     *
     * @param request - ListResourceRelationshipsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListResourceRelationshipsResponse
     *
     * @param ListResourceRelationshipsRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ListResourceRelationshipsResponse
     */
    public function listResourceRelationshipsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->relatedResourceFilter) {
            @$query['RelatedResourceFilter'] = $request->relatedResourceFilter;
        }

        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListResourceRelationships',
            'version' => '2022-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListResourceRelationshipsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 列出资源关系.
     *
     * @param request - ListResourceRelationshipsRequest
     *
     * @returns ListResourceRelationshipsResponse
     *
     * @param ListResourceRelationshipsRequest $request
     *
     * @return ListResourceRelationshipsResponse
     */
    public function listResourceRelationships($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listResourceRelationshipsWithOptions($request, $runtime);
    }

    /**
     * Queries the metadata of resource types.
     *
     * @param request - ListResourceTypesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'action' => 'ListResourceTypes',
            'version' => '2022-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListResourceTypesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the metadata of resource types.
     *
     * @param request - ListResourceTypesRequest
     *
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
     *
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
            'action' => 'ListSavedQueries',
            'version' => '2022-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListSavedQueriesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries all custom query templates.
     *
     * @param request - ListSavedQueriesRequest
     *
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
     *
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
            'action' => 'ListTagKeys',
            'version' => '2022-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListTagKeysResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the tag keys of resources within the current account.
     *
     * @param request - ListTagKeysRequest
     *
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
     * 查询标签值
     *
     * @param request - ListTagValuesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'action' => 'ListTagValues',
            'version' => '2022-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListTagValuesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询标签值
     *
     * @param request - ListTagValuesRequest
     *
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
     * Searches for resources in the management account and multiple member accounts of a resource directory.
     *
     * @remarks
     * - You can search only for [Services that work with Resource Center](https://help.aliyun.com/document_detail/477798.html).
     * - To search for resources across accounts as a RAM user or RAM role, you must have been attached the `resourcecenter:SearchMultiAccountResources` policy. For more information, see [Grant a RAM user the permissions to use Resource Center](https://help.aliyun.com/document_detail/600556.html).
     * - By default, this operation returns a maximum of 20 entries. To change the maximum number of entries that can be returned, specify the `MaxResults` parameter.
     * - If the response does not include `NextToken`, no more data is available. To query the next page of results, set the `NextToken` parameter to the value that was returned from the previous call. If you do not specify the `NextToken` parameter, the first page of data is returned by default.
     * - You can set one or more filter conditions to narrow the search scope. For information about supported filter parameters and matching methods, see the information below. Multiple filter conditions are joined by a logical `AND`. Only resources that meet all filter conditions are returned. The values within a single filter condition are joined by a logical `OR`. Resources that meet any value for a filter condition are returned.
     * - For more query examples, visit <props="china">[示例中心](https://api.aliyun.com/api-tools/demo/ResourceCenter) <props="intl">[OpenAPI Portal](https://api.alibabacloud.com/api-tools/demo/ResourceCenter).
     *
     * @param request - SearchMultiAccountResourcesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'action' => 'SearchMultiAccountResources',
            'version' => '2022-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SearchMultiAccountResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Searches for resources in the management account and multiple member accounts of a resource directory.
     *
     * @remarks
     * - You can search only for [Services that work with Resource Center](https://help.aliyun.com/document_detail/477798.html).
     * - To search for resources across accounts as a RAM user or RAM role, you must have been attached the `resourcecenter:SearchMultiAccountResources` policy. For more information, see [Grant a RAM user the permissions to use Resource Center](https://help.aliyun.com/document_detail/600556.html).
     * - By default, this operation returns a maximum of 20 entries. To change the maximum number of entries that can be returned, specify the `MaxResults` parameter.
     * - If the response does not include `NextToken`, no more data is available. To query the next page of results, set the `NextToken` parameter to the value that was returned from the previous call. If you do not specify the `NextToken` parameter, the first page of data is returned by default.
     * - You can set one or more filter conditions to narrow the search scope. For information about supported filter parameters and matching methods, see the information below. Multiple filter conditions are joined by a logical `AND`. Only resources that meet all filter conditions are returned. The values within a single filter condition are joined by a logical `OR`. Resources that meet any value for a filter condition are returned.
     * - For more query examples, visit <props="china">[示例中心](https://api.aliyun.com/api-tools/demo/ResourceCenter) <props="intl">[OpenAPI Portal](https://api.alibabacloud.com/api-tools/demo/ResourceCenter).
     *
     * @param request - SearchMultiAccountResourcesRequest
     *
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
     * Searches for resources in your current account that you are permitted to access.
     *
     * @remarks
     * - You can search only for resources in your current account that you are permitted to access.
     * - You can search only for the [Alibaba Cloud services and resource types that are supported by Resource Center](https://help.aliyun.com/document_detail/477798.html).
     * - By default, the SearchResources operation returns a maximum of 20 entries. You can specify the `MaxResults` parameter to change the maximum number of entries that are returned.
     * - If the response does not include a `NextToken` value, no more results are available. To retrieve the next page of results, include the `NextToken` value from the previous response in your next request. If you do not specify the `NextToken` parameter, the first page of results is returned.
     * - You can set one or more filter conditions to narrow the search scope. For information about the supported filter parameters and matching methods, see the following sections. Multiple filter conditions are combined by a logical `AND`. Only resources that meet all filter conditions are returned. The values within a filter condition are combined by a logical `OR`. Resources that meet any value of the filter condition are returned.
     * - For more query examples, see [API Explorer](https://api.aliyun.com/api-tools/demo/ResourceCenter).
     *
     * @param request - SearchResourcesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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

        if (null !== $request->includeDeletedResources) {
            @$query['IncludeDeletedResources'] = $request->includeDeletedResources;
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

        if (null !== $request->searchExpression) {
            @$query['SearchExpression'] = $request->searchExpression;
        }

        if (null !== $request->sortCriterion) {
            @$query['SortCriterion'] = $request->sortCriterion;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SearchResources',
            'version' => '2022-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SearchResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Searches for resources in your current account that you are permitted to access.
     *
     * @remarks
     * - You can search only for resources in your current account that you are permitted to access.
     * - You can search only for the [Alibaba Cloud services and resource types that are supported by Resource Center](https://help.aliyun.com/document_detail/477798.html).
     * - By default, the SearchResources operation returns a maximum of 20 entries. You can specify the `MaxResults` parameter to change the maximum number of entries that are returned.
     * - If the response does not include a `NextToken` value, no more results are available. To retrieve the next page of results, include the `NextToken` value from the previous response in your next request. If you do not specify the `NextToken` parameter, the first page of results is returned.
     * - You can set one or more filter conditions to narrow the search scope. For information about the supported filter parameters and matching methods, see the following sections. Multiple filter conditions are combined by a logical `AND`. Only resources that meet all filter conditions are returned. The values within a filter condition are combined by a logical `OR`. Resources that meet any value of the filter condition are returned.
     * - For more query examples, see [API Explorer](https://api.aliyun.com/api-tools/demo/ResourceCenter).
     *
     * @param request - SearchResourcesRequest
     *
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
     * 更新投递渠道.
     *
     * @param request - UpdateDeliveryChannelRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateDeliveryChannelResponse
     *
     * @param UpdateDeliveryChannelRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return UpdateDeliveryChannelResponse
     */
    public function updateDeliveryChannelWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->deliveryChannelDescription) {
            @$query['DeliveryChannelDescription'] = $request->deliveryChannelDescription;
        }

        if (null !== $request->deliveryChannelFilter) {
            @$query['DeliveryChannelFilter'] = $request->deliveryChannelFilter;
        }

        if (null !== $request->deliveryChannelId) {
            @$query['DeliveryChannelId'] = $request->deliveryChannelId;
        }

        if (null !== $request->deliveryChannelName) {
            @$query['DeliveryChannelName'] = $request->deliveryChannelName;
        }

        if (null !== $request->resourceChangeDelivery) {
            @$query['ResourceChangeDelivery'] = $request->resourceChangeDelivery;
        }

        if (null !== $request->resourceSnapshotDelivery) {
            @$query['ResourceSnapshotDelivery'] = $request->resourceSnapshotDelivery;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateDeliveryChannel',
            'version' => '2022-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateDeliveryChannelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新投递渠道.
     *
     * @param request - UpdateDeliveryChannelRequest
     *
     * @returns UpdateDeliveryChannelResponse
     *
     * @param UpdateDeliveryChannelRequest $request
     *
     * @return UpdateDeliveryChannelResponse
     */
    public function updateDeliveryChannel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateDeliveryChannelWithOptions($request, $runtime);
    }

    /**
     * Updates a filter.
     *
     * @param request - UpdateFilterRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'action' => 'UpdateFilter',
            'version' => '2022-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateFilterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates a filter.
     *
     * @param request - UpdateFilterRequest
     *
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
     * Updates a multi-account delivery channel.
     *
     * @remarks
     * Resource delivery supports the delivery of resource configuration change events and scheduled resource snapshots.
     * Scheduled resource snapshots support the following delivery scenarios:
     * - Standard delivery: Leave the `ResourceSnapshotDelivery.CustomExpression` parameter empty.
     * - Custom delivery: Set the `ResourceSnapshotDelivery.CustomExpression` parameter to an appropriate value.
     *
     * @param request - UpdateMultiAccountDeliveryChannelRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateMultiAccountDeliveryChannelResponse
     *
     * @param UpdateMultiAccountDeliveryChannelRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return UpdateMultiAccountDeliveryChannelResponse
     */
    public function updateMultiAccountDeliveryChannelWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->deliveryChannelDescription) {
            @$query['DeliveryChannelDescription'] = $request->deliveryChannelDescription;
        }

        if (null !== $request->deliveryChannelFilter) {
            @$query['DeliveryChannelFilter'] = $request->deliveryChannelFilter;
        }

        if (null !== $request->deliveryChannelId) {
            @$query['DeliveryChannelId'] = $request->deliveryChannelId;
        }

        if (null !== $request->deliveryChannelName) {
            @$query['DeliveryChannelName'] = $request->deliveryChannelName;
        }

        if (null !== $request->resourceChangeDelivery) {
            @$query['ResourceChangeDelivery'] = $request->resourceChangeDelivery;
        }

        if (null !== $request->resourceSnapshotDelivery) {
            @$query['ResourceSnapshotDelivery'] = $request->resourceSnapshotDelivery;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateMultiAccountDeliveryChannel',
            'version' => '2022-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateMultiAccountDeliveryChannelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates a multi-account delivery channel.
     *
     * @remarks
     * Resource delivery supports the delivery of resource configuration change events and scheduled resource snapshots.
     * Scheduled resource snapshots support the following delivery scenarios:
     * - Standard delivery: Leave the `ResourceSnapshotDelivery.CustomExpression` parameter empty.
     * - Custom delivery: Set the `ResourceSnapshotDelivery.CustomExpression` parameter to an appropriate value.
     *
     * @param request - UpdateMultiAccountDeliveryChannelRequest
     *
     * @returns UpdateMultiAccountDeliveryChannelResponse
     *
     * @param UpdateMultiAccountDeliveryChannelRequest $request
     *
     * @return UpdateMultiAccountDeliveryChannelResponse
     */
    public function updateMultiAccountDeliveryChannel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateMultiAccountDeliveryChannelWithOptions($request, $runtime);
    }

    /**
     * Updates a custom query template.
     *
     * @param request - UpdateSavedQueryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
            'action' => 'UpdateSavedQuery',
            'version' => '2022-12-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateSavedQueryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates a custom query template.
     *
     * @param request - UpdateSavedQueryRequest
     *
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
