<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauthconsole\V20190403;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\SDK\Cloudauthconsole\V20190403\Models\RetrieveFaceRequest;
use AlibabaCloud\SDK\Cloudauthconsole\V20190403\Models\RetrieveFaceResponse;
use AlibabaCloud\SDK\Cloudauthconsole\V20190403\Models\UploadIdentifyRecordRequest;
use AlibabaCloud\SDK\Cloudauthconsole\V20190403\Models\UploadIdentifyRecordResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\OpenApiClient;

class Cloudauthconsole extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('cloudauth-console', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param RetrieveFaceRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return RetrieveFaceResponse
     */
    public function retrieveFaceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RetrieveFaceResponse::fromMap($this->doRPCRequest('RetrieveFace', '2019-04-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param RetrieveFaceRequest $request
     *
     * @return RetrieveFaceResponse
     */
    public function retrieveFace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->retrieveFaceWithOptions($request, $runtime);
    }

    /**
     * @param UploadIdentifyRecordRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return UploadIdentifyRecordResponse
     */
    public function uploadIdentifyRecordWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UploadIdentifyRecordResponse::fromMap($this->doRPCRequest('UploadIdentifyRecord', '2019-04-03', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UploadIdentifyRecordRequest $request
     *
     * @return UploadIdentifyRecordResponse
     */
    public function uploadIdentifyRecord($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->uploadIdentifyRecordWithOptions($request, $runtime);
    }
}
