<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Workorder\V20201210;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\Workorder\V20201210\Models\GetTicketTemplateRequest;
use AlibabaCloud\SDK\Workorder\V20201210\Models\GetTicketTemplateResponse;
use AlibabaCloud\SDK\Workorder\V20201210\Models\IsFirstBbsTicketRequest;
use AlibabaCloud\SDK\Workorder\V20201210\Models\IsFirstBbsTicketResponse;
use AlibabaCloud\SDK\Workorder\V20201210\Models\SuggestCategoryRequest;
use AlibabaCloud\SDK\Workorder\V20201210\Models\SuggestCategoryResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Workorder extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'central';
        $this->_endpointMap = [
            'ap-northeast-1' => 'workorder.ap-northeast-1.aliyuncs.com',
            'ap-southeast-1' => 'workorder.ap-southeast-1.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('workorder', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param request - GetTicketTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetTicketTemplateResponse
     *
     * @param GetTicketTemplateRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetTicketTemplateResponse
     */
    public function getTicketTemplateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->categoryId) {
            @$query['CategoryId'] = $request->categoryId;
        }

        if (null !== $request->cna) {
            @$query['Cna'] = $request->cna;
        }

        if (null !== $request->distributionChannel) {
            @$query['DistributionChannel'] = $request->distributionChannel;
        }

        if (null !== $request->referrer) {
            @$query['Referrer'] = $request->referrer;
        }

        if (null !== $request->subDistributionChannel) {
            @$query['SubDistributionChannel'] = $request->subDistributionChannel;
        }

        if (null !== $request->XGatewayExtendInfo) {
            @$query['XGatewayExtendInfo'] = $request->XGatewayExtendInfo;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetTicketTemplate',
            'version' => '2020-12-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetTicketTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - GetTicketTemplateRequest
     *
     * @returns GetTicketTemplateResponse
     *
     * @param GetTicketTemplateRequest $request
     *
     * @return GetTicketTemplateResponse
     */
    public function getTicketTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTicketTemplateWithOptions($request, $runtime);
    }

    /**
     * 是否首次访问BBS工单.
     *
     * @param request - IsFirstBbsTicketRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns IsFirstBbsTicketResponse
     *
     * @param IsFirstBbsTicketRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return IsFirstBbsTicketResponse
     */
    public function isFirstBbsTicketWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cna) {
            @$query['Cna'] = $request->cna;
        }

        if (null !== $request->distributionChannel) {
            @$query['DistributionChannel'] = $request->distributionChannel;
        }

        if (null !== $request->referrer) {
            @$query['Referrer'] = $request->referrer;
        }

        if (null !== $request->subDistributionChannel) {
            @$query['SubDistributionChannel'] = $request->subDistributionChannel;
        }

        if (null !== $request->XGatewayExtendInfo) {
            @$query['XGatewayExtendInfo'] = $request->XGatewayExtendInfo;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'IsFirstBbsTicket',
            'version' => '2020-12-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return IsFirstBbsTicketResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 是否首次访问BBS工单.
     *
     * @param request - IsFirstBbsTicketRequest
     *
     * @returns IsFirstBbsTicketResponse
     *
     * @param IsFirstBbsTicketRequest $request
     *
     * @return IsFirstBbsTicketResponse
     */
    public function isFirstBbsTicket($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->isFirstBbsTicketWithOptions($request, $runtime);
    }

    /**
     * @param request - SuggestCategoryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SuggestCategoryResponse
     *
     * @param SuggestCategoryRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return SuggestCategoryResponse
     */
    public function suggestCategoryWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cna) {
            @$query['Cna'] = $request->cna;
        }

        if (null !== $request->content) {
            @$query['Content'] = $request->content;
        }

        if (null !== $request->distributionChannel) {
            @$query['DistributionChannel'] = $request->distributionChannel;
        }

        if (null !== $request->referrer) {
            @$query['Referrer'] = $request->referrer;
        }

        if (null !== $request->subDistributionChannel) {
            @$query['SubDistributionChannel'] = $request->subDistributionChannel;
        }

        if (null !== $request->ticketId) {
            @$query['TicketId'] = $request->ticketId;
        }

        if (null !== $request->topN) {
            @$query['TopN'] = $request->topN;
        }

        if (null !== $request->useHotSuggestCatchAll) {
            @$query['UseHotSuggestCatchAll'] = $request->useHotSuggestCatchAll;
        }

        if (null !== $request->XGatewayExtendInfo) {
            @$query['XGatewayExtendInfo'] = $request->XGatewayExtendInfo;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SuggestCategory',
            'version' => '2020-12-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SuggestCategoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - SuggestCategoryRequest
     *
     * @returns SuggestCategoryResponse
     *
     * @param SuggestCategoryRequest $request
     *
     * @return SuggestCategoryResponse
     */
    public function suggestCategory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->suggestCategoryWithOptions($request, $runtime);
    }
}
