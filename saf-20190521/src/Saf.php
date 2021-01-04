<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Saf\V20190521;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\SDK\Saf\V20190521\Models\ExecuteExtendServiceRequest;
use AlibabaCloud\SDK\Saf\V20190521\Models\ExecuteExtendServiceResponse;
use AlibabaCloud\SDK\Saf\V20190521\Models\ExecuteRequestMLRequest;
use AlibabaCloud\SDK\Saf\V20190521\Models\ExecuteRequestMLResponse;
use AlibabaCloud\SDK\Saf\V20190521\Models\ExecuteRequestRequest;
use AlibabaCloud\SDK\Saf\V20190521\Models\ExecuteRequestResponse;
use AlibabaCloud\SDK\Saf\V20190521\Models\ExecuteRequestSGRequest;
use AlibabaCloud\SDK\Saf\V20190521\Models\ExecuteRequestSGResponse;
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
     * @param ExecuteExtendServiceRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ExecuteExtendServiceResponse
     */
    public function executeExtendServiceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ExecuteExtendServiceResponse::fromMap($this->doRPCRequest('ExecuteExtendService', '2019-05-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ExecuteExtendServiceRequest $request
     *
     * @return ExecuteExtendServiceResponse
     */
    public function executeExtendService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->executeExtendServiceWithOptions($request, $runtime);
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

        return ExecuteRequestResponse::fromMap($this->doRPCRequest('ExecuteRequest', '2019-05-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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

    /**
     * @param ExecuteRequestMLRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ExecuteRequestMLResponse
     */
    public function executeRequestMLWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ExecuteRequestMLResponse::fromMap($this->doRPCRequest('ExecuteRequestML', '2019-05-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ExecuteRequestMLRequest $request
     *
     * @return ExecuteRequestMLResponse
     */
    public function executeRequestML($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->executeRequestMLWithOptions($request, $runtime);
    }

    /**
     * @param ExecuteRequestSGRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ExecuteRequestSGResponse
     */
    public function executeRequestSGWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ExecuteRequestSGResponse::fromMap($this->doRPCRequest('ExecuteRequestSG', '2019-05-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ExecuteRequestSGRequest $request
     *
     * @return ExecuteRequestSGResponse
     */
    public function executeRequestSG($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->executeRequestSGWithOptions($request, $runtime);
    }
}
