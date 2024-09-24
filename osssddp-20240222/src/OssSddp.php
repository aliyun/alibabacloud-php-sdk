<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OssSddp\V20240222;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\OssSddp\V20240222\Models\GetSddpVersionRequest;
use AlibabaCloud\SDK\OssSddp\V20240222\Models\GetSddpVersionResponse;
use AlibabaCloud\SDK\OssSddp\V20240222\Models\UpgradeSddpVersionRequest;
use AlibabaCloud\SDK\OssSddp\V20240222\Models\UpgradeSddpVersionResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class OssSddp extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('osssddp', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @summary 查看用户的敏感数据保护版本信息
     *  *
     * @param GetSddpVersionRequest $request GetSddpVersionRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return GetSddpVersionResponse GetSddpVersionResponse
     */
    public function getSddpVersionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetSddpVersion',
            'version'     => '2024-02-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetSddpVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查看用户的敏感数据保护版本信息
     *  *
     * @param GetSddpVersionRequest $request GetSddpVersionRequest
     *
     * @return GetSddpVersionResponse GetSddpVersionResponse
     */
    public function getSddpVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSddpVersionWithOptions($request, $runtime);
    }

    /**
     * @summary 升级敏感数据保护版本
     *  *
     * @param UpgradeSddpVersionRequest $request UpgradeSddpVersionRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return UpgradeSddpVersionResponse UpgradeSddpVersionResponse
     */
    public function upgradeSddpVersionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->ossVersion)) {
            $query['OssVersion'] = $request->ossVersion;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpgradeSddpVersion',
            'version'     => '2024-02-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpgradeSddpVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 升级敏感数据保护版本
     *  *
     * @param UpgradeSddpVersionRequest $request UpgradeSddpVersionRequest
     *
     * @return UpgradeSddpVersionResponse UpgradeSddpVersionResponse
     */
    public function upgradeSddpVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->upgradeSddpVersionWithOptions($request, $runtime);
    }
}
