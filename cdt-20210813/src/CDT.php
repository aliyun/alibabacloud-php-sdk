<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CDT\V20210813;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\SDK\CDT\V20210813\Models\GetCdtCbServiceStatusRequest;
use AlibabaCloud\SDK\CDT\V20210813\Models\GetCdtCbServiceStatusResponse;
use AlibabaCloud\SDK\CDT\V20210813\Models\GetCdtServiceStatusRequest;
use AlibabaCloud\SDK\CDT\V20210813\Models\GetCdtServiceStatusResponse;
use AlibabaCloud\SDK\CDT\V20210813\Models\OpenCdtCbServiceRequest;
use AlibabaCloud\SDK\CDT\V20210813\Models\OpenCdtCbServiceResponse;
use AlibabaCloud\SDK\CDT\V20210813\Models\OpenCdtServiceRequest;
use AlibabaCloud\SDK\CDT\V20210813\Models\OpenCdtServiceResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\OpenApiClient;

class CDT extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('cdt', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param GetCdtServiceStatusRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetCdtServiceStatusResponse
     */
    public function getCdtServiceStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetCdtServiceStatusResponse::fromMap($this->doRPCRequest('GetCdtServiceStatus', '2021-08-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetCdtServiceStatusRequest $request
     *
     * @return GetCdtServiceStatusResponse
     */
    public function getCdtServiceStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCdtServiceStatusWithOptions($request, $runtime);
    }

    /**
     * @param OpenCdtServiceRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return OpenCdtServiceResponse
     */
    public function openCdtServiceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return OpenCdtServiceResponse::fromMap($this->doRPCRequest('OpenCdtService', '2021-08-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param OpenCdtServiceRequest $request
     *
     * @return OpenCdtServiceResponse
     */
    public function openCdtService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->openCdtServiceWithOptions($request, $runtime);
    }

    /**
     * @param GetCdtCbServiceStatusRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GetCdtCbServiceStatusResponse
     */
    public function getCdtCbServiceStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetCdtCbServiceStatusResponse::fromMap($this->doRPCRequest('GetCdtCbServiceStatus', '2021-08-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetCdtCbServiceStatusRequest $request
     *
     * @return GetCdtCbServiceStatusResponse
     */
    public function getCdtCbServiceStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCdtCbServiceStatusWithOptions($request, $runtime);
    }

    /**
     * @param OpenCdtCbServiceRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return OpenCdtCbServiceResponse
     */
    public function openCdtCbServiceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return OpenCdtCbServiceResponse::fromMap($this->doRPCRequest('OpenCdtCbService', '2021-08-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param OpenCdtCbServiceRequest $request
     *
     * @return OpenCdtCbServiceResponse
     */
    public function openCdtCbService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->openCdtCbServiceWithOptions($request, $runtime);
    }
}
