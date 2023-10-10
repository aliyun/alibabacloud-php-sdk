<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sgxdcapserver\V20200726;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Sgxdcapserver\V20200726\Models\GetQeIdentityRequest;
use AlibabaCloud\SDK\Sgxdcapserver\V20200726\Models\GetQeIdentityResponse;
use AlibabaCloud\SDK\Sgxdcapserver\V20200726\Models\GetQveIdentityRequest;
use AlibabaCloud\SDK\Sgxdcapserver\V20200726\Models\GetQveIdentityResponse;
use AlibabaCloud\SDK\Sgxdcapserver\V20200726\Models\GetTcbInfoRequest;
use AlibabaCloud\SDK\Sgxdcapserver\V20200726\Models\GetTcbInfoResponse;
use AlibabaCloud\SDK\Sgxdcapserver\V20200726\Models\PckCrlRequest;
use AlibabaCloud\SDK\Sgxdcapserver\V20200726\Models\PckCrlResponse;
use AlibabaCloud\SDK\Sgxdcapserver\V20200726\Models\RootCaCrlRequest;
use AlibabaCloud\SDK\Sgxdcapserver\V20200726\Models\RootCaCrlResponse;
use AlibabaCloud\SDK\Sgxdcapserver\V20200726\Models\SimplePackagePckCertRequest;
use AlibabaCloud\SDK\Sgxdcapserver\V20200726\Models\SimplePackagePckCertResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Sgxdcapserver extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_signatureAlgorithm = 'v2';
        $this->_endpointRule       = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('sgx-dcap-server', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param GetQeIdentityRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return GetQeIdentityResponse
     */
    public function getQeIdentityWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acsHost)) {
            $query['AcsHost'] = $request->acsHost;
        }
        if (!Utils::isUnset($request->clientVpcId)) {
            $query['ClientVpcId'] = $request->clientVpcId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetQeIdentity',
            'version'     => '2020-07-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/sgx/certification/v3/qe/identity',
            'method'      => 'GET',
            'authType'    => 'Anonymous',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'string',
        ]);

        return GetQeIdentityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetQeIdentityRequest $request
     *
     * @return GetQeIdentityResponse
     */
    public function getQeIdentity($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getQeIdentityWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GetQveIdentityRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return GetQveIdentityResponse
     */
    public function getQveIdentityWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acsHost)) {
            $query['AcsHost'] = $request->acsHost;
        }
        if (!Utils::isUnset($request->clientVpcId)) {
            $query['ClientVpcId'] = $request->clientVpcId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetQveIdentity',
            'version'     => '2020-07-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/sgx/certification/v3/qve/identity',
            'method'      => 'GET',
            'authType'    => 'Anonymous',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'string',
        ]);

        return GetQveIdentityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetQveIdentityRequest $request
     *
     * @return GetQveIdentityResponse
     */
    public function getQveIdentity($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getQveIdentityWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GetTcbInfoRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return GetTcbInfoResponse
     */
    public function getTcbInfoWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acsHost)) {
            $query['AcsHost'] = $request->acsHost;
        }
        if (!Utils::isUnset($request->clientVpcId)) {
            $query['ClientVpcId'] = $request->clientVpcId;
        }
        if (!Utils::isUnset($request->fmspc)) {
            $query['fmspc'] = $request->fmspc;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetTcbInfo',
            'version'     => '2020-07-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/sgx/certification/v3/tcb',
            'method'      => 'GET',
            'authType'    => 'Anonymous',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'string',
        ]);

        return GetTcbInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetTcbInfoRequest $request
     *
     * @return GetTcbInfoResponse
     */
    public function getTcbInfo($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getTcbInfoWithOptions($request, $headers, $runtime);
    }

    /**
     * @param PckCrlRequest  $request
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return PckCrlResponse
     */
    public function pckCrlWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acsHost)) {
            $query['AcsHost'] = $request->acsHost;
        }
        if (!Utils::isUnset($request->clientVpcId)) {
            $query['ClientVpcId'] = $request->clientVpcId;
        }
        if (!Utils::isUnset($request->ca)) {
            $query['ca'] = $request->ca;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'PckCrl',
            'version'     => '2020-07-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/sgx/certification/v3/pckcrl',
            'method'      => 'GET',
            'authType'    => 'Anonymous',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'string',
        ]);

        return PckCrlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param PckCrlRequest $request
     *
     * @return PckCrlResponse
     */
    public function pckCrl($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->pckCrlWithOptions($request, $headers, $runtime);
    }

    /**
     * @param RootCaCrlRequest $request
     * @param string[]         $headers
     * @param RuntimeOptions   $runtime
     *
     * @return RootCaCrlResponse
     */
    public function rootCaCrlWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acsHost)) {
            $query['AcsHost'] = $request->acsHost;
        }
        if (!Utils::isUnset($request->clientVpcId)) {
            $query['ClientVpcId'] = $request->clientVpcId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RootCaCrl',
            'version'     => '2020-07-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/sgx/certification/v3/rootcacrl',
            'method'      => 'GET',
            'authType'    => 'Anonymous',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'string',
        ]);

        return RootCaCrlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RootCaCrlRequest $request
     *
     * @return RootCaCrlResponse
     */
    public function rootCaCrl($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->rootCaCrlWithOptions($request, $headers, $runtime);
    }

    /**
     * @param SimplePackagePckCertRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return SimplePackagePckCertResponse
     */
    public function simplePackagePckCertWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acsHost)) {
            $query['AcsHost'] = $request->acsHost;
        }
        if (!Utils::isUnset($request->clientVpcId)) {
            $query['ClientVpcId'] = $request->clientVpcId;
        }
        if (!Utils::isUnset($request->cpusvn)) {
            $query['cpusvn'] = $request->cpusvn;
        }
        if (!Utils::isUnset($request->encryptedPpid)) {
            $query['encrypted_ppid'] = $request->encryptedPpid;
        }
        if (!Utils::isUnset($request->pceid)) {
            $query['pceid'] = $request->pceid;
        }
        if (!Utils::isUnset($request->pcesvn)) {
            $query['pcesvn'] = $request->pcesvn;
        }
        if (!Utils::isUnset($request->qeid)) {
            $query['qeid'] = $request->qeid;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SimplePackagePckCert',
            'version'     => '2020-07-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/sgx/certification/v3/pckcert',
            'method'      => 'GET',
            'authType'    => 'Anonymous',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'string',
        ]);

        return SimplePackagePckCertResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SimplePackagePckCertRequest $request
     *
     * @return SimplePackagePckCertResponse
     */
    public function simplePackagePckCert($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->simplePackagePckCertWithOptions($request, $headers, $runtime);
    }
}
