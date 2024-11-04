<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListAlertActionsRequest;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListAlertActionsResponse;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListAlertActionsShrinkRequest;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Cms extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('cms', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @summary 查询告警动作
     *  *
     * @param ListAlertActionsRequest $tmpReq  ListAlertActionsRequest
     * @param string[]                $headers map
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return ListAlertActionsResponse ListAlertActionsResponse
     */
    public function listAlertActionsWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListAlertActionsShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->alertActionIds)) {
            $request->alertActionIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->alertActionIds, 'alertActionIds', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->alertActionIdsShrink)) {
            $query['alertActionIds'] = $request->alertActionIdsShrink;
        }
        if (!Utils::isUnset($request->alertActionName)) {
            $query['alertActionName'] = $request->alertActionName;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['pageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->type)) {
            $query['type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListAlertActions',
            'version'     => '2024-03-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/alertActions',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListAlertActionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询告警动作
     *  *
     * @param ListAlertActionsRequest $request ListAlertActionsRequest
     *
     * @return ListAlertActionsResponse ListAlertActionsResponse
     */
    public function listAlertActions($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listAlertActionsWithOptions($request, $headers, $runtime);
    }
}
