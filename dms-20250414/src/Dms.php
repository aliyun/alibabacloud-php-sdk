<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dms\V20250414;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\Dms\V20250414\Models\CreateAirflowLoginTokenRequest;
use AlibabaCloud\SDK\Dms\V20250414\Models\CreateAirflowLoginTokenResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Dms extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('dms', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * 获取airflow登录凭证
     *
     * @param request - CreateAirflowLoginTokenRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateAirflowLoginTokenResponse
     *
     * @param CreateAirflowLoginTokenRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return CreateAirflowLoginTokenResponse
     */
    public function createAirflowLoginTokenWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->airflowId) {
            @$query['AirflowId'] = $request->airflowId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateAirflowLoginToken',
            'version' => '2025-04-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateAirflowLoginTokenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取airflow登录凭证
     *
     * @param request - CreateAirflowLoginTokenRequest
     *
     * @returns CreateAirflowLoginTokenResponse
     *
     * @param CreateAirflowLoginTokenRequest $request
     *
     * @return CreateAirflowLoginTokenResponse
     */
    public function createAirflowLoginToken($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAirflowLoginTokenWithOptions($request, $runtime);
    }
}
