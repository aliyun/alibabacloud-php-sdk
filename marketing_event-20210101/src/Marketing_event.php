<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Marketing_event\V20210101;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
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
     * @param AddSumRecordFlowPopRequest $request AddSumRecordFlowPopRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return AddSumRecordFlowPopResponse AddSumRecordFlowPopResponse
     */
    public function addSumRecordFlowPopWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->activityId)) {
            $query['ActivityId'] = $request->activityId;
        }
        if (!Utils::isUnset($request->code)) {
            $query['Code'] = $request->code;
        }
        if (!Utils::isUnset($request->conferenceName)) {
            $query['ConferenceName'] = $request->conferenceName;
        }
        if (!Utils::isUnset($request->deviceId)) {
            $query['DeviceId'] = $request->deviceId;
        }
        if (!Utils::isUnset($request->entryName)) {
            $query['EntryName'] = $request->entryName;
        }
        if (!Utils::isUnset($request->idcard)) {
            $query['Idcard'] = $request->idcard;
        }
        if (!Utils::isUnset($request->signTime)) {
            $query['SignTime'] = $request->signTime;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddSumRecordFlowPop',
            'version'     => '2021-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddSumRecordFlowPopResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddSumRecordFlowPopRequest $request AddSumRecordFlowPopRequest
     *
     * @return AddSumRecordFlowPopResponse AddSumRecordFlowPopResponse
     */
    public function addSumRecordFlowPop($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addSumRecordFlowPopWithOptions($request, $runtime);
    }

    /**
     * @param BindExhibitorRfidPopRequest $request BindExhibitorRfidPopRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return BindExhibitorRfidPopResponse BindExhibitorRfidPopResponse
     */
    public function bindExhibitorRfidPopWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->activityId)) {
            $query['ActivityId'] = $request->activityId;
        }
        if (!Utils::isUnset($request->deviceId)) {
            $query['DeviceId'] = $request->deviceId;
        }
        if (!Utils::isUnset($request->gmtCreate)) {
            $query['GmtCreate'] = $request->gmtCreate;
        }
        if (!Utils::isUnset($request->gmtModified)) {
            $query['GmtModified'] = $request->gmtModified;
        }
        if (!Utils::isUnset($request->guestTicketRecordId)) {
            $query['GuestTicketRecordId'] = $request->guestTicketRecordId;
        }
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->rfid)) {
            $query['Rfid'] = $request->rfid;
        }
        if (!Utils::isUnset($request->ticketCode)) {
            $query['TicketCode'] = $request->ticketCode;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'BindExhibitorRfidPop',
            'version'     => '2021-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BindExhibitorRfidPopResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param BindExhibitorRfidPopRequest $request BindExhibitorRfidPopRequest
     *
     * @return BindExhibitorRfidPopResponse BindExhibitorRfidPopResponse
     */
    public function bindExhibitorRfidPop($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->bindExhibitorRfidPopWithOptions($request, $runtime);
    }

    /**
     * @param BindGuestRfidPopRequest $request BindGuestRfidPopRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return BindGuestRfidPopResponse BindGuestRfidPopResponse
     */
    public function bindGuestRfidPopWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->activityId)) {
            $query['ActivityId'] = $request->activityId;
        }
        if (!Utils::isUnset($request->deviceId)) {
            $query['DeviceId'] = $request->deviceId;
        }
        if (!Utils::isUnset($request->gmtCreate)) {
            $query['GmtCreate'] = $request->gmtCreate;
        }
        if (!Utils::isUnset($request->gmtModified)) {
            $query['GmtModified'] = $request->gmtModified;
        }
        if (!Utils::isUnset($request->guestTicketRecordId)) {
            $query['GuestTicketRecordId'] = $request->guestTicketRecordId;
        }
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->rfid)) {
            $query['Rfid'] = $request->rfid;
        }
        if (!Utils::isUnset($request->ticketCode)) {
            $query['TicketCode'] = $request->ticketCode;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'BindGuestRfidPop',
            'version'     => '2021-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BindGuestRfidPopResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param BindGuestRfidPopRequest $request BindGuestRfidPopRequest
     *
     * @return BindGuestRfidPopResponse BindGuestRfidPopResponse
     */
    public function bindGuestRfidPop($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->bindGuestRfidPopWithOptions($request, $runtime);
    }

    /**
     * @param CheckNFCBindPopRequest $request CheckNFCBindPopRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return CheckNFCBindPopResponse CheckNFCBindPopResponse
     */
    public function checkNFCBindPopWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->activityId)) {
            $query['ActivityId'] = $request->activityId;
        }
        if (!Utils::isUnset($request->nfcId)) {
            $query['NfcId'] = $request->nfcId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CheckNFCBindPop',
            'version'     => '2021-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CheckNFCBindPopResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CheckNFCBindPopRequest $request CheckNFCBindPopRequest
     *
     * @return CheckNFCBindPopResponse CheckNFCBindPopResponse
     */
    public function checkNFCBindPop($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkNFCBindPopWithOptions($request, $runtime);
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
        if (!Utils::isUnset($request->endDateTime)) {
            $query['EndDateTime'] = $request->endDateTime;
        }
        if (!Utils::isUnset($request->startDateTime)) {
            $query['StartDateTime'] = $request->startDateTime;
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
        if (!Utils::isUnset($request->endDateTime)) {
            $query['EndDateTime'] = $request->endDateTime;
        }
        if (!Utils::isUnset($request->startDateTime)) {
            $query['StartDateTime'] = $request->startDateTime;
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
     * @param QueryOrderSessionListPopRequest $request QueryOrderSessionListPopRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryOrderSessionListPopResponse QueryOrderSessionListPopResponse
     */
    public function queryOrderSessionListPopWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->activityId)) {
            $query['ActivityId'] = $request->activityId;
        }
        if (!Utils::isUnset($request->nfcId)) {
            $query['NfcId'] = $request->nfcId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryOrderSessionListPop',
            'version'     => '2021-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryOrderSessionListPopResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryOrderSessionListPopRequest $request QueryOrderSessionListPopRequest
     *
     * @return QueryOrderSessionListPopResponse QueryOrderSessionListPopResponse
     */
    public function queryOrderSessionListPop($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryOrderSessionListPopWithOptions($request, $runtime);
    }

    /**
     * @param QuerySessionByActivityIdPopRequest $request QuerySessionByActivityIdPopRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return QuerySessionByActivityIdPopResponse QuerySessionByActivityIdPopResponse
     */
    public function querySessionByActivityIdPopWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->activityId)) {
            $query['ActivityId'] = $request->activityId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QuerySessionByActivityIdPop',
            'version'     => '2021-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QuerySessionByActivityIdPopResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QuerySessionByActivityIdPopRequest $request QuerySessionByActivityIdPopRequest
     *
     * @return QuerySessionByActivityIdPopResponse QuerySessionByActivityIdPopResponse
     */
    public function querySessionByActivityIdPop($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->querySessionByActivityIdPopWithOptions($request, $runtime);
    }

    /**
     * @param QuerySessionListPopRequest $request QuerySessionListPopRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return QuerySessionListPopResponse QuerySessionListPopResponse
     */
    public function querySessionListPopWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->activityId)) {
            $query['ActivityId'] = $request->activityId;
        }
        if (!Utils::isUnset($request->nfcId)) {
            $query['NfcId'] = $request->nfcId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QuerySessionListPop',
            'version'     => '2021-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QuerySessionListPopResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QuerySessionListPopRequest $request QuerySessionListPopRequest
     *
     * @return QuerySessionListPopResponse QuerySessionListPopResponse
     */
    public function querySessionListPop($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->querySessionListPopWithOptions($request, $runtime);
    }

    /**
     * @param QuerySignInRecordPopRequest $request QuerySignInRecordPopRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return QuerySignInRecordPopResponse QuerySignInRecordPopResponse
     */
    public function querySignInRecordPopWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->activityId)) {
            $query['ActivityId'] = $request->activityId;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->pageNum)) {
            $query['PageNum'] = $request->pageNum;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QuerySignInRecordPop',
            'version'     => '2021-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QuerySignInRecordPopResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QuerySignInRecordPopRequest $request QuerySignInRecordPopRequest
     *
     * @return QuerySignInRecordPopResponse QuerySignInRecordPopResponse
     */
    public function querySignInRecordPop($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->querySignInRecordPopWithOptions($request, $runtime);
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

    /**
     * @param TicketOrCredentialsSignInPopRequest $request TicketOrCredentialsSignInPopRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return TicketOrCredentialsSignInPopResponse TicketOrCredentialsSignInPopResponse
     */
    public function ticketOrCredentialsSignInPopWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->activityId)) {
            $query['ActivityId'] = $request->activityId;
        }
        if (!Utils::isUnset($request->code)) {
            $query['Code'] = $request->code;
        }
        if (!Utils::isUnset($request->conferenceName)) {
            $query['ConferenceName'] = $request->conferenceName;
        }
        if (!Utils::isUnset($request->deviceId)) {
            $query['DeviceId'] = $request->deviceId;
        }
        if (!Utils::isUnset($request->entryName)) {
            $query['EntryName'] = $request->entryName;
        }
        if (!Utils::isUnset($request->idcard)) {
            $query['Idcard'] = $request->idcard;
        }
        if (!Utils::isUnset($request->signTime)) {
            $query['SignTime'] = $request->signTime;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'TicketOrCredentialsSignInPop',
            'version'     => '2021-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return TicketOrCredentialsSignInPopResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param TicketOrCredentialsSignInPopRequest $request TicketOrCredentialsSignInPopRequest
     *
     * @return TicketOrCredentialsSignInPopResponse TicketOrCredentialsSignInPopResponse
     */
    public function ticketOrCredentialsSignInPop($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->ticketOrCredentialsSignInPopWithOptions($request, $runtime);
    }

    /**
     * @param UpdateCredentialsStatusPopRequest $request UpdateCredentialsStatusPopRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateCredentialsStatusPopResponse UpdateCredentialsStatusPopResponse
     */
    public function updateCredentialsStatusPopWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->code)) {
            $query['Code'] = $request->code;
        }
        if (!Utils::isUnset($request->proxyRecipientName)) {
            $query['ProxyRecipientName'] = $request->proxyRecipientName;
        }
        if (!Utils::isUnset($request->proxyRecipientPhoneNumber)) {
            $query['ProxyRecipientPhoneNumber'] = $request->proxyRecipientPhoneNumber;
        }
        if (!Utils::isUnset($request->receiptLocation)) {
            $query['ReceiptLocation'] = $request->receiptLocation;
        }
        if (!Utils::isUnset($request->time)) {
            $query['Time'] = $request->time;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateCredentialsStatusPop',
            'version'     => '2021-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateCredentialsStatusPopResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateCredentialsStatusPopRequest $request UpdateCredentialsStatusPopRequest
     *
     * @return UpdateCredentialsStatusPopResponse UpdateCredentialsStatusPopResponse
     */
    public function updateCredentialsStatusPop($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateCredentialsStatusPopWithOptions($request, $runtime);
    }

    /**
     * @param UpdateTicketRecordByticketCodePopRequest $request UpdateTicketRecordByticketCodePopRequest
     * @param RuntimeOptions                           $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateTicketRecordByticketCodePopResponse UpdateTicketRecordByticketCodePopResponse
     */
    public function updateTicketRecordByticketCodePopWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agendaId)) {
            $query['AgendaId'] = $request->agendaId;
        }
        if (!Utils::isUnset($request->code)) {
            $query['Code'] = $request->code;
        }
        if (!Utils::isUnset($request->event)) {
            $query['Event'] = $request->event;
        }
        if (!Utils::isUnset($request->sceneId)) {
            $query['SceneId'] = $request->sceneId;
        }
        if (!Utils::isUnset($request->time)) {
            $query['Time'] = $request->time;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateTicketRecordByticketCodePop',
            'version'     => '2021-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateTicketRecordByticketCodePopResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateTicketRecordByticketCodePopRequest $request UpdateTicketRecordByticketCodePopRequest
     *
     * @return UpdateTicketRecordByticketCodePopResponse UpdateTicketRecordByticketCodePopResponse
     */
    public function updateTicketRecordByticketCodePop($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateTicketRecordByticketCodePopWithOptions($request, $runtime);
    }
}
