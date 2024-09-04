<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Marketing_event\V20210101;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Marketing_event\V20210101\Models\FindGuestCredentialsRecordRequest;
use AlibabaCloud\SDK\Marketing_event\V20210101\Models\FindGuestCredentialsRecordResponse;
use AlibabaCloud\SDK\Marketing_event\V20210101\Models\FindGuestTicketRecordRequest;
use AlibabaCloud\SDK\Marketing_event\V20210101\Models\FindGuestTicketRecordResponse;
use AlibabaCloud\SDK\Marketing_event\V20210101\Models\QueryAllActivityInfoRequest;
use AlibabaCloud\SDK\Marketing_event\V20210101\Models\QueryAllActivityInfoResponse;
use AlibabaCloud\SDK\Marketing_event\V20210101\Models\QuerySingleActivityInfoRequest;
use AlibabaCloud\SDK\Marketing_event\V20210101\Models\QuerySingleActivityInfoResponse;
use AlibabaCloud\SDK\Marketing_event\V20210101\Models\SyncSignInInfoRequest;
use AlibabaCloud\SDK\Marketing_event\V20210101\Models\SyncSignInInfoResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Marketing_event extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('marketing_event', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @summary 拉取领证人员记录
     *  *
     * @param FindGuestCredentialsRecordRequest $request FindGuestCredentialsRecordRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return FindGuestCredentialsRecordResponse FindGuestCredentialsRecordResponse
     */
    public function findGuestCredentialsRecordWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->activityId)) {
            $query['ActivityId'] = $request->activityId;
        }
        if (!Utils::isUnset($request->dateTimeString)) {
            $query['DateTimeString'] = $request->dateTimeString;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'FindGuestCredentialsRecord',
            'version'     => '2021-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return FindGuestCredentialsRecordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 拉取领证人员记录
     *  *
     * @param FindGuestCredentialsRecordRequest $request FindGuestCredentialsRecordRequest
     *
     * @return FindGuestCredentialsRecordResponse FindGuestCredentialsRecordResponse
     */
    public function findGuestCredentialsRecord($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->findGuestCredentialsRecordWithOptions($request, $runtime);
    }

    /**
     * @summary 云栖大会获取取票人信息list接口
     *  *
     * @param FindGuestTicketRecordRequest $request FindGuestTicketRecordRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return FindGuestTicketRecordResponse FindGuestTicketRecordResponse
     */
    public function findGuestTicketRecordWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->activityId)) {
            $query['ActivityId'] = $request->activityId;
        }
        if (!Utils::isUnset($request->dateTimeString)) {
            $query['DateTimeString'] = $request->dateTimeString;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'FindGuestTicketRecord',
            'version'     => '2021-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return FindGuestTicketRecordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 云栖大会获取取票人信息list接口
     *  *
     * @param FindGuestTicketRecordRequest $request FindGuestTicketRecordRequest
     *
     * @return FindGuestTicketRecordResponse FindGuestTicketRecordResponse
     */
    public function findGuestTicketRecord($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->findGuestTicketRecordWithOptions($request, $runtime);
    }

    /**
     * @param QueryAllActivityInfoRequest $request QueryAllActivityInfoRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryAllActivityInfoResponse QueryAllActivityInfoResponse
     */
    public function queryAllActivityInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryAllActivityInfo',
            'version'     => '2021-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryAllActivityInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryAllActivityInfoRequest $request QueryAllActivityInfoRequest
     *
     * @return QueryAllActivityInfoResponse QueryAllActivityInfoResponse
     */
    public function queryAllActivityInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryAllActivityInfoWithOptions($request, $runtime);
    }

    /**
     * @param QuerySingleActivityInfoRequest $request QuerySingleActivityInfoRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return QuerySingleActivityInfoResponse QuerySingleActivityInfoResponse
     */
    public function querySingleActivityInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QuerySingleActivityInfo',
            'version'     => '2021-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QuerySingleActivityInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QuerySingleActivityInfoRequest $request QuerySingleActivityInfoRequest
     *
     * @return QuerySingleActivityInfoResponse QuerySingleActivityInfoResponse
     */
    public function querySingleActivityInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->querySingleActivityInfoWithOptions($request, $runtime);
    }

    /**
     * @param SyncSignInInfoRequest $request SyncSignInInfoRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return SyncSignInInfoResponse SyncSignInInfoResponse
     */
    public function syncSignInInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SyncSignInInfo',
            'version'     => '2021-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SyncSignInInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SyncSignInInfoRequest $request SyncSignInInfoRequest
     *
     * @return SyncSignInInfoResponse SyncSignInInfoResponse
     */
    public function syncSignInInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->syncSignInInfoWithOptions($request, $runtime);
    }
}
