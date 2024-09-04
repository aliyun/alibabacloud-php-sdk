<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BaasDis\V20200509;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\BaasDis\V20200509\Models\CreateEenterpriseDIDRequest;
use AlibabaCloud\SDK\BaasDis\V20200509\Models\CreateEenterpriseDIDResponse;
use AlibabaCloud\SDK\BaasDis\V20200509\Models\CreatePersonalDIDRequest;
use AlibabaCloud\SDK\BaasDis\V20200509\Models\CreatePersonalDIDResponse;
use AlibabaCloud\SDK\BaasDis\V20200509\Models\CreateTenantDIDRequest;
use AlibabaCloud\SDK\BaasDis\V20200509\Models\CreateTenantDIDResponse;
use AlibabaCloud\SDK\BaasDis\V20200509\Models\GetDIDRequest;
use AlibabaCloud\SDK\BaasDis\V20200509\Models\GetDIDResponse;
use AlibabaCloud\SDK\BaasDis\V20200509\Models\IssueNormalVerifiableVCRequest;
use AlibabaCloud\SDK\BaasDis\V20200509\Models\IssueNormalVerifiableVCResponse;
use AlibabaCloud\SDK\BaasDis\V20200509\Models\UpdateVCRequest;
use AlibabaCloud\SDK\BaasDis\V20200509\Models\UpdateVCResponse;
use AlibabaCloud\SDK\BaasDis\V20200509\Models\VerifyVerifiableClaimRequest;
use AlibabaCloud\SDK\BaasDis\V20200509\Models\VerifyVerifiableClaimResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class BaasDis extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('baasdis', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param CreateEenterpriseDIDRequest $request CreateEenterpriseDIDRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateEenterpriseDIDResponse CreateEenterpriseDIDResponse
     */
    public function createEenterpriseDIDWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->ownerUniqueID)) {
            $body['OwnerUniqueID'] = $request->ownerUniqueID;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateEenterpriseDID',
            'version'     => '2020-05-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateEenterpriseDIDResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateEenterpriseDIDRequest $request CreateEenterpriseDIDRequest
     *
     * @return CreateEenterpriseDIDResponse CreateEenterpriseDIDResponse
     */
    public function createEenterpriseDID($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createEenterpriseDIDWithOptions($request, $runtime);
    }

    /**
     * @param CreatePersonalDIDRequest $request CreatePersonalDIDRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return CreatePersonalDIDResponse CreatePersonalDIDResponse
     */
    public function createPersonalDIDWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->ownerUniqueID)) {
            $body['OwnerUniqueID'] = $request->ownerUniqueID;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreatePersonalDID',
            'version'     => '2020-05-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreatePersonalDIDResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreatePersonalDIDRequest $request CreatePersonalDIDRequest
     *
     * @return CreatePersonalDIDResponse CreatePersonalDIDResponse
     */
    public function createPersonalDID($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createPersonalDIDWithOptions($request, $runtime);
    }

    /**
     * @param CreateTenantDIDRequest $request CreateTenantDIDRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateTenantDIDResponse CreateTenantDIDResponse
     */
    public function createTenantDIDWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateTenantDID',
            'version'     => '2020-05-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateTenantDIDResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateTenantDIDRequest $request CreateTenantDIDRequest
     *
     * @return CreateTenantDIDResponse CreateTenantDIDResponse
     */
    public function createTenantDID($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createTenantDIDWithOptions($request, $runtime);
    }

    /**
     * @param GetDIDRequest  $request GetDIDRequest
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return GetDIDResponse GetDIDResponse
     */
    public function getDIDWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->DID)) {
            $body['DID'] = $request->DID;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetDID',
            'version'     => '2020-05-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetDIDResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetDIDRequest $request GetDIDRequest
     *
     * @return GetDIDResponse GetDIDResponse
     */
    public function getDID($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDIDWithOptions($request, $runtime);
    }

    /**
     * @param IssueNormalVerifiableVCRequest $request IssueNormalVerifiableVCRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return IssueNormalVerifiableVCResponse IssueNormalVerifiableVCResponse
     */
    public function issueNormalVerifiableVCWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->bareClaimStructBody)) {
            $body['BareClaimStructBody'] = $request->bareClaimStructBody;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->expiration)) {
            $body['Expiration'] = $request->expiration;
        }
        if (!Utils::isUnset($request->issuer)) {
            $body['Issuer'] = $request->issuer;
        }
        if (!Utils::isUnset($request->subject)) {
            $body['Subject'] = $request->subject;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'IssueNormalVerifiableVC',
            'version'     => '2020-05-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return IssueNormalVerifiableVCResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param IssueNormalVerifiableVCRequest $request IssueNormalVerifiableVCRequest
     *
     * @return IssueNormalVerifiableVCResponse IssueNormalVerifiableVCResponse
     */
    public function issueNormalVerifiableVC($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->issueNormalVerifiableVCWithOptions($request, $runtime);
    }

    /**
     * @param UpdateVCRequest $request UpdateVCRequest
     * @param RuntimeOptions  $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateVCResponse UpdateVCResponse
     */
    public function updateVCWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->issuerDid)) {
            $body['IssuerDid'] = $request->issuerDid;
        }
        if (!Utils::isUnset($request->VCId)) {
            $body['VCId'] = $request->VCId;
        }
        if (!Utils::isUnset($request->VCStatus)) {
            $body['VCStatus'] = $request->VCStatus;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateVC',
            'version'     => '2020-05-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateVCResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateVCRequest $request UpdateVCRequest
     *
     * @return UpdateVCResponse UpdateVCResponse
     */
    public function updateVC($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateVCWithOptions($request, $runtime);
    }

    /**
     * @param VerifyVerifiableClaimRequest $request VerifyVerifiableClaimRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return VerifyVerifiableClaimResponse VerifyVerifiableClaimResponse
     */
    public function verifyVerifiableClaimWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->VCContent)) {
            $body['VCContent'] = $request->VCContent;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'VerifyVerifiableClaim',
            'version'     => '2020-05-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return VerifyVerifiableClaimResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param VerifyVerifiableClaimRequest $request VerifyVerifiableClaimRequest
     *
     * @return VerifyVerifiableClaimResponse VerifyVerifiableClaimResponse
     */
    public function verifyVerifiableClaim($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->verifyVerifiableClaimWithOptions($request, $runtime);
    }
}
