<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Saf\V20170331;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\SDK\Saf\V20170331\Models\ExecuteRequestRequest;
use AlibabaCloud\SDK\Saf\V20170331\Models\ExecuteRequestResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\OpenApiClient;

class Saf extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap  = [
            'cn-hangzhou' => 'saf.cn-shanghai.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('saf', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param ExecuteRequestRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ExecuteRequestResponse
     */
    public function executeRequestWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ExecuteRequestResponse::fromMap($this->doRPCRequest('ExecuteRequest', '2017-03-31', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ExecuteRequestRequest $request
     *
     * @return ExecuteRequestResponse
     */
    public function executeRequest($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->executeRequestWithOptions($request, $runtime);
    }
}
