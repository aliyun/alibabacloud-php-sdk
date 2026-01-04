<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Datahub\V20240620;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\Datahub\V20240620\Models\GetConnectorRequest;
use AlibabaCloud\SDK\Datahub\V20240620\Models\GetConnectorResponse;
use AlibabaCloud\SDK\Datahub\V20240620\Models\GetGroupRequest;
use AlibabaCloud\SDK\Datahub\V20240620\Models\GetGroupResponse;
use AlibabaCloud\SDK\Datahub\V20240620\Models\GetProjectRequest;
use AlibabaCloud\SDK\Datahub\V20240620\Models\GetProjectResponse;
use AlibabaCloud\SDK\Datahub\V20240620\Models\GetSchemaRequest;
use AlibabaCloud\SDK\Datahub\V20240620\Models\GetSchemaResponse;
use AlibabaCloud\SDK\Datahub\V20240620\Models\GetSubscriptionRequest;
use AlibabaCloud\SDK\Datahub\V20240620\Models\GetSubscriptionResponse;
use AlibabaCloud\SDK\Datahub\V20240620\Models\GetTopicRequest;
use AlibabaCloud\SDK\Datahub\V20240620\Models\GetTopicResponse;
use AlibabaCloud\SDK\Datahub\V20240620\Models\ListConnectorsRequest;
use AlibabaCloud\SDK\Datahub\V20240620\Models\ListConnectorsResponse;
use AlibabaCloud\SDK\Datahub\V20240620\Models\ListGroupsRequest;
use AlibabaCloud\SDK\Datahub\V20240620\Models\ListGroupsResponse;
use AlibabaCloud\SDK\Datahub\V20240620\Models\ListProjectsRequest;
use AlibabaCloud\SDK\Datahub\V20240620\Models\ListProjectsResponse;
use AlibabaCloud\SDK\Datahub\V20240620\Models\ListSchemasRequest;
use AlibabaCloud\SDK\Datahub\V20240620\Models\ListSchemasResponse;
use AlibabaCloud\SDK\Datahub\V20240620\Models\ListSubscriptionsRequest;
use AlibabaCloud\SDK\Datahub\V20240620\Models\ListSubscriptionsResponse;
use AlibabaCloud\SDK\Datahub\V20240620\Models\ListTopicsRequest;
use AlibabaCloud\SDK\Datahub\V20240620\Models\ListTopicsResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Datahub extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('datahub', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * 查询Connector信息.
     *
     * @param request - GetConnectorRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetConnectorResponse
     *
     * @param GetConnectorRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return GetConnectorResponse
     */
    public function getConnectorWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->connectorId) {
            @$query['ConnectorId'] = $request->connectorId;
        }

        if (null !== $request->projectName) {
            @$query['ProjectName'] = $request->projectName;
        }

        if (null !== $request->topicName) {
            @$query['TopicName'] = $request->topicName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetConnector',
            'version' => '2024-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetConnectorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询Connector信息.
     *
     * @param request - GetConnectorRequest
     *
     * @returns GetConnectorResponse
     *
     * @param GetConnectorRequest $request
     *
     * @return GetConnectorResponse
     */
    public function getConnector($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getConnectorWithOptions($request, $runtime);
    }

    /**
     * 查询Group信息.
     *
     * @param request - GetGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetGroupResponse
     *
     * @param GetGroupRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return GetGroupResponse
     */
    public function getGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->groupName) {
            @$query['GroupName'] = $request->groupName;
        }

        if (null !== $request->projectName) {
            @$query['ProjectName'] = $request->projectName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetGroup',
            'version' => '2024-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询Group信息.
     *
     * @param request - GetGroupRequest
     *
     * @returns GetGroupResponse
     *
     * @param GetGroupRequest $request
     *
     * @return GetGroupResponse
     */
    public function getGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getGroupWithOptions($request, $runtime);
    }

    /**
     * 查询Project资源详细信息.
     *
     * @param request - GetProjectRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetProjectResponse
     *
     * @param GetProjectRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return GetProjectResponse
     */
    public function getProjectWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->projectName) {
            @$query['ProjectName'] = $request->projectName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetProject',
            'version' => '2024-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetProjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询Project资源详细信息.
     *
     * @param request - GetProjectRequest
     *
     * @returns GetProjectResponse
     *
     * @param GetProjectRequest $request
     *
     * @return GetProjectResponse
     */
    public function getProject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getProjectWithOptions($request, $runtime);
    }

    /**
     * 查询Schema信息.
     *
     * @param request - GetSchemaRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetSchemaResponse
     *
     * @param GetSchemaRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return GetSchemaResponse
     */
    public function getSchemaWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->projectName) {
            @$query['ProjectName'] = $request->projectName;
        }

        if (null !== $request->topicName) {
            @$query['TopicName'] = $request->topicName;
        }

        if (null !== $request->versionId) {
            @$query['VersionId'] = $request->versionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetSchema',
            'version' => '2024-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetSchemaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询Schema信息.
     *
     * @param request - GetSchemaRequest
     *
     * @returns GetSchemaResponse
     *
     * @param GetSchemaRequest $request
     *
     * @return GetSchemaResponse
     */
    public function getSchema($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSchemaWithOptions($request, $runtime);
    }

    /**
     * 查询Subscription信息.
     *
     * @param request - GetSubscriptionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetSubscriptionResponse
     *
     * @param GetSubscriptionRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetSubscriptionResponse
     */
    public function getSubscriptionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->projectName) {
            @$query['ProjectName'] = $request->projectName;
        }

        if (null !== $request->subscriptionId) {
            @$query['SubscriptionId'] = $request->subscriptionId;
        }

        if (null !== $request->topicName) {
            @$query['TopicName'] = $request->topicName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetSubscription',
            'version' => '2024-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetSubscriptionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询Subscription信息.
     *
     * @param request - GetSubscriptionRequest
     *
     * @returns GetSubscriptionResponse
     *
     * @param GetSubscriptionRequest $request
     *
     * @return GetSubscriptionResponse
     */
    public function getSubscription($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSubscriptionWithOptions($request, $runtime);
    }

    /**
     * 查询Topic信息.
     *
     * @param request - GetTopicRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetTopicResponse
     *
     * @param GetTopicRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return GetTopicResponse
     */
    public function getTopicWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->projectName) {
            @$query['ProjectName'] = $request->projectName;
        }

        if (null !== $request->topicName) {
            @$query['TopicName'] = $request->topicName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetTopic',
            'version' => '2024-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetTopicResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询Topic信息.
     *
     * @param request - GetTopicRequest
     *
     * @returns GetTopicResponse
     *
     * @param GetTopicRequest $request
     *
     * @return GetTopicResponse
     */
    public function getTopic($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTopicWithOptions($request, $runtime);
    }

    /**
     * 查询Connector列表信息.
     *
     * @param request - ListConnectorsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListConnectorsResponse
     *
     * @param ListConnectorsRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ListConnectorsResponse
     */
    public function listConnectorsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->keyword) {
            @$query['Keyword'] = $request->keyword;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->projectName) {
            @$query['ProjectName'] = $request->projectName;
        }

        if (null !== $request->pure) {
            @$query['Pure'] = $request->pure;
        }

        if (null !== $request->skip) {
            @$query['Skip'] = $request->skip;
        }

        if (null !== $request->topicName) {
            @$query['TopicName'] = $request->topicName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListConnectors',
            'version' => '2024-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListConnectorsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询Connector列表信息.
     *
     * @param request - ListConnectorsRequest
     *
     * @returns ListConnectorsResponse
     *
     * @param ListConnectorsRequest $request
     *
     * @return ListConnectorsResponse
     */
    public function listConnectors($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listConnectorsWithOptions($request, $runtime);
    }

    /**
     * 查询Group列表信息.
     *
     * @param request - ListGroupsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListGroupsResponse
     *
     * @param ListGroupsRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return ListGroupsResponse
     */
    public function listGroupsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->keyword) {
            @$query['Keyword'] = $request->keyword;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->projectName) {
            @$query['ProjectName'] = $request->projectName;
        }

        if (null !== $request->pure) {
            @$query['Pure'] = $request->pure;
        }

        if (null !== $request->skip) {
            @$query['Skip'] = $request->skip;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListGroups',
            'version' => '2024-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询Group列表信息.
     *
     * @param request - ListGroupsRequest
     *
     * @returns ListGroupsResponse
     *
     * @param ListGroupsRequest $request
     *
     * @return ListGroupsResponse
     */
    public function listGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listGroupsWithOptions($request, $runtime);
    }

    /**
     * 查询Project列表信息.
     *
     * @param request - ListProjectsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListProjectsResponse
     *
     * @param ListProjectsRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ListProjectsResponse
     */
    public function listProjectsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->keyword) {
            @$query['Keyword'] = $request->keyword;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->pure) {
            @$query['Pure'] = $request->pure;
        }

        if (null !== $request->skip) {
            @$query['Skip'] = $request->skip;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListProjects',
            'version' => '2024-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListProjectsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询Project列表信息.
     *
     * @param request - ListProjectsRequest
     *
     * @returns ListProjectsResponse
     *
     * @param ListProjectsRequest $request
     *
     * @return ListProjectsResponse
     */
    public function listProjects($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listProjectsWithOptions($request, $runtime);
    }

    /**
     * 查询Schema列表信息.
     *
     * @param request - ListSchemasRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListSchemasResponse
     *
     * @param ListSchemasRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ListSchemasResponse
     */
    public function listSchemasWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->projectName) {
            @$query['ProjectName'] = $request->projectName;
        }

        if (null !== $request->skip) {
            @$query['Skip'] = $request->skip;
        }

        if (null !== $request->topicName) {
            @$query['TopicName'] = $request->topicName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListSchemas',
            'version' => '2024-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListSchemasResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询Schema列表信息.
     *
     * @param request - ListSchemasRequest
     *
     * @returns ListSchemasResponse
     *
     * @param ListSchemasRequest $request
     *
     * @return ListSchemasResponse
     */
    public function listSchemas($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSchemasWithOptions($request, $runtime);
    }

    /**
     * 查询Subscription列表信息.
     *
     * @param request - ListSubscriptionsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListSubscriptionsResponse
     *
     * @param ListSubscriptionsRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ListSubscriptionsResponse
     */
    public function listSubscriptionsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->keyword) {
            @$query['Keyword'] = $request->keyword;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->projectName) {
            @$query['ProjectName'] = $request->projectName;
        }

        if (null !== $request->skip) {
            @$query['Skip'] = $request->skip;
        }

        if (null !== $request->topicName) {
            @$query['TopicName'] = $request->topicName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListSubscriptions',
            'version' => '2024-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListSubscriptionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询Subscription列表信息.
     *
     * @param request - ListSubscriptionsRequest
     *
     * @returns ListSubscriptionsResponse
     *
     * @param ListSubscriptionsRequest $request
     *
     * @return ListSubscriptionsResponse
     */
    public function listSubscriptions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSubscriptionsWithOptions($request, $runtime);
    }

    /**
     * 查询Topic列表信息.
     *
     * @param request - ListTopicsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTopicsResponse
     *
     * @param ListTopicsRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return ListTopicsResponse
     */
    public function listTopicsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->keyword) {
            @$query['Keyword'] = $request->keyword;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->projectName) {
            @$query['ProjectName'] = $request->projectName;
        }

        if (null !== $request->pure) {
            @$query['Pure'] = $request->pure;
        }

        if (null !== $request->skip) {
            @$query['Skip'] = $request->skip;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListTopics',
            'version' => '2024-06-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListTopicsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询Topic列表信息.
     *
     * @param request - ListTopicsRequest
     *
     * @returns ListTopicsResponse
     *
     * @param ListTopicsRequest $request
     *
     * @return ListTopicsResponse
     */
    public function listTopics($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTopicsWithOptions($request, $runtime);
    }
}
