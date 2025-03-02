<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dytnsapi\V20230101;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\Dytnsapi\V20230101\Models\GetPhoneNumberIdentificationResultRequest;
use AlibabaCloud\SDK\Dytnsapi\V20230101\Models\GetPhoneNumberIdentificationResultResponse;
use AlibabaCloud\SDK\Dytnsapi\V20230101\Models\GetPhoneNumberIdentificationUrlRequest;
use AlibabaCloud\SDK\Dytnsapi\V20230101\Models\GetPhoneNumberIdentificationUrlResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

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
        if (null !== $endpoint) {
            return $endpoint;
        }

        if (null !== $endpointMap && null !== @$endpointMap[$regionId]) {
            return @$endpointMap[$regionId];
        }

        return Utils::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * Obtains the verification result of your phone number.
     *
     * @param request - GetPhoneNumberIdentificationResultRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetPhoneNumberIdentificationResultResponse
     *
     * @param GetPhoneNumberIdentificationResultRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return GetPhoneNumberIdentificationResultResponse
     */
    public function getPhoneNumberIdentificationResultWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->authCode) {
            @$query['AuthCode'] = $request->authCode;
        }

        if (null !== $request->outId) {
            @$query['OutId'] = $request->outId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->phoneNumber) {
            @$query['PhoneNumber'] = $request->phoneNumber;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->sessionId) {
            @$query['SessionId'] = $request->sessionId;
        }

        if (null !== $request->sessionPayload) {
            @$query['SessionPayload'] = $request->sessionPayload;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetPhoneNumberIdentificationResultResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetPhoneNumberIdentificationResultResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Obtains the verification result of your phone number.
     *
     * @param request - GetPhoneNumberIdentificationResultRequest
     * @returns GetPhoneNumberIdentificationResultResponse
     *
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
     * Obtains the verification URL of your phone number.
     *
     * @param request - GetPhoneNumberIdentificationUrlRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetPhoneNumberIdentificationUrlResponse
     *
     * @param GetPhoneNumberIdentificationUrlRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return GetPhoneNumberIdentificationUrlResponse
     */
    public function getPhoneNumberIdentificationUrlWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->authCode) {
            @$query['AuthCode'] = $request->authCode;
        }

        if (null !== $request->ip) {
            @$query['Ip'] = $request->ip;
        }

        if (null !== $request->outId) {
            @$query['OutId'] = $request->outId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->phoneNumber) {
            @$query['PhoneNumber'] = $request->phoneNumber;
        }

        if (null !== $request->rememberPhoneNumber) {
            @$query['RememberPhoneNumber'] = $request->rememberPhoneNumber;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetPhoneNumberIdentificationUrlResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetPhoneNumberIdentificationUrlResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Obtains the verification URL of your phone number.
     *
     * @param request - GetPhoneNumberIdentificationUrlRequest
     * @returns GetPhoneNumberIdentificationUrlResponse
     *
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
