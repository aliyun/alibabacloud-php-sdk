<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EttrafficIsp\V20230830;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\EttrafficIsp\V20230830\Models\AkDisableRequest;
use AlibabaCloud\SDK\EttrafficIsp\V20230830\Models\AkDisableResponse;
use AlibabaCloud\SDK\EttrafficIsp\V20230830\Models\AkEnableRequest;
use AlibabaCloud\SDK\EttrafficIsp\V20230830\Models\AkEnableResponse;
use AlibabaCloud\SDK\EttrafficIsp\V20230830\Models\AkGenerateRequest;
use AlibabaCloud\SDK\EttrafficIsp\V20230830\Models\AkGenerateResponse;
use AlibabaCloud\SDK\EttrafficIsp\V20230830\Models\AkListPageRequest;
use AlibabaCloud\SDK\EttrafficIsp\V20230830\Models\AkListPageResponse;
use AlibabaCloud\SDK\EttrafficIsp\V20230830\Models\AkUpdateRequest;
use AlibabaCloud\SDK\EttrafficIsp\V20230830\Models\AkUpdateResponse;
use AlibabaCloud\SDK\EttrafficIsp\V20230830\Models\DimGroupResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class EttrafficIsp extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_signatureAlgorithm = 'v2';
        $this->_endpointRule       = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('ettrafficisp', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param AkDisableRequest $request
     * @param string[]         $headers
     * @param RuntimeOptions   $runtime
     *
     * @return AkDisableResponse
     */
    public function akDisableWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->accessKeyId)) {
            $body['accessKeyId'] = $request->accessKeyId;
        }
        if (!Utils::isUnset($request->accessKeyName)) {
            $body['accessKeyName'] = $request->accessKeyName;
        }
        if (!Utils::isUnset($request->permissions)) {
            $body['permissions'] = $request->permissions;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'AkDisable',
            'version'     => '2023-08-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/console/ak/disable',
            'method'      => 'POST',
            'authType'    => 'Anonymous',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return AkDisableResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AkDisableRequest $request
     *
     * @return AkDisableResponse
     */
    public function akDisable($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->akDisableWithOptions($request, $headers, $runtime);
    }

    /**
     * @param AkEnableRequest $request
     * @param string[]        $headers
     * @param RuntimeOptions  $runtime
     *
     * @return AkEnableResponse
     */
    public function akEnableWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->accessKeyId)) {
            $body['accessKeyId'] = $request->accessKeyId;
        }
        if (!Utils::isUnset($request->accessKeyName)) {
            $body['accessKeyName'] = $request->accessKeyName;
        }
        if (!Utils::isUnset($request->permissions)) {
            $body['permissions'] = $request->permissions;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'AkEnable',
            'version'     => '2023-08-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/console/ak/enable',
            'method'      => 'POST',
            'authType'    => 'Anonymous',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return AkEnableResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AkEnableRequest $request
     *
     * @return AkEnableResponse
     */
    public function akEnable($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->akEnableWithOptions($request, $headers, $runtime);
    }

    /**
     * @param AkGenerateRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return AkGenerateResponse
     */
    public function akGenerateWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->accessKeyName)) {
            $body['accessKeyName'] = $request->accessKeyName;
        }
        if (!Utils::isUnset($request->permissions)) {
            $body['permissions'] = $request->permissions;
        }
        if (!Utils::isUnset($request->userId)) {
            $body['userId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'AkGenerate',
            'version'     => '2023-08-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/console/ak/generate',
            'method'      => 'POST',
            'authType'    => 'Anonymous',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return AkGenerateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AkGenerateRequest $request
     *
     * @return AkGenerateResponse
     */
    public function akGenerate($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->akGenerateWithOptions($request, $headers, $runtime);
    }

    /**
     * @param AkListPageRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return AkListPageResponse
     */
    public function akListPageWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->page)) {
            $query['page'] = $request->page;
        }
        if (!Utils::isUnset($request->size)) {
            $query['size'] = $request->size;
        }
        if (!Utils::isUnset($request->start)) {
            $query['start'] = $request->start;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AkListPage',
            'version'     => '2023-08-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/console/ak/listPage',
            'method'      => 'GET',
            'authType'    => 'Anonymous',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return AkListPageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AkListPageRequest $request
     *
     * @return AkListPageResponse
     */
    public function akListPage($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->akListPageWithOptions($request, $headers, $runtime);
    }

    /**
     * @param AkUpdateRequest $request
     * @param string[]        $headers
     * @param RuntimeOptions  $runtime
     *
     * @return AkUpdateResponse
     */
    public function akUpdateWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->accessKeyId)) {
            $body['accessKeyId'] = $request->accessKeyId;
        }
        if (!Utils::isUnset($request->accessKeyName)) {
            $body['accessKeyName'] = $request->accessKeyName;
        }
        if (!Utils::isUnset($request->permissions)) {
            $body['permissions'] = $request->permissions;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'AkUpdate',
            'version'     => '2023-08-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/console/ak/update',
            'method'      => 'POST',
            'authType'    => 'Anonymous',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return AkUpdateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AkUpdateRequest $request
     *
     * @return AkUpdateResponse
     */
    public function akUpdate($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->akUpdateWithOptions($request, $headers, $runtime);
    }

    /**
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DimGroupResponse
     */
    public function dimGroupWithOptions($headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DimGroup',
            'version'     => '2023-08-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/console/dim/group',
            'method'      => 'GET',
            'authType'    => 'Anonymous',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DimGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return DimGroupResponse
     */
    public function dimGroup()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->dimGroupWithOptions($headers, $runtime);
    }
}
