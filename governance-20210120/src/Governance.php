<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Governance\V20210120;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Governance\V20210120\Models\EnrollAccountRequest;
use AlibabaCloud\SDK\Governance\V20210120\Models\EnrollAccountResponse;
use AlibabaCloud\SDK\Governance\V20210120\Models\GetEnrolledAccountRequest;
use AlibabaCloud\SDK\Governance\V20210120\Models\GetEnrolledAccountResponse;
use AlibabaCloud\SDK\Governance\V20210120\Models\ListEnrolledAccountsRequest;
use AlibabaCloud\SDK\Governance\V20210120\Models\ListEnrolledAccountsResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Governance extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('governance', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param EnrollAccountRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return EnrollAccountResponse
     */
    public function enrollAccountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accountNamePrefix)) {
            $query['AccountNamePrefix'] = $request->accountNamePrefix;
        }
        if (!Utils::isUnset($request->accountUid)) {
            $query['AccountUid'] = $request->accountUid;
        }
        if (!Utils::isUnset($request->baselineItems)) {
            $query['BaselineItems'] = $request->baselineItems;
        }
        if (!Utils::isUnset($request->displayName)) {
            $query['DisplayName'] = $request->displayName;
        }
        if (!Utils::isUnset($request->folderId)) {
            $query['FolderId'] = $request->folderId;
        }
        if (!Utils::isUnset($request->payerAccountUid)) {
            $query['PayerAccountUid'] = $request->payerAccountUid;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'EnrollAccount',
            'version'     => '2021-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return EnrollAccountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param EnrollAccountRequest $request
     *
     * @return EnrollAccountResponse
     */
    public function enrollAccount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enrollAccountWithOptions($request, $runtime);
    }

    /**
     * @param GetEnrolledAccountRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetEnrolledAccountResponse
     */
    public function getEnrolledAccountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accountUid)) {
            $query['AccountUid'] = $request->accountUid;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetEnrolledAccount',
            'version'     => '2021-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetEnrolledAccountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetEnrolledAccountRequest $request
     *
     * @return GetEnrolledAccountResponse
     */
    public function getEnrolledAccount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getEnrolledAccountWithOptions($request, $runtime);
    }

    /**
     * @param ListEnrolledAccountsRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ListEnrolledAccountsResponse
     */
    public function listEnrolledAccountsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListEnrolledAccounts',
            'version'     => '2021-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListEnrolledAccountsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListEnrolledAccountsRequest $request
     *
     * @return ListEnrolledAccountsResponse
     */
    public function listEnrolledAccounts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listEnrolledAccountsWithOptions($request, $runtime);
    }
}
