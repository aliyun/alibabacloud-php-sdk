<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsyaochiportal\V20230206;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Dmsyaochiportal\V20230206\Models\CheckUserAuthResponse;
use AlibabaCloud\SDK\Dmsyaochiportal\V20230206\Models\ListResourcesByTagRequest;
use AlibabaCloud\SDK\Dmsyaochiportal\V20230206\Models\ListResourcesByTagResponse;
use AlibabaCloud\SDK\Dmsyaochiportal\V20230206\Models\ListTagsAllResponse;
use AlibabaCloud\SDK\Dmsyaochiportal\V20230206\Models\ListTagsByResourceRequest;
use AlibabaCloud\SDK\Dmsyaochiportal\V20230206\Models\ListTagsByResourceResponse;
use AlibabaCloud\SDK\Dmsyaochiportal\V20230206\Models\MetaDatabaseSearchRequest;
use AlibabaCloud\SDK\Dmsyaochiportal\V20230206\Models\MetaDatabaseSearchResponse;
use AlibabaCloud\SDK\Dmsyaochiportal\V20230206\Models\MetaSearchRequest;
use AlibabaCloud\SDK\Dmsyaochiportal\V20230206\Models\MetaSearchResponse;
use AlibabaCloud\SDK\Dmsyaochiportal\V20230206\Models\UpdateUserAuthRequest;
use AlibabaCloud\SDK\Dmsyaochiportal\V20230206\Models\UpdateUserAuthResponse;
use AlibabaCloud\SDK\Dmsyaochiportal\V20230206\Models\YaochiSuggestRequest;
use AlibabaCloud\SDK\Dmsyaochiportal\V20230206\Models\YaochiSuggestResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Dmsyaochiportal extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('dms-yaochi-portal', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param RuntimeOptions $runtime
     *
     * @return CheckUserAuthResponse
     */
    public function checkUserAuthWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'CheckUserAuth',
            'version'     => '2023-02-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CheckUserAuthResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return CheckUserAuthResponse
     */
    public function checkUserAuth()
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkUserAuthWithOptions($runtime);
    }

    /**
     * @param ListResourcesByTagRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ListResourcesByTagResponse
     */
    public function listResourcesByTagWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->tagKeys)) {
            $query['TagKeys'] = $request->tagKeys;
        }
        if (!Utils::isUnset($request->tagValues)) {
            $query['TagValues'] = $request->tagValues;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListResourcesByTag',
            'version'     => '2023-02-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListResourcesByTagResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListResourcesByTagRequest $request
     *
     * @return ListResourcesByTagResponse
     */
    public function listResourcesByTag($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listResourcesByTagWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return ListTagsAllResponse
     */
    public function listTagsAllWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'ListTagsAll',
            'version'     => '2023-02-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListTagsAllResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return ListTagsAllResponse
     */
    public function listTagsAll()
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTagsAllWithOptions($runtime);
    }

    /**
     * @param ListTagsByResourceRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ListTagsByResourceResponse
     */
    public function listTagsByResourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->resourceIds)) {
            $query['ResourceIds'] = $request->resourceIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListTagsByResource',
            'version'     => '2023-02-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListTagsByResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListTagsByResourceRequest $request
     *
     * @return ListTagsByResourceResponse
     */
    public function listTagsByResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTagsByResourceWithOptions($request, $runtime);
    }

    /**
     * @param MetaDatabaseSearchRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return MetaDatabaseSearchResponse
     */
    public function metaDatabaseSearchWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->limit)) {
            $query['Limit'] = $request->limit;
        }
        if (!Utils::isUnset($request->searchKey)) {
            $query['SearchKey'] = $request->searchKey;
        }
        if (!Utils::isUnset($request->start)) {
            $query['Start'] = $request->start;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'MetaDatabaseSearch',
            'version'     => '2023-02-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return MetaDatabaseSearchResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param MetaDatabaseSearchRequest $request
     *
     * @return MetaDatabaseSearchResponse
     */
    public function metaDatabaseSearch($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->metaDatabaseSearchWithOptions($request, $runtime);
    }

    /**
     * @param MetaSearchRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return MetaSearchResponse
     */
    public function metaSearchWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->limit)) {
            $query['Limit'] = $request->limit;
        }
        if (!Utils::isUnset($request->searchKey)) {
            $query['SearchKey'] = $request->searchKey;
        }
        if (!Utils::isUnset($request->start)) {
            $query['Start'] = $request->start;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'MetaSearch',
            'version'     => '2023-02-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return MetaSearchResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param MetaSearchRequest $request
     *
     * @return MetaSearchResponse
     */
    public function metaSearch($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->metaSearchWithOptions($request, $runtime);
    }

    /**
     * @param UpdateUserAuthRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return UpdateUserAuthResponse
     */
    public function updateUserAuthWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->grantState)) {
            $query['GrantState'] = $request->grantState;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateUserAuth',
            'version'     => '2023-02-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateUserAuthResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateUserAuthRequest $request
     *
     * @return UpdateUserAuthResponse
     */
    public function updateUserAuth($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateUserAuthWithOptions($request, $runtime);
    }

    /**
     * @param YaochiSuggestRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return YaochiSuggestResponse
     */
    public function yaochiSuggestWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->suggestText)) {
            $query['SuggestText'] = $request->suggestText;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'YaochiSuggest',
            'version'     => '2023-02-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return YaochiSuggestResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param YaochiSuggestRequest $request
     *
     * @return YaochiSuggestResponse
     */
    public function yaochiSuggest($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->yaochiSuggestWithOptions($request, $runtime);
    }
}
