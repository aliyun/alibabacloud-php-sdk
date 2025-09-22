<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Marketing_event\V20210101;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\Marketing_event\V20210101\Models\AddSumRecordFlowPopRequest;
use AlibabaCloud\SDK\Marketing_event\V20210101\Models\AddSumRecordFlowPopResponse;
use AlibabaCloud\SDK\Marketing_event\V20210101\Models\BindExhibitorRfidPopRequest;
use AlibabaCloud\SDK\Marketing_event\V20210101\Models\BindExhibitorRfidPopResponse;
use AlibabaCloud\SDK\Marketing_event\V20210101\Models\BindGuestRfidPopRequest;
use AlibabaCloud\SDK\Marketing_event\V20210101\Models\BindGuestRfidPopResponse;
use AlibabaCloud\SDK\Marketing_event\V20210101\Models\CheckNFCBindPopRequest;
use AlibabaCloud\SDK\Marketing_event\V20210101\Models\CheckNFCBindPopResponse;
use AlibabaCloud\SDK\Marketing_event\V20210101\Models\FindGuestCredentialsRecordRequest;
use AlibabaCloud\SDK\Marketing_event\V20210101\Models\FindGuestCredentialsRecordResponse;
use AlibabaCloud\SDK\Marketing_event\V20210101\Models\FindGuestTicketRecordRequest;
use AlibabaCloud\SDK\Marketing_event\V20210101\Models\FindGuestTicketRecordResponse;
use AlibabaCloud\SDK\Marketing_event\V20210101\Models\QueryAllActivityInfoRequest;
use AlibabaCloud\SDK\Marketing_event\V20210101\Models\QueryAllActivityInfoResponse;
use AlibabaCloud\SDK\Marketing_event\V20210101\Models\QueryOrderSessionListPopRequest;
use AlibabaCloud\SDK\Marketing_event\V20210101\Models\QueryOrderSessionListPopResponse;
use AlibabaCloud\SDK\Marketing_event\V20210101\Models\QuerySessionByActivityIdPopRequest;
use AlibabaCloud\SDK\Marketing_event\V20210101\Models\QuerySessionByActivityIdPopResponse;
use AlibabaCloud\SDK\Marketing_event\V20210101\Models\QuerySessionListPopRequest;
use AlibabaCloud\SDK\Marketing_event\V20210101\Models\QuerySessionListPopResponse;
use AlibabaCloud\SDK\Marketing_event\V20210101\Models\QuerySignInRecordPopRequest;
use AlibabaCloud\SDK\Marketing_event\V20210101\Models\QuerySignInRecordPopResponse;
use AlibabaCloud\SDK\Marketing_event\V20210101\Models\QuerySingleActivityInfoRequest;
use AlibabaCloud\SDK\Marketing_event\V20210101\Models\QuerySingleActivityInfoResponse;
use AlibabaCloud\SDK\Marketing_event\V20210101\Models\SyncSignInInfoRequest;
use AlibabaCloud\SDK\Marketing_event\V20210101\Models\SyncSignInInfoResponse;
use AlibabaCloud\SDK\Marketing_event\V20210101\Models\TicketOrCredentialsSignInPopRequest;
use AlibabaCloud\SDK\Marketing_event\V20210101\Models\TicketOrCredentialsSignInPopResponse;
use AlibabaCloud\SDK\Marketing_event\V20210101\Models\UpdateCredentialsStatusPopRequest;
use AlibabaCloud\SDK\Marketing_event\V20210101\Models\UpdateCredentialsStatusPopResponse;
use AlibabaCloud\SDK\Marketing_event\V20210101\Models\UpdateTicketRecordByticketCodePopRequest;
use AlibabaCloud\SDK\Marketing_event\V20210101\Models\UpdateTicketRecordByticketCodePopResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

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
        if (null !== $endpoint) {
            return $endpoint;
        }

        if (null !== $endpointMap && null !== @$endpointMap[$regionId]) {
            return @$endpointMap[$regionId];
        }

        return Utils::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * @param request - AddSumRecordFlowPopRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddSumRecordFlowPopResponse
     *
     * @param AddSumRecordFlowPopRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return AddSumRecordFlowPopResponse
     */
    public function addSumRecordFlowPopWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->activityId) {
            @$query['ActivityId'] = $request->activityId;
        }

        if (null !== $request->code) {
            @$query['Code'] = $request->code;
        }

        if (null !== $request->conferenceName) {
            @$query['ConferenceName'] = $request->conferenceName;
        }

        if (null !== $request->deviceId) {
            @$query['DeviceId'] = $request->deviceId;
        }

        if (null !== $request->entryName) {
            @$query['EntryName'] = $request->entryName;
        }

        if (null !== $request->idcard) {
            @$query['Idcard'] = $request->idcard;
        }

        if (null !== $request->signTime) {
            @$query['SignTime'] = $request->signTime;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AddSumRecordFlowPop',
            'version' => '2021-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddSumRecordFlowPopResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - AddSumRecordFlowPopRequest
     *
     * @returns AddSumRecordFlowPopResponse
     *
     * @param AddSumRecordFlowPopRequest $request
     *
     * @return AddSumRecordFlowPopResponse
     */
    public function addSumRecordFlowPop($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addSumRecordFlowPopWithOptions($request, $runtime);
    }

    /**
     * @param request - BindExhibitorRfidPopRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BindExhibitorRfidPopResponse
     *
     * @param BindExhibitorRfidPopRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return BindExhibitorRfidPopResponse
     */
    public function bindExhibitorRfidPopWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->activityId) {
            @$query['ActivityId'] = $request->activityId;
        }

        if (null !== $request->deviceId) {
            @$query['DeviceId'] = $request->deviceId;
        }

        if (null !== $request->gmtCreate) {
            @$query['GmtCreate'] = $request->gmtCreate;
        }

        if (null !== $request->gmtModified) {
            @$query['GmtModified'] = $request->gmtModified;
        }

        if (null !== $request->guestTicketRecordId) {
            @$query['GuestTicketRecordId'] = $request->guestTicketRecordId;
        }

        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        if (null !== $request->rfid) {
            @$query['Rfid'] = $request->rfid;
        }

        if (null !== $request->ticketCode) {
            @$query['TicketCode'] = $request->ticketCode;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'BindExhibitorRfidPop',
            'version' => '2021-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return BindExhibitorRfidPopResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - BindExhibitorRfidPopRequest
     *
     * @returns BindExhibitorRfidPopResponse
     *
     * @param BindExhibitorRfidPopRequest $request
     *
     * @return BindExhibitorRfidPopResponse
     */
    public function bindExhibitorRfidPop($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->bindExhibitorRfidPopWithOptions($request, $runtime);
    }

    /**
     * @param request - BindGuestRfidPopRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BindGuestRfidPopResponse
     *
     * @param BindGuestRfidPopRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return BindGuestRfidPopResponse
     */
    public function bindGuestRfidPopWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->activityId) {
            @$query['ActivityId'] = $request->activityId;
        }

        if (null !== $request->deviceId) {
            @$query['DeviceId'] = $request->deviceId;
        }

        if (null !== $request->gmtCreate) {
            @$query['GmtCreate'] = $request->gmtCreate;
        }

        if (null !== $request->gmtModified) {
            @$query['GmtModified'] = $request->gmtModified;
        }

        if (null !== $request->guestTicketRecordId) {
            @$query['GuestTicketRecordId'] = $request->guestTicketRecordId;
        }

        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        if (null !== $request->rfid) {
            @$query['Rfid'] = $request->rfid;
        }

        if (null !== $request->ticketCode) {
            @$query['TicketCode'] = $request->ticketCode;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'BindGuestRfidPop',
            'version' => '2021-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return BindGuestRfidPopResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - BindGuestRfidPopRequest
     *
     * @returns BindGuestRfidPopResponse
     *
     * @param BindGuestRfidPopRequest $request
     *
     * @return BindGuestRfidPopResponse
     */
    public function bindGuestRfidPop($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->bindGuestRfidPopWithOptions($request, $runtime);
    }

    /**
     * @param request - CheckNFCBindPopRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CheckNFCBindPopResponse
     *
     * @param CheckNFCBindPopRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CheckNFCBindPopResponse
     */
    public function checkNFCBindPopWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->activityId) {
            @$query['ActivityId'] = $request->activityId;
        }

        if (null !== $request->nfcId) {
            @$query['NfcId'] = $request->nfcId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CheckNFCBindPop',
            'version' => '2021-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CheckNFCBindPopResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - CheckNFCBindPopRequest
     *
     * @returns CheckNFCBindPopResponse
     *
     * @param CheckNFCBindPopRequest $request
     *
     * @return CheckNFCBindPopResponse
     */
    public function checkNFCBindPop($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkNFCBindPopWithOptions($request, $runtime);
    }

    /**
     * 拉取领证人员记录.
     *
     * @param request - FindGuestCredentialsRecordRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns FindGuestCredentialsRecordResponse
     *
     * @param FindGuestCredentialsRecordRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return FindGuestCredentialsRecordResponse
     */
    public function findGuestCredentialsRecordWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->activityId) {
            @$query['ActivityId'] = $request->activityId;
        }

        if (null !== $request->dateTimeString) {
            @$query['DateTimeString'] = $request->dateTimeString;
        }

        if (null !== $request->endDateTime) {
            @$query['EndDateTime'] = $request->endDateTime;
        }

        if (null !== $request->startDateTime) {
            @$query['StartDateTime'] = $request->startDateTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'FindGuestCredentialsRecord',
            'version' => '2021-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return FindGuestCredentialsRecordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 拉取领证人员记录.
     *
     * @param request - FindGuestCredentialsRecordRequest
     *
     * @returns FindGuestCredentialsRecordResponse
     *
     * @param FindGuestCredentialsRecordRequest $request
     *
     * @return FindGuestCredentialsRecordResponse
     */
    public function findGuestCredentialsRecord($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->findGuestCredentialsRecordWithOptions($request, $runtime);
    }

    /**
     * 云栖大会获取取票人信息list接口.
     *
     * @param request - FindGuestTicketRecordRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns FindGuestTicketRecordResponse
     *
     * @param FindGuestTicketRecordRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return FindGuestTicketRecordResponse
     */
    public function findGuestTicketRecordWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->activityId) {
            @$query['ActivityId'] = $request->activityId;
        }

        if (null !== $request->dateTimeString) {
            @$query['DateTimeString'] = $request->dateTimeString;
        }

        if (null !== $request->endDateTime) {
            @$query['EndDateTime'] = $request->endDateTime;
        }

        if (null !== $request->startDateTime) {
            @$query['StartDateTime'] = $request->startDateTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'FindGuestTicketRecord',
            'version' => '2021-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return FindGuestTicketRecordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 云栖大会获取取票人信息list接口.
     *
     * @param request - FindGuestTicketRecordRequest
     *
     * @returns FindGuestTicketRecordResponse
     *
     * @param FindGuestTicketRecordRequest $request
     *
     * @return FindGuestTicketRecordResponse
     */
    public function findGuestTicketRecord($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->findGuestTicketRecordWithOptions($request, $runtime);
    }

    /**
     * @param request - QueryAllActivityInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryAllActivityInfoResponse
     *
     * @param QueryAllActivityInfoRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return QueryAllActivityInfoResponse
     */
    public function queryAllActivityInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryAllActivityInfo',
            'version' => '2021-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryAllActivityInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QueryAllActivityInfoRequest
     *
     * @returns QueryAllActivityInfoResponse
     *
     * @param QueryAllActivityInfoRequest $request
     *
     * @return QueryAllActivityInfoResponse
     */
    public function queryAllActivityInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryAllActivityInfoWithOptions($request, $runtime);
    }

    /**
     * @param request - QueryOrderSessionListPopRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryOrderSessionListPopResponse
     *
     * @param QueryOrderSessionListPopRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return QueryOrderSessionListPopResponse
     */
    public function queryOrderSessionListPopWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->activityId) {
            @$query['ActivityId'] = $request->activityId;
        }

        if (null !== $request->nfcId) {
            @$query['NfcId'] = $request->nfcId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryOrderSessionListPop',
            'version' => '2021-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryOrderSessionListPopResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QueryOrderSessionListPopRequest
     *
     * @returns QueryOrderSessionListPopResponse
     *
     * @param QueryOrderSessionListPopRequest $request
     *
     * @return QueryOrderSessionListPopResponse
     */
    public function queryOrderSessionListPop($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryOrderSessionListPopWithOptions($request, $runtime);
    }

    /**
     * @param request - QuerySessionByActivityIdPopRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QuerySessionByActivityIdPopResponse
     *
     * @param QuerySessionByActivityIdPopRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return QuerySessionByActivityIdPopResponse
     */
    public function querySessionByActivityIdPopWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->activityId) {
            @$query['ActivityId'] = $request->activityId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QuerySessionByActivityIdPop',
            'version' => '2021-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QuerySessionByActivityIdPopResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QuerySessionByActivityIdPopRequest
     *
     * @returns QuerySessionByActivityIdPopResponse
     *
     * @param QuerySessionByActivityIdPopRequest $request
     *
     * @return QuerySessionByActivityIdPopResponse
     */
    public function querySessionByActivityIdPop($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->querySessionByActivityIdPopWithOptions($request, $runtime);
    }

    /**
     * @param request - QuerySessionListPopRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QuerySessionListPopResponse
     *
     * @param QuerySessionListPopRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return QuerySessionListPopResponse
     */
    public function querySessionListPopWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->activityId) {
            @$query['ActivityId'] = $request->activityId;
        }

        if (null !== $request->nfcId) {
            @$query['NfcId'] = $request->nfcId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QuerySessionListPop',
            'version' => '2021-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QuerySessionListPopResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QuerySessionListPopRequest
     *
     * @returns QuerySessionListPopResponse
     *
     * @param QuerySessionListPopRequest $request
     *
     * @return QuerySessionListPopResponse
     */
    public function querySessionListPop($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->querySessionListPopWithOptions($request, $runtime);
    }

    /**
     * @param request - QuerySignInRecordPopRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QuerySignInRecordPopResponse
     *
     * @param QuerySignInRecordPopRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return QuerySignInRecordPopResponse
     */
    public function querySignInRecordPopWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->activityId) {
            @$query['ActivityId'] = $request->activityId;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->pageNum) {
            @$query['PageNum'] = $request->pageNum;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QuerySignInRecordPop',
            'version' => '2021-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QuerySignInRecordPopResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QuerySignInRecordPopRequest
     *
     * @returns QuerySignInRecordPopResponse
     *
     * @param QuerySignInRecordPopRequest $request
     *
     * @return QuerySignInRecordPopResponse
     */
    public function querySignInRecordPop($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->querySignInRecordPopWithOptions($request, $runtime);
    }

    /**
     * @param request - QuerySingleActivityInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QuerySingleActivityInfoResponse
     *
     * @param QuerySingleActivityInfoRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return QuerySingleActivityInfoResponse
     */
    public function querySingleActivityInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QuerySingleActivityInfo',
            'version' => '2021-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QuerySingleActivityInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QuerySingleActivityInfoRequest
     *
     * @returns QuerySingleActivityInfoResponse
     *
     * @param QuerySingleActivityInfoRequest $request
     *
     * @return QuerySingleActivityInfoResponse
     */
    public function querySingleActivityInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->querySingleActivityInfoWithOptions($request, $runtime);
    }

    /**
     * @param request - SyncSignInInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SyncSignInInfoResponse
     *
     * @param SyncSignInInfoRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return SyncSignInInfoResponse
     */
    public function syncSignInInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SyncSignInInfo',
            'version' => '2021-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SyncSignInInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - SyncSignInInfoRequest
     *
     * @returns SyncSignInInfoResponse
     *
     * @param SyncSignInInfoRequest $request
     *
     * @return SyncSignInInfoResponse
     */
    public function syncSignInInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->syncSignInInfoWithOptions($request, $runtime);
    }

    /**
     * @param request - TicketOrCredentialsSignInPopRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns TicketOrCredentialsSignInPopResponse
     *
     * @param TicketOrCredentialsSignInPopRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return TicketOrCredentialsSignInPopResponse
     */
    public function ticketOrCredentialsSignInPopWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->activityId) {
            @$query['ActivityId'] = $request->activityId;
        }

        if (null !== $request->code) {
            @$query['Code'] = $request->code;
        }

        if (null !== $request->conferenceName) {
            @$query['ConferenceName'] = $request->conferenceName;
        }

        if (null !== $request->deviceId) {
            @$query['DeviceId'] = $request->deviceId;
        }

        if (null !== $request->entryName) {
            @$query['EntryName'] = $request->entryName;
        }

        if (null !== $request->idcard) {
            @$query['Idcard'] = $request->idcard;
        }

        if (null !== $request->signTime) {
            @$query['SignTime'] = $request->signTime;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'TicketOrCredentialsSignInPop',
            'version' => '2021-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return TicketOrCredentialsSignInPopResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - TicketOrCredentialsSignInPopRequest
     *
     * @returns TicketOrCredentialsSignInPopResponse
     *
     * @param TicketOrCredentialsSignInPopRequest $request
     *
     * @return TicketOrCredentialsSignInPopResponse
     */
    public function ticketOrCredentialsSignInPop($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->ticketOrCredentialsSignInPopWithOptions($request, $runtime);
    }

    /**
     * @param request - UpdateCredentialsStatusPopRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateCredentialsStatusPopResponse
     *
     * @param UpdateCredentialsStatusPopRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return UpdateCredentialsStatusPopResponse
     */
    public function updateCredentialsStatusPopWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->code) {
            @$query['Code'] = $request->code;
        }

        if (null !== $request->proxyRecipientName) {
            @$query['ProxyRecipientName'] = $request->proxyRecipientName;
        }

        if (null !== $request->proxyRecipientPhoneNumber) {
            @$query['ProxyRecipientPhoneNumber'] = $request->proxyRecipientPhoneNumber;
        }

        if (null !== $request->receiptLocation) {
            @$query['ReceiptLocation'] = $request->receiptLocation;
        }

        if (null !== $request->time) {
            @$query['Time'] = $request->time;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateCredentialsStatusPop',
            'version' => '2021-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateCredentialsStatusPopResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - UpdateCredentialsStatusPopRequest
     *
     * @returns UpdateCredentialsStatusPopResponse
     *
     * @param UpdateCredentialsStatusPopRequest $request
     *
     * @return UpdateCredentialsStatusPopResponse
     */
    public function updateCredentialsStatusPop($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateCredentialsStatusPopWithOptions($request, $runtime);
    }

    /**
     * @param request - UpdateTicketRecordByticketCodePopRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateTicketRecordByticketCodePopResponse
     *
     * @param UpdateTicketRecordByticketCodePopRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return UpdateTicketRecordByticketCodePopResponse
     */
    public function updateTicketRecordByticketCodePopWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agendaId) {
            @$query['AgendaId'] = $request->agendaId;
        }

        if (null !== $request->code) {
            @$query['Code'] = $request->code;
        }

        if (null !== $request->event) {
            @$query['Event'] = $request->event;
        }

        if (null !== $request->sceneId) {
            @$query['SceneId'] = $request->sceneId;
        }

        if (null !== $request->time) {
            @$query['Time'] = $request->time;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateTicketRecordByticketCodePop',
            'version' => '2021-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateTicketRecordByticketCodePopResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - UpdateTicketRecordByticketCodePopRequest
     *
     * @returns UpdateTicketRecordByticketCodePopResponse
     *
     * @param UpdateTicketRecordByticketCodePopRequest $request
     *
     * @return UpdateTicketRecordByticketCodePopResponse
     */
    public function updateTicketRecordByticketCodePop($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateTicketRecordByticketCodePopWithOptions($request, $runtime);
    }
}
