<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DocumentParseService\V20260414;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\DocumentParseService\V20260414\Models\DocumentParseTestApiRequest;
use AlibabaCloud\SDK\DocumentParseService\V20260414\Models\DocumentParseTestApiResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class DocumentParseService extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('documentparseservice', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * 文档解析测试接口.
     *
     * @param request - DocumentParseTestApiRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DocumentParseTestApiResponse
     *
     * @param DocumentParseTestApiRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DocumentParseTestApiResponse
     */
    public function documentParseTestApiWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->imageUrl) {
            @$body['ImageUrl'] = $request->imageUrl;
        }

        if (null !== $request->type) {
            @$body['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DocumentParseTestApi',
            'version' => '2026-04-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DocumentParseTestApiResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 文档解析测试接口.
     *
     * @param request - DocumentParseTestApiRequest
     *
     * @returns DocumentParseTestApiResponse
     *
     * @param DocumentParseTestApiRequest $request
     *
     * @return DocumentParseTestApiResponse
     */
    public function documentParseTestApi($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->documentParseTestApiWithOptions($request, $runtime);
    }
}
