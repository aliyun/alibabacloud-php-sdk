<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dytnsapi\V20230101;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Dytnsapi\V20230101\Models\GetPhoneNumberIdentificationResultRequest;
use AlibabaCloud\SDK\Dytnsapi\V20230101\Models\GetPhoneNumberIdentificationResultResponse;
use AlibabaCloud\SDK\Dytnsapi\V20230101\Models\GetPhoneNumberIdentificationUrlRequest;
use AlibabaCloud\SDK\Dytnsapi\V20230101\Models\GetPhoneNumberIdentificationUrlResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Dytnsapi extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'central';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('dytnsapi', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param GetPhoneNumberIdentificationResultRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return GetPhoneNumberIdentificationResultResponse
     */
    public function getPhoneNumberIdentificationResultWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->authCode)) {
            $query['AuthCode'] = $request->authCode;
        }
        if (!Utils::isUnset($request->outId)) {
            $query['OutId'] = $request->outId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->phoneNumber)) {
            $query['PhoneNumber'] = $request->phoneNumber;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->sessionId)) {
            $query['SessionId'] = $request->sessionId;
        }
        if (!Utils::isUnset($request->sessionPayload)) {
            $query['SessionPayload'] = $request->sessionPayload;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetPhoneNumberIdentificationResult',
            'version'     => '2023-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetPhoneNumberIdentificationResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetPhoneNumberIdentificationResultRequest $request
     *
     * @return GetPhoneNumberIdentificationResultResponse
     */
    public function getPhoneNumberIdentificationResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPhoneNumberIdentificationResultWithOptions($request, $runtime);
    }

    /**
     * @param GetPhoneNumberIdentificationUrlRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return GetPhoneNumberIdentificationUrlResponse
     */
    public function getPhoneNumberIdentificationUrlWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->authCode)) {
            $query['AuthCode'] = $request->authCode;
        }
        if (!Utils::isUnset($request->ip)) {
            $query['Ip'] = $request->ip;
        }
        if (!Utils::isUnset($request->outId)) {
            $query['OutId'] = $request->outId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->phoneNumber)) {
            $query['PhoneNumber'] = $request->phoneNumber;
        }
        if (!Utils::isUnset($request->rememberPhoneNumber)) {
            $query['RememberPhoneNumber'] = $request->rememberPhoneNumber;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetPhoneNumberIdentificationUrl',
            'version'     => '2023-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetPhoneNumberIdentificationUrlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetPhoneNumberIdentificationUrlRequest $request
     *
     * @return GetPhoneNumberIdentificationUrlResponse
     */
    public function getPhoneNumberIdentificationUrl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPhoneNumberIdentificationUrlWithOptions($request, $runtime);
    }
}
