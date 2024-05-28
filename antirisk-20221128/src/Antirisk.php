<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Antirisk\V20221128;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Antirisk\V20221128\Models\GetRealTimeRiskInfoRequest;
use AlibabaCloud\SDK\Antirisk\V20221128\Models\GetRealTimeRiskInfoResponse;
use AlibabaCloud\SDK\Antirisk\V20221128\Models\GetZidTagByAtokenRequest;
use AlibabaCloud\SDK\Antirisk\V20221128\Models\GetZidTagByAtokenResponse;
use AlibabaCloud\SDK\Antirisk\V20221128\Models\GetZidTagScoreByAtokenRequest;
use AlibabaCloud\SDK\Antirisk\V20221128\Models\GetZidTagScoreByAtokenResponse;
use AlibabaCloud\SDK\Antirisk\V20221128\Models\ListChannelRiskDetailsRequest;
use AlibabaCloud\SDK\Antirisk\V20221128\Models\ListChannelRiskDetailsResponse;
use AlibabaCloud\SDK\Antirisk\V20221128\Models\ListUninstallDetailRequest;
use AlibabaCloud\SDK\Antirisk\V20221128\Models\ListUninstallDetailResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Antirisk extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('antirisk', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @summary 获取实时反作弊信息
     *  *
     * @param GetRealTimeRiskInfoRequest $request GetRealTimeRiskInfoRequest
     * @param string[]                   $headers map
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return GetRealTimeRiskInfoResponse GetRealTimeRiskInfoResponse
     */
    public function getRealTimeRiskInfoWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->atoken)) {
            $query['atoken'] = $request->atoken;
        }
        if (!Utils::isUnset($request->dataSourceId)) {
            $query['dataSourceId'] = $request->dataSourceId;
        }
        if (!Utils::isUnset($request->extra)) {
            $query['extra'] = $request->extra;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetRealTimeRiskInfo',
            'version'     => '2022-11-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/anti/getRealTimeRiskInfo',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetRealTimeRiskInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取实时反作弊信息
     *  *
     * @param GetRealTimeRiskInfoRequest $request GetRealTimeRiskInfoRequest
     *
     * @return GetRealTimeRiskInfoResponse GetRealTimeRiskInfoResponse
     */
    public function getRealTimeRiskInfo($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getRealTimeRiskInfoWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary atoken换zid+tags
     *  *
     * @param GetZidTagByAtokenRequest $request GetZidTagByAtokenRequest
     * @param string[]                 $headers map
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return GetZidTagByAtokenResponse GetZidTagByAtokenResponse
     */
    public function getZidTagByAtokenWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->atoken)) {
            $query['atoken'] = $request->atoken;
        }
        if (!Utils::isUnset($request->dataSourceId)) {
            $query['dataSourceId'] = $request->dataSourceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetZidTagByAtoken',
            'version'     => '2022-11-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/anti/getZidTagByAtoken',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetZidTagByAtokenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary atoken换zid+tags
     *  *
     * @param GetZidTagByAtokenRequest $request GetZidTagByAtokenRequest
     *
     * @return GetZidTagByAtokenResponse GetZidTagByAtokenResponse
     */
    public function getZidTagByAtoken($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getZidTagByAtokenWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary atoken换zid+tags+风险分
     *  *
     * @param GetZidTagScoreByAtokenRequest $request GetZidTagScoreByAtokenRequest
     * @param string[]                      $headers map
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return GetZidTagScoreByAtokenResponse GetZidTagScoreByAtokenResponse
     */
    public function getZidTagScoreByAtokenWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->atoken)) {
            $query['atoken'] = $request->atoken;
        }
        if (!Utils::isUnset($request->dataSourceId)) {
            $query['dataSourceId'] = $request->dataSourceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetZidTagScoreByAtoken',
            'version'     => '2022-11-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/anti/getZidTagScoreByAtoken',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetZidTagScoreByAtokenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary atoken换zid+tags+风险分
     *  *
     * @param GetZidTagScoreByAtokenRequest $request GetZidTagScoreByAtokenRequest
     *
     * @return GetZidTagScoreByAtokenResponse GetZidTagScoreByAtokenResponse
     */
    public function getZidTagScoreByAtoken($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getZidTagScoreByAtokenWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary  渠道风险明细
     *  *
     * @param ListChannelRiskDetailsRequest $request ListChannelRiskDetailsRequest
     * @param string[]                      $headers map
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return ListChannelRiskDetailsResponse ListChannelRiskDetailsResponse
     */
    public function listChannelRiskDetailsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->channel)) {
            $query['channel'] = $request->channel;
        }
        if (!Utils::isUnset($request->dataSourceId)) {
            $query['dataSourceId'] = $request->dataSourceId;
        }
        if (!Utils::isUnset($request->end)) {
            $query['end'] = $request->end;
        }
        if (!Utils::isUnset($request->isAllChannel)) {
            $query['isAllChannel'] = $request->isAllChannel;
        }
        if (!Utils::isUnset($request->start)) {
            $query['start'] = $request->start;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListChannelRiskDetails',
            'version'     => '2022-11-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/anti/listChannelRiskDetails',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListChannelRiskDetailsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary  渠道风险明细
     *  *
     * @param ListChannelRiskDetailsRequest $request ListChannelRiskDetailsRequest
     *
     * @return ListChannelRiskDetailsResponse ListChannelRiskDetailsResponse
     */
    public function listChannelRiskDetails($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listChannelRiskDetailsWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 卸载明细列表
     *  *
     * @param ListUninstallDetailRequest $request ListUninstallDetailRequest
     * @param string[]                   $headers map
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return ListUninstallDetailResponse ListUninstallDetailResponse
     */
    public function listUninstallDetailWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dataSourceId)) {
            $query['dataSourceId'] = $request->dataSourceId;
        }
        if (!Utils::isUnset($request->endDs)) {
            $query['endDs'] = $request->endDs;
        }
        if (!Utils::isUnset($request->startDs)) {
            $query['startDs'] = $request->startDs;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListUninstallDetail',
            'version'     => '2022-11-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/uninstall/listUninstallDetail',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListUninstallDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 卸载明细列表
     *  *
     * @param ListUninstallDetailRequest $request ListUninstallDetailRequest
     *
     * @return ListUninstallDetailResponse ListUninstallDetailResponse
     */
    public function listUninstallDetail($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listUninstallDetailWithOptions($request, $headers, $runtime);
    }
}
