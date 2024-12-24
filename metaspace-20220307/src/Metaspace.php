<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Metaspace\V20220307;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Metaspace\V20220307\Models\ApplyCoordinationWithCodeRequest;
use AlibabaCloud\SDK\Metaspace\V20220307\Models\ApplyCoordinationWithCodeResponse;
use AlibabaCloud\SDK\Metaspace\V20220307\Models\EndAllCoordinationByOwnerRequest;
use AlibabaCloud\SDK\Metaspace\V20220307\Models\EndAllCoordinationByOwnerResponse;
use AlibabaCloud\SDK\Metaspace\V20220307\Models\GenerateCoordinationCodeRequest;
use AlibabaCloud\SDK\Metaspace\V20220307\Models\GenerateCoordinationCodeResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Metaspace extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_signatureAlgorithm = 'v2';
        $this->_endpointRule       = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('metaspace', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @summary 用协同码发起协同
     *  *
     * @param ApplyCoordinationWithCodeRequest $request ApplyCoordinationWithCodeRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return ApplyCoordinationWithCodeResponse ApplyCoordinationWithCodeResponse
     */
    public function applyCoordinationWithCodeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->coordinationCode)) {
            $body['CoordinationCode'] = $request->coordinationCode;
        }
        if (!Utils::isUnset($request->loginRegionId)) {
            $body['LoginRegionId'] = $request->loginRegionId;
        }
        if (!Utils::isUnset($request->loginToken)) {
            $body['LoginToken'] = $request->loginToken;
        }
        if (!Utils::isUnset($request->sessionId)) {
            $body['SessionId'] = $request->sessionId;
        }
        if (!Utils::isUnset($request->uuid)) {
            $body['Uuid'] = $request->uuid;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ApplyCoordinationWithCode',
            'version'     => '2022-03-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'Anonymous',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ApplyCoordinationWithCodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 用协同码发起协同
     *  *
     * @param ApplyCoordinationWithCodeRequest $request ApplyCoordinationWithCodeRequest
     *
     * @return ApplyCoordinationWithCodeResponse ApplyCoordinationWithCodeResponse
     */
    public function applyCoordinationWithCode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->applyCoordinationWithCodeWithOptions($request, $runtime);
    }

    /**
     * @summary Owner主动结束本次协同，同步失效协同码
     *  *
     * @param EndAllCoordinationByOwnerRequest $request EndAllCoordinationByOwnerRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return EndAllCoordinationByOwnerResponse EndAllCoordinationByOwnerResponse
     */
    public function endAllCoordinationByOwnerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->loginRegionId)) {
            $body['LoginRegionId'] = $request->loginRegionId;
        }
        if (!Utils::isUnset($request->loginToken)) {
            $body['LoginToken'] = $request->loginToken;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $body['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceRegionId)) {
            $body['ResourceRegionId'] = $request->resourceRegionId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $body['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->sessionId)) {
            $body['SessionId'] = $request->sessionId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'EndAllCoordinationByOwner',
            'version'     => '2022-03-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'Anonymous',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return EndAllCoordinationByOwnerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Owner主动结束本次协同，同步失效协同码
     *  *
     * @param EndAllCoordinationByOwnerRequest $request EndAllCoordinationByOwnerRequest
     *
     * @return EndAllCoordinationByOwnerResponse EndAllCoordinationByOwnerResponse
     */
    public function endAllCoordinationByOwner($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->endAllCoordinationByOwnerWithOptions($request, $runtime);
    }

    /**
     * @summary 生成协同码
     *  *
     * @param GenerateCoordinationCodeRequest $request GenerateCoordinationCodeRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return GenerateCoordinationCodeResponse GenerateCoordinationCodeResponse
     */
    public function generateCoordinationCodeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->loginRegionId)) {
            $body['LoginRegionId'] = $request->loginRegionId;
        }
        if (!Utils::isUnset($request->loginToken)) {
            $body['LoginToken'] = $request->loginToken;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $body['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceName)) {
            $body['ResourceName'] = $request->resourceName;
        }
        if (!Utils::isUnset($request->resourceRegionId)) {
            $body['ResourceRegionId'] = $request->resourceRegionId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $body['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->sessionId)) {
            $body['SessionId'] = $request->sessionId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GenerateCoordinationCode',
            'version'     => '2022-03-07',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'Anonymous',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GenerateCoordinationCodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 生成协同码
     *  *
     * @param GenerateCoordinationCodeRequest $request GenerateCoordinationCodeRequest
     *
     * @return GenerateCoordinationCodeResponse GenerateCoordinationCodeResponse
     */
    public function generateCoordinationCode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->generateCoordinationCodeWithOptions($request, $runtime);
    }
}
