<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imarketing\V20220704;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Imarketing\V20220704\Models\GetUserFinishedAdRequest;
use AlibabaCloud\SDK\Imarketing\V20220704\Models\GetUserFinishedAdResponse;
use AlibabaCloud\SDK\Imarketing\V20220704\Models\ListAdvertisingRequest;
use AlibabaCloud\SDK\Imarketing\V20220704\Models\ListAdvertisingResponse;
use AlibabaCloud\SDK\Imarketing\V20220704\Models\ListAdvertisingShrinkRequest;
use AlibabaCloud\Tea\Tea;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Imarketing extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('imarketing', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param GetUserFinishedAdRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetUserFinishedAdResponse
     */
    public function getUserFinishedAdWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetUserFinishedAd',
            'version'     => '2022-07-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetUserFinishedAdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetUserFinishedAdRequest $request
     *
     * @return GetUserFinishedAdResponse
     */
    public function getUserFinishedAd($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getUserFinishedAdWithOptions($request, $runtime);
    }

    /**
     * @param ListAdvertisingRequest $tmpReq
     * @param RuntimeOptions         $runtime
     *
     * @return ListAdvertisingResponse
     */
    public function listAdvertisingWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListAdvertisingShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->app)) {
            $request->appShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->app), 'App', 'json');
        }
        if (!Utils::isUnset($tmpReq->ext)) {
            $request->extShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->ext, 'Ext', 'json');
        }
        if (!Utils::isUnset($tmpReq->imp)) {
            $request->impShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->imp, 'Imp', 'json');
        }
        if (!Utils::isUnset($tmpReq->user)) {
            $request->userShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->user), 'User', 'json');
        }
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListAdvertising',
            'version'     => '2022-07-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListAdvertisingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListAdvertisingRequest $request
     *
     * @return ListAdvertisingResponse
     */
    public function listAdvertising($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAdvertisingWithOptions($request, $runtime);
    }
}
