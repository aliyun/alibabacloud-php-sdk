<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Workorder\V20201210;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Workorder\V20201210\Models\GetTicketTemplateRequest;
use AlibabaCloud\SDK\Workorder\V20201210\Models\GetTicketTemplateResponse;
use AlibabaCloud\SDK\Workorder\V20201210\Models\IsFirstBbsTicketResponse;
use AlibabaCloud\SDK\Workorder\V20201210\Models\SuggestCategoryRequest;
use AlibabaCloud\SDK\Workorder\V20201210\Models\SuggestCategoryResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Workorder extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'central';
        $this->_endpointMap  = [
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
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_(@$endpointMap[$regionId])) {
            return @$endpointMap[$regionId];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * @param GetTicketTemplateRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetTicketTemplateResponse
     */
    public function getTicketTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->categoryId)) {
            $query['CategoryId'] = $request->categoryId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetTicketTemplate',
            'version'     => '2020-12-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetTicketTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param RuntimeOptions $runtime
     *
     * @return IsFirstBbsTicketResponse
     */
    public function isFirstBbsTicketWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'IsFirstBbsTicket',
            'version'     => '2020-12-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return IsFirstBbsTicketResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return IsFirstBbsTicketResponse
     */
    public function isFirstBbsTicket()
    {
        $runtime = new RuntimeOptions([]);

        return $this->isFirstBbsTicketWithOptions($runtime);
    }

    /**
     * @param SuggestCategoryRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return SuggestCategoryResponse
     */
    public function suggestCategoryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->content)) {
            $query['Content'] = $request->content;
        }
        if (!Utils::isUnset($request->ticketId)) {
            $query['TicketId'] = $request->ticketId;
        }
        if (!Utils::isUnset($request->topN)) {
            $query['TopN'] = $request->topN;
        }
        if (!Utils::isUnset($request->useHotSuggestCatchAll)) {
            $query['UseHotSuggestCatchAll'] = $request->useHotSuggestCatchAll;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SuggestCategory',
            'version'     => '2020-12-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SuggestCategoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
