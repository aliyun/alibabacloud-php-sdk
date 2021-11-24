<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Rtc\V20180111\Models\AddRecordTemplateRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\AddRecordTemplateResponse;
use AlibabaCloud\SDK\Rtc\V20180111\Models\CreateAutoLiveStreamRuleRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\CreateAutoLiveStreamRuleResponse;
use AlibabaCloud\SDK\Rtc\V20180111\Models\CreateEventSubscribeRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\CreateEventSubscribeResponse;
use AlibabaCloud\SDK\Rtc\V20180111\Models\CreateMPULayoutRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\CreateMPULayoutResponse;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DeleteAutoLiveStreamRuleRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DeleteAutoLiveStreamRuleResponse;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DeleteEventSubscribeRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DeleteEventSubscribeResponse;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DeleteMPULayoutRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DeleteMPULayoutResponse;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DeleteRecordTemplateRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DeleteRecordTemplateResponse;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeAutoLiveStreamRuleRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeAutoLiveStreamRuleResponse;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeChannelParticipantsRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeChannelParticipantsResponse;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeChannelUsersRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeChannelUsersResponse;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeMPULayoutInfoListRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeMPULayoutInfoListResponse;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeRecordFilesRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeRecordFilesResponse;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeRecordTemplatesRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeRecordTemplatesResponse;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeUserInfoInChannelRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeUserInfoInChannelResponse;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DisableAutoLiveStreamRuleRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DisableAutoLiveStreamRuleResponse;
use AlibabaCloud\SDK\Rtc\V20180111\Models\EnableAutoLiveStreamRuleRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\EnableAutoLiveStreamRuleResponse;
use AlibabaCloud\SDK\Rtc\V20180111\Models\GetMPUTaskStatusRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\GetMPUTaskStatusResponse;
use AlibabaCloud\SDK\Rtc\V20180111\Models\ModifyMPULayoutRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\ModifyMPULayoutResponse;
use AlibabaCloud\SDK\Rtc\V20180111\Models\RemoveTerminalsRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\RemoveTerminalsResponse;
use AlibabaCloud\SDK\Rtc\V20180111\Models\StartMPUTaskRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\StartMPUTaskResponse;
use AlibabaCloud\SDK\Rtc\V20180111\Models\StartRecordTaskRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\StartRecordTaskResponse;
use AlibabaCloud\SDK\Rtc\V20180111\Models\StopChannelUserPublishRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\StopChannelUserPublishResponse;
use AlibabaCloud\SDK\Rtc\V20180111\Models\StopMPUTaskRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\StopMPUTaskResponse;
use AlibabaCloud\SDK\Rtc\V20180111\Models\StopRecordTaskRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\StopRecordTaskResponse;
use AlibabaCloud\SDK\Rtc\V20180111\Models\UpdateAutoLiveStreamRuleRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\UpdateAutoLiveStreamRuleResponse;
use AlibabaCloud\SDK\Rtc\V20180111\Models\UpdateMPUTaskRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\UpdateMPUTaskResponse;
use AlibabaCloud\SDK\Rtc\V20180111\Models\UpdateRecordTaskRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\UpdateRecordTaskResponse;
use AlibabaCloud\SDK\Rtc\V20180111\Models\UpdateRecordTemplateRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\UpdateRecordTemplateResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Rtc extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'central';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('rtc', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param AddRecordTemplateRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return AddRecordTemplateResponse
     */
    public function addRecordTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                       = [];
        $query['AppId']              = $request->appId;
        $query['BackgroundColor']    = $request->backgroundColor;
        $query['Backgrounds']        = $request->backgrounds;
        $query['ClockWidgets']       = $request->clockWidgets;
        $query['DelayStopTime']      = $request->delayStopTime;
        $query['EnableM3u8DateTime'] = $request->enableM3u8DateTime;
        $query['FileSplitInterval']  = $request->fileSplitInterval;
        $query['Formats']            = $request->formats;
        $query['HttpCallbackUrl']    = $request->httpCallbackUrl;
        $query['LayoutIds']          = $request->layoutIds;
        $query['MediaEncode']        = $request->mediaEncode;
        $query['MnsQueue']           = $request->mnsQueue;
        $query['Name']               = $request->name;
        $query['OssBucket']          = $request->ossBucket;
        $query['OssFilePrefix']      = $request->ossFilePrefix;
        $query['OwnerId']            = $request->ownerId;
        $query['TaskProfile']        = $request->taskProfile;
        $query['Watermarks']         = $request->watermarks;
        $req                         = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'AddRecordTemplate',
            'version'     => '2018-01-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return AddRecordTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddRecordTemplateRequest $request
     *
     * @return AddRecordTemplateResponse
     */
    public function addRecordTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addRecordTemplateWithOptions($request, $runtime);
    }

    /**
     * @param CreateAutoLiveStreamRuleRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return CreateAutoLiveStreamRuleResponse
     */
    public function createAutoLiveStreamRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                      = [];
        $query['AppId']             = $request->appId;
        $query['CallBack']          = $request->callBack;
        $query['ChannelIdPrefixes'] = $request->channelIdPrefixes;
        $query['ChannelIds']        = $request->channelIds;
        $query['MediaEncode']       = $request->mediaEncode;
        $query['OwnerId']           = $request->ownerId;
        $query['PlayDomain']        = $request->playDomain;
        $query['RuleName']          = $request->ruleName;
        $req                        = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'CreateAutoLiveStreamRule',
            'version'     => '2018-01-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateAutoLiveStreamRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateAutoLiveStreamRuleRequest $request
     *
     * @return CreateAutoLiveStreamRuleResponse
     */
    public function createAutoLiveStreamRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAutoLiveStreamRuleWithOptions($request, $runtime);
    }

    /**
     * @param CreateEventSubscribeRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return CreateEventSubscribeResponse
     */
    public function createEventSubscribeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                = [];
        $query['AppId']       = $request->appId;
        $query['CallbackUrl'] = $request->callbackUrl;
        $query['ChannelId']   = $request->channelId;
        $query['ClientToken'] = $request->clientToken;
        $query['Events']      = $request->events;
        $query['OwnerId']     = $request->ownerId;
        $query['Users']       = $request->users;
        $req                  = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'CreateEventSubscribe',
            'version'     => '2018-01-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateEventSubscribeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateEventSubscribeRequest $request
     *
     * @return CreateEventSubscribeResponse
     */
    public function createEventSubscribe($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createEventSubscribeWithOptions($request, $runtime);
    }

    /**
     * @param CreateMPULayoutRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CreateMPULayoutResponse
     */
    public function createMPULayoutWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                  = [];
        $query['AppId']         = $request->appId;
        $query['AudioMixCount'] = $request->audioMixCount;
        $query['Name']          = $request->name;
        $query['OwnerId']       = $request->ownerId;
        $query['Panes']         = $request->panes;
        $req                    = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'CreateMPULayout',
            'version'     => '2018-01-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateMPULayoutResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateMPULayoutRequest $request
     *
     * @return CreateMPULayoutResponse
     */
    public function createMPULayout($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createMPULayoutWithOptions($request, $runtime);
    }

    /**
     * @param DeleteAutoLiveStreamRuleRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DeleteAutoLiveStreamRuleResponse
     */
    public function deleteAutoLiveStreamRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query            = [];
        $query['AppId']   = $request->appId;
        $query['OwnerId'] = $request->ownerId;
        $query['RuleId']  = $request->ruleId;
        $req              = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DeleteAutoLiveStreamRule',
            'version'     => '2018-01-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteAutoLiveStreamRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteAutoLiveStreamRuleRequest $request
     *
     * @return DeleteAutoLiveStreamRuleResponse
     */
    public function deleteAutoLiveStreamRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAutoLiveStreamRuleWithOptions($request, $runtime);
    }

    /**
     * @param DeleteEventSubscribeRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DeleteEventSubscribeResponse
     */
    public function deleteEventSubscribeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                = [];
        $query['AppId']       = $request->appId;
        $query['OwnerId']     = $request->ownerId;
        $query['SubscribeId'] = $request->subscribeId;
        $req                  = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DeleteEventSubscribe',
            'version'     => '2018-01-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteEventSubscribeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteEventSubscribeRequest $request
     *
     * @return DeleteEventSubscribeResponse
     */
    public function deleteEventSubscribe($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteEventSubscribeWithOptions($request, $runtime);
    }

    /**
     * @param DeleteMPULayoutRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteMPULayoutResponse
     */
    public function deleteMPULayoutWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query             = [];
        $query['AppId']    = $request->appId;
        $query['LayoutId'] = $request->layoutId;
        $query['OwnerId']  = $request->ownerId;
        $req               = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DeleteMPULayout',
            'version'     => '2018-01-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteMPULayoutResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteMPULayoutRequest $request
     *
     * @return DeleteMPULayoutResponse
     */
    public function deleteMPULayout($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteMPULayoutWithOptions($request, $runtime);
    }

    /**
     * @param DeleteRecordTemplateRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DeleteRecordTemplateResponse
     */
    public function deleteRecordTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query               = [];
        $query['AppId']      = $request->appId;
        $query['OwnerId']    = $request->ownerId;
        $query['TemplateId'] = $request->templateId;
        $req                 = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DeleteRecordTemplate',
            'version'     => '2018-01-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteRecordTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteRecordTemplateRequest $request
     *
     * @return DeleteRecordTemplateResponse
     */
    public function deleteRecordTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteRecordTemplateWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAutoLiveStreamRuleRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeAutoLiveStreamRuleResponse
     */
    public function describeAutoLiveStreamRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query            = [];
        $query['AppId']   = $request->appId;
        $query['OwnerId'] = $request->ownerId;
        $req              = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeAutoLiveStreamRule',
            'version'     => '2018-01-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeAutoLiveStreamRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeAutoLiveStreamRuleRequest $request
     *
     * @return DescribeAutoLiveStreamRuleResponse
     */
    public function describeAutoLiveStreamRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAutoLiveStreamRuleWithOptions($request, $runtime);
    }

    /**
     * @param DescribeChannelParticipantsRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeChannelParticipantsResponse
     */
    public function describeChannelParticipantsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query              = [];
        $query['AppId']     = $request->appId;
        $query['ChannelId'] = $request->channelId;
        $query['Order']     = $request->order;
        $query['OwnerId']   = $request->ownerId;
        $query['PageNum']   = $request->pageNum;
        $query['PageSize']  = $request->pageSize;
        $req                = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeChannelParticipants',
            'version'     => '2018-01-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeChannelParticipantsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeChannelParticipantsRequest $request
     *
     * @return DescribeChannelParticipantsResponse
     */
    public function describeChannelParticipants($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeChannelParticipantsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeChannelUsersRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeChannelUsersResponse
     */
    public function describeChannelUsersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query              = [];
        $query['AppId']     = $request->appId;
        $query['ChannelId'] = $request->channelId;
        $query['OwnerId']   = $request->ownerId;
        $req                = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeChannelUsers',
            'version'     => '2018-01-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeChannelUsersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeChannelUsersRequest $request
     *
     * @return DescribeChannelUsersResponse
     */
    public function describeChannelUsers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeChannelUsersWithOptions($request, $runtime);
    }

    /**
     * @param DescribeMPULayoutInfoListRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeMPULayoutInfoListResponse
     */
    public function describeMPULayoutInfoListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query             = [];
        $query['AppId']    = $request->appId;
        $query['LayoutId'] = $request->layoutId;
        $query['Name']     = $request->name;
        $query['OwnerId']  = $request->ownerId;
        $query['PageNum']  = $request->pageNum;
        $query['PageSize'] = $request->pageSize;
        $req               = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeMPULayoutInfoList',
            'version'     => '2018-01-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeMPULayoutInfoListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeMPULayoutInfoListRequest $request
     *
     * @return DescribeMPULayoutInfoListResponse
     */
    public function describeMPULayoutInfoList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMPULayoutInfoListWithOptions($request, $runtime);
    }

    /**
     * @param DescribeRecordFilesRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeRecordFilesResponse
     */
    public function describeRecordFilesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query              = [];
        $query['AppId']     = $request->appId;
        $query['ChannelId'] = $request->channelId;
        $query['EndTime']   = $request->endTime;
        $query['OwnerId']   = $request->ownerId;
        $query['PageNum']   = $request->pageNum;
        $query['PageSize']  = $request->pageSize;
        $query['StartTime'] = $request->startTime;
        $query['TaskIds']   = $request->taskIds;
        $req                = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeRecordFiles',
            'version'     => '2018-01-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeRecordFilesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeRecordFilesRequest $request
     *
     * @return DescribeRecordFilesResponse
     */
    public function describeRecordFiles($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRecordFilesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeRecordTemplatesRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeRecordTemplatesResponse
     */
    public function describeRecordTemplatesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                = [];
        $query['AppId']       = $request->appId;
        $query['OwnerId']     = $request->ownerId;
        $query['PageNum']     = $request->pageNum;
        $query['PageSize']    = $request->pageSize;
        $query['TemplateIds'] = $request->templateIds;
        $req                  = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeRecordTemplates',
            'version'     => '2018-01-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeRecordTemplatesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeRecordTemplatesRequest $request
     *
     * @return DescribeRecordTemplatesResponse
     */
    public function describeRecordTemplates($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRecordTemplatesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeUserInfoInChannelRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeUserInfoInChannelResponse
     */
    public function describeUserInfoInChannelWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query              = [];
        $query['AppId']     = $request->appId;
        $query['ChannelId'] = $request->channelId;
        $query['OwnerId']   = $request->ownerId;
        $query['UserId']    = $request->userId;
        $req                = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeUserInfoInChannel',
            'version'     => '2018-01-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeUserInfoInChannelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeUserInfoInChannelRequest $request
     *
     * @return DescribeUserInfoInChannelResponse
     */
    public function describeUserInfoInChannel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeUserInfoInChannelWithOptions($request, $runtime);
    }

    /**
     * @param DisableAutoLiveStreamRuleRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DisableAutoLiveStreamRuleResponse
     */
    public function disableAutoLiveStreamRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query            = [];
        $query['AppId']   = $request->appId;
        $query['OwnerId'] = $request->ownerId;
        $query['RuleId']  = $request->ruleId;
        $req              = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DisableAutoLiveStreamRule',
            'version'     => '2018-01-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DisableAutoLiveStreamRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DisableAutoLiveStreamRuleRequest $request
     *
     * @return DisableAutoLiveStreamRuleResponse
     */
    public function disableAutoLiveStreamRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableAutoLiveStreamRuleWithOptions($request, $runtime);
    }

    /**
     * @param EnableAutoLiveStreamRuleRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return EnableAutoLiveStreamRuleResponse
     */
    public function enableAutoLiveStreamRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query            = [];
        $query['AppId']   = $request->appId;
        $query['OwnerId'] = $request->ownerId;
        $query['RuleId']  = $request->ruleId;
        $req              = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'EnableAutoLiveStreamRule',
            'version'     => '2018-01-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return EnableAutoLiveStreamRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param EnableAutoLiveStreamRuleRequest $request
     *
     * @return EnableAutoLiveStreamRuleResponse
     */
    public function enableAutoLiveStreamRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableAutoLiveStreamRuleWithOptions($request, $runtime);
    }

    /**
     * @param GetMPUTaskStatusRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetMPUTaskStatusResponse
     */
    public function getMPUTaskStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query            = [];
        $query['AppId']   = $request->appId;
        $query['OwnerId'] = $request->ownerId;
        $query['TaskId']  = $request->taskId;
        $req              = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'GetMPUTaskStatus',
            'version'     => '2018-01-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetMPUTaskStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetMPUTaskStatusRequest $request
     *
     * @return GetMPUTaskStatusResponse
     */
    public function getMPUTaskStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMPUTaskStatusWithOptions($request, $runtime);
    }

    /**
     * @param ModifyMPULayoutRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ModifyMPULayoutResponse
     */
    public function modifyMPULayoutWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                  = [];
        $query['AppId']         = $request->appId;
        $query['AudioMixCount'] = $request->audioMixCount;
        $query['LayoutId']      = $request->layoutId;
        $query['Name']          = $request->name;
        $query['OwnerId']       = $request->ownerId;
        $query['Panes']         = $request->panes;
        $req                    = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ModifyMPULayout',
            'version'     => '2018-01-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ModifyMPULayoutResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyMPULayoutRequest $request
     *
     * @return ModifyMPULayoutResponse
     */
    public function modifyMPULayout($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyMPULayoutWithOptions($request, $runtime);
    }

    /**
     * @param RemoveTerminalsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return RemoveTerminalsResponse
     */
    public function removeTerminalsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                = [];
        $query['AppId']       = $request->appId;
        $query['ChannelId']   = $request->channelId;
        $query['OwnerId']     = $request->ownerId;
        $query['TerminalIds'] = $request->terminalIds;
        $req                  = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'RemoveTerminals',
            'version'     => '2018-01-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RemoveTerminalsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RemoveTerminalsRequest $request
     *
     * @return RemoveTerminalsResponse
     */
    public function removeTerminals($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeTerminalsWithOptions($request, $runtime);
    }

    /**
     * @param StartMPUTaskRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return StartMPUTaskResponse
     */
    public function startMPUTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                              = [];
        $query['AppId']                     = $request->appId;
        $query['BackgroundColor']           = $request->backgroundColor;
        $query['Backgrounds']               = $request->backgrounds;
        $query['ChannelId']                 = $request->channelId;
        $query['ClockWidgets']              = $request->clockWidgets;
        $query['CropMode']                  = $request->cropMode;
        $query['LayoutIds']                 = $request->layoutIds;
        $query['MediaEncode']               = $request->mediaEncode;
        $query['MixMode']                   = $request->mixMode;
        $query['OwnerId']                   = $request->ownerId;
        $query['PayloadType']               = $request->payloadType;
        $query['ReportVad']                 = $request->reportVad;
        $query['RtpExtInfo']                = $request->rtpExtInfo;
        $query['SourceType']                = $request->sourceType;
        $query['StreamType']                = $request->streamType;
        $query['StreamURL']                 = $request->streamURL;
        $query['SubSpecAudioUsers']         = $request->subSpecAudioUsers;
        $query['SubSpecCameraUsers']        = $request->subSpecCameraUsers;
        $query['SubSpecShareScreenUsers']   = $request->subSpecShareScreenUsers;
        $query['SubSpecUsers']              = $request->subSpecUsers;
        $query['TaskId']                    = $request->taskId;
        $query['TaskType']                  = $request->taskType;
        $query['TimeStampRef']              = $request->timeStampRef;
        $query['UnsubSpecAudioUsers']       = $request->unsubSpecAudioUsers;
        $query['UnsubSpecCameraUsers']      = $request->unsubSpecCameraUsers;
        $query['UnsubSpecShareScreenUsers'] = $request->unsubSpecShareScreenUsers;
        $query['UserPanes']                 = $request->userPanes;
        $query['VadInterval']               = $request->vadInterval;
        $query['Watermarks']                = $request->watermarks;
        $req                                = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'StartMPUTask',
            'version'     => '2018-01-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StartMPUTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param StartMPUTaskRequest $request
     *
     * @return StartMPUTaskResponse
     */
    public function startMPUTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startMPUTaskWithOptions($request, $runtime);
    }

    /**
     * @param StartRecordTaskRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return StartRecordTaskResponse
     */
    public function startRecordTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                              = [];
        $query['AppId']                     = $request->appId;
        $query['ChannelId']                 = $request->channelId;
        $query['CropMode']                  = $request->cropMode;
        $query['LayoutIds']                 = $request->layoutIds;
        $query['MediaEncode']               = $request->mediaEncode;
        $query['MixMode']                   = $request->mixMode;
        $query['OwnerId']                   = $request->ownerId;
        $query['SourceType']                = $request->sourceType;
        $query['StreamType']                = $request->streamType;
        $query['SubSpecAudioUsers']         = $request->subSpecAudioUsers;
        $query['SubSpecCameraUsers']        = $request->subSpecCameraUsers;
        $query['SubSpecShareScreenUsers']   = $request->subSpecShareScreenUsers;
        $query['SubSpecUsers']              = $request->subSpecUsers;
        $query['TaskId']                    = $request->taskId;
        $query['TaskProfile']               = $request->taskProfile;
        $query['TemplateId']                = $request->templateId;
        $query['UnsubSpecAudioUsers']       = $request->unsubSpecAudioUsers;
        $query['UnsubSpecCameraUsers']      = $request->unsubSpecCameraUsers;
        $query['UnsubSpecShareScreenUsers'] = $request->unsubSpecShareScreenUsers;
        $query['UserPanes']                 = $request->userPanes;
        $req                                = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'StartRecordTask',
            'version'     => '2018-01-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return StartRecordTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param StartRecordTaskRequest $request
     *
     * @return StartRecordTaskResponse
     */
    public function startRecordTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startRecordTaskWithOptions($request, $runtime);
    }

    /**
     * @param StopChannelUserPublishRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return StopChannelUserPublishResponse
     */
    public function stopChannelUserPublishWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query              = [];
        $query['AppId']     = $request->appId;
        $query['ChannelId'] = $request->channelId;
        $query['OwnerId']   = $request->ownerId;
        $query['UserId']    = $request->userId;
        $req                = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'StopChannelUserPublish',
            'version'     => '2018-01-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return StopChannelUserPublishResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param StopChannelUserPublishRequest $request
     *
     * @return StopChannelUserPublishResponse
     */
    public function stopChannelUserPublish($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopChannelUserPublishWithOptions($request, $runtime);
    }

    /**
     * @param StopMPUTaskRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return StopMPUTaskResponse
     */
    public function stopMPUTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query            = [];
        $query['AppId']   = $request->appId;
        $query['OwnerId'] = $request->ownerId;
        $query['TaskId']  = $request->taskId;
        $req              = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'StopMPUTask',
            'version'     => '2018-01-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return StopMPUTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param StopMPUTaskRequest $request
     *
     * @return StopMPUTaskResponse
     */
    public function stopMPUTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopMPUTaskWithOptions($request, $runtime);
    }

    /**
     * @param StopRecordTaskRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return StopRecordTaskResponse
     */
    public function stopRecordTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query            = [];
        $query['AppId']   = $request->appId;
        $query['OwnerId'] = $request->ownerId;
        $query['TaskId']  = $request->taskId;
        $req              = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'StopRecordTask',
            'version'     => '2018-01-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return StopRecordTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param StopRecordTaskRequest $request
     *
     * @return StopRecordTaskResponse
     */
    public function stopRecordTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopRecordTaskWithOptions($request, $runtime);
    }

    /**
     * @param UpdateAutoLiveStreamRuleRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return UpdateAutoLiveStreamRuleResponse
     */
    public function updateAutoLiveStreamRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                      = [];
        $query['AppId']             = $request->appId;
        $query['CallBack']          = $request->callBack;
        $query['ChannelIdPrefixes'] = $request->channelIdPrefixes;
        $query['ChannelIds']        = $request->channelIds;
        $query['MediaEncode']       = $request->mediaEncode;
        $query['OwnerId']           = $request->ownerId;
        $query['PlayDomain']        = $request->playDomain;
        $query['RuleId']            = $request->ruleId;
        $query['RuleName']          = $request->ruleName;
        $req                        = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'UpdateAutoLiveStreamRule',
            'version'     => '2018-01-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateAutoLiveStreamRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateAutoLiveStreamRuleRequest $request
     *
     * @return UpdateAutoLiveStreamRuleResponse
     */
    public function updateAutoLiveStreamRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAutoLiveStreamRuleWithOptions($request, $runtime);
    }

    /**
     * @param UpdateMPUTaskRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return UpdateMPUTaskResponse
     */
    public function updateMPUTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                              = [];
        $query['AppId']                     = $request->appId;
        $query['BackgroundColor']           = $request->backgroundColor;
        $query['Backgrounds']               = $request->backgrounds;
        $query['ClockWidgets']              = $request->clockWidgets;
        $query['CropMode']                  = $request->cropMode;
        $query['LayoutIds']                 = $request->layoutIds;
        $query['MediaEncode']               = $request->mediaEncode;
        $query['MixMode']                   = $request->mixMode;
        $query['OwnerId']                   = $request->ownerId;
        $query['SourceType']                = $request->sourceType;
        $query['StreamType']                = $request->streamType;
        $query['SubSpecAudioUsers']         = $request->subSpecAudioUsers;
        $query['SubSpecCameraUsers']        = $request->subSpecCameraUsers;
        $query['SubSpecShareScreenUsers']   = $request->subSpecShareScreenUsers;
        $query['SubSpecUsers']              = $request->subSpecUsers;
        $query['TaskId']                    = $request->taskId;
        $query['UnsubSpecAudioUsers']       = $request->unsubSpecAudioUsers;
        $query['UnsubSpecCameraUsers']      = $request->unsubSpecCameraUsers;
        $query['UnsubSpecShareScreenUsers'] = $request->unsubSpecShareScreenUsers;
        $query['UserPanes']                 = $request->userPanes;
        $query['Watermarks']                = $request->watermarks;
        $req                                = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'UpdateMPUTask',
            'version'     => '2018-01-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateMPUTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateMPUTaskRequest $request
     *
     * @return UpdateMPUTaskResponse
     */
    public function updateMPUTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateMPUTaskWithOptions($request, $runtime);
    }

    /**
     * @param UpdateRecordTaskRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return UpdateRecordTaskResponse
     */
    public function updateRecordTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                              = [];
        $query['AppId']                     = $request->appId;
        $query['ChannelId']                 = $request->channelId;
        $query['LayoutIds']                 = $request->layoutIds;
        $query['OwnerId']                   = $request->ownerId;
        $query['SubSpecAudioUsers']         = $request->subSpecAudioUsers;
        $query['SubSpecCameraUsers']        = $request->subSpecCameraUsers;
        $query['SubSpecShareScreenUsers']   = $request->subSpecShareScreenUsers;
        $query['SubSpecUsers']              = $request->subSpecUsers;
        $query['TaskId']                    = $request->taskId;
        $query['TemplateId']                = $request->templateId;
        $query['UnsubSpecAudioUsers']       = $request->unsubSpecAudioUsers;
        $query['UnsubSpecCameraUsers']      = $request->unsubSpecCameraUsers;
        $query['UnsubSpecShareScreenUsers'] = $request->unsubSpecShareScreenUsers;
        $query['UserPanes']                 = $request->userPanes;
        $req                                = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'UpdateRecordTask',
            'version'     => '2018-01-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateRecordTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateRecordTaskRequest $request
     *
     * @return UpdateRecordTaskResponse
     */
    public function updateRecordTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateRecordTaskWithOptions($request, $runtime);
    }

    /**
     * @param UpdateRecordTemplateRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return UpdateRecordTemplateResponse
     */
    public function updateRecordTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                       = [];
        $query['AppId']              = $request->appId;
        $query['BackgroundColor']    = $request->backgroundColor;
        $query['Backgrounds']        = $request->backgrounds;
        $query['ClockWidgets']       = $request->clockWidgets;
        $query['DelayStopTime']      = $request->delayStopTime;
        $query['EnableM3u8DateTime'] = $request->enableM3u8DateTime;
        $query['FileSplitInterval']  = $request->fileSplitInterval;
        $query['Formats']            = $request->formats;
        $query['HttpCallbackUrl']    = $request->httpCallbackUrl;
        $query['LayoutIds']          = $request->layoutIds;
        $query['MediaEncode']        = $request->mediaEncode;
        $query['MnsQueue']           = $request->mnsQueue;
        $query['Name']               = $request->name;
        $query['OssBucket']          = $request->ossBucket;
        $query['OssFilePrefix']      = $request->ossFilePrefix;
        $query['OwnerId']            = $request->ownerId;
        $query['TaskProfile']        = $request->taskProfile;
        $query['TemplateId']         = $request->templateId;
        $query['Watermarks']         = $request->watermarks;
        $req                         = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'UpdateRecordTemplate',
            'version'     => '2018-01-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateRecordTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateRecordTemplateRequest $request
     *
     * @return UpdateRecordTemplateResponse
     */
    public function updateRecordTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateRecordTemplateWithOptions($request, $runtime);
    }
}
