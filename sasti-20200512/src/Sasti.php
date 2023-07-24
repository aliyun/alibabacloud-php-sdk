<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sasti\V20200512;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Sasti\V20200512\Models\DescribeDomainReportRequest;
use AlibabaCloud\SDK\Sasti\V20200512\Models\DescribeDomainReportResponse;
use AlibabaCloud\SDK\Sasti\V20200512\Models\DescribeFileReportRequest;
use AlibabaCloud\SDK\Sasti\V20200512\Models\DescribeFileReportResponse;
use AlibabaCloud\SDK\Sasti\V20200512\Models\DescribeIpReportRequest;
use AlibabaCloud\SDK\Sasti\V20200512\Models\DescribeIpReportResponse;
use AlibabaCloud\SDK\Sasti\V20200512\Models\GetGraphQueryTemplatesRequest;
use AlibabaCloud\SDK\Sasti\V20200512\Models\GetGraphQueryTemplatesResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Sasti extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('sasti', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param DescribeDomainReportRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeDomainReportResponse
     */
    public function describeDomainReportWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domain)) {
            $query['Domain'] = $request->domain;
        }
        if (!Utils::isUnset($request->field)) {
            $query['Field'] = $request->field;
        }
        if (!Utils::isUnset($request->serviceLang)) {
            $query['ServiceLang'] = $request->serviceLang;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDomainReport',
            'version'     => '2020-05-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDomainReportResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDomainReportRequest $request
     *
     * @return DescribeDomainReportResponse
     */
    public function describeDomainReport($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDomainReportWithOptions($request, $runtime);
    }

    /**
     * @param DescribeFileReportRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeFileReportResponse
     */
    public function describeFileReportWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->field)) {
            $query['Field'] = $request->field;
        }
        if (!Utils::isUnset($request->fileHash)) {
            $query['FileHash'] = $request->fileHash;
        }
        if (!Utils::isUnset($request->serviceLang)) {
            $query['ServiceLang'] = $request->serviceLang;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeFileReport',
            'version'     => '2020-05-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeFileReportResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeFileReportRequest $request
     *
     * @return DescribeFileReportResponse
     */
    public function describeFileReport($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFileReportWithOptions($request, $runtime);
    }

    /**
     * @param DescribeIpReportRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DescribeIpReportResponse
     */
    public function describeIpReportWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->field)) {
            $query['Field'] = $request->field;
        }
        if (!Utils::isUnset($request->ip)) {
            $query['Ip'] = $request->ip;
        }
        if (!Utils::isUnset($request->serviceLang)) {
            $query['ServiceLang'] = $request->serviceLang;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeIpReport',
            'version'     => '2020-05-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeIpReportResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeIpReportRequest $request
     *
     * @return DescribeIpReportResponse
     */
    public function describeIpReport($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeIpReportWithOptions($request, $runtime);
    }

    /**
     * @param GetGraphQueryTemplatesRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return GetGraphQueryTemplatesResponse
     */
    public function getGraphQueryTemplatesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->env)) {
            $body['Env'] = $request->env;
        }
        if (!Utils::isUnset($request->serviceUnit)) {
            $body['ServiceUnit'] = $request->serviceUnit;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetGraphQueryTemplates',
            'version'     => '2020-05-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetGraphQueryTemplatesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetGraphQueryTemplatesRequest $request
     *
     * @return GetGraphQueryTemplatesResponse
     */
    public function getGraphQueryTemplates($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getGraphQueryTemplatesWithOptions($request, $runtime);
    }
}
