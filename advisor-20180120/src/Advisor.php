<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Advisor\V20180120;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Advisor\V20180120\Models\DescribeAdvicesPageRequest;
use AlibabaCloud\SDK\Advisor\V20180120\Models\DescribeAdvicesPageResponse;
use AlibabaCloud\SDK\Advisor\V20180120\Models\DescribeAdvicesRequest;
use AlibabaCloud\SDK\Advisor\V20180120\Models\DescribeAdvicesResponse;
use AlibabaCloud\SDK\Advisor\V20180120\Models\DescribeAdvisorChecksRequest;
use AlibabaCloud\SDK\Advisor\V20180120\Models\DescribeAdvisorChecksResponse;
use AlibabaCloud\SDK\Advisor\V20180120\Models\GetHistoryAdvicesRequest;
use AlibabaCloud\SDK\Advisor\V20180120\Models\GetHistoryAdvicesResponse;
use AlibabaCloud\SDK\Advisor\V20180120\Models\RefreshAdvisorCheckRequest;
use AlibabaCloud\SDK\Advisor\V20180120\Models\RefreshAdvisorCheckResponse;
use AlibabaCloud\SDK\Advisor\V20180120\Models\RefreshAdvisorResourceRequest;
use AlibabaCloud\SDK\Advisor\V20180120\Models\RefreshAdvisorResourceResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Advisor extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('advisor', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param DescribeAdvicesRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeAdvicesResponse
     */
    public function describeAdvicesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->adviceId)) {
            $query['AdviceId'] = $request->adviceId;
        }
        if (!Utils::isUnset($request->checkId)) {
            $query['CheckId'] = $request->checkId;
        }
        if (!Utils::isUnset($request->clientUid)) {
            $query['ClientUid'] = $request->clientUid;
        }
        if (!Utils::isUnset($request->excludeAdviceId)) {
            $query['ExcludeAdviceId'] = $request->excludeAdviceId;
        }
        if (!Utils::isUnset($request->filterType)) {
            $query['FilterType'] = $request->filterType;
        }
        if (!Utils::isUnset($request->filterValue)) {
            $query['FilterValue'] = $request->filterValue;
        }
        if (!Utils::isUnset($request->language)) {
            $query['Language'] = $request->language;
        }
        if (!Utils::isUnset($request->product)) {
            $query['Product'] = $request->product;
        }
        if (!Utils::isUnset($request->region)) {
            $query['Region'] = $request->region;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->token)) {
            $query['Token'] = $request->token;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeAdvices',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAdvicesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeAdvicesRequest $request
     *
     * @return DescribeAdvicesResponse
     */
    public function describeAdvices($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAdvicesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAdvicesPageRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeAdvicesPageResponse
     */
    public function describeAdvicesPageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->adviceId)) {
            $query['AdviceId'] = $request->adviceId;
        }
        if (!Utils::isUnset($request->associateUid)) {
            $query['AssociateUid'] = $request->associateUid;
        }
        if (!Utils::isUnset($request->checkId)) {
            $query['CheckId'] = $request->checkId;
        }
        if (!Utils::isUnset($request->excludeAdviceId)) {
            $query['ExcludeAdviceId'] = $request->excludeAdviceId;
        }
        if (!Utils::isUnset($request->language)) {
            $query['Language'] = $request->language;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->product)) {
            $query['Product'] = $request->product;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeAdvicesPage',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAdvicesPageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeAdvicesPageRequest $request
     *
     * @return DescribeAdvicesPageResponse
     */
    public function describeAdvicesPage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAdvicesPageWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAdvisorChecksRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeAdvisorChecksResponse
     */
    public function describeAdvisorChecksWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->checkId)) {
            $query['CheckId'] = $request->checkId;
        }
        if (!Utils::isUnset($request->language)) {
            $query['Language'] = $request->language;
        }
        if (!Utils::isUnset($request->product)) {
            $query['Product'] = $request->product;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeAdvisorChecks',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAdvisorChecksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeAdvisorChecksRequest $request
     *
     * @return DescribeAdvisorChecksResponse
     */
    public function describeAdvisorChecks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAdvisorChecksWithOptions($request, $runtime);
    }

    /**
     * @param GetHistoryAdvicesRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetHistoryAdvicesResponse
     */
    public function getHistoryAdvicesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->associateUid)) {
            $query['AssociateUid'] = $request->associateUid;
        }
        if (!Utils::isUnset($request->checkId)) {
            $query['CheckId'] = $request->checkId;
        }
        if (!Utils::isUnset($request->clientUid)) {
            $query['ClientUid'] = $request->clientUid;
        }
        if (!Utils::isUnset($request->endDate)) {
            $query['EndDate'] = $request->endDate;
        }
        if (!Utils::isUnset($request->filterType)) {
            $query['FilterType'] = $request->filterType;
        }
        if (!Utils::isUnset($request->filterValue)) {
            $query['FilterValue'] = $request->filterValue;
        }
        if (!Utils::isUnset($request->isExpired)) {
            $query['IsExpired'] = $request->isExpired;
        }
        if (!Utils::isUnset($request->language)) {
            $query['Language'] = $request->language;
        }
        if (!Utils::isUnset($request->pageNum)) {
            $query['PageNum'] = $request->pageNum;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->product)) {
            $query['Product'] = $request->product;
        }
        if (!Utils::isUnset($request->region)) {
            $query['Region'] = $request->region;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->reverse)) {
            $query['Reverse'] = $request->reverse;
        }
        if (!Utils::isUnset($request->severity)) {
            $query['Severity'] = $request->severity;
        }
        if (!Utils::isUnset($request->startDate)) {
            $query['StartDate'] = $request->startDate;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetHistoryAdvices',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetHistoryAdvicesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetHistoryAdvicesRequest $request
     *
     * @return GetHistoryAdvicesResponse
     */
    public function getHistoryAdvices($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getHistoryAdvicesWithOptions($request, $runtime);
    }

    /**
     * @param RefreshAdvisorCheckRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return RefreshAdvisorCheckResponse
     */
    public function refreshAdvisorCheckWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->checkId)) {
            $query['CheckId'] = $request->checkId;
        }
        if (!Utils::isUnset($request->language)) {
            $query['Language'] = $request->language;
        }
        if (!Utils::isUnset($request->product)) {
            $query['Product'] = $request->product;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RefreshAdvisorCheck',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RefreshAdvisorCheckResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RefreshAdvisorCheckRequest $request
     *
     * @return RefreshAdvisorCheckResponse
     */
    public function refreshAdvisorCheck($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->refreshAdvisorCheckWithOptions($request, $runtime);
    }

    /**
     * @param RefreshAdvisorResourceRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return RefreshAdvisorResourceResponse
     */
    public function refreshAdvisorResourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->product)) {
            $query['Product'] = $request->product;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RefreshAdvisorResource',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RefreshAdvisorResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RefreshAdvisorResourceRequest $request
     *
     * @return RefreshAdvisorResourceResponse
     */
    public function refreshAdvisorResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->refreshAdvisorResourceWithOptions($request, $runtime);
    }
}
