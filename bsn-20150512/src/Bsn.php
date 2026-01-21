<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bsn\V20150512;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\Bsn\V20150512\Models\GetBsnByResourceRequest;
use AlibabaCloud\SDK\Bsn\V20150512\Models\GetBsnByResourceResponse;
use AlibabaCloud\SDK\Bsn\V20150512\Models\GrantBsnCodeRequest;
use AlibabaCloud\SDK\Bsn\V20150512\Models\GrantBsnCodeResponse;
use AlibabaCloud\SDK\Bsn\V20150512\Models\ProductBindBsnRequest;
use AlibabaCloud\SDK\Bsn\V20150512\Models\ProductBindBsnResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Bsn extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('bsn', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param request - GetBsnByResourceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetBsnByResourceResponse
     *
     * @param GetBsnByResourceRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetBsnByResourceResponse
     */
    public function getBsnByResourceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->aliuid) {
            @$query['aliuid'] = $request->aliuid;
        }

        if (null !== $request->resourceId) {
            @$query['resourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceType) {
            @$query['resourceType'] = $request->resourceType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetBsnByResource',
            'version' => '2015-05-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetBsnByResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - GetBsnByResourceRequest
     *
     * @returns GetBsnByResourceResponse
     *
     * @param GetBsnByResourceRequest $request
     *
     * @return GetBsnByResourceResponse
     */
    public function getBsnByResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getBsnByResourceWithOptions($request, $runtime);
    }

    /**
     * 授权服务码，供虚商使用.
     *
     * @param request - GrantBsnCodeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GrantBsnCodeResponse
     *
     * @param GrantBsnCodeRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return GrantBsnCodeResponse
     */
    public function grantBsnCodeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->aliUid) {
            @$query['AliUid'] = $request->aliUid;
        }

        if (null !== $request->grantToAliuid) {
            @$query['GrantToAliuid'] = $request->grantToAliuid;
        }

        if (null !== $request->notes) {
            @$query['Notes'] = $request->notes;
        }

        if (null !== $request->sn) {
            @$query['Sn'] = $request->sn;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GrantBsnCode',
            'version' => '2015-05-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GrantBsnCodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 授权服务码，供虚商使用.
     *
     * @param request - GrantBsnCodeRequest
     *
     * @returns GrantBsnCodeResponse
     *
     * @param GrantBsnCodeRequest $request
     *
     * @return GrantBsnCodeResponse
     */
    public function grantBsnCode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->grantBsnCodeWithOptions($request, $runtime);
    }

    /**
     * @param request - ProductBindBsnRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ProductBindBsnResponse
     *
     * @param ProductBindBsnRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ProductBindBsnResponse
     */
    public function productBindBsnWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->aliuid) {
            @$query['aliuid'] = $request->aliuid;
        }

        if (null !== $request->num) {
            @$query['num'] = $request->num;
        }

        if (null !== $request->resourceId) {
            @$query['resourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceType) {
            @$query['resourceType'] = $request->resourceType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ProductBindBsn',
            'version' => '2015-05-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ProductBindBsnResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ProductBindBsnRequest
     *
     * @returns ProductBindBsnResponse
     *
     * @param ProductBindBsnRequest $request
     *
     * @return ProductBindBsnResponse
     */
    public function productBindBsn($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->productBindBsnWithOptions($request, $runtime);
    }
}
