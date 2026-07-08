<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentExplorer\V20260317;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\Dara\Url;
use AlibabaCloud\SDK\AgentExplorer\V20260317\Models\GetSkillContentRequest;
use AlibabaCloud\SDK\AgentExplorer\V20260317\Models\GetSkillContentResponse;
use AlibabaCloud\SDK\AgentExplorer\V20260317\Models\ListCategoriesRequest;
use AlibabaCloud\SDK\AgentExplorer\V20260317\Models\ListCategoriesResponse;
use AlibabaCloud\SDK\AgentExplorer\V20260317\Models\SearchSkillsRequest;
use AlibabaCloud\SDK\AgentExplorer\V20260317\Models\SearchSkillsResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class AgentExplorer extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap = [
            'public' => 'agentexplorer.aliyuncs.com',
            'cn-hangzhou' => 'agentexplorer.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('agentexplorer', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * Get the SKILL.md file content of the specified Agent Skill.
     *
     * @param request - GetSkillContentRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetSkillContentResponse
     *
     * @param string                 $skillName
     * @param GetSkillContentRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return GetSkillContentResponse
     */
    public function getSkillContentWithOptions($skillName, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetSkillContent',
            'version' => '2026-03-17',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/skills/' . Url::percentEncode($skillName) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetSkillContentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Get the SKILL.md file content of the specified Agent Skill.
     *
     * @param request - GetSkillContentRequest
     *
     * @returns GetSkillContentResponse
     *
     * @param string                 $skillName
     * @param GetSkillContentRequest $request
     *
     * @return GetSkillContentResponse
     */
    public function getSkillContent($skillName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getSkillContentWithOptions($skillName, $request, $headers, $runtime);
    }

    /**
     * List all Alibaba Cloud Skills categories.
     *
     * @param request - ListCategoriesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListCategoriesResponse
     *
     * @param ListCategoriesRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return ListCategoriesResponse
     */
    public function listCategoriesWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'ListCategories',
            'version' => '2026-03-17',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/categories',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListCategoriesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * List all Alibaba Cloud Skills categories.
     *
     * @param request - ListCategoriesRequest
     *
     * @returns ListCategoriesResponse
     *
     * @param ListCategoriesRequest $request
     *
     * @return ListCategoriesResponse
     */
    public function listCategories($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listCategoriesWithOptions($request, $headers, $runtime);
    }

    /**
     * Searches for Alibaba Cloud Agent Skills by keyword or category.
     *
     * @param request - SearchSkillsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SearchSkillsResponse
     *
     * @param SearchSkillsRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return SearchSkillsResponse
     */
    public function searchSkillsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->categoryCode) {
            @$query['categoryCode'] = $request->categoryCode;
        }

        if (null !== $request->keyword) {
            @$query['keyword'] = $request->keyword;
        }

        if (null !== $request->maxResults) {
            @$query['maxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['nextToken'] = $request->nextToken;
        }

        if (null !== $request->searchMode) {
            @$query['searchMode'] = $request->searchMode;
        }

        if (null !== $request->skip) {
            @$query['skip'] = $request->skip;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SearchSkills',
            'version' => '2026-03-17',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/skills',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return SearchSkillsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Searches for Alibaba Cloud Agent Skills by keyword or category.
     *
     * @param request - SearchSkillsRequest
     *
     * @returns SearchSkillsResponse
     *
     * @param SearchSkillsRequest $request
     *
     * @return SearchSkillsResponse
     */
    public function searchSkills($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->searchSkillsWithOptions($request, $headers, $runtime);
    }
}
